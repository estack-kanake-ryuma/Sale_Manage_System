<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2019-08-01 15:13:41.21962100 --> Severity: Warning  --> mysql_pconnect(): Connection refused /var/www/html/system/database/drivers/mysql/mysql_driver.php 88
/var/www/html/system/core/Exceptions.php:78(log_message) [error||Severity: Warning  --> mysql_pconnect(): Connection refused /var/www/html/system/database/drivers/mysql/mysql_driver.php 88||1]
/var/www/html/system/core/Common.php:552(CI_Exceptions->log_exception) [2||mysql_pconnect(): Connection refused||/var/www/html/system/database/drivers/mysql/mysql_driver.php||88]
:(_exception_handler) [2||mysql_pconnect(): Connection refused||/var/www/html/system/database/drivers/mysql/mysql_driver.php||88||Array]
/var/www/html/system/database/drivers/mysql/mysql_driver.php:88(mysql_pconnect) [127.0.0.1||skk_db_user||skk_20130622]
/var/www/html/system/database/DB_driver.php:115(CI_DB_mysql_driver->db_pconnect)
/var/www/html/system/database/DB.php:146(CI_DB_driver->initialize)
/var/www/html/system/core/Loader.php:268(DB) [||]
/var/www/html/system/core/Loader.php:1087(CI_Loader->database)
/var/www/html/system/core/Controller.php:51(CI_Loader->ci_autoloader)
/var/www/html/application/core/MY_Controller.php:29(CI_Controller->__construct) [Array]
/var/www/html/application/controllers/login.php:29(MY_Controller->__construct)
/var/www/html/system/core/CodeIgniter.php:288(Login->__construct)
/var/www/html/index.php:204(require_once) [/var/www/html/system/core/CodeIgniter.php]

ERROR - 2019-08-01 15:13:41.22656600 --> Unable to connect to the database
/var/www/html/system/database/DB_driver.php:120(log_message) [error||Unable to connect to the database]
/var/www/html/system/database/DB.php:146(CI_DB_driver->initialize)
/var/www/html/system/core/Loader.php:268(DB) [||]
/var/www/html/system/core/Loader.php:1087(CI_Loader->database)
/var/www/html/system/core/Controller.php:51(CI_Loader->ci_autoloader)
/var/www/html/application/core/MY_Controller.php:29(CI_Controller->__construct) [Array]
/var/www/html/application/controllers/login.php:29(MY_Controller->__construct)
/var/www/html/system/core/CodeIgniter.php:288(Login->__construct)
/var/www/html/index.php:204(require_once) [/var/www/html/system/core/CodeIgniter.php]

