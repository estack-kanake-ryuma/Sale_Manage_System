<div class="contents_blk">
    <table class="caption_tbl">
        <tr>
            <td>■表示条件設定</td>
        </tr>
    </table>
    <form name="search_form" method="post" action="/account/cutoff_cancel">
        <table class="search_tbl" style="background: none;">
            <tr>
                <td style="">
                    <table class="credit_tbl">
                        <tr>
                            <th style="width: 150px;">対象月</th>
                            <td id="date_td" style="width: 400px;">
                                <input name="target_month" type="text" class="size_date yearmonth" value="<?php echo set_value_c('target_month', $search); ?>"  />
                            </td>
                        </tr>
                        <tr>
                            <th>得意先</th>
                            <td>
                                <input type="text" name="customer_disp_name" value="<?php echo set_value_c('customer_disp_name', $search); ?>" style="width: 220px;" />&nbsp;を含む
                            </td>
                        </tr>
                        <tr>
                            <th>状態</th>
                            <td>
                                <label for="credit_status_1"><input id="credit_status_1" type="radio" name="credit_status" value="" checked="checked" />全て</label>
                                <?php $i=2; foreach($mst['credit_status'] as $data): ?>
                                <label for="credit_status_<?PHP echo $i; ?>">
                                    <input id="credit_status_<?PHP echo $i; ?>" type="radio" name="credit_status" value="<?= $data->item_cd ?>" <?php echo set_radio_c('credit_status', $data->item_cd, $search); ?>  /><?= $data->item_name ?>
                                </label>
                                <?php $i++; endforeach; ?>
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="text-align: center;width: 300px;">
                    <table style="width: 100%">
                        <tr>
                            <td>
                                <input type="submit" name="search" class="size_L" value="表示" />
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-top: 20px;">
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
    
    <table class="caption_tbl">
        <tr>
            <td>■一覧表示</td>
        </tr>
    </table>
    <div class="other" style="width: 950px;margin-bottom: 5px;margin-top: 10px;">
        <div class="list_cnt"><?PHP echo $cnt_info; ?></div>
        <?PHP echo $page_link; ?>
    </div>
    <table id="list_tbl" class="credit_tbl">
        <tr>
            <th class="basic_no">No.</th>
            <th style="width: 250px;">得意先名</th>
            <th style="width: 85px;">請求書No</th>
            <th style="width: 85px;">請求金額</th>
            <th style="width: 85px;">消込金額</th>
            <th style="width: 75px;">残額</th>
            <th style="width: 60px;"></th>
            <th style="width: 80px;">訂正日</th>
            <th style="width: 90px;">訂正消込金額</th>
            <th style="width: 90px;"></th>
        </tr>
        <?php if(count($list_data) == 0): ?>
        <tr>
            <td class="no_list" colspan="11"><span class="red"><?= WARN_NO_LIST_MSG ?></span></td>
        </tr>
        <?php else: ?>
        <?php $row_cnt = 0; ?>
        <?php $i=0;foreach($list_data as $val): ?>
        <tr class="list_tr">
            <td class="basic_no">
                <?PHP echo $val->no; ?>
            </td>
            <td>
                <?PHP echo $val->customer_disp_name; ?>
            </td>
            <td>
                <?PHP echo $val->disp_bill_no; ?>
            </td>
            <td class="data_right">
                <?PHP echo $val->disp_bill_money; ?>
            </td>
            <td class="data_right">
                <?PHP echo $val->disp_credit_money; ?>
            </td>
            <td class="data_right">
                <span class="red"><?PHP echo $val->disp_balance_money; ?></span>
            </td>
            <td>
                <a style="cursor: pointer" onclick="open_confirm('<?PHP echo $val->bill_mng_id; ?>');">→&nbsp;詳細</a>
            </td>
            <td colspan="4" style="padding: 0">
                <form name="regist_form" method="post" action="/account/cutoff_cancel/regist<?PHP echo ($this->uri->segment(4) == false) ?  "" : "/".$this->uri->segment(4); ?>">
                <input type="hidden" name="exec_name" value="" />
                <input type="hidden" name="target_month_search" value="" />
                <input type="hidden" name="bill_date[]" value="<?=$val->disp_bill_date; ?>" />
                <input type="hidden" name="bill_mng_id[]" value="<?=$val->bill_mng_id; ?>" />
                <input type="hidden" name="customer_disp_name[<?=$val->bill_mng_id; ?>]" value="<?=$val->customer_disp_name;?>" />
                <input type="hidden" name="bill_no[<?=$val->bill_mng_id; ?>]" value="<?=$val->bill_no;?>" />
                <input type="hidden" name="bill_money[<?=$val->bill_mng_id; ?>]" value="<?=$val->bill_money;?>" />
                <input type="hidden" name="credit_money[<?=$val->bill_mng_id; ?>]" value="<?=$val->credit_money;?>" />
                <input type="hidden" name="balance_money[<?=$val->bill_mng_id; ?>]" value="<?=$val->balance_money;?>" />
                <input type="hidden" name="credit_status" value="<?PHP echo isset($search['credit_status']) ? $search['credit_status'] : ""; ?>" />
                <table>
                    <?php $cnt=0;foreach($val->correct_info as $correct): ?>
                    <?php if(empty($correct->disp_correct_date)): ?>
                    <tr>
                        <td style="width: 77px;border: 0;border-right: 1px solid #C0C0C0;">
                            <?php echo $correct->disp_correct_date; ?>
                        </td>
                        <td id="correct_td_money<?=$row_cnt?>" style="border: 0;border-right: 1px solid #C0C0C0;width: 87px;">
							<input type="hidden" name="correct_type[<?=$val->bill_mng_id; ?>]" value="<?php echo '2'; ?>" />
                            <input type="text" name="correct_money[<?=$val->bill_mng_id; ?>][]" value="<?php echo set_value_c('correct_money['.$val->bill_mng_id.'][]', $correct->disp_correct_money); ?>" class="money" style="width: 70px;" <?PHP echo get_cutoff_cancel_ctrl($val->bill_date); ?> onKeyPress="return submitStop(event);" />
                            <?php echo form_error_c_ary('correct_money['.$val->bill_mng_id.'][]', $cnt, 'correct_td_money'.$row_cnt); ?>
                        </td>
                        <td style="border:0;padding: 0;text-align: center;width: 90px;text-align: center;">
                            <input type="button" value="登録" onclick="exec_regist(<?=$i;?>);" style="width: 60px;" <?PHP echo get_cutoff_cancel_ctrl($val->bill_date); ?> />
                        </td>
                    </tr>
                    <?PHP $cnt++; ?>
                    <?PHP else: ?>
                    <tr>
                        <td style="width: 77px;border: 0;border-right: 1px solid #C0C0C0;">
                            <?php echo $correct->disp_correct_date; ?>
                        </td>
                        <td id="correct_td_money<?=$row_cnt?>" class="data_right" style="border: 0;border-right: 1px solid #C0C0C0;width: 87px;padding-left: 0px;">
							<input type="hidden" name="correct_type[]" value="<?php echo '2'; ?>" />
                            <input type="hidden" name="can_correct_money[<?=$val->bill_mng_id; ?>]" value="<?= $correct->correct_money?>"/>
                            <?php echo $correct->disp_correct_money; ?>
                        </td>
                        <td style="border:0;padding: 0;text-align: center;width: 90px;text-align: center">
                            <input type="hidden" name="cutoff_correct_id[]" value="<?php echo $correct->cutoff_correct_id; ?>" />
                            <input type="button" value="削除" onclick="exec_cancel(<?=$i;?>);" style="width: 60px;" />
                        </td>
                    </tr>
                    <?PHP endif; ?>
                    <?php $row_cnt++;endforeach; ?>
                </table>
                </form>
            </td>
        </tr>
        <?php $row_cnt++;$i++; endforeach; ?>
        <?php endif; ?>
    </table>
    
</div>
