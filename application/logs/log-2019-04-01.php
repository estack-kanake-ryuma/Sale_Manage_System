<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

INFO  - 2019-04-01 10:48:02.45902800 --> [38d29bc08707c381e498bfd45317814f]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-04-01 10:48:02.48655200 --> [38d29bc08707c381e498bfd45317814f]<PROCESS-END> Controller:login  Method:index execution time=0.4729s
INFO  - 2019-04-01 10:48:14.80488200 --> [38d29bc08707c381e498bfd45317814f]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-04-01 10:48:15.05542300 --> [38d29bc08707c381e498bfd45317814f]<PROCESS-START> USER-ID: 6 Controller:top  Method:index
INFO  - 2019-04-01 10:48:20.76544300 --> [38d29bc08707c381e498bfd45317814f]<PROCESS-END> Controller:top  Method:index execution time=5.8257s
INFO  - 2019-04-01 10:48:22.52173600 --> [38d29bc08707c381e498bfd45317814f]<PROCESS-START> USER-ID: 6 Controller:ajax  Method:daily_cnt_info
INFO  - 2019-04-01 10:48:22.89999900 --> [38d29bc08707c381e498bfd45317814f]<PROCESS-END> Controller:ajax  Method:daily_cnt_info execution time=0.5041s
INFO  - 2019-04-01 10:48:25.00002300 --> [38d29bc08707c381e498bfd45317814f]<PROCESS-START> USER-ID: 6 Controller:master_file_print  Method:index
INFO  - 2019-04-01 10:48:25.08699900 --> [38d29bc08707c381e498bfd45317814f]<PROCESS-END> Controller:master_file_print  Method:index execution time=0.2209s
INFO  - 2019-04-01 10:48:27.33076300 --> [38d29bc08707c381e498bfd45317814f]<PROCESS-START> USER-ID: 6 Controller:age_month_print  Method:index
INFO  - 2019-04-01 10:48:28.38686100 --> [38d29bc08707c381e498bfd45317814f]<PROCESS-START> USER-ID: 6 Controller:age_month_print  Method:index
INFO  - 2019-04-01 10:48:30.29836700 --> [38d29bc08707c381e498bfd45317814f]<PROCESS-END> Controller:age_month_print  Method:index execution time=1.9723s
INFO  - 2019-04-01 10:48:30.98275100 --> [38d29bc08707c381e498bfd45317814f]<PROCESS-START> USER-ID: 6 Controller:sales_spec_print  Method:index
INFO  - 2019-04-01 10:48:31.06351200 --> [38d29bc08707c381e498bfd45317814f]<PROCESS-END> Controller:sales_spec_print  Method:index execution time=0.2537s
INFO  - 2019-04-01 10:48:33.39513600 --> [38d29bc08707c381e498bfd45317814f]<PROCESS-START> USER-ID: 6 Controller:sales_sum_print  Method:index
INFO  - 2019-04-01 10:48:33.46078600 --> [38d29bc08707c381e498bfd45317814f]<PROCESS-END> Controller:sales_sum_print  Method:index execution time=0.1479s
INFO  - 2019-04-01 10:48:39.91250100 --> [38d29bc08707c381e498bfd45317814f]<PROCESS-START> USER-ID: 6 Controller:ajax  Method:sum_print_order
INFO  - 2019-04-01 10:48:39.91893500 --> [38d29bc08707c381e498bfd45317814f]<PROCESS-END> Controller:ajax  Method:sum_print_order execution time=0.1211s
INFO  - 2019-04-01 10:49:08.27878500 --> [38d29bc08707c381e498bfd45317814f]<PROCESS-START> USER-ID: 6 Controller:sales_sum_print  Method:index
INFO  - 2019-04-01 10:49:08.33990000 --> [38d29bc08707c381e498bfd45317814f]<PROCESS-END> Controller:sales_sum_print  Method:index execution time=0.1497s
INFO  - 2019-04-01 10:49:19.48996900 --> [38d29bc08707c381e498bfd45317814f]<PROCESS-START> USER-ID: 6 Controller:sales_sum_print  Method:index
ERROR - 2019-04-01 10:49:22.34711600 --> [38d29bc08707c381e498bfd45317814f]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"38d29bc08707c381e498bfd45317814f";s:10:"ip_address";s:14:"172.68.101.205";s:10:"user_agent";s:61:"Mozilla/5.0 (Windows NT 6.1; Trident/7.0; rv:11.0) like Gecko";s:13:"last_activity";i:1554083282;}e91cf634af142c6036f70f0839c721a3||0||/||||]
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

ERROR - 2019-04-01 10:49:22.37023400 --> [38d29bc08707c381e498bfd45317814f]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"38d29bc08707c381e498bfd45317814f";s:10:"ip_address";s:14:"172.68.101.205";s:10:"user_agent";s:61:"Mozilla/5.0 (Windows NT 6.1; Trident/7.0; rv:11.0) like Gecko";s:13:"last_activity";i:1554083282;}e91cf634af142c6036f70f0839c721a3||0||/||||]
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

ERROR - 2019-04-01 10:49:22.39375700 --> [38d29bc08707c381e498bfd45317814f]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"38d29bc08707c381e498bfd45317814f";s:10:"ip_address";s:14:"172.68.101.205";s:10:"user_agent";s:61:"Mozilla/5.0 (Windows NT 6.1; Trident/7.0; rv:11.0) like Gecko";s:13:"last_activity";i:1554083282;}e91cf634af142c6036f70f0839c721a3||0||/||||]
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

