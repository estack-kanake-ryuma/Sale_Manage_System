<div class="contents_blk">
        
    <form name="search_form" method="post" action="/mainte/user_list">
        <table  class="search_tbl">
            <tr>
                <td>
                    <table>
                        <tr>
                            <td class="item">ユーザー名称</td>
                            <td>
                                <input name="user_name" type="text" class="normal" value="<?php echo set_value_c('user_name', $search); ?>" />&nbsp;を含む
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
	
    <div class="other" style="width: 935px;">
        <div class="list_cnt"><?PHP echo $cnt_info; ?></div>
        <?PHP echo $page_link; ?>
    </div>
    <table class="basic_tbl">
    <tr>
            <th class="basic_no">No</th>
            <th style="width:150px;">ユーザー名称</th>
            <th style="width:150px;">ふりがな</th>
            <th style="width:100px;">ログインID</th>
            <th style="width:100px">パスワード</th>
            <th style="width:100px">権限</th>
            <th style="width:100px">所属研究所</th>
            <th class="basic_memo">メモ</th>
            <th class="btn_th"></th>
            <th class="btn_th"></th>
    </tr>
    <?php if(count($list_data) == 0): ?>
    <tr>
        <td class="no_list" colspan="10"><span class="red"><?= WARN_NO_LIST_MSG ?></span></td>
    </tr>
    <?php else: ?>
        <?php foreach($list_data as $val): ?>
            <tr>
                <td class="basic_no">
                    <?PHP echo $val->no; ?>
                </td>
                <td class="" style="">
                    <?PHP echo $val->user_name; ?>
                </td>
                <td class="" style="">
                    <?PHP echo $val->user_furi ?>
                </td>
                <td class="" style="">
                    <?PHP echo $val->login_id; ?>
                </td>
                <td class="" style="">
                    <?PHP echo $val->password; ?>
                </td>
                <td class="" style="">
                    <?PHP echo $val->auth_name; ?>
                </td>
                <td class="" style="">
                    <?PHP echo $val->institute_name; ?>
                </td>
                <td class="basic_memo">
                    <?PHP echo $val->disp_memo; ?>
                </td>
                <td class="btn_td">
                    <input type="button" class="list_btn" value="変更" onclick="upd_data('<?php echo $val->user_id; ?>');" />
                </td>
                <td class="btn_td">
                    <input type="button" class="list_btn" value="削除" onclick="del_data('<?php echo $val->user_id; ?>');"  />
                </td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
    </table>
</div>
