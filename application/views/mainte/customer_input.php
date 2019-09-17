<div class="contents_blk">
        
    <form method="post" action="" onsubmit="return confirm('登録してよろしいですか？')">
        <table class="mst_input_tbl">
        <tr>
            <td colspan="4" class="title">基本情報</td>
        </tr>
        <tr>
            <td class="item">得意先名<span class="required">※</span></td>
            <td id="customer_name_td" colspan="3">
                <input id="customer_name" name="customer_name" type="text" class="normal" value="<?php echo set_value_c('customer_name', $customer); ?>" maxlength="50" onchange="copyTxt(this);" <?PHP echo isset($page_info['ctrl']) ? $page_info['ctrl'] : ""; ?> />&nbsp;&nbsp;<a onclick="confirm_name_bill()" href="#">請求書での表示を確認</a>
                <?php echo form_error_c('customer_name', 'customer_name_td'); ?>
                <?PHP echo isset($page_info['msg']) ? $page_info['msg'] : ""; ?>
            </td>
        </tr>
        <tr>
            <td class="item">ふりがな<span class="required">※</span></td>
            <td id="customer_furi_td" colspan="3">
                <input name="customer_furi" type="text" class="normal" value="<?php echo set_value_c('customer_furi', $customer); ?>" maxlength="75"  />
                <?php echo form_error_c('customer_furi', 'customer_furi_td'); ?>
            </td>
        </tr>
        <tr>
            <td class="item">呼称<span class="required">※</span></td>
            <td id="customer_disp_name_td" colspan="3">
                <input id="customer_disp_name" name="customer_disp_name" type="text" class="normal" value="<?php echo set_value_c('customer_disp_name', $customer); ?>" maxlength="50" <?PHP echo isset($page_info['ctrl']) ? $page_info['ctrl'] : ""; ?> />
                <?php echo form_error_c('customer_disp_name', 'customer_disp_name_td'); ?>
                <?PHP echo isset($page_info['msg']) ? $page_info['msg'] : ""; ?>
            </td>
        </tr>
        <tr>
            <td class="item">
                担当者
            </td>
            <td id="handler_name_td">
                <input name="handler_name" type="text" class="size_name" value="<?php echo set_value_c('handler_name', $customer); ?>" maxlength="25" />
                <?php echo form_error_c('handler_name', 'handler_name_td'); ?>
            </td>
            <td class="item">
                敬称
            </td>
            <td>
                <select name="prefix_cd" class="" style="width:100px;">
                    <option value=""></option>
                    <?php foreach($mst['prefix'] as $data): ?>
                    <option value="<?php echo $data->item_cd; ?>" <?php echo set_select_c('prefix_cd', $data->item_cd, $customer); ?>><?php echo $data->item_name; ?></option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
                <td class="item">得意先部署</td>
            <td colspan="3">
                <input name="depart_name" type="text" class="normal" value="<?php echo set_value_c('depart_name', $customer); ?>" maxlength="25" />
            </td>
        </tr>
        <tr>
                <td class="item">郵便番号</td>
            <td id="post_no_td" colspan="3">
                <input name="post_no_1" type="text" class="size_tel post_num" value="<?php echo set_value_c('post_no_1', $customer); ?>" maxlength="3" />&nbsp;&nbsp;-
                <input name="post_no_2" type="text" class="size_tel post_num" value="<?php echo set_value_c('post_no_2', $customer); ?>"  maxlength="4" />
                <?php echo form_error_c('post_no_1', 'post_no_td'); ?>
                <?php echo form_error_c('post_no_2', 'post_no_td'); ?>
            </td>
        </tr>
        <tr>
                <td class="item">番地まで</td>
            <td colspan="3">
                <input name="address" type="text" class="normal" value="<?php echo set_value_c('address', $customer); ?>" />
            </td>
        </tr>
        <tr>
                <td class="item">建物名</td>
            <td colspan="3">
                <input name="buil_name" type="text" class="normal" value="<?php echo set_value_c('buil_name', $customer); ?>" maxlength="50" />
            </td>
        </tr>
        <tr>
            <td class="item">
                ＴＥＬ
            </td>
            <td id="tel_no_td">
                <input name="tel_no_1" type="text" class="size_tel tel_num" value="<?php echo set_value_c('tel_no_1', $customer); ?>"  maxlength="4" />&nbsp;&nbsp;-&nbsp;&nbsp;
                <input name="tel_no_2" type="text" class="size_tel tel_num" value="<?php echo set_value_c('tel_no_2', $customer); ?>"  maxlength="4" />&nbsp;&nbsp;-&nbsp;&nbsp;
                <input name="tel_no_3" type="text" class="size_tel tel_num" value="<?php echo set_value_c('tel_no_3', $customer); ?>"  maxlength="4" />
                <?php echo form_error_c('tel_no_1', 'tel_no_td'); ?>
                <?php echo form_error_c('tel_no_2', 'tel_no_td'); ?>
                <?php echo form_error_c('tel_no_3', 'tel_no_td'); ?>
            </td>
            <td class="item">
                ＦＡＸ
            </td>
            <td id="fax_no_td">
                <input name="fax_no_1" type="text" class="size_tel tel_num" value="<?php echo set_value_c('fax_no_1', $customer); ?>"  maxlength="4" />&nbsp;&nbsp;-&nbsp;&nbsp;
                <input name="fax_no_2" type="text" class="size_tel tel_num" value="<?php echo set_value_c('fax_no_2', $customer); ?>"  maxlength="4" />&nbsp;&nbsp;-&nbsp;&nbsp;
                <input name="fax_no_3" type="text" class="size_tel tel_num" value="<?php echo set_value_c('fax_no_3', $customer); ?>"  maxlength="4" />
                <?php echo form_error_c('fax_no_1', 'fax_no_td'); ?>
                <?php echo form_error_c('fax_no_2', 'fax_no_td'); ?>
                <?php echo form_error_c('fax_no_3', 'fax_no_td'); ?>
            </td>
        </tr>
        <tr>
                <td colspan="4" class="title">システム設定情報</td>
        </tr>
        <tr>
            <td class="item">
                締日
            </td>
            <td>
                <select name="cutoff_date" class="disabled" style="width:100px;" <?PHP echo isset($page_info['ctrl']) ? $page_info['ctrl'] : ""; ?>>
                    <?php foreach($list['cutoff_date'] as $data): ?>
                    <option value="<?php echo $data['key']; ?>" <?php echo set_select_c('cutoff_date', $data['key'], $customer); ?>><?php echo $data['val']; ?></option>
                    <?php endforeach; ?>
                </select>
                <?PHP echo isset($page_info['msg']) ? $page_info['msg'] : ""; ?>
            </td>
                <td class="item">
                納品書印刷区分
            </td>
            <td>
                <label for="card_print_type_1"><input id="card_print_type_1" type="radio" name="card_print_type" value="0" <?php echo set_radio_c('card_print_type', '0', $customer); ?>  />しない</label>
                <label for="card_print_type_2"><input id="card_print_type_2" type="radio" name="card_print_type" value="1" <?php echo set_radio_c('card_print_type', '1', $customer); ?>/>する</label>
            </td>
        </tr>
        <tr>
            <td class="item">
                得意先区分
            </td>
            <td colspan="3">
                <?php $i=1; foreach($mst['customer_type'] as $data): ?>
                <label for="customer_type_<?=$i;?>"><input id="customer_type_<?=$i;?>" type="radio" name="customer_type" value="<?= $data->item_cd ?>" <?php echo set_radio_c('customer_type', $data->item_cd, $customer); ?>  /><?echo $data->item_name ?></label>
                <?php $i++; endforeach; ?>
            </td>
        </tr>
        <tr>
             <td class="item">
                入金種別
            </td>
            <td colspan="3">
                <select name="credit_type" class="" style="width:100px;">
                    <option value=""></option>
                    <?php foreach($mst['credit_type'] as $data): ?>
                    <option value="<?php echo $data->item_cd; ?>" <?php echo set_select_c('credit_type', $data->item_cd, $customer); ?>><?php echo $data->item_name; ?></option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="4" class="title">メモ</td>
        </tr>
        <tr>
             <td class="item">
                メモ
            </td>
            <td colspan="3">
                <textarea name="memo" class="memo"><?PHP echo set_value_c('memo', $customer); ?></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="4" class="bottom_button">
                <input type="submit" class="size_L" value="登録" onclick="init_disabled();" />
            </td>
        </tr>
        </table>
    </form>

</div>
