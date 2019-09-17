<div class="contents_blk">
        
    <form method="post" action="" onsubmit="return confirm('登録してよろしいですか？')">
        <table class="mst_input_tbl">
            <tr>
                    <td colspan="4" class="title">基本情報</td>
            </tr>
            <tr>
                <td class="item">部門名称<span class="required">※</span></td>
                <td id="depart_name_td" colspan="3">
                    <input name="depart_name" type="text" class="normal" value="<?php echo set_value_c('depart_name', $depart); ?>" maxlength="25" />
                    <?php echo form_error_c('depart_name', 'depart_name_td'); ?>
                </td>
            </tr>
            <tr>
                <td class="item">ふりがな<span class="required">※</span></td>
                <td id="depart_furi_td" colspan="3">
                    <input name="depart_furi" type="text" class="normal" value="<?php echo set_value_c('depart_furi', $depart); ?>" maxlength="50" />
                    <?php echo form_error_c('depart_furi', 'depart_furi_td'); ?>
                </td>
            </tr>
            <tr>
                <td class="item">研究所<span class="required">※</span></td>
                <td id="institute_id_td" colspan="3">
                    <?php $i=1; foreach($mst['institute_list'] as $data): ?>
                    <label for="institute_id_<?=$i;?>"  style="padding-right: 10px;">
                        <input id="institute_id_<?=$i;?>" type="checkbox" name="institute_id[]" value="<?PHP echo $data->institute_id; ?>" <?php echo set_checkbox_c('institute_id[]', $data->institute_id, $institute); ?> /><?PHP echo $data->institute_name; ?>
                    </label>
                    <?php $i++; endforeach; ?>
                    <?php echo form_error_c('institute_id[]', 'institute_id_td'); ?>
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
                    <textarea name="memo" class="memo"><?php echo set_value_c('memo', $depart); ?></textarea>
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