INFO  - 2019-08-01 15:48:46.85626300 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-08-01 15:48:46.87309200 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-END> Controller:login  Method:index execution time=0.5590s
INFO  - 2019-08-01 15:48:54.55176500 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-START> USER-ID:  Controller:login  Method:index
INFO  - 2019-08-01 15:48:54.85008200 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-START> USER-ID: 1 Controller:top  Method:index
INFO  - 2019-08-01 15:48:56.39023700 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-END> Controller:top  Method:index execution time=1.7544s
INFO  - 2019-08-01 15:48:57.11091000 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:daily_cnt_info
INFO  - 2019-08-01 15:48:57.26663800 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-END> Controller:ajax  Method:daily_cnt_info execution time=0.5060s
INFO  - 2019-08-01 15:49:45.90303600 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-START> USER-ID: 1 Controller:top  Method:index
INFO  - 2019-08-01 15:49:47.36365200 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-END> Controller:top  Method:index execution time=1.7554s
INFO  - 2019-08-01 15:49:47.78786600 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:daily_cnt_info
INFO  - 2019-08-01 15:49:47.94594200 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-END> Controller:ajax  Method:daily_cnt_info execution time=0.4019s
INFO  - 2019-08-01 15:50:25.04675400 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-START> USER-ID: 1 Controller:sales_input  Method:index
INFO  - 2019-08-01 15:50:25.08800600 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-END> Controller:sales_input  Method:index execution time=0.4338s
INFO  - 2019-08-01 15:52:15.74421100 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-START> USER-ID: 1 Controller:top  Method:index
INFO  - 2019-08-01 15:52:17.48608600 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-END> Controller:top  Method:index execution time=2.1512s
INFO  - 2019-08-01 15:52:17.60678500 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-START> USER-ID: 1 Controller:top  Method:index
INFO  - 2019-08-01 15:52:19.18262900 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-END> Controller:top  Method:index execution time=1.8668s
INFO  - 2019-08-01 15:52:19.39442700 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-START> USER-ID: 1 Controller:top  Method:index
INFO  - 2019-08-01 15:52:20.84534500 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-END> Controller:top  Method:index execution time=1.7368s
INFO  - 2019-08-01 15:52:21.27767500 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:daily_cnt_info
INFO  - 2019-08-01 15:52:21.45491000 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-END> Controller:ajax  Method:daily_cnt_info execution time=0.4444s
INFO  - 2019-08-01 17:35:31.86623600 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-START> USER-ID: 1 Controller:sales_input  Method:index
INFO  - 2019-08-01 17:35:31.91645800 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-END> Controller:sales_input  Method:index execution time=0.4083s
INFO  - 2019-08-01 17:35:55.54261900 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-START> USER-ID: 1 Controller:top  Method:index
INFO  - 2019-08-01 17:35:57.32989500 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-END> Controller:top  Method:index execution time=2.1193s
INFO  - 2019-08-01 17:35:57.75873600 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:daily_cnt_info
INFO  - 2019-08-01 17:35:57.92199100 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-END> Controller:ajax  Method:daily_cnt_info execution time=0.4162s
INFO  - 2019-08-01 17:36:43.17646100 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-START> USER-ID: 1 Controller:sales_input  Method:index
INFO  - 2019-08-01 17:36:43.21368400 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-END> Controller:sales_input  Method:index execution time=0.3072s
INFO  - 2019-08-01 17:37:54.14658400 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-START> USER-ID: 1 Controller:top  Method:index
INFO  - 2019-08-01 17:37:55.64677600 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-END> Controller:top  Method:index execution time=1.7748s
INFO  - 2019-08-01 17:37:56.05613700 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-START> USER-ID: 1 Controller:ajax  Method:daily_cnt_info
INFO  - 2019-08-01 17:37:56.22484600 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-END> Controller:ajax  Method:daily_cnt_info execution time=0.4273s
INFO  - 2019-08-01 17:38:00.25338400 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-START> USER-ID: 1 Controller:sales_input  Method:index
INFO  - 2019-08-01 17:38:00.28175200 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-END> Controller:sales_input  Method:index execution time=0.2102s
INFO  - 2019-08-01 17:54:24.77332100 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-START> USER-ID: 1 Controller:credit_input  Method:index
INFO  - 2019-08-01 17:54:24.91704800 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-END> Controller:credit_input  Method:index execution time=0.4476s
INFO  - 2019-08-01 17:54:26.44892700 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-START> USER-ID: 1 Controller:sales_input  Method:index
INFO  - 2019-08-01 17:54:26.48827700 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-END> Controller:sales_input  Method:index execution time=0.3726s
INFO  - 2019-08-01 17:54:27.37287800 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-START> USER-ID: 1 Controller:sales_list  Method:index
INFO  - 2019-08-01 17:54:28.76793900 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-END> Controller:sales_list  Method:index execution time=1.6471s
INFO  - 2019-08-01 17:55:55.26877600 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-START> USER-ID: 1 Controller:sales_input  Method:index
INFO  - 2019-08-01 17:55:55.31497700 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-END> Controller:sales_input  Method:index execution time=0.4771s
INFO  - 2019-08-01 17:55:58.30799200 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-START> USER-ID: 1 Controller:customer_input  Method:index
INFO  - 2019-08-01 17:55:58.32309400 --> [f40c33d3794d730d532c039cf55d2ff1]<PROCESS-END> Controller:customer_input  Method:index execution time=0.2848s