INFO  - 2019-04-01 10:49:22.40444800 --> [38d29bc08707c381e498bfd45317814f]<PROCESS-END> Controller:sales_sum_print  Method:index execution time=2.9341s
INFO  - 2019-04-01 10:51:22.55017100 --> [38d29bc08707c381e498bfd45317814f]<PROCESS-START> USER-ID: 6 Controller:logout  Method:index
INFO  - 2019-04-01 10:51:22.77127300 --> [e35a758930e6e4a15ac18260b2e897aa]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-04-01 10:51:22.78224300 --> [e35a758930e6e4a15ac18260b2e897aa]<PROCESS-END> Controller:login  Method:index execution time=0.1281s
INFO  - 2019-04-01 13:12:31.86523600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-04-01 13:12:31.87605600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:login  Method:index execution time=0.1395s
INFO  - 2019-04-01 13:12:33.44019900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-04-01 13:12:33.60567400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:top  Method:index
INFO  - 2019-04-01 13:12:38.73389300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:top  Method:index execution time=5.1780s
INFO  - 2019-04-01 13:12:39.17471900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:daily_cnt_info
INFO  - 2019-04-01 13:12:39.52851100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:daily_cnt_info execution time=0.4695s
INFO  - 2019-04-01 13:12:42.00909100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-04-01 13:12:42.13510000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:index execution time=0.2801s
INFO  - 2019-04-01 13:17:30.18037700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-04-01 13:17:30.19649700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1289s
INFO  - 2019-04-01 13:17:33.25429800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-04-01 13:17:33.27071500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1519s
INFO  - 2019-04-01 13:17:34.60190200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-04-01 13:17:34.61857900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1306s
INFO  - 2019-04-01 13:17:53.71486400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_info
INFO  - 2019-04-01 13:17:53.73169900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:customer_info execution time=0.1278s
INFO  - 2019-04-01 13:18:09.66064800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_list
INFO  - 2019-04-01 13:18:09.67099700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:handler_list execution time=0.1231s
INFO  - 2019-04-01 13:18:10.66838400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_info
INFO  - 2019-04-01 13:18:10.67950600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:handler_info execution time=0.1286s
INFO  - 2019-04-01 13:18:22.98978200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 13:18:23.00064800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1240s
INFO  - 2019-04-01 13:18:26.28181000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 13:18:26.29272300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1239s
INFO  - 2019-04-01 13:18:27.65727800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 13:18:27.66792700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1190s
INFO  - 2019-04-01 13:18:30.61615100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 13:18:30.62520200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1141s
INFO  - 2019-04-01 13:18:30.99727000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-04-01 13:18:31.00791000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1218s
INFO  - 2019-04-01 13:18:48.08935100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-04-01 13:18:48.20186100 --> [edaf38176c34231db568c604d2c620f2]【売上登録処理   START】
INFO  - 2019-04-01 13:18:48.21354700 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '1857', '株式会社菊太屋キッチン', '1', '1', '2019/04/01', '2019/04/01', '30', '大西澄子', '1', '1', '1', '10000', '800', '10800', NULL, NULL, NULL, '大阪研究所', '食品', '商品試験', '株式会社菊太屋キッチン', NULL, NULL, '1', 0)
INFO  - 2019-04-01 13:18:48.22394000 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '40011556', '豆ごはん（母の日用）　保存試験', '2', NULL, NULL, '6', '800', '10000', '10800', NULL, 65319)
INFO  - 2019-04-01 13:18:48.25254200 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Sales_mdl->update_outside_relation SQL: UPDATE `t_outside_relation` SET `sales_mng_id` = 65319, `sales_detail_id` = 83817, `last_user_id` = 2, `last_datetime` = now() WHERE `report_no` =  '40011556'
INFO  - 2019-04-01 13:18:48.32650100 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Receivable_mng_mdl->_regist_mng SQL: INSERT INTO `t_receivable_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `target_month`, `customer_id`, `customer_disp_name`, `institute_id`, `institute_name`, `depart_id`, `depart_name`, `sales_money`) VALUES (2, 2, now(), '201904', '1857', '株式会社菊太屋キッチン', '1', '大阪研究所', '1', '食品', '10800')
INFO  - 2019-04-01 13:18:48.33710900 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), 38178, 65319, '2019/04/01', '10800')
INFO  - 2019-04-01 13:18:48.35908800 --> [edaf38176c34231db568c604d2c620f2]【売上登録処理   END】
INFO  - 2019-04-01 13:18:48.43647500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:index execution time=0.4427s
INFO  - 2019-04-01 13:18:49.79945300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-04-01 13:18:49.87736200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1605s
INFO  - 2019-04-01 13:33:58.03741700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:index
INFO  - 2019-04-01 13:33:59.67867200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_cutoff_print  Method:index execution time=1.7436s
INFO  - 2019-04-01 13:34:03.32080100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:index
INFO  - 2019-04-01 13:34:04.12823300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_cutoff_print  Method:index execution time=0.8769s
INFO  - 2019-04-01 13:34:42.12125900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-04-01 13:34:42.21344800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1676s
INFO  - 2019-04-01 13:34:46.58994900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-04-01 13:34:46.60978800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1349s
INFO  - 2019-04-01 13:34:47.84928800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-04-01 13:34:47.86704800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1341s
INFO  - 2019-04-01 13:34:48.94530000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_info
INFO  - 2019-04-01 13:34:48.95818000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:customer_info execution time=0.1241s
INFO  - 2019-04-01 13:35:12.69190000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_list
INFO  - 2019-04-01 13:35:12.70361500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:handler_list execution time=0.1253s
INFO  - 2019-04-01 13:35:14.07186400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_info
INFO  - 2019-04-01 13:35:14.08446800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:handler_info execution time=0.1320s
INFO  - 2019-04-01 13:35:50.02373200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 13:35:50.03571100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1272s
INFO  - 2019-04-01 13:35:52.32498200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 13:35:52.33561600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1200s
INFO  - 2019-04-01 13:35:52.79474100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 13:35:52.80714400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1265s
INFO  - 2019-04-01 13:36:01.35074100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 13:36:01.36251200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1204s
INFO  - 2019-04-01 13:36:02.68732000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 13:36:02.69926300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1500s
INFO  - 2019-04-01 13:36:04.49235900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 13:36:04.50532400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1219s
INFO  - 2019-04-01 13:36:05.03556300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 13:36:05.04786000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1224s
INFO  - 2019-04-01 13:36:05.60495800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 13:36:05.61692900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1205s
INFO  - 2019-04-01 13:36:06.99275500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 13:36:07.00479500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1253s
INFO  - 2019-04-01 13:36:11.25492400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 13:36:11.26572300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1200s
INFO  - 2019-04-01 13:36:13.26091000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 13:36:13.27183100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1269s
INFO  - 2019-04-01 13:36:13.73150600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 13:36:13.74260800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1307s
INFO  - 2019-04-01 13:36:15.77206900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 13:36:15.78449200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1215s
INFO  - 2019-04-01 13:36:16.69042400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 13:36:16.70298900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1240s
INFO  - 2019-04-01 13:36:19.52887500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 13:36:19.54123800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1240s
INFO  - 2019-04-01 13:36:23.69120300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 13:36:23.70348200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1260s
INFO  - 2019-04-01 13:36:24.93897300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 13:36:24.95206400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1226s
INFO  - 2019-04-01 13:36:27.07220400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 13:36:27.08531400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1207s
INFO  - 2019-04-01 13:36:35.01799500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-04-01 13:36:35.02948000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1224s
INFO  - 2019-04-01 13:36:42.28702300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 13:36:42.30031500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1278s
INFO  - 2019-04-01 13:36:44.51629000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 13:36:44.52892300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1452s
INFO  - 2019-04-01 13:36:45.01041600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 13:36:45.02355200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1269s
INFO  - 2019-04-01 13:36:47.37886300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 13:36:47.39089300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1211s
INFO  - 2019-04-01 13:36:54.31153700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 13:36:54.32409000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1199s
INFO  - 2019-04-01 13:36:55.02115900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 13:36:55.03347600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1253s
INFO  - 2019-04-01 13:36:55.53222100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 13:36:55.54463800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1484s
INFO  - 2019-04-01 13:36:55.88313200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 13:36:55.89542300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1172s
INFO  - 2019-04-01 13:36:57.72119100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 13:36:57.73233800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1220s
INFO  - 2019-04-01 13:36:59.15191900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 13:36:59.16463800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1212s
INFO  - 2019-04-01 13:36:59.75472100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 13:36:59.76618800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1207s
INFO  - 2019-04-01 13:37:00.83177200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 13:37:00.84488000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1463s
INFO  - 2019-04-01 13:37:03.60672600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 13:37:03.61968200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1240s
INFO  - 2019-04-01 13:37:25.26341000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 13:37:25.27627300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1233s
INFO  - 2019-04-01 13:37:27.66038500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 13:37:27.67337400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1283s
INFO  - 2019-04-01 13:37:28.26959600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 13:37:28.28095000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1218s
INFO  - 2019-04-01 13:37:29.69377200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 13:37:29.70695400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1308s
INFO  - 2019-04-01 13:37:30.71315700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 13:37:30.72377800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1155s
INFO  - 2019-04-01 13:37:37.12537600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 13:37:37.13853600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1169s
INFO  - 2019-04-01 13:37:38.77627500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 13:37:38.78937400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1297s
INFO  - 2019-04-01 13:37:44.92873500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 13:37:44.94237800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1303s
INFO  - 2019-04-01 13:39:02.43013400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 13:39:02.44306400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1226s
INFO  - 2019-04-01 13:39:06.35762800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 13:39:06.37115700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1234s
INFO  - 2019-04-01 13:39:07.66163200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 13:39:07.67466700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1528s
INFO  - 2019-04-01 13:39:17.37464000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-04-01 13:39:17.62865800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:index execution time=0.3576s
INFO  - 2019-04-01 13:39:26.46317600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 13:39:30.62642000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=4.2381s
INFO  - 2019-04-01 13:39:34.52387500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 13:39:36.57103900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=2.1355s
INFO  - 2019-04-01 13:40:01.19321800 --> [d8cb231266ff0c66c37b25613192519b]<PROCESS-START> USER-ID:  Controller:send_batch  Method:index
INFO  - 2019-04-01 13:40:03.80970400 --> [d8cb231266ff0c66c37b25613192519b]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_mng SQL: INSERT INTO `t_outside_send_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `process_datetime`, `record_count`) VALUES (0, 0, now(), '201904011340', 1)
INFO  - 2019-04-01 13:40:03.82436300 --> [d8cb231266ff0c66c37b25613192519b]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 304, '4348', '40010301', '40010301', 'SKK0046064', '2018-11-14', '2018-11-14', NULL)
INFO  - 2019-04-01 13:40:03.83714400 --> [d8cb231266ff0c66c37b25613192519b]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 8368, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '4348'
INFO  - 2019-04-01 13:40:03.88932500 --> [d8cb231266ff0c66c37b25613192519b]<PROCESS-END> Controller:send_batch  Method:index execution time=3.2105s
INFO  - 2019-04-01 13:40:07.32664400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:edit
INFO  - 2019-04-01 13:40:07.44331300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:edit execution time=0.1939s
INFO  - 2019-04-01 13:40:15.54700600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 13:40:17.57009400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=2.0933s
INFO  - 2019-04-01 13:43:47.98328300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:edit
INFO  - 2019-04-01 13:43:48.10443600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:edit execution time=0.1915s
INFO  - 2019-04-01 13:44:09.79220300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:edit
INFO  - 2019-04-01 13:44:10.00873900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:edit execution time=0.3254s
INFO  - 2019-04-01 13:44:11.27494800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:edit
INFO  - 2019-04-01 13:44:11.43664700 --> [edaf38176c34231db568c604d2c620f2]【売上変更処理   START】
INFO  - 2019-04-01 13:44:11.45869500 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Sales_mdl->update_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `customer_id` = '1465', `customer_disp_name` = '株式会社ミートショップヒロ', `credit_type` = '1', `customer_type` = '1', `bill_date` = '2019/03/27', `book_date` = '2019/03/27', `handler_id` = '34', `handler_name` = '吉田晃', `institute_id` = '1', `depart_id` = '1', `abstract_id` = '1', `sum_no_tax` = '7000', `sum_tax` = '560', `sum_money` = '7560', `sep_month_from` = NULL, `sep_month_to` = NULL, `cutoff_date` = NULL, `institute_name` = '大阪研究所', `depart_name` = '食品', `abstract_name` = '商品試験', `customer_name` = '株式会社ミートショップヒロ', `cutoff_date_from` = NULL, `cutoff_date_to` = NULL, `data_status_type` = '1', `sep_depart_flg` = 0 WHERE `sales_mng_id` =  '65246'
INFO  - 2019-04-01 13:44:11.47169400 --> [edaf38176c34231db568c604d2c620f2]【DELETE(物理削除)】PROCESS: Sales_mdl->update_data SQL: DELETE FROM `t_sales_detail`
WHERE `sales_mng_id` =  '65246'
INFO  - 2019-04-01 13:44:11.50006200 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Sales_mdl->nullupdate_outside_relation SQL: UPDATE `t_outside_relation` SET `sales_mng_id` = NULL, `sales_detail_id` = NULL, `last_user_id` = 2, `last_datetime` = now() WHERE `sales_mng_id` =  '65246'
INFO  - 2019-04-01 13:44:11.51497900 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->update_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '40011522', 'ステーキ＆焼肉弁当　細菌検査', '2', NULL, NULL, '6', '560', '7000', '7560', NULL, '65246')
INFO  - 2019-04-01 13:44:11.52902700 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Sales_mdl->update_outside_relation SQL: UPDATE `t_outside_relation` SET `sales_mng_id` = '65246', `sales_detail_id` = 83818, `last_user_id` = 2, `last_datetime` = now() WHERE `report_no` =  '40011522'
INFO  - 2019-04-01 13:44:11.54264500 --> [edaf38176c34231db568c604d2c620f2]【DELETE(物理削除)】PROCESS: Sales_mdl->update_data SQL: DELETE FROM `t_sales_before`
WHERE `sales_mng_id` =  '65246'
INFO  - 2019-04-01 13:44:11.55485700 --> [edaf38176c34231db568c604d2c620f2]【DELETE(物理削除)】PROCESS: Sales_mdl->update_data SQL: DELETE FROM `t_sales_depart`
WHERE `sales_mng_id` =  '65246'
INFO  - 2019-04-01 13:44:11.56975900 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Sales_mdl->update_del_bill_status SQL: UPDATE `t_sales_mng` SET `data_status_type` = '1', `last_user_id` = 2, `last_datetime` = now() WHERE `sales_mng_id` in (65246) 
INFO  - 2019-04-01 13:44:11.58218500 --> [edaf38176c34231db568c604d2c620f2]【DELETE(物理削除)】PROCESS: Sales_mdl->delete_bill_print SQL: DELETE FROM `t_bill_mng`
WHERE `bill_mng_id` =  '50187'
INFO  - 2019-04-01 13:44:11.79391300 --> [edaf38176c34231db568c604d2c620f2]【DELETE(物理削除)】PROCESS: Receivable_mng_mdl->back_sales_data SQL: DELETE FROM `t_receivable_data`
WHERE `sales_mng_id` =  '65246'
INFO  - 2019-04-01 13:44:11.80605900 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Receivable_mng_mdl->back_sales_data SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money - 7560, `last_user_id` = 2, `last_datetime` = now() WHERE `receivable_mng_id` =  '37667'
INFO  - 2019-04-01 13:44:11.82997700 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_mng SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money + 7560, `last_user_id` = 2, `last_datetime` = now() WHERE `target_month` =  '201903' AND `customer_disp_name` =  '株式会社ミートショップヒロ' AND `institute_id` =  '1' AND `depart_id` =  '1'
INFO  - 2019-04-01 13:44:11.84476300 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), '37667', '65246', '2019/03/27', '7560')
INFO  - 2019-04-01 13:44:11.87287700 --> [edaf38176c34231db568c604d2c620f2]【売上変更処理   END】
INFO  - 2019-04-01 13:44:11.94295300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:edit execution time=0.7730s
INFO  - 2019-04-01 13:44:12.88705500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 13:44:14.97285700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=2.2009s
INFO  - 2019-04-01 13:44:24.36836900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-04-01 13:44:24.55613000 --> [edaf38176c34231db568c604d2c620f2]【売上登録処理   START】
INFO  - 2019-04-01 13:44:24.56965000 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '766', '和田八蒲鉾製造株式会社', '1', '1', '2019/04/01', '2019/04/01', '33', '有野加奈子', '1', '1', '1', '112000', '8960', '120960', NULL, NULL, NULL, '大阪研究所', '食品', '商品試験', '和田八蒲鉾製造株式会社', NULL, NULL, '1', 0)
INFO  - 2019-04-01 13:44:24.58358900 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '40011441', '豆腐豆乳入り木耳ボール天　他　5種×4回', '20', NULL, NULL, '6', '5600', '70000', '75600', '（細菌検査）報告書No.40011441-01～20', 65320)
INFO  - 2019-04-01 13:44:24.59810300 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '40011552', 'ふきとり検査（3月25日ご依頼分）', '11', NULL, NULL, '6', '3080', '38500', '41580', '（細菌検査）報告書No.40011552-01～02', 65320)
INFO  - 2019-04-01 13:44:24.61261900 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), NULL, '白天', '1', NULL, NULL, '6', '280', '3500', '3780', '（細菌検査）報告書No.40011552-01～02', 65320)
INFO  - 2019-04-01 13:44:24.70394800 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Receivable_mng_mdl->_regist_mng SQL: INSERT INTO `t_receivable_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `target_month`, `customer_id`, `customer_disp_name`, `institute_id`, `institute_name`, `depart_id`, `depart_name`, `sales_money`) VALUES (2, 2, now(), '201904', '766', '和田八蒲鉾製造株式会社', '1', '大阪研究所', '1', '食品', '120960')
INFO  - 2019-04-01 13:44:24.71792600 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), 38179, 65320, '2019/04/01', '120960')
INFO  - 2019-04-01 13:44:24.74764700 --> [edaf38176c34231db568c604d2c620f2]【売上登録処理   END】
INFO  - 2019-04-01 13:44:24.82092900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:index execution time=0.5555s
INFO  - 2019-04-01 13:44:26.18800800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-04-01 13:44:26.26448600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1464s
INFO  - 2019-04-01 13:44:27.91335800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-04-01 13:44:29.43306100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=1.6315s
INFO  - 2019-04-01 13:44:47.45070100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:output
INFO  - 2019-04-01 13:44:47.46501200 --> [edaf38176c34231db568c604d2c620f2]【請求書発行処理   START)】
INFO  - 2019-04-01 13:44:47.79616800 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0049994', 'S', '2019/04/01', '1', '株式会社菊太屋キッチン', '株式会社菊太屋キッチン', '10800', '2019/04/01', '1857')
INFO  - 2019-04-01 13:44:47.80816800 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50258, '65319')
INFO  - 2019-04-01 13:44:47.82062600 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049994' WHERE `sales_mng_id` =  '65319'
INFO  - 2019-04-01 13:44:48.03214600 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0049995', 'S', '2019/04/01', '1', '和田八蒲鉾製造株式会社', '和田八蒲鉾製造株式会社', '120960', '2019/04/01', '766')
INFO  - 2019-04-01 13:44:48.04327200 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50259, '65320')
INFO  - 2019-04-01 13:44:48.05545200 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049995' WHERE `sales_mng_id` =  '65320'
INFO  - 2019-04-01 13:44:48.07182300 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0049930', 'S', '2019/04/01', '1', '株式会社ミートショップヒロ', '株式会社ミートショップヒロ', '7560', '2019/03/27', '1465')
INFO  - 2019-04-01 13:44:48.08569500 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50260, '65246')
INFO  - 2019-04-01 13:44:48.09847900 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049930' WHERE `sales_mng_id` =  '65246'
INFO  - 2019-04-01 13:44:49.77086500 --> [edaf38176c34231db568c604d2c620f2]【請求書発行処理   END)】
INFO  - 2019-04-01 13:44:49.84407900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_sales_print  Method:output execution time=2.5016s
INFO  - 2019-04-01 13:44:51.23899100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-04-01 13:44:54.45319500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=3.3042s
INFO  - 2019-04-01 13:45:21.23334300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-04-01 13:45:21.25302100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1299s
INFO  - 2019-04-01 13:46:37.11641500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-04-01 13:46:37.13360900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1440s
INFO  - 2019-04-01 13:47:55.62721100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 13:47:59.29083800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=3.7428s
INFO  - 2019-04-01 13:48:10.06358300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 13:48:11.16049700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=1.1675s
INFO  - 2019-04-01 13:48:18.72004500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-04-01 13:48:18.83199000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.1879s
INFO  - 2019-04-01 13:48:32.42427200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 13:48:32.43987600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1217s
INFO  - 2019-04-01 13:48:33.14513800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 13:48:33.15961300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1225s
INFO  - 2019-04-01 13:48:33.37828200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-04-01 13:48:33.39325300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1511s
INFO  - 2019-04-01 13:48:39.03857500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-04-01 13:48:39.10663400 --> [edaf38176c34231db568c604d2c620f2]【売上登録処理   START】
INFO  - 2019-04-01 13:48:39.12366400 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '469', '株式会社シャルレ', '1', '1', '2019/04/01', '2019/04/01', '1', '小村真司', '1', '2', '1', '85000', '6800', '91800', NULL, NULL, NULL, '大阪研究所', '繊維', '商品試験', '株式会社シャルレ', NULL, NULL, '1', 0)
INFO  - 2019-04-01 13:48:39.14047000 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), NULL, '表示確認業務　2019年3月ご報告分', NULL, NULL, NULL, '6', '6800', '85000', '91800', NULL, 65321)
INFO  - 2019-04-01 13:48:39.22264400 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Receivable_mng_mdl->_regist_mng SQL: INSERT INTO `t_receivable_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `target_month`, `customer_id`, `customer_disp_name`, `institute_id`, `institute_name`, `depart_id`, `depart_name`, `sales_money`) VALUES (2, 2, now(), '201904', '469', '株式会社シャルレ', '1', '大阪研究所', '2', '繊維', '91800')
INFO  - 2019-04-01 13:48:39.23746900 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), 38180, 65321, '2019/04/01', '91800')
INFO  - 2019-04-01 13:48:39.26766300 --> [edaf38176c34231db568c604d2c620f2]【売上登録処理   END】
INFO  - 2019-04-01 13:48:39.34483300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.4096s
INFO  - 2019-04-01 13:48:40.30943800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 13:48:41.37472000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=1.1639s
INFO  - 2019-04-01 13:48:54.83617000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-04-01 13:48:56.20685700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=1.4395s
INFO  - 2019-04-01 13:49:03.05732700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:output
INFO  - 2019-04-01 13:49:03.07238100 --> [edaf38176c34231db568c604d2c620f2]【請求書発行処理   START)】
INFO  - 2019-04-01 13:49:03.28046300 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0049996', 'S', '2019/04/01', '1', '株式会社シャルレ', '株式会社シャルレ', '91800', '2019/04/01', '469')
INFO  - 2019-04-01 13:49:03.29398500 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50261, '65321')
INFO  - 2019-04-01 13:49:03.30708000 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049996' WHERE `sales_mng_id` =  '65321'
INFO  - 2019-04-01 13:49:03.91020600 --> [edaf38176c34231db568c604d2c620f2]【請求書発行処理   END)】
INFO  - 2019-04-01 13:49:03.98760600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_sales_print  Method:output execution time=1.0384s
INFO  - 2019-04-01 13:49:07.34681300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-04-01 13:49:10.43846900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=3.1613s
INFO  - 2019-04-01 13:49:13.42237800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-04-01 13:49:13.43943900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1290s
INFO  - 2019-04-01 13:54:58.72759300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:index
INFO  - 2019-04-01 13:54:59.78210100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_cutoff_print  Method:index execution time=1.1277s
INFO  - 2019-04-01 13:55:05.38134900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:index
INFO  - 2019-04-01 13:55:06.19713700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_cutoff_print  Method:index execution time=0.8858s
INFO  - 2019-04-01 13:55:46.42932300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:output
INFO  - 2019-04-01 13:55:46.44446100 --> [edaf38176c34231db568c604d2c620f2]【請求書発行処理(締日)   START)】
INFO  - 2019-04-01 13:55:46.91808100 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_cutoff_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `publish_date`, `bill_type`, `bill_money`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0049997', '2019/04/01', 'C', '7560', '1', 'サクセム株式会社', 'サクセム株式会社', '2019/03/31', '1864')
INFO  - 2019-04-01 13:55:46.93520000 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_cutoff_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50262, '64645')
INFO  - 2019-04-01 13:55:46.94983600 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Bill_cutoff_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049997' WHERE `sales_mng_id` = 64645
INFO  - 2019-04-01 13:55:47.16179800 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_cutoff_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `publish_date`, `bill_type`, `bill_money`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0049998', '2019/04/01', 'C', '45576', '1', '有限会社ショウタニ', '有限会社ショウタニ', '2019/03/31', '651')
INFO  - 2019-04-01 13:55:47.17561900 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_cutoff_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50263, '65189')
INFO  - 2019-04-01 13:55:47.18778200 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Bill_cutoff_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049998' WHERE `sales_mng_id` = 65189
INFO  - 2019-04-01 13:55:47.20105600 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_cutoff_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50263, '65245')
INFO  - 2019-04-01 13:55:47.21587200 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Bill_cutoff_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049998' WHERE `sales_mng_id` = 65245
INFO  - 2019-04-01 13:55:47.22953400 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_cutoff_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50263, '65317')
INFO  - 2019-04-01 13:55:47.24456500 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Bill_cutoff_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049998' WHERE `sales_mng_id` = 65317
INFO  - 2019-04-01 13:55:47.44926000 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_cutoff_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `publish_date`, `bill_type`, `bill_money`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0049999', '2019/04/01', 'C', '361800', '1', '株式会社横浜桂林', '株式会社横浜桂林', '2019/03/31', '2217')
INFO  - 2019-04-01 13:55:47.46307500 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_cutoff_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50264, '64484')
INFO  - 2019-04-01 13:55:47.47832900 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Bill_cutoff_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049999' WHERE `sales_mng_id` = 64484
INFO  - 2019-04-01 13:55:47.49264200 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_cutoff_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50264, '64898')
INFO  - 2019-04-01 13:55:47.50771900 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Bill_cutoff_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049999' WHERE `sales_mng_id` = 64898
INFO  - 2019-04-01 13:55:47.52281800 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_cutoff_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50264, '64893')
INFO  - 2019-04-01 13:55:47.53828500 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Bill_cutoff_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049999' WHERE `sales_mng_id` = 64893
INFO  - 2019-04-01 13:55:47.55321500 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_cutoff_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50264, '64494')
INFO  - 2019-04-01 13:55:47.56850300 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Bill_cutoff_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049999' WHERE `sales_mng_id` = 64494
INFO  - 2019-04-01 13:55:47.58368600 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_cutoff_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50264, '65250')
INFO  - 2019-04-01 13:55:47.59908900 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Bill_cutoff_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049999' WHERE `sales_mng_id` = 65250
INFO  - 2019-04-01 13:55:47.61354700 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_cutoff_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50264, '64894')
INFO  - 2019-04-01 13:55:47.62875300 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Bill_cutoff_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049999' WHERE `sales_mng_id` = 64894
INFO  - 2019-04-01 13:55:47.64335800 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_cutoff_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50264, '64698')
INFO  - 2019-04-01 13:55:47.65800700 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Bill_cutoff_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049999' WHERE `sales_mng_id` = 64698
INFO  - 2019-04-01 13:55:49.46040500 --> [edaf38176c34231db568c604d2c620f2]【請求書発行処理(締日)   END)】
INFO  - 2019-04-01 13:55:49.53774600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_cutoff_print  Method:output execution time=3.2175s
INFO  - 2019-04-01 13:56:39.73600700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:index
INFO  - 2019-04-01 13:56:40.50941400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_cutoff_print  Method:index execution time=0.8442s
INFO  - 2019-04-01 13:56:48.58899200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:bill_disp
INFO  - 2019-04-01 13:56:48.60631000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_cutoff_print  Method:bill_disp execution time=0.1348s
INFO  - 2019-04-01 13:57:01.61918200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:bill_disp
INFO  - 2019-04-01 13:57:01.63739200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_cutoff_print  Method:bill_disp execution time=0.1331s
INFO  - 2019-04-01 13:57:09.45358700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:bill_disp
INFO  - 2019-04-01 13:57:09.47115200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_cutoff_print  Method:bill_disp execution time=0.1365s
INFO  - 2019-04-01 13:57:23.66339100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:index
INFO  - 2019-04-01 13:57:24.44978000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_cutoff_print  Method:index execution time=0.8509s
INFO  - 2019-04-01 13:57:29.39543700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:index
INFO  - 2019-04-01 13:57:30.14152500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_cutoff_print  Method:index execution time=0.8185s
INFO  - 2019-04-01 13:57:34.26483500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:index
INFO  - 2019-04-01 13:57:35.03706200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_cutoff_print  Method:index execution time=0.8498s
INFO  - 2019-04-01 13:57:39.71532200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_confirm_other  Method:index
INFO  - 2019-04-01 13:57:39.76922600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_confirm_other  Method:index execution time=0.1928s
INFO  - 2019-04-01 13:57:52.20368600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:index
INFO  - 2019-04-01 13:57:53.21081700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_cutoff_print  Method:index execution time=1.0461s
INFO  - 2019-04-01 13:57:59.91070600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:index
INFO  - 2019-04-01 13:58:00.95310400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_cutoff_print  Method:index execution time=1.1114s
INFO  - 2019-04-01 13:58:05.73827600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:index
INFO  - 2019-04-01 13:58:06.51543100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_cutoff_print  Method:index execution time=0.8507s
INFO  - 2019-04-01 13:58:26.43965500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:index
INFO  - 2019-04-01 13:58:27.23475600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_cutoff_print  Method:index execution time=0.8641s
INFO  - 2019-04-01 13:58:31.77014900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:index
INFO  - 2019-04-01 13:58:32.57732200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_cutoff_print  Method:index execution time=0.8704s
INFO  - 2019-04-01 14:00:08.72105700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 14:00:12.35787200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=3.7136s
INFO  - 2019-04-01 14:00:16.32897100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 14:00:17.33431100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=1.0828s
INFO  - 2019-04-01 14:08:13.49360000 --> [260b81074d70e459062496612bf8688c]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-04-01 14:08:13.51155600 --> [260b81074d70e459062496612bf8688c]<PROCESS-END> Controller:login  Method:index execution time=0.1348s
INFO  - 2019-04-01 14:08:25.92543000 --> [260b81074d70e459062496612bf8688c]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-04-01 14:08:26.20632400 --> [260b81074d70e459062496612bf8688c]<PROCESS-START> USER-ID: 27 Controller:top  Method:index
INFO  - 2019-04-01 14:08:31.38296000 --> [260b81074d70e459062496612bf8688c]<PROCESS-END> Controller:top  Method:index execution time=5.2390s
INFO  - 2019-04-01 14:08:32.48047000 --> [260b81074d70e459062496612bf8688c]<PROCESS-START> USER-ID: 27 Controller:ajax  Method:daily_cnt_info
INFO  - 2019-04-01 14:08:32.88316200 --> [260b81074d70e459062496612bf8688c]<PROCESS-END> Controller:ajax  Method:daily_cnt_info execution time=0.5100s
INFO  - 2019-04-01 14:09:19.00134200 --> [3fc61d2d5f321c38e327bd9a22f0697e]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-04-01 14:09:19.01716700 --> [3fc61d2d5f321c38e327bd9a22f0697e]<PROCESS-END> Controller:login  Method:index execution time=0.1618s
INFO  - 2019-04-01 14:09:31.41688500 --> [3fc61d2d5f321c38e327bd9a22f0697e]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-04-01 14:09:31.43688100 --> [3fc61d2d5f321c38e327bd9a22f0697e]<PROCESS-END> Controller:login  Method:index execution time=0.1338s
INFO  - 2019-04-01 14:09:35.11892100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 14:09:38.75649200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=3.7179s
INFO  - 2019-04-01 14:09:45.00946600 --> [3fc61d2d5f321c38e327bd9a22f0697e]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-04-01 14:09:45.02907700 --> [3fc61d2d5f321c38e327bd9a22f0697e]<PROCESS-END> Controller:login  Method:index execution time=0.1262s
INFO  - 2019-04-01 14:09:55.06076100 --> [3fc61d2d5f321c38e327bd9a22f0697e]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-04-01 14:09:55.08089800 --> [3fc61d2d5f321c38e327bd9a22f0697e]<PROCESS-END> Controller:login  Method:index execution time=0.1594s
INFO  - 2019-04-01 14:10:11.20809300 --> [3fc61d2d5f321c38e327bd9a22f0697e]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-04-01 14:10:11.22774300 --> [3fc61d2d5f321c38e327bd9a22f0697e]<PROCESS-END> Controller:login  Method:index execution time=0.1224s
INFO  - 2019-04-01 14:10:16.89781900 --> [3fc61d2d5f321c38e327bd9a22f0697e]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-04-01 14:10:16.91587300 --> [3fc61d2d5f321c38e327bd9a22f0697e]<PROCESS-END> Controller:login  Method:index execution time=0.1212s
INFO  - 2019-04-01 14:10:22.11565600 --> [260b81074d70e459062496612bf8688c]<PROCESS-START> USER-ID: 27 Controller:sales_spec_print  Method:index
INFO  - 2019-04-01 14:10:22.19594300 --> [260b81074d70e459062496612bf8688c]<PROCESS-END> Controller:sales_spec_print  Method:index execution time=0.1718s
INFO  - 2019-04-01 14:10:50.04889800 --> [260b81074d70e459062496612bf8688c]<PROCESS-START> USER-ID: 27 Controller:sales_spec_print  Method:index
ERROR - 2019-04-01 14:10:51.16235100 --> [260b81074d70e459062496612bf8688c]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"260b81074d70e459062496612bf8688c";s:10:"ip_address";s:14:"172.68.101.195";s:10:"user_agent";s:102:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36";s:13:"last_activity";i:1554095293;}e2143e2057a35f9fddbc03cd0589143c||0||/||||]
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

