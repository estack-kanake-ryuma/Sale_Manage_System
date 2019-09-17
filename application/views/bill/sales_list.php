<div class="contents_blk">
        
    <form name="search_form" method="post" action="/bill/sales_list">
        <table  class="search_tbl">
            <tr>
                <td>
                    <table>
                        <tr>
                            <td class="item">得意先名称</td>
                            <td>
                                <input name="customer_name" type="text" class="normal" value="<?php echo set_value_c('customer_name', $search); ?>" />&nbsp;を含む
                            </td>
                        </tr>
                        <tr>
                            <td class="item">売上計上日</td>
                            <td>
                                <input name="book_date_from" value="<?php echo set_value_c('book_date_from', $search); ?>" class="size_date date" />&nbsp;～
                                <input name="book_date_to" value="<?php echo set_value_c('book_date_to', $search); ?>" class="size_date date" />
                            </td>
                        </tr>
                        <tr>
                            <td class="item">担当者名称</td>
                            <td>
                                <input name="handler_name" type="text" value="<?php echo set_value_c('handler_name', $search); ?>" />&nbsp;を含む
                            </td>
                        </tr>
                        <tr>
                            <td class="item">報告書No</td>
                            <td>
                                <input name="report_no" type="text" value="<?php echo set_value_c('report_no', $search); ?>" class="report_no" maxlength="10" />&nbsp;を含む
                            </td>
                        </tr>
                        <tr>
                            <td class="item">研究所</td>
                            <td>
                                <select name="institute_id" class="" style="width:160px;">
                                    <option value=""></option>
                                    <?php foreach($mst['institute_list'] as $data): ?>
                                        <option value="<?php echo $data->institute_id; ?>" <?php echo set_select_c('institute_id', $data->institute_id, $search); ?>><?php echo $data->institute_name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="item">部門</td>
                            <td>
                                <select name="depart_id" class="" style="width:160px;">
                                    <option value=""></option>
                                    <?php foreach($mst['depart_list'] as $data): ?>
                                        <option value="<?php echo $data->depart_id; ?>" <?php echo set_select_c('depart_id', $data->depart_id, $search); ?>><?php echo $data->depart_name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="item">摘要</td>
                            <td>
                                <select name="abstract_id" class="" style="width:180px;">
                                    <option value=""></option>
                                    <?php foreach($mst['abstract_list'] as $data): ?>
                                        <option value="<?php echo $data->abstract_id; ?>" <?php echo set_select_c('abstract_id', $data->abstract_id, $search); ?>><?php echo $data->abstract_name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="item">入金種別</td>
                            <td>
                                <select name="credit_type" class="" style="width:100px;">
                                    <option value=""></option>
                                    <?php foreach($mst['credit_type'] as $data): ?>
                                        <option value="<?php echo $data->item_cd; ?>" <?php echo set_select_c('credit_type', $data->item_cd, $search); ?>><?php echo $data->item_name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="item">データ状態</td>
                            <td>
                                <select name="data_status_type" class="" style="width:160px;">
                                    <option value=""></option>
                                    <?php foreach($mst['data_status_type'] as $data): ?>
                                        <option value="<?php echo $data->item_cd; ?>" <?php echo set_select_c('data_status_type', $data->item_cd, $search); ?>><?php echo $data->item_name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                        </tr>
                    </table>
                </td>
                <td class="disp_btn">
                    <table>
                        <tr>
                            <td>
                                <input type="submit" class="size_L" value="検索" />
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-top: 10px;">
                                <input type="button" class="size_L" value="クリア" onclick="clear_search_item();" />
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </form>
</div>
<div class="contents_blk">
	
    <div class="other" style="width: 100%;">
        <div class="list_cnt"><?PHP echo $cnt_info; ?></div>
        <?PHP echo $page_link; ?>
    </div>
    <table class="basic_tbl">
    <tr>
            <th class="basic_no">No</th>
            <th style="width: 170px;">得意先名称</th>
            <th style="width: 110px;">売上計上日</th>
            <th style="width: 170px;">担当者情報</th>
            <th style="width: 90px;">入金種別<br />摘要</th>
            <th style="width: 70px;">売上金額<br />(税込)</th>
            <th style="width: 100px;">データ状態</th>
            <th style="width: 54px; text-align: center; padding: 0;">受注<br/>連携</th>
            <th class="btn_th"></th>
            <th class="btn_th"></th>
            <th class="btn_th"></th>
    </tr>
    <?php if(count($list_data) == 0): ?>
    <tr>
        <td class="no_list" colspan="10"><span class="red"><?= WARN_NO_LIST_MSG ?></span></td>
    </tr>
    <?php else: ?>
        <?php foreach($list_data as $val): ?>
            <tr>
                <td class="basic_no">
                    <?PHP echo $val->no; ?>
                </td>
                <td class="" style="">
                        <?PHP echo $val->customer_disp_name; ?><br /><?PHP echo $val->customer_type_name ?>
                </td>
                <td class="" style="">
                        <?PHP echo $val->disp_book_date; ?>
                </td>
                <td class="" style="">
                    <?PHP if(empty($val->institute_name)): ?>
                        <?PHP echo $val->disp_depart; ?><br /><?PHP echo $val->handler_name ?>
                    <?PHP else: ?>
                        <?PHP echo $val->institute_name; ?>&nbsp;&nbsp;<?PHP echo $val->depart_name; ?><br /><?PHP echo $val->handler_name ?>
                    <?PHP endif; ?>
                </td>
                <td class="" style="">
                    <?PHP echo $val->credit_type_name; ?><br /><?PHP echo $val->abstract_name; ?>
                </td>
                <td class="data_right" style="">
                    <?PHP echo $val->disp_sum_money; ?>
                </td>
                <td class="" style="">
                    <?PHP echo $val->data_status_type_name; ?>
                </td>
                <td class="btn_td">
		    <input type="button" class="list_btn" value="確認" onclick="window.open('/other/outside_relation_list/?id=<?php echo $val->sales_mng_id; ?>', 'relation', 'width=500, height=400, menubar=no, toolbar=no, scrollbars=yes, resizable=yes')" />
                </td>
                <td class="btn_td">
                    <input type="button" class="list_btn" value="複製" onclick="copy_data('<?php echo $val->sales_mng_id; ?>');" />
                </td>
                <?PHP if($val->data_status_type == DATA_TYPE_CREDIT || $val->data_status_type == DATA_TYPE_CLOSE ): ?>
                    <td style="text-align: center;padding: 0;">
                        <input type="button" class="list_btn" value="変更" onclick="before_upd_data('<?php echo $val->sales_mng_id; ?>', 'b');" />
                    </td>
                <?PHP else: ?>
                    <td class="btn_td">
                        <input type="button" class="list_btn" value="変更" onclick="upd_data('<?php echo $val->sales_mng_id; ?>');" <?php echo get_status_ctrl($val->data_status_type); ?> />
                    </td>
                <?PHP endif; ?>
                <td class="btn_td">
                    <input type="button" class="list_btn" value="削除" onclick="sales_del_data('<?php echo $val->sales_mng_id; ?>', '<?php echo $val->data_status_type; ?>', '<?php echo $val->disp_book_date; ?>');" <?php echo get_status_ctrl($val->data_status_type); ?>  />
                </td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
    </table>
</div>
