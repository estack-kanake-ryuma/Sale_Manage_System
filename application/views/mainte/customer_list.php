<div class="contents_blk">
        
    <form name="search_form" method="post" action="/mainte/customer_list">
        <table  class="search_tbl">
            <tr>
                    <td>
                    <table>
                        <tr>
                            <td class="item">
                                得意先名称
                            </td>
                            <td>
                                <input name="customer_name" type="text" class="normal" value="<?php echo set_value_c('customer_name', $search); ?>" />&nbsp;を含む
                            </td>
                        </tr>
                        <tr>
                            <td class="item">
                                締日
                            </td>
                            <td>
                                <select name="cutoff_date" class="" style="width:100px;">
                                    <option value=""></option>
                                    <?php foreach($list['cutoff_date'] as $data): ?>
                                    <option value="<?php echo $data['key']; ?>" <?php echo set_select_c('cutoff_date', $data['key'], $search); ?>><?php echo $data['val']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="item">
                                得意先区分
                            </td>
                            <td>
                                <label for="customer_type_1"><input id="customer_type_1" type="radio" name="customer_type" value="" checked="checked" />全て</label>
                                <?php $i=2; foreach($mst['customer_type'] as $data): ?>
                                <label for="customer_type_<?PHP echo $i; ?>"><input id="customer_type_<?PHP echo $i; ?>" type="radio" name="customer_type" value="<?= $data->item_cd ?>" <?php echo set_radio_c('customer_type', $data->item_cd, $search); ?>  /><?= $data->item_name ?></label>
                                <?php $i++; endforeach; ?>
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
	
    <div class="other" style="width: 950px;">
        <div class="list_cnt"><?PHP echo $cnt_info; ?></div>
        <?PHP echo $page_link; ?>
    </div>
    <table class="basic_tbl">
    <tr>
            <th class="basic_no">No</th>
            <th style="width:220px;">得意先名称</th>
            <th style="width:250px;">住所</th>
            <th style="width:100px">TEL<br />FAX</th>
            <th style="width:50px">締日</th>
            <th style="width:100px">得意先区分</th>
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
                        <?PHP echo $val->customer_name; ?><br /><?PHP echo $val->customer_furi ?>
                </td>
                <td class="" style="">
                        <?PHP echo $val->disp_addr; ?>
                </td>
                <td class="" style="">
                    <?PHP echo $val->disp_tel_no; ?><br /><?PHP echo $val->disp_fax_no; ?>
                </td>
                <td class="" style="">
                    <?PHP echo $val->disp_cutoff_date; ?>
                </td>
                <td class="" style="">
                    <?PHP echo $val->customer_type_name; ?>
                </td>
                <td class="basic_memo">
                    <?PHP echo $val->disp_memo; ?>
                </td>
                <td class="btn_td">
                    <input type="button" class="list_btn" value="変更" onclick="upd_data('<?php echo $val->customer_id; ?>');" />
            </td>
                <td class="btn_td">
                    <input type="button" class="list_btn" value="削除" onclick="del_data('<?php echo $val->customer_id; ?>');"  />
                </td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
    </table>
</div>
