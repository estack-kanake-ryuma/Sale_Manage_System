<form name="transfer_del_form" method="post" action="/credit/transfer_del_all">
<div class="contents_blk">
    <table class="caption_tbl">
        <tr>
            <td>■表示条件設定</td>
        </tr>
    </table>
        <table class="search_tbl" style="background: none;">
            <tr>
                <td style="">
                    <table class="credit_tbl">
                        <tr>
                            <th style="width: 150px;">請求日</th>
                            <td style="width: 400px;">
                                <input type="text" class="date size_date" name="bill_date_from" value="<?php echo set_value_c('bill_date_from', $search); ?>" />&nbsp;～&nbsp;<input type="text" class="date size_date" name="bill_date_to" value="<?php echo set_value_c('bill_date_to', $search); ?>" />
                            </td>
                        </tr>
                        <tr>
                            <th>状態</th>
                            <td>
                                <?php $i=2; foreach($mst['credit_status'] as $data): ?>
                                <label for="credit_status_<?PHP echo $i; ?>">
                                    <input id="credit_status_<?PHP echo $i; ?>" type="radio" name="credit_status" value="<?= $data->item_cd ?>" <?php echo set_radio_c('credit_status', $data->item_cd, $search); ?> onclick="set_other_rb();" /><?= $data->item_name ?>
                                </label>
                                <?php $i++; endforeach; ?>
                            </td>
                        </tr>
                        <tr>
                            <th rowspan="4">その他条件</th>
                            <td>
                                <label for="other_rb_1">
                                    <input id="other_rb_1" type="radio" name="other_rb" value="1" <?php echo set_radio_c('other_rb', "1", $search); ?> />請求額と入金額が一致するデータを表示
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="other_rb_2">
                                    <input id="other_rb_2" type="radio" name="other_rb" value="2" <?php echo set_radio_c('other_rb', "2", $search); ?> />請求額と入金額の差が1,000円未満のデータを表示
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="other_rb_3">
                                    <input id="other_rb_3" type="radio" name="other_rb" value="3" <?php echo set_radio_c('other_rb', "3", $search); ?> />請求額と入金額の差が1,000円以上のデータを表示
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="other_rb_4">
                                    <input id="other_rb_4" type="radio" name="other_rb" value="4" <?php echo set_radio_c('other_rb', "4", $search); ?> />全てのデータを表示
                                </label>
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
                                <input type="button" class="size_L" value="クリア" onclick="clear_mine_search_item('1');" />
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
</div>
<div class="contents_blk">
    
    <table class="caption_tbl">
        <tr>
            <td>■振込一括消込</td>
        </tr>
    </table>

	<?php echo form_error_disp_ary(array('del_date')); ?>
	<?PHP echo form_error_c('is_check'); ?>
	<?PHP echo form_error_c('check_process_data'); ?>

    <div class="other" style="width: 970px;margin-bottom: 10px;">
        <?PHP echo $page_link; ?>
    </div>
    <table class="transfer_del_tbl">
        <?php if(count($list_data) == 0): ?>
        <tr>
            <td class="del_data_tbl" style="vertical-align: top;border: 0">
                <table id="bill_info_tbl" class="del_inner_tbl">
                    <tr>
                        <th class="title_p" colspan="4" style="border-right: 0;">請求書情報</th>
                        <th class="title_p" colspan="2">入金情報</th>
                        <th class="title_p" colspan="5">消込情報</th>
                    </tr>
                    <tr>
                        <th class="basic_no title">No.</th>
                        <th class="title" style="width: 200px;">得意先名称</th>
                        <th class="title" style="width: 95px;">請求書番号</th>
                        <th class="title" style="width: 100px;border-right: 0;">請求日<br />請求額</th>
                        <th class="basic_no title">No.</th>
                        <th class="title" style="width: 100px;">入金日<br />入金額</th>
                        <th class="title" style="width: 120px;">振込手数料</th>
                        <th class="title" style="width: 120px;">消込日<br />差額</th>
                        <th class="title" class="chk_row" style="width: 30px;"></th>
                        <th class="title" style="width: 100px" colspan="2"></th>
                    </tr>
                    <tr>
                        <td class="no_list" colspan="14"><span class="red"><?= WARN_NO_LIST_MSG ?></span></td>
                    </tr>
                </table>
             </td>
          </tr>
          <?php else: ?>
            <tr>
                <td class="del_data_tbl" style="vertical-align: top;border: 0">
                    <table id="bill_info_tbl" class="del_inner_tbl">
                        <tr>
                            <th class="title_p" colspan="4" style="border-right: 0;">請求書情報</th>
                        </tr>
                        <tr>
                            <th class="basic_no title">No.</th>
                            <th class="title" style="width: 180px;">得意先名称</th>
                            <th class="title" style="width: 110px;">請求書番号</th>
                            <th class="title" style="width: 100px;border-right: 0;">請求日<br />請求額</th>
                        </tr>
                        <?php $i=1; foreach($list_data as $val): ?>
                            <?php if($i > 1): ?>
                            <tr>
                                <td class="sep_row" colspan="7"></td>
                            </tr>
                            <?php endif; ?>
                            <tr>
                                <td class="basic_no" rowspan="<?php echo count($val['bill_info']); ?>">
                                    <?php echo $i; ?>
                                </td>
                                <td rowspan="<?php echo count($val['bill_info']); ?>">
                                    <span><?php echo $val['customer_disp_name']; ?></span>
                                </td>
                                <td>
                                    <table class="inner">
                                        <tr>
                                            <td>
                                                <span><?php echo $val['bill_info'][0]['disp_bill_no']; ?></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: right;padding-right: 4px;font-size: 0.85em;height: 10px;">
                                                <?php if(!empty($val['bill_info'][0]['disp_bill_no'])): ?>
                                                <a href="/credit/transfer_del_single/index/?id=<?php echo $val['bill_info'][0]['bill_mng_id']; ?>">→&nbsp;個別消込み</a>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    </table>
                                    <input type="hidden" name="bill_mng_id[]" value="<?php echo $val['bill_info'][0]['bill_mng_id']; ?>" />
                                </td>
                                <td class="inner_td last">
                                    <table class="inner">
                                        <tr>
                                            <td class="under_line">
                                                <span>
                                                    <?php echo $val['bill_info'][0]['bill_date']; ?>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="data_right">
                                                <span class="bill_money">
                                                    <?php echo $val['bill_info'][0]['disp_bill_money']; ?>
                                                    <input type="hidden" name="bill_money[]" value="<?php echo $val['bill_info'][0]['bill_money']; ?>" />
                                                    <input type="hidden" name="bill_no[]" value="<?php echo $val['bill_info'][0]['bill_no']; ?>" />
                                                </span>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <?php for($bill_cnt = 1;$bill_cnt < count($val['bill_info']);$bill_cnt++): ?>
                                <tr>
                                    <td>
                                        <table class="inner">
                                            <tr>
                                                <td>
                                                    <span><?php echo $val['bill_info'][$bill_cnt]['disp_bill_no']; ?></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: right;padding-right: 4px;font-size: 0.85em;height: 10px;">
                                                    <?php if(!empty($val['bill_info'][$bill_cnt]['disp_bill_no'])): ?>
                                                    <a href="/credit/transfer_del_single/index/?id=<?php echo $val['bill_info'][$bill_cnt]['bill_mng_id']; ?>">→&nbsp;個別消込み</a>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        </table>
                                        <input type="hidden" name="bill_mng_id[]" value="<?php echo $val['bill_info'][$bill_cnt]['bill_mng_id']; ?>" />
                                    </td>
                                    <td class="inner_td last">
                                        <table class="inner">
                                            <tr>
                                                <td class="under_line">
                                                    <span>
                                                        <?php echo $val['bill_info'][$bill_cnt]['bill_date']; ?>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="data_right">
                                                    <span class="bill_money">
                                                        <?php echo $val['bill_info'][$bill_cnt]['disp_bill_money']; ?>
                                                        <input type="hidden" name="bill_money[]" value="<?php echo $val['bill_info'][$bill_cnt]['bill_money']; ?>" />
                                                        <input type="hidden" name="bill_no[]" value="<?php echo $val['bill_info'][$bill_cnt]['bill_no']; ?>" />
                                                    </span>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            <?php endfor; ?>
                        <?php $i++; endforeach; ?>
                    </table>
                </td>
                <td style="vertical-align: top;border: 0">
                    <table id="credit_info_tbl" class="del_inner_tbl">
                        <?php if($val['reconcile_status'] == CREDIT_STATUS_ON): ?>
                            <tr>
                                <th class="title_p" colspan="2">入金情報</th>
                                <th class="title_p" colspan="4">消込情報</th>
                            </tr>
                            <tr>
                                <th class="basic_no title">No.</th>
                                <th class="title" style="width: 150px;"></th>
                                <th class="title" style="width: 90px;">消込日</th>
                                <th class="title" style="width: 90px;">振込手数料</th>
                                <th class="title" style="width: 90px">消込額</th>
                                <th class="title chk_row"></th>
                            </tr>
                        <?php else: ?>
                            <tr>
                                <th class="title_p" colspan="2">入金情報</th>
                                <th class="title_p" colspan="4">消込情報</th>
                            </tr>
                            <tr>
                                <th class="basic_no title">No.</th>
                                <th class="title" style="width: 100px;">入金日<br />入金額</th>
                                <th class="title" style="width: 120px;">振込手数料</th>
                                <th class="title" style="width: 120px;">消込日<br />差額</th>
                                <th class="title" style="width: 40px"></th>
                                <th class="title chk_row"></th>
                            </tr>
                        <?php endif; ?>
                        <?php $row_cnt=0; ?>
                        <?php $i=1; foreach($list_data as $val): ?>
                            <?php if($i > 1): ?>
                            <tr>
                                <td class="sep_row" colspan="7"></td>
                            </tr>
                            <?php endif; ?>
                            <?php for($credit_cnt = 0;$credit_cnt < count($val['credit_info']);$credit_cnt++): ?>
                            <?PHP $id = $val['credit_info'][$credit_cnt]['credit_received_id']; ?>
                            <tr>
                                <td class="basic_no">
                                    <?php echo $credit_cnt + 1; ?>
                                    <input type="hidden" name="credit_received_id[]" value="<?=$id?>" />
                                    <input type="hidden" name="credit_mng_id[]" value="<?=$val['bill_info'][$credit_cnt]['credit_mng_id']; ?>" />
                                    <input type="hidden" name="seq[<?= empty($id)? "" : "_".$id ;?>]" value="<?php echo isset($val['credit_info'][$credit_cnt]['seq']) ? $val['credit_info'][$credit_cnt]['seq'] : $credit_cnt; ?>" class="hd_seq" />
                                </td>
                                <td class="inner_td">
                                    <?php if($val['reconcile_status'] == CREDIT_STATUS_ON): ?>
                                    <span style="margin-left: 4px;" class="red">消込済みデータ</span>
                                    <?php else: ?>
                                        <table class="inner">
                                            <tr>
                                                <td class="under_line">
                                                    <span class="credit_date_lbl">
                                                        <?php echo $val['credit_info'][$credit_cnt]['credit_date']; ?>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="data_right">
                                                    <span class="credit_money">
                                                        <?php echo $val['credit_info'][$credit_cnt]['disp_balance_money']; ?>
                                                        <input type="hidden" name="balance_money[]" value="<?php echo $val['credit_info'][$credit_cnt]['balance_money']; ?>" />
                                                    </span>
                                                </td>
                                            </tr>
                                        </table>
                                    <?php endif; ?>
                                </td>
                                <td class="inner_td">
                                    <?php if($val['reconcile_status'] == CREDIT_STATUS_ON): ?>
                                        <span><?php echo $val['bill_info'][$credit_cnt]['del_date']; ?></span>
                                        <input name="credit_data_id[]" type="hidden" value="<?php echo set_value_c('credit_data_id[]', (array)$val['bill_info'][$credit_cnt], $credit_cnt); ?>" />
                                        <input name="charge_id[]" type="hidden" value="<?php echo set_value_c('charge_id[]', (array)$val['bill_info'][$credit_cnt], $credit_cnt); ?>" />
                                        <input type="hidden" name="charge_money[]" value="<?php echo set_value_c('charge_money[]', (array)$val['bill_info'][$credit_cnt], $credit_cnt); ?>" />
                                    <?php else: ?>
                                        <table class="inner">
                                            <tr>
                                                <td class="under_line" style="border-right: 1px solid #C0C0C0;">    
                                                    <span class="diff_msg_lbl">差額充当</span>
                                                </td>
                                                <td class="under_line chk_row">
                                                    <input name="set_diff_chk[<?=$id?>]" type="checkbox" value="<?=$id?>" onclick="set_charge_money(this);" <?php echo set_checkbox('set_diff_chk[]', $id); ?> class="diff_chk" />
                                                    <input type="hidden" name="charge_money[]" value="<?php echo set_value_c('charge_money[]', (array)$val['bill_info'][$credit_cnt], $credit_cnt); ?>" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="data_right">
                                                    <span class="charge_money"></span>
                                                </td>
                                            </tr>
                                        </table>
                                    <?php endif; ?>
                                </td>
                                <td class="inner_td">
                                    <?php if($val['reconcile_status'] == CREDIT_STATUS_ON): ?>
                                        <div style="width: 98%;text-align: right;">
                                            <span class="charge_money"><?php echo $val['bill_info'][$credit_cnt]['charge_money']; ?></span>
                                        </div>
                                    <?php else: ?>
                                        <table class="inner">
                                            <tr>
                                                <td id="del_date_td<?=($row_cnt+1);?>" class="under_line">
                                                    <input name="del_date[]" type="text" class="date size_date" value="<?php echo set_value_c('del_date[]', (array)$val['bill_info'][$credit_cnt], $credit_cnt); ?>" style="margin-left: 7px;" />
                                                    <input name="credit_data_id[]" type="hidden" value="<?php echo set_value_c('credit_data_id[]', (array)$val['bill_info'][$credit_cnt], $credit_cnt); ?>" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td  class="data_right">
                                                    <span class="diff_money"></span>
                                                </td>
                                            </tr>
                                        </table>
                                    <?php endif; ?>
                                </td>
                                <?php if($val['reconcile_status'] == CREDIT_STATUS_ON): ?>
                                <td style="width: 110px;" class="data_right">
                                    <span><?php echo $val['bill_info'][$credit_cnt]['disp_reconcile_money'] ?></span>
                                </td>
                                <td class="chk_row">
                                    <input name="set_target_chk[<?=$val['bill_info'][$credit_cnt]['credit_data_id'];?>]" type="checkbox" value="<?=$val['bill_info'][$credit_cnt]['credit_data_id'];?>" <?php echo set_checkbox('set_target_chk[]', $val['bill_info'][$credit_cnt]['credit_data_id']); ?> <?PHP echo get_proc_ctrl($val['bill_info'][$credit_cnt]['del_date']); ?> class="set_target_chk" />
                                </td>
                                <?php else: ?>
                                <td style="width: 40px;text-align: center;">
                                    <a style="cursor: pointer" class="up_list" onclick="up_list(this);">↑上へ</a>
                                </td>
                                <td class="chk_row">
                                    <input name="set_target_chk[<?=$id;?>]" type="checkbox" value="<?=$id;?>" onclick="set_del_date(this);" <?php echo set_checkbox('set_target_chk[]', $id); ?> class="set_target_chk" />
                                </td>
                                <?php endif; ?>
                            </tr>
                            <?php $row_cnt++; ?>
                            <?php endfor; ?>
                        <?php $i++; endforeach; ?>
                    </table>
                </td>    
            </tr>
            <tr>
                <td colspan="6" class="bottom_button" style="border: 0;height: 80px;">
                    <input id="regist_btn" name="regist" type="submit" class="size_L" value="消込登録" onclick="return confirm('消込登録をおこないます。よろしいですか？');" />
                    <input id="cancel_btn" name="cancel" type="submit" class="size_L" value="消込解除" style="display: none;" onclick="return confirm('消込解除をおこないます。よろしいですか？');" />
                </td>
            </tr>
            <?php endif; ?>
    </table>    

</div>
</form>