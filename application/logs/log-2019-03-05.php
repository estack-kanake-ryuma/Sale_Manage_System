<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

INFO  - 2019-03-05 09:33:45.82771200 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-03-05 09:33:45.83684600 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:login  Method:index execution time=0.5451s
INFO  - 2019-03-05 09:33:47.46705900 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-03-05 09:33:47.65805200 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:top  Method:index
INFO  - 2019-03-05 09:33:53.22370000 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:top  Method:index execution time=5.6515s
INFO  - 2019-03-05 09:33:53.99934700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:daily_cnt_info
INFO  - 2019-03-05 09:33:54.36987700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:daily_cnt_info execution time=0.4907s
INFO  - 2019-03-05 09:46:13.48046500 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-05 09:46:13.59923800 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:sales_input  Method:index execution time=0.2435s
INFO  - 2019-03-05 09:46:16.19917300 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:index
INFO  - 2019-03-05 09:46:17.70235600 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:bill_cutoff_print  Method:index execution time=1.6141s
INFO  - 2019-03-05 09:46:28.10957900 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:index
INFO  - 2019-03-05 09:46:28.91355600 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:bill_cutoff_print  Method:index execution time=0.8701s
INFO  - 2019-03-05 09:46:36.39931800 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:output
INFO  - 2019-03-05 09:46:36.40569100 --> [6557a8b1567558541f457d211d0df698]【請求書発行処理(締日)   START)】
INFO  - 2019-03-05 09:46:36.87608100 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Bill_cutoff_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `publish_date`, `bill_type`, `bill_money`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0049298', '2019/03/05', 'C', '63990', '1', 'イサン株式会社', 'イサン株式会社', '2019/02/28', '598')
INFO  - 2019-03-05 09:46:36.88304500 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Bill_cutoff_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 49541, '64546')
INFO  - 2019-03-05 09:46:36.88844700 --> [6557a8b1567558541f457d211d0df698]【UPDATE】PROCESS: Bill_cutoff_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049298' WHERE `sales_mng_id` = 64546
INFO  - 2019-03-05 09:46:36.89390700 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Bill_cutoff_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 49541, '64342')
INFO  - 2019-03-05 09:46:36.89972000 --> [6557a8b1567558541f457d211d0df698]【UPDATE】PROCESS: Bill_cutoff_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049298' WHERE `sales_mng_id` = 64342
INFO  - 2019-03-05 09:46:36.90596400 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Bill_cutoff_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 49541, '64411')
INFO  - 2019-03-05 09:46:36.91224700 --> [6557a8b1567558541f457d211d0df698]【UPDATE】PROCESS: Bill_cutoff_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049298' WHERE `sales_mng_id` = 64411
INFO  - 2019-03-05 09:46:36.92044900 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Bill_cutoff_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 49541, '63868')
INFO  - 2019-03-05 09:46:36.92879700 --> [6557a8b1567558541f457d211d0df698]【UPDATE】PROCESS: Bill_cutoff_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049298' WHERE `sales_mng_id` = 63868
INFO  - 2019-03-05 09:46:37.12880600 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Bill_cutoff_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `publish_date`, `bill_type`, `bill_money`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0049299', '2019/03/05', 'C', '17604', '1', '公益財団法人　日田玖珠地域産業振興センター', '公益財団法人　　　　　　　　　　　　　日田玖珠地域産業振興センター', '2019/02/28', '1934')
INFO  - 2019-03-05 09:46:37.13662500 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Bill_cutoff_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 49542, '64520')
INFO  - 2019-03-05 09:46:37.14488800 --> [6557a8b1567558541f457d211d0df698]【UPDATE】PROCESS: Bill_cutoff_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049299' WHERE `sales_mng_id` = 64520
INFO  - 2019-03-05 09:46:37.15298600 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Bill_cutoff_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 49542, '63762')
INFO  - 2019-03-05 09:46:37.16130500 --> [6557a8b1567558541f457d211d0df698]【UPDATE】PROCESS: Bill_cutoff_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049299' WHERE `sales_mng_id` = 63762
INFO  - 2019-03-05 09:46:38.54900800 --> [6557a8b1567558541f457d211d0df698]【請求書発行処理(締日)   END)】
INFO  - 2019-03-05 09:46:38.61811700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:bill_cutoff_print  Method:output execution time=2.3341s
INFO  - 2019-03-05 09:46:39.84758800 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:index
INFO  - 2019-03-05 09:46:40.74391500 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:bill_cutoff_print  Method:index execution time=0.9742s
INFO  - 2019-03-05 09:46:47.53216000 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:bill_disp
INFO  - 2019-03-05 09:46:47.54870400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:bill_cutoff_print  Method:bill_disp execution time=0.1362s
INFO  - 2019-03-05 09:47:03.00114300 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:bill_disp
INFO  - 2019-03-05 09:47:03.01100600 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:bill_cutoff_print  Method:bill_disp execution time=0.1386s
INFO  - 2019-03-05 09:49:24.01682900 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-03-05 09:49:24.02722300 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:login  Method:index execution time=0.1247s
INFO  - 2019-03-05 09:49:26.36753200 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-03-05 09:49:26.65801300 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:top  Method:index
INFO  - 2019-03-05 09:49:31.74595300 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:top  Method:index execution time=5.1443s
INFO  - 2019-03-05 09:49:32.37718200 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:daily_cnt_info
INFO  - 2019-03-05 09:49:32.76832800 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:daily_cnt_info execution time=0.5034s
INFO  - 2019-03-05 09:49:36.22287000 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:sales_input  Method:index
INFO  - 2019-03-05 09:49:36.29616800 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1641s
INFO  - 2019-03-05 09:49:37.63461700 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:credit_input  Method:index
INFO  - 2019-03-05 09:49:37.99000500 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:credit_input  Method:index execution time=0.4420s
INFO  - 2019-03-05 09:49:39.39412400 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:master_file_print  Method:index
INFO  - 2019-03-05 09:49:39.46539900 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:master_file_print  Method:index execution time=0.1537s
INFO  - 2019-03-05 09:49:40.93433300 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:customer_list  Method:index
INFO  - 2019-03-05 09:49:41.06082300 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:customer_list  Method:index execution time=0.1954s
INFO  - 2019-03-05 10:01:43.84638700 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:sales_spec_print  Method:index
INFO  - 2019-03-05 10:01:43.93183400 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:sales_spec_print  Method:index execution time=0.2181s
INFO  - 2019-03-05 10:02:13.57100500 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:sales_spec_print  Method:index
ERROR - 2019-03-05 10:02:15.37887700 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"bdd5cd94bdb5cb3d8a9e1820e9be53cc";s:10:"ip_address";s:14:"172.68.101.156";s:10:"user_agent";s:101:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36";s:13:"last_activity";i:1551746963;}60190da7c789bbd3077e742e4343e210||0||/||||]
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

ERROR - 2019-03-05 10:02:15.41011100 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"bdd5cd94bdb5cb3d8a9e1820e9be53cc";s:10:"ip_address";s:14:"172.68.101.156";s:10:"user_agent";s:101:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36";s:13:"last_activity";i:1551746963;}60190da7c789bbd3077e742e4343e210||0||/||||]
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

ERROR - 2019-03-05 10:02:15.43799900 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"bdd5cd94bdb5cb3d8a9e1820e9be53cc";s:10:"ip_address";s:14:"172.68.101.156";s:10:"user_agent";s:101:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36";s:13:"last_activity";i:1551746963;}60190da7c789bbd3077e742e4343e210||0||/||||]
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

INFO  - 2019-03-05 10:02:15.44841100 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:sales_spec_print  Method:index execution time=1.9021s
INFO  - 2019-03-05 10:02:35.26887000 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:sales_spec_print  Method:index
ERROR - 2019-03-05 10:02:36.56571200 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"bdd5cd94bdb5cb3d8a9e1820e9be53cc";s:10:"ip_address";s:14:"172.68.101.156";s:10:"user_agent";s:101:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36";s:13:"last_activity";i:1551746963;}60190da7c789bbd3077e742e4343e210||0||/||||]
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

ERROR - 2019-03-05 10:02:36.58973700 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"bdd5cd94bdb5cb3d8a9e1820e9be53cc";s:10:"ip_address";s:14:"172.68.101.156";s:10:"user_agent";s:101:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36";s:13:"last_activity";i:1551746963;}60190da7c789bbd3077e742e4343e210||0||/||||]
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

ERROR - 2019-03-05 10:02:36.62159000 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"bdd5cd94bdb5cb3d8a9e1820e9be53cc";s:10:"ip_address";s:14:"172.68.101.156";s:10:"user_agent";s:101:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36";s:13:"last_activity";i:1551746963;}60190da7c789bbd3077e742e4343e210||0||/||||]
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

INFO  - 2019-03-05 10:02:36.63355600 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:sales_spec_print  Method:index execution time=1.4153s
INFO  - 2019-03-05 10:02:58.47284300 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:sales_spec_print  Method:index
ERROR - 2019-03-05 10:02:59.87120600 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"bdd5cd94bdb5cb3d8a9e1820e9be53cc";s:10:"ip_address";s:14:"172.68.101.156";s:10:"user_agent";s:101:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36";s:13:"last_activity";i:1551746963;}60190da7c789bbd3077e742e4343e210||0||/||||]
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

ERROR - 2019-03-05 10:02:59.90169400 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"bdd5cd94bdb5cb3d8a9e1820e9be53cc";s:10:"ip_address";s:14:"172.68.101.156";s:10:"user_agent";s:101:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36";s:13:"last_activity";i:1551746963;}60190da7c789bbd3077e742e4343e210||0||/||||]
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

ERROR - 2019-03-05 10:02:59.93746300 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"bdd5cd94bdb5cb3d8a9e1820e9be53cc";s:10:"ip_address";s:14:"172.68.101.156";s:10:"user_agent";s:101:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36";s:13:"last_activity";i:1551746963;}60190da7c789bbd3077e742e4343e210||0||/||||]
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

