<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

INFO  - 2019-03-28 08:39:26.47851700 --> [229645c31ba1066915e0c976cfc66522]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-03-28 08:39:26.51069700 --> [229645c31ba1066915e0c976cfc66522]<PROCESS-END> Controller:login  Method:index execution time=0.4678s
INFO  - 2019-03-28 08:39:37.73788300 --> [229645c31ba1066915e0c976cfc66522]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-03-28 08:39:37.94611200 --> [229645c31ba1066915e0c976cfc66522]<PROCESS-START> USER-ID: 28 Controller:top  Method:index
INFO  - 2019-03-28 08:39:43.34856900 --> [229645c31ba1066915e0c976cfc66522]<PROCESS-END> Controller:top  Method:index execution time=5.4787s
INFO  - 2019-03-28 08:39:43.92322200 --> [229645c31ba1066915e0c976cfc66522]<PROCESS-START> USER-ID: 28 Controller:ajax  Method:daily_cnt_info
INFO  - 2019-03-28 08:39:44.30855200 --> [229645c31ba1066915e0c976cfc66522]<PROCESS-END> Controller:ajax  Method:daily_cnt_info execution time=0.5067s
INFO  - 2019-03-28 08:39:56.96491100 --> [229645c31ba1066915e0c976cfc66522]<PROCESS-START> USER-ID: 28 Controller:sales_spec_print  Method:index
INFO  - 2019-03-28 08:39:57.05005200 --> [229645c31ba1066915e0c976cfc66522]<PROCESS-END> Controller:sales_spec_print  Method:index execution time=0.2584s
INFO  - 2019-03-28 08:40:13.32566000 --> [229645c31ba1066915e0c976cfc66522]<PROCESS-START> USER-ID: 28 Controller:sales_spec_print  Method:index
ERROR - 2019-03-28 08:40:14.72517600 --> [229645c31ba1066915e0c976cfc66522]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"229645c31ba1066915e0c976cfc66522";s:10:"ip_address";s:14:"172.123.156.31";s:10:"user_agent";s:102:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36";s:13:"last_activity";i:1553729966;}448c838a7973f37c7cc9b59bd4b22812||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:231(CI_Session->set_userdata) [tab_menu||Array]
D:\SKK_APP\application\hooks\Pre_display.php:170(Pre_display->_get_tab_menu)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

ERROR - 2019-03-28 08:40:14.74694500 --> [229645c31ba1066915e0c976cfc66522]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"229645c31ba1066915e0c976cfc66522";s:10:"ip_address";s:14:"172.123.156.31";s:10:"user_agent";s:102:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36";s:13:"last_activity";i:1553729966;}448c838a7973f37c7cc9b59bd4b22812||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:275(CI_Session->set_userdata) [local_menu||Array]
D:\SKK_APP\application\hooks\Pre_display.php:173(Pre_display->_get_local_menu)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

ERROR - 2019-03-28 08:40:14.77653900 --> [229645c31ba1066915e0c976cfc66522]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"229645c31ba1066915e0c976cfc66522";s:10:"ip_address";s:14:"172.123.156.31";s:10:"user_agent";s:102:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36";s:13:"last_activity";i:1553729966;}448c838a7973f37c7cc9b59bd4b22812||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:308(CI_Session->set_userdata) [page_info||Array]
D:\SKK_APP\application\hooks\Pre_display.php:186(Pre_display->_get_page_info)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

