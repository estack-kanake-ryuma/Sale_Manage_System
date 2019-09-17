<div class="contents_blk">
        
    <form method="post" action="" onsubmit="return confirm('登録してよろしいですか？')">
        <table class="mst_input_tbl">
            <tr>
                <td colspan="4" class="title">基本情報</td>
            </tr>
            <tr>
                <td class="item">担当者名称<span class="required">※</span></td>
                <td id="handler_name_td" colspan="3">
                    <input name="handler_name" type="text" class="normal" value="<?php echo set_value_c('handler_name', $handler); ?>" maxlength="25" />
                    <?php echo form_error_c('handler_name', 'handler_name_td'); ?>
                </td>
            </tr>
            <tr>
                <td class="item">ふりがな<span class="required">※</span></td>
                <td id="handler_furi_td" colspan="3">
                    <input name="handler_furi" type="text" class="normal" value="<?php echo set_value_c('handler_furi', $handler); ?>" maxlength="50" />
                    <?php echo form_error_c('handler_furi', 'handler_furi_td'); ?>
                </td>
            </tr>
            <tr>
                <td colspan="4" class="title">所属設定</td>
            </tr>
            <tr>
                <td class="item">所属研究所</td>
                <td id="institute_id_td" colspan="3">
                    <select name="institute_id" class="" style="width:100px;">
                        <option value=""></option>
                        <?php foreach($mst['institute_list'] as $data): ?>
                        <option value="<?php echo $data->institute_id; ?>" <?php echo set_select_c('institute_id', $data->institute_id, $handler); ?>><?php echo $data->institute_name; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?php echo form_error_c('institute_id', 'institute_id_td'); ?>
                </td>
            </tr>
            <tr>
                <td class="item">所属部門</td>
                <td id="depart_id_td" colspan="3">
                    <select name="depart_id" class="" style="width:100px;">
                        <option value=""></option>
                        <?php foreach($mst['depart_list'] as $data): ?>
                        <option value="<?php echo $data->depart_id; ?>" <?php echo set_select_c('depart_id', $data->depart_id, $handler); ?>><?php echo $data->depart_name; ?></option>
                        <?php endforeach; ?>
                        <?php echo form_error_c('depart_id', 'depart_id_td'); ?>
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
                <td>
                    <textarea name="memo" class="memo"><?PHP echo set_value_c('memo', $handler); ?></textarea>
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
