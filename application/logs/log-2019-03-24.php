<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

INFO  - 2019-03-24 13:40:03.31536500 --> [f2a0b41fa48e0323a6870d194e18fa03]<PROCESS-START> USER-ID:  Controller:send_batch  Method:index
INFO  - 2019-03-24 13:40:06.22191900 --> [f2a0b41fa48e0323a6870d194e18fa03]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_mng SQL: INSERT INTO `t_outside_send_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `process_datetime`, `record_count`) VALUES (0, 0, now(), '201903241340', 2)
INFO  - 2019-03-24 13:40:06.23377300 --> [f2a0b41fa48e0323a6870d194e18fa03]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 296, '4348', '40010301', '40010301', 'SKK0046064', '2018-11-14', '2018-11-14', NULL)
INFO  - 2019-03-24 13:40:06.24003200 --> [f2a0b41fa48e0323a6870d194e18fa03]【INSERT】PROCESS: Send_batch_mdl->_insert_outside_send_data SQL: INSERT INTO `t_outside_send_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_send_mng_id`, `outside_relation_id`, `manage_no`, `report_no`, `bill_no`, `bill_date`, `book_date`, `credit_date`) VALUES (0, 0, now(), 296, '6884', '10005833', '10005833', 'SKK0049729', '2019-03-22', '2019-03-22', NULL)
INFO  - 2019-03-24 13:40:06.24596000 --> [f2a0b41fa48e0323a6870d194e18fa03]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 7983, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '4348'
INFO  - 2019-03-24 13:40:06.25213100 --> [f2a0b41fa48e0323a6870d194e18fa03]【UPDATE】PROCESS: Send_batch_mdl->_update_send_status SQL: UPDATE `t_outside_relation` SET `relation_status` = 'billed', `outside_send_data_id` = 7984, `last_datetime` = now(), `last_user_id` = 0 WHERE `outside_relation_id` =  '6884'
INFO  - 2019-03-24 13:40:06.28465600 --> [f2a0b41fa48e0323a6870d194e18fa03]<PROCESS-END> Controller:send_batch  Method:index execution time=5.2187s
INFO  - 2019-03-24 14:30:00.47224400 --> [9d8aac13b20ffcdbd567baa5724cee57]<PROCESS-START> USER-ID:  Controller:receive_batch  Method:index
INFO  - 2019-03-24 14:30:00.47977700 --> [9d8aac13b20ffcdbd567baa5724cee57]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_mng SQL: INSERT INTO `t_outside_receive_mng` (`ins_user_id`, `last_user_id`, `last_datetime`, `process_datetime`, `record_count`, `result`) VALUES (0, 0, now(), '201903241400', 1, 'ok')
INFO  - 2019-03-24 14:30:00.61629100 --> [9d8aac13b20ffcdbd567baa5724cee57]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_relation SQL: INSERT INTO `t_outside_relation` (`ins_user_id`, `last_user_id`, `last_datetime`, `manage_no`, `report_no`, `relation_status`, `sales_mng_id`, `sales_detail_id`) VALUES (0, 0, now(), '40011503', '40011503', 'unsent', '64996', '83386')
INFO  - 2019-03-24 14:30:00.62260600 --> [9d8aac13b20ffcdbd567baa5724cee57]【INSERT】PROCESS: Receive_batch_mdl->insert_outside_receive_data SQL: INSERT INTO `t_outside_receive_data` (`ins_user_id`, `last_user_id`, `last_datetime`, `outside_receive_mng_id`, `manage_no`, `customer_name`, `report_no`, `handler_name`, `goods_name`, `no_tax_money`, `test_pattern`, `result`, `error_message`) VALUES (0, 0, now(), 1171, '40011503', '有限会社天むす・すえひろ', '40011503', '大西澄子', '天むす・すしむす弁当、天むす・えび、ちび柚子むす', '15000', '3', 'ok', '')
INFO  - 2019-03-24 14:30:00.62856800 --> [9d8aac13b20ffcdbd567baa5724cee57]【UPDATE】PROCESS: Receive_batch_mdl->update_outside_receive_mng SQL: UPDATE `t_outside_receive_mng` SET `result` = 'ok', `last_user_id` = 0, `last_datetime` = now() WHERE `outside_receive_mng_id` =  1171
INFO  - 2019-03-24 14:30:00.69656100 --> [9d8aac13b20ffcdbd567baa5724cee57]<PROCESS-END> Controller:receive_batch  Method:index execution time=0.5719s
INFO  - 2019-03-24 16:30:00.22808800 --> [d4ad2eda01f2878a24049f909118985d]<PROCESS-START> USER-ID:  Controller:receive_batch  Method:index
INFO  - 2019-03-24 16:30:00.23495400 --> [d4ad2eda01f2878a24049f909118985d]SEND_SALES_DATA.TSV can not find. process skip.
INFO  - 2019-03-24 16:30:00.24128000 --> [d4ad2eda01f2878a24049f909118985d]<PROCESS-END> Controller:receive_batch  Method:index execution time=0.1811s
INFO  - 2019-03-24 18:00:00.24045300 --> [d4963c2ff4d05536c7b2b4b62d6ae402]<PROCESS-START> USER-ID:  Controller:receive_batch  Method:index
INFO  - 2019-03-24 18:00:00.25182700 --> [d4963c2ff4d05536c7b2b4b62d6ae402]SEND_SALES_DATA.TSV can not find. process skip.
INFO  - 2019-03-24 18:00:00.25938000 --> [d4963c2ff4d05536c7b2b4b62d6ae402]<PROCESS-END> Controller:receive_batch  Method:index execution time=0.2033s