INFO  - 2019-03-28 08:40:14.78593700 --> [229645c31ba1066915e0c976cfc66522]<PROCESS-END> Controller:sales_spec_print  Method:index execution time=1.5185s
INFO  - 2019-03-28 09:09:06.31429700 --> [229645c31ba1066915e0c976cfc66522]<PROCESS-START> USER-ID: 28 Controller:sales_spec_print  Method:index
INFO  - 2019-03-28 09:09:06.37423100 --> [229645c31ba1066915e0c976cfc66522]<PROCESS-END> Controller:sales_spec_print  Method:index execution time=0.1609s
INFO  - 2019-03-28 09:30:31.73700200 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:login  Method:index
INFO  - 2019-03-28 09:30:31.76454700 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:login  Method:index execution time=0.1614s
INFO  - 2019-03-28 09:30:33.37542000 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:login  Method:index
INFO  - 2019-03-28 09:30:33.54189200 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:top  Method:index
INFO  - 2019-03-28 09:30:38.45482600 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:top  Method:index execution time=4.9601s
INFO  - 2019-03-28 09:30:39.24933200 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:daily_cnt_info
INFO  - 2019-03-28 09:30:39.63220900 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:daily_cnt_info execution time=0.5096s
INFO  - 2019-03-28 09:36:10.38023000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-03-28 09:36:10.39088900 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:login  Method:index execution time=0.1364s
INFO  - 2019-03-28 09:36:12.21275500 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-03-28 09:36:12.49573300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:top  Method:index
INFO  - 2019-03-28 09:36:17.63487500 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:top  Method:index execution time=5.2047s
INFO  - 2019-03-28 09:36:18.43891500 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:daily_cnt_info
INFO  - 2019-03-28 09:36:18.82451300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:daily_cnt_info execution time=0.4995s
INFO  - 2019-03-28 09:36:21.44136000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:sales_input  Method:index
INFO  - 2019-03-28 09:36:21.54705600 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:sales_input  Method:index execution time=0.2073s
INFO  - 2019-03-28 09:36:23.32240400 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:credit_input  Method:index
INFO  - 2019-03-28 09:36:23.69616600 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:credit_input  Method:index execution time=0.4522s
INFO  - 2019-03-28 09:36:25.23166000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:master_file_print  Method:index
INFO  - 2019-03-28 09:36:25.32660400 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:master_file_print  Method:index execution time=0.1602s
INFO  - 2019-03-28 09:36:27.19053100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:customer_list  Method:index
INFO  - 2019-03-28 09:36:27.33246100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:customer_list  Method:index execution time=0.2012s
INFO  - 2019-03-28 09:37:01.83204300 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-28 09:37:01.92530900 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1598s
INFO  - 2019-03-28 09:37:12.49140300 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-03-28 09:37:12.50784100 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1267s
INFO  - 2019-03-28 09:37:12.95753800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-03-28 09:37:12.97258700 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1225s
INFO  - 2019-03-28 09:37:19.38984700 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_info
INFO  - 2019-03-28 09:37:19.40710000 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:customer_info execution time=0.1276s
INFO  - 2019-03-28 09:37:27.45475100 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_list
INFO  - 2019-03-28 09:37:27.46603100 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:handler_list execution time=0.1241s
INFO  - 2019-03-28 09:37:27.84646700 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_list
INFO  - 2019-03-28 09:37:27.85611500 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:handler_list execution time=0.1172s
INFO  - 2019-03-28 09:37:29.93357600 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_info
INFO  - 2019-03-28 09:37:29.94453200 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:handler_info execution time=0.1225s
INFO  - 2019-03-28 09:39:42.25182300 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 09:39:42.26296900 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1293s
INFO  - 2019-03-28 09:39:43.06739600 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 09:39:43.07761900 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1209s
INFO  - 2019-03-28 09:39:44.56622300 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 09:39:44.57520700 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1265s
INFO  - 2019-03-28 09:39:44.64196400 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-03-28 09:39:44.65165000 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1218s
INFO  - 2019-03-28 09:39:52.02837700 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-28 09:39:52.13810800 --> [2ca6fe56775a85babf93783a393b243d]【売上登録処理   START】
INFO  - 2019-03-28 09:39:52.15008600 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '1057', '有限会社日本橋弁松総本店', '1', '1', '2019/03/28', '2019/03/28', '40', '篠岳', '2', '1', '1', '15000', '1200', '16200', NULL, NULL, NULL, '東京研究所', '食品', '商品試験', '有限会社日本橋弁松総本店', NULL, NULL, '1', 0)
INFO  - 2019-03-28 09:39:52.16084600 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '53106140', '食品表示点検一式', '1', NULL, '15000', '6', '1200', '15000', '16200', NULL, 65249)
INFO  - 2019-03-28 09:39:52.33030700 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Receivable_mng_mdl->_regist_mng SQL: INSERT INTO `t_receivable_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `target_month`, `customer_id`, `customer_disp_name`, `institute_id`, `institute_name`, `depart_id`, `depart_name`, `sales_money`) VALUES (2, 2, now(), '201903', '1057', '有限会社日本橋弁松総本店', '2', '東京研究所', '1', '食品', '16200')
INFO  - 2019-03-28 09:39:52.34155900 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), 38145, 65249, '2019/03/28', '16200')
INFO  - 2019-03-28 09:39:52.36646900 --> [2ca6fe56775a85babf93783a393b243d]【売上登録処理   END】
INFO  - 2019-03-28 09:39:52.48778900 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_input  Method:index execution time=0.5031s
INFO  - 2019-03-28 09:39:53.87424700 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-28 09:39:53.94530600 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1409s
INFO  - 2019-03-28 09:40:00.50562100 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-28 09:40:02.12029300 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=1.6957s
INFO  - 2019-03-28 09:40:08.76599900 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:output
INFO  - 2019-03-28 09:40:08.77619000 --> [2ca6fe56775a85babf93783a393b243d]【請求書発行処理   START)】
INFO  - 2019-03-28 09:40:09.07480200 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0049933', 'S', '2019/03/28', '1', '有限会社日本橋弁松総本店', '有限会社日本橋弁松総本店', '16200', '2019/03/28', '1057')
INFO  - 2019-03-28 09:40:09.08465900 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50190, '65249')
INFO  - 2019-03-28 09:40:09.09571100 --> [2ca6fe56775a85babf93783a393b243d]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049933' WHERE `sales_mng_id` =  '65249'
INFO  - 2019-03-28 09:40:09.80224600 --> [2ca6fe56775a85babf93783a393b243d]【請求書発行処理   END)】
INFO  - 2019-03-28 09:40:09.87535200 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:bill_sales_print  Method:output execution time=1.2127s
INFO  - 2019-03-28 09:40:10.90503100 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-28 09:40:14.29683100 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=3.4751s
INFO  - 2019-03-28 09:40:17.05181800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-03-28 09:40:17.06931400 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1287s
INFO  - 2019-03-28 09:43:49.91882900 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-28 09:43:50.01601400 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1685s
INFO  - 2019-03-28 09:43:53.89233300 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-03-28 09:43:53.91024600 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1222s
INFO  - 2019-03-28 09:43:54.92497900 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_info
INFO  - 2019-03-28 09:43:54.94469200 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:customer_info execution time=0.1315s
INFO  - 2019-03-28 09:44:03.40557300 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_list
INFO  - 2019-03-28 09:44:03.41656600 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:handler_list execution time=0.1240s
INFO  - 2019-03-28 09:44:05.26735900 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_info
INFO  - 2019-03-28 09:44:05.28051700 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:handler_info execution time=0.1308s
INFO  - 2019-03-28 09:44:18.79081200 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 09:44:18.80315800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1257s
INFO  - 2019-03-28 09:44:19.64533700 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 09:44:19.65810600 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1205s
INFO  - 2019-03-28 09:44:20.04379600 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 09:44:20.05473500 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1231s
INFO  - 2019-03-28 09:44:23.96702600 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 09:44:23.97896100 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1142s
INFO  - 2019-03-28 09:44:25.09145900 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-03-28 09:44:25.10390400 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1231s
INFO  - 2019-03-28 09:44:52.70542800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 09:44:52.71817800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1237s
INFO  - 2019-03-28 09:44:53.99431300 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 09:44:54.00574800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1273s
INFO  - 2019-03-28 09:45:03.69510300 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 09:45:03.70768600 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1316s
INFO  - 2019-03-28 09:45:06.00319100 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 09:45:06.01578000 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1356s
INFO  - 2019-03-28 09:45:06.93441900 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 09:45:06.94677100 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1176s
INFO  - 2019-03-28 09:45:10.28173000 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 09:45:10.29461600 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1312s
INFO  - 2019-03-28 09:45:10.93580200 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 09:45:10.94847000 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1520s
INFO  - 2019-03-28 09:45:18.86330900 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-28 09:45:19.17599600 --> [2ca6fe56775a85babf93783a393b243d]【売上登録処理   START】
INFO  - 2019-03-28 09:45:19.19183000 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '2217', '株式会社横浜桂林', '1', '1', '2019/03/31', '2019/03/29', '46', '池﨑千晶', '2', '1', '1', '75000', '6000', '81000', NULL, NULL, '31', '東京研究所', '食品', '商品試験', '株式会社横浜桂林', '2019/03/01', '2019/03/31', '1', 0)
INFO  - 2019-03-28 09:45:19.20436100 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '53106118', '桂林　西武池袋店', '1', '式', NULL, '6', '2800', '35000', '37800', NULL, 65250)
INFO  - 2019-03-28 09:45:19.21621200 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '53106138', '桂林　東武池袋店', '1', '式', NULL, '6', '3200', '40000', '43200', '報告書No.53106138-01，02', 65250)
INFO  - 2019-03-28 09:45:19.35866500 --> [2ca6fe56775a85babf93783a393b243d]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_mng SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money + 81000, `last_user_id` = 2, `last_datetime` = now() WHERE `target_month` =  '201903' AND `customer_disp_name` =  '株式会社横浜桂林' AND `institute_id` IS NULL AND `depart_id` IS NULL
INFO  - 2019-03-28 09:45:19.37273900 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), '37668', 65250, '2019/03/31', '81000')
INFO  - 2019-03-28 09:45:19.40541100 --> [2ca6fe56775a85babf93783a393b243d]【売上登録処理   END】
INFO  - 2019-03-28 09:45:19.48517200 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_input  Method:index execution time=0.7153s
INFO  - 2019-03-28 09:45:20.62939600 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-28 09:45:20.71011900 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1509s
INFO  - 2019-03-28 09:47:31.99371800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-03-28 09:47:32.01234800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1368s
INFO  - 2019-03-28 09:47:33.44030100 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_info
INFO  - 2019-03-28 09:47:33.45449800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:customer_info execution time=0.1259s
INFO  - 2019-03-28 09:47:42.40804700 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_list
INFO  - 2019-03-28 09:47:42.42085800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:handler_list execution time=0.1197s
INFO  - 2019-03-28 09:47:43.13755000 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_info
INFO  - 2019-03-28 09:47:43.15125100 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:handler_info execution time=0.1230s
INFO  - 2019-03-28 09:47:50.44028700 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 09:47:50.45310000 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1205s
INFO  - 2019-03-28 09:47:51.01428800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 09:47:51.02772100 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1361s
INFO  - 2019-03-28 09:47:51.57293500 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 09:47:51.58600700 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1253s
INFO  - 2019-03-28 09:47:54.12500400 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 09:47:54.13815200 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1314s
INFO  - 2019-03-28 09:47:54.68023500 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 09:47:54.69209400 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1302s
INFO  - 2019-03-28 09:47:55.41724500 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 09:47:55.43033700 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1245s
INFO  - 2019-03-28 09:48:01.10370100 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-03-28 09:48:01.11708800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1259s
INFO  - 2019-03-28 09:48:07.28375500 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 09:48:07.29669200 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1292s
INFO  - 2019-03-28 09:48:18.33917200 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 09:48:18.35224900 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1201s
INFO  - 2019-03-28 09:48:33.55280700 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-03-28 09:48:33.56579600 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1288s
INFO  - 2019-03-28 09:48:35.53715600 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-28 09:48:35.65362400 --> [2ca6fe56775a85babf93783a393b243d]【売上登録処理   START】
INFO  - 2019-03-28 09:48:35.66727200 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '796', '京寿楽庵株式会社', '1', '1', '2019/03/28', '2019/03/28', '31', '岡部珠美', '1', '1', '1', '5000', '400', '5400', NULL, NULL, NULL, '大阪研究所', '食品', '商品試験', '京寿楽庵株式会社', NULL, NULL, '1', 0)
INFO  - 2019-03-28 09:48:35.68057600 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '40011523', 'グルメバーム（チョコレート）　異物検査', '1', NULL, NULL, '6', '400', '5000', '5400', NULL, 65251)
INFO  - 2019-03-28 09:48:35.75886900 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Receivable_mng_mdl->_regist_mng SQL: INSERT INTO `t_receivable_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `target_month`, `customer_id`, `customer_disp_name`, `institute_id`, `institute_name`, `depart_id`, `depart_name`, `sales_money`) VALUES (2, 2, now(), '201903', '796', '京寿楽庵株式会社', '1', '大阪研究所', '1', '食品', '5400')
INFO  - 2019-03-28 09:48:35.77199200 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), 38146, 65251, '2019/03/28', '5400')
INFO  - 2019-03-28 09:48:35.80486900 --> [2ca6fe56775a85babf93783a393b243d]【売上登録処理   END】
INFO  - 2019-03-28 09:48:35.87799700 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_input  Method:index execution time=0.4615s
INFO  - 2019-03-28 09:48:37.15660900 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-28 09:48:37.23321600 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1601s
INFO  - 2019-03-28 09:48:45.14540300 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-03-28 09:48:45.16516700 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1255s
INFO  - 2019-03-28 09:48:46.18028500 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-03-28 09:48:46.19960700 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1258s
INFO  - 2019-03-28 09:48:47.12587500 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_info
INFO  - 2019-03-28 09:48:47.13949000 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:customer_info execution time=0.1196s
INFO  - 2019-03-28 09:48:57.91086500 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_list
INFO  - 2019-03-28 09:48:57.92488800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:handler_list execution time=0.1265s
INFO  - 2019-03-28 09:48:58.72068300 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_info
INFO  - 2019-03-28 09:48:58.73519300 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:handler_info execution time=0.1227s
INFO  - 2019-03-28 09:49:12.51684100 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 09:49:12.53046800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1312s
INFO  - 2019-03-28 09:49:12.81508800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-03-28 09:49:12.82959400 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1322s
INFO  - 2019-03-28 09:49:30.60088100 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 09:49:30.61466600 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1223s
INFO  - 2019-03-28 09:49:35.96803800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 09:49:35.98186500 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1272s
INFO  - 2019-03-28 09:49:38.71519300 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 09:49:38.72961400 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1408s
INFO  - 2019-03-28 09:49:50.81683700 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-28 09:49:50.84710200 --> [2ca6fe56775a85babf93783a393b243d]【売上登録処理   START】
INFO  - 2019-03-28 09:49:50.86275500 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '677', '株式会社堂島スウィーツ', '1', '1', '2019/03/28', '2019/03/28', '34', '吉田晃', '1', '1', '10', '80000', '6400', '86400', NULL, NULL, NULL, '大阪研究所', '食品', 'コンサルティング', '株式会社堂島スウィーツ', NULL, NULL, '1', 0)
INFO  - 2019-03-28 09:49:50.87768300 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), NULL, '洋生菓子　細菌検査', NULL, NULL, NULL, '6', '2400', '30000', '32400', '工房より抽出', 65252)
INFO  - 2019-03-28 09:49:50.89091300 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), NULL, '工房　手指・器具　衛生検査', NULL, NULL, NULL, '6', '4000', '50000', '54000', NULL, 65252)
INFO  - 2019-03-28 09:49:50.96434700 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Receivable_mng_mdl->_regist_mng SQL: INSERT INTO `t_receivable_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `target_month`, `customer_id`, `customer_disp_name`, `institute_id`, `institute_name`, `depart_id`, `depart_name`, `sales_money`) VALUES (2, 2, now(), '201903', '677', '株式会社堂島スウィーツ', '1', '大阪研究所', '1', '食品', '86400')
INFO  - 2019-03-28 09:49:50.97766100 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), 38147, 65252, '2019/03/28', '86400')
INFO  - 2019-03-28 09:49:51.00467300 --> [2ca6fe56775a85babf93783a393b243d]【売上登録処理   END】
INFO  - 2019-03-28 09:49:51.07828800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_input  Method:index execution time=0.3613s
INFO  - 2019-03-28 09:49:51.89518300 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-28 09:49:51.96783200 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1456s
INFO  - 2019-03-28 09:49:53.80074600 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-28 09:49:55.29204200 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=1.5562s
INFO  - 2019-03-28 09:50:02.00644100 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:output
INFO  - 2019-03-28 09:50:02.01948600 --> [2ca6fe56775a85babf93783a393b243d]【請求書発行処理   START)】
INFO  - 2019-03-28 09:50:02.24245200 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0049934', 'S', '2019/03/28', '1', '京寿楽庵株式会社', '京寿楽庵株式会社', '5400', '2019/03/28', '796')
INFO  - 2019-03-28 09:50:02.25500000 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50191, '65251')
INFO  - 2019-03-28 09:50:02.26663200 --> [2ca6fe56775a85babf93783a393b243d]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049934' WHERE `sales_mng_id` =  '65251'
INFO  - 2019-03-28 09:50:02.45076200 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0049935', 'S', '2019/03/28', '1', '株式会社堂島スウィーツ', '株式会社堂島スウィーツ', '86400', '2019/03/28', '677')
INFO  - 2019-03-28 09:50:02.46134600 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50192, '65252')
INFO  - 2019-03-28 09:50:02.47274400 --> [2ca6fe56775a85babf93783a393b243d]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049935' WHERE `sales_mng_id` =  '65252'
INFO  - 2019-03-28 09:50:03.59200100 --> [2ca6fe56775a85babf93783a393b243d]【請求書発行処理   END)】
INFO  - 2019-03-28 09:50:03.67284600 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:bill_sales_print  Method:output execution time=1.7573s
INFO  - 2019-03-28 09:50:06.59130800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-28 09:50:09.86205800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=3.3354s
INFO  - 2019-03-28 09:50:13.69623900 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-03-28 09:50:13.71287900 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1271s
INFO  - 2019-03-28 09:50:27.71541500 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-03-28 09:50:27.73153900 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1280s
INFO  - 2019-03-28 09:54:41.35053100 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-28 09:54:45.22433600 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_list  Method:index execution time=3.9621s
INFO  - 2019-03-28 09:54:48.89881800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-28 09:54:50.01624100 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_list  Method:index execution time=1.1885s
INFO  - 2019-03-28 09:54:54.41287500 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-03-28 09:54:54.53010800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.1919s
INFO  - 2019-03-28 09:55:05.91509800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-03-28 09:55:05.98020600 --> [2ca6fe56775a85babf93783a393b243d]【売上登録処理   START】
INFO  - 2019-03-28 09:55:05.99731400 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '677', '株式会社堂島スウィーツ', '1', '1', '2019/03/28', '2019/03/28', '34', '吉田晃', '1', '1', '2', '50000', '4000', '54000', NULL, NULL, NULL, '大阪研究所', '食品', '商品試験（定期）', '株式会社堂島スウィーツ', NULL, NULL, '1', 0)
INFO  - 2019-03-28 09:55:06.01320600 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), NULL, '工房　手指・器具　衛生検査', NULL, NULL, NULL, '6', '4000', '50000', '54000', NULL, 65253)
INFO  - 2019-03-28 09:55:06.08869100 --> [2ca6fe56775a85babf93783a393b243d]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_mng SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money + 54000, `last_user_id` = 2, `last_datetime` = now() WHERE `target_month` =  '201903' AND `customer_disp_name` =  '株式会社堂島スウィーツ' AND `institute_id` =  '1' AND `depart_id` =  '1'
INFO  - 2019-03-28 09:55:06.10433600 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), '38147', 65253, '2019/03/28', '54000')
INFO  - 2019-03-28 09:55:06.12936400 --> [2ca6fe56775a85babf93783a393b243d]【売上登録処理   END】
INFO  - 2019-03-28 09:55:06.19889000 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.3838s
INFO  - 2019-03-28 09:55:07.30754000 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-28 09:55:08.31592400 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_list  Method:index execution time=1.1063s
INFO  - 2019-03-28 09:55:26.02787700 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:edit
INFO  - 2019-03-28 09:55:26.15237100 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_input  Method:edit execution time=0.1963s
INFO  - 2019-03-28 09:55:34.14279400 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:edit
INFO  - 2019-03-28 09:55:34.27196200 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_input  Method:edit execution time=0.2327s
INFO  - 2019-03-28 09:55:35.83726400 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:edit
INFO  - 2019-03-28 09:55:35.90594900 --> [2ca6fe56775a85babf93783a393b243d]【売上変更処理   START】
INFO  - 2019-03-28 09:55:35.93130400 --> [2ca6fe56775a85babf93783a393b243d]【UPDATE】PROCESS: Sales_mdl->update_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `customer_id` = '677', `customer_disp_name` = '株式会社堂島スウィーツ', `credit_type` = '1', `customer_type` = '1', `bill_date` = '2019/03/28', `book_date` = '2019/03/28', `handler_id` = '34', `handler_name` = '吉田晃', `institute_id` = '1', `depart_id` = '1', `abstract_id` = '10', `sum_no_tax` = '30000', `sum_tax` = '2400', `sum_money` = '32400', `sep_month_from` = NULL, `sep_month_to` = NULL, `cutoff_date` = NULL, `institute_name` = '大阪研究所', `depart_name` = '食品', `abstract_name` = 'コンサルティング', `customer_name` = '株式会社堂島スウィーツ', `cutoff_date_from` = NULL, `cutoff_date_to` = NULL, `data_status_type` = '1', `sep_depart_flg` = 0 WHERE `sales_mng_id` =  '65252'
INFO  - 2019-03-28 09:55:35.94531100 --> [2ca6fe56775a85babf93783a393b243d]【DELETE(物理削除)】PROCESS: Sales_mdl->update_data SQL: DELETE FROM `t_sales_detail`
WHERE `sales_mng_id` =  '65252'
INFO  - 2019-03-28 09:55:35.97498500 --> [2ca6fe56775a85babf93783a393b243d]【UPDATE】PROCESS: Sales_mdl->nullupdate_outside_relation SQL: UPDATE `t_outside_relation` SET `sales_mng_id` = NULL, `sales_detail_id` = NULL, `last_user_id` = 2, `last_datetime` = now() WHERE `sales_mng_id` =  '65252'
INFO  - 2019-03-28 09:55:35.99111400 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Sales_mdl->update_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), NULL, '洋生菓子　細菌検査', NULL, NULL, NULL, '6', '2400', '30000', '32400', '工房より抽出', '65252')
INFO  - 2019-03-28 09:55:36.00464400 --> [2ca6fe56775a85babf93783a393b243d]【DELETE(物理削除)】PROCESS: Sales_mdl->update_data SQL: DELETE FROM `t_sales_before`
WHERE `sales_mng_id` =  '65252'
INFO  - 2019-03-28 09:55:36.01862300 --> [2ca6fe56775a85babf93783a393b243d]【DELETE(物理削除)】PROCESS: Sales_mdl->update_data SQL: DELETE FROM `t_sales_depart`
WHERE `sales_mng_id` =  '65252'
INFO  - 2019-03-28 09:55:36.11001500 --> [2ca6fe56775a85babf93783a393b243d]【UPDATE】PROCESS: Sales_mdl->update_del_bill_status SQL: UPDATE `t_sales_mng` SET `data_status_type` = '1', `last_user_id` = 2, `last_datetime` = now() WHERE `sales_mng_id` in (65252) 
INFO  - 2019-03-28 09:55:36.12427000 --> [2ca6fe56775a85babf93783a393b243d]【DELETE(物理削除)】PROCESS: Sales_mdl->delete_bill_print SQL: DELETE FROM `t_bill_mng`
WHERE `bill_mng_id` =  '50192'
INFO  - 2019-03-28 09:55:36.28671700 --> [2ca6fe56775a85babf93783a393b243d]【DELETE(物理削除)】PROCESS: Receivable_mng_mdl->back_sales_data SQL: DELETE FROM `t_receivable_data`
WHERE `sales_mng_id` =  '65252'
INFO  - 2019-03-28 09:55:36.30382300 --> [2ca6fe56775a85babf93783a393b243d]【UPDATE】PROCESS: Receivable_mng_mdl->back_sales_data SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money - 86400, `last_user_id` = 2, `last_datetime` = now() WHERE `receivable_mng_id` =  '38147'
INFO  - 2019-03-28 09:55:36.32490500 --> [2ca6fe56775a85babf93783a393b243d]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_mng SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money + 32400, `last_user_id` = 2, `last_datetime` = now() WHERE `target_month` =  '201903' AND `customer_disp_name` =  '株式会社堂島スウィーツ' AND `institute_id` =  '1' AND `depart_id` =  '1'
INFO  - 2019-03-28 09:55:36.34284300 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), '38147', '65252', '2019/03/28', '32400')
INFO  - 2019-03-28 09:55:36.37701300 --> [2ca6fe56775a85babf93783a393b243d]【売上変更処理   END】
INFO  - 2019-03-28 09:55:36.44743400 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_input  Method:edit execution time=0.7239s
INFO  - 2019-03-28 09:55:37.92891300 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-28 09:55:38.95677900 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_list  Method:index execution time=1.0874s
INFO  - 2019-03-28 09:55:58.12206500 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-28 09:55:59.52613900 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=1.4722s
INFO  - 2019-03-28 09:56:05.61547600 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:output
INFO  - 2019-03-28 09:56:05.62957000 --> [2ca6fe56775a85babf93783a393b243d]【請求書発行処理   START)】
INFO  - 2019-03-28 09:56:05.65323400 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0049935', 'S', '2019/03/28', '1', '株式会社堂島スウィーツ', '株式会社堂島スウィーツ', '32400', '2019/03/28', '677')
INFO  - 2019-03-28 09:56:05.66897600 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50193, '65252')
INFO  - 2019-03-28 09:56:05.68476600 --> [2ca6fe56775a85babf93783a393b243d]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049935' WHERE `sales_mng_id` =  '65252'
INFO  - 2019-03-28 09:56:05.90239900 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0049936', 'S', '2019/03/28', '1', '株式会社堂島スウィーツ', '株式会社堂島スウィーツ', '54000', '2019/03/28', '677')
INFO  - 2019-03-28 09:56:05.91499500 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50194, '65253')
INFO  - 2019-03-28 09:56:05.92816300 --> [2ca6fe56775a85babf93783a393b243d]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049936' WHERE `sales_mng_id` =  '65253'
INFO  - 2019-03-28 09:56:07.00070200 --> [2ca6fe56775a85babf93783a393b243d]【請求書発行処理   END)】
INFO  - 2019-03-28 09:56:07.07600800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:bill_sales_print  Method:output execution time=1.5544s
INFO  - 2019-03-28 09:56:08.22758700 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-28 09:56:11.45081600 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=3.3018s
INFO  - 2019-03-28 09:56:14.66965300 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-28 09:56:14.75894200 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1611s
INFO  - 2019-03-28 09:56:18.28591700 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-03-28 09:56:18.30796900 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1283s
INFO  - 2019-03-28 09:56:18.98718400 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_info
INFO  - 2019-03-28 09:56:19.00397500 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:customer_info execution time=0.1233s
INFO  - 2019-03-28 09:56:26.81339300 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_list
INFO  - 2019-03-28 09:56:26.82938400 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:handler_list execution time=0.1302s
INFO  - 2019-03-28 09:56:27.71036400 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_info
INFO  - 2019-03-28 09:56:27.72647600 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:handler_info execution time=0.1243s
INFO  - 2019-03-28 09:56:36.69062300 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 09:56:36.70596500 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1263s
INFO  - 2019-03-28 09:56:37.01217100 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 09:56:37.02833200 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1266s
INFO  - 2019-03-28 09:56:37.89311100 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 09:56:37.90943900 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1207s
INFO  - 2019-03-28 09:56:39.75176800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 09:56:39.76756100 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1367s
INFO  - 2019-03-28 09:56:40.73763600 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 09:56:40.75404100 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1541s
INFO  - 2019-03-28 09:56:43.04825800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 09:56:43.06431400 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1253s
INFO  - 2019-03-28 09:56:47.70311700 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-03-28 09:56:47.71750300 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1271s
INFO  - 2019-03-28 09:56:54.57279600 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 09:56:54.58726300 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1216s
INFO  - 2019-03-28 09:56:55.74146300 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 09:56:55.75734200 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1265s
INFO  - 2019-03-28 09:56:57.40607200 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 09:56:57.42163600 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1188s
INFO  - 2019-03-28 09:56:58.65181700 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 09:56:58.66726700 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1263s
INFO  - 2019-03-28 09:56:59.66435300 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 09:56:59.68034100 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1263s
INFO  - 2019-03-28 09:57:00.16235800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 09:57:00.17808600 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1240s
INFO  - 2019-03-28 09:57:01.24543000 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-28 09:57:01.36262600 --> [2ca6fe56775a85babf93783a393b243d]【売上登録処理   START】
INFO  - 2019-03-28 09:57:01.37803500 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '661', 'セイウ株式会社', '1', '1', '2019/03/28', '2019/03/28', '31', '岡部珠美', '1', '1', '1', '5000', '400', '5400', NULL, NULL, NULL, '大阪研究所', '食品', '商品試験', 'セイウ株式会社', NULL, NULL, '1', 0)
INFO  - 2019-03-28 09:57:01.39439600 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '40011543', 'ＴＶＢＰマンゴーゼリー　異物検査', '1', NULL, NULL, '6', '400', '5000', '5400', '（管理No.F00078）', 65254)
INFO  - 2019-03-28 09:57:01.47288600 --> [2ca6fe56775a85babf93783a393b243d]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_mng SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money + 5400, `last_user_id` = 2, `last_datetime` = now() WHERE `target_month` =  '201903' AND `customer_disp_name` =  'セイウ株式会社' AND `institute_id` =  '1' AND `depart_id` =  '1'
INFO  - 2019-03-28 09:57:01.49002100 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), '37995', 65254, '2019/03/28', '5400')
INFO  - 2019-03-28 09:57:01.51956600 --> [2ca6fe56775a85babf93783a393b243d]【売上登録処理   END】
INFO  - 2019-03-28 09:57:01.59585100 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_input  Method:index execution time=0.4410s
INFO  - 2019-03-28 09:57:02.48154400 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-28 09:57:02.56183300 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1497s
INFO  - 2019-03-28 09:57:04.35011600 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-28 09:57:05.72242700 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=1.4328s
INFO  - 2019-03-28 09:57:10.08350600 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:output
INFO  - 2019-03-28 09:57:10.09900500 --> [2ca6fe56775a85babf93783a393b243d]【請求書発行処理   START)】
INFO  - 2019-03-28 09:57:10.31155900 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0049937', 'S', '2019/03/28', '1', 'セイウ株式会社', 'セイウ株式会社', '5400', '2019/03/28', '661')
INFO  - 2019-03-28 09:57:10.32453800 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50195, '65254')
INFO  - 2019-03-28 09:57:10.33826300 --> [2ca6fe56775a85babf93783a393b243d]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049937' WHERE `sales_mng_id` =  '65254'
INFO  - 2019-03-28 09:57:10.93602000 --> [2ca6fe56775a85babf93783a393b243d]【請求書発行処理   END)】
INFO  - 2019-03-28 09:57:11.01315300 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:bill_sales_print  Method:output execution time=1.0204s
INFO  - 2019-03-28 09:57:12.21708900 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-28 09:57:15.41642900 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=3.2690s
INFO  - 2019-03-28 09:57:18.91920000 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-03-28 09:57:18.93541100 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1293s
INFO  - 2019-03-28 10:05:49.15449500 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:credit_input  Method:index
INFO  - 2019-03-28 10:05:49.67484100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:credit_input  Method:index execution time=0.5817s
INFO  - 2019-03-28 10:05:56.64955100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_tran_list
INFO  - 2019-03-28 10:05:56.91203300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:customer_tran_list execution time=0.3763s
INFO  - 2019-03-28 10:06:00.86417200 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_info
INFO  - 2019-03-28 10:06:00.88135900 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:customer_info execution time=0.1354s
INFO  - 2019-03-28 10:06:01.86891000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_info
INFO  - 2019-03-28 10:06:01.88695400 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:customer_info execution time=0.1260s
INFO  - 2019-03-28 10:06:08.57602500 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:credit_input  Method:index
INFO  - 2019-03-28 10:06:08.60184100 --> [70eee669790f45ebb8848b20d6c03a05]【入金登録処理   START)】
INFO  - 2019-03-28 10:06:08.66717300 --> [70eee669790f45ebb8848b20d6c03a05]【DELETE(物理削除)】PROCESS: Credit_input_mdl->regist_data SQL: DELETE FROM `t_credit_received`
WHERE `credit_date` =  '2019/03/27'
AND `bank_id` =  '1'
INFO  - 2019-03-28 10:06:08.68700500 --> [70eee669790f45ebb8848b20d6c03a05]【INSERT】PROCESS: Credit_input_mdl->regist_data SQL: INSERT INTO `t_credit_received` (`ins_user_id`, `last_user_id`, `last_datetime`, `credit_date`, `bank_id`, `bank_name`, `branch_name`, `account_type`, `account_no`, `customer_id`, `customer_disp_name`, `credit_money`, `balance_money`, `credit_received_id`) VALUES (1, 1, now(), '2019/03/27', '1', '三菱ＵＦＪ', '大阪中央', '1', '4739610', '2563', '風工房　イル ティモーネ', '5346', '5346', NULL)
INFO  - 2019-03-28 10:06:08.71682200 --> [70eee669790f45ebb8848b20d6c03a05]【入金登録処理   END)】
INFO  - 2019-03-28 10:06:09.05331300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:credit_input  Method:index execution time=0.5761s
INFO  - 2019-03-28 10:06:10.76602000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:credit_input  Method:index
INFO  - 2019-03-28 10:06:11.10260300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:credit_input  Method:index execution time=0.4111s
INFO  - 2019-03-28 10:06:14.92294300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:transfer_del_single  Method:index
INFO  - 2019-03-28 10:06:16.21344900 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:transfer_del_single  Method:index execution time=1.4120s
INFO  - 2019-03-28 10:06:19.53097400 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:transfer_del_single  Method:index
INFO  - 2019-03-28 10:06:19.95716400 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:transfer_del_single  Method:index execution time=0.4966s
INFO  - 2019-03-28 10:06:34.26646800 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:transfer_del_single  Method:index
INFO  - 2019-03-28 10:06:34.30379500 --> [70eee669790f45ebb8848b20d6c03a05]【振込個別消込処理   START】
INFO  - 2019-03-28 10:06:34.32126300 --> [70eee669790f45ebb8848b20d6c03a05]【INSERT】PROCESS: Transfer_del_single_mdl->regist_data SQL: INSERT INTO `t_credit_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `bill_no`, `bill_money`, `sum_credit_money`, `sum_balance_money`) VALUES (1, 1, now(), '49684', 'SKK0049435', '5346', 5346, 0)
INFO  - 2019-03-28 10:06:34.33806900 --> [70eee669790f45ebb8848b20d6c03a05]【INSERT】PROCESS: Transfer_del_single_mdl->regist_data SQL: INSERT INTO `t_credit_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `credit_received_id`, `reconcile_date`, `reconcile_money`, `reconcile_type`, `credit_mng_id`) VALUES (1, 1, now(), '29300', '2019/03/27', '5346', 'F', 46848)
INFO  - 2019-03-28 10:06:34.35296600 --> [70eee669790f45ebb8848b20d6c03a05]【UPDATE】PROCESS: Transfer_del_single_mdl->regist_data SQL: UPDATE `t_credit_received` SET `balance_money` = balance_money - 5346, `last_user_id` = 1, `last_datetime` = now() WHERE `credit_received_id` =  '29300'
INFO  - 2019-03-28 10:06:34.36945000 --> [70eee669790f45ebb8848b20d6c03a05]【UPDATE】PROCESS: Credit_common_mdl->update_reconcile_status SQL: UPDATE `t_credit_mng` SET `reconcile_status` = '2', `last_user_id` = 1, `last_datetime` = now() WHERE `credit_mng_id` =  46848
INFO  - 2019-03-28 10:06:34.38707000 --> [70eee669790f45ebb8848b20d6c03a05]【UPDATE】PROCESS: Credit_common_mdl->update_sales_mng SQL: UPDATE `t_sales_mng` SET `data_status_type` = '3', `last_user_id` = 1, `last_datetime` = now() WHERE `sales_mng_id` in (64706) AND `data_status_type` =  '2'
INFO  - 2019-03-28 10:06:34.45503000 --> [70eee669790f45ebb8848b20d6c03a05]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_credit SQL: UPDATE `t_receivable_mng` SET `credit_money` = credit_money + 5346, `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37805'
INFO  - 2019-03-28 10:06:34.46970900 --> [70eee669790f45ebb8848b20d6c03a05]【UPDATE】PROCESS: Receivable_mng_mdl->_update_credit SQL: UPDATE `t_receivable_data` SET `credit_mng_id` = '46848', `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37805'
INFO  - 2019-03-28 10:06:34.50511800 --> [70eee669790f45ebb8848b20d6c03a05]【振込個別消込処理   END】
INFO  - 2019-03-28 10:06:34.86467700 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:transfer_del_single  Method:index execution time=0.6694s
INFO  - 2019-03-28 10:06:36.75578000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:transfer_del_single  Method:index
INFO  - 2019-03-28 10:06:37.15352200 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:transfer_del_single  Method:index execution time=0.4632s
INFO  - 2019-03-28 10:28:05.49515300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_tran_list
INFO  - 2019-03-28 10:28:05.76559000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:customer_tran_list execution time=0.3828s
INFO  - 2019-03-28 10:28:06.44815100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_tran_list
INFO  - 2019-03-28 10:28:06.69316700 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:customer_tran_list execution time=0.3504s
INFO  - 2019-03-28 10:28:12.26746100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:master_file_print  Method:index
INFO  - 2019-03-28 10:28:15.20660900 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:master_file_print  Method:index execution time=2.9988s
INFO  - 2019-03-28 10:28:30.19967500 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:bill_cutoff_print  Method:bill_disp
INFO  - 2019-03-28 10:28:30.24322600 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:bill_cutoff_print  Method:bill_disp execution time=0.1711s
INFO  - 2019-03-28 10:28:38.91821000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:bill_cutoff_print  Method:bill_disp
INFO  - 2019-03-28 10:28:38.97575800 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:bill_cutoff_print  Method:bill_disp execution time=0.1782s
INFO  - 2019-03-28 10:33:17.71498100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_tran_list
INFO  - 2019-03-28 10:33:17.97300500 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:customer_tran_list execution time=0.3814s
INFO  - 2019-03-28 10:33:18.13712100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_tran_list
INFO  - 2019-03-28 10:33:18.38320700 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:customer_tran_list execution time=0.3626s
INFO  - 2019-03-28 10:33:19.18606000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_tran_list
INFO  - 2019-03-28 10:33:19.44694700 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:customer_tran_list execution time=0.3773s
INFO  - 2019-03-28 10:33:22.09683100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_tran_list
INFO  - 2019-03-28 10:33:22.36368400 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:customer_tran_list execution time=0.3758s
INFO  - 2019-03-28 10:33:22.50711400 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_tran_list
INFO  - 2019-03-28 10:33:22.78434600 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:customer_tran_list execution time=0.3865s
INFO  - 2019-03-28 10:33:23.56351200 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_tran_list
INFO  - 2019-03-28 10:33:23.81237900 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:customer_tran_list execution time=0.3605s
INFO  - 2019-03-28 10:33:26.03814400 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:master_file_print  Method:index
INFO  - 2019-03-28 10:33:28.54727000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:master_file_print  Method:index execution time=2.5831s
INFO  - 2019-03-28 10:33:32.33520800 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:bill_cutoff_print  Method:bill_disp
INFO  - 2019-03-28 10:33:32.39928000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:bill_cutoff_print  Method:bill_disp execution time=0.1749s
INFO  - 2019-03-28 10:50:25.15286700 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_tran_list
INFO  - 2019-03-28 10:50:25.41867200 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:customer_tran_list execution time=0.3773s
INFO  - 2019-03-28 10:50:26.35351500 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_tran_list
INFO  - 2019-03-28 10:50:26.61695700 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:customer_tran_list execution time=0.3965s
INFO  - 2019-03-28 10:50:27.33101000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_tran_list
INFO  - 2019-03-28 10:50:27.57516900 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:customer_tran_list execution time=0.3627s
INFO  - 2019-03-28 10:50:30.91685200 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:master_file_print  Method:index
INFO  - 2019-03-28 10:50:33.62093900 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:master_file_print  Method:index execution time=2.7592s
INFO  - 2019-03-28 10:51:02.92863700 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:sales_list  Method:index
INFO  - 2019-03-28 10:51:06.84245200 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:sales_list  Method:index execution time=3.9708s
INFO  - 2019-03-28 10:51:26.66841300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:sales_list  Method:index
INFO  - 2019-03-28 10:51:27.69534000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:sales_list  Method:index execution time=1.0931s
INFO  - 2019-03-28 10:51:36.21633100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:sales_input  Method:copy
INFO  - 2019-03-28 10:51:36.33766900 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.1885s
INFO  - 2019-03-28 10:52:16.75246100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:52:16.76958500 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1279s
INFO  - 2019-03-28 10:52:17.13107300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:52:17.14857800 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1299s
INFO  - 2019-03-28 10:52:17.66081600 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:52:17.67844200 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1297s
INFO  - 2019-03-28 10:52:18.84874900 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:52:18.86363700 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1188s
INFO  - 2019-03-28 10:52:19.19772100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:52:19.21503200 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1301s
INFO  - 2019-03-28 10:52:19.67990100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:52:19.69739700 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1345s
INFO  - 2019-03-28 10:52:26.59965800 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:52:26.61487500 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1196s
INFO  - 2019-03-28 10:52:26.96455400 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:52:26.98283900 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1365s
INFO  - 2019-03-28 10:52:28.14500500 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:52:28.16259100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1302s
INFO  - 2019-03-28 10:52:29.06147400 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:52:29.07911400 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1287s
INFO  - 2019-03-28 10:52:38.16521200 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:52:38.18348200 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1255s
INFO  - 2019-03-28 10:52:38.55478700 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:52:38.57035100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1214s
INFO  - 2019-03-28 10:52:42.95653200 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:52:42.97464300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1264s
INFO  - 2019-03-28 10:52:43.34148000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:52:43.35819200 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1250s
INFO  - 2019-03-28 10:52:43.84594800 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:52:43.86338300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1531s
INFO  - 2019-03-28 10:52:44.38010800 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:52:44.39609000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1278s
INFO  - 2019-03-28 10:53:11.28333700 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 10:53:11.29962600 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1208s
INFO  - 2019-03-28 10:53:11.72582500 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 10:53:11.74201300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1262s
INFO  - 2019-03-28 10:53:13.27090200 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 10:53:13.31991800 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1640s
INFO  - 2019-03-28 10:53:14.89764000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 10:53:14.91561100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1316s
INFO  - 2019-03-28 10:53:15.42012600 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 10:53:15.43899200 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1399s
INFO  - 2019-03-28 10:53:16.91914700 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 10:53:16.93691300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1338s
INFO  - 2019-03-28 10:53:21.52194500 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 10:53:21.54034200 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1239s
INFO  - 2019-03-28 10:53:22.11458100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:goods_info
INFO  - 2019-03-28 10:53:22.13342100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1230s
INFO  - 2019-03-28 10:53:34.26886100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:53:34.28768400 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1395s
INFO  - 2019-03-28 10:53:34.84756000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:53:34.86611800 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1309s
INFO  - 2019-03-28 10:53:35.37524100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:53:35.39550500 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1253s
INFO  - 2019-03-28 10:53:36.49612800 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:53:36.51500400 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1297s
INFO  - 2019-03-28 10:53:37.30938200 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:53:37.32793500 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1396s
INFO  - 2019-03-28 10:53:41.81717700 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:53:41.83576000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1332s
INFO  - 2019-03-28 10:53:43.02443700 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:53:43.04389900 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1262s
INFO  - 2019-03-28 10:53:43.87760400 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:53:43.89667600 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1430s
INFO  - 2019-03-28 10:53:51.93043400 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:53:51.94902100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1299s
INFO  - 2019-03-28 10:53:52.83934100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:53:52.85759300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1274s
INFO  - 2019-03-28 10:53:53.18632900 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:53:53.20299800 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1228s
INFO  - 2019-03-28 10:53:53.84027200 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:53:53.85813100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1549s
INFO  - 2019-03-28 10:53:56.18044900 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:53:56.19951500 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1281s
INFO  - 2019-03-28 10:53:58.81184200 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:53:58.83071800 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1291s
INFO  - 2019-03-28 10:53:59.24238100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:53:59.26093100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1294s
INFO  - 2019-03-28 10:54:01.91443000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:01.93156600 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1268s
INFO  - 2019-03-28 10:54:03.01157600 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:03.02842800 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1246s
INFO  - 2019-03-28 10:54:03.75771400 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:03.77577300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1239s
INFO  - 2019-03-28 10:54:06.03463000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:06.05267000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1556s
INFO  - 2019-03-28 10:54:07.44205300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:07.46023400 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1402s
INFO  - 2019-03-28 10:54:08.48629800 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:08.50474900 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1347s
INFO  - 2019-03-28 10:54:08.87586900 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:08.89432100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1242s
INFO  - 2019-03-28 10:54:10.81508300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:10.83303000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1288s
INFO  - 2019-03-28 10:54:11.25774400 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:11.27532400 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1381s
INFO  - 2019-03-28 10:54:15.98644400 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:16.00434200 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1308s
INFO  - 2019-03-28 10:54:16.36933200 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:16.38602100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1285s
INFO  - 2019-03-28 10:54:16.78315800 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:16.80191700 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1293s
INFO  - 2019-03-28 10:54:22.74393300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:22.76052400 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1276s
INFO  - 2019-03-28 10:54:23.91999300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:23.93828200 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1323s
INFO  - 2019-03-28 10:54:24.30139900 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:24.32028800 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1303s
INFO  - 2019-03-28 10:54:26.07604800 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:26.09445600 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1333s
INFO  - 2019-03-28 10:54:27.09779000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:27.11557200 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1284s
INFO  - 2019-03-28 10:54:29.93253000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:29.95015100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1328s
INFO  - 2019-03-28 10:54:30.48594400 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:30.50528000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1339s
INFO  - 2019-03-28 10:54:32.87116800 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:32.88822800 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1197s
INFO  - 2019-03-28 10:54:36.91800400 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:36.93641800 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1307s
INFO  - 2019-03-28 10:54:37.56387900 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:37.58107800 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1323s
INFO  - 2019-03-28 10:54:37.97127500 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:37.99035800 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1355s
INFO  - 2019-03-28 10:54:38.51285200 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:38.53192700 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1270s
INFO  - 2019-03-28 10:54:39.02672400 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:39.04512500 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1243s
INFO  - 2019-03-28 10:54:39.35032700 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:39.36970800 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1418s
INFO  - 2019-03-28 10:54:39.99648200 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:40.01404400 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1291s
INFO  - 2019-03-28 10:54:40.38300200 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:40.40274900 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1308s
INFO  - 2019-03-28 10:54:40.85657700 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:40.87585100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1279s
INFO  - 2019-03-28 10:54:41.16897200 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:41.18866100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1306s
INFO  - 2019-03-28 10:54:42.59074200 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:42.60826000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1542s
INFO  - 2019-03-28 10:54:43.02605600 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:43.04549900 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1304s
INFO  - 2019-03-28 10:54:44.11118100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:44.13037500 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1562s
INFO  - 2019-03-28 10:54:44.64096700 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:44.65900000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1358s
INFO  - 2019-03-28 10:54:45.82916300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:45.84870500 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1355s
INFO  - 2019-03-28 10:54:46.39981700 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:46.41971100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1313s
INFO  - 2019-03-28 10:54:46.71447300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:46.73417100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1289s
INFO  - 2019-03-28 10:54:49.33092800 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:49.35041300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1760s
INFO  - 2019-03-28 10:54:55.62204700 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:55.63963600 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1248s
INFO  - 2019-03-28 10:54:57.63117900 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:57.64946500 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1556s
INFO  - 2019-03-28 10:54:58.92742300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:58.94701700 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1280s
INFO  - 2019-03-28 10:54:59.58926100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:54:59.60919600 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1352s
INFO  - 2019-03-28 10:55:02.00445400 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:55:02.02393000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1348s
INFO  - 2019-03-28 10:55:02.37962500 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:55:02.39930300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1271s
INFO  - 2019-03-28 10:55:04.15028000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:55:04.16781800 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1395s
INFO  - 2019-03-28 10:55:04.93201600 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:55:04.95073000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1564s
INFO  - 2019-03-28 10:55:07.02055000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:55:07.04068500 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1292s
INFO  - 2019-03-28 10:55:08.21332700 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:55:08.23105200 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1255s
INFO  - 2019-03-28 10:55:12.38000700 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:55:12.39980000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1350s
INFO  - 2019-03-28 10:55:12.76571300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:55:12.78490500 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1291s
INFO  - 2019-03-28 10:55:13.66993000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:55:13.68957900 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1637s
INFO  - 2019-03-28 10:55:14.85469800 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:55:14.87247300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1496s
INFO  - 2019-03-28 10:55:15.20148200 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:55:15.22113300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1312s
INFO  - 2019-03-28 10:55:15.95967800 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:55:15.98013100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1551s
INFO  - 2019-03-28 10:55:19.79989700 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:55:19.81970900 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1315s
INFO  - 2019-03-28 10:55:21.30141900 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:55:21.32186900 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1746s
INFO  - 2019-03-28 10:55:21.69743300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:55:21.71740000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1291s
INFO  - 2019-03-28 10:55:24.61581300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:55:24.63587300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1294s
INFO  - 2019-03-28 10:55:25.34573600 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:55:25.36554500 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1431s
INFO  - 2019-03-28 10:56:27.31257500 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:56:27.33198000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1269s
INFO  - 2019-03-28 10:56:27.75546500 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:56:27.77535200 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1332s
INFO  - 2019-03-28 10:56:28.77237500 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:56:28.79036100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1292s
INFO  - 2019-03-28 10:56:29.57794300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:56:29.59831600 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1622s
INFO  - 2019-03-28 10:56:34.02381900 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:56:34.04186500 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1524s
INFO  - 2019-03-28 10:56:35.18758100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:56:35.20743500 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1319s
INFO  - 2019-03-28 10:56:35.93222900 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:56:35.95102000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1235s
INFO  - 2019-03-28 10:56:39.74089600 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:56:39.75909200 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1253s
INFO  - 2019-03-28 10:56:41.33546300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:56:41.35548300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1356s
INFO  - 2019-03-28 10:56:42.94238600 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:56:42.96185100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1279s
INFO  - 2019-03-28 10:56:43.27281100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:56:43.32181700 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1588s
INFO  - 2019-03-28 10:56:46.13104500 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:56:46.14990700 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1238s
INFO  - 2019-03-28 10:56:47.84968700 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:56:47.86747800 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1223s
INFO  - 2019-03-28 10:56:48.92257000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:56:48.94286800 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1336s
INFO  - 2019-03-28 10:56:51.94849300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:56:51.96683400 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1404s
INFO  - 2019-03-28 10:56:53.11675300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:56:53.13495600 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1234s
INFO  - 2019-03-28 10:56:55.95583400 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:56:55.97408200 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1274s
INFO  - 2019-03-28 10:56:57.16031700 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:56:57.17952300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1278s
INFO  - 2019-03-28 10:56:58.21727900 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 10:56:58.23788900 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1641s
INFO  - 2019-03-28 10:57:29.54130300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:sales_input  Method:copy
INFO  - 2019-03-28 10:57:29.74958000 --> [70eee669790f45ebb8848b20d6c03a05]【売上登録処理   START】
INFO  - 2019-03-28 10:57:29.78105500 --> [70eee669790f45ebb8848b20d6c03a05]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (1, 1, now(), '2007', '環境衛生薬品株式会社', '1', '1', '2019/03/31', '2019/03/31', '72', '田村元', '2', '1', '17', '102000', '8160', '110160', NULL, NULL, '31', '東京研究所', '食品', '栄養成分分析', '環境衛生薬品株式会社', '2019/03/01', '2019/03/31', '1', 0)
INFO  - 2019-03-28 10:57:29.80245300 --> [70eee669790f45ebb8848b20d6c03a05]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (1, 1, now(), NULL, '栄養成分分析基本7項目', '1', NULL, '10000', '6', '800', '10000', '10800', '2019/03/8受付、2019/03/12ご報告。・ふれべじ', 65255)
INFO  - 2019-03-28 10:57:29.82239300 --> [70eee669790f45ebb8848b20d6c03a05]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (1, 1, now(), NULL, '栄養成分分析　食物繊維', '3', NULL, '24000', '6', '5760', '72000', '77760', '2019/03/12受付、2019/03/25ご報告。・ＯＣ店小川プレミアムブレンド抽出液　・ＯＣ店コーヒーショップブレンド抽出液　\r\n・ＯＣ店小川プレミアムブレンド粉', 65255)
INFO  - 2019-03-28 10:57:29.84089100 --> [70eee669790f45ebb8848b20d6c03a05]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (1, 1, now(), NULL, '栄養成分分析基本7項目', '2', NULL, '10000', '6', '1600', '20000', '21600', '2019/03/20受付、2019/03/26ご報告。　・八幡巻　・焼あなご', 65255)
INFO  - 2019-03-28 10:57:29.97724200 --> [70eee669790f45ebb8848b20d6c03a05]【INSERT】PROCESS: Receivable_mng_mdl->_regist_mng SQL: INSERT INTO `t_receivable_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `target_month`, `customer_id`, `customer_disp_name`, `institute_id`, `institute_name`, `depart_id`, `depart_name`, `sales_money`) VALUES (1, 1, now(), '201903', '2007', '環境衛生薬品株式会社', NULL, NULL, NULL, NULL, '110160')
INFO  - 2019-03-28 10:57:29.99451900 --> [70eee669790f45ebb8848b20d6c03a05]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (1, 1, now(), 38148, 65255, '2019/03/31', '110160')
INFO  - 2019-03-28 10:57:30.02781400 --> [70eee669790f45ebb8848b20d6c03a05]【売上登録処理   END】
INFO  - 2019-03-28 10:57:30.09717300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.6960s
INFO  - 2019-03-28 10:57:32.26460200 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:sales_list  Method:index
INFO  - 2019-03-28 10:57:33.19104300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:sales_list  Method:index execution time=0.9992s
INFO  - 2019-03-28 11:20:24.29311300 --> [2c4417383f46f121ee1f98662cdc6ada]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-03-28 11:20:24.31431600 --> [2c4417383f46f121ee1f98662cdc6ada]<PROCESS-END> Controller:login  Method:index execution time=0.1541s
INFO  - 2019-03-28 11:20:48.74199300 --> [2c4417383f46f121ee1f98662cdc6ada]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-03-28 11:20:48.90317000 --> [2c4417383f46f121ee1f98662cdc6ada]<PROCESS-START> USER-ID: 15 Controller:top  Method:index
INFO  - 2019-03-28 11:20:53.97314900 --> [2c4417383f46f121ee1f98662cdc6ada]<PROCESS-END> Controller:top  Method:index execution time=5.1115s
INFO  - 2019-03-28 11:20:54.39217700 --> [2c4417383f46f121ee1f98662cdc6ada]<PROCESS-START> USER-ID: 15 Controller:ajax  Method:daily_cnt_info
INFO  - 2019-03-28 11:20:54.79238800 --> [2c4417383f46f121ee1f98662cdc6ada]<PROCESS-END> Controller:ajax  Method:daily_cnt_info execution time=0.5164s
INFO  - 2019-03-28 11:20:57.42478900 --> [2c4417383f46f121ee1f98662cdc6ada]<PROCESS-START> USER-ID: 15 Controller:sales_spec_print  Method:index
INFO  - 2019-03-28 11:20:57.52587100 --> [2c4417383f46f121ee1f98662cdc6ada]<PROCESS-END> Controller:sales_spec_print  Method:index execution time=0.1808s
INFO  - 2019-03-28 11:21:11.28345700 --> [2c4417383f46f121ee1f98662cdc6ada]<PROCESS-START> USER-ID: 15 Controller:sales_spec_print  Method:index
ERROR - 2019-03-28 11:21:12.54535100 --> [2c4417383f46f121ee1f98662cdc6ada]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"2c4417383f46f121ee1f98662cdc6ada";s:10:"ip_address";s:14:"172.123.156.15";s:10:"user_agent";s:102:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36";s:13:"last_activity";i:1553739624;}6b0a7f5fbc71e0025976f448d8acfda5||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:231(CI_Session->set_userdata) [tab_menu||Array]
D:\SKK_APP\application\hooks\Pre_display.php:170(Pre_display->_get_tab_menu)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

