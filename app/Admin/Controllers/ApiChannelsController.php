<?php

namespace App\Admin\Controllers;

use App\Models\ApiChannels;
use App\Tools\RsaTool;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class ApiChannelsController extends AdminController
{

    public $title = '渠道列表';
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new ApiChannels(), function (Grid $grid) {

            $grid->model()->orderBy('id', 'desc');
            $grid->column('id');
            $grid->column('channel_title', '渠道名称');
            $grid->column('channel_name', '渠道标签');
            $grid->column('channel_type' , '渠道类型')->display(function () {

                if ($this->channel_type == 1) {
                    return '外站请求本站';
                }else{
                    return '本站请求外站';
                }
            });
            $grid->column('status', '状态')->switch();
            $grid->column('updated_at', '更新时间');

            $grid->actions(function (Grid\Displayers\Actions $actions) {
                // append一个操作
                $key = encrypt($actions->getKey());
                $actions->append('<a target="_blank" href="/api-doc?i='.$key.'">查看API文档</a>');
            });

            $grid->disableViewButton();
            $grid->filter(function (Grid\Filter $filter) {
//                $filter->equal('id');
                $filter->like('channel_title', '渠道名称');
            });

        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new ApiChannels(), function (Show $show) {
            $show->field('id');
            $show->field('channel_title');
            $show->field('channel_name');
            $show->field('channel_type');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new ApiChannels(), function (Form $form) {
            $form->display('id');
            $form->text('channel_title', '渠道名称')->required();

            $form->text('channel_name', '渠道标签')
                ->creationRules(['required', "unique:api_channels"])
                ->updateRules(['required', "unique:api_channels,api_channels,{{id}}"])
                ->required();

            $form->radio('channel_type', '渠道类型')->options([
                1 => '外站请求本站',
                2 => '本站请求外站'
            ])->default(1);

            $form->switch('status', '状态')->default(1);
            $form->display('created_at');
            $form->display('updated_at');
            $form->hidden('encrypt_public_key');
            $form->hidden('encrypt_private_key');

            $form->saving(function (Form $form) {

                if ($form->isCreating()) {
                    $keys = RsaTool::getKeys();
                    $form->input('encrypt_public_key', $keys['public_key']);
                    $form->input('encrypt_private_key', $keys['private_key']);
                }

            });

            $form->disableViewCheck();
            $form->disableResetButton();
            $form->disableEditingCheck();
            $form->disableCreatingCheck();
        });
    }
}
