<?php

/**
 * A helper file for Dcat Admin, to provide autocomplete information to your IDE
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author jqh <841324345@qq.com>
 */
namespace Dcat\Admin {
    use Illuminate\Support\Collection;

    /**
     * @property Grid\Column|Collection created_at
     * @property Grid\Column|Collection detail
     * @property Grid\Column|Collection id
     * @property Grid\Column|Collection name
     * @property Grid\Column|Collection type
     * @property Grid\Column|Collection updated_at
     * @property Grid\Column|Collection version
     * @property Grid\Column|Collection is_enabled
     * @property Grid\Column|Collection extension
     * @property Grid\Column|Collection icon
     * @property Grid\Column|Collection order
     * @property Grid\Column|Collection parent_id
     * @property Grid\Column|Collection uri
     * @property Grid\Column|Collection menu_id
     * @property Grid\Column|Collection permission_id
     * @property Grid\Column|Collection http_method
     * @property Grid\Column|Collection http_path
     * @property Grid\Column|Collection slug
     * @property Grid\Column|Collection role_id
     * @property Grid\Column|Collection user_id
     * @property Grid\Column|Collection value
     * @property Grid\Column|Collection avatar
     * @property Grid\Column|Collection password
     * @property Grid\Column|Collection remember_token
     * @property Grid\Column|Collection username
     * @property Grid\Column|Collection channel_name
     * @property Grid\Column|Collection channel_title
     * @property Grid\Column|Collection channel_type
     * @property Grid\Column|Collection encrypt_private_key
     * @property Grid\Column|Collection encrypt_public_key
     * @property Grid\Column|Collection status
     * @property Grid\Column|Collection age
     * @property Grid\Column|Collection business_license
     * @property Grid\Column|Collection car
     * @property Grid\Column|Collection channel_id
     * @property Grid\Column|Collection city
     * @property Grid\Column|Collection credit_card
     * @property Grid\Column|Collection df
     * @property Grid\Column|Collection fund
     * @property Grid\Column|Collection house
     * @property Grid\Column|Collection insurance
     * @property Grid\Column|Collection loan_periods
     * @property Grid\Column|Collection mobile
     * @property Grid\Column|Collection price
     * @property Grid\Column|Collection qyns
     * @property Grid\Column|Collection socital
     * @property Grid\Column|Collection wld
     * @property Grid\Column|Collection g_description
     * @property Grid\Column|Collection g_id
     * @property Grid\Column|Collection g_name
     * @property Grid\Column|Collection a_account
     * @property Grid\Column|Collection a_brands
     * @property Grid\Column|Collection a_city
     * @property Grid\Column|Collection a_cityid
     * @property Grid\Column|Collection a_department
     * @property Grid\Column|Collection a_gid
     * @property Grid\Column|Collection a_id
     * @property Grid\Column|Collection a_ispermit
     * @property Grid\Column|Collection a_logip
     * @property Grid\Column|Collection a_logtime
     * @property Grid\Column|Collection a_managerids
     * @property Grid\Column|Collection a_number
     * @property Grid\Column|Collection a_password
     * @property Grid\Column|Collection a_regtime
     * @property Grid\Column|Collection a_tel
     * @property Grid\Column|Collection a_tel2
     * @property Grid\Column|Collection a_username
     * @property Grid\Column|Collection is_changekey
     * @property Grid\Column|Collection m_id
     * @property Grid\Column|Collection m_isview
     * @property Grid\Column|Collection m_locality
     * @property Grid\Column|Collection m_name
     * @property Grid\Column|Collection m_parentid
     * @property Grid\Column|Collection m_url
     * @property Grid\Column|Collection ip
     * @property Grid\Column|Collection reqpath
     * @property Grid\Column|Collection time
     * @property Grid\Column|Collection uagent
     * @property Grid\Column|Collection uid
     * @property Grid\Column|Collection p_gid
     * @property Grid\Column|Collection p_id
     * @property Grid\Column|Collection p_rid
     * @property Grid\Column|Collection ipcity
     * @property Grid\Column|Collection is_del
     * @property Grid\Column|Collection liulanqi_type
     * @property Grid\Column|Collection loan_type
     * @property Grid\Column|Collection mobilecity
     * @property Grid\Column|Collection truename
     * @property Grid\Column|Collection dc_onlymobile_id
     * @property Grid\Column|Collection p_json_data
     * @property Grid\Column|Collection r_json_data
     * @property Grid\Column|Collection connection
     * @property Grid\Column|Collection exception
     * @property Grid\Column|Collection failed_at
     * @property Grid\Column|Collection payload
     * @property Grid\Column|Collection queue
     * @property Grid\Column|Collection uuid
     * @property Grid\Column|Collection citycode
     * @property Grid\Column|Collection cityname
     * @property Grid\Column|Collection email
     * @property Grid\Column|Collection token
     * @property Grid\Column|Collection abilities
     * @property Grid\Column|Collection expires_at
     * @property Grid\Column|Collection last_used_at
     * @property Grid\Column|Collection tokenable_id
     * @property Grid\Column|Collection tokenable_type
     * @property Grid\Column|Collection district
     * @property Grid\Column|Collection province
     * @property Grid\Column|Collection config_classify_id
     * @property Grid\Column|Collection config_key
     * @property Grid\Column|Collection config_name
     * @property Grid\Column|Collection extra
     * @property Grid\Column|Collection help
     * @property Grid\Column|Collection range_extra
     * @property Grid\Column|Collection required
     * @property Grid\Column|Collection classify_name
     * @property Grid\Column|Collection scene
     * @property Grid\Column|Collection sort
     * @property Grid\Column|Collection full_name
     * @property Grid\Column|Collection id_card
     * @property Grid\Column|Collection id_card_front
     * @property Grid\Column|Collection id_card_opposite
     * @property Grid\Column|Collection nickname
     * @property Grid\Column|Collection phone
     * @property Grid\Column|Collection balance
     * @property Grid\Column|Collection aescryptfor360
     * @property Grid\Column|Collection bank_money
     * @property Grid\Column|Collection baodan_is
     * @property Grid\Column|Collection brand
     * @property Grid\Column|Collection callkefu_name
     * @property Grid\Column|Collection callkefuid
     * @property Grid\Column|Collection check_num
     * @property Grid\Column|Collection cityid
     * @property Grid\Column|Collection data_d
     * @property Grid\Column|Collection datatype
     * @property Grid\Column|Collection day
     * @property Grid\Column|Collection department
     * @property Grid\Column|Collection department_bcompany
     * @property Grid\Column|Collection department_big
     * @property Grid\Column|Collection facetalk_arrival_time
     * @property Grid\Column|Collection facetalk_day
     * @property Grid\Column|Collection facetalk_is
     * @property Grid\Column|Collection from_oldggc_time
     * @property Grid\Column|Collection ggc_type
     * @property Grid\Column|Collection gongjijin
     * @property Grid\Column|Collection grade
     * @property Grid\Column|Collection hezuo_kefuid
     * @property Grid\Column|Collection huodongcode
     * @property Grid\Column|Collection is_again
     * @property Grid\Column|Collection is_again_undo
     * @property Grid\Column|Collection is_baoxian_gx
     * @property Grid\Column|Collection is_copy
     * @property Grid\Column|Collection is_gd_source
     * @property Grid\Column|Collection is_ggc_remark_updatetime
     * @property Grid\Column|Collection is_give
     * @property Grid\Column|Collection is_hezuodata
     * @property Grid\Column|Collection is_important
     * @property Grid\Column|Collection is_in_interchange
     * @property Grid\Column|Collection is_jingshouzhi
     * @property Grid\Column|Collection is_move_read
     * @property Grid\Column|Collection is_noto_ggc
     * @property Grid\Column|Collection is_qyd
     * @property Grid\Column|Collection is_read_reviews
     * @property Grid\Column|Collection is_sendsms
     * @property Grid\Column|Collection is_stock
     * @property Grid\Column|Collection is_syn
     * @property Grid\Column|Collection is_zhudai888
     * @property Grid\Column|Collection ismigrate
     * @property Grid\Column|Collection issendhz
     * @property Grid\Column|Collection isuse
     * @property Grid\Column|Collection kefu_name
     * @property Grid\Column|Collection kefu_type
     * @property Grid\Column|Collection kefuid
     * @property Grid\Column|Collection konghao_remark_times
     * @property Grid\Column|Collection last_remark_updatetime
     * @property Grid\Column|Collection loan_money
     * @property Grid\Column|Collection managerid
     * @property Grid\Column|Collection md5mobile
     * @property Grid\Column|Collection md5mobileto8
     * @property Grid\Column|Collection md5mobileto9
     * @property Grid\Column|Collection mobile_old
     * @property Grid\Column|Collection move_time
     * @property Grid\Column|Collection old_kefuid
     * @property Grid\Column|Collection qudao_ch_big
     * @property Grid\Column|Collection qudaoid
     * @property Grid\Column|Collection remark_updatetime
     * @property Grid\Column|Collection remark_updatetime_copy
     * @property Grid\Column|Collection repeat_mobilenum
     * @property Grid\Column|Collection sem_platform
     * @property Grid\Column|Collection sem_type
     * @property Grid\Column|Collection sem_username
     * @property Grid\Column|Collection sex
     * @property Grid\Column|Collection sign_is
     * @property Grid\Column|Collection source
     * @property Grid\Column|Collection source_id
     * @property Grid\Column|Collection source_platform
     * @property Grid\Column|Collection source_type1
     * @property Grid\Column|Collection stars
     * @property Grid\Column|Collection test
     * @property Grid\Column|Collection test2
     * @property Grid\Column|Collection towho
     * @property Grid\Column|Collection weili
     * @property Grid\Column|Collection work_shebao
     * @property Grid\Column|Collection work_wage_give_type
     * @property Grid\Column|Collection zdhkefu_id
     * @property Grid\Column|Collection zdhkefu_name
     * @property Grid\Column|Collection zdorqdb
     * @property Grid\Column|Collection zdorqdb_move
     * @property Grid\Column|Collection zhima
     * @property Grid\Column|Collection checking_id
     * @property Grid\Column|Collection is_ggc
     * @property Grid\Column|Collection is_old
     * @property Grid\Column|Collection loan_id
     * @property Grid\Column|Collection manager_name
     * @property Grid\Column|Collection msg_type
     * @property Grid\Column|Collection remark
     * @property Grid\Column|Collection acount_id
     * @property Grid\Column|Collection con
     * @property Grid\Column|Collection dpt
     * @property Grid\Column|Collection bank_name
     * @property Grid\Column|Collection bank_num
     * @property Grid\Column|Collection bank_subbranch
     * @property Grid\Column|Collection copyids
     * @property Grid\Column|Collection etime
     * @property Grid\Column|Collection finish_time
     * @property Grid\Column|Collection hour
     * @property Grid\Column|Collection money
     * @property Grid\Column|Collection now_job
     * @property Grid\Column|Collection payee
     * @property Grid\Column|Collection payment_date
     * @property Grid\Column|Collection payment_type
     * @property Grid\Column|Collection phone_money
     * @property Grid\Column|Collection readids
     * @property Grid\Column|Collection reason
     * @property Grid\Column|Collection stime
     * @property Grid\Column|Collection work
     * @property Grid\Column|Collection address
     * @property Grid\Column|Collection approval_id
     * @property Grid\Column|Collection company
     * @property Grid\Column|Collection content
     * @property Grid\Column|Collection info
     * @property Grid\Column|Collection is_main
     * @property Grid\Column|Collection taxpayer_num
     * @property Grid\Column|Collection annexpath
     * @property Grid\Column|Collection annexsize
     * @property Grid\Column|Collection remark_id
     * @property Grid\Column|Collection level
     * @property Grid\Column|Collection ask
     * @property Grid\Column|Collection default_reply
     * @property Grid\Column|Collection is_home
     * @property Grid\Column|Collection questioner
     * @property Grid\Column|Collection reply_num
     * @property Grid\Column|Collection seodescription
     * @property Grid\Column|Collection seokeywords
     * @property Grid\Column|Collection seotitle
     * @property Grid\Column|Collection askid
     * @property Grid\Column|Collection first_show
     * @property Grid\Column|Collection mid
     * @property Grid\Column|Collection bankname
     * @property Grid\Column|Collection day_int
     * @property Grid\Column|Collection pikuan_money
     * @property Grid\Column|Collection pikuan_num
     * @property Grid\Column|Collection shoukuan_money
     * @property Grid\Column|Collection shoukuan_num
     * @property Grid\Column|Collection city_item
     * @property Grid\Column|Collection clicks
     * @property Grid\Column|Collection percharge
     * @property Grid\Column|Collection show_num
     * @property Grid\Column|Collection truemoney
     * @property Grid\Column|Collection yugu_onemoney
     * @property Grid\Column|Collection yugu_onemoney_endtime
     * @property Grid\Column|Collection yugu_onemoney_startdtime
     * @property Grid\Column|Collection check_name
     * @property Grid\Column|Collection check_time
     * @property Grid\Column|Collection data_num
     * @property Grid\Column|Collection datanum_left
     * @property Grid\Column|Collection fenpei_num
     * @property Grid\Column|Collection money_left
     * @property Grid\Column|Collection money_one
     * @property Grid\Column|Collection month
     * @property Grid\Column|Collection operator
     * @property Grid\Column|Collection rcgtype
     * @property Grid\Column|Collection datanum_total
     * @property Grid\Column|Collection is_close
     * @property Grid\Column|Collection is_sms
     * @property Grid\Column|Collection money_total
     * @property Grid\Column|Collection person_num
     * @property Grid\Column|Collection accept_loanmoney_do_pkefuid
     * @property Grid\Column|Collection accepted_loan_daynum
     * @property Grid\Column|Collection accepted_loan_num
     * @property Grid\Column|Collection avatar_img
     * @property Grid\Column|Collection born_day
     * @property Grid\Column|Collection born_month
     * @property Grid\Column|Collection born_year
     * @property Grid\Column|Collection degree
     * @property Grid\Column|Collection del_time
     * @property Grid\Column|Collection department_son
     * @property Grid\Column|Collection ggc_day
     * @property Grid\Column|Collection ggc_num
     * @property Grid\Column|Collection graduated_school
     * @property Grid\Column|Collection idcard_img
     * @property Grid\Column|Collection idcard_img_fan
     * @property Grid\Column|Collection idcard_number
     * @property Grid\Column|Collection in_company_time
     * @property Grid\Column|Collection is_admin_closed
     * @property Grid\Column|Collection is_admin_edit_jiekeinfo
     * @property Grid\Column|Collection is_closed
     * @property Grid\Column|Collection is_closed_accept_ggcdata
     * @property Grid\Column|Collection is_closed_accept_hzddata
     * @property Grid\Column|Collection is_fenpei
     * @property Grid\Column|Collection is_limit_logintime
     * @property Grid\Column|Collection is_lizhi
     * @property Grid\Column|Collection is_manager
     * @property Grid\Column|Collection is_manager_bcompany
     * @property Grid\Column|Collection is_manager_big
     * @property Grid\Column|Collection is_manager_son
     * @property Grid\Column|Collection is_shenhe_pass
     * @property Grid\Column|Collection is_superadmin_opend
     * @property Grid\Column|Collection is_to_ggc
     * @property Grid\Column|Collection jieke_citys
     * @property Grid\Column|Collection kefu_role
     * @property Grid\Column|Collection kefu_seatsid
     * @property Grid\Column|Collection last_company_duty
     * @property Grid\Column|Collection last_company_name
     * @property Grid\Column|Collection lizhi_time
     * @property Grid\Column|Collection native_place
     * @property Grid\Column|Collection operator_acceptloan_pkefuid
     * @property Grid\Column|Collection operator_pkefuid
     * @property Grid\Column|Collection p_name
     * @property Grid\Column|Collection plan_loan_daynum
     * @property Grid\Column|Collection self_tel
     * @property Grid\Column|Collection sem_loan_day
     * @property Grid\Column|Collection sem_loan_num
     * @property Grid\Column|Collection sequence
     * @property Grid\Column|Collection shenhe_status
     * @property Grid\Column|Collection son_ids
     * @property Grid\Column|Collection today_date
     * @property Grid\Column|Collection unders_num
     * @property Grid\Column|Collection why_admin_closed
     * @property Grid\Column|Collection workcard_img
     * @property Grid\Column|Collection p_mid
     * @property Grid\Column|Collection amount
     * @property Grid\Column|Collection bankmanager
     * @property Grid\Column|Collection chengyi_money
     * @property Grid\Column|Collection contract_num
     * @property Grid\Column|Collection due_bank
     * @property Grid\Column|Collection fangdai_money
     * @property Grid\Column|Collection gobank_money
     * @property Grid\Column|Collection gobanktime
     * @property Grid\Column|Collection is_reviewed
     * @property Grid\Column|Collection jupi_time
     * @property Grid\Column|Collection kefuname
     * @property Grid\Column|Collection loan_time
     * @property Grid\Column|Collection netincome
     * @property Grid\Column|Collection pikuan_time
     * @property Grid\Column|Collection qudaomoney
     * @property Grid\Column|Collection rates
     * @property Grid\Column|Collection referralmoney
     * @property Grid\Column|Collection reviewed_time
     * @property Grid\Column|Collection shenhe_time
     * @property Grid\Column|Collection shoukuan_time
     * @property Grid\Column|Collection weishou_money
     * @property Grid\Column|Collection weishou_time
     * @property Grid\Column|Collection weiyue_time
     * @property Grid\Column|Collection account
     * @property Grid\Column|Collection salt
     * @property Grid\Column|Collection usertype
     * @property Grid\Column|Collection data_type
     * @property Grid\Column|Collection fangkuan_num
     * @property Grid\Column|Collection loan_again_num
     * @property Grid\Column|Collection loannum
     * @property Grid\Column|Collection stars3
     * @property Grid\Column|Collection stars4
     * @property Grid\Column|Collection status0
     * @property Grid\Column|Collection status2
     * @property Grid\Column|Collection uptime
     * @property Grid\Column|Collection kid
     * @property Grid\Column|Collection module
     * @property Grid\Column|Collection module_name
     * @property Grid\Column|Collection route
     * @property Grid\Column|Collection route_name
     * @property Grid\Column|Collection copyid
     * @property Grid\Column|Collection reply_content
     * @property Grid\Column|Collection reply_time
     * @property Grid\Column|Collection send_content
     * @property Grid\Column|Collection send_time
     * @property Grid\Column|Collection city_data
     * @property Grid\Column|Collection is_enable
     * @property Grid\Column|Collection rq_time
     * @property Grid\Column|Collection sms_template
     * @property Grid\Column|Collection condition
     * @property Grid\Column|Collection new_value
     * @property Grid\Column|Collection old_value
     * @property Grid\Column|Collection table
     * @property Grid\Column|Collection kh_job
     * @property Grid\Column|Collection kh_type
     * @property Grid\Column|Collection kh_value
     * @property Grid\Column|Collection operat_position
     * @property Grid\Column|Collection operat_sys
     * @property Grid\Column|Collection operator_id
     * @property Grid\Column|Collection fd_money
     * @property Grid\Column|Collection month_plan
     * @property Grid\Column|Collection developer
     * @property Grid\Column|Collection question_level
     * @property Grid\Column|Collection question_type
     * @property Grid\Column|Collection system_type
     * @property Grid\Column|Collection addtime
     * @property Grid\Column|Collection distribute_num
     * @property Grid\Column|Collection distribute_type
     * @property Grid\Column|Collection end_time
     * @property Grid\Column|Collection platformid
     * @property Grid\Column|Collection search_param
     * @property Grid\Column|Collection start_time
     * @property Grid\Column|Collection images
     * @property Grid\Column|Collection mobile_info
     * @property Grid\Column|Collection seatsid
     * @property Grid\Column|Collection pid
     * @property Grid\Column|Collection treatment_content
     * @property Grid\Column|Collection sqd_now_num
     * @property Grid\Column|Collection sqd_percent_num
     * @property Grid\Column|Collection zd_now_num
     * @property Grid\Column|Collection zd_percent_num
     * @property Grid\Column|Collection m_pid
     * @property Grid\Column|Collection author
     * @property Grid\Column|Collection date
     * @property Grid\Column|Collection locality
     * @property Grid\Column|Collection operation_note
     * @property Grid\Column|Collection small_desc
     * @property Grid\Column|Collection guwencardid
     * @property Grid\Column|Collection dpt0
     * @property Grid\Column|Collection dpt1
     * @property Grid\Column|Collection dpt2
     * @property Grid\Column|Collection sat_level
     * @property Grid\Column|Collection service_money
     * @property Grid\Column|Collection upd_time
     * @property Grid\Column|Collection review_id
     * @property Grid\Column|Collection sendmsg
     * @property Grid\Column|Collection huashu_content
     * @property Grid\Column|Collection huashu_type
     * @property Grid\Column|Collection huashu_type_ch
     * @property Grid\Column|Collection is_have_logo
     * @property Grid\Column|Collection import_bigtotal
     * @property Grid\Column|Collection import_success
     * @property Grid\Column|Collection import_total
     * @property Grid\Column|Collection accept_loan_type_do_pkefuid
     * @property Grid\Column|Collection accept_loanmoney_max
     * @property Grid\Column|Collection accept_loanmoney_min
     * @property Grid\Column|Collection accepted_give_daynum
     * @property Grid\Column|Collection accepted_loan_totalnum
     * @property Grid\Column|Collection accepted_loan_totalnum_firstday
     * @property Grid\Column|Collection bankcard_img
     * @property Grid\Column|Collection bcompany
     * @property Grid\Column|Collection bzsx_one
     * @property Grid\Column|Collection bzsx_two
     * @property Grid\Column|Collection credit_img
     * @property Grid\Column|Collection cw_cityids
     * @property Grid\Column|Collection cw_citys
     * @property Grid\Column|Collection dataNum_income_alert_time
     * @property Grid\Column|Collection give_num
     * @property Grid\Column|Collection gonggao_id
     * @property Grid\Column|Collection goods_areas
     * @property Grid\Column|Collection graduate_img
     * @property Grid\Column|Collection groupid
     * @property Grid\Column|Collection guwenid
     * @property Grid\Column|Collection hezuo_name
     * @property Grid\Column|Collection hezuo_percent
     * @property Grid\Column|Collection hezuo_type
     * @property Grid\Column|Collection is_admin_login_status
     * @property Grid\Column|Collection is_all_city
     * @property Grid\Column|Collection is_can_operator_ggcdata
     * @property Grid\Column|Collection is_check_close
     * @property Grid\Column|Collection is_closed_accept_yydata
     * @property Grid\Column|Collection is_closed_changecity_data
     * @property Grid\Column|Collection is_finance
     * @property Grid\Column|Collection is_hr
     * @property Grid\Column|Collection is_performance_remind
     * @property Grid\Column|Collection is_plan_daynum_do
     * @property Grid\Column|Collection is_waipai
     * @property Grid\Column|Collection is_xuni
     * @property Grid\Column|Collection is_zilao_pass
     * @property Grid\Column|Collection laodong_img
     * @property Grid\Column|Collection loanword_month
     * @property Grid\Column|Collection money_give
     * @property Grid\Column|Collection money_recharge
     * @property Grid\Column|Collection plan_loan_num
     * @property Grid\Column|Collection qudao_type
     * @property Grid\Column|Collection repeat_deadline_type
     * @property Grid\Column|Collection s_month
     * @property Grid\Column|Collection subordinates
     * @property Grid\Column|Collection subordinates_big
     * @property Grid\Column|Collection tijian_img
     * @property Grid\Column|Collection yj_name
     * @property Grid\Column|Collection ziliao_check_remark
     * @property Grid\Column|Collection ziliao_check_time
     * @property Grid\Column|Collection ziliao_time
     * @property Grid\Column|Collection zuoxi_tel
     * @property Grid\Column|Collection total_num
     * @property Grid\Column|Collection undo_num
     * @property Grid\Column|Collection income
     * @property Grid\Column|Collection num
     * @property Grid\Column|Collection data_top
     * @property Grid\Column|Collection gldata_top
     * @property Grid\Column|Collection inwork_num
     * @property Grid\Column|Collection limit_num
     * @property Grid\Column|Collection acceptloan_status
     * @property Grid\Column|Collection nownum
     * @property Grid\Column|Collection planbili
     * @property Grid\Column|Collection setpot
     * @property Grid\Column|Collection beat_per
     * @property Grid\Column|Collection read_flg
     * @property Grid\Column|Collection company_name
     * @property Grid\Column|Collection chongzhi_id
     * @property Grid\Column|Collection chongzhi_type
     * @property Grid\Column|Collection is_ok
     * @property Grid\Column|Collection kefu_id
     * @property Grid\Column|Collection left_money
     * @property Grid\Column|Collection rest_max
     * @property Grid\Column|Collection rest_min
     * @property Grid\Column|Collection work_max
     * @property Grid\Column|Collection work_min
     * @property Grid\Column|Collection answer
     * @property Grid\Column|Collection question
     * @property Grid\Column|Collection is_answer_right
     * @property Grid\Column|Collection is_pop
     * @property Grid\Column|Collection pop_count
     * @property Grid\Column|Collection demand_num
     * @property Grid\Column|Collection leader_name
     * @property Grid\Column|Collection is_show_yeji
     * @property Grid\Column|Collection done_rate
     * @property Grid\Column|Collection dpt_cpy
     * @property Grid\Column|Collection is_show
     * @property Grid\Column|Collection net
     * @property Grid\Column|Collection one_data_profit
     * @property Grid\Column|Collection one_person_net
     * @property Grid\Column|Collection qy_rate
     * @property Grid\Column|Collection ranktype
     * @property Grid\Column|Collection trans_rate
     * @property Grid\Column|Collection utime
     * @property Grid\Column|Collection you_rate
     * @property Grid\Column|Collection yy_rate
     * @property Grid\Column|Collection eqmark
     * @property Grid\Column|Collection person_type
     * @property Grid\Column|Collection test_type
     * @property Grid\Column|Collection tijian_path
     * @property Grid\Column|Collection mod
     * @property Grid\Column|Collection now_job_type
     * @property Grid\Column|Collection per_num
     * @property Grid\Column|Collection author_type
     * @property Grid\Column|Collection brands
     * @property Grid\Column|Collection cityids
     * @property Grid\Column|Collection is_system
     * @property Grid\Column|Collection views
     * @property Grid\Column|Collection is_see
     * @property Grid\Column|Collection is_many
     * @property Grid\Column|Collection week
     * @property Grid\Column|Collection menustr
     * @property Grid\Column|Collection erji
     * @property Grid\Column|Collection fuzeren
     * @property Grid\Column|Collection guwen
     * @property Grid\Column|Collection mob_all
     * @property Grid\Column|Collection yiji
     * @property Grid\Column|Collection create_income
     * @property Grid\Column|Collection xiugai_num
     * @property Grid\Column|Collection average_points
     * @property Grid\Column|Collection date_type
     * @property Grid\Column|Collection duration
     * @property Grid\Column|Collection duration_average
     * @property Grid\Column|Collection first_num
     * @property Grid\Column|Collection first_num_day
     * @property Grid\Column|Collection give_num_day
     * @property Grid\Column|Collection hb
     * @property Grid\Column|Collection is_tx
     * @property Grid\Column|Collection jinjian_month
     * @property Grid\Column|Collection lds_num_day
     * @property Grid\Column|Collection lds_num_month
     * @property Grid\Column|Collection login_day_num
     * @property Grid\Column|Collection login_num
     * @property Grid\Column|Collection mob_average
     * @property Grid\Column|Collection netincome_average
     * @property Grid\Column|Collection netincome_day
     * @property Grid\Column|Collection pnum
     * @property Grid\Column|Collection qds_num_day
     * @property Grid\Column|Collection qds_num_month
     * @property Grid\Column|Collection shoukuan_money2
     * @property Grid\Column|Collection shoukuan_num_day
     * @property Grid\Column|Collection sm_day
     * @property Grid\Column|Collection sm_month
     * @property Grid\Column|Collection data_size
     * @property Grid\Column|Collection wufanpei
     * @property Grid\Column|Collection updatetime
     * @property Grid\Column|Collection is_why
     * @property Grid\Column|Collection loan_daigenjin_num
     * @property Grid\Column|Collection loan_daoluan_num
     * @property Grid\Column|Collection loan_daoluan_num_pre
     * @property Grid\Column|Collection loan_five_star_num
     * @property Grid\Column|Collection loan_four_star_num
     * @property Grid\Column|Collection loan_num
     * @property Grid\Column|Collection loan_one_star_num
     * @property Grid\Column|Collection loan_three_star_num
     * @property Grid\Column|Collection loan_two_star_num
     * @property Grid\Column|Collection loan_two_star_plus_num
     * @property Grid\Column|Collection loan_waidi_num
     * @property Grid\Column|Collection loan_waidi_num_pre
     * @property Grid\Column|Collection loan_yishouli_num
     * @property Grid\Column|Collection three_star_above_pre
     * @property Grid\Column|Collection two_star_above_pre
     * @property Grid\Column|Collection zfp_daoluan_num
     * @property Grid\Column|Collection zfp_five_star_num
     * @property Grid\Column|Collection zfp_four_star_num
     * @property Grid\Column|Collection zfp_loan_daigenjin_num
     * @property Grid\Column|Collection zfp_loan_num
     * @property Grid\Column|Collection zfp_loan_yishouli_num
     * @property Grid\Column|Collection zfp_one_star_num
     * @property Grid\Column|Collection zfp_three_star_num
     * @property Grid\Column|Collection zfp_two_star_num
     * @property Grid\Column|Collection zfp_two_star_plus_num
     * @property Grid\Column|Collection zs_daoluan_num
     * @property Grid\Column|Collection zs_five_star_num
     * @property Grid\Column|Collection zs_four_star_num
     * @property Grid\Column|Collection zs_loan_daigenjin_num
     * @property Grid\Column|Collection zs_loan_num
     * @property Grid\Column|Collection zs_loan_yishouli_num
     * @property Grid\Column|Collection zs_one_star_num
     * @property Grid\Column|Collection zs_three_star_num
     * @property Grid\Column|Collection zs_two_star_num
     * @property Grid\Column|Collection zs_two_star_plus_num
     * @property Grid\Column|Collection chuangshou_money
     * @property Grid\Column|Collection chuangshou_num
     * @property Grid\Column|Collection jinjian_num
     * @property Grid\Column|Collection team_chuangshou_money
     * @property Grid\Column|Collection team_chuangshou_num
     * @property Grid\Column|Collection team_jinjian_num
     * @property Grid\Column|Collection team_pikuan_money
     * @property Grid\Column|Collection team_pikuan_num
     * @property Grid\Column|Collection apply_num
     * @property Grid\Column|Collection youzhi_num
     * @property Grid\Column|Collection upd_date
     * @property Grid\Column|Collection waitdo_num
     * @property Grid\Column|Collection waitdo_rate
     * @property Grid\Column|Collection add_kefuid
     * @property Grid\Column|Collection countermeasures
     * @property Grid\Column|Collection department_big_mubiao
     * @property Grid\Column|Collection insufficient_today
     * @property Grid\Column|Collection singn_day
     * @property Grid\Column|Collection yuji_visit_num
     * @property Grid\Column|Collection is_read
     * @property Grid\Column|Collection is_back
     * @property Grid\Column|Collection left_num
     * @property Grid\Column|Collection xiaofei_type
     * @property Grid\Column|Collection viewnum
     * @property Grid\Column|Collection accepted_user_num
     * @property Grid\Column|Collection ask_num
     * @property Grid\Column|Collection good_at_wordids
     * @property Grid\Column|Collection good_at_work
     * @property Grid\Column|Collection is_admin_login
     * @property Grid\Column|Collection is_allocation
     * @property Grid\Column|Collection is_pass
     * @property Grid\Column|Collection login_time
     * @property Grid\Column|Collection parent_managerid
     * @property Grid\Column|Collection plan_user_num
     * @property Grid\Column|Collection products_num
     * @property Grid\Column|Collection provinceid
     * @property Grid\Column|Collection self_introduction
     * @property Grid\Column|Collection service_area
     * @property Grid\Column|Collection service_areaids
     * @property Grid\Column|Collection alarm_in
     * @property Grid\Column|Collection alarm_type
     * @property Grid\Column|Collection hourtime
     * @property Grid\Column|Collection manager_id
     * @property Grid\Column|Collection minutetime
     * @property Grid\Column|Collection state
     * @property Grid\Column|Collection loanmsg_num
     * @property Grid\Column|Collection catid
     * @property Grid\Column|Collection ftitle
     * @property Grid\Column|Collection is_newstime
     * @property Grid\Column|Collection keyword
     * @property Grid\Column|Collection newsid
     * @property Grid\Column|Collection newstime
     * @property Grid\Column|Collection picalt
     * @property Grid\Column|Collection tags
     * @property Grid\Column|Collection titlepic
     * @property Grid\Column|Collection titleurl
     * @property Grid\Column|Collection toptitle
     * @property Grid\Column|Collection pic_alt
     * @property Grid\Column|Collection come_from
     * @property Grid\Column|Collection hand_date
     * @property Grid\Column|Collection seo_description
     * @property Grid\Column|Collection seo_keywords
     * @property Grid\Column|Collection seo_title
     * @property Grid\Column|Collection c_abutment
     * @property Grid\Column|Collection c_abutment_email
     * @property Grid\Column|Collection c_abutment_mobile
     * @property Grid\Column|Collection c_bank
     * @property Grid\Column|Collection c_bank_account
     * @property Grid\Column|Collection c_mainbody
     * @property Grid\Column|Collection c_manager
     * @property Grid\Column|Collection c_manager_email
     * @property Grid\Column|Collection c_manager_mobile
     * @property Grid\Column|Collection c_operator
     * @property Grid\Column|Collection c_pay_company
     * @property Grid\Column|Collection c_paytype
     * @property Grid\Column|Collection c_platform
     * @property Grid\Column|Collection c_prepay
     * @property Grid\Column|Collection c_remarks
     * @property Grid\Column|Collection c_settlement_cycle
     * @property Grid\Column|Collection c_settlement_type
     * @property Grid\Column|Collection c_status
     * @property Grid\Column|Collection c_time
     * @property Grid\Column|Collection abutment
     * @property Grid\Column|Collection abutment_mobile
     * @property Grid\Column|Collection bank
     * @property Grid\Column|Collection bank_count
     * @property Grid\Column|Collection charge_style
     * @property Grid\Column|Collection function
     * @property Grid\Column|Collection mainbody
     * @property Grid\Column|Collection manager
     * @property Grid\Column|Collection paystyle
     * @property Grid\Column|Collection platform
     * @property Grid\Column|Collection remarks
     * @property Grid\Column|Collection unit_price
     * @property Grid\Column|Collection url
     * @property Grid\Column|Collection consumption
     * @property Grid\Column|Collection daytime
     * @property Grid\Column|Collection fail
     * @property Grid\Column|Collection high_quality
     * @property Grid\Column|Collection message_tongdao
     * @property Grid\Column|Collection repeat_quality
     * @property Grid\Column|Collection request_unit_price
     * @property Grid\Column|Collection succeed
     * @property Grid\Column|Collection q_abutment
     * @property Grid\Column|Collection q_abutment_mobile
     * @property Grid\Column|Collection q_account
     * @property Grid\Column|Collection q_bank
     * @property Grid\Column|Collection q_bank_account
     * @property Grid\Column|Collection q_bname
     * @property Grid\Column|Collection q_bphone
     * @property Grid\Column|Collection q_discount
     * @property Grid\Column|Collection q_domain
     * @property Grid\Column|Collection q_label
     * @property Grid\Column|Collection q_mainbody
     * @property Grid\Column|Collection q_manager
     * @property Grid\Column|Collection q_password
     * @property Grid\Column|Collection q_pay_company
     * @property Grid\Column|Collection q_paytype
     * @property Grid\Column|Collection q_platform
     * @property Grid\Column|Collection q_remarks
     * @property Grid\Column|Collection q_status
     * @property Grid\Column|Collection q_time
     * @property Grid\Column|Collection q_url
     * @property Grid\Column|Collection q_yuanshi
     * @property Grid\Column|Collection r_apayment
     * @property Grid\Column|Collection r_consume
     * @property Grid\Column|Collection r_discount
     * @property Grid\Column|Collection r_mainbody
     * @property Grid\Column|Collection r_operator
     * @property Grid\Column|Collection r_payinfo
     * @property Grid\Column|Collection r_payment
     * @property Grid\Column|Collection r_paytype
     * @property Grid\Column|Collection r_platform
     * @property Grid\Column|Collection r_qudao
     * @property Grid\Column|Collection r_status
     * @property Grid\Column|Collection r_time
     * @property Grid\Column|Collection w_account
     * @property Grid\Column|Collection w_auth_time
     * @property Grid\Column|Collection w_bname
     * @property Grid\Column|Collection w_company
     * @property Grid\Column|Collection w_id_card
     * @property Grid\Column|Collection w_label
     * @property Grid\Column|Collection w_mainbody
     * @property Grid\Column|Collection w_manager
     * @property Grid\Column|Collection w_password
     * @property Grid\Column|Collection w_paytype
     * @property Grid\Column|Collection w_phone
     * @property Grid\Column|Collection w_platform
     * @property Grid\Column|Collection w_remarks
     * @property Grid\Column|Collection w_status
     * @property Grid\Column|Collection w_time
     * @property Grid\Column|Collection w_url
     * @property Grid\Column|Collection w_wxid_x
     * @property Grid\Column|Collection w_wxid_y
     * @property Grid\Column|Collection unoperator
     * @property Grid\Column|Collection kefu_phone
     * @property Grid\Column|Collection response
     * @property Grid\Column|Collection target_phone
     * @property Grid\Column|Collection dowhat
     * @property Grid\Column|Collection isok
     * @property Grid\Column|Collection p_json
     * @property Grid\Column|Collection r_json
     * @property Grid\Column|Collection sendtime
     * @property Grid\Column|Collection imgurl
     * @property Grid\Column|Collection is_open
     * @property Grid\Column|Collection is_url
     * @property Grid\Column|Collection apply_time
     * @property Grid\Column|Collection birthday
     * @property Grid\Column|Collection dtime
     * @property Grid\Column|Collection ext_info
     * @property Grid\Column|Collection has_wld_loan
     * @property Grid\Column|Collection have_ant_credit
     * @property Grid\Column|Collection have_baoxian
     * @property Grid\Column|Collection have_car
     * @property Grid\Column|Collection have_chedai
     * @property Grid\Column|Collection have_credit_card
     * @property Grid\Column|Collection have_fangdai
     * @property Grid\Column|Collection have_fund
     * @property Grid\Column|Collection have_house
     * @property Grid\Column|Collection have_job
     * @property Grid\Column|Collection have_loan
     * @property Grid\Column|Collection hezuo_meiti
     * @property Grid\Column|Collection idcard
     * @property Grid\Column|Collection salary_max
     * @property Grid\Column|Collection salary_min
     * @property Grid\Column|Collection shebao
     * @property Grid\Column|Collection vocation
     * @property Grid\Column|Collection work_is_bankmoney
     * @property Grid\Column|Collection trackId
     * @property Grid\Column|Collection category
     * @property Grid\Column|Collection message
     * @property Grid\Column|Collection decrypt_json_data
     * @property Grid\Column|Collection error_msg
     * @property Grid\Column|Collection user_applyloan_id
     * @property Grid\Column|Collection company_id
     * @property Grid\Column|Collection create_time
     * @property Grid\Column|Collection day_push_num
     * @property Grid\Column|Collection day_push_success
     * @property Grid\Column|Collection ymd
     * @property Grid\Column|Collection distribution_limit
     * @property Grid\Column|Collection is_display
     * @property Grid\Column|Collection now_num
     * @property Grid\Column|Collection percent_num
     * @property Grid\Column|Collection stauts
     * @property Grid\Column|Collection source_encode
     * @property Grid\Column|Collection accord_deduct_rate50
     * @property Grid\Column|Collection accord_deduct_rate60
     * @property Grid\Column|Collection accord_deduct_rate70
     * @property Grid\Column|Collection city_id
     * @property Grid\Column|Collection is_kouliang
     * @property Grid\Column|Collection kouliang_per
     * @property Grid\Column|Collection one_money
     * @property Grid\Column|Collection kehuid
     * @property Grid\Column|Collection accord_deduct_sign
     * @property Grid\Column|Collection business_years
     * @property Grid\Column|Collection creditcard_situation
     * @property Grid\Column|Collection is_write
     * @property Grid\Column|Collection nowork_monthincome
     * @property Grid\Column|Collection work_identity
     * @property Grid\Column|Collection work_now_company_age
     * @property Grid\Column|Collection data_id
     * @property Grid\Column|Collection apply_explanation
     * @property Grid\Column|Collection apply_ondition
     * @property Grid\Column|Collection apply_other
     * @property Grid\Column|Collection assets_max
     * @property Grid\Column|Collection assets_min
     * @property Grid\Column|Collection bigtype
     * @property Grid\Column|Collection credit
     * @property Grid\Column|Collection credit_id
     * @property Grid\Column|Collection gourl
     * @property Grid\Column|Collection img_alt
     * @property Grid\Column|Collection is_gourl
     * @property Grid\Column|Collection is_home_show
     * @property Grid\Column|Collection loan_month_max
     * @property Grid\Column|Collection loan_month_min
     * @property Grid\Column|Collection loanday
     * @property Grid\Column|Collection loanday_id
     * @property Grid\Column|Collection loanuse
     * @property Grid\Column|Collection loanuse_ids
     * @property Grid\Column|Collection money_max
     * @property Grid\Column|Collection money_min
     * @property Grid\Column|Collection month_income_max
     * @property Grid\Column|Collection month_income_min
     * @property Grid\Column|Collection month_interest_float
     * @property Grid\Column|Collection month_interest_max
     * @property Grid\Column|Collection month_interest_min
     * @property Grid\Column|Collection month_interest_other
     * @property Grid\Column|Collection need_material
     * @property Grid\Column|Collection need_material_id
     * @property Grid\Column|Collection online
     * @property Grid\Column|Collection other_material
     * @property Grid\Column|Collection people_age_max
     * @property Grid\Column|Collection people_age_min
     * @property Grid\Column|Collection product_img
     * @property Grid\Column|Collection repayment
     * @property Grid\Column|Collection repayment_id
     * @property Grid\Column|Collection type_name1
     * @property Grid\Column|Collection type_name2
     * @property Grid\Column|Collection work_id
     * @property Grid\Column|Collection access_baodan
     * @property Grid\Column|Collection access_baodan_companys
     * @property Grid\Column|Collection access_baodan_jiaofeitype
     * @property Grid\Column|Collection access_baodan_youxiaotime
     * @property Grid\Column|Collection access_car
     * @property Grid\Column|Collection access_car_chepaiaddress
     * @property Grid\Column|Collection access_car_code
     * @property Grid\Column|Collection access_car_monthtime
     * @property Grid\Column|Collection access_car_status
     * @property Grid\Column|Collection access_car_type
     * @property Grid\Column|Collection access_car_usetime
     * @property Grid\Column|Collection access_credit
     * @property Grid\Column|Collection access_credit_chaxun
     * @property Grid\Column|Collection access_credit_overdue
     * @property Grid\Column|Collection access_credit_overdue_dj
     * @property Grid\Column|Collection access_credit_overdue_zdj
     * @property Grid\Column|Collection access_credit_sixmonth_chaxunnum
     * @property Grid\Column|Collection access_credit_threemonth_chaxunnum
     * @property Grid\Column|Collection access_credit_twomonth_chaxunnum
     * @property Grid\Column|Collection access_credit_type
     * @property Grid\Column|Collection access_debet
     * @property Grid\Column|Collection access_debet_max
     * @property Grid\Column|Collection access_degree
     * @property Grid\Column|Collection access_degree_type
     * @property Grid\Column|Collection access_gongjijin
     * @property Grid\Column|Collection access_gongjijin_jiaocunmoney
     * @property Grid\Column|Collection access_gongjijin_jishumoney
     * @property Grid\Column|Collection access_gongjijin_long
     * @property Grid\Column|Collection access_house
     * @property Grid\Column|Collection access_house_city
     * @property Grid\Column|Collection access_house_monthtime
     * @property Grid\Column|Collection access_house_status
     * @property Grid\Column|Collection access_house_type
     * @property Grid\Column|Collection access_income
     * @property Grid\Column|Collection access_income_intype
     * @property Grid\Column|Collection access_income_long
     * @property Grid\Column|Collection access_income_month
     * @property Grid\Column|Collection access_shebao
     * @property Grid\Column|Collection access_shebao_long
     * @property Grid\Column|Collection access_shebao_monthmoney
     * @property Grid\Column|Collection access_shenfen_age_max
     * @property Grid\Column|Collection access_shenfen_age_min
     * @property Grid\Column|Collection access_shenfen_homereg
     * @property Grid\Column|Collection access_shenfen_industry
     * @property Grid\Column|Collection access_shenfen_is
     * @property Grid\Column|Collection access_shenfen_worktype
     * @property Grid\Column|Collection add_name
     * @property Grid\Column|Collection keyfield
     * @property Grid\Column|Collection need_material_baodan
     * @property Grid\Column|Collection need_material_car
     * @property Grid\Column|Collection need_material_house
     * @property Grid\Column|Collection need_material_income
     * @property Grid\Column|Collection need_material_shangmen
     * @property Grid\Column|Collection need_material_shenfen
     * @property Grid\Column|Collection need_material_use
     * @property Grid\Column|Collection product_bankmoneyday
     * @property Grid\Column|Collection product_code
     * @property Grid\Column|Collection product_lixi_type
     * @property Grid\Column|Collection product_maxmoney
     * @property Grid\Column|Collection product_minmoney
     * @property Grid\Column|Collection product_name
     * @property Grid\Column|Collection product_repayment
     * @property Grid\Column|Collection product_type1
     * @property Grid\Column|Collection product_type2
     * @property Grid\Column|Collection work_gongjijin_jiaocunmoney
     * @property Grid\Column|Collection pipei_id
     * @property Grid\Column|Collection product_lixi_num
     * @property Grid\Column|Collection product_lixi_remark
     * @property Grid\Column|Collection access_baodan_jiaofeimoney
     * @property Grid\Column|Collection access_baodan_num
     * @property Grid\Column|Collection access_baodan_status
     * @property Grid\Column|Collection access_base_age
     * @property Grid\Column|Collection access_base_degree
     * @property Grid\Column|Collection access_base_entrytype
     * @property Grid\Column|Collection access_base_homereg
     * @property Grid\Column|Collection access_base_is
     * @property Grid\Column|Collection access_base_marriage
     * @property Grid\Column|Collection access_base_school
     * @property Grid\Column|Collection access_car_baodan
     * @property Grid\Column|Collection access_car_baodan_num
     * @property Grid\Column|Collection access_car_monthmoney
     * @property Grid\Column|Collection access_car_nowmoney
     * @property Grid\Column|Collection access_credit_overdue_halfyear
     * @property Grid\Column|Collection access_credit_overdue_is
     * @property Grid\Column|Collection access_credit_overdue_money
     * @property Grid\Column|Collection access_credit_overdue_oneyear
     * @property Grid\Column|Collection access_credit_overdue_twoyear
     * @property Grid\Column|Collection access_credit_overdue_type
     * @property Grid\Column|Collection access_credit_recordtime
     * @property Grid\Column|Collection access_debet_allmoney_dj
     * @property Grid\Column|Collection access_debet_allmoney_xy
     * @property Grid\Column|Collection access_debet_balance_xy
     * @property Grid\Column|Collection access_debet_halfyearuse_dj
     * @property Grid\Column|Collection access_debet_housetype_fang
     * @property Grid\Column|Collection access_debet_loanbalance_fang
     * @property Grid\Column|Collection access_debet_loanmoney_fang
     * @property Grid\Column|Collection access_debet_max_dj
     * @property Grid\Column|Collection access_debet_monthrep_xy
     * @property Grid\Column|Collection access_debet_nowmoney_fang
     * @property Grid\Column|Collection access_debet_nowuse_dj
     * @property Grid\Column|Collection access_house_area
     * @property Grid\Column|Collection access_house_havetime
     * @property Grid\Column|Collection access_house_monthmoney
     * @property Grid\Column|Collection access_house_nowmoney
     * @property Grid\Column|Collection access_shenfen_gongjijin_jiaocun
     * @property Grid\Column|Collection access_shenfen_gongjijin_jishu
     * @property Grid\Column|Collection access_shenfen_gongjijin_long
     * @property Grid\Column|Collection access_shenfen_gufen
     * @property Grid\Column|Collection access_shenfen_income_aftertax
     * @property Grid\Column|Collection access_shenfen_income_intype
     * @property Grid\Column|Collection access_shenfen_income_long
     * @property Grid\Column|Collection access_shenfen_income_pretax
     * @property Grid\Column|Collection access_shenfen_licence
     * @property Grid\Column|Collection access_shenfen_operate_age
     * @property Grid\Column|Collection access_shenfen_shebao_jiaocun
     * @property Grid\Column|Collection access_shenfen_shebao_long
     * @property Grid\Column|Collection need_material_diya
     * @property Grid\Column|Collection yushen_code
     * @property Grid\Column|Collection yushen_debet
     * @property Grid\Column|Collection yushen_money_max
     * @property Grid\Column|Collection yushen_mul
     * @property Grid\Column|Collection yushen_type
     * @property Grid\Column|Collection num1
     * @property Grid\Column|Collection num2
     * @property Grid\Column|Collection num3
     * @property Grid\Column|Collection product_id1
     * @property Grid\Column|Collection product_id2
     * @property Grid\Column|Collection product_id3
     * @property Grid\Column|Collection fandian_num
     * @property Grid\Column|Collection fandian_type
     * @property Grid\Column|Collection jinjian_address
     * @property Grid\Column|Collection jobtype
     * @property Grid\Column|Collection qudao_username
     * @property Grid\Column|Collection code
     * @property Grid\Column|Collection max
     * @property Grid\Column|Collection min
     * @property Grid\Column|Collection mul
     * @property Grid\Column|Collection is_nextday_update
     * @property Grid\Column|Collection loannum_little
     * @property Grid\Column|Collection source_type
     * @property Grid\Column|Collection apply_average_money
     * @property Grid\Column|Collection is_end_update
     * @property Grid\Column|Collection tg_type
     * @property Grid\Column|Collection tuiguang_money
     * @property Grid\Column|Collection can_look_citys
     * @property Grid\Column|Collection qudaocardid
     * @property Grid\Column|Collection facetalk_hourtime
     * @property Grid\Column|Collection qudao_bankloantime
     * @property Grid\Column|Collection qudao_bankmanager
     * @property Grid\Column|Collection qudao_bankname
     * @property Grid\Column|Collection qudao_bankpikuan
     * @property Grid\Column|Collection qudao_bankrates
     * @property Grid\Column|Collection qudao_borrowing
     * @property Grid\Column|Collection qudao_callindealdate
     * @property Grid\Column|Collection qudao_clienttype
     * @property Grid\Column|Collection qudao_collectiontime
     * @property Grid\Column|Collection qudao_consumingdate
     * @property Grid\Column|Collection qudao_consumingpeople
     * @property Grid\Column|Collection qudao_contractor
     * @property Grid\Column|Collection qudao_contractordate
     * @property Grid\Column|Collection qudao_currentaddress
     * @property Grid\Column|Collection qudao_department
     * @property Grid\Column|Collection qudao_departmentincharge
     * @property Grid\Column|Collection qudao_gobanktime
     * @property Grid\Column|Collection qudao_hetongno
     * @property Grid\Column|Collection qudao_idcardaddress
     * @property Grid\Column|Collection qudao_netincome
     * @property Grid\Column|Collection qudao_pikuantime
     * @property Grid\Column|Collection qudao_qudaomoney
     * @property Grid\Column|Collection qudao_referralmoney
     * @property Grid\Column|Collection qudao_servicecharges
     * @property Grid\Column|Collection qudao_status
     * @property Grid\Column|Collection qudao_zhudai_acceptmoney
     * @property Grid\Column|Collection user_idcard
     * @property Grid\Column|Collection check_id
     * @property Grid\Column|Collection is_newest
     * @property Grid\Column|Collection is_repeat
     * @property Grid\Column|Collection reply_con
     * @property Grid\Column|Collection reply_phone
     * @property Grid\Column|Collection sysn_msg
     * @property Grid\Column|Collection rcvid
     * @property Grid\Column|Collection kaoheyeji
     * @property Grid\Column|Collection bio
     * @property Grid\Column|Collection diploma
     * @property Grid\Column|Collection job
     * @property Grid\Column|Collection working_life
     * @property Grid\Column|Collection director
     * @property Grid\Column|Collection domain_cw
     * @property Grid\Column|Collection domain_name
     * @property Grid\Column|Collection domain_qd
     * @property Grid\Column|Collection domain_rl
     * @property Grid\Column|Collection fuze_name
     * @property Grid\Column|Collection package
     * @property Grid\Column|Collection schedule
     * @property Grid\Column|Collection count
     * @property Grid\Column|Collection add_time
     * @property Grid\Column|Collection objective_beijing
     * @property Grid\Column|Collection objective_changsha
     * @property Grid\Column|Collection objective_donggouan
     * @property Grid\Column|Collection objective_foshan
     * @property Grid\Column|Collection objective_guangzhou
     * @property Grid\Column|Collection objective_hangzhou
     * @property Grid\Column|Collection objective_shanghai
     * @property Grid\Column|Collection objective_shenzhen
     * @property Grid\Column|Collection tongji_type
     * @property Grid\Column|Collection bannerpic
     * @property Grid\Column|Collection middlepic
     * @property Grid\Column|Collection rate
     * @property Grid\Column|Collection source_ch
     * @property Grid\Column|Collection baidu_code_pc
     * @property Grid\Column|Collection baidu_code_wap
     * @property Grid\Column|Collection day_data_num
     * @property Grid\Column|Collection day_plan_num
     * @property Grid\Column|Collection day_today
     * @property Grid\Column|Collection fandian
     * @property Grid\Column|Collection is_close_accept_data
     * @property Grid\Column|Collection is_hezuo
     * @property Grid\Column|Collection ocpc_code_wap
     * @property Grid\Column|Collection ocpc_jscode_wap
     * @property Grid\Column|Collection pc_source_grade
     * @property Grid\Column|Collection source_ch_big
     * @property Grid\Column|Collection url_front
     * @property Grid\Column|Collection wap_source_grade
     * @property Grid\Column|Collection which_page
     * @property Grid\Column|Collection who_add
     * @property Grid\Column|Collection loannum_bj
     * @property Grid\Column|Collection loannum_changsha
     * @property Grid\Column|Collection loannum_cq
     * @property Grid\Column|Collection loannum_dg
     * @property Grid\Column|Collection loannum_fs
     * @property Grid\Column|Collection loannum_gz
     * @property Grid\Column|Collection loannum_huizhou
     * @property Grid\Column|Collection loannum_hz
     * @property Grid\Column|Collection loannum_nanjing
     * @property Grid\Column|Collection loannum_qita
     * @property Grid\Column|Collection loannum_sh
     * @property Grid\Column|Collection loannum_suzhou
     * @property Grid\Column|Collection loannum_sz
     * @property Grid\Column|Collection loannum_tianjin
     * @property Grid\Column|Collection loannum_wuhan
     * @property Grid\Column|Collection loannum_huzhou
     * @property Grid\Column|Collection loannum_nanning
     * @property Grid\Column|Collection loannum_shanghai
     * @property Grid\Column|Collection loannum_xiamen
     * @property Grid\Column|Collection loannum_beijing
     * @property Grid\Column|Collection loannum_chongqing
     * @property Grid\Column|Collection loannum_dongguan
     * @property Grid\Column|Collection loannum_foshan
     * @property Grid\Column|Collection loannum_guangzhou
     * @property Grid\Column|Collection loannum_hangzhou
     * @property Grid\Column|Collection loannum_shenzhen
     * @property Grid\Column|Collection add_uid
     * @property Grid\Column|Collection en_name
     * @property Grid\Column|Collection p_id_ex1
     * @property Grid\Column|Collection website_type
     * @property Grid\Column|Collection remove_type
     * @property Grid\Column|Collection s_json
     * @property Grid\Column|Collection hits
     * @property Grid\Column|Collection is_redirect
     * @property Grid\Column|Collection redirect_url
     * @property Grid\Column|Collection view_num
     * @property Grid\Column|Collection client_phone
     * @property Grid\Column|Collection opt_id
     * @property Grid\Column|Collection opt_name
     * @property Grid\Column|Collection rps_msg
     * @property Grid\Column|Collection directoryname
     * @property Grid\Column|Collection tag
     * @property Grid\Column|Collection in_num
     * @property Grid\Column|Collection is_status
     * @property Grid\Column|Collection js_num
     * @property Grid\Column|Collection nowday
     * @property Grid\Column|Collection seqencing
     * @property Grid\Column|Collection xq_num
     * @property Grid\Column|Collection update_time
     * @property Grid\Column|Collection del_name
     * @property Grid\Column|Collection channel_code
     * @property Grid\Column|Collection id_stop
     * @property Grid\Column|Collection key
     * @property Grid\Column|Collection systype
     * @property Grid\Column|Collection sysvalue
     * @property Grid\Column|Collection sysvalue2
     * @property Grid\Column|Collection desc
     * @property Grid\Column|Collection faile_code
     * @property Grid\Column|Collection faile_msg
     * @property Grid\Column|Collection login_url
     * @property Grid\Column|Collection ipnum
     * @property Grid\Column|Collection loannum_nantong
     * @property Grid\Column|Collection loannum_other
     * @property Grid\Column|Collection loannum_zhengzhou
     * @property Grid\Column|Collection loannum_zhuhai
     * @property Grid\Column|Collection loannum_zs
     * @property Grid\Column|Collection mobilenum
     * @property Grid\Column|Collection pcnum
     * @property Grid\Column|Collection pv
     * @property Grid\Column|Collection uv
     * @property Grid\Column|Collection status0num
     * @property Grid\Column|Collection status1num
     * @property Grid\Column|Collection status2num
     * @property Grid\Column|Collection status3num
     * @property Grid\Column|Collection status4num
     * @property Grid\Column|Collection status5num
     * @property Grid\Column|Collection status6num
     * @property Grid\Column|Collection status7num
     * @property Grid\Column|Collection status8num
     * @property Grid\Column|Collection totalnum
     * @property Grid\Column|Collection four_star_num
     * @property Grid\Column|Collection lowquality
     * @property Grid\Column|Collection one_star_num
     * @property Grid\Column|Collection read_rigned_num
     * @property Grid\Column|Collection three_star_num
     * @property Grid\Column|Collection two_star_num
     * @property Grid\Column|Collection waitingdo_num
     * @property Grid\Column|Collection again_five_star_num
     * @property Grid\Column|Collection again_four_star_num
     * @property Grid\Column|Collection again_lowquality
     * @property Grid\Column|Collection again_num
     * @property Grid\Column|Collection again_one_star_num
     * @property Grid\Column|Collection again_three_star_num
     * @property Grid\Column|Collection again_two_star_num
     * @property Grid\Column|Collection again_two_star_plus_num
     * @property Grid\Column|Collection again_undo_num
     * @property Grid\Column|Collection again_waitingdo_num
     * @property Grid\Column|Collection five_star_num
     * @property Grid\Column|Collection two_star_plus_num
     * @property Grid\Column|Collection waidi_num
     * @property Grid\Column|Collection zs_lowquality
     * @property Grid\Column|Collection zs_num
     * @property Grid\Column|Collection zs_undo_num
     * @property Grid\Column|Collection zs_waitingdo_num
     * @property Grid\Column|Collection high_quality_money
     * @property Grid\Column|Collection high_quality_num
     * @property Grid\Column|Collection is_ziying
     * @property Grid\Column|Collection low_quality_num
     * @property Grid\Column|Collection lowquality_percent
     * @property Grid\Column|Collection mobile_repeat_num
     * @property Grid\Column|Collection mobile_repeat_percent
     * @property Grid\Column|Collection two_star_above
     * @property Grid\Column|Collection twostar_average_money
     * @property Grid\Column|Collection twostar_percent
     * @property Grid\Column|Collection waidiloan_num
     * @property Grid\Column|Collection waidiloan_percent
     * @property Grid\Column|Collection avg_netincome_money
     * @property Grid\Column|Collection fangkuang_money
     * @property Grid\Column|Collection netincome_money
     * @property Grid\Column|Collection pnum_bz
     * @property Grid\Column|Collection access_token
     * @property Grid\Column|Collection account_id
     * @property Grid\Column|Collection authorization_code
     * @property Grid\Column|Collection client_secret
     * @property Grid\Column|Collection qq
     * @property Grid\Column|Collection refresh_token
     * @property Grid\Column|Collection s_account_id
     * @property Grid\Column|Collection s_qq
     * @property Grid\Column|Collection user_action_set_id
     * @property Grid\Column|Collection advertiser_id
     * @property Grid\Column|Collection click_id
     * @property Grid\Column|Collection baodan
     * @property Grid\Column|Collection baodan_remark
     * @property Grid\Column|Collection company_card_have
     * @property Grid\Column|Collection company_card_regarea
     * @property Grid\Column|Collection company_card_regyear
     * @property Grid\Column|Collection company_type
     * @property Grid\Column|Collection company_typeid
     * @property Grid\Column|Collection company_year_fpmoney
     * @property Grid\Column|Collection company_yearincome
     * @property Grid\Column|Collection creditid
     * @property Grid\Column|Collection fundid
     * @property Grid\Column|Collection house_remark
     * @property Grid\Column|Collection income_source
     * @property Grid\Column|Collection job_year
     * @property Grid\Column|Collection job_yearid
     * @property Grid\Column|Collection jobid
     * @property Grid\Column|Collection monthly
     * @property Grid\Column|Collection monthly_sendtype
     * @property Grid\Column|Collection monthlyid
     * @property Grid\Column|Collection inserttime
     * @property Grid\Column|Collection movetype
     * @property Grid\Column|Collection baodan_company
     * @property Grid\Column|Collection baodan_jiaofeitype
     * @property Grid\Column|Collection baodan_status
     * @property Grid\Column|Collection baodan_times
     * @property Grid\Column|Collection baodan_year_money
     * @property Grid\Column|Collection baodan_youxiaoyear
     * @property Grid\Column|Collection business_address
     * @property Grid\Column|Collection business_gufen
     * @property Grid\Column|Collection business_industry
     * @property Grid\Column|Collection business_is_yingyezhizhao
     * @property Grid\Column|Collection business_monthmoney
     * @property Grid\Column|Collection business_shenfen
     * @property Grid\Column|Collection business_yearinvoicemoney
     * @property Grid\Column|Collection business_yearmoney
     * @property Grid\Column|Collection callstatus
     * @property Grid\Column|Collection callstatus_ch
     * @property Grid\Column|Collection calltype
     * @property Grid\Column|Collection car_age
     * @property Grid\Column|Collection car_baodan_paynum
     * @property Grid\Column|Collection car_brands
     * @property Grid\Column|Collection car_buy_money
     * @property Grid\Column|Collection car_card_area
     * @property Grid\Column|Collection car_city
     * @property Grid\Column|Collection car_cityid
     * @property Grid\Column|Collection car_code
     * @property Grid\Column|Collection car_insurance_company
     * @property Grid\Column|Collection car_km
     * @property Grid\Column|Collection car_loan_money
     * @property Grid\Column|Collection car_mortgage_money
     * @property Grid\Column|Collection car_mortgage_status
     * @property Grid\Column|Collection car_province
     * @property Grid\Column|Collection car_provinceid
     * @property Grid\Column|Collection car_repayment_month
     * @property Grid\Column|Collection car_status
     * @property Grid\Column|Collection car_type
     * @property Grid\Column|Collection car_valuation_money
     * @property Grid\Column|Collection company_whiltelist
     * @property Grid\Column|Collection credit_banks
     * @property Grid\Column|Collection credit_check_inmonths
     * @property Grid\Column|Collection credit_check_inmonths_num
     * @property Grid\Column|Collection credit_check_sixdmonth_num
     * @property Grid\Column|Collection credit_check_thirdmonth_num
     * @property Grid\Column|Collection credit_check_twomonth_num
     * @property Grid\Column|Collection credit_fuzhai
     * @property Grid\Column|Collection credit_has_bannian_usemoney
     * @property Grid\Column|Collection credit_has_maxuse_money
     * @property Grid\Column|Collection credit_house_is
     * @property Grid\Column|Collection credit_house_loan_lave
     * @property Grid\Column|Collection credit_house_loan_moneys
     * @property Grid\Column|Collection credit_house_money
     * @property Grid\Column|Collection credit_house_status
     * @property Grid\Column|Collection credit_left_money
     * @property Grid\Column|Collection credit_record_time
     * @property Grid\Column|Collection credit_repayment_monthmoney
     * @property Grid\Column|Collection credit_situation
     * @property Grid\Column|Collection credit_total_money
     * @property Grid\Column|Collection credit_type
     * @property Grid\Column|Collection creditcard_has_usemoney
     * @property Grid\Column|Collection creditcard_nums
     * @property Grid\Column|Collection creditcard_totalmoney
     * @property Grid\Column|Collection creditoverdue
     * @property Grid\Column|Collection creditoverdue_halfyear
     * @property Grid\Column|Collection creditoverdue_happentime
     * @property Grid\Column|Collection creditoverdue_happentime_dj
     * @property Grid\Column|Collection creditoverdue_happentime_zdj
     * @property Grid\Column|Collection creditoverdue_is
     * @property Grid\Column|Collection creditoverdue_money
     * @property Grid\Column|Collection creditoverdue_money_dj
     * @property Grid\Column|Collection creditoverdue_money_zdj
     * @property Grid\Column|Collection creditoverdue_nums
     * @property Grid\Column|Collection creditoverdue_nums_dj
     * @property Grid\Column|Collection creditoverdue_nums_zdj
     * @property Grid\Column|Collection creditoverdue_oneyear
     * @property Grid\Column|Collection creditoverdue_time
     * @property Grid\Column|Collection creditoverdue_twoyear
     * @property Grid\Column|Collection creditoverdue_type
     * @property Grid\Column|Collection daiqianyue_time
     * @property Grid\Column|Collection do_del_adminname
     * @property Grid\Column|Collection facetalk_actual_is
     * @property Grid\Column|Collection facetalk_updatetime
     * @property Grid\Column|Collection good_star_updatetime
     * @property Grid\Column|Collection good_statr_move_time
     * @property Grid\Column|Collection hezuo_time
     * @property Grid\Column|Collection house_address
     * @property Grid\Column|Collection house_area
     * @property Grid\Column|Collection house_area_small
     * @property Grid\Column|Collection house_buy_money
     * @property Grid\Column|Collection house_buy_time
     * @property Grid\Column|Collection house_city
     * @property Grid\Column|Collection house_cityid
     * @property Grid\Column|Collection house_is_rent
     * @property Grid\Column|Collection house_loan_money
     * @property Grid\Column|Collection house_mortgage_case
     * @property Grid\Column|Collection house_mortgage_money
     * @property Grid\Column|Collection house_now_money
     * @property Grid\Column|Collection house_province
     * @property Grid\Column|Collection house_provinceid
     * @property Grid\Column|Collection house_rent_monthmoney
     * @property Grid\Column|Collection house_repayment_month
     * @property Grid\Column|Collection house_status
     * @property Grid\Column|Collection house_type
     * @property Grid\Column|Collection is_bank_money
     * @property Grid\Column|Collection is_hand_add
     * @property Grid\Column|Collection is_move
     * @property Grid\Column|Collection is_new_jiami
     * @property Grid\Column|Collection is_out_othercompany
     * @property Grid\Column|Collection is_send_msg
     * @property Grid\Column|Collection loan_month
     * @property Grid\Column|Collection loan_monthid
     * @property Grid\Column|Collection loan_repayment_source
     * @property Grid\Column|Collection loan_repayment_type
     * @property Grid\Column|Collection loan_use
     * @property Grid\Column|Collection loan_use_time
     * @property Grid\Column|Collection material_bank_is
     * @property Grid\Column|Collection mobile2
     * @property Grid\Column|Collection nowork_dowhat
     * @property Grid\Column|Collection old_guwenid
     * @property Grid\Column|Collection old_kefuids
     * @property Grid\Column|Collection old_managerid
     * @property Grid\Column|Collection old_managerids
     * @property Grid\Column|Collection productid
     * @property Grid\Column|Collection self_repeat_mobilenum
     * @property Grid\Column|Collection source_en
     * @property Grid\Column|Collection source_grade
     * @property Grid\Column|Collection source_type2
     * @property Grid\Column|Collection source_type_big
     * @property Grid\Column|Collection sourceid
     * @property Grid\Column|Collection system_prompt
     * @property Grid\Column|Collection third_uid
     * @property Grid\Column|Collection tpage
     * @property Grid\Column|Collection true_city
     * @property Grid\Column|Collection true_loan_time
     * @property Grid\Column|Collection tuiguang_type
     * @property Grid\Column|Collection user_census_address
     * @property Grid\Column|Collection user_city
     * @property Grid\Column|Collection user_cityid
     * @property Grid\Column|Collection user_degree
     * @property Grid\Column|Collection user_entrytype
     * @property Grid\Column|Collection user_ismarry
     * @property Grid\Column|Collection user_province
     * @property Grid\Column|Collection user_provinceid
     * @property Grid\Column|Collection user_school
     * @property Grid\Column|Collection work_address
     * @property Grid\Column|Collection work_city
     * @property Grid\Column|Collection work_company_name
     * @property Grid\Column|Collection work_company_type
     * @property Grid\Column|Collection work_gongjijin
     * @property Grid\Column|Collection work_gongjijin_long
     * @property Grid\Column|Collection work_hangye
     * @property Grid\Column|Collection work_income_long
     * @property Grid\Column|Collection work_income_taxtype
     * @property Grid\Column|Collection work_position
     * @property Grid\Column|Collection work_shebao_long
     * @property Grid\Column|Collection work_shebao_money
     * @property Grid\Column|Collection work_wage_bank_money
     * @property Grid\Column|Collection aptitude
     * @property Grid\Column|Collection clue_id
     * @property Grid\Column|Collection flag
     * @property Grid\Column|Collection flag2
     * @property Grid\Column|Collection ucid
     * @property Grid\Column|Collection belong_city
     * @property Grid\Column|Collection belong_department_bcompany
     * @property Grid\Column|Collection deal_status
     * @property Grid\Column|Collection isbankpay
     * @property Grid\Column|Collection meiti
     * @property Grid\Column|Collection rong_create_time
     * @property Grid\Column|Collection rong_id
     * @property Grid\Column|Collection rong_log_id
     * @property Grid\Column|Collection ads
     * @property Grid\Column|Collection car_life
     * @property Grid\Column|Collection car_model
     * @property Grid\Column|Collection car_price
     * @property Grid\Column|Collection card_no
     * @property Grid\Column|Collection creativeid
     * @property Grid\Column|Collection customer_id
     * @property Grid\Column|Collection education
     * @property Grid\Column|Collection employment_time
     * @property Grid\Column|Collection house_life
     * @property Grid\Column|Collection house_price
     * @property Grid\Column|Collection house_size
     * @property Grid\Column|Collection is_credit
     * @property Grid\Column|Collection is_married
     * @property Grid\Column|Collection loan_long_time
     * @property Grid\Column|Collection monthly_income
     * @property Grid\Column|Collection payroll_type
     * @property Grid\Column|Collection product_id
     * @property Grid\Column|Collection professional
     * @property Grid\Column|Collection time_str
     * @property Grid\Column|Collection use_for
     * @property Grid\Column|Collection zm_score
     * @property Grid\Column|Collection checking_type
     * @property Grid\Column|Collection dianzi_money
     * @property Grid\Column|Collection is_dianzi
     * @property Grid\Column|Collection qudao_mids
     * @property Grid\Column|Collection qudao_mname
     * @property Grid\Column|Collection shoukuan_month
     * @property Grid\Column|Collection sk_uptime
     * @property Grid\Column|Collection is_movie
     * @property Grid\Column|Collection bj_chuangshou
     * @property Grid\Column|Collection bj_jinjian_money
     * @property Grid\Column|Collection bj_jinjian_num
     * @property Grid\Column|Collection bj_pikuan_money
     * @property Grid\Column|Collection bj_pikuan_num
     * @property Grid\Column|Collection dg_chuangshou
     * @property Grid\Column|Collection dg_jinjian_money
     * @property Grid\Column|Collection dg_jinjian_num
     * @property Grid\Column|Collection dg_pikuan_money
     * @property Grid\Column|Collection dg_pikuan_num
     * @property Grid\Column|Collection fs_chuangshou
     * @property Grid\Column|Collection fs_jinjian_money
     * @property Grid\Column|Collection fs_jinjian_num
     * @property Grid\Column|Collection fs_pikuan_money
     * @property Grid\Column|Collection fs_pikuan_num
     * @property Grid\Column|Collection gz_chuangshou
     * @property Grid\Column|Collection gz_jinjian_money
     * @property Grid\Column|Collection gz_jinjian_num
     * @property Grid\Column|Collection gz_pikuan_money
     * @property Grid\Column|Collection gz_pikuan_num
     * @property Grid\Column|Collection hz_chuangshou
     * @property Grid\Column|Collection hz_jinjian_money
     * @property Grid\Column|Collection hz_jinjian_num
     * @property Grid\Column|Collection hz_pikuan_money
     * @property Grid\Column|Collection hz_pikuan_num
     * @property Grid\Column|Collection sh_chuangshou
     * @property Grid\Column|Collection sh_jinjian_money
     * @property Grid\Column|Collection sh_jinjian_num
     * @property Grid\Column|Collection sh_pikuan_money
     * @property Grid\Column|Collection sh_pikuan_num
     * @property Grid\Column|Collection sz_chuangshou
     * @property Grid\Column|Collection sz_jinjian_money
     * @property Grid\Column|Collection sz_jinjian_num
     * @property Grid\Column|Collection sz_pikuan_money
     * @property Grid\Column|Collection sz_pikuan_num
     * @property Grid\Column|Collection intime
     * @property Grid\Column|Collection remark_num
     * @property Grid\Column|Collection fenpei_time
     * @property Grid\Column|Collection is_mobile_city
     * @property Grid\Column|Collection msgtype
     * @property Grid\Column|Collection jingshouzhi
     * @property Grid\Column|Collection is_take
     * @property Grid\Column|Collection read_kfuids
     * @property Grid\Column|Collection shenfen_type
     * @property Grid\Column|Collection data
     * @property Grid\Column|Collection method
     * @property Grid\Column|Collection ret_mst
     * @property Grid\Column|Collection brand_one
     * @property Grid\Column|Collection brand_two
     * @property Grid\Column|Collection kefu_tel
     * @property Grid\Column|Collection recording_url
     * @property Grid\Column|Collection sessionid
     * @property Grid\Column|Collection tel_time
     * @property Grid\Column|Collection addkid
     * @property Grid\Column|Collection back_way
     * @property Grid\Column|Collection classify
     * @property Grid\Column|Collection department_excel
     * @property Grid\Column|Collection idstr
     * @property Grid\Column|Collection shouju_num
     * @property Grid\Column|Collection shoukuan_date
     * @property Grid\Column|Collection shoukuan_way
     * @property Grid\Column|Collection state_date
     * @property Grid\Column|Collection create_date
     * @property Grid\Column|Collection fid
     * @property Grid\Column|Collection sat_id
     * @property Grid\Column|Collection department1
     * @property Grid\Column|Collection department2
     * @property Grid\Column|Collection is_checkmobile
     * @property Grid\Column|Collection is_send_sms
     * @property Grid\Column|Collection visit_type
     * @property Grid\Column|Collection dk_star
     * @property Grid\Column|Collection fw_star
     * @property Grid\Column|Collection gj_star
     * @property Grid\Column|Collection gw_phone
     * @property Grid\Column|Collection today_num
     * @property Grid\Column|Collection vtype
     * @property Grid\Column|Collection del_flg
     * @property Grid\Column|Collection expired_time
     * @property Grid\Column|Collection baodi_cs
     * @property Grid\Column|Collection base_wage
     * @property Grid\Column|Collection chidao
     * @property Grid\Column|Collection chuqin
     * @property Grid\Column|Collection cs
     * @property Grid\Column|Collection daixinjia
     * @property Grid\Column|Collection data_cost
     * @property Grid\Column|Collection jinjian_ticheng
     * @property Grid\Column|Collection kq_koukuan
     * @property Grid\Column|Collection kuanggong
     * @property Grid\Column|Collection last_cs
     * @property Grid\Column|Collection lirun_ticheng
     * @property Grid\Column|Collection ll_ticheng
     * @property Grid\Column|Collection logistic_cost
     * @property Grid\Column|Collection loudaka
     * @property Grid\Column|Collection month_jidu_money
     * @property Grid\Column|Collection month_jsxt_ticheng
     * @property Grid\Column|Collection month_shifa
     * @property Grid\Column|Collection month_yingfa
     * @property Grid\Column|Collection niandu_money
     * @property Grid\Column|Collection person_cs
     * @property Grid\Column|Collection phone_fare
     * @property Grid\Column|Collection qita_butie
     * @property Grid\Column|Collection qita_koukuan
     * @property Grid\Column|Collection qq_money
     * @property Grid\Column|Collection queqin
     * @property Grid\Column|Collection shijia
     * @property Grid\Column|Collection sj_chuqin
     * @property Grid\Column|Collection sj_ticheng
     * @property Grid\Column|Collection syq_jidu_money
     * @property Grid\Column|Collection xt_ticheng
     * @property Grid\Column|Collection yingfa_ticheng
     * @property Grid\Column|Collection zz_day
     * @property Grid\Column|Collection data_price
     * @property Grid\Column|Collection common
     * @property Grid\Column|Collection minuend
     * @property Grid\Column|Collection percent
     * @property Grid\Column|Collection setid
     * @property Grid\Column|Collection day_type
     * @property Grid\Column|Collection source_account
     * @property Grid\Column|Collection wc_id
     * @property Grid\Column|Collection wc_key
     * @property Grid\Column|Collection wc_name
     * @property Grid\Column|Collection wc_secret
     * @property Grid\Column|Collection is_succeed
     * @property Grid\Column|Collection loanid
     * @property Grid\Column|Collection msg
     * @property Grid\Column|Collection rqs_json
     * @property Grid\Column|Collection rsp_json
     * @property Grid\Column|Collection sbm_json
     * @property Grid\Column|Collection phoneid
     * @property Grid\Column|Collection seatno
     * @property Grid\Column|Collection vcode
     * @property Grid\Column|Collection api_version
     * @property Grid\Column|Collection f_name
     * @property Grid\Column|Collection g_json
     * @property Grid\Column|Collection gender
     * @property Grid\Column|Collection id_card_number
     * @property Grid\Column|Collection issued_by
     * @property Grid\Column|Collection race
     * @property Grid\Column|Collection valid_date
     * @property Grid\Column|Collection call_auth
     * @property Grid\Column|Collection file_auth
     * @property Grid\Column|Collection lacation_time
     * @property Grid\Column|Collection location_auth
     * @property Grid\Column|Collection recording_auth
     * @property Grid\Column|Collection sdk
     * @property Grid\Column|Collection video_auth
     * @property Grid\Column|Collection zdt_avatar_img
     * @property Grid\Column|Collection zdt_idcard_img
     * @property Grid\Column|Collection zdt_idcard_img_fan
     * @property Grid\Column|Collection zdt_image_best
     * @property Grid\Column|Collection zdt_image_env
     * @property Grid\Column|Collection install_time
     * @property Grid\Column|Collection chinese_name
     * @property Grid\Column|Collection device
     * @property Grid\Column|Collection folder_way
     * @property Grid\Column|Collection is_have_num
     * @property Grid\Column|Collection is_num_kongge
     * @property Grid\Column|Collection call_id
     * @property Grid\Column|Collection filename
     * @property Grid\Column|Collection is_done
     * @property Grid\Column|Collection op_flag
     * @property Grid\Column|Collection osspath
     * @property Grid\Column|Collection recordingpath
     * @property Grid\Column|Collection all_num
     * @property Grid\Column|Collection kf_num
     * @property Grid\Column|Collection ofv_min_num
     * @property Grid\Column|Collection one_min_num
     * @property Grid\Column|Collection th_fv_min_num
     * @property Grid\Column|Collection three_min_num
     * @property Grid\Column|Collection two_min_num
     * @property Grid\Column|Collection valid_num
     * @property Grid\Column|Collection hrsc_num
     * @property Grid\Column|Collection hrzs_num
     * @property Grid\Column|Collection lds_num
     * @property Grid\Column|Collection ldsc_num
     * @property Grid\Column|Collection qds_num
     * @property Grid\Column|Collection qdsc_num
     * @property Grid\Column|Collection thly_num
     * @property Grid\Column|Collection thzs_num
     * @property Grid\Column|Collection thzsc_num
     * @property Grid\Column|Collection min_vcode
     * @property Grid\Column|Collection min_version
     *
     * @method Grid\Column|Collection created_at(string $label = null)
     * @method Grid\Column|Collection detail(string $label = null)
     * @method Grid\Column|Collection id(string $label = null)
     * @method Grid\Column|Collection name(string $label = null)
     * @method Grid\Column|Collection type(string $label = null)
     * @method Grid\Column|Collection updated_at(string $label = null)
     * @method Grid\Column|Collection version(string $label = null)
     * @method Grid\Column|Collection is_enabled(string $label = null)
     * @method Grid\Column|Collection extension(string $label = null)
     * @method Grid\Column|Collection icon(string $label = null)
     * @method Grid\Column|Collection order(string $label = null)
     * @method Grid\Column|Collection parent_id(string $label = null)
     * @method Grid\Column|Collection uri(string $label = null)
     * @method Grid\Column|Collection menu_id(string $label = null)
     * @method Grid\Column|Collection permission_id(string $label = null)
     * @method Grid\Column|Collection http_method(string $label = null)
     * @method Grid\Column|Collection http_path(string $label = null)
     * @method Grid\Column|Collection slug(string $label = null)
     * @method Grid\Column|Collection role_id(string $label = null)
     * @method Grid\Column|Collection user_id(string $label = null)
     * @method Grid\Column|Collection value(string $label = null)
     * @method Grid\Column|Collection avatar(string $label = null)
     * @method Grid\Column|Collection password(string $label = null)
     * @method Grid\Column|Collection remember_token(string $label = null)
     * @method Grid\Column|Collection username(string $label = null)
     * @method Grid\Column|Collection channel_name(string $label = null)
     * @method Grid\Column|Collection channel_title(string $label = null)
     * @method Grid\Column|Collection channel_type(string $label = null)
     * @method Grid\Column|Collection encrypt_private_key(string $label = null)
     * @method Grid\Column|Collection encrypt_public_key(string $label = null)
     * @method Grid\Column|Collection status(string $label = null)
     * @method Grid\Column|Collection age(string $label = null)
     * @method Grid\Column|Collection business_license(string $label = null)
     * @method Grid\Column|Collection car(string $label = null)
     * @method Grid\Column|Collection channel_id(string $label = null)
     * @method Grid\Column|Collection city(string $label = null)
     * @method Grid\Column|Collection credit_card(string $label = null)
     * @method Grid\Column|Collection df(string $label = null)
     * @method Grid\Column|Collection fund(string $label = null)
     * @method Grid\Column|Collection house(string $label = null)
     * @method Grid\Column|Collection insurance(string $label = null)
     * @method Grid\Column|Collection loan_periods(string $label = null)
     * @method Grid\Column|Collection mobile(string $label = null)
     * @method Grid\Column|Collection price(string $label = null)
     * @method Grid\Column|Collection qyns(string $label = null)
     * @method Grid\Column|Collection socital(string $label = null)
     * @method Grid\Column|Collection wld(string $label = null)
     * @method Grid\Column|Collection g_description(string $label = null)
     * @method Grid\Column|Collection g_id(string $label = null)
     * @method Grid\Column|Collection g_name(string $label = null)
     * @method Grid\Column|Collection a_account(string $label = null)
     * @method Grid\Column|Collection a_brands(string $label = null)
     * @method Grid\Column|Collection a_city(string $label = null)
     * @method Grid\Column|Collection a_cityid(string $label = null)
     * @method Grid\Column|Collection a_department(string $label = null)
     * @method Grid\Column|Collection a_gid(string $label = null)
     * @method Grid\Column|Collection a_id(string $label = null)
     * @method Grid\Column|Collection a_ispermit(string $label = null)
     * @method Grid\Column|Collection a_logip(string $label = null)
     * @method Grid\Column|Collection a_logtime(string $label = null)
     * @method Grid\Column|Collection a_managerids(string $label = null)
     * @method Grid\Column|Collection a_number(string $label = null)
     * @method Grid\Column|Collection a_password(string $label = null)
     * @method Grid\Column|Collection a_regtime(string $label = null)
     * @method Grid\Column|Collection a_tel(string $label = null)
     * @method Grid\Column|Collection a_tel2(string $label = null)
     * @method Grid\Column|Collection a_username(string $label = null)
     * @method Grid\Column|Collection is_changekey(string $label = null)
     * @method Grid\Column|Collection m_id(string $label = null)
     * @method Grid\Column|Collection m_isview(string $label = null)
     * @method Grid\Column|Collection m_locality(string $label = null)
     * @method Grid\Column|Collection m_name(string $label = null)
     * @method Grid\Column|Collection m_parentid(string $label = null)
     * @method Grid\Column|Collection m_url(string $label = null)
     * @method Grid\Column|Collection ip(string $label = null)
     * @method Grid\Column|Collection reqpath(string $label = null)
     * @method Grid\Column|Collection time(string $label = null)
     * @method Grid\Column|Collection uagent(string $label = null)
     * @method Grid\Column|Collection uid(string $label = null)
     * @method Grid\Column|Collection p_gid(string $label = null)
     * @method Grid\Column|Collection p_id(string $label = null)
     * @method Grid\Column|Collection p_rid(string $label = null)
     * @method Grid\Column|Collection ipcity(string $label = null)
     * @method Grid\Column|Collection is_del(string $label = null)
     * @method Grid\Column|Collection liulanqi_type(string $label = null)
     * @method Grid\Column|Collection loan_type(string $label = null)
     * @method Grid\Column|Collection mobilecity(string $label = null)
     * @method Grid\Column|Collection truename(string $label = null)
     * @method Grid\Column|Collection dc_onlymobile_id(string $label = null)
     * @method Grid\Column|Collection p_json_data(string $label = null)
     * @method Grid\Column|Collection r_json_data(string $label = null)
     * @method Grid\Column|Collection connection(string $label = null)
     * @method Grid\Column|Collection exception(string $label = null)
     * @method Grid\Column|Collection failed_at(string $label = null)
     * @method Grid\Column|Collection payload(string $label = null)
     * @method Grid\Column|Collection queue(string $label = null)
     * @method Grid\Column|Collection uuid(string $label = null)
     * @method Grid\Column|Collection citycode(string $label = null)
     * @method Grid\Column|Collection cityname(string $label = null)
     * @method Grid\Column|Collection email(string $label = null)
     * @method Grid\Column|Collection token(string $label = null)
     * @method Grid\Column|Collection abilities(string $label = null)
     * @method Grid\Column|Collection expires_at(string $label = null)
     * @method Grid\Column|Collection last_used_at(string $label = null)
     * @method Grid\Column|Collection tokenable_id(string $label = null)
     * @method Grid\Column|Collection tokenable_type(string $label = null)
     * @method Grid\Column|Collection district(string $label = null)
     * @method Grid\Column|Collection province(string $label = null)
     * @method Grid\Column|Collection config_classify_id(string $label = null)
     * @method Grid\Column|Collection config_key(string $label = null)
     * @method Grid\Column|Collection config_name(string $label = null)
     * @method Grid\Column|Collection extra(string $label = null)
     * @method Grid\Column|Collection help(string $label = null)
     * @method Grid\Column|Collection range_extra(string $label = null)
     * @method Grid\Column|Collection required(string $label = null)
     * @method Grid\Column|Collection classify_name(string $label = null)
     * @method Grid\Column|Collection scene(string $label = null)
     * @method Grid\Column|Collection sort(string $label = null)
     * @method Grid\Column|Collection full_name(string $label = null)
     * @method Grid\Column|Collection id_card(string $label = null)
     * @method Grid\Column|Collection id_card_front(string $label = null)
     * @method Grid\Column|Collection id_card_opposite(string $label = null)
     * @method Grid\Column|Collection nickname(string $label = null)
     * @method Grid\Column|Collection phone(string $label = null)
     * @method Grid\Column|Collection balance(string $label = null)
     * @method Grid\Column|Collection aescryptfor360(string $label = null)
     * @method Grid\Column|Collection bank_money(string $label = null)
     * @method Grid\Column|Collection baodan_is(string $label = null)
     * @method Grid\Column|Collection brand(string $label = null)
     * @method Grid\Column|Collection callkefu_name(string $label = null)
     * @method Grid\Column|Collection callkefuid(string $label = null)
     * @method Grid\Column|Collection check_num(string $label = null)
     * @method Grid\Column|Collection cityid(string $label = null)
     * @method Grid\Column|Collection data_d(string $label = null)
     * @method Grid\Column|Collection datatype(string $label = null)
     * @method Grid\Column|Collection day(string $label = null)
     * @method Grid\Column|Collection department(string $label = null)
     * @method Grid\Column|Collection department_bcompany(string $label = null)
     * @method Grid\Column|Collection department_big(string $label = null)
     * @method Grid\Column|Collection facetalk_arrival_time(string $label = null)
     * @method Grid\Column|Collection facetalk_day(string $label = null)
     * @method Grid\Column|Collection facetalk_is(string $label = null)
     * @method Grid\Column|Collection from_oldggc_time(string $label = null)
     * @method Grid\Column|Collection ggc_type(string $label = null)
     * @method Grid\Column|Collection gongjijin(string $label = null)
     * @method Grid\Column|Collection grade(string $label = null)
     * @method Grid\Column|Collection hezuo_kefuid(string $label = null)
     * @method Grid\Column|Collection huodongcode(string $label = null)
     * @method Grid\Column|Collection is_again(string $label = null)
     * @method Grid\Column|Collection is_again_undo(string $label = null)
     * @method Grid\Column|Collection is_baoxian_gx(string $label = null)
     * @method Grid\Column|Collection is_copy(string $label = null)
     * @method Grid\Column|Collection is_gd_source(string $label = null)
     * @method Grid\Column|Collection is_ggc_remark_updatetime(string $label = null)
     * @method Grid\Column|Collection is_give(string $label = null)
     * @method Grid\Column|Collection is_hezuodata(string $label = null)
     * @method Grid\Column|Collection is_important(string $label = null)
     * @method Grid\Column|Collection is_in_interchange(string $label = null)
     * @method Grid\Column|Collection is_jingshouzhi(string $label = null)
     * @method Grid\Column|Collection is_move_read(string $label = null)
     * @method Grid\Column|Collection is_noto_ggc(string $label = null)
     * @method Grid\Column|Collection is_qyd(string $label = null)
     * @method Grid\Column|Collection is_read_reviews(string $label = null)
     * @method Grid\Column|Collection is_sendsms(string $label = null)
     * @method Grid\Column|Collection is_stock(string $label = null)
     * @method Grid\Column|Collection is_syn(string $label = null)
     * @method Grid\Column|Collection is_zhudai888(string $label = null)
     * @method Grid\Column|Collection ismigrate(string $label = null)
     * @method Grid\Column|Collection issendhz(string $label = null)
     * @method Grid\Column|Collection isuse(string $label = null)
     * @method Grid\Column|Collection kefu_name(string $label = null)
     * @method Grid\Column|Collection kefu_type(string $label = null)
     * @method Grid\Column|Collection kefuid(string $label = null)
     * @method Grid\Column|Collection konghao_remark_times(string $label = null)
     * @method Grid\Column|Collection last_remark_updatetime(string $label = null)
     * @method Grid\Column|Collection loan_money(string $label = null)
     * @method Grid\Column|Collection managerid(string $label = null)
     * @method Grid\Column|Collection md5mobile(string $label = null)
     * @method Grid\Column|Collection md5mobileto8(string $label = null)
     * @method Grid\Column|Collection md5mobileto9(string $label = null)
     * @method Grid\Column|Collection mobile_old(string $label = null)
     * @method Grid\Column|Collection move_time(string $label = null)
     * @method Grid\Column|Collection old_kefuid(string $label = null)
     * @method Grid\Column|Collection qudao_ch_big(string $label = null)
     * @method Grid\Column|Collection qudaoid(string $label = null)
     * @method Grid\Column|Collection remark_updatetime(string $label = null)
     * @method Grid\Column|Collection remark_updatetime_copy(string $label = null)
     * @method Grid\Column|Collection repeat_mobilenum(string $label = null)
     * @method Grid\Column|Collection sem_platform(string $label = null)
     * @method Grid\Column|Collection sem_type(string $label = null)
     * @method Grid\Column|Collection sem_username(string $label = null)
     * @method Grid\Column|Collection sex(string $label = null)
     * @method Grid\Column|Collection sign_is(string $label = null)
     * @method Grid\Column|Collection source(string $label = null)
     * @method Grid\Column|Collection source_id(string $label = null)
     * @method Grid\Column|Collection source_platform(string $label = null)
     * @method Grid\Column|Collection source_type1(string $label = null)
     * @method Grid\Column|Collection stars(string $label = null)
     * @method Grid\Column|Collection test(string $label = null)
     * @method Grid\Column|Collection test2(string $label = null)
     * @method Grid\Column|Collection towho(string $label = null)
     * @method Grid\Column|Collection weili(string $label = null)
     * @method Grid\Column|Collection work_shebao(string $label = null)
     * @method Grid\Column|Collection work_wage_give_type(string $label = null)
     * @method Grid\Column|Collection zdhkefu_id(string $label = null)
     * @method Grid\Column|Collection zdhkefu_name(string $label = null)
     * @method Grid\Column|Collection zdorqdb(string $label = null)
     * @method Grid\Column|Collection zdorqdb_move(string $label = null)
     * @method Grid\Column|Collection zhima(string $label = null)
     * @method Grid\Column|Collection checking_id(string $label = null)
     * @method Grid\Column|Collection is_ggc(string $label = null)
     * @method Grid\Column|Collection is_old(string $label = null)
     * @method Grid\Column|Collection loan_id(string $label = null)
     * @method Grid\Column|Collection manager_name(string $label = null)
     * @method Grid\Column|Collection msg_type(string $label = null)
     * @method Grid\Column|Collection remark(string $label = null)
     * @method Grid\Column|Collection acount_id(string $label = null)
     * @method Grid\Column|Collection con(string $label = null)
     * @method Grid\Column|Collection dpt(string $label = null)
     * @method Grid\Column|Collection bank_name(string $label = null)
     * @method Grid\Column|Collection bank_num(string $label = null)
     * @method Grid\Column|Collection bank_subbranch(string $label = null)
     * @method Grid\Column|Collection copyids(string $label = null)
     * @method Grid\Column|Collection etime(string $label = null)
     * @method Grid\Column|Collection finish_time(string $label = null)
     * @method Grid\Column|Collection hour(string $label = null)
     * @method Grid\Column|Collection money(string $label = null)
     * @method Grid\Column|Collection now_job(string $label = null)
     * @method Grid\Column|Collection payee(string $label = null)
     * @method Grid\Column|Collection payment_date(string $label = null)
     * @method Grid\Column|Collection payment_type(string $label = null)
     * @method Grid\Column|Collection phone_money(string $label = null)
     * @method Grid\Column|Collection readids(string $label = null)
     * @method Grid\Column|Collection reason(string $label = null)
     * @method Grid\Column|Collection stime(string $label = null)
     * @method Grid\Column|Collection work(string $label = null)
     * @method Grid\Column|Collection address(string $label = null)
     * @method Grid\Column|Collection approval_id(string $label = null)
     * @method Grid\Column|Collection company(string $label = null)
     * @method Grid\Column|Collection content(string $label = null)
     * @method Grid\Column|Collection info(string $label = null)
     * @method Grid\Column|Collection is_main(string $label = null)
     * @method Grid\Column|Collection taxpayer_num(string $label = null)
     * @method Grid\Column|Collection annexpath(string $label = null)
     * @method Grid\Column|Collection annexsize(string $label = null)
     * @method Grid\Column|Collection remark_id(string $label = null)
     * @method Grid\Column|Collection level(string $label = null)
     * @method Grid\Column|Collection ask(string $label = null)
     * @method Grid\Column|Collection default_reply(string $label = null)
     * @method Grid\Column|Collection is_home(string $label = null)
     * @method Grid\Column|Collection questioner(string $label = null)
     * @method Grid\Column|Collection reply_num(string $label = null)
     * @method Grid\Column|Collection seodescription(string $label = null)
     * @method Grid\Column|Collection seokeywords(string $label = null)
     * @method Grid\Column|Collection seotitle(string $label = null)
     * @method Grid\Column|Collection askid(string $label = null)
     * @method Grid\Column|Collection first_show(string $label = null)
     * @method Grid\Column|Collection mid(string $label = null)
     * @method Grid\Column|Collection bankname(string $label = null)
     * @method Grid\Column|Collection day_int(string $label = null)
     * @method Grid\Column|Collection pikuan_money(string $label = null)
     * @method Grid\Column|Collection pikuan_num(string $label = null)
     * @method Grid\Column|Collection shoukuan_money(string $label = null)
     * @method Grid\Column|Collection shoukuan_num(string $label = null)
     * @method Grid\Column|Collection city_item(string $label = null)
     * @method Grid\Column|Collection clicks(string $label = null)
     * @method Grid\Column|Collection percharge(string $label = null)
     * @method Grid\Column|Collection show_num(string $label = null)
     * @method Grid\Column|Collection truemoney(string $label = null)
     * @method Grid\Column|Collection yugu_onemoney(string $label = null)
     * @method Grid\Column|Collection yugu_onemoney_endtime(string $label = null)
     * @method Grid\Column|Collection yugu_onemoney_startdtime(string $label = null)
     * @method Grid\Column|Collection check_name(string $label = null)
     * @method Grid\Column|Collection check_time(string $label = null)
     * @method Grid\Column|Collection data_num(string $label = null)
     * @method Grid\Column|Collection datanum_left(string $label = null)
     * @method Grid\Column|Collection fenpei_num(string $label = null)
     * @method Grid\Column|Collection money_left(string $label = null)
     * @method Grid\Column|Collection money_one(string $label = null)
     * @method Grid\Column|Collection month(string $label = null)
     * @method Grid\Column|Collection operator(string $label = null)
     * @method Grid\Column|Collection rcgtype(string $label = null)
     * @method Grid\Column|Collection datanum_total(string $label = null)
     * @method Grid\Column|Collection is_close(string $label = null)
     * @method Grid\Column|Collection is_sms(string $label = null)
     * @method Grid\Column|Collection money_total(string $label = null)
     * @method Grid\Column|Collection person_num(string $label = null)
     * @method Grid\Column|Collection accept_loanmoney_do_pkefuid(string $label = null)
     * @method Grid\Column|Collection accepted_loan_daynum(string $label = null)
     * @method Grid\Column|Collection accepted_loan_num(string $label = null)
     * @method Grid\Column|Collection avatar_img(string $label = null)
     * @method Grid\Column|Collection born_day(string $label = null)
     * @method Grid\Column|Collection born_month(string $label = null)
     * @method Grid\Column|Collection born_year(string $label = null)
     * @method Grid\Column|Collection degree(string $label = null)
     * @method Grid\Column|Collection del_time(string $label = null)
     * @method Grid\Column|Collection department_son(string $label = null)
     * @method Grid\Column|Collection ggc_day(string $label = null)
     * @method Grid\Column|Collection ggc_num(string $label = null)
     * @method Grid\Column|Collection graduated_school(string $label = null)
     * @method Grid\Column|Collection idcard_img(string $label = null)
     * @method Grid\Column|Collection idcard_img_fan(string $label = null)
     * @method Grid\Column|Collection idcard_number(string $label = null)
     * @method Grid\Column|Collection in_company_time(string $label = null)
     * @method Grid\Column|Collection is_admin_closed(string $label = null)
     * @method Grid\Column|Collection is_admin_edit_jiekeinfo(string $label = null)
     * @method Grid\Column|Collection is_closed(string $label = null)
     * @method Grid\Column|Collection is_closed_accept_ggcdata(string $label = null)
     * @method Grid\Column|Collection is_closed_accept_hzddata(string $label = null)
     * @method Grid\Column|Collection is_fenpei(string $label = null)
     * @method Grid\Column|Collection is_limit_logintime(string $label = null)
     * @method Grid\Column|Collection is_lizhi(string $label = null)
     * @method Grid\Column|Collection is_manager(string $label = null)
     * @method Grid\Column|Collection is_manager_bcompany(string $label = null)
     * @method Grid\Column|Collection is_manager_big(string $label = null)
     * @method Grid\Column|Collection is_manager_son(string $label = null)
     * @method Grid\Column|Collection is_shenhe_pass(string $label = null)
     * @method Grid\Column|Collection is_superadmin_opend(string $label = null)
     * @method Grid\Column|Collection is_to_ggc(string $label = null)
     * @method Grid\Column|Collection jieke_citys(string $label = null)
     * @method Grid\Column|Collection kefu_role(string $label = null)
     * @method Grid\Column|Collection kefu_seatsid(string $label = null)
     * @method Grid\Column|Collection last_company_duty(string $label = null)
     * @method Grid\Column|Collection last_company_name(string $label = null)
     * @method Grid\Column|Collection lizhi_time(string $label = null)
     * @method Grid\Column|Collection native_place(string $label = null)
     * @method Grid\Column|Collection operator_acceptloan_pkefuid(string $label = null)
     * @method Grid\Column|Collection operator_pkefuid(string $label = null)
     * @method Grid\Column|Collection p_name(string $label = null)
     * @method Grid\Column|Collection plan_loan_daynum(string $label = null)
     * @method Grid\Column|Collection self_tel(string $label = null)
     * @method Grid\Column|Collection sem_loan_day(string $label = null)
     * @method Grid\Column|Collection sem_loan_num(string $label = null)
     * @method Grid\Column|Collection sequence(string $label = null)
     * @method Grid\Column|Collection shenhe_status(string $label = null)
     * @method Grid\Column|Collection son_ids(string $label = null)
     * @method Grid\Column|Collection today_date(string $label = null)
     * @method Grid\Column|Collection unders_num(string $label = null)
     * @method Grid\Column|Collection why_admin_closed(string $label = null)
     * @method Grid\Column|Collection workcard_img(string $label = null)
     * @method Grid\Column|Collection p_mid(string $label = null)
     * @method Grid\Column|Collection amount(string $label = null)
     * @method Grid\Column|Collection bankmanager(string $label = null)
     * @method Grid\Column|Collection chengyi_money(string $label = null)
     * @method Grid\Column|Collection contract_num(string $label = null)
     * @method Grid\Column|Collection due_bank(string $label = null)
     * @method Grid\Column|Collection fangdai_money(string $label = null)
     * @method Grid\Column|Collection gobank_money(string $label = null)
     * @method Grid\Column|Collection gobanktime(string $label = null)
     * @method Grid\Column|Collection is_reviewed(string $label = null)
     * @method Grid\Column|Collection jupi_time(string $label = null)
     * @method Grid\Column|Collection kefuname(string $label = null)
     * @method Grid\Column|Collection loan_time(string $label = null)
     * @method Grid\Column|Collection netincome(string $label = null)
     * @method Grid\Column|Collection pikuan_time(string $label = null)
     * @method Grid\Column|Collection qudaomoney(string $label = null)
     * @method Grid\Column|Collection rates(string $label = null)
     * @method Grid\Column|Collection referralmoney(string $label = null)
     * @method Grid\Column|Collection reviewed_time(string $label = null)
     * @method Grid\Column|Collection shenhe_time(string $label = null)
     * @method Grid\Column|Collection shoukuan_time(string $label = null)
     * @method Grid\Column|Collection weishou_money(string $label = null)
     * @method Grid\Column|Collection weishou_time(string $label = null)
     * @method Grid\Column|Collection weiyue_time(string $label = null)
     * @method Grid\Column|Collection account(string $label = null)
     * @method Grid\Column|Collection salt(string $label = null)
     * @method Grid\Column|Collection usertype(string $label = null)
     * @method Grid\Column|Collection data_type(string $label = null)
     * @method Grid\Column|Collection fangkuan_num(string $label = null)
     * @method Grid\Column|Collection loan_again_num(string $label = null)
     * @method Grid\Column|Collection loannum(string $label = null)
     * @method Grid\Column|Collection stars3(string $label = null)
     * @method Grid\Column|Collection stars4(string $label = null)
     * @method Grid\Column|Collection status0(string $label = null)
     * @method Grid\Column|Collection status2(string $label = null)
     * @method Grid\Column|Collection uptime(string $label = null)
     * @method Grid\Column|Collection kid(string $label = null)
     * @method Grid\Column|Collection module(string $label = null)
     * @method Grid\Column|Collection module_name(string $label = null)
     * @method Grid\Column|Collection route(string $label = null)
     * @method Grid\Column|Collection route_name(string $label = null)
     * @method Grid\Column|Collection copyid(string $label = null)
     * @method Grid\Column|Collection reply_content(string $label = null)
     * @method Grid\Column|Collection reply_time(string $label = null)
     * @method Grid\Column|Collection send_content(string $label = null)
     * @method Grid\Column|Collection send_time(string $label = null)
     * @method Grid\Column|Collection city_data(string $label = null)
     * @method Grid\Column|Collection is_enable(string $label = null)
     * @method Grid\Column|Collection rq_time(string $label = null)
     * @method Grid\Column|Collection sms_template(string $label = null)
     * @method Grid\Column|Collection condition(string $label = null)
     * @method Grid\Column|Collection new_value(string $label = null)
     * @method Grid\Column|Collection old_value(string $label = null)
     * @method Grid\Column|Collection table(string $label = null)
     * @method Grid\Column|Collection kh_job(string $label = null)
     * @method Grid\Column|Collection kh_type(string $label = null)
     * @method Grid\Column|Collection kh_value(string $label = null)
     * @method Grid\Column|Collection operat_position(string $label = null)
     * @method Grid\Column|Collection operat_sys(string $label = null)
     * @method Grid\Column|Collection operator_id(string $label = null)
     * @method Grid\Column|Collection fd_money(string $label = null)
     * @method Grid\Column|Collection month_plan(string $label = null)
     * @method Grid\Column|Collection developer(string $label = null)
     * @method Grid\Column|Collection question_level(string $label = null)
     * @method Grid\Column|Collection question_type(string $label = null)
     * @method Grid\Column|Collection system_type(string $label = null)
     * @method Grid\Column|Collection addtime(string $label = null)
     * @method Grid\Column|Collection distribute_num(string $label = null)
     * @method Grid\Column|Collection distribute_type(string $label = null)
     * @method Grid\Column|Collection end_time(string $label = null)
     * @method Grid\Column|Collection platformid(string $label = null)
     * @method Grid\Column|Collection search_param(string $label = null)
     * @method Grid\Column|Collection start_time(string $label = null)
     * @method Grid\Column|Collection images(string $label = null)
     * @method Grid\Column|Collection mobile_info(string $label = null)
     * @method Grid\Column|Collection seatsid(string $label = null)
     * @method Grid\Column|Collection pid(string $label = null)
     * @method Grid\Column|Collection treatment_content(string $label = null)
     * @method Grid\Column|Collection sqd_now_num(string $label = null)
     * @method Grid\Column|Collection sqd_percent_num(string $label = null)
     * @method Grid\Column|Collection zd_now_num(string $label = null)
     * @method Grid\Column|Collection zd_percent_num(string $label = null)
     * @method Grid\Column|Collection m_pid(string $label = null)
     * @method Grid\Column|Collection author(string $label = null)
     * @method Grid\Column|Collection date(string $label = null)
     * @method Grid\Column|Collection locality(string $label = null)
     * @method Grid\Column|Collection operation_note(string $label = null)
     * @method Grid\Column|Collection small_desc(string $label = null)
     * @method Grid\Column|Collection guwencardid(string $label = null)
     * @method Grid\Column|Collection dpt0(string $label = null)
     * @method Grid\Column|Collection dpt1(string $label = null)
     * @method Grid\Column|Collection dpt2(string $label = null)
     * @method Grid\Column|Collection sat_level(string $label = null)
     * @method Grid\Column|Collection service_money(string $label = null)
     * @method Grid\Column|Collection upd_time(string $label = null)
     * @method Grid\Column|Collection review_id(string $label = null)
     * @method Grid\Column|Collection sendmsg(string $label = null)
     * @method Grid\Column|Collection huashu_content(string $label = null)
     * @method Grid\Column|Collection huashu_type(string $label = null)
     * @method Grid\Column|Collection huashu_type_ch(string $label = null)
     * @method Grid\Column|Collection is_have_logo(string $label = null)
     * @method Grid\Column|Collection import_bigtotal(string $label = null)
     * @method Grid\Column|Collection import_success(string $label = null)
     * @method Grid\Column|Collection import_total(string $label = null)
     * @method Grid\Column|Collection accept_loan_type_do_pkefuid(string $label = null)
     * @method Grid\Column|Collection accept_loanmoney_max(string $label = null)
     * @method Grid\Column|Collection accept_loanmoney_min(string $label = null)
     * @method Grid\Column|Collection accepted_give_daynum(string $label = null)
     * @method Grid\Column|Collection accepted_loan_totalnum(string $label = null)
     * @method Grid\Column|Collection accepted_loan_totalnum_firstday(string $label = null)
     * @method Grid\Column|Collection bankcard_img(string $label = null)
     * @method Grid\Column|Collection bcompany(string $label = null)
     * @method Grid\Column|Collection bzsx_one(string $label = null)
     * @method Grid\Column|Collection bzsx_two(string $label = null)
     * @method Grid\Column|Collection credit_img(string $label = null)
     * @method Grid\Column|Collection cw_cityids(string $label = null)
     * @method Grid\Column|Collection cw_citys(string $label = null)
     * @method Grid\Column|Collection dataNum_income_alert_time(string $label = null)
     * @method Grid\Column|Collection give_num(string $label = null)
     * @method Grid\Column|Collection gonggao_id(string $label = null)
     * @method Grid\Column|Collection goods_areas(string $label = null)
     * @method Grid\Column|Collection graduate_img(string $label = null)
     * @method Grid\Column|Collection groupid(string $label = null)
     * @method Grid\Column|Collection guwenid(string $label = null)
     * @method Grid\Column|Collection hezuo_name(string $label = null)
     * @method Grid\Column|Collection hezuo_percent(string $label = null)
     * @method Grid\Column|Collection hezuo_type(string $label = null)
     * @method Grid\Column|Collection is_admin_login_status(string $label = null)
     * @method Grid\Column|Collection is_all_city(string $label = null)
     * @method Grid\Column|Collection is_can_operator_ggcdata(string $label = null)
     * @method Grid\Column|Collection is_check_close(string $label = null)
     * @method Grid\Column|Collection is_closed_accept_yydata(string $label = null)
     * @method Grid\Column|Collection is_closed_changecity_data(string $label = null)
     * @method Grid\Column|Collection is_finance(string $label = null)
     * @method Grid\Column|Collection is_hr(string $label = null)
     * @method Grid\Column|Collection is_performance_remind(string $label = null)
     * @method Grid\Column|Collection is_plan_daynum_do(string $label = null)
     * @method Grid\Column|Collection is_waipai(string $label = null)
     * @method Grid\Column|Collection is_xuni(string $label = null)
     * @method Grid\Column|Collection is_zilao_pass(string $label = null)
     * @method Grid\Column|Collection laodong_img(string $label = null)
     * @method Grid\Column|Collection loanword_month(string $label = null)
     * @method Grid\Column|Collection money_give(string $label = null)
     * @method Grid\Column|Collection money_recharge(string $label = null)
     * @method Grid\Column|Collection plan_loan_num(string $label = null)
     * @method Grid\Column|Collection qudao_type(string $label = null)
     * @method Grid\Column|Collection repeat_deadline_type(string $label = null)
     * @method Grid\Column|Collection s_month(string $label = null)
     * @method Grid\Column|Collection subordinates(string $label = null)
     * @method Grid\Column|Collection subordinates_big(string $label = null)
     * @method Grid\Column|Collection tijian_img(string $label = null)
     * @method Grid\Column|Collection yj_name(string $label = null)
     * @method Grid\Column|Collection ziliao_check_remark(string $label = null)
     * @method Grid\Column|Collection ziliao_check_time(string $label = null)
     * @method Grid\Column|Collection ziliao_time(string $label = null)
     * @method Grid\Column|Collection zuoxi_tel(string $label = null)
     * @method Grid\Column|Collection total_num(string $label = null)
     * @method Grid\Column|Collection undo_num(string $label = null)
     * @method Grid\Column|Collection income(string $label = null)
     * @method Grid\Column|Collection num(string $label = null)
     * @method Grid\Column|Collection data_top(string $label = null)
     * @method Grid\Column|Collection gldata_top(string $label = null)
     * @method Grid\Column|Collection inwork_num(string $label = null)
     * @method Grid\Column|Collection limit_num(string $label = null)
     * @method Grid\Column|Collection acceptloan_status(string $label = null)
     * @method Grid\Column|Collection nownum(string $label = null)
     * @method Grid\Column|Collection planbili(string $label = null)
     * @method Grid\Column|Collection setpot(string $label = null)
     * @method Grid\Column|Collection beat_per(string $label = null)
     * @method Grid\Column|Collection read_flg(string $label = null)
     * @method Grid\Column|Collection company_name(string $label = null)
     * @method Grid\Column|Collection chongzhi_id(string $label = null)
     * @method Grid\Column|Collection chongzhi_type(string $label = null)
     * @method Grid\Column|Collection is_ok(string $label = null)
     * @method Grid\Column|Collection kefu_id(string $label = null)
     * @method Grid\Column|Collection left_money(string $label = null)
     * @method Grid\Column|Collection rest_max(string $label = null)
     * @method Grid\Column|Collection rest_min(string $label = null)
     * @method Grid\Column|Collection work_max(string $label = null)
     * @method Grid\Column|Collection work_min(string $label = null)
     * @method Grid\Column|Collection answer(string $label = null)
     * @method Grid\Column|Collection question(string $label = null)
     * @method Grid\Column|Collection is_answer_right(string $label = null)
     * @method Grid\Column|Collection is_pop(string $label = null)
     * @method Grid\Column|Collection pop_count(string $label = null)
     * @method Grid\Column|Collection demand_num(string $label = null)
     * @method Grid\Column|Collection leader_name(string $label = null)
     * @method Grid\Column|Collection is_show_yeji(string $label = null)
     * @method Grid\Column|Collection done_rate(string $label = null)
     * @method Grid\Column|Collection dpt_cpy(string $label = null)
     * @method Grid\Column|Collection is_show(string $label = null)
     * @method Grid\Column|Collection net(string $label = null)
     * @method Grid\Column|Collection one_data_profit(string $label = null)
     * @method Grid\Column|Collection one_person_net(string $label = null)
     * @method Grid\Column|Collection qy_rate(string $label = null)
     * @method Grid\Column|Collection ranktype(string $label = null)
     * @method Grid\Column|Collection trans_rate(string $label = null)
     * @method Grid\Column|Collection utime(string $label = null)
     * @method Grid\Column|Collection you_rate(string $label = null)
     * @method Grid\Column|Collection yy_rate(string $label = null)
     * @method Grid\Column|Collection eqmark(string $label = null)
     * @method Grid\Column|Collection person_type(string $label = null)
     * @method Grid\Column|Collection test_type(string $label = null)
     * @method Grid\Column|Collection tijian_path(string $label = null)
     * @method Grid\Column|Collection mod(string $label = null)
     * @method Grid\Column|Collection now_job_type(string $label = null)
     * @method Grid\Column|Collection per_num(string $label = null)
     * @method Grid\Column|Collection author_type(string $label = null)
     * @method Grid\Column|Collection brands(string $label = null)
     * @method Grid\Column|Collection cityids(string $label = null)
     * @method Grid\Column|Collection is_system(string $label = null)
     * @method Grid\Column|Collection views(string $label = null)
     * @method Grid\Column|Collection is_see(string $label = null)
     * @method Grid\Column|Collection is_many(string $label = null)
     * @method Grid\Column|Collection week(string $label = null)
     * @method Grid\Column|Collection menustr(string $label = null)
     * @method Grid\Column|Collection erji(string $label = null)
     * @method Grid\Column|Collection fuzeren(string $label = null)
     * @method Grid\Column|Collection guwen(string $label = null)
     * @method Grid\Column|Collection mob_all(string $label = null)
     * @method Grid\Column|Collection yiji(string $label = null)
     * @method Grid\Column|Collection create_income(string $label = null)
     * @method Grid\Column|Collection xiugai_num(string $label = null)
     * @method Grid\Column|Collection average_points(string $label = null)
     * @method Grid\Column|Collection date_type(string $label = null)
     * @method Grid\Column|Collection duration(string $label = null)
     * @method Grid\Column|Collection duration_average(string $label = null)
     * @method Grid\Column|Collection first_num(string $label = null)
     * @method Grid\Column|Collection first_num_day(string $label = null)
     * @method Grid\Column|Collection give_num_day(string $label = null)
     * @method Grid\Column|Collection hb(string $label = null)
     * @method Grid\Column|Collection is_tx(string $label = null)
     * @method Grid\Column|Collection jinjian_month(string $label = null)
     * @method Grid\Column|Collection lds_num_day(string $label = null)
     * @method Grid\Column|Collection lds_num_month(string $label = null)
     * @method Grid\Column|Collection login_day_num(string $label = null)
     * @method Grid\Column|Collection login_num(string $label = null)
     * @method Grid\Column|Collection mob_average(string $label = null)
     * @method Grid\Column|Collection netincome_average(string $label = null)
     * @method Grid\Column|Collection netincome_day(string $label = null)
     * @method Grid\Column|Collection pnum(string $label = null)
     * @method Grid\Column|Collection qds_num_day(string $label = null)
     * @method Grid\Column|Collection qds_num_month(string $label = null)
     * @method Grid\Column|Collection shoukuan_money2(string $label = null)
     * @method Grid\Column|Collection shoukuan_num_day(string $label = null)
     * @method Grid\Column|Collection sm_day(string $label = null)
     * @method Grid\Column|Collection sm_month(string $label = null)
     * @method Grid\Column|Collection data_size(string $label = null)
     * @method Grid\Column|Collection wufanpei(string $label = null)
     * @method Grid\Column|Collection updatetime(string $label = null)
     * @method Grid\Column|Collection is_why(string $label = null)
     * @method Grid\Column|Collection loan_daigenjin_num(string $label = null)
     * @method Grid\Column|Collection loan_daoluan_num(string $label = null)
     * @method Grid\Column|Collection loan_daoluan_num_pre(string $label = null)
     * @method Grid\Column|Collection loan_five_star_num(string $label = null)
     * @method Grid\Column|Collection loan_four_star_num(string $label = null)
     * @method Grid\Column|Collection loan_num(string $label = null)
     * @method Grid\Column|Collection loan_one_star_num(string $label = null)
     * @method Grid\Column|Collection loan_three_star_num(string $label = null)
     * @method Grid\Column|Collection loan_two_star_num(string $label = null)
     * @method Grid\Column|Collection loan_two_star_plus_num(string $label = null)
     * @method Grid\Column|Collection loan_waidi_num(string $label = null)
     * @method Grid\Column|Collection loan_waidi_num_pre(string $label = null)
     * @method Grid\Column|Collection loan_yishouli_num(string $label = null)
     * @method Grid\Column|Collection three_star_above_pre(string $label = null)
     * @method Grid\Column|Collection two_star_above_pre(string $label = null)
     * @method Grid\Column|Collection zfp_daoluan_num(string $label = null)
     * @method Grid\Column|Collection zfp_five_star_num(string $label = null)
     * @method Grid\Column|Collection zfp_four_star_num(string $label = null)
     * @method Grid\Column|Collection zfp_loan_daigenjin_num(string $label = null)
     * @method Grid\Column|Collection zfp_loan_num(string $label = null)
     * @method Grid\Column|Collection zfp_loan_yishouli_num(string $label = null)
     * @method Grid\Column|Collection zfp_one_star_num(string $label = null)
     * @method Grid\Column|Collection zfp_three_star_num(string $label = null)
     * @method Grid\Column|Collection zfp_two_star_num(string $label = null)
     * @method Grid\Column|Collection zfp_two_star_plus_num(string $label = null)
     * @method Grid\Column|Collection zs_daoluan_num(string $label = null)
     * @method Grid\Column|Collection zs_five_star_num(string $label = null)
     * @method Grid\Column|Collection zs_four_star_num(string $label = null)
     * @method Grid\Column|Collection zs_loan_daigenjin_num(string $label = null)
     * @method Grid\Column|Collection zs_loan_num(string $label = null)
     * @method Grid\Column|Collection zs_loan_yishouli_num(string $label = null)
     * @method Grid\Column|Collection zs_one_star_num(string $label = null)
     * @method Grid\Column|Collection zs_three_star_num(string $label = null)
     * @method Grid\Column|Collection zs_two_star_num(string $label = null)
     * @method Grid\Column|Collection zs_two_star_plus_num(string $label = null)
     * @method Grid\Column|Collection chuangshou_money(string $label = null)
     * @method Grid\Column|Collection chuangshou_num(string $label = null)
     * @method Grid\Column|Collection jinjian_num(string $label = null)
     * @method Grid\Column|Collection team_chuangshou_money(string $label = null)
     * @method Grid\Column|Collection team_chuangshou_num(string $label = null)
     * @method Grid\Column|Collection team_jinjian_num(string $label = null)
     * @method Grid\Column|Collection team_pikuan_money(string $label = null)
     * @method Grid\Column|Collection team_pikuan_num(string $label = null)
     * @method Grid\Column|Collection apply_num(string $label = null)
     * @method Grid\Column|Collection youzhi_num(string $label = null)
     * @method Grid\Column|Collection upd_date(string $label = null)
     * @method Grid\Column|Collection waitdo_num(string $label = null)
     * @method Grid\Column|Collection waitdo_rate(string $label = null)
     * @method Grid\Column|Collection add_kefuid(string $label = null)
     * @method Grid\Column|Collection countermeasures(string $label = null)
     * @method Grid\Column|Collection department_big_mubiao(string $label = null)
     * @method Grid\Column|Collection insufficient_today(string $label = null)
     * @method Grid\Column|Collection singn_day(string $label = null)
     * @method Grid\Column|Collection yuji_visit_num(string $label = null)
     * @method Grid\Column|Collection is_read(string $label = null)
     * @method Grid\Column|Collection is_back(string $label = null)
     * @method Grid\Column|Collection left_num(string $label = null)
     * @method Grid\Column|Collection xiaofei_type(string $label = null)
     * @method Grid\Column|Collection viewnum(string $label = null)
     * @method Grid\Column|Collection accepted_user_num(string $label = null)
     * @method Grid\Column|Collection ask_num(string $label = null)
     * @method Grid\Column|Collection good_at_wordids(string $label = null)
     * @method Grid\Column|Collection good_at_work(string $label = null)
     * @method Grid\Column|Collection is_admin_login(string $label = null)
     * @method Grid\Column|Collection is_allocation(string $label = null)
     * @method Grid\Column|Collection is_pass(string $label = null)
     * @method Grid\Column|Collection login_time(string $label = null)
     * @method Grid\Column|Collection parent_managerid(string $label = null)
     * @method Grid\Column|Collection plan_user_num(string $label = null)
     * @method Grid\Column|Collection products_num(string $label = null)
     * @method Grid\Column|Collection provinceid(string $label = null)
     * @method Grid\Column|Collection self_introduction(string $label = null)
     * @method Grid\Column|Collection service_area(string $label = null)
     * @method Grid\Column|Collection service_areaids(string $label = null)
     * @method Grid\Column|Collection alarm_in(string $label = null)
     * @method Grid\Column|Collection alarm_type(string $label = null)
     * @method Grid\Column|Collection hourtime(string $label = null)
     * @method Grid\Column|Collection manager_id(string $label = null)
     * @method Grid\Column|Collection minutetime(string $label = null)
     * @method Grid\Column|Collection state(string $label = null)
     * @method Grid\Column|Collection loanmsg_num(string $label = null)
     * @method Grid\Column|Collection catid(string $label = null)
     * @method Grid\Column|Collection ftitle(string $label = null)
     * @method Grid\Column|Collection is_newstime(string $label = null)
     * @method Grid\Column|Collection keyword(string $label = null)
     * @method Grid\Column|Collection newsid(string $label = null)
     * @method Grid\Column|Collection newstime(string $label = null)
     * @method Grid\Column|Collection picalt(string $label = null)
     * @method Grid\Column|Collection tags(string $label = null)
     * @method Grid\Column|Collection titlepic(string $label = null)
     * @method Grid\Column|Collection titleurl(string $label = null)
     * @method Grid\Column|Collection toptitle(string $label = null)
     * @method Grid\Column|Collection pic_alt(string $label = null)
     * @method Grid\Column|Collection come_from(string $label = null)
     * @method Grid\Column|Collection hand_date(string $label = null)
     * @method Grid\Column|Collection seo_description(string $label = null)
     * @method Grid\Column|Collection seo_keywords(string $label = null)
     * @method Grid\Column|Collection seo_title(string $label = null)
     * @method Grid\Column|Collection c_abutment(string $label = null)
     * @method Grid\Column|Collection c_abutment_email(string $label = null)
     * @method Grid\Column|Collection c_abutment_mobile(string $label = null)
     * @method Grid\Column|Collection c_bank(string $label = null)
     * @method Grid\Column|Collection c_bank_account(string $label = null)
     * @method Grid\Column|Collection c_mainbody(string $label = null)
     * @method Grid\Column|Collection c_manager(string $label = null)
     * @method Grid\Column|Collection c_manager_email(string $label = null)
     * @method Grid\Column|Collection c_manager_mobile(string $label = null)
     * @method Grid\Column|Collection c_operator(string $label = null)
     * @method Grid\Column|Collection c_pay_company(string $label = null)
     * @method Grid\Column|Collection c_paytype(string $label = null)
     * @method Grid\Column|Collection c_platform(string $label = null)
     * @method Grid\Column|Collection c_prepay(string $label = null)
     * @method Grid\Column|Collection c_remarks(string $label = null)
     * @method Grid\Column|Collection c_settlement_cycle(string $label = null)
     * @method Grid\Column|Collection c_settlement_type(string $label = null)
     * @method Grid\Column|Collection c_status(string $label = null)
     * @method Grid\Column|Collection c_time(string $label = null)
     * @method Grid\Column|Collection abutment(string $label = null)
     * @method Grid\Column|Collection abutment_mobile(string $label = null)
     * @method Grid\Column|Collection bank(string $label = null)
     * @method Grid\Column|Collection bank_count(string $label = null)
     * @method Grid\Column|Collection charge_style(string $label = null)
     * @method Grid\Column|Collection function(string $label = null)
     * @method Grid\Column|Collection mainbody(string $label = null)
     * @method Grid\Column|Collection manager(string $label = null)
     * @method Grid\Column|Collection paystyle(string $label = null)
     * @method Grid\Column|Collection platform(string $label = null)
     * @method Grid\Column|Collection remarks(string $label = null)
     * @method Grid\Column|Collection unit_price(string $label = null)
     * @method Grid\Column|Collection url(string $label = null)
     * @method Grid\Column|Collection consumption(string $label = null)
     * @method Grid\Column|Collection daytime(string $label = null)
     * @method Grid\Column|Collection fail(string $label = null)
     * @method Grid\Column|Collection high_quality(string $label = null)
     * @method Grid\Column|Collection message_tongdao(string $label = null)
     * @method Grid\Column|Collection repeat_quality(string $label = null)
     * @method Grid\Column|Collection request_unit_price(string $label = null)
     * @method Grid\Column|Collection succeed(string $label = null)
     * @method Grid\Column|Collection q_abutment(string $label = null)
     * @method Grid\Column|Collection q_abutment_mobile(string $label = null)
     * @method Grid\Column|Collection q_account(string $label = null)
     * @method Grid\Column|Collection q_bank(string $label = null)
     * @method Grid\Column|Collection q_bank_account(string $label = null)
     * @method Grid\Column|Collection q_bname(string $label = null)
     * @method Grid\Column|Collection q_bphone(string $label = null)
     * @method Grid\Column|Collection q_discount(string $label = null)
     * @method Grid\Column|Collection q_domain(string $label = null)
     * @method Grid\Column|Collection q_label(string $label = null)
     * @method Grid\Column|Collection q_mainbody(string $label = null)
     * @method Grid\Column|Collection q_manager(string $label = null)
     * @method Grid\Column|Collection q_password(string $label = null)
     * @method Grid\Column|Collection q_pay_company(string $label = null)
     * @method Grid\Column|Collection q_paytype(string $label = null)
     * @method Grid\Column|Collection q_platform(string $label = null)
     * @method Grid\Column|Collection q_remarks(string $label = null)
     * @method Grid\Column|Collection q_status(string $label = null)
     * @method Grid\Column|Collection q_time(string $label = null)
     * @method Grid\Column|Collection q_url(string $label = null)
     * @method Grid\Column|Collection q_yuanshi(string $label = null)
     * @method Grid\Column|Collection r_apayment(string $label = null)
     * @method Grid\Column|Collection r_consume(string $label = null)
     * @method Grid\Column|Collection r_discount(string $label = null)
     * @method Grid\Column|Collection r_mainbody(string $label = null)
     * @method Grid\Column|Collection r_operator(string $label = null)
     * @method Grid\Column|Collection r_payinfo(string $label = null)
     * @method Grid\Column|Collection r_payment(string $label = null)
     * @method Grid\Column|Collection r_paytype(string $label = null)
     * @method Grid\Column|Collection r_platform(string $label = null)
     * @method Grid\Column|Collection r_qudao(string $label = null)
     * @method Grid\Column|Collection r_status(string $label = null)
     * @method Grid\Column|Collection r_time(string $label = null)
     * @method Grid\Column|Collection w_account(string $label = null)
     * @method Grid\Column|Collection w_auth_time(string $label = null)
     * @method Grid\Column|Collection w_bname(string $label = null)
     * @method Grid\Column|Collection w_company(string $label = null)
     * @method Grid\Column|Collection w_id_card(string $label = null)
     * @method Grid\Column|Collection w_label(string $label = null)
     * @method Grid\Column|Collection w_mainbody(string $label = null)
     * @method Grid\Column|Collection w_manager(string $label = null)
     * @method Grid\Column|Collection w_password(string $label = null)
     * @method Grid\Column|Collection w_paytype(string $label = null)
     * @method Grid\Column|Collection w_phone(string $label = null)
     * @method Grid\Column|Collection w_platform(string $label = null)
     * @method Grid\Column|Collection w_remarks(string $label = null)
     * @method Grid\Column|Collection w_status(string $label = null)
     * @method Grid\Column|Collection w_time(string $label = null)
     * @method Grid\Column|Collection w_url(string $label = null)
     * @method Grid\Column|Collection w_wxid_x(string $label = null)
     * @method Grid\Column|Collection w_wxid_y(string $label = null)
     * @method Grid\Column|Collection unoperator(string $label = null)
     * @method Grid\Column|Collection kefu_phone(string $label = null)
     * @method Grid\Column|Collection response(string $label = null)
     * @method Grid\Column|Collection target_phone(string $label = null)
     * @method Grid\Column|Collection dowhat(string $label = null)
     * @method Grid\Column|Collection isok(string $label = null)
     * @method Grid\Column|Collection p_json(string $label = null)
     * @method Grid\Column|Collection r_json(string $label = null)
     * @method Grid\Column|Collection sendtime(string $label = null)
     * @method Grid\Column|Collection imgurl(string $label = null)
     * @method Grid\Column|Collection is_open(string $label = null)
     * @method Grid\Column|Collection is_url(string $label = null)
     * @method Grid\Column|Collection apply_time(string $label = null)
     * @method Grid\Column|Collection birthday(string $label = null)
     * @method Grid\Column|Collection dtime(string $label = null)
     * @method Grid\Column|Collection ext_info(string $label = null)
     * @method Grid\Column|Collection has_wld_loan(string $label = null)
     * @method Grid\Column|Collection have_ant_credit(string $label = null)
     * @method Grid\Column|Collection have_baoxian(string $label = null)
     * @method Grid\Column|Collection have_car(string $label = null)
     * @method Grid\Column|Collection have_chedai(string $label = null)
     * @method Grid\Column|Collection have_credit_card(string $label = null)
     * @method Grid\Column|Collection have_fangdai(string $label = null)
     * @method Grid\Column|Collection have_fund(string $label = null)
     * @method Grid\Column|Collection have_house(string $label = null)
     * @method Grid\Column|Collection have_job(string $label = null)
     * @method Grid\Column|Collection have_loan(string $label = null)
     * @method Grid\Column|Collection hezuo_meiti(string $label = null)
     * @method Grid\Column|Collection idcard(string $label = null)
     * @method Grid\Column|Collection salary_max(string $label = null)
     * @method Grid\Column|Collection salary_min(string $label = null)
     * @method Grid\Column|Collection shebao(string $label = null)
     * @method Grid\Column|Collection vocation(string $label = null)
     * @method Grid\Column|Collection work_is_bankmoney(string $label = null)
     * @method Grid\Column|Collection trackId(string $label = null)
     * @method Grid\Column|Collection category(string $label = null)
     * @method Grid\Column|Collection message(string $label = null)
     * @method Grid\Column|Collection decrypt_json_data(string $label = null)
     * @method Grid\Column|Collection error_msg(string $label = null)
     * @method Grid\Column|Collection user_applyloan_id(string $label = null)
     * @method Grid\Column|Collection company_id(string $label = null)
     * @method Grid\Column|Collection create_time(string $label = null)
     * @method Grid\Column|Collection day_push_num(string $label = null)
     * @method Grid\Column|Collection day_push_success(string $label = null)
     * @method Grid\Column|Collection ymd(string $label = null)
     * @method Grid\Column|Collection distribution_limit(string $label = null)
     * @method Grid\Column|Collection is_display(string $label = null)
     * @method Grid\Column|Collection now_num(string $label = null)
     * @method Grid\Column|Collection percent_num(string $label = null)
     * @method Grid\Column|Collection stauts(string $label = null)
     * @method Grid\Column|Collection source_encode(string $label = null)
     * @method Grid\Column|Collection accord_deduct_rate50(string $label = null)
     * @method Grid\Column|Collection accord_deduct_rate60(string $label = null)
     * @method Grid\Column|Collection accord_deduct_rate70(string $label = null)
     * @method Grid\Column|Collection city_id(string $label = null)
     * @method Grid\Column|Collection is_kouliang(string $label = null)
     * @method Grid\Column|Collection kouliang_per(string $label = null)
     * @method Grid\Column|Collection one_money(string $label = null)
     * @method Grid\Column|Collection kehuid(string $label = null)
     * @method Grid\Column|Collection accord_deduct_sign(string $label = null)
     * @method Grid\Column|Collection business_years(string $label = null)
     * @method Grid\Column|Collection creditcard_situation(string $label = null)
     * @method Grid\Column|Collection is_write(string $label = null)
     * @method Grid\Column|Collection nowork_monthincome(string $label = null)
     * @method Grid\Column|Collection work_identity(string $label = null)
     * @method Grid\Column|Collection work_now_company_age(string $label = null)
     * @method Grid\Column|Collection data_id(string $label = null)
     * @method Grid\Column|Collection apply_explanation(string $label = null)
     * @method Grid\Column|Collection apply_ondition(string $label = null)
     * @method Grid\Column|Collection apply_other(string $label = null)
     * @method Grid\Column|Collection assets_max(string $label = null)
     * @method Grid\Column|Collection assets_min(string $label = null)
     * @method Grid\Column|Collection bigtype(string $label = null)
     * @method Grid\Column|Collection credit(string $label = null)
     * @method Grid\Column|Collection credit_id(string $label = null)
     * @method Grid\Column|Collection gourl(string $label = null)
     * @method Grid\Column|Collection img_alt(string $label = null)
     * @method Grid\Column|Collection is_gourl(string $label = null)
     * @method Grid\Column|Collection is_home_show(string $label = null)
     * @method Grid\Column|Collection loan_month_max(string $label = null)
     * @method Grid\Column|Collection loan_month_min(string $label = null)
     * @method Grid\Column|Collection loanday(string $label = null)
     * @method Grid\Column|Collection loanday_id(string $label = null)
     * @method Grid\Column|Collection loanuse(string $label = null)
     * @method Grid\Column|Collection loanuse_ids(string $label = null)
     * @method Grid\Column|Collection money_max(string $label = null)
     * @method Grid\Column|Collection money_min(string $label = null)
     * @method Grid\Column|Collection month_income_max(string $label = null)
     * @method Grid\Column|Collection month_income_min(string $label = null)
     * @method Grid\Column|Collection month_interest_float(string $label = null)
     * @method Grid\Column|Collection month_interest_max(string $label = null)
     * @method Grid\Column|Collection month_interest_min(string $label = null)
     * @method Grid\Column|Collection month_interest_other(string $label = null)
     * @method Grid\Column|Collection need_material(string $label = null)
     * @method Grid\Column|Collection need_material_id(string $label = null)
     * @method Grid\Column|Collection online(string $label = null)
     * @method Grid\Column|Collection other_material(string $label = null)
     * @method Grid\Column|Collection people_age_max(string $label = null)
     * @method Grid\Column|Collection people_age_min(string $label = null)
     * @method Grid\Column|Collection product_img(string $label = null)
     * @method Grid\Column|Collection repayment(string $label = null)
     * @method Grid\Column|Collection repayment_id(string $label = null)
     * @method Grid\Column|Collection type_name1(string $label = null)
     * @method Grid\Column|Collection type_name2(string $label = null)
     * @method Grid\Column|Collection work_id(string $label = null)
     * @method Grid\Column|Collection access_baodan(string $label = null)
     * @method Grid\Column|Collection access_baodan_companys(string $label = null)
     * @method Grid\Column|Collection access_baodan_jiaofeitype(string $label = null)
     * @method Grid\Column|Collection access_baodan_youxiaotime(string $label = null)
     * @method Grid\Column|Collection access_car(string $label = null)
     * @method Grid\Column|Collection access_car_chepaiaddress(string $label = null)
     * @method Grid\Column|Collection access_car_code(string $label = null)
     * @method Grid\Column|Collection access_car_monthtime(string $label = null)
     * @method Grid\Column|Collection access_car_status(string $label = null)
     * @method Grid\Column|Collection access_car_type(string $label = null)
     * @method Grid\Column|Collection access_car_usetime(string $label = null)
     * @method Grid\Column|Collection access_credit(string $label = null)
     * @method Grid\Column|Collection access_credit_chaxun(string $label = null)
     * @method Grid\Column|Collection access_credit_overdue(string $label = null)
     * @method Grid\Column|Collection access_credit_overdue_dj(string $label = null)
     * @method Grid\Column|Collection access_credit_overdue_zdj(string $label = null)
     * @method Grid\Column|Collection access_credit_sixmonth_chaxunnum(string $label = null)
     * @method Grid\Column|Collection access_credit_threemonth_chaxunnum(string $label = null)
     * @method Grid\Column|Collection access_credit_twomonth_chaxunnum(string $label = null)
     * @method Grid\Column|Collection access_credit_type(string $label = null)
     * @method Grid\Column|Collection access_debet(string $label = null)
     * @method Grid\Column|Collection access_debet_max(string $label = null)
     * @method Grid\Column|Collection access_degree(string $label = null)
     * @method Grid\Column|Collection access_degree_type(string $label = null)
     * @method Grid\Column|Collection access_gongjijin(string $label = null)
     * @method Grid\Column|Collection access_gongjijin_jiaocunmoney(string $label = null)
     * @method Grid\Column|Collection access_gongjijin_jishumoney(string $label = null)
     * @method Grid\Column|Collection access_gongjijin_long(string $label = null)
     * @method Grid\Column|Collection access_house(string $label = null)
     * @method Grid\Column|Collection access_house_city(string $label = null)
     * @method Grid\Column|Collection access_house_monthtime(string $label = null)
     * @method Grid\Column|Collection access_house_status(string $label = null)
     * @method Grid\Column|Collection access_house_type(string $label = null)
     * @method Grid\Column|Collection access_income(string $label = null)
     * @method Grid\Column|Collection access_income_intype(string $label = null)
     * @method Grid\Column|Collection access_income_long(string $label = null)
     * @method Grid\Column|Collection access_income_month(string $label = null)
     * @method Grid\Column|Collection access_shebao(string $label = null)
     * @method Grid\Column|Collection access_shebao_long(string $label = null)
     * @method Grid\Column|Collection access_shebao_monthmoney(string $label = null)
     * @method Grid\Column|Collection access_shenfen_age_max(string $label = null)
     * @method Grid\Column|Collection access_shenfen_age_min(string $label = null)
     * @method Grid\Column|Collection access_shenfen_homereg(string $label = null)
     * @method Grid\Column|Collection access_shenfen_industry(string $label = null)
     * @method Grid\Column|Collection access_shenfen_is(string $label = null)
     * @method Grid\Column|Collection access_shenfen_worktype(string $label = null)
     * @method Grid\Column|Collection add_name(string $label = null)
     * @method Grid\Column|Collection keyfield(string $label = null)
     * @method Grid\Column|Collection need_material_baodan(string $label = null)
     * @method Grid\Column|Collection need_material_car(string $label = null)
     * @method Grid\Column|Collection need_material_house(string $label = null)
     * @method Grid\Column|Collection need_material_income(string $label = null)
     * @method Grid\Column|Collection need_material_shangmen(string $label = null)
     * @method Grid\Column|Collection need_material_shenfen(string $label = null)
     * @method Grid\Column|Collection need_material_use(string $label = null)
     * @method Grid\Column|Collection product_bankmoneyday(string $label = null)
     * @method Grid\Column|Collection product_code(string $label = null)
     * @method Grid\Column|Collection product_lixi_type(string $label = null)
     * @method Grid\Column|Collection product_maxmoney(string $label = null)
     * @method Grid\Column|Collection product_minmoney(string $label = null)
     * @method Grid\Column|Collection product_name(string $label = null)
     * @method Grid\Column|Collection product_repayment(string $label = null)
     * @method Grid\Column|Collection product_type1(string $label = null)
     * @method Grid\Column|Collection product_type2(string $label = null)
     * @method Grid\Column|Collection work_gongjijin_jiaocunmoney(string $label = null)
     * @method Grid\Column|Collection pipei_id(string $label = null)
     * @method Grid\Column|Collection product_lixi_num(string $label = null)
     * @method Grid\Column|Collection product_lixi_remark(string $label = null)
     * @method Grid\Column|Collection access_baodan_jiaofeimoney(string $label = null)
     * @method Grid\Column|Collection access_baodan_num(string $label = null)
     * @method Grid\Column|Collection access_baodan_status(string $label = null)
     * @method Grid\Column|Collection access_base_age(string $label = null)
     * @method Grid\Column|Collection access_base_degree(string $label = null)
     * @method Grid\Column|Collection access_base_entrytype(string $label = null)
     * @method Grid\Column|Collection access_base_homereg(string $label = null)
     * @method Grid\Column|Collection access_base_is(string $label = null)
     * @method Grid\Column|Collection access_base_marriage(string $label = null)
     * @method Grid\Column|Collection access_base_school(string $label = null)
     * @method Grid\Column|Collection access_car_baodan(string $label = null)
     * @method Grid\Column|Collection access_car_baodan_num(string $label = null)
     * @method Grid\Column|Collection access_car_monthmoney(string $label = null)
     * @method Grid\Column|Collection access_car_nowmoney(string $label = null)
     * @method Grid\Column|Collection access_credit_overdue_halfyear(string $label = null)
     * @method Grid\Column|Collection access_credit_overdue_is(string $label = null)
     * @method Grid\Column|Collection access_credit_overdue_money(string $label = null)
     * @method Grid\Column|Collection access_credit_overdue_oneyear(string $label = null)
     * @method Grid\Column|Collection access_credit_overdue_twoyear(string $label = null)
     * @method Grid\Column|Collection access_credit_overdue_type(string $label = null)
     * @method Grid\Column|Collection access_credit_recordtime(string $label = null)
     * @method Grid\Column|Collection access_debet_allmoney_dj(string $label = null)
     * @method Grid\Column|Collection access_debet_allmoney_xy(string $label = null)
     * @method Grid\Column|Collection access_debet_balance_xy(string $label = null)
     * @method Grid\Column|Collection access_debet_halfyearuse_dj(string $label = null)
     * @method Grid\Column|Collection access_debet_housetype_fang(string $label = null)
     * @method Grid\Column|Collection access_debet_loanbalance_fang(string $label = null)
     * @method Grid\Column|Collection access_debet_loanmoney_fang(string $label = null)
     * @method Grid\Column|Collection access_debet_max_dj(string $label = null)
     * @method Grid\Column|Collection access_debet_monthrep_xy(string $label = null)
     * @method Grid\Column|Collection access_debet_nowmoney_fang(string $label = null)
     * @method Grid\Column|Collection access_debet_nowuse_dj(string $label = null)
     * @method Grid\Column|Collection access_house_area(string $label = null)
     * @method Grid\Column|Collection access_house_havetime(string $label = null)
     * @method Grid\Column|Collection access_house_monthmoney(string $label = null)
     * @method Grid\Column|Collection access_house_nowmoney(string $label = null)
     * @method Grid\Column|Collection access_shenfen_gongjijin_jiaocun(string $label = null)
     * @method Grid\Column|Collection access_shenfen_gongjijin_jishu(string $label = null)
     * @method Grid\Column|Collection access_shenfen_gongjijin_long(string $label = null)
     * @method Grid\Column|Collection access_shenfen_gufen(string $label = null)
     * @method Grid\Column|Collection access_shenfen_income_aftertax(string $label = null)
     * @method Grid\Column|Collection access_shenfen_income_intype(string $label = null)
     * @method Grid\Column|Collection access_shenfen_income_long(string $label = null)
     * @method Grid\Column|Collection access_shenfen_income_pretax(string $label = null)
     * @method Grid\Column|Collection access_shenfen_licence(string $label = null)
     * @method Grid\Column|Collection access_shenfen_operate_age(string $label = null)
     * @method Grid\Column|Collection access_shenfen_shebao_jiaocun(string $label = null)
     * @method Grid\Column|Collection access_shenfen_shebao_long(string $label = null)
     * @method Grid\Column|Collection need_material_diya(string $label = null)
     * @method Grid\Column|Collection yushen_code(string $label = null)
     * @method Grid\Column|Collection yushen_debet(string $label = null)
     * @method Grid\Column|Collection yushen_money_max(string $label = null)
     * @method Grid\Column|Collection yushen_mul(string $label = null)
     * @method Grid\Column|Collection yushen_type(string $label = null)
     * @method Grid\Column|Collection num1(string $label = null)
     * @method Grid\Column|Collection num2(string $label = null)
     * @method Grid\Column|Collection num3(string $label = null)
     * @method Grid\Column|Collection product_id1(string $label = null)
     * @method Grid\Column|Collection product_id2(string $label = null)
     * @method Grid\Column|Collection product_id3(string $label = null)
     * @method Grid\Column|Collection fandian_num(string $label = null)
     * @method Grid\Column|Collection fandian_type(string $label = null)
     * @method Grid\Column|Collection jinjian_address(string $label = null)
     * @method Grid\Column|Collection jobtype(string $label = null)
     * @method Grid\Column|Collection qudao_username(string $label = null)
     * @method Grid\Column|Collection code(string $label = null)
     * @method Grid\Column|Collection max(string $label = null)
     * @method Grid\Column|Collection min(string $label = null)
     * @method Grid\Column|Collection mul(string $label = null)
     * @method Grid\Column|Collection is_nextday_update(string $label = null)
     * @method Grid\Column|Collection loannum_little(string $label = null)
     * @method Grid\Column|Collection source_type(string $label = null)
     * @method Grid\Column|Collection apply_average_money(string $label = null)
     * @method Grid\Column|Collection is_end_update(string $label = null)
     * @method Grid\Column|Collection tg_type(string $label = null)
     * @method Grid\Column|Collection tuiguang_money(string $label = null)
     * @method Grid\Column|Collection can_look_citys(string $label = null)
     * @method Grid\Column|Collection qudaocardid(string $label = null)
     * @method Grid\Column|Collection facetalk_hourtime(string $label = null)
     * @method Grid\Column|Collection qudao_bankloantime(string $label = null)
     * @method Grid\Column|Collection qudao_bankmanager(string $label = null)
     * @method Grid\Column|Collection qudao_bankname(string $label = null)
     * @method Grid\Column|Collection qudao_bankpikuan(string $label = null)
     * @method Grid\Column|Collection qudao_bankrates(string $label = null)
     * @method Grid\Column|Collection qudao_borrowing(string $label = null)
     * @method Grid\Column|Collection qudao_callindealdate(string $label = null)
     * @method Grid\Column|Collection qudao_clienttype(string $label = null)
     * @method Grid\Column|Collection qudao_collectiontime(string $label = null)
     * @method Grid\Column|Collection qudao_consumingdate(string $label = null)
     * @method Grid\Column|Collection qudao_consumingpeople(string $label = null)
     * @method Grid\Column|Collection qudao_contractor(string $label = null)
     * @method Grid\Column|Collection qudao_contractordate(string $label = null)
     * @method Grid\Column|Collection qudao_currentaddress(string $label = null)
     * @method Grid\Column|Collection qudao_department(string $label = null)
     * @method Grid\Column|Collection qudao_departmentincharge(string $label = null)
     * @method Grid\Column|Collection qudao_gobanktime(string $label = null)
     * @method Grid\Column|Collection qudao_hetongno(string $label = null)
     * @method Grid\Column|Collection qudao_idcardaddress(string $label = null)
     * @method Grid\Column|Collection qudao_netincome(string $label = null)
     * @method Grid\Column|Collection qudao_pikuantime(string $label = null)
     * @method Grid\Column|Collection qudao_qudaomoney(string $label = null)
     * @method Grid\Column|Collection qudao_referralmoney(string $label = null)
     * @method Grid\Column|Collection qudao_servicecharges(string $label = null)
     * @method Grid\Column|Collection qudao_status(string $label = null)
     * @method Grid\Column|Collection qudao_zhudai_acceptmoney(string $label = null)
     * @method Grid\Column|Collection user_idcard(string $label = null)
     * @method Grid\Column|Collection check_id(string $label = null)
     * @method Grid\Column|Collection is_newest(string $label = null)
     * @method Grid\Column|Collection is_repeat(string $label = null)
     * @method Grid\Column|Collection reply_con(string $label = null)
     * @method Grid\Column|Collection reply_phone(string $label = null)
     * @method Grid\Column|Collection sysn_msg(string $label = null)
     * @method Grid\Column|Collection rcvid(string $label = null)
     * @method Grid\Column|Collection kaoheyeji(string $label = null)
     * @method Grid\Column|Collection bio(string $label = null)
     * @method Grid\Column|Collection diploma(string $label = null)
     * @method Grid\Column|Collection job(string $label = null)
     * @method Grid\Column|Collection working_life(string $label = null)
     * @method Grid\Column|Collection director(string $label = null)
     * @method Grid\Column|Collection domain_cw(string $label = null)
     * @method Grid\Column|Collection domain_name(string $label = null)
     * @method Grid\Column|Collection domain_qd(string $label = null)
     * @method Grid\Column|Collection domain_rl(string $label = null)
     * @method Grid\Column|Collection fuze_name(string $label = null)
     * @method Grid\Column|Collection package(string $label = null)
     * @method Grid\Column|Collection schedule(string $label = null)
     * @method Grid\Column|Collection count(string $label = null)
     * @method Grid\Column|Collection add_time(string $label = null)
     * @method Grid\Column|Collection objective_beijing(string $label = null)
     * @method Grid\Column|Collection objective_changsha(string $label = null)
     * @method Grid\Column|Collection objective_donggouan(string $label = null)
     * @method Grid\Column|Collection objective_foshan(string $label = null)
     * @method Grid\Column|Collection objective_guangzhou(string $label = null)
     * @method Grid\Column|Collection objective_hangzhou(string $label = null)
     * @method Grid\Column|Collection objective_shanghai(string $label = null)
     * @method Grid\Column|Collection objective_shenzhen(string $label = null)
     * @method Grid\Column|Collection tongji_type(string $label = null)
     * @method Grid\Column|Collection bannerpic(string $label = null)
     * @method Grid\Column|Collection middlepic(string $label = null)
     * @method Grid\Column|Collection rate(string $label = null)
     * @method Grid\Column|Collection source_ch(string $label = null)
     * @method Grid\Column|Collection baidu_code_pc(string $label = null)
     * @method Grid\Column|Collection baidu_code_wap(string $label = null)
     * @method Grid\Column|Collection day_data_num(string $label = null)
     * @method Grid\Column|Collection day_plan_num(string $label = null)
     * @method Grid\Column|Collection day_today(string $label = null)
     * @method Grid\Column|Collection fandian(string $label = null)
     * @method Grid\Column|Collection is_close_accept_data(string $label = null)
     * @method Grid\Column|Collection is_hezuo(string $label = null)
     * @method Grid\Column|Collection ocpc_code_wap(string $label = null)
     * @method Grid\Column|Collection ocpc_jscode_wap(string $label = null)
     * @method Grid\Column|Collection pc_source_grade(string $label = null)
     * @method Grid\Column|Collection source_ch_big(string $label = null)
     * @method Grid\Column|Collection url_front(string $label = null)
     * @method Grid\Column|Collection wap_source_grade(string $label = null)
     * @method Grid\Column|Collection which_page(string $label = null)
     * @method Grid\Column|Collection who_add(string $label = null)
     * @method Grid\Column|Collection loannum_bj(string $label = null)
     * @method Grid\Column|Collection loannum_changsha(string $label = null)
     * @method Grid\Column|Collection loannum_cq(string $label = null)
     * @method Grid\Column|Collection loannum_dg(string $label = null)
     * @method Grid\Column|Collection loannum_fs(string $label = null)
     * @method Grid\Column|Collection loannum_gz(string $label = null)
     * @method Grid\Column|Collection loannum_huizhou(string $label = null)
     * @method Grid\Column|Collection loannum_hz(string $label = null)
     * @method Grid\Column|Collection loannum_nanjing(string $label = null)
     * @method Grid\Column|Collection loannum_qita(string $label = null)
     * @method Grid\Column|Collection loannum_sh(string $label = null)
     * @method Grid\Column|Collection loannum_suzhou(string $label = null)
     * @method Grid\Column|Collection loannum_sz(string $label = null)
     * @method Grid\Column|Collection loannum_tianjin(string $label = null)
     * @method Grid\Column|Collection loannum_wuhan(string $label = null)
     * @method Grid\Column|Collection loannum_huzhou(string $label = null)
     * @method Grid\Column|Collection loannum_nanning(string $label = null)
     * @method Grid\Column|Collection loannum_shanghai(string $label = null)
     * @method Grid\Column|Collection loannum_xiamen(string $label = null)
     * @method Grid\Column|Collection loannum_beijing(string $label = null)
     * @method Grid\Column|Collection loannum_chongqing(string $label = null)
     * @method Grid\Column|Collection loannum_dongguan(string $label = null)
     * @method Grid\Column|Collection loannum_foshan(string $label = null)
     * @method Grid\Column|Collection loannum_guangzhou(string $label = null)
     * @method Grid\Column|Collection loannum_hangzhou(string $label = null)
     * @method Grid\Column|Collection loannum_shenzhen(string $label = null)
     * @method Grid\Column|Collection add_uid(string $label = null)
     * @method Grid\Column|Collection en_name(string $label = null)
     * @method Grid\Column|Collection p_id_ex1(string $label = null)
     * @method Grid\Column|Collection website_type(string $label = null)
     * @method Grid\Column|Collection remove_type(string $label = null)
     * @method Grid\Column|Collection s_json(string $label = null)
     * @method Grid\Column|Collection hits(string $label = null)
     * @method Grid\Column|Collection is_redirect(string $label = null)
     * @method Grid\Column|Collection redirect_url(string $label = null)
     * @method Grid\Column|Collection view_num(string $label = null)
     * @method Grid\Column|Collection client_phone(string $label = null)
     * @method Grid\Column|Collection opt_id(string $label = null)
     * @method Grid\Column|Collection opt_name(string $label = null)
     * @method Grid\Column|Collection rps_msg(string $label = null)
     * @method Grid\Column|Collection directoryname(string $label = null)
     * @method Grid\Column|Collection tag(string $label = null)
     * @method Grid\Column|Collection in_num(string $label = null)
     * @method Grid\Column|Collection is_status(string $label = null)
     * @method Grid\Column|Collection js_num(string $label = null)
     * @method Grid\Column|Collection nowday(string $label = null)
     * @method Grid\Column|Collection seqencing(string $label = null)
     * @method Grid\Column|Collection xq_num(string $label = null)
     * @method Grid\Column|Collection update_time(string $label = null)
     * @method Grid\Column|Collection del_name(string $label = null)
     * @method Grid\Column|Collection channel_code(string $label = null)
     * @method Grid\Column|Collection id_stop(string $label = null)
     * @method Grid\Column|Collection key(string $label = null)
     * @method Grid\Column|Collection systype(string $label = null)
     * @method Grid\Column|Collection sysvalue(string $label = null)
     * @method Grid\Column|Collection sysvalue2(string $label = null)
     * @method Grid\Column|Collection desc(string $label = null)
     * @method Grid\Column|Collection faile_code(string $label = null)
     * @method Grid\Column|Collection faile_msg(string $label = null)
     * @method Grid\Column|Collection login_url(string $label = null)
     * @method Grid\Column|Collection ipnum(string $label = null)
     * @method Grid\Column|Collection loannum_nantong(string $label = null)
     * @method Grid\Column|Collection loannum_other(string $label = null)
     * @method Grid\Column|Collection loannum_zhengzhou(string $label = null)
     * @method Grid\Column|Collection loannum_zhuhai(string $label = null)
     * @method Grid\Column|Collection loannum_zs(string $label = null)
     * @method Grid\Column|Collection mobilenum(string $label = null)
     * @method Grid\Column|Collection pcnum(string $label = null)
     * @method Grid\Column|Collection pv(string $label = null)
     * @method Grid\Column|Collection uv(string $label = null)
     * @method Grid\Column|Collection status0num(string $label = null)
     * @method Grid\Column|Collection status1num(string $label = null)
     * @method Grid\Column|Collection status2num(string $label = null)
     * @method Grid\Column|Collection status3num(string $label = null)
     * @method Grid\Column|Collection status4num(string $label = null)
     * @method Grid\Column|Collection status5num(string $label = null)
     * @method Grid\Column|Collection status6num(string $label = null)
     * @method Grid\Column|Collection status7num(string $label = null)
     * @method Grid\Column|Collection status8num(string $label = null)
     * @method Grid\Column|Collection totalnum(string $label = null)
     * @method Grid\Column|Collection four_star_num(string $label = null)
     * @method Grid\Column|Collection lowquality(string $label = null)
     * @method Grid\Column|Collection one_star_num(string $label = null)
     * @method Grid\Column|Collection read_rigned_num(string $label = null)
     * @method Grid\Column|Collection three_star_num(string $label = null)
     * @method Grid\Column|Collection two_star_num(string $label = null)
     * @method Grid\Column|Collection waitingdo_num(string $label = null)
     * @method Grid\Column|Collection again_five_star_num(string $label = null)
     * @method Grid\Column|Collection again_four_star_num(string $label = null)
     * @method Grid\Column|Collection again_lowquality(string $label = null)
     * @method Grid\Column|Collection again_num(string $label = null)
     * @method Grid\Column|Collection again_one_star_num(string $label = null)
     * @method Grid\Column|Collection again_three_star_num(string $label = null)
     * @method Grid\Column|Collection again_two_star_num(string $label = null)
     * @method Grid\Column|Collection again_two_star_plus_num(string $label = null)
     * @method Grid\Column|Collection again_undo_num(string $label = null)
     * @method Grid\Column|Collection again_waitingdo_num(string $label = null)
     * @method Grid\Column|Collection five_star_num(string $label = null)
     * @method Grid\Column|Collection two_star_plus_num(string $label = null)
     * @method Grid\Column|Collection waidi_num(string $label = null)
     * @method Grid\Column|Collection zs_lowquality(string $label = null)
     * @method Grid\Column|Collection zs_num(string $label = null)
     * @method Grid\Column|Collection zs_undo_num(string $label = null)
     * @method Grid\Column|Collection zs_waitingdo_num(string $label = null)
     * @method Grid\Column|Collection high_quality_money(string $label = null)
     * @method Grid\Column|Collection high_quality_num(string $label = null)
     * @method Grid\Column|Collection is_ziying(string $label = null)
     * @method Grid\Column|Collection low_quality_num(string $label = null)
     * @method Grid\Column|Collection lowquality_percent(string $label = null)
     * @method Grid\Column|Collection mobile_repeat_num(string $label = null)
     * @method Grid\Column|Collection mobile_repeat_percent(string $label = null)
     * @method Grid\Column|Collection two_star_above(string $label = null)
     * @method Grid\Column|Collection twostar_average_money(string $label = null)
     * @method Grid\Column|Collection twostar_percent(string $label = null)
     * @method Grid\Column|Collection waidiloan_num(string $label = null)
     * @method Grid\Column|Collection waidiloan_percent(string $label = null)
     * @method Grid\Column|Collection avg_netincome_money(string $label = null)
     * @method Grid\Column|Collection fangkuang_money(string $label = null)
     * @method Grid\Column|Collection netincome_money(string $label = null)
     * @method Grid\Column|Collection pnum_bz(string $label = null)
     * @method Grid\Column|Collection access_token(string $label = null)
     * @method Grid\Column|Collection account_id(string $label = null)
     * @method Grid\Column|Collection authorization_code(string $label = null)
     * @method Grid\Column|Collection client_secret(string $label = null)
     * @method Grid\Column|Collection qq(string $label = null)
     * @method Grid\Column|Collection refresh_token(string $label = null)
     * @method Grid\Column|Collection s_account_id(string $label = null)
     * @method Grid\Column|Collection s_qq(string $label = null)
     * @method Grid\Column|Collection user_action_set_id(string $label = null)
     * @method Grid\Column|Collection advertiser_id(string $label = null)
     * @method Grid\Column|Collection click_id(string $label = null)
     * @method Grid\Column|Collection baodan(string $label = null)
     * @method Grid\Column|Collection baodan_remark(string $label = null)
     * @method Grid\Column|Collection company_card_have(string $label = null)
     * @method Grid\Column|Collection company_card_regarea(string $label = null)
     * @method Grid\Column|Collection company_card_regyear(string $label = null)
     * @method Grid\Column|Collection company_type(string $label = null)
     * @method Grid\Column|Collection company_typeid(string $label = null)
     * @method Grid\Column|Collection company_year_fpmoney(string $label = null)
     * @method Grid\Column|Collection company_yearincome(string $label = null)
     * @method Grid\Column|Collection creditid(string $label = null)
     * @method Grid\Column|Collection fundid(string $label = null)
     * @method Grid\Column|Collection house_remark(string $label = null)
     * @method Grid\Column|Collection income_source(string $label = null)
     * @method Grid\Column|Collection job_year(string $label = null)
     * @method Grid\Column|Collection job_yearid(string $label = null)
     * @method Grid\Column|Collection jobid(string $label = null)
     * @method Grid\Column|Collection monthly(string $label = null)
     * @method Grid\Column|Collection monthly_sendtype(string $label = null)
     * @method Grid\Column|Collection monthlyid(string $label = null)
     * @method Grid\Column|Collection inserttime(string $label = null)
     * @method Grid\Column|Collection movetype(string $label = null)
     * @method Grid\Column|Collection baodan_company(string $label = null)
     * @method Grid\Column|Collection baodan_jiaofeitype(string $label = null)
     * @method Grid\Column|Collection baodan_status(string $label = null)
     * @method Grid\Column|Collection baodan_times(string $label = null)
     * @method Grid\Column|Collection baodan_year_money(string $label = null)
     * @method Grid\Column|Collection baodan_youxiaoyear(string $label = null)
     * @method Grid\Column|Collection business_address(string $label = null)
     * @method Grid\Column|Collection business_gufen(string $label = null)
     * @method Grid\Column|Collection business_industry(string $label = null)
     * @method Grid\Column|Collection business_is_yingyezhizhao(string $label = null)
     * @method Grid\Column|Collection business_monthmoney(string $label = null)
     * @method Grid\Column|Collection business_shenfen(string $label = null)
     * @method Grid\Column|Collection business_yearinvoicemoney(string $label = null)
     * @method Grid\Column|Collection business_yearmoney(string $label = null)
     * @method Grid\Column|Collection callstatus(string $label = null)
     * @method Grid\Column|Collection callstatus_ch(string $label = null)
     * @method Grid\Column|Collection calltype(string $label = null)
     * @method Grid\Column|Collection car_age(string $label = null)
     * @method Grid\Column|Collection car_baodan_paynum(string $label = null)
     * @method Grid\Column|Collection car_brands(string $label = null)
     * @method Grid\Column|Collection car_buy_money(string $label = null)
     * @method Grid\Column|Collection car_card_area(string $label = null)
     * @method Grid\Column|Collection car_city(string $label = null)
     * @method Grid\Column|Collection car_cityid(string $label = null)
     * @method Grid\Column|Collection car_code(string $label = null)
     * @method Grid\Column|Collection car_insurance_company(string $label = null)
     * @method Grid\Column|Collection car_km(string $label = null)
     * @method Grid\Column|Collection car_loan_money(string $label = null)
     * @method Grid\Column|Collection car_mortgage_money(string $label = null)
     * @method Grid\Column|Collection car_mortgage_status(string $label = null)
     * @method Grid\Column|Collection car_province(string $label = null)
     * @method Grid\Column|Collection car_provinceid(string $label = null)
     * @method Grid\Column|Collection car_repayment_month(string $label = null)
     * @method Grid\Column|Collection car_status(string $label = null)
     * @method Grid\Column|Collection car_type(string $label = null)
     * @method Grid\Column|Collection car_valuation_money(string $label = null)
     * @method Grid\Column|Collection company_whiltelist(string $label = null)
     * @method Grid\Column|Collection credit_banks(string $label = null)
     * @method Grid\Column|Collection credit_check_inmonths(string $label = null)
     * @method Grid\Column|Collection credit_check_inmonths_num(string $label = null)
     * @method Grid\Column|Collection credit_check_sixdmonth_num(string $label = null)
     * @method Grid\Column|Collection credit_check_thirdmonth_num(string $label = null)
     * @method Grid\Column|Collection credit_check_twomonth_num(string $label = null)
     * @method Grid\Column|Collection credit_fuzhai(string $label = null)
     * @method Grid\Column|Collection credit_has_bannian_usemoney(string $label = null)
     * @method Grid\Column|Collection credit_has_maxuse_money(string $label = null)
     * @method Grid\Column|Collection credit_house_is(string $label = null)
     * @method Grid\Column|Collection credit_house_loan_lave(string $label = null)
     * @method Grid\Column|Collection credit_house_loan_moneys(string $label = null)
     * @method Grid\Column|Collection credit_house_money(string $label = null)
     * @method Grid\Column|Collection credit_house_status(string $label = null)
     * @method Grid\Column|Collection credit_left_money(string $label = null)
     * @method Grid\Column|Collection credit_record_time(string $label = null)
     * @method Grid\Column|Collection credit_repayment_monthmoney(string $label = null)
     * @method Grid\Column|Collection credit_situation(string $label = null)
     * @method Grid\Column|Collection credit_total_money(string $label = null)
     * @method Grid\Column|Collection credit_type(string $label = null)
     * @method Grid\Column|Collection creditcard_has_usemoney(string $label = null)
     * @method Grid\Column|Collection creditcard_nums(string $label = null)
     * @method Grid\Column|Collection creditcard_totalmoney(string $label = null)
     * @method Grid\Column|Collection creditoverdue(string $label = null)
     * @method Grid\Column|Collection creditoverdue_halfyear(string $label = null)
     * @method Grid\Column|Collection creditoverdue_happentime(string $label = null)
     * @method Grid\Column|Collection creditoverdue_happentime_dj(string $label = null)
     * @method Grid\Column|Collection creditoverdue_happentime_zdj(string $label = null)
     * @method Grid\Column|Collection creditoverdue_is(string $label = null)
     * @method Grid\Column|Collection creditoverdue_money(string $label = null)
     * @method Grid\Column|Collection creditoverdue_money_dj(string $label = null)
     * @method Grid\Column|Collection creditoverdue_money_zdj(string $label = null)
     * @method Grid\Column|Collection creditoverdue_nums(string $label = null)
     * @method Grid\Column|Collection creditoverdue_nums_dj(string $label = null)
     * @method Grid\Column|Collection creditoverdue_nums_zdj(string $label = null)
     * @method Grid\Column|Collection creditoverdue_oneyear(string $label = null)
     * @method Grid\Column|Collection creditoverdue_time(string $label = null)
     * @method Grid\Column|Collection creditoverdue_twoyear(string $label = null)
     * @method Grid\Column|Collection creditoverdue_type(string $label = null)
     * @method Grid\Column|Collection daiqianyue_time(string $label = null)
     * @method Grid\Column|Collection do_del_adminname(string $label = null)
     * @method Grid\Column|Collection facetalk_actual_is(string $label = null)
     * @method Grid\Column|Collection facetalk_updatetime(string $label = null)
     * @method Grid\Column|Collection good_star_updatetime(string $label = null)
     * @method Grid\Column|Collection good_statr_move_time(string $label = null)
     * @method Grid\Column|Collection hezuo_time(string $label = null)
     * @method Grid\Column|Collection house_address(string $label = null)
     * @method Grid\Column|Collection house_area(string $label = null)
     * @method Grid\Column|Collection house_area_small(string $label = null)
     * @method Grid\Column|Collection house_buy_money(string $label = null)
     * @method Grid\Column|Collection house_buy_time(string $label = null)
     * @method Grid\Column|Collection house_city(string $label = null)
     * @method Grid\Column|Collection house_cityid(string $label = null)
     * @method Grid\Column|Collection house_is_rent(string $label = null)
     * @method Grid\Column|Collection house_loan_money(string $label = null)
     * @method Grid\Column|Collection house_mortgage_case(string $label = null)
     * @method Grid\Column|Collection house_mortgage_money(string $label = null)
     * @method Grid\Column|Collection house_now_money(string $label = null)
     * @method Grid\Column|Collection house_province(string $label = null)
     * @method Grid\Column|Collection house_provinceid(string $label = null)
     * @method Grid\Column|Collection house_rent_monthmoney(string $label = null)
     * @method Grid\Column|Collection house_repayment_month(string $label = null)
     * @method Grid\Column|Collection house_status(string $label = null)
     * @method Grid\Column|Collection house_type(string $label = null)
     * @method Grid\Column|Collection is_bank_money(string $label = null)
     * @method Grid\Column|Collection is_hand_add(string $label = null)
     * @method Grid\Column|Collection is_move(string $label = null)
     * @method Grid\Column|Collection is_new_jiami(string $label = null)
     * @method Grid\Column|Collection is_out_othercompany(string $label = null)
     * @method Grid\Column|Collection is_send_msg(string $label = null)
     * @method Grid\Column|Collection loan_month(string $label = null)
     * @method Grid\Column|Collection loan_monthid(string $label = null)
     * @method Grid\Column|Collection loan_repayment_source(string $label = null)
     * @method Grid\Column|Collection loan_repayment_type(string $label = null)
     * @method Grid\Column|Collection loan_use(string $label = null)
     * @method Grid\Column|Collection loan_use_time(string $label = null)
     * @method Grid\Column|Collection material_bank_is(string $label = null)
     * @method Grid\Column|Collection mobile2(string $label = null)
     * @method Grid\Column|Collection nowork_dowhat(string $label = null)
     * @method Grid\Column|Collection old_guwenid(string $label = null)
     * @method Grid\Column|Collection old_kefuids(string $label = null)
     * @method Grid\Column|Collection old_managerid(string $label = null)
     * @method Grid\Column|Collection old_managerids(string $label = null)
     * @method Grid\Column|Collection productid(string $label = null)
     * @method Grid\Column|Collection self_repeat_mobilenum(string $label = null)
     * @method Grid\Column|Collection source_en(string $label = null)
     * @method Grid\Column|Collection source_grade(string $label = null)
     * @method Grid\Column|Collection source_type2(string $label = null)
     * @method Grid\Column|Collection source_type_big(string $label = null)
     * @method Grid\Column|Collection sourceid(string $label = null)
     * @method Grid\Column|Collection system_prompt(string $label = null)
     * @method Grid\Column|Collection third_uid(string $label = null)
     * @method Grid\Column|Collection tpage(string $label = null)
     * @method Grid\Column|Collection true_city(string $label = null)
     * @method Grid\Column|Collection true_loan_time(string $label = null)
     * @method Grid\Column|Collection tuiguang_type(string $label = null)
     * @method Grid\Column|Collection user_census_address(string $label = null)
     * @method Grid\Column|Collection user_city(string $label = null)
     * @method Grid\Column|Collection user_cityid(string $label = null)
     * @method Grid\Column|Collection user_degree(string $label = null)
     * @method Grid\Column|Collection user_entrytype(string $label = null)
     * @method Grid\Column|Collection user_ismarry(string $label = null)
     * @method Grid\Column|Collection user_province(string $label = null)
     * @method Grid\Column|Collection user_provinceid(string $label = null)
     * @method Grid\Column|Collection user_school(string $label = null)
     * @method Grid\Column|Collection work_address(string $label = null)
     * @method Grid\Column|Collection work_city(string $label = null)
     * @method Grid\Column|Collection work_company_name(string $label = null)
     * @method Grid\Column|Collection work_company_type(string $label = null)
     * @method Grid\Column|Collection work_gongjijin(string $label = null)
     * @method Grid\Column|Collection work_gongjijin_long(string $label = null)
     * @method Grid\Column|Collection work_hangye(string $label = null)
     * @method Grid\Column|Collection work_income_long(string $label = null)
     * @method Grid\Column|Collection work_income_taxtype(string $label = null)
     * @method Grid\Column|Collection work_position(string $label = null)
     * @method Grid\Column|Collection work_shebao_long(string $label = null)
     * @method Grid\Column|Collection work_shebao_money(string $label = null)
     * @method Grid\Column|Collection work_wage_bank_money(string $label = null)
     * @method Grid\Column|Collection aptitude(string $label = null)
     * @method Grid\Column|Collection clue_id(string $label = null)
     * @method Grid\Column|Collection flag(string $label = null)
     * @method Grid\Column|Collection flag2(string $label = null)
     * @method Grid\Column|Collection ucid(string $label = null)
     * @method Grid\Column|Collection belong_city(string $label = null)
     * @method Grid\Column|Collection belong_department_bcompany(string $label = null)
     * @method Grid\Column|Collection deal_status(string $label = null)
     * @method Grid\Column|Collection isbankpay(string $label = null)
     * @method Grid\Column|Collection meiti(string $label = null)
     * @method Grid\Column|Collection rong_create_time(string $label = null)
     * @method Grid\Column|Collection rong_id(string $label = null)
     * @method Grid\Column|Collection rong_log_id(string $label = null)
     * @method Grid\Column|Collection ads(string $label = null)
     * @method Grid\Column|Collection car_life(string $label = null)
     * @method Grid\Column|Collection car_model(string $label = null)
     * @method Grid\Column|Collection car_price(string $label = null)
     * @method Grid\Column|Collection card_no(string $label = null)
     * @method Grid\Column|Collection creativeid(string $label = null)
     * @method Grid\Column|Collection customer_id(string $label = null)
     * @method Grid\Column|Collection education(string $label = null)
     * @method Grid\Column|Collection employment_time(string $label = null)
     * @method Grid\Column|Collection house_life(string $label = null)
     * @method Grid\Column|Collection house_price(string $label = null)
     * @method Grid\Column|Collection house_size(string $label = null)
     * @method Grid\Column|Collection is_credit(string $label = null)
     * @method Grid\Column|Collection is_married(string $label = null)
     * @method Grid\Column|Collection loan_long_time(string $label = null)
     * @method Grid\Column|Collection monthly_income(string $label = null)
     * @method Grid\Column|Collection payroll_type(string $label = null)
     * @method Grid\Column|Collection product_id(string $label = null)
     * @method Grid\Column|Collection professional(string $label = null)
     * @method Grid\Column|Collection time_str(string $label = null)
     * @method Grid\Column|Collection use_for(string $label = null)
     * @method Grid\Column|Collection zm_score(string $label = null)
     * @method Grid\Column|Collection checking_type(string $label = null)
     * @method Grid\Column|Collection dianzi_money(string $label = null)
     * @method Grid\Column|Collection is_dianzi(string $label = null)
     * @method Grid\Column|Collection qudao_mids(string $label = null)
     * @method Grid\Column|Collection qudao_mname(string $label = null)
     * @method Grid\Column|Collection shoukuan_month(string $label = null)
     * @method Grid\Column|Collection sk_uptime(string $label = null)
     * @method Grid\Column|Collection is_movie(string $label = null)
     * @method Grid\Column|Collection bj_chuangshou(string $label = null)
     * @method Grid\Column|Collection bj_jinjian_money(string $label = null)
     * @method Grid\Column|Collection bj_jinjian_num(string $label = null)
     * @method Grid\Column|Collection bj_pikuan_money(string $label = null)
     * @method Grid\Column|Collection bj_pikuan_num(string $label = null)
     * @method Grid\Column|Collection dg_chuangshou(string $label = null)
     * @method Grid\Column|Collection dg_jinjian_money(string $label = null)
     * @method Grid\Column|Collection dg_jinjian_num(string $label = null)
     * @method Grid\Column|Collection dg_pikuan_money(string $label = null)
     * @method Grid\Column|Collection dg_pikuan_num(string $label = null)
     * @method Grid\Column|Collection fs_chuangshou(string $label = null)
     * @method Grid\Column|Collection fs_jinjian_money(string $label = null)
     * @method Grid\Column|Collection fs_jinjian_num(string $label = null)
     * @method Grid\Column|Collection fs_pikuan_money(string $label = null)
     * @method Grid\Column|Collection fs_pikuan_num(string $label = null)
     * @method Grid\Column|Collection gz_chuangshou(string $label = null)
     * @method Grid\Column|Collection gz_jinjian_money(string $label = null)
     * @method Grid\Column|Collection gz_jinjian_num(string $label = null)
     * @method Grid\Column|Collection gz_pikuan_money(string $label = null)
     * @method Grid\Column|Collection gz_pikuan_num(string $label = null)
     * @method Grid\Column|Collection hz_chuangshou(string $label = null)
     * @method Grid\Column|Collection hz_jinjian_money(string $label = null)
     * @method Grid\Column|Collection hz_jinjian_num(string $label = null)
     * @method Grid\Column|Collection hz_pikuan_money(string $label = null)
     * @method Grid\Column|Collection hz_pikuan_num(string $label = null)
     * @method Grid\Column|Collection sh_chuangshou(string $label = null)
     * @method Grid\Column|Collection sh_jinjian_money(string $label = null)
     * @method Grid\Column|Collection sh_jinjian_num(string $label = null)
     * @method Grid\Column|Collection sh_pikuan_money(string $label = null)
     * @method Grid\Column|Collection sh_pikuan_num(string $label = null)
     * @method Grid\Column|Collection sz_chuangshou(string $label = null)
     * @method Grid\Column|Collection sz_jinjian_money(string $label = null)
     * @method Grid\Column|Collection sz_jinjian_num(string $label = null)
     * @method Grid\Column|Collection sz_pikuan_money(string $label = null)
     * @method Grid\Column|Collection sz_pikuan_num(string $label = null)
     * @method Grid\Column|Collection intime(string $label = null)
     * @method Grid\Column|Collection remark_num(string $label = null)
     * @method Grid\Column|Collection fenpei_time(string $label = null)
     * @method Grid\Column|Collection is_mobile_city(string $label = null)
     * @method Grid\Column|Collection msgtype(string $label = null)
     * @method Grid\Column|Collection jingshouzhi(string $label = null)
     * @method Grid\Column|Collection is_take(string $label = null)
     * @method Grid\Column|Collection read_kfuids(string $label = null)
     * @method Grid\Column|Collection shenfen_type(string $label = null)
     * @method Grid\Column|Collection data(string $label = null)
     * @method Grid\Column|Collection method(string $label = null)
     * @method Grid\Column|Collection ret_mst(string $label = null)
     * @method Grid\Column|Collection brand_one(string $label = null)
     * @method Grid\Column|Collection brand_two(string $label = null)
     * @method Grid\Column|Collection kefu_tel(string $label = null)
     * @method Grid\Column|Collection recording_url(string $label = null)
     * @method Grid\Column|Collection sessionid(string $label = null)
     * @method Grid\Column|Collection tel_time(string $label = null)
     * @method Grid\Column|Collection addkid(string $label = null)
     * @method Grid\Column|Collection back_way(string $label = null)
     * @method Grid\Column|Collection classify(string $label = null)
     * @method Grid\Column|Collection department_excel(string $label = null)
     * @method Grid\Column|Collection idstr(string $label = null)
     * @method Grid\Column|Collection shouju_num(string $label = null)
     * @method Grid\Column|Collection shoukuan_date(string $label = null)
     * @method Grid\Column|Collection shoukuan_way(string $label = null)
     * @method Grid\Column|Collection state_date(string $label = null)
     * @method Grid\Column|Collection create_date(string $label = null)
     * @method Grid\Column|Collection fid(string $label = null)
     * @method Grid\Column|Collection sat_id(string $label = null)
     * @method Grid\Column|Collection department1(string $label = null)
     * @method Grid\Column|Collection department2(string $label = null)
     * @method Grid\Column|Collection is_checkmobile(string $label = null)
     * @method Grid\Column|Collection is_send_sms(string $label = null)
     * @method Grid\Column|Collection visit_type(string $label = null)
     * @method Grid\Column|Collection dk_star(string $label = null)
     * @method Grid\Column|Collection fw_star(string $label = null)
     * @method Grid\Column|Collection gj_star(string $label = null)
     * @method Grid\Column|Collection gw_phone(string $label = null)
     * @method Grid\Column|Collection today_num(string $label = null)
     * @method Grid\Column|Collection vtype(string $label = null)
     * @method Grid\Column|Collection del_flg(string $label = null)
     * @method Grid\Column|Collection expired_time(string $label = null)
     * @method Grid\Column|Collection baodi_cs(string $label = null)
     * @method Grid\Column|Collection base_wage(string $label = null)
     * @method Grid\Column|Collection chidao(string $label = null)
     * @method Grid\Column|Collection chuqin(string $label = null)
     * @method Grid\Column|Collection cs(string $label = null)
     * @method Grid\Column|Collection daixinjia(string $label = null)
     * @method Grid\Column|Collection data_cost(string $label = null)
     * @method Grid\Column|Collection jinjian_ticheng(string $label = null)
     * @method Grid\Column|Collection kq_koukuan(string $label = null)
     * @method Grid\Column|Collection kuanggong(string $label = null)
     * @method Grid\Column|Collection last_cs(string $label = null)
     * @method Grid\Column|Collection lirun_ticheng(string $label = null)
     * @method Grid\Column|Collection ll_ticheng(string $label = null)
     * @method Grid\Column|Collection logistic_cost(string $label = null)
     * @method Grid\Column|Collection loudaka(string $label = null)
     * @method Grid\Column|Collection month_jidu_money(string $label = null)
     * @method Grid\Column|Collection month_jsxt_ticheng(string $label = null)
     * @method Grid\Column|Collection month_shifa(string $label = null)
     * @method Grid\Column|Collection month_yingfa(string $label = null)
     * @method Grid\Column|Collection niandu_money(string $label = null)
     * @method Grid\Column|Collection person_cs(string $label = null)
     * @method Grid\Column|Collection phone_fare(string $label = null)
     * @method Grid\Column|Collection qita_butie(string $label = null)
     * @method Grid\Column|Collection qita_koukuan(string $label = null)
     * @method Grid\Column|Collection qq_money(string $label = null)
     * @method Grid\Column|Collection queqin(string $label = null)
     * @method Grid\Column|Collection shijia(string $label = null)
     * @method Grid\Column|Collection sj_chuqin(string $label = null)
     * @method Grid\Column|Collection sj_ticheng(string $label = null)
     * @method Grid\Column|Collection syq_jidu_money(string $label = null)
     * @method Grid\Column|Collection xt_ticheng(string $label = null)
     * @method Grid\Column|Collection yingfa_ticheng(string $label = null)
     * @method Grid\Column|Collection zz_day(string $label = null)
     * @method Grid\Column|Collection data_price(string $label = null)
     * @method Grid\Column|Collection common(string $label = null)
     * @method Grid\Column|Collection minuend(string $label = null)
     * @method Grid\Column|Collection percent(string $label = null)
     * @method Grid\Column|Collection setid(string $label = null)
     * @method Grid\Column|Collection day_type(string $label = null)
     * @method Grid\Column|Collection source_account(string $label = null)
     * @method Grid\Column|Collection wc_id(string $label = null)
     * @method Grid\Column|Collection wc_key(string $label = null)
     * @method Grid\Column|Collection wc_name(string $label = null)
     * @method Grid\Column|Collection wc_secret(string $label = null)
     * @method Grid\Column|Collection is_succeed(string $label = null)
     * @method Grid\Column|Collection loanid(string $label = null)
     * @method Grid\Column|Collection msg(string $label = null)
     * @method Grid\Column|Collection rqs_json(string $label = null)
     * @method Grid\Column|Collection rsp_json(string $label = null)
     * @method Grid\Column|Collection sbm_json(string $label = null)
     * @method Grid\Column|Collection phoneid(string $label = null)
     * @method Grid\Column|Collection seatno(string $label = null)
     * @method Grid\Column|Collection vcode(string $label = null)
     * @method Grid\Column|Collection api_version(string $label = null)
     * @method Grid\Column|Collection f_name(string $label = null)
     * @method Grid\Column|Collection g_json(string $label = null)
     * @method Grid\Column|Collection gender(string $label = null)
     * @method Grid\Column|Collection id_card_number(string $label = null)
     * @method Grid\Column|Collection issued_by(string $label = null)
     * @method Grid\Column|Collection race(string $label = null)
     * @method Grid\Column|Collection valid_date(string $label = null)
     * @method Grid\Column|Collection call_auth(string $label = null)
     * @method Grid\Column|Collection file_auth(string $label = null)
     * @method Grid\Column|Collection lacation_time(string $label = null)
     * @method Grid\Column|Collection location_auth(string $label = null)
     * @method Grid\Column|Collection recording_auth(string $label = null)
     * @method Grid\Column|Collection sdk(string $label = null)
     * @method Grid\Column|Collection video_auth(string $label = null)
     * @method Grid\Column|Collection zdt_avatar_img(string $label = null)
     * @method Grid\Column|Collection zdt_idcard_img(string $label = null)
     * @method Grid\Column|Collection zdt_idcard_img_fan(string $label = null)
     * @method Grid\Column|Collection zdt_image_best(string $label = null)
     * @method Grid\Column|Collection zdt_image_env(string $label = null)
     * @method Grid\Column|Collection install_time(string $label = null)
     * @method Grid\Column|Collection chinese_name(string $label = null)
     * @method Grid\Column|Collection device(string $label = null)
     * @method Grid\Column|Collection folder_way(string $label = null)
     * @method Grid\Column|Collection is_have_num(string $label = null)
     * @method Grid\Column|Collection is_num_kongge(string $label = null)
     * @method Grid\Column|Collection call_id(string $label = null)
     * @method Grid\Column|Collection filename(string $label = null)
     * @method Grid\Column|Collection is_done(string $label = null)
     * @method Grid\Column|Collection op_flag(string $label = null)
     * @method Grid\Column|Collection osspath(string $label = null)
     * @method Grid\Column|Collection recordingpath(string $label = null)
     * @method Grid\Column|Collection all_num(string $label = null)
     * @method Grid\Column|Collection kf_num(string $label = null)
     * @method Grid\Column|Collection ofv_min_num(string $label = null)
     * @method Grid\Column|Collection one_min_num(string $label = null)
     * @method Grid\Column|Collection th_fv_min_num(string $label = null)
     * @method Grid\Column|Collection three_min_num(string $label = null)
     * @method Grid\Column|Collection two_min_num(string $label = null)
     * @method Grid\Column|Collection valid_num(string $label = null)
     * @method Grid\Column|Collection hrsc_num(string $label = null)
     * @method Grid\Column|Collection hrzs_num(string $label = null)
     * @method Grid\Column|Collection lds_num(string $label = null)
     * @method Grid\Column|Collection ldsc_num(string $label = null)
     * @method Grid\Column|Collection qds_num(string $label = null)
     * @method Grid\Column|Collection qdsc_num(string $label = null)
     * @method Grid\Column|Collection thly_num(string $label = null)
     * @method Grid\Column|Collection thzs_num(string $label = null)
     * @method Grid\Column|Collection thzsc_num(string $label = null)
     * @method Grid\Column|Collection min_vcode(string $label = null)
     * @method Grid\Column|Collection min_version(string $label = null)
     */
    class Grid {}

    class MiniGrid extends Grid {}

    /**
     * @property Show\Field|Collection created_at
     * @property Show\Field|Collection detail
     * @property Show\Field|Collection id
     * @property Show\Field|Collection name
     * @property Show\Field|Collection type
     * @property Show\Field|Collection updated_at
     * @property Show\Field|Collection version
     * @property Show\Field|Collection is_enabled
     * @property Show\Field|Collection extension
     * @property Show\Field|Collection icon
     * @property Show\Field|Collection order
     * @property Show\Field|Collection parent_id
     * @property Show\Field|Collection uri
     * @property Show\Field|Collection menu_id
     * @property Show\Field|Collection permission_id
     * @property Show\Field|Collection http_method
     * @property Show\Field|Collection http_path
     * @property Show\Field|Collection slug
     * @property Show\Field|Collection role_id
     * @property Show\Field|Collection user_id
     * @property Show\Field|Collection value
     * @property Show\Field|Collection avatar
     * @property Show\Field|Collection password
     * @property Show\Field|Collection remember_token
     * @property Show\Field|Collection username
     * @property Show\Field|Collection channel_name
     * @property Show\Field|Collection channel_title
     * @property Show\Field|Collection channel_type
     * @property Show\Field|Collection encrypt_private_key
     * @property Show\Field|Collection encrypt_public_key
     * @property Show\Field|Collection status
     * @property Show\Field|Collection age
     * @property Show\Field|Collection business_license
     * @property Show\Field|Collection car
     * @property Show\Field|Collection channel_id
     * @property Show\Field|Collection city
     * @property Show\Field|Collection credit_card
     * @property Show\Field|Collection df
     * @property Show\Field|Collection fund
     * @property Show\Field|Collection house
     * @property Show\Field|Collection insurance
     * @property Show\Field|Collection loan_periods
     * @property Show\Field|Collection mobile
     * @property Show\Field|Collection price
     * @property Show\Field|Collection qyns
     * @property Show\Field|Collection socital
     * @property Show\Field|Collection wld
     * @property Show\Field|Collection g_description
     * @property Show\Field|Collection g_id
     * @property Show\Field|Collection g_name
     * @property Show\Field|Collection a_account
     * @property Show\Field|Collection a_brands
     * @property Show\Field|Collection a_city
     * @property Show\Field|Collection a_cityid
     * @property Show\Field|Collection a_department
     * @property Show\Field|Collection a_gid
     * @property Show\Field|Collection a_id
     * @property Show\Field|Collection a_ispermit
     * @property Show\Field|Collection a_logip
     * @property Show\Field|Collection a_logtime
     * @property Show\Field|Collection a_managerids
     * @property Show\Field|Collection a_number
     * @property Show\Field|Collection a_password
     * @property Show\Field|Collection a_regtime
     * @property Show\Field|Collection a_tel
     * @property Show\Field|Collection a_tel2
     * @property Show\Field|Collection a_username
     * @property Show\Field|Collection is_changekey
     * @property Show\Field|Collection m_id
     * @property Show\Field|Collection m_isview
     * @property Show\Field|Collection m_locality
     * @property Show\Field|Collection m_name
     * @property Show\Field|Collection m_parentid
     * @property Show\Field|Collection m_url
     * @property Show\Field|Collection ip
     * @property Show\Field|Collection reqpath
     * @property Show\Field|Collection time
     * @property Show\Field|Collection uagent
     * @property Show\Field|Collection uid
     * @property Show\Field|Collection p_gid
     * @property Show\Field|Collection p_id
     * @property Show\Field|Collection p_rid
     * @property Show\Field|Collection ipcity
     * @property Show\Field|Collection is_del
     * @property Show\Field|Collection liulanqi_type
     * @property Show\Field|Collection loan_type
     * @property Show\Field|Collection mobilecity
     * @property Show\Field|Collection truename
     * @property Show\Field|Collection dc_onlymobile_id
     * @property Show\Field|Collection p_json_data
     * @property Show\Field|Collection r_json_data
     * @property Show\Field|Collection connection
     * @property Show\Field|Collection exception
     * @property Show\Field|Collection failed_at
     * @property Show\Field|Collection payload
     * @property Show\Field|Collection queue
     * @property Show\Field|Collection uuid
     * @property Show\Field|Collection citycode
     * @property Show\Field|Collection cityname
     * @property Show\Field|Collection email
     * @property Show\Field|Collection token
     * @property Show\Field|Collection abilities
     * @property Show\Field|Collection expires_at
     * @property Show\Field|Collection last_used_at
     * @property Show\Field|Collection tokenable_id
     * @property Show\Field|Collection tokenable_type
     * @property Show\Field|Collection district
     * @property Show\Field|Collection province
     * @property Show\Field|Collection config_classify_id
     * @property Show\Field|Collection config_key
     * @property Show\Field|Collection config_name
     * @property Show\Field|Collection extra
     * @property Show\Field|Collection help
     * @property Show\Field|Collection range_extra
     * @property Show\Field|Collection required
     * @property Show\Field|Collection classify_name
     * @property Show\Field|Collection scene
     * @property Show\Field|Collection sort
     * @property Show\Field|Collection full_name
     * @property Show\Field|Collection id_card
     * @property Show\Field|Collection id_card_front
     * @property Show\Field|Collection id_card_opposite
     * @property Show\Field|Collection nickname
     * @property Show\Field|Collection phone
     * @property Show\Field|Collection balance
     * @property Show\Field|Collection aescryptfor360
     * @property Show\Field|Collection bank_money
     * @property Show\Field|Collection baodan_is
     * @property Show\Field|Collection brand
     * @property Show\Field|Collection callkefu_name
     * @property Show\Field|Collection callkefuid
     * @property Show\Field|Collection check_num
     * @property Show\Field|Collection cityid
     * @property Show\Field|Collection data_d
     * @property Show\Field|Collection datatype
     * @property Show\Field|Collection day
     * @property Show\Field|Collection department
     * @property Show\Field|Collection department_bcompany
     * @property Show\Field|Collection department_big
     * @property Show\Field|Collection facetalk_arrival_time
     * @property Show\Field|Collection facetalk_day
     * @property Show\Field|Collection facetalk_is
     * @property Show\Field|Collection from_oldggc_time
     * @property Show\Field|Collection ggc_type
     * @property Show\Field|Collection gongjijin
     * @property Show\Field|Collection grade
     * @property Show\Field|Collection hezuo_kefuid
     * @property Show\Field|Collection huodongcode
     * @property Show\Field|Collection is_again
     * @property Show\Field|Collection is_again_undo
     * @property Show\Field|Collection is_baoxian_gx
     * @property Show\Field|Collection is_copy
     * @property Show\Field|Collection is_gd_source
     * @property Show\Field|Collection is_ggc_remark_updatetime
     * @property Show\Field|Collection is_give
     * @property Show\Field|Collection is_hezuodata
     * @property Show\Field|Collection is_important
     * @property Show\Field|Collection is_in_interchange
     * @property Show\Field|Collection is_jingshouzhi
     * @property Show\Field|Collection is_move_read
     * @property Show\Field|Collection is_noto_ggc
     * @property Show\Field|Collection is_qyd
     * @property Show\Field|Collection is_read_reviews
     * @property Show\Field|Collection is_sendsms
     * @property Show\Field|Collection is_stock
     * @property Show\Field|Collection is_syn
     * @property Show\Field|Collection is_zhudai888
     * @property Show\Field|Collection ismigrate
     * @property Show\Field|Collection issendhz
     * @property Show\Field|Collection isuse
     * @property Show\Field|Collection kefu_name
     * @property Show\Field|Collection kefu_type
     * @property Show\Field|Collection kefuid
     * @property Show\Field|Collection konghao_remark_times
     * @property Show\Field|Collection last_remark_updatetime
     * @property Show\Field|Collection loan_money
     * @property Show\Field|Collection managerid
     * @property Show\Field|Collection md5mobile
     * @property Show\Field|Collection md5mobileto8
     * @property Show\Field|Collection md5mobileto9
     * @property Show\Field|Collection mobile_old
     * @property Show\Field|Collection move_time
     * @property Show\Field|Collection old_kefuid
     * @property Show\Field|Collection qudao_ch_big
     * @property Show\Field|Collection qudaoid
     * @property Show\Field|Collection remark_updatetime
     * @property Show\Field|Collection remark_updatetime_copy
     * @property Show\Field|Collection repeat_mobilenum
     * @property Show\Field|Collection sem_platform
     * @property Show\Field|Collection sem_type
     * @property Show\Field|Collection sem_username
     * @property Show\Field|Collection sex
     * @property Show\Field|Collection sign_is
     * @property Show\Field|Collection source
     * @property Show\Field|Collection source_id
     * @property Show\Field|Collection source_platform
     * @property Show\Field|Collection source_type1
     * @property Show\Field|Collection stars
     * @property Show\Field|Collection test
     * @property Show\Field|Collection test2
     * @property Show\Field|Collection towho
     * @property Show\Field|Collection weili
     * @property Show\Field|Collection work_shebao
     * @property Show\Field|Collection work_wage_give_type
     * @property Show\Field|Collection zdhkefu_id
     * @property Show\Field|Collection zdhkefu_name
     * @property Show\Field|Collection zdorqdb
     * @property Show\Field|Collection zdorqdb_move
     * @property Show\Field|Collection zhima
     * @property Show\Field|Collection checking_id
     * @property Show\Field|Collection is_ggc
     * @property Show\Field|Collection is_old
     * @property Show\Field|Collection loan_id
     * @property Show\Field|Collection manager_name
     * @property Show\Field|Collection msg_type
     * @property Show\Field|Collection remark
     * @property Show\Field|Collection acount_id
     * @property Show\Field|Collection con
     * @property Show\Field|Collection dpt
     * @property Show\Field|Collection bank_name
     * @property Show\Field|Collection bank_num
     * @property Show\Field|Collection bank_subbranch
     * @property Show\Field|Collection copyids
     * @property Show\Field|Collection etime
     * @property Show\Field|Collection finish_time
     * @property Show\Field|Collection hour
     * @property Show\Field|Collection money
     * @property Show\Field|Collection now_job
     * @property Show\Field|Collection payee
     * @property Show\Field|Collection payment_date
     * @property Show\Field|Collection payment_type
     * @property Show\Field|Collection phone_money
     * @property Show\Field|Collection readids
     * @property Show\Field|Collection reason
     * @property Show\Field|Collection stime
     * @property Show\Field|Collection work
     * @property Show\Field|Collection address
     * @property Show\Field|Collection approval_id
     * @property Show\Field|Collection company
     * @property Show\Field|Collection content
     * @property Show\Field|Collection info
     * @property Show\Field|Collection is_main
     * @property Show\Field|Collection taxpayer_num
     * @property Show\Field|Collection annexpath
     * @property Show\Field|Collection annexsize
     * @property Show\Field|Collection remark_id
     * @property Show\Field|Collection level
     * @property Show\Field|Collection ask
     * @property Show\Field|Collection default_reply
     * @property Show\Field|Collection is_home
     * @property Show\Field|Collection questioner
     * @property Show\Field|Collection reply_num
     * @property Show\Field|Collection seodescription
     * @property Show\Field|Collection seokeywords
     * @property Show\Field|Collection seotitle
     * @property Show\Field|Collection askid
     * @property Show\Field|Collection first_show
     * @property Show\Field|Collection mid
     * @property Show\Field|Collection bankname
     * @property Show\Field|Collection day_int
     * @property Show\Field|Collection pikuan_money
     * @property Show\Field|Collection pikuan_num
     * @property Show\Field|Collection shoukuan_money
     * @property Show\Field|Collection shoukuan_num
     * @property Show\Field|Collection city_item
     * @property Show\Field|Collection clicks
     * @property Show\Field|Collection percharge
     * @property Show\Field|Collection show_num
     * @property Show\Field|Collection truemoney
     * @property Show\Field|Collection yugu_onemoney
     * @property Show\Field|Collection yugu_onemoney_endtime
     * @property Show\Field|Collection yugu_onemoney_startdtime
     * @property Show\Field|Collection check_name
     * @property Show\Field|Collection check_time
     * @property Show\Field|Collection data_num
     * @property Show\Field|Collection datanum_left
     * @property Show\Field|Collection fenpei_num
     * @property Show\Field|Collection money_left
     * @property Show\Field|Collection money_one
     * @property Show\Field|Collection month
     * @property Show\Field|Collection operator
     * @property Show\Field|Collection rcgtype
     * @property Show\Field|Collection datanum_total
     * @property Show\Field|Collection is_close
     * @property Show\Field|Collection is_sms
     * @property Show\Field|Collection money_total
     * @property Show\Field|Collection person_num
     * @property Show\Field|Collection accept_loanmoney_do_pkefuid
     * @property Show\Field|Collection accepted_loan_daynum
     * @property Show\Field|Collection accepted_loan_num
     * @property Show\Field|Collection avatar_img
     * @property Show\Field|Collection born_day
     * @property Show\Field|Collection born_month
     * @property Show\Field|Collection born_year
     * @property Show\Field|Collection degree
     * @property Show\Field|Collection del_time
     * @property Show\Field|Collection department_son
     * @property Show\Field|Collection ggc_day
     * @property Show\Field|Collection ggc_num
     * @property Show\Field|Collection graduated_school
     * @property Show\Field|Collection idcard_img
     * @property Show\Field|Collection idcard_img_fan
     * @property Show\Field|Collection idcard_number
     * @property Show\Field|Collection in_company_time
     * @property Show\Field|Collection is_admin_closed
     * @property Show\Field|Collection is_admin_edit_jiekeinfo
     * @property Show\Field|Collection is_closed
     * @property Show\Field|Collection is_closed_accept_ggcdata
     * @property Show\Field|Collection is_closed_accept_hzddata
     * @property Show\Field|Collection is_fenpei
     * @property Show\Field|Collection is_limit_logintime
     * @property Show\Field|Collection is_lizhi
     * @property Show\Field|Collection is_manager
     * @property Show\Field|Collection is_manager_bcompany
     * @property Show\Field|Collection is_manager_big
     * @property Show\Field|Collection is_manager_son
     * @property Show\Field|Collection is_shenhe_pass
     * @property Show\Field|Collection is_superadmin_opend
     * @property Show\Field|Collection is_to_ggc
     * @property Show\Field|Collection jieke_citys
     * @property Show\Field|Collection kefu_role
     * @property Show\Field|Collection kefu_seatsid
     * @property Show\Field|Collection last_company_duty
     * @property Show\Field|Collection last_company_name
     * @property Show\Field|Collection lizhi_time
     * @property Show\Field|Collection native_place
     * @property Show\Field|Collection operator_acceptloan_pkefuid
     * @property Show\Field|Collection operator_pkefuid
     * @property Show\Field|Collection p_name
     * @property Show\Field|Collection plan_loan_daynum
     * @property Show\Field|Collection self_tel
     * @property Show\Field|Collection sem_loan_day
     * @property Show\Field|Collection sem_loan_num
     * @property Show\Field|Collection sequence
     * @property Show\Field|Collection shenhe_status
     * @property Show\Field|Collection son_ids
     * @property Show\Field|Collection today_date
     * @property Show\Field|Collection unders_num
     * @property Show\Field|Collection why_admin_closed
     * @property Show\Field|Collection workcard_img
     * @property Show\Field|Collection p_mid
     * @property Show\Field|Collection amount
     * @property Show\Field|Collection bankmanager
     * @property Show\Field|Collection chengyi_money
     * @property Show\Field|Collection contract_num
     * @property Show\Field|Collection due_bank
     * @property Show\Field|Collection fangdai_money
     * @property Show\Field|Collection gobank_money
     * @property Show\Field|Collection gobanktime
     * @property Show\Field|Collection is_reviewed
     * @property Show\Field|Collection jupi_time
     * @property Show\Field|Collection kefuname
     * @property Show\Field|Collection loan_time
     * @property Show\Field|Collection netincome
     * @property Show\Field|Collection pikuan_time
     * @property Show\Field|Collection qudaomoney
     * @property Show\Field|Collection rates
     * @property Show\Field|Collection referralmoney
     * @property Show\Field|Collection reviewed_time
     * @property Show\Field|Collection shenhe_time
     * @property Show\Field|Collection shoukuan_time
     * @property Show\Field|Collection weishou_money
     * @property Show\Field|Collection weishou_time
     * @property Show\Field|Collection weiyue_time
     * @property Show\Field|Collection account
     * @property Show\Field|Collection salt
     * @property Show\Field|Collection usertype
     * @property Show\Field|Collection data_type
     * @property Show\Field|Collection fangkuan_num
     * @property Show\Field|Collection loan_again_num
     * @property Show\Field|Collection loannum
     * @property Show\Field|Collection stars3
     * @property Show\Field|Collection stars4
     * @property Show\Field|Collection status0
     * @property Show\Field|Collection status2
     * @property Show\Field|Collection uptime
     * @property Show\Field|Collection kid
     * @property Show\Field|Collection module
     * @property Show\Field|Collection module_name
     * @property Show\Field|Collection route
     * @property Show\Field|Collection route_name
     * @property Show\Field|Collection copyid
     * @property Show\Field|Collection reply_content
     * @property Show\Field|Collection reply_time
     * @property Show\Field|Collection send_content
     * @property Show\Field|Collection send_time
     * @property Show\Field|Collection city_data
     * @property Show\Field|Collection is_enable
     * @property Show\Field|Collection rq_time
     * @property Show\Field|Collection sms_template
     * @property Show\Field|Collection condition
     * @property Show\Field|Collection new_value
     * @property Show\Field|Collection old_value
     * @property Show\Field|Collection table
     * @property Show\Field|Collection kh_job
     * @property Show\Field|Collection kh_type
     * @property Show\Field|Collection kh_value
     * @property Show\Field|Collection operat_position
     * @property Show\Field|Collection operat_sys
     * @property Show\Field|Collection operator_id
     * @property Show\Field|Collection fd_money
     * @property Show\Field|Collection month_plan
     * @property Show\Field|Collection developer
     * @property Show\Field|Collection question_level
     * @property Show\Field|Collection question_type
     * @property Show\Field|Collection system_type
     * @property Show\Field|Collection addtime
     * @property Show\Field|Collection distribute_num
     * @property Show\Field|Collection distribute_type
     * @property Show\Field|Collection end_time
     * @property Show\Field|Collection platformid
     * @property Show\Field|Collection search_param
     * @property Show\Field|Collection start_time
     * @property Show\Field|Collection images
     * @property Show\Field|Collection mobile_info
     * @property Show\Field|Collection seatsid
     * @property Show\Field|Collection pid
     * @property Show\Field|Collection treatment_content
     * @property Show\Field|Collection sqd_now_num
     * @property Show\Field|Collection sqd_percent_num
     * @property Show\Field|Collection zd_now_num
     * @property Show\Field|Collection zd_percent_num
     * @property Show\Field|Collection m_pid
     * @property Show\Field|Collection author
     * @property Show\Field|Collection date
     * @property Show\Field|Collection locality
     * @property Show\Field|Collection operation_note
     * @property Show\Field|Collection small_desc
     * @property Show\Field|Collection guwencardid
     * @property Show\Field|Collection dpt0
     * @property Show\Field|Collection dpt1
     * @property Show\Field|Collection dpt2
     * @property Show\Field|Collection sat_level
     * @property Show\Field|Collection service_money
     * @property Show\Field|Collection upd_time
     * @property Show\Field|Collection review_id
     * @property Show\Field|Collection sendmsg
     * @property Show\Field|Collection huashu_content
     * @property Show\Field|Collection huashu_type
     * @property Show\Field|Collection huashu_type_ch
     * @property Show\Field|Collection is_have_logo
     * @property Show\Field|Collection import_bigtotal
     * @property Show\Field|Collection import_success
     * @property Show\Field|Collection import_total
     * @property Show\Field|Collection accept_loan_type_do_pkefuid
     * @property Show\Field|Collection accept_loanmoney_max
     * @property Show\Field|Collection accept_loanmoney_min
     * @property Show\Field|Collection accepted_give_daynum
     * @property Show\Field|Collection accepted_loan_totalnum
     * @property Show\Field|Collection accepted_loan_totalnum_firstday
     * @property Show\Field|Collection bankcard_img
     * @property Show\Field|Collection bcompany
     * @property Show\Field|Collection bzsx_one
     * @property Show\Field|Collection bzsx_two
     * @property Show\Field|Collection credit_img
     * @property Show\Field|Collection cw_cityids
     * @property Show\Field|Collection cw_citys
     * @property Show\Field|Collection dataNum_income_alert_time
     * @property Show\Field|Collection give_num
     * @property Show\Field|Collection gonggao_id
     * @property Show\Field|Collection goods_areas
     * @property Show\Field|Collection graduate_img
     * @property Show\Field|Collection groupid
     * @property Show\Field|Collection guwenid
     * @property Show\Field|Collection hezuo_name
     * @property Show\Field|Collection hezuo_percent
     * @property Show\Field|Collection hezuo_type
     * @property Show\Field|Collection is_admin_login_status
     * @property Show\Field|Collection is_all_city
     * @property Show\Field|Collection is_can_operator_ggcdata
     * @property Show\Field|Collection is_check_close
     * @property Show\Field|Collection is_closed_accept_yydata
     * @property Show\Field|Collection is_closed_changecity_data
     * @property Show\Field|Collection is_finance
     * @property Show\Field|Collection is_hr
     * @property Show\Field|Collection is_performance_remind
     * @property Show\Field|Collection is_plan_daynum_do
     * @property Show\Field|Collection is_waipai
     * @property Show\Field|Collection is_xuni
     * @property Show\Field|Collection is_zilao_pass
     * @property Show\Field|Collection laodong_img
     * @property Show\Field|Collection loanword_month
     * @property Show\Field|Collection money_give
     * @property Show\Field|Collection money_recharge
     * @property Show\Field|Collection plan_loan_num
     * @property Show\Field|Collection qudao_type
     * @property Show\Field|Collection repeat_deadline_type
     * @property Show\Field|Collection s_month
     * @property Show\Field|Collection subordinates
     * @property Show\Field|Collection subordinates_big
     * @property Show\Field|Collection tijian_img
     * @property Show\Field|Collection yj_name
     * @property Show\Field|Collection ziliao_check_remark
     * @property Show\Field|Collection ziliao_check_time
     * @property Show\Field|Collection ziliao_time
     * @property Show\Field|Collection zuoxi_tel
     * @property Show\Field|Collection total_num
     * @property Show\Field|Collection undo_num
     * @property Show\Field|Collection income
     * @property Show\Field|Collection num
     * @property Show\Field|Collection data_top
     * @property Show\Field|Collection gldata_top
     * @property Show\Field|Collection inwork_num
     * @property Show\Field|Collection limit_num
     * @property Show\Field|Collection acceptloan_status
     * @property Show\Field|Collection nownum
     * @property Show\Field|Collection planbili
     * @property Show\Field|Collection setpot
     * @property Show\Field|Collection beat_per
     * @property Show\Field|Collection read_flg
     * @property Show\Field|Collection company_name
     * @property Show\Field|Collection chongzhi_id
     * @property Show\Field|Collection chongzhi_type
     * @property Show\Field|Collection is_ok
     * @property Show\Field|Collection kefu_id
     * @property Show\Field|Collection left_money
     * @property Show\Field|Collection rest_max
     * @property Show\Field|Collection rest_min
     * @property Show\Field|Collection work_max
     * @property Show\Field|Collection work_min
     * @property Show\Field|Collection answer
     * @property Show\Field|Collection question
     * @property Show\Field|Collection is_answer_right
     * @property Show\Field|Collection is_pop
     * @property Show\Field|Collection pop_count
     * @property Show\Field|Collection demand_num
     * @property Show\Field|Collection leader_name
     * @property Show\Field|Collection is_show_yeji
     * @property Show\Field|Collection done_rate
     * @property Show\Field|Collection dpt_cpy
     * @property Show\Field|Collection is_show
     * @property Show\Field|Collection net
     * @property Show\Field|Collection one_data_profit
     * @property Show\Field|Collection one_person_net
     * @property Show\Field|Collection qy_rate
     * @property Show\Field|Collection ranktype
     * @property Show\Field|Collection trans_rate
     * @property Show\Field|Collection utime
     * @property Show\Field|Collection you_rate
     * @property Show\Field|Collection yy_rate
     * @property Show\Field|Collection eqmark
     * @property Show\Field|Collection person_type
     * @property Show\Field|Collection test_type
     * @property Show\Field|Collection tijian_path
     * @property Show\Field|Collection mod
     * @property Show\Field|Collection now_job_type
     * @property Show\Field|Collection per_num
     * @property Show\Field|Collection author_type
     * @property Show\Field|Collection brands
     * @property Show\Field|Collection cityids
     * @property Show\Field|Collection is_system
     * @property Show\Field|Collection views
     * @property Show\Field|Collection is_see
     * @property Show\Field|Collection is_many
     * @property Show\Field|Collection week
     * @property Show\Field|Collection menustr
     * @property Show\Field|Collection erji
     * @property Show\Field|Collection fuzeren
     * @property Show\Field|Collection guwen
     * @property Show\Field|Collection mob_all
     * @property Show\Field|Collection yiji
     * @property Show\Field|Collection create_income
     * @property Show\Field|Collection xiugai_num
     * @property Show\Field|Collection average_points
     * @property Show\Field|Collection date_type
     * @property Show\Field|Collection duration
     * @property Show\Field|Collection duration_average
     * @property Show\Field|Collection first_num
     * @property Show\Field|Collection first_num_day
     * @property Show\Field|Collection give_num_day
     * @property Show\Field|Collection hb
     * @property Show\Field|Collection is_tx
     * @property Show\Field|Collection jinjian_month
     * @property Show\Field|Collection lds_num_day
     * @property Show\Field|Collection lds_num_month
     * @property Show\Field|Collection login_day_num
     * @property Show\Field|Collection login_num
     * @property Show\Field|Collection mob_average
     * @property Show\Field|Collection netincome_average
     * @property Show\Field|Collection netincome_day
     * @property Show\Field|Collection pnum
     * @property Show\Field|Collection qds_num_day
     * @property Show\Field|Collection qds_num_month
     * @property Show\Field|Collection shoukuan_money2
     * @property Show\Field|Collection shoukuan_num_day
     * @property Show\Field|Collection sm_day
     * @property Show\Field|Collection sm_month
     * @property Show\Field|Collection data_size
     * @property Show\Field|Collection wufanpei
     * @property Show\Field|Collection updatetime
     * @property Show\Field|Collection is_why
     * @property Show\Field|Collection loan_daigenjin_num
     * @property Show\Field|Collection loan_daoluan_num
     * @property Show\Field|Collection loan_daoluan_num_pre
     * @property Show\Field|Collection loan_five_star_num
     * @property Show\Field|Collection loan_four_star_num
     * @property Show\Field|Collection loan_num
     * @property Show\Field|Collection loan_one_star_num
     * @property Show\Field|Collection loan_three_star_num
     * @property Show\Field|Collection loan_two_star_num
     * @property Show\Field|Collection loan_two_star_plus_num
     * @property Show\Field|Collection loan_waidi_num
     * @property Show\Field|Collection loan_waidi_num_pre
     * @property Show\Field|Collection loan_yishouli_num
     * @property Show\Field|Collection three_star_above_pre
     * @property Show\Field|Collection two_star_above_pre
     * @property Show\Field|Collection zfp_daoluan_num
     * @property Show\Field|Collection zfp_five_star_num
     * @property Show\Field|Collection zfp_four_star_num
     * @property Show\Field|Collection zfp_loan_daigenjin_num
     * @property Show\Field|Collection zfp_loan_num
     * @property Show\Field|Collection zfp_loan_yishouli_num
     * @property Show\Field|Collection zfp_one_star_num
     * @property Show\Field|Collection zfp_three_star_num
     * @property Show\Field|Collection zfp_two_star_num
     * @property Show\Field|Collection zfp_two_star_plus_num
     * @property Show\Field|Collection zs_daoluan_num
     * @property Show\Field|Collection zs_five_star_num
     * @property Show\Field|Collection zs_four_star_num
     * @property Show\Field|Collection zs_loan_daigenjin_num
     * @property Show\Field|Collection zs_loan_num
     * @property Show\Field|Collection zs_loan_yishouli_num
     * @property Show\Field|Collection zs_one_star_num
     * @property Show\Field|Collection zs_three_star_num
     * @property Show\Field|Collection zs_two_star_num
     * @property Show\Field|Collection zs_two_star_plus_num
     * @property Show\Field|Collection chuangshou_money
     * @property Show\Field|Collection chuangshou_num
     * @property Show\Field|Collection jinjian_num
     * @property Show\Field|Collection team_chuangshou_money
     * @property Show\Field|Collection team_chuangshou_num
     * @property Show\Field|Collection team_jinjian_num
     * @property Show\Field|Collection team_pikuan_money
     * @property Show\Field|Collection team_pikuan_num
     * @property Show\Field|Collection apply_num
     * @property Show\Field|Collection youzhi_num
     * @property Show\Field|Collection upd_date
     * @property Show\Field|Collection waitdo_num
     * @property Show\Field|Collection waitdo_rate
     * @property Show\Field|Collection add_kefuid
     * @property Show\Field|Collection countermeasures
     * @property Show\Field|Collection department_big_mubiao
     * @property Show\Field|Collection insufficient_today
     * @property Show\Field|Collection singn_day
     * @property Show\Field|Collection yuji_visit_num
     * @property Show\Field|Collection is_read
     * @property Show\Field|Collection is_back
     * @property Show\Field|Collection left_num
     * @property Show\Field|Collection xiaofei_type
     * @property Show\Field|Collection viewnum
     * @property Show\Field|Collection accepted_user_num
     * @property Show\Field|Collection ask_num
     * @property Show\Field|Collection good_at_wordids
     * @property Show\Field|Collection good_at_work
     * @property Show\Field|Collection is_admin_login
     * @property Show\Field|Collection is_allocation
     * @property Show\Field|Collection is_pass
     * @property Show\Field|Collection login_time
     * @property Show\Field|Collection parent_managerid
     * @property Show\Field|Collection plan_user_num
     * @property Show\Field|Collection products_num
     * @property Show\Field|Collection provinceid
     * @property Show\Field|Collection self_introduction
     * @property Show\Field|Collection service_area
     * @property Show\Field|Collection service_areaids
     * @property Show\Field|Collection alarm_in
     * @property Show\Field|Collection alarm_type
     * @property Show\Field|Collection hourtime
     * @property Show\Field|Collection manager_id
     * @property Show\Field|Collection minutetime
     * @property Show\Field|Collection state
     * @property Show\Field|Collection loanmsg_num
     * @property Show\Field|Collection catid
     * @property Show\Field|Collection ftitle
     * @property Show\Field|Collection is_newstime
     * @property Show\Field|Collection keyword
     * @property Show\Field|Collection newsid
     * @property Show\Field|Collection newstime
     * @property Show\Field|Collection picalt
     * @property Show\Field|Collection tags
     * @property Show\Field|Collection titlepic
     * @property Show\Field|Collection titleurl
     * @property Show\Field|Collection toptitle
     * @property Show\Field|Collection pic_alt
     * @property Show\Field|Collection come_from
     * @property Show\Field|Collection hand_date
     * @property Show\Field|Collection seo_description
     * @property Show\Field|Collection seo_keywords
     * @property Show\Field|Collection seo_title
     * @property Show\Field|Collection c_abutment
     * @property Show\Field|Collection c_abutment_email
     * @property Show\Field|Collection c_abutment_mobile
     * @property Show\Field|Collection c_bank
     * @property Show\Field|Collection c_bank_account
     * @property Show\Field|Collection c_mainbody
     * @property Show\Field|Collection c_manager
     * @property Show\Field|Collection c_manager_email
     * @property Show\Field|Collection c_manager_mobile
     * @property Show\Field|Collection c_operator
     * @property Show\Field|Collection c_pay_company
     * @property Show\Field|Collection c_paytype
     * @property Show\Field|Collection c_platform
     * @property Show\Field|Collection c_prepay
     * @property Show\Field|Collection c_remarks
     * @property Show\Field|Collection c_settlement_cycle
     * @property Show\Field|Collection c_settlement_type
     * @property Show\Field|Collection c_status
     * @property Show\Field|Collection c_time
     * @property Show\Field|Collection abutment
     * @property Show\Field|Collection abutment_mobile
     * @property Show\Field|Collection bank
     * @property Show\Field|Collection bank_count
     * @property Show\Field|Collection charge_style
     * @property Show\Field|Collection function
     * @property Show\Field|Collection mainbody
     * @property Show\Field|Collection manager
     * @property Show\Field|Collection paystyle
     * @property Show\Field|Collection platform
     * @property Show\Field|Collection remarks
     * @property Show\Field|Collection unit_price
     * @property Show\Field|Collection url
     * @property Show\Field|Collection consumption
     * @property Show\Field|Collection daytime
     * @property Show\Field|Collection fail
     * @property Show\Field|Collection high_quality
     * @property Show\Field|Collection message_tongdao
     * @property Show\Field|Collection repeat_quality
     * @property Show\Field|Collection request_unit_price
     * @property Show\Field|Collection succeed
     * @property Show\Field|Collection q_abutment
     * @property Show\Field|Collection q_abutment_mobile
     * @property Show\Field|Collection q_account
     * @property Show\Field|Collection q_bank
     * @property Show\Field|Collection q_bank_account
     * @property Show\Field|Collection q_bname
     * @property Show\Field|Collection q_bphone
     * @property Show\Field|Collection q_discount
     * @property Show\Field|Collection q_domain
     * @property Show\Field|Collection q_label
     * @property Show\Field|Collection q_mainbody
     * @property Show\Field|Collection q_manager
     * @property Show\Field|Collection q_password
     * @property Show\Field|Collection q_pay_company
     * @property Show\Field|Collection q_paytype
     * @property Show\Field|Collection q_platform
     * @property Show\Field|Collection q_remarks
     * @property Show\Field|Collection q_status
     * @property Show\Field|Collection q_time
     * @property Show\Field|Collection q_url
     * @property Show\Field|Collection q_yuanshi
     * @property Show\Field|Collection r_apayment
     * @property Show\Field|Collection r_consume
     * @property Show\Field|Collection r_discount
     * @property Show\Field|Collection r_mainbody
     * @property Show\Field|Collection r_operator
     * @property Show\Field|Collection r_payinfo
     * @property Show\Field|Collection r_payment
     * @property Show\Field|Collection r_paytype
     * @property Show\Field|Collection r_platform
     * @property Show\Field|Collection r_qudao
     * @property Show\Field|Collection r_status
     * @property Show\Field|Collection r_time
     * @property Show\Field|Collection w_account
     * @property Show\Field|Collection w_auth_time
     * @property Show\Field|Collection w_bname
     * @property Show\Field|Collection w_company
     * @property Show\Field|Collection w_id_card
     * @property Show\Field|Collection w_label
     * @property Show\Field|Collection w_mainbody
     * @property Show\Field|Collection w_manager
     * @property Show\Field|Collection w_password
     * @property Show\Field|Collection w_paytype
     * @property Show\Field|Collection w_phone
     * @property Show\Field|Collection w_platform
     * @property Show\Field|Collection w_remarks
     * @property Show\Field|Collection w_status
     * @property Show\Field|Collection w_time
     * @property Show\Field|Collection w_url
     * @property Show\Field|Collection w_wxid_x
     * @property Show\Field|Collection w_wxid_y
     * @property Show\Field|Collection unoperator
     * @property Show\Field|Collection kefu_phone
     * @property Show\Field|Collection response
     * @property Show\Field|Collection target_phone
     * @property Show\Field|Collection dowhat
     * @property Show\Field|Collection isok
     * @property Show\Field|Collection p_json
     * @property Show\Field|Collection r_json
     * @property Show\Field|Collection sendtime
     * @property Show\Field|Collection imgurl
     * @property Show\Field|Collection is_open
     * @property Show\Field|Collection is_url
     * @property Show\Field|Collection apply_time
     * @property Show\Field|Collection birthday
     * @property Show\Field|Collection dtime
     * @property Show\Field|Collection ext_info
     * @property Show\Field|Collection has_wld_loan
     * @property Show\Field|Collection have_ant_credit
     * @property Show\Field|Collection have_baoxian
     * @property Show\Field|Collection have_car
     * @property Show\Field|Collection have_chedai
     * @property Show\Field|Collection have_credit_card
     * @property Show\Field|Collection have_fangdai
     * @property Show\Field|Collection have_fund
     * @property Show\Field|Collection have_house
     * @property Show\Field|Collection have_job
     * @property Show\Field|Collection have_loan
     * @property Show\Field|Collection hezuo_meiti
     * @property Show\Field|Collection idcard
     * @property Show\Field|Collection salary_max
     * @property Show\Field|Collection salary_min
     * @property Show\Field|Collection shebao
     * @property Show\Field|Collection vocation
     * @property Show\Field|Collection work_is_bankmoney
     * @property Show\Field|Collection trackId
     * @property Show\Field|Collection category
     * @property Show\Field|Collection message
     * @property Show\Field|Collection decrypt_json_data
     * @property Show\Field|Collection error_msg
     * @property Show\Field|Collection user_applyloan_id
     * @property Show\Field|Collection company_id
     * @property Show\Field|Collection create_time
     * @property Show\Field|Collection day_push_num
     * @property Show\Field|Collection day_push_success
     * @property Show\Field|Collection ymd
     * @property Show\Field|Collection distribution_limit
     * @property Show\Field|Collection is_display
     * @property Show\Field|Collection now_num
     * @property Show\Field|Collection percent_num
     * @property Show\Field|Collection stauts
     * @property Show\Field|Collection source_encode
     * @property Show\Field|Collection accord_deduct_rate50
     * @property Show\Field|Collection accord_deduct_rate60
     * @property Show\Field|Collection accord_deduct_rate70
     * @property Show\Field|Collection city_id
     * @property Show\Field|Collection is_kouliang
     * @property Show\Field|Collection kouliang_per
     * @property Show\Field|Collection one_money
     * @property Show\Field|Collection kehuid
     * @property Show\Field|Collection accord_deduct_sign
     * @property Show\Field|Collection business_years
     * @property Show\Field|Collection creditcard_situation
     * @property Show\Field|Collection is_write
     * @property Show\Field|Collection nowork_monthincome
     * @property Show\Field|Collection work_identity
     * @property Show\Field|Collection work_now_company_age
     * @property Show\Field|Collection data_id
     * @property Show\Field|Collection apply_explanation
     * @property Show\Field|Collection apply_ondition
     * @property Show\Field|Collection apply_other
     * @property Show\Field|Collection assets_max
     * @property Show\Field|Collection assets_min
     * @property Show\Field|Collection bigtype
     * @property Show\Field|Collection credit
     * @property Show\Field|Collection credit_id
     * @property Show\Field|Collection gourl
     * @property Show\Field|Collection img_alt
     * @property Show\Field|Collection is_gourl
     * @property Show\Field|Collection is_home_show
     * @property Show\Field|Collection loan_month_max
     * @property Show\Field|Collection loan_month_min
     * @property Show\Field|Collection loanday
     * @property Show\Field|Collection loanday_id
     * @property Show\Field|Collection loanuse
     * @property Show\Field|Collection loanuse_ids
     * @property Show\Field|Collection money_max
     * @property Show\Field|Collection money_min
     * @property Show\Field|Collection month_income_max
     * @property Show\Field|Collection month_income_min
     * @property Show\Field|Collection month_interest_float
     * @property Show\Field|Collection month_interest_max
     * @property Show\Field|Collection month_interest_min
     * @property Show\Field|Collection month_interest_other
     * @property Show\Field|Collection need_material
     * @property Show\Field|Collection need_material_id
     * @property Show\Field|Collection online
     * @property Show\Field|Collection other_material
     * @property Show\Field|Collection people_age_max
     * @property Show\Field|Collection people_age_min
     * @property Show\Field|Collection product_img
     * @property Show\Field|Collection repayment
     * @property Show\Field|Collection repayment_id
     * @property Show\Field|Collection type_name1
     * @property Show\Field|Collection type_name2
     * @property Show\Field|Collection work_id
     * @property Show\Field|Collection access_baodan
     * @property Show\Field|Collection access_baodan_companys
     * @property Show\Field|Collection access_baodan_jiaofeitype
     * @property Show\Field|Collection access_baodan_youxiaotime
     * @property Show\Field|Collection access_car
     * @property Show\Field|Collection access_car_chepaiaddress
     * @property Show\Field|Collection access_car_code
     * @property Show\Field|Collection access_car_monthtime
     * @property Show\Field|Collection access_car_status
     * @property Show\Field|Collection access_car_type
     * @property Show\Field|Collection access_car_usetime
     * @property Show\Field|Collection access_credit
     * @property Show\Field|Collection access_credit_chaxun
     * @property Show\Field|Collection access_credit_overdue
     * @property Show\Field|Collection access_credit_overdue_dj
     * @property Show\Field|Collection access_credit_overdue_zdj
     * @property Show\Field|Collection access_credit_sixmonth_chaxunnum
     * @property Show\Field|Collection access_credit_threemonth_chaxunnum
     * @property Show\Field|Collection access_credit_twomonth_chaxunnum
     * @property Show\Field|Collection access_credit_type
     * @property Show\Field|Collection access_debet
     * @property Show\Field|Collection access_debet_max
     * @property Show\Field|Collection access_degree
     * @property Show\Field|Collection access_degree_type
     * @property Show\Field|Collection access_gongjijin
     * @property Show\Field|Collection access_gongjijin_jiaocunmoney
     * @property Show\Field|Collection access_gongjijin_jishumoney
     * @property Show\Field|Collection access_gongjijin_long
     * @property Show\Field|Collection access_house
     * @property Show\Field|Collection access_house_city
     * @property Show\Field|Collection access_house_monthtime
     * @property Show\Field|Collection access_house_status
     * @property Show\Field|Collection access_house_type
     * @property Show\Field|Collection access_income
     * @property Show\Field|Collection access_income_intype
     * @property Show\Field|Collection access_income_long
     * @property Show\Field|Collection access_income_month
     * @property Show\Field|Collection access_shebao
     * @property Show\Field|Collection access_shebao_long
     * @property Show\Field|Collection access_shebao_monthmoney
     * @property Show\Field|Collection access_shenfen_age_max
     * @property Show\Field|Collection access_shenfen_age_min
     * @property Show\Field|Collection access_shenfen_homereg
     * @property Show\Field|Collection access_shenfen_industry
     * @property Show\Field|Collection access_shenfen_is
     * @property Show\Field|Collection access_shenfen_worktype
     * @property Show\Field|Collection add_name
     * @property Show\Field|Collection keyfield
     * @property Show\Field|Collection need_material_baodan
     * @property Show\Field|Collection need_material_car
     * @property Show\Field|Collection need_material_house
     * @property Show\Field|Collection need_material_income
     * @property Show\Field|Collection need_material_shangmen
     * @property Show\Field|Collection need_material_shenfen
     * @property Show\Field|Collection need_material_use
     * @property Show\Field|Collection product_bankmoneyday
     * @property Show\Field|Collection product_code
     * @property Show\Field|Collection product_lixi_type
     * @property Show\Field|Collection product_maxmoney
     * @property Show\Field|Collection product_minmoney
     * @property Show\Field|Collection product_name
     * @property Show\Field|Collection product_repayment
     * @property Show\Field|Collection product_type1
     * @property Show\Field|Collection product_type2
     * @property Show\Field|Collection work_gongjijin_jiaocunmoney
     * @property Show\Field|Collection pipei_id
     * @property Show\Field|Collection product_lixi_num
     * @property Show\Field|Collection product_lixi_remark
     * @property Show\Field|Collection access_baodan_jiaofeimoney
     * @property Show\Field|Collection access_baodan_num
     * @property Show\Field|Collection access_baodan_status
     * @property Show\Field|Collection access_base_age
     * @property Show\Field|Collection access_base_degree
     * @property Show\Field|Collection access_base_entrytype
     * @property Show\Field|Collection access_base_homereg
     * @property Show\Field|Collection access_base_is
     * @property Show\Field|Collection access_base_marriage
     * @property Show\Field|Collection access_base_school
     * @property Show\Field|Collection access_car_baodan
     * @property Show\Field|Collection access_car_baodan_num
     * @property Show\Field|Collection access_car_monthmoney
     * @property Show\Field|Collection access_car_nowmoney
     * @property Show\Field|Collection access_credit_overdue_halfyear
     * @property Show\Field|Collection access_credit_overdue_is
     * @property Show\Field|Collection access_credit_overdue_money
     * @property Show\Field|Collection access_credit_overdue_oneyear
     * @property Show\Field|Collection access_credit_overdue_twoyear
     * @property Show\Field|Collection access_credit_overdue_type
     * @property Show\Field|Collection access_credit_recordtime
     * @property Show\Field|Collection access_debet_allmoney_dj
     * @property Show\Field|Collection access_debet_allmoney_xy
     * @property Show\Field|Collection access_debet_balance_xy
     * @property Show\Field|Collection access_debet_halfyearuse_dj
     * @property Show\Field|Collection access_debet_housetype_fang
     * @property Show\Field|Collection access_debet_loanbalance_fang
     * @property Show\Field|Collection access_debet_loanmoney_fang
     * @property Show\Field|Collection access_debet_max_dj
     * @property Show\Field|Collection access_debet_monthrep_xy
     * @property Show\Field|Collection access_debet_nowmoney_fang
     * @property Show\Field|Collection access_debet_nowuse_dj
     * @property Show\Field|Collection access_house_area
     * @property Show\Field|Collection access_house_havetime
     * @property Show\Field|Collection access_house_monthmoney
     * @property Show\Field|Collection access_house_nowmoney
     * @property Show\Field|Collection access_shenfen_gongjijin_jiaocun
     * @property Show\Field|Collection access_shenfen_gongjijin_jishu
     * @property Show\Field|Collection access_shenfen_gongjijin_long
     * @property Show\Field|Collection access_shenfen_gufen
     * @property Show\Field|Collection access_shenfen_income_aftertax
     * @property Show\Field|Collection access_shenfen_income_intype
     * @property Show\Field|Collection access_shenfen_income_long
     * @property Show\Field|Collection access_shenfen_income_pretax
     * @property Show\Field|Collection access_shenfen_licence
     * @property Show\Field|Collection access_shenfen_operate_age
     * @property Show\Field|Collection access_shenfen_shebao_jiaocun
     * @property Show\Field|Collection access_shenfen_shebao_long
     * @property Show\Field|Collection need_material_diya
     * @property Show\Field|Collection yushen_code
     * @property Show\Field|Collection yushen_debet
     * @property Show\Field|Collection yushen_money_max
     * @property Show\Field|Collection yushen_mul
     * @property Show\Field|Collection yushen_type
     * @property Show\Field|Collection num1
     * @property Show\Field|Collection num2
     * @property Show\Field|Collection num3
     * @property Show\Field|Collection product_id1
     * @property Show\Field|Collection product_id2
     * @property Show\Field|Collection product_id3
     * @property Show\Field|Collection fandian_num
     * @property Show\Field|Collection fandian_type
     * @property Show\Field|Collection jinjian_address
     * @property Show\Field|Collection jobtype
     * @property Show\Field|Collection qudao_username
     * @property Show\Field|Collection code
     * @property Show\Field|Collection max
     * @property Show\Field|Collection min
     * @property Show\Field|Collection mul
     * @property Show\Field|Collection is_nextday_update
     * @property Show\Field|Collection loannum_little
     * @property Show\Field|Collection source_type
     * @property Show\Field|Collection apply_average_money
     * @property Show\Field|Collection is_end_update
     * @property Show\Field|Collection tg_type
     * @property Show\Field|Collection tuiguang_money
     * @property Show\Field|Collection can_look_citys
     * @property Show\Field|Collection qudaocardid
     * @property Show\Field|Collection facetalk_hourtime
     * @property Show\Field|Collection qudao_bankloantime
     * @property Show\Field|Collection qudao_bankmanager
     * @property Show\Field|Collection qudao_bankname
     * @property Show\Field|Collection qudao_bankpikuan
     * @property Show\Field|Collection qudao_bankrates
     * @property Show\Field|Collection qudao_borrowing
     * @property Show\Field|Collection qudao_callindealdate
     * @property Show\Field|Collection qudao_clienttype
     * @property Show\Field|Collection qudao_collectiontime
     * @property Show\Field|Collection qudao_consumingdate
     * @property Show\Field|Collection qudao_consumingpeople
     * @property Show\Field|Collection qudao_contractor
     * @property Show\Field|Collection qudao_contractordate
     * @property Show\Field|Collection qudao_currentaddress
     * @property Show\Field|Collection qudao_department
     * @property Show\Field|Collection qudao_departmentincharge
     * @property Show\Field|Collection qudao_gobanktime
     * @property Show\Field|Collection qudao_hetongno
     * @property Show\Field|Collection qudao_idcardaddress
     * @property Show\Field|Collection qudao_netincome
     * @property Show\Field|Collection qudao_pikuantime
     * @property Show\Field|Collection qudao_qudaomoney
     * @property Show\Field|Collection qudao_referralmoney
     * @property Show\Field|Collection qudao_servicecharges
     * @property Show\Field|Collection qudao_status
     * @property Show\Field|Collection qudao_zhudai_acceptmoney
     * @property Show\Field|Collection user_idcard
     * @property Show\Field|Collection check_id
     * @property Show\Field|Collection is_newest
     * @property Show\Field|Collection is_repeat
     * @property Show\Field|Collection reply_con
     * @property Show\Field|Collection reply_phone
     * @property Show\Field|Collection sysn_msg
     * @property Show\Field|Collection rcvid
     * @property Show\Field|Collection kaoheyeji
     * @property Show\Field|Collection bio
     * @property Show\Field|Collection diploma
     * @property Show\Field|Collection job
     * @property Show\Field|Collection working_life
     * @property Show\Field|Collection director
     * @property Show\Field|Collection domain_cw
     * @property Show\Field|Collection domain_name
     * @property Show\Field|Collection domain_qd
     * @property Show\Field|Collection domain_rl
     * @property Show\Field|Collection fuze_name
     * @property Show\Field|Collection package
     * @property Show\Field|Collection schedule
     * @property Show\Field|Collection count
     * @property Show\Field|Collection add_time
     * @property Show\Field|Collection objective_beijing
     * @property Show\Field|Collection objective_changsha
     * @property Show\Field|Collection objective_donggouan
     * @property Show\Field|Collection objective_foshan
     * @property Show\Field|Collection objective_guangzhou
     * @property Show\Field|Collection objective_hangzhou
     * @property Show\Field|Collection objective_shanghai
     * @property Show\Field|Collection objective_shenzhen
     * @property Show\Field|Collection tongji_type
     * @property Show\Field|Collection bannerpic
     * @property Show\Field|Collection middlepic
     * @property Show\Field|Collection rate
     * @property Show\Field|Collection source_ch
     * @property Show\Field|Collection baidu_code_pc
     * @property Show\Field|Collection baidu_code_wap
     * @property Show\Field|Collection day_data_num
     * @property Show\Field|Collection day_plan_num
     * @property Show\Field|Collection day_today
     * @property Show\Field|Collection fandian
     * @property Show\Field|Collection is_close_accept_data
     * @property Show\Field|Collection is_hezuo
     * @property Show\Field|Collection ocpc_code_wap
     * @property Show\Field|Collection ocpc_jscode_wap
     * @property Show\Field|Collection pc_source_grade
     * @property Show\Field|Collection source_ch_big
     * @property Show\Field|Collection url_front
     * @property Show\Field|Collection wap_source_grade
     * @property Show\Field|Collection which_page
     * @property Show\Field|Collection who_add
     * @property Show\Field|Collection loannum_bj
     * @property Show\Field|Collection loannum_changsha
     * @property Show\Field|Collection loannum_cq
     * @property Show\Field|Collection loannum_dg
     * @property Show\Field|Collection loannum_fs
     * @property Show\Field|Collection loannum_gz
     * @property Show\Field|Collection loannum_huizhou
     * @property Show\Field|Collection loannum_hz
     * @property Show\Field|Collection loannum_nanjing
     * @property Show\Field|Collection loannum_qita
     * @property Show\Field|Collection loannum_sh
     * @property Show\Field|Collection loannum_suzhou
     * @property Show\Field|Collection loannum_sz
     * @property Show\Field|Collection loannum_tianjin
     * @property Show\Field|Collection loannum_wuhan
     * @property Show\Field|Collection loannum_huzhou
     * @property Show\Field|Collection loannum_nanning
     * @property Show\Field|Collection loannum_shanghai
     * @property Show\Field|Collection loannum_xiamen
     * @property Show\Field|Collection loannum_beijing
     * @property Show\Field|Collection loannum_chongqing
     * @property Show\Field|Collection loannum_dongguan
     * @property Show\Field|Collection loannum_foshan
     * @property Show\Field|Collection loannum_guangzhou
     * @property Show\Field|Collection loannum_hangzhou
     * @property Show\Field|Collection loannum_shenzhen
     * @property Show\Field|Collection add_uid
     * @property Show\Field|Collection en_name
     * @property Show\Field|Collection p_id_ex1
     * @property Show\Field|Collection website_type
     * @property Show\Field|Collection remove_type
     * @property Show\Field|Collection s_json
     * @property Show\Field|Collection hits
     * @property Show\Field|Collection is_redirect
     * @property Show\Field|Collection redirect_url
     * @property Show\Field|Collection view_num
     * @property Show\Field|Collection client_phone
     * @property Show\Field|Collection opt_id
     * @property Show\Field|Collection opt_name
     * @property Show\Field|Collection rps_msg
     * @property Show\Field|Collection directoryname
     * @property Show\Field|Collection tag
     * @property Show\Field|Collection in_num
     * @property Show\Field|Collection is_status
     * @property Show\Field|Collection js_num
     * @property Show\Field|Collection nowday
     * @property Show\Field|Collection seqencing
     * @property Show\Field|Collection xq_num
     * @property Show\Field|Collection update_time
     * @property Show\Field|Collection del_name
     * @property Show\Field|Collection channel_code
     * @property Show\Field|Collection id_stop
     * @property Show\Field|Collection key
     * @property Show\Field|Collection systype
     * @property Show\Field|Collection sysvalue
     * @property Show\Field|Collection sysvalue2
     * @property Show\Field|Collection desc
     * @property Show\Field|Collection faile_code
     * @property Show\Field|Collection faile_msg
     * @property Show\Field|Collection login_url
     * @property Show\Field|Collection ipnum
     * @property Show\Field|Collection loannum_nantong
     * @property Show\Field|Collection loannum_other
     * @property Show\Field|Collection loannum_zhengzhou
     * @property Show\Field|Collection loannum_zhuhai
     * @property Show\Field|Collection loannum_zs
     * @property Show\Field|Collection mobilenum
     * @property Show\Field|Collection pcnum
     * @property Show\Field|Collection pv
     * @property Show\Field|Collection uv
     * @property Show\Field|Collection status0num
     * @property Show\Field|Collection status1num
     * @property Show\Field|Collection status2num
     * @property Show\Field|Collection status3num
     * @property Show\Field|Collection status4num
     * @property Show\Field|Collection status5num
     * @property Show\Field|Collection status6num
     * @property Show\Field|Collection status7num
     * @property Show\Field|Collection status8num
     * @property Show\Field|Collection totalnum
     * @property Show\Field|Collection four_star_num
     * @property Show\Field|Collection lowquality
     * @property Show\Field|Collection one_star_num
     * @property Show\Field|Collection read_rigned_num
     * @property Show\Field|Collection three_star_num
     * @property Show\Field|Collection two_star_num
     * @property Show\Field|Collection waitingdo_num
     * @property Show\Field|Collection again_five_star_num
     * @property Show\Field|Collection again_four_star_num
     * @property Show\Field|Collection again_lowquality
     * @property Show\Field|Collection again_num
     * @property Show\Field|Collection again_one_star_num
     * @property Show\Field|Collection again_three_star_num
     * @property Show\Field|Collection again_two_star_num
     * @property Show\Field|Collection again_two_star_plus_num
     * @property Show\Field|Collection again_undo_num
     * @property Show\Field|Collection again_waitingdo_num
     * @property Show\Field|Collection five_star_num
     * @property Show\Field|Collection two_star_plus_num
     * @property Show\Field|Collection waidi_num
     * @property Show\Field|Collection zs_lowquality
     * @property Show\Field|Collection zs_num
     * @property Show\Field|Collection zs_undo_num
     * @property Show\Field|Collection zs_waitingdo_num
     * @property Show\Field|Collection high_quality_money
     * @property Show\Field|Collection high_quality_num
     * @property Show\Field|Collection is_ziying
     * @property Show\Field|Collection low_quality_num
     * @property Show\Field|Collection lowquality_percent
     * @property Show\Field|Collection mobile_repeat_num
     * @property Show\Field|Collection mobile_repeat_percent
     * @property Show\Field|Collection two_star_above
     * @property Show\Field|Collection twostar_average_money
     * @property Show\Field|Collection twostar_percent
     * @property Show\Field|Collection waidiloan_num
     * @property Show\Field|Collection waidiloan_percent
     * @property Show\Field|Collection avg_netincome_money
     * @property Show\Field|Collection fangkuang_money
     * @property Show\Field|Collection netincome_money
     * @property Show\Field|Collection pnum_bz
     * @property Show\Field|Collection access_token
     * @property Show\Field|Collection account_id
     * @property Show\Field|Collection authorization_code
     * @property Show\Field|Collection client_secret
     * @property Show\Field|Collection qq
     * @property Show\Field|Collection refresh_token
     * @property Show\Field|Collection s_account_id
     * @property Show\Field|Collection s_qq
     * @property Show\Field|Collection user_action_set_id
     * @property Show\Field|Collection advertiser_id
     * @property Show\Field|Collection click_id
     * @property Show\Field|Collection baodan
     * @property Show\Field|Collection baodan_remark
     * @property Show\Field|Collection company_card_have
     * @property Show\Field|Collection company_card_regarea
     * @property Show\Field|Collection company_card_regyear
     * @property Show\Field|Collection company_type
     * @property Show\Field|Collection company_typeid
     * @property Show\Field|Collection company_year_fpmoney
     * @property Show\Field|Collection company_yearincome
     * @property Show\Field|Collection creditid
     * @property Show\Field|Collection fundid
     * @property Show\Field|Collection house_remark
     * @property Show\Field|Collection income_source
     * @property Show\Field|Collection job_year
     * @property Show\Field|Collection job_yearid
     * @property Show\Field|Collection jobid
     * @property Show\Field|Collection monthly
     * @property Show\Field|Collection monthly_sendtype
     * @property Show\Field|Collection monthlyid
     * @property Show\Field|Collection inserttime
     * @property Show\Field|Collection movetype
     * @property Show\Field|Collection baodan_company
     * @property Show\Field|Collection baodan_jiaofeitype
     * @property Show\Field|Collection baodan_status
     * @property Show\Field|Collection baodan_times
     * @property Show\Field|Collection baodan_year_money
     * @property Show\Field|Collection baodan_youxiaoyear
     * @property Show\Field|Collection business_address
     * @property Show\Field|Collection business_gufen
     * @property Show\Field|Collection business_industry
     * @property Show\Field|Collection business_is_yingyezhizhao
     * @property Show\Field|Collection business_monthmoney
     * @property Show\Field|Collection business_shenfen
     * @property Show\Field|Collection business_yearinvoicemoney
     * @property Show\Field|Collection business_yearmoney
     * @property Show\Field|Collection callstatus
     * @property Show\Field|Collection callstatus_ch
     * @property Show\Field|Collection calltype
     * @property Show\Field|Collection car_age
     * @property Show\Field|Collection car_baodan_paynum
     * @property Show\Field|Collection car_brands
     * @property Show\Field|Collection car_buy_money
     * @property Show\Field|Collection car_card_area
     * @property Show\Field|Collection car_city
     * @property Show\Field|Collection car_cityid
     * @property Show\Field|Collection car_code
     * @property Show\Field|Collection car_insurance_company
     * @property Show\Field|Collection car_km
     * @property Show\Field|Collection car_loan_money
     * @property Show\Field|Collection car_mortgage_money
     * @property Show\Field|Collection car_mortgage_status
     * @property Show\Field|Collection car_province
     * @property Show\Field|Collection car_provinceid
     * @property Show\Field|Collection car_repayment_month
     * @property Show\Field|Collection car_status
     * @property Show\Field|Collection car_type
     * @property Show\Field|Collection car_valuation_money
     * @property Show\Field|Collection company_whiltelist
     * @property Show\Field|Collection credit_banks
     * @property Show\Field|Collection credit_check_inmonths
     * @property Show\Field|Collection credit_check_inmonths_num
     * @property Show\Field|Collection credit_check_sixdmonth_num
     * @property Show\Field|Collection credit_check_thirdmonth_num
     * @property Show\Field|Collection credit_check_twomonth_num
     * @property Show\Field|Collection credit_fuzhai
     * @property Show\Field|Collection credit_has_bannian_usemoney
     * @property Show\Field|Collection credit_has_maxuse_money
     * @property Show\Field|Collection credit_house_is
     * @property Show\Field|Collection credit_house_loan_lave
     * @property Show\Field|Collection credit_house_loan_moneys
     * @property Show\Field|Collection credit_house_money
     * @property Show\Field|Collection credit_house_status
     * @property Show\Field|Collection credit_left_money
     * @property Show\Field|Collection credit_record_time
     * @property Show\Field|Collection credit_repayment_monthmoney
     * @property Show\Field|Collection credit_situation
     * @property Show\Field|Collection credit_total_money
     * @property Show\Field|Collection credit_type
     * @property Show\Field|Collection creditcard_has_usemoney
     * @property Show\Field|Collection creditcard_nums
     * @property Show\Field|Collection creditcard_totalmoney
     * @property Show\Field|Collection creditoverdue
     * @property Show\Field|Collection creditoverdue_halfyear
     * @property Show\Field|Collection creditoverdue_happentime
     * @property Show\Field|Collection creditoverdue_happentime_dj
     * @property Show\Field|Collection creditoverdue_happentime_zdj
     * @property Show\Field|Collection creditoverdue_is
     * @property Show\Field|Collection creditoverdue_money
     * @property Show\Field|Collection creditoverdue_money_dj
     * @property Show\Field|Collection creditoverdue_money_zdj
     * @property Show\Field|Collection creditoverdue_nums
     * @property Show\Field|Collection creditoverdue_nums_dj
     * @property Show\Field|Collection creditoverdue_nums_zdj
     * @property Show\Field|Collection creditoverdue_oneyear
     * @property Show\Field|Collection creditoverdue_time
     * @property Show\Field|Collection creditoverdue_twoyear
     * @property Show\Field|Collection creditoverdue_type
     * @property Show\Field|Collection daiqianyue_time
     * @property Show\Field|Collection do_del_adminname
     * @property Show\Field|Collection facetalk_actual_is
     * @property Show\Field|Collection facetalk_updatetime
     * @property Show\Field|Collection good_star_updatetime
     * @property Show\Field|Collection good_statr_move_time
     * @property Show\Field|Collection hezuo_time
     * @property Show\Field|Collection house_address
     * @property Show\Field|Collection house_area
     * @property Show\Field|Collection house_area_small
     * @property Show\Field|Collection house_buy_money
     * @property Show\Field|Collection house_buy_time
     * @property Show\Field|Collection house_city
     * @property Show\Field|Collection house_cityid
     * @property Show\Field|Collection house_is_rent
     * @property Show\Field|Collection house_loan_money
     * @property Show\Field|Collection house_mortgage_case
     * @property Show\Field|Collection house_mortgage_money
     * @property Show\Field|Collection house_now_money
     * @property Show\Field|Collection house_province
     * @property Show\Field|Collection house_provinceid
     * @property Show\Field|Collection house_rent_monthmoney
     * @property Show\Field|Collection house_repayment_month
     * @property Show\Field|Collection house_status
     * @property Show\Field|Collection house_type
     * @property Show\Field|Collection is_bank_money
     * @property Show\Field|Collection is_hand_add
     * @property Show\Field|Collection is_move
     * @property Show\Field|Collection is_new_jiami
     * @property Show\Field|Collection is_out_othercompany
     * @property Show\Field|Collection is_send_msg
     * @property Show\Field|Collection loan_month
     * @property Show\Field|Collection loan_monthid
     * @property Show\Field|Collection loan_repayment_source
     * @property Show\Field|Collection loan_repayment_type
     * @property Show\Field|Collection loan_use
     * @property Show\Field|Collection loan_use_time
     * @property Show\Field|Collection material_bank_is
     * @property Show\Field|Collection mobile2
     * @property Show\Field|Collection nowork_dowhat
     * @property Show\Field|Collection old_guwenid
     * @property Show\Field|Collection old_kefuids
     * @property Show\Field|Collection old_managerid
     * @property Show\Field|Collection old_managerids
     * @property Show\Field|Collection productid
     * @property Show\Field|Collection self_repeat_mobilenum
     * @property Show\Field|Collection source_en
     * @property Show\Field|Collection source_grade
     * @property Show\Field|Collection source_type2
     * @property Show\Field|Collection source_type_big
     * @property Show\Field|Collection sourceid
     * @property Show\Field|Collection system_prompt
     * @property Show\Field|Collection third_uid
     * @property Show\Field|Collection tpage
     * @property Show\Field|Collection true_city
     * @property Show\Field|Collection true_loan_time
     * @property Show\Field|Collection tuiguang_type
     * @property Show\Field|Collection user_census_address
     * @property Show\Field|Collection user_city
     * @property Show\Field|Collection user_cityid
     * @property Show\Field|Collection user_degree
     * @property Show\Field|Collection user_entrytype
     * @property Show\Field|Collection user_ismarry
     * @property Show\Field|Collection user_province
     * @property Show\Field|Collection user_provinceid
     * @property Show\Field|Collection user_school
     * @property Show\Field|Collection work_address
     * @property Show\Field|Collection work_city
     * @property Show\Field|Collection work_company_name
     * @property Show\Field|Collection work_company_type
     * @property Show\Field|Collection work_gongjijin
     * @property Show\Field|Collection work_gongjijin_long
     * @property Show\Field|Collection work_hangye
     * @property Show\Field|Collection work_income_long
     * @property Show\Field|Collection work_income_taxtype
     * @property Show\Field|Collection work_position
     * @property Show\Field|Collection work_shebao_long
     * @property Show\Field|Collection work_shebao_money
     * @property Show\Field|Collection work_wage_bank_money
     * @property Show\Field|Collection aptitude
     * @property Show\Field|Collection clue_id
     * @property Show\Field|Collection flag
     * @property Show\Field|Collection flag2
     * @property Show\Field|Collection ucid
     * @property Show\Field|Collection belong_city
     * @property Show\Field|Collection belong_department_bcompany
     * @property Show\Field|Collection deal_status
     * @property Show\Field|Collection isbankpay
     * @property Show\Field|Collection meiti
     * @property Show\Field|Collection rong_create_time
     * @property Show\Field|Collection rong_id
     * @property Show\Field|Collection rong_log_id
     * @property Show\Field|Collection ads
     * @property Show\Field|Collection car_life
     * @property Show\Field|Collection car_model
     * @property Show\Field|Collection car_price
     * @property Show\Field|Collection card_no
     * @property Show\Field|Collection creativeid
     * @property Show\Field|Collection customer_id
     * @property Show\Field|Collection education
     * @property Show\Field|Collection employment_time
     * @property Show\Field|Collection house_life
     * @property Show\Field|Collection house_price
     * @property Show\Field|Collection house_size
     * @property Show\Field|Collection is_credit
     * @property Show\Field|Collection is_married
     * @property Show\Field|Collection loan_long_time
     * @property Show\Field|Collection monthly_income
     * @property Show\Field|Collection payroll_type
     * @property Show\Field|Collection product_id
     * @property Show\Field|Collection professional
     * @property Show\Field|Collection time_str
     * @property Show\Field|Collection use_for
     * @property Show\Field|Collection zm_score
     * @property Show\Field|Collection checking_type
     * @property Show\Field|Collection dianzi_money
     * @property Show\Field|Collection is_dianzi
     * @property Show\Field|Collection qudao_mids
     * @property Show\Field|Collection qudao_mname
     * @property Show\Field|Collection shoukuan_month
     * @property Show\Field|Collection sk_uptime
     * @property Show\Field|Collection is_movie
     * @property Show\Field|Collection bj_chuangshou
     * @property Show\Field|Collection bj_jinjian_money
     * @property Show\Field|Collection bj_jinjian_num
     * @property Show\Field|Collection bj_pikuan_money
     * @property Show\Field|Collection bj_pikuan_num
     * @property Show\Field|Collection dg_chuangshou
     * @property Show\Field|Collection dg_jinjian_money
     * @property Show\Field|Collection dg_jinjian_num
     * @property Show\Field|Collection dg_pikuan_money
     * @property Show\Field|Collection dg_pikuan_num
     * @property Show\Field|Collection fs_chuangshou
     * @property Show\Field|Collection fs_jinjian_money
     * @property Show\Field|Collection fs_jinjian_num
     * @property Show\Field|Collection fs_pikuan_money
     * @property Show\Field|Collection fs_pikuan_num
     * @property Show\Field|Collection gz_chuangshou
     * @property Show\Field|Collection gz_jinjian_money
     * @property Show\Field|Collection gz_jinjian_num
     * @property Show\Field|Collection gz_pikuan_money
     * @property Show\Field|Collection gz_pikuan_num
     * @property Show\Field|Collection hz_chuangshou
     * @property Show\Field|Collection hz_jinjian_money
     * @property Show\Field|Collection hz_jinjian_num
     * @property Show\Field|Collection hz_pikuan_money
     * @property Show\Field|Collection hz_pikuan_num
     * @property Show\Field|Collection sh_chuangshou
     * @property Show\Field|Collection sh_jinjian_money
     * @property Show\Field|Collection sh_jinjian_num
     * @property Show\Field|Collection sh_pikuan_money
     * @property Show\Field|Collection sh_pikuan_num
     * @property Show\Field|Collection sz_chuangshou
     * @property Show\Field|Collection sz_jinjian_money
     * @property Show\Field|Collection sz_jinjian_num
     * @property Show\Field|Collection sz_pikuan_money
     * @property Show\Field|Collection sz_pikuan_num
     * @property Show\Field|Collection intime
     * @property Show\Field|Collection remark_num
     * @property Show\Field|Collection fenpei_time
     * @property Show\Field|Collection is_mobile_city
     * @property Show\Field|Collection msgtype
     * @property Show\Field|Collection jingshouzhi
     * @property Show\Field|Collection is_take
     * @property Show\Field|Collection read_kfuids
     * @property Show\Field|Collection shenfen_type
     * @property Show\Field|Collection data
     * @property Show\Field|Collection method
     * @property Show\Field|Collection ret_mst
     * @property Show\Field|Collection brand_one
     * @property Show\Field|Collection brand_two
     * @property Show\Field|Collection kefu_tel
     * @property Show\Field|Collection recording_url
     * @property Show\Field|Collection sessionid
     * @property Show\Field|Collection tel_time
     * @property Show\Field|Collection addkid
     * @property Show\Field|Collection back_way
     * @property Show\Field|Collection classify
     * @property Show\Field|Collection department_excel
     * @property Show\Field|Collection idstr
     * @property Show\Field|Collection shouju_num
     * @property Show\Field|Collection shoukuan_date
     * @property Show\Field|Collection shoukuan_way
     * @property Show\Field|Collection state_date
     * @property Show\Field|Collection create_date
     * @property Show\Field|Collection fid
     * @property Show\Field|Collection sat_id
     * @property Show\Field|Collection department1
     * @property Show\Field|Collection department2
     * @property Show\Field|Collection is_checkmobile
     * @property Show\Field|Collection is_send_sms
     * @property Show\Field|Collection visit_type
     * @property Show\Field|Collection dk_star
     * @property Show\Field|Collection fw_star
     * @property Show\Field|Collection gj_star
     * @property Show\Field|Collection gw_phone
     * @property Show\Field|Collection today_num
     * @property Show\Field|Collection vtype
     * @property Show\Field|Collection del_flg
     * @property Show\Field|Collection expired_time
     * @property Show\Field|Collection baodi_cs
     * @property Show\Field|Collection base_wage
     * @property Show\Field|Collection chidao
     * @property Show\Field|Collection chuqin
     * @property Show\Field|Collection cs
     * @property Show\Field|Collection daixinjia
     * @property Show\Field|Collection data_cost
     * @property Show\Field|Collection jinjian_ticheng
     * @property Show\Field|Collection kq_koukuan
     * @property Show\Field|Collection kuanggong
     * @property Show\Field|Collection last_cs
     * @property Show\Field|Collection lirun_ticheng
     * @property Show\Field|Collection ll_ticheng
     * @property Show\Field|Collection logistic_cost
     * @property Show\Field|Collection loudaka
     * @property Show\Field|Collection month_jidu_money
     * @property Show\Field|Collection month_jsxt_ticheng
     * @property Show\Field|Collection month_shifa
     * @property Show\Field|Collection month_yingfa
     * @property Show\Field|Collection niandu_money
     * @property Show\Field|Collection person_cs
     * @property Show\Field|Collection phone_fare
     * @property Show\Field|Collection qita_butie
     * @property Show\Field|Collection qita_koukuan
     * @property Show\Field|Collection qq_money
     * @property Show\Field|Collection queqin
     * @property Show\Field|Collection shijia
     * @property Show\Field|Collection sj_chuqin
     * @property Show\Field|Collection sj_ticheng
     * @property Show\Field|Collection syq_jidu_money
     * @property Show\Field|Collection xt_ticheng
     * @property Show\Field|Collection yingfa_ticheng
     * @property Show\Field|Collection zz_day
     * @property Show\Field|Collection data_price
     * @property Show\Field|Collection common
     * @property Show\Field|Collection minuend
     * @property Show\Field|Collection percent
     * @property Show\Field|Collection setid
     * @property Show\Field|Collection day_type
     * @property Show\Field|Collection source_account
     * @property Show\Field|Collection wc_id
     * @property Show\Field|Collection wc_key
     * @property Show\Field|Collection wc_name
     * @property Show\Field|Collection wc_secret
     * @property Show\Field|Collection is_succeed
     * @property Show\Field|Collection loanid
     * @property Show\Field|Collection msg
     * @property Show\Field|Collection rqs_json
     * @property Show\Field|Collection rsp_json
     * @property Show\Field|Collection sbm_json
     * @property Show\Field|Collection phoneid
     * @property Show\Field|Collection seatno
     * @property Show\Field|Collection vcode
     * @property Show\Field|Collection api_version
     * @property Show\Field|Collection f_name
     * @property Show\Field|Collection g_json
     * @property Show\Field|Collection gender
     * @property Show\Field|Collection id_card_number
     * @property Show\Field|Collection issued_by
     * @property Show\Field|Collection race
     * @property Show\Field|Collection valid_date
     * @property Show\Field|Collection call_auth
     * @property Show\Field|Collection file_auth
     * @property Show\Field|Collection lacation_time
     * @property Show\Field|Collection location_auth
     * @property Show\Field|Collection recording_auth
     * @property Show\Field|Collection sdk
     * @property Show\Field|Collection video_auth
     * @property Show\Field|Collection zdt_avatar_img
     * @property Show\Field|Collection zdt_idcard_img
     * @property Show\Field|Collection zdt_idcard_img_fan
     * @property Show\Field|Collection zdt_image_best
     * @property Show\Field|Collection zdt_image_env
     * @property Show\Field|Collection install_time
     * @property Show\Field|Collection chinese_name
     * @property Show\Field|Collection device
     * @property Show\Field|Collection folder_way
     * @property Show\Field|Collection is_have_num
     * @property Show\Field|Collection is_num_kongge
     * @property Show\Field|Collection call_id
     * @property Show\Field|Collection filename
     * @property Show\Field|Collection is_done
     * @property Show\Field|Collection op_flag
     * @property Show\Field|Collection osspath
     * @property Show\Field|Collection recordingpath
     * @property Show\Field|Collection all_num
     * @property Show\Field|Collection kf_num
     * @property Show\Field|Collection ofv_min_num
     * @property Show\Field|Collection one_min_num
     * @property Show\Field|Collection th_fv_min_num
     * @property Show\Field|Collection three_min_num
     * @property Show\Field|Collection two_min_num
     * @property Show\Field|Collection valid_num
     * @property Show\Field|Collection hrsc_num
     * @property Show\Field|Collection hrzs_num
     * @property Show\Field|Collection lds_num
     * @property Show\Field|Collection ldsc_num
     * @property Show\Field|Collection qds_num
     * @property Show\Field|Collection qdsc_num
     * @property Show\Field|Collection thly_num
     * @property Show\Field|Collection thzs_num
     * @property Show\Field|Collection thzsc_num
     * @property Show\Field|Collection min_vcode
     * @property Show\Field|Collection min_version
     *
     * @method Show\Field|Collection created_at(string $label = null)
     * @method Show\Field|Collection detail(string $label = null)
     * @method Show\Field|Collection id(string $label = null)
     * @method Show\Field|Collection name(string $label = null)
     * @method Show\Field|Collection type(string $label = null)
     * @method Show\Field|Collection updated_at(string $label = null)
     * @method Show\Field|Collection version(string $label = null)
     * @method Show\Field|Collection is_enabled(string $label = null)
     * @method Show\Field|Collection extension(string $label = null)
     * @method Show\Field|Collection icon(string $label = null)
     * @method Show\Field|Collection order(string $label = null)
     * @method Show\Field|Collection parent_id(string $label = null)
     * @method Show\Field|Collection uri(string $label = null)
     * @method Show\Field|Collection menu_id(string $label = null)
     * @method Show\Field|Collection permission_id(string $label = null)
     * @method Show\Field|Collection http_method(string $label = null)
     * @method Show\Field|Collection http_path(string $label = null)
     * @method Show\Field|Collection slug(string $label = null)
     * @method Show\Field|Collection role_id(string $label = null)
     * @method Show\Field|Collection user_id(string $label = null)
     * @method Show\Field|Collection value(string $label = null)
     * @method Show\Field|Collection avatar(string $label = null)
     * @method Show\Field|Collection password(string $label = null)
     * @method Show\Field|Collection remember_token(string $label = null)
     * @method Show\Field|Collection username(string $label = null)
     * @method Show\Field|Collection channel_name(string $label = null)
     * @method Show\Field|Collection channel_title(string $label = null)
     * @method Show\Field|Collection channel_type(string $label = null)
     * @method Show\Field|Collection encrypt_private_key(string $label = null)
     * @method Show\Field|Collection encrypt_public_key(string $label = null)
     * @method Show\Field|Collection status(string $label = null)
     * @method Show\Field|Collection age(string $label = null)
     * @method Show\Field|Collection business_license(string $label = null)
     * @method Show\Field|Collection car(string $label = null)
     * @method Show\Field|Collection channel_id(string $label = null)
     * @method Show\Field|Collection city(string $label = null)
     * @method Show\Field|Collection credit_card(string $label = null)
     * @method Show\Field|Collection df(string $label = null)
     * @method Show\Field|Collection fund(string $label = null)
     * @method Show\Field|Collection house(string $label = null)
     * @method Show\Field|Collection insurance(string $label = null)
     * @method Show\Field|Collection loan_periods(string $label = null)
     * @method Show\Field|Collection mobile(string $label = null)
     * @method Show\Field|Collection price(string $label = null)
     * @method Show\Field|Collection qyns(string $label = null)
     * @method Show\Field|Collection socital(string $label = null)
     * @method Show\Field|Collection wld(string $label = null)
     * @method Show\Field|Collection g_description(string $label = null)
     * @method Show\Field|Collection g_id(string $label = null)
     * @method Show\Field|Collection g_name(string $label = null)
     * @method Show\Field|Collection a_account(string $label = null)
     * @method Show\Field|Collection a_brands(string $label = null)
     * @method Show\Field|Collection a_city(string $label = null)
     * @method Show\Field|Collection a_cityid(string $label = null)
     * @method Show\Field|Collection a_department(string $label = null)
     * @method Show\Field|Collection a_gid(string $label = null)
     * @method Show\Field|Collection a_id(string $label = null)
     * @method Show\Field|Collection a_ispermit(string $label = null)
     * @method Show\Field|Collection a_logip(string $label = null)
     * @method Show\Field|Collection a_logtime(string $label = null)
     * @method Show\Field|Collection a_managerids(string $label = null)
     * @method Show\Field|Collection a_number(string $label = null)
     * @method Show\Field|Collection a_password(string $label = null)
     * @method Show\Field|Collection a_regtime(string $label = null)
     * @method Show\Field|Collection a_tel(string $label = null)
     * @method Show\Field|Collection a_tel2(string $label = null)
     * @method Show\Field|Collection a_username(string $label = null)
     * @method Show\Field|Collection is_changekey(string $label = null)
     * @method Show\Field|Collection m_id(string $label = null)
     * @method Show\Field|Collection m_isview(string $label = null)
     * @method Show\Field|Collection m_locality(string $label = null)
     * @method Show\Field|Collection m_name(string $label = null)
     * @method Show\Field|Collection m_parentid(string $label = null)
     * @method Show\Field|Collection m_url(string $label = null)
     * @method Show\Field|Collection ip(string $label = null)
     * @method Show\Field|Collection reqpath(string $label = null)
     * @method Show\Field|Collection time(string $label = null)
     * @method Show\Field|Collection uagent(string $label = null)
     * @method Show\Field|Collection uid(string $label = null)
     * @method Show\Field|Collection p_gid(string $label = null)
     * @method Show\Field|Collection p_id(string $label = null)
     * @method Show\Field|Collection p_rid(string $label = null)
     * @method Show\Field|Collection ipcity(string $label = null)
     * @method Show\Field|Collection is_del(string $label = null)
     * @method Show\Field|Collection liulanqi_type(string $label = null)
     * @method Show\Field|Collection loan_type(string $label = null)
     * @method Show\Field|Collection mobilecity(string $label = null)
     * @method Show\Field|Collection truename(string $label = null)
     * @method Show\Field|Collection dc_onlymobile_id(string $label = null)
     * @method Show\Field|Collection p_json_data(string $label = null)
     * @method Show\Field|Collection r_json_data(string $label = null)
     * @method Show\Field|Collection connection(string $label = null)
     * @method Show\Field|Collection exception(string $label = null)
     * @method Show\Field|Collection failed_at(string $label = null)
     * @method Show\Field|Collection payload(string $label = null)
     * @method Show\Field|Collection queue(string $label = null)
     * @method Show\Field|Collection uuid(string $label = null)
     * @method Show\Field|Collection citycode(string $label = null)
     * @method Show\Field|Collection cityname(string $label = null)
     * @method Show\Field|Collection email(string $label = null)
     * @method Show\Field|Collection token(string $label = null)
     * @method Show\Field|Collection abilities(string $label = null)
     * @method Show\Field|Collection expires_at(string $label = null)
     * @method Show\Field|Collection last_used_at(string $label = null)
     * @method Show\Field|Collection tokenable_id(string $label = null)
     * @method Show\Field|Collection tokenable_type(string $label = null)
     * @method Show\Field|Collection district(string $label = null)
     * @method Show\Field|Collection province(string $label = null)
     * @method Show\Field|Collection config_classify_id(string $label = null)
     * @method Show\Field|Collection config_key(string $label = null)
     * @method Show\Field|Collection config_name(string $label = null)
     * @method Show\Field|Collection extra(string $label = null)
     * @method Show\Field|Collection help(string $label = null)
     * @method Show\Field|Collection range_extra(string $label = null)
     * @method Show\Field|Collection required(string $label = null)
     * @method Show\Field|Collection classify_name(string $label = null)
     * @method Show\Field|Collection scene(string $label = null)
     * @method Show\Field|Collection sort(string $label = null)
     * @method Show\Field|Collection full_name(string $label = null)
     * @method Show\Field|Collection id_card(string $label = null)
     * @method Show\Field|Collection id_card_front(string $label = null)
     * @method Show\Field|Collection id_card_opposite(string $label = null)
     * @method Show\Field|Collection nickname(string $label = null)
     * @method Show\Field|Collection phone(string $label = null)
     * @method Show\Field|Collection balance(string $label = null)
     * @method Show\Field|Collection aescryptfor360(string $label = null)
     * @method Show\Field|Collection bank_money(string $label = null)
     * @method Show\Field|Collection baodan_is(string $label = null)
     * @method Show\Field|Collection brand(string $label = null)
     * @method Show\Field|Collection callkefu_name(string $label = null)
     * @method Show\Field|Collection callkefuid(string $label = null)
     * @method Show\Field|Collection check_num(string $label = null)
     * @method Show\Field|Collection cityid(string $label = null)
     * @method Show\Field|Collection data_d(string $label = null)
     * @method Show\Field|Collection datatype(string $label = null)
     * @method Show\Field|Collection day(string $label = null)
     * @method Show\Field|Collection department(string $label = null)
     * @method Show\Field|Collection department_bcompany(string $label = null)
     * @method Show\Field|Collection department_big(string $label = null)
     * @method Show\Field|Collection facetalk_arrival_time(string $label = null)
     * @method Show\Field|Collection facetalk_day(string $label = null)
     * @method Show\Field|Collection facetalk_is(string $label = null)
     * @method Show\Field|Collection from_oldggc_time(string $label = null)
     * @method Show\Field|Collection ggc_type(string $label = null)
     * @method Show\Field|Collection gongjijin(string $label = null)
     * @method Show\Field|Collection grade(string $label = null)
     * @method Show\Field|Collection hezuo_kefuid(string $label = null)
     * @method Show\Field|Collection huodongcode(string $label = null)
     * @method Show\Field|Collection is_again(string $label = null)
     * @method Show\Field|Collection is_again_undo(string $label = null)
     * @method Show\Field|Collection is_baoxian_gx(string $label = null)
     * @method Show\Field|Collection is_copy(string $label = null)
     * @method Show\Field|Collection is_gd_source(string $label = null)
     * @method Show\Field|Collection is_ggc_remark_updatetime(string $label = null)
     * @method Show\Field|Collection is_give(string $label = null)
     * @method Show\Field|Collection is_hezuodata(string $label = null)
     * @method Show\Field|Collection is_important(string $label = null)
     * @method Show\Field|Collection is_in_interchange(string $label = null)
     * @method Show\Field|Collection is_jingshouzhi(string $label = null)
     * @method Show\Field|Collection is_move_read(string $label = null)
     * @method Show\Field|Collection is_noto_ggc(string $label = null)
     * @method Show\Field|Collection is_qyd(string $label = null)
     * @method Show\Field|Collection is_read_reviews(string $label = null)
     * @method Show\Field|Collection is_sendsms(string $label = null)
     * @method Show\Field|Collection is_stock(string $label = null)
     * @method Show\Field|Collection is_syn(string $label = null)
     * @method Show\Field|Collection is_zhudai888(string $label = null)
     * @method Show\Field|Collection ismigrate(string $label = null)
     * @method Show\Field|Collection issendhz(string $label = null)
     * @method Show\Field|Collection isuse(string $label = null)
     * @method Show\Field|Collection kefu_name(string $label = null)
     * @method Show\Field|Collection kefu_type(string $label = null)
     * @method Show\Field|Collection kefuid(string $label = null)
     * @method Show\Field|Collection konghao_remark_times(string $label = null)
     * @method Show\Field|Collection last_remark_updatetime(string $label = null)
     * @method Show\Field|Collection loan_money(string $label = null)
     * @method Show\Field|Collection managerid(string $label = null)
     * @method Show\Field|Collection md5mobile(string $label = null)
     * @method Show\Field|Collection md5mobileto8(string $label = null)
     * @method Show\Field|Collection md5mobileto9(string $label = null)
     * @method Show\Field|Collection mobile_old(string $label = null)
     * @method Show\Field|Collection move_time(string $label = null)
     * @method Show\Field|Collection old_kefuid(string $label = null)
     * @method Show\Field|Collection qudao_ch_big(string $label = null)
     * @method Show\Field|Collection qudaoid(string $label = null)
     * @method Show\Field|Collection remark_updatetime(string $label = null)
     * @method Show\Field|Collection remark_updatetime_copy(string $label = null)
     * @method Show\Field|Collection repeat_mobilenum(string $label = null)
     * @method Show\Field|Collection sem_platform(string $label = null)
     * @method Show\Field|Collection sem_type(string $label = null)
     * @method Show\Field|Collection sem_username(string $label = null)
     * @method Show\Field|Collection sex(string $label = null)
     * @method Show\Field|Collection sign_is(string $label = null)
     * @method Show\Field|Collection source(string $label = null)
     * @method Show\Field|Collection source_id(string $label = null)
     * @method Show\Field|Collection source_platform(string $label = null)
     * @method Show\Field|Collection source_type1(string $label = null)
     * @method Show\Field|Collection stars(string $label = null)
     * @method Show\Field|Collection test(string $label = null)
     * @method Show\Field|Collection test2(string $label = null)
     * @method Show\Field|Collection towho(string $label = null)
     * @method Show\Field|Collection weili(string $label = null)
     * @method Show\Field|Collection work_shebao(string $label = null)
     * @method Show\Field|Collection work_wage_give_type(string $label = null)
     * @method Show\Field|Collection zdhkefu_id(string $label = null)
     * @method Show\Field|Collection zdhkefu_name(string $label = null)
     * @method Show\Field|Collection zdorqdb(string $label = null)
     * @method Show\Field|Collection zdorqdb_move(string $label = null)
     * @method Show\Field|Collection zhima(string $label = null)
     * @method Show\Field|Collection checking_id(string $label = null)
     * @method Show\Field|Collection is_ggc(string $label = null)
     * @method Show\Field|Collection is_old(string $label = null)
     * @method Show\Field|Collection loan_id(string $label = null)
     * @method Show\Field|Collection manager_name(string $label = null)
     * @method Show\Field|Collection msg_type(string $label = null)
     * @method Show\Field|Collection remark(string $label = null)
     * @method Show\Field|Collection acount_id(string $label = null)
     * @method Show\Field|Collection con(string $label = null)
     * @method Show\Field|Collection dpt(string $label = null)
     * @method Show\Field|Collection bank_name(string $label = null)
     * @method Show\Field|Collection bank_num(string $label = null)
     * @method Show\Field|Collection bank_subbranch(string $label = null)
     * @method Show\Field|Collection copyids(string $label = null)
     * @method Show\Field|Collection etime(string $label = null)
     * @method Show\Field|Collection finish_time(string $label = null)
     * @method Show\Field|Collection hour(string $label = null)
     * @method Show\Field|Collection money(string $label = null)
     * @method Show\Field|Collection now_job(string $label = null)
     * @method Show\Field|Collection payee(string $label = null)
     * @method Show\Field|Collection payment_date(string $label = null)
     * @method Show\Field|Collection payment_type(string $label = null)
     * @method Show\Field|Collection phone_money(string $label = null)
     * @method Show\Field|Collection readids(string $label = null)
     * @method Show\Field|Collection reason(string $label = null)
     * @method Show\Field|Collection stime(string $label = null)
     * @method Show\Field|Collection work(string $label = null)
     * @method Show\Field|Collection address(string $label = null)
     * @method Show\Field|Collection approval_id(string $label = null)
     * @method Show\Field|Collection company(string $label = null)
     * @method Show\Field|Collection content(string $label = null)
     * @method Show\Field|Collection info(string $label = null)
     * @method Show\Field|Collection is_main(string $label = null)
     * @method Show\Field|Collection taxpayer_num(string $label = null)
     * @method Show\Field|Collection annexpath(string $label = null)
     * @method Show\Field|Collection annexsize(string $label = null)
     * @method Show\Field|Collection remark_id(string $label = null)
     * @method Show\Field|Collection level(string $label = null)
     * @method Show\Field|Collection ask(string $label = null)
     * @method Show\Field|Collection default_reply(string $label = null)
     * @method Show\Field|Collection is_home(string $label = null)
     * @method Show\Field|Collection questioner(string $label = null)
     * @method Show\Field|Collection reply_num(string $label = null)
     * @method Show\Field|Collection seodescription(string $label = null)
     * @method Show\Field|Collection seokeywords(string $label = null)
     * @method Show\Field|Collection seotitle(string $label = null)
     * @method Show\Field|Collection askid(string $label = null)
     * @method Show\Field|Collection first_show(string $label = null)
     * @method Show\Field|Collection mid(string $label = null)
     * @method Show\Field|Collection bankname(string $label = null)
     * @method Show\Field|Collection day_int(string $label = null)
     * @method Show\Field|Collection pikuan_money(string $label = null)
     * @method Show\Field|Collection pikuan_num(string $label = null)
     * @method Show\Field|Collection shoukuan_money(string $label = null)
     * @method Show\Field|Collection shoukuan_num(string $label = null)
     * @method Show\Field|Collection city_item(string $label = null)
     * @method Show\Field|Collection clicks(string $label = null)
     * @method Show\Field|Collection percharge(string $label = null)
     * @method Show\Field|Collection show_num(string $label = null)
     * @method Show\Field|Collection truemoney(string $label = null)
     * @method Show\Field|Collection yugu_onemoney(string $label = null)
     * @method Show\Field|Collection yugu_onemoney_endtime(string $label = null)
     * @method Show\Field|Collection yugu_onemoney_startdtime(string $label = null)
     * @method Show\Field|Collection check_name(string $label = null)
     * @method Show\Field|Collection check_time(string $label = null)
     * @method Show\Field|Collection data_num(string $label = null)
     * @method Show\Field|Collection datanum_left(string $label = null)
     * @method Show\Field|Collection fenpei_num(string $label = null)
     * @method Show\Field|Collection money_left(string $label = null)
     * @method Show\Field|Collection money_one(string $label = null)
     * @method Show\Field|Collection month(string $label = null)
     * @method Show\Field|Collection operator(string $label = null)
     * @method Show\Field|Collection rcgtype(string $label = null)
     * @method Show\Field|Collection datanum_total(string $label = null)
     * @method Show\Field|Collection is_close(string $label = null)
     * @method Show\Field|Collection is_sms(string $label = null)
     * @method Show\Field|Collection money_total(string $label = null)
     * @method Show\Field|Collection person_num(string $label = null)
     * @method Show\Field|Collection accept_loanmoney_do_pkefuid(string $label = null)
     * @method Show\Field|Collection accepted_loan_daynum(string $label = null)
     * @method Show\Field|Collection accepted_loan_num(string $label = null)
     * @method Show\Field|Collection avatar_img(string $label = null)
     * @method Show\Field|Collection born_day(string $label = null)
     * @method Show\Field|Collection born_month(string $label = null)
     * @method Show\Field|Collection born_year(string $label = null)
     * @method Show\Field|Collection degree(string $label = null)
     * @method Show\Field|Collection del_time(string $label = null)
     * @method Show\Field|Collection department_son(string $label = null)
     * @method Show\Field|Collection ggc_day(string $label = null)
     * @method Show\Field|Collection ggc_num(string $label = null)
     * @method Show\Field|Collection graduated_school(string $label = null)
     * @method Show\Field|Collection idcard_img(string $label = null)
     * @method Show\Field|Collection idcard_img_fan(string $label = null)
     * @method Show\Field|Collection idcard_number(string $label = null)
     * @method Show\Field|Collection in_company_time(string $label = null)
     * @method Show\Field|Collection is_admin_closed(string $label = null)
     * @method Show\Field|Collection is_admin_edit_jiekeinfo(string $label = null)
     * @method Show\Field|Collection is_closed(string $label = null)
     * @method Show\Field|Collection is_closed_accept_ggcdata(string $label = null)
     * @method Show\Field|Collection is_closed_accept_hzddata(string $label = null)
     * @method Show\Field|Collection is_fenpei(string $label = null)
     * @method Show\Field|Collection is_limit_logintime(string $label = null)
     * @method Show\Field|Collection is_lizhi(string $label = null)
     * @method Show\Field|Collection is_manager(string $label = null)
     * @method Show\Field|Collection is_manager_bcompany(string $label = null)
     * @method Show\Field|Collection is_manager_big(string $label = null)
     * @method Show\Field|Collection is_manager_son(string $label = null)
     * @method Show\Field|Collection is_shenhe_pass(string $label = null)
     * @method Show\Field|Collection is_superadmin_opend(string $label = null)
     * @method Show\Field|Collection is_to_ggc(string $label = null)
     * @method Show\Field|Collection jieke_citys(string $label = null)
     * @method Show\Field|Collection kefu_role(string $label = null)
     * @method Show\Field|Collection kefu_seatsid(string $label = null)
     * @method Show\Field|Collection last_company_duty(string $label = null)
     * @method Show\Field|Collection last_company_name(string $label = null)
     * @method Show\Field|Collection lizhi_time(string $label = null)
     * @method Show\Field|Collection native_place(string $label = null)
     * @method Show\Field|Collection operator_acceptloan_pkefuid(string $label = null)
     * @method Show\Field|Collection operator_pkefuid(string $label = null)
     * @method Show\Field|Collection p_name(string $label = null)
     * @method Show\Field|Collection plan_loan_daynum(string $label = null)
     * @method Show\Field|Collection self_tel(string $label = null)
     * @method Show\Field|Collection sem_loan_day(string $label = null)
     * @method Show\Field|Collection sem_loan_num(string $label = null)
     * @method Show\Field|Collection sequence(string $label = null)
     * @method Show\Field|Collection shenhe_status(string $label = null)
     * @method Show\Field|Collection son_ids(string $label = null)
     * @method Show\Field|Collection today_date(string $label = null)
     * @method Show\Field|Collection unders_num(string $label = null)
     * @method Show\Field|Collection why_admin_closed(string $label = null)
     * @method Show\Field|Collection workcard_img(string $label = null)
     * @method Show\Field|Collection p_mid(string $label = null)
     * @method Show\Field|Collection amount(string $label = null)
     * @method Show\Field|Collection bankmanager(string $label = null)
     * @method Show\Field|Collection chengyi_money(string $label = null)
     * @method Show\Field|Collection contract_num(string $label = null)
     * @method Show\Field|Collection due_bank(string $label = null)
     * @method Show\Field|Collection fangdai_money(string $label = null)
     * @method Show\Field|Collection gobank_money(string $label = null)
     * @method Show\Field|Collection gobanktime(string $label = null)
     * @method Show\Field|Collection is_reviewed(string $label = null)
     * @method Show\Field|Collection jupi_time(string $label = null)
     * @method Show\Field|Collection kefuname(string $label = null)
     * @method Show\Field|Collection loan_time(string $label = null)
     * @method Show\Field|Collection netincome(string $label = null)
     * @method Show\Field|Collection pikuan_time(string $label = null)
     * @method Show\Field|Collection qudaomoney(string $label = null)
     * @method Show\Field|Collection rates(string $label = null)
     * @method Show\Field|Collection referralmoney(string $label = null)
     * @method Show\Field|Collection reviewed_time(string $label = null)
     * @method Show\Field|Collection shenhe_time(string $label = null)
     * @method Show\Field|Collection shoukuan_time(string $label = null)
     * @method Show\Field|Collection weishou_money(string $label = null)
     * @method Show\Field|Collection weishou_time(string $label = null)
     * @method Show\Field|Collection weiyue_time(string $label = null)
     * @method Show\Field|Collection account(string $label = null)
     * @method Show\Field|Collection salt(string $label = null)
     * @method Show\Field|Collection usertype(string $label = null)
     * @method Show\Field|Collection data_type(string $label = null)
     * @method Show\Field|Collection fangkuan_num(string $label = null)
     * @method Show\Field|Collection loan_again_num(string $label = null)
     * @method Show\Field|Collection loannum(string $label = null)
     * @method Show\Field|Collection stars3(string $label = null)
     * @method Show\Field|Collection stars4(string $label = null)
     * @method Show\Field|Collection status0(string $label = null)
     * @method Show\Field|Collection status2(string $label = null)
     * @method Show\Field|Collection uptime(string $label = null)
     * @method Show\Field|Collection kid(string $label = null)
     * @method Show\Field|Collection module(string $label = null)
     * @method Show\Field|Collection module_name(string $label = null)
     * @method Show\Field|Collection route(string $label = null)
     * @method Show\Field|Collection route_name(string $label = null)
     * @method Show\Field|Collection copyid(string $label = null)
     * @method Show\Field|Collection reply_content(string $label = null)
     * @method Show\Field|Collection reply_time(string $label = null)
     * @method Show\Field|Collection send_content(string $label = null)
     * @method Show\Field|Collection send_time(string $label = null)
     * @method Show\Field|Collection city_data(string $label = null)
     * @method Show\Field|Collection is_enable(string $label = null)
     * @method Show\Field|Collection rq_time(string $label = null)
     * @method Show\Field|Collection sms_template(string $label = null)
     * @method Show\Field|Collection condition(string $label = null)
     * @method Show\Field|Collection new_value(string $label = null)
     * @method Show\Field|Collection old_value(string $label = null)
     * @method Show\Field|Collection table(string $label = null)
     * @method Show\Field|Collection kh_job(string $label = null)
     * @method Show\Field|Collection kh_type(string $label = null)
     * @method Show\Field|Collection kh_value(string $label = null)
     * @method Show\Field|Collection operat_position(string $label = null)
     * @method Show\Field|Collection operat_sys(string $label = null)
     * @method Show\Field|Collection operator_id(string $label = null)
     * @method Show\Field|Collection fd_money(string $label = null)
     * @method Show\Field|Collection month_plan(string $label = null)
     * @method Show\Field|Collection developer(string $label = null)
     * @method Show\Field|Collection question_level(string $label = null)
     * @method Show\Field|Collection question_type(string $label = null)
     * @method Show\Field|Collection system_type(string $label = null)
     * @method Show\Field|Collection addtime(string $label = null)
     * @method Show\Field|Collection distribute_num(string $label = null)
     * @method Show\Field|Collection distribute_type(string $label = null)
     * @method Show\Field|Collection end_time(string $label = null)
     * @method Show\Field|Collection platformid(string $label = null)
     * @method Show\Field|Collection search_param(string $label = null)
     * @method Show\Field|Collection start_time(string $label = null)
     * @method Show\Field|Collection images(string $label = null)
     * @method Show\Field|Collection mobile_info(string $label = null)
     * @method Show\Field|Collection seatsid(string $label = null)
     * @method Show\Field|Collection pid(string $label = null)
     * @method Show\Field|Collection treatment_content(string $label = null)
     * @method Show\Field|Collection sqd_now_num(string $label = null)
     * @method Show\Field|Collection sqd_percent_num(string $label = null)
     * @method Show\Field|Collection zd_now_num(string $label = null)
     * @method Show\Field|Collection zd_percent_num(string $label = null)
     * @method Show\Field|Collection m_pid(string $label = null)
     * @method Show\Field|Collection author(string $label = null)
     * @method Show\Field|Collection date(string $label = null)
     * @method Show\Field|Collection locality(string $label = null)
     * @method Show\Field|Collection operation_note(string $label = null)
     * @method Show\Field|Collection small_desc(string $label = null)
     * @method Show\Field|Collection guwencardid(string $label = null)
     * @method Show\Field|Collection dpt0(string $label = null)
     * @method Show\Field|Collection dpt1(string $label = null)
     * @method Show\Field|Collection dpt2(string $label = null)
     * @method Show\Field|Collection sat_level(string $label = null)
     * @method Show\Field|Collection service_money(string $label = null)
     * @method Show\Field|Collection upd_time(string $label = null)
     * @method Show\Field|Collection review_id(string $label = null)
     * @method Show\Field|Collection sendmsg(string $label = null)
     * @method Show\Field|Collection huashu_content(string $label = null)
     * @method Show\Field|Collection huashu_type(string $label = null)
     * @method Show\Field|Collection huashu_type_ch(string $label = null)
     * @method Show\Field|Collection is_have_logo(string $label = null)
     * @method Show\Field|Collection import_bigtotal(string $label = null)
     * @method Show\Field|Collection import_success(string $label = null)
     * @method Show\Field|Collection import_total(string $label = null)
     * @method Show\Field|Collection accept_loan_type_do_pkefuid(string $label = null)
     * @method Show\Field|Collection accept_loanmoney_max(string $label = null)
     * @method Show\Field|Collection accept_loanmoney_min(string $label = null)
     * @method Show\Field|Collection accepted_give_daynum(string $label = null)
     * @method Show\Field|Collection accepted_loan_totalnum(string $label = null)
     * @method Show\Field|Collection accepted_loan_totalnum_firstday(string $label = null)
     * @method Show\Field|Collection bankcard_img(string $label = null)
     * @method Show\Field|Collection bcompany(string $label = null)
     * @method Show\Field|Collection bzsx_one(string $label = null)
     * @method Show\Field|Collection bzsx_two(string $label = null)
     * @method Show\Field|Collection credit_img(string $label = null)
     * @method Show\Field|Collection cw_cityids(string $label = null)
     * @method Show\Field|Collection cw_citys(string $label = null)
     * @method Show\Field|Collection dataNum_income_alert_time(string $label = null)
     * @method Show\Field|Collection give_num(string $label = null)
     * @method Show\Field|Collection gonggao_id(string $label = null)
     * @method Show\Field|Collection goods_areas(string $label = null)
     * @method Show\Field|Collection graduate_img(string $label = null)
     * @method Show\Field|Collection groupid(string $label = null)
     * @method Show\Field|Collection guwenid(string $label = null)
     * @method Show\Field|Collection hezuo_name(string $label = null)
     * @method Show\Field|Collection hezuo_percent(string $label = null)
     * @method Show\Field|Collection hezuo_type(string $label = null)
     * @method Show\Field|Collection is_admin_login_status(string $label = null)
     * @method Show\Field|Collection is_all_city(string $label = null)
     * @method Show\Field|Collection is_can_operator_ggcdata(string $label = null)
     * @method Show\Field|Collection is_check_close(string $label = null)
     * @method Show\Field|Collection is_closed_accept_yydata(string $label = null)
     * @method Show\Field|Collection is_closed_changecity_data(string $label = null)
     * @method Show\Field|Collection is_finance(string $label = null)
     * @method Show\Field|Collection is_hr(string $label = null)
     * @method Show\Field|Collection is_performance_remind(string $label = null)
     * @method Show\Field|Collection is_plan_daynum_do(string $label = null)
     * @method Show\Field|Collection is_waipai(string $label = null)
     * @method Show\Field|Collection is_xuni(string $label = null)
     * @method Show\Field|Collection is_zilao_pass(string $label = null)
     * @method Show\Field|Collection laodong_img(string $label = null)
     * @method Show\Field|Collection loanword_month(string $label = null)
     * @method Show\Field|Collection money_give(string $label = null)
     * @method Show\Field|Collection money_recharge(string $label = null)
     * @method Show\Field|Collection plan_loan_num(string $label = null)
     * @method Show\Field|Collection qudao_type(string $label = null)
     * @method Show\Field|Collection repeat_deadline_type(string $label = null)
     * @method Show\Field|Collection s_month(string $label = null)
     * @method Show\Field|Collection subordinates(string $label = null)
     * @method Show\Field|Collection subordinates_big(string $label = null)
     * @method Show\Field|Collection tijian_img(string $label = null)
     * @method Show\Field|Collection yj_name(string $label = null)
     * @method Show\Field|Collection ziliao_check_remark(string $label = null)
     * @method Show\Field|Collection ziliao_check_time(string $label = null)
     * @method Show\Field|Collection ziliao_time(string $label = null)
     * @method Show\Field|Collection zuoxi_tel(string $label = null)
     * @method Show\Field|Collection total_num(string $label = null)
     * @method Show\Field|Collection undo_num(string $label = null)
     * @method Show\Field|Collection income(string $label = null)
     * @method Show\Field|Collection num(string $label = null)
     * @method Show\Field|Collection data_top(string $label = null)
     * @method Show\Field|Collection gldata_top(string $label = null)
     * @method Show\Field|Collection inwork_num(string $label = null)
     * @method Show\Field|Collection limit_num(string $label = null)
     * @method Show\Field|Collection acceptloan_status(string $label = null)
     * @method Show\Field|Collection nownum(string $label = null)
     * @method Show\Field|Collection planbili(string $label = null)
     * @method Show\Field|Collection setpot(string $label = null)
     * @method Show\Field|Collection beat_per(string $label = null)
     * @method Show\Field|Collection read_flg(string $label = null)
     * @method Show\Field|Collection company_name(string $label = null)
     * @method Show\Field|Collection chongzhi_id(string $label = null)
     * @method Show\Field|Collection chongzhi_type(string $label = null)
     * @method Show\Field|Collection is_ok(string $label = null)
     * @method Show\Field|Collection kefu_id(string $label = null)
     * @method Show\Field|Collection left_money(string $label = null)
     * @method Show\Field|Collection rest_max(string $label = null)
     * @method Show\Field|Collection rest_min(string $label = null)
     * @method Show\Field|Collection work_max(string $label = null)
     * @method Show\Field|Collection work_min(string $label = null)
     * @method Show\Field|Collection answer(string $label = null)
     * @method Show\Field|Collection question(string $label = null)
     * @method Show\Field|Collection is_answer_right(string $label = null)
     * @method Show\Field|Collection is_pop(string $label = null)
     * @method Show\Field|Collection pop_count(string $label = null)
     * @method Show\Field|Collection demand_num(string $label = null)
     * @method Show\Field|Collection leader_name(string $label = null)
     * @method Show\Field|Collection is_show_yeji(string $label = null)
     * @method Show\Field|Collection done_rate(string $label = null)
     * @method Show\Field|Collection dpt_cpy(string $label = null)
     * @method Show\Field|Collection is_show(string $label = null)
     * @method Show\Field|Collection net(string $label = null)
     * @method Show\Field|Collection one_data_profit(string $label = null)
     * @method Show\Field|Collection one_person_net(string $label = null)
     * @method Show\Field|Collection qy_rate(string $label = null)
     * @method Show\Field|Collection ranktype(string $label = null)
     * @method Show\Field|Collection trans_rate(string $label = null)
     * @method Show\Field|Collection utime(string $label = null)
     * @method Show\Field|Collection you_rate(string $label = null)
     * @method Show\Field|Collection yy_rate(string $label = null)
     * @method Show\Field|Collection eqmark(string $label = null)
     * @method Show\Field|Collection person_type(string $label = null)
     * @method Show\Field|Collection test_type(string $label = null)
     * @method Show\Field|Collection tijian_path(string $label = null)
     * @method Show\Field|Collection mod(string $label = null)
     * @method Show\Field|Collection now_job_type(string $label = null)
     * @method Show\Field|Collection per_num(string $label = null)
     * @method Show\Field|Collection author_type(string $label = null)
     * @method Show\Field|Collection brands(string $label = null)
     * @method Show\Field|Collection cityids(string $label = null)
     * @method Show\Field|Collection is_system(string $label = null)
     * @method Show\Field|Collection views(string $label = null)
     * @method Show\Field|Collection is_see(string $label = null)
     * @method Show\Field|Collection is_many(string $label = null)
     * @method Show\Field|Collection week(string $label = null)
     * @method Show\Field|Collection menustr(string $label = null)
     * @method Show\Field|Collection erji(string $label = null)
     * @method Show\Field|Collection fuzeren(string $label = null)
     * @method Show\Field|Collection guwen(string $label = null)
     * @method Show\Field|Collection mob_all(string $label = null)
     * @method Show\Field|Collection yiji(string $label = null)
     * @method Show\Field|Collection create_income(string $label = null)
     * @method Show\Field|Collection xiugai_num(string $label = null)
     * @method Show\Field|Collection average_points(string $label = null)
     * @method Show\Field|Collection date_type(string $label = null)
     * @method Show\Field|Collection duration(string $label = null)
     * @method Show\Field|Collection duration_average(string $label = null)
     * @method Show\Field|Collection first_num(string $label = null)
     * @method Show\Field|Collection first_num_day(string $label = null)
     * @method Show\Field|Collection give_num_day(string $label = null)
     * @method Show\Field|Collection hb(string $label = null)
     * @method Show\Field|Collection is_tx(string $label = null)
     * @method Show\Field|Collection jinjian_month(string $label = null)
     * @method Show\Field|Collection lds_num_day(string $label = null)
     * @method Show\Field|Collection lds_num_month(string $label = null)
     * @method Show\Field|Collection login_day_num(string $label = null)
     * @method Show\Field|Collection login_num(string $label = null)
     * @method Show\Field|Collection mob_average(string $label = null)
     * @method Show\Field|Collection netincome_average(string $label = null)
     * @method Show\Field|Collection netincome_day(string $label = null)
     * @method Show\Field|Collection pnum(string $label = null)
     * @method Show\Field|Collection qds_num_day(string $label = null)
     * @method Show\Field|Collection qds_num_month(string $label = null)
     * @method Show\Field|Collection shoukuan_money2(string $label = null)
     * @method Show\Field|Collection shoukuan_num_day(string $label = null)
     * @method Show\Field|Collection sm_day(string $label = null)
     * @method Show\Field|Collection sm_month(string $label = null)
     * @method Show\Field|Collection data_size(string $label = null)
     * @method Show\Field|Collection wufanpei(string $label = null)
     * @method Show\Field|Collection updatetime(string $label = null)
     * @method Show\Field|Collection is_why(string $label = null)
     * @method Show\Field|Collection loan_daigenjin_num(string $label = null)
     * @method Show\Field|Collection loan_daoluan_num(string $label = null)
     * @method Show\Field|Collection loan_daoluan_num_pre(string $label = null)
     * @method Show\Field|Collection loan_five_star_num(string $label = null)
     * @method Show\Field|Collection loan_four_star_num(string $label = null)
     * @method Show\Field|Collection loan_num(string $label = null)
     * @method Show\Field|Collection loan_one_star_num(string $label = null)
     * @method Show\Field|Collection loan_three_star_num(string $label = null)
     * @method Show\Field|Collection loan_two_star_num(string $label = null)
     * @method Show\Field|Collection loan_two_star_plus_num(string $label = null)
     * @method Show\Field|Collection loan_waidi_num(string $label = null)
     * @method Show\Field|Collection loan_waidi_num_pre(string $label = null)
     * @method Show\Field|Collection loan_yishouli_num(string $label = null)
     * @method Show\Field|Collection three_star_above_pre(string $label = null)
     * @method Show\Field|Collection two_star_above_pre(string $label = null)
     * @method Show\Field|Collection zfp_daoluan_num(string $label = null)
     * @method Show\Field|Collection zfp_five_star_num(string $label = null)
     * @method Show\Field|Collection zfp_four_star_num(string $label = null)
     * @method Show\Field|Collection zfp_loan_daigenjin_num(string $label = null)
     * @method Show\Field|Collection zfp_loan_num(string $label = null)
     * @method Show\Field|Collection zfp_loan_yishouli_num(string $label = null)
     * @method Show\Field|Collection zfp_one_star_num(string $label = null)
     * @method Show\Field|Collection zfp_three_star_num(string $label = null)
     * @method Show\Field|Collection zfp_two_star_num(string $label = null)
     * @method Show\Field|Collection zfp_two_star_plus_num(string $label = null)
     * @method Show\Field|Collection zs_daoluan_num(string $label = null)
     * @method Show\Field|Collection zs_five_star_num(string $label = null)
     * @method Show\Field|Collection zs_four_star_num(string $label = null)
     * @method Show\Field|Collection zs_loan_daigenjin_num(string $label = null)
     * @method Show\Field|Collection zs_loan_num(string $label = null)
     * @method Show\Field|Collection zs_loan_yishouli_num(string $label = null)
     * @method Show\Field|Collection zs_one_star_num(string $label = null)
     * @method Show\Field|Collection zs_three_star_num(string $label = null)
     * @method Show\Field|Collection zs_two_star_num(string $label = null)
     * @method Show\Field|Collection zs_two_star_plus_num(string $label = null)
     * @method Show\Field|Collection chuangshou_money(string $label = null)
     * @method Show\Field|Collection chuangshou_num(string $label = null)
     * @method Show\Field|Collection jinjian_num(string $label = null)
     * @method Show\Field|Collection team_chuangshou_money(string $label = null)
     * @method Show\Field|Collection team_chuangshou_num(string $label = null)
     * @method Show\Field|Collection team_jinjian_num(string $label = null)
     * @method Show\Field|Collection team_pikuan_money(string $label = null)
     * @method Show\Field|Collection team_pikuan_num(string $label = null)
     * @method Show\Field|Collection apply_num(string $label = null)
     * @method Show\Field|Collection youzhi_num(string $label = null)
     * @method Show\Field|Collection upd_date(string $label = null)
     * @method Show\Field|Collection waitdo_num(string $label = null)
     * @method Show\Field|Collection waitdo_rate(string $label = null)
     * @method Show\Field|Collection add_kefuid(string $label = null)
     * @method Show\Field|Collection countermeasures(string $label = null)
     * @method Show\Field|Collection department_big_mubiao(string $label = null)
     * @method Show\Field|Collection insufficient_today(string $label = null)
     * @method Show\Field|Collection singn_day(string $label = null)
     * @method Show\Field|Collection yuji_visit_num(string $label = null)
     * @method Show\Field|Collection is_read(string $label = null)
     * @method Show\Field|Collection is_back(string $label = null)
     * @method Show\Field|Collection left_num(string $label = null)
     * @method Show\Field|Collection xiaofei_type(string $label = null)
     * @method Show\Field|Collection viewnum(string $label = null)
     * @method Show\Field|Collection accepted_user_num(string $label = null)
     * @method Show\Field|Collection ask_num(string $label = null)
     * @method Show\Field|Collection good_at_wordids(string $label = null)
     * @method Show\Field|Collection good_at_work(string $label = null)
     * @method Show\Field|Collection is_admin_login(string $label = null)
     * @method Show\Field|Collection is_allocation(string $label = null)
     * @method Show\Field|Collection is_pass(string $label = null)
     * @method Show\Field|Collection login_time(string $label = null)
     * @method Show\Field|Collection parent_managerid(string $label = null)
     * @method Show\Field|Collection plan_user_num(string $label = null)
     * @method Show\Field|Collection products_num(string $label = null)
     * @method Show\Field|Collection provinceid(string $label = null)
     * @method Show\Field|Collection self_introduction(string $label = null)
     * @method Show\Field|Collection service_area(string $label = null)
     * @method Show\Field|Collection service_areaids(string $label = null)
     * @method Show\Field|Collection alarm_in(string $label = null)
     * @method Show\Field|Collection alarm_type(string $label = null)
     * @method Show\Field|Collection hourtime(string $label = null)
     * @method Show\Field|Collection manager_id(string $label = null)
     * @method Show\Field|Collection minutetime(string $label = null)
     * @method Show\Field|Collection state(string $label = null)
     * @method Show\Field|Collection loanmsg_num(string $label = null)
     * @method Show\Field|Collection catid(string $label = null)
     * @method Show\Field|Collection ftitle(string $label = null)
     * @method Show\Field|Collection is_newstime(string $label = null)
     * @method Show\Field|Collection keyword(string $label = null)
     * @method Show\Field|Collection newsid(string $label = null)
     * @method Show\Field|Collection newstime(string $label = null)
     * @method Show\Field|Collection picalt(string $label = null)
     * @method Show\Field|Collection tags(string $label = null)
     * @method Show\Field|Collection titlepic(string $label = null)
     * @method Show\Field|Collection titleurl(string $label = null)
     * @method Show\Field|Collection toptitle(string $label = null)
     * @method Show\Field|Collection pic_alt(string $label = null)
     * @method Show\Field|Collection come_from(string $label = null)
     * @method Show\Field|Collection hand_date(string $label = null)
     * @method Show\Field|Collection seo_description(string $label = null)
     * @method Show\Field|Collection seo_keywords(string $label = null)
     * @method Show\Field|Collection seo_title(string $label = null)
     * @method Show\Field|Collection c_abutment(string $label = null)
     * @method Show\Field|Collection c_abutment_email(string $label = null)
     * @method Show\Field|Collection c_abutment_mobile(string $label = null)
     * @method Show\Field|Collection c_bank(string $label = null)
     * @method Show\Field|Collection c_bank_account(string $label = null)
     * @method Show\Field|Collection c_mainbody(string $label = null)
     * @method Show\Field|Collection c_manager(string $label = null)
     * @method Show\Field|Collection c_manager_email(string $label = null)
     * @method Show\Field|Collection c_manager_mobile(string $label = null)
     * @method Show\Field|Collection c_operator(string $label = null)
     * @method Show\Field|Collection c_pay_company(string $label = null)
     * @method Show\Field|Collection c_paytype(string $label = null)
     * @method Show\Field|Collection c_platform(string $label = null)
     * @method Show\Field|Collection c_prepay(string $label = null)
     * @method Show\Field|Collection c_remarks(string $label = null)
     * @method Show\Field|Collection c_settlement_cycle(string $label = null)
     * @method Show\Field|Collection c_settlement_type(string $label = null)
     * @method Show\Field|Collection c_status(string $label = null)
     * @method Show\Field|Collection c_time(string $label = null)
     * @method Show\Field|Collection abutment(string $label = null)
     * @method Show\Field|Collection abutment_mobile(string $label = null)
     * @method Show\Field|Collection bank(string $label = null)
     * @method Show\Field|Collection bank_count(string $label = null)
     * @method Show\Field|Collection charge_style(string $label = null)
     * @method Show\Field|Collection function(string $label = null)
     * @method Show\Field|Collection mainbody(string $label = null)
     * @method Show\Field|Collection manager(string $label = null)
     * @method Show\Field|Collection paystyle(string $label = null)
     * @method Show\Field|Collection platform(string $label = null)
     * @method Show\Field|Collection remarks(string $label = null)
     * @method Show\Field|Collection unit_price(string $label = null)
     * @method Show\Field|Collection url(string $label = null)
     * @method Show\Field|Collection consumption(string $label = null)
     * @method Show\Field|Collection daytime(string $label = null)
     * @method Show\Field|Collection fail(string $label = null)
     * @method Show\Field|Collection high_quality(string $label = null)
     * @method Show\Field|Collection message_tongdao(string $label = null)
     * @method Show\Field|Collection repeat_quality(string $label = null)
     * @method Show\Field|Collection request_unit_price(string $label = null)
     * @method Show\Field|Collection succeed(string $label = null)
     * @method Show\Field|Collection q_abutment(string $label = null)
     * @method Show\Field|Collection q_abutment_mobile(string $label = null)
     * @method Show\Field|Collection q_account(string $label = null)
     * @method Show\Field|Collection q_bank(string $label = null)
     * @method Show\Field|Collection q_bank_account(string $label = null)
     * @method Show\Field|Collection q_bname(string $label = null)
     * @method Show\Field|Collection q_bphone(string $label = null)
     * @method Show\Field|Collection q_discount(string $label = null)
     * @method Show\Field|Collection q_domain(string $label = null)
     * @method Show\Field|Collection q_label(string $label = null)
     * @method Show\Field|Collection q_mainbody(string $label = null)
     * @method Show\Field|Collection q_manager(string $label = null)
     * @method Show\Field|Collection q_password(string $label = null)
     * @method Show\Field|Collection q_pay_company(string $label = null)
     * @method Show\Field|Collection q_paytype(string $label = null)
     * @method Show\Field|Collection q_platform(string $label = null)
     * @method Show\Field|Collection q_remarks(string $label = null)
     * @method Show\Field|Collection q_status(string $label = null)
     * @method Show\Field|Collection q_time(string $label = null)
     * @method Show\Field|Collection q_url(string $label = null)
     * @method Show\Field|Collection q_yuanshi(string $label = null)
     * @method Show\Field|Collection r_apayment(string $label = null)
     * @method Show\Field|Collection r_consume(string $label = null)
     * @method Show\Field|Collection r_discount(string $label = null)
     * @method Show\Field|Collection r_mainbody(string $label = null)
     * @method Show\Field|Collection r_operator(string $label = null)
     * @method Show\Field|Collection r_payinfo(string $label = null)
     * @method Show\Field|Collection r_payment(string $label = null)
     * @method Show\Field|Collection r_paytype(string $label = null)
     * @method Show\Field|Collection r_platform(string $label = null)
     * @method Show\Field|Collection r_qudao(string $label = null)
     * @method Show\Field|Collection r_status(string $label = null)
     * @method Show\Field|Collection r_time(string $label = null)
     * @method Show\Field|Collection w_account(string $label = null)
     * @method Show\Field|Collection w_auth_time(string $label = null)
     * @method Show\Field|Collection w_bname(string $label = null)
     * @method Show\Field|Collection w_company(string $label = null)
     * @method Show\Field|Collection w_id_card(string $label = null)
     * @method Show\Field|Collection w_label(string $label = null)
     * @method Show\Field|Collection w_mainbody(string $label = null)
     * @method Show\Field|Collection w_manager(string $label = null)
     * @method Show\Field|Collection w_password(string $label = null)
     * @method Show\Field|Collection w_paytype(string $label = null)
     * @method Show\Field|Collection w_phone(string $label = null)
     * @method Show\Field|Collection w_platform(string $label = null)
     * @method Show\Field|Collection w_remarks(string $label = null)
     * @method Show\Field|Collection w_status(string $label = null)
     * @method Show\Field|Collection w_time(string $label = null)
     * @method Show\Field|Collection w_url(string $label = null)
     * @method Show\Field|Collection w_wxid_x(string $label = null)
     * @method Show\Field|Collection w_wxid_y(string $label = null)
     * @method Show\Field|Collection unoperator(string $label = null)
     * @method Show\Field|Collection kefu_phone(string $label = null)
     * @method Show\Field|Collection response(string $label = null)
     * @method Show\Field|Collection target_phone(string $label = null)
     * @method Show\Field|Collection dowhat(string $label = null)
     * @method Show\Field|Collection isok(string $label = null)
     * @method Show\Field|Collection p_json(string $label = null)
     * @method Show\Field|Collection r_json(string $label = null)
     * @method Show\Field|Collection sendtime(string $label = null)
     * @method Show\Field|Collection imgurl(string $label = null)
     * @method Show\Field|Collection is_open(string $label = null)
     * @method Show\Field|Collection is_url(string $label = null)
     * @method Show\Field|Collection apply_time(string $label = null)
     * @method Show\Field|Collection birthday(string $label = null)
     * @method Show\Field|Collection dtime(string $label = null)
     * @method Show\Field|Collection ext_info(string $label = null)
     * @method Show\Field|Collection has_wld_loan(string $label = null)
     * @method Show\Field|Collection have_ant_credit(string $label = null)
     * @method Show\Field|Collection have_baoxian(string $label = null)
     * @method Show\Field|Collection have_car(string $label = null)
     * @method Show\Field|Collection have_chedai(string $label = null)
     * @method Show\Field|Collection have_credit_card(string $label = null)
     * @method Show\Field|Collection have_fangdai(string $label = null)
     * @method Show\Field|Collection have_fund(string $label = null)
     * @method Show\Field|Collection have_house(string $label = null)
     * @method Show\Field|Collection have_job(string $label = null)
     * @method Show\Field|Collection have_loan(string $label = null)
     * @method Show\Field|Collection hezuo_meiti(string $label = null)
     * @method Show\Field|Collection idcard(string $label = null)
     * @method Show\Field|Collection salary_max(string $label = null)
     * @method Show\Field|Collection salary_min(string $label = null)
     * @method Show\Field|Collection shebao(string $label = null)
     * @method Show\Field|Collection vocation(string $label = null)
     * @method Show\Field|Collection work_is_bankmoney(string $label = null)
     * @method Show\Field|Collection trackId(string $label = null)
     * @method Show\Field|Collection category(string $label = null)
     * @method Show\Field|Collection message(string $label = null)
     * @method Show\Field|Collection decrypt_json_data(string $label = null)
     * @method Show\Field|Collection error_msg(string $label = null)
     * @method Show\Field|Collection user_applyloan_id(string $label = null)
     * @method Show\Field|Collection company_id(string $label = null)
     * @method Show\Field|Collection create_time(string $label = null)
     * @method Show\Field|Collection day_push_num(string $label = null)
     * @method Show\Field|Collection day_push_success(string $label = null)
     * @method Show\Field|Collection ymd(string $label = null)
     * @method Show\Field|Collection distribution_limit(string $label = null)
     * @method Show\Field|Collection is_display(string $label = null)
     * @method Show\Field|Collection now_num(string $label = null)
     * @method Show\Field|Collection percent_num(string $label = null)
     * @method Show\Field|Collection stauts(string $label = null)
     * @method Show\Field|Collection source_encode(string $label = null)
     * @method Show\Field|Collection accord_deduct_rate50(string $label = null)
     * @method Show\Field|Collection accord_deduct_rate60(string $label = null)
     * @method Show\Field|Collection accord_deduct_rate70(string $label = null)
     * @method Show\Field|Collection city_id(string $label = null)
     * @method Show\Field|Collection is_kouliang(string $label = null)
     * @method Show\Field|Collection kouliang_per(string $label = null)
     * @method Show\Field|Collection one_money(string $label = null)
     * @method Show\Field|Collection kehuid(string $label = null)
     * @method Show\Field|Collection accord_deduct_sign(string $label = null)
     * @method Show\Field|Collection business_years(string $label = null)
     * @method Show\Field|Collection creditcard_situation(string $label = null)
     * @method Show\Field|Collection is_write(string $label = null)
     * @method Show\Field|Collection nowork_monthincome(string $label = null)
     * @method Show\Field|Collection work_identity(string $label = null)
     * @method Show\Field|Collection work_now_company_age(string $label = null)
     * @method Show\Field|Collection data_id(string $label = null)
     * @method Show\Field|Collection apply_explanation(string $label = null)
     * @method Show\Field|Collection apply_ondition(string $label = null)
     * @method Show\Field|Collection apply_other(string $label = null)
     * @method Show\Field|Collection assets_max(string $label = null)
     * @method Show\Field|Collection assets_min(string $label = null)
     * @method Show\Field|Collection bigtype(string $label = null)
     * @method Show\Field|Collection credit(string $label = null)
     * @method Show\Field|Collection credit_id(string $label = null)
     * @method Show\Field|Collection gourl(string $label = null)
     * @method Show\Field|Collection img_alt(string $label = null)
     * @method Show\Field|Collection is_gourl(string $label = null)
     * @method Show\Field|Collection is_home_show(string $label = null)
     * @method Show\Field|Collection loan_month_max(string $label = null)
     * @method Show\Field|Collection loan_month_min(string $label = null)
     * @method Show\Field|Collection loanday(string $label = null)
     * @method Show\Field|Collection loanday_id(string $label = null)
     * @method Show\Field|Collection loanuse(string $label = null)
     * @method Show\Field|Collection loanuse_ids(string $label = null)
     * @method Show\Field|Collection money_max(string $label = null)
     * @method Show\Field|Collection money_min(string $label = null)
     * @method Show\Field|Collection month_income_max(string $label = null)
     * @method Show\Field|Collection month_income_min(string $label = null)
     * @method Show\Field|Collection month_interest_float(string $label = null)
     * @method Show\Field|Collection month_interest_max(string $label = null)
     * @method Show\Field|Collection month_interest_min(string $label = null)
     * @method Show\Field|Collection month_interest_other(string $label = null)
     * @method Show\Field|Collection need_material(string $label = null)
     * @method Show\Field|Collection need_material_id(string $label = null)
     * @method Show\Field|Collection online(string $label = null)
     * @method Show\Field|Collection other_material(string $label = null)
     * @method Show\Field|Collection people_age_max(string $label = null)
     * @method Show\Field|Collection people_age_min(string $label = null)
     * @method Show\Field|Collection product_img(string $label = null)
     * @method Show\Field|Collection repayment(string $label = null)
     * @method Show\Field|Collection repayment_id(string $label = null)
     * @method Show\Field|Collection type_name1(string $label = null)
     * @method Show\Field|Collection type_name2(string $label = null)
     * @method Show\Field|Collection work_id(string $label = null)
     * @method Show\Field|Collection access_baodan(string $label = null)
     * @method Show\Field|Collection access_baodan_companys(string $label = null)
     * @method Show\Field|Collection access_baodan_jiaofeitype(string $label = null)
     * @method Show\Field|Collection access_baodan_youxiaotime(string $label = null)
     * @method Show\Field|Collection access_car(string $label = null)
     * @method Show\Field|Collection access_car_chepaiaddress(string $label = null)
     * @method Show\Field|Collection access_car_code(string $label = null)
     * @method Show\Field|Collection access_car_monthtime(string $label = null)
     * @method Show\Field|Collection access_car_status(string $label = null)
     * @method Show\Field|Collection access_car_type(string $label = null)
     * @method Show\Field|Collection access_car_usetime(string $label = null)
     * @method Show\Field|Collection access_credit(string $label = null)
     * @method Show\Field|Collection access_credit_chaxun(string $label = null)
     * @method Show\Field|Collection access_credit_overdue(string $label = null)
     * @method Show\Field|Collection access_credit_overdue_dj(string $label = null)
     * @method Show\Field|Collection access_credit_overdue_zdj(string $label = null)
     * @method Show\Field|Collection access_credit_sixmonth_chaxunnum(string $label = null)
     * @method Show\Field|Collection access_credit_threemonth_chaxunnum(string $label = null)
     * @method Show\Field|Collection access_credit_twomonth_chaxunnum(string $label = null)
     * @method Show\Field|Collection access_credit_type(string $label = null)
     * @method Show\Field|Collection access_debet(string $label = null)
     * @method Show\Field|Collection access_debet_max(string $label = null)
     * @method Show\Field|Collection access_degree(string $label = null)
     * @method Show\Field|Collection access_degree_type(string $label = null)
     * @method Show\Field|Collection access_gongjijin(string $label = null)
     * @method Show\Field|Collection access_gongjijin_jiaocunmoney(string $label = null)
     * @method Show\Field|Collection access_gongjijin_jishumoney(string $label = null)
     * @method Show\Field|Collection access_gongjijin_long(string $label = null)
     * @method Show\Field|Collection access_house(string $label = null)
     * @method Show\Field|Collection access_house_city(string $label = null)
     * @method Show\Field|Collection access_house_monthtime(string $label = null)
     * @method Show\Field|Collection access_house_status(string $label = null)
     * @method Show\Field|Collection access_house_type(string $label = null)
     * @method Show\Field|Collection access_income(string $label = null)
     * @method Show\Field|Collection access_income_intype(string $label = null)
     * @method Show\Field|Collection access_income_long(string $label = null)
     * @method Show\Field|Collection access_income_month(string $label = null)
     * @method Show\Field|Collection access_shebao(string $label = null)
     * @method Show\Field|Collection access_shebao_long(string $label = null)
     * @method Show\Field|Collection access_shebao_monthmoney(string $label = null)
     * @method Show\Field|Collection access_shenfen_age_max(string $label = null)
     * @method Show\Field|Collection access_shenfen_age_min(string $label = null)
     * @method Show\Field|Collection access_shenfen_homereg(string $label = null)
     * @method Show\Field|Collection access_shenfen_industry(string $label = null)
     * @method Show\Field|Collection access_shenfen_is(string $label = null)
     * @method Show\Field|Collection access_shenfen_worktype(string $label = null)
     * @method Show\Field|Collection add_name(string $label = null)
     * @method Show\Field|Collection keyfield(string $label = null)
     * @method Show\Field|Collection need_material_baodan(string $label = null)
     * @method Show\Field|Collection need_material_car(string $label = null)
     * @method Show\Field|Collection need_material_house(string $label = null)
     * @method Show\Field|Collection need_material_income(string $label = null)
     * @method Show\Field|Collection need_material_shangmen(string $label = null)
     * @method Show\Field|Collection need_material_shenfen(string $label = null)
     * @method Show\Field|Collection need_material_use(string $label = null)
     * @method Show\Field|Collection product_bankmoneyday(string $label = null)
     * @method Show\Field|Collection product_code(string $label = null)
     * @method Show\Field|Collection product_lixi_type(string $label = null)
     * @method Show\Field|Collection product_maxmoney(string $label = null)
     * @method Show\Field|Collection product_minmoney(string $label = null)
     * @method Show\Field|Collection product_name(string $label = null)
     * @method Show\Field|Collection product_repayment(string $label = null)
     * @method Show\Field|Collection product_type1(string $label = null)
     * @method Show\Field|Collection product_type2(string $label = null)
     * @method Show\Field|Collection work_gongjijin_jiaocunmoney(string $label = null)
     * @method Show\Field|Collection pipei_id(string $label = null)
     * @method Show\Field|Collection product_lixi_num(string $label = null)
     * @method Show\Field|Collection product_lixi_remark(string $label = null)
     * @method Show\Field|Collection access_baodan_jiaofeimoney(string $label = null)
     * @method Show\Field|Collection access_baodan_num(string $label = null)
     * @method Show\Field|Collection access_baodan_status(string $label = null)
     * @method Show\Field|Collection access_base_age(string $label = null)
     * @method Show\Field|Collection access_base_degree(string $label = null)
     * @method Show\Field|Collection access_base_entrytype(string $label = null)
     * @method Show\Field|Collection access_base_homereg(string $label = null)
     * @method Show\Field|Collection access_base_is(string $label = null)
     * @method Show\Field|Collection access_base_marriage(string $label = null)
     * @method Show\Field|Collection access_base_school(string $label = null)
     * @method Show\Field|Collection access_car_baodan(string $label = null)
     * @method Show\Field|Collection access_car_baodan_num(string $label = null)
     * @method Show\Field|Collection access_car_monthmoney(string $label = null)
     * @method Show\Field|Collection access_car_nowmoney(string $label = null)
     * @method Show\Field|Collection access_credit_overdue_halfyear(string $label = null)
     * @method Show\Field|Collection access_credit_overdue_is(string $label = null)
     * @method Show\Field|Collection access_credit_overdue_money(string $label = null)
     * @method Show\Field|Collection access_credit_overdue_oneyear(string $label = null)
     * @method Show\Field|Collection access_credit_overdue_twoyear(string $label = null)
     * @method Show\Field|Collection access_credit_overdue_type(string $label = null)
     * @method Show\Field|Collection access_credit_recordtime(string $label = null)
     * @method Show\Field|Collection access_debet_allmoney_dj(string $label = null)
     * @method Show\Field|Collection access_debet_allmoney_xy(string $label = null)
     * @method Show\Field|Collection access_debet_balance_xy(string $label = null)
     * @method Show\Field|Collection access_debet_halfyearuse_dj(string $label = null)
     * @method Show\Field|Collection access_debet_housetype_fang(string $label = null)
     * @method Show\Field|Collection access_debet_loanbalance_fang(string $label = null)
     * @method Show\Field|Collection access_debet_loanmoney_fang(string $label = null)
     * @method Show\Field|Collection access_debet_max_dj(string $label = null)
     * @method Show\Field|Collection access_debet_monthrep_xy(string $label = null)
     * @method Show\Field|Collection access_debet_nowmoney_fang(string $label = null)
     * @method Show\Field|Collection access_debet_nowuse_dj(string $label = null)
     * @method Show\Field|Collection access_house_area(string $label = null)
     * @method Show\Field|Collection access_house_havetime(string $label = null)
     * @method Show\Field|Collection access_house_monthmoney(string $label = null)
     * @method Show\Field|Collection access_house_nowmoney(string $label = null)
     * @method Show\Field|Collection access_shenfen_gongjijin_jiaocun(string $label = null)
     * @method Show\Field|Collection access_shenfen_gongjijin_jishu(string $label = null)
     * @method Show\Field|Collection access_shenfen_gongjijin_long(string $label = null)
     * @method Show\Field|Collection access_shenfen_gufen(string $label = null)
     * @method Show\Field|Collection access_shenfen_income_aftertax(string $label = null)
     * @method Show\Field|Collection access_shenfen_income_intype(string $label = null)
     * @method Show\Field|Collection access_shenfen_income_long(string $label = null)
     * @method Show\Field|Collection access_shenfen_income_pretax(string $label = null)
     * @method Show\Field|Collection access_shenfen_licence(string $label = null)
     * @method Show\Field|Collection access_shenfen_operate_age(string $label = null)
     * @method Show\Field|Collection access_shenfen_shebao_jiaocun(string $label = null)
     * @method Show\Field|Collection access_shenfen_shebao_long(string $label = null)
     * @method Show\Field|Collection need_material_diya(string $label = null)
     * @method Show\Field|Collection yushen_code(string $label = null)
     * @method Show\Field|Collection yushen_debet(string $label = null)
     * @method Show\Field|Collection yushen_money_max(string $label = null)
     * @method Show\Field|Collection yushen_mul(string $label = null)
     * @method Show\Field|Collection yushen_type(string $label = null)
     * @method Show\Field|Collection num1(string $label = null)
     * @method Show\Field|Collection num2(string $label = null)
     * @method Show\Field|Collection num3(string $label = null)
     * @method Show\Field|Collection product_id1(string $label = null)
     * @method Show\Field|Collection product_id2(string $label = null)
     * @method Show\Field|Collection product_id3(string $label = null)
     * @method Show\Field|Collection fandian_num(string $label = null)
     * @method Show\Field|Collection fandian_type(string $label = null)
     * @method Show\Field|Collection jinjian_address(string $label = null)
     * @method Show\Field|Collection jobtype(string $label = null)
     * @method Show\Field|Collection qudao_username(string $label = null)
     * @method Show\Field|Collection code(string $label = null)
     * @method Show\Field|Collection max(string $label = null)
     * @method Show\Field|Collection min(string $label = null)
     * @method Show\Field|Collection mul(string $label = null)
     * @method Show\Field|Collection is_nextday_update(string $label = null)
     * @method Show\Field|Collection loannum_little(string $label = null)
     * @method Show\Field|Collection source_type(string $label = null)
     * @method Show\Field|Collection apply_average_money(string $label = null)
     * @method Show\Field|Collection is_end_update(string $label = null)
     * @method Show\Field|Collection tg_type(string $label = null)
     * @method Show\Field|Collection tuiguang_money(string $label = null)
     * @method Show\Field|Collection can_look_citys(string $label = null)
     * @method Show\Field|Collection qudaocardid(string $label = null)
     * @method Show\Field|Collection facetalk_hourtime(string $label = null)
     * @method Show\Field|Collection qudao_bankloantime(string $label = null)
     * @method Show\Field|Collection qudao_bankmanager(string $label = null)
     * @method Show\Field|Collection qudao_bankname(string $label = null)
     * @method Show\Field|Collection qudao_bankpikuan(string $label = null)
     * @method Show\Field|Collection qudao_bankrates(string $label = null)
     * @method Show\Field|Collection qudao_borrowing(string $label = null)
     * @method Show\Field|Collection qudao_callindealdate(string $label = null)
     * @method Show\Field|Collection qudao_clienttype(string $label = null)
     * @method Show\Field|Collection qudao_collectiontime(string $label = null)
     * @method Show\Field|Collection qudao_consumingdate(string $label = null)
     * @method Show\Field|Collection qudao_consumingpeople(string $label = null)
     * @method Show\Field|Collection qudao_contractor(string $label = null)
     * @method Show\Field|Collection qudao_contractordate(string $label = null)
     * @method Show\Field|Collection qudao_currentaddress(string $label = null)
     * @method Show\Field|Collection qudao_department(string $label = null)
     * @method Show\Field|Collection qudao_departmentincharge(string $label = null)
     * @method Show\Field|Collection qudao_gobanktime(string $label = null)
     * @method Show\Field|Collection qudao_hetongno(string $label = null)
     * @method Show\Field|Collection qudao_idcardaddress(string $label = null)
     * @method Show\Field|Collection qudao_netincome(string $label = null)
     * @method Show\Field|Collection qudao_pikuantime(string $label = null)
     * @method Show\Field|Collection qudao_qudaomoney(string $label = null)
     * @method Show\Field|Collection qudao_referralmoney(string $label = null)
     * @method Show\Field|Collection qudao_servicecharges(string $label = null)
     * @method Show\Field|Collection qudao_status(string $label = null)
     * @method Show\Field|Collection qudao_zhudai_acceptmoney(string $label = null)
     * @method Show\Field|Collection user_idcard(string $label = null)
     * @method Show\Field|Collection check_id(string $label = null)
     * @method Show\Field|Collection is_newest(string $label = null)
     * @method Show\Field|Collection is_repeat(string $label = null)
     * @method Show\Field|Collection reply_con(string $label = null)
     * @method Show\Field|Collection reply_phone(string $label = null)
     * @method Show\Field|Collection sysn_msg(string $label = null)
     * @method Show\Field|Collection rcvid(string $label = null)
     * @method Show\Field|Collection kaoheyeji(string $label = null)
     * @method Show\Field|Collection bio(string $label = null)
     * @method Show\Field|Collection diploma(string $label = null)
     * @method Show\Field|Collection job(string $label = null)
     * @method Show\Field|Collection working_life(string $label = null)
     * @method Show\Field|Collection director(string $label = null)
     * @method Show\Field|Collection domain_cw(string $label = null)
     * @method Show\Field|Collection domain_name(string $label = null)
     * @method Show\Field|Collection domain_qd(string $label = null)
     * @method Show\Field|Collection domain_rl(string $label = null)
     * @method Show\Field|Collection fuze_name(string $label = null)
     * @method Show\Field|Collection package(string $label = null)
     * @method Show\Field|Collection schedule(string $label = null)
     * @method Show\Field|Collection count(string $label = null)
     * @method Show\Field|Collection add_time(string $label = null)
     * @method Show\Field|Collection objective_beijing(string $label = null)
     * @method Show\Field|Collection objective_changsha(string $label = null)
     * @method Show\Field|Collection objective_donggouan(string $label = null)
     * @method Show\Field|Collection objective_foshan(string $label = null)
     * @method Show\Field|Collection objective_guangzhou(string $label = null)
     * @method Show\Field|Collection objective_hangzhou(string $label = null)
     * @method Show\Field|Collection objective_shanghai(string $label = null)
     * @method Show\Field|Collection objective_shenzhen(string $label = null)
     * @method Show\Field|Collection tongji_type(string $label = null)
     * @method Show\Field|Collection bannerpic(string $label = null)
     * @method Show\Field|Collection middlepic(string $label = null)
     * @method Show\Field|Collection rate(string $label = null)
     * @method Show\Field|Collection source_ch(string $label = null)
     * @method Show\Field|Collection baidu_code_pc(string $label = null)
     * @method Show\Field|Collection baidu_code_wap(string $label = null)
     * @method Show\Field|Collection day_data_num(string $label = null)
     * @method Show\Field|Collection day_plan_num(string $label = null)
     * @method Show\Field|Collection day_today(string $label = null)
     * @method Show\Field|Collection fandian(string $label = null)
     * @method Show\Field|Collection is_close_accept_data(string $label = null)
     * @method Show\Field|Collection is_hezuo(string $label = null)
     * @method Show\Field|Collection ocpc_code_wap(string $label = null)
     * @method Show\Field|Collection ocpc_jscode_wap(string $label = null)
     * @method Show\Field|Collection pc_source_grade(string $label = null)
     * @method Show\Field|Collection source_ch_big(string $label = null)
     * @method Show\Field|Collection url_front(string $label = null)
     * @method Show\Field|Collection wap_source_grade(string $label = null)
     * @method Show\Field|Collection which_page(string $label = null)
     * @method Show\Field|Collection who_add(string $label = null)
     * @method Show\Field|Collection loannum_bj(string $label = null)
     * @method Show\Field|Collection loannum_changsha(string $label = null)
     * @method Show\Field|Collection loannum_cq(string $label = null)
     * @method Show\Field|Collection loannum_dg(string $label = null)
     * @method Show\Field|Collection loannum_fs(string $label = null)
     * @method Show\Field|Collection loannum_gz(string $label = null)
     * @method Show\Field|Collection loannum_huizhou(string $label = null)
     * @method Show\Field|Collection loannum_hz(string $label = null)
     * @method Show\Field|Collection loannum_nanjing(string $label = null)
     * @method Show\Field|Collection loannum_qita(string $label = null)
     * @method Show\Field|Collection loannum_sh(string $label = null)
     * @method Show\Field|Collection loannum_suzhou(string $label = null)
     * @method Show\Field|Collection loannum_sz(string $label = null)
     * @method Show\Field|Collection loannum_tianjin(string $label = null)
     * @method Show\Field|Collection loannum_wuhan(string $label = null)
     * @method Show\Field|Collection loannum_huzhou(string $label = null)
     * @method Show\Field|Collection loannum_nanning(string $label = null)
     * @method Show\Field|Collection loannum_shanghai(string $label = null)
     * @method Show\Field|Collection loannum_xiamen(string $label = null)
     * @method Show\Field|Collection loannum_beijing(string $label = null)
     * @method Show\Field|Collection loannum_chongqing(string $label = null)
     * @method Show\Field|Collection loannum_dongguan(string $label = null)
     * @method Show\Field|Collection loannum_foshan(string $label = null)
     * @method Show\Field|Collection loannum_guangzhou(string $label = null)
     * @method Show\Field|Collection loannum_hangzhou(string $label = null)
     * @method Show\Field|Collection loannum_shenzhen(string $label = null)
     * @method Show\Field|Collection add_uid(string $label = null)
     * @method Show\Field|Collection en_name(string $label = null)
     * @method Show\Field|Collection p_id_ex1(string $label = null)
     * @method Show\Field|Collection website_type(string $label = null)
     * @method Show\Field|Collection remove_type(string $label = null)
     * @method Show\Field|Collection s_json(string $label = null)
     * @method Show\Field|Collection hits(string $label = null)
     * @method Show\Field|Collection is_redirect(string $label = null)
     * @method Show\Field|Collection redirect_url(string $label = null)
     * @method Show\Field|Collection view_num(string $label = null)
     * @method Show\Field|Collection client_phone(string $label = null)
     * @method Show\Field|Collection opt_id(string $label = null)
     * @method Show\Field|Collection opt_name(string $label = null)
     * @method Show\Field|Collection rps_msg(string $label = null)
     * @method Show\Field|Collection directoryname(string $label = null)
     * @method Show\Field|Collection tag(string $label = null)
     * @method Show\Field|Collection in_num(string $label = null)
     * @method Show\Field|Collection is_status(string $label = null)
     * @method Show\Field|Collection js_num(string $label = null)
     * @method Show\Field|Collection nowday(string $label = null)
     * @method Show\Field|Collection seqencing(string $label = null)
     * @method Show\Field|Collection xq_num(string $label = null)
     * @method Show\Field|Collection update_time(string $label = null)
     * @method Show\Field|Collection del_name(string $label = null)
     * @method Show\Field|Collection channel_code(string $label = null)
     * @method Show\Field|Collection id_stop(string $label = null)
     * @method Show\Field|Collection key(string $label = null)
     * @method Show\Field|Collection systype(string $label = null)
     * @method Show\Field|Collection sysvalue(string $label = null)
     * @method Show\Field|Collection sysvalue2(string $label = null)
     * @method Show\Field|Collection desc(string $label = null)
     * @method Show\Field|Collection faile_code(string $label = null)
     * @method Show\Field|Collection faile_msg(string $label = null)
     * @method Show\Field|Collection login_url(string $label = null)
     * @method Show\Field|Collection ipnum(string $label = null)
     * @method Show\Field|Collection loannum_nantong(string $label = null)
     * @method Show\Field|Collection loannum_other(string $label = null)
     * @method Show\Field|Collection loannum_zhengzhou(string $label = null)
     * @method Show\Field|Collection loannum_zhuhai(string $label = null)
     * @method Show\Field|Collection loannum_zs(string $label = null)
     * @method Show\Field|Collection mobilenum(string $label = null)
     * @method Show\Field|Collection pcnum(string $label = null)
     * @method Show\Field|Collection pv(string $label = null)
     * @method Show\Field|Collection uv(string $label = null)
     * @method Show\Field|Collection status0num(string $label = null)
     * @method Show\Field|Collection status1num(string $label = null)
     * @method Show\Field|Collection status2num(string $label = null)
     * @method Show\Field|Collection status3num(string $label = null)
     * @method Show\Field|Collection status4num(string $label = null)
     * @method Show\Field|Collection status5num(string $label = null)
     * @method Show\Field|Collection status6num(string $label = null)
     * @method Show\Field|Collection status7num(string $label = null)
     * @method Show\Field|Collection status8num(string $label = null)
     * @method Show\Field|Collection totalnum(string $label = null)
     * @method Show\Field|Collection four_star_num(string $label = null)
     * @method Show\Field|Collection lowquality(string $label = null)
     * @method Show\Field|Collection one_star_num(string $label = null)
     * @method Show\Field|Collection read_rigned_num(string $label = null)
     * @method Show\Field|Collection three_star_num(string $label = null)
     * @method Show\Field|Collection two_star_num(string $label = null)
     * @method Show\Field|Collection waitingdo_num(string $label = null)
     * @method Show\Field|Collection again_five_star_num(string $label = null)
     * @method Show\Field|Collection again_four_star_num(string $label = null)
     * @method Show\Field|Collection again_lowquality(string $label = null)
     * @method Show\Field|Collection again_num(string $label = null)
     * @method Show\Field|Collection again_one_star_num(string $label = null)
     * @method Show\Field|Collection again_three_star_num(string $label = null)
     * @method Show\Field|Collection again_two_star_num(string $label = null)
     * @method Show\Field|Collection again_two_star_plus_num(string $label = null)
     * @method Show\Field|Collection again_undo_num(string $label = null)
     * @method Show\Field|Collection again_waitingdo_num(string $label = null)
     * @method Show\Field|Collection five_star_num(string $label = null)
     * @method Show\Field|Collection two_star_plus_num(string $label = null)
     * @method Show\Field|Collection waidi_num(string $label = null)
     * @method Show\Field|Collection zs_lowquality(string $label = null)
     * @method Show\Field|Collection zs_num(string $label = null)
     * @method Show\Field|Collection zs_undo_num(string $label = null)
     * @method Show\Field|Collection zs_waitingdo_num(string $label = null)
     * @method Show\Field|Collection high_quality_money(string $label = null)
     * @method Show\Field|Collection high_quality_num(string $label = null)
     * @method Show\Field|Collection is_ziying(string $label = null)
     * @method Show\Field|Collection low_quality_num(string $label = null)
     * @method Show\Field|Collection lowquality_percent(string $label = null)
     * @method Show\Field|Collection mobile_repeat_num(string $label = null)
     * @method Show\Field|Collection mobile_repeat_percent(string $label = null)
     * @method Show\Field|Collection two_star_above(string $label = null)
     * @method Show\Field|Collection twostar_average_money(string $label = null)
     * @method Show\Field|Collection twostar_percent(string $label = null)
     * @method Show\Field|Collection waidiloan_num(string $label = null)
     * @method Show\Field|Collection waidiloan_percent(string $label = null)
     * @method Show\Field|Collection avg_netincome_money(string $label = null)
     * @method Show\Field|Collection fangkuang_money(string $label = null)
     * @method Show\Field|Collection netincome_money(string $label = null)
     * @method Show\Field|Collection pnum_bz(string $label = null)
     * @method Show\Field|Collection access_token(string $label = null)
     * @method Show\Field|Collection account_id(string $label = null)
     * @method Show\Field|Collection authorization_code(string $label = null)
     * @method Show\Field|Collection client_secret(string $label = null)
     * @method Show\Field|Collection qq(string $label = null)
     * @method Show\Field|Collection refresh_token(string $label = null)
     * @method Show\Field|Collection s_account_id(string $label = null)
     * @method Show\Field|Collection s_qq(string $label = null)
     * @method Show\Field|Collection user_action_set_id(string $label = null)
     * @method Show\Field|Collection advertiser_id(string $label = null)
     * @method Show\Field|Collection click_id(string $label = null)
     * @method Show\Field|Collection baodan(string $label = null)
     * @method Show\Field|Collection baodan_remark(string $label = null)
     * @method Show\Field|Collection company_card_have(string $label = null)
     * @method Show\Field|Collection company_card_regarea(string $label = null)
     * @method Show\Field|Collection company_card_regyear(string $label = null)
     * @method Show\Field|Collection company_type(string $label = null)
     * @method Show\Field|Collection company_typeid(string $label = null)
     * @method Show\Field|Collection company_year_fpmoney(string $label = null)
     * @method Show\Field|Collection company_yearincome(string $label = null)
     * @method Show\Field|Collection creditid(string $label = null)
     * @method Show\Field|Collection fundid(string $label = null)
     * @method Show\Field|Collection house_remark(string $label = null)
     * @method Show\Field|Collection income_source(string $label = null)
     * @method Show\Field|Collection job_year(string $label = null)
     * @method Show\Field|Collection job_yearid(string $label = null)
     * @method Show\Field|Collection jobid(string $label = null)
     * @method Show\Field|Collection monthly(string $label = null)
     * @method Show\Field|Collection monthly_sendtype(string $label = null)
     * @method Show\Field|Collection monthlyid(string $label = null)
     * @method Show\Field|Collection inserttime(string $label = null)
     * @method Show\Field|Collection movetype(string $label = null)
     * @method Show\Field|Collection baodan_company(string $label = null)
     * @method Show\Field|Collection baodan_jiaofeitype(string $label = null)
     * @method Show\Field|Collection baodan_status(string $label = null)
     * @method Show\Field|Collection baodan_times(string $label = null)
     * @method Show\Field|Collection baodan_year_money(string $label = null)
     * @method Show\Field|Collection baodan_youxiaoyear(string $label = null)
     * @method Show\Field|Collection business_address(string $label = null)
     * @method Show\Field|Collection business_gufen(string $label = null)
     * @method Show\Field|Collection business_industry(string $label = null)
     * @method Show\Field|Collection business_is_yingyezhizhao(string $label = null)
     * @method Show\Field|Collection business_monthmoney(string $label = null)
     * @method Show\Field|Collection business_shenfen(string $label = null)
     * @method Show\Field|Collection business_yearinvoicemoney(string $label = null)
     * @method Show\Field|Collection business_yearmoney(string $label = null)
     * @method Show\Field|Collection callstatus(string $label = null)
     * @method Show\Field|Collection callstatus_ch(string $label = null)
     * @method Show\Field|Collection calltype(string $label = null)
     * @method Show\Field|Collection car_age(string $label = null)
     * @method Show\Field|Collection car_baodan_paynum(string $label = null)
     * @method Show\Field|Collection car_brands(string $label = null)
     * @method Show\Field|Collection car_buy_money(string $label = null)
     * @method Show\Field|Collection car_card_area(string $label = null)
     * @method Show\Field|Collection car_city(string $label = null)
     * @method Show\Field|Collection car_cityid(string $label = null)
     * @method Show\Field|Collection car_code(string $label = null)
     * @method Show\Field|Collection car_insurance_company(string $label = null)
     * @method Show\Field|Collection car_km(string $label = null)
     * @method Show\Field|Collection car_loan_money(string $label = null)
     * @method Show\Field|Collection car_mortgage_money(string $label = null)
     * @method Show\Field|Collection car_mortgage_status(string $label = null)
     * @method Show\Field|Collection car_province(string $label = null)
     * @method Show\Field|Collection car_provinceid(string $label = null)
     * @method Show\Field|Collection car_repayment_month(string $label = null)
     * @method Show\Field|Collection car_status(string $label = null)
     * @method Show\Field|Collection car_type(string $label = null)
     * @method Show\Field|Collection car_valuation_money(string $label = null)
     * @method Show\Field|Collection company_whiltelist(string $label = null)
     * @method Show\Field|Collection credit_banks(string $label = null)
     * @method Show\Field|Collection credit_check_inmonths(string $label = null)
     * @method Show\Field|Collection credit_check_inmonths_num(string $label = null)
     * @method Show\Field|Collection credit_check_sixdmonth_num(string $label = null)
     * @method Show\Field|Collection credit_check_thirdmonth_num(string $label = null)
     * @method Show\Field|Collection credit_check_twomonth_num(string $label = null)
     * @method Show\Field|Collection credit_fuzhai(string $label = null)
     * @method Show\Field|Collection credit_has_bannian_usemoney(string $label = null)
     * @method Show\Field|Collection credit_has_maxuse_money(string $label = null)
     * @method Show\Field|Collection credit_house_is(string $label = null)
     * @method Show\Field|Collection credit_house_loan_lave(string $label = null)
     * @method Show\Field|Collection credit_house_loan_moneys(string $label = null)
     * @method Show\Field|Collection credit_house_money(string $label = null)
     * @method Show\Field|Collection credit_house_status(string $label = null)
     * @method Show\Field|Collection credit_left_money(string $label = null)
     * @method Show\Field|Collection credit_record_time(string $label = null)
     * @method Show\Field|Collection credit_repayment_monthmoney(string $label = null)
     * @method Show\Field|Collection credit_situation(string $label = null)
     * @method Show\Field|Collection credit_total_money(string $label = null)
     * @method Show\Field|Collection credit_type(string $label = null)
     * @method Show\Field|Collection creditcard_has_usemoney(string $label = null)
     * @method Show\Field|Collection creditcard_nums(string $label = null)
     * @method Show\Field|Collection creditcard_totalmoney(string $label = null)
     * @method Show\Field|Collection creditoverdue(string $label = null)
     * @method Show\Field|Collection creditoverdue_halfyear(string $label = null)
     * @method Show\Field|Collection creditoverdue_happentime(string $label = null)
     * @method Show\Field|Collection creditoverdue_happentime_dj(string $label = null)
     * @method Show\Field|Collection creditoverdue_happentime_zdj(string $label = null)
     * @method Show\Field|Collection creditoverdue_is(string $label = null)
     * @method Show\Field|Collection creditoverdue_money(string $label = null)
     * @method Show\Field|Collection creditoverdue_money_dj(string $label = null)
     * @method Show\Field|Collection creditoverdue_money_zdj(string $label = null)
     * @method Show\Field|Collection creditoverdue_nums(string $label = null)
     * @method Show\Field|Collection creditoverdue_nums_dj(string $label = null)
     * @method Show\Field|Collection creditoverdue_nums_zdj(string $label = null)
     * @method Show\Field|Collection creditoverdue_oneyear(string $label = null)
     * @method Show\Field|Collection creditoverdue_time(string $label = null)
     * @method Show\Field|Collection creditoverdue_twoyear(string $label = null)
     * @method Show\Field|Collection creditoverdue_type(string $label = null)
     * @method Show\Field|Collection daiqianyue_time(string $label = null)
     * @method Show\Field|Collection do_del_adminname(string $label = null)
     * @method Show\Field|Collection facetalk_actual_is(string $label = null)
     * @method Show\Field|Collection facetalk_updatetime(string $label = null)
     * @method Show\Field|Collection good_star_updatetime(string $label = null)
     * @method Show\Field|Collection good_statr_move_time(string $label = null)
     * @method Show\Field|Collection hezuo_time(string $label = null)
     * @method Show\Field|Collection house_address(string $label = null)
     * @method Show\Field|Collection house_area(string $label = null)
     * @method Show\Field|Collection house_area_small(string $label = null)
     * @method Show\Field|Collection house_buy_money(string $label = null)
     * @method Show\Field|Collection house_buy_time(string $label = null)
     * @method Show\Field|Collection house_city(string $label = null)
     * @method Show\Field|Collection house_cityid(string $label = null)
     * @method Show\Field|Collection house_is_rent(string $label = null)
     * @method Show\Field|Collection house_loan_money(string $label = null)
     * @method Show\Field|Collection house_mortgage_case(string $label = null)
     * @method Show\Field|Collection house_mortgage_money(string $label = null)
     * @method Show\Field|Collection house_now_money(string $label = null)
     * @method Show\Field|Collection house_province(string $label = null)
     * @method Show\Field|Collection house_provinceid(string $label = null)
     * @method Show\Field|Collection house_rent_monthmoney(string $label = null)
     * @method Show\Field|Collection house_repayment_month(string $label = null)
     * @method Show\Field|Collection house_status(string $label = null)
     * @method Show\Field|Collection house_type(string $label = null)
     * @method Show\Field|Collection is_bank_money(string $label = null)
     * @method Show\Field|Collection is_hand_add(string $label = null)
     * @method Show\Field|Collection is_move(string $label = null)
     * @method Show\Field|Collection is_new_jiami(string $label = null)
     * @method Show\Field|Collection is_out_othercompany(string $label = null)
     * @method Show\Field|Collection is_send_msg(string $label = null)
     * @method Show\Field|Collection loan_month(string $label = null)
     * @method Show\Field|Collection loan_monthid(string $label = null)
     * @method Show\Field|Collection loan_repayment_source(string $label = null)
     * @method Show\Field|Collection loan_repayment_type(string $label = null)
     * @method Show\Field|Collection loan_use(string $label = null)
     * @method Show\Field|Collection loan_use_time(string $label = null)
     * @method Show\Field|Collection material_bank_is(string $label = null)
     * @method Show\Field|Collection mobile2(string $label = null)
     * @method Show\Field|Collection nowork_dowhat(string $label = null)
     * @method Show\Field|Collection old_guwenid(string $label = null)
     * @method Show\Field|Collection old_kefuids(string $label = null)
     * @method Show\Field|Collection old_managerid(string $label = null)
     * @method Show\Field|Collection old_managerids(string $label = null)
     * @method Show\Field|Collection productid(string $label = null)
     * @method Show\Field|Collection self_repeat_mobilenum(string $label = null)
     * @method Show\Field|Collection source_en(string $label = null)
     * @method Show\Field|Collection source_grade(string $label = null)
     * @method Show\Field|Collection source_type2(string $label = null)
     * @method Show\Field|Collection source_type_big(string $label = null)
     * @method Show\Field|Collection sourceid(string $label = null)
     * @method Show\Field|Collection system_prompt(string $label = null)
     * @method Show\Field|Collection third_uid(string $label = null)
     * @method Show\Field|Collection tpage(string $label = null)
     * @method Show\Field|Collection true_city(string $label = null)
     * @method Show\Field|Collection true_loan_time(string $label = null)
     * @method Show\Field|Collection tuiguang_type(string $label = null)
     * @method Show\Field|Collection user_census_address(string $label = null)
     * @method Show\Field|Collection user_city(string $label = null)
     * @method Show\Field|Collection user_cityid(string $label = null)
     * @method Show\Field|Collection user_degree(string $label = null)
     * @method Show\Field|Collection user_entrytype(string $label = null)
     * @method Show\Field|Collection user_ismarry(string $label = null)
     * @method Show\Field|Collection user_province(string $label = null)
     * @method Show\Field|Collection user_provinceid(string $label = null)
     * @method Show\Field|Collection user_school(string $label = null)
     * @method Show\Field|Collection work_address(string $label = null)
     * @method Show\Field|Collection work_city(string $label = null)
     * @method Show\Field|Collection work_company_name(string $label = null)
     * @method Show\Field|Collection work_company_type(string $label = null)
     * @method Show\Field|Collection work_gongjijin(string $label = null)
     * @method Show\Field|Collection work_gongjijin_long(string $label = null)
     * @method Show\Field|Collection work_hangye(string $label = null)
     * @method Show\Field|Collection work_income_long(string $label = null)
     * @method Show\Field|Collection work_income_taxtype(string $label = null)
     * @method Show\Field|Collection work_position(string $label = null)
     * @method Show\Field|Collection work_shebao_long(string $label = null)
     * @method Show\Field|Collection work_shebao_money(string $label = null)
     * @method Show\Field|Collection work_wage_bank_money(string $label = null)
     * @method Show\Field|Collection aptitude(string $label = null)
     * @method Show\Field|Collection clue_id(string $label = null)
     * @method Show\Field|Collection flag(string $label = null)
     * @method Show\Field|Collection flag2(string $label = null)
     * @method Show\Field|Collection ucid(string $label = null)
     * @method Show\Field|Collection belong_city(string $label = null)
     * @method Show\Field|Collection belong_department_bcompany(string $label = null)
     * @method Show\Field|Collection deal_status(string $label = null)
     * @method Show\Field|Collection isbankpay(string $label = null)
     * @method Show\Field|Collection meiti(string $label = null)
     * @method Show\Field|Collection rong_create_time(string $label = null)
     * @method Show\Field|Collection rong_id(string $label = null)
     * @method Show\Field|Collection rong_log_id(string $label = null)
     * @method Show\Field|Collection ads(string $label = null)
     * @method Show\Field|Collection car_life(string $label = null)
     * @method Show\Field|Collection car_model(string $label = null)
     * @method Show\Field|Collection car_price(string $label = null)
     * @method Show\Field|Collection card_no(string $label = null)
     * @method Show\Field|Collection creativeid(string $label = null)
     * @method Show\Field|Collection customer_id(string $label = null)
     * @method Show\Field|Collection education(string $label = null)
     * @method Show\Field|Collection employment_time(string $label = null)
     * @method Show\Field|Collection house_life(string $label = null)
     * @method Show\Field|Collection house_price(string $label = null)
     * @method Show\Field|Collection house_size(string $label = null)
     * @method Show\Field|Collection is_credit(string $label = null)
     * @method Show\Field|Collection is_married(string $label = null)
     * @method Show\Field|Collection loan_long_time(string $label = null)
     * @method Show\Field|Collection monthly_income(string $label = null)
     * @method Show\Field|Collection payroll_type(string $label = null)
     * @method Show\Field|Collection product_id(string $label = null)
     * @method Show\Field|Collection professional(string $label = null)
     * @method Show\Field|Collection time_str(string $label = null)
     * @method Show\Field|Collection use_for(string $label = null)
     * @method Show\Field|Collection zm_score(string $label = null)
     * @method Show\Field|Collection checking_type(string $label = null)
     * @method Show\Field|Collection dianzi_money(string $label = null)
     * @method Show\Field|Collection is_dianzi(string $label = null)
     * @method Show\Field|Collection qudao_mids(string $label = null)
     * @method Show\Field|Collection qudao_mname(string $label = null)
     * @method Show\Field|Collection shoukuan_month(string $label = null)
     * @method Show\Field|Collection sk_uptime(string $label = null)
     * @method Show\Field|Collection is_movie(string $label = null)
     * @method Show\Field|Collection bj_chuangshou(string $label = null)
     * @method Show\Field|Collection bj_jinjian_money(string $label = null)
     * @method Show\Field|Collection bj_jinjian_num(string $label = null)
     * @method Show\Field|Collection bj_pikuan_money(string $label = null)
     * @method Show\Field|Collection bj_pikuan_num(string $label = null)
     * @method Show\Field|Collection dg_chuangshou(string $label = null)
     * @method Show\Field|Collection dg_jinjian_money(string $label = null)
     * @method Show\Field|Collection dg_jinjian_num(string $label = null)
     * @method Show\Field|Collection dg_pikuan_money(string $label = null)
     * @method Show\Field|Collection dg_pikuan_num(string $label = null)
     * @method Show\Field|Collection fs_chuangshou(string $label = null)
     * @method Show\Field|Collection fs_jinjian_money(string $label = null)
     * @method Show\Field|Collection fs_jinjian_num(string $label = null)
     * @method Show\Field|Collection fs_pikuan_money(string $label = null)
     * @method Show\Field|Collection fs_pikuan_num(string $label = null)
     * @method Show\Field|Collection gz_chuangshou(string $label = null)
     * @method Show\Field|Collection gz_jinjian_money(string $label = null)
     * @method Show\Field|Collection gz_jinjian_num(string $label = null)
     * @method Show\Field|Collection gz_pikuan_money(string $label = null)
     * @method Show\Field|Collection gz_pikuan_num(string $label = null)
     * @method Show\Field|Collection hz_chuangshou(string $label = null)
     * @method Show\Field|Collection hz_jinjian_money(string $label = null)
     * @method Show\Field|Collection hz_jinjian_num(string $label = null)
     * @method Show\Field|Collection hz_pikuan_money(string $label = null)
     * @method Show\Field|Collection hz_pikuan_num(string $label = null)
     * @method Show\Field|Collection sh_chuangshou(string $label = null)
     * @method Show\Field|Collection sh_jinjian_money(string $label = null)
     * @method Show\Field|Collection sh_jinjian_num(string $label = null)
     * @method Show\Field|Collection sh_pikuan_money(string $label = null)
     * @method Show\Field|Collection sh_pikuan_num(string $label = null)
     * @method Show\Field|Collection sz_chuangshou(string $label = null)
     * @method Show\Field|Collection sz_jinjian_money(string $label = null)
     * @method Show\Field|Collection sz_jinjian_num(string $label = null)
     * @method Show\Field|Collection sz_pikuan_money(string $label = null)
     * @method Show\Field|Collection sz_pikuan_num(string $label = null)
     * @method Show\Field|Collection intime(string $label = null)
     * @method Show\Field|Collection remark_num(string $label = null)
     * @method Show\Field|Collection fenpei_time(string $label = null)
     * @method Show\Field|Collection is_mobile_city(string $label = null)
     * @method Show\Field|Collection msgtype(string $label = null)
     * @method Show\Field|Collection jingshouzhi(string $label = null)
     * @method Show\Field|Collection is_take(string $label = null)
     * @method Show\Field|Collection read_kfuids(string $label = null)
     * @method Show\Field|Collection shenfen_type(string $label = null)
     * @method Show\Field|Collection data(string $label = null)
     * @method Show\Field|Collection method(string $label = null)
     * @method Show\Field|Collection ret_mst(string $label = null)
     * @method Show\Field|Collection brand_one(string $label = null)
     * @method Show\Field|Collection brand_two(string $label = null)
     * @method Show\Field|Collection kefu_tel(string $label = null)
     * @method Show\Field|Collection recording_url(string $label = null)
     * @method Show\Field|Collection sessionid(string $label = null)
     * @method Show\Field|Collection tel_time(string $label = null)
     * @method Show\Field|Collection addkid(string $label = null)
     * @method Show\Field|Collection back_way(string $label = null)
     * @method Show\Field|Collection classify(string $label = null)
     * @method Show\Field|Collection department_excel(string $label = null)
     * @method Show\Field|Collection idstr(string $label = null)
     * @method Show\Field|Collection shouju_num(string $label = null)
     * @method Show\Field|Collection shoukuan_date(string $label = null)
     * @method Show\Field|Collection shoukuan_way(string $label = null)
     * @method Show\Field|Collection state_date(string $label = null)
     * @method Show\Field|Collection create_date(string $label = null)
     * @method Show\Field|Collection fid(string $label = null)
     * @method Show\Field|Collection sat_id(string $label = null)
     * @method Show\Field|Collection department1(string $label = null)
     * @method Show\Field|Collection department2(string $label = null)
     * @method Show\Field|Collection is_checkmobile(string $label = null)
     * @method Show\Field|Collection is_send_sms(string $label = null)
     * @method Show\Field|Collection visit_type(string $label = null)
     * @method Show\Field|Collection dk_star(string $label = null)
     * @method Show\Field|Collection fw_star(string $label = null)
     * @method Show\Field|Collection gj_star(string $label = null)
     * @method Show\Field|Collection gw_phone(string $label = null)
     * @method Show\Field|Collection today_num(string $label = null)
     * @method Show\Field|Collection vtype(string $label = null)
     * @method Show\Field|Collection del_flg(string $label = null)
     * @method Show\Field|Collection expired_time(string $label = null)
     * @method Show\Field|Collection baodi_cs(string $label = null)
     * @method Show\Field|Collection base_wage(string $label = null)
     * @method Show\Field|Collection chidao(string $label = null)
     * @method Show\Field|Collection chuqin(string $label = null)
     * @method Show\Field|Collection cs(string $label = null)
     * @method Show\Field|Collection daixinjia(string $label = null)
     * @method Show\Field|Collection data_cost(string $label = null)
     * @method Show\Field|Collection jinjian_ticheng(string $label = null)
     * @method Show\Field|Collection kq_koukuan(string $label = null)
     * @method Show\Field|Collection kuanggong(string $label = null)
     * @method Show\Field|Collection last_cs(string $label = null)
     * @method Show\Field|Collection lirun_ticheng(string $label = null)
     * @method Show\Field|Collection ll_ticheng(string $label = null)
     * @method Show\Field|Collection logistic_cost(string $label = null)
     * @method Show\Field|Collection loudaka(string $label = null)
     * @method Show\Field|Collection month_jidu_money(string $label = null)
     * @method Show\Field|Collection month_jsxt_ticheng(string $label = null)
     * @method Show\Field|Collection month_shifa(string $label = null)
     * @method Show\Field|Collection month_yingfa(string $label = null)
     * @method Show\Field|Collection niandu_money(string $label = null)
     * @method Show\Field|Collection person_cs(string $label = null)
     * @method Show\Field|Collection phone_fare(string $label = null)
     * @method Show\Field|Collection qita_butie(string $label = null)
     * @method Show\Field|Collection qita_koukuan(string $label = null)
     * @method Show\Field|Collection qq_money(string $label = null)
     * @method Show\Field|Collection queqin(string $label = null)
     * @method Show\Field|Collection shijia(string $label = null)
     * @method Show\Field|Collection sj_chuqin(string $label = null)
     * @method Show\Field|Collection sj_ticheng(string $label = null)
     * @method Show\Field|Collection syq_jidu_money(string $label = null)
     * @method Show\Field|Collection xt_ticheng(string $label = null)
     * @method Show\Field|Collection yingfa_ticheng(string $label = null)
     * @method Show\Field|Collection zz_day(string $label = null)
     * @method Show\Field|Collection data_price(string $label = null)
     * @method Show\Field|Collection common(string $label = null)
     * @method Show\Field|Collection minuend(string $label = null)
     * @method Show\Field|Collection percent(string $label = null)
     * @method Show\Field|Collection setid(string $label = null)
     * @method Show\Field|Collection day_type(string $label = null)
     * @method Show\Field|Collection source_account(string $label = null)
     * @method Show\Field|Collection wc_id(string $label = null)
     * @method Show\Field|Collection wc_key(string $label = null)
     * @method Show\Field|Collection wc_name(string $label = null)
     * @method Show\Field|Collection wc_secret(string $label = null)
     * @method Show\Field|Collection is_succeed(string $label = null)
     * @method Show\Field|Collection loanid(string $label = null)
     * @method Show\Field|Collection msg(string $label = null)
     * @method Show\Field|Collection rqs_json(string $label = null)
     * @method Show\Field|Collection rsp_json(string $label = null)
     * @method Show\Field|Collection sbm_json(string $label = null)
     * @method Show\Field|Collection phoneid(string $label = null)
     * @method Show\Field|Collection seatno(string $label = null)
     * @method Show\Field|Collection vcode(string $label = null)
     * @method Show\Field|Collection api_version(string $label = null)
     * @method Show\Field|Collection f_name(string $label = null)
     * @method Show\Field|Collection g_json(string $label = null)
     * @method Show\Field|Collection gender(string $label = null)
     * @method Show\Field|Collection id_card_number(string $label = null)
     * @method Show\Field|Collection issued_by(string $label = null)
     * @method Show\Field|Collection race(string $label = null)
     * @method Show\Field|Collection valid_date(string $label = null)
     * @method Show\Field|Collection call_auth(string $label = null)
     * @method Show\Field|Collection file_auth(string $label = null)
     * @method Show\Field|Collection lacation_time(string $label = null)
     * @method Show\Field|Collection location_auth(string $label = null)
     * @method Show\Field|Collection recording_auth(string $label = null)
     * @method Show\Field|Collection sdk(string $label = null)
     * @method Show\Field|Collection video_auth(string $label = null)
     * @method Show\Field|Collection zdt_avatar_img(string $label = null)
     * @method Show\Field|Collection zdt_idcard_img(string $label = null)
     * @method Show\Field|Collection zdt_idcard_img_fan(string $label = null)
     * @method Show\Field|Collection zdt_image_best(string $label = null)
     * @method Show\Field|Collection zdt_image_env(string $label = null)
     * @method Show\Field|Collection install_time(string $label = null)
     * @method Show\Field|Collection chinese_name(string $label = null)
     * @method Show\Field|Collection device(string $label = null)
     * @method Show\Field|Collection folder_way(string $label = null)
     * @method Show\Field|Collection is_have_num(string $label = null)
     * @method Show\Field|Collection is_num_kongge(string $label = null)
     * @method Show\Field|Collection call_id(string $label = null)
     * @method Show\Field|Collection filename(string $label = null)
     * @method Show\Field|Collection is_done(string $label = null)
     * @method Show\Field|Collection op_flag(string $label = null)
     * @method Show\Field|Collection osspath(string $label = null)
     * @method Show\Field|Collection recordingpath(string $label = null)
     * @method Show\Field|Collection all_num(string $label = null)
     * @method Show\Field|Collection kf_num(string $label = null)
     * @method Show\Field|Collection ofv_min_num(string $label = null)
     * @method Show\Field|Collection one_min_num(string $label = null)
     * @method Show\Field|Collection th_fv_min_num(string $label = null)
     * @method Show\Field|Collection three_min_num(string $label = null)
     * @method Show\Field|Collection two_min_num(string $label = null)
     * @method Show\Field|Collection valid_num(string $label = null)
     * @method Show\Field|Collection hrsc_num(string $label = null)
     * @method Show\Field|Collection hrzs_num(string $label = null)
     * @method Show\Field|Collection lds_num(string $label = null)
     * @method Show\Field|Collection ldsc_num(string $label = null)
     * @method Show\Field|Collection qds_num(string $label = null)
     * @method Show\Field|Collection qdsc_num(string $label = null)
     * @method Show\Field|Collection thly_num(string $label = null)
     * @method Show\Field|Collection thzs_num(string $label = null)
     * @method Show\Field|Collection thzsc_num(string $label = null)
     * @method Show\Field|Collection min_vcode(string $label = null)
     * @method Show\Field|Collection min_version(string $label = null)
     */
    class Show {}

    /**
     
     */
    class Form {}

}

namespace Dcat\Admin\Grid {
    /**
     
     */
    class Column {}

    /**
     
     */
    class Filter {}
}

namespace Dcat\Admin\Show {
    /**
     
     */
    class Field {}
}