ERROR - 2019-03-28 11:21:12.58039800 --> [2c4417383f46f121ee1f98662cdc6ada]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"2c4417383f46f121ee1f98662cdc6ada";s:10:"ip_address";s:14:"172.123.156.15";s:10:"user_agent";s:102:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36";s:13:"last_activity";i:1553739624;}6b0a7f5fbc71e0025976f448d8acfda5||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:275(CI_Session->set_userdata) [local_menu||Array]
D:\SKK_APP\application\hooks\Pre_display.php:173(Pre_display->_get_local_menu)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

ERROR - 2019-03-28 11:21:12.62051400 --> [2c4417383f46f121ee1f98662cdc6ada]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"2c4417383f46f121ee1f98662cdc6ada";s:10:"ip_address";s:14:"172.123.156.15";s:10:"user_agent";s:102:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36";s:13:"last_activity";i:1553739624;}6b0a7f5fbc71e0025976f448d8acfda5||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:308(CI_Session->set_userdata) [page_info||Array]
D:\SKK_APP\application\hooks\Pre_display.php:186(Pre_display->_get_page_info)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

INFO  - 2019-03-28 11:21:12.64110200 --> [2c4417383f46f121ee1f98662cdc6ada]<PROCESS-END> Controller:sales_spec_print  Method:index execution time=1.3916s
INFO  - 2019-03-28 11:23:27.89200400 --> [2c4417383f46f121ee1f98662cdc6ada]<PROCESS-START> USER-ID: 15 Controller:sales_spec_print  Method:index
INFO  - 2019-03-28 11:23:28.53244000 --> [2c4417383f46f121ee1f98662cdc6ada]<PROCESS-START> USER-ID: 15 Controller:sales_spec_print  Method:index
ERROR - 2019-03-28 11:23:29.03598100 --> [2c4417383f46f121ee1f98662cdc6ada]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"2c4417383f46f121ee1f98662cdc6ada";s:10:"ip_address";s:14:"172.123.156.15";s:10:"user_agent";s:102:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36";s:13:"last_activity";i:1553739624;}6b0a7f5fbc71e0025976f448d8acfda5||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:231(CI_Session->set_userdata) [tab_menu||Array]
D:\SKK_APP\application\hooks\Pre_display.php:170(Pre_display->_get_tab_menu)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

ERROR - 2019-03-28 11:23:29.06731900 --> [2c4417383f46f121ee1f98662cdc6ada]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"2c4417383f46f121ee1f98662cdc6ada";s:10:"ip_address";s:14:"172.123.156.15";s:10:"user_agent";s:102:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36";s:13:"last_activity";i:1553739624;}6b0a7f5fbc71e0025976f448d8acfda5||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:275(CI_Session->set_userdata) [local_menu||Array]
D:\SKK_APP\application\hooks\Pre_display.php:173(Pre_display->_get_local_menu)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

ERROR - 2019-03-28 11:23:29.09922600 --> [2c4417383f46f121ee1f98662cdc6ada]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"2c4417383f46f121ee1f98662cdc6ada";s:10:"ip_address";s:14:"172.123.156.15";s:10:"user_agent";s:102:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36";s:13:"last_activity";i:1553739624;}6b0a7f5fbc71e0025976f448d8acfda5||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:308(CI_Session->set_userdata) [page_info||Array]
D:\SKK_APP\application\hooks\Pre_display.php:186(Pre_display->_get_page_info)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

ERROR - 2019-03-28 11:23:29.62207000 --> [2c4417383f46f121ee1f98662cdc6ada]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"2c4417383f46f121ee1f98662cdc6ada";s:10:"ip_address";s:14:"172.123.156.15";s:10:"user_agent";s:102:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36";s:13:"last_activity";i:1553739624;}6b0a7f5fbc71e0025976f448d8acfda5||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:231(CI_Session->set_userdata) [tab_menu||Array]
D:\SKK_APP\application\hooks\Pre_display.php:170(Pre_display->_get_tab_menu)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

ERROR - 2019-03-28 11:23:29.65806600 --> [2c4417383f46f121ee1f98662cdc6ada]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"2c4417383f46f121ee1f98662cdc6ada";s:10:"ip_address";s:14:"172.123.156.15";s:10:"user_agent";s:102:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36";s:13:"last_activity";i:1553739624;}6b0a7f5fbc71e0025976f448d8acfda5||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:275(CI_Session->set_userdata) [local_menu||Array]
D:\SKK_APP\application\hooks\Pre_display.php:173(Pre_display->_get_local_menu)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

ERROR - 2019-03-28 11:23:29.70184400 --> [2c4417383f46f121ee1f98662cdc6ada]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"2c4417383f46f121ee1f98662cdc6ada";s:10:"ip_address";s:14:"172.123.156.15";s:10:"user_agent";s:102:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36";s:13:"last_activity";i:1553739624;}6b0a7f5fbc71e0025976f448d8acfda5||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:308(CI_Session->set_userdata) [page_info||Array]
D:\SKK_APP\application\hooks\Pre_display.php:186(Pre_display->_get_page_info)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

INFO  - 2019-03-28 11:23:29.72289000 --> [2c4417383f46f121ee1f98662cdc6ada]<PROCESS-END> Controller:sales_spec_print  Method:index execution time=1.2189s
INFO  - 2019-03-28 11:23:31.77372300 --> [2c4417383f46f121ee1f98662cdc6ada]<PROCESS-START> USER-ID: 15 Controller:sales_spec_print  Method:index
ERROR - 2019-03-28 11:23:32.98318300 --> [2c4417383f46f121ee1f98662cdc6ada]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"2c4417383f46f121ee1f98662cdc6ada";s:10:"ip_address";s:14:"172.123.156.15";s:10:"user_agent";s:102:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36";s:13:"last_activity";i:1553739624;}6b0a7f5fbc71e0025976f448d8acfda5||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:231(CI_Session->set_userdata) [tab_menu||Array]
D:\SKK_APP\application\hooks\Pre_display.php:170(Pre_display->_get_tab_menu)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

ERROR - 2019-03-28 11:23:33.02691800 --> [2c4417383f46f121ee1f98662cdc6ada]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"2c4417383f46f121ee1f98662cdc6ada";s:10:"ip_address";s:14:"172.123.156.15";s:10:"user_agent";s:102:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36";s:13:"last_activity";i:1553739624;}6b0a7f5fbc71e0025976f448d8acfda5||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:275(CI_Session->set_userdata) [local_menu||Array]
D:\SKK_APP\application\hooks\Pre_display.php:173(Pre_display->_get_local_menu)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

ERROR - 2019-03-28 11:23:33.07067500 --> [2c4417383f46f121ee1f98662cdc6ada]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"2c4417383f46f121ee1f98662cdc6ada";s:10:"ip_address";s:14:"172.123.156.15";s:10:"user_agent";s:102:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36";s:13:"last_activity";i:1553739624;}6b0a7f5fbc71e0025976f448d8acfda5||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:308(CI_Session->set_userdata) [page_info||Array]
D:\SKK_APP\application\hooks\Pre_display.php:186(Pre_display->_get_page_info)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

INFO  - 2019-03-28 11:23:33.09381400 --> [2c4417383f46f121ee1f98662cdc6ada]<PROCESS-END> Controller:sales_spec_print  Method:index execution time=1.3342s
INFO  - 2019-03-28 11:23:42.10462200 --> [2c4417383f46f121ee1f98662cdc6ada]<PROCESS-START> USER-ID: 15 Controller:sales_spec_print  Method:index
ERROR - 2019-03-28 11:23:43.36177200 --> [2c4417383f46f121ee1f98662cdc6ada]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"2c4417383f46f121ee1f98662cdc6ada";s:10:"ip_address";s:14:"172.123.156.15";s:10:"user_agent";s:102:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36";s:13:"last_activity";i:1553739624;}6b0a7f5fbc71e0025976f448d8acfda5||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:231(CI_Session->set_userdata) [tab_menu||Array]
D:\SKK_APP\application\hooks\Pre_display.php:170(Pre_display->_get_tab_menu)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

ERROR - 2019-03-28 11:23:43.40546400 --> [2c4417383f46f121ee1f98662cdc6ada]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"2c4417383f46f121ee1f98662cdc6ada";s:10:"ip_address";s:14:"172.123.156.15";s:10:"user_agent";s:102:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36";s:13:"last_activity";i:1553739624;}6b0a7f5fbc71e0025976f448d8acfda5||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:275(CI_Session->set_userdata) [local_menu||Array]
D:\SKK_APP\application\hooks\Pre_display.php:173(Pre_display->_get_local_menu)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

ERROR - 2019-03-28 11:23:43.44935500 --> [2c4417383f46f121ee1f98662cdc6ada]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"2c4417383f46f121ee1f98662cdc6ada";s:10:"ip_address";s:14:"172.123.156.15";s:10:"user_agent";s:102:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36";s:13:"last_activity";i:1553739624;}6b0a7f5fbc71e0025976f448d8acfda5||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:308(CI_Session->set_userdata) [page_info||Array]
D:\SKK_APP\application\hooks\Pre_display.php:186(Pre_display->_get_page_info)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

INFO  - 2019-03-28 11:23:43.48601300 --> [2c4417383f46f121ee1f98662cdc6ada]<PROCESS-END> Controller:sales_spec_print  Method:index execution time=1.3778s
INFO  - 2019-03-28 11:23:43.89837900 --> [2c4417383f46f121ee1f98662cdc6ada]<PROCESS-START> USER-ID: 15 Controller:sales_spec_print  Method:index
ERROR - 2019-03-28 11:23:45.11173100 --> [2c4417383f46f121ee1f98662cdc6ada]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"2c4417383f46f121ee1f98662cdc6ada";s:10:"ip_address";s:14:"172.123.156.15";s:10:"user_agent";s:102:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36";s:13:"last_activity";i:1553739624;}6b0a7f5fbc71e0025976f448d8acfda5||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:231(CI_Session->set_userdata) [tab_menu||Array]
D:\SKK_APP\application\hooks\Pre_display.php:170(Pre_display->_get_tab_menu)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

ERROR - 2019-03-28 11:23:45.15537100 --> [2c4417383f46f121ee1f98662cdc6ada]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"2c4417383f46f121ee1f98662cdc6ada";s:10:"ip_address";s:14:"172.123.156.15";s:10:"user_agent";s:102:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36";s:13:"last_activity";i:1553739624;}6b0a7f5fbc71e0025976f448d8acfda5||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:275(CI_Session->set_userdata) [local_menu||Array]
D:\SKK_APP\application\hooks\Pre_display.php:173(Pre_display->_get_local_menu)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

ERROR - 2019-03-28 11:23:45.19915500 --> [2c4417383f46f121ee1f98662cdc6ada]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"2c4417383f46f121ee1f98662cdc6ada";s:10:"ip_address";s:14:"172.123.156.15";s:10:"user_agent";s:102:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36";s:13:"last_activity";i:1553739624;}6b0a7f5fbc71e0025976f448d8acfda5||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:308(CI_Session->set_userdata) [page_info||Array]
D:\SKK_APP\application\hooks\Pre_display.php:186(Pre_display->_get_page_info)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