ERROR - 2019-04-01 14:10:51.19396300 --> [260b81074d70e459062496612bf8688c]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"260b81074d70e459062496612bf8688c";s:10:"ip_address";s:14:"172.68.101.195";s:10:"user_agent";s:102:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36";s:13:"last_activity";i:1554095293;}e2143e2057a35f9fddbc03cd0589143c||0||/||||]
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

ERROR - 2019-04-01 14:10:51.22998300 --> [260b81074d70e459062496612bf8688c]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"260b81074d70e459062496612bf8688c";s:10:"ip_address";s:14:"172.68.101.195";s:10:"user_agent";s:102:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36";s:13:"last_activity";i:1554095293;}e2143e2057a35f9fddbc03cd0589143c||0||/||||]
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

INFO  - 2019-04-01 14:10:51.25683300 --> [260b81074d70e459062496612bf8688c]<PROCESS-END> Controller:sales_spec_print  Method:index execution time=1.2205s
INFO  - 2019-04-01 14:22:07.54566900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-04-01 14:22:07.63341300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1632s
INFO  - 2019-04-01 14:22:11.12766300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-04-01 14:22:11.15081100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1272s
INFO  - 2019-04-01 14:22:13.39700000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_info
INFO  - 2019-04-01 14:22:13.41552500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:customer_info execution time=0.1338s
INFO  - 2019-04-01 14:22:23.43888800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_list
INFO  - 2019-04-01 14:22:23.45671000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:handler_list execution time=0.1274s
INFO  - 2019-04-01 14:22:23.92102900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_list
INFO  - 2019-04-01 14:22:23.93732600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:handler_list execution time=0.1190s
INFO  - 2019-04-01 14:22:24.67878300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_list
INFO  - 2019-04-01 14:22:24.69628500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:handler_list execution time=0.1299s
INFO  - 2019-04-01 14:22:25.58388600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_info
INFO  - 2019-04-01 14:22:25.60176200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:handler_info execution time=0.1354s
INFO  - 2019-04-01 14:22:39.30170000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 14:22:39.31777500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1226s
INFO  - 2019-04-01 14:22:43.80744200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-04-01 14:22:43.82475000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1323s
INFO  - 2019-04-01 14:22:49.90709700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:22:49.92457700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1298s
INFO  - 2019-04-01 14:22:58.46400600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:22:58.48188400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1326s
INFO  - 2019-04-01 14:22:59.24482400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:22:59.26264000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1313s
INFO  - 2019-04-01 14:22:59.90458900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:22:59.92215800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1248s
INFO  - 2019-04-01 14:23:02.49630500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:23:02.51412900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1256s
INFO  - 2019-04-01 14:23:04.72961000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:23:04.74747500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1328s
INFO  - 2019-04-01 14:23:05.35946700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:23:05.37533800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1247s
INFO  - 2019-04-01 14:23:05.83750500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:23:05.85510700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1254s
INFO  - 2019-04-01 14:23:06.65536700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:23:06.67189200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1401s
INFO  - 2019-04-01 14:23:07.81187100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:23:07.82993900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1541s
INFO  - 2019-04-01 14:23:09.29863600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:23:09.31660600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1537s
INFO  - 2019-04-01 14:23:10.41811400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:23:10.43344500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1185s
INFO  - 2019-04-01 14:23:17.98295700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:23:18.00089500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1275s
INFO  - 2019-04-01 14:23:19.58898100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:23:19.60784300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1234s
INFO  - 2019-04-01 14:23:20.86976600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:23:20.88817100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1416s
INFO  - 2019-04-01 14:23:21.67620400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:23:21.69474000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1301s
INFO  - 2019-04-01 14:23:27.71298000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 14:23:27.73145900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1245s
INFO  - 2019-04-01 14:23:31.09940200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 14:23:31.11760300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1245s
INFO  - 2019-04-01 14:23:32.17838400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 14:23:32.19721900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1260s
INFO  - 2019-04-01 14:23:47.24347800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:23:47.26070200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1306s
INFO  - 2019-04-01 14:23:47.90605400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:23:47.92459600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1294s
INFO  - 2019-04-01 14:23:48.52301400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:23:48.54171400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1266s
INFO  - 2019-04-01 14:23:50.24217900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:23:50.26133300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1321s
INFO  - 2019-04-01 14:23:51.49059000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:23:51.50958200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1293s
INFO  - 2019-04-01 14:23:58.70279300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 14:23:58.72074900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1310s
INFO  - 2019-04-01 14:24:09.83105100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:24:09.84877400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1324s
INFO  - 2019-04-01 14:24:21.46952600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:24:21.48832400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1312s
INFO  - 2019-04-01 14:24:27.89245300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:24:27.91034600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1379s
INFO  - 2019-04-01 14:24:30.20913300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:24:30.22731900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1338s
INFO  - 2019-04-01 14:24:31.07815300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:24:31.09647900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1509s
INFO  - 2019-04-01 14:24:32.80491200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:24:32.82321800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1255s
INFO  - 2019-04-01 14:24:45.51509300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:24:45.53322100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1258s
INFO  - 2019-04-01 14:24:47.21777500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:24:47.23661500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1271s
INFO  - 2019-04-01 14:24:48.22133100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:24:48.23809900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1225s
INFO  - 2019-04-01 14:24:50.10824400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:24:50.12731000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1336s
INFO  - 2019-04-01 14:24:53.89937300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:24:53.91593800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1240s
INFO  - 2019-04-01 14:24:54.40101100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:24:54.41895600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1270s
INFO  - 2019-04-01 14:25:29.20512700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 14:25:29.22383400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1239s
INFO  - 2019-04-01 14:25:30.19353200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-04-01 14:25:30.20966800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1237s
INFO  - 2019-04-01 14:25:31.24684900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 14:25:31.26385100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1258s
INFO  - 2019-04-01 14:25:32.12359000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 14:25:32.14011700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1240s
INFO  - 2019-04-01 14:25:34.58446200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:25:34.60236600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1281s
INFO  - 2019-04-01 14:25:35.67285400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:25:35.68958000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1303s
INFO  - 2019-04-01 14:25:37.27564400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 14:25:37.29285800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1345s
INFO  - 2019-04-01 14:25:38.47615300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 14:25:38.49521500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1267s
INFO  - 2019-04-01 14:25:40.26177900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-04-01 14:25:40.27990800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1544s
INFO  - 2019-04-01 14:25:41.09535200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:25:41.11187000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1223s
INFO  - 2019-04-01 14:25:41.82023700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:25:41.83895100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1323s
INFO  - 2019-04-01 14:25:42.76568000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:25:42.78414700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1275s
INFO  - 2019-04-01 14:25:52.63148300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-04-01 14:25:52.65077200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1275s
INFO  - 2019-04-01 14:25:56.46521800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 14:25:56.48341000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1239s
INFO  - 2019-04-01 14:26:02.90390600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-04-01 14:26:02.92124300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1274s
INFO  - 2019-04-01 14:26:04.75007700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:26:04.76866300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1287s
INFO  - 2019-04-01 14:26:25.96375700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-04-01 14:26:26.08784900 --> [edaf38176c34231db568c604d2c620f2]【売上登録処理   START】
INFO  - 2019-04-01 14:26:26.10674700 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '2832', '株式会社小川珈琲クリエイツ', '1', '1', '2019/04/01', '2019/04/01', '34', '吉田晃', '1', '1', '1', '90000', '7200', '97200', NULL, NULL, NULL, '大阪研究所', '食品', '商品試験', '株式会社小川珈琲クリエイツ', NULL, NULL, '1', 0)
INFO  - 2019-04-01 14:26:26.12568400 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '40011558', '手指・器具他　衛生検査', '1', NULL, NULL, '6', '2400', '30000', '32400', '京都駅中央口店様\r\n報告書No.40011558-01', 65322)
INFO  - 2019-04-01 14:26:26.14490200 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), NULL, '手指・器具他　衛生検査', '1', NULL, NULL, '6', '2400', '30000', '32400', '京都駅店様\r\n報告書No.40011558-02', 65322)
INFO  - 2019-04-01 14:26:26.16359600 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), NULL, '手指・器具他　衛生検査', '1', NULL, NULL, '6', '2400', '30000', '32400', '洛西口店様\r\n報告書No.40011558-03', 65322)
INFO  - 2019-04-01 14:26:26.23583200 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Receivable_mng_mdl->_regist_mng SQL: INSERT INTO `t_receivable_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `target_month`, `customer_id`, `customer_disp_name`, `institute_id`, `institute_name`, `depart_id`, `depart_name`, `sales_money`) VALUES (2, 2, now(), '201904', '2832', '株式会社小川珈琲クリエイツ', '1', '大阪研究所', '1', '食品', '97200')
INFO  - 2019-04-01 14:26:26.25272700 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), 38181, 65322, '2019/04/01', '97200')
INFO  - 2019-04-01 14:26:26.28281200 --> [edaf38176c34231db568c604d2c620f2]【売上登録処理   END】
INFO  - 2019-04-01 14:26:26.35213100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:index execution time=0.5047s
INFO  - 2019-04-01 14:26:27.41180800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-04-01 14:26:27.48906900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1547s
INFO  - 2019-04-01 14:26:32.64671200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-04-01 14:26:34.01942400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=1.4489s
INFO  - 2019-04-01 14:27:35.47578200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:output
INFO  - 2019-04-01 14:27:35.49537500 --> [edaf38176c34231db568c604d2c620f2]【請求書発行処理   START)】
INFO  - 2019-04-01 14:27:35.70667200 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0050000', 'S', '2019/04/01', '1', '株式会社小川珈琲クリエイツ', '株式会社小川珈琲クリエイツ', '97200', '2019/04/01', '2832')
INFO  - 2019-04-01 14:27:35.72359100 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50265, '65322')
INFO  - 2019-04-01 14:27:35.74193200 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0050000' WHERE `sales_mng_id` =  '65322'
INFO  - 2019-04-01 14:27:36.28861400 --> [edaf38176c34231db568c604d2c620f2]【請求書発行処理   END)】
INFO  - 2019-04-01 14:27:36.36195500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_sales_print  Method:output execution time=0.9917s
INFO  - 2019-04-01 14:27:37.57670400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-04-01 14:27:40.62789500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=3.1475s
INFO  - 2019-04-01 14:27:43.48146700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-04-01 14:27:43.50235500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1328s
INFO  - 2019-04-01 14:30:00.79581800 --> [c63736821e50817a8ce689003c823f5d]<PROCESS-START> USER-ID:  Controller:receive_batch  Method:index
INFO  - 2019-04-01 14:30:00.81792600 --> [c63736821e50817a8ce689003c823f5d]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_mng SQL: INSERT INTO `t_outside_receive_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `process_datetime`, `record_count`, `result`) VALUES (0, 0, now(), '201904011400', 13, 'ok')
INFO  - 2019-04-01 14:30:00.97038200 --> [c63736821e50817a8ce689003c823f5d]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`) VALUES (0, 0, now(), '60005819', '60005819', 'unsent')
INFO  - 2019-04-01 14:30:00.98867400 --> [c63736821e50817a8ce689003c823f5d]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1188, '60005819', '株式会社プログレ', '60005819', '奥田訓子', '食品　他', '10000', '3', 'ok', '')
INFO  - 2019-04-01 14:30:01.10919100 --> [c63736821e50817a8ce689003c823f5d]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`) VALUES (0, 0, now(), '60005820', '60005820', 'unsent')
INFO  - 2019-04-01 14:30:01.12644200 --> [c63736821e50817a8ce689003c823f5d]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1188, '60005820', '井筒まい泉株式会社', '60005820', '奥田訓子', '食品　他', '10000', '3', 'ok', '')
INFO  - 2019-04-01 14:30:01.23647500 --> [c63736821e50817a8ce689003c823f5d]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`) VALUES (0, 0, now(), '60005821', '60005821', 'unsent')
INFO  - 2019-04-01 14:30:01.25299200 --> [c63736821e50817a8ce689003c823f5d]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1188, '60005821', '株式会社渡辺ハゲ天', '60005821', '奥田訓子', '食品　他', '15000', '3', 'ok', '')
INFO  - 2019-04-01 14:30:01.35444900 --> [c63736821e50817a8ce689003c823f5d]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`) VALUES (0, 0, now(), '60005822', '60005822', 'unsent')
INFO  - 2019-04-01 14:30:01.36991400 --> [c63736821e50817a8ce689003c823f5d]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1188, '60005822', '株式会社矢場とん', '60005822', '奥田訓子', '食品　他', '15000', '3', 'ok', '')
INFO  - 2019-04-01 14:30:01.47013800 --> [c63736821e50817a8ce689003c823f5d]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`) VALUES (0, 0, now(), '60005823', '60005823', 'unsent')
INFO  - 2019-04-01 14:30:01.49164800 --> [c63736821e50817a8ce689003c823f5d]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1188, '60005823', '株式会社八百彦本店', '60005823', '奥田訓子', '食品', '10000', '3', 'ok', '')
INFO  - 2019-04-01 14:30:01.59519900 --> [c63736821e50817a8ce689003c823f5d]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`) VALUES (0, 0, now(), '60005824', '60005824', 'unsent')
INFO  - 2019-04-01 14:30:01.61107000 --> [c63736821e50817a8ce689003c823f5d]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1188, '60005824', 'イサン株式会社', '60005824', '奥田訓子', '食品　他', '10000', '3', 'ok', '')
INFO  - 2019-04-01 14:30:01.70971100 --> [c63736821e50817a8ce689003c823f5d]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`) VALUES (0, 0, now(), '60005825', '60005825', 'unsent')
INFO  - 2019-04-01 14:30:01.72471900 --> [c63736821e50817a8ce689003c823f5d]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1188, '60005825', '株式会社柿安本店', '60005825', '奥田訓子', '食品　他', '20000', '3', 'ok', '')
INFO  - 2019-04-01 14:30:01.82231600 --> [c63736821e50817a8ce689003c823f5d]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`) VALUES (0, 0, now(), '60005826', '60005826', 'unsent')
INFO  - 2019-04-01 14:30:01.83730200 --> [c63736821e50817a8ce689003c823f5d]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1188, '60005826', '株式会社正起屋', '60005826', '奥田訓子', '食品　他', '10000', '3', 'ok', '')
INFO  - 2019-04-01 14:30:01.93531400 --> [c63736821e50817a8ce689003c823f5d]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`) VALUES (0, 0, now(), '60005827', '60005827', 'unsent')
INFO  - 2019-04-01 14:30:01.95070500 --> [c63736821e50817a8ce689003c823f5d]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1188, '60005827', '明治屋産業株式会社', '60005827', '奥田訓子', '食品　他', '10000', '3', 'ok', '')
INFO  - 2019-04-01 14:30:02.04795500 --> [c63736821e50817a8ce689003c823f5d]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`, `sales_mng_id`, `sales_detail_id`) VALUES (0, 0, now(), '30002168', '30002168', 'unsent', '64557', '82893')
INFO  - 2019-04-01 14:30:02.06263300 --> [c63736821e50817a8ce689003c823f5d]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1188, '30002168', '富国株式会社', '30002168', '横田研太郎', '金剛紐打ち組み紐　綿３Φ　ポリエステル３Φ', '23000', '3', 'ok', '')
INFO  - 2019-04-01 14:30:02.16069200 --> [c63736821e50817a8ce689003c823f5d]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`, `sales_mng_id`, `sales_detail_id`) VALUES (0, 0, now(), '40011441', '40011441', 'unsent', '65320', '83819')
INFO  - 2019-04-01 14:30:02.17654700 --> [c63736821e50817a8ce689003c823f5d]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1188, '40011441', '和田八蒲鉾製造株式会社', '40011441', '有野加奈子', 'かまぼこ（豆腐豆乳入り木耳ボール天）他５種', '70000', '3', 'ok', '')
INFO  - 2019-04-01 14:30:02.27526400 --> [c63736821e50817a8ce689003c823f5d]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`, `sales_mng_id`, `sales_detail_id`) VALUES (0, 0, now(), '40011538', '40011538', 'unsent', '65317', '83813')
INFO  - 2019-04-01 14:30:02.29112000 --> [c63736821e50817a8ce689003c823f5d]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1188, '40011538', '有限会社ショウタニ', '40011538', '有野加奈子', '食品', '10000', '3', 'ok', '')
INFO  - 2019-04-01 14:30:02.40852600 --> [c63736821e50817a8ce689003c823f5d]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`, `sales_mng_id`, `sales_detail_id`) VALUES (0, 0, now(), '40011552', '40011552', 'unsent', '65320', '83820')
INFO  - 2019-04-01 14:30:02.42626900 --> [c63736821e50817a8ce689003c823f5d]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1188, '40011552', '和田八蒲鉾製造株式会社', '40011552', '有野加奈子', '手指・器具・白天', '42000', '3', 'ok', '')
INFO  - 2019-04-01 14:30:02.44524600 --> [c63736821e50817a8ce689003c823f5d]【UPDATE】PROCESS: Receive_batch_mdl->update_outside_receive_mng SQL: UPDATE `t_outside_receive_mng` SET `result` = 'ok', `last_user_id` = 0, `last_datetime` = now() WHERE `outside_receive_mng_id` =  1188
INFO  - 2019-04-01 14:30:02.59278100 --> [c63736821e50817a8ce689003c823f5d]<PROCESS-END> Controller:receive_batch  Method:index execution time=2.2802s
INFO  - 2019-04-01 14:33:39.16930500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:index
INFO  - 2019-04-01 14:33:40.23223500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_cutoff_print  Method:index execution time=1.1325s
INFO  - 2019-04-01 14:41:00.13571100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 14:41:03.49388000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=3.4326s
INFO  - 2019-04-01 14:42:03.86557300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 14:42:04.89777800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=1.0867s
INFO  - 2019-04-01 14:47:00.50178100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-04-01 14:47:00.62305000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.1930s
INFO  - 2019-04-01 14:52:29.25972300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 14:52:29.28031100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1537s
INFO  - 2019-04-01 14:52:30.59564300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 14:52:30.61604500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1274s
INFO  - 2019-04-01 14:52:31.44855000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 14:52:31.46701100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1323s
INFO  - 2019-04-01 14:52:32.66902700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-04-01 14:52:32.68939800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1296s
INFO  - 2019-04-01 14:52:39.18453600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:52:39.20400100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1288s
INFO  - 2019-04-01 14:52:41.18572900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:52:41.20618400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1369s
INFO  - 2019-04-01 14:52:43.41214600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-04-01 14:52:43.71700900 --> [edaf38176c34231db568c604d2c620f2]【売上登録処理   START】
INFO  - 2019-04-01 14:52:43.74194700 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '514', '株式会社日本育児', '1', '1', '2019/03/31', '2019/03/14', '59', '横田研太郎', '1', '3', '1', '9500', '760', '10260', NULL, NULL, '31', '大阪研究所', '雑貨', '商品試験', '株式会社日本育児', '2019/03/01', '2019/03/31', '1', 0)
INFO  - 2019-04-01 14:52:43.76355500 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '30002173', 'NEWファミリーゲイト', '1', NULL, NULL, '6', '760', '9500', '10260', 'さくの中央部の負荷重試験、耐荷重試験\r\nPO18-573', 65323)
INFO  - 2019-04-01 14:52:43.78318400 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Sales_mdl->update_outside_relation SQL: UPDATE `t_outside_relation` SET `sales_mng_id` = 65323, `sales_detail_id` = 83826, `last_user_id` = 2, `last_datetime` = now() WHERE `report_no` =  '30002173'
INFO  - 2019-04-01 14:52:43.92383100 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Receivable_mng_mdl->_regist_mng SQL: INSERT INTO `t_receivable_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `target_month`, `customer_id`, `customer_disp_name`, `institute_id`, `institute_name`, `depart_id`, `depart_name`, `sales_money`) VALUES (2, 2, now(), '201903', '514', '株式会社日本育児', NULL, NULL, NULL, NULL, '10260')
INFO  - 2019-04-01 14:52:43.94245000 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), 38182, 65323, '2019/03/31', '10260')
INFO  - 2019-04-01 14:52:43.98056400 --> [edaf38176c34231db568c604d2c620f2]【売上登録処理   END】
INFO  - 2019-04-01 14:52:44.05526500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.7495s
INFO  - 2019-04-01 14:52:44.90607100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 14:52:45.92342000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=1.0931s
INFO  - 2019-04-01 14:53:11.93090700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-04-01 14:53:12.05255100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.1917s
INFO  - 2019-04-01 14:53:26.50646200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 14:53:26.52791100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1321s
INFO  - 2019-04-01 14:53:27.11260100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 14:53:27.13334400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1495s
INFO  - 2019-04-01 14:53:27.94181800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 14:53:27.96085100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1269s
INFO  - 2019-04-01 14:53:28.51669600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 14:53:28.53789200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1349s
INFO  - 2019-04-01 14:53:29.28947800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 14:53:29.31052500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1315s
INFO  - 2019-04-01 14:53:30.90009000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-04-01 14:53:30.92115800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1681s
INFO  - 2019-04-01 14:53:36.48273200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:53:36.50411200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1357s
INFO  - 2019-04-01 14:53:37.19479600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:53:37.21390200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1274s
INFO  - 2019-04-01 14:53:37.79718600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:53:37.81715200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1327s
INFO  - 2019-04-01 14:53:39.75587000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-04-01 14:53:40.05124300 --> [edaf38176c34231db568c604d2c620f2]【売上登録処理   START】
INFO  - 2019-04-01 14:53:40.07413400 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '514', '株式会社日本育児', '1', '1', '2019/03/31', '2019/03/15', '59', '横田研太郎', '1', '3', '1', '9500', '760', '10260', NULL, NULL, '31', '大阪研究所', '雑貨', '商品試験', '株式会社日本育児', '2019/03/01', '2019/03/31', '1', 0)
INFO  - 2019-04-01 14:53:40.09537700 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '30002178', 'スマートゲイトⅡ', '1', NULL, NULL, '6', '760', '9500', '10260', 'さくの中央部の負荷重試験、耐荷重試験\r\nPO18-519', 65324)
INFO  - 2019-04-01 14:53:40.11568700 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Sales_mdl->update_outside_relation SQL: UPDATE `t_outside_relation` SET `sales_mng_id` = 65324, `sales_detail_id` = 83827, `last_user_id` = 2, `last_datetime` = now() WHERE `report_no` =  '30002178'
INFO  - 2019-04-01 14:53:40.26044900 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_mng SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money + 10260, `last_user_id` = 2, `last_datetime` = now() WHERE `target_month` =  '201903' AND `customer_disp_name` =  '株式会社日本育児' AND `institute_id` IS NULL AND `depart_id` IS NULL
INFO  - 2019-04-01 14:53:40.28074100 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), '38182', 65324, '2019/03/31', '10260')
INFO  - 2019-04-01 14:53:40.31934600 --> [edaf38176c34231db568c604d2c620f2]【売上登録処理   END】
INFO  - 2019-04-01 14:53:40.39127800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.7423s
INFO  - 2019-04-01 14:53:41.38737600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 14:53:42.43749000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=1.1246s
INFO  - 2019-04-01 14:54:04.66884500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-04-01 14:54:04.78937000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.1895s
INFO  - 2019-04-01 14:54:17.65304200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 14:54:17.67329700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1365s
INFO  - 2019-04-01 14:54:18.41846800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-04-01 14:54:18.43960900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1378s
INFO  - 2019-04-01 14:54:23.03889900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:54:23.05855800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1295s
INFO  - 2019-04-01 14:54:24.44679900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:54:24.46830400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1351s
INFO  - 2019-04-01 14:54:25.63256600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-04-01 14:54:25.92607200 --> [edaf38176c34231db568c604d2c620f2]【売上登録処理   START】
INFO  - 2019-04-01 14:54:25.95271700 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '514', '株式会社日本育児', '1', '1', '2019/03/31', '2019/03/18', '59', '横田研太郎', '1', '3', '1', '9500', '760', '10260', NULL, NULL, '31', '大阪研究所', '雑貨', '商品試験', '株式会社日本育児', '2019/03/01', '2019/03/31', '1', 0)
INFO  - 2019-04-01 14:54:25.97555900 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '30002179', 'スマートゲイトⅡ　ミルキー', '1', NULL, NULL, '6', '760', '9500', '10260', 'さくの中央部の負荷重試験、耐荷重試験\r\nPO18-529', 65325)
INFO  - 2019-04-01 14:54:25.99775800 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Sales_mdl->update_outside_relation SQL: UPDATE `t_outside_relation` SET `sales_mng_id` = 65325, `sales_detail_id` = 83828, `last_user_id` = 2, `last_datetime` = now() WHERE `report_no` =  '30002179'
INFO  - 2019-04-01 14:54:26.14512100 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_mng SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money + 10260, `last_user_id` = 2, `last_datetime` = now() WHERE `target_month` =  '201903' AND `customer_disp_name` =  '株式会社日本育児' AND `institute_id` IS NULL AND `depart_id` IS NULL
INFO  - 2019-04-01 14:54:26.16809000 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), '38182', 65325, '2019/03/31', '10260')
INFO  - 2019-04-01 14:54:26.20707100 --> [edaf38176c34231db568c604d2c620f2]【売上登録処理   END】
INFO  - 2019-04-01 14:54:26.28849700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.7556s
INFO  - 2019-04-01 14:54:37.17742700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 14:54:38.20934100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=1.1013s
INFO  - 2019-04-01 14:54:42.07066900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-04-01 14:54:42.19669000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.1838s
INFO  - 2019-04-01 14:54:56.10460600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 14:54:56.12668400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1357s
INFO  - 2019-04-01 14:54:58.22967400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 14:54:58.25115700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1381s
INFO  - 2019-04-01 14:54:59.91653100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-04-01 14:54:59.93892000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1347s
INFO  - 2019-04-01 14:55:06.77058200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:55:06.79204900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1335s
INFO  - 2019-04-01 14:55:08.64046100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:55:08.66261000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1299s
INFO  - 2019-04-01 14:55:12.48086900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-04-01 14:55:12.77447600 --> [edaf38176c34231db568c604d2c620f2]【売上登録処理   START】
INFO  - 2019-04-01 14:55:12.79816500 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '514', '株式会社日本育児', '1', '1', '2019/03/31', '2019/03/21', '59', '横田研太郎', '1', '3', '1', '9500', '760', '10260', NULL, NULL, '31', '大阪研究所', '雑貨', '商品試験', '株式会社日本育児', '2019/03/01', '2019/03/31', '1', 0)
INFO  - 2019-04-01 14:55:12.82053000 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '30002204', 'ベビーゲイト　ブランシュ', '1', NULL, NULL, '6', '760', '9500', '10260', 'さくの中央部の負荷重試験、耐荷重試験\r\nPO18-588', 65326)
INFO  - 2019-04-01 14:55:12.84242800 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Sales_mdl->update_outside_relation SQL: UPDATE `t_outside_relation` SET `sales_mng_id` = 65326, `sales_detail_id` = 83829, `last_user_id` = 2, `last_datetime` = now() WHERE `report_no` =  '30002204'
INFO  - 2019-04-01 14:55:13.00859200 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_mng SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money + 10260, `last_user_id` = 2, `last_datetime` = now() WHERE `target_month` =  '201903' AND `customer_disp_name` =  '株式会社日本育児' AND `institute_id` IS NULL AND `depart_id` IS NULL
INFO  - 2019-04-01 14:55:13.02862400 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), '38182', 65326, '2019/03/31', '10260')
INFO  - 2019-04-01 14:55:13.05981400 --> [edaf38176c34231db568c604d2c620f2]【売上登録処理   END】
INFO  - 2019-04-01 14:55:13.13728700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.7527s
INFO  - 2019-04-01 14:55:14.09995800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 14:55:15.07870600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=1.0508s
INFO  - 2019-04-01 14:55:31.66299300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-04-01 14:55:31.78021500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.1947s
INFO  - 2019-04-01 14:55:43.58285400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 14:55:43.60540100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1307s
INFO  - 2019-04-01 14:55:44.64395200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 14:55:44.66661300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1359s
INFO  - 2019-04-01 14:55:45.87125900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 14:55:45.89199500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1282s
INFO  - 2019-04-01 14:55:47.23233900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-04-01 14:55:47.25525400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1664s
INFO  - 2019-04-01 14:55:51.24224700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:55:51.26506100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1359s
INFO  - 2019-04-01 14:55:51.99988300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:55:52.02210000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1259s
INFO  - 2019-04-01 14:55:53.93967500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-04-01 14:55:54.21471600 --> [edaf38176c34231db568c604d2c620f2]【売上登録処理   START】
INFO  - 2019-04-01 14:55:54.23992200 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '514', '株式会社日本育児', '1', '1', '2019/03/31', '2019/03/25', '59', '横田研太郎', '1', '3', '1', '9500', '760', '10260', NULL, NULL, '31', '大阪研究所', '雑貨', '商品試験', '株式会社日本育児', '2019/03/01', '2019/03/31', '1', 0)
INFO  - 2019-04-01 14:55:54.26318900 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '30002205', 'ベビーズゲイト', '1', NULL, NULL, '6', '760', '9500', '10260', 'さくの中央部の負荷重試験、耐荷重試験\r\nPO18-503', 65327)
INFO  - 2019-04-01 14:55:54.28576200 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Sales_mdl->update_outside_relation SQL: UPDATE `t_outside_relation` SET `sales_mng_id` = 65327, `sales_detail_id` = 83830, `last_user_id` = 2, `last_datetime` = now() WHERE `report_no` =  '30002205'
INFO  - 2019-04-01 14:55:54.44116900 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_mng SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money + 10260, `last_user_id` = 2, `last_datetime` = now() WHERE `target_month` =  '201903' AND `customer_disp_name` =  '株式会社日本育児' AND `institute_id` IS NULL AND `depart_id` IS NULL
INFO  - 2019-04-01 14:55:54.46522500 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), '38182', 65327, '2019/03/31', '10260')
INFO  - 2019-04-01 14:55:54.50187300 --> [edaf38176c34231db568c604d2c620f2]【売上登録処理   END】
INFO  - 2019-04-01 14:55:54.57915000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.7351s
INFO  - 2019-04-01 14:55:55.35964700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 14:55:56.38984000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=1.1095s
INFO  - 2019-04-01 14:56:12.94536400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-04-01 14:56:13.05547100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.1834s
INFO  - 2019-04-01 14:56:23.63763200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 14:56:23.65976000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1298s
INFO  - 2019-04-01 14:56:24.09954400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 14:56:24.12257500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1296s
INFO  - 2019-04-01 14:56:25.04072300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 14:56:25.06394600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1309s
INFO  - 2019-04-01 14:56:27.85747000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 14:56:27.87912400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1349s
INFO  - 2019-04-01 14:56:29.31535300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-04-01 14:56:29.33722000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1289s
INFO  - 2019-04-01 14:56:33.27862600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:56:33.30096000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1264s
INFO  - 2019-04-01 14:56:35.31613200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:56:35.33638200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1247s
INFO  - 2019-04-01 14:56:36.58812000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:56:36.61103000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1323s
INFO  - 2019-04-01 14:56:38.13998900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-04-01 14:56:38.43453900 --> [edaf38176c34231db568c604d2c620f2]【売上登録処理   START】
INFO  - 2019-04-01 14:56:38.45830400 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '514', '株式会社日本育児', '1', '1', '2019/03/31', '2019/03/26', '59', '横田研太郎', '1', '3', '1', '9500', '760', '10260', NULL, NULL, '31', '大阪研究所', '雑貨', '商品試験', '株式会社日本育児', '2019/03/01', '2019/03/31', '1', 0)
INFO  - 2019-04-01 14:56:38.48022200 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '30002206', 'スマートゲイトⅡプラス階段用', '1', NULL, NULL, '6', '760', '9500', '10260', 'さくの中央部の負荷重試験、耐荷重試験\r\nPO18-471', 65328)
INFO  - 2019-04-01 14:56:38.50193300 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Sales_mdl->update_outside_relation SQL: UPDATE `t_outside_relation` SET `sales_mng_id` = 65328, `sales_detail_id` = 83831, `last_user_id` = 2, `last_datetime` = now() WHERE `report_no` =  '30002206'
INFO  - 2019-04-01 14:56:38.64996300 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_mng SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money + 10260, `last_user_id` = 2, `last_datetime` = now() WHERE `target_month` =  '201903' AND `customer_disp_name` =  '株式会社日本育児' AND `institute_id` IS NULL AND `depart_id` IS NULL
INFO  - 2019-04-01 14:56:38.67215400 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), '38182', 65328, '2019/03/31', '10260')
INFO  - 2019-04-01 14:56:38.70700100 --> [edaf38176c34231db568c604d2c620f2]【売上登録処理   END】
INFO  - 2019-04-01 14:56:38.77969300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.7421s
INFO  - 2019-04-01 14:56:39.59889600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 14:56:40.61409300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=1.0870s
INFO  - 2019-04-01 14:56:58.65404200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-04-01 14:56:58.77186200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.1901s
INFO  - 2019-04-01 14:57:43.56738300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 14:57:43.59095900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1364s
INFO  - 2019-04-01 14:57:44.49251600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 14:57:44.51572000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1411s
INFO  - 2019-04-01 14:57:45.22057400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 14:57:45.24409800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1374s
INFO  - 2019-04-01 14:57:46.70170000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 14:57:46.72277800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1311s
INFO  - 2019-04-01 14:57:47.90897700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 14:57:47.93156800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1418s
INFO  - 2019-04-01 14:57:49.56347100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-04-01 14:57:49.58448200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1405s
INFO  - 2019-04-01 14:57:54.45180200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:57:54.47510800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1479s
INFO  - 2019-04-01 14:57:55.55476000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:57:55.57466800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1304s
INFO  - 2019-04-01 14:57:58.08688900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-04-01 14:57:58.37236400 --> [edaf38176c34231db568c604d2c620f2]【売上登録処理   START】
INFO  - 2019-04-01 14:57:58.39803700 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '514', '株式会社日本育児', '1', '1', '2019/03/31', '2019/03/28', '59', '横田研太郎', '1', '3', '1', '9500', '760', '10260', NULL, NULL, '31', '大阪研究所', '雑貨', '商品試験', '株式会社日本育児', '2019/03/01', '2019/03/31', '1', 0)
INFO  - 2019-04-01 14:57:58.42065400 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '30002207', 'ベビーズゲイト１．２．３', '1', NULL, NULL, '6', '760', '9500', '10260', 'さくの中央部の負荷重試験、耐荷重試験\r\nPO18-516', 65329)
INFO  - 2019-04-01 14:57:58.44402300 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Sales_mdl->update_outside_relation SQL: UPDATE `t_outside_relation` SET `sales_mng_id` = 65329, `sales_detail_id` = 83832, `last_user_id` = 2, `last_datetime` = now() WHERE `report_no` =  '30002207'
INFO  - 2019-04-01 14:57:58.58882700 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_mng SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money + 10260, `last_user_id` = 2, `last_datetime` = now() WHERE `target_month` =  '201903' AND `customer_disp_name` =  '株式会社日本育児' AND `institute_id` IS NULL AND `depart_id` IS NULL
INFO  - 2019-04-01 14:57:58.60866000 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), '38182', 65329, '2019/03/31', '10260')
INFO  - 2019-04-01 14:57:58.65183900 --> [edaf38176c34231db568c604d2c620f2]【売上登録処理   END】
INFO  - 2019-04-01 14:57:58.72890000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.7457s
INFO  - 2019-04-01 14:57:59.52098800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 14:58:00.54731200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=1.0987s
INFO  - 2019-04-01 14:58:25.44852400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-04-01 14:58:25.57366200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.2022s
INFO  - 2019-04-01 14:58:35.41257400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 14:58:35.43412800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1306s
INFO  - 2019-04-01 14:58:37.71703800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 14:58:37.74030900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1407s
INFO  - 2019-04-01 14:58:38.47830100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-04-01 14:58:38.50066900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1330s
INFO  - 2019-04-01 14:58:44.20044300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:58:44.22236300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1383s
INFO  - 2019-04-01 14:58:45.18055100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:58:45.20440100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1323s
INFO  - 2019-04-01 14:58:45.51967500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 14:58:45.54346900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1324s
INFO  - 2019-04-01 14:58:47.12275200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-04-01 14:58:47.40712000 --> [edaf38176c34231db568c604d2c620f2]【売上登録処理   START】
INFO  - 2019-04-01 14:58:47.43083300 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '514', '株式会社日本育児', '1', '1', '2019/03/31', '2019/03/29', '59', '横田研太郎', '1', '3', '1', '9500', '760', '10260', NULL, NULL, '31', '大阪研究所', '雑貨', '商品試験', '株式会社日本育児', '2019/03/01', '2019/03/31', '1', 0)
INFO  - 2019-04-01 14:58:47.45037700 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '30002208', 'セーフティステップゲイト', '1', NULL, NULL, '6', '760', '9500', '10260', 'さくの中央部の負荷重試験、耐荷重試験\r\nPO18-539', 65330)
INFO  - 2019-04-01 14:58:47.47184300 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Sales_mdl->update_outside_relation SQL: UPDATE `t_outside_relation` SET `sales_mng_id` = 65330, `sales_detail_id` = 83833, `last_user_id` = 2, `last_datetime` = now() WHERE `report_no` =  '30002208'
INFO  - 2019-04-01 14:58:47.61124200 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_mng SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money + 10260, `last_user_id` = 2, `last_datetime` = now() WHERE `target_month` =  '201903' AND `customer_disp_name` =  '株式会社日本育児' AND `institute_id` IS NULL AND `depart_id` IS NULL
INFO  - 2019-04-01 14:58:47.63216900 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), '38182', 65330, '2019/03/31', '10260')
INFO  - 2019-04-01 14:58:47.66898400 --> [edaf38176c34231db568c604d2c620f2]【売上登録処理   END】
INFO  - 2019-04-01 14:58:47.88994600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.7454s
INFO  - 2019-04-01 14:58:49.17933200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 14:58:50.28441300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=1.1714s
INFO  - 2019-04-01 14:59:36.55226500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:index
INFO  - 2019-04-01 14:59:37.72509200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_cutoff_print  Method:index execution time=1.2492s
INFO  - 2019-04-01 14:59:51.52293200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:output
INFO  - 2019-04-01 14:59:51.54679500 --> [edaf38176c34231db568c604d2c620f2]【請求書発行処理(締日)   START)】
INFO  - 2019-04-01 14:59:51.89913500 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_cutoff_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `publish_date`, `bill_type`, `bill_money`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0050001', '2019/04/01', 'C', '82080', '1', '株式会社日本育児', '株式会社日本育児', '2019/03/31', '514')
INFO  - 2019-04-01 14:59:51.91881300 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_cutoff_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50266, '65323')
INFO  - 2019-04-01 14:59:51.94097500 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Bill_cutoff_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0050001' WHERE `sales_mng_id` = 65323
INFO  - 2019-04-01 14:59:51.96366800 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_cutoff_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50266, '65330')
INFO  - 2019-04-01 14:59:51.98681100 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Bill_cutoff_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0050001' WHERE `sales_mng_id` = 65330
INFO  - 2019-04-01 14:59:52.00939400 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_cutoff_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50266, '65328')
INFO  - 2019-04-01 14:59:52.03176900 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Bill_cutoff_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0050001' WHERE `sales_mng_id` = 65328
INFO  - 2019-04-01 14:59:52.05269800 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_cutoff_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50266, '65326')
INFO  - 2019-04-01 14:59:52.07267100 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Bill_cutoff_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0050001' WHERE `sales_mng_id` = 65326
INFO  - 2019-04-01 14:59:52.09476500 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_cutoff_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50266, '65324')
INFO  - 2019-04-01 14:59:52.11740300 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Bill_cutoff_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0050001' WHERE `sales_mng_id` = 65324
INFO  - 2019-04-01 14:59:52.13904500 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_cutoff_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50266, '65329')
INFO  - 2019-04-01 14:59:52.16186900 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Bill_cutoff_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0050001' WHERE `sales_mng_id` = 65329
INFO  - 2019-04-01 14:59:52.18507100 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_cutoff_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50266, '65327')
INFO  - 2019-04-01 14:59:52.20799500 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Bill_cutoff_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0050001' WHERE `sales_mng_id` = 65327
INFO  - 2019-04-01 14:59:52.23055400 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_cutoff_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50266, '65325')
INFO  - 2019-04-01 14:59:52.25183200 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Bill_cutoff_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0050001' WHERE `sales_mng_id` = 65325
INFO  - 2019-04-01 14:59:52.84283200 --> [edaf38176c34231db568c604d2c620f2]【請求書発行処理(締日)   END)】
INFO  - 2019-04-01 14:59:52.95574300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_cutoff_print  Method:output execution time=1.5425s
INFO  - 2019-04-01 14:59:54.26495800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:index
INFO  - 2019-04-01 14:59:55.31721400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_cutoff_print  Method:index execution time=1.1133s
INFO  - 2019-04-01 15:00:02.66022400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:bill_disp
INFO  - 2019-04-01 15:00:02.68457900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_cutoff_print  Method:bill_disp execution time=0.1610s
INFO  - 2019-04-01 15:02:02.84772600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 15:02:06.42703200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=3.6515s
INFO  - 2019-04-01 15:02:10.18589900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 15:02:12.16364900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=2.0578s
INFO  - 2019-04-01 15:03:38.91380400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:index
INFO  - 2019-04-01 15:03:40.10013300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_cutoff_print  Method:index execution time=1.2851s
INFO  - 2019-04-01 15:04:28.86502200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:index
INFO  - 2019-04-01 15:04:30.02328400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_cutoff_print  Method:index execution time=1.2306s
INFO  - 2019-04-01 15:04:42.36108800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:index
INFO  - 2019-04-01 15:04:43.21261000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_cutoff_print  Method:index execution time=0.9283s
INFO  - 2019-04-01 15:04:45.71002500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:bill_disp
INFO  - 2019-04-01 15:04:45.73619200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_cutoff_print  Method:bill_disp execution time=0.1445s
INFO  - 2019-04-01 15:10:15.00823500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-04-01 15:10:16.56149400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=1.6187s
INFO  - 2019-04-01 15:10:22.01902500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-04-01 15:10:23.93213000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=1.9963s
INFO  - 2019-04-01 15:10:26.40000500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-04-01 15:10:26.45652300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1673s
INFO  - 2019-04-01 15:13:06.71363000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-04-01 15:13:06.73747200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1381s
INFO  - 2019-04-01 15:13:50.39596800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 15:13:54.35655900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=4.0255s
INFO  - 2019-04-01 15:13:57.86405800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 15:13:59.93469500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=2.1462s
INFO  - 2019-04-01 15:14:02.75168000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-04-01 15:14:02.91028600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.1977s
INFO  - 2019-04-01 15:14:06.97780300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 15:14:08.97740800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=2.0683s
INFO  - 2019-04-01 15:51:21.72930600 --> [d7f49f7d8c991a56efd6fae08351ad8a]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-04-01 15:51:21.75432300 --> [d7f49f7d8c991a56efd6fae08351ad8a]<PROCESS-END> Controller:login  Method:index execution time=0.1587s
INFO  - 2019-04-01 15:51:47.45866700 --> [d7f49f7d8c991a56efd6fae08351ad8a]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-04-01 15:51:47.48746100 --> [d7f49f7d8c991a56efd6fae08351ad8a]<PROCESS-END> Controller:login  Method:index execution time=0.1394s
INFO  - 2019-04-01 15:51:54.15102500 --> [d7f49f7d8c991a56efd6fae08351ad8a]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-04-01 15:51:54.17946500 --> [d7f49f7d8c991a56efd6fae08351ad8a]<PROCESS-END> Controller:login  Method:index execution time=0.1460s
INFO  - 2019-04-01 15:52:00.46623500 --> [d7f49f7d8c991a56efd6fae08351ad8a]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-04-01 15:52:00.49359800 --> [d7f49f7d8c991a56efd6fae08351ad8a]<PROCESS-END> Controller:login  Method:index execution time=0.1488s
INFO  - 2019-04-01 15:52:09.86439800 --> [d7f49f7d8c991a56efd6fae08351ad8a]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-04-01 15:52:09.89315100 --> [d7f49f7d8c991a56efd6fae08351ad8a]<PROCESS-END> Controller:login  Method:index execution time=0.1407s
INFO  - 2019-04-01 15:52:41.64528400 --> [d7f49f7d8c991a56efd6fae08351ad8a]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-04-01 15:52:41.83363900 --> [d7f49f7d8c991a56efd6fae08351ad8a]<PROCESS-START> USER-ID: 11 Controller:top  Method:index
INFO  - 2019-04-01 15:52:46.83789600 --> [d7f49f7d8c991a56efd6fae08351ad8a]<PROCESS-END> Controller:top  Method:index execution time=5.0679s
INFO  - 2019-04-01 15:52:47.19950300 --> [d7f49f7d8c991a56efd6fae08351ad8a]<PROCESS-START> USER-ID: 11 Controller:ajax  Method:daily_cnt_info
INFO  - 2019-04-01 15:52:47.59645800 --> [d7f49f7d8c991a56efd6fae08351ad8a]<PROCESS-END> Controller:ajax  Method:daily_cnt_info execution time=0.5060s
INFO  - 2019-04-01 15:52:52.53677600 --> [d7f49f7d8c991a56efd6fae08351ad8a]<PROCESS-START> USER-ID: 11 Controller:age_month_print  Method:index
INFO  - 2019-04-01 15:52:54.72140100 --> [d7f49f7d8c991a56efd6fae08351ad8a]<PROCESS-END> Controller:age_month_print  Method:index execution time=2.2446s
INFO  - 2019-04-01 15:53:02.16208100 --> [d7f49f7d8c991a56efd6fae08351ad8a]<PROCESS-START> USER-ID: 11 Controller:age_month_print  Method:index
INFO  - 2019-04-01 15:53:03.94785100 --> [d7f49f7d8c991a56efd6fae08351ad8a]<PROCESS-END> Controller:age_month_print  Method:index execution time=1.8485s
INFO  - 2019-04-01 15:54:57.99121700 --> [d7f49f7d8c991a56efd6fae08351ad8a]<PROCESS-START> USER-ID: 11 Controller:age_month_print  Method:index
INFO  - 2019-04-01 15:54:58.23440800 --> [d7f49f7d8c991a56efd6fae08351ad8a]<PROCESS-END> Controller:age_month_print  Method:index execution time=0.3042s
INFO  - 2019-04-01 15:55:08.05040900 --> [d7f49f7d8c991a56efd6fae08351ad8a]<PROCESS-START> USER-ID: 11 Controller:age_month_print  Method:index
INFO  - 2019-04-01 15:55:08.27370800 --> [d7f49f7d8c991a56efd6fae08351ad8a]<PROCESS-END> Controller:age_month_print  Method:index execution time=0.3132s
INFO  - 2019-04-01 15:55:17.92234000 --> [d7f49f7d8c991a56efd6fae08351ad8a]<PROCESS-START> USER-ID: 11 Controller:age_month_print  Method:index
INFO  - 2019-04-01 15:55:18.23366500 --> [d7f49f7d8c991a56efd6fae08351ad8a]<PROCESS-END> Controller:age_month_print  Method:index execution time=0.2889s
INFO  - 2019-04-01 15:55:24.43321300 --> [d7f49f7d8c991a56efd6fae08351ad8a]<PROCESS-START> USER-ID: 11 Controller:age_month_print  Method:index
INFO  - 2019-04-01 15:55:24.72822900 --> [d7f49f7d8c991a56efd6fae08351ad8a]<PROCESS-END> Controller:age_month_print  Method:index execution time=0.3658s
INFO  - 2019-04-01 16:13:32.41030900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-04-01 16:13:32.51556000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1812s
INFO  - 2019-04-01 16:13:35.43582800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-04-01 16:13:35.46733800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1444s
INFO  - 2019-04-01 16:13:46.38444900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_info
INFO  - 2019-04-01 16:13:46.41097400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:customer_info execution time=0.1395s
INFO  - 2019-04-01 16:14:26.21638000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:customer_input  Method:index
INFO  - 2019-04-01 16:14:26.26841900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:customer_input  Method:index execution time=0.1666s
INFO  - 2019-04-01 16:14:35.07831200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_official_list
INFO  - 2019-04-01 16:14:35.10860000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:customer_official_list execution time=0.1393s
INFO  - 2019-04-01 16:14:35.81541200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_official_list
INFO  - 2019-04-01 16:14:35.85404100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:customer_official_list execution time=0.1787s
INFO  - 2019-04-01 16:14:36.80480600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_official_list
INFO  - 2019-04-01 16:14:36.83635500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:customer_official_list execution time=0.1429s
INFO  - 2019-04-01 16:14:37.40255400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_official_list
INFO  - 2019-04-01 16:14:37.43425900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:customer_official_list execution time=0.1408s
INFO  - 2019-04-01 16:14:37.86819000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_official_list
INFO  - 2019-04-01 16:14:37.89657600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:customer_official_list execution time=0.1341s
INFO  - 2019-04-01 16:15:36.57711700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_official_list
INFO  - 2019-04-01 16:15:36.60916500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:customer_official_list execution time=0.1383s
INFO  - 2019-04-01 16:15:36.94031200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_official_list
INFO  - 2019-04-01 16:15:36.97167400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:customer_official_list execution time=0.1458s
INFO  - 2019-04-01 16:15:37.78695300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_official_list
INFO  - 2019-04-01 16:15:37.81818200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:customer_official_list execution time=0.1433s
INFO  - 2019-04-01 16:15:38.35261300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_official_list
INFO  - 2019-04-01 16:15:38.38431100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:customer_official_list execution time=0.1424s
INFO  - 2019-04-01 16:15:40.15562400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_official_list
INFO  - 2019-04-01 16:15:40.18678600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:customer_official_list execution time=0.1467s
INFO  - 2019-04-01 16:15:41.05662700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_official_list
INFO  - 2019-04-01 16:15:41.08781300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:customer_official_list execution time=0.1467s
INFO  - 2019-04-01 16:15:41.68286400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_official_list
INFO  - 2019-04-01 16:15:41.71375200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:customer_official_list execution time=0.1646s
INFO  - 2019-04-01 16:15:42.37247500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_official_list
INFO  - 2019-04-01 16:15:42.40273700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:customer_official_list execution time=0.1455s
INFO  - 2019-04-01 16:15:43.16113000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_official_list
INFO  - 2019-04-01 16:15:43.18735000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:customer_official_list execution time=0.1632s
INFO  - 2019-04-01 16:15:44.07073100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_official_list
INFO  - 2019-04-01 16:15:44.10162600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:customer_official_list execution time=0.1443s
INFO  - 2019-04-01 16:15:44.79613800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_official_list
INFO  - 2019-04-01 16:15:44.82748200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:customer_official_list execution time=0.1472s
INFO  - 2019-04-01 16:15:45.53857100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_official_list
INFO  - 2019-04-01 16:15:45.57037500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:customer_official_list execution time=0.1540s
INFO  - 2019-04-01 16:17:20.55340100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:customer_input  Method:index
INFO  - 2019-04-01 16:17:20.58635200 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Customer_mdl->regist_data SQL: INSERT INTO `m_customer` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_name`, `customer_furi`, `customer_disp_name`, `handler_name`, `prefix_cd`, `depart_name`, `post_no_1`, `post_no_2`, `address`, `buil_name`, `tel_no_1`, `tel_no_2`, `tel_no_3`, `fax_no_1`, `fax_no_2`, `fax_no_3`, `card_print_type`, `customer_type`, `credit_type`, `memo`) VALUES (2, 2, now(), '株式会社トレードフューチャー', 'とれーどふゅーちゃー', '株式会社トレードフューチャー', '代表取締役　石倉正人', '001', '', '103', '0027', '東京都中央区日本橋2-2-3', 'RISHEビル　UCF 4F', '03', '6869', '5682', '03', '3502', '1412', '0', '1', '1', '2019.4雑貨新規')
INFO  - 2019-04-01 16:17:20.63116300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:customer_input  Method:index execution time=0.2004s
INFO  - 2019-04-01 16:17:23.66064400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-04-01 16:17:23.69189800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1369s
INFO  - 2019-04-01 16:17:26.06363700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_info
INFO  - 2019-04-01 16:17:26.09097700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:customer_info execution time=0.1399s
INFO  - 2019-04-01 16:17:33.68425300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_list
INFO  - 2019-04-01 16:17:33.70994600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:handler_list execution time=0.1404s
INFO  - 2019-04-01 16:17:34.59275900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_info
INFO  - 2019-04-01 16:17:34.61905100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:handler_info execution time=0.1345s
INFO  - 2019-04-01 16:17:41.44282400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 16:17:41.46929700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1393s
INFO  - 2019-04-01 16:17:42.16104200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 16:17:42.18692600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1339s
INFO  - 2019-04-01 16:17:43.23358200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 16:17:43.25802000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1369s
INFO  - 2019-04-01 16:17:52.83835500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 16:17:52.86325200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1306s
INFO  - 2019-04-01 16:17:52.97339100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-04-01 16:17:52.99762300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1400s
INFO  - 2019-04-01 16:18:07.57222100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-04-01 16:18:07.69987600 --> [edaf38176c34231db568c604d2c620f2]【売上登録処理   START】
INFO  - 2019-04-01 16:18:07.73206700 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '2959', '株式会社トレードフューチャー', '1', '1', '2019/04/01', '2019/04/01', '21', '白井小帆里', '1', '3', '1', '10500', '840', '11340', NULL, NULL, NULL, '大阪研究所', '雑貨', '商品試験', '株式会社トレードフューチャー', NULL, NULL, '1', 0)
INFO  - 2019-04-01 16:18:07.75758800 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '30002200', 'クーラーバッグ　保冷試験', '1', NULL, NULL, '6', '840', '10500', '11340', NULL, 65331)
INFO  - 2019-04-01 16:18:07.84236700 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Receivable_mng_mdl->_regist_mng SQL: INSERT INTO `t_receivable_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `target_month`, `customer_id`, `customer_disp_name`, `institute_id`, `institute_name`, `depart_id`, `depart_name`, `sales_money`) VALUES (2, 2, now(), '201904', '2959', '株式会社トレードフューチャー', '1', '大阪研究所', '3', '雑貨', '11340')
INFO  - 2019-04-01 16:18:07.86566500 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), 38183, 65331, '2019/04/01', '11340')
INFO  - 2019-04-01 16:18:07.90240600 --> [edaf38176c34231db568c604d2c620f2]【売上登録処理   END】
INFO  - 2019-04-01 16:18:07.98444700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:index execution time=0.5096s
INFO  - 2019-04-01 16:18:08.77180300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-04-01 16:18:08.87774400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1592s
INFO  - 2019-04-01 16:18:15.43307900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-04-01 16:18:15.46551800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1496s
INFO  - 2019-04-01 16:18:16.31002300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-04-01 16:18:16.34090600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1449s
INFO  - 2019-04-01 16:18:17.32275500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-04-01 16:18:17.35376400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1497s
INFO  - 2019-04-01 16:18:17.71806200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-04-01 16:18:17.74802000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1360s
INFO  - 2019-04-01 16:18:18.91024900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_info
INFO  - 2019-04-01 16:18:18.93626500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:customer_info execution time=0.1402s
INFO  - 2019-04-01 16:18:57.80386900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_list
INFO  - 2019-04-01 16:18:57.83047200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:handler_list execution time=0.1321s
INFO  - 2019-04-01 16:18:58.51705800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_info
INFO  - 2019-04-01 16:18:58.54377800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:handler_info execution time=0.1434s
INFO  - 2019-04-01 16:19:13.72771600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 16:19:13.75444900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1402s
INFO  - 2019-04-01 16:19:14.62900000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 16:19:14.65556600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1363s
INFO  - 2019-04-01 16:19:21.91828800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 16:19:21.94540300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1377s
INFO  - 2019-04-01 16:19:23.21773100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 16:19:23.24342600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1606s
INFO  - 2019-04-01 16:19:24.88274500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 16:19:24.90737900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1575s
INFO  - 2019-04-01 16:19:25.79335100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 16:19:25.81755800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1416s
INFO  - 2019-04-01 16:19:27.06901700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 16:19:27.09758700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1646s
INFO  - 2019-04-01 16:19:28.54052100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 16:19:28.56534200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1292s
INFO  - 2019-04-01 16:19:29.41726100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 16:19:29.44381500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1617s
INFO  - 2019-04-01 16:19:31.60589600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 16:19:31.63007700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1278s
INFO  - 2019-04-01 16:19:32.79055100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 16:19:32.81726500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1339s
INFO  - 2019-04-01 16:19:33.27679300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 16:19:33.30392800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1346s
INFO  - 2019-04-01 16:19:41.71409900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-04-01 16:19:41.74085600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1390s
INFO  - 2019-04-01 16:19:47.10592500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-04-01 16:19:47.23377600 --> [edaf38176c34231db568c604d2c620f2]【売上登録処理   START】
INFO  - 2019-04-01 16:19:47.25789300 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '2746', '株式会社ユニバーサルポスト', '1', '1', '2019/03/29', '2019/03/29', '59', '横田研太郎', '1', '3', '1', '6000', '480', '6480', NULL, NULL, NULL, '大阪研究所', '雑貨', '商品試験', '株式会社ユニバーサルポスト', NULL, NULL, '1', 0)
INFO  - 2019-04-01 16:19:47.28262800 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '30002176', '6缶用手提げ袋　耐荷重試験（静止）', '1', NULL, NULL, '6', '480', '6000', '6480', NULL, 65332)
INFO  - 2019-04-01 16:19:47.30690100 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Sales_mdl->update_outside_relation SQL: UPDATE `t_outside_relation` SET `sales_mng_id` = 65332, `sales_detail_id` = 83835, `last_user_id` = 2, `last_datetime` = now() WHERE `report_no` =  '30002176'
INFO  - 2019-04-01 16:19:47.38000500 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Receivable_mng_mdl->_regist_mng SQL: INSERT INTO `t_receivable_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `target_month`, `customer_id`, `customer_disp_name`, `institute_id`, `institute_name`, `depart_id`, `depart_name`, `sales_money`) VALUES (2, 2, now(), '201903', '2746', '株式会社ユニバーサルポスト', '1', '大阪研究所', '3', '雑貨', '6480')
INFO  - 2019-04-01 16:19:47.40408700 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), 38184, 65332, '2019/03/29', '6480')
INFO  - 2019-04-01 16:19:47.44084900 --> [edaf38176c34231db568c604d2c620f2]【売上登録処理   END】
INFO  - 2019-04-01 16:19:47.51809000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:index execution time=0.5161s
INFO  - 2019-04-01 16:19:48.52088400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-04-01 16:19:48.61019900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1632s
INFO  - 2019-04-01 16:20:03.75072000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-04-01 16:20:03.78302300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1609s
INFO  - 2019-04-01 16:20:05.01405900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-04-01 16:20:05.03468400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1335s
INFO  - 2019-04-01 16:20:05.95497200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_info
INFO  - 2019-04-01 16:20:05.97064500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:customer_info execution time=0.1284s
INFO  - 2019-04-01 16:20:15.64802500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_list
INFO  - 2019-04-01 16:20:15.66180900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:handler_list execution time=0.1180s
INFO  - 2019-04-01 16:20:16.26936400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_info
INFO  - 2019-04-01 16:20:16.28413600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:handler_info execution time=0.1203s
INFO  - 2019-04-01 16:20:42.51310800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 16:20:42.52764300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1203s
INFO  - 2019-04-01 16:20:43.21495700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 16:20:43.22868000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1293s
INFO  - 2019-04-01 16:20:44.00139000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 16:20:44.01504000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1166s
INFO  - 2019-04-01 16:20:44.96886400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 16:20:44.98427400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1208s
INFO  - 2019-04-01 16:20:48.09507600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 16:20:48.10964300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1280s
INFO  - 2019-04-01 16:20:50.09284000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 16:20:50.10734200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1255s
INFO  - 2019-04-01 16:20:50.52683300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-04-01 16:20:50.54197200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1242s
INFO  - 2019-04-01 16:20:55.30465900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-04-01 16:20:55.41860000 --> [edaf38176c34231db568c604d2c620f2]【売上登録処理   START】
INFO  - 2019-04-01 16:20:55.43371700 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '2746', '株式会社ユニバーサルポスト', '1', '1', '2019/03/29', '2019/03/29', '59', '横田研太郎', '1', '3', '1', '6000', '480', '6480', NULL, NULL, NULL, '大阪研究所', '雑貨', '商品試験', '株式会社ユニバーサルポスト', NULL, NULL, '1', 0)
INFO  - 2019-04-01 16:20:55.44742600 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '30002177', '12缶用カートン　耐荷重試験（静止）', '1', NULL, NULL, '6', '480', '6000', '6480', NULL, 65333)
INFO  - 2019-04-01 16:20:55.46104400 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Sales_mdl->update_outside_relation SQL: UPDATE `t_outside_relation` SET `sales_mng_id` = 65333, `sales_detail_id` = 83836, `last_user_id` = 2, `last_datetime` = now() WHERE `report_no` =  '30002177'
INFO  - 2019-04-01 16:20:55.53454200 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_mng SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money + 6480, `last_user_id` = 2, `last_datetime` = now() WHERE `target_month` =  '201903' AND `customer_disp_name` =  '株式会社ユニバーサルポスト' AND `institute_id` =  '1' AND `depart_id` =  '3'
INFO  - 2019-04-01 16:20:55.54951300 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), '38184', 65333, '2019/03/29', '6480')
INFO  - 2019-04-01 16:20:55.57225600 --> [edaf38176c34231db568c604d2c620f2]【売上登録処理   END】
INFO  - 2019-04-01 16:20:55.63357100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:index execution time=0.4318s
INFO  - 2019-04-01 16:20:56.52200200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-04-01 16:20:56.59092100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1432s
INFO  - 2019-04-01 16:20:58.55476100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-04-01 16:20:59.84465800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=1.3603s
INFO  - 2019-04-01 16:21:06.54920200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:output
INFO  - 2019-04-01 16:21:06.56379800 --> [edaf38176c34231db568c604d2c620f2]【請求書発行処理   START)】
INFO  - 2019-04-01 16:21:06.78912100 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0050002', 'S', '2019/04/01', '1', '株式会社トレードフューチャー', '株式会社トレードフューチャー', '11340', '2019/04/01', '2959')
INFO  - 2019-04-01 16:21:06.80232100 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50267, '65331')
INFO  - 2019-04-01 16:21:06.81336100 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0050002' WHERE `sales_mng_id` =  '65331'
INFO  - 2019-04-01 16:21:07.02969900 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0050003', 'S', '2019/04/01', '1', '株式会社ユニバーサルポスト', '株式会社ユニバーサルポスト', '6480', '2019/03/29', '2746')
INFO  - 2019-04-01 16:21:07.04349300 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50268, '65332')
INFO  - 2019-04-01 16:21:07.05614600 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0050003' WHERE `sales_mng_id` =  '65332'
INFO  - 2019-04-01 16:21:07.26816700 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0050004', 'S', '2019/04/01', '1', '株式会社ユニバーサルポスト', '株式会社ユニバーサルポスト', '6480', '2019/03/29', '2746')
INFO  - 2019-04-01 16:21:07.28033300 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50269, '65333')
INFO  - 2019-04-01 16:21:07.29197800 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0050004' WHERE `sales_mng_id` =  '65333'
INFO  - 2019-04-01 16:21:08.84540300 --> [edaf38176c34231db568c604d2c620f2]【請求書発行処理   END)】
INFO  - 2019-04-01 16:21:08.96727000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_sales_print  Method:output execution time=2.5164s
INFO  - 2019-04-01 16:21:14.42838700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-04-01 16:21:17.55157100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=3.1902s
INFO  - 2019-04-01 16:21:24.59887400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-04-01 16:21:24.61350200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1218s
INFO  - 2019-04-01 16:21:41.55941100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-04-01 16:21:41.57486300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1352s
INFO  - 2019-04-01 16:21:54.37383900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-04-01 16:21:54.39029700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1389s
INFO  - 2019-04-01 16:23:55.01294800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 16:23:58.55886300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=3.6202s
INFO  - 2019-04-01 16:24:07.45939700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 16:24:08.47768800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=1.0936s
INFO  - 2019-04-01 16:24:14.95422900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 16:24:16.38774100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=1.5040s
INFO  - 2019-04-01 16:24:20.16559400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-04-01 16:24:20.27888400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.1800s
INFO  - 2019-04-01 16:24:43.81798600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 16:24:43.83136900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1252s
INFO  - 2019-04-01 16:24:44.50818400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 16:24:44.52261200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1224s
INFO  - 2019-04-01 16:24:45.48515700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 16:24:45.49947900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1263s
INFO  - 2019-04-01 16:25:00.92242800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 16:25:00.93664000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1255s
INFO  - 2019-04-01 16:26:11.63058200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 16:26:11.64491900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1308s
INFO  - 2019-04-01 16:26:14.76910100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-04-01 16:26:14.78213400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1208s
INFO  - 2019-04-01 16:26:20.39112800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 16:26:20.40344000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1178s
INFO  - 2019-04-01 16:26:21.08915900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 16:26:21.10316100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1505s
INFO  - 2019-04-01 16:26:26.39758200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-04-01 16:26:26.46126400 --> [edaf38176c34231db568c604d2c620f2]【売上登録処理   START】
INFO  - 2019-04-01 16:26:26.47797000 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '548', 'ユニチカトレーディング株式会社', '1', '1', '2019/04/01', '2019/04/01', '7', '堀古ひろみ', '1', '2', '1', '13800', '1104', '14904', NULL, NULL, NULL, '大阪研究所', '繊維', '商品試験', 'ユニチカトレーディング株式会社', NULL, NULL, '1', 0)
INFO  - 2019-04-01 16:26:26.49289500 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), NULL, '編地　シャルレ様向け　スナッグ試験', '3', NULL, NULL, '6', '1104', '13800', '14904', '報告書No.10005934-13', 65334)
INFO  - 2019-04-01 16:26:26.56458900 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Receivable_mng_mdl->_regist_mng SQL: INSERT INTO `t_receivable_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `target_month`, `customer_id`, `customer_disp_name`, `institute_id`, `institute_name`, `depart_id`, `depart_name`, `sales_money`) VALUES (2, 2, now(), '201904', '548', 'ユニチカトレーディング株式会社', '1', '大阪研究所', '2', '繊維', '14904')
INFO  - 2019-04-01 16:26:26.57672100 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), 38185, 65334, '2019/04/01', '14904')
INFO  - 2019-04-01 16:26:26.60490800 --> [edaf38176c34231db568c604d2c620f2]【売上登録処理   END】
INFO  - 2019-04-01 16:26:26.68961800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.3729s
INFO  - 2019-04-01 16:26:27.47055400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 16:26:28.90989000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=1.5057s
INFO  - 2019-04-01 16:26:33.47388300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-04-01 16:26:34.89054400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=1.4590s
INFO  - 2019-04-01 16:26:39.82458500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:output
INFO  - 2019-04-01 16:26:39.83834100 --> [edaf38176c34231db568c604d2c620f2]【請求書発行処理   START)】
INFO  - 2019-04-01 16:26:40.06017900 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0050005', 'S', '2019/04/01', '1', 'ユニチカトレーディング株式会社', 'ユニチカトレーディング株式会社', '14904', '2019/04/01', '548')
INFO  - 2019-04-01 16:26:40.07333200 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50270, '65334')
INFO  - 2019-04-01 16:26:40.08446900 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0050005' WHERE `sales_mng_id` =  '65334'
INFO  - 2019-04-01 16:26:40.60828900 --> [edaf38176c34231db568c604d2c620f2]【請求書発行処理   END)】
INFO  - 2019-04-01 16:26:40.67631000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_sales_print  Method:output execution time=0.9512s
INFO  - 2019-04-01 16:26:41.81592400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-04-01 16:26:44.91798200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=3.1798s
INFO  - 2019-04-01 16:26:47.88819900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-04-01 16:26:47.90383600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1266s
INFO  - 2019-04-01 16:30:00.73548200 --> [b8065501c6a6c843fe89437997366c0e]<PROCESS-START> USER-ID:  Controller:receive_batch  Method:index
INFO  - 2019-04-01 16:30:00.75166300 --> [b8065501c6a6c843fe89437997366c0e]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_mng SQL: INSERT INTO `t_outside_receive_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `process_datetime`, `record_count`, `result`) VALUES (0, 0, now(), '201904011600', 1, 'ok')
INFO  - 2019-04-01 16:30:00.87074400 --> [b8065501c6a6c843fe89437997366c0e]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`, `sales_mng_id`, `sales_detail_id`) VALUES (0, 0, now(), '10005935', '10005935', 'unsent', '65318', '83814')
INFO  - 2019-04-01 16:30:00.88399900 --> [b8065501c6a6c843fe89437997366c0e]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1189, '10005935', '岡本株式会社', '10005935', '大木美緒', '靴下', '15500', '3', 'ok', '')
INFO  - 2019-04-01 16:30:00.89718500 --> [b8065501c6a6c843fe89437997366c0e]【UPDATE】PROCESS: Receive_batch_mdl->update_outside_receive_mng SQL: UPDATE `t_outside_receive_mng` SET `result` = 'ok', `last_user_id` = 0, `last_datetime` = now() WHERE `outside_receive_mng_id` =  1189
INFO  - 2019-04-01 16:30:00.95135700 --> [b8065501c6a6c843fe89437997366c0e]<PROCESS-END> Controller:receive_batch  Method:index execution time=0.7459s
INFO  - 2019-04-01 16:56:31.70846100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-04-01 16:56:31.79984300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1741s
INFO  - 2019-04-01 16:56:39.23069000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-04-01 16:56:39.25130900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1276s
INFO  - 2019-04-01 16:56:40.18524200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_info
INFO  - 2019-04-01 16:56:40.20018900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:customer_info execution time=0.1215s
INFO  - 2019-04-01 16:56:51.96087500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_list
INFO  - 2019-04-01 16:56:51.97561600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:handler_list execution time=0.1272s
INFO  - 2019-04-01 16:56:52.88435900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_info
INFO  - 2019-04-01 16:56:52.89904000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:handler_info execution time=0.1206s
INFO  - 2019-04-01 16:57:00.53720700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 16:57:00.55206900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1222s
INFO  - 2019-04-01 16:57:23.43183000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 16:57:23.44577700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1146s
INFO  - 2019-04-01 16:57:24.46419700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 16:57:24.47883400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1246s
INFO  - 2019-04-01 16:57:24.81577900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 16:57:24.83094500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1287s
INFO  - 2019-04-01 16:57:25.98369300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 16:57:25.99809200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1277s
INFO  - 2019-04-01 16:57:26.26223800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-04-01 16:57:26.27735700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1190s
INFO  - 2019-04-01 16:57:44.96784000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 16:57:44.98256800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1271s
INFO  - 2019-04-01 16:57:46.34343600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 16:57:46.35793800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1224s
INFO  - 2019-04-01 16:57:48.04556500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 16:57:48.05886000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1202s
INFO  - 2019-04-01 16:57:48.61182900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 16:57:48.62529900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1217s
INFO  - 2019-04-01 16:57:49.83445700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 16:57:49.84911000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1614s
INFO  - 2019-04-01 16:57:51.39847700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 16:57:51.41263100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1268s
INFO  - 2019-04-01 16:57:53.14377700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 16:57:53.15732300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1214s
INFO  - 2019-04-01 16:57:54.02606000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 16:57:54.04062000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1227s
INFO  - 2019-04-01 16:57:57.78602500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 16:57:57.80053500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1294s
INFO  - 2019-04-01 16:57:59.66415500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 16:57:59.68006000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1258s
INFO  - 2019-04-01 16:58:01.98904300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 16:58:02.00250900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1331s
INFO  - 2019-04-01 16:58:02.63828300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 16:58:02.65065300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1273s
INFO  - 2019-04-01 16:58:04.41194600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 16:58:04.42615000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1256s
INFO  - 2019-04-01 16:58:08.56316000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 16:58:08.57744500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1227s
INFO  - 2019-04-01 16:58:11.60137200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 16:58:11.61468900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1237s
INFO  - 2019-04-01 16:58:14.96213700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 16:58:14.97680500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1246s
INFO  - 2019-04-01 16:58:24.81900500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-04-01 16:58:24.93166300 --> [edaf38176c34231db568c604d2c620f2]【売上登録処理   START】
INFO  - 2019-04-01 16:58:24.94653900 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '2275', 'メロディアン株式会社', '1', '1', '2019/04/01', '2019/04/01', '11', '森彬光', '1', '2', '6', '217500', '17400', '234900', NULL, NULL, NULL, '大阪研究所', '繊維', '化粧品評価', 'メロディアン株式会社', NULL, NULL, '1', 0)
INFO  - 2019-04-01 16:58:24.96195800 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '10005737', '毛束　3束', NULL, NULL, NULL, '6', '17400', '217500', '234900', '毛髪表面特性測定試験、毛髪引張特性測定試験、毛髪光沢測定試験、毛髪水分量測定試験、電子顕微鏡による毛髪表面撮影', 65335)
INFO  - 2019-04-01 16:58:25.03447400 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Receivable_mng_mdl->_regist_mng SQL: INSERT INTO `t_receivable_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `target_month`, `customer_id`, `customer_disp_name`, `institute_id`, `institute_name`, `depart_id`, `depart_name`, `sales_money`) VALUES (2, 2, now(), '201904', '2275', 'メロディアン株式会社', '1', '大阪研究所', '2', '繊維', '234900')
INFO  - 2019-04-01 16:58:25.04823700 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), 38186, 65335, '2019/04/01', '234900')
INFO  - 2019-04-01 16:58:25.08235700 --> [edaf38176c34231db568c604d2c620f2]【売上登録処理   END】
INFO  - 2019-04-01 16:58:25.14354900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:index execution time=0.4299s
INFO  - 2019-04-01 16:58:26.29445200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-04-01 16:58:26.37186000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1498s
INFO  - 2019-04-01 16:58:27.85673000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 16:58:31.49076700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=3.7137s
INFO  - 2019-04-01 16:58:38.93055900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 16:58:40.94585000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=2.1161s
INFO  - 2019-04-01 16:58:42.89766700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-04-01 16:58:43.01465900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.2099s
INFO  - 2019-04-01 16:59:14.13519300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 16:59:14.14885200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1223s
INFO  - 2019-04-01 16:59:18.97382400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 16:59:18.98804900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1232s
INFO  - 2019-04-01 16:59:22.19640000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 16:59:22.21002200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1270s
INFO  - 2019-04-01 16:59:23.51439600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-04-01 16:59:23.66250300 --> [edaf38176c34231db568c604d2c620f2]【売上登録処理   START】
INFO  - 2019-04-01 16:59:23.67777300 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '2275', 'メロディアン株式会社', '1', '1', '2019/04/01', '2019/04/01', '11', '森彬光', '1', '2', '6', '172500', '13800', '186300', NULL, NULL, NULL, '大阪研究所', '繊維', '化粧品評価', 'メロディアン株式会社', NULL, NULL, '1', 0)
INFO  - 2019-04-01 16:59:23.69173000 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '10005738', '毛束　3束', NULL, NULL, NULL, '6', '13800', '172500', '186300', '毛髪表面特性測定試験、毛髪曲げ特性測定試験、毛髪引張特性測定試験、電子顕微鏡による毛髪表面撮影', 65336)
INFO  - 2019-04-01 16:59:23.76595500 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_mng SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money + 186300, `last_user_id` = 2, `last_datetime` = now() WHERE `target_month` =  '201904' AND `customer_disp_name` =  'メロディアン株式会社' AND `institute_id` =  '1' AND `depart_id` =  '2'
INFO  - 2019-04-01 16:59:23.78168500 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), '38186', 65336, '2019/04/01', '186300')
INFO  - 2019-04-01 16:59:23.81302600 --> [edaf38176c34231db568c604d2c620f2]【売上登録処理   END】
INFO  - 2019-04-01 16:59:23.88280600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.4819s
INFO  - 2019-04-01 16:59:24.50706300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 16:59:26.46247300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=2.0316s
INFO  - 2019-04-01 16:59:28.94484200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-04-01 16:59:30.31342300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=1.4448s
INFO  - 2019-04-01 16:59:35.07662800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:output
INFO  - 2019-04-01 16:59:35.09093300 --> [edaf38176c34231db568c604d2c620f2]【請求書発行処理   START)】
INFO  - 2019-04-01 16:59:35.31486500 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0050006', 'S', '2019/04/01', '1', 'メロディアン株式会社', 'メロディアン株式会社', '234900', '2019/04/01', '2275')
INFO  - 2019-04-01 16:59:35.32821100 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50271, '65335')
INFO  - 2019-04-01 16:59:35.33966700 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0050006' WHERE `sales_mng_id` =  '65335'
INFO  - 2019-04-01 16:59:35.56300500 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0050007', 'S', '2019/04/01', '1', 'メロディアン株式会社', 'メロディアン株式会社', '186300', '2019/04/01', '2275')
INFO  - 2019-04-01 16:59:35.57734700 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50272, '65336')
INFO  - 2019-04-01 16:59:35.59130600 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0050007' WHERE `sales_mng_id` =  '65336'
INFO  - 2019-04-01 16:59:36.73180600 --> [edaf38176c34231db568c604d2c620f2]【請求書発行処理   END)】
INFO  - 2019-04-01 16:59:36.80500700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_sales_print  Method:output execution time=1.8256s
INFO  - 2019-04-01 16:59:37.80431800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-04-01 16:59:40.92786600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=3.2003s
INFO  - 2019-04-01 16:59:43.02694700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-04-01 16:59:43.04344300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1253s
INFO  - 2019-04-01 16:59:51.72305100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-04-01 16:59:51.73929100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1326s
INFO  - 2019-04-01 17:27:00.06121300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 17:27:03.65883800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=3.6798s
INFO  - 2019-04-01 17:27:11.80277100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 17:27:12.56272900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=0.8729s
INFO  - 2019-04-01 17:27:16.40748700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-04-01 17:27:16.51701100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.1763s
INFO  - 2019-04-01 17:27:26.28620400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 17:27:26.30023700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1209s
INFO  - 2019-04-01 17:27:26.63752900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 17:27:26.65259100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1262s
INFO  - 2019-04-01 17:27:56.52578100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-04-01 17:27:56.53965000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1196s
INFO  - 2019-04-01 17:27:57.72441300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-04-01 17:27:57.78687700 --> [edaf38176c34231db568c604d2c620f2]【売上登録処理   START】
INFO  - 2019-04-01 17:27:57.80362300 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '636', '株式会社三久食品', '1', '1', '2019/04/01', '2019/04/01', '28', '安井肇', '1', '1', '10', '100000', '8000', '108000', NULL, NULL, NULL, '大阪研究所', '食品', 'コンサルティング', '株式会社三久食品', NULL, NULL, '1', 0)
INFO  - 2019-04-01 17:27:57.81907100 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), NULL, '４月分業務受託料（細菌検査料他）', '1', NULL, NULL, '6', '8000', '100000', '108000', NULL, 65337)
INFO  - 2019-04-01 17:27:57.89553600 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Receivable_mng_mdl->_regist_mng SQL: INSERT INTO `t_receivable_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `target_month`, `customer_id`, `customer_disp_name`, `institute_id`, `institute_name`, `depart_id`, `depart_name`, `sales_money`) VALUES (2, 2, now(), '201904', '636', '株式会社三久食品', '1', '大阪研究所', '1', '食品', '108000')
INFO  - 2019-04-01 17:27:57.90945800 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), 38187, 65337, '2019/04/01', '108000')
INFO  - 2019-04-01 17:27:57.94282000 --> [edaf38176c34231db568c604d2c620f2]【売上登録処理   END】
INFO  - 2019-04-01 17:27:58.01053400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.3856s
INFO  - 2019-04-01 17:27:59.07546800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 17:27:59.86902600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=0.8655s
INFO  - 2019-04-01 17:28:13.88279100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 17:28:14.64474000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=0.8315s
INFO  - 2019-04-01 17:28:19.59162600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-04-01 17:28:19.70092400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.1752s
INFO  - 2019-04-01 17:28:30.25131300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 17:28:30.26680800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1508s
INFO  - 2019-04-01 17:28:51.21497800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-04-01 17:28:51.22898500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1228s
INFO  - 2019-04-01 17:28:52.30080000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-04-01 17:28:52.36585400 --> [edaf38176c34231db568c604d2c620f2]【売上登録処理   START】
INFO  - 2019-04-01 17:28:52.38324500 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '667', '立花エンターテインメント・ワン株式会社', '1', '1', '2019/04/01', '2019/04/01', '34', '吉田晃', '1', '1', '10', '50000', '4000', '54000', NULL, NULL, NULL, '大阪研究所', '食品', 'コンサルティング', '立花エンターテインメント・ワン株式会社', NULL, NULL, '1', 0)
INFO  - 2019-04-01 17:28:52.39967200 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), NULL, '４月分コンサルタント料', '1', NULL, NULL, '6', '4000', '50000', '54000', NULL, 65338)
INFO  - 2019-04-01 17:28:52.47453000 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Receivable_mng_mdl->_regist_mng SQL: INSERT INTO `t_receivable_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `target_month`, `customer_id`, `customer_disp_name`, `institute_id`, `institute_name`, `depart_id`, `depart_name`, `sales_money`) VALUES (2, 2, now(), '201904', '667', '立花エンターテインメント・ワン株式会社', '1', '大阪研究所', '1', '食品', '54000')
INFO  - 2019-04-01 17:28:52.48877600 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), 38188, 65338, '2019/04/01', '54000')
INFO  - 2019-04-01 17:28:52.51218400 --> [edaf38176c34231db568c604d2c620f2]【売上登録処理   END】
INFO  - 2019-04-01 17:28:52.58159000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.3839s
INFO  - 2019-04-01 17:28:53.76249900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 17:28:54.55563700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=0.8622s
INFO  - 2019-04-01 17:29:04.70968000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-04-01 17:29:06.08239100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=1.4462s
INFO  - 2019-04-01 17:29:24.28589400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:output
INFO  - 2019-04-01 17:29:24.30021600 --> [edaf38176c34231db568c604d2c620f2]【請求書発行処理   START)】
INFO  - 2019-04-01 17:29:24.51281900 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0050008', 'S', '2019/04/01', '1', '株式会社三久食品', '株式会社三久食品', '108000', '2019/04/01', '636')
INFO  - 2019-04-01 17:29:24.52633400 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50273, '65337')
INFO  - 2019-04-01 17:29:24.54108500 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0050008' WHERE `sales_mng_id` =  '65337'
INFO  - 2019-04-01 17:29:24.75403400 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0050009', 'S', '2019/04/01', '1', '立花エンターテインメント・ワン株式会社', '立花エンターテインメント・ワン株式会社', '54000', '2019/04/01', '667')
INFO  - 2019-04-01 17:29:24.76827500 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 50274, '65338')
INFO  - 2019-04-01 17:29:24.78309300 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0050009' WHERE `sales_mng_id` =  '65338'
INFO  - 2019-04-01 17:29:25.82080600 --> [edaf38176c34231db568c604d2c620f2]【請求書発行処理   END)】
INFO  - 2019-04-01 17:29:25.88983900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_sales_print  Method:output execution time=1.7006s
INFO  - 2019-04-01 17:29:27.30891400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-04-01 17:29:30.38787300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=3.1505s
INFO  - 2019-04-01 17:29:37.33052900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-04-01 17:29:37.34661500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1308s
INFO  - 2019-04-01 17:29:50.68480000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-04-01 17:29:50.70128700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1297s
INFO  - 2019-04-01 17:56:19.80138300 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 17:56:23.33133900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=3.6117s
INFO  - 2019-04-01 17:56:26.54655200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 17:56:28.47396500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=1.9976s
INFO  - 2019-04-01 17:56:56.54163100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 17:56:58.53256000 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=2.0697s
INFO  - 2019-04-01 18:00:00.63840100 --> [ac6f1348b8ba96847883eaf5bb4685ca]<PROCESS-START> USER-ID:  Controller:receive_batch  Method:index
INFO  - 2019-04-01 18:00:00.65474700 --> [ac6f1348b8ba96847883eaf5bb4685ca]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_mng SQL: INSERT INTO `t_outside_receive_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `process_datetime`, `record_count`, `result`) VALUES (0, 0, now(), '201904011730', 4, 'ok')
INFO  - 2019-04-01 18:00:00.77551900 --> [ac6f1348b8ba96847883eaf5bb4685ca]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`, `sales_mng_id`, `sales_detail_id`) VALUES (0, 0, now(), '10005737', '10005737', 'unsent', '65335', '83838')
INFO  - 2019-04-01 18:00:00.78950900 --> [ac6f1348b8ba96847883eaf5bb4685ca]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1190, '10005737', 'メロディアン株式会社', '10005737', '森彬光', '毛髪', '217500', '3', 'ok', '')
INFO  - 2019-04-01 18:00:00.90448800 --> [ac6f1348b8ba96847883eaf5bb4685ca]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`, `sales_mng_id`, `sales_detail_id`) VALUES (0, 0, now(), '10005738', '10005738', 'unsent', '65336', '83839')
INFO  - 2019-04-01 18:00:00.91938900 --> [ac6f1348b8ba96847883eaf5bb4685ca]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1190, '10005738', 'メロディアン株式会社', '10005738', '森彬光', '毛髪', '172500', '3', 'ok', '')
INFO  - 2019-04-01 18:00:01.03133400 --> [ac6f1348b8ba96847883eaf5bb4685ca]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`) VALUES (0, 0, now(), '10005946', '10005946', 'unsent')
INFO  - 2019-04-01 18:00:01.04574200 --> [ac6f1348b8ba96847883eaf5bb4685ca]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1190, '10005946', '株式会社ライトアップショッピングクラブ', '10005946', '丹羽充代', 'ストール', '3500', '3', 'ok', '')
INFO  - 2019-04-01 18:00:01.15164000 --> [ac6f1348b8ba96847883eaf5bb4685ca]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`) VALUES (0, 0, now(), '10005947', '10005947', 'unsent')
INFO  - 2019-04-01 18:00:01.16481400 --> [ac6f1348b8ba96847883eaf5bb4685ca]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1190, '10005947', '株式会社ライトアップショッピングクラブ', '10005947', '丹羽充代', 'コート', '2520', '3', 'ok', '')
INFO  - 2019-04-01 18:00:01.17965100 --> [ac6f1348b8ba96847883eaf5bb4685ca]【UPDATE】PROCESS: Receive_batch_mdl->update_outside_receive_mng SQL: UPDATE `t_outside_receive_mng` SET `result` = 'ok', `last_user_id` = 0, `last_datetime` = now() WHERE `outside_receive_mng_id` =  1190
INFO  - 2019-04-01 18:00:01.23314000 --> [ac6f1348b8ba96847883eaf5bb4685ca]<PROCESS-END> Controller:receive_batch  Method:index execution time=1.1020s
INFO  - 2019-04-01 18:04:59.73419500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 18:05:01.70490200 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=2.0479s
INFO  - 2019-04-01 18:05:03.71323700 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:edit
INFO  - 2019-04-01 18:05:03.82237100 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:edit execution time=0.1810s
INFO  - 2019-04-01 18:05:12.84769900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:edit
INFO  - 2019-04-01 18:05:13.21993400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:edit execution time=0.4737s
INFO  - 2019-04-01 18:05:14.40568400 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:edit
INFO  - 2019-04-01 18:05:14.70819900 --> [edaf38176c34231db568c604d2c620f2]【売上変更処理   START】
INFO  - 2019-04-01 18:05:14.72983900 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Sales_mdl->update_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `customer_id` = '2217', `customer_disp_name` = '株式会社横浜桂林', `credit_type` = '1', `customer_type` = '1', `bill_date` = '2019/03/31', `book_date` = '2019/03/29', `handler_id` = '46', `handler_name` = '池﨑千晶', `institute_id` = '2', `depart_id` = '1', `abstract_id` = '1', `sum_no_tax` = '75000', `sum_tax` = '6000', `sum_money` = '81000', `sep_month_from` = NULL, `sep_month_to` = NULL, `cutoff_date` = '31', `institute_name` = '東京研究所', `depart_name` = '食品', `abstract_name` = '商品試験', `customer_name` = '株式会社横浜桂林', `cutoff_date_from` = '2019/03/01', `cutoff_date_to` = '2019/03/31', `data_status_type` = '1', `sep_depart_flg` = 0 WHERE `sales_mng_id` =  '65250'
INFO  - 2019-04-01 18:05:14.74244000 --> [edaf38176c34231db568c604d2c620f2]【DELETE(物理削除)】PROCESS: Sales_mdl->update_data SQL: DELETE FROM `t_sales_detail`
WHERE `sales_mng_id` =  '65250'
INFO  - 2019-04-01 18:05:14.77099500 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Sales_mdl->nullupdate_outside_relation SQL: UPDATE `t_outside_relation` SET `sales_mng_id` = NULL, `sales_detail_id` = NULL, `last_user_id` = 2, `last_datetime` = now() WHERE `sales_mng_id` =  '65250'
INFO  - 2019-04-01 18:05:14.78675800 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->update_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '53106116', '桂林　西武池袋店', '1', '式', NULL, '6', '2800', '35000', '37800', NULL, '65250')
INFO  - 2019-04-01 18:05:14.80202100 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Sales_mdl->update_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '53106138', '桂林　東武池袋店', '1', '式', NULL, '6', '3200', '40000', '43200', '報告書No.53106138-01，02', '65250')
INFO  - 2019-04-01 18:05:14.81667000 --> [edaf38176c34231db568c604d2c620f2]【DELETE(物理削除)】PROCESS: Sales_mdl->update_data SQL: DELETE FROM `t_sales_before`
WHERE `sales_mng_id` =  '65250'
INFO  - 2019-04-01 18:05:14.83048400 --> [edaf38176c34231db568c604d2c620f2]【DELETE(物理削除)】PROCESS: Sales_mdl->update_data SQL: DELETE FROM `t_sales_depart`
WHERE `sales_mng_id` =  '65250'
INFO  - 2019-04-01 18:05:14.84674500 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Sales_mdl->update_del_bill_status SQL: UPDATE `t_sales_mng` SET `data_status_type` = '1', `last_user_id` = 2, `last_datetime` = now() WHERE `sales_mng_id` in (64484,64898,64893,64494,65250,64894,64698) 
INFO  - 2019-04-01 18:05:14.86782600 --> [edaf38176c34231db568c604d2c620f2]【DELETE(物理削除)】PROCESS: Sales_mdl->delete_bill_print SQL: DELETE FROM `t_bill_mng`
WHERE `bill_mng_id` =  '50264'
INFO  - 2019-04-01 18:05:15.10324000 --> [edaf38176c34231db568c604d2c620f2]【DELETE(物理削除)】PROCESS: Receivable_mng_mdl->back_sales_data SQL: DELETE FROM `t_receivable_data`
WHERE `sales_mng_id` =  '65250'
INFO  - 2019-04-01 18:05:15.11839200 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Receivable_mng_mdl->back_sales_data SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money - 81000, `last_user_id` = 2, `last_datetime` = now() WHERE `receivable_mng_id` =  '37668'
INFO  - 2019-04-01 18:05:15.14093300 --> [edaf38176c34231db568c604d2c620f2]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_mng SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money + 81000, `last_user_id` = 2, `last_datetime` = now() WHERE `target_month` =  '201903' AND `customer_disp_name` =  '株式会社横浜桂林' AND `institute_id` IS NULL AND `depart_id` IS NULL
INFO  - 2019-04-01 18:05:15.15672800 --> [edaf38176c34231db568c604d2c620f2]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), '37668', '65250', '2019/03/31', '81000')
INFO  - 2019-04-01 18:05:15.19198400 --> [edaf38176c34231db568c604d2c620f2]【売上変更処理   END】
INFO  - 2019-04-01 18:05:15.26126900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_input  Method:edit execution time=0.9568s
INFO  - 2019-04-01 18:05:16.31734600 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-04-01 18:05:18.27609500 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:sales_list  Method:index execution time=2.0316s
INFO  - 2019-04-01 18:05:19.99173900 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:index
INFO  - 2019-04-01 18:05:21.03881800 --> [edaf38176c34231db568c604d2c620f2]<PROCESS-END> Controller:bill_cutoff_print  Method:index execution time=1.1273s
INFO  - 2019-04-01 18:22:02.94992800 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-04-01 18:22:03.04710500 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1870s
INFO  - 2019-04-01 18:22:10.70783100 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-04-01 18:22:10.72932100 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1381s
INFO  - 2019-04-01 18:22:11.54832000 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_info
INFO  - 2019-04-01 18:22:11.56420700 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:ajax  Method:customer_info execution time=0.1180s
INFO  - 2019-04-01 18:22:22.46510000 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_list
INFO  - 2019-04-01 18:22:22.48059300 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:ajax  Method:handler_list execution time=0.1287s
INFO  - 2019-04-01 18:22:23.46200600 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_info
INFO  - 2019-04-01 18:22:23.47788700 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:ajax  Method:handler_info execution time=0.1310s
INFO  - 2019-04-01 18:22:32.84453600 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 18:22:32.89952800 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1553s
INFO  - 2019-04-01 18:22:34.56285600 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 18:22:34.57809900 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1215s
INFO  - 2019-04-01 18:22:34.98130300 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 18:22:34.99605300 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1245s
INFO  - 2019-04-01 18:22:35.62627000 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 18:22:35.64182400 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1212s
INFO  - 2019-04-01 18:22:36.05319000 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 18:22:36.06753400 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1129s
INFO  - 2019-04-01 18:22:38.03152800 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 18:22:38.04783400 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1261s
INFO  - 2019-04-01 18:22:38.41802200 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 18:22:38.43415200 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1294s
INFO  - 2019-04-01 18:22:39.77002400 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 18:22:39.78443000 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1286s
INFO  - 2019-04-01 18:22:42.06659600 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-04-01 18:22:42.08114500 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1262s
INFO  - 2019-04-01 18:22:51.94532500 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 18:22:51.95960200 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1241s
INFO  - 2019-04-01 18:22:52.93534300 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 18:22:52.95051600 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1279s
INFO  - 2019-04-01 18:22:54.64205300 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 18:22:54.65762000 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1349s
INFO  - 2019-04-01 18:22:55.07675000 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 18:22:55.09281000 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1561s
INFO  - 2019-04-01 18:22:57.44819700 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 18:22:57.46409200 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1272s
INFO  - 2019-04-01 18:22:57.92257500 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 18:22:57.93770400 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1168s
INFO  - 2019-04-01 18:22:58.43356800 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 18:22:58.44907900 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1262s
INFO  - 2019-04-01 18:22:59.59013600 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 18:22:59.60554600 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1326s
INFO  - 2019-04-01 18:23:00.48232600 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 18:23:00.49804900 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1270s
INFO  - 2019-04-01 18:23:04.26677000 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 18:23:04.28140100 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1251s
INFO  - 2019-04-01 18:23:05.76577100 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 18:23:05.78154700 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1262s
INFO  - 2019-04-01 18:23:20.06396200 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 18:23:20.07852000 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1214s
INFO  - 2019-04-01 18:23:20.66528600 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 18:23:20.68150300 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1283s
INFO  - 2019-04-01 18:23:22.47933600 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 18:23:22.49512800 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1268s
INFO  - 2019-04-01 18:23:24.82869200 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-04-01 18:23:24.84463900 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1232s
INFO  - 2019-04-01 18:23:29.44729000 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-04-01 18:23:29.69488600 --> [d1570ee8fe87d208e974170299bfe14f]【売上登録処理   START】
INFO  - 2019-04-01 18:23:29.71481800 --> [d1570ee8fe87d208e974170299bfe14f]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '2217', '株式会社横浜桂林', '1', '1', '2019/03/31', '2019/03/12', '55', '川島知剛', '2', '1', '1', '42640', '2800', '45440', NULL, NULL, '31', '東京研究所', '食品', '商品試験', '株式会社横浜桂林', '2019/03/01', '2019/03/31', '1', 0)
INFO  - 2019-04-01 18:23:29.73116100 --> [d1570ee8fe87d208e974170299bfe14f]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '53106055', '桂林　京成水戸店', '1', '式', NULL, '6', '2800', '35000', '37800', NULL, 65339)
INFO  - 2019-04-01 18:23:29.75056700 --> [d1570ee8fe87d208e974170299bfe14f]【UPDATE】PROCESS: Sales_mdl->update_outside_relation SQL: UPDATE `t_outside_relation` SET `sales_mng_id` = 65339, `sales_detail_id` = 83844, `last_user_id` = 2, `last_datetime` = now() WHERE `report_no` =  '53106055'
INFO  - 2019-04-01 18:23:29.76577900 --> [d1570ee8fe87d208e974170299bfe14f]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), NULL, '交通費（上野⇔水戸）', '1', '名', NULL, '2', 0, '7640', '7640', '往復乗車券・特急券', 65339)
INFO  - 2019-04-01 18:23:29.90485600 --> [d1570ee8fe87d208e974170299bfe14f]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_mng SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money + 45440, `last_user_id` = 2, `last_datetime` = now() WHERE `target_month` =  '201903' AND `customer_disp_name` =  '株式会社横浜桂林' AND `institute_id` IS NULL AND `depart_id` IS NULL
INFO  - 2019-04-01 18:23:29.92089600 --> [d1570ee8fe87d208e974170299bfe14f]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), '37668', 65339, '2019/03/31', '45440')
INFO  - 2019-04-01 18:23:29.94955100 --> [d1570ee8fe87d208e974170299bfe14f]【売上登録処理   END】
INFO  - 2019-04-01 18:23:30.01100800 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:sales_input  Method:index execution time=0.6770s
INFO  - 2019-04-01 18:23:30.89327100 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-04-01 18:23:30.96718600 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1599s
INFO  - 2019-04-01 18:23:42.92947800 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-04-01 18:23:42.95106700 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1316s
INFO  - 2019-04-01 18:23:43.84625700 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_info
INFO  - 2019-04-01 18:23:43.86298000 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:ajax  Method:customer_info execution time=0.1235s
INFO  - 2019-04-01 18:24:11.09048900 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_list
INFO  - 2019-04-01 18:24:11.10666100 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:ajax  Method:handler_list execution time=0.1346s
INFO  - 2019-04-01 18:24:11.86887900 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_info
INFO  - 2019-04-01 18:24:11.88516600 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:ajax  Method:handler_info execution time=0.1291s
INFO  - 2019-04-01 18:24:19.08463800 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 18:24:19.10015000 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1216s
INFO  - 2019-04-01 18:24:21.93583100 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 18:24:21.95051200 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1238s
INFO  - 2019-04-01 18:24:24.13287900 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 18:24:24.14774400 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1299s
INFO  - 2019-04-01 18:24:24.84982200 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-04-01 18:24:24.89999800 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1641s
INFO  - 2019-04-01 18:24:25.47320200 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-04-01 18:24:25.48942400 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1305s
INFO  - 2019-04-01 18:24:35.09794400 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-04-01 18:24:35.35011900 --> [d1570ee8fe87d208e974170299bfe14f]【売上登録処理   START】
INFO  - 2019-04-01 18:24:35.37007300 --> [d1570ee8fe87d208e974170299bfe14f]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '2217', '株式会社横浜桂林', '1', '1', '2019/03/31', '2019/03/22', '76', '加藤有紀', '3', '1', '1', '35000', '2800', '37800', NULL, NULL, '31', '名古屋研究所', '食品', '商品試験', '株式会社横浜桂林', '2019/03/01', '2019/03/31', '1', 0)
INFO  - 2019-04-01 18:24:35.38622200 --> [d1570ee8fe87d208e974170299bfe14f]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '60005887', '桂林　名古屋三越店', '1', NULL, '35000', '6', '2800', '35000', '37800', NULL, 65340)
INFO  - 2019-04-01 18:24:35.52877800 --> [d1570ee8fe87d208e974170299bfe14f]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_mng SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money + 37800, `last_user_id` = 2, `last_datetime` = now() WHERE `target_month` =  '201903' AND `customer_disp_name` =  '株式会社横浜桂林' AND `institute_id` IS NULL AND `depart_id` IS NULL
INFO  - 2019-04-01 18:24:35.54305900 --> [d1570ee8fe87d208e974170299bfe14f]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), '37668', 65340, '2019/03/31', '37800')
INFO  - 2019-04-01 18:24:35.56542500 --> [d1570ee8fe87d208e974170299bfe14f]【売上登録処理   END】
INFO  - 2019-04-01 18:24:35.63088400 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:sales_input  Method:index execution time=0.6286s
INFO  - 2019-04-01 18:24:36.46586700 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-04-01 18:24:36.54329500 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1554s
INFO  - 2019-04-01 18:26:03.89924500 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-04-01 18:26:05.38690900 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=1.5618s
INFO  - 2019-04-01 18:26:07.64558300 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:index
INFO  - 2019-04-01 18:26:08.75436600 --> [d1570ee8fe87d208e974170299bfe14f]<PROCESS-END> Controller:bill_cutoff_print  Method:index execution time=1.1817s
