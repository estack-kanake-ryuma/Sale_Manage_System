
<div class="contents_blk">
        
    <form name="search_form" method="post" action="/mainte/goods_list">
        <table class="search_tbl">
            <tr>
                    <td>
                    <table>
                        <tr>
                            <td class="item">
                                品名
                            </td>
                            <td>
                                <input name="goods_name" type="text" class="normal" value="<?php echo set_value_c('goods_name', $search); ?>" />&nbsp;を含む
                            </td>
                        </tr>
                        <tr>
                            <td class="item">
                                    税区分
                            </td>
                            <td>
                                <select name="tax_type" class="" style="width:100px;">
                                    <option></option>
                                    <?php foreach($mst['tax_type'] as $data): ?>
                                        <option value="<?php echo $data->item_cd; ?>" <?php echo set_select_c('tax_type', $data->item_cd, $search); ?>><?php echo $data->item_name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                        </tr>
                    </table>
                </td>
                <td class="disp_btn">
                    <table>
                        <tr>
                            <td>
                                <input type="submit" class="search_btn" value="検索" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="button" class="search_btn" value="クリア" onclick="clear_search_item();" />
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </form>
</div>
<div class="contents_blk">
	
    <div class="other" style="width: 970px;">
        <div class="list_cnt"><?PHP echo $cnt_info; ?></div>
        <?PHP echo $page_link; ?>
    </div>
    <table class="basic_tbl">
    <tr>
            <th class="basic_no">No</th>
            <th style="width:250px;">品名</th>
            <th style="width:250px;">ふりがな</th>
            <th style="width:100px;">単位</th>
            <th style="width:150px">税区分</th>
            <th class="basic_memo">メモ</th>
            <th class="btn_th"></th>
            <th class="btn_th"></th>
    </tr>
    <?php if(count($list_data) == 0): ?>
    <tr>
        <td class="no_list" colspan="9"><span class="red"><?= WARN_NO_LIST_MSG ?></span></td>
    </tr>
    <?php else: ?>
        <?php foreach($list_data as $val): ?>
            <tr>
                <td class="basic_no">
                    <?PHP echo $val->no; ?>
                </td>
                <td class="" style="">
                        <?PHP echo $val->goods_name; ?>
                </td>
                <td class="" style="">
                        <?PHP echo $val->goods_furi; ?>
                </td>
                <td class="" style="">
                        <?PHP echo $val->unit; ?>
                </td>
                <td class="" style="">
                    <?PHP echo $val->tax_type_name; ?>
                </td>
                <td class="basic_memo">
                    <?PHP echo $val->disp_memo; ?>
                </td>
                <td class="btn_td">
                    <input type="button" class="list_btn" value="変更" onclick="upd_data('<?php echo $val->goods_id; ?>');" />
            </td>
                <td class="btn_td">
                    <input type="button" class="list_btn" value="削除" onclick="del_data('<?php echo $val->goods_id; ?>');"  />
                </td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
    </table>
</div>