INFO  - 2019-03-28 11:23:45.22236800 --> [2c4417383f46f121ee1f98662cdc6ada]<PROCESS-END> Controller:sales_spec_print  Method:index execution time=1.3419s
INFO  - 2019-03-28 11:26:12.85288500 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:sales_list  Method:index
INFO  - 2019-03-28 11:26:13.81730300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:sales_list  Method:index execution time=1.0450s
INFO  - 2019-03-28 11:26:17.17528700 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:sales_input  Method:edit
INFO  - 2019-03-28 11:26:17.31043500 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:sales_input  Method:edit execution time=0.1965s
INFO  - 2019-03-28 11:26:23.19251600 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 11:26:23.21688600 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1311s
INFO  - 2019-03-28 11:26:23.94656100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 11:26:23.97190700 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1381s
INFO  - 2019-03-28 11:26:26.09095400 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 11:26:26.11543700 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1655s
INFO  - 2019-03-28 11:26:26.79655600 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 11:26:26.81922400 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1373s
INFO  - 2019-03-28 11:26:28.07307200 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 11:26:28.09730000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1643s
INFO  - 2019-03-28 11:26:37.69867400 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:sales_input  Method:edit
INFO  - 2019-03-28 11:26:37.91573900 --> [70eee669790f45ebb8848b20d6c03a05]【売上変更処理   START】
INFO  - 2019-03-28 11:26:37.94923800 --> [70eee669790f45ebb8848b20d6c03a05]【UPDATE】PROCESS: Sales_mdl->update_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 1, `last_datetime` = now(), `customer_id` = '2007', `customer_disp_name` = '環境衛生薬品株式会社', `credit_type` = '1', `customer_type` = '1', `bill_date` = '2019/03/31', `book_date` = '2019/03/31', `handler_id` = '72', `handler_name` = '田村元', `institute_id` = '2', `depart_id` = '1', `abstract_id` = '17', `sum_no_tax` = '102000', `sum_tax` = '8160', `sum_money` = '110160', `sep_month_from` = NULL, `sep_month_to` = NULL, `cutoff_date` = '31', `institute_name` = '東京研究所', `depart_name` = '食品', `abstract_name` = '栄養成分分析', `customer_name` = '環境衛生薬品株式会社', `cutoff_date_from` = '2019/03/01', `cutoff_date_to` = '2019/03/31', `data_status_type` = '1', `sep_depart_flg` = 0 WHERE `sales_mng_id` =  '65255'
INFO  - 2019-03-28 11:26:37.97294500 --> [70eee669790f45ebb8848b20d6c03a05]【DELETE(物理削除)】PROCESS: Sales_mdl->update_data SQL: DELETE FROM `t_sales_detail`
WHERE `sales_mng_id` =  '65255'
INFO  - 2019-03-28 11:26:38.01056200 --> [70eee669790f45ebb8848b20d6c03a05]【UPDATE】PROCESS: Sales_mdl->nullupdate_outside_relation SQL: UPDATE `t_outside_relation` SET `sales_mng_id` = NULL, `sales_detail_id` = NULL, `last_user_id` = 1, `last_datetime` = now() WHERE `sales_mng_id` =  '65255'
INFO  - 2019-03-28 11:26:38.03305400 --> [70eee669790f45ebb8848b20d6c03a05]【INSERT】PROCESS: Sales_mdl->update_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (1, 1, now(), NULL, '栄養成分分析基本7項目', '1', NULL, '10000', '6', '800', '10000', '10800', '2019/03/8受付、2019/03/12ご報告。・ふれべじ', '65255')
INFO  - 2019-03-28 11:26:38.05422100 --> [70eee669790f45ebb8848b20d6c03a05]【INSERT】PROCESS: Sales_mdl->update_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (1, 1, now(), NULL, '栄養成分分析　食物繊維', '3', NULL, '24000', '6', '5760', '72000', '77760', '2019/03/12受付、2019/03/25ご報告。・ＯＣ店小川プレミアムブレンド抽出液　・ＯＣ店コーヒーショップブレンド抽出液　\r\n・ＯＣ店小川プレミアムブレンド粉', '65255')
INFO  - 2019-03-28 11:26:38.07743400 --> [70eee669790f45ebb8848b20d6c03a05]【INSERT】PROCESS: Sales_mdl->update_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (1, 1, now(), NULL, '栄養成分分析基本7項目', '2', NULL, '10000', '6', '1600', '20000', '21600', '2019/03/20受付、2019/03/26ご報告。　・八幡巻　・焼あなご(並）', '65255')
INFO  - 2019-03-28 11:26:38.09984600 --> [70eee669790f45ebb8848b20d6c03a05]【DELETE(物理削除)】PROCESS: Sales_mdl->update_data SQL: DELETE FROM `t_sales_before`
WHERE `sales_mng_id` =  '65255'
INFO  - 2019-03-28 11:26:38.12182400 --> [70eee669790f45ebb8848b20d6c03a05]【DELETE(物理削除)】PROCESS: Sales_mdl->update_data SQL: DELETE FROM `t_sales_depart`
WHERE `sales_mng_id` =  '65255'
INFO  - 2019-03-28 11:26:38.35158500 --> [70eee669790f45ebb8848b20d6c03a05]【DELETE(物理削除)】PROCESS: Receivable_mng_mdl->back_sales_data SQL: DELETE FROM `t_receivable_data`
WHERE `sales_mng_id` =  '65255'
INFO  - 2019-03-28 11:26:38.37409400 --> [70eee669790f45ebb8848b20d6c03a05]【UPDATE】PROCESS: Receivable_mng_mdl->back_sales_data SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money - 110160, `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '38148'
INFO  - 2019-03-28 11:26:38.40292100 --> [70eee669790f45ebb8848b20d6c03a05]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_mng SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money + 110160, `last_user_id` = 1, `last_datetime` = now() WHERE `target_month` =  '201903' AND `customer_disp_name` =  '環境衛生薬品株式会社' AND `institute_id` IS NULL AND `depart_id` IS NULL
INFO  - 2019-03-28 11:26:38.42724900 --> [70eee669790f45ebb8848b20d6c03a05]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (1, 1, now(), '38148', '65255', '2019/03/31', '110160')
INFO  - 2019-03-28 11:26:38.47052700 --> [70eee669790f45ebb8848b20d6c03a05]【売上変更処理   END】
INFO  - 2019-03-28 11:26:38.55575700 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:sales_input  Method:edit execution time=0.9609s
INFO  - 2019-03-28 11:29:42.58841300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:sales_list  Method:index
INFO  - 2019-03-28 11:29:43.61082700 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:sales_list  Method:index execution time=1.1004s
INFO  - 2019-03-28 11:29:57.50688300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_tran_list
INFO  - 2019-03-28 11:29:57.78188800 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:customer_tran_list execution time=0.4119s
INFO  - 2019-03-28 11:29:57.87340200 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_tran_list
INFO  - 2019-03-28 11:29:58.14324000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:customer_tran_list execution time=0.3752s
INFO  - 2019-03-28 11:29:58.59554300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_tran_list
INFO  - 2019-03-28 11:29:58.85912000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:customer_tran_list execution time=0.3790s
INFO  - 2019-03-28 11:29:59.23274900 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_tran_list
INFO  - 2019-03-28 11:29:59.50222500 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:customer_tran_list execution time=0.3790s
INFO  - 2019-03-28 11:30:02.67160500 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:master_file_print  Method:index
INFO  - 2019-03-28 11:30:05.05705500 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:master_file_print  Method:index execution time=2.4454s
INFO  - 2019-03-28 11:30:22.75301800 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:bill_cutoff_print  Method:bill_disp
INFO  - 2019-03-28 11:30:22.80924400 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:bill_cutoff_print  Method:bill_disp execution time=0.1677s
INFO  - 2019-03-28 11:30:50.87007700 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_tran_list
INFO  - 2019-03-28 11:30:51.13609200 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:customer_tran_list execution time=0.3739s
INFO  - 2019-03-28 11:30:51.34095800 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_tran_list
INFO  - 2019-03-28 11:30:51.59768500 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:customer_tran_list execution time=0.4066s
INFO  - 2019-03-28 11:30:54.66779900 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:master_file_print  Method:index
INFO  - 2019-03-28 11:30:57.13706600 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:master_file_print  Method:index execution time=2.5474s
INFO  - 2019-03-28 11:46:28.25831600 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:sales_list  Method:index
INFO  - 2019-03-28 11:46:29.25595600 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:sales_list  Method:index execution time=1.0846s
INFO  - 2019-03-28 11:46:33.73088300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:sales_input  Method:edit
INFO  - 2019-03-28 11:46:33.85323700 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:sales_input  Method:edit execution time=0.1895s
INFO  - 2019-03-28 11:46:54.49243300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:sales_input  Method:edit
INFO  - 2019-03-28 11:46:54.57253000 --> [70eee669790f45ebb8848b20d6c03a05]【売上変更処理   START】
INFO  - 2019-03-28 11:46:54.60656000 --> [70eee669790f45ebb8848b20d6c03a05]【UPDATE】PROCESS: Sales_mdl->update_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 1, `last_datetime` = now(), `customer_id` = '2039', `customer_disp_name` = '株式会社叶匠壽庵', `credit_type` = '1', `customer_type` = '1', `bill_date` = '2019/03/25', `book_date` = '2019/03/25', `handler_id` = '38', `handler_name` = '町田智佳子', `institute_id` = '1', `depart_id` = '1', `abstract_id` = '17', `sum_no_tax` = '56000', `sum_tax` = '4480', `sum_money` = '60480', `sep_month_from` = NULL, `sep_month_to` = NULL, `cutoff_date` = NULL, `institute_name` = '大阪研究所', `depart_name` = '食品', `abstract_name` = '栄養成分分析', `customer_name` = '株式会社叶匠壽庵', `cutoff_date_from` = NULL, `cutoff_date_to` = NULL, `sep_depart_flg` = 0 WHERE `sales_mng_id` =  '65184'
INFO  - 2019-03-28 11:46:54.63059600 --> [70eee669790f45ebb8848b20d6c03a05]【DELETE(物理削除)】PROCESS: Sales_mdl->update_data SQL: DELETE FROM `t_sales_detail`
WHERE `sales_mng_id` =  '65184'
INFO  - 2019-03-28 11:46:54.66752600 --> [70eee669790f45ebb8848b20d6c03a05]【UPDATE】PROCESS: Sales_mdl->nullupdate_outside_relation SQL: UPDATE `t_outside_relation` SET `sales_mng_id` = NULL, `sales_detail_id` = NULL, `last_user_id` = 1, `last_datetime` = now() WHERE `sales_mng_id` =  '65184'
INFO  - 2019-03-28 11:46:54.69157000 --> [70eee669790f45ebb8848b20d6c03a05]【INSERT】PROCESS: Sales_mdl->update_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (1, 1, now(), NULL, '栄養成分分析基本7項目', '1', NULL, '10000', '6', '800', '10000', '10800', '受付日　2019/03/05　ご報告日　2019/03/08　・楽歳', '65184')
INFO  - 2019-03-28 11:46:54.71540800 --> [70eee669790f45ebb8848b20d6c03a05]【INSERT】PROCESS: Sales_mdl->update_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (1, 1, now(), NULL, '栄養成分分析基本7項目特急料金', '1', NULL, '16000', '6', '1280', '16000', '17280', '受付日　2019/03/13　ご報告日　2019/03/15　・夏の玉露地', '65184')
INFO  - 2019-03-28 11:46:54.73840600 --> [70eee669790f45ebb8848b20d6c03a05]【INSERT】PROCESS: Sales_mdl->update_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (1, 1, now(), NULL, '栄養成分分析基本7項目', '1', NULL, '10000', '6', '800', '10000', '10800', '受付日　2019/03/15　ご報告日　2019/03/19　・郷の氷室(梅）', '65184')
INFO  - 2019-03-28 11:46:54.76272800 --> [70eee669790f45ebb8848b20d6c03a05]【INSERT】PROCESS: Sales_mdl->update_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (1, 1, now(), NULL, '栄養成分分析基本7項目', '2', NULL, '10000', '6', '1600', '20000', '21600', '受付日　2019/03/7　ご報告日　2019/03/11　・雲門　・季節の雲門', '65184')
INFO  - 2019-03-28 11:46:54.78565700 --> [70eee669790f45ebb8848b20d6c03a05]【DELETE(物理削除)】PROCESS: Sales_mdl->update_data SQL: DELETE FROM `t_sales_before`
WHERE `sales_mng_id` =  '65184'
INFO  - 2019-03-28 11:46:54.80786700 --> [70eee669790f45ebb8848b20d6c03a05]【DELETE(物理削除)】PROCESS: Sales_mdl->update_data SQL: DELETE FROM `t_sales_depart`
WHERE `sales_mng_id` =  '65184'
INFO  - 2019-03-28 11:46:54.98610500 --> [70eee669790f45ebb8848b20d6c03a05]【DELETE(物理削除)】PROCESS: Receivable_mng_mdl->back_sales_data SQL: DELETE FROM `t_receivable_data`
WHERE `sales_mng_id` =  '65184'
INFO  - 2019-03-28 11:46:55.01128400 --> [70eee669790f45ebb8848b20d6c03a05]【UPDATE】PROCESS: Receivable_mng_mdl->back_sales_data SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money - 60480, `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37878'
INFO  - 2019-03-28 11:46:55.04067600 --> [70eee669790f45ebb8848b20d6c03a05]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_mng SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money + 60480, `last_user_id` = 1, `last_datetime` = now() WHERE `target_month` =  '201903' AND `customer_disp_name` =  '株式会社叶匠壽庵' AND `institute_id` =  '1' AND `depart_id` =  '1'
INFO  - 2019-03-28 11:46:55.06709300 --> [70eee669790f45ebb8848b20d6c03a05]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (1, 1, now(), '37878', '65184', '2019/03/25', '60480')
INFO  - 2019-03-28 11:46:55.12655500 --> [70eee669790f45ebb8848b20d6c03a05]【売上変更処理   END】
INFO  - 2019-03-28 11:46:55.20369000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:sales_input  Method:edit execution time=0.8309s
INFO  - 2019-03-28 11:46:56.96094400 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:sales_list  Method:index
INFO  - 2019-03-28 11:46:57.95510600 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:sales_list  Method:index execution time=1.0717s
INFO  - 2019-03-28 11:46:59.65661600 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:bill_sales_print  Method:index
INFO  - 2019-03-28 11:47:01.06094300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=1.4823s
INFO  - 2019-03-28 11:47:08.19667400 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:bill_sales_print  Method:output
INFO  - 2019-03-28 11:47:08.22226600 --> [70eee669790f45ebb8848b20d6c03a05]【請求書発行処理   START)】
INFO  - 2019-03-28 11:47:08.25298800 --> [70eee669790f45ebb8848b20d6c03a05]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (1, 1, now(), 'SKK0049871', 'S', '2019/03/28', '1', '株式会社叶匠壽庵', '株式会社叶匠壽庵', '60480', '2019/03/25', '2039')
INFO  - 2019-03-28 11:47:08.27830600 --> [70eee669790f45ebb8848b20d6c03a05]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (1, 1, now(), 50196, '65184')
INFO  - 2019-03-28 11:47:08.30267900 --> [70eee669790f45ebb8848b20d6c03a05]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 1, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049871' WHERE `sales_mng_id` =  '65184'
INFO  - 2019-03-28 11:47:08.92608900 --> [70eee669790f45ebb8848b20d6c03a05]【請求書発行処理   END)】
INFO  - 2019-03-28 11:47:08.99901100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:bill_sales_print  Method:output execution time=0.9110s
INFO  - 2019-03-28 11:47:10.69312400 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:bill_sales_print  Method:index
INFO  - 2019-03-28 11:47:13.83221100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=3.2157s
INFO  - 2019-03-28 11:47:19.20572200 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-03-28 11:47:19.23252700 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1529s
INFO  - 2019-03-28 13:11:54.07421000 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_tran_list
INFO  - 2019-03-28 13:11:54.32894100 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:customer_tran_list execution time=0.3931s
INFO  - 2019-03-28 13:11:54.39429300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_tran_list
INFO  - 2019-03-28 13:11:54.66358700 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:ajax  Method:customer_tran_list execution time=0.3947s
INFO  - 2019-03-28 13:11:58.03580800 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:master_file_print  Method:index
INFO  - 2019-03-28 13:12:00.58913200 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:master_file_print  Method:index execution time=2.6109s
INFO  - 2019-03-28 13:12:07.93155500 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:bill_cutoff_print  Method:bill_disp
INFO  - 2019-03-28 13:12:07.95768300 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:bill_cutoff_print  Method:bill_disp execution time=0.1431s
INFO  - 2019-03-28 13:14:10.67151900 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-START> USER-ID: 1 Controller:customer_list  Method:index
INFO  - 2019-03-28 13:14:10.81000400 --> [70eee669790f45ebb8848b20d6c03a05]<PROCESS-END> Controller:customer_list  Method:index execution time=0.2029s
INFO  - 2019-03-28 13:40:01.04170700 --> [32c464d03e4678c4f8a6bcad4071b379]<PROCESS-START> USER-ID:  Controller:send_batch  Method:index
INFO  - 2019-03-28 13:40:03.63318600 --> [32c464d03e4678c4f8a6bcad4071b379]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_mng SQL: INSERT INTO `t_outside_send_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `process_datetime`, `record_count`) VALUES (0, 0, now(), '201903281340', 28)
INFO  - 2019-03-28 13:40:03.65792500 --> [32c464d03e4678c4f8a6bcad4071b379]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 300, '4348', '40010301', '40010301', 'SKK0046064', '2018-11-14', '2018-11-14', NULL)
INFO  - 2019-03-28 13:40:03.68016900 --> [32c464d03e4678c4f8a6bcad4071b379]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 300, '5453', '40010851', '40010851', 'SKK0047755', '2019-01-14', '2019-01-14', '2019-03-26')
INFO  - 2019-03-28 13:40:03.70209300 --> [32c464d03e4678c4f8a6bcad4071b379]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 300, '7076', '40011208', '40011208', 'SKK0049918', '2019-03-27', '2019-03-27', NULL)
INFO  - 2019-03-28 13:40:03.72368700 --> [32c464d03e4678c4f8a6bcad4071b379]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 300, '7077', '40011210', '40011210', 'SKK0048908', '2019-02-25', '2019-02-25', NULL)
INFO  - 2019-03-28 13:40:03.74540900 --> [32c464d03e4678c4f8a6bcad4071b379]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 300, '7078', '53106078', '53106078', 'SKK0049574', '2019-03-20', '2019-03-20', NULL)
INFO  - 2019-03-28 13:40:03.76651900 --> [32c464d03e4678c4f8a6bcad4071b379]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 300, '7079', '10005852', '10005852', 'SKK0049895', '2019-03-25', '2019-03-25', NULL)
INFO  - 2019-03-28 13:40:03.78762400 --> [32c464d03e4678c4f8a6bcad4071b379]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 300, '7080', '40011504', '40011504', 'SKK0049902', '2019-03-27', '2019-03-27', NULL)
INFO  - 2019-03-28 13:40:03.80850900 --> [32c464d03e4678c4f8a6bcad4071b379]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 300, '7081', '40011505', '40011505', 'SKK0049903', '2019-03-27', '2019-03-27', NULL)
INFO  - 2019-03-28 13:40:03.83077700 --> [32c464d03e4678c4f8a6bcad4071b379]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 300, '7082', '40011506', '40011506', 'SKK0049904', '2019-03-27', '2019-03-27', NULL)
INFO  - 2019-03-28 13:40:03.85181400 --> [32c464d03e4678c4f8a6bcad4071b379]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 300, '7083', '40011507', '40011507', 'SKK0049905', '2019-03-27', '2019-03-27', NULL)
INFO  - 2019-03-28 13:40:03.87145300 --> [32c464d03e4678c4f8a6bcad4071b379]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 300, '7084', '40011508', '40011508', 'SKK0049906', '2019-03-27', '2019-03-27', NULL)
INFO  - 2019-03-28 13:40:03.89107500 --> [32c464d03e4678c4f8a6bcad4071b379]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 300, '7085', '40011509', '40011509', 'SKK0049907', '2019-03-27', '2019-03-27', NULL)
INFO  - 2019-03-28 13:40:03.90981100 --> [32c464d03e4678c4f8a6bcad4071b379]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 300, '7086', '40011510', '40011510', 'SKK0049908', '2019-03-27', '2019-03-27', NULL)
INFO  - 2019-03-28 13:40:03.92841000 --> [32c464d03e4678c4f8a6bcad4071b379]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 300, '7087', '40011511', '40011511', 'SKK0049909', '2019-03-27', '2019-03-27', NULL)
INFO  - 2019-03-28 13:40:03.94701400 --> [32c464d03e4678c4f8a6bcad4071b379]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 300, '7088', '40011512', '40011512', 'SKK0049910', '2019-03-27', '2019-03-27', NULL)
INFO  - 2019-03-28 13:40:03.96553200 --> [32c464d03e4678c4f8a6bcad4071b379]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 300, '7089', '40011513', '40011513', 'SKK0049911', '2019-03-27', '2019-03-27', NULL)
INFO  - 2019-03-28 13:40:03.98413100 --> [32c464d03e4678c4f8a6bcad4071b379]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 300, '7090', '40011514', '40011514', 'SKK0049912', '2019-03-27', '2019-03-27', NULL)
INFO  - 2019-03-28 13:40:04.00427200 --> [32c464d03e4678c4f8a6bcad4071b379]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 300, '7091', '40011515', '40011515', 'SKK0049913', '2019-03-27', '2019-03-27', NULL)
INFO  - 2019-03-28 13:40:04.02451400 --> [32c464d03e4678c4f8a6bcad4071b379]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 300, '7092', '40011516', '40011516', 'SKK0049914', '2019-03-27', '2019-03-27', NULL)
INFO  - 2019-03-28 13:40:04.04462300 --> [32c464d03e4678c4f8a6bcad4071b379]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 300, '7093', '40011517', '40011517', 'SKK0049915', '2019-03-27', '2019-03-27', NULL)
INFO  - 2019-03-28 13:40:04.06449000 --> [32c464d03e4678c4f8a6bcad4071b379]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 300, '7094', '40011518', '40011518', 'SKK0049916', '2019-03-27', '2019-03-27', NULL)
INFO  - 2019-03-28 13:40:04.08358100 --> [32c464d03e4678c4f8a6bcad4071b379]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 300, '7095', '40011519', '40011519', 'SKK0049917', '2019-03-27', '2019-03-27', NULL)
INFO  - 2019-03-28 13:40:04.10324000 --> [32c464d03e4678c4f8a6bcad4071b379]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 300, '7097', '10005928', '10005928', 'SKK0049921', '2019-03-26', '2019-03-26', NULL)
INFO  - 2019-03-28 13:40:04.12756100 --> [32c464d03e4678c4f8a6bcad4071b379]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 300, '7098', '30002197', '30002197', 'SKK0049920', '2019-03-26', '2019-03-26', NULL)
INFO  - 2019-03-28 13:40:04.15247900 --> [32c464d03e4678c4f8a6bcad4071b379]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 300, '7099', '53106199', '53106199', 'SKK0049932', '2019-03-27', '2019-03-27', NULL)
INFO  - 2019-03-28 13:40:04.17692200 --> [32c464d03e4678c4f8a6bcad4071b379]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 300, '7103', '30002193', '30002193', 'SKK0049924', '2019-03-25', '2019-03-25', NULL)
INFO  - 2019-03-28 13:40:04.20227300 --> [32c464d03e4678c4f8a6bcad4071b379]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 300, '7104', '30002194', '30002194', 'SKK0049925', '2019-03-23', '2019-03-23', NULL)
INFO  - 2019-03-28 13:40:04.22639900 --> [32c464d03e4678c4f8a6bcad4071b379]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 300, '7105', '30002199', '30002199', 'SKK0049927', '2019-03-27', '2019-03-27', NULL)
INFO  - 2019-03-28 13:40:04.24947200 --> [32c464d03e4678c4f8a6bcad4071b379]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 8192, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '4348'
INFO  - 2019-03-28 13:40:04.27243000 --> [32c464d03e4678c4f8a6bcad4071b379]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'credited', `outside_send_data_id` = 8193, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '5453'
INFO  - 2019-03-28 13:40:04.29713100 --> [32c464d03e4678c4f8a6bcad4071b379]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 8194, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '7076'
INFO  - 2019-03-28 13:40:04.32113400 --> [32c464d03e4678c4f8a6bcad4071b379]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 8195, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '7077'
INFO  - 2019-03-28 13:40:04.34520300 --> [32c464d03e4678c4f8a6bcad4071b379]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 8196, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '7078'
INFO  - 2019-03-28 13:40:04.36962200 --> [32c464d03e4678c4f8a6bcad4071b379]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 8197, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '7079'
INFO  - 2019-03-28 13:40:04.39400000 --> [32c464d03e4678c4f8a6bcad4071b379]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 8198, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '7080'
INFO  - 2019-03-28 13:40:04.41703800 --> [32c464d03e4678c4f8a6bcad4071b379]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 8199, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '7081'
INFO  - 2019-03-28 13:40:04.43958200 --> [32c464d03e4678c4f8a6bcad4071b379]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 8200, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '7082'
INFO  - 2019-03-28 13:40:04.46504200 --> [32c464d03e4678c4f8a6bcad4071b379]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 8201, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '7083'
INFO  - 2019-03-28 13:40:04.49102200 --> [32c464d03e4678c4f8a6bcad4071b379]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 8202, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '7084'
INFO  - 2019-03-28 13:40:04.51597200 --> [32c464d03e4678c4f8a6bcad4071b379]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 8203, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '7085'
INFO  - 2019-03-28 13:40:04.52909600 --> [32c464d03e4678c4f8a6bcad4071b379]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 8204, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '7086'
INFO  - 2019-03-28 13:40:04.54213700 --> [32c464d03e4678c4f8a6bcad4071b379]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 8205, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '7087'
INFO  - 2019-03-28 13:40:04.55511100 --> [32c464d03e4678c4f8a6bcad4071b379]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 8206, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '7088'
INFO  - 2019-03-28 13:40:04.56820400 --> [32c464d03e4678c4f8a6bcad4071b379]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 8207, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '7089'
INFO  - 2019-03-28 13:40:04.58121300 --> [32c464d03e4678c4f8a6bcad4071b379]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 8208, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '7090'
INFO  - 2019-03-28 13:40:04.59427000 --> [32c464d03e4678c4f8a6bcad4071b379]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 8209, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '7091'
INFO  - 2019-03-28 13:40:04.60730700 --> [32c464d03e4678c4f8a6bcad4071b379]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 8210, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '7092'
INFO  - 2019-03-28 13:40:04.62015600 --> [32c464d03e4678c4f8a6bcad4071b379]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 8211, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '7093'
INFO  - 2019-03-28 13:40:04.63317300 --> [32c464d03e4678c4f8a6bcad4071b379]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 8212, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '7094'
INFO  - 2019-03-28 13:40:04.64613800 --> [32c464d03e4678c4f8a6bcad4071b379]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 8213, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '7095'
INFO  - 2019-03-28 13:40:04.65919700 --> [32c464d03e4678c4f8a6bcad4071b379]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 8214, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '7097'
INFO  - 2019-03-28 13:40:04.67172600 --> [32c464d03e4678c4f8a6bcad4071b379]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 8215, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '7098'
INFO  - 2019-03-28 13:40:04.68423400 --> [32c464d03e4678c4f8a6bcad4071b379]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 8216, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '7099'
INFO  - 2019-03-28 13:40:04.69714400 --> [32c464d03e4678c4f8a6bcad4071b379]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 8217, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '7103'
INFO  - 2019-03-28 13:40:04.70964000 --> [32c464d03e4678c4f8a6bcad4071b379]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 8218, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '7104'
INFO  - 2019-03-28 13:40:04.72211100 --> [32c464d03e4678c4f8a6bcad4071b379]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 8219, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '7105'
INFO  - 2019-03-28 13:40:04.76673000 --> [32c464d03e4678c4f8a6bcad4071b379]<PROCESS-END> Controller:send_batch  Method:index execution time=4.0753s
INFO  - 2019-03-28 14:07:16.11348000 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-28 14:07:18.61011800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=2.5744s
INFO  - 2019-03-28 14:07:20.14357900 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-28 14:07:22.63249800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=2.5635s
INFO  - 2019-03-28 14:07:24.89252200 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-03-28 14:07:24.94640400 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1760s
INFO  - 2019-03-28 14:08:00.15013200 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-28 14:08:03.78237400 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_list  Method:index execution time=3.6983s
INFO  - 2019-03-28 14:08:06.58352700 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-28 14:08:07.53157800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_list  Method:index execution time=1.0257s
INFO  - 2019-03-28 14:08:16.58103100 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:edit
INFO  - 2019-03-28 14:08:16.70445200 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_input  Method:edit execution time=0.1979s
INFO  - 2019-03-28 14:13:18.50916600 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:13:18.52331600 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1357s
INFO  - 2019-03-28 14:13:19.74076600 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:13:19.75497400 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1203s
INFO  - 2019-03-28 14:13:21.14839400 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:13:21.16237000 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1276s
INFO  - 2019-03-28 14:13:23.12581400 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 14:13:23.13984300 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1370s
INFO  - 2019-03-28 14:13:24.17483700 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-03-28 14:13:24.18931600 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1464s
INFO  - 2019-03-28 14:13:25.09148700 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:13:25.10510700 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1471s
INFO  - 2019-03-28 14:13:32.77140300 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 14:13:32.78629600 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1249s
INFO  - 2019-03-28 14:13:33.68030000 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 14:13:33.69458800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1431s
INFO  - 2019-03-28 14:13:34.82371800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 14:13:34.83690500 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1204s
INFO  - 2019-03-28 14:13:36.73035900 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 14:13:36.74416100 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1255s
INFO  - 2019-03-28 14:13:45.17063400 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-03-28 14:13:45.18469000 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1266s
INFO  - 2019-03-28 14:13:46.34484700 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:edit
INFO  - 2019-03-28 14:13:46.47396600 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_input  Method:edit execution time=0.2454s
INFO  - 2019-03-28 14:13:48.05126200 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:edit
INFO  - 2019-03-28 14:13:48.11964800 --> [2ca6fe56775a85babf93783a393b243d]【売上変更処理   START】
INFO  - 2019-03-28 14:13:48.14426700 --> [2ca6fe56775a85babf93783a393b243d]【UPDATE】PROCESS: Sales_mdl->update_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `customer_id` = '532', `customer_disp_name` = '株式会社丸井', `credit_type` = '1', `customer_type` = '1', `bill_date` = '2019/03/20', `book_date` = '2019/03/20', `handler_id` = '40', `handler_name` = '篠岳', `abstract_id` = '1', `sum_no_tax` = '142000', `sum_tax` = '11360', `sum_money` = '153360', `sep_month_from` = NULL, `sep_month_to` = NULL, `cutoff_date` = NULL, `institute_id` = NULL, `institute_name` = NULL, `depart_id` = NULL, `depart_name` = NULL, `abstract_name` = '商品試験', `customer_name` = '株式会社丸井', `cutoff_date_from` = NULL, `cutoff_date_to` = NULL, `data_status_type` = '1', `sep_depart_flg` = 1 WHERE `sales_mng_id` =  '64921'
INFO  - 2019-03-28 14:13:48.15753900 --> [2ca6fe56775a85babf93783a393b243d]【DELETE(物理削除)】PROCESS: Sales_mdl->update_data SQL: DELETE FROM `t_sales_detail`
WHERE `sales_mng_id` =  '64921'
INFO  - 2019-03-28 14:13:48.18452500 --> [2ca6fe56775a85babf93783a393b243d]【UPDATE】PROCESS: Sales_mdl->nullupdate_outside_relation SQL: UPDATE `t_outside_relation` SET `sales_mng_id` = NULL, `sales_detail_id` = NULL, `last_user_id` = 2, `last_datetime` = now() WHERE `sales_mng_id` =  '64921'
INFO  - 2019-03-28 14:13:48.19794900 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Sales_mdl->update_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), NULL, 'レストラン・喫茶・食物販　衛生検査', '12', '店舗', NULL, '6', '6720', '84000', '90720', '定借テナント（再検査）', '64921')
INFO  - 2019-03-28 14:13:48.21023900 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Sales_mdl->update_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), NULL, 'レストラン・喫茶・食物販　衛生検査', '5', '店舗', NULL, '6', '3680', '46000', '49680', '消化テナント、食遊館　定借テナント（再検査）', '64921')
INFO  - 2019-03-28 14:13:48.22238500 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Sales_mdl->update_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), NULL, 'レストラン消化テナント', '1', '店舗', NULL, '6', '480', '6000', '6480', '（再検査）', '64921')
INFO  - 2019-03-28 14:13:48.23453600 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Sales_mdl->update_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), NULL, '食遊館　消化テナント', '1', '店舗', NULL, '6', '480', '6000', '6480', '（再検査）', '64921')
INFO  - 2019-03-28 14:13:48.24633300 --> [2ca6fe56775a85babf93783a393b243d]【DELETE(物理削除)】PROCESS: Sales_mdl->update_data SQL: DELETE FROM `t_sales_before`
WHERE `sales_mng_id` =  '64921'
INFO  - 2019-03-28 14:13:48.25799200 --> [2ca6fe56775a85babf93783a393b243d]【DELETE(物理削除)】PROCESS: Sales_mdl->update_data SQL: DELETE FROM `t_sales_depart`
WHERE `sales_mng_id` =  '64921'
INFO  - 2019-03-28 14:13:48.26998200 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Sales_mdl->update_data SQL: INSERT INTO `t_sales_depart` (`ins_user_id`, `last_user_id`, `last_datetime`, `institute_id`, `institute_name`, `depart_id`, `depart_name`, `tax_type`, `no_tax_money`, `tax`, `in_tax_money`, `sales_mng_id`) VALUES (2, 2, now(), '2', '東京研究所', '1', '食品', '6', '136000', '10880', '146880', '64921')
INFO  - 2019-03-28 14:13:48.28204300 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Sales_mdl->update_data SQL: INSERT INTO `t_sales_depart` (`ins_user_id`, `last_user_id`, `last_datetime`, `institute_id`, `institute_name`, `depart_id`, `depart_name`, `tax_type`, `no_tax_money`, `tax`, `in_tax_money`, `sales_mng_id`) VALUES (2, 2, now(), '1', '大阪研究所', '1', '食品', '6', '6000', '480', '6480', '64921')
INFO  - 2019-03-28 14:13:48.29549300 --> [2ca6fe56775a85babf93783a393b243d]【UPDATE】PROCESS: Sales_mdl->update_del_bill_status SQL: UPDATE `t_sales_mng` SET `data_status_type` = '1', `last_user_id` = 2, `last_datetime` = now() WHERE `sales_mng_id` in (64921) 
INFO  - 2019-03-28 14:13:48.30718300 --> [2ca6fe56775a85babf93783a393b243d]【DELETE(物理削除)】PROCESS: Sales_mdl->delete_bill_print SQL: DELETE FROM `t_bill_mng`
WHERE `bill_mng_id` =  '49856'
INFO  - 2019-03-28 14:13:48.47913500 --> [2ca6fe56775a85babf93783a393b243d]【DELETE(物理削除)】PROCESS: Receivable_mng_mdl->back_sales_data SQL: DELETE FROM `t_receivable_data`
WHERE `sales_mng_id` =  '64921'
INFO  - 2019-03-28 14:13:48.49197500 --> [2ca6fe56775a85babf93783a393b243d]【UPDATE】PROCESS: Receivable_mng_mdl->back_sales_data SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money - 153360, `last_user_id` = 2, `last_datetime` = now() WHERE `receivable_mng_id` =  '37927'
INFO  - 2019-03-28 14:13:48.51525400 --> [2ca6fe56775a85babf93783a393b243d]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_mng SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money + 153360, `last_user_id` = 2, `last_datetime` = now() WHERE `target_month` =  '201903' AND `customer_disp_name` =  '株式会社丸井' AND `institute_id` IS NULL AND `depart_id` IS NULL
INFO  - 2019-03-28 14:13:48.53022200 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), '37927', '64921', '2019/03/20', '153360')
INFO  - 2019-03-28 14:13:48.55812100 --> [2ca6fe56775a85babf93783a393b243d]【売上変更処理   END】
INFO  - 2019-03-28 14:13:48.62338300 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_input  Method:edit execution time=0.6994s
INFO  - 2019-03-28 14:13:49.98537900 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-28 14:13:51.00752500 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_list  Method:index execution time=1.0961s
INFO  - 2019-03-28 14:14:03.02293400 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-28 14:14:04.41961200 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=1.4627s
INFO  - 2019-03-28 14:14:11.75406600 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:output
INFO  - 2019-03-28 14:14:11.76683400 --> [2ca6fe56775a85babf93783a393b243d]【請求書発行処理   START)】
INFO  - 2019-03-28 14:14:11.78557300 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0049607', 'S', '2019/03/28', '1', '株式会社丸井', '株式会社丸井', '153360', '2019/03/20', '532')
INFO  - 2019-03-28 14:14:11.79922900 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50197, '64921')
INFO  - 2019-03-28 14:14:11.81171200 --> [2ca6fe56775a85babf93783a393b243d]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049607' WHERE `sales_mng_id` =  '64921'
INFO  - 2019-03-28 14:14:12.39246500 --> [2ca6fe56775a85babf93783a393b243d]【請求書発行処理   END)】
INFO  - 2019-03-28 14:14:12.46143800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:bill_sales_print  Method:output execution time=0.8097s
INFO  - 2019-03-28 14:14:13.79964800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-28 14:14:17.02312900 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=3.2891s
INFO  - 2019-03-28 14:14:19.39834200 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-03-28 14:14:19.41293500 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1239s
INFO  - 2019-03-28 14:21:02.11022600 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-28 14:21:02.19956200 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1744s
INFO  - 2019-03-28 14:22:56.98939800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-03-28 14:22:57.00933400 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1386s
INFO  - 2019-03-28 14:22:59.32607400 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_info
INFO  - 2019-03-28 14:22:59.34085500 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:customer_info execution time=0.1280s
INFO  - 2019-03-28 14:23:00.25238400 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-28 14:23:03.98969800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_list  Method:index execution time=3.8097s
INFO  - 2019-03-28 14:23:40.13189900 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-28 14:23:41.10249800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_list  Method:index execution time=1.0499s
INFO  - 2019-03-28 14:23:46.27961700 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-03-28 14:23:46.38471200 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.1846s
INFO  - 2019-03-28 14:24:14.08284700 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-03-28 14:24:14.34744300 --> [2ca6fe56775a85babf93783a393b243d]【売上登録処理   START】
INFO  - 2019-03-28 14:24:14.36293500 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '2154', '株式会社　Ｉ－ｎｅ', '1', '1', '2019/03/31', '2019/03/01', '11', '森彬光', '1', '2', '13', '4000', '320', '4320', NULL, NULL, '31', '大阪研究所', '繊維', '媒体表示確認', '株式会社　Ｉ－ｎｅ', '2019/03/01', '2019/03/31', '1', 0)
INFO  - 2019-03-28 14:24:14.37500300 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '10005750', 'パッケージ　表示確認', '1', NULL, NULL, '6', '320', '4000', '4320', NULL, 65256)
INFO  - 2019-03-28 14:24:14.39754400 --> [2ca6fe56775a85babf93783a393b243d]【UPDATE】PROCESS: Sales_mdl->update_outside_relation SQL: UPDATE `t_outside_relation` SET `sales_mng_id` = 65256, `sales_detail_id` = 83695, `last_user_id` = 2, `last_datetime` = now() WHERE `report_no` =  '10005750'
INFO  - 2019-03-28 14:24:14.53856000 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Receivable_mng_mdl->_regist_mng SQL: INSERT INTO `t_receivable_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `target_month`, `customer_id`, `customer_disp_name`, `institute_id`, `institute_name`, `depart_id`, `depart_name`, `sales_money`) VALUES (2, 2, now(), '201903', '2154', '株式会社　Ｉ－ｎｅ', NULL, NULL, NULL, NULL, '4320')
INFO  - 2019-03-28 14:24:14.55203600 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), 38149, 65256, '2019/03/31', '4320')
INFO  - 2019-03-28 14:24:14.58055100 --> [2ca6fe56775a85babf93783a393b243d]【売上登録処理   END】
INFO  - 2019-03-28 14:24:14.64587400 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.6841s
INFO  - 2019-03-28 14:24:15.52511700 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-28 14:24:16.56312200 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_list  Method:index execution time=1.1126s
INFO  - 2019-03-28 14:24:20.90749200 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-03-28 14:24:21.01335900 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.1841s
INFO  - 2019-03-28 14:24:36.27848900 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-03-28 14:24:36.57002800 --> [2ca6fe56775a85babf93783a393b243d]【売上登録処理   START】
INFO  - 2019-03-28 14:24:36.58765600 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '2154', '株式会社　Ｉ－ｎｅ', '1', '1', '2019/03/31', '2019/03/05', '11', '森彬光', '1', '2', '13', '4000', '320', '4320', NULL, NULL, '31', '大阪研究所', '繊維', '媒体表示確認', '株式会社　Ｉ－ｎｅ', '2019/03/01', '2019/03/31', '1', 0)
INFO  - 2019-03-28 14:24:36.60199100 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '10005791', 'パッケージ　表示確認', '1', NULL, NULL, '6', '320', '4000', '4320', NULL, 65257)
INFO  - 2019-03-28 14:24:36.61579700 --> [2ca6fe56775a85babf93783a393b243d]【UPDATE】PROCESS: Sales_mdl->update_outside_relation SQL: UPDATE `t_outside_relation` SET `sales_mng_id` = 65257, `sales_detail_id` = 83696, `last_user_id` = 2, `last_datetime` = now() WHERE `report_no` =  '10005791'
INFO  - 2019-03-28 14:24:36.75861600 --> [2ca6fe56775a85babf93783a393b243d]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_mng SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money + 4320, `last_user_id` = 2, `last_datetime` = now() WHERE `target_month` =  '201903' AND `customer_disp_name` =  '株式会社　Ｉ－ｎｅ' AND `institute_id` IS NULL AND `depart_id` IS NULL
INFO  - 2019-03-28 14:24:36.77327800 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), '38149', 65257, '2019/03/31', '4320')
INFO  - 2019-03-28 14:24:36.80045400 --> [2ca6fe56775a85babf93783a393b243d]【売上登録処理   END】
INFO  - 2019-03-28 14:24:36.86833500 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.6911s
INFO  - 2019-03-28 14:24:40.51635800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-28 14:24:41.50271400 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_list  Method:index execution time=1.2057s
INFO  - 2019-03-28 14:24:44.44313600 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-03-28 14:24:44.55378100 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.1941s
INFO  - 2019-03-28 14:25:01.61481700 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 14:25:01.62937600 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1346s
INFO  - 2019-03-28 14:25:03.14228000 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 14:25:03.15619100 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1263s
INFO  - 2019-03-28 14:25:04.33851400 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 14:25:04.35306800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1341s
INFO  - 2019-03-28 14:25:09.60527500 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 14:25:09.61956000 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1273s
INFO  - 2019-03-28 14:25:10.02014900 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 14:25:10.03438400 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1301s
INFO  - 2019-03-28 14:25:11.78446600 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 14:25:11.79878300 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1224s
INFO  - 2019-03-28 14:25:18.95893800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-03-28 14:25:18.97337200 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1246s
INFO  - 2019-03-28 14:25:23.27251600 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-03-28 14:25:23.60289800 --> [2ca6fe56775a85babf93783a393b243d]【売上登録処理   START】
INFO  - 2019-03-28 14:25:23.61978700 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '2154', '株式会社　Ｉ－ｎｅ', '1', '1', '2019/03/31', '2019/03/11', '11', '森彬光', '1', '2', '13', '4000', '320', '4320', NULL, NULL, '31', '大阪研究所', '繊維', '媒体表示確認', '株式会社　Ｉ－ｎｅ', '2019/03/01', '2019/03/31', '1', 0)
INFO  - 2019-03-28 14:25:23.63330600 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '10005803', '表示　表示確認', '1', NULL, NULL, '6', '320', '4000', '4320', NULL, 65258)
INFO  - 2019-03-28 14:25:23.64704200 --> [2ca6fe56775a85babf93783a393b243d]【UPDATE】PROCESS: Sales_mdl->update_outside_relation SQL: UPDATE `t_outside_relation` SET `sales_mng_id` = 65258, `sales_detail_id` = 83697, `last_user_id` = 2, `last_datetime` = now() WHERE `report_no` =  '10005803'
INFO  - 2019-03-28 14:25:23.79116700 --> [2ca6fe56775a85babf93783a393b243d]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_mng SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money + 4320, `last_user_id` = 2, `last_datetime` = now() WHERE `target_month` =  '201903' AND `customer_disp_name` =  '株式会社　Ｉ－ｎｅ' AND `institute_id` IS NULL AND `depart_id` IS NULL
INFO  - 2019-03-28 14:25:23.80571100 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), '38149', 65258, '2019/03/31', '4320')
INFO  - 2019-03-28 14:25:23.83251100 --> [2ca6fe56775a85babf93783a393b243d]【売上登録処理   END】
INFO  - 2019-03-28 14:25:23.90191800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.7289s
INFO  - 2019-03-28 14:25:25.12889200 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-28 14:25:26.10325400 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_list  Method:index execution time=1.0509s
INFO  - 2019-03-28 14:25:29.95683300 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-03-28 14:25:30.06600400 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.1839s
INFO  - 2019-03-28 14:25:44.12519700 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-03-28 14:25:44.39980100 --> [2ca6fe56775a85babf93783a393b243d]【売上登録処理   START】
INFO  - 2019-03-28 14:25:44.42283100 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '2154', '株式会社　Ｉ－ｎｅ', '1', '1', '2019/03/31', '2019/03/22', '11', '森彬光', '1', '2', '13', '4000', '320', '4320', NULL, NULL, '31', '大阪研究所', '繊維', '媒体表示確認', '株式会社　Ｉ－ｎｅ', '2019/03/01', '2019/03/31', '1', 0)
INFO  - 2019-03-28 14:25:44.43818100 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '10005913', '表示　表示確認', '1', NULL, NULL, '6', '320', '4000', '4320', NULL, 65259)
INFO  - 2019-03-28 14:25:44.45219400 --> [2ca6fe56775a85babf93783a393b243d]【UPDATE】PROCESS: Sales_mdl->update_outside_relation SQL: UPDATE `t_outside_relation` SET `sales_mng_id` = 65259, `sales_detail_id` = 83698, `last_user_id` = 2, `last_datetime` = now() WHERE `report_no` =  '10005913'
INFO  - 2019-03-28 14:25:44.59866000 --> [2ca6fe56775a85babf93783a393b243d]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_mng SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money + 4320, `last_user_id` = 2, `last_datetime` = now() WHERE `target_month` =  '201903' AND `customer_disp_name` =  '株式会社　Ｉ－ｎｅ' AND `institute_id` IS NULL AND `depart_id` IS NULL
INFO  - 2019-03-28 14:25:44.61359600 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), '38149', 65259, '2019/03/31', '4320')
INFO  - 2019-03-28 14:25:44.63887600 --> [2ca6fe56775a85babf93783a393b243d]【売上登録処理   END】
INFO  - 2019-03-28 14:25:44.70284500 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.6848s
INFO  - 2019-03-28 14:25:45.36114100 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-28 14:25:46.32375100 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_list  Method:index execution time=1.0401s
INFO  - 2019-03-28 14:25:52.46508200 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:index
INFO  - 2019-03-28 14:25:53.50635800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:bill_cutoff_print  Method:index execution time=1.1139s
INFO  - 2019-03-28 14:26:04.08950100 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:index
INFO  - 2019-03-28 14:26:05.14055900 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:bill_cutoff_print  Method:index execution time=1.1385s
INFO  - 2019-03-28 14:26:10.83164900 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:index
INFO  - 2019-03-28 14:26:11.85072100 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:bill_cutoff_print  Method:index execution time=1.0962s
INFO  - 2019-03-28 14:26:14.28100400 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_confirm_other  Method:index
INFO  - 2019-03-28 14:26:14.32989500 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_confirm_other  Method:index execution time=0.1849s
INFO  - 2019-03-28 14:26:19.04197300 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:output
INFO  - 2019-03-28 14:26:19.05633300 --> [2ca6fe56775a85babf93783a393b243d]【請求書発行処理(締日)   START)】
INFO  - 2019-03-28 14:26:19.29555700 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Bill_cutoff_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `publish_date`, `bill_type`, `bill_money`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0049938', '2019/03/28', 'C', '17280', '1', '株式会社　Ｉ－ｎｅ', '株式会社　Ｉ－ｎｅ', '2019/03/31', '2154')
INFO  - 2019-03-28 14:26:19.31038800 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Bill_cutoff_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50198, '65256')
INFO  - 2019-03-28 14:26:19.32322700 --> [2ca6fe56775a85babf93783a393b243d]【UPDATE】PROCESS: Bill_cutoff_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049938' WHERE `sales_mng_id` = 65256
INFO  - 2019-03-28 14:26:19.33621700 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Bill_cutoff_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50198, '65259')
INFO  - 2019-03-28 14:26:19.34988000 --> [2ca6fe56775a85babf93783a393b243d]【UPDATE】PROCESS: Bill_cutoff_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049938' WHERE `sales_mng_id` = 65259
INFO  - 2019-03-28 14:26:19.36297100 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Bill_cutoff_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50198, '65257')
INFO  - 2019-03-28 14:26:19.37617500 --> [2ca6fe56775a85babf93783a393b243d]【UPDATE】PROCESS: Bill_cutoff_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049938' WHERE `sales_mng_id` = 65257
INFO  - 2019-03-28 14:26:19.38924000 --> [2ca6fe56775a85babf93783a393b243d]【INSERT】PROCESS: Bill_cutoff_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50198, '65258')
INFO  - 2019-03-28 14:26:19.40313200 --> [2ca6fe56775a85babf93783a393b243d]【UPDATE】PROCESS: Bill_cutoff_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049938' WHERE `sales_mng_id` = 65258
INFO  - 2019-03-28 14:26:19.98982700 --> [2ca6fe56775a85babf93783a393b243d]【請求書発行処理(締日)   END)】
INFO  - 2019-03-28 14:26:20.06098100 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:bill_cutoff_print  Method:output execution time=1.1318s
INFO  - 2019-03-28 14:26:21.07503500 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:index
INFO  - 2019-03-28 14:26:22.13794800 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:bill_cutoff_print  Method:index execution time=1.1698s
INFO  - 2019-03-28 14:26:27.50435200 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:index
INFO  - 2019-03-28 14:26:28.21236000 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:bill_cutoff_print  Method:index execution time=0.7864s
INFO  - 2019-03-28 14:26:31.15185300 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:bill_disp
INFO  - 2019-03-28 14:26:31.16784600 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:bill_cutoff_print  Method:bill_disp execution time=0.1379s
INFO  - 2019-03-28 14:30:00.80026000 --> [59539a9d4ce3167eca3c06cf875052a9]<PROCESS-START> USER-ID:  Controller:receive_batch  Method:index
INFO  - 2019-03-28 14:30:00.81578400 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_mng SQL: INSERT INTO `t_outside_receive_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `process_datetime`, `record_count`, `result`) VALUES (0, 0, now(), '201903281400', 23, 'ok')
INFO  - 2019-03-28 14:30:00.93862100 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`, `sales_mng_id`, `sales_detail_id`) VALUES (0, 0, now(), '30002167', '30002167', 'unsent', '65241', '83663')
INFO  - 2019-03-28 14:30:00.95154600 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1180, '30002167', '株式会社総合商社エーワイ', '30002167', '横田研太郎', 'エコバッグ　ポーチ　ショルダーバッグ', '202000', '3', 'ok', '')
INFO  - 2019-03-28 14:30:01.05512900 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`) VALUES (0, 0, now(), '10005820', '10005820', 'unsent')
INFO  - 2019-03-28 14:30:01.06704900 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1180, '10005820', '株式会社バーニーズ　ジャパン', '10005820', '森本律子', 'JACKET裏地', '9370', '3', 'ok', '')
INFO  - 2019-03-28 14:30:01.16283500 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`) VALUES (0, 0, now(), '10005821', '10005821', 'unsent')
INFO  - 2019-03-28 14:30:01.17521400 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1180, '10005821', '株式会社バーニーズ　ジャパン', '10005821', '森本律子', 'JACKET', '12270', '3', 'ok', '')
INFO  - 2019-03-28 14:30:01.27067500 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`) VALUES (0, 0, now(), '10005822', '10005822', 'unsent')
INFO  - 2019-03-28 14:30:01.32388500 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1180, '10005822', '株式会社バーニーズ　ジャパン', '10005822', '森本律子', 'JACKET', '8470', '3', 'ok', '')
INFO  - 2019-03-28 14:30:01.44025600 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`) VALUES (0, 0, now(), '10005823', '10005823', 'unsent')
INFO  - 2019-03-28 14:30:01.45329100 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1180, '10005823', '株式会社バーニーズ　ジャパン', '10005823', '森本律子', 'JACKET', '15530', '3', 'ok', '')
INFO  - 2019-03-28 14:30:01.55795400 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`) VALUES (0, 0, now(), '10005826', '10005826', 'unsent')
INFO  - 2019-03-28 14:30:01.57141500 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1180, '10005826', '株式会社バーニーズ　ジャパン', '10005826', '森本律子', 'Ｓｃａｒｆ', '7570', '3', 'ok', '')
INFO  - 2019-03-28 14:30:01.66846400 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`) VALUES (0, 0, now(), '10005827', '10005827', 'unsent')
INFO  - 2019-03-28 14:30:01.68047900 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1180, '10005827', '株式会社バーニーズ　ジャパン', '10005827', '森本律子', 'Ｓｃａｒｆ', '7570', '3', 'ok', '')
INFO  - 2019-03-28 14:30:01.79205800 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`) VALUES (0, 0, now(), '10005828', '10005828', 'unsent')
INFO  - 2019-03-28 14:30:01.80615700 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1180, '10005828', '株式会社バーニーズ　ジャパン', '10005828', '森本律子', 'Ｓｃａｒｆ', '10810', '3', 'ok', '')
INFO  - 2019-03-28 14:30:01.92031900 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`) VALUES (0, 0, now(), '10005829', '10005829', 'unsent')
INFO  - 2019-03-28 14:30:01.93499400 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1180, '10005829', '株式会社バーニーズ　ジャパン', '10005829', '森本律子', 'COAT(表地・裏地)', '13240', '3', 'ok', '')
INFO  - 2019-03-28 14:30:02.04201300 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`) VALUES (0, 0, now(), '10005830', '10005830', 'unsent')
INFO  - 2019-03-28 14:30:02.05496700 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1180, '10005830', '株式会社バーニーズ　ジャパン', '10005830', '森本律子', 'COAT(表地・裏地)', '13240', '3', 'ok', '')
INFO  - 2019-03-28 14:30:02.18517900 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`, `sales_mng_id`, `sales_detail_id`) VALUES (0, 0, now(), '10005831', '10002831', 'unsent', '46717', '59810')
INFO  - 2019-03-28 14:30:02.20031400 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1180, '10005831', '株式会社バーニーズ　ジャパン', '10002831', '森本律子', 'COAT(表地・裏地)', '12100', '3', 'ok', '')
INFO  - 2019-03-28 14:30:02.31055300 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`) VALUES (0, 0, now(), '10005832', '10005832', 'unsent')
INFO  - 2019-03-28 14:30:02.32419200 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1180, '10005832', '株式会社バーニーズ　ジャパン', '10005832', '森本律子', 'COAT(表地・裏地)', '12100', '3', 'ok', '')
INFO  - 2019-03-28 14:30:02.43839200 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`) VALUES (0, 0, now(), '40011430', '40011430', 'unsent')
INFO  - 2019-03-28 14:30:02.45180200 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1180, '40011430', 'シャチフードシステム株式会社', '40011430', '大西澄子', '手指・器具・食品', '30000', '3', 'ok', '')
INFO  - 2019-03-28 14:30:02.56620900 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`, `sales_mng_id`, `sales_detail_id`) VALUES (0, 0, now(), '30002183', '30002183', 'unsent', '65243', '83665')
INFO  - 2019-03-28 14:30:02.57903800 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1180, '30002183', '三化成株式会社', '30002183', '横田研太郎', 'むつ市指定ごみ袋', '14500', '3', 'ok', '')
INFO  - 2019-03-28 14:30:02.69419600 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`, `sales_mng_id`, `sales_detail_id`) VALUES (0, 0, now(), '30002189', '30002189', 'unsent', '65244', '83666')
INFO  - 2019-03-28 14:30:02.70762400 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1180, '30002189', '全日空商事株式会社', '30002189', '横田研太郎', 'バッグ', '15700', '3', 'ok', '')
INFO  - 2019-03-28 14:30:02.81183000 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`) VALUES (0, 0, now(), '40011522', '40011522', 'unsent')
INFO  - 2019-03-28 14:30:02.82440700 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1180, '40011522', '株式会社ミートショップヒロ', '40011522', '吉田晃', 'ステーキ＆焼肉弁当', '7000', '3', 'ok', '')
INFO  - 2019-03-28 14:30:02.92428100 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`, `sales_mng_id`, `sales_detail_id`) VALUES (0, 0, now(), '40011523', '40011523', 'unsent', '65251', '83675')
INFO  - 2019-03-28 14:30:02.93660300 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1180, '40011523', '京寿楽庵株式会社', '40011523', '岡部珠美', 'グルメバーム（チョコレート）', '5000', '3', 'ok', '')
INFO  - 2019-03-28 14:30:03.04367400 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`) VALUES (0, 0, now(), '10005922', '10005922', 'unsent')
INFO  - 2019-03-28 14:30:03.05774900 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1180, '10005922', '株式会社ライトアップショッピングクラブ', '10005922', '丹羽充代', 'パンツ', '10990', '3', 'ok', '')
INFO  - 2019-03-28 14:30:03.17708000 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`) VALUES (0, 0, now(), '10005924', '10005924', 'unsent')
INFO  - 2019-03-28 14:30:03.19130000 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1180, '10005924', '株式会社ライトアップショッピングクラブ', '10005924', '丹羽充代', 'プルオーバー', '10990', '3', 'ok', '')
INFO  - 2019-03-28 14:30:03.29411800 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`) VALUES (0, 0, now(), '10005926', '10005926', 'unsent')
INFO  - 2019-03-28 14:30:03.30697900 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1180, '10005926', '株式会社ライトアップショッピングクラブ', '10005926', '丹羽充代', 'ストール', '7490', '3', 'ok', '')
INFO  - 2019-03-28 14:30:03.42737600 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`, `sales_mng_id`, `sales_detail_id`) VALUES (0, 0, now(), '40011543', '40011543', 'unsent', '65254', '83680')
INFO  - 2019-03-28 14:30:03.44191600 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1180, '40011543', 'セイウ株式会社', '40011543', '岡部珠美', 'ＴＶＢＰ　マンゴーゼリー', '5000', '3', 'ok', '')
INFO  - 2019-03-28 14:30:03.55208600 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`, `sales_mng_id`, `sales_detail_id`) VALUES (0, 0, now(), '40011551', '40011551', 'unsent', '65245', '83667')
INFO  - 2019-03-28 14:30:03.56719200 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1180, '40011551', '有限会社ショウタニ', '40011551', '竹中沙織', '手指・器具・食品', '25000', '3', 'ok', '')
INFO  - 2019-03-28 14:30:03.67933700 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`) VALUES (0, 0, now(), '10005951', '10005951', 'unsent')
INFO  - 2019-03-28 14:30:03.69308400 --> [59539a9d4ce3167eca3c06cf875052a9]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1180, '10005951', '株式会社ライトアップショッピングクラブ', '10005951', '丹羽充代', 'スカーフ', '4900', '3', 'ok', '')
INFO  - 2019-03-28 14:30:03.70908600 --> [59539a9d4ce3167eca3c06cf875052a9]【UPDATE】PROCESS: Receive_batch_mdl->update_outside_receive_mng SQL: UPDATE `t_outside_receive_mng` SET `result` = 'ok', `last_user_id` = 0, `last_datetime` = now() WHERE `outside_receive_mng_id` =  1180
INFO  - 2019-03-28 14:30:03.78546800 --> [59539a9d4ce3167eca3c06cf875052a9]<PROCESS-END> Controller:receive_batch  Method:index execution time=3.5583s
INFO  - 2019-03-28 14:30:28.20248700 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-28 14:30:28.29169200 --> [2ca6fe56775a85babf93783a393b243d]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1617s
INFO  - 2019-03-28 14:30:33.61530100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-03-28 14:30:33.63602900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1462s
INFO  - 2019-03-28 14:30:34.07390400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-03-28 14:30:34.09365900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1258s
INFO  - 2019-03-28 14:30:35.24978400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-03-28 14:30:35.27125500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1403s
INFO  - 2019-03-28 14:30:36.18294300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_info
INFO  - 2019-03-28 14:30:36.19932800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:customer_info execution time=0.1524s
INFO  - 2019-03-28 14:31:50.21602700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_list
INFO  - 2019-03-28 14:31:50.23096300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:handler_list execution time=0.1328s
INFO  - 2019-03-28 14:31:51.31276800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_list
INFO  - 2019-03-28 14:31:51.32808200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:handler_list execution time=0.1318s
INFO  - 2019-03-28 14:31:51.72258200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_info
INFO  - 2019-03-28 14:31:51.73746500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:handler_info execution time=0.1232s
INFO  - 2019-03-28 14:31:54.80522700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_list
INFO  - 2019-03-28 14:31:54.82062100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:handler_list execution time=0.1252s
INFO  - 2019-03-28 14:31:55.93334700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_info
INFO  - 2019-03-28 14:31:55.94917300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:handler_info execution time=0.1327s
INFO  - 2019-03-28 14:32:11.41862500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 14:32:11.43361400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1252s
INFO  - 2019-03-28 14:32:15.70139800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 14:32:15.71641500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1358s
INFO  - 2019-03-28 14:32:26.07585900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-03-28 14:32:26.09073900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1325s
INFO  - 2019-03-28 14:32:35.64304200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-28 14:32:35.75769700 --> [ffee87feba63788ecb6bb56f50c4f379]【売上登録処理   START】
INFO  - 2019-03-28 14:32:35.77382100 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '2928', '帝人フロンティア株式会社', '1', '1', '2019/03/28', '2019/03/28', '11', '森彬光', '1', '2', '6', '39000', '3120', '42120', NULL, NULL, NULL, '大阪研究所', '繊維', '化粧品評価', '帝人フロンティア株式会社', NULL, NULL, '1', 0)
INFO  - 2019-03-28 14:32:35.78900300 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '10005904', '毛束　毛髪光沢測定試験', '3', NULL, NULL, '6', '3120', '39000', '42120', NULL, 65260)
INFO  - 2019-03-28 14:32:35.86937700 --> [ffee87feba63788ecb6bb56f50c4f379]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_mng SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money + 42120, `last_user_id` = 2, `last_datetime` = now() WHERE `target_month` =  '201903' AND `customer_disp_name` =  '帝人フロンティア株式会社' AND `institute_id` =  '1' AND `depart_id` =  '2'
INFO  - 2019-03-28 14:32:35.88649500 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), '38142', 65260, '2019/03/28', '42120')
INFO  - 2019-03-28 14:32:35.92154300 --> [ffee87feba63788ecb6bb56f50c4f379]【売上登録処理   END】
INFO  - 2019-03-28 14:32:35.99090100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_input  Method:index execution time=0.4547s
INFO  - 2019-03-28 14:32:36.75525300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-28 14:32:36.82860900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1507s
INFO  - 2019-03-28 14:32:40.06917400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-28 14:32:41.45255400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=1.4299s
INFO  - 2019-03-28 14:32:47.60763500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:output
INFO  - 2019-03-28 14:32:47.62234500 --> [ffee87feba63788ecb6bb56f50c4f379]【請求書発行処理   START)】
INFO  - 2019-03-28 14:32:47.85021200 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0049939', 'S', '2019/03/28', '1', '帝人フロンティア株式会社', '帝人フロンティア株式会社', '42120', '2019/03/28', '2928')
INFO  - 2019-03-28 14:32:47.86522900 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50199, '65260')
INFO  - 2019-03-28 14:32:47.87906100 --> [ffee87feba63788ecb6bb56f50c4f379]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049939' WHERE `sales_mng_id` =  '65260'
INFO  - 2019-03-28 14:32:48.46169500 --> [ffee87feba63788ecb6bb56f50c4f379]【請求書発行処理   END)】
INFO  - 2019-03-28 14:32:48.53889000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:bill_sales_print  Method:output execution time=1.0272s
INFO  - 2019-03-28 14:32:49.67763600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-28 14:32:52.79256200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=3.1827s
INFO  - 2019-03-28 14:33:02.55059800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-03-28 14:33:02.56758900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1263s
INFO  - 2019-03-28 14:33:53.57889600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-28 14:33:53.66828700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1787s
INFO  - 2019-03-28 14:34:19.84904800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-03-28 14:34:19.87020600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1285s
INFO  - 2019-03-28 14:34:20.86903400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-03-28 14:34:20.88990100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1331s
INFO  - 2019-03-28 14:34:21.95569700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_info
INFO  - 2019-03-28 14:34:21.97252900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:customer_info execution time=0.1377s
INFO  - 2019-03-28 14:34:31.75620100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_list
INFO  - 2019-03-28 14:34:31.77173000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:handler_list execution time=0.1393s
INFO  - 2019-03-28 14:34:32.40141600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_info
INFO  - 2019-03-28 14:34:32.41734200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:handler_info execution time=0.1349s
INFO  - 2019-03-28 14:34:43.19336800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 14:34:43.20759900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1235s
INFO  - 2019-03-28 14:34:44.58879700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 14:34:44.60424000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1341s
INFO  - 2019-03-28 14:34:45.95024800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-03-28 14:34:45.96546600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1352s
INFO  - 2019-03-28 14:34:50.06039200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:34:50.07720400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1297s
INFO  - 2019-03-28 14:34:54.84908200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:34:54.86361600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1249s
INFO  - 2019-03-28 14:34:55.86043800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:34:55.87569200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1319s
INFO  - 2019-03-28 14:34:56.46428900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:34:56.48132400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1265s
INFO  - 2019-03-28 14:35:10.51874900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-28 14:35:10.63909000 --> [ffee87feba63788ecb6bb56f50c4f379]【売上登録処理   START】
INFO  - 2019-03-28 14:35:10.65451700 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '818', '株式会社ハーブスグローイング', '1', '1', '2019/04/01', '2019/04/01', '54', '奥田訓子', '3', '1', '1', '30000', '2400', '32400', NULL, NULL, NULL, '名古屋研究所', '食品', '商品試験', '株式会社ハーブスグローイング', NULL, NULL, '1', 0)
INFO  - 2019-03-28 14:35:10.67028600 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '60005895', '仕様書および表示案作成', '1', NULL, '30000', '6', '2400', '30000', '32400', '「ラウンドケーキ（クレープレモン）」', 65261)
INFO  - 2019-03-28 14:35:10.74943100 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Receivable_mng_mdl->_regist_mng SQL: INSERT INTO `t_receivable_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `target_month`, `customer_id`, `customer_disp_name`, `institute_id`, `institute_name`, `depart_id`, `depart_name`, `sales_money`) VALUES (2, 2, now(), '201904', '818', '株式会社ハーブスグローイング', '3', '名古屋研究所', '1', '食品', '32400')
INFO  - 2019-03-28 14:35:10.76342200 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), 38150, 65261, '2019/04/01', '32400')
INFO  - 2019-03-28 14:35:10.78746200 --> [ffee87feba63788ecb6bb56f50c4f379]【売上登録処理   END】
INFO  - 2019-03-28 14:35:10.85675700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_input  Method:index execution time=0.4410s
INFO  - 2019-03-28 14:35:12.08181700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-28 14:35:12.15615700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1513s
INFO  - 2019-03-28 14:35:17.84407800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-28 14:35:21.68094400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_list  Method:index execution time=3.9129s
INFO  - 2019-03-28 14:35:30.76699400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-28 14:35:32.28679700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=1.5866s
INFO  - 2019-03-28 14:35:38.18199500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:output
INFO  - 2019-03-28 14:35:38.19709800 --> [ffee87feba63788ecb6bb56f50c4f379]【請求書発行処理   START)】
INFO  - 2019-03-28 14:35:38.41477100 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0049940', 'S', '2019/03/28', '1', '株式会社ハーブスグローイング', '株式会社ハーブスグローイング', '32400', '2019/04/01', '818')
INFO  - 2019-03-28 14:35:38.43087500 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50200, '65261')
INFO  - 2019-03-28 14:35:38.44559000 --> [ffee87feba63788ecb6bb56f50c4f379]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049940' WHERE `sales_mng_id` =  '65261'
INFO  - 2019-03-28 14:35:38.99622600 --> [ffee87feba63788ecb6bb56f50c4f379]【請求書発行処理   END)】
INFO  - 2019-03-28 14:35:39.06537100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:bill_sales_print  Method:output execution time=0.9820s
INFO  - 2019-03-28 14:35:39.93290500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-28 14:35:43.14406900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=3.2877s
INFO  - 2019-03-28 14:35:46.79092700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-03-28 14:35:46.80821700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1365s
INFO  - 2019-03-28 14:44:40.35168200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-28 14:44:44.09603400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_list  Method:index execution time=3.8214s
INFO  - 2019-03-28 14:46:04.67452800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-28 14:46:05.77004800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_list  Method:index execution time=1.1692s
INFO  - 2019-03-28 14:46:11.47713500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-03-28 14:46:11.57852200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.1758s
INFO  - 2019-03-28 14:46:29.04983700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_list
INFO  - 2019-03-28 14:46:29.06477800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:handler_list execution time=0.1263s
INFO  - 2019-03-28 14:46:31.19544300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_info
INFO  - 2019-03-28 14:46:31.21160900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:handler_info execution time=0.1290s
INFO  - 2019-03-28 14:47:31.62084500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:47:31.63593000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1309s
INFO  - 2019-03-28 14:48:33.56857200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 14:48:33.58413600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1286s
INFO  - 2019-03-28 14:48:34.43346200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 14:48:34.44859100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1240s
INFO  - 2019-03-28 14:48:37.36853500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-03-28 14:48:37.38369200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1269s
INFO  - 2019-03-28 14:48:44.91947500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:48:44.93468900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1295s
INFO  - 2019-03-28 14:48:53.54814900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:48:53.56408200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1264s
INFO  - 2019-03-28 14:48:55.78836400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:48:55.80315300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1263s
INFO  - 2019-03-28 14:48:56.28859400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:48:56.30194000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1271s
INFO  - 2019-03-28 14:48:56.95512500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:48:56.97028200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1254s
INFO  - 2019-03-28 14:49:11.88481400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:49:11.90025900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1315s
INFO  - 2019-03-28 14:49:15.41160600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:49:15.42666600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1337s
INFO  - 2019-03-28 14:49:16.12209700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:49:16.13716500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1322s
INFO  - 2019-03-28 14:49:16.95908800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:49:16.97407100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1290s
INFO  - 2019-03-28 14:49:18.13527700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:49:18.15066800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1355s
INFO  - 2019-03-28 14:49:20.38786400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 14:49:20.40223000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1290s
INFO  - 2019-03-28 14:49:21.02182800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 14:49:21.03662600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1323s
INFO  - 2019-03-28 14:49:21.58978100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 14:49:21.60506700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1267s
INFO  - 2019-03-28 14:49:22.20694500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 14:49:22.22459600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1272s
INFO  - 2019-03-28 14:49:43.81372000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:49:43.82894300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1273s
INFO  - 2019-03-28 14:50:01.37343300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:50:01.38873300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1401s
INFO  - 2019-03-28 14:50:03.80306300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:50:03.81580200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1281s
INFO  - 2019-03-28 14:50:04.53734500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:50:04.55272400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1599s
INFO  - 2019-03-28 14:50:31.45991300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:50:31.47490400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1235s
INFO  - 2019-03-28 14:50:31.90785800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:50:31.92324500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1309s
INFO  - 2019-03-28 14:50:32.52251500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:50:32.53793600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1296s
INFO  - 2019-03-28 14:50:33.25688500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:50:33.27246600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1330s
INFO  - 2019-03-28 14:50:53.09652000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:50:53.11177000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1282s
INFO  - 2019-03-28 14:50:53.74970500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:50:53.76528800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1267s
INFO  - 2019-03-28 14:51:02.79548200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-03-28 14:51:03.38337500 --> [ffee87feba63788ecb6bb56f50c4f379]【売上登録処理   START】
INFO  - 2019-03-28 14:51:03.39928100 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '523', '株式会社バーニーズジャパン', '1', '1', '2019/03/27', '2019/03/27', '5', '畑井百合子', '1', '2', '1', '77940', '6234', '84174', NULL, NULL, NULL, '大阪研究所', '繊維', '商品試験', '株式会社バーニーズジャパン', NULL, NULL, '1', 0)
INFO  - 2019-03-28 14:51:03.41479100 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '10005874', '染色堅牢度、混用率、表示指示', '1', NULL, NULL, '6', '1299', '16240', '17539', '19FW　DIV23　Scarf　CREATIVE SRL　①MOWO PRI RIV STOLE', 65262)
INFO  - 2019-03-28 14:51:03.42991300 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '10005875', '染色堅牢度、混用率、表示指示', '1', NULL, NULL, '6', '987', '12340', '13327', '19FW　DIV23　Scarf　CREATIVE SRL　②MOWO PRI RIV STOLE', 65262)
INFO  - 2019-03-28 14:51:03.44554000 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '10005876', '染色堅牢度、混用率、表示指示', '1', NULL, NULL, '6', '987', '12340', '13327', '19FW　DIV23　Scarf　CREATIVE SRL　③MOWO PRI RIV STOLE', 65262)
INFO  - 2019-03-28 14:51:03.46112200 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '10005877', '染色堅牢度、混用率、表示指示', '1', NULL, NULL, '6', '987', '12340', '13327', '19FW　DIV23　Scarf　CREATIVE SRL　④MOWO PRI RIV STOLE', 65262)
INFO  - 2019-03-28 14:51:03.47690000 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '10005878', '染色堅牢度、混用率、表示指示', '1', NULL, NULL, '6', '987', '12340', '13327', '19FW　DIV23　Scarf　CREATIVE SRL　⑤MOWO PRI RIV STOLE', 65262)
INFO  - 2019-03-28 14:51:03.49201400 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '10005879', '染色堅牢度、混用率、表示指示', '1', NULL, NULL, '6', '987', '12340', '13327', '19FW　DIV23　Scarf　CREATIVE SRL　⑥MOWO PRI RIV STOLE', 65262)
INFO  - 2019-03-28 14:51:03.57269300 --> [ffee87feba63788ecb6bb56f50c4f379]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_mng SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money + 84174, `last_user_id` = 2, `last_datetime` = now() WHERE `target_month` =  '201903' AND `customer_disp_name` =  '株式会社バーニーズジャパン' AND `institute_id` =  '1' AND `depart_id` =  '2'
INFO  - 2019-03-28 14:51:03.58806900 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), '37931', 65262, '2019/03/27', '84174')
INFO  - 2019-03-28 14:51:03.61402300 --> [ffee87feba63788ecb6bb56f50c4f379]【売上登録処理   END】
INFO  - 2019-03-28 14:51:03.68717900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_input  Method:copy execution time=1.0167s
INFO  - 2019-03-28 14:51:04.61607500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-28 14:51:05.70226600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_list  Method:index execution time=1.1611s
INFO  - 2019-03-28 14:51:36.93501300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-03-28 14:51:37.04490400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.1867s
INFO  - 2019-03-28 14:51:50.39067900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_list
INFO  - 2019-03-28 14:51:50.40531800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:handler_list execution time=0.1175s
INFO  - 2019-03-28 14:51:51.06876900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_info
INFO  - 2019-03-28 14:51:51.08488600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:handler_info execution time=0.1330s
INFO  - 2019-03-28 14:52:16.27370700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:52:16.28961200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1323s
INFO  - 2019-03-28 14:52:18.42286100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:52:18.43828000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1358s
INFO  - 2019-03-28 14:52:19.18370600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:52:19.20107600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1326s
INFO  - 2019-03-28 14:52:25.51989200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:52:25.53606000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1272s
INFO  - 2019-03-28 14:52:26.64504000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:52:26.65959500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1217s
INFO  - 2019-03-28 14:52:27.66452500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:52:27.68029000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1273s
INFO  - 2019-03-28 14:52:28.51771800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:52:28.53323000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1302s
INFO  - 2019-03-28 14:52:28.82785600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:52:28.84360600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1236s
INFO  - 2019-03-28 14:52:29.37880200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:52:29.39428900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1242s
INFO  - 2019-03-28 14:52:34.55154400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:52:34.56674100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1314s
INFO  - 2019-03-28 14:52:36.12119000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:52:36.13711700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1317s
INFO  - 2019-03-28 14:52:36.72538300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:52:36.74039700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1539s
INFO  - 2019-03-28 14:52:37.26708600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:52:37.32264500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1228s
INFO  - 2019-03-28 14:52:38.77723200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:52:38.79217600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1236s
INFO  - 2019-03-28 14:52:39.09775300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:52:39.11314700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1235s
INFO  - 2019-03-28 14:52:44.13682100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:52:44.15257000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1317s
INFO  - 2019-03-28 14:52:45.65660400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:52:45.67250700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1375s
INFO  - 2019-03-28 14:52:58.31457100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:52:58.33053200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1278s
INFO  - 2019-03-28 14:53:02.72835000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:53:02.74377300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1278s
INFO  - 2019-03-28 14:53:31.05558400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:53:31.07064500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1341s
INFO  - 2019-03-28 14:53:37.13744300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:53:37.15355200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1306s
INFO  - 2019-03-28 14:53:38.16206400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:53:38.17774200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1377s
INFO  - 2019-03-28 14:53:38.46523100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:53:38.48090000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1279s
INFO  - 2019-03-28 14:53:39.16702600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:53:39.18211600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1291s
INFO  - 2019-03-28 14:53:41.54266400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:53:41.55829000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1271s
INFO  - 2019-03-28 14:53:42.36895800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:53:42.38481200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1495s
INFO  - 2019-03-28 14:53:43.62424000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:53:43.63984900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1235s
INFO  - 2019-03-28 14:53:45.56190600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:53:45.57713800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1297s
INFO  - 2019-03-28 14:53:46.15643700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:53:46.17246800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1320s
INFO  - 2019-03-28 14:53:59.34499600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:53:59.36123200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1330s
INFO  - 2019-03-28 14:53:59.75527000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:53:59.77064300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1264s
INFO  - 2019-03-28 14:54:01.38595000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:54:01.40313700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1308s
INFO  - 2019-03-28 14:54:02.50712000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:54:02.52290000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1315s
INFO  - 2019-03-28 14:54:03.74239000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:54:03.75790700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1314s
INFO  - 2019-03-28 14:54:32.42670900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:54:32.44281500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1237s
INFO  - 2019-03-28 14:54:32.98904400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:54:33.00685100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1297s
INFO  - 2019-03-28 14:54:34.18912200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:54:34.20479700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1245s
INFO  - 2019-03-28 14:54:34.99352400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:54:35.00895400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1237s
INFO  - 2019-03-28 14:54:36.62495600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:54:36.64051000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1252s
INFO  - 2019-03-28 14:54:40.07734300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:54:40.09272900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1242s
INFO  - 2019-03-28 14:54:41.31723300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:54:41.33252300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1349s
INFO  - 2019-03-28 14:55:23.39707400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:55:23.41294800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1239s
INFO  - 2019-03-28 14:55:26.45960400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:55:26.47459400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1284s
INFO  - 2019-03-28 14:55:29.03523800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:55:29.05070900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1284s
INFO  - 2019-03-28 14:55:29.43843200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:55:29.45293800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1196s
INFO  - 2019-03-28 14:55:30.14772000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:55:30.16356800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1312s
INFO  - 2019-03-28 14:55:32.33844600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:55:32.35307600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1235s
INFO  - 2019-03-28 14:55:34.58966900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 14:55:34.60503300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1244s
INFO  - 2019-03-28 14:58:55.60507500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-03-28 14:58:55.99631800 --> [ffee87feba63788ecb6bb56f50c4f379]【売上登録処理   START】
INFO  - 2019-03-28 14:58:56.01363100 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '523', '株式会社バーニーズジャパン', '1', '1', '2019/03/26', '2019/03/26', '2', '森本律子', '1', '2', '1', '45640', '3652', '49292', NULL, NULL, NULL, '大阪研究所', '繊維', '商品試験', '株式会社バーニーズジャパン', NULL, NULL, '1', 0)
INFO  - 2019-03-28 14:58:56.02980900 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '10005820', '染色堅牢度、混用率、表示指示', '1', NULL, NULL, '6', '750', '9370', '10120', '19FW　DIV32　JACKET　0909 SRL　全品番共通裏地', 65263)
INFO  - 2019-03-28 14:58:56.04503700 --> [ffee87feba63788ecb6bb56f50c4f379]【UPDATE】PROCESS: Sales_mdl->update_outside_relation SQL: UPDATE `t_outside_relation` SET `sales_mng_id` = 65263, `sales_detail_id` = 83707, `last_user_id` = 2, `last_datetime` = now() WHERE `report_no` =  '10005820'
INFO  - 2019-03-28 14:58:56.05995100 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '10005821', '染色堅牢度、混用率、表示指示', '1', NULL, NULL, '6', '982', '12270', '13252', '19FW　DIV32　JACKET　0909 SRL　①BASICテーラード', 65263)
INFO  - 2019-03-28 14:58:56.07561100 --> [ffee87feba63788ecb6bb56f50c4f379]【UPDATE】PROCESS: Sales_mdl->update_outside_relation SQL: UPDATE `t_outside_relation` SET `sales_mng_id` = 65263, `sales_detail_id` = 83708, `last_user_id` = 2, `last_datetime` = now() WHERE `report_no` =  '10005821'
INFO  - 2019-03-28 14:58:56.09066200 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '10005822', '染色堅牢度、混用率、表示指示', '1', NULL, NULL, '6', '678', '8470', '9148', '19FW　DIV32　JACKET　0909 SRL　②ストレッチテーラードJK', 65263)
INFO  - 2019-03-28 14:58:56.10563800 --> [ffee87feba63788ecb6bb56f50c4f379]【UPDATE】PROCESS: Sales_mdl->update_outside_relation SQL: UPDATE `t_outside_relation` SET `sales_mng_id` = 65263, `sales_detail_id` = 83709, `last_user_id` = 2, `last_datetime` = now() WHERE `report_no` =  '10005822'
INFO  - 2019-03-28 14:58:56.12029800 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '10005823', '染色堅牢度、混用率、表示指示', '1', NULL, NULL, '6', '1242', '15530', '16772', '19FW　DIV32　JACKET　0909 SRL　③CHECK WボタンJK', 65263)
INFO  - 2019-03-28 14:58:56.13564900 --> [ffee87feba63788ecb6bb56f50c4f379]【UPDATE】PROCESS: Sales_mdl->update_outside_relation SQL: UPDATE `t_outside_relation` SET `sales_mng_id` = 65263, `sales_detail_id` = 83710, `last_user_id` = 2, `last_datetime` = now() WHERE `report_no` =  '10005823'
INFO  - 2019-03-28 14:58:56.21215400 --> [ffee87feba63788ecb6bb56f50c4f379]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_mng SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money + 49292, `last_user_id` = 2, `last_datetime` = now() WHERE `target_month` =  '201903' AND `customer_disp_name` =  '株式会社バーニーズジャパン' AND `institute_id` =  '1' AND `depart_id` =  '2'
INFO  - 2019-03-28 14:58:56.22803100 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), '37931', 65263, '2019/03/26', '49292')
INFO  - 2019-03-28 14:58:56.26002900 --> [ffee87feba63788ecb6bb56f50c4f379]【売上登録処理   END】
INFO  - 2019-03-28 14:58:56.32922600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.8382s
INFO  - 2019-03-28 14:59:03.10898200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-28 14:59:04.12011900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_list  Method:index execution time=1.0764s
INFO  - 2019-03-28 14:59:50.58802000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-03-28 14:59:50.70406600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.1906s
INFO  - 2019-03-28 15:00:34.17020900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:00:34.18582700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1310s
INFO  - 2019-03-28 15:00:38.20509600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:00:38.21982800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1338s
INFO  - 2019-03-28 15:00:38.96255100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:00:38.97801300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1249s
INFO  - 2019-03-28 15:00:42.42662500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:00:42.44177900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1235s
INFO  - 2019-03-28 15:00:42.81222400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:00:42.82802800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1217s
INFO  - 2019-03-28 15:00:43.90207700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:00:43.91680300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1325s
INFO  - 2019-03-28 15:00:44.70352200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:00:44.71842300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1300s
INFO  - 2019-03-28 15:00:45.00260900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:00:45.01706500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1237s
INFO  - 2019-03-28 15:00:49.59256000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:00:49.60822200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1325s
INFO  - 2019-03-28 15:00:50.41741100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:00:50.43331400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1306s
INFO  - 2019-03-28 15:00:51.43021500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:00:51.44512500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1253s
INFO  - 2019-03-28 15:00:52.61462500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:00:52.63043000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1295s
INFO  - 2019-03-28 15:00:55.83135300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:00:55.84666000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1266s
INFO  - 2019-03-28 15:00:56.90468400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:00:56.92025300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1492s
INFO  - 2019-03-28 15:00:57.63238700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:00:57.64830500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1292s
INFO  - 2019-03-28 15:00:59.91623200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:00:59.93185700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1296s
INFO  - 2019-03-28 15:01:01.64571700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:01:01.66134100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1290s
INFO  - 2019-03-28 15:01:02.84086900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:01:02.85665000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1232s
INFO  - 2019-03-28 15:01:03.61715700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:01:03.63376200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1313s
INFO  - 2019-03-28 15:01:05.63048500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:01:05.64753700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1309s
INFO  - 2019-03-28 15:02:44.17170400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:02:44.18650100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1273s
INFO  - 2019-03-28 15:02:45.36687100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:02:45.38292100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1266s
INFO  - 2019-03-28 15:02:52.63955800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:02:52.65554000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1298s
INFO  - 2019-03-28 15:02:53.83957800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:02:53.85565100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1259s
INFO  - 2019-03-28 15:02:54.94866600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:02:54.96610800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1323s
INFO  - 2019-03-28 15:02:55.90488000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:02:55.91955700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1217s
INFO  - 2019-03-28 15:02:57.72307200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:02:57.73959500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1266s
INFO  - 2019-03-28 15:03:00.71773900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:03:00.73523200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1321s
INFO  - 2019-03-28 15:03:02.11594000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:03:02.13165200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1324s
INFO  - 2019-03-28 15:03:04.11117300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:03:04.12685700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1275s
INFO  - 2019-03-28 15:03:05.37452900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:03:05.39072200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1283s
INFO  - 2019-03-28 15:03:06.25934100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:03:06.27469800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1292s
INFO  - 2019-03-28 15:03:38.06113000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:03:38.07752000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1302s
INFO  - 2019-03-28 15:03:39.34543600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:03:39.35919600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1439s
INFO  - 2019-03-28 15:03:39.71929000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:03:39.73507100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1267s
INFO  - 2019-03-28 15:03:41.05138400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:03:41.06762800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1221s
INFO  - 2019-03-28 15:05:33.35627800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:05:33.37438100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1345s
INFO  - 2019-03-28 15:05:35.48885600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:05:35.50469000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1317s
INFO  - 2019-03-28 15:05:36.08758200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:05:36.10321800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1242s
INFO  - 2019-03-28 15:05:37.38732700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:05:37.40234800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1282s
INFO  - 2019-03-28 15:05:39.14540800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:05:39.16157900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1353s
INFO  - 2019-03-28 15:05:39.66332600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:05:39.67911100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1228s
INFO  - 2019-03-28 15:05:41.34645300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:05:41.36250800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1641s
INFO  - 2019-03-28 15:05:41.75217300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:05:41.76756200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1272s
INFO  - 2019-03-28 15:05:43.14437200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:05:43.16006300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1236s
INFO  - 2019-03-28 15:05:44.94969100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:05:44.96544600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1249s
INFO  - 2019-03-28 15:05:45.57645400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:05:45.59219200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1516s
INFO  - 2019-03-28 15:05:45.89963600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:05:45.91362200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1200s
INFO  - 2019-03-28 15:05:46.25830100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:05:46.27240700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1157s
INFO  - 2019-03-28 15:05:53.22964900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-03-28 15:05:53.53950100 --> [ffee87feba63788ecb6bb56f50c4f379]【売上登録処理   START】
INFO  - 2019-03-28 15:05:53.55326600 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '523', '株式会社バーニーズジャパン', '1', '1', '2019/03/22', '2019/03/22', '2', '森本律子', '1', '2', '1', '25950', '2077', '28027', NULL, NULL, NULL, '大阪研究所', '繊維', '商品試験', '株式会社バーニーズジャパン', NULL, NULL, '1', 0)
INFO  - 2019-03-28 15:05:53.56803200 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '10005826', '染色堅牢度、混用率、表示指示', '1', NULL, NULL, '6', '606', '7570', '8176', '19FW　DIV23　Scarf　NICOL　①MELANGE ポンチョ', 65264)
INFO  - 2019-03-28 15:05:53.58306700 --> [ffee87feba63788ecb6bb56f50c4f379]【UPDATE】PROCESS: Sales_mdl->update_outside_relation SQL: UPDATE `t_outside_relation` SET `sales_mng_id` = 65264, `sales_detail_id` = 83711, `last_user_id` = 2, `last_datetime` = now() WHERE `report_no` =  '10005826'
INFO  - 2019-03-28 15:05:53.59916300 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '10005827', '染色堅牢度、混用率、表示指示', '1', NULL, NULL, '6', '606', '7570', '8176', '19FW　DIV23　Scarf　NICOL　②チェックマフラー ISCHIA', 65264)
INFO  - 2019-03-28 15:05:53.61406700 --> [ffee87feba63788ecb6bb56f50c4f379]【UPDATE】PROCESS: Sales_mdl->update_outside_relation SQL: UPDATE `t_outside_relation` SET `sales_mng_id` = 65264, `sales_detail_id` = 83712, `last_user_id` = 2, `last_datetime` = now() WHERE `report_no` =  '10005827'
INFO  - 2019-03-28 15:05:53.62827100 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '10005828', '染色堅牢度、混用率、表示指示', '1', NULL, NULL, '6', '865', '10810', '11675', '19FW　DIV23　Scarf　NICOL　③W-FACEマフラー ALTEA', 65264)
INFO  - 2019-03-28 15:05:53.64332500 --> [ffee87feba63788ecb6bb56f50c4f379]【UPDATE】PROCESS: Sales_mdl->update_outside_relation SQL: UPDATE `t_outside_relation` SET `sales_mng_id` = 65264, `sales_detail_id` = 83713, `last_user_id` = 2, `last_datetime` = now() WHERE `report_no` =  '10005828'
INFO  - 2019-03-28 15:05:53.71944700 --> [ffee87feba63788ecb6bb56f50c4f379]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_mng SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money + 28027, `last_user_id` = 2, `last_datetime` = now() WHERE `target_month` =  '201903' AND `customer_disp_name` =  '株式会社バーニーズジャパン' AND `institute_id` =  '1' AND `depart_id` =  '2'
INFO  - 2019-03-28 15:05:53.73474000 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), '37931', 65264, '2019/03/22', '28027')
INFO  - 2019-03-28 15:05:53.76757800 --> [ffee87feba63788ecb6bb56f50c4f379]【売上登録処理   END】
INFO  - 2019-03-28 15:05:53.83282100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.7250s
INFO  - 2019-03-28 15:06:01.04807700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-28 15:06:02.09468800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_list  Method:index execution time=1.1211s
INFO  - 2019-03-28 15:07:01.28567500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-03-28 15:07:01.39761500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.1852s
INFO  - 2019-03-28 15:07:03.31482800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-28 15:07:04.34142800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_list  Method:index execution time=1.1347s
INFO  - 2019-03-28 15:07:06.92842600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-03-28 15:07:07.04112900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.1847s
INFO  - 2019-03-28 15:07:48.63525400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:07:48.65023500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1336s
INFO  - 2019-03-28 15:10:03.94802200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:10:03.96322900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1319s
INFO  - 2019-03-28 15:10:04.67775400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:10:04.69211700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1267s
INFO  - 2019-03-28 15:10:07.39677700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:10:07.41160200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1290s
INFO  - 2019-03-28 15:10:08.47368100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:10:08.48910000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1415s
INFO  - 2019-03-28 15:10:08.95777300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:10:08.97290600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1232s
INFO  - 2019-03-28 15:10:11.69541000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:10:11.71044600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1266s
INFO  - 2019-03-28 15:10:12.76425200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:10:12.77937600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1305s
INFO  - 2019-03-28 15:10:13.51340700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:10:13.52851200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1256s
INFO  - 2019-03-28 15:10:15.35513200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:10:15.37160700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1956s
INFO  - 2019-03-28 15:10:15.66263300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:10:15.67769200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1266s
INFO  - 2019-03-28 15:10:18.56128100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:10:18.57663700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1284s
INFO  - 2019-03-28 15:10:24.42027900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:10:24.43553500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1280s
INFO  - 2019-03-28 15:10:25.38927700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:10:25.40449100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1289s
INFO  - 2019-03-28 15:10:26.54968600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:10:26.56461700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1319s
INFO  - 2019-03-28 15:10:26.89423500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:10:26.90985800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1249s
INFO  - 2019-03-28 15:10:28.19220700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:10:28.20799500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1272s
INFO  - 2019-03-28 15:11:17.81289900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:11:17.82699600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1184s
INFO  - 2019-03-28 15:11:19.45573100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:11:19.46994400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1202s
INFO  - 2019-03-28 15:11:20.32095100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 15:11:20.33604600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1313s
INFO  - 2019-03-28 15:12:36.77165900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-03-28 15:12:37.13444500 --> [ffee87feba63788ecb6bb56f50c4f379]【売上登録処理   START】
INFO  - 2019-03-28 15:12:37.14820100 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '523', '株式会社バーニーズジャパン', '1', '1', '2019/03/27', '2019/03/27', '2', '森本律子', '1', '2', '1', '50760', '4060', '54820', NULL, NULL, NULL, '大阪研究所', '繊維', '商品試験', '株式会社バーニーズジャパン', NULL, NULL, '1', 0)
INFO  - 2019-03-28 15:12:37.16147800 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '10005829', '染色堅牢度、混用率、表示指示', '1', NULL, NULL, '6', '1059', '13240', '14299', '19FW　DIV61　COAT　CIELLE　2099803', 65265)
INFO  - 2019-03-28 15:12:37.17556000 --> [ffee87feba63788ecb6bb56f50c4f379]【UPDATE】PROCESS: Sales_mdl->update_outside_relation SQL: UPDATE `t_outside_relation` SET `sales_mng_id` = 65265, `sales_detail_id` = 83714, `last_user_id` = 2, `last_datetime` = now() WHERE `report_no` =  '10005829'
INFO  - 2019-03-28 15:12:37.18991100 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '10005830', '染色堅牢度、混用率、表示指示', '1', NULL, NULL, '6', '1059', '13240', '14299', '19FW　DIV61　COAT　CIELLE　2099803', 65265)
INFO  - 2019-03-28 15:12:37.20516000 --> [ffee87feba63788ecb6bb56f50c4f379]【UPDATE】PROCESS: Sales_mdl->update_outside_relation SQL: UPDATE `t_outside_relation` SET `sales_mng_id` = 65265, `sales_detail_id` = 83715, `last_user_id` = 2, `last_datetime` = now() WHERE `report_no` =  '10005830'
INFO  - 2019-03-28 15:12:37.22091600 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '10005831', '染色堅牢度、混用率、表示指示', '1', NULL, NULL, '6', '971', '12140', '13111', '19FW　DIV61　COAT　CIELLE　2099803', 65265)
INFO  - 2019-03-28 15:12:37.23614600 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '10005832', '染色堅牢度、混用率、表示指示', '1', NULL, NULL, '6', '971', '12140', '13111', '19FW　DIV61　COAT　CIELLE　2099803', 65265)
INFO  - 2019-03-28 15:12:37.25138400 --> [ffee87feba63788ecb6bb56f50c4f379]【UPDATE】PROCESS: Sales_mdl->update_outside_relation SQL: UPDATE `t_outside_relation` SET `sales_mng_id` = 65265, `sales_detail_id` = 83717, `last_user_id` = 2, `last_datetime` = now() WHERE `report_no` =  '10005832'
INFO  - 2019-03-28 15:12:37.33263700 --> [ffee87feba63788ecb6bb56f50c4f379]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_mng SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money + 54820, `last_user_id` = 2, `last_datetime` = now() WHERE `target_month` =  '201903' AND `customer_disp_name` =  '株式会社バーニーズジャパン' AND `institute_id` =  '1' AND `depart_id` =  '2'
INFO  - 2019-03-28 15:12:37.34859500 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), '37931', 65265, '2019/03/27', '54820')
INFO  - 2019-03-28 15:12:37.38188700 --> [ffee87feba63788ecb6bb56f50c4f379]【売上登録処理   END】
INFO  - 2019-03-28 15:12:37.45101100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.7966s
INFO  - 2019-03-28 15:12:38.21066500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-28 15:12:39.23342700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_list  Method:index execution time=1.0980s
INFO  - 2019-03-28 15:13:09.61762800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-28 15:13:10.98635500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=1.4392s
INFO  - 2019-03-28 15:13:17.44017700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:output
INFO  - 2019-03-28 15:13:17.45430100 --> [ffee87feba63788ecb6bb56f50c4f379]【請求書発行処理   START)】
INFO  - 2019-03-28 15:13:17.67464000 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0049941', 'S', '2019/03/28', '1', '株式会社バーニーズジャパン', '株式会社バーニーズジャパン', '84174', '2019/03/27', '523')
INFO  - 2019-03-28 15:13:17.68952200 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50201, '65262')
INFO  - 2019-03-28 15:13:17.70403700 --> [ffee87feba63788ecb6bb56f50c4f379]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049941' WHERE `sales_mng_id` =  '65262'
INFO  - 2019-03-28 15:13:17.91192400 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0049942', 'S', '2019/03/28', '1', '株式会社バーニーズジャパン', '株式会社バーニーズジャパン', '54820', '2019/03/27', '523')
INFO  - 2019-03-28 15:13:17.92469000 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50202, '65265')
INFO  - 2019-03-28 15:13:17.93780300 --> [ffee87feba63788ecb6bb56f50c4f379]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049942' WHERE `sales_mng_id` =  '65265'
INFO  - 2019-03-28 15:13:18.15704600 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0049943', 'S', '2019/03/28', '1', '株式会社バーニーズジャパン', '株式会社バーニーズジャパン', '49292', '2019/03/26', '523')
INFO  - 2019-03-28 15:13:18.17357600 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50203, '65263')
INFO  - 2019-03-28 15:13:18.18792800 --> [ffee87feba63788ecb6bb56f50c4f379]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049943' WHERE `sales_mng_id` =  '65263'
INFO  - 2019-03-28 15:13:18.39300200 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0049944', 'S', '2019/03/28', '1', '株式会社バーニーズジャパン', '株式会社バーニーズジャパン', '28027', '2019/03/22', '523')
INFO  - 2019-03-28 15:13:18.40775200 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50204, '65264')
INFO  - 2019-03-28 15:13:18.42209600 --> [ffee87feba63788ecb6bb56f50c4f379]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049944' WHERE `sales_mng_id` =  '65264'
INFO  - 2019-03-28 15:13:20.62590600 --> [ffee87feba63788ecb6bb56f50c4f379]【請求書発行処理   END)】
INFO  - 2019-03-28 15:13:20.69888800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:bill_sales_print  Method:output execution time=3.3583s
INFO  - 2019-03-28 15:13:26.84157800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-28 15:13:29.98846400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=3.2184s
INFO  - 2019-03-28 15:13:38.32898500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-03-28 15:13:38.34574100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1531s
INFO  - 2019-03-28 15:13:44.73486900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-03-28 15:13:44.75194100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1319s
INFO  - 2019-03-28 15:13:51.09932900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-03-28 15:13:51.11621600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1239s
INFO  - 2019-03-28 15:13:56.85547500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-03-28 15:13:56.87211000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1334s
INFO  - 2019-03-28 15:21:02.63309500 --> [781a8b96bc185526ed103491220ae0ff]<PROCESS-START> USER-ID: 1 Controller:sales_sum_print  Method:index
INFO  - 2019-03-28 15:21:02.74239400 --> [781a8b96bc185526ed103491220ae0ff]<PROCESS-END> Controller:sales_sum_print  Method:index execution time=0.1955s
INFO  - 2019-03-28 15:21:10.95074700 --> [781a8b96bc185526ed103491220ae0ff]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:sum_print_order
INFO  - 2019-03-28 15:21:10.96543200 --> [781a8b96bc185526ed103491220ae0ff]<PROCESS-END> Controller:ajax  Method:sum_print_order execution time=0.1319s
INFO  - 2019-03-28 15:21:52.60091000 --> [781a8b96bc185526ed103491220ae0ff]<PROCESS-START> USER-ID: 1 Controller:sales_sum_print  Method:index
ERROR - 2019-03-28 15:21:55.49664900 --> [781a8b96bc185526ed103491220ae0ff]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"781a8b96bc185526ed103491220ae0ff";s:10:"ip_address";s:14:"172.68.101.156";s:10:"user_agent";s:101:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36";s:13:"last_activity";i:1553754062;}f47ca38646e099767dd87dfe9f69b292||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:231(CI_Session->set_userdata) [tab_menu||Array]
D:\SKK_APP\application\hooks\Pre_display.php:170(Pre_display->_get_tab_menu)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

ERROR - 2019-03-28 15:21:55.52412200 --> [781a8b96bc185526ed103491220ae0ff]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"781a8b96bc185526ed103491220ae0ff";s:10:"ip_address";s:14:"172.68.101.156";s:10:"user_agent";s:101:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36";s:13:"last_activity";i:1553754062;}f47ca38646e099767dd87dfe9f69b292||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:275(CI_Session->set_userdata) [local_menu||Array]
D:\SKK_APP\application\hooks\Pre_display.php:173(Pre_display->_get_local_menu)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

ERROR - 2019-03-28 15:21:55.55643000 --> [781a8b96bc185526ed103491220ae0ff]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"781a8b96bc185526ed103491220ae0ff";s:10:"ip_address";s:14:"172.68.101.156";s:10:"user_agent";s:101:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36";s:13:"last_activity";i:1553754062;}f47ca38646e099767dd87dfe9f69b292||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:308(CI_Session->set_userdata) [page_info||Array]
D:\SKK_APP\application\hooks\Pre_display.php:186(Pre_display->_get_page_info)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

INFO  - 2019-03-28 15:21:55.59441300 --> [781a8b96bc185526ed103491220ae0ff]<PROCESS-END> Controller:sales_sum_print  Method:index execution time=2.9971s
INFO  - 2019-03-28 15:22:37.87457100 --> [781a8b96bc185526ed103491220ae0ff]<PROCESS-START> USER-ID: 1 Controller:sales_sum_print  Method:index
ERROR - 2019-03-28 15:22:40.66273900 --> [781a8b96bc185526ed103491220ae0ff]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"781a8b96bc185526ed103491220ae0ff";s:10:"ip_address";s:14:"172.68.101.156";s:10:"user_agent";s:101:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36";s:13:"last_activity";i:1553754062;}f47ca38646e099767dd87dfe9f69b292||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:231(CI_Session->set_userdata) [tab_menu||Array]
D:\SKK_APP\application\hooks\Pre_display.php:170(Pre_display->_get_tab_menu)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

ERROR - 2019-03-28 15:22:40.69450200 --> [781a8b96bc185526ed103491220ae0ff]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"781a8b96bc185526ed103491220ae0ff";s:10:"ip_address";s:14:"172.68.101.156";s:10:"user_agent";s:101:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36";s:13:"last_activity";i:1553754062;}f47ca38646e099767dd87dfe9f69b292||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:275(CI_Session->set_userdata) [local_menu||Array]
D:\SKK_APP\application\hooks\Pre_display.php:173(Pre_display->_get_local_menu)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

ERROR - 2019-03-28 15:22:40.72992300 --> [781a8b96bc185526ed103491220ae0ff]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"781a8b96bc185526ed103491220ae0ff";s:10:"ip_address";s:14:"172.68.101.156";s:10:"user_agent";s:101:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36";s:13:"last_activity";i:1553754062;}f47ca38646e099767dd87dfe9f69b292||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:308(CI_Session->set_userdata) [page_info||Array]
D:\SKK_APP\application\hooks\Pre_display.php:186(Pre_display->_get_page_info)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

INFO  - 2019-03-28 15:22:40.74547700 --> [781a8b96bc185526ed103491220ae0ff]<PROCESS-END> Controller:sales_sum_print  Method:index execution time=2.8879s
INFO  - 2019-03-28 15:28:11.41742700 --> [2c4417383f46f121ee1f98662cdc6ada]<PROCESS-START> USER-ID: 15 Controller:sales_spec_print  Method:index
ERROR - 2019-03-28 15:28:12.66647100 --> [2c4417383f46f121ee1f98662cdc6ada]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"2c4417383f46f121ee1f98662cdc6ada";s:10:"ip_address";s:14:"172.123.156.15";s:10:"user_agent";s:102:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36";s:13:"last_activity";i:1553739624;}6b0a7f5fbc71e0025976f448d8acfda5||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:231(CI_Session->set_userdata) [tab_menu||Array]
D:\SKK_APP\application\hooks\Pre_display.php:170(Pre_display->_get_tab_menu)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

ERROR - 2019-03-28 15:28:12.69381500 --> [2c4417383f46f121ee1f98662cdc6ada]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"2c4417383f46f121ee1f98662cdc6ada";s:10:"ip_address";s:14:"172.123.156.15";s:10:"user_agent";s:102:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36";s:13:"last_activity";i:1553739624;}6b0a7f5fbc71e0025976f448d8acfda5||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:275(CI_Session->set_userdata) [local_menu||Array]
D:\SKK_APP\application\hooks\Pre_display.php:173(Pre_display->_get_local_menu)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

ERROR - 2019-03-28 15:28:12.72628800 --> [2c4417383f46f121ee1f98662cdc6ada]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"2c4417383f46f121ee1f98662cdc6ada";s:10:"ip_address";s:14:"172.123.156.15";s:10:"user_agent";s:102:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36";s:13:"last_activity";i:1553739624;}6b0a7f5fbc71e0025976f448d8acfda5||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:308(CI_Session->set_userdata) [page_info||Array]
D:\SKK_APP\application\hooks\Pre_display.php:186(Pre_display->_get_page_info)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

INFO  - 2019-03-28 15:28:12.74209400 --> [2c4417383f46f121ee1f98662cdc6ada]<PROCESS-END> Controller:sales_spec_print  Method:index execution time=1.3744s
INFO  - 2019-03-28 15:35:44.39093600 --> [781a8b96bc185526ed103491220ae0ff]<PROCESS-START> USER-ID: 1 Controller:sales_sum_print  Method:index
ERROR - 2019-03-28 15:35:45.48493900 --> [781a8b96bc185526ed103491220ae0ff]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"781a8b96bc185526ed103491220ae0ff";s:10:"ip_address";s:14:"172.68.101.156";s:10:"user_agent";s:101:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36";s:13:"last_activity";i:1553754062;}f47ca38646e099767dd87dfe9f69b292||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:231(CI_Session->set_userdata) [tab_menu||Array]
D:\SKK_APP\application\hooks\Pre_display.php:170(Pre_display->_get_tab_menu)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

ERROR - 2019-03-28 15:35:45.51226400 --> [781a8b96bc185526ed103491220ae0ff]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"781a8b96bc185526ed103491220ae0ff";s:10:"ip_address";s:14:"172.68.101.156";s:10:"user_agent";s:101:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36";s:13:"last_activity";i:1553754062;}f47ca38646e099767dd87dfe9f69b292||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:275(CI_Session->set_userdata) [local_menu||Array]
D:\SKK_APP\application\hooks\Pre_display.php:173(Pre_display->_get_local_menu)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

ERROR - 2019-03-28 15:35:45.54418600 --> [781a8b96bc185526ed103491220ae0ff]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"781a8b96bc185526ed103491220ae0ff";s:10:"ip_address";s:14:"172.68.101.156";s:10:"user_agent";s:101:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36";s:13:"last_activity";i:1553754062;}f47ca38646e099767dd87dfe9f69b292||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:308(CI_Session->set_userdata) [page_info||Array]
D:\SKK_APP\application\hooks\Pre_display.php:186(Pre_display->_get_page_info)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

INFO  - 2019-03-28 15:35:45.55981300 --> [781a8b96bc185526ed103491220ae0ff]<PROCESS-END> Controller:sales_sum_print  Method:index execution time=1.1813s
INFO  - 2019-03-28 15:37:27.05107300 --> [781a8b96bc185526ed103491220ae0ff]<PROCESS-START> USER-ID: 1 Controller:sales_sum_print  Method:index
ERROR - 2019-03-28 15:37:29.04978500 --> [781a8b96bc185526ed103491220ae0ff]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"781a8b96bc185526ed103491220ae0ff";s:10:"ip_address";s:14:"172.68.101.156";s:10:"user_agent";s:101:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36";s:13:"last_activity";i:1553754062;}f47ca38646e099767dd87dfe9f69b292||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:231(CI_Session->set_userdata) [tab_menu||Array]
D:\SKK_APP\application\hooks\Pre_display.php:170(Pre_display->_get_tab_menu)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

ERROR - 2019-03-28 15:37:29.08360200 --> [781a8b96bc185526ed103491220ae0ff]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"781a8b96bc185526ed103491220ae0ff";s:10:"ip_address";s:14:"172.68.101.156";s:10:"user_agent";s:101:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36";s:13:"last_activity";i:1553754062;}f47ca38646e099767dd87dfe9f69b292||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:275(CI_Session->set_userdata) [local_menu||Array]
D:\SKK_APP\application\hooks\Pre_display.php:173(Pre_display->_get_local_menu)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

ERROR - 2019-03-28 15:37:29.11548200 --> [781a8b96bc185526ed103491220ae0ff]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"781a8b96bc185526ed103491220ae0ff";s:10:"ip_address";s:14:"172.68.101.156";s:10:"user_agent";s:101:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36";s:13:"last_activity";i:1553754062;}f47ca38646e099767dd87dfe9f69b292||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:308(CI_Session->set_userdata) [page_info||Array]
D:\SKK_APP\application\hooks\Pre_display.php:186(Pre_display->_get_page_info)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

INFO  - 2019-03-28 15:37:29.13258800 --> [781a8b96bc185526ed103491220ae0ff]<PROCESS-END> Controller:sales_sum_print  Method:index execution time=2.0912s
INFO  - 2019-03-28 15:38:43.32699500 --> [781a8b96bc185526ed103491220ae0ff]<PROCESS-START> USER-ID: 1 Controller:sales_sum_print  Method:index
ERROR - 2019-03-28 15:38:45.50532600 --> [781a8b96bc185526ed103491220ae0ff]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"781a8b96bc185526ed103491220ae0ff";s:10:"ip_address";s:14:"172.68.101.156";s:10:"user_agent";s:101:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36";s:13:"last_activity";i:1553754062;}f47ca38646e099767dd87dfe9f69b292||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:231(CI_Session->set_userdata) [tab_menu||Array]
D:\SKK_APP\application\hooks\Pre_display.php:170(Pre_display->_get_tab_menu)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

ERROR - 2019-03-28 15:38:45.53273500 --> [781a8b96bc185526ed103491220ae0ff]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"781a8b96bc185526ed103491220ae0ff";s:10:"ip_address";s:14:"172.68.101.156";s:10:"user_agent";s:101:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36";s:13:"last_activity";i:1553754062;}f47ca38646e099767dd87dfe9f69b292||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:275(CI_Session->set_userdata) [local_menu||Array]
D:\SKK_APP\application\hooks\Pre_display.php:173(Pre_display->_get_local_menu)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

ERROR - 2019-03-28 15:38:45.56452600 --> [781a8b96bc185526ed103491220ae0ff]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"781a8b96bc185526ed103491220ae0ff";s:10:"ip_address";s:14:"172.68.101.156";s:10:"user_agent";s:101:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36";s:13:"last_activity";i:1553754062;}f47ca38646e099767dd87dfe9f69b292||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:308(CI_Session->set_userdata) [page_info||Array]
D:\SKK_APP\application\hooks\Pre_display.php:186(Pre_display->_get_page_info)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

INFO  - 2019-03-28 15:38:45.58135200 --> [781a8b96bc185526ed103491220ae0ff]<PROCESS-END> Controller:sales_sum_print  Method:index execution time=2.2337s
INFO  - 2019-03-28 15:40:46.25620600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-28 15:40:49.90974100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_list  Method:index execution time=3.7329s
INFO  - 2019-03-28 15:41:03.91921600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-28 15:41:05.90629700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_list  Method:index execution time=2.0613s
INFO  - 2019-03-28 15:41:15.44981000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:edit
INFO  - 2019-03-28 15:41:15.55599100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_input  Method:edit execution time=0.1768s
INFO  - 2019-03-28 15:41:25.99173900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:edit
INFO  - 2019-03-28 15:41:26.67138000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_input  Method:edit execution time=0.7748s
INFO  - 2019-03-28 15:41:29.32913000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:edit
INFO  - 2019-03-28 15:41:29.90847400 --> [ffee87feba63788ecb6bb56f50c4f379]【売上変更処理   START】
INFO  - 2019-03-28 15:41:29.93256700 --> [ffee87feba63788ecb6bb56f50c4f379]【UPDATE】PROCESS: Sales_mdl->update_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `customer_id` = '523', `customer_disp_name` = '株式会社バーニーズジャパン', `credit_type` = '1', `customer_type` = '1', `bill_date` = '2019/03/27', `book_date` = '2019/03/27', `handler_id` = '5', `handler_name` = '畑井百合子', `institute_id` = '1', `depart_id` = '2', `abstract_id` = '1', `sum_no_tax` = '77640', `sum_tax` = '6210', `sum_money` = '83850', `sep_month_from` = NULL, `sep_month_to` = NULL, `cutoff_date` = NULL, `institute_name` = '大阪研究所', `depart_name` = '繊維', `abstract_name` = '商品試験', `customer_name` = '株式会社バーニーズジャパン', `cutoff_date_from` = NULL, `cutoff_date_to` = NULL, `data_status_type` = '1', `sep_depart_flg` = 0 WHERE `sales_mng_id` =  '65262'
INFO  - 2019-03-28 15:41:29.94742400 --> [ffee87feba63788ecb6bb56f50c4f379]【DELETE(物理削除)】PROCESS: Sales_mdl->update_data SQL: DELETE FROM `t_sales_detail`
WHERE `sales_mng_id` =  '65262'
INFO  - 2019-03-28 15:41:29.97854300 --> [ffee87feba63788ecb6bb56f50c4f379]【UPDATE】PROCESS: Sales_mdl->nullupdate_outside_relation SQL: UPDATE `t_outside_relation` SET `sales_mng_id` = NULL, `sales_detail_id` = NULL, `last_user_id` = 2, `last_datetime` = now() WHERE `sales_mng_id` =  '65262'
INFO  - 2019-03-28 15:41:29.99451000 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->update_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '10005874', '染色堅牢度、混用率、表示指示', '1', NULL, NULL, '6', '1275', '15940', '17215', '19FW　DIV23　Scarf　CREATIVE SRL　①MOWO PRI RIV STOLE', '65262')
INFO  - 2019-03-28 15:41:30.01001800 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->update_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '10005875', '染色堅牢度、混用率、表示指示', '1', NULL, NULL, '6', '987', '12340', '13327', '19FW　DIV23　Scarf　CREATIVE SRL　②MOWO PRI RIV STOLE', '65262')
INFO  - 2019-03-28 15:41:30.02528400 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->update_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '10005876', '染色堅牢度、混用率、表示指示', '1', NULL, NULL, '6', '987', '12340', '13327', '19FW　DIV23　Scarf　CREATIVE SRL　③MOWO PRI RIV STOLE', '65262')
INFO  - 2019-03-28 15:41:30.04199300 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->update_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '10005877', '染色堅牢度、混用率、表示指示', '1', NULL, NULL, '6', '987', '12340', '13327', '19FW　DIV23　Scarf　CREATIVE SRL　④MOWO PRI RIV STOLE', '65262')
INFO  - 2019-03-28 15:41:30.05755100 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->update_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '10005878', '染色堅牢度、混用率、表示指示', '1', NULL, NULL, '6', '987', '12340', '13327', '19FW　DIV23　Scarf　CREATIVE SRL　⑤MOWO PRI RIV STOLE', '65262')
INFO  - 2019-03-28 15:41:30.07370500 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->update_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '10005879', '染色堅牢度、混用率、表示指示', '1', NULL, NULL, '6', '987', '12340', '13327', '19FW　DIV23　Scarf　CREATIVE SRL　⑥MOWO PRI RIV STOLE', '65262')
INFO  - 2019-03-28 15:41:30.08947900 --> [ffee87feba63788ecb6bb56f50c4f379]【DELETE(物理削除)】PROCESS: Sales_mdl->update_data SQL: DELETE FROM `t_sales_before`
WHERE `sales_mng_id` =  '65262'
INFO  - 2019-03-28 15:41:30.10416800 --> [ffee87feba63788ecb6bb56f50c4f379]【DELETE(物理削除)】PROCESS: Sales_mdl->update_data SQL: DELETE FROM `t_sales_depart`
WHERE `sales_mng_id` =  '65262'
INFO  - 2019-03-28 15:41:30.12148200 --> [ffee87feba63788ecb6bb56f50c4f379]【UPDATE】PROCESS: Sales_mdl->update_del_bill_status SQL: UPDATE `t_sales_mng` SET `data_status_type` = '1', `last_user_id` = 2, `last_datetime` = now() WHERE `sales_mng_id` in (65262) 
INFO  - 2019-03-28 15:41:30.13582300 --> [ffee87feba63788ecb6bb56f50c4f379]【DELETE(物理削除)】PROCESS: Sales_mdl->delete_bill_print SQL: DELETE FROM `t_bill_mng`
WHERE `bill_mng_id` =  '50201'
INFO  - 2019-03-28 15:41:30.29394400 --> [ffee87feba63788ecb6bb56f50c4f379]【DELETE(物理削除)】PROCESS: Receivable_mng_mdl->back_sales_data SQL: DELETE FROM `t_receivable_data`
WHERE `sales_mng_id` =  '65262'
INFO  - 2019-03-28 15:41:30.30673800 --> [ffee87feba63788ecb6bb56f50c4f379]【UPDATE】PROCESS: Receivable_mng_mdl->back_sales_data SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money - 84174, `last_user_id` = 2, `last_datetime` = now() WHERE `receivable_mng_id` =  '37931'
INFO  - 2019-03-28 15:41:30.32616300 --> [ffee87feba63788ecb6bb56f50c4f379]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_mng SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money + 83850, `last_user_id` = 2, `last_datetime` = now() WHERE `target_month` =  '201903' AND `customer_disp_name` =  '株式会社バーニーズジャパン' AND `institute_id` =  '1' AND `depart_id` =  '2'
INFO  - 2019-03-28 15:41:30.34034600 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), '37931', '65262', '2019/03/27', '83850')
INFO  - 2019-03-28 15:41:30.36950400 --> [ffee87feba63788ecb6bb56f50c4f379]【売上変更処理   END】
INFO  - 2019-03-28 15:41:30.43485100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_input  Method:edit execution time=1.2449s
INFO  - 2019-03-28 15:41:31.50632800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-28 15:41:33.48945400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_list  Method:index execution time=2.0588s
INFO  - 2019-03-28 15:41:36.73433700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-28 15:41:38.13880900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=1.5089s
INFO  - 2019-03-28 15:41:44.18164200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:output
INFO  - 2019-03-28 15:41:44.19826400 --> [ffee87feba63788ecb6bb56f50c4f379]【請求書発行処理   START)】
INFO  - 2019-03-28 15:41:44.22080300 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0049941', 'S', '2019/03/28', '1', '株式会社バーニーズジャパン', '株式会社バーニーズジャパン', '83850', '2019/03/27', '523')
INFO  - 2019-03-28 15:41:44.23767500 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50205, '65262')
INFO  - 2019-03-28 15:41:44.25259600 --> [ffee87feba63788ecb6bb56f50c4f379]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049941' WHERE `sales_mng_id` =  '65262'
INFO  - 2019-03-28 15:41:44.83515700 --> [ffee87feba63788ecb6bb56f50c4f379]【請求書発行処理   END)】
INFO  - 2019-03-28 15:41:44.89632100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:bill_sales_print  Method:output execution time=0.8281s
INFO  - 2019-03-28 15:41:46.19871600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-28 15:41:49.34964900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=3.1913s
INFO  - 2019-03-28 15:41:55.10284400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-03-28 15:41:55.12069100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1420s
INFO  - 2019-03-28 16:08:11.79970900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-28 16:08:11.88101300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1582s
INFO  - 2019-03-28 16:08:15.10737600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-03-28 16:08:15.13071600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1346s
INFO  - 2019-03-28 16:08:15.90856700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-03-28 16:08:15.93023300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1381s
INFO  - 2019-03-28 16:08:17.48336600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_info
INFO  - 2019-03-28 16:08:17.50101400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:customer_info execution time=0.1298s
INFO  - 2019-03-28 16:08:24.96760000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_list
INFO  - 2019-03-28 16:08:24.98397200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:handler_list execution time=0.1313s
INFO  - 2019-03-28 16:08:25.68911300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_info
INFO  - 2019-03-28 16:08:25.70505400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:handler_info execution time=0.1254s
INFO  - 2019-03-28 16:08:35.91906200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:08:35.93348900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1172s
INFO  - 2019-03-28 16:08:37.63812800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:08:37.65244600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1271s
INFO  - 2019-03-28 16:08:37.70170500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-03-28 16:08:37.71643300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1231s
INFO  - 2019-03-28 16:08:54.86250000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 16:08:54.87879200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1295s
INFO  - 2019-03-28 16:08:55.98671500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 16:08:56.00276600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1304s
INFO  - 2019-03-28 16:08:56.52573100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 16:08:56.54080800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1204s
INFO  - 2019-03-28 16:08:57.78511500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 16:08:57.80109200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1286s
INFO  - 2019-03-28 16:09:03.16889800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 16:09:03.18482900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1270s
INFO  - 2019-03-28 16:09:04.98628100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 16:09:05.00160100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1326s
INFO  - 2019-03-28 16:09:07.13098200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 16:09:07.14862200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1246s
INFO  - 2019-03-28 16:09:10.06124300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 16:09:10.07707900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1359s
INFO  - 2019-03-28 16:09:14.28839500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 16:09:14.30471500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1333s
INFO  - 2019-03-28 16:09:15.61632800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 16:09:15.63371900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1262s
INFO  - 2019-03-28 16:09:40.11709600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-28 16:09:40.36940300 --> [ffee87feba63788ecb6bb56f50c4f379]【売上登録処理   START】
INFO  - 2019-03-28 16:09:40.38890400 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '2005', '三ツ星靴下株式会社', '1', '1', '2019/04/20', '2019/03/28', '14', '大木美緒', '1', '2', '5', '12000', '960', '12960', NULL, NULL, '20', '大阪研究所', '繊維', '機能性評価', '三ツ星靴下株式会社', '2019/03/21', '2019/04/20', '1', 0)
INFO  - 2019-03-28 16:09:40.40495500 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '10005953', '靴下　着圧測定', '2', NULL, NULL, '6', '960', '12000', '12960', '①リンパサポート着圧ソックス　つま先あり　②リンパサポート着圧ソックス　つま先なし', 65266)
INFO  - 2019-03-28 16:09:40.54011900 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Receivable_mng_mdl->_regist_mng SQL: INSERT INTO `t_receivable_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `target_month`, `customer_id`, `customer_disp_name`, `institute_id`, `institute_name`, `depart_id`, `depart_name`, `sales_money`) VALUES (2, 2, now(), '201904', '2005', '三ツ星靴下株式会社', NULL, NULL, NULL, NULL, '12960')
INFO  - 2019-03-28 16:09:40.55494400 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), 38151, 65266, '2019/04/20', '12960')
INFO  - 2019-03-28 16:09:40.58003700 --> [ffee87feba63788ecb6bb56f50c4f379]【売上登録処理   END】
INFO  - 2019-03-28 16:09:40.64247000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_input  Method:index execution time=0.6363s
INFO  - 2019-03-28 16:09:41.48358100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-28 16:09:41.55378100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1505s
INFO  - 2019-03-28 16:12:09.04996100 --> [781a8b96bc185526ed103491220ae0ff]<PROCESS-START> USER-ID: 1 Controller:sales_sum_print  Method:index
ERROR - 2019-03-28 16:12:10.96138200 --> [781a8b96bc185526ed103491220ae0ff]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"781a8b96bc185526ed103491220ae0ff";s:10:"ip_address";s:14:"172.68.101.156";s:10:"user_agent";s:101:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36";s:13:"last_activity";i:1553754062;}f47ca38646e099767dd87dfe9f69b292||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:231(CI_Session->set_userdata) [tab_menu||Array]
D:\SKK_APP\application\hooks\Pre_display.php:170(Pre_display->_get_tab_menu)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

