<?php
/**
 * Created by PhpStorm.
 * User: root
 * DateTime:2023-07-20 16:35:59
 */

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Model;

/**
 *
/**
 * @property string channel_id 渠道ID
 * @property string name 姓名
 * @property string mobile 手机号
 * @property string price 贷款金额
 * @property string house 房子【1有 0 没有】
 * @property string car 车【1有 0 没有】
 * @property string insurance 保单【1有 0 没有】
 * @property string fund 公积金【1有 0 没有】
 * @property string socital 社保【1有 0 没有】
 * @property string credit_card 信用卡【1有 0 没有】
 * @property string wld 微粒贷【1有 0 没有】
 * @property string qyns 企业纳税【1有 0 没有】
 * @property string df 代发工资【1有 0 没有】
 * @property string business_license 营业执照【1有 0 没有】
 * @property string city 城市
 * @property string age 年龄
 * @property string loan_periods 贷款期限
 * @property string created_at
 * @property string updated_at
 */
class ApiDataCollectModel extends Model
{
    protected $table = 'api_data_collect';

    protected $primaryKey = 'id';
    use HasDateTimeFormatter;


    protected $connection = 'mysql';



    protected $fillable = [
        'channel_id',#渠道ID
        'name',#姓名
        'mobile',#手机号
        'price',#贷款金额
        'house',#房子【1有 0 没有】
        'car',#车【1有 0 没有】
        'insurance',#保单【1有 0 没有】
        'fund',#公积金【1有 0 没有】
        'socital',#社保【1有 0 没有】
        'credit_card',#信用卡【1有 0 没有】
        'wld',#微粒贷【1有 0 没有】
        'qyns',#企业纳税【1有 0 没有】
        'df',#代发工资【1有 0 没有】
        'business_license',#营业执照【1有 0 没有】
        'city',#城市
        'age',#年龄
        'loan_periods',#贷款期限
        'created_at',#
        'updated_at',#
    ];


    public function channel()
    {
        return $this->hasOne(ApiChannels::class, 'id', 'channel_id');
    }
    protected function createField(){
        return [
        'channel_id' => '',#渠道ID
        'name' => '',#姓名
        'mobile' => '',#手机号
        'price' => '',#贷款金额
        'house' => '',#房子【1有 0 没有】
        'car' => '',#车【1有 0 没有】
        'insurance' => '',#保单【1有 0 没有】
        'fund' => '',#公积金【1有 0 没有】
        'socital' => '',#社保【1有 0 没有】
        'credit_card' => '',#信用卡【1有 0 没有】
        'wld' => '',#微粒贷【1有 0 没有】
        'qyns' => '',#企业纳税【1有 0 没有】
        'df' => '',#代发工资【1有 0 没有】
        'business_license' => '',#营业执照【1有 0 没有】
        'city' => '',#城市
        'age' => '',#年龄
        'loan_periods' => '',#贷款期限
        'created_at' => '',#
        'updated_at' => '',#
    ];
    }


}
