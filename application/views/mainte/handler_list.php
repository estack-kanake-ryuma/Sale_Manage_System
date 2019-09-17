<div class="contents_blk">
    
    <form name="search_form" method="post" action="/mainte/handler_list">
        <table class="search_tbl">
        <tr>
                <td>
                <table>
                    <tr>
                        <td class="item">
                            担当者名称
                        </td>
                        <td>
                            <input name="handler_name" type="text" class="normal" value="<?php echo set_value_c('handler_name', $search); ?>" />&nbsp;を含む
                        </td>
                    </tr>
                    <tr>
                        <td class="item">
                            所属研究所
                        </td>
                        <td>
                            <select name="institute_id" class="" style="width:100px;">
                                <option value=""></option>
                                <?php foreach($mst['institute_list'] as $data): ?>
                                <option value="<?php echo $data->institute_id; ?>" <?php echo set_select_c('institute_id', $data->institute_id, $search); ?>><?php echo $data->institute_name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="item">
                            所属部門
                        </td>
                        <td>
                            <select name="depart_id" class="" style="width:100px;">
                                <option value=""></option>
                                <?php foreach($mst['depart_list'] as $data): ?>
                                <option value="<?php echo $data->depart_id; ?>" <?php echo set_select_c('depart_id', $data->depart_id, $search); ?>><?php echo $data->depart_name; ?></option>
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
	
    <div class="other" style="width: 870px;">
        <div class="list_cnt"><?PHP echo $cnt_info; ?></div>
        <?PHP echo $page_link; ?>
    </div>
    <table class="basic_tbl">
    <tr>
            <th class="basic_no">No</th>
            <th style="width:200px;">担当者名称</th>
            <th style="width:200px;">ふりがな</th>
            <th style="width:100px;">所属研究所</th>
            <th style="width:150px;">所属部門</th>
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
                    <?PHP echo $val->handler_name; ?>
                </td>
                <td class="" style="">
                    <?PHP echo $val->handler_furi; ?>
                </td>
                <td class="" style="">
                    <?PHP echo $val->institute_name; ?>
                </td>
                <td class="">
                    <?PHP echo $val->depart_name; ?>
                </td>
                <td class="basic_memo">
                    <?PHP echo $val->disp_memo; ?>
                </td>
                <td class="btn_td">
                    <input type="button" class="list_btn" value="変更" onclick="upd_data('<?php echo $val->handler_id; ?>');" />
            </td>
                <td class="btn_td">
                    <input type="button" class="list_btn" value="削除" onclick="del_data('<?php echo $val->handler_id; ?>');"  />
                </td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
    </table>
</div>