ERROR - 2019-03-28 16:12:10.99280600 --> [781a8b96bc185526ed103491220ae0ff]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"781a8b96bc185526ed103491220ae0ff";s:10:"ip_address";s:14:"172.68.101.156";s:10:"user_agent";s:101:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36";s:13:"last_activity";i:1553754062;}f47ca38646e099767dd87dfe9f69b292||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:275(CI_Session->set_userdata) [local_menu||Array]
D:\SKK_APP\application\hooks\Pre_display.php:173(Pre_display->_get_local_menu)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

ERROR - 2019-03-28 16:12:11.02374700 --> [781a8b96bc185526ed103491220ae0ff]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"781a8b96bc185526ed103491220ae0ff";s:10:"ip_address";s:14:"172.68.101.156";s:10:"user_agent";s:101:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36";s:13:"last_activity";i:1553754062;}f47ca38646e099767dd87dfe9f69b292||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:308(CI_Session->set_userdata) [page_info||Array]
D:\SKK_APP\application\hooks\Pre_display.php:186(Pre_display->_get_page_info)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

INFO  - 2019-03-28 16:12:11.03732100 --> [781a8b96bc185526ed103491220ae0ff]<PROCESS-END> Controller:sales_sum_print  Method:index execution time=1.9957s
INFO  - 2019-03-28 16:12:54.35915900 --> [781a8b96bc185526ed103491220ae0ff]<PROCESS-START> USER-ID: 1 Controller:sales_sum_print  Method:index
ERROR - 2019-03-28 16:12:56.45455400 --> [781a8b96bc185526ed103491220ae0ff]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"781a8b96bc185526ed103491220ae0ff";s:10:"ip_address";s:14:"172.68.101.156";s:10:"user_agent";s:101:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36";s:13:"last_activity";i:1553754062;}f47ca38646e099767dd87dfe9f69b292||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:231(CI_Session->set_userdata) [tab_menu||Array]
D:\SKK_APP\application\hooks\Pre_display.php:170(Pre_display->_get_tab_menu)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

