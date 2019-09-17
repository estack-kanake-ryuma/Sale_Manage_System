<div class="contents_blk">
        
    <form name="search_form" method="post" action="/bill/bill_cutoff_print">
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
                            <td class="item">締日</td>
                            <td>
                                <select name="cutoff_date" class="" style="width:100px;">
                                    <option value=""></option>
                                    <?php foreach($mst['cutoff_date'] as $data): ?>
                                    <option value="<?php echo $data['key']; ?>" <?php echo set_select_c('cutoff_date', $data['key'], $search); ?>><?php echo $data['val']; ?></option>
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
    <div class="other" style="width: 926px;">
        <div class="list_cnt"><?PHP echo $cnt_info; ?></div>
        <?PHP echo $page_link; ?>
    </div>
    
    <form name="regist_form" method="post" action="/bill/bill_cutoff_print/output<?PHP echo ($this->uri->segment(4) == false) ?  "" : "/".$this->uri->segment(4); ?>">
        <input type="hidden" name="bill_status_type" value="<?PHP echo isset($search['bill_status_type']) ? $search['bill_status_type'] : ""; ?>" />
        <input type="hidden" name="cutoff_date" value="<?PHP echo isset($search['cutoff_date']) ? $search['cutoff_date'] : ""; ?>" />
        <table class="basic_tbl">
        <tr>
            <th class="basic_no">No</th>
            <th class="chk_row">
                <input type="checkbox" name="print_chk_all" value="" onclick="chk_all(this);" />
            </th>
            <th style="width: 220px;">得意先名称</th>
            <th style="width: 170px;">請求範囲</th>
            <th style="width: 40px;">締日</th>
            <th style="width: 50px; padding: 0; text-align: center;">入金<br/>種別</th>
            <th style="width: 60px;">発行状況</th>
            <th style="width: 80px;">請求範囲<br/>合計金額</th>
            <th style="width: 90px;">請求書番号</th>
            <th style="width: 64px;"></th>
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
                        <input type="checkbox" name="print_chk[]" value="" onclick="set_chk_value(this);" <?php echo get_bill_status_ctrl($val->disp_bill_date, $val->bill_mng_id, $val->cutoff_flg); ?> />
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
                        <?PHP echo $val->cutoff_date_from; ?>&nbsp;～&nbsp;<?PHP echo $val->cutoff_date_to; ?>
                    </td>
                    <td>
                        <?PHP echo $val->disp_cutoff_date; ?>
                        <input type="hidden" name="bill_date[]" value="<?PHP echo $val->disp_bill_date; ?>" />
                    </td>
                    <td style="text-align:center; padding:0;">
                        <?PHP echo $val->credit_type_name; ?>
                        <input type="hidden" name="credit_type[]" value="<?PHP echo $val->credit_type; ?>" />
                    </td>
                    <td class="" style="">
                        <?PHP echo $val->bill_stauts_type_name; ?>
                        <input type="hidden" name="cutoff_flg[]" value="<?= $val->cutoff_flg; ?>" />
                    </td>
                    <td class="data_right" style="">
                        <?PHP echo $val->sum_money; ?>
                        <input type="hidden" name="sum_money[]" value="<?PHP echo str_replace(",", "", $val->sum_money); ?>" />
                    </td>
                    <td>
                        <?PHP echo $val->disp_bill_no; ?>
                    </td>
                    <td class="btn_td">
                        <input type="button" class="" value="売上確認" onclick="open_confirm(<?PHP echo "'".$val->sales_mng_id."'"; ?>);" style="height: 35px;"  />
                    </td>
                    <td class="btn_td">
                        <input type="button" class="list_btn" value="削除" onclick="bill_del_data('<?PHP echo $val->bill_mng_id; ?>', '<?PHP echo $val->disp_bill_date; ?>');" <?php echo get_bill_status_btn_ctrl($val->disp_bill_date, $val->bill_mng_id, $val->credit_mng_id); ?>  />
                    </td>
                </tr>
            <?php endforeach; ?>
                <tr>
                    <td colspan="10" class="bottom_button">
                        <input type="submit" class="size_L" name="print" value="発行" onclick="return confirm('発行します。よろしいですか？');" />
                    </td>
                </tr>
        <?php endif; ?>
        </table>
    </form>
</div>
