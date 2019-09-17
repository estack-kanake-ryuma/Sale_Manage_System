<div class="contents_blk">
    <table class="caption_tbl">
        <tr>
            <td>■入金情報入力</td>
        </tr>
    </table>
    <form name="regist_form" method="post" action="/credit/credit_input">
        <table>
            <tr>
                <td style="width: 420px;vertical-align: top;padding-top: 35px;">
                    <table class="credit_tbl">
                        <tr>
                            <th style="width: 100px;">入金日</th>
                            <td id="credit_date_td" style="width: 140px;">
                                <input id="credit_date" type="text" class="date size_date" name="credit_date" value="<?php echo set_value_c('credit_date', $search); ?>" />
                                <?php echo form_error_c('credit_date', 'credit_date_td'); ?>
                            </td>
                        <tr>
                            <th>口座情報</th>
                            <td id="bank_id_td" style="width: 270px;">
                                <select id="bank_id" name="bank_id" class="" style="width:240px;">
                                    <option value=""></option>
                                    <?php foreach($mst['bank_list'] as $data): ?>
                                    <option value="<?php echo $data->bank_id; ?>" <?php echo set_select_c('bank_id', $data->bank_id, $search); ?>><?php echo $data->disp_bank; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?php echo form_error_c('bank_id', 'bank_id_td'); ?>
                            </td>
                        </tr>
                            <th>入金総額</th>
                            <td>
                                <span id="sum_credit_money"></span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="border:0;height: 80px;text-align: center;">
                                <input type="submit" value="表示" class="size_L" />
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="vertical-align: top">
                    <table id="credit_tbl" class="credit_tbl">
                        <tr>
                            <td colspan="4" style="text-align: right;border: 0;">
                                <input type="button" value="行追加" style="width: 120px;height: 30px;" onclick="add_credit_data();" <?PHP echo $add_row_ctrl; ?> />
                            </td> 
                        </tr>
                        <tr>
                            <th class="basic_no">No</th> 
                            <th style="width: 250px;">得意先</th> 
                            <th style="width: 100px;">入金額</th> 
                            <th class="btn_th" style="width: 100px"></th> 
                        </tr>
                        <?PHP $i=1; foreach($credit as $value): ?>
                            <tr>
                                <td class="basic_no"><?= $i; ?></td>
                                <td id="customer_name_td<?= $i; ?>">
                                    <input name="customer_name[]" type="text" value="<?php echo set_value_c('customer_name[]', $credit, ($i-1)); ?>" style="width: 240px;" onblur="set_customer_id(this);" <?PHP if(isset($credit[($i-1)]['disabled'])) echo $credit[($i-1)]['disabled']; ?>  maxlength="50" onKeyPress="return submitStop(event);" />
                                    <input type="hidden" name="customer_id[]" value="<?php echo set_value_c('customer_id[]', $credit, ($i-1)); ?>" />
                                </td>
                                <td id="credit_money_td<?= $i; ?>">
                                    <input name="credit_money[]" type="text" class="money" value="<?php echo set_value_c('credit_money[]', $credit, ($i-1)); ?>" onblur="cumpute_credit_money();" maxlength="8" <?PHP if(isset($credit[($i-1)]['disabled'])) echo $credit[($i-1)]['disabled']; ?> onKeyPress="return submitStop(event);" />
                                </td>
                                <td>
                                    <input type="button" value="削除" class="del_btn" style="width: 90px;height: 30px;" onclick="del_credit_row(this);" <?PHP if(isset($credit[($i-1)]['disabled'])) echo $credit[($i-1)]['disabled']; ?>  />
                                    <input type="hidden" name="credit_received_id[]" value="<?php echo set_value_c('credit_received_id[]', $credit, ($i-1)); ?>" />
                                    <input type="hidden" name="reconcile_money[]" value="<?php echo set_value_c('reconcile_money[]', $credit, ($i-1)); ?>" />
                                    <input type="hidden" name="adjust_money[]" value="<?php echo set_value_c('adjust_money[]', $credit, ($i-1)); ?>" />
                                    <input type="hidden" name="first_money[]" value="<?php echo set_value_c('first_money[]', $credit, ($i-1)); ?>" />
                                </td>
                            </tr>
                        <?PHP $i++; endforeach; ?>
                    </table>
                    <?PHP echo form_error_c('all_required'); ?>
                    <?php echo form_error_disp_ary(array('customer_name', 'credit_money')); ?>
                    <table>
                    <tr>
                        <td style="height: 80px;text-align: center;width: 480px;">
                            <input name="data_flag" type="hidden" value="<?php echo $credit['data_flag']; ?>" />
                            <input name="regist" type="submit" class="size_L" value="登録" onclick="submit_regsit();" />
                        </td>
                    </tr>
                    </table>
                </td>
            </tr>
        </table>
    </form>
</div>