ERROR - 2019-03-28 16:12:56.48235600 --> [781a8b96bc185526ed103491220ae0ff]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"781a8b96bc185526ed103491220ae0ff";s:10:"ip_address";s:14:"172.68.101.156";s:10:"user_agent";s:101:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36";s:13:"last_activity";i:1553754062;}f47ca38646e099767dd87dfe9f69b292||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:275(CI_Session->set_userdata) [local_menu||Array]
D:\SKK_APP\application\hooks\Pre_display.php:173(Pre_display->_get_local_menu)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

ERROR - 2019-03-28 16:12:56.51445600 --> [781a8b96bc185526ed103491220ae0ff]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"781a8b96bc185526ed103491220ae0ff";s:10:"ip_address";s:14:"172.68.101.156";s:10:"user_agent";s:101:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36";s:13:"last_activity";i:1553754062;}f47ca38646e099767dd87dfe9f69b292||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:308(CI_Session->set_userdata) [page_info||Array]
D:\SKK_APP\application\hooks\Pre_display.php:186(Pre_display->_get_page_info)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

INFO  - 2019-03-28 16:12:56.53072500 --> [781a8b96bc185526ed103491220ae0ff]<PROCESS-END> Controller:sales_sum_print  Method:index execution time=2.1928s
INFO  - 2019-03-28 16:13:56.55267000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-03-28 16:13:56.57602100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1364s
INFO  - 2019-03-28 16:13:57.67351200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_info
INFO  - 2019-03-28 16:13:57.69204700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:customer_info execution time=0.1344s
INFO  - 2019-03-28 16:14:06.59639200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_list
INFO  - 2019-03-28 16:14:06.61374600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:handler_list execution time=0.1416s
INFO  - 2019-03-28 16:14:07.38215400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_info
INFO  - 2019-03-28 16:14:07.39935000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:handler_info execution time=0.1301s
INFO  - 2019-03-28 16:14:26.50044000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:14:26.51696900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1297s
INFO  - 2019-03-28 16:14:31.47269100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:14:31.48833200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1277s
INFO  - 2019-03-28 16:14:32.71277300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:14:32.72924000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1516s
INFO  - 2019-03-28 16:14:33.68511000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:14:33.70346200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1267s
INFO  - 2019-03-28 16:18:45.63583500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:18:45.65230500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1402s
INFO  - 2019-03-28 16:18:46.20378900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:18:46.21981500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1256s
INFO  - 2019-03-28 16:18:47.31039100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:18:47.32688700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1417s
INFO  - 2019-03-28 16:18:51.48731900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:18:51.50344400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1310s
INFO  - 2019-03-28 16:18:52.86639200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:18:52.88352500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1330s
INFO  - 2019-03-28 16:18:59.99762000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:19:00.01395800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1380s
INFO  - 2019-03-28 16:19:00.96044000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:19:00.97679700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1268s
INFO  - 2019-03-28 16:19:11.17675200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:19:11.19292900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1303s
INFO  - 2019-03-28 16:19:14.60413500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-03-28 16:19:14.62142500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1366s
INFO  - 2019-03-28 16:19:28.04098400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 16:19:28.05722100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1307s
INFO  - 2019-03-28 16:19:28.91418800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 16:19:28.93071000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1311s
INFO  - 2019-03-28 16:19:29.39815100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 16:19:29.41442700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1318s
INFO  - 2019-03-28 16:19:29.97830100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 16:19:29.99584200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1292s
INFO  - 2019-03-28 16:19:37.41554700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-28 16:19:37.52845600 --> [ffee87feba63788ecb6bb56f50c4f379]【売上登録処理   START】
INFO  - 2019-03-28 16:19:37.54528600 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '548', 'ユニチカトレーディング株式会社', '1', '1', '2019/03/28', '2019/03/28', '7', '堀古ひろみ', '1', '2', '1', '57600', '4608', '62208', NULL, NULL, NULL, '大阪研究所', '繊維', '商品試験', 'ユニチカトレーディング株式会社', NULL, NULL, '1', 0)
INFO  - 2019-03-28 16:19:37.56113900 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '10005934', '編地　シャルレ様向け　ピリング、スナッグ', '12', NULL, NULL, '6', '4608', '57600', '62208', 'EW351', 65267)
INFO  - 2019-03-28 16:19:37.64310300 --> [ffee87feba63788ecb6bb56f50c4f379]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_mng SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money + 62208, `last_user_id` = 2, `last_datetime` = now() WHERE `target_month` =  '201903' AND `customer_disp_name` =  'ユニチカトレーディング株式会社' AND `institute_id` =  '1' AND `depart_id` =  '2'
INFO  - 2019-03-28 16:19:37.65789500 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), '37904', 65267, '2019/03/28', '62208')
INFO  - 2019-03-28 16:19:37.69477100 --> [ffee87feba63788ecb6bb56f50c4f379]【売上登録処理   END】
INFO  - 2019-03-28 16:19:37.76790700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_input  Method:index execution time=0.4526s
INFO  - 2019-03-28 16:19:38.63703600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-28 16:19:38.71751500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1480s
INFO  - 2019-03-28 16:19:41.46676200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-28 16:19:42.86525800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=1.4738s
INFO  - 2019-03-28 16:19:50.93836300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:output
INFO  - 2019-03-28 16:19:50.95544000 --> [ffee87feba63788ecb6bb56f50c4f379]【請求書発行処理   START)】
INFO  - 2019-03-28 16:19:51.17501500 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0049945', 'S', '2019/03/28', '1', 'ユニチカトレーディング株式会社', 'ユニチカトレーディング株式会社', '62208', '2019/03/28', '548')
INFO  - 2019-03-28 16:19:51.19326800 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50206, '65267')
INFO  - 2019-03-28 16:19:51.20892400 --> [ffee87feba63788ecb6bb56f50c4f379]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049945' WHERE `sales_mng_id` =  '65267'
INFO  - 2019-03-28 16:19:51.79573300 --> [ffee87feba63788ecb6bb56f50c4f379]【請求書発行処理   END)】
INFO  - 2019-03-28 16:19:51.86869200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:bill_sales_print  Method:output execution time=1.0377s
INFO  - 2019-03-28 16:19:54.46134400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-28 16:19:57.59837300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=3.2013s
INFO  - 2019-03-28 16:20:05.98619400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-03-28 16:20:06.00551400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1588s
INFO  - 2019-03-28 16:21:49.59404300 --> [781a8b96bc185526ed103491220ae0ff]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:sum_print_order
INFO  - 2019-03-28 16:21:49.61161400 --> [781a8b96bc185526ed103491220ae0ff]<PROCESS-END> Controller:ajax  Method:sum_print_order execution time=0.1390s
INFO  - 2019-03-28 16:22:02.49866100 --> [781a8b96bc185526ed103491220ae0ff]<PROCESS-START> USER-ID: 1 Controller:sales_sum_print  Method:index
ERROR - 2019-03-28 16:22:05.22308000 --> [781a8b96bc185526ed103491220ae0ff]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"781a8b96bc185526ed103491220ae0ff";s:10:"ip_address";s:14:"172.68.101.156";s:10:"user_agent";s:101:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36";s:13:"last_activity";i:1553754062;}f47ca38646e099767dd87dfe9f69b292||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:231(CI_Session->set_userdata) [tab_menu||Array]
D:\SKK_APP\application\hooks\Pre_display.php:170(Pre_display->_get_tab_menu)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

