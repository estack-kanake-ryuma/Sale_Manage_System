<div class="contents_blk">
    <table class="caption_tbl">
        <tr>
            <td>■振込入金消込</td>
        </tr>
    </table>
    <form name="search_form" method="post" action="/credit/transfer_del_single">
        <input id="post_name" type="hidden" name="post_name" value="<?PHP echo $post_data['post_name']; ?>" />
        <input id="post_id" type="hidden" name="post_id" value="" />
        <input id="post_sel_del" type="hidden" name="post_sel_del" value="<?PHP echo $post_data['post_sel_del']; ?>" />
        <input type="hidden" name="search" value="search" />
    </form>
    <div style="width: 840px;height: 20px;text-align: right;">
        <a onclick="all_data();" style="cursor: pointer;">→&nbsp;全件表示</a>
    </div>
    <table id="transfer_del_single_tbl" class="credit_tbl">
        <thead>
        <tr>
            <th class="title" colspan="7">入金情報</th>
        </tr>
        <tr>
            <th class="title basic_no">No.</th>
            <th class="title" style="width: 200px;">得意先</th>
            <th class="title" style="width: 110px;">入金日</th>
            <th class="title" style="width: 110px;" >入金額</th>
            <th class="title" style="width: 110px;">振込消込額</th>
            <th class="title" style="width: 110px;">その他消込額</th>
            <th class="title" style="width: 110px;">入金残高</th>
        </tr>
        </thead>
        <tbody>
        <?php if(count($list_data['credit_list']) == 0): ?>
        <tr>
            <td class="no_list" colspan="7" style="background-color: #FFFFFF;"><span class="red"><?= WARN_NO_LIST_MSG ?></span></td>
        </tr>
        <?php endif; ?>
        <?php $i=1; foreach($list_data['credit_list'] as $val): ?>
        <tr>
            <td class="basic_no"><?= $i; ?></td>
            <td  style="width: 200px;cursor: pointer" onclick="select_data(this);">
                <?php echo $val->customer_disp_name; ?>
                <input type="hidden" name="customer_disp_name" value="<?php echo $val->customer_disp_name; ?>" />
                <input type="hidden" name="credit_received_id[]" value="<?php echo $val->credit_received_id; ?>" />
            </td>
            <td style="width: 110px;cursor: pointer" onclick="select_data(this);">
                <?php echo $val->disp_credit_date ?>
            </td>
            <td class="data_right" style="width: 110px;cursor: pointer" onclick="select_data(this);">
                <?php echo $val->disp_credit_money ?>
            </td>
            <td class="data_right" style="width: 110px;cursor: pointer" onclick="select_data(this);">
                <?php echo $val->disp_transfer_money ?>
            </td>
            <td class="data_right" style="width: 110px;cursor: pointer" onclick="select_data(this);">
                <?php echo $val->disp_other_money ?>
            </td>
            <td class="data_right" style="width: 110px;cursor: pointer" onclick="select_data(this);">
                <?php echo $val->disp_balance_money ?>
            </td>
        </tr>
        <?$i++;endforeach; ?>
        </tbody>
    </table>
    <div class="clear"></div>
    <div class="sep_line"></div>
    <div class="other" style="width: 970px;margin-bottom: 10px;">
        <div class="list_cnt"><?PHP echo $cnt_info; ?></div>
        <?PHP echo $page_link; ?>
    </div>
    <div style="width: 970px;margin: auto 0;">
        <div style="float: left;">
            <label for="sel_del">
                <input id="sel_del" type="checkbox" name="sel_del" onclick="select_del_data(this);" <?php echo empty($post_data['post_sel_del'])? "":"checked=checked"; ?> />消込済みを表示
            </label>
        </div>
        <div style="float: right;">
            <a onclick="all_data();" style="cursor: pointer;">→&nbsp;全件表示</a>
        </div>
        <div class="clear"></div>
    </div>
    <table class="transfer_del_tbl">
        <tr>
            <th class="title_p" colspan="6">請求情報</th>
            <th class="title_p" colspan="5">消込情報設定</th>
        </tr>
        <tr>
            <th class="title basic_no">No.</th>
            <th class="title" style="width: 200px;">得意先</th>
            <th class="title" style="width: 85px;">請求書番号</th>
            <th class="title" style="width: 80px;">請求日</th>
            <th class="title" style="width: 80px;" >請求額</th>
            <th class="title" style="width: 80px;" >請求残額</th>
            <th class="title" style="width: 110px;">消込日</th>
            <th class="title" style="width: 85px;">消込額</th>
            <th class="title" style="width: 85px;">振込手数料</th>
            <th class="title" style="width: 40px;">行番</th>
            <th class="title" style="width: 40px;"></th>
        </tr>
        <?php if(count($list_data['bill_list']) == 0): ?>
        <tr>
            <td class="no_list" colspan="11"><span class="red"><?= WARN_NO_LIST_MSG ?></span></td>
        </tr>
        <?php endif; ?>
        <?php $row_cnt=0; ?>
        <?php $i=1; foreach($list_data['bill_list'] as $val): ?>
        <tr>
            <td class="basic_no"><?= $i; ?></td>
            <td style="width: 190px;cursor: pointer" onclick="select_data(this);">
                <span><?php echo $val['customer_disp_name']; ?></span>
            </td>
            <td>
                <span><?php echo $val['disp_bill_no']; ?></span>
            </td>
            <td>
                <span><?php echo $val['disp_bill_date']; ?></span>
            </td>
            <td class="data_right" style="padding-right: 4px;">
                <?php echo $val['disp_bill_money']; ?>
            </td>
            <td class="data_right" style="padding-right: 4px;">
                <span class="red"><?php echo $val['disp_sum_balance_money']; ?></span>
            </td>
            <td colspan="5">
                <form name="regist_form" method="post" action="/credit/transfer_del_single/index<?PHP echo ($this->uri->segment(4) == false) ?  "" : "/".$this->uri->segment(4); ?>">
                <input type="hidden" name="bill_mng_id[]" value="<?php echo $val['bill_mng_id']; ?>" />
                <input type="hidden" name="max_row" value="" />
                <input type="hidden" name="target_row" value="" />
                <input type="hidden" name="regist" value="regist" />
                <input type="hidden" name="customer_disp_name" value="<?php echo $val['customer_disp_name']; ?>" />
                <input type="hidden" name="bill_money" value="<?php echo $val['bill_money']; ?>" />
                <input type="hidden" name="sum_balance_money" value="<?php echo $val['sum_balance_money']; ?>" />
                <input type="hidden" name="bill_no" value="<?php echo $val['bill_no']; ?>" />
                <table id="reconcile_tbl" class="inner" style="height: 60px;">
                    <?php $j=0; foreach($val['reconcile_data'] as $reconcile): ?>
                    <?php if(empty($reconcile['disp_reconcile_date'])): ?>
                        <tr>
                            <td id="reconcile_date_td<?=($row_cnt);?>" style="width: 110px;padding-left: 4px;border-right: 1px solid #C0C0C0;">
                                <input type="text" name="reconcile_date[<?php echo $val['bill_mng_id']; ?>][]" class="date size_date" value="<?php echo set_value_c('reconcile_date['.$val['bill_mng_id'].'][]', $reconcile['disp_reconcile_date']); ?>" />
                                <?php echo form_error_c_ary('reconcile_date['.$val['bill_mng_id'].'][]', $j, 'reconcile_date_td'.$row_cnt); ?>
                            </td>
                            <td id="reconcile_money_td<?=($row_cnt);?>" style="width: 85px;padding-left: 4px;border-right: 1px solid #C0C0C0;">
                                <input type="text" name="reconcile_money[<?php echo $val['bill_mng_id']; ?>][]" class="money" value="<?php echo set_value_c('reconcile_money['.$val['bill_mng_id'].'][]', $reconcile['disp_reconcile_money']); ?>" style="width: 70px" maxlength="8" />
                                <?php echo form_error_c_ary('reconcile_money['.$val['bill_mng_id'].'][]', $j, 'reconcile_money_td'.$row_cnt); ?>
                            </td>
                            <td id="charge_money_td<?=($row_cnt);?>" style="width: 85px;padding-left: 4px;border-right: 1px solid #C0C0C0;">
                                <input type="text" name="charge_money[<?php echo $val['bill_mng_id']; ?>][]" class="money" value="<?php echo set_value_c('charge_money['.$val['bill_mng_id'].'][]', $reconcile['disp_charge_money']); ?>" style="width: 70px" />
                                <?php echo form_error_c_ary('charge_money['.$val['bill_mng_id'].'][]', $j, 'charge_money_td'.$row_cnt); ?>
                            </td>
                            <td id="credit_no_td<?=($row_cnt);?>" style="width: 40px;padding-left: 4px;border-right: 1px solid #C0C0C0;">
                                <input type="text" name="credit_no[<?php echo $val['bill_mng_id']; ?>][]" value="<?php echo set_value_c('credit_no['.$val['bill_mng_id'].'][]'); ?>" style="width: 30px;" class="credit_no half_str" />
                                <?php echo form_error_c_ary('credit_no['.$val['bill_mng_id'].'][]', $j, 'credit_no_td'.$row_cnt); ?>
                                <input type="hidden" name="credit_received_id[]" value="" />
                            </td>
                            <td style="text-align: center">
                                <input type="button" value="消込" style="margin: 0" onclick="del_submit(this);" />
                            </td>
                        </tr>
                        <?PHP $j++; ?>
                    <?php else: ?>
                        <tr>
                            <td style="width: 110px;padding-left: 4px;border-right: 1px solid #C0C0C0;">
                                <?php echo $reconcile['disp_reconcile_date'];  ?>
                            </td>
                            <td class="data_right" style="width: 85px;padding-right: 4px;border-right: 1px solid #C0C0C0;">
                                <?php if(!empty($reconcile['disp_reconcile_type'])) echo '<span style="font-size:0.9em;">'.$reconcile['disp_reconcile_type'].'</span>'; echo $reconcile['disp_reconcile_money'];  ?>
                            </td>
                            <td class="data_right" style="width: 85px;padding-right: 4px;border-right: 1px solid #C0C0C0;">
                                <?php echo $reconcile['disp_charge_money'];  ?>
                            </td>
                            <td style="width: 40px;padding-left: 4px;border-right: 1px solid #C0C0C0;">
                            </td>
                            <td style="text-align: center;">
                                <input type="button" value="取消" style="margin: 0" onclick="cancel_submit(this);" <?PHP if($reconcile['reconcile_type'] == RECONCILE_TYPE_FURI) { echo get_proc_ctrl($reconcile['disp_reconcile_date']); } else { echo 'disabled="disabled"'; } ?> title="test" />
                                <input type="hidden" name="credit_data_id[]" value="<?PHP echo $reconcile['credit_data_id']; ?>" />
                                <input type="hidden" name="charge_id[]" value="<?PHP echo $reconcile['charge_id']; ?>" />
                            </td>
                        </tr>
                    <?php endif; ?>
                    <?php $row_cnt++; ?>
                    <?php endforeach; ?>
                </table>
                </form>
            </td>
        </tr>
        <?php $i++; endforeach; ?>
    </table>
    <?php echo form_error_disp_ary(array('credit_received_id')); ?>
    <?PHP echo form_error_c('max_money'); ?>
	<?PHP echo form_error_c('check_process_data'); ?>
</div>
