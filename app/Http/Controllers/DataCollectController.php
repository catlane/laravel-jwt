<?php

namespace App\Http\Controllers;

use App\Models\ApiChannels;
use App\Models\ApiDataCollectModel;
use App\Models\XwUserApplyloanModel;
use App\Tools\RsaTool;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class DataCollectController extends Controller
{

    public function create(Request $request)
    {

        $channelName = $request->get('channel_name');
        if (!$channelName) {
            throw new \App\Exceptions\OverHandler('渠道不能为空', '400');
        }
        $channelModel = ApiChannels::where('channel_name', $channelName)->first();
        if (!$channelModel) {
            throw new \App\Exceptions\OverHandler('未找到当前渠道', '400');
        }
        if (!$channelModel->status) {
            throw new \App\Exceptions\OverHandler('渠道已关闭', '400');
        }

        $curlData = file_get_contents('php://input');
        $requestData = RsaTool::privateDecrypt($curlData, $channelModel->encrypt_private_key);
        if (!is_array($requestData)) {
            if ($request->get('debug')) {
                throw new \App\Exceptions\OverHandler('加密参数错误', '400', $requestData);
            }
            throw new \App\Exceptions\OverHandler('加密参数错误', '400');
        }

        $validator = Validator::make($requestData, [
            'name' => 'required',
            'mobile' => 'required',
            'price' => 'required',

            'house' => 'required',
            'car' => 'required',
            'insurance' => 'required',
            'fund' => 'required',
            'socital' => 'required',
            'credit_card' => 'required',
            'wld' => 'required',
            'qyns' => 'required',
            'df' => 'required',
            'business_license' => 'required',
            'city' => 'required',
            'age' => 'required',
            'loan_periods' => 'required',
        ], [
            'required' => ':attribute 参数不可为空.',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            throw new \App\Exceptions\OverHandler($errors->first(), 400);
        }


        if (!preg_match("/^1[34578]{1}\d{9}$/", $requestData['mobile'])) {
            throw new \App\Exceptions\OverHandler('手机号非法', 400);
        }


        $mobile = enjiami($requestData['mobile']);

        if (XwUserApplyloanModel::where('mobile', $mobile)->first() || ApiDataCollectModel::where('mobile', $requestData['mobile'])->first()) {
            throw new \App\Exceptions\OverHandler('手机号已存在', 400);
        }

        //先获取渠道
        $requestData['channel_id'] = $channelModel->id;

        ApiDataCollectModel::create($requestData);

        return [
            'msg' => '添加成功',
            'data' => $request->get('debug') ? $requestData : []
        ];
    }


    /**
     * 返回文档
     */
    public function apiDoc()
    {
        $key = request()->get('i');
        $key = decrypt($key);
        if (!$key) {
            echo '权限校验失败';
            die;
        }
        //获取

        $channelModel = ApiChannels::find($key);
        if (!$channelModel) {
            echo '权限校验失败';
            die;
        }
        if (!$channelModel->status) {
            echo '该渠道已关闭';
            die;
        }
//        echo '<pre>';print_r($channelModel->toArray());die;
//        return view('api_doc', ['channel_title' => 12323]);
        return view('api_doc', $channelModel->toArray());
    }
}
