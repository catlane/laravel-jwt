<?php
/**
 * Created by PhpStorm.
 * User: root
 * DateTime:2023-07-07 14:03:41
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * xw_user_applyloan
/**
 * @property string brand 公司品牌区分：1-助贷网 2-闪钱袋
 * @property string managerid
 * @property string truename 真实姓名
 * @property string age 年龄
 * @property string sex 性别：1男2女
 * @property string cityid 城市ID
 * @property string city 城市名
 * @property string mobile 手机号
 * @property string mobile_old 旧号码(更换秘钥前的号码)
 * @property string is_changekey 是否更换秘钥：0否1是
 * @property string callkefuid 电话客服ID
 * @property string callkefu_name 电话客服姓名
 * @property string kefu_type 客服类型(xw,zdh)
 * @property string kefuid 客服ID
 * @property string kefu_name 客服姓名
 * @property string department_bcompany 所属分公司名称
 * @property string department_big 对应顾问所属大区
 * @property string department 所在部门
 * @property string old_kefuid 旧客服ID
 * @property string zdhkefu_id 助贷汇客服ID
 * @property string zdhkefu_name 助贷汇客服名称
 * @property string hezuo_kefuid 合作客服ID
 * @property string qudaoid 渠道ID
 * @property string sem_type 推广类型(xw,zdh)
 * @property string repeat_mobilenum 号码重复数
 * @property string loan_money 贷款额度
 * @property string house 有无房产
 * @property string car 是否有车
 * @property string gongjijin 是否有公积金：有，无
 * @property string sign_is 是否签约：0未处理1是2否
 * @property string facetalk_is 是否上门面谈：0未处理1是2否
 * @property string baodan_is 有无保单：有、无
 * @property string source_type1 分类1(如 信用贷、抵押贷)
 * @property string datatype 数据类型：0普通数据1精准合作数据(如卖给普惠,自身不用这数据)
 * @property string isuse 是否已经进入中转站：0否1是
 * @property string qudao_ch_big 进线渠道名称
 * @property string sem_platform SEM推广平台
 * @property string source 来源
 * @property string sem_username 来源负责运营人员
 * @property string zdorqdb 助贷汇数据还是qdaibao数据：0助贷1qdaibao
 * @property string zdorqdb_move 是否助贷和Q贷宝之间转换的数据：0:普通情况 1:助贷转Q贷宝 2:Q贷宝转助贷
 * @property string ip
 * @property string stars 用户星级
 * @property string status 处理状态：0已受理1资质不符2待签约3已签约4已放款5银行已拒绝6审核中7待跟进8已上门9捣乱申请10重复申请11外地申请12暂不需要13无人接听14客户挂断15占线16关机17空号18无法接听19稍后联系
 * @property string ggc_type 再分配类型：1离职客服，2备注2月未更新，3错误城市
 * @property string bank_money 银行实际放款
 * @property string work_wage_give_type 工资发放形式
 * @property string work_shebao 社保公积金情况
 * @property string towho 接受数据方名称(我们传数据给第三方专用)
 * @property string huodongcode 活动编码
 * @property string is_hezuodata 是否合作渠道数据：0否1是
 * @property string is_zhudai888 是否助贷888，借了吧等的数据：0否，1助贷888，2借了吧，3钱袋侠
 * @property string is_sendsms 是否发送短信：0否1是（专供综拓每日发送2万条短信使用，短期字段，后期会删除）
 * @property string is_again 是否再分配：0否1是
 * @property string is_noto_ggc 是否锁定不进入到公共池：0否1是（1代表不进入公共池）
 * @property string is_again_undo 再分配是否已处理(0否1是)
 * @property string is_move_read 是否已读：0否1是
 * @property string is_read_reviews 主管点评是否已读：0否1是
 * @property string is_important 重要客户：0否1是
 * @property string is_jingshouzhi 是否计算经手值：0否1是
 * @property string is_del 是否删除：0未删除1已删除
 * @property string remark_updatetime 备注更新时间
 * @property string is_ggc_remark_updatetime 是否公共池更新了备注时间：0否1是
 * @property string remark_updatetime_copy 记录remark_updatetime的值，数据在进入公共池时记录之前的时间，以便查阅是否进入公共池有误
 * @property string last_remark_updatetime 备注最后更新时间
 * @property string move_time 再分配转移时间
 * @property string facetalk_day 上门面谈时间（天）
 * @property string facetalk_arrival_time 上门到店具体时间
 * @property string day 数据入库日期
 * @property string is_give 是否为赠送：0否，1是
 * @property string is_in_interchange 是否写入保险中转站（0：未写入1：已写入）
 * @property string is_baoxian_gx 保险是否勾选1：勾选、0：不勾选
 * @property string weili 微粒贷：0：无 1：5000 2：10000 3：20000 4：30000 5：50000 6：50000以上
 * @property string zhima 芝麻信用分1：350~550、2：550~650、3：650以上、4：其他
 * @property string is_copy 品牌间的数据复制：1助转闪，2闪转助
 * @property string is_qyd 是否为企业贷：0否，1是
 * @property string grade 纳税信用评级：1、A级，2、B级，3、C级，4、D级，5、M级
 * @property string is_syn 是否跨平台同步过脚本，1：同步过，2：未同步过
 * @property string source_platform 数据来源平台，1：来源为助贷，2：来源为保险
 * @property string from_oldggc_time 从*_aaoldggc表转移过来的时间
 * @property string check_num 渠道验证码证明
 * @property string time
 * @property string ismigrate 是否是存量迁移数据
 * @property string issendhz 是否已发送杭州
 * @property string is_stock 是否是昨天存量
 * @property string is_gd_source 是否固定渠道
 * @property string md5mobile mo5手机号
 * @property string aescryptfor360 融360手机验证
 * @property string md5mobileto8 mo5闁归潧顑嗗┃鈧柛娆忓槻婢?濞?
 * @property string test
 * @property string md5mobileto9
 * @property string test2
 * @property string konghao_remark_times 空号备注次数
 * @property string source_id 原系统编号
 */
