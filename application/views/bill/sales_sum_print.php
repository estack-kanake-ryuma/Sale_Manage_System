<div class="contents_blk">
        
    <form method="post" action="" onsubmit="return confirm('売上集計表を発行します。よろしいですか？')">
        <table class="mst_input_tbl">
        <tr>
            <td colspan="4" class="title">セグメント</td>
        </tr>
        <tr>
            <td class="item">
                セグメント<span class="required">※</span>
            </td>
            <td id="segment_td">
                <select id="segment" name="segment" style="width: 100px;" onblur="set_disp_abstract();set_disp_order(this);">
                    <option value=""></option>
                    <?php foreach($mst['segment'] as $data): ?>
                    <option value="<?php echo $data->item_cd; ?>" <?php echo set_select_c('segment', $data->item_cd, $detail); ?>><?php echo $data->item_name; ?></option>
                    <?php endforeach; ?>
                </select>
                <?php echo form_error_c('segment', 'segment_td'); ?>
            </td>
            <td id="disp_abstract_item" class="item">
                摘要を表示
            </td>
            <td id="disp_abstract_data">
                <label for="disp_abstract_1"><input id="disp_abstract_1" type="radio" name="disp_abstract" value="1" checked="checked" <?PHP echo $ctrl['disp_abstract']; ?> />する</label>&nbsp;&nbsp;
                <label for="disp_abstract_2"><input id="disp_abstract_2" type="radio" name="disp_abstract" value="2" <?PHP echo $ctrl['disp_abstract']; ?> />しない</label>
            </td>
        </tr>
        <tr>
            <td colspan="4" class="title">出力条件</td>
        </tr>
        <tr>
            <td class="item">売上計上日<span class="required">※</span></td>
            <td id="book_date_from_td" colspan="3">
                <input name="book_date_from" type="text" class="date size_date" value="<?php echo set_value_c('book_date_from', $detail); ?>" />
                ～
                <input name="book_date_to" type="text" class="date size_date" value="<?php echo set_value_c('book_date_to', $detail); ?>" />
                <?php echo form_error_c('book_date_from', 'book_date_from_td'); ?>
                <?php echo form_error_c('book_date_to', 'book_date_from_td'); ?>
                <?php echo form_error_c('chk_span', 'book_date_from_td'); ?>
            </td>
        </tr>
        <tr>
            <td class="item">研究所</td>
            <td id="institute_id_td" colspan="3">
                <select id="institute_id" name="institute_id" style="width: 160px;">
                    <option value=""></option>
                    <?php foreach($mst['institute_list'] as $data): ?>
                    <option value="<?php echo $data->institute_id; ?>" <?php echo set_select_c('institute_id', $data->institute_id, $detail); ?>><?php echo $data->institute_name; ?></option>
                    <?php endforeach; ?>
                </select>
                <?php echo form_error_c('institute_id', 'institute_id_td'); ?>
            </td>
        </tr>
        <tr>
            <td class="item">部門</td>
            <td id="depart_id_td" colspan="3">
                <select id="depart_id" name="depart_id" style="width: 160px;">
                    <option value=""></option>
                    <?php foreach($mst['depart_list'] as $data): ?>
                    <option value="<?php echo $data->depart_id; ?>" <?php echo set_select_c('depart_id', $data->depart_id, $detail); ?>><?php echo $data->depart_name; ?></option>
                    <?php endforeach; ?>
                </select>
                <?php echo form_error_c('depart_id', 'depart_id_td'); ?>
            </td>
        </tr>
        <tr>
            <td class="item">摘要</td>
            <td id="abstract_id_td" colspan="3">
                <select id="abstract_id" name="abstract_id" style="width: 180px;">
                    <option value=""></option>
                    <?php foreach($mst['abstract_list'] as $data): ?>
                    <option value="<?php echo $data->abstract_id; ?>" <?php echo set_select_c('abstract_id', $data->abstract_id, $detail); ?>><?php echo $data->abstract_name; ?></option>
                    <?php endforeach; ?>
                </select>
                <?php echo form_error_c('abstract_id', 'abstract_id_td'); ?>
            </td>
        </tr>
        <tr>
            <td class="item">担当者</td>
            <td id="handler_id_td" colspan="3">
                <select id="handler_id" name="handler_id" style="width: 120px;">
                    <option value=""></option>
                    <?php foreach($mst['handler_list'] as $data): ?>
                    <option value="<?php echo $data->handler_id; ?>" <?php echo set_select_c('handler_id', $data->handler_id, $detail); ?>><?php echo $data->handler_name; ?></option>
                    <?php endforeach; ?>
                </select>
                <?php echo form_error_c('handler_id', 'handler_id_td'); ?>
            </td>
        </tr>
        <tr>
            <td class="item">得意先名称</td>
            <td id="customer_name_td" colspan="3">
                <input id="customer_name" name="customer_name" type="text" class="normal" value="<?php echo set_value_c('customer_name', $detail); ?>" />&nbsp;を含む
            </td>
        </tr>
        <tr>
            <td class="item">得意先区分</td>
            <td id="customer_type_td" colspan="3">
                <label><input type="radio" name="customer_type" value="" checked="checked" />全て</label>
                <?php $i=1; foreach($mst['customer_type'] as $data): ?>
                <label for="customer_type_<?=$i?>"><input id="customer_type_<?=$i?>" type="radio" name="customer_type" value="<?= $data->item_cd ?>" <?php echo set_radio_c('customer_type', $data->item_cd, $detail); ?>  /><?= $data->item_name ?></label>
                <?php $i++; endforeach; ?>
            </td>
        </tr>
        <tr>
                <td colspan="4" class="title">出力順序</td>
        </tr>
        <tr>
            <td class="item">
                表示順序<span id="seq_item_require" class="required">※</span>
            </td>
            <td colspan="3" id="seq_item_td">
                <select id="seq_item" name="seq_item" style="width: 220px;" onchange="change_disp_abstract();">
                    <option value=""></option>
                    <?php foreach($mst['seq_item_list'] as $data): ?>
                    <option value="<?php echo $data['item']; ?>" <?php echo set_select_c('seq_item', $data['item'], $detail); ?>><?php echo $data['name']; ?></option>
                    <?php endforeach; ?>
                </select>
                <?php echo form_error_c('seq_item', 'seq_item_td'); ?>
            </td>
        </tr>
        <tr>
            <td colspan="4" class="bottom_button" style="height: 80px">
                <input type="submit" class="size_L" value="売上集計表発行" />
            </td>
        </tr>
        </table>
    </form>

</div>
