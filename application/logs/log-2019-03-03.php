<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

INFO  - 2019-03-03 13:40:03.49795800 --> [6f3eb0dc98bd6c70fa47ee67cf954ef7]<PROCESS-START> USER-ID:  Controller:send_batch  Method:index
INFO  - 2019-03-03 13:40:06.20570500 --> [6f3eb0dc98bd6c70fa47ee67cf954ef7]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_mng SQL: INSERT INTO `t_outside_send_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `process_datetime`, `record_count`) VALUES (0, 0, now(), '201903031340', 3)
INFO  - 2019-03-03 13:40:06.22026000 --> [6f3eb0dc98bd6c70fa47ee67cf954ef7]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 275, '4348', '40010301', '40010301', 'SKK0046064', '2018-11-14', '2018-11-14', '2019-01-28')
INFO  - 2019-03-03 13:40:06.22637200 --> [6f3eb0dc98bd6c70fa47ee67cf954ef7]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 275, '6539', '53105652', '53105652', 'SKK0048910', '2019-02-25', '2019-02-25', NULL)
INFO  - 2019-03-03 13:40:06.23239200 --> [6f3eb0dc98bd6c70fa47ee67cf954ef7]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 275, '6562', '53105945', '53105945', 'SKK0048911', '2019-02-26', '2019-02-26', NULL)
INFO  - 2019-03-03 13:40:06.23886500 --> [6f3eb0dc98bd6c70fa47ee67cf954ef7]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'credited', `outside_send_data_id` = 7568, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '4348'
INFO  - 2019-03-03 13:40:06.24495900 --> [6f3eb0dc98bd6c70fa47ee67cf954ef7]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 7569, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '6539'
INFO  - 2019-03-03 13:40:06.25104900 --> [6f3eb0dc98bd6c70fa47ee67cf954ef7]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 7570, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '6562'
INFO  - 2019-03-03 13:40:06.27873000 --> [6f3eb0dc98bd6c70fa47ee67cf954ef7]<PROCESS-END> Controller:send_batch  Method:index execution time=5.1498s
INFO  - 2019-03-03 14:30:00.45103600 --> [7c46a99ac2f843151b432feaaf4b6f83]<PROCESS-START> USER-ID:  Controller:receive_batch  Method:index
INFO  - 2019-03-03 14:30:00.45743100 --> [7c46a99ac2f843151b432feaaf4b6f83]SEND_SALES_DATA.TSV can not find. process skip.
INFO  - 2019-03-03 14:30:00.46360900 --> [7c46a99ac2f843151b432feaaf4b6f83]<PROCESS-END> Controller:receive_batch  Method:index execution time=0.3412s
INFO  - 2019-03-03 16:30:00.20840000 --> [8dd54ffa62f1ac257ba16ced346160a0]<PROCESS-START> USER-ID:  Controller:receive_batch  Method:index
INFO  - 2019-03-03 16:30:00.21488800 --> [8dd54ffa62f1ac257ba16ced346160a0]SEND_SALES_DATA.TSV can not find. process skip.
INFO  - 2019-03-03 16:30:00.22050500 --> [8dd54ffa62f1ac257ba16ced346160a0]<PROCESS-END> Controller:receive_batch  Method:index execution time=0.1623s
INFO  - 2019-03-03 18:00:00.20331000 --> [41544e433990aaf50adab16931173f4c]<PROCESS-START> USER-ID:  Controller:receive_batch  Method:index
INFO  - 2019-03-03 18:00:00.21088000 --> [41544e433990aaf50adab16931173f4c]SEND_SALES_DATA.TSV can not find. process skip.
INFO  - 2019-03-03 18:00:00.21775100 --> [41544e433990aaf50adab16931173f4c]<PROCESS-END> Controller:receive_batch  Method:index execution time=0.1567s
