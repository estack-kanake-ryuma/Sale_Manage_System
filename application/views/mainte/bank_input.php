<div class="contents_blk">
        
    <form method="post" action="" onsubmit="return confirm('登録してよろしいですか？')">
        <table class="mst_input_tbl">
            <tr>
                <td colspan="4" class="title">基本情報</td>
            </tr>
            <tr>
                <td class="item">銀行名称<span class="required">※</span></td>
                <td id="bank_name_td" name="bank_name_td" colspan="3">
                    <input name="bank_name" type="text" class="normal" value="<?php echo set_value_c('bank_name', $bank); ?>" style="width: 150px" maxlength="25" />&nbsp;銀行
                    <?php echo form_error_c('bank_name', 'bank_name_td'); ?>
                </td>
            </tr>
            <tr>
                <td class="item">支店名称<span class="required">※</span></td>
                <td id="branch_name_td" colspan="3">
                    <input name="branch_name" type="text" class="normal" value="<?php echo set_value_c('branch_name', $bank); ?>" style="width: 150px" maxlength="25" />&nbsp;支店
                    <?php echo form_error_c('branch_name', 'branch_name_td'); ?>
                </td>
            </tr>
            <tr>
                <td class="item">口座種別<span class="required">※</span></td>
                <td id="account_type_td" colspan="3">
                    <select name="account_type" class="" style="width:100px;">
                        <option value=""></option>
                        <?php foreach($mst['account_type'] as $data): ?>
                        <option value="<?php echo $data->item_cd; ?>" <?php echo set_select_c('account_type', $data->item_cd, $bank); ?>><?php echo $data->item_name; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?php echo form_error_c('account_type', 'account_type_td'); ?>
                </td>
            </tr>
            <tr>
                <td class="item">口座番号<span class="required">※</span></td>
                <td id="account_no_td" colspan="3">
                    <input name="account_no" type="text" class="half_str" value="<?php echo set_value_c('account_no', $bank); ?>" maxlength="7" />
                    <?php echo form_error_c('account_no', 'account_no_td'); ?>
                </td>
            </tr>
            <tr>
                <td colspan="4" class="title">メモ</td>
            </tr>
            <tr>
                 <td class="item">
                    メモ
                </td>
                <td id="memo_td">
                    <textarea name="memo" class="memo"><?php echo set_value_c('memo', $bank); ?></textarea>
                    <?php echo form_error_c('memo', 'memo_td'); ?>
                </td>
            </tr>
            <tr>
                    <td colspan="4" class="bottom_button">
                    <input type="submit" class="size_L" value="登録" />
                </td>
            </tr>
        </table>
    </form>

</div>