ERROR - 2019-03-28 16:22:05.25377500 --> [781a8b96bc185526ed103491220ae0ff]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"781a8b96bc185526ed103491220ae0ff";s:10:"ip_address";s:14:"172.68.101.156";s:10:"user_agent";s:101:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36";s:13:"last_activity";i:1553754062;}f47ca38646e099767dd87dfe9f69b292||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:275(CI_Session->set_userdata) [local_menu||Array]
D:\SKK_APP\application\hooks\Pre_display.php:173(Pre_display->_get_local_menu)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

ERROR - 2019-03-28 16:22:05.29969600 --> [781a8b96bc185526ed103491220ae0ff]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"781a8b96bc185526ed103491220ae0ff";s:10:"ip_address";s:14:"172.68.101.156";s:10:"user_agent";s:101:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36";s:13:"last_activity";i:1553754062;}f47ca38646e099767dd87dfe9f69b292||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:308(CI_Session->set_userdata) [page_info||Array]
D:\SKK_APP\application\hooks\Pre_display.php:186(Pre_display->_get_page_info)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

INFO  - 2019-03-28 16:22:05.31682000 --> [781a8b96bc185526ed103491220ae0ff]<PROCESS-END> Controller:sales_sum_print  Method:index execution time=2.8213s
INFO  - 2019-03-28 16:30:00.67284800 --> [ede46ba752ae3277ddb18dac88324015]<PROCESS-START> USER-ID:  Controller:receive_batch  Method:index
INFO  - 2019-03-28 16:30:00.69251400 --> [ede46ba752ae3277ddb18dac88324015]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_mng SQL: INSERT INTO `t_outside_receive_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `process_datetime`, `record_count`, `result`) VALUES (0, 0, now(), '201903281600', 1, 'ok')
INFO  - 2019-03-28 16:30:00.81569800 --> [ede46ba752ae3277ddb18dac88324015]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`, `sales_mng_id`, `sales_detail_id`) VALUES (0, 0, now(), '40011283', '40011283', 'unsent', '65215', '83627')
INFO  - 2019-03-28 16:30:00.83062700 --> [ede46ba752ae3277ddb18dac88324015]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1181, '40011283', '株式会社良品計画', '40011283', '有野加奈子', '牛乳ヨーグルト、豆乳ヨーグルト', '112000', '3', 'ok', '')
INFO  - 2019-03-28 16:30:00.84506900 --> [ede46ba752ae3277ddb18dac88324015]【UPDATE】PROCESS: Receive_batch_mdl->update_outside_receive_mng SQL: UPDATE `t_outside_receive_mng` SET `result` = 'ok', `last_user_id` = 0, `last_datetime` = now() WHERE `outside_receive_mng_id` =  1181
INFO  - 2019-03-28 16:30:00.90684200 --> [ede46ba752ae3277ddb18dac88324015]<PROCESS-END> Controller:receive_batch  Method:index execution time=0.7719s
INFO  - 2019-03-28 16:42:48.66994900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-28 16:42:48.76326900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1627s
INFO  - 2019-03-28 16:42:56.40221700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-03-28 16:42:56.42527000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1401s
INFO  - 2019-03-28 16:42:59.19840600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_info
INFO  - 2019-03-28 16:42:59.21815900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:customer_info execution time=0.1278s
INFO  - 2019-03-28 16:43:05.16980900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_list
INFO  - 2019-03-28 16:43:05.18836600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:handler_list execution time=0.1418s
INFO  - 2019-03-28 16:43:05.90356200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_info
INFO  - 2019-03-28 16:43:05.92212500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:handler_info execution time=0.1324s
INFO  - 2019-03-28 16:43:12.75727400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:43:12.77397600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1309s
INFO  - 2019-03-28 16:43:13.14045900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:43:13.15872500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1266s
INFO  - 2019-03-28 16:43:16.46267100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:43:16.48032800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1280s
INFO  - 2019-03-28 16:43:16.79790800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:43:16.81482600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1316s
INFO  - 2019-03-28 16:43:17.69538700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:43:17.71354000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1372s
INFO  - 2019-03-28 16:43:18.71039500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:43:18.72796300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1275s
INFO  - 2019-03-28 16:43:19.15356200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:43:19.16968200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1333s
INFO  - 2019-03-28 16:43:20.07098000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:43:20.08940200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1569s
INFO  - 2019-03-28 16:43:21.23558800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:43:21.25343100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1349s
INFO  - 2019-03-28 16:43:22.74706800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:43:22.76375600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1331s
INFO  - 2019-03-28 16:43:24.11039100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:43:24.12827800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1265s
INFO  - 2019-03-28 16:43:24.85648000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-03-28 16:43:24.87335000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1305s
INFO  - 2019-03-28 16:43:31.75678800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 16:43:31.77485600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1327s
INFO  - 2019-03-28 16:43:33.74629100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 16:43:33.76221500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1290s
INFO  - 2019-03-28 16:43:35.12694200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 16:43:35.14520300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1279s
INFO  - 2019-03-28 16:43:35.86455300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 16:43:35.88261700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1312s
INFO  - 2019-03-28 16:43:37.18769300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 16:43:37.20465700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1392s
INFO  - 2019-03-28 16:43:37.93183300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 16:43:37.94997600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1325s
INFO  - 2019-03-28 16:43:38.54748900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 16:43:38.56490300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1304s
INFO  - 2019-03-28 16:43:39.02911500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 16:43:39.04671600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1282s
INFO  - 2019-03-28 16:43:39.95504500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 16:43:39.96966800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1191s
INFO  - 2019-03-28 16:43:45.43064000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-28 16:43:45.60364800 --> [ffee87feba63788ecb6bb56f50c4f379]【売上登録処理   START】
INFO  - 2019-03-28 16:43:45.62526300 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '598', 'イサン株式会社', '1', '1', '2019/03/31', '2019/03/28', '76', '加藤有紀', '3', '1', '1', '215000', '17200', '232200', NULL, NULL, '31', '名古屋研究所', '食品', '商品試験', 'イサン株式会社', '2019/03/01', '2019/03/31', '1', 0)
INFO  - 2019-03-28 16:43:45.64358500 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), NULL, '表示点検（原材料名のみ）', '43', NULL, '5000', '6', '17200', '215000', '232200', '報告書No.60005999、60006000、60006001', 65268)
INFO  - 2019-03-28 16:43:45.78999700 --> [ffee87feba63788ecb6bb56f50c4f379]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_mng SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money + 232200, `last_user_id` = 2, `last_datetime` = now() WHERE `target_month` =  '201903' AND `customer_disp_name` =  'イサン株式会社' AND `institute_id` IS NULL AND `depart_id` IS NULL
INFO  - 2019-03-28 16:43:45.80678500 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), '37804', 65268, '2019/03/31', '232200')
INFO  - 2019-03-28 16:43:45.83342400 --> [ffee87feba63788ecb6bb56f50c4f379]【売上登録処理   END】
INFO  - 2019-03-28 16:43:45.90091500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_input  Method:index execution time=0.5764s
INFO  - 2019-03-28 16:45:24.93006500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-28 16:45:25.00725500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1581s
INFO  - 2019-03-28 16:45:41.08114800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-03-28 16:45:41.10301000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1325s
INFO  - 2019-03-28 16:45:42.01460900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_info
INFO  - 2019-03-28 16:45:42.03451600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:customer_info execution time=0.1399s
INFO  - 2019-03-28 16:45:56.71350100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_list
INFO  - 2019-03-28 16:45:56.72844200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:handler_list execution time=0.1250s
INFO  - 2019-03-28 16:45:57.80157000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_info
INFO  - 2019-03-28 16:45:57.81937100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:handler_info execution time=0.1308s
INFO  - 2019-03-28 16:48:02.39570700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:48:02.41324300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1306s
INFO  - 2019-03-28 16:48:03.80679700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:48:03.82521400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1355s
INFO  - 2019-03-28 16:48:05.21913700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:48:05.23732600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1656s
INFO  - 2019-03-28 16:48:11.63765300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:48:11.65622800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1251s
INFO  - 2019-03-28 16:48:18.59199300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:48:18.60837800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1278s
INFO  - 2019-03-28 16:48:21.74590100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:48:21.76206500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1223s
INFO  - 2019-03-28 16:48:22.56653100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:48:22.58505900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1343s
INFO  - 2019-03-28 16:48:25.71279900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:48:25.72893600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1260s
INFO  - 2019-03-28 16:48:26.24693700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:48:26.26526500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1273s
INFO  - 2019-03-28 16:48:27.66237600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:48:27.67967100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1256s
INFO  - 2019-03-28 16:48:28.97821800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:48:28.99515100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1230s
INFO  - 2019-03-28 16:48:30.95095800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:48:30.96781400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1296s
INFO  - 2019-03-28 16:48:31.76458300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:48:31.78179800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1265s
INFO  - 2019-03-28 16:48:32.86163400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:48:32.88048100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1251s
INFO  - 2019-03-28 16:48:35.78375900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-03-28 16:48:35.80063500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1271s
INFO  - 2019-03-28 16:48:41.88806400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 16:48:41.90522400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1254s
INFO  - 2019-03-28 16:48:43.78179700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 16:48:43.80071300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1317s
INFO  - 2019-03-28 16:48:44.47514200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 16:48:44.49186900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1208s
INFO  - 2019-03-28 16:48:45.81971200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 16:48:45.83685900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1328s
INFO  - 2019-03-28 16:48:46.89917000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 16:48:46.91604600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1219s
INFO  - 2019-03-28 16:48:48.08043000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 16:48:48.09852700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1293s
INFO  - 2019-03-28 16:48:52.39893800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-28 16:48:52.51729300 --> [ffee87feba63788ecb6bb56f50c4f379]【売上登録処理   START】
INFO  - 2019-03-28 16:48:52.53521200 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '427', '井上ビニール株式会社', '1', '1', '2019/03/28', '2019/03/28', '59', '横田研太郎', '1', '3', '1', '18000', '1440', '19440', NULL, NULL, NULL, '大阪研究所', '雑貨', '商品試験', '井上ビニール株式会社', NULL, NULL, '1', 0)
INFO  - 2019-03-28 16:48:52.55259500 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '30002184', '燃えるごみ指定袋　安中市', '2', NULL, NULL, '6', '1440', '18000', '19440', '引張強さ、ヒートシール強さ', 65269)
INFO  - 2019-03-28 16:48:52.63019100 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Receivable_mng_mdl->_regist_mng SQL: INSERT INTO `t_receivable_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `target_month`, `customer_id`, `customer_disp_name`, `institute_id`, `institute_name`, `depart_id`, `depart_name`, `sales_money`) VALUES (2, 2, now(), '201903', '427', '井上ビニール株式会社', '1', '大阪研究所', '3', '雑貨', '19440')
INFO  - 2019-03-28 16:48:52.64783300 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), 38152, 65269, '2019/03/28', '19440')
INFO  - 2019-03-28 16:48:52.67155000 --> [ffee87feba63788ecb6bb56f50c4f379]【売上登録処理   END】
INFO  - 2019-03-28 16:48:52.73270800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_input  Method:index execution time=0.4503s
INFO  - 2019-03-28 16:48:53.40838000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-28 16:48:53.47781300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1458s
INFO  - 2019-03-28 16:48:56.12035600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-28 16:48:57.49247700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=1.4541s
INFO  - 2019-03-28 16:49:01.76951800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:output
INFO  - 2019-03-28 16:49:01.78662400 --> [ffee87feba63788ecb6bb56f50c4f379]【請求書発行処理   START)】
INFO  - 2019-03-28 16:49:02.01292300 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0049946', 'S', '2019/03/28', '1', '井上ビニール株式会社', '井上ビニール株式会社', '19440', '2019/03/28', '427')
INFO  - 2019-03-28 16:49:02.02996700 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50207, '65269')
INFO  - 2019-03-28 16:49:02.04568400 --> [ffee87feba63788ecb6bb56f50c4f379]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049946' WHERE `sales_mng_id` =  '65269'
INFO  - 2019-03-28 16:49:02.60653900 --> [ffee87feba63788ecb6bb56f50c4f379]【請求書発行処理   END)】
INFO  - 2019-03-28 16:49:02.68758600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:bill_sales_print  Method:output execution time=1.0136s
INFO  - 2019-03-28 16:49:03.89854900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-28 16:49:07.05780200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=3.2285s
INFO  - 2019-03-28 16:49:09.43758000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-03-28 16:49:09.45643000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1310s
INFO  - 2019-03-28 16:53:31.33542300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-28 16:53:31.43270100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1748s
INFO  - 2019-03-28 16:53:36.07769100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-03-28 16:53:36.09945200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1327s
INFO  - 2019-03-28 16:53:37.11519100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_info
INFO  - 2019-03-28 16:53:37.13466800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:customer_info execution time=0.1309s
INFO  - 2019-03-28 16:53:45.51983900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_list
INFO  - 2019-03-28 16:53:45.53847800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:handler_list execution time=0.1332s
INFO  - 2019-03-28 16:53:46.25753000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_info
INFO  - 2019-03-28 16:53:46.27744200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:handler_info execution time=0.1432s
INFO  - 2019-03-28 16:53:54.53149500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:53:54.54980800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1310s
INFO  - 2019-03-28 16:53:57.39176600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:53:57.40916200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1332s
INFO  - 2019-03-28 16:54:02.00862000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:54:02.02654600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1314s
INFO  - 2019-03-28 16:54:02.84600300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 16:54:02.86349900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1383s
INFO  - 2019-03-28 16:54:03.78163200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-03-28 16:54:03.79867800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1284s
INFO  - 2019-03-28 16:54:31.81444100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 16:54:31.83073200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1298s
INFO  - 2019-03-28 16:54:32.20117000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 16:54:32.21814000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1262s
INFO  - 2019-03-28 16:54:32.99050700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 16:54:33.00791500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1319s
INFO  - 2019-03-28 16:54:42.06536800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 16:54:42.08386700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1314s
INFO  - 2019-03-28 16:54:43.11023900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 16:54:43.12894400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1344s
INFO  - 2019-03-28 16:54:44.00681800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 16:54:44.02667000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1341s
INFO  - 2019-03-28 16:54:44.63723400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 16:54:44.65589900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1492s
INFO  - 2019-03-28 16:54:48.99343100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-28 16:54:49.24331000 --> [ffee87feba63788ecb6bb56f50c4f379]【売上登録処理   START】
INFO  - 2019-03-28 16:54:49.26352900 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '508', '日本サニパック株式会社', '1', '1', '2019/04/20', '2019/03/28', '59', '横田研太郎', '1', '3', '1', '31500', '2520', '34020', NULL, NULL, '20', '大阪研究所', '雑貨', '商品試験', '日本サニパック株式会社', '2019/03/21', '2019/04/20', '1', 0)
INFO  - 2019-03-28 16:54:49.27993600 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '30002195', 'ポリ袋　引張試験', '6', NULL, NULL, '6', '2520', '31500', '34020', '依頼書No.3354-43', 65270)
INFO  - 2019-03-28 16:54:49.42096500 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Receivable_mng_mdl->_regist_mng SQL: INSERT INTO `t_receivable_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `target_month`, `customer_id`, `customer_disp_name`, `institute_id`, `institute_name`, `depart_id`, `depart_name`, `sales_money`) VALUES (2, 2, now(), '201904', '508', '日本サニパック株式会社', NULL, NULL, NULL, NULL, '34020')
INFO  - 2019-03-28 16:54:49.43710600 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), 38153, 65270, '2019/04/20', '34020')
INFO  - 2019-03-28 16:54:49.47193200 --> [ffee87feba63788ecb6bb56f50c4f379]【売上登録処理   END】
INFO  - 2019-03-28 16:54:49.54504800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_input  Method:index execution time=0.6563s
INFO  - 2019-03-28 16:54:50.31637900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-28 16:54:50.40298800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1469s
INFO  - 2019-03-28 16:54:52.32616000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-28 16:54:53.71977100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=1.4544s
INFO  - 2019-03-28 16:54:54.55824600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:index
INFO  - 2019-03-28 16:54:55.62138300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:bill_cutoff_print  Method:index execution time=1.1303s
INFO  - 2019-03-28 16:54:58.24238500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:index
INFO  - 2019-03-28 16:54:58.97054600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:bill_cutoff_print  Method:index execution time=0.8059s
INFO  - 2019-03-28 16:55:01.74625200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_confirm_other  Method:index
INFO  - 2019-03-28 16:55:01.78173000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_confirm_other  Method:index execution time=0.1501s
INFO  - 2019-03-28 16:55:06.99325000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_confirm_other  Method:index
INFO  - 2019-03-28 16:55:07.01459400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_confirm_other  Method:index execution time=0.1247s
INFO  - 2019-03-28 16:55:13.55551800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_confirm_other  Method:index
INFO  - 2019-03-28 16:55:13.57858200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_confirm_other  Method:index execution time=0.1493s
INFO  - 2019-03-28 16:55:16.59765900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_confirm_other  Method:index
INFO  - 2019-03-28 16:55:16.62026800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_confirm_other  Method:index execution time=0.1368s
INFO  - 2019-03-28 16:55:19.50895800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_confirm_other  Method:index
INFO  - 2019-03-28 16:55:19.53094800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_confirm_other  Method:index execution time=0.1674s
INFO  - 2019-03-28 17:07:28.20838800 --> [781a8b96bc185526ed103491220ae0ff]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_tran_list
INFO  - 2019-03-28 17:07:28.45880400 --> [781a8b96bc185526ed103491220ae0ff]<PROCESS-END> Controller:ajax  Method:customer_tran_list execution time=0.3735s
INFO  - 2019-03-28 17:07:32.92660500 --> [781a8b96bc185526ed103491220ae0ff]<PROCESS-START> USER-ID: 1 Controller:master_file_print  Method:index
INFO  - 2019-03-28 17:07:35.62603200 --> [781a8b96bc185526ed103491220ae0ff]<PROCESS-END> Controller:master_file_print  Method:index execution time=2.7556s
INFO  - 2019-03-28 17:08:04.83412400 --> [781a8b96bc185526ed103491220ae0ff]<PROCESS-START> USER-ID: 1 Controller:bill_cutoff_print  Method:bill_disp
INFO  - 2019-03-28 17:08:04.89052000 --> [781a8b96bc185526ed103491220ae0ff]<PROCESS-END> Controller:bill_cutoff_print  Method:bill_disp execution time=0.1771s
INFO  - 2019-03-28 17:10:06.07802200 --> [781a8b96bc185526ed103491220ae0ff]<PROCESS-START> USER-ID: 1 Controller:master_file_print  Method:index
INFO  - 2019-03-28 17:10:08.67075700 --> [781a8b96bc185526ed103491220ae0ff]<PROCESS-END> Controller:master_file_print  Method:index execution time=2.6573s
INFO  - 2019-03-28 17:10:21.70896500 --> [781a8b96bc185526ed103491220ae0ff]<PROCESS-START> USER-ID: 1 Controller:bill_cutoff_print  Method:bill_disp
INFO  - 2019-03-28 17:10:21.78043200 --> [781a8b96bc185526ed103491220ae0ff]<PROCESS-END> Controller:bill_cutoff_print  Method:bill_disp execution time=0.1852s
INFO  - 2019-03-28 17:11:17.40060700 --> [781a8b96bc185526ed103491220ae0ff]<PROCESS-START> USER-ID: 1 Controller:bill_cutoff_print  Method:bill_disp
INFO  - 2019-03-28 17:11:17.42052200 --> [781a8b96bc185526ed103491220ae0ff]<PROCESS-END> Controller:bill_cutoff_print  Method:bill_disp execution time=0.1351s
INFO  - 2019-03-28 17:15:12.77788500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-28 17:15:16.69068700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_list  Method:index execution time=3.9915s
INFO  - 2019-03-28 17:16:31.40792100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-28 17:16:32.41804500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_list  Method:index execution time=1.0816s
INFO  - 2019-03-28 17:16:36.69041100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:edit
INFO  - 2019-03-28 17:16:36.80393100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_input  Method:edit execution time=0.1927s
INFO  - 2019-03-28 17:16:47.47862500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 17:16:47.49745700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1312s
INFO  - 2019-03-28 17:16:47.76535200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 17:16:47.78441200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1231s
INFO  - 2019-03-28 17:16:51.16906600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-03-28 17:16:51.18609200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1306s
INFO  - 2019-03-28 17:16:54.52988700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 17:16:54.54756900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1348s
INFO  - 2019-03-28 17:16:55.18758200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 17:16:55.20617300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1415s
INFO  - 2019-03-28 17:16:56.03821900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 17:16:56.05754500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1297s
INFO  - 2019-03-28 17:16:57.93558300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-03-28 17:16:57.95203800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1252s
INFO  - 2019-03-28 17:17:08.44043900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-03-28 17:17:08.45895400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1215s
INFO  - 2019-03-28 17:17:08.59443500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-28 17:17:09.58247600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_list  Method:index execution time=1.0586s
INFO  - 2019-03-28 17:17:13.18703500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:edit
INFO  - 2019-03-28 17:17:13.32404700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_input  Method:edit execution time=0.1843s
INFO  - 2019-03-28 17:17:19.63655900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 17:17:19.65385500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1257s
INFO  - 2019-03-28 17:17:20.91434000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-03-28 17:17:20.93073100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1305s
INFO  - 2019-03-28 17:17:26.15273600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 17:17:26.17028700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1338s
INFO  - 2019-03-28 17:17:27.15046400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 17:17:27.16764800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1331s
INFO  - 2019-03-28 17:17:28.83630700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-03-28 17:17:28.85272700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1271s
INFO  - 2019-03-28 17:17:33.63790200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 17:17:33.65659700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1596s
INFO  - 2019-03-28 17:17:38.30203500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 17:17:38.32099900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1288s
INFO  - 2019-03-28 17:17:40.10376800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 17:17:40.12075400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1265s
INFO  - 2019-03-28 17:17:43.21381100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-03-28 17:17:43.22903900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1256s
INFO  - 2019-03-28 17:17:46.10928600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-28 17:17:46.12773300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1331s
INFO  - 2019-03-28 17:17:47.38915700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-03-28 17:17:47.40761400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1359s
INFO  - 2019-03-28 17:17:55.94283500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 17:17:55.96068600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1375s
INFO  - 2019-03-28 17:17:57.42929600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 17:17:57.44792600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1316s
INFO  - 2019-03-28 17:18:01.83542000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-28 17:18:01.85205600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1245s
INFO  - 2019-03-28 17:18:16.18911100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:edit
INFO  - 2019-03-28 17:18:16.32630800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_input  Method:edit execution time=0.2621s
INFO  - 2019-03-28 17:18:18.36547600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:edit
INFO  - 2019-03-28 17:18:18.43399000 --> [ffee87feba63788ecb6bb56f50c4f379]【売上変更処理   START】
INFO  - 2019-03-28 17:18:18.46375800 --> [ffee87feba63788ecb6bb56f50c4f379]【UPDATE】PROCESS: Sales_mdl->update_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `customer_id` = '532', `customer_disp_name` = '株式会社丸井', `credit_type` = '1', `customer_type` = '1', `bill_date` = '2019/03/20', `book_date` = '2019/03/20', `handler_id` = '40', `handler_name` = '篠岳', `abstract_id` = '1', `sum_no_tax` = '142000', `sum_tax` = '11360', `sum_money` = '153360', `sep_month_from` = NULL, `sep_month_to` = NULL, `cutoff_date` = NULL, `institute_id` = NULL, `institute_name` = NULL, `depart_id` = NULL, `depart_name` = NULL, `abstract_name` = '商品試験', `customer_name` = '株式会社丸井', `cutoff_date_from` = NULL, `cutoff_date_to` = NULL, `data_status_type` = '1', `sep_depart_flg` = 1 WHERE `sales_mng_id` =  '64921'
INFO  - 2019-03-28 17:18:18.48278100 --> [ffee87feba63788ecb6bb56f50c4f379]【DELETE(物理削除)】PROCESS: Sales_mdl->update_data SQL: DELETE FROM `t_sales_detail`
WHERE `sales_mng_id` =  '64921'
INFO  - 2019-03-28 17:18:18.51328200 --> [ffee87feba63788ecb6bb56f50c4f379]【UPDATE】PROCESS: Sales_mdl->nullupdate_outside_relation SQL: UPDATE `t_outside_relation` SET `sales_mng_id` = NULL, `sales_detail_id` = NULL, `last_user_id` = 2, `last_datetime` = now() WHERE `sales_mng_id` =  '64921'
INFO  - 2019-03-28 17:18:18.53065700 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->update_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), NULL, 'レストラン　衛生検査', '12', '店舗', NULL, '6', '6720', '84000', '90720', '定借テナント（再検査）', '64921')
INFO  - 2019-03-28 17:18:18.54629200 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->update_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), NULL, '食遊館　衛生検査', '5', '店舗', NULL, '6', '3680', '46000', '49680', '定借テナント（再検査）', '64921')
INFO  - 2019-03-28 17:18:18.56254900 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->update_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), NULL, 'レストラン　衛生検査', '1', '店舗', NULL, '6', '480', '6000', '6480', '消化テナント（再検査）', '64921')
INFO  - 2019-03-28 17:18:18.57816100 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->update_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), NULL, '食遊館　衛生検査', '1', '店舗', NULL, '6', '480', '6000', '6480', '消化テナント（再検査）', '64921')
INFO  - 2019-03-28 17:18:18.59348100 --> [ffee87feba63788ecb6bb56f50c4f379]【DELETE(物理削除)】PROCESS: Sales_mdl->update_data SQL: DELETE FROM `t_sales_before`
WHERE `sales_mng_id` =  '64921'
INFO  - 2019-03-28 17:18:18.60838900 --> [ffee87feba63788ecb6bb56f50c4f379]【DELETE(物理削除)】PROCESS: Sales_mdl->update_data SQL: DELETE FROM `t_sales_depart`
WHERE `sales_mng_id` =  '64921'
INFO  - 2019-03-28 17:18:18.62288000 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->update_data SQL: INSERT INTO `t_sales_depart` (`ins_user_id`, `last_user_id`, `last_datetime`, `institute_id`, `institute_name`, `depart_id`, `depart_name`, `tax_type`, `no_tax_money`, `tax`, `in_tax_money`, `sales_mng_id`) VALUES (2, 2, now(), '2', '東京研究所', '1', '食品', '6', '136000', '10880', '146880', '64921')
INFO  - 2019-03-28 17:18:18.64096900 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Sales_mdl->update_data SQL: INSERT INTO `t_sales_depart` (`ins_user_id`, `last_user_id`, `last_datetime`, `institute_id`, `institute_name`, `depart_id`, `depart_name`, `tax_type`, `no_tax_money`, `tax`, `in_tax_money`, `sales_mng_id`) VALUES (2, 2, now(), '1', '大阪研究所', '1', '食品', '6', '6000', '480', '6480', '64921')
INFO  - 2019-03-28 17:18:18.66064100 --> [ffee87feba63788ecb6bb56f50c4f379]【UPDATE】PROCESS: Sales_mdl->update_del_bill_status SQL: UPDATE `t_sales_mng` SET `data_status_type` = '1', `last_user_id` = 2, `last_datetime` = now() WHERE `sales_mng_id` in (64921) 
INFO  - 2019-03-28 17:18:18.67841700 --> [ffee87feba63788ecb6bb56f50c4f379]【DELETE(物理削除)】PROCESS: Sales_mdl->delete_bill_print SQL: DELETE FROM `t_bill_mng`
WHERE `bill_mng_id` =  '50197'
INFO  - 2019-03-28 17:18:18.84202700 --> [ffee87feba63788ecb6bb56f50c4f379]【DELETE(物理削除)】PROCESS: Receivable_mng_mdl->back_sales_data SQL: DELETE FROM `t_receivable_data`
WHERE `sales_mng_id` =  '64921'
INFO  - 2019-03-28 17:18:18.85699600 --> [ffee87feba63788ecb6bb56f50c4f379]【UPDATE】PROCESS: Receivable_mng_mdl->back_sales_data SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money - 153360, `last_user_id` = 2, `last_datetime` = now() WHERE `receivable_mng_id` =  '37927'
INFO  - 2019-03-28 17:18:18.87719500 --> [ffee87feba63788ecb6bb56f50c4f379]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_mng SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money + 153360, `last_user_id` = 2, `last_datetime` = now() WHERE `target_month` =  '201903' AND `customer_disp_name` =  '株式会社丸井' AND `institute_id` IS NULL AND `depart_id` IS NULL
INFO  - 2019-03-28 17:18:18.89332900 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), '37927', '64921', '2019/03/20', '153360')
INFO  - 2019-03-28 17:18:18.92421600 --> [ffee87feba63788ecb6bb56f50c4f379]【売上変更処理   END】
INFO  - 2019-03-28 17:18:18.99132100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_input  Method:edit execution time=0.7401s
INFO  - 2019-03-28 17:20:04.43166900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-28 17:20:05.46243000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_list  Method:index execution time=1.1087s
INFO  - 2019-03-28 17:20:12.33515100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-28 17:20:13.79951500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=1.5371s
INFO  - 2019-03-28 17:20:18.60629800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:output
INFO  - 2019-03-28 17:20:18.62480200 --> [ffee87feba63788ecb6bb56f50c4f379]【請求書発行処理   START)】
INFO  - 2019-03-28 17:20:18.64772800 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0049607', 'S', '2019/03/28', '1', '株式会社丸井', '株式会社丸井', '153360', '2019/03/20', '532')
INFO  - 2019-03-28 17:20:18.66515800 --> [ffee87feba63788ecb6bb56f50c4f379]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50208, '64921')
INFO  - 2019-03-28 17:20:18.68123800 --> [ffee87feba63788ecb6bb56f50c4f379]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049607' WHERE `sales_mng_id` =  '64921'
INFO  - 2019-03-28 17:20:19.25633300 --> [ffee87feba63788ecb6bb56f50c4f379]【請求書発行処理   END)】
INFO  - 2019-03-28 17:20:19.37418500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:bill_sales_print  Method:output execution time=0.8409s
INFO  - 2019-03-28 17:20:20.46472200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-28 17:20:23.62856700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=3.2211s
INFO  - 2019-03-28 17:20:26.01887600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-03-28 17:20:26.03801700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1383s
INFO  - 2019-03-28 17:22:27.16380900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-03-28 17:22:27.18388100 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1292s
INFO  - 2019-03-28 17:26:53.14513700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_spec_print  Method:index
INFO  - 2019-03-28 17:26:53.23176900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_spec_print  Method:index execution time=0.1778s
INFO  - 2019-03-28 17:27:06.57115000 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_spec_print  Method:index
ERROR - 2019-03-28 17:27:07.87603900 --> [ffee87feba63788ecb6bb56f50c4f379]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"ffee87feba63788ecb6bb56f50c4f379";s:10:"ip_address";s:13:"172.68.101.18";s:10:"user_agent";s:102:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36";s:13:"last_activity";i:1553751033;}fa180c0ae00659d9d784f5fdf43b3713||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:231(CI_Session->set_userdata) [tab_menu||Array]
D:\SKK_APP\application\hooks\Pre_display.php:170(Pre_display->_get_tab_menu)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

