<?php

namespace App\Admin\Controllers;

use App\Models\ApiChannels;
use App\Models\ApiDataCollectModel;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class ApiDataCollectController extends AdminController
{

    public $title = '数据池';
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new ApiDataCollectModel(), function (Grid $grid) {

            $grid->model()->orderBy('id', 'desc');
            $grid->column('id');
            $grid->column('channel_id')->display(function () {
                return $this->channel->channel_title;
            });
            $grid->column('name');
            $grid->column('mobile');
            $grid->column('price')->display(function () {

                return $this->price.'W';
            });
            $grid->column('tt', '资产')->display(function () {
                $data = [];
                if ($this->house) {
                    $data[] = '房子';
                }
                if ($this->car) {
                    $data[] = '车';
                }
                if ($this->insurance) {
                    $data[] = '保单';
                }
                if ($this->fund) {
                    $data[] = '公积金';
                }
                if ($this->socital) {
                    $data[] = '社保';
                }
                if ($this->credit_card) {
                    $data[] = '信用卡';
                }
                if ($this->wld) {
                    $data[] = '微粒贷';
                }
                if ($this->qyns) {
                    $data[] = '企业纳税';
                }
                if ($this->df) {
                    $data[] = '代发工资';
                }
                if ($this->business_license) {
                    $data[] = '营业执照';
                }
                return $data;
            })->label('success');
;
//            $grid->column('qyns');
//            $grid->column('df');
//            $grid->column('business_license');
            $grid->column('city');
            $grid->column('age');
            $grid->column('loan_periods');
            $grid->column('created_at');

            $grid->filter(function (Grid\Filter $filter) {
                $channelData = ApiChannels::select('id', 'channel_title')->orderBy('id', 'desc')->get()->toArray();
                foreach ($channelData as $k => $v) {
                    unset($channelData[$k]);
                    $channelData[$v['id']] = $v['channel_title'];
                }
                $filter->equal('channel_id', '渠道')->select($channelData);

                $filter->like('name');
                $filter->like('mobile');
            });
            $grid->disableActions();
            $grid->disableCreateButton();
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
        return Show::make($id, new ApiDataCollectModel(), function (Show $show) {
            $show->field('id');
            $show->field('channel_id');
            $show->field('name');
            $show->field('mobile');
            $show->field('price');
            $show->field('house');
            $show->field('car');
            $show->field('insurance');
            $show->field('fund');
            $show->field('socital');
            $show->field('credit_card');
            $show->field('wld');
            $show->field('qyns');
            $show->field('df');
            $show->field('business_license');
            $show->field('city');
            $show->field('age');
            $show->field('loan_periods');
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
        return Form::make(new ApiDataCollectModel(), function (Form $form) {
            $form->display('id');
            $form->text('channel_id');
            $form->text('name');
            $form->text('mobile');
            $form->text('price');
            $form->text('house');
            $form->text('car');
            $form->text('insurance');
            $form->text('fund');
            $form->text('socital');
            $form->text('credit_card');
            $form->text('wld');
            $form->text('qyns');
            $form->text('df');
            $form->text('business_license');
            $form->text('city');
            $form->text('age');
            $form->text('loan_periods');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
