<div class="contents_blk">
        
    <form method="post" action="" onsubmit="return confirm('登録してよろしいですか？')">
        <table class="mst_input_tbl">
            <tr>
                <td colspan="4" class="title">基本情報</td>
            </tr>
            <tr>
                <td class="item">品名<span class="required">※</span></td>
                <td id="goods_name_td" colspan="3">
                    <input name="goods_name" type="text" class="normal" value="<?php echo set_value_c('goods_name', $goods); ?>" maxlength="125" />
                    <?php echo form_error_c('goods_name', 'goods_name_td'); ?>
                </td>
            </tr>
            <tr>
                <td class="item">ふりがな<span class="required">※</span></td>
                <td id="goods_furi_td" colspan="3">
                    <input name="goods_furi" type="text" class="normal" value="<?php echo set_value_c('goods_furi', $goods); ?>" maxlength="200" />
                    <?php echo form_error_c('goods_furi', 'goods_furi_td'); ?>
                </td>
            </tr>
            <tr>
                <td class="item">単位</td>
                <td id="unit_td" colspan="3">
                    <input name="unit" type="text" value="<?php echo set_value_c('unit', $goods); ?>" maxlength="5" />
                    <?php echo form_error_c('unit', 'unit_td'); ?>
                </td>
            </tr>
            <tr>
                <td colspan="4" class="title">システム設定情報</td>
            </tr>
            <tr>
                <td class="item">
                    税区分
                </td>
                <td id="tax_type_td" colspan="3">
                    <select name="tax_type" class="" style="width:100px;">
                        <option></option>
                        <?php foreach($mst['tax_type'] as $data): ?>
                        <option value="<?php echo $data->item_cd; ?>" <?php echo set_select_c('tax_type', $data->item_cd, $goods); ?>><?php echo $data->item_name; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?php echo form_error_c('tax_type', 'tax_type_td'); ?>
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
                    <textarea name="memo" class="memo"><?php echo set_value_c('memo', $goods); ?></textarea>
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
