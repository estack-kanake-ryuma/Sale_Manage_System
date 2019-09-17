<div class="contents_blk">
        
    <form name="search_form" method="post" action="/mainte/fix_memo_list">
        <table  class="search_tbl">
            <tr>
                <td>
                    <table>
                        <tr>
                            <td class="item">固定メモ</td>
                            <td>
                                <input name="fix_memo" type="text" class="normal" value="<?php echo set_value_c('fix_memo', $search); ?>" />&nbsp;を含む
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
	
    <div class="other" style="width: 750px;">
        <div class="list_cnt"><?PHP echo $cnt_info; ?></div>
        <?PHP echo $page_link; ?>
    </div>
    <table class="basic_tbl">
    <tr>
            <th class="basic_no">No</th>
            <th style="width:600px;">固定メモ</th>
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
                    <?PHP echo $val->disp_fix_memo; ?>
                </td>
                <td class="btn_td">
                    <input type="button" class="list_btn" value="変更" onclick="upd_data('<?php echo $val->fix_memo_id; ?>');" />
                </td>
                <td class="btn_td">
                    <input type="button" class="list_btn" value="削除" onclick="del_data('<?php echo $val->fix_memo_id; ?>');"  />
                </td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
    </table>
</div>