class XwUserApplyloanModel extends Model
{
    protected $table = 'xw_user_applyloan';

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $fillable = [
        'brand',#公司品牌区分：1-助贷网 2-闪钱袋
        'managerid',#
        'truename',#真实姓名
        'age',#年龄
        'sex',#性别：1男2女
        'cityid',#城市ID
        'city',#城市名
        'mobile',#手机号
        'mobile_old',#旧号码(更换秘钥前的号码)
        'is_changekey',#是否更换秘钥：0否1是
        'callkefuid',#电话客服ID
        'callkefu_name',#电话客服姓名
        'kefu_type',#客服类型(xw,zdh)
        'kefuid',#客服ID
        'kefu_name',#客服姓名
        'department_bcompany',#所属分公司名称
        'department_big',#对应顾问所属大区
        'department',#所在部门
        'old_kefuid',#旧客服ID
        'zdhkefu_id',#助贷汇客服ID
        'zdhkefu_name',#助贷汇客服名称
        'hezuo_kefuid',#合作客服ID
        'qudaoid',#渠道ID
        'sem_type',#推广类型(xw,zdh)
        'repeat_mobilenum',#号码重复数
        'loan_money',#贷款额度
        'house',#有无房产
        'car',#是否有车
        'gongjijin',#是否有公积金：有，无
        'sign_is',#是否签约：0未处理1是2否
        'facetalk_is',#是否上门面谈：0未处理1是2否
        'baodan_is',#有无保单：有、无
        'source_type1',#分类1(如 信用贷、抵押贷)
        'datatype',#数据类型：0普通数据1精准合作数据(如卖给普惠,自身不用这数据)
        'isuse',#是否已经进入中转站：0否1是
        'qudao_ch_big',#进线渠道名称
        'sem_platform',#SEM推广平台
        'source',#来源
        'sem_username',#来源负责运营人员
        'zdorqdb',#助贷汇数据还是qdaibao数据：0助贷1qdaibao
        'zdorqdb_move',#是否助贷和Q贷宝之间转换的数据：0:普通情况 1:助贷转Q贷宝 2:Q贷宝转助贷
        'ip',#
        'stars',#用户星级
        'status',#处理状态：0已受理1资质不符2待签约3已签约4已放款5银行已拒绝6审核中7待跟进8已上门9捣乱申请10重复申请11外地申请12暂不需要13无人接听14客户挂断15占线16关机17空号18无法接听19稍后联系
        'ggc_type',#再分配类型：1离职客服，2备注2月未更新，3错误城市
        'bank_money',#银行实际放款
        'work_wage_give_type',#工资发放形式
        'work_shebao',#社保公积金情况
        'towho',#接受数据方名称(我们传数据给第三方专用)
        'huodongcode',#活动编码
        'is_hezuodata',#是否合作渠道数据：0否1是
        'is_zhudai888',#是否助贷888，借了吧等的数据：0否，1助贷888，2借了吧，3钱袋侠
        'is_sendsms',#是否发送短信：0否1是（专供综拓每日发送2万条短信使用，短期字段，后期会删除）
        'is_again',#是否再分配：0否1是
        'is_noto_ggc',#是否锁定不进入到公共池：0否1是（1代表不进入公共池）
        'is_again_undo',#再分配是否已处理(0否1是)
        'is_move_read',#是否已读：0否1是
        'is_read_reviews',#主管点评是否已读：0否1是
        'is_important',#重要客户：0否1是
        'is_jingshouzhi',#是否计算经手值：0否1是
        'is_del',#是否删除：0未删除1已删除
        'remark_updatetime',#备注更新时间
        'is_ggc_remark_updatetime',#是否公共池更新了备注时间：0否1是
        'remark_updatetime_copy',#记录remark_updatetime的值，数据在进入公共池时记录之前的时间，以便查阅是否进入公共池有误
        'last_remark_updatetime',#备注最后更新时间
        'move_time',#再分配转移时间
        'facetalk_day',#上门面谈时间（天）
        'facetalk_arrival_time',#上门到店具体时间
        'day',#数据入库日期
        'is_give',#是否为赠送：0否，1是
        'is_in_interchange',#是否写入保险中转站（0：未写入1：已写入）
        'is_baoxian_gx',#保险是否勾选1：勾选、0：不勾选
        'weili',#微粒贷：0：无 1：5000 2：10000 3：20000 4：30000 5：50000 6：50000以上
        'zhima',#芝麻信用分1：350~550、2：550~650、3：650以上、4：其他
        'is_copy',#品牌间的数据复制：1助转闪，2闪转助
        'is_qyd',#是否为企业贷：0否，1是
        'grade',#纳税信用评级：1、A级，2、B级，3、C级，4、D级，5、M级
        'is_syn',#是否跨平台同步过脚本，1：同步过，2：未同步过
        'source_platform',#数据来源平台，1：来源为助贷，2：来源为保险
        'from_oldggc_time',#从*_aaoldggc表转移过来的时间
        'check_num',#渠道验证码证明
        'time',#
        'ismigrate',#是否是存量迁移数据
        'issendhz',#是否已发送杭州
        'is_stock',#是否是昨天存量
        'is_gd_source',#是否固定渠道
        'md5mobile',#mo5手机号
        'aescryptfor360',#融360手机验证
        'md5mobileto8',#mo5闁归潧顑嗗┃鈧柛娆忓槻婢?濞?
        'test',#
        'md5mobileto9',#
        'test2',#
        'konghao_remark_times',#空号备注次数
        'source_id',#原系统编号
    ];

