<div class="contents_blk">
        
    <form method="post" action="" onsubmit="return confirm('登録してよろしいですか？')">
        <table class="mst_input_tbl">
            <tr>
                    <td colspan="4" class="title">基本情報</td>
            </tr>
            <tr>
                <td class="item">摘要名称<span class="required">※</span></td>
                <td id="abstract_name_td" colspan="3">
                    <input name="abstract_name" type="text" class="normal" value="<?php echo set_value_c('abstract_name', $abstract); ?>" maxlength="50" />
                    <?php echo form_error_c('abstract_name', 'abstract_name_td'); ?>
                </td>
            </tr>
            <tr>
                <td class="item">ふりがな<span class="required">※</span></td>
                <td id="abstract_furi_td" colspan="3">
                    <input name="abstract_furi" type="text" class="normal" value="<? echo set_value_c('abstract_furi', $abstract); ?>" maxlength="100" />
                    <?php echo form_error_c('abstract_furi', 'abstract_furi_td'); ?>
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
                    <textarea name="memo" class="memo"><?php echo set_value_c('memo', $abstract); ?></textarea>
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