ERROR - 2019-03-28 17:27:07.90364700 --> [ffee87feba63788ecb6bb56f50c4f379]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"ffee87feba63788ecb6bb56f50c4f379";s:10:"ip_address";s:13:"172.68.101.18";s:10:"user_agent";s:102:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36";s:13:"last_activity";i:1553751033;}fa180c0ae00659d9d784f5fdf43b3713||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:275(CI_Session->set_userdata) [local_menu||Array]
D:\SKK_APP\application\hooks\Pre_display.php:173(Pre_display->_get_local_menu)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

ERROR - 2019-03-28 17:27:07.93579600 --> [ffee87feba63788ecb6bb56f50c4f379]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"ffee87feba63788ecb6bb56f50c4f379";s:10:"ip_address";s:13:"172.68.101.18";s:10:"user_agent";s:102:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36";s:13:"last_activity";i:1553751033;}fa180c0ae00659d9d784f5fdf43b3713||0||/||||]
D:\SKK_APP\system\libraries\Session.php:294(CI_Session->_set_cookie) [Array]
D:\SKK_APP\system\libraries\Session.php:470(CI_Session->sess_write)
D:\SKK_APP\application\hooks\Pre_display.php:308(CI_Session->set_userdata) [page_info||Array]
D:\SKK_APP\application\hooks\Pre_display.php:186(Pre_display->_get_page_info)
D:\SKK_APP\application\hooks\Pre_display.php:153(Pre_display->_get_param)
D:\SKK_APP\application\hooks\Pre_display.php:102(Pre_display->_dispCommon)
D:\SKK_APP\system\core\Hooks.php:212(Pre_display->display) []
D:\SKK_APP\system\core\Hooks.php:114(CI_Hooks->_run_hook) [Array]
D:\SKK_APP\system\core\CodeIgniter.php:358(CI_Hooks->_call_hook) [display_override]
D:\SKK_APP\index.php:204(require_once) [D:\SKK_APP\system\core\CodeIgniter.php]

INFO  - 2019-03-28 17:27:07.95458800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_spec_print  Method:index execution time=1.4364s
INFO  - 2019-03-28 17:30:44.03844800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-28 17:30:47.59634700 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_list  Method:index execution time=3.6481s
INFO  - 2019-03-28 17:30:53.84330400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-28 17:30:54.69416300 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_list  Method:index execution time=0.9382s
INFO  - 2019-03-28 17:31:55.79081400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-03-28 17:31:55.90339400 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.1930s
INFO  - 2019-03-28 17:32:01.32478900 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-28 17:32:02.19155800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_list  Method:index execution time=0.9439s
INFO  - 2019-03-28 17:32:07.01540600 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-03-28 17:32:07.13166500 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.2115s
INFO  - 2019-03-28 17:32:13.33302200 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-28 17:32:14.16855800 --> [ffee87feba63788ecb6bb56f50c4f379]<PROCESS-END> Controller:sales_list  Method:index execution time=0.9072s
INFO  - 2019-03-28 18:00:00.58297300 --> [b92b45e9f89e8d81d9df77f652bc4ce8]<PROCESS-START> USER-ID:  Controller:receive_batch  Method:index
INFO  - 2019-03-28 18:00:00.62924000 --> [b92b45e9f89e8d81d9df77f652bc4ce8]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_mng SQL: INSERT INTO `t_outside_receive_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `process_datetime`, `record_count`, `result`) VALUES (0, 0, now(), '201903281730', 1, 'ok')
INFO  - 2019-03-28 18:00:00.76803900 --> [b92b45e9f89e8d81d9df77f652bc4ce8]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`, `sales_mng_id`, `sales_detail_id`) VALUES (0, 0, now(), '10005904', '10005904', 'unsent', '65260', '83699')
INFO  - 2019-03-28 18:00:00.78153100 --> [b92b45e9f89e8d81d9df77f652bc4ce8]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1182, '10005904', '帝人フロンティア株式会社', '10005904', '森彬光', '毛髪', '39000', '3', 'ok', '')
INFO  - 2019-03-28 18:00:00.79415700 --> [b92b45e9f89e8d81d9df77f652bc4ce8]【UPDATE】PROCESS: Receive_batch_mdl->update_outside_receive_mng SQL: UPDATE `t_outside_receive_mng` SET `result` = 'ok', `last_user_id` = 0, `last_datetime` = now() WHERE `outside_receive_mng_id` =  1182
INFO  - 2019-03-28 18:00:00.84882700 --> [b92b45e9f89e8d81d9df77f652bc4ce8]<PROCESS-END> Controller:receive_batch  Method:index execution time=0.6921s
INFO  - 2019-03-28 18:11:40.42557200 --> [781a8b96bc185526ed103491220ae0ff]<PROCESS-START> USER-ID: 1 Controller:logout  Method:index
INFO  - 2019-03-28 18:11:40.63378300 --> [8dd3802a08da689fa852d1ac56b9e9cf]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-03-28 18:11:40.65297700 --> [8dd3802a08da689fa852d1ac56b9e9cf]<PROCESS-END> Controller:login  Method:index execution time=0.1373s