    protected function createField(){
        return [
        'brand' => '',#公司品牌区分：1-助贷网 2-闪钱袋
        'managerid' => '',#
        'truename' => '',#真实姓名
        'age' => '',#年龄
        'sex' => '',#性别：1男2女
        'cityid' => '',#城市ID
        'city' => '',#城市名
        'mobile' => '',#手机号
        'mobile_old' => '',#旧号码(更换秘钥前的号码)
        'is_changekey' => '',#是否更换秘钥：0否1是
        'callkefuid' => '',#电话客服ID
        'callkefu_name' => '',#电话客服姓名
        'kefu_type' => '',#客服类型(xw,zdh)
        'kefuid' => '',#客服ID
        'kefu_name' => '',#客服姓名
        'department_bcompany' => '',#所属分公司名称
        'department_big' => '',#对应顾问所属大区
        'department' => '',#所在部门
        'old_kefuid' => '',#旧客服ID
        'zdhkefu_id' => '',#助贷汇客服ID
        'zdhkefu_name' => '',#助贷汇客服名称
        'hezuo_kefuid' => '',#合作客服ID
        'qudaoid' => '',#渠道ID
        'sem_type' => '',#推广类型(xw,zdh)
        'repeat_mobilenum' => '',#号码重复数
        'loan_money' => '',#贷款额度
        'house' => '',#有无房产
        'car' => '',#是否有车
        'gongjijin' => '',#是否有公积金：有，无
        'sign_is' => '',#是否签约：0未处理1是2否
        'facetalk_is' => '',#是否上门面谈：0未处理1是2否
        'baodan_is' => '',#有无保单：有、无
        'source_type1' => '',#分类1(如 信用贷、抵押贷)
        'datatype' => '',#数据类型：0普通数据1精准合作数据(如卖给普惠,自身不用这数据)
        'isuse' => '',#是否已经进入中转站：0否1是
        'qudao_ch_big' => '',#进线渠道名称
        'sem_platform' => '',#SEM推广平台
        'source' => '',#来源
        'sem_username' => '',#来源负责运营人员
        'zdorqdb' => '',#助贷汇数据还是qdaibao数据：0助贷1qdaibao
        'zdorqdb_move' => '',#是否助贷和Q贷宝之间转换的数据：0:普通情况 1:助贷转Q贷宝 2:Q贷宝转助贷
        'ip' => '',#
        'stars' => '',#用户星级
        'status' => '',#处理状态：0已受理1资质不符2待签约3已签约4已放款5银行已拒绝6审核中7待跟进8已上门9捣乱申请10重复申请11外地申请12暂不需要13无人接听14客户挂断15占线16关机17空号18无法接听19稍后联系
        'ggc_type' => '',#再分配类型：1离职客服，2备注2月未更新，3错误城市
        'bank_money' => '',#银行实际放款
        'work_wage_give_type' => '',#工资发放形式
        'work_shebao' => '',#社保公积金情况
        'towho' => '',#接受数据方名称(我们传数据给第三方专用)
        'huodongcode' => '',#活动编码
        'is_hezuodata' => '',#是否合作渠道数据：0否1是
        'is_zhudai888' => '',#是否助贷888，借了吧等的数据：0否，1助贷888，2借了吧，3钱袋侠
        'is_sendsms' => '',#是否发送短信：0否1是（专供综拓每日发送2万条短信使用，短期字段，后期会删除）
        'is_again' => '',#是否再分配：0否1是
        'is_noto_ggc' => '',#是否锁定不进入到公共池：0否1是（1代表不进入公共池）
        'is_again_undo' => '',#再分配是否已处理(0否1是)
        'is_move_read' => '',#是否已读：0否1是
        'is_read_reviews' => '',#主管点评是否已读：0否1是
        'is_important' => '',#重要客户：0否1是
        'is_jingshouzhi' => '',#是否计算经手值：0否1是
        'is_del' => '',#是否删除：0未删除1已删除
        'remark_updatetime' => '',#备注更新时间
        'is_ggc_remark_updatetime' => '',#是否公共池更新了备注时间：0否1是
        'remark_updatetime_copy' => '',#记录remark_updatetime的值，数据在进入公共池时记录之前的时间，以便查阅是否进入公共池有误
        'last_remark_updatetime' => '',#备注最后更新时间
        'move_time' => '',#再分配转移时间
        'facetalk_day' => '',#上门面谈时间（天）
        'facetalk_arrival_time' => '',#上门到店具体时间
        'day' => '',#数据入库日期
        'is_give' => '',#是否为赠送：0否，1是
        'is_in_interchange' => '',#是否写入保险中转站（0：未写入1：已写入）
        'is_baoxian_gx' => '',#保险是否勾选1：勾选、0：不勾选
        'weili' => '0',#微粒贷：0：无 1：5000 2：10000 3：20000 4：30000 5：50000 6：50000以上
        'zhima' => '0',#芝麻信用分1：350~550、2：550~650、3：650以上、4：其他
        'is_copy' => '0',#品牌间的数据复制：1助转闪，2闪转助
        'is_qyd' => '',#是否为企业贷：0否，1是
        'grade' => '',#纳税信用评级：1、A级，2、B级，3、C级，4、D级，5、M级
        'is_syn' => '',#是否跨平台同步过脚本，1：同步过，2：未同步过
        'source_platform' => '',#数据来源平台，1：来源为助贷，2：来源为保险
        'from_oldggc_time' => '',#从*_aaoldggc表转移过来的时间
        'check_num' => '',#渠道验证码证明
        'time' => '',#
        'ismigrate' => '0',#是否是存量迁移数据
        'issendhz' => '',#是否已发送杭州
        'is_stock' => '0',#是否是昨天存量
        'is_gd_source' => '0',#是否固定渠道
        'md5mobile' => '',#mo5手机号
        'aescryptfor360' => '',#融360手机验证
        'md5mobileto8' => '',#mo5闁归潧顑嗗┃鈧柛娆忓槻婢?濞?
        'test' => '',#
        'md5mobileto9' => '',#
        'test2' => '',#
        'konghao_remark_times' => '',#空号备注次数
        'source_id' => '',#原系统编号
    ];
    }


}
