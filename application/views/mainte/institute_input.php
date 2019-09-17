<div class="contents_blk">
        
    <form method="post" action="" onsubmit="return confirm('登録してよろしいですか？')">
        <table class="mst_input_tbl">
            <tr>
                    <td colspan="4" class="title">基本情報</td>
            </tr>
            <tr>
                <td class="item">研究所名称<span class="required">※</span></td>
                <td id="institute_name_td" colspan="3">
                    <input name="institute_name" type="text" class="normal" value="<?php echo set_value_c('institute_name', $institute); ?>" maxlength="25" />
                    <?php echo form_error_c('institute_name', 'institute_name_td'); ?>
                </td>
            </tr>
            <tr>
                <td class="item">ふりがな<span class="required">※</span></td>
                <td id="institute_furi_td" colspan="3">
                    <input name="institute_furi" type="text" class="normal" value="<?php echo set_value_c('institute_furi', $institute); ?>" maxlength="50" />
                    <?php echo form_error_c('institute_furi', 'institute_furi_td'); ?>
                </td>
            </tr>
            <tr>
                <td class="item">郵便番号</td>
                <td id="post_no_td" colspan="3">
                    <input name="post_no_1" type="text" class="size_tel post_num" value="<?php echo set_value_c('post_no_1', $institute); ?>" maxlength="3" />&nbsp;&nbsp;-&nbsp;&nbsp;
                    <input name="post_no_2" type="text" class="size_tel post_num" value="<?php echo set_value_c('post_no_2', $institute); ?>" maxlength="4" />
                    <?php echo form_error_c('post_no_1', 'post_no_td'); ?>
                    <?php echo form_error_c('post_no_2', 'post_no_td'); ?>
                </td>
            </tr>
            <tr>
                <td id="address" class="item">番地まで</td>
                <td colspan="3">
                    <input name="address" type="text" class="normal" value="<?php echo set_value_c('address', $institute); ?>" />
                    <?php echo form_error_c('address', 'address_td'); ?>
                </td>
            </tr>
            <tr>
                <td class="item">建物名</td>
                <td id="buil_name" colspan="3">
                    <input name="buil_name" type="text" class="normal" value="<?php echo set_value_c('buil_name', $institute); ?>" maxlength="50" />
                    <?php echo form_error_c('buil_name', 'buil_name_td'); ?>
                </td>
            </tr>
            <tr>
                <td class="item">
                    ＴＥＬ
                </td>
                <td id="tel_no_td" colspan="3">
                    <input name="tel_no_1" type="text" class="size_tel tel_num" value="<?php echo set_value_c('tel_no_1', $institute); ?>" maxlength="4" />&nbsp;&nbsp;-&nbsp;&nbsp;
                    <input name="tel_no_2" type="text" class="size_tel tel_num" value="<?php echo set_value_c('tel_no_2', $institute); ?>" maxlength="4" />&nbsp;&nbsp;-&nbsp;&nbsp;
                    <input name="tel_no_3" type="text" class="size_tel tel_num" value="<?php echo set_value_c('tel_no_3', $institute); ?>" maxlength="4" />
                    <?php echo form_error_c('tel_no_1', 'tel_no_td'); ?>
                    <?php echo form_error_c('tel_no_2', 'tel_no_td'); ?>
                    <?php echo form_error_c('tel_no_3', 'tel_no_td'); ?>
                </td>
            </tr>
            <tr>
                <td class="item">
                    ＦＡＸ
                </td>
                <td id="fax_no_td" colspan="3">
                    <input name="fax_no_1" type="text" class="size_tel tel_num" value="<?php echo set_value_c('fax_no_1', $institute); ?>" maxlength="4" />&nbsp;&nbsp;-&nbsp;&nbsp;
                    <input name="fax_no_2" type="text" class="size_tel tel_num" value="<?php echo set_value_c('fax_no_2', $institute); ?>" maxlength="4" />&nbsp;&nbsp;-&nbsp;&nbsp;
                    <input name="fax_no_3" type="text" class="size_tel tel_num" value="<?php echo set_value_c('fax_no_3', $institute); ?>" maxlength="4" />
                    <?php echo form_error_c('fax_no_1', 'fax_no_td'); ?>
                    <?php echo form_error_c('fax_no_2', 'fax_no_td'); ?>
                    <?php echo form_error_c('fax_no_3', 'fax_no_td'); ?>
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
                    <textarea name="memo" class="memo"><?php echo set_value_c('memo', $institute); ?></textarea>
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
