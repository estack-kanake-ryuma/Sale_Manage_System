<div class="contents_blk">
        
    <form name="search_form" method="post" action="/bill/bill_sales_print">
        <table  class="search_tbl">
            <tr>
                <td>
                    <table>
                        <tr>
                            <td class="item">得意先名称</td>
                            <td>
                                <input name="customer_name_s" type="text" class="normal" value="<?php echo set_value_c('customer_name_s', $search); ?>" />&nbsp;を含む
                            </td>
                        </tr>
                        <tr>
                            <td class="item">請求日</td>
                            <td>
                                <input name="bill_date_from" value="<?php echo set_value_c('bill_date_from', $search); ?>" class="size_date date" />&nbsp;～
                                <input name="bill_date_to" value="<?php echo set_value_c('bill_date_to', $search); ?>" class="size_date date" />
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
                                <input name="report_no" type="text" value="<?php echo set_value_c('report_no', $search); ?>" />&nbsp;を含む
                            </td>
                        </tr>
                        <tr>
                            <td class="item">請求書番号</td>
                            <td>
                                <input name="bill_no" type="text" value="<?php echo set_value_c('bill_no', $search); ?>" />&nbsp;を含む
                            </td>
                        </tr>
                        <tr>
                            <td class="item">研究所</td>
                            <td>
                                <select name="institute_id" class="" style="width:150px;">
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
                                <select name="depart_id" class="" style="width:150px;">
                                    <option value=""></option>
                                    <?php foreach($mst['depart_list'] as $data): ?>
                                    <option value="<?php echo $data->depart_id; ?>" <?php echo set_select_c('depart_id', $data->depart_id, $search); ?>><?php echo $data->depart_name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="item">請求書発行状況</td>
                            <td>
                                <label for="bill_status_type_1"><input id="bill_status_type_1" type="radio" name="bill_status_type" value="" checked="checked" />全て</label>
                                <?php $i=2; foreach($mst['bill_status_type'] as $data): ?>
                                <label for="bill_status_type_<?PHP echo $i; ?>"><input id="bill_status_type_<?PHP echo $i; ?>" type="radio" name="bill_status_type" value="<?= $data->item_cd ?>" <?php echo set_radio_c('bill_status_type', $data->item_cd, $search); ?>  /><?= $data->item_name ?></label>
                                <?php $i++; endforeach; ?>
                            </td>
                        </tr>
                    </table>
                </td>
                <td class="disp_btn">
                    <table>
                        <tr>
                            <td>
                                <input type="submit" name="search" class="size_L" value="検索" />
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
	
    <?PHP echo form_error_c('is_check'); ?>
    <div class="other" style="width: 930px;">
        <div class="list_cnt"><?PHP echo $cnt_info; ?></div>
        <?PHP echo $page_link; ?>
    </div>
    <form name="regist_form" method="post" action="/bill/bill_sales_print/output<?PHP echo ($this->uri->segment(4) == false) ?  "" : "/".$this->uri->segment(4); ?>">
        <input type="hidden" name="bill_status_type" value="<?PHP echo isset($search['bill_status_type']) ? $search['bill_status_type'] : ""; ?>" />
        <table class="basic_tbl">
        <tr>
            <th class="basic_no">No</th>
            <th class="chk_row">
                <input type="checkbox" name="print_chk_all" value="" onclick="chk_all(this);" />
            </th>
            <th style="width: 180px;">得意先名称</th>
            <th style="width: 100px;">請求日</th>
            <th style="width: 50px; padding: 0; text-align: center;">入金<br/>種別</th>
            <th style="width: 155px;">担当者情報</th>
            <th style="width: 80px;">請求金額</th>
            <th style="width: 85px;">請求書番号</th>
            <th style="width: 60px;">発行状況</th>
            <th style="width: 68px;"></th>
            <th class="btn_th"></th>
        </tr>
        <?php if(count($list_data) == 0): ?>
        <tr>
            <td class="no_list" colspan="11"><span class="red"><?= WARN_NO_LIST_MSG ?></span></td>
        </tr>
        <?php else: ?>
            <?php foreach($list_data as $val): ?>
                <tr>
                    <td class="basic_no">
                        <?PHP echo $val->no; ?>
                    </td>
                    <td class="chk_row">
                        <input type="checkbox" name="print_chk[]" value="" onclick="set_chk_value(this);" <?php echo get_bill_status_ctrl($val->disp_bill_date, $val->bill_mng_id); ?> />
                        <input type="hidden" name="sales_mng_id[]" value="<?PHP echo $val->sales_mng_id; ?>" />
                        <input type="hidden" name="bill_mng_id[]" value="<?PHP echo $val->bill_mng_id; ?>" />
                    </td>
                    <td class="" style="">
                        <?PHP echo $val->customer_disp_name; ?>
                        <input type="hidden" name="customer_disp_name[]" value="<?PHP echo $val->customer_disp_name; ?>" />
                        <input type="hidden" name="customer_name[]" value="<?PHP echo $val->customer_name; ?>" />
                        <input type="hidden" name="customer_id[]" value="<?PHP echo $val->customer_id; ?>" />
                    </td>
                    <td class="" style="">
                        <?PHP echo $val->disp_bill_date ?>
                        <input type="hidden" name="bill_date[]" value="<?PHP echo $val->disp_bill_date; ?>" />
                    </td>
                    <td class="btn_td">
                        <?PHP echo $val->credit_type_name ?>
                        <input name="credit_type[]" type="hidden" value="<?PHP echo $val->credit_type ?>" />
                    </td>
                    <td class="" style="">
                        <?PHP echo $val->institute_name; ?>&nbsp;&nbsp;<?PHP echo $val->depart_name; ?><br /><?PHP echo $val->handler_name ?>
                    </td>
                    <td class="data_right" style="">
                        <?PHP echo $val->disp_sum_money; ?>
                        <input type="hidden" name="bill_money[]" value="<?PHP echo $val->sum_money; ?>" />
                    </td>
                    <td class="" style="">
                        <?PHP echo $val->disp_bill_no; ?>
                    </td>
                    <td class="" style="text-align: center; padding:0;">
                        <?PHP echo $val->bill_stauts_type_name; ?>
                    </td>
                    <td class="btn_td" >
                        <input type="button" value="売上確認" style="width: 70px;height: 35px;" onclick="open_confirm(<?PHP echo $val->sales_mng_id; ?>);"  />
                    </td>
                    <td class="btn_td">
                        <input type="button" class="list_btn" value="削除" onclick="bill_del_data(<?PHP echo $val->bill_mng_id; ?>, '<?PHP echo $val->disp_bill_date; ?>');" <?php echo get_bill_status_btn_ctrl($val->disp_bill_date, $val->bill_mng_id, $val->credit_mng_id); ?>  />
                    </td>
                </tr>
            <?php endforeach; ?>
                <tr>
                    <td colspan="10" class="bottom_button">
                        <input type="submit" name="print" class="size_L" value="発行" onclick="return confirm('発行します。よろしいですか？');" />
                    </td>
                </tr>
        <?php endif; ?>
        </table>
    </form>
</div>