INFO  - 2019-03-05 10:02:59.95039200 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:sales_spec_print  Method:index execution time=1.5062s
INFO  - 2019-03-05 10:04:19.88462000 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:customer_list  Method:index
INFO  - 2019-03-05 10:04:20.01597600 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:customer_list  Method:index execution time=0.1963s
INFO  - 2019-03-05 10:04:27.07347500 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:customer_list  Method:index
INFO  - 2019-03-05 10:04:27.18788500 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:customer_list  Method:index execution time=0.1898s
INFO  - 2019-03-05 10:04:35.84532300 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:customer_input  Method:edit
INFO  - 2019-03-05 10:04:35.94780900 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:customer_input  Method:edit execution time=0.1863s
INFO  - 2019-03-05 10:11:19.97718300 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:customer_list  Method:index
INFO  - 2019-03-05 10:11:20.09554600 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:customer_list  Method:index execution time=0.2009s
INFO  - 2019-03-05 10:12:00.13597300 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-05 10:12:00.22539900 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1633s
INFO  - 2019-03-05 10:12:01.70281100 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-05 10:12:03.12000500 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=1.4962s
INFO  - 2019-03-05 10:12:10.59445400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-05 10:12:13.16396100 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=2.6374s
INFO  - 2019-03-05 10:12:15.82926500 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-03-05 10:12:15.87929000 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1654s
INFO  - 2019-03-05 10:13:46.49255000 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-05 10:13:46.58551900 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1591s
INFO  - 2019-03-05 10:13:51.66977300 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-03-05 10:13:51.68826400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1289s
INFO  - 2019-03-05 10:13:54.44911400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_info
INFO  - 2019-03-05 10:13:54.47079700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:customer_info execution time=0.1403s
INFO  - 2019-03-05 10:14:02.05234100 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_list
INFO  - 2019-03-05 10:14:02.06635100 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:handler_list execution time=0.1263s
INFO  - 2019-03-05 10:14:02.85839200 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_info
INFO  - 2019-03-05 10:14:02.87323900 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:handler_info execution time=0.1302s
INFO  - 2019-03-05 10:14:12.31094600 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 10:14:12.32530100 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1177s
INFO  - 2019-03-05 10:14:14.93898800 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-03-05 10:14:14.95226000 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1275s
INFO  - 2019-03-05 10:14:25.34682300 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 10:14:25.36061700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1512s
INFO  - 2019-03-05 10:14:27.05950900 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 10:14:27.07351800 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1230s
INFO  - 2019-03-05 10:14:27.92498500 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 10:14:27.93879300 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1213s
INFO  - 2019-03-05 10:14:28.23575200 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 10:14:28.24993800 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1174s
INFO  - 2019-03-05 10:14:29.49172800 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 10:14:29.50523100 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1216s
INFO  - 2019-03-05 10:14:29.99419200 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 10:14:30.00757700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1220s
INFO  - 2019-03-05 10:14:30.63244300 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 10:14:30.64658300 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1460s
INFO  - 2019-03-05 10:14:31.34558200 --> [eb539d0872289a298815a3c8027296dd]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-03-05 10:14:31.35874800 --> [eb539d0872289a298815a3c8027296dd]<PROCESS-END> Controller:login  Method:index execution time=0.1591s
INFO  - 2019-03-05 10:14:32.19513100 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 10:14:32.20757100 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1429s
INFO  - 2019-03-05 10:14:32.92759700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 10:14:32.94186100 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1231s
INFO  - 2019-03-05 10:14:38.27673400 --> [eb539d0872289a298815a3c8027296dd]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-03-05 10:14:38.44618100 --> [eb539d0872289a298815a3c8027296dd]<PROCESS-START> USER-ID: 7 Controller:top  Method:index
INFO  - 2019-03-05 10:14:43.25486900 --> [eb539d0872289a298815a3c8027296dd]<PROCESS-END> Controller:top  Method:index execution time=4.8594s
INFO  - 2019-03-05 10:14:43.84265800 --> [eb539d0872289a298815a3c8027296dd]<PROCESS-START> USER-ID: 7 Controller:ajax  Method:daily_cnt_info
INFO  - 2019-03-05 10:14:44.23260200 --> [eb539d0872289a298815a3c8027296dd]<PROCESS-END> Controller:ajax  Method:daily_cnt_info execution time=0.5042s
INFO  - 2019-03-05 10:15:37.06983700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-05 10:15:37.18634300 --> [6557a8b1567558541f457d211d0df698]【売上登録処理   START】
INFO  - 2019-03-05 10:15:37.20353900 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '1847', '株式会社市原京急カントリークラブ', '1', '1', '2019/03/08', '2019/03/08', '43', '佐々木卓也', '2', '1', '1', '30000', '2400', '32400', NULL, NULL, NULL, '東京研究所', '食品', '商品試験', '株式会社市原京急カントリークラブ', NULL, NULL, '1', 0)
INFO  - 2019-03-05 10:15:37.21743300 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '53106039', '衛生立入検査', NULL, '一式', NULL, '6', '2400', '30000', '32400', '（レストラン厨房、アウト／イン売店）', 64554)
INFO  - 2019-03-05 10:15:37.33910600 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Receivable_mng_mdl->_regist_mng SQL: INSERT INTO `t_receivable_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `target_month`, `customer_id`, `customer_disp_name`, `institute_id`, `institute_name`, `depart_id`, `depart_name`, `sales_money`) VALUES (2, 2, now(), '201903', '1847', '株式会社市原京急カントリークラブ', '2', '東京研究所', '1', '食品', '32400')
INFO  - 2019-03-05 10:15:37.35246500 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), 37707, 64554, '2019/03/08', '32400')
INFO  - 2019-03-05 10:15:37.39404600 --> [6557a8b1567558541f457d211d0df698]【売上登録処理   END】
INFO  - 2019-03-05 10:15:37.46829100 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:sales_input  Method:index execution time=0.4908s
INFO  - 2019-03-05 10:15:38.48249500 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-05 10:15:38.56415900 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1440s
INFO  - 2019-03-05 10:15:41.37382900 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-05 10:15:42.78683200 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=1.5099s
INFO  - 2019-03-05 10:27:00.36091400 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:sales_sum_print  Method:index
INFO  - 2019-03-05 10:27:00.44257800 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:sales_sum_print  Method:index execution time=0.1562s
INFO  - 2019-03-05 10:27:26.33929200 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:sales_sum_print  Method:index
ERROR - 2019-03-05 10:27:27.21787900 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"bdd5cd94bdb5cb3d8a9e1820e9be53cc";s:10:"ip_address";s:14:"172.68.101.156";s:10:"user_agent";s:101:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36";s:13:"last_activity";i:1551746963;}60190da7c789bbd3077e742e4343e210||0||/||||]
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

ERROR - 2019-03-05 10:27:27.24539400 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"bdd5cd94bdb5cb3d8a9e1820e9be53cc";s:10:"ip_address";s:14:"172.68.101.156";s:10:"user_agent";s:101:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36";s:13:"last_activity";i:1551746963;}60190da7c789bbd3077e742e4343e210||0||/||||]
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

ERROR - 2019-03-05 10:27:27.27732500 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"bdd5cd94bdb5cb3d8a9e1820e9be53cc";s:10:"ip_address";s:14:"172.68.101.156";s:10:"user_agent";s:101:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36";s:13:"last_activity";i:1551746963;}60190da7c789bbd3077e742e4343e210||0||/||||]
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

INFO  - 2019-03-05 10:27:27.29250300 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:sales_sum_print  Method:index execution time=0.9724s
INFO  - 2019-03-05 10:28:32.19040300 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:output
INFO  - 2019-03-05 10:28:32.20535300 --> [6557a8b1567558541f457d211d0df698]【請求書発行処理   START)】
INFO  - 2019-03-05 10:28:32.41414300 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0049300', 'S', '2019/03/05', '1', '株式会社市原京急カントリークラブ', '株式会社市原京急カントリークラブ', '32400', '2019/03/08', '1847')
INFO  - 2019-03-05 10:28:32.42741700 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 49543, '64554')
INFO  - 2019-03-05 10:28:32.44221800 --> [6557a8b1567558541f457d211d0df698]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049300' WHERE `sales_mng_id` =  '64554'
INFO  - 2019-03-05 10:28:32.98709600 --> [6557a8b1567558541f457d211d0df698]【請求書発行処理   END)】
INFO  - 2019-03-05 10:28:33.06027200 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:bill_sales_print  Method:output execution time=0.9771s
INFO  - 2019-03-05 10:28:34.78518900 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-05 10:28:38.07152100 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=3.3553s
INFO  - 2019-03-05 10:28:44.60526100 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-03-05 10:28:44.62158500 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1361s
INFO  - 2019-03-05 10:53:21.40234800 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-05 10:53:21.50303800 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1770s
INFO  - 2019-03-05 10:53:28.24972100 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-03-05 10:53:28.27128900 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1419s
INFO  - 2019-03-05 10:53:29.17356300 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-03-05 10:53:29.19393400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1265s
INFO  - 2019-03-05 10:53:31.94604100 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_info
INFO  - 2019-03-05 10:53:31.96359800 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:customer_info execution time=0.1391s
INFO  - 2019-03-05 10:53:50.03103400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_list
INFO  - 2019-03-05 10:53:50.04662800 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:handler_list execution time=0.1330s
INFO  - 2019-03-05 10:53:52.61456300 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_info
INFO  - 2019-03-05 10:53:52.63163200 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:handler_info execution time=0.1289s
INFO  - 2019-03-05 10:54:22.30358600 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 10:54:22.31931100 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1258s
INFO  - 2019-03-05 10:54:23.67347000 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 10:54:23.68882900 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1253s
INFO  - 2019-03-05 10:54:24.81486000 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 10:54:24.83024700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1487s
INFO  - 2019-03-05 10:54:25.74344600 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 10:54:25.75840100 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1268s
INFO  - 2019-03-05 10:54:29.89385400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 10:54:29.90749600 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1206s
INFO  - 2019-03-05 10:54:31.64857600 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 10:54:31.66438600 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1504s
INFO  - 2019-03-05 10:54:33.15156600 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-03-05 10:54:33.16537100 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1253s
INFO  - 2019-03-05 10:54:44.54612700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 10:54:44.56090400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1192s
INFO  - 2019-03-05 10:54:45.61937500 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 10:54:45.63294400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1192s
INFO  - 2019-03-05 10:54:47.07114700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 10:54:47.08705900 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1272s
INFO  - 2019-03-05 10:54:47.75195600 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 10:54:47.76683200 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1210s
INFO  - 2019-03-05 10:54:49.66317000 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 10:54:49.67724200 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1292s
INFO  - 2019-03-05 10:54:51.63595800 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 10:54:51.65217500 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1550s
INFO  - 2019-03-05 10:54:52.45303300 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 10:54:52.46683900 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1207s
INFO  - 2019-03-05 10:54:52.76752700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 10:54:52.78323400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1200s
INFO  - 2019-03-05 10:54:53.13949200 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 10:54:53.15466000 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1274s
INFO  - 2019-03-05 10:54:55.02098300 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 10:54:55.03739400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1370s
INFO  - 2019-03-05 10:54:56.52856300 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 10:54:56.54481400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1464s
INFO  - 2019-03-05 10:55:00.95723200 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 10:55:00.97127000 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1226s
INFO  - 2019-03-05 10:55:01.50322900 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 10:55:01.51740500 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1207s
INFO  - 2019-03-05 10:55:04.48708400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 10:55:04.50354300 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1566s
INFO  - 2019-03-05 10:55:06.62765100 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 10:55:06.64409200 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1301s
INFO  - 2019-03-05 10:55:10.07668600 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 10:55:10.09275400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1286s
INFO  - 2019-03-05 10:55:11.25364700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 10:55:11.26972900 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1384s
INFO  - 2019-03-05 10:55:15.94133300 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 10:55:15.95586600 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1223s
INFO  - 2019-03-05 10:55:20.98915500 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 10:55:21.00390700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1221s
INFO  - 2019-03-05 10:57:25.23817300 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-05 10:57:25.27708600 --> [6557a8b1567558541f457d211d0df698]【売上登録処理   START】
INFO  - 2019-03-05 10:57:25.29751100 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_id`, `institute_name`, `depart_id`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '2165', '関西エアポート株式会社', '1', '1', '2019/03/05', '2019/03/05', '64', '川村泰弘', '12', '100000', '8000', '108000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '教育セミナー', '関西エアポート株式会社', NULL, NULL, '1', 1)
INFO  - 2019-03-05 10:57:25.33517500 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), NULL, '2019年3月4日実施セミナー', NULL, NULL, NULL, '6', '8000', '100000', '108000', '景表法・薬機法セミナー（物販テナント様）および 食品品質管理セミナー（飲食テナント様）', 64555)
INFO  - 2019-03-05 10:57:25.35127900 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_depart` (`ins_user_id`, `last_user_id`, `last_datetime`, `institute_id`, `institute_name`, `depart_id`, `depart_name`, `tax_type`, `no_tax_money`, `tax`, `in_tax_money`, `sales_mng_id`) VALUES (2, 2, now(), '1', '大阪研究所', '3', '雑貨', '6', '50000', '4000', '54000', 64555)
INFO  - 2019-03-05 10:57:25.36675400 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_depart` (`ins_user_id`, `last_user_id`, `last_datetime`, `institute_id`, `institute_name`, `depart_id`, `depart_name`, `tax_type`, `no_tax_money`, `tax`, `in_tax_money`, `sales_mng_id`) VALUES (2, 2, now(), '1', '大阪研究所', '1', '食品', '6', '50000', '4000', '54000', 64555)
INFO  - 2019-03-05 10:57:25.43942800 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Receivable_mng_mdl->_regist_mng SQL: INSERT INTO `t_receivable_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `target_month`, `customer_id`, `customer_disp_name`, `institute_id`, `institute_name`, `depart_id`, `depart_name`, `sales_money`) VALUES (2, 2, now(), '201903', '2165', '関西エアポート株式会社', NULL, NULL, NULL, NULL, '108000')
INFO  - 2019-03-05 10:57:25.45283600 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), 37708, 64555, '2019/03/05', '108000')
INFO  - 2019-03-05 10:57:25.48371400 --> [6557a8b1567558541f457d211d0df698]【売上登録処理   END】
INFO  - 2019-03-05 10:57:25.56114100 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:sales_input  Method:index execution time=0.4149s
INFO  - 2019-03-05 10:57:26.73872400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-05 10:57:26.82028200 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1422s
INFO  - 2019-03-05 10:57:29.73027500 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-05 10:57:31.10065200 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=1.4418s
INFO  - 2019-03-05 10:57:37.37626700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:output
INFO  - 2019-03-05 10:57:37.39051500 --> [6557a8b1567558541f457d211d0df698]【請求書発行処理   START)】
INFO  - 2019-03-05 10:57:37.61164900 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0049301', 'S', '2019/03/05', '1', '関西エアポート株式会社', '関西エアポート株式会社', '108000', '2019/03/05', '2165')
INFO  - 2019-03-05 10:57:37.62677200 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 49544, '64555')
INFO  - 2019-03-05 10:57:37.63878400 --> [6557a8b1567558541f457d211d0df698]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049301' WHERE `sales_mng_id` =  '64555'
INFO  - 2019-03-05 10:57:38.20971600 --> [6557a8b1567558541f457d211d0df698]【請求書発行処理   END)】
INFO  - 2019-03-05 10:57:38.28684400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:bill_sales_print  Method:output execution time=1.0071s
INFO  - 2019-03-05 10:57:39.69135400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-05 10:57:42.82265700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=3.1988s
INFO  - 2019-03-05 10:57:45.24960600 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-03-05 10:57:45.26765500 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1376s
INFO  - 2019-03-05 10:58:28.36842000 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-05 10:58:28.45477500 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1546s
INFO  - 2019-03-05 10:58:37.18335400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-03-05 10:58:37.20344000 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1294s
INFO  - 2019-03-05 10:58:37.49486600 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-03-05 10:58:37.51718100 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1301s
INFO  - 2019-03-05 10:58:38.15240500 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-03-05 10:58:38.17488600 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1357s
INFO  - 2019-03-05 10:58:39.13743300 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_info
INFO  - 2019-03-05 10:58:39.15389200 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:customer_info execution time=0.1328s
INFO  - 2019-03-05 10:58:54.08747300 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_list
INFO  - 2019-03-05 10:58:54.10396100 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:handler_list execution time=0.1310s
INFO  - 2019-03-05 10:58:55.12548300 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_info
INFO  - 2019-03-05 10:58:55.14238300 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:handler_info execution time=0.1274s
INFO  - 2019-03-05 10:59:08.76977000 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 10:59:08.78418500 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1184s
INFO  - 2019-03-05 10:59:10.39611700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 10:59:10.41330900 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1254s
INFO  - 2019-03-05 10:59:14.03302000 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 10:59:14.04997900 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1259s
INFO  - 2019-03-05 10:59:14.46317700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 10:59:14.47820700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1221s
INFO  - 2019-03-05 10:59:16.57770800 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 10:59:16.59463100 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1234s
INFO  - 2019-03-05 10:59:23.39211300 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-03-05 10:59:23.40764300 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1260s
INFO  - 2019-03-05 10:59:33.37063400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-05 10:59:33.48372000 --> [6557a8b1567558541f457d211d0df698]【売上登録処理   START】
INFO  - 2019-03-05 10:59:33.50048000 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '2295', '株式会社ICOMM', '1', '1', '2019/03/04', '2019/03/04', '59', '横田研太郎', '1', '3', '1', '4200', '336', '4536', NULL, NULL, NULL, '大阪研究所', '雑貨', '商品試験', '株式会社ICOMM', NULL, NULL, '1', 0)
INFO  - 2019-03-05 10:59:33.51618400 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '30002161', 'コットンバッグ　染色堅牢度（摩擦）', '1', NULL, NULL, '6', '336', '4200', '4536', NULL, 64556)
INFO  - 2019-03-05 10:59:33.59742100 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Receivable_mng_mdl->_regist_mng SQL: INSERT INTO `t_receivable_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `target_month`, `customer_id`, `customer_disp_name`, `institute_id`, `institute_name`, `depart_id`, `depart_name`, `sales_money`) VALUES (2, 2, now(), '201903', '2295', '株式会社ICOMM', '1', '大阪研究所', '3', '雑貨', '4536')
INFO  - 2019-03-05 10:59:33.61363300 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), 37709, 64556, '2019/03/04', '4536')
INFO  - 2019-03-05 10:59:33.64287600 --> [6557a8b1567558541f457d211d0df698]【売上登録処理   END】
INFO  - 2019-03-05 10:59:33.71343400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:sales_input  Method:index execution time=0.4393s
INFO  - 2019-03-05 10:59:34.52816000 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-05 10:59:34.60607800 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1415s
INFO  - 2019-03-05 10:59:42.10652600 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-05 10:59:43.63032700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=1.4422s
INFO  - 2019-03-05 11:00:08.51203300 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:output
INFO  - 2019-03-05 11:00:08.52810500 --> [6557a8b1567558541f457d211d0df698]【請求書発行処理   START)】
INFO  - 2019-03-05 11:00:08.74500600 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0049302', 'S', '2019/03/05', '1', '株式会社ICOMM', '株式会社ICOMM', '4536', '2019/03/04', '2295')
INFO  - 2019-03-05 11:00:08.76259700 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 49545, '64556')
INFO  - 2019-03-05 11:00:08.77771900 --> [6557a8b1567558541f457d211d0df698]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049302' WHERE `sales_mng_id` =  '64556'
INFO  - 2019-03-05 11:00:09.35301100 --> [6557a8b1567558541f457d211d0df698]【請求書発行処理   END)】
INFO  - 2019-03-05 11:00:09.42245000 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:bill_sales_print  Method:output execution time=1.0019s
INFO  - 2019-03-05 11:00:14.52063500 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-05 11:00:17.64009200 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=3.1850s
INFO  - 2019-03-05 11:00:24.79015700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-03-05 11:00:24.80778000 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1286s
INFO  - 2019-03-05 11:03:25.59291000 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_tran_list
INFO  - 2019-03-05 11:03:25.83135800 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:customer_tran_list execution time=0.3479s
INFO  - 2019-03-05 11:03:29.29603700 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_tran_list
INFO  - 2019-03-05 11:03:29.53890800 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:customer_tran_list execution time=0.3542s
INFO  - 2019-03-05 11:03:29.75584600 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_tran_list
INFO  - 2019-03-05 11:03:29.99224800 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:customer_tran_list execution time=0.3575s
INFO  - 2019-03-05 11:03:32.36147800 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:master_file_print  Method:index
INFO  - 2019-03-05 11:03:35.28928900 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:master_file_print  Method:index execution time=2.9865s
INFO  - 2019-03-05 11:06:42.59568500 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_tran_list
INFO  - 2019-03-05 11:06:42.86179500 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:customer_tran_list execution time=0.3820s
INFO  - 2019-03-05 11:06:44.17017300 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_tran_list
INFO  - 2019-03-05 11:06:44.41830900 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:customer_tran_list execution time=0.3704s
INFO  - 2019-03-05 11:06:47.77204000 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:master_file_print  Method:index
INFO  - 2019-03-05 11:06:50.32916800 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:master_file_print  Method:index execution time=2.6127s
INFO  - 2019-03-05 11:07:05.76217300 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:customer_list  Method:index
INFO  - 2019-03-05 11:07:05.89001000 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:customer_list  Method:index execution time=0.1829s
INFO  - 2019-03-05 11:07:43.35621300 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:master_file_print  Method:index
INFO  - 2019-03-05 11:07:45.96522600 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:master_file_print  Method:index execution time=2.6795s
INFO  - 2019-03-05 11:18:35.77949800 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:customer_list  Method:index
INFO  - 2019-03-05 11:18:35.91616200 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:customer_list  Method:index execution time=0.2060s
INFO  - 2019-03-05 11:18:40.16453100 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:customer_list  Method:index
INFO  - 2019-03-05 11:18:40.28270600 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:customer_list  Method:index execution time=0.1829s
INFO  - 2019-03-05 11:18:52.90310600 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:customer_input  Method:edit
INFO  - 2019-03-05 11:18:53.00182200 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:customer_input  Method:edit execution time=0.1696s
INFO  - 2019-03-05 11:18:57.53193200 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:customer_list  Method:index
INFO  - 2019-03-05 11:18:57.65061500 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:customer_list  Method:index execution time=0.2028s
INFO  - 2019-03-05 11:21:52.82686600 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-05 11:21:52.92723300 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1690s
INFO  - 2019-03-05 11:21:54.72913700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-05 11:21:58.35020700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:sales_list  Method:index execution time=3.6950s
INFO  - 2019-03-05 11:22:01.85677900 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-05 11:22:02.73095300 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:sales_list  Method:index execution time=0.9555s
INFO  - 2019-03-05 11:22:25.33353100 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-05 11:22:26.06041000 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:sales_list  Method:index execution time=0.7966s
INFO  - 2019-03-05 11:22:34.42136700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-03-05 11:22:34.54066300 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.1862s
INFO  - 2019-03-05 11:22:37.77412300 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-05 11:22:38.49222000 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:sales_list  Method:index execution time=0.7878s
INFO  - 2019-03-05 12:45:04.74974000 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:sales_list  Method:index
INFO  - 2019-03-05 12:45:08.17188600 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:sales_list  Method:index execution time=3.5163s
INFO  - 2019-03-05 12:45:15.19186700 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:sales_list  Method:index
INFO  - 2019-03-05 12:45:16.20992400 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:sales_list  Method:index execution time=1.0955s
INFO  - 2019-03-05 12:45:22.85353300 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:sales_input  Method:copy
INFO  - 2019-03-05 12:45:22.97430700 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.1869s
INFO  - 2019-03-05 12:46:15.40117200 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 12:46:15.41875400 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1254s
INFO  - 2019-03-05 12:46:15.86518200 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 12:46:15.88250500 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1271s
INFO  - 2019-03-05 12:46:16.94099900 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 12:46:16.95643100 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1209s
INFO  - 2019-03-05 12:46:17.58252400 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 12:46:17.60037400 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1328s
INFO  - 2019-03-05 12:46:18.19201000 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 12:46:18.20757000 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1190s
INFO  - 2019-03-05 12:46:18.91626800 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 12:46:18.93370900 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1311s
INFO  - 2019-03-05 12:46:20.77748100 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 12:46:20.79521700 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1295s
INFO  - 2019-03-05 12:46:21.09590800 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 12:46:21.11305100 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1243s
INFO  - 2019-03-05 12:46:21.41503600 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 12:46:21.43170300 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1220s
INFO  - 2019-03-05 12:46:21.74929400 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 12:46:21.76685100 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1261s
INFO  - 2019-03-05 12:46:22.09613900 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 12:46:22.11318100 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1234s
INFO  - 2019-03-05 12:46:26.90656200 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 12:46:26.92353800 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1385s
INFO  - 2019-03-05 12:46:31.19550900 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 12:46:31.21236000 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1241s
INFO  - 2019-03-05 12:46:31.85623100 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 12:46:31.87341300 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1331s
INFO  - 2019-03-05 12:46:34.07821300 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 12:46:34.09407400 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1246s
INFO  - 2019-03-05 12:46:34.64812200 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 12:46:34.66496300 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1304s
INFO  - 2019-03-05 12:46:36.15063300 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 12:46:36.16894900 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1314s
INFO  - 2019-03-05 12:46:42.02385300 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 12:46:42.04118500 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1263s
INFO  - 2019-03-05 12:46:43.85352800 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 12:46:43.87174100 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1227s
INFO  - 2019-03-05 12:46:47.09176000 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:goods_info
INFO  - 2019-03-05 12:46:47.11061600 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1284s
INFO  - 2019-03-05 12:47:11.55722700 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 12:47:11.57550100 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1289s
INFO  - 2019-03-05 12:47:13.17971200 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 12:47:13.19829800 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1246s
INFO  - 2019-03-05 12:47:15.33699500 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 12:47:15.35537800 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1336s
INFO  - 2019-03-05 12:47:16.04604800 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 12:47:16.06401200 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1281s
INFO  - 2019-03-05 12:47:16.51515500 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 12:47:16.53231800 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1214s
INFO  - 2019-03-05 12:47:17.86489400 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 12:47:17.88310700 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1271s
INFO  - 2019-03-05 12:47:19.61994500 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 12:47:19.63828900 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1662s
INFO  - 2019-03-05 12:47:30.48410000 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 12:47:30.50230600 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1306s
INFO  - 2019-03-05 12:47:32.07042900 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 12:47:32.08921500 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1324s
INFO  - 2019-03-05 12:47:33.62264400 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 12:47:33.64105100 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1522s
INFO  - 2019-03-05 12:47:34.32670600 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 12:47:34.34579700 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1379s
INFO  - 2019-03-05 12:47:34.68253800 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 12:47:34.70070300 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1298s
INFO  - 2019-03-05 12:47:35.35997600 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 12:47:35.37758500 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1286s
INFO  - 2019-03-05 12:47:36.00591200 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 12:47:36.02423700 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1342s
INFO  - 2019-03-05 12:47:37.28202100 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 12:47:37.30104000 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1240s
INFO  - 2019-03-05 12:47:40.55432800 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 12:47:40.57229300 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1280s
INFO  - 2019-03-05 12:47:42.11473300 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 12:47:42.13327200 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1559s
INFO  - 2019-03-05 12:47:42.99876600 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 12:47:43.01566100 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1273s
INFO  - 2019-03-05 12:47:45.03695800 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 12:47:45.05407200 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1316s
INFO  - 2019-03-05 12:47:45.36354300 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 12:47:45.37975400 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1212s
INFO  - 2019-03-05 12:47:47.01015000 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 12:47:47.02675600 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1231s
INFO  - 2019-03-05 12:47:47.52937700 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 12:47:47.54728700 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1226s
INFO  - 2019-03-05 12:47:47.94253200 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 12:47:47.95878200 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1231s
INFO  - 2019-03-05 12:47:48.60094100 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 12:47:48.61902000 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1293s
INFO  - 2019-03-05 12:47:49.82095100 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 12:47:49.83881400 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1300s
INFO  - 2019-03-05 12:47:50.31567900 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 12:47:50.33379600 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1260s
INFO  - 2019-03-05 12:47:51.40415200 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 12:47:51.42160200 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1257s
INFO  - 2019-03-05 12:47:52.91518700 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 12:47:52.93353200 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1296s
INFO  - 2019-03-05 12:47:56.66339000 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 12:47:56.68197300 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1288s
INFO  - 2019-03-05 12:47:57.43648400 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 12:47:57.45474600 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1245s
INFO  - 2019-03-05 12:47:59.96076900 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 12:47:59.97836300 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1270s
INFO  - 2019-03-05 12:48:00.68902600 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 12:48:00.70702300 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1216s
INFO  - 2019-03-05 12:48:01.16821600 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 12:48:01.18552100 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1251s
INFO  - 2019-03-05 12:48:04.12698000 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 12:48:04.14541900 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1228s
INFO  - 2019-03-05 12:48:05.01178400 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 12:48:05.03011300 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1265s
INFO  - 2019-03-05 12:48:05.71705200 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 12:48:05.73590200 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1272s
INFO  - 2019-03-05 12:48:08.52926900 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 12:48:08.54763900 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1278s
INFO  - 2019-03-05 12:48:17.79906100 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:sales_input  Method:copy
INFO  - 2019-03-05 12:48:17.95311600 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【売上登録処理   START】
INFO  - 2019-03-05 12:48:17.97257700 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (1, 1, now(), '1348', '富国株式会社', '1', '1', '2019/03/31', '2019/03/31', '59', '横田研太郎', '1', '3', '1', '23000', '1840', '24840', NULL, NULL, NULL, '大阪研究所', '雑貨', '商品試験', '富国株式会社', NULL, NULL, '1', 0)
INFO  - 2019-03-05 12:48:17.99145800 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (1, 1, now(), '30002168', '金剛紐打ち組み紐', '2', NULL, NULL, '6', '1840', '23000', '24840', '・耐荷重試験　当て板直径２０ｃｍ　１６８時間', 64557)
INFO  - 2019-03-05 12:48:18.07537300 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【INSERT】PROCESS: Receivable_mng_mdl->_regist_mng SQL: INSERT INTO `t_receivable_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `target_month`, `customer_id`, `customer_disp_name`, `institute_id`, `institute_name`, `depart_id`, `depart_name`, `sales_money`) VALUES (1, 1, now(), '201903', '1348', '富国株式会社', '1', '大阪研究所', '3', '雑貨', '24840')
INFO  - 2019-03-05 12:48:18.09295100 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (1, 1, now(), 37710, 64557, '2019/03/31', '24840')
INFO  - 2019-03-05 12:48:18.13115900 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【売上登録処理   END】
INFO  - 2019-03-05 12:48:18.20489600 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.5018s
INFO  - 2019-03-05 12:48:19.90891500 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:sales_list  Method:index
INFO  - 2019-03-05 12:48:20.92337300 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:sales_list  Method:index execution time=1.0737s
INFO  - 2019-03-05 12:48:25.80718500 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:bill_sales_print  Method:index
INFO  - 2019-03-05 12:48:27.13972000 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=1.4006s
INFO  - 2019-03-05 12:48:34.26362300 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:bill_sales_print  Method:output
INFO  - 2019-03-05 12:48:34.28274300 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【請求書発行処理   START)】
INFO  - 2019-03-05 12:48:34.49363200 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (1, 1, now(), 'SKK0049303', 'S', '2019/03/05', '1', '富国株式会社', '富国株式会社', '24840', '2019/03/31', '1348')
INFO  - 2019-03-05 12:48:34.51070200 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (1, 1, now(), 49546, '64557')
INFO  - 2019-03-05 12:48:34.52599000 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 1, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049303' WHERE `sales_mng_id` =  '64557'
INFO  - 2019-03-05 12:48:35.10402700 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【請求書発行処理   END)】
INFO  - 2019-03-05 12:48:35.18136900 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:bill_sales_print  Method:output execution time=1.0207s
INFO  - 2019-03-05 12:48:38.12269600 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:bill_sales_print  Method:index
INFO  - 2019-03-05 12:48:41.14678600 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=3.0931s
INFO  - 2019-03-05 12:49:05.80594800 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-03-05 12:49:05.82636700 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1382s
INFO  - 2019-03-05 12:51:46.90148700 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:other_del  Method:index
INFO  - 2019-03-05 12:51:56.38393000 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:other_del  Method:index execution time=9.5709s
INFO  - 2019-03-05 12:52:06.72611000 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:other_del  Method:index
INFO  - 2019-03-05 12:52:08.55850200 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:other_del  Method:index execution time=1.8958s
INFO  - 2019-03-05 12:52:22.98233400 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:other_del  Method:index
INFO  - 2019-03-05 12:52:23.00365800 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【その他消込(請求)処理   START)】
INFO  - 2019-03-05 12:52:23.02366100 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【INSERT】PROCESS: Other_del_mdl->bill_regist_data SQL: INSERT INTO `t_credit_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `bill_no`, `bill_money`, `sum_credit_money`, `sum_balance_money`) VALUES (1, 1, now(), '49546', 'SKK0049303', '24840', 24840, 0)
INFO  - 2019-03-05 12:52:23.04254800 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【INSERT】PROCESS: Other_del_mdl->bill_regist_data SQL: INSERT INTO `t_credit_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `reconcile_date`, `reconcile_money`, `reconcile_type`, `credit_mng_id`) VALUES (1, 1, now(), '2019/03/05', '24840', 'G', 46222)
INFO  - 2019-03-05 12:52:23.11360600 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_credit SQL: UPDATE `t_receivable_mng` SET `credit_money` = credit_money + 24840, `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37710'
INFO  - 2019-03-05 12:52:23.13117300 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【UPDATE】PROCESS: Receivable_mng_mdl->_update_credit SQL: UPDATE `t_receivable_data` SET `credit_mng_id` = '46222', `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37710'
INFO  - 2019-03-05 12:52:23.14863100 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【UPDATE】PROCESS: Credit_common_mdl->update_sales_mng SQL: UPDATE `t_sales_mng` SET `data_status_type` = '3', `last_user_id` = 1, `last_datetime` = now() WHERE `sales_mng_id` in (64557) AND `data_status_type` =  '2'
INFO  - 2019-03-05 12:52:23.16541000 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【UPDATE】PROCESS: Credit_common_mdl->update_reconcile_status SQL: UPDATE `t_credit_mng` SET `reconcile_status` = '2', `last_user_id` = 1, `last_datetime` = now() WHERE `credit_mng_id` =  46222
INFO  - 2019-03-05 12:52:23.19970100 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【その他消込(請求)処理   END)】
INFO  - 2019-03-05 12:52:24.96132300 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:other_del  Method:index execution time=2.0536s
INFO  - 2019-03-05 12:58:39.59048500 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:other_del  Method:index
INFO  - 2019-03-05 12:58:41.38844100 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:other_del  Method:index execution time=1.8289s
INFO  - 2019-03-05 13:13:38.22663700 --> [ad63d9ea6f2b77b7b8d8e643b4ae0edc]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-03-05 13:13:38.24723100 --> [ad63d9ea6f2b77b7b8d8e643b4ae0edc]<PROCESS-END> Controller:login  Method:index execution time=0.1358s
INFO  - 2019-03-05 13:13:40.36307400 --> [ad63d9ea6f2b77b7b8d8e643b4ae0edc]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-03-05 13:13:40.53755300 --> [ad63d9ea6f2b77b7b8d8e643b4ae0edc]<PROCESS-START> USER-ID: 12 Controller:top  Method:index
INFO  - 2019-03-05 13:13:45.45276800 --> [ad63d9ea6f2b77b7b8d8e643b4ae0edc]<PROCESS-END> Controller:top  Method:index execution time=4.9770s
INFO  - 2019-03-05 13:13:45.90998700 --> [ad63d9ea6f2b77b7b8d8e643b4ae0edc]<PROCESS-START> USER-ID: 12 Controller:ajax  Method:daily_cnt_info
INFO  - 2019-03-05 13:13:46.30746500 --> [ad63d9ea6f2b77b7b8d8e643b4ae0edc]<PROCESS-END> Controller:ajax  Method:daily_cnt_info execution time=0.5107s
INFO  - 2019-03-05 13:14:31.88622000 --> [ad63d9ea6f2b77b7b8d8e643b4ae0edc]<PROCESS-START> USER-ID: 12 Controller:sales_spec_print  Method:index
INFO  - 2019-03-05 13:14:31.96327600 --> [ad63d9ea6f2b77b7b8d8e643b4ae0edc]<PROCESS-END> Controller:sales_spec_print  Method:index execution time=0.1676s
INFO  - 2019-03-05 13:14:46.56291100 --> [ad63d9ea6f2b77b7b8d8e643b4ae0edc]<PROCESS-START> USER-ID: 12 Controller:sales_spec_print  Method:index
INFO  - 2019-03-05 13:40:01.02492800 --> [7abfe509a60381d831a4bd844fb721ac]<PROCESS-START> USER-ID:  Controller:send_batch  Method:index
INFO  - 2019-03-05 13:40:03.28361000 --> [7abfe509a60381d831a4bd844fb721ac]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_mng SQL: INSERT INTO `t_outside_send_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `process_datetime`, `record_count`) VALUES (0, 0, now(), '201903051340', 11)
INFO  - 2019-03-05 13:40:03.30464000 --> [7abfe509a60381d831a4bd844fb721ac]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 277, '4348', '40010301', '40010301', 'SKK0046064', '2018-11-14', '2018-11-14', '2019-01-28')
INFO  - 2019-03-05 13:40:03.34487300 --> [7abfe509a60381d831a4bd844fb721ac]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 277, '6055', '40011092', '40011092', 'SKK0049299', '2019-02-28', '2019-02-11', NULL)
INFO  - 2019-03-05 13:40:03.36310700 --> [7abfe509a60381d831a4bd844fb721ac]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 277, '6563', '40011268', '40011268', 'SKK0049264', '2019-03-04', '2019-03-04', NULL)
INFO  - 2019-03-05 13:40:03.38168800 --> [7abfe509a60381d831a4bd844fb721ac]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 277, '6564', '53106067', '53106067', 'SKK0049237', '2019-03-04', '2019-03-04', NULL)
INFO  - 2019-03-05 13:40:03.39925300 --> [7abfe509a60381d831a4bd844fb721ac]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 277, '6565', '40011298', '40011298', 'SKK0049265', '2019-03-04', '2019-03-04', NULL)
INFO  - 2019-03-05 13:40:03.41672400 --> [7abfe509a60381d831a4bd844fb721ac]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 277, '6568', '10005720', '10005720', 'SKK0049294', '2019-03-04', '2019-03-04', NULL)
INFO  - 2019-03-05 13:40:03.43556400 --> [7abfe509a60381d831a4bd844fb721ac]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 277, '6569', '10005728', '10005728', 'SKK0049292', '2019-03-04', '2019-03-04', NULL)
INFO  - 2019-03-05 13:40:03.45461900 --> [7abfe509a60381d831a4bd844fb721ac]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 277, '6570', '10005729', '10005729', 'SKK0049293', '2019-03-04', '2019-03-04', NULL)
INFO  - 2019-03-05 13:40:03.47329000 --> [7abfe509a60381d831a4bd844fb721ac]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 277, '6571', '10005684', '10005684', 'SKK0049295', '2019-03-04', '2019-03-04', NULL)
INFO  - 2019-03-05 13:40:03.49129900 --> [7abfe509a60381d831a4bd844fb721ac]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 277, '6572', '10005701', '10005701', 'SKK0049296', '2019-03-01', '2019-03-01', NULL)
INFO  - 2019-03-05 13:40:03.51170200 --> [7abfe509a60381d831a4bd844fb721ac]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 277, '6573', '10005755', '10005755', 'SKK0049297', '2019-03-04', '2019-03-04', NULL)
INFO  - 2019-03-05 13:40:03.53096400 --> [7abfe509a60381d831a4bd844fb721ac]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'credited', `outside_send_data_id` = 7572, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '4348'
INFO  - 2019-03-05 13:40:03.54934500 --> [7abfe509a60381d831a4bd844fb721ac]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 7573, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '6055'
INFO  - 2019-03-05 13:40:03.56960600 --> [7abfe509a60381d831a4bd844fb721ac]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 7574, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '6563'
INFO  - 2019-03-05 13:40:03.58646400 --> [7abfe509a60381d831a4bd844fb721ac]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 7575, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '6564'
INFO  - 2019-03-05 13:40:03.60297700 --> [7abfe509a60381d831a4bd844fb721ac]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 7576, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '6565'
INFO  - 2019-03-05 13:40:03.61937100 --> [7abfe509a60381d831a4bd844fb721ac]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 7577, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '6568'
INFO  - 2019-03-05 13:40:03.63662500 --> [7abfe509a60381d831a4bd844fb721ac]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 7578, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '6569'
INFO  - 2019-03-05 13:40:03.65291900 --> [7abfe509a60381d831a4bd844fb721ac]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 7579, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '6570'
INFO  - 2019-03-05 13:40:03.66857700 --> [7abfe509a60381d831a4bd844fb721ac]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 7580, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '6571'
INFO  - 2019-03-05 13:40:03.68581700 --> [7abfe509a60381d831a4bd844fb721ac]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 7581, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '6572'
INFO  - 2019-03-05 13:40:03.70479300 --> [7abfe509a60381d831a4bd844fb721ac]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 7582, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '6573'
INFO  - 2019-03-05 13:40:03.75533800 --> [7abfe509a60381d831a4bd844fb721ac]<PROCESS-END> Controller:send_batch  Method:index execution time=3.0794s
INFO  - 2019-03-05 13:47:58.93397000 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-05 13:47:59.02733700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1663s
INFO  - 2019-03-05 13:48:02.12751400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-03-05 13:48:02.15729000 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1368s
INFO  - 2019-03-05 13:48:04.48726300 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-03-05 13:48:04.51132900 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1308s
INFO  - 2019-03-05 13:48:06.15403800 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-03-05 13:48:06.18046600 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1318s
INFO  - 2019-03-05 13:48:07.03399000 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_info
INFO  - 2019-03-05 13:48:07.05601000 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:customer_info execution time=0.1593s
INFO  - 2019-03-05 13:48:15.01492400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_list
INFO  - 2019-03-05 13:48:15.03344400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:handler_list execution time=0.1213s
INFO  - 2019-03-05 13:48:15.77258200 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_info
INFO  - 2019-03-05 13:48:15.79394400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:handler_info execution time=0.1358s
INFO  - 2019-03-05 13:48:26.27510700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 13:48:26.29575400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1249s
INFO  - 2019-03-05 13:48:30.16823400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 13:48:30.18887900 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1549s
INFO  - 2019-03-05 13:48:30.60307700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-03-05 13:48:30.62385700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1258s
INFO  - 2019-03-05 13:48:34.93240900 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 13:48:34.95090800 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1246s
INFO  - 2019-03-05 13:48:36.78164900 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 13:48:36.80237100 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1230s
INFO  - 2019-03-05 13:48:37.43847500 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 13:48:37.45915300 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1337s
INFO  - 2019-03-05 13:48:39.76330800 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-05 13:48:39.94246900 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:sales_input  Method:index execution time=0.3032s
INFO  - 2019-03-05 13:48:46.67467900 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-05 13:48:46.71412300 --> [6557a8b1567558541f457d211d0df698]【売上登録処理   START】
INFO  - 2019-03-05 13:48:46.73772000 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '1558', '株式会社アクアイグニス', '1', '1', '2019/03/05', '2019/03/05', '79', '平井沙也花', '3', '1', '1', '3500', '280', '3780', NULL, NULL, NULL, '名古屋研究所', '食品', '商品試験', '株式会社アクアイグニス', NULL, NULL, '1', 0)
INFO  - 2019-03-05 13:48:46.75906400 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), NULL, '細菌検査一式「鈴鹿抹茶サブレ」', '1', NULL, '3500', '6', '280', '3500', '3780', '報告書No.60005101-02', 64558)
INFO  - 2019-03-05 13:48:46.84798700 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Receivable_mng_mdl->_regist_mng SQL: INSERT INTO `t_receivable_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `target_month`, `customer_id`, `customer_disp_name`, `institute_id`, `institute_name`, `depart_id`, `depart_name`, `sales_money`) VALUES (2, 2, now(), '201903', '1558', '株式会社アクアイグニス', '3', '名古屋研究所', '1', '食品', '3780')
INFO  - 2019-03-05 13:48:46.86693700 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), 37711, 64558, '2019/03/05', '3780')
INFO  - 2019-03-05 13:48:46.90165100 --> [6557a8b1567558541f457d211d0df698]【売上登録処理   END】
INFO  - 2019-03-05 13:48:46.97493400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:sales_input  Method:index execution time=0.4237s
INFO  - 2019-03-05 13:48:48.22526400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-05 13:48:48.31043000 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1862s
INFO  - 2019-03-05 13:48:50.50244700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-05 13:48:51.79161300 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=1.3553s
INFO  - 2019-03-05 13:48:55.37834400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-05 13:48:57.12186900 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=1.8135s
INFO  - 2019-03-05 13:49:00.40297300 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:sales_confirm_other  Method:index
INFO  - 2019-03-05 13:49:00.45687500 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:sales_confirm_other  Method:index execution time=0.1872s
INFO  - 2019-03-05 13:49:11.56809900 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-05 13:49:15.25949700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:sales_list  Method:index execution time=3.7691s
INFO  - 2019-03-05 13:49:18.43997200 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-05 13:49:19.51408900 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:sales_list  Method:index execution time=1.1424s
INFO  - 2019-03-05 13:49:24.87484100 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:edit
INFO  - 2019-03-05 13:49:24.99581200 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:sales_input  Method:edit execution time=0.1918s
INFO  - 2019-03-05 13:49:27.65293700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-03-05 13:49:27.68024800 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1359s
INFO  - 2019-03-05 13:49:30.30619100 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 13:49:30.32741700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1350s
INFO  - 2019-03-05 13:49:34.22201600 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 13:49:34.24083400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1312s
INFO  - 2019-03-05 13:49:39.05210900 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:edit
INFO  - 2019-03-05 13:49:39.12698600 --> [6557a8b1567558541f457d211d0df698]【売上変更処理   START】
INFO  - 2019-03-05 13:49:39.15766400 --> [6557a8b1567558541f457d211d0df698]【UPDATE】PROCESS: Sales_mdl->update_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `customer_id` = '1558', `customer_disp_name` = '株式会社アクアイグニス', `credit_type` = '1', `customer_type` = '1', `bill_date` = '2019/03/05', `book_date` = '2019/03/05', `handler_id` = '79', `handler_name` = '平井沙也花', `institute_id` = '3', `depart_id` = '1', `abstract_id` = '1', `sum_no_tax` = '3500', `sum_tax` = '280', `sum_money` = '3780', `sep_month_from` = NULL, `sep_month_to` = NULL, `cutoff_date` = NULL, `institute_name` = '名古屋研究所', `depart_name` = '食品', `abstract_name` = '商品試験', `customer_name` = '株式会社アクアイグニス', `cutoff_date_from` = NULL, `cutoff_date_to` = NULL, `data_status_type` = '1', `sep_depart_flg` = 0 WHERE `sales_mng_id` =  '64558'
INFO  - 2019-03-05 13:49:39.17913800 --> [6557a8b1567558541f457d211d0df698]【DELETE(物理削除)】PROCESS: Sales_mdl->update_data SQL: DELETE FROM `t_sales_detail`
WHERE `sales_mng_id` =  '64558'
INFO  - 2019-03-05 13:49:39.21371100 --> [6557a8b1567558541f457d211d0df698]【UPDATE】PROCESS: Sales_mdl->nullupdate_outside_relation SQL: UPDATE `t_outside_relation` SET `sales_mng_id` = NULL, `sales_detail_id` = NULL, `last_user_id` = 2, `last_datetime` = now() WHERE `sales_mng_id` =  '64558'
INFO  - 2019-03-05 13:49:39.23444600 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Sales_mdl->update_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), NULL, '細菌検査一式「鈴鹿抹茶サブレ」', '1', NULL, '3500', '6', '280', '3500', '3780', '報告書No.60005101-02\r\n株式会社アクアイグニス　製造工場　御中', '64558')
INFO  - 2019-03-05 13:49:39.25361300 --> [6557a8b1567558541f457d211d0df698]【DELETE(物理削除)】PROCESS: Sales_mdl->update_data SQL: DELETE FROM `t_sales_before`
WHERE `sales_mng_id` =  '64558'
INFO  - 2019-03-05 13:49:39.27053400 --> [6557a8b1567558541f457d211d0df698]【DELETE(物理削除)】PROCESS: Sales_mdl->update_data SQL: DELETE FROM `t_sales_depart`
WHERE `sales_mng_id` =  '64558'
INFO  - 2019-03-05 13:49:39.44036200 --> [6557a8b1567558541f457d211d0df698]【DELETE(物理削除)】PROCESS: Receivable_mng_mdl->back_sales_data SQL: DELETE FROM `t_receivable_data`
WHERE `sales_mng_id` =  '64558'
INFO  - 2019-03-05 13:49:39.45951500 --> [6557a8b1567558541f457d211d0df698]【UPDATE】PROCESS: Receivable_mng_mdl->back_sales_data SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money - 3780, `last_user_id` = 2, `last_datetime` = now() WHERE `receivable_mng_id` =  '37711'
INFO  - 2019-03-05 13:49:39.48027300 --> [6557a8b1567558541f457d211d0df698]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_mng SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money + 3780, `last_user_id` = 2, `last_datetime` = now() WHERE `target_month` =  '201903' AND `customer_disp_name` =  '株式会社アクアイグニス' AND `institute_id` =  '3' AND `depart_id` =  '1'
INFO  - 2019-03-05 13:49:39.49873000 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), '37711', '64558', '2019/03/05', '3780')
INFO  - 2019-03-05 13:49:39.54371700 --> [6557a8b1567558541f457d211d0df698]【売上変更処理   END】
INFO  - 2019-03-05 13:49:39.61703700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:sales_input  Method:edit execution time=0.6631s
INFO  - 2019-03-05 13:49:40.44029300 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-05 13:49:41.44671600 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:sales_list  Method:index execution time=1.0804s
INFO  - 2019-03-05 13:50:05.29106000 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-05 13:50:06.38642700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:sales_list  Method:index execution time=1.1716s
INFO  - 2019-03-05 13:50:12.56906500 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-03-05 13:50:12.69020700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.1922s
INFO  - 2019-03-05 13:50:53.62135800 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 13:50:53.64256200 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1253s
INFO  - 2019-03-05 13:50:55.27708400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 13:50:55.33577700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1634s
INFO  - 2019-03-05 13:50:55.81353700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 13:50:55.83541000 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1641s
INFO  - 2019-03-05 13:50:58.63815200 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-03-05 13:50:58.66008200 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1326s
INFO  - 2019-03-05 13:51:06.90751400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 13:51:06.92967100 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1297s
INFO  - 2019-03-05 13:51:07.51763500 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 13:51:07.53977800 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1668s
INFO  - 2019-03-05 13:51:07.83252600 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 13:51:07.85233500 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1283s
INFO  - 2019-03-05 13:51:12.03506400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 13:51:12.05750600 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1312s
INFO  - 2019-03-05 13:51:12.36112900 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 13:51:12.38112500 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1258s
INFO  - 2019-03-05 13:51:13.90797100 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 13:51:13.93102800 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1286s
INFO  - 2019-03-05 13:51:14.52404900 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 13:51:14.54599300 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1256s
INFO  - 2019-03-05 13:51:19.44567100 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 13:51:19.46586300 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1292s
INFO  - 2019-03-05 13:51:20.83796800 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 13:51:20.86046000 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1547s
INFO  - 2019-03-05 13:51:21.99766400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 13:51:22.01868400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1278s
INFO  - 2019-03-05 13:51:23.74392200 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 13:51:23.76410800 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1262s
INFO  - 2019-03-05 13:51:24.37740200 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 13:51:24.40004800 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1410s
INFO  - 2019-03-05 13:51:25.47889800 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 13:51:25.50137400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1293s
INFO  - 2019-03-05 13:51:26.45183100 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 13:51:26.47399800 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1369s
INFO  - 2019-03-05 13:51:28.22414600 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:sales_sum_print  Method:index
ERROR - 2019-03-05 13:51:30.99138400 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"bdd5cd94bdb5cb3d8a9e1820e9be53cc";s:10:"ip_address";s:14:"172.68.101.156";s:10:"user_agent";s:101:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36";s:13:"last_activity";i:1551746963;}60190da7c789bbd3077e742e4343e210||0||/||||]
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

ERROR - 2019-03-05 13:51:31.03184900 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"bdd5cd94bdb5cb3d8a9e1820e9be53cc";s:10:"ip_address";s:14:"172.68.101.156";s:10:"user_agent";s:101:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36";s:13:"last_activity";i:1551746963;}60190da7c789bbd3077e742e4343e210||0||/||||]
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

ERROR - 2019-03-05 13:51:31.07567800 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"bdd5cd94bdb5cb3d8a9e1820e9be53cc";s:10:"ip_address";s:14:"172.68.101.156";s:10:"user_agent";s:101:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36";s:13:"last_activity";i:1551746963;}60190da7c789bbd3077e742e4343e210||0||/||||]
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

INFO  - 2019-03-05 13:51:31.09792400 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:sales_sum_print  Method:index execution time=2.8731s
INFO  - 2019-03-05 13:51:36.72730700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-03-05 13:51:36.79842400 --> [6557a8b1567558541f457d211d0df698]【売上登録処理   START】
INFO  - 2019-03-05 13:51:36.82310000 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '570', '株式会社大丸松坂屋百貨店', '2', '1', '2019/03/05', '2019/03/05', '6', '赤尾基文', '1', '2', '1', '3300', '264', '3564', NULL, NULL, NULL, '大阪研究所', '繊維', '商品試験', '株式会社大丸松坂屋百貨店', NULL, NULL, '1', 0)
INFO  - 2019-03-05 13:51:36.84512700 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), NULL, '2019年2月度　品質表示案作成', '11', '型', '300', '6', '264', '3300', '3564', 'オユナ3型　ルメール2型　メゾンミッシェル5型　Sage1型 \r\n株式会社大丸松坂屋百貨店　本社営業本部　MD戦略推進室　御中', 64559)
INFO  - 2019-03-05 13:51:36.92313700 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Receivable_mng_mdl->_regist_mng SQL: INSERT INTO `t_receivable_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `target_month`, `customer_id`, `customer_disp_name`, `institute_id`, `institute_name`, `depart_id`, `depart_name`, `sales_money`) VALUES (2, 2, now(), '201903', '570', '株式会社大丸松坂屋百貨店', '1', '大阪研究所', '2', '繊維', '3564')
INFO  - 2019-03-05 13:51:36.94452100 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), 37712, 64559, '2019/03/05', '3564')
INFO  - 2019-03-05 13:51:36.98014100 --> [6557a8b1567558541f457d211d0df698]【売上登録処理   END】
INFO  - 2019-03-05 13:51:37.05291900 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.4277s
INFO  - 2019-03-05 13:51:37.96777900 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-05 13:51:39.05166100 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:sales_list  Method:index execution time=1.1619s
INFO  - 2019-03-05 13:51:51.54388400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-05 13:51:52.95723100 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=1.4736s
INFO  - 2019-03-05 13:51:59.49466100 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:output
INFO  - 2019-03-05 13:51:59.51788500 --> [6557a8b1567558541f457d211d0df698]【請求書発行処理   START)】
INFO  - 2019-03-05 13:51:59.75195300 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0049304', 'S', '2019/03/05', '1', '株式会社アクアイグニス', '株式会社アクアイグニス', '3780', '2019/03/05', '1558')
INFO  - 2019-03-05 13:51:59.77402900 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 49547, '64558')
INFO  - 2019-03-05 13:51:59.79450200 --> [6557a8b1567558541f457d211d0df698]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049304' WHERE `sales_mng_id` =  '64558'
INFO  - 2019-03-05 13:52:00.01935300 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0049305', 'S', '2019/03/05', '2', '株式会社大丸松坂屋百貨店', '株式会社大丸松坂屋百貨店', '3564', '2019/03/05', '570')
INFO  - 2019-03-05 13:52:00.04181900 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 49548, '64559')
INFO  - 2019-03-05 13:52:00.06341800 --> [6557a8b1567558541f457d211d0df698]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049305' WHERE `sales_mng_id` =  '64559'
INFO  - 2019-03-05 13:52:01.12970200 --> [6557a8b1567558541f457d211d0df698]【請求書発行処理   END)】
INFO  - 2019-03-05 13:52:01.20283400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:bill_sales_print  Method:output execution time=1.8048s
INFO  - 2019-03-05 13:52:02.27755000 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-05 13:52:05.40402900 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=3.1918s
INFO  - 2019-03-05 13:52:08.43819500 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-03-05 13:52:08.46302400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1395s
INFO  - 2019-03-05 13:52:21.72653200 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-03-05 13:52:21.74908700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1358s
INFO  - 2019-03-05 14:07:23.35444100 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-05 14:07:26.79704000 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:sales_list  Method:index execution time=3.5501s
INFO  - 2019-03-05 14:07:31.10260800 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-05 14:07:32.11374900 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:sales_list  Method:index execution time=1.0719s
INFO  - 2019-03-05 14:07:37.15531500 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-03-05 14:07:37.27173700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.1911s
INFO  - 2019-03-05 14:07:40.10607400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-05 14:07:41.14347400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:sales_list  Method:index execution time=1.1116s
INFO  - 2019-03-05 14:07:43.60265000 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:edit
INFO  - 2019-03-05 14:07:43.71642500 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:sales_input  Method:edit execution time=0.1866s
INFO  - 2019-03-05 14:07:50.33047500 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 14:07:50.35410600 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1327s
INFO  - 2019-03-05 14:07:51.79740100 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-03-05 14:07:51.81833900 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1579s
INFO  - 2019-03-05 14:07:51.84755200 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:edit
INFO  - 2019-03-05 14:07:51.99318700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:sales_input  Method:edit execution time=0.2429s
INFO  - 2019-03-05 14:07:53.24398600 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:edit
INFO  - 2019-03-05 14:07:53.32454300 --> [6557a8b1567558541f457d211d0df698]【売上変更処理   START】
INFO  - 2019-03-05 14:07:53.35757300 --> [6557a8b1567558541f457d211d0df698]【UPDATE】PROCESS: Sales_mdl->update_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `customer_id` = '1558', `customer_disp_name` = '株式会社アクアイグニス', `credit_type` = '1', `customer_type` = '1', `bill_date` = '2019/03/05', `book_date` = '2019/03/05', `handler_id` = '79', `handler_name` = '平井沙也花', `institute_id` = '3', `depart_id` = '1', `abstract_id` = '1', `sum_no_tax` = '3500', `sum_tax` = '280', `sum_money` = '3780', `sep_month_from` = NULL, `sep_month_to` = NULL, `cutoff_date` = NULL, `institute_name` = '名古屋研究所', `depart_name` = '食品', `abstract_name` = '商品試験', `customer_name` = '株式会社アクアイグニス', `cutoff_date_from` = NULL, `cutoff_date_to` = NULL, `data_status_type` = '1', `sep_depart_flg` = 0 WHERE `sales_mng_id` =  '64558'
INFO  - 2019-03-05 14:07:53.38009700 --> [6557a8b1567558541f457d211d0df698]【DELETE(物理削除)】PROCESS: Sales_mdl->update_data SQL: DELETE FROM `t_sales_detail`
WHERE `sales_mng_id` =  '64558'
INFO  - 2019-03-05 14:07:53.41527300 --> [6557a8b1567558541f457d211d0df698]【UPDATE】PROCESS: Sales_mdl->nullupdate_outside_relation SQL: UPDATE `t_outside_relation` SET `sales_mng_id` = NULL, `sales_detail_id` = NULL, `last_user_id` = 2, `last_datetime` = now() WHERE `sales_mng_id` =  '64558'
INFO  - 2019-03-05 14:07:53.43698000 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Sales_mdl->update_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), NULL, '細菌検査一式「鈴鹿抹茶生サブレ」', '1', NULL, '3500', '6', '280', '3500', '3780', '報告書No.60005101-02\r\n株式会社アクアイグニス　製造工場　御中', '64558')
INFO  - 2019-03-05 14:07:53.45717400 --> [6557a8b1567558541f457d211d0df698]【DELETE(物理削除)】PROCESS: Sales_mdl->update_data SQL: DELETE FROM `t_sales_before`
WHERE `sales_mng_id` =  '64558'
INFO  - 2019-03-05 14:07:53.47906500 --> [6557a8b1567558541f457d211d0df698]【DELETE(物理削除)】PROCESS: Sales_mdl->update_data SQL: DELETE FROM `t_sales_depart`
WHERE `sales_mng_id` =  '64558'
INFO  - 2019-03-05 14:07:53.50306400 --> [6557a8b1567558541f457d211d0df698]【UPDATE】PROCESS: Sales_mdl->update_del_bill_status SQL: UPDATE `t_sales_mng` SET `data_status_type` = '1', `last_user_id` = 2, `last_datetime` = now() WHERE `sales_mng_id` in (64558) 
INFO  - 2019-03-05 14:07:53.52492400 --> [6557a8b1567558541f457d211d0df698]【DELETE(物理削除)】PROCESS: Sales_mdl->delete_bill_print SQL: DELETE FROM `t_bill_mng`
WHERE `bill_mng_id` =  '49547'
INFO  - 2019-03-05 14:07:53.68522600 --> [6557a8b1567558541f457d211d0df698]【DELETE(物理削除)】PROCESS: Receivable_mng_mdl->back_sales_data SQL: DELETE FROM `t_receivable_data`
WHERE `sales_mng_id` =  '64558'
INFO  - 2019-03-05 14:07:53.70571800 --> [6557a8b1567558541f457d211d0df698]【UPDATE】PROCESS: Receivable_mng_mdl->back_sales_data SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money - 3780, `last_user_id` = 2, `last_datetime` = now() WHERE `receivable_mng_id` =  '37711'
INFO  - 2019-03-05 14:07:53.73022800 --> [6557a8b1567558541f457d211d0df698]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_mng SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money + 3780, `last_user_id` = 2, `last_datetime` = now() WHERE `target_month` =  '201903' AND `customer_disp_name` =  '株式会社アクアイグニス' AND `institute_id` =  '3' AND `depart_id` =  '1'
INFO  - 2019-03-05 14:07:53.75413600 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), '37711', '64558', '2019/03/05', '3780')
INFO  - 2019-03-05 14:07:53.79844700 --> [6557a8b1567558541f457d211d0df698]【売上変更処理   END】
INFO  - 2019-03-05 14:07:53.88375100 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:sales_input  Method:edit execution time=0.7351s
INFO  - 2019-03-05 14:07:54.68249400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-05 14:07:55.74079600 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:sales_list  Method:index execution time=1.1263s
INFO  - 2019-03-05 14:07:57.50591400 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-05 14:07:58.83152700 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=1.3961s
INFO  - 2019-03-05 14:08:07.24578900 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:output
INFO  - 2019-03-05 14:08:07.26935900 --> [6557a8b1567558541f457d211d0df698]【請求書発行処理   START)】
INFO  - 2019-03-05 14:08:07.31034100 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0049304', 'S', '2019/03/05', '1', '株式会社アクアイグニス', '株式会社アクアイグニス', '3780', '2019/03/05', '1558')
INFO  - 2019-03-05 14:08:07.33402300 --> [6557a8b1567558541f457d211d0df698]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 49549, '64558')
INFO  - 2019-03-05 14:08:07.35659700 --> [6557a8b1567558541f457d211d0df698]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049304' WHERE `sales_mng_id` =  '64558'
INFO  - 2019-03-05 14:08:07.94050600 --> [6557a8b1567558541f457d211d0df698]【請求書発行処理   END)】
INFO  - 2019-03-05 14:08:08.02965300 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:bill_sales_print  Method:output execution time=0.8789s
INFO  - 2019-03-05 14:08:09.37234600 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-05 14:08:12.89431500 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=3.5923s
INFO  - 2019-03-05 14:08:29.90176300 --> [6557a8b1567558541f457d211d0df698]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-03-05 14:08:29.92760100 --> [6557a8b1567558541f457d211d0df698]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1390s
INFO  - 2019-03-05 14:15:16.31110300 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:setoff_del  Method:index
INFO  - 2019-03-05 14:15:17.02574000 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:setoff_del  Method:index execution time=0.8138s
INFO  - 2019-03-05 14:15:26.16845000 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:setoff_del  Method:index
INFO  - 2019-03-05 14:15:26.51398500 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:setoff_del  Method:index execution time=0.4133s
INFO  - 2019-03-05 14:15:49.37322700 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:setoff_del  Method:index
INFO  - 2019-03-05 14:15:49.39546000 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【相殺消込処理   START】
INFO  - 2019-03-05 14:15:49.41529900 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【INSERT】PROCESS: Setoff_del_mdl->regist_data SQL: INSERT INTO `t_credit_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_money`, `bill_mng_id`, `reconcile_status`, `sum_credit_money`, `sum_balance_money`) VALUES (1, 1, now(), 'SKK0048462', '215136', '48685', '2', 215136, 0)
INFO  - 2019-03-05 14:15:49.43559500 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【UPDATE】PROCESS: Credit_common_mdl->update_reconcile_status SQL: UPDATE `t_credit_mng` SET `reconcile_status` = '2', `last_user_id` = 1, `last_datetime` = now() WHERE `credit_mng_id` =  46223
INFO  - 2019-03-05 14:15:49.45920400 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【UPDATE】PROCESS: Credit_common_mdl->update_sales_mng SQL: UPDATE `t_sales_mng` SET `data_status_type` = '3', `last_user_id` = 1, `last_datetime` = now() WHERE `sales_mng_id` in (63630) AND `data_status_type` =  '2'
INFO  - 2019-03-05 14:15:49.52225000 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_credit SQL: UPDATE `t_receivable_mng` SET `credit_money` = credit_money + 215136, `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37130'
INFO  - 2019-03-05 14:15:49.54025400 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【UPDATE】PROCESS: Receivable_mng_mdl->_update_credit SQL: UPDATE `t_receivable_data` SET `credit_mng_id` = '46223', `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37130'
INFO  - 2019-03-05 14:15:49.55775300 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【INSERT】PROCESS: Setoff_del_mdl->regist_data SQL: INSERT INTO `t_credit_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `reconcile_date`, `reconcile_money`, `reconcile_type`, `credit_mng_id`) VALUES (1, 1, now(), '2019/02/28', 215136, 'S', 46223)
INFO  - 2019-03-05 14:15:49.58972200 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【相殺消込処理   END】
INFO  - 2019-03-05 14:15:49.95854200 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:setoff_del  Method:index execution time=0.6573s
INFO  - 2019-03-05 14:15:51.86949000 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:setoff_del  Method:index
INFO  - 2019-03-05 14:15:52.25522700 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:setoff_del  Method:index execution time=0.4521s
INFO  - 2019-03-05 14:16:01.85824800 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:setoff_del  Method:index
INFO  - 2019-03-05 14:16:02.24695900 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:setoff_del  Method:index execution time=0.4528s
INFO  - 2019-03-05 14:16:28.14763800 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:setoff_del  Method:index
INFO  - 2019-03-05 14:16:28.42558500 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:setoff_del  Method:index execution time=0.3455s
INFO  - 2019-03-05 14:17:18.39443300 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:setoff_del  Method:index
INFO  - 2019-03-05 14:17:18.42104200 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【相殺消込処理   START】
INFO  - 2019-03-05 14:17:18.44630900 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【INSERT】PROCESS: Setoff_del_mdl->regist_data SQL: INSERT INTO `t_credit_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_money`, `bill_mng_id`, `reconcile_status`, `sum_credit_money`, `sum_balance_money`) VALUES (1, 1, now(), 'SKK0048255', '21600', '48472', '2', 21600, 0)
INFO  - 2019-03-05 14:17:18.47123300 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【UPDATE】PROCESS: Credit_common_mdl->update_reconcile_status SQL: UPDATE `t_credit_mng` SET `reconcile_status` = '2', `last_user_id` = 1, `last_datetime` = now() WHERE `credit_mng_id` =  46224
INFO  - 2019-03-05 14:17:18.49527500 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【UPDATE】PROCESS: Credit_common_mdl->update_sales_mng SQL: UPDATE `t_sales_mng` SET `data_status_type` = '3', `last_user_id` = 1, `last_datetime` = now() WHERE `sales_mng_id` in (63464) AND `data_status_type` =  '2'
INFO  - 2019-03-05 14:17:18.56961000 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_credit SQL: UPDATE `t_receivable_mng` SET `credit_money` = credit_money + 21600, `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37045'
INFO  - 2019-03-05 14:17:18.59151700 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【UPDATE】PROCESS: Receivable_mng_mdl->_update_credit SQL: UPDATE `t_receivable_data` SET `credit_mng_id` = '46224', `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37045'
INFO  - 2019-03-05 14:17:18.61391200 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【INSERT】PROCESS: Setoff_del_mdl->regist_data SQL: INSERT INTO `t_credit_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `reconcile_date`, `reconcile_money`, `reconcile_type`, `credit_mng_id`) VALUES (1, 1, now(), '2019/02/28', 21600, 'S', 46224)
INFO  - 2019-03-05 14:17:18.63776900 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【INSERT】PROCESS: Setoff_del_mdl->regist_data SQL: INSERT INTO `t_credit_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_money`, `bill_mng_id`, `reconcile_status`, `sum_credit_money`, `sum_balance_money`) VALUES (1, 1, now(), 'SKK0048475', '9666', '48698', '2', 9666, 0)
INFO  - 2019-03-05 14:17:18.66138800 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【UPDATE】PROCESS: Credit_common_mdl->update_reconcile_status SQL: UPDATE `t_credit_mng` SET `reconcile_status` = '2', `last_user_id` = 1, `last_datetime` = now() WHERE `credit_mng_id` =  46225
INFO  - 2019-03-05 14:17:18.68525800 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【UPDATE】PROCESS: Credit_common_mdl->update_sales_mng SQL: UPDATE `t_sales_mng` SET `data_status_type` = '3', `last_user_id` = 1, `last_datetime` = now() WHERE `sales_mng_id` in (63658) AND `data_status_type` =  '2'
INFO  - 2019-03-05 14:17:18.75848000 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_credit SQL: UPDATE `t_receivable_mng` SET `credit_money` = credit_money + 9666, `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37045'
INFO  - 2019-03-05 14:17:18.78049400 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【UPDATE】PROCESS: Receivable_mng_mdl->_update_credit SQL: UPDATE `t_receivable_data` SET `credit_mng_id` = '46225', `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37045'
INFO  - 2019-03-05 14:17:18.80120000 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【INSERT】PROCESS: Setoff_del_mdl->regist_data SQL: INSERT INTO `t_credit_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `reconcile_date`, `reconcile_money`, `reconcile_type`, `credit_mng_id`) VALUES (1, 1, now(), '2019/02/28', 9666, 'S', 46225)
INFO  - 2019-03-05 14:17:18.82470400 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【INSERT】PROCESS: Setoff_del_mdl->regist_data SQL: INSERT INTO `t_credit_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_money`, `bill_mng_id`, `reconcile_status`, `sum_credit_money`, `sum_balance_money`) VALUES (1, 1, now(), 'SKK0048473', '22734', '48696', '2', 22734, 0)
INFO  - 2019-03-05 14:17:18.84806500 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【UPDATE】PROCESS: Credit_common_mdl->update_reconcile_status SQL: UPDATE `t_credit_mng` SET `reconcile_status` = '2', `last_user_id` = 1, `last_datetime` = now() WHERE `credit_mng_id` =  46226
INFO  - 2019-03-05 14:17:18.87237600 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【UPDATE】PROCESS: Credit_common_mdl->update_sales_mng SQL: UPDATE `t_sales_mng` SET `data_status_type` = '3', `last_user_id` = 1, `last_datetime` = now() WHERE `sales_mng_id` in (63656) AND `data_status_type` =  '2'
INFO  - 2019-03-05 14:17:18.94662400 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_credit SQL: UPDATE `t_receivable_mng` SET `credit_money` = credit_money + 22734, `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37045'
INFO  - 2019-03-05 14:17:18.96877200 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【UPDATE】PROCESS: Receivable_mng_mdl->_update_credit SQL: UPDATE `t_receivable_data` SET `credit_mng_id` = '46226', `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37045'
INFO  - 2019-03-05 14:17:18.98936000 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【INSERT】PROCESS: Setoff_del_mdl->regist_data SQL: INSERT INTO `t_credit_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `reconcile_date`, `reconcile_money`, `reconcile_type`, `credit_mng_id`) VALUES (1, 1, now(), '2019/02/28', 22734, 'S', 46226)
INFO  - 2019-03-05 14:17:19.01290500 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【INSERT】PROCESS: Setoff_del_mdl->regist_data SQL: INSERT INTO `t_credit_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_money`, `bill_mng_id`, `reconcile_status`, `sum_credit_money`, `sum_balance_money`) VALUES (1, 1, now(), 'SKK0048474', '28566', '48697', '2', 28566, 0)
INFO  - 2019-03-05 14:17:19.03721700 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【UPDATE】PROCESS: Credit_common_mdl->update_reconcile_status SQL: UPDATE `t_credit_mng` SET `reconcile_status` = '2', `last_user_id` = 1, `last_datetime` = now() WHERE `credit_mng_id` =  46227
INFO  - 2019-03-05 14:17:19.06163400 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【UPDATE】PROCESS: Credit_common_mdl->update_sales_mng SQL: UPDATE `t_sales_mng` SET `data_status_type` = '3', `last_user_id` = 1, `last_datetime` = now() WHERE `sales_mng_id` in (63657) AND `data_status_type` =  '2'
INFO  - 2019-03-05 14:17:19.13581400 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_credit SQL: UPDATE `t_receivable_mng` SET `credit_money` = credit_money + 28566, `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '36870'
INFO  - 2019-03-05 14:17:19.16115000 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【UPDATE】PROCESS: Receivable_mng_mdl->_update_credit SQL: UPDATE `t_receivable_data` SET `credit_mng_id` = '46227', `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '36870'
INFO  - 2019-03-05 14:17:19.18273800 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【INSERT】PROCESS: Setoff_del_mdl->regist_data SQL: INSERT INTO `t_credit_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `reconcile_date`, `reconcile_money`, `reconcile_type`, `credit_mng_id`) VALUES (1, 1, now(), '2019/02/28', 28566, 'S', 46227)
INFO  - 2019-03-05 14:17:19.22398800 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]【相殺消込処理   END】
INFO  - 2019-03-05 14:17:19.49681700 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:setoff_del  Method:index execution time=1.1764s
INFO  - 2019-03-05 14:17:22.95537400 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:setoff_del  Method:index
INFO  - 2019-03-05 14:17:23.24236800 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:setoff_del  Method:index execution time=0.3472s
INFO  - 2019-03-05 14:17:33.94379500 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:setoff_del  Method:index
INFO  - 2019-03-05 14:17:34.22097300 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:setoff_del  Method:index execution time=0.3450s
INFO  - 2019-03-05 14:17:48.31650800 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:setoff_del  Method:index
INFO  - 2019-03-05 14:17:48.59059100 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:setoff_del  Method:index execution time=0.3376s
INFO  - 2019-03-05 14:17:57.80210000 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_tran_list
INFO  - 2019-03-05 14:17:58.05501200 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:customer_tran_list execution time=0.3659s
INFO  - 2019-03-05 14:17:58.72697400 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_tran_list
INFO  - 2019-03-05 14:17:58.97584100 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:customer_tran_list execution time=0.3657s
INFO  - 2019-03-05 14:17:59.44379100 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_tran_list
INFO  - 2019-03-05 14:17:59.70857000 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:customer_tran_list execution time=0.3674s
INFO  - 2019-03-05 14:17:59.83039300 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_tran_list
INFO  - 2019-03-05 14:18:00.08058400 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:customer_tran_list execution time=0.3734s
INFO  - 2019-03-05 14:18:00.28993500 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_tran_list
INFO  - 2019-03-05 14:18:00.54269400 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:customer_tran_list execution time=0.3644s
INFO  - 2019-03-05 14:18:03.19349300 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:master_file_print  Method:index
INFO  - 2019-03-05 14:18:05.82295300 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:master_file_print  Method:index execution time=2.6500s
INFO  - 2019-03-05 14:20:03.40203000 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_tran_list
INFO  - 2019-03-05 14:20:03.65258800 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:customer_tran_list execution time=0.4063s
INFO  - 2019-03-05 14:20:04.30451200 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_tran_list
INFO  - 2019-03-05 14:20:04.58044800 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:ajax  Method:customer_tran_list execution time=0.3811s
INFO  - 2019-03-05 14:20:07.24816800 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-START> USER-ID: 1 Controller:master_file_print  Method:index
INFO  - 2019-03-05 14:20:09.68607000 --> [bdd5cd94bdb5cb3d8a9e1820e9be53cc]<PROCESS-END> Controller:master_file_print  Method:index execution time=2.4915s
INFO  - 2019-03-05 14:30:00.70486100 --> [f02008412693d4eb3b9f9c433f3bd716]<PROCESS-START> USER-ID:  Controller:receive_batch  Method:index
INFO  - 2019-03-05 14:30:00.73347800 --> [f02008412693d4eb3b9f9c433f3bd716]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_mng SQL: INSERT INTO `t_outside_receive_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `process_datetime`, `record_count`, `result`) VALUES (0, 0, now(), '201903051400', 7, 'ok')
INFO  - 2019-03-05 14:30:00.85814800 --> [f02008412693d4eb3b9f9c433f3bd716]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`, `sales_mng_id`, `sales_detail_id`) VALUES (0, 0, now(), '53105917', '53105917', 'unsent', '64047', '82217')
INFO  - 2019-03-05 14:30:00.87964400 --> [f02008412693d4eb3b9f9c433f3bd716]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1129, '53105917', '中央フードサービス株式会社', '53105917', '川島知剛', '立入検査（ソフトバンク本社社員食堂）', '70000', '3', 'ok', '')
INFO  - 2019-03-05 14:30:00.98473600 --> [f02008412693d4eb3b9f9c433f3bd716]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`) VALUES (0, 0, now(), '50500978', '50500978', 'unsent')
INFO  - 2019-03-05 14:30:01.00483400 --> [f02008412693d4eb3b9f9c433f3bd716]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1129, '50500978', '株式会社丸井グループ', '50500978', '川島知剛', '立入検査（マルイファミリー志木）＜定借ショップ＞', '150000', '3', 'ok', '')
INFO  - 2019-03-05 14:30:01.10735700 --> [f02008412693d4eb3b9f9c433f3bd716]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`, `sales_mng_id`, `sales_detail_id`) VALUES (0, 0, now(), '50400098', '50400098', 'unsent', '64080', '82255')
INFO  - 2019-03-05 14:30:01.12778300 --> [f02008412693d4eb3b9f9c433f3bd716]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1129, '50400098', '株式会社パルコ', '50400098', '川島知剛', '立入検査（クアトロラボ吉祥寺）', '18000', '3', 'ok', '')
INFO  - 2019-03-05 14:30:01.22977200 --> [f02008412693d4eb3b9f9c433f3bd716]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`, `sales_mng_id`, `sales_detail_id`) VALUES (0, 0, now(), '53105979', '53105979', 'unsent', '64255', '82448')
INFO  - 2019-03-05 14:30:01.25272800 --> [f02008412693d4eb3b9f9c433f3bd716]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1129, '53105979', '東京テアトル株式会社', '53105979', '川島知剛', '立入検査（和バル 三茶まれ）', '20000', '3', 'ok', '')
INFO  - 2019-03-05 14:30:01.36005800 --> [f02008412693d4eb3b9f9c433f3bd716]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`, `sales_mng_id`, `sales_detail_id`) VALUES (0, 0, now(), '53105980', '53105980', 'unsent', '64405', '82653')
INFO  - 2019-03-05 14:30:01.37960200 --> [f02008412693d4eb3b9f9c433f3bd716]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1129, '53105980', '株式会社伊勢屋', '53105980', '川島知剛', '立入検査', '20000', '3', 'ok', '')
INFO  - 2019-03-05 14:30:01.50488900 --> [f02008412693d4eb3b9f9c433f3bd716]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`, `sales_mng_id`, `sales_detail_id`) VALUES (0, 0, now(), '53106058', '53106058', 'unsent', '64458', '82716')
INFO  - 2019-03-05 14:30:01.52420700 --> [f02008412693d4eb3b9f9c433f3bd716]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1129, '53106058', '有限会社　北條', '53106058', '上代百合子', 'ジャム（苦情試験）', '20000', '3', 'ok', '')
INFO  - 2019-03-05 14:30:01.62614300 --> [f02008412693d4eb3b9f9c433f3bd716]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`, `sales_mng_id`, `sales_detail_id`) VALUES (0, 0, now(), '30002161', '30002161', 'unsent', '64556', '82892')
INFO  - 2019-03-05 14:30:01.64512500 --> [f02008412693d4eb3b9f9c433f3bd716]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1129, '30002161', '株式会社ICOMM', '30002161', '横田研太郎', 'コットンバッグ', '4200', '3', 'ok', '')
INFO  - 2019-03-05 14:30:01.66362700 --> [f02008412693d4eb3b9f9c433f3bd716]【UPDATE】PROCESS: Receive_batch_mdl->update_outside_receive_mng SQL: UPDATE `t_outside_receive_mng` SET `result` = 'ok', `last_user_id` = 0, `last_datetime` = now() WHERE `outside_receive_mng_id` =  1129
INFO  - 2019-03-05 14:30:01.74989300 --> [f02008412693d4eb3b9f9c433f3bd716]<PROCESS-END> Controller:receive_batch  Method:index execution time=1.5523s
INFO  - 2019-03-05 14:44:57.55085200 --> [ee5efafb367e73e058fbdda9b495042c]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-03-05 14:44:57.57767200 --> [ee5efafb367e73e058fbdda9b495042c]<PROCESS-END> Controller:login  Method:index execution time=0.1619s
INFO  - 2019-03-05 14:45:08.71984700 --> [ee5efafb367e73e058fbdda9b495042c]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-03-05 14:45:08.90471400 --> [ee5efafb367e73e058fbdda9b495042c]<PROCESS-START> USER-ID: 9 Controller:top  Method:index
INFO  - 2019-03-05 14:45:12.12843300 --> [ee5efafb367e73e058fbdda9b495042c]<PROCESS-START> USER-ID: 9 Controller:login  Method:index
INFO  - 2019-03-05 14:45:12.30280400 --> [ee5efafb367e73e058fbdda9b495042c]<PROCESS-START> USER-ID: 9 Controller:top  Method:index
INFO  - 2019-03-05 14:45:13.69412400 --> [ee5efafb367e73e058fbdda9b495042c]<PROCESS-END> Controller:top  Method:index execution time=4.8506s
INFO  - 2019-03-05 14:45:16.97471200 --> [ee5efafb367e73e058fbdda9b495042c]<PROCESS-START> USER-ID: 9 Controller:login  Method:index
INFO  - 2019-03-05 14:45:17.13235500 --> [ee5efafb367e73e058fbdda9b495042c]<PROCESS-START> USER-ID: 9 Controller:top  Method:index
INFO  - 2019-03-05 14:45:17.18358900 --> [ee5efafb367e73e058fbdda9b495042c]<PROCESS-END> Controller:top  Method:index execution time=4.9341s
INFO  - 2019-03-05 14:45:19.52457900 --> [ee5efafb367e73e058fbdda9b495042c]<PROCESS-START> USER-ID: 9 Controller:login  Method:index
INFO  - 2019-03-05 14:45:19.71000700 --> [ee5efafb367e73e058fbdda9b495042c]<PROCESS-START> USER-ID: 9 Controller:top  Method:index
INFO  - 2019-03-05 14:45:21.83608400 --> [ee5efafb367e73e058fbdda9b495042c]<PROCESS-END> Controller:top  Method:index execution time=4.7510s
INFO  - 2019-03-05 14:45:23.75008100 --> [ee5efafb367e73e058fbdda9b495042c]<PROCESS-START> USER-ID: 9 Controller:login  Method:index
INFO  - 2019-03-05 14:45:23.90654400 --> [ee5efafb367e73e058fbdda9b495042c]<PROCESS-START> USER-ID: 9 Controller:top  Method:index
INFO  - 2019-03-05 14:45:24.37040500 --> [ee5efafb367e73e058fbdda9b495042c]<PROCESS-END> Controller:top  Method:index execution time=4.7356s
INFO  - 2019-03-05 14:45:25.40374600 --> [ee5efafb367e73e058fbdda9b495042c]<PROCESS-START> USER-ID: 9 Controller:login  Method:index
INFO  - 2019-03-05 14:45:25.56642000 --> [ee5efafb367e73e058fbdda9b495042c]<PROCESS-START> USER-ID: 9 Controller:top  Method:index
INFO  - 2019-03-05 14:45:28.41531000 --> [ee5efafb367e73e058fbdda9b495042c]<PROCESS-END> Controller:top  Method:index execution time=4.5519s
INFO  - 2019-03-05 14:45:30.28551000 --> [ee5efafb367e73e058fbdda9b495042c]<PROCESS-END> Controller:top  Method:index execution time=4.7694s
INFO  - 2019-03-05 14:45:30.72874300 --> [ee5efafb367e73e058fbdda9b495042c]<PROCESS-START> USER-ID: 9 Controller:ajax  Method:daily_cnt_info
INFO  - 2019-03-05 14:45:31.14993500 --> [ee5efafb367e73e058fbdda9b495042c]<PROCESS-END> Controller:ajax  Method:daily_cnt_info execution time=0.5283s
INFO  - 2019-03-05 14:45:33.13342800 --> [ee5efafb367e73e058fbdda9b495042c]<PROCESS-START> USER-ID: 9 Controller:sales_spec_print  Method:index
INFO  - 2019-03-05 14:45:33.21584600 --> [ee5efafb367e73e058fbdda9b495042c]<PROCESS-END> Controller:sales_spec_print  Method:index execution time=0.1685s
INFO  - 2019-03-05 14:45:54.43031400 --> [ee5efafb367e73e058fbdda9b495042c]<PROCESS-START> USER-ID: 9 Controller:sales_spec_print  Method:index
ERROR - 2019-03-05 14:45:56.10399500 --> [ee5efafb367e73e058fbdda9b495042c]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"ee5efafb367e73e058fbdda9b495042c";s:10:"ip_address";s:13:"172.68.101.11";s:10:"user_agent";s:102:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36";s:13:"last_activity";i:1551764697;}c796218117039437f23c458046eee86d||0||/||||]
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

ERROR - 2019-03-05 14:45:56.14373400 --> [ee5efafb367e73e058fbdda9b495042c]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"ee5efafb367e73e058fbdda9b495042c";s:10:"ip_address";s:13:"172.68.101.11";s:10:"user_agent";s:102:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36";s:13:"last_activity";i:1551764697;}c796218117039437f23c458046eee86d||0||/||||]
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

ERROR - 2019-03-05 14:45:56.18786000 --> [ee5efafb367e73e058fbdda9b495042c]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"ee5efafb367e73e058fbdda9b495042c";s:10:"ip_address";s:13:"172.68.101.11";s:10:"user_agent";s:102:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36";s:13:"last_activity";i:1551764697;}c796218117039437f23c458046eee86d||0||/||||]
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

INFO  - 2019-03-05 14:45:56.21417600 --> [ee5efafb367e73e058fbdda9b495042c]<PROCESS-END> Controller:sales_spec_print  Method:index execution time=1.8205s
INFO  - 2019-03-05 14:50:38.56975500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-05 14:50:42.00718000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_list  Method:index execution time=3.5129s
INFO  - 2019-03-05 14:50:49.46816300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-05 14:50:50.50352400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_list  Method:index execution time=1.1183s
INFO  - 2019-03-05 14:50:57.51198900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-05 14:50:58.22634100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_list  Method:index execution time=0.7879s
INFO  - 2019-03-05 14:51:01.64568400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-05 14:51:02.36916300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_list  Method:index execution time=0.7974s
INFO  - 2019-03-05 14:51:06.34603700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-05 14:51:07.04206700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_list  Method:index execution time=0.7680s
INFO  - 2019-03-05 14:51:48.78867000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-05 14:51:49.52111500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_list  Method:index execution time=0.8025s
INFO  - 2019-03-05 15:06:44.43998600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-05 15:06:45.13849300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_list  Method:index execution time=0.7786s
INFO  - 2019-03-05 15:06:48.68458800 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:before_input_other  Method:index
INFO  - 2019-03-05 15:06:48.75920700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:before_input_other  Method:index execution time=0.2065s
INFO  - 2019-03-05 15:07:23.84606200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-05 15:07:24.53040500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_list  Method:index execution time=0.7574s
INFO  - 2019-03-05 15:16:47.11241400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-05 15:16:47.79631500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_list  Method:index execution time=0.7612s
INFO  - 2019-03-05 15:21:23.97791000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-05 15:21:24.08893800 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1729s
INFO  - 2019-03-05 15:21:35.12635500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-03-05 15:21:35.15787900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1434s
INFO  - 2019-03-05 15:21:40.57249400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_info
INFO  - 2019-03-05 15:21:40.59831400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:customer_info execution time=0.1346s
INFO  - 2019-03-05 15:22:30.43817400 --> [ad63d9ea6f2b77b7b8d8e643b4ae0edc]<PROCESS-START> USER-ID: 12 Controller:logout  Method:index
INFO  - 2019-03-05 15:22:30.69308100 --> [d1b612945f188f0ca85d188fe1dca729]<PROCESS-START> USER-ID:  Controller:logout  Method:index
INFO  - 2019-03-05 15:22:31.09277800 --> [57c5882033b40c5aaf907c445c6c95ed]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-03-05 15:22:31.12009900 --> [57c5882033b40c5aaf907c445c6c95ed]<PROCESS-END> Controller:login  Method:index execution time=0.1365s
INFO  - 2019-03-05 15:23:27.38692600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:customer_input  Method:index
INFO  - 2019-03-05 15:23:27.40737400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:customer_input  Method:index execution time=0.1365s
INFO  - 2019-03-05 15:23:30.77124500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_official_list
INFO  - 2019-03-05 15:23:30.79248200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:customer_official_list execution time=0.1304s
INFO  - 2019-03-05 15:23:31.19757700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_official_list
INFO  - 2019-03-05 15:23:31.21796500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:customer_official_list execution time=0.1249s
INFO  - 2019-03-05 15:23:35.65602600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_official_list
INFO  - 2019-03-05 15:23:35.67607900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:customer_official_list execution time=0.1347s
INFO  - 2019-03-05 15:25:14.50204000 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]<PROCESS-START> USER-ID: 1 Controller:setoff_del  Method:index
INFO  - 2019-03-05 15:25:14.75963600 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]<PROCESS-END> Controller:setoff_del  Method:index execution time=0.3440s
INFO  - 2019-03-05 15:26:04.70739900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:customer_input  Method:index
INFO  - 2019-03-05 15:26:04.72904300 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Customer_mdl->regist_data SQL: INSERT INTO `m_customer` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_name`, `customer_furi`, `customer_disp_name`, `handler_name`, `prefix_cd`, `depart_name`, `post_no_1`, `post_no_2`, `address`, `buil_name`, `tel_no_1`, `tel_no_2`, `tel_no_3`, `fax_no_1`, `fax_no_2`, `fax_no_3`, `card_print_type`, `customer_type`, `credit_type`, `memo`) VALUES (2, 2, now(), 'ホリアキ株式会社', 'ほりあき', 'ホリアキ株式会社', '課長　須崎剛', '001', '海外事業部', '577', '8537', '大阪府東大阪市長田中3-6-8', '', '06', '6744', '6095', '06', '6745', '9527', '0', '1', '1', '2019.3雑貨新規')
INFO  - 2019-03-05 15:26:04.76016100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:customer_input  Method:index execution time=0.1753s
INFO  - 2019-03-05 15:26:08.56614000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-03-05 15:26:08.58492900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1268s
INFO  - 2019-03-05 15:26:09.66211600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_info
INFO  - 2019-03-05 15:26:09.67829900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:customer_info execution time=0.1252s
INFO  - 2019-03-05 15:26:20.64989400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_list
INFO  - 2019-03-05 15:26:20.66426300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:handler_list execution time=0.1485s
INFO  - 2019-03-05 15:26:21.86594700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_info
INFO  - 2019-03-05 15:26:21.88014100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:handler_info execution time=0.1273s
INFO  - 2019-03-05 15:26:29.71659200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 15:26:29.72971700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1164s
INFO  - 2019-03-05 15:26:30.45078800 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 15:26:30.46502100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1267s
INFO  - 2019-03-05 15:26:37.22178000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-03-05 15:26:37.23606800 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1303s
INFO  - 2019-03-05 15:26:48.85111700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 15:26:48.86560900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1202s
INFO  - 2019-03-05 15:26:51.29628900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 15:26:51.31394600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1284s
INFO  - 2019-03-05 15:26:53.14986900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 15:26:53.16406000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1274s
INFO  - 2019-03-05 15:26:55.00047600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 15:26:55.01399200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1282s
INFO  - 2019-03-05 15:26:56.79855200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 15:26:56.81176700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1249s
INFO  - 2019-03-05 15:26:58.36569900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 15:26:58.37988600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1290s
INFO  - 2019-03-05 15:26:59.69139200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 15:26:59.70551400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1205s
INFO  - 2019-03-05 15:27:01.37523600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 15:27:01.38936700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1233s
INFO  - 2019-03-05 15:27:03.12206100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 15:27:03.13611700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1318s
INFO  - 2019-03-05 15:27:04.32234200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 15:27:04.33627500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1180s
INFO  - 2019-03-05 15:27:06.83264600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 15:27:06.84631200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1289s
INFO  - 2019-03-05 15:27:41.08646800 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-05 15:27:41.18575500 --> [437c385aef63764c2b58eb81d1b3faa7]【売上登録処理   START】
INFO  - 2019-03-05 15:27:41.19917400 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '2948', 'ホリアキ株式会社', '1', '1', '2019/03/05', '2019/03/05', '21', '白井小帆里', '1', '3', '1', '66000', '5280', '71280', NULL, NULL, NULL, '大阪研究所', '雑貨', '商品試験', 'ホリアキ株式会社', NULL, NULL, '1', 0)
INFO  - 2019-03-05 15:27:41.21267100 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '30002160', 'レジ袋', '3', '種', NULL, '6', '5280', '66000', '71280', '引張試験、伸び、衝撃試験、ヒートシール強さ、耐荷重試験', 64560)
INFO  - 2019-03-05 15:27:41.29677900 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Receivable_mng_mdl->_regist_mng SQL: INSERT INTO `t_receivable_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `target_month`, `customer_id`, `customer_disp_name`, `institute_id`, `institute_name`, `depart_id`, `depart_name`, `sales_money`) VALUES (2, 2, now(), '201903', '2948', 'ホリアキ株式会社', '1', '大阪研究所', '3', '雑貨', '71280')
INFO  - 2019-03-05 15:27:41.33016100 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), 37713, 64560, '2019/03/05', '71280')
INFO  - 2019-03-05 15:27:41.35359500 --> [437c385aef63764c2b58eb81d1b3faa7]【売上登録処理   END】
INFO  - 2019-03-05 15:27:41.41562000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_input  Method:index execution time=0.4410s
INFO  - 2019-03-05 15:27:42.73336400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-05 15:27:42.80682200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1422s
INFO  - 2019-03-05 15:27:45.10361100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-05 15:27:46.45993600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=1.4223s
INFO  - 2019-03-05 15:27:52.48032100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:output
INFO  - 2019-03-05 15:27:52.49413800 --> [437c385aef63764c2b58eb81d1b3faa7]【請求書発行処理   START)】
INFO  - 2019-03-05 15:27:52.70276700 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0049306', 'S', '2019/03/05', '1', 'ホリアキ株式会社', 'ホリアキ株式会社', '71280', '2019/03/05', '2948')
INFO  - 2019-03-05 15:27:52.71493900 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 49550, '64560')
INFO  - 2019-03-05 15:27:52.72792700 --> [437c385aef63764c2b58eb81d1b3faa7]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049306' WHERE `sales_mng_id` =  '64560'
INFO  - 2019-03-05 15:27:53.30637500 --> [437c385aef63764c2b58eb81d1b3faa7]【請求書発行処理   END)】
INFO  - 2019-03-05 15:27:53.38061300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:bill_sales_print  Method:output execution time=1.0025s
INFO  - 2019-03-05 15:27:54.63580700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-05 15:27:57.65924000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=3.0809s
INFO  - 2019-03-05 15:28:00.76392000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-03-05 15:28:00.77872900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1502s
INFO  - 2019-03-05 15:32:20.88609100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-05 15:32:24.80305700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_list  Method:index execution time=3.9976s
INFO  - 2019-03-05 15:32:28.39666600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-05 15:32:29.42399900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_list  Method:index execution time=1.1001s
INFO  - 2019-03-05 15:32:48.74763400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:edit
INFO  - 2019-03-05 15:32:48.85682000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_input  Method:edit execution time=0.1824s
INFO  - 2019-03-05 15:32:53.85064700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-05 15:32:54.84554800 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_list  Method:index execution time=1.0632s
INFO  - 2019-03-05 15:33:02.30761200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-03-05 15:33:02.42112300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.1867s
INFO  - 2019-03-05 15:33:06.24376900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-05 15:33:07.23812100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_list  Method:index execution time=1.0670s
INFO  - 2019-03-05 15:33:13.82673600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-03-05 15:33:13.94068500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.1885s
INFO  - 2019-03-05 15:33:17.06048400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-05 15:33:18.07062600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_list  Method:index execution time=1.0790s
INFO  - 2019-03-05 15:33:23.26042500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:edit
INFO  - 2019-03-05 15:33:23.36952200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_input  Method:edit execution time=0.1846s
INFO  - 2019-03-05 15:34:05.04460300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:edit
INFO  - 2019-03-05 15:34:05.20188800 --> [437c385aef63764c2b58eb81d1b3faa7]【売上変更処理   START】
INFO  - 2019-03-05 15:34:05.22380900 --> [437c385aef63764c2b58eb81d1b3faa7]【UPDATE】PROCESS: Sales_mdl->update_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `customer_id` = '677', `customer_disp_name` = '株式会社堂島スウィーツ', `credit_type` = '1', `customer_type` = '1', `bill_date` = '2019/02/26', `book_date` = '2019/02/26', `handler_id` = '34', `handler_name` = '吉田晃', `institute_id` = '1', `depart_id` = '1', `abstract_id` = '1', `sum_no_tax` = '30000', `sum_tax` = '2400', `sum_money` = '32400', `sep_month_from` = NULL, `sep_month_to` = NULL, `cutoff_date` = NULL, `institute_name` = '大阪研究所', `depart_name` = '食品', `abstract_name` = '商品試験', `customer_name` = '株式会社堂島スウィーツ', `cutoff_date_from` = NULL, `cutoff_date_to` = NULL, `sep_depart_flg` = 0 WHERE `sales_mng_id` =  '64367'
INFO  - 2019-03-05 15:34:05.23731100 --> [437c385aef63764c2b58eb81d1b3faa7]【DELETE(物理削除)】PROCESS: Sales_mdl->update_data SQL: DELETE FROM `t_sales_detail`
WHERE `sales_mng_id` =  '64367'
INFO  - 2019-03-05 15:34:05.26559800 --> [437c385aef63764c2b58eb81d1b3faa7]【UPDATE】PROCESS: Sales_mdl->nullupdate_outside_relation SQL: UPDATE `t_outside_relation` SET `sales_mng_id` = NULL, `sales_detail_id` = NULL, `last_user_id` = 2, `last_datetime` = now() WHERE `sales_mng_id` =  '64367'
INFO  - 2019-03-05 15:34:05.28036600 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Sales_mdl->update_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '40011050', '洋生菓子　細菌検査', '2', NULL, NULL, '6', '2400', '30000', '32400', '工房より抽出', '64367')
INFO  - 2019-03-05 15:34:05.29388500 --> [437c385aef63764c2b58eb81d1b3faa7]【DELETE(物理削除)】PROCESS: Sales_mdl->update_data SQL: DELETE FROM `t_sales_before`
WHERE `sales_mng_id` =  '64367'
INFO  - 2019-03-05 15:34:05.32486200 --> [437c385aef63764c2b58eb81d1b3faa7]【DELETE(物理削除)】PROCESS: Sales_mdl->update_data SQL: DELETE FROM `t_sales_depart`
WHERE `sales_mng_id` =  '64367'
INFO  - 2019-03-05 15:34:05.33887200 --> [437c385aef63764c2b58eb81d1b3faa7]【UPDATE】PROCESS: Sales_mdl->update_bill_data SQL: UPDATE `t_bill_mng` SET `credit_type` = '1', `last_user_id` = 2, `last_datetime` = now() WHERE `bill_mng_id` =  '49314'
INFO  - 2019-03-05 15:34:05.50053400 --> [437c385aef63764c2b58eb81d1b3faa7]【DELETE(物理削除)】PROCESS: Receivable_mng_mdl->back_sales_data SQL: DELETE FROM `t_receivable_data`
WHERE `sales_mng_id` =  '64367'
INFO  - 2019-03-05 15:34:05.51509300 --> [437c385aef63764c2b58eb81d1b3faa7]【UPDATE】PROCESS: Receivable_mng_mdl->back_sales_data SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money - 32400, `last_user_id` = 2, `last_datetime` = now() WHERE `receivable_mng_id` =  '37601'
INFO  - 2019-03-05 15:34:05.54342600 --> [437c385aef63764c2b58eb81d1b3faa7]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_mng SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money + 32400, `last_user_id` = 2, `last_datetime` = now() WHERE `target_month` =  '201902' AND `customer_disp_name` =  '株式会社堂島スウィーツ' AND `institute_id` =  '1' AND `depart_id` =  '1'
INFO  - 2019-03-05 15:34:05.55898800 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), '37601', '64367', '2019/02/26', '32400')
INFO  - 2019-03-05 15:34:05.62305800 --> [437c385aef63764c2b58eb81d1b3faa7]【売上変更処理   END】
INFO  - 2019-03-05 15:34:05.69313400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_input  Method:edit execution time=0.7515s
INFO  - 2019-03-05 15:34:07.24645300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-05 15:34:08.22091200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_list  Method:index execution time=1.0463s
INFO  - 2019-03-05 15:36:44.85378900 --> [618a9d6e9f3370712fa346266e14ff59]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-03-05 15:36:44.87020700 --> [618a9d6e9f3370712fa346266e14ff59]<PROCESS-END> Controller:login  Method:index execution time=0.1327s
INFO  - 2019-03-05 15:36:46.20743900 --> [618a9d6e9f3370712fa346266e14ff59]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-03-05 15:36:46.37038000 --> [618a9d6e9f3370712fa346266e14ff59]<PROCESS-START> USER-ID: 21 Controller:top  Method:index
INFO  - 2019-03-05 15:36:51.35796300 --> [618a9d6e9f3370712fa346266e14ff59]<PROCESS-END> Controller:top  Method:index execution time=5.0245s
INFO  - 2019-03-05 15:36:51.82084300 --> [618a9d6e9f3370712fa346266e14ff59]<PROCESS-START> USER-ID: 21 Controller:ajax  Method:daily_cnt_info
INFO  - 2019-03-05 15:36:52.20537600 --> [618a9d6e9f3370712fa346266e14ff59]<PROCESS-END> Controller:ajax  Method:daily_cnt_info execution time=0.4945s
INFO  - 2019-03-05 15:36:53.61367000 --> [618a9d6e9f3370712fa346266e14ff59]<PROCESS-START> USER-ID: 21 Controller:sales_spec_print  Method:index
INFO  - 2019-03-05 15:36:53.68028900 --> [618a9d6e9f3370712fa346266e14ff59]<PROCESS-END> Controller:sales_spec_print  Method:index execution time=0.1629s
INFO  - 2019-03-05 15:37:55.26280500 --> [618a9d6e9f3370712fa346266e14ff59]<PROCESS-START> USER-ID: 21 Controller:sales_spec_print  Method:index
INFO  - 2019-03-05 15:43:43.21288100 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]<PROCESS-START> USER-ID: 1 Controller:setoff_del  Method:index
INFO  - 2019-03-05 15:43:43.23145700 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【相殺消込処理   START】
INFO  - 2019-03-05 15:43:43.24723000 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【INSERT】PROCESS: Setoff_del_mdl->regist_data SQL: INSERT INTO `t_credit_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_money`, `bill_mng_id`, `reconcile_status`, `sum_credit_money`, `sum_balance_money`) VALUES (1, 1, now(), 'SKK0048711', '10800', '48941', '2', 10800, 0)
INFO  - 2019-03-05 15:43:43.26279300 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Credit_common_mdl->update_reconcile_status SQL: UPDATE `t_credit_mng` SET `reconcile_status` = '2', `last_user_id` = 1, `last_datetime` = now() WHERE `credit_mng_id` =  46228
INFO  - 2019-03-05 15:43:43.27737300 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Credit_common_mdl->update_sales_mng SQL: UPDATE `t_sales_mng` SET `data_status_type` = '3', `last_user_id` = 1, `last_datetime` = now() WHERE `sales_mng_id` in (63934) AND `data_status_type` =  '2'
INFO  - 2019-03-05 15:43:43.34306300 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_credit SQL: UPDATE `t_receivable_mng` SET `credit_money` = credit_money + 10800, `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37169'
INFO  - 2019-03-05 15:43:43.35630800 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Receivable_mng_mdl->_update_credit SQL: UPDATE `t_receivable_data` SET `credit_mng_id` = '46228', `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37169'
INFO  - 2019-03-05 15:43:43.36861300 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【INSERT】PROCESS: Setoff_del_mdl->regist_data SQL: INSERT INTO `t_credit_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `reconcile_date`, `reconcile_money`, `reconcile_type`, `credit_mng_id`) VALUES (1, 1, now(), '2019/02/28', 10800, 'S', 46228)
INFO  - 2019-03-05 15:43:43.38235200 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【INSERT】PROCESS: Setoff_del_mdl->regist_data SQL: INSERT INTO `t_credit_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_money`, `bill_mng_id`, `reconcile_status`, `sum_credit_money`, `sum_balance_money`) VALUES (1, 1, now(), 'SKK0048722', '5400', '48952', '2', 5400, 0)
INFO  - 2019-03-05 15:43:43.39635000 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Credit_common_mdl->update_reconcile_status SQL: UPDATE `t_credit_mng` SET `reconcile_status` = '2', `last_user_id` = 1, `last_datetime` = now() WHERE `credit_mng_id` =  46229
INFO  - 2019-03-05 15:43:43.41100800 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Credit_common_mdl->update_sales_mng SQL: UPDATE `t_sales_mng` SET `data_status_type` = '3', `last_user_id` = 1, `last_datetime` = now() WHERE `sales_mng_id` in (63945) AND `data_status_type` =  '2'
INFO  - 2019-03-05 15:43:43.47737100 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_credit SQL: UPDATE `t_receivable_mng` SET `credit_money` = credit_money + 5400, `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37216'
INFO  - 2019-03-05 15:43:43.49096800 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Receivable_mng_mdl->_update_credit SQL: UPDATE `t_receivable_data` SET `credit_mng_id` = '46229', `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37216'
INFO  - 2019-03-05 15:43:43.50324500 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【INSERT】PROCESS: Setoff_del_mdl->regist_data SQL: INSERT INTO `t_credit_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `reconcile_date`, `reconcile_money`, `reconcile_type`, `credit_mng_id`) VALUES (1, 1, now(), '2019/02/28', 5400, 'S', 46229)
INFO  - 2019-03-05 15:43:43.51625400 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【INSERT】PROCESS: Setoff_del_mdl->regist_data SQL: INSERT INTO `t_credit_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_money`, `bill_mng_id`, `reconcile_status`, `sum_credit_money`, `sum_balance_money`) VALUES (1, 1, now(), 'SKK0048715', '10800', '48945', '2', 10800, 0)
INFO  - 2019-03-05 15:43:43.52919300 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Credit_common_mdl->update_reconcile_status SQL: UPDATE `t_credit_mng` SET `reconcile_status` = '2', `last_user_id` = 1, `last_datetime` = now() WHERE `credit_mng_id` =  46230
INFO  - 2019-03-05 15:43:43.54236500 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Credit_common_mdl->update_sales_mng SQL: UPDATE `t_sales_mng` SET `data_status_type` = '3', `last_user_id` = 1, `last_datetime` = now() WHERE `sales_mng_id` in (63938) AND `data_status_type` =  '2'
INFO  - 2019-03-05 15:43:43.60175700 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_credit SQL: UPDATE `t_receivable_mng` SET `credit_money` = credit_money + 10800, `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37322'
INFO  - 2019-03-05 15:43:43.61393700 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Receivable_mng_mdl->_update_credit SQL: UPDATE `t_receivable_data` SET `credit_mng_id` = '46230', `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37322'
INFO  - 2019-03-05 15:43:43.62539200 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【INSERT】PROCESS: Setoff_del_mdl->regist_data SQL: INSERT INTO `t_credit_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `reconcile_date`, `reconcile_money`, `reconcile_type`, `credit_mng_id`) VALUES (1, 1, now(), '2019/02/28', 10800, 'S', 46230)
INFO  - 2019-03-05 15:43:43.63776000 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【INSERT】PROCESS: Setoff_del_mdl->regist_data SQL: INSERT INTO `t_credit_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_money`, `bill_mng_id`, `reconcile_status`, `sum_credit_money`, `sum_balance_money`) VALUES (1, 1, now(), 'SKK0048723', '10800', '48953', '2', 10800, 0)
INFO  - 2019-03-05 15:43:43.65001200 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Credit_common_mdl->update_reconcile_status SQL: UPDATE `t_credit_mng` SET `reconcile_status` = '2', `last_user_id` = 1, `last_datetime` = now() WHERE `credit_mng_id` =  46231
INFO  - 2019-03-05 15:43:43.66395100 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Credit_common_mdl->update_sales_mng SQL: UPDATE `t_sales_mng` SET `data_status_type` = '3', `last_user_id` = 1, `last_datetime` = now() WHERE `sales_mng_id` in (63946) AND `data_status_type` =  '2'
INFO  - 2019-03-05 15:43:43.73050500 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_credit SQL: UPDATE `t_receivable_mng` SET `credit_money` = credit_money + 10800, `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37327'
INFO  - 2019-03-05 15:43:43.74388600 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Receivable_mng_mdl->_update_credit SQL: UPDATE `t_receivable_data` SET `credit_mng_id` = '46231', `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37327'
INFO  - 2019-03-05 15:43:43.75790100 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【INSERT】PROCESS: Setoff_del_mdl->regist_data SQL: INSERT INTO `t_credit_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `reconcile_date`, `reconcile_money`, `reconcile_type`, `credit_mng_id`) VALUES (1, 1, now(), '2019/02/28', 10800, 'S', 46231)
INFO  - 2019-03-05 15:43:43.77203100 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【INSERT】PROCESS: Setoff_del_mdl->regist_data SQL: INSERT INTO `t_credit_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_money`, `bill_mng_id`, `reconcile_status`, `sum_credit_money`, `sum_balance_money`) VALUES (1, 1, now(), 'SKK0048720', '5400', '48950', '2', 5400, 0)
INFO  - 2019-03-05 15:43:43.78597100 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Credit_common_mdl->update_reconcile_status SQL: UPDATE `t_credit_mng` SET `reconcile_status` = '2', `last_user_id` = 1, `last_datetime` = now() WHERE `credit_mng_id` =  46232
INFO  - 2019-03-05 15:43:43.80021700 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Credit_common_mdl->update_sales_mng SQL: UPDATE `t_sales_mng` SET `data_status_type` = '3', `last_user_id` = 1, `last_datetime` = now() WHERE `sales_mng_id` in (63943) AND `data_status_type` =  '2'
INFO  - 2019-03-05 15:43:43.86549000 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_credit SQL: UPDATE `t_receivable_mng` SET `credit_money` = credit_money + 5400, `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37183'
INFO  - 2019-03-05 15:43:43.87881000 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Receivable_mng_mdl->_update_credit SQL: UPDATE `t_receivable_data` SET `credit_mng_id` = '46232', `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37183'
INFO  - 2019-03-05 15:43:43.89301100 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【INSERT】PROCESS: Setoff_del_mdl->regist_data SQL: INSERT INTO `t_credit_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `reconcile_date`, `reconcile_money`, `reconcile_type`, `credit_mng_id`) VALUES (1, 1, now(), '2019/02/28', 5400, 'S', 46232)
INFO  - 2019-03-05 15:43:43.90719900 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【INSERT】PROCESS: Setoff_del_mdl->regist_data SQL: INSERT INTO `t_credit_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_money`, `bill_mng_id`, `reconcile_status`, `sum_credit_money`, `sum_balance_money`) VALUES (1, 1, now(), 'SKK0048721', '10800', '48951', '2', 10800, 0)
INFO  - 2019-03-05 15:43:43.92120200 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Credit_common_mdl->update_reconcile_status SQL: UPDATE `t_credit_mng` SET `reconcile_status` = '2', `last_user_id` = 1, `last_datetime` = now() WHERE `credit_mng_id` =  46233
INFO  - 2019-03-05 15:43:43.93542300 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Credit_common_mdl->update_sales_mng SQL: UPDATE `t_sales_mng` SET `data_status_type` = '3', `last_user_id` = 1, `last_datetime` = now() WHERE `sales_mng_id` in (63944) AND `data_status_type` =  '2'
INFO  - 2019-03-05 15:43:43.00078900 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_credit SQL: UPDATE `t_receivable_mng` SET `credit_money` = credit_money + 10800, `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37183'
INFO  - 2019-03-05 15:43:44.01420700 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Receivable_mng_mdl->_update_credit SQL: UPDATE `t_receivable_data` SET `credit_mng_id` = '46233', `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37183'
INFO  - 2019-03-05 15:43:44.02810700 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【INSERT】PROCESS: Setoff_del_mdl->regist_data SQL: INSERT INTO `t_credit_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `reconcile_date`, `reconcile_money`, `reconcile_type`, `credit_mng_id`) VALUES (1, 1, now(), '2019/02/28', 10800, 'S', 46233)
INFO  - 2019-03-05 15:43:44.04240000 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【INSERT】PROCESS: Setoff_del_mdl->regist_data SQL: INSERT INTO `t_credit_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_money`, `bill_mng_id`, `reconcile_status`, `sum_credit_money`, `sum_balance_money`) VALUES (1, 1, now(), 'SKK0048712', '10800', '48942', '2', 10800, 0)
INFO  - 2019-03-05 15:43:44.05813900 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Credit_common_mdl->update_reconcile_status SQL: UPDATE `t_credit_mng` SET `reconcile_status` = '2', `last_user_id` = 1, `last_datetime` = now() WHERE `credit_mng_id` =  46234
INFO  - 2019-03-05 15:43:44.07354900 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Credit_common_mdl->update_sales_mng SQL: UPDATE `t_sales_mng` SET `data_status_type` = '3', `last_user_id` = 1, `last_datetime` = now() WHERE `sales_mng_id` in (63935) AND `data_status_type` =  '2'
INFO  - 2019-03-05 15:43:44.13935900 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_credit SQL: UPDATE `t_receivable_mng` SET `credit_money` = credit_money + 10800, `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37321'
INFO  - 2019-03-05 15:43:44.15269400 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Receivable_mng_mdl->_update_credit SQL: UPDATE `t_receivable_data` SET `credit_mng_id` = '46234', `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37321'
INFO  - 2019-03-05 15:43:44.16516800 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【INSERT】PROCESS: Setoff_del_mdl->regist_data SQL: INSERT INTO `t_credit_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `reconcile_date`, `reconcile_money`, `reconcile_type`, `credit_mng_id`) VALUES (1, 1, now(), '2019/02/28', 10800, 'S', 46234)
INFO  - 2019-03-05 15:43:44.17840700 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【INSERT】PROCESS: Setoff_del_mdl->regist_data SQL: INSERT INTO `t_credit_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_money`, `bill_mng_id`, `reconcile_status`, `sum_credit_money`, `sum_balance_money`) VALUES (1, 1, now(), 'SKK0048713', '21600', '48943', '2', 21600, 0)
INFO  - 2019-03-05 15:43:44.19149600 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Credit_common_mdl->update_reconcile_status SQL: UPDATE `t_credit_mng` SET `reconcile_status` = '2', `last_user_id` = 1, `last_datetime` = now() WHERE `credit_mng_id` =  46235
INFO  - 2019-03-05 15:43:44.20482600 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Credit_common_mdl->update_sales_mng SQL: UPDATE `t_sales_mng` SET `data_status_type` = '3', `last_user_id` = 1, `last_datetime` = now() WHERE `sales_mng_id` in (63936) AND `data_status_type` =  '2'
INFO  - 2019-03-05 15:43:44.27061900 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_credit SQL: UPDATE `t_receivable_mng` SET `credit_money` = credit_money + 21600, `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37219'
INFO  - 2019-03-05 15:43:44.28547700 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Receivable_mng_mdl->_update_credit SQL: UPDATE `t_receivable_data` SET `credit_mng_id` = '46235', `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37219'
INFO  - 2019-03-05 15:43:44.29894200 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【INSERT】PROCESS: Setoff_del_mdl->regist_data SQL: INSERT INTO `t_credit_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `reconcile_date`, `reconcile_money`, `reconcile_type`, `credit_mng_id`) VALUES (1, 1, now(), '2019/02/28', 21600, 'S', 46235)
INFO  - 2019-03-05 15:43:44.31312800 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【INSERT】PROCESS: Setoff_del_mdl->regist_data SQL: INSERT INTO `t_credit_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_money`, `bill_mng_id`, `reconcile_status`, `sum_credit_money`, `sum_balance_money`) VALUES (1, 1, now(), 'SKK0048716', '10800', '48946', '2', 10800, 0)
INFO  - 2019-03-05 15:43:44.32737800 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Credit_common_mdl->update_reconcile_status SQL: UPDATE `t_credit_mng` SET `reconcile_status` = '2', `last_user_id` = 1, `last_datetime` = now() WHERE `credit_mng_id` =  46236
INFO  - 2019-03-05 15:43:44.34182500 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Credit_common_mdl->update_sales_mng SQL: UPDATE `t_sales_mng` SET `data_status_type` = '3', `last_user_id` = 1, `last_datetime` = now() WHERE `sales_mng_id` in (63939) AND `data_status_type` =  '2'
INFO  - 2019-03-05 15:43:44.40550400 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_credit SQL: UPDATE `t_receivable_mng` SET `credit_money` = credit_money + 10800, `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37323'
INFO  - 2019-03-05 15:43:44.41799000 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Receivable_mng_mdl->_update_credit SQL: UPDATE `t_receivable_data` SET `credit_mng_id` = '46236', `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37323'
INFO  - 2019-03-05 15:43:44.43082000 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【INSERT】PROCESS: Setoff_del_mdl->regist_data SQL: INSERT INTO `t_credit_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `reconcile_date`, `reconcile_money`, `reconcile_type`, `credit_mng_id`) VALUES (1, 1, now(), '2019/02/28', 10800, 'S', 46236)
INFO  - 2019-03-05 15:43:44.44465600 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【INSERT】PROCESS: Setoff_del_mdl->regist_data SQL: INSERT INTO `t_credit_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_money`, `bill_mng_id`, `reconcile_status`, `sum_credit_money`, `sum_balance_money`) VALUES (1, 1, now(), 'SKK0048717', '21600', '48947', '2', 21600, 0)
INFO  - 2019-03-05 15:43:44.45912500 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Credit_common_mdl->update_reconcile_status SQL: UPDATE `t_credit_mng` SET `reconcile_status` = '2', `last_user_id` = 1, `last_datetime` = now() WHERE `credit_mng_id` =  46237
INFO  - 2019-03-05 15:43:44.47420800 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Credit_common_mdl->update_sales_mng SQL: UPDATE `t_sales_mng` SET `data_status_type` = '3', `last_user_id` = 1, `last_datetime` = now() WHERE `sales_mng_id` in (63940) AND `data_status_type` =  '2'
INFO  - 2019-03-05 15:43:44.54252800 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_credit SQL: UPDATE `t_receivable_mng` SET `credit_money` = credit_money + 21600, `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37324'
INFO  - 2019-03-05 15:43:44.55581400 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Receivable_mng_mdl->_update_credit SQL: UPDATE `t_receivable_data` SET `credit_mng_id` = '46237', `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37324'
INFO  - 2019-03-05 15:43:44.56797100 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【INSERT】PROCESS: Setoff_del_mdl->regist_data SQL: INSERT INTO `t_credit_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `reconcile_date`, `reconcile_money`, `reconcile_type`, `credit_mng_id`) VALUES (1, 1, now(), '2019/02/28', 21600, 'S', 46237)
INFO  - 2019-03-05 15:43:44.58159300 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【INSERT】PROCESS: Setoff_del_mdl->regist_data SQL: INSERT INTO `t_credit_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_money`, `bill_mng_id`, `reconcile_status`, `sum_credit_money`, `sum_balance_money`) VALUES (1, 1, now(), 'SKK0048710', '10800', '48940', '2', 10800, 0)
INFO  - 2019-03-05 15:43:44.59562600 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Credit_common_mdl->update_reconcile_status SQL: UPDATE `t_credit_mng` SET `reconcile_status` = '2', `last_user_id` = 1, `last_datetime` = now() WHERE `credit_mng_id` =  46238
INFO  - 2019-03-05 15:43:44.61056700 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Credit_common_mdl->update_sales_mng SQL: UPDATE `t_sales_mng` SET `data_status_type` = '3', `last_user_id` = 1, `last_datetime` = now() WHERE `sales_mng_id` in (63933) AND `data_status_type` =  '2'
INFO  - 2019-03-05 15:43:44.67869800 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_credit SQL: UPDATE `t_receivable_mng` SET `credit_money` = credit_money + 10800, `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37320'
INFO  - 2019-03-05 15:43:44.69117900 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Receivable_mng_mdl->_update_credit SQL: UPDATE `t_receivable_data` SET `credit_mng_id` = '46238', `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37320'
INFO  - 2019-03-05 15:43:44.70370700 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【INSERT】PROCESS: Setoff_del_mdl->regist_data SQL: INSERT INTO `t_credit_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `reconcile_date`, `reconcile_money`, `reconcile_type`, `credit_mng_id`) VALUES (1, 1, now(), '2019/02/28', 10800, 'S', 46238)
INFO  - 2019-03-05 15:43:44.71695300 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【INSERT】PROCESS: Setoff_del_mdl->regist_data SQL: INSERT INTO `t_credit_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_money`, `bill_mng_id`, `reconcile_status`, `sum_credit_money`, `sum_balance_money`) VALUES (1, 1, now(), 'SKK0048718', '10800', '48948', '2', 10800, 0)
INFO  - 2019-03-05 15:43:44.73049400 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Credit_common_mdl->update_reconcile_status SQL: UPDATE `t_credit_mng` SET `reconcile_status` = '2', `last_user_id` = 1, `last_datetime` = now() WHERE `credit_mng_id` =  46239
INFO  - 2019-03-05 15:43:44.74454600 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Credit_common_mdl->update_sales_mng SQL: UPDATE `t_sales_mng` SET `data_status_type` = '3', `last_user_id` = 1, `last_datetime` = now() WHERE `sales_mng_id` in (63941) AND `data_status_type` =  '2'
INFO  - 2019-03-05 15:43:44.81119900 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_credit SQL: UPDATE `t_receivable_mng` SET `credit_money` = credit_money + 10800, `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37325'
INFO  - 2019-03-05 15:43:44.82552900 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Receivable_mng_mdl->_update_credit SQL: UPDATE `t_receivable_data` SET `credit_mng_id` = '46239', `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37325'
INFO  - 2019-03-05 15:43:44.83807800 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【INSERT】PROCESS: Setoff_del_mdl->regist_data SQL: INSERT INTO `t_credit_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `reconcile_date`, `reconcile_money`, `reconcile_type`, `credit_mng_id`) VALUES (1, 1, now(), '2019/02/28', 10800, 'S', 46239)
INFO  - 2019-03-05 15:43:44.85135900 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【INSERT】PROCESS: Setoff_del_mdl->regist_data SQL: INSERT INTO `t_credit_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_money`, `bill_mng_id`, `reconcile_status`, `sum_credit_money`, `sum_balance_money`) VALUES (1, 1, now(), 'SKK0048719', '10800', '48949', '2', 10800, 0)
INFO  - 2019-03-05 15:43:44.86459600 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Credit_common_mdl->update_reconcile_status SQL: UPDATE `t_credit_mng` SET `reconcile_status` = '2', `last_user_id` = 1, `last_datetime` = now() WHERE `credit_mng_id` =  46240
INFO  - 2019-03-05 15:43:44.87808500 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Credit_common_mdl->update_sales_mng SQL: UPDATE `t_sales_mng` SET `data_status_type` = '3', `last_user_id` = 1, `last_datetime` = now() WHERE `sales_mng_id` in (63942) AND `data_status_type` =  '2'
INFO  - 2019-03-05 15:43:44.94378400 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_credit SQL: UPDATE `t_receivable_mng` SET `credit_money` = credit_money + 10800, `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37326'
INFO  - 2019-03-05 15:43:44.95869100 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Receivable_mng_mdl->_update_credit SQL: UPDATE `t_receivable_data` SET `credit_mng_id` = '46240', `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37326'
INFO  - 2019-03-05 15:43:44.97293800 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【INSERT】PROCESS: Setoff_del_mdl->regist_data SQL: INSERT INTO `t_credit_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `reconcile_date`, `reconcile_money`, `reconcile_type`, `credit_mng_id`) VALUES (1, 1, now(), '2019/02/28', 10800, 'S', 46240)
INFO  - 2019-03-05 15:43:44.98791600 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【INSERT】PROCESS: Setoff_del_mdl->regist_data SQL: INSERT INTO `t_credit_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_money`, `bill_mng_id`, `reconcile_status`, `sum_credit_money`, `sum_balance_money`) VALUES (1, 1, now(), 'SKK0048714', '21600', '48944', '2', 21600, 0)
INFO  - 2019-03-05 15:43:45.00277800 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Credit_common_mdl->update_reconcile_status SQL: UPDATE `t_credit_mng` SET `reconcile_status` = '2', `last_user_id` = 1, `last_datetime` = now() WHERE `credit_mng_id` =  46241
INFO  - 2019-03-05 15:43:45.01781700 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Credit_common_mdl->update_sales_mng SQL: UPDATE `t_sales_mng` SET `data_status_type` = '3', `last_user_id` = 1, `last_datetime` = now() WHERE `sales_mng_id` in (63937) AND `data_status_type` =  '2'
INFO  - 2019-03-05 15:43:45.08267600 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_credit SQL: UPDATE `t_receivable_mng` SET `credit_money` = credit_money + 21600, `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37190'
INFO  - 2019-03-05 15:43:45.09650400 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Receivable_mng_mdl->_update_credit SQL: UPDATE `t_receivable_data` SET `credit_mng_id` = '46241', `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37190'
INFO  - 2019-03-05 15:43:45.11117800 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【INSERT】PROCESS: Setoff_del_mdl->regist_data SQL: INSERT INTO `t_credit_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `reconcile_date`, `reconcile_money`, `reconcile_type`, `credit_mng_id`) VALUES (1, 1, now(), '2019/02/28', 21600, 'S', 46241)
INFO  - 2019-03-05 15:43:45.13342300 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【相殺消込処理   END】
INFO  - 2019-03-05 15:43:45.40608900 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]<PROCESS-END> Controller:setoff_del  Method:index execution time=2.3254s
INFO  - 2019-03-05 15:45:00.06950100 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]<PROCESS-START> USER-ID: 1 Controller:setoff_del  Method:index
INFO  - 2019-03-05 15:45:00.32359400 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]<PROCESS-END> Controller:setoff_del  Method:index execution time=0.3204s
INFO  - 2019-03-05 15:48:59.58519800 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]<PROCESS-START> USER-ID: 1 Controller:setoff_del  Method:index
INFO  - 2019-03-05 15:48:59.85054500 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]<PROCESS-END> Controller:setoff_del  Method:index execution time=0.3328s
INFO  - 2019-03-05 15:55:22.58050100 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]<PROCESS-START> USER-ID: 1 Controller:setoff_del  Method:index
INFO  - 2019-03-05 15:55:22.59756700 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【相殺消込処理   START】
INFO  - 2019-03-05 15:55:22.61323700 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【INSERT】PROCESS: Setoff_del_mdl->regist_data SQL: INSERT INTO `t_credit_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_money`, `bill_mng_id`, `reconcile_status`, `sum_credit_money`, `sum_balance_money`) VALUES (1, 1, now(), 'SKK0048461', '430974', '48684', '2', 430974, 0)
INFO  - 2019-03-05 15:55:22.62980700 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Credit_common_mdl->update_reconcile_status SQL: UPDATE `t_credit_mng` SET `reconcile_status` = '2', `last_user_id` = 1, `last_datetime` = now() WHERE `credit_mng_id` =  46242
INFO  - 2019-03-05 15:55:22.64543200 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Credit_common_mdl->update_sales_mng SQL: UPDATE `t_sales_mng` SET `data_status_type` = '3', `last_user_id` = 1, `last_datetime` = now() WHERE `sales_mng_id` in (63629) AND `data_status_type` =  '2'
INFO  - 2019-03-05 15:55:22.71199800 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_credit SQL: UPDATE `t_receivable_mng` SET `credit_money` = credit_money + 430974, `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37129'
INFO  - 2019-03-05 15:55:22.72594500 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Receivable_mng_mdl->_update_credit SQL: UPDATE `t_receivable_data` SET `credit_mng_id` = '46242', `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37129'
INFO  - 2019-03-05 15:55:22.73881100 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【INSERT】PROCESS: Setoff_del_mdl->regist_data SQL: INSERT INTO `t_credit_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `reconcile_date`, `reconcile_money`, `reconcile_type`, `credit_mng_id`) VALUES (1, 1, now(), '2019/02/28', 430974, 'S', 46242)
INFO  - 2019-03-05 15:55:22.76892800 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【相殺消込処理   END】
INFO  - 2019-03-05 15:55:23.05321200 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]<PROCESS-END> Controller:setoff_del  Method:index execution time=0.5539s
INFO  - 2019-03-05 15:56:06.33753900 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]<PROCESS-START> USER-ID: 1 Controller:setoff_del  Method:index
INFO  - 2019-03-05 15:56:06.62054100 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]<PROCESS-END> Controller:setoff_del  Method:index execution time=0.3514s
INFO  - 2019-03-05 15:57:12.46465100 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_tran_list
INFO  - 2019-03-05 15:57:12.70433300 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]<PROCESS-END> Controller:ajax  Method:customer_tran_list execution time=0.3487s
INFO  - 2019-03-05 15:57:13.58088700 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_tran_list
INFO  - 2019-03-05 15:57:13.82347100 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]<PROCESS-END> Controller:ajax  Method:customer_tran_list execution time=0.3656s
INFO  - 2019-03-05 15:57:14.49776500 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_tran_list
INFO  - 2019-03-05 15:57:14.75008200 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]<PROCESS-END> Controller:ajax  Method:customer_tran_list execution time=0.3853s
INFO  - 2019-03-05 15:57:18.53884700 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]<PROCESS-START> USER-ID: 1 Controller:master_file_print  Method:index
INFO  - 2019-03-05 15:57:21.14374300 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]<PROCESS-END> Controller:master_file_print  Method:index execution time=2.6563s
INFO  - 2019-03-05 16:01:14.93917400 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]<PROCESS-START> USER-ID: 1 Controller:sales_list  Method:index
INFO  - 2019-03-05 16:01:18.78015300 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]<PROCESS-END> Controller:sales_list  Method:index execution time=3.9034s
INFO  - 2019-03-05 16:01:26.83725300 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]<PROCESS-START> USER-ID: 1 Controller:sales_list  Method:index
INFO  - 2019-03-05 16:01:27.87540300 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]<PROCESS-END> Controller:sales_list  Method:index execution time=1.1120s
INFO  - 2019-03-05 16:01:33.67213200 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]<PROCESS-START> USER-ID: 1 Controller:sales_input  Method:edit
INFO  - 2019-03-05 16:01:33.78874700 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]<PROCESS-END> Controller:sales_input  Method:edit execution time=0.1779s
INFO  - 2019-03-05 16:01:47.40479200 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]<PROCESS-START> USER-ID: 1 Controller:sales_input  Method:edit
INFO  - 2019-03-05 16:01:47.48493600 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【売上変更処理   START】
INFO  - 2019-03-05 16:01:47.50889500 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Sales_mdl->update_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 1, `last_datetime` = now(), `customer_id` = '604', `customer_disp_name` = '株式会社大島水産', `credit_type` = '1', `customer_type` = '1', `bill_date` = '2019/02/26', `book_date` = '2019/02/26', `handler_id` = '72', `handler_name` = '田村元', `institute_id` = '2', `depart_id` = '1', `abstract_id` = '17', `sum_no_tax` = '60000', `sum_tax` = '4800', `sum_money` = '64800', `sep_month_from` = NULL, `sep_month_to` = NULL, `cutoff_date` = NULL, `institute_name` = '東京研究所', `depart_name` = '食品', `abstract_name` = '栄養成分分析', `customer_name` = '株式会社大島水産', `cutoff_date_from` = NULL, `cutoff_date_to` = NULL, `sep_depart_flg` = 0 WHERE `sales_mng_id` =  '64345'
INFO  - 2019-03-05 16:01:47.52276000 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【DELETE(物理削除)】PROCESS: Sales_mdl->update_data SQL: DELETE FROM `t_sales_detail`
WHERE `sales_mng_id` =  '64345'
INFO  - 2019-03-05 16:01:47.55246100 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Sales_mdl->nullupdate_outside_relation SQL: UPDATE `t_outside_relation` SET `sales_mng_id` = NULL, `sales_detail_id` = NULL, `last_user_id` = 1, `last_datetime` = now() WHERE `sales_mng_id` =  '64345'
INFO  - 2019-03-05 16:01:47.56798400 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【INSERT】PROCESS: Sales_mdl->update_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (1, 1, now(), NULL, '栄養成分分析基本7項目', '3', NULL, '10000', '6', '2400', '30000', '32400', '・あじ開き　・金目鯛　・さば文化干し　報告日2019/01/24', '64345')
INFO  - 2019-03-05 16:01:47.58256000 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【INSERT】PROCESS: Sales_mdl->update_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (1, 1, now(), NULL, '栄養成分分析基本7項目', '3', NULL, '10000', '6', '2400', '30000', '32400', '・あじ開き　・真ほっけ開き　・赤魚　報告日2019/02/07', '64345')
INFO  - 2019-03-05 16:01:47.59605800 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【DELETE(物理削除)】PROCESS: Sales_mdl->update_data SQL: DELETE FROM `t_sales_before`
WHERE `sales_mng_id` =  '64345'
INFO  - 2019-03-05 16:01:47.60966500 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【DELETE(物理削除)】PROCESS: Sales_mdl->update_data SQL: DELETE FROM `t_sales_depart`
WHERE `sales_mng_id` =  '64345'
INFO  - 2019-03-05 16:01:47.62394700 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Sales_mdl->update_bill_data SQL: UPDATE `t_bill_mng` SET `credit_type` = '1', `last_user_id` = 1, `last_datetime` = now() WHERE `bill_mng_id` =  '49327'
INFO  - 2019-03-05 16:01:47.77430500 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【DELETE(物理削除)】PROCESS: Receivable_mng_mdl->back_sales_data SQL: DELETE FROM `t_receivable_data`
WHERE `sales_mng_id` =  '64345'
INFO  - 2019-03-05 16:01:47.78636800 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Receivable_mng_mdl->back_sales_data SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money - 64800, `last_user_id` = 1, `last_datetime` = now() WHERE `receivable_mng_id` =  '37590'
INFO  - 2019-03-05 16:01:47.80229600 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_mng SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money + 64800, `last_user_id` = 1, `last_datetime` = now() WHERE `target_month` =  '201902' AND `customer_disp_name` =  '株式会社大島水産' AND `institute_id` =  '2' AND `depart_id` =  '1'
INFO  - 2019-03-05 16:01:47.81480700 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (1, 1, now(), '37590', '64345', '2019/02/26', '64800')
INFO  - 2019-03-05 16:01:47.84177500 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]【売上変更処理   END】
INFO  - 2019-03-05 16:01:47.90463900 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]<PROCESS-END> Controller:sales_input  Method:edit execution time=0.6546s
INFO  - 2019-03-05 16:01:59.57311600 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]<PROCESS-START> USER-ID: 1 Controller:sales_list  Method:index
INFO  - 2019-03-05 16:02:00.51950500 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]<PROCESS-END> Controller:sales_list  Method:index execution time=1.0440s
INFO  - 2019-03-05 16:06:48.53682700 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_tran_list
INFO  - 2019-03-05 16:06:48.78065400 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]<PROCESS-END> Controller:ajax  Method:customer_tran_list execution time=0.3521s
INFO  - 2019-03-05 16:06:48.85443800 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_tran_list
INFO  - 2019-03-05 16:06:49.10654100 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]<PROCESS-END> Controller:ajax  Method:customer_tran_list execution time=0.3508s
INFO  - 2019-03-05 16:06:49.36676100 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_tran_list
INFO  - 2019-03-05 16:06:49.62928900 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]<PROCESS-END> Controller:ajax  Method:customer_tran_list execution time=0.3875s
INFO  - 2019-03-05 16:06:50.47924800 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:customer_tran_list
INFO  - 2019-03-05 16:06:50.73814500 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]<PROCESS-END> Controller:ajax  Method:customer_tran_list execution time=0.3703s
INFO  - 2019-03-05 16:06:53.87305500 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]<PROCESS-START> USER-ID: 1 Controller:master_file_print  Method:index
INFO  - 2019-03-05 16:06:56.49851300 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]<PROCESS-END> Controller:master_file_print  Method:index execution time=2.6812s
INFO  - 2019-03-05 16:23:02.78548200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-05 16:23:02.87735600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1682s
INFO  - 2019-03-05 16:23:05.77816700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-03-05 16:23:05.80119900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1276s
INFO  - 2019-03-05 16:23:06.87716700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-03-05 16:23:06.89805500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1324s
INFO  - 2019-03-05 16:23:07.93954700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_info
INFO  - 2019-03-05 16:23:07.95527100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:customer_info execution time=0.1246s
INFO  - 2019-03-05 16:23:13.76801000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-03-05 16:23:13.78971200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1307s
INFO  - 2019-03-05 16:23:15.48533200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_info
INFO  - 2019-03-05 16:23:15.50234200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:customer_info execution time=0.1443s
INFO  - 2019-03-05 16:23:29.35247300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_list
INFO  - 2019-03-05 16:23:29.36706200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:handler_list execution time=0.1252s
INFO  - 2019-03-05 16:23:32.28872100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_info
INFO  - 2019-03-05 16:23:32.30490300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:handler_info execution time=0.1258s
INFO  - 2019-03-05 16:23:41.13662400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 16:23:41.15238800 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1248s
INFO  - 2019-03-05 16:23:42.55620900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 16:23:42.57165100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1250s
INFO  - 2019-03-05 16:23:44.52540500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 16:23:44.54075000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1270s
INFO  - 2019-03-05 16:23:44.93626600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 16:23:44.95037500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1206s
INFO  - 2019-03-05 16:23:55.21517100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 16:23:55.23047600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1221s
INFO  - 2019-03-05 16:23:57.19881700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 16:23:57.21377900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1303s
INFO  - 2019-03-05 16:23:58.10329600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 16:23:58.11837400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1258s
INFO  - 2019-03-05 16:23:58.81316500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 16:23:58.82887300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1323s
INFO  - 2019-03-05 16:23:59.23554200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 16:23:59.24977500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1212s
INFO  - 2019-03-05 16:24:01.02998200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 16:24:01.04639200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1337s
INFO  - 2019-03-05 16:24:07.85595100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-03-05 16:24:07.87139400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1273s
INFO  - 2019-03-05 16:24:29.35314900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-05 16:24:29.46724800 --> [437c385aef63764c2b58eb81d1b3faa7]【売上登録処理   START】
INFO  - 2019-03-05 16:24:29.48262000 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '456', '株式会社神木', '1', '1', '2019/03/05', '2019/03/05', '7', '堀古ひろみ', '1', '2', '1', '19900', '1592', '21492', NULL, NULL, NULL, '大阪研究所', '繊維', '商品試験', '株式会社神木', NULL, NULL, '1', 0)
INFO  - 2019-03-05 16:24:29.49824700 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '10005747', '靴下　シャルレ様向け　染色堅牢度、物性、他', '1', NULL, NULL, '6', '1592', '19900', '21492', NULL, 64561)
INFO  - 2019-03-05 16:24:29.60879900 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Receivable_mng_mdl->_regist_mng SQL: INSERT INTO `t_receivable_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `target_month`, `customer_id`, `customer_disp_name`, `institute_id`, `institute_name`, `depart_id`, `depart_name`, `sales_money`) VALUES (2, 2, now(), '201903', '456', '株式会社神木', '1', '大阪研究所', '2', '繊維', '21492')
INFO  - 2019-03-05 16:24:29.62261200 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), 37714, 64561, '2019/03/05', '21492')
INFO  - 2019-03-05 16:24:29.64664900 --> [437c385aef63764c2b58eb81d1b3faa7]【売上登録処理   END】
INFO  - 2019-03-05 16:24:29.70410200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_input  Method:index execution time=0.4549s
INFO  - 2019-03-05 16:24:31.50434900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-05 16:24:31.57814900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1474s
INFO  - 2019-03-05 16:24:51.90583400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-03-05 16:24:51.92597900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1354s
INFO  - 2019-03-05 16:24:54.45693400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_info
INFO  - 2019-03-05 16:24:54.47281100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:customer_info execution time=0.1181s
INFO  - 2019-03-05 16:25:04.31951400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_list
INFO  - 2019-03-05 16:25:04.33548800 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:handler_list execution time=0.1292s
INFO  - 2019-03-05 16:25:05.12685700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_info
INFO  - 2019-03-05 16:25:05.14289000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:handler_info execution time=0.1265s
INFO  - 2019-03-05 16:25:15.90772400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 16:25:15.92310300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1331s
INFO  - 2019-03-05 16:25:28.23993900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 16:25:28.25500600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1313s
INFO  - 2019-03-05 16:25:29.77486300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 16:25:29.78940700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1286s
INFO  - 2019-03-05 16:25:30.85130100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 16:25:30.86687100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1230s
INFO  - 2019-03-05 16:25:31.85223200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 16:25:31.86669500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1228s
INFO  - 2019-03-05 16:25:35.45666400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 16:25:35.47212100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1280s
INFO  - 2019-03-05 16:25:42.64874900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 16:25:42.66496800 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1284s
INFO  - 2019-03-05 16:25:44.04131900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 16:25:44.05715500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1245s
INFO  - 2019-03-05 16:25:59.79662200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-03-05 16:25:59.81183800 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1293s
INFO  - 2019-03-05 16:26:15.38312500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 16:26:15.39901800 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1275s
INFO  - 2019-03-05 16:26:15.90573300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 16:26:15.92110600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1297s
INFO  - 2019-03-05 16:26:16.26846500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 16:26:16.28261000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1162s
INFO  - 2019-03-05 16:26:18.15880400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 16:26:18.17471500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1312s
INFO  - 2019-03-05 16:26:18.68030800 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 16:26:18.69469500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1191s
INFO  - 2019-03-05 16:26:19.21834600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 16:26:19.23341300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1228s
INFO  - 2019-03-05 16:26:20.15576200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 16:26:20.17014100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1265s
INFO  - 2019-03-05 16:26:38.44845400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 16:26:38.46307400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1224s
INFO  - 2019-03-05 16:26:39.07468300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 16:26:39.09091400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1222s
INFO  - 2019-03-05 16:26:39.82395100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 16:26:39.83948900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1487s
INFO  - 2019-03-05 16:26:40.71676300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 16:26:40.73198900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1231s
INFO  - 2019-03-05 16:26:41.43113900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 16:26:41.44659500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1227s
INFO  - 2019-03-05 16:26:42.97349400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 16:26:42.98879700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1298s
INFO  - 2019-03-05 16:26:44.65135300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 16:26:44.66621000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1251s
INFO  - 2019-03-05 16:26:45.43310700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 16:26:45.44870800 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1566s
INFO  - 2019-03-05 16:26:46.83297500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 16:26:46.85009200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1249s
INFO  - 2019-03-05 16:26:47.94190300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 16:26:47.95777900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1315s
INFO  - 2019-03-05 16:26:48.43584200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 16:26:48.45126700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1260s
INFO  - 2019-03-05 16:26:48.86733000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 16:26:48.88268500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1214s
INFO  - 2019-03-05 16:26:49.28158900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 16:26:49.29625600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1148s
INFO  - 2019-03-05 16:26:49.68796400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 16:26:49.70359600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1272s
INFO  - 2019-03-05 16:26:50.47842600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 16:26:50.49374900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1344s
INFO  - 2019-03-05 16:26:50.89152100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 16:26:50.90560200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1122s
INFO  - 2019-03-05 16:26:51.32736000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 16:26:51.34353900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1501s
INFO  - 2019-03-05 16:26:58.31297800 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 16:26:58.32858800 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1257s
INFO  - 2019-03-05 16:26:59.11304800 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 16:26:59.12698700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1171s
INFO  - 2019-03-05 16:27:00.28200500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 16:27:00.29656800 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1306s
INFO  - 2019-03-05 16:27:00.86398200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 16:27:00.87984000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1219s
INFO  - 2019-03-05 16:27:01.74918600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 16:27:01.76440900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1234s
INFO  - 2019-03-05 16:27:04.11344200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 16:27:04.12752300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1173s
INFO  - 2019-03-05 16:27:04.74678000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 16:27:04.76209700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1209s
INFO  - 2019-03-05 16:27:05.46181200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 16:27:05.47759900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1203s
INFO  - 2019-03-05 16:27:06.01521600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 16:27:06.02946500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1192s
INFO  - 2019-03-05 16:27:08.04917500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 16:27:08.06493400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1235s
INFO  - 2019-03-05 16:27:08.44722200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 16:27:08.46237300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1169s
INFO  - 2019-03-05 16:27:09.58424500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 16:27:09.59999400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1235s
INFO  - 2019-03-05 16:27:11.19048400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 16:27:11.20648900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1469s
INFO  - 2019-03-05 16:27:12.00006200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 16:27:12.01548200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1239s
INFO  - 2019-03-05 16:27:37.26004600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-05 16:27:37.37467200 --> [437c385aef63764c2b58eb81d1b3faa7]【売上登録処理   START】
INFO  - 2019-03-05 16:27:37.39084100 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '499', '東レ株式会社', '1', '1', '2019/03/05', '2019/03/05', '7', '堀古ひろみ', '1', '2', '1', '22500', '1800', '24300', NULL, NULL, NULL, '大阪研究所', '繊維', '商品試験', '東レ株式会社', NULL, NULL, '1', 0)
INFO  - 2019-03-05 16:27:37.40653600 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '10005749', 'ゴム　伸縮疲労性試験、実用洗濯試験', '3', NULL, NULL, '6', '1800', '22500', '24300', 'ゴム品番：N7102-35　生地品番：TJ09683A02（ﾗｲﾄｸﾞﾚｰ、ﾀﾞｰｸｸﾞﾚｰ）、TJ09629A02', 64562)
INFO  - 2019-03-05 16:27:37.48748700 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Receivable_mng_mdl->_regist_mng SQL: INSERT INTO `t_receivable_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `target_month`, `customer_id`, `customer_disp_name`, `institute_id`, `institute_name`, `depart_id`, `depart_name`, `sales_money`) VALUES (2, 2, now(), '201903', '499', '東レ株式会社', '1', '大阪研究所', '2', '繊維', '24300')
INFO  - 2019-03-05 16:27:37.50208700 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), 37715, 64562, '2019/03/05', '24300')
INFO  - 2019-03-05 16:27:37.53559100 --> [437c385aef63764c2b58eb81d1b3faa7]【売上登録処理   END】
INFO  - 2019-03-05 16:27:37.60062400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_input  Method:index execution time=0.4442s
INFO  - 2019-03-05 16:27:38.39184900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-05 16:27:38.46124800 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1457s
INFO  - 2019-03-05 16:27:53.70681000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-05 16:27:55.07938800 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=1.4293s
INFO  - 2019-03-05 16:27:59.84631700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:output
INFO  - 2019-03-05 16:27:59.86092700 --> [437c385aef63764c2b58eb81d1b3faa7]【請求書発行処理   START)】
INFO  - 2019-03-05 16:28:00.08840000 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0049307', 'S', '2019/03/05', '1', '株式会社神木', '株式会社神木', '21492', '2019/03/05', '456')
INFO  - 2019-03-05 16:28:00.10321700 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 49551, '64561')
INFO  - 2019-03-05 16:28:00.11822500 --> [437c385aef63764c2b58eb81d1b3faa7]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049307' WHERE `sales_mng_id` =  '64561'
INFO  - 2019-03-05 16:28:00.32429400 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0049308', 'S', '2019/03/05', '1', '東レ株式会社', '東レ株式会社', '24300', '2019/03/05', '499')
INFO  - 2019-03-05 16:28:00.33721600 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 49552, '64562')
INFO  - 2019-03-05 16:28:00.35025000 --> [437c385aef63764c2b58eb81d1b3faa7]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049308' WHERE `sales_mng_id` =  '64562'
INFO  - 2019-03-05 16:28:01.42632300 --> [437c385aef63764c2b58eb81d1b3faa7]【請求書発行処理   END)】
INFO  - 2019-03-05 16:28:01.49940400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:bill_sales_print  Method:output execution time=1.7479s
INFO  - 2019-03-05 16:28:02.84185200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-05 16:28:05.80137200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=3.0378s
INFO  - 2019-03-05 16:28:10.57567700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-03-05 16:28:10.59177700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1288s
INFO  - 2019-03-05 16:28:20.56399600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-03-05 16:28:20.58152100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1290s
INFO  - 2019-03-05 16:28:41.12466800 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-05 16:28:41.21467500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1585s
INFO  - 2019-03-05 16:28:45.68970100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-03-05 16:28:45.71110800 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1331s
INFO  - 2019-03-05 16:28:50.45425700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_info
INFO  - 2019-03-05 16:28:50.47051800 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:customer_info execution time=0.1203s
INFO  - 2019-03-05 16:28:58.31661500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_list
INFO  - 2019-03-05 16:28:58.33244100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:handler_list execution time=0.1337s
INFO  - 2019-03-05 16:28:59.17812900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_info
INFO  - 2019-03-05 16:28:59.19495400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:handler_info execution time=0.1272s
INFO  - 2019-03-05 16:29:07.00532100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 16:29:07.02134600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1261s
INFO  - 2019-03-05 16:29:14.36446900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 16:29:14.38021300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1326s
INFO  - 2019-03-05 16:29:15.95100100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-03-05 16:29:15.96728900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1226s
INFO  - 2019-03-05 16:29:26.92957700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-05 16:29:27.04323300 --> [437c385aef63764c2b58eb81d1b3faa7]【売上登録処理   START】
INFO  - 2019-03-05 16:29:27.05960300 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '1173', '鷹岡株式会社', '1', '1', '2019/03/05', '2019/03/05', '5', '畑井百合子', '1', '2', '1', '123450', '9876', '133326', NULL, NULL, NULL, '大阪研究所', '繊維', '商品試験', '鷹岡株式会社', NULL, NULL, '1', 0)
INFO  - 2019-03-05 16:29:27.07474800 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '10005705', 'ジャケット生地　総合試験', '5', NULL, NULL, '6', '9876', '123450', '133326', NULL, 64563)
INFO  - 2019-03-05 16:29:27.14790700 --> [437c385aef63764c2b58eb81d1b3faa7]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_mng SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money + 133326, `last_user_id` = 2, `last_datetime` = now() WHERE `target_month` =  '201903' AND `customer_disp_name` =  '鷹岡株式会社' AND `institute_id` =  '1' AND `depart_id` =  '2'
INFO  - 2019-03-05 16:29:27.16376200 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), '37627', 64563, '2019/03/05', '133326')
INFO  - 2019-03-05 16:29:27.18948500 --> [437c385aef63764c2b58eb81d1b3faa7]【売上登録処理   END】
INFO  - 2019-03-05 16:29:27.25856500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_input  Method:index execution time=0.4334s
INFO  - 2019-03-05 16:29:27.95681200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-05 16:29:28.02700400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1440s
INFO  - 2019-03-05 16:29:46.36165900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-03-05 16:29:46.38329500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1348s
INFO  - 2019-03-05 16:29:47.05504100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_info
INFO  - 2019-03-05 16:29:47.07225000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:customer_info execution time=0.1258s
INFO  - 2019-03-05 16:29:55.03726200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_list
INFO  - 2019-03-05 16:29:55.05338900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:handler_list execution time=0.1254s
INFO  - 2019-03-05 16:29:57.44488300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_list
INFO  - 2019-03-05 16:29:57.46040300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:handler_list execution time=0.1273s
INFO  - 2019-03-05 16:29:58.20722600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_info
INFO  - 2019-03-05 16:29:58.22401200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:handler_info execution time=0.1579s
INFO  - 2019-03-05 16:30:00.58951600 --> [6badad4b8745b432accb4785a4460d36]<PROCESS-START> USER-ID:  Controller:receive_batch  Method:index
INFO  - 2019-03-05 16:30:00.60629000 --> [6badad4b8745b432accb4785a4460d36]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_mng SQL: INSERT INTO `t_outside_receive_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `process_datetime`, `record_count`, `result`) VALUES (0, 0, now(), '201903051600', 6, 'ok')
INFO  - 2019-03-05 16:30:00.72393900 --> [6badad4b8745b432accb4785a4460d36]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`, `sales_mng_id`, `sales_detail_id`) VALUES (0, 0, now(), '40011093', '40011093', 'unsent', '64421', '82669')
INFO  - 2019-03-05 16:30:00.73978800 --> [6badad4b8745b432accb4785a4460d36]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1130, '40011093', '株式会社風の街 本部', '40011093', '有野加奈子', '手指・器具・食品', '20000', '3', 'ok', '')
INFO  - 2019-03-05 16:30:00.85443500 --> [6badad4b8745b432accb4785a4460d36]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`, `sales_mng_id`, `sales_detail_id`) VALUES (0, 0, now(), '40011115', '40011115', 'unsent', '64421', '82670')
INFO  - 2019-03-05 16:30:00.86934400 --> [6badad4b8745b432accb4785a4460d36]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1130, '40011115', '株式会社風の街 本部', '40011115', '有野加奈子', '手指・器具・食品', '40000', '3', 'ok', '')
INFO  - 2019-03-05 16:30:00.97396000 --> [6badad4b8745b432accb4785a4460d36]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`, `sales_mng_id`, `sales_detail_id`) VALUES (0, 0, now(), '40011172', '40011172', 'unsent', '64421', '82672')
INFO  - 2019-03-05 16:30:00.98720000 --> [6badad4b8745b432accb4785a4460d36]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1130, '40011172', '株式会社風の街 本部', '40011172', '有野加奈子', '手指・器具・食品', '40000', '3', 'ok', '')
INFO  - 2019-03-05 16:30:01.08422700 --> [6badad4b8745b432accb4785a4460d36]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`, `sales_mng_id`, `sales_detail_id`) VALUES (0, 0, now(), '40011204', '40011204', 'unsent', '64420', '82668')
INFO  - 2019-03-05 16:30:01.09634700 --> [6badad4b8745b432accb4785a4460d36]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1130, '40011204', '株式会社風の街 本部', '40011204', '有野加奈子', '手指・器具・食品', '30000', '3', 'ok', '')
INFO  - 2019-03-05 16:30:01.19246200 --> [6badad4b8745b432accb4785a4460d36]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`, `sales_mng_id`, `sales_detail_id`) VALUES (0, 0, now(), '40011250', '40011250', 'unsent', '64399', '82646')
INFO  - 2019-03-05 16:30:01.20471900 --> [6badad4b8745b432accb4785a4460d36]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1130, '40011250', '北野農園', '40011250', '有野加奈子', '水なすぬか漬、水なすカット漬（液漬）、水なす丸漬（液漬）', '27000', '3', 'ok', '')
INFO  - 2019-03-05 16:30:01.30593000 --> [6badad4b8745b432accb4785a4460d36]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`, `sales_mng_id`, `sales_detail_id`) VALUES (0, 0, now(), '40011279', '40011279', 'unsent', '64409', '82657')
INFO  - 2019-03-05 16:30:01.34688900 --> [6badad4b8745b432accb4785a4460d36]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1130, '40011279', '和田八蒲鉾製造株式会社', '40011279', '有野加奈子', '手指・器具', '45500', '3', 'ok', '')
INFO  - 2019-03-05 16:30:01.35876700 --> [6badad4b8745b432accb4785a4460d36]【UPDATE】PROCESS: Receive_batch_mdl->update_outside_receive_mng SQL: UPDATE `t_outside_receive_mng` SET `result` = 'ok', `last_user_id` = 0, `last_datetime` = now() WHERE `outside_receive_mng_id` =  1130
INFO  - 2019-03-05 16:30:01.49026600 --> [6badad4b8745b432accb4785a4460d36]<PROCESS-END> Controller:receive_batch  Method:index execution time=1.3509s
INFO  - 2019-03-05 16:30:04.86598100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 16:30:04.88170400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1222s
INFO  - 2019-03-05 16:30:06.69219400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 16:30:06.70829400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1257s
INFO  - 2019-03-05 16:30:07.13044100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 16:30:07.14541600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1168s
INFO  - 2019-03-05 16:30:07.63590900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 16:30:07.65009000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1164s
INFO  - 2019-03-05 16:30:09.04050900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 16:30:09.05730500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1246s
INFO  - 2019-03-05 16:30:34.69970600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 16:30:34.71558300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1384s
INFO  - 2019-03-05 16:30:35.15147400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-03-05 16:30:35.16796400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1287s
INFO  - 2019-03-05 16:31:06.06510700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-05 16:31:06.18015500 --> [437c385aef63764c2b58eb81d1b3faa7]【売上登録処理   START】
INFO  - 2019-03-05 16:31:06.19666700 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '1173', '鷹岡株式会社', '1', '1', '2019/03/05', '2019/03/05', '2', '森本律子', '1', '2', '1', '32250', '2580', '34830', NULL, NULL, NULL, '大阪研究所', '繊維', '商品試験', '鷹岡株式会社', NULL, NULL, '1', 0)
INFO  - 2019-03-05 16:31:06.21313800 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '10005707', 'ジャケット生地　総合試験', '1', NULL, NULL, '6', '2580', '32250', '34830', NULL, 64564)
INFO  - 2019-03-05 16:31:06.28786400 --> [437c385aef63764c2b58eb81d1b3faa7]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_mng SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money + 34830, `last_user_id` = 2, `last_datetime` = now() WHERE `target_month` =  '201903' AND `customer_disp_name` =  '鷹岡株式会社' AND `institute_id` =  '1' AND `depart_id` =  '2'
INFO  - 2019-03-05 16:31:06.30461800 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), '37627', 64564, '2019/03/05', '34830')
INFO  - 2019-03-05 16:31:06.33503000 --> [437c385aef63764c2b58eb81d1b3faa7]【売上登録処理   END】
INFO  - 2019-03-05 16:31:06.40419500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_input  Method:index execution time=0.4459s
INFO  - 2019-03-05 16:31:07.83814600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-05 16:31:07.91164500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1422s
INFO  - 2019-03-05 16:31:09.47398300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-05 16:31:10.92946500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=1.5202s
INFO  - 2019-03-05 16:31:15.72888100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:output
INFO  - 2019-03-05 16:31:15.74481900 --> [437c385aef63764c2b58eb81d1b3faa7]【請求書発行処理   START)】
INFO  - 2019-03-05 16:31:15.95269700 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0049309', 'S', '2019/03/05', '1', '鷹岡株式会社', '鷹岡株式会社', '133326', '2019/03/05', '1173')
INFO  - 2019-03-05 16:31:15.96722000 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 49553, '64563')
INFO  - 2019-03-05 16:31:15.98118500 --> [437c385aef63764c2b58eb81d1b3faa7]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049309' WHERE `sales_mng_id` =  '64563'
INFO  - 2019-03-05 16:31:16.19873400 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0049310', 'S', '2019/03/05', '1', '鷹岡株式会社', '鷹岡株式会社', '34830', '2019/03/05', '1173')
INFO  - 2019-03-05 16:31:16.21416700 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 49554, '64564')
INFO  - 2019-03-05 16:31:16.22917000 --> [437c385aef63764c2b58eb81d1b3faa7]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049310' WHERE `sales_mng_id` =  '64564'
INFO  - 2019-03-05 16:31:17.33708600 --> [437c385aef63764c2b58eb81d1b3faa7]【請求書発行処理   END)】
INFO  - 2019-03-05 16:31:17.40846900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:bill_sales_print  Method:output execution time=1.7799s
INFO  - 2019-03-05 16:31:18.62987300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-05 16:31:21.79904500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=3.2421s
INFO  - 2019-03-05 16:31:26.65402000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-03-05 16:31:26.67021000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1270s
INFO  - 2019-03-05 16:31:37.99658500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-03-05 16:31:38.01533700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1255s
INFO  - 2019-03-05 16:39:50.02379600 --> [618a9d6e9f3370712fa346266e14ff59]<PROCESS-START> USER-ID: 21 Controller:login  Method:index
INFO  - 2019-03-05 16:39:50.04099800 --> [618a9d6e9f3370712fa346266e14ff59]<PROCESS-END> Controller:login  Method:index execution time=0.1260s
INFO  - 2019-03-05 16:39:51.05240300 --> [618a9d6e9f3370712fa346266e14ff59]<PROCESS-START> USER-ID: 21 Controller:login  Method:index
INFO  - 2019-03-05 16:39:51.22631000 --> [618a9d6e9f3370712fa346266e14ff59]<PROCESS-START> USER-ID: 21 Controller:top  Method:index
INFO  - 2019-03-05 16:39:56.34887700 --> [618a9d6e9f3370712fa346266e14ff59]<PROCESS-END> Controller:top  Method:index execution time=5.1646s
INFO  - 2019-03-05 16:39:56.62096100 --> [618a9d6e9f3370712fa346266e14ff59]<PROCESS-START> USER-ID: 21 Controller:ajax  Method:daily_cnt_info
INFO  - 2019-03-05 16:39:56.99960300 --> [618a9d6e9f3370712fa346266e14ff59]<PROCESS-END> Controller:ajax  Method:daily_cnt_info execution time=0.4872s
INFO  - 2019-03-05 16:39:57.92249000 --> [618a9d6e9f3370712fa346266e14ff59]<PROCESS-START> USER-ID: 21 Controller:sales_spec_print  Method:index
INFO  - 2019-03-05 16:39:57.99190000 --> [618a9d6e9f3370712fa346266e14ff59]<PROCESS-END> Controller:sales_spec_print  Method:index execution time=0.1574s
INFO  - 2019-03-05 16:40:16.53066200 --> [618a9d6e9f3370712fa346266e14ff59]<PROCESS-START> USER-ID: 21 Controller:sales_spec_print  Method:index
ERROR - 2019-03-05 16:40:17.86759000 --> [618a9d6e9f3370712fa346266e14ff59]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"618a9d6e9f3370712fa346266e14ff59";s:10:"ip_address";s:13:"10.162.111.80";s:10:"user_agent";s:102:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36";s:13:"last_activity";i:1551767804;}56cd87bbaa7690169c15d5a366f3fcef||0||/||||]
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

ERROR - 2019-03-05 16:40:17.89520400 --> [618a9d6e9f3370712fa346266e14ff59]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"618a9d6e9f3370712fa346266e14ff59";s:10:"ip_address";s:13:"10.162.111.80";s:10:"user_agent";s:102:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36";s:13:"last_activity";i:1551767804;}56cd87bbaa7690169c15d5a366f3fcef||0||/||||]
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

ERROR - 2019-03-05 16:40:17.92345700 --> [618a9d6e9f3370712fa346266e14ff59]Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671
D:\SKK_APP\system\core\Exceptions.php:78(log_message) [error||Severity: Warning  --> Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224) D:\SKK_APP\system\libraries\Session.php 671||1]
D:\SKK_APP\system\core\Common.php:552(CI_Exceptions->log_exception) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671]
:(_exception_handler) [2||Cannot modify header information - headers already sent by (output started at D:\SKK_APP\application\libraries\fpdf\tfpdf.php:1224)||D:\SKK_APP\system\libraries\Session.php||671||Array]
D:\SKK_APP\system\libraries\Session.php:671(setcookie) [ci_session||a:4:{s:10:"session_id";s:32:"618a9d6e9f3370712fa346266e14ff59";s:10:"ip_address";s:13:"10.162.111.80";s:10:"user_agent";s:102:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36";s:13:"last_activity";i:1551767804;}56cd87bbaa7690169c15d5a366f3fcef||0||/||||]
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

INFO  - 2019-03-05 16:40:17.94702300 --> [618a9d6e9f3370712fa346266e14ff59]<PROCESS-END> Controller:sales_spec_print  Method:index execution time=1.4689s
INFO  - 2019-03-05 16:53:51.42470100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:customer_list  Method:index
INFO  - 2019-03-05 16:53:51.56327000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:customer_list  Method:index execution time=0.2031s
INFO  - 2019-03-05 16:53:54.21158400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:customer_list  Method:index
INFO  - 2019-03-05 16:53:54.33006800 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:customer_list  Method:index execution time=0.1908s
INFO  - 2019-03-05 16:56:28.24550100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-05 16:56:28.35879900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1625s
INFO  - 2019-03-05 16:56:30.23461100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-05 16:56:33.99397000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_list  Method:index execution time=3.8400s
INFO  - 2019-03-05 16:56:37.87381100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-05 16:56:39.81621200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_list  Method:index execution time=2.0203s
INFO  - 2019-03-05 16:56:41.83619800 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:edit
INFO  - 2019-03-05 16:56:41.94941100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_input  Method:edit execution time=0.1916s
INFO  - 2019-03-05 16:56:46.23241300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 16:56:46.24907400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1260s
INFO  - 2019-03-05 16:56:47.30427200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 16:56:47.32017200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1300s
INFO  - 2019-03-05 16:56:48.91869200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 16:56:48.93522700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1200s
INFO  - 2019-03-05 16:56:58.76865800 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:edit
INFO  - 2019-03-05 16:56:58.99051200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_input  Method:edit execution time=0.3103s
INFO  - 2019-03-05 16:57:00.55959200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:edit
INFO  - 2019-03-05 16:57:00.71349900 --> [437c385aef63764c2b58eb81d1b3faa7]【売上変更処理   START】
INFO  - 2019-03-05 16:57:00.73724000 --> [437c385aef63764c2b58eb81d1b3faa7]【UPDATE】PROCESS: Sales_mdl->update_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `customer_id` = '499', `customer_disp_name` = '東レ株式会社', `credit_type` = '1', `customer_type` = '1', `bill_date` = '2019/03/05', `book_date` = '2019/03/05', `handler_id` = '7', `handler_name` = '堀古ひろみ', `institute_id` = '1', `depart_id` = '2', `abstract_id` = '1', `sum_no_tax` = '22500', `sum_tax` = '1800', `sum_money` = '24300', `sep_month_from` = NULL, `sep_month_to` = NULL, `cutoff_date` = NULL, `institute_name` = '大阪研究所', `depart_name` = '繊維', `abstract_name` = '商品試験', `customer_name` = '東レ株式会社', `cutoff_date_from` = NULL, `cutoff_date_to` = NULL, `data_status_type` = '1', `sep_depart_flg` = 0 WHERE `sales_mng_id` =  '64562'
INFO  - 2019-03-05 16:57:00.75214900 --> [437c385aef63764c2b58eb81d1b3faa7]【DELETE(物理削除)】PROCESS: Sales_mdl->update_data SQL: DELETE FROM `t_sales_detail`
WHERE `sales_mng_id` =  '64562'
INFO  - 2019-03-05 16:57:00.78155500 --> [437c385aef63764c2b58eb81d1b3faa7]【UPDATE】PROCESS: Sales_mdl->nullupdate_outside_relation SQL: UPDATE `t_outside_relation` SET `sales_mng_id` = NULL, `sales_detail_id` = NULL, `last_user_id` = 2, `last_datetime` = now() WHERE `sales_mng_id` =  '64562'
INFO  - 2019-03-05 16:57:00.79787600 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Sales_mdl->update_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '10005749', 'ゴム　伸縮疲労性試験、実用洗濯試験', '3', NULL, NULL, '6', '1800', '22500', '24300', 'ゴム品番：N7102-35　生地品番：TJ09683A02（ﾗｲﾄｸﾞﾚｰ、ﾀﾞｰｸｸﾞﾚｰ）、TJ09629A02（ﾈｲﾋﾞｰ）', '64562')
INFO  - 2019-03-05 16:57:00.81410200 --> [437c385aef63764c2b58eb81d1b3faa7]【DELETE(物理削除)】PROCESS: Sales_mdl->update_data SQL: DELETE FROM `t_sales_before`
WHERE `sales_mng_id` =  '64562'
INFO  - 2019-03-05 16:57:00.82879100 --> [437c385aef63764c2b58eb81d1b3faa7]【DELETE(物理削除)】PROCESS: Sales_mdl->update_data SQL: DELETE FROM `t_sales_depart`
WHERE `sales_mng_id` =  '64562'
INFO  - 2019-03-05 16:57:00.84722100 --> [437c385aef63764c2b58eb81d1b3faa7]【UPDATE】PROCESS: Sales_mdl->update_del_bill_status SQL: UPDATE `t_sales_mng` SET `data_status_type` = '1', `last_user_id` = 2, `last_datetime` = now() WHERE `sales_mng_id` in (64562) 
INFO  - 2019-03-05 16:57:00.86441100 --> [437c385aef63764c2b58eb81d1b3faa7]【DELETE(物理削除)】PROCESS: Sales_mdl->delete_bill_print SQL: DELETE FROM `t_bill_mng`
WHERE `bill_mng_id` =  '49552'
INFO  - 2019-03-05 16:57:01.03218100 --> [437c385aef63764c2b58eb81d1b3faa7]【DELETE(物理削除)】PROCESS: Receivable_mng_mdl->back_sales_data SQL: DELETE FROM `t_receivable_data`
WHERE `sales_mng_id` =  '64562'
INFO  - 2019-03-05 16:57:01.04786800 --> [437c385aef63764c2b58eb81d1b3faa7]【UPDATE】PROCESS: Receivable_mng_mdl->back_sales_data SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money - 24300, `last_user_id` = 2, `last_datetime` = now() WHERE `receivable_mng_id` =  '37715'
INFO  - 2019-03-05 16:57:01.06455200 --> [437c385aef63764c2b58eb81d1b3faa7]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_mng SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money + 24300, `last_user_id` = 2, `last_datetime` = now() WHERE `target_month` =  '201903' AND `customer_disp_name` =  '東レ株式会社' AND `institute_id` =  '1' AND `depart_id` =  '2'
INFO  - 2019-03-05 16:57:01.08018500 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), '37715', '64562', '2019/03/05', '24300')
INFO  - 2019-03-05 16:57:01.10981600 --> [437c385aef63764c2b58eb81d1b3faa7]【売上変更処理   END】
INFO  - 2019-03-05 16:57:01.17497100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_input  Method:edit execution time=0.7202s
INFO  - 2019-03-05 16:57:01.96232900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-05 16:57:03.90970600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_list  Method:index execution time=2.0243s
INFO  - 2019-03-05 16:57:05.58375200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-05 16:57:07.05789900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=1.5477s
INFO  - 2019-03-05 16:57:12.08775200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:output
INFO  - 2019-03-05 16:57:12.10361400 --> [437c385aef63764c2b58eb81d1b3faa7]【請求書発行処理   START)】
INFO  - 2019-03-05 16:57:12.12548500 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0049308', 'S', '2019/03/05', '1', '東レ株式会社', '東レ株式会社', '24300', '2019/03/05', '499')
INFO  - 2019-03-05 16:57:12.14197900 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 49555, '64562')
INFO  - 2019-03-05 16:57:12.15740200 --> [437c385aef63764c2b58eb81d1b3faa7]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049308' WHERE `sales_mng_id` =  '64562'
INFO  - 2019-03-05 16:57:12.74127500 --> [437c385aef63764c2b58eb81d1b3faa7]【請求書発行処理   END)】
INFO  - 2019-03-05 16:57:12.80991400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:bill_sales_print  Method:output execution time=0.8302s
INFO  - 2019-03-05 16:57:13.89366300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-05 16:57:17.19094700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=3.3680s
INFO  - 2019-03-05 16:57:19.74941800 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-03-05 16:57:19.76720000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1362s
INFO  - 2019-03-05 17:22:45.99953100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-05 17:22:46.09243700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1706s
INFO  - 2019-03-05 17:22:49.35869500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_list
INFO  - 2019-03-05 17:22:49.38076000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:customer_list execution time=0.1442s
INFO  - 2019-03-05 17:22:50.35498900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:customer_info
INFO  - 2019-03-05 17:22:50.37215200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:customer_info execution time=0.1186s
INFO  - 2019-03-05 17:22:59.52170000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_list
INFO  - 2019-03-05 17:22:59.53798300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:handler_list execution time=0.1219s
INFO  - 2019-03-05 17:23:00.23584200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:handler_info
INFO  - 2019-03-05 17:23:00.25189200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:handler_info execution time=0.1428s
INFO  - 2019-03-05 17:23:11.14757500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 17:23:11.16396500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1222s
INFO  - 2019-03-05 17:23:13.30030900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 17:23:13.31371800 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1249s
INFO  - 2019-03-05 17:23:13.33598100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-03-05 17:23:13.34912900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1413s
INFO  - 2019-03-05 17:23:19.01095400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 17:23:19.02674400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1295s
INFO  - 2019-03-05 17:23:20.31065000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 17:23:20.32604400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1208s
INFO  - 2019-03-05 17:23:21.57703600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 17:23:21.59260900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1233s
INFO  - 2019-03-05 17:23:22.30822000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 17:23:22.32262300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1522s
INFO  - 2019-03-05 17:23:23.89879000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 17:23:23.91405700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1266s
INFO  - 2019-03-05 17:23:25.75247800 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 17:23:25.76788300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1323s
INFO  - 2019-03-05 17:23:26.54096100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 17:23:26.55643700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1358s
INFO  - 2019-03-05 17:23:27.16330300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 17:23:27.18040900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1257s
INFO  - 2019-03-05 17:23:27.60703300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 17:23:27.62213700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1354s
INFO  - 2019-03-05 17:23:29.76283300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 17:23:29.77965900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1278s
INFO  - 2019-03-05 17:23:34.76807000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 17:23:34.78319600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1291s
INFO  - 2019-03-05 17:23:37.21534300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 17:23:37.23130300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1271s
INFO  - 2019-03-05 17:23:39.18108300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 17:23:39.19708300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1267s
INFO  - 2019-03-05 17:23:41.37374400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 17:23:41.38827900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1198s
INFO  - 2019-03-05 17:23:43.13617300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 17:23:43.15183000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1292s
INFO  - 2019-03-05 17:23:44.05309800 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 17:23:44.06757500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1319s
INFO  - 2019-03-05 17:23:44.99451300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 17:23:45.01036500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1247s
INFO  - 2019-03-05 17:23:52.98039100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 17:23:52.99592100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1337s
INFO  - 2019-03-05 17:23:56.84861300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-05 17:23:56.96790500 --> [437c385aef63764c2b58eb81d1b3faa7]【売上登録処理   START】
INFO  - 2019-03-05 17:23:56.98583100 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '807', '株式会社　大和', '1', '1', '2019/03/05', '2019/03/05', '31', '岡部珠美', '1', '1', '1', '5000', '400', '5400', NULL, NULL, NULL, '大阪研究所', '食品', '商品試験', '株式会社　大和', NULL, NULL, '1', 0)
INFO  - 2019-03-05 17:23:57.00162500 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '40011300', 'カニクリームコロッケ　異物検査', '1', NULL, NULL, '6', '400', '5000', '5400', '（※大嶋屋様 分）\r\n株式会社　大和　香林坊店　御中', 64565)
INFO  - 2019-03-05 17:23:57.08972100 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Receivable_mng_mdl->_regist_mng SQL: INSERT INTO `t_receivable_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `target_month`, `customer_id`, `customer_disp_name`, `institute_id`, `institute_name`, `depart_id`, `depart_name`, `sales_money`) VALUES (2, 2, now(), '201903', '807', '株式会社　大和', '1', '大阪研究所', '1', '食品', '5400')
INFO  - 2019-03-05 17:23:57.10390900 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), 37716, 64565, '2019/03/05', '5400')
INFO  - 2019-03-05 17:23:57.13320700 --> [437c385aef63764c2b58eb81d1b3faa7]【売上登録処理   END】
INFO  - 2019-03-05 17:23:57.19841200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_input  Method:index execution time=0.4494s
INFO  - 2019-03-05 17:23:57.96111000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:index
INFO  - 2019-03-05 17:23:58.03510600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_input  Method:index execution time=0.1483s
INFO  - 2019-03-05 17:24:00.35455500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-05 17:24:01.69126100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=1.4036s
INFO  - 2019-03-05 17:24:07.99423100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:output
INFO  - 2019-03-05 17:24:08.00950700 --> [437c385aef63764c2b58eb81d1b3faa7]【請求書発行処理   START)】
INFO  - 2019-03-05 17:24:08.22595400 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_no`, `bill_type`, `publish_date`, `credit_type`, `customer_disp_name`, `customer_name`, `bill_money`, `bill_date`, `customer_id`) VALUES (2, 2, now(), 'SKK0049311', 'S', '2019/03/05', '1', '株式会社　大和', '株式会社　大和', '5400', '2019/03/05', '807')
INFO  - 2019-03-05 17:24:08.24038200 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Bill_sales_mdl->regist_data SQL: INSERT INTO `t_bill_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `bill_mng_id`, `sales_mng_id`) VALUES (2, 2, now(), 49556, '64565')
INFO  - 2019-03-05 17:24:08.25484700 --> [437c385aef63764c2b58eb81d1b3faa7]【UPDATE】PROCESS: Bill_sales_mdl->regist_data SQL: UPDATE `t_sales_mng` SET `last_user_id` = 2, `last_datetime` = now(), `data_status_type` = '2', `bill_no` = 'SKK0049311' WHERE `sales_mng_id` =  '64565'
INFO  - 2019-03-05 17:24:08.83521200 --> [437c385aef63764c2b58eb81d1b3faa7]【請求書発行処理   END)】
INFO  - 2019-03-05 17:24:08.90836000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:bill_sales_print  Method:output execution time=1.0237s
INFO  - 2019-03-05 17:24:10.15050800 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-05 17:24:13.11881400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=3.0255s
INFO  - 2019-03-05 17:24:17.48365000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:bill_disp
INFO  - 2019-03-05 17:24:17.50030400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:bill_sales_print  Method:bill_disp execution time=0.1288s
INFO  - 2019-03-05 17:50:13.37184000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-05 17:50:17.18887000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_list  Method:index execution time=3.9066s
INFO  - 2019-03-05 17:50:21.64824000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-05 17:50:22.70746500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_list  Method:index execution time=1.1292s
INFO  - 2019-03-05 17:50:29.87018300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-03-05 17:50:29.97945600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.1883s
INFO  - 2019-03-05 17:50:41.93797100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 17:50:41.95296800 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1238s
INFO  - 2019-03-05 17:50:43.44031200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 17:50:43.45598200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1217s
INFO  - 2019-03-05 17:50:43.81141300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 17:50:43.82529200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1160s
INFO  - 2019-03-05 17:50:48.17828700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 17:50:48.19415300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1316s
INFO  - 2019-03-05 17:50:50.08770800 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 17:50:50.10341900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1338s
INFO  - 2019-03-05 17:50:54.61180000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-03-05 17:50:54.62565700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1188s
INFO  - 2019-03-05 17:51:07.81703500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 17:51:07.83218800 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1265s
INFO  - 2019-03-05 17:51:18.44891800 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-03-05 17:51:18.71503900 --> [437c385aef63764c2b58eb81d1b3faa7]【売上登録処理   START】
INFO  - 2019-03-05 17:51:18.73149000 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '1429', '新谷株式会社２', '1', '1', '2019/03/20', '2019/03/05', '70', '石津英理子', '1', '2', '1', '1300', '104', '1404', NULL, NULL, '20', '大阪研究所', '繊維', '商品試験', '新谷株式会社', '2019/02/21', '2019/03/20', '1', 0)
INFO  - 2019-03-05 17:51:18.74538800 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '10005786', 'キャミソール　千趣会様向け　洗濯試験', '1', NULL, NULL, '6', '104', '1300', '1404', '素肌にうれしいキャミ＆タンク　TTIN-5（グレー）再試験', 64566)
INFO  - 2019-03-05 17:51:18.88694700 --> [437c385aef63764c2b58eb81d1b3faa7]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_mng SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money + 1404, `last_user_id` = 2, `last_datetime` = now() WHERE `target_month` =  '201903' AND `customer_disp_name` =  '新谷株式会社２' AND `institute_id` IS NULL AND `depart_id` IS NULL
INFO  - 2019-03-05 17:51:18.90190500 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), '37618', 64566, '2019/03/20', '1404')
INFO  - 2019-03-05 17:51:18.92738600 --> [437c385aef63764c2b58eb81d1b3faa7]【売上登録処理   END】
INFO  - 2019-03-05 17:51:18.99282700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.6513s
INFO  - 2019-03-05 17:51:19.97973600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-05 17:51:21.00247100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_list  Method:index execution time=1.0929s
INFO  - 2019-03-05 17:51:27.55520700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-05 17:51:28.55390200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_list  Method:index execution time=1.0739s
INFO  - 2019-03-05 17:51:33.86390700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-03-05 17:51:33.97320600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.1825s
INFO  - 2019-03-05 17:51:44.95394300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 17:51:44.96965500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1309s
INFO  - 2019-03-05 17:51:48.25119700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 17:51:48.26590500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1209s
INFO  - 2019-03-05 17:51:52.46559700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_list
INFO  - 2019-03-05 17:51:52.48059700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_list execution time=0.1224s
INFO  - 2019-03-05 17:51:53.47419000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:goods_info
INFO  - 2019-03-05 17:51:53.49001900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:goods_info execution time=0.1277s
INFO  - 2019-03-05 17:52:00.50773900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 17:52:00.52230700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1156s
INFO  - 2019-03-05 17:52:02.51721200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 17:52:02.53177200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1240s
INFO  - 2019-03-05 17:52:03.80057000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 17:52:03.81521500 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1244s
INFO  - 2019-03-05 17:52:04.10837200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 17:52:04.12371600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1148s
INFO  - 2019-03-05 17:52:04.96965800 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 17:52:04.98541800 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1265s
INFO  - 2019-03-05 17:52:05.75057400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 17:52:05.76677100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1248s
INFO  - 2019-03-05 17:52:08.17899000 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 17:52:08.19461600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1335s
INFO  - 2019-03-05 17:52:09.37503300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:ajax  Method:memo_list
INFO  - 2019-03-05 17:52:09.39056200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:ajax  Method:memo_list execution time=0.1254s
INFO  - 2019-03-05 17:52:26.82319300 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_input  Method:copy
INFO  - 2019-03-05 17:52:27.10157000 --> [437c385aef63764c2b58eb81d1b3faa7]【売上登録処理   START】
INFO  - 2019-03-05 17:52:27.11996700 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `customer_id`, `customer_disp_name`, `credit_type`, `customer_type`, `bill_date`, `book_date`, `handler_id`, `handler_name`, `institute_id`, `depart_id`, `abstract_id`, `sum_no_tax`, `sum_tax`, `sum_money`, `sep_month_from`, `sep_month_to`, `cutoff_date`, `institute_name`, `depart_name`, `abstract_name`, `customer_name`, `cutoff_date_from`, `cutoff_date_to`, `data_status_type`, `sep_depart_flg`) VALUES (2, 2, now(), '417', 'アゴック株式会社', '1', '1', '2019/03/20', '2019/03/05', '7', '堀古ひろみ', '1', '2', '1', '20300', '1624', '21924', NULL, NULL, '20', '大阪研究所', '繊維', '商品試験', 'アゴック株式会社', '2019/02/21', '2019/03/20', '1', 0)
INFO  - 2019-03-05 17:52:27.13577300 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Sales_mdl->regist_data SQL: INSERT INTO `t_sales_detail` (`ins_user_id`, `last_user_id`, `last_datetime`, `report_no`, `goods_name`, `cnt`, `unit`, `unit_price`, `tax_type`, `tax`, `no_tax_money`, `in_tax_money`, `unit_memo`, `sales_mng_id`) VALUES (2, 2, now(), '10005743', 'テープ　シャルレ様向け　染色堅牢度、物性', '1', NULL, NULL, '6', '1624', '20300', '21924', 'AK10017C　ライラック', 64567)
INFO  - 2019-03-05 17:52:27.26466300 --> [437c385aef63764c2b58eb81d1b3faa7]【UPDATE】PROCESS: Receivable_mng_mdl->_regist_mng SQL: UPDATE `t_receivable_mng` SET `sales_money` = sales_money + 21924, `last_user_id` = 2, `last_datetime` = now() WHERE `target_month` =  '201903' AND `customer_disp_name` =  'アゴック株式会社' AND `institute_id` IS NULL AND `depart_id` IS NULL
INFO  - 2019-03-05 17:52:27.27949700 --> [437c385aef63764c2b58eb81d1b3faa7]【INSERT】PROCESS: Receivable_mng_mdl->_insert_data SQL: INSERT INTO `t_receivable_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `receivable_mng_id`, `sales_mng_id`, `bill_date`, `sales_money`) VALUES (2, 2, now(), '37673', 64567, '2019/03/20', '21924')
INFO  - 2019-03-05 17:52:27.30299700 --> [437c385aef63764c2b58eb81d1b3faa7]【売上登録処理   END】
INFO  - 2019-03-05 17:52:27.36444400 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_input  Method:copy execution time=0.6479s
INFO  - 2019-03-05 17:52:28.51871700 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:sales_list  Method:index
INFO  - 2019-03-05 17:52:29.53750600 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:sales_list  Method:index execution time=1.0911s
INFO  - 2019-03-05 18:00:00.70384800 --> [f0001aaba685552c11dfbd612e44602e]<PROCESS-START> USER-ID:  Controller:receive_batch  Method:index
INFO  - 2019-03-05 18:00:00.72539600 --> [f0001aaba685552c11dfbd612e44602e]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_mng SQL: INSERT INTO `t_outside_receive_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `process_datetime`, `record_count`, `result`) VALUES (0, 0, now(), '201903051730', 9, 'ok')
INFO  - 2019-03-05 18:00:00.84190100 --> [f0001aaba685552c11dfbd612e44602e]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`, `sales_mng_id`, `sales_detail_id`) VALUES (0, 0, now(), '60005101', '60005101', 'unsent', '63604', '81639')
INFO  - 2019-03-05 18:00:00.85549700 --> [f0001aaba685552c11dfbd612e44602e]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1131, '60005101', '株式会社アクアイグニス', '60005101', '平井沙也花', '鈴鹿抹茶 生サブレ', '7000', '3', 'ok', '')
INFO  - 2019-03-05 18:00:00.95463300 --> [f0001aaba685552c11dfbd612e44602e]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`, `sales_mng_id`, `sales_detail_id`) VALUES (0, 0, now(), '40011194', '40011194', 'unsent', '64421', '82674')
INFO  - 2019-03-05 18:00:00.96671700 --> [f0001aaba685552c11dfbd612e44602e]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1131, '40011194', '株式会社風の街 本部', '40011194', '有野加奈子', '手指・器具・食品', '40000', '3', 'ok', '')
INFO  - 2019-03-05 18:00:01.06604100 --> [f0001aaba685552c11dfbd612e44602e]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`, `sales_mng_id`, `sales_detail_id`) VALUES (0, 0, now(), '40011212', '40011212', 'unsent', '64421', '82676')
INFO  - 2019-03-05 18:00:01.07831600 --> [f0001aaba685552c11dfbd612e44602e]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1131, '40011212', '株式会社風の街 本部', '40011212', '有野加奈子', '手指・器具・食品', '40000', '3', 'ok', '')
INFO  - 2019-03-05 18:00:01.18326800 --> [f0001aaba685552c11dfbd612e44602e]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`) VALUES (0, 0, now(), '40011254', '40011254', 'unsent')
INFO  - 2019-03-05 18:00:01.20066300 --> [f0001aaba685552c11dfbd612e44602e]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1131, '40011254', '株式会社丸井', '40011254', '有野加奈子', 'アイスコーヒー', '6000', '3', 'ok', '')
INFO  - 2019-03-05 18:00:01.32914600 --> [f0001aaba685552c11dfbd612e44602e]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`, `sales_mng_id`, `sales_detail_id`) VALUES (0, 0, now(), '10005705', '10005705', 'unsent', '64563', '82904')
INFO  - 2019-03-05 18:00:01.34111800 --> [f0001aaba685552c11dfbd612e44602e]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1131, '10005705', '鷹岡株式会社', '10005705', '畑井百合子', 'ジャケット生地', '123450', '3', 'ok', '')
INFO  - 2019-03-05 18:00:01.47185600 --> [f0001aaba685552c11dfbd612e44602e]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`, `sales_mng_id`, `sales_detail_id`) VALUES (0, 0, now(), '10005707', '10005707', 'unsent', '64564', '82905')
INFO  - 2019-03-05 18:00:01.49986300 --> [f0001aaba685552c11dfbd612e44602e]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1131, '10005707', '鷹岡株式会社', '10005707', '森本律子', 'ジャケット地', '32250', '3', 'ok', '')
INFO  - 2019-03-05 18:00:01.60101500 --> [f0001aaba685552c11dfbd612e44602e]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`, `sales_mng_id`, `sales_detail_id`) VALUES (0, 0, now(), '40011300', '40011300', 'unsent', '64565', '82907')
INFO  - 2019-03-05 18:00:01.61849700 --> [f0001aaba685552c11dfbd612e44602e]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1131, '40011300', '株式会社大和　香林坊店', '40011300', '岡部珠美', 'カニクリームコロッケ', '5000', '3', 'ok', '')
INFO  - 2019-03-05 18:00:01.63134100 --> [f0001aaba685552c11dfbd612e44602e]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `result`, `error_message`) VALUES (0, 0, now(), 1131, 'error', '管理No 欄は必須です。\n得意先名 欄は必須です。\n報告書No 欄には、半角英数字以外は入力できません。\n報告書Noのフォーマットが正しくありません。\n\nArray\n(\n    [0] => \n    [1] => \n    [2] => \n    [3] => \n    [4] => \n    [5] => 20190304\n    [6] => 8257-59\n    [7] => 松平真由美\n    [8] => \n    [9] => \n    [10] => \n    [11] => 洗面マット\n    [12] => \n    [13] => 14000\n    [14] => \n    [15] => 2\n)\n')
INFO  - 2019-03-05 18:00:01.72738900 --> [f0001aaba685552c11dfbd612e44602e]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`, `sales_mng_id`, `sales_detail_id`) VALUES (0, 0, now(), '10005786', '10005786', 'unsent', '64566', '82908')
INFO  - 2019-03-05 18:00:01.74009100 --> [f0001aaba685552c11dfbd612e44602e]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1131, '10005786', '新谷株式会社', '10005786', '石津英理子', 'キャミソール', '1300', '3', 'ok', '')
INFO  - 2019-03-05 18:00:01.75185000 --> [f0001aaba685552c11dfbd612e44602e]【UPDATE】PROCESS: Receive_batch_mdl->update_outside_receive_mng SQL: UPDATE `t_outside_receive_mng` SET `result` = 'ok', `last_user_id` = 0, `last_datetime` = now() WHERE `outside_receive_mng_id` =  1131
INFO  - 2019-03-05 18:00:01.80805900 --> [f0001aaba685552c11dfbd612e44602e]<PROCESS-END> Controller:receive_batch  Method:index execution time=1.6677s
INFO  - 2019-03-05 18:01:11.17948100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:bill_sales_print  Method:index
INFO  - 2019-03-05 18:01:12.46862800 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:bill_sales_print  Method:index execution time=1.3562s
INFO  - 2019-03-05 18:01:13.58688100 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:index
INFO  - 2019-03-05 18:01:14.63409200 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:bill_cutoff_print  Method:index execution time=1.1209s
INFO  - 2019-03-05 18:01:21.29762900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-START> USER-ID: 2 Controller:bill_cutoff_print  Method:index
INFO  - 2019-03-05 18:01:22.31221900 --> [437c385aef63764c2b58eb81d1b3faa7]<PROCESS-END> Controller:bill_cutoff_print  Method:index execution time=1.0758s
INFO  - 2019-03-05 18:02:31.72543400 --> [ab36d6eff9a0c5cfbd75b9b2281612bf]<PROCESS-START> USER-ID: 1 Controller:logout  Method:index
INFO  - 2019-03-05 18:02:31.92101800 --> [6ce8eb1a9da5d14acb084aa4f50ff907]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-03-05 18:02:31.93785300 --> [6ce8eb1a9da5d14acb084aa4f50ff907]<PROCESS-END> Controller:login  Method:index execution time=0.1300s
