<div class="contents_blk">
        
    <form name="search_form" method="post" action="/bill/import_data_output">
        <table  class="search_tbl">
            <tr>
                <td>
                    <table>
                        <tr>
                            <td class="item">取込実施日</td>
                            <td>
	                            <input name="import_conduct_date_from" value="<?php echo set_value_c('import_conduct_date_from', $search); ?>" class="size_date date" />&nbsp;～
	                            <input name="import_conduct_date_to" value="<?php echo set_value_c('import_conduct_date_to', $search); ?>" class="size_date date" />
                            </td>
                        </tr>
                    </table>
                </td>
                <td class="disp_btn">
                    <table>
                        <tr>
                            <td>
                                <input type="submit" name="search" class="size_L" value="検索" />
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-top: 10px;">
                                <input type="button" class="size_L" value="クリア" onclick="clear_search_item();" />
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </form>
</div>
<div class="contents_blk">
	
    <?PHP echo form_error_c('is_check'); ?>
    <div class="other" style="width: 695px;">
        <div class="list_cnt"><?PHP echo $cnt_info; ?></div>
        <?PHP echo $page_link; ?>
    </div>
    <form name="regist_form" method="post" action="/bill/import_data_output<?PHP echo ($this->uri->segment(4) == false) ?  "" : "/".$this->uri->segment(4); ?>">
        <table class="basic_tbl">
        <tr>
            <th class="basic_no">No</th>
            <th style="width: 90px;">取込実施日</th>
	        <th style="width: 200px;">処理結果</th>
            <th style="width: 80px;">処理<br/>件数</th>
            <th style="width: 80px;">紐付け<br/>件数</th>
	        <th style=" width: 80px;">未処理<br/>件数</th>
	        <th style="width: 90px;">&nbsp;</th>
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
                        <?PHP echo $val->import_conduct_date; ?>
                    </td>
	                <td class="" style="">
		                <?PHP echo $val->disp_result; ?>
	                </td>
                    <td class="" style="">
                        <?PHP echo $val->count; ?>
                    </td>
                    <td class="" style="">
                        <?PHP echo $val->regist_count ?>
                    </td>
	                <td class="" style="">
		                <?PHP echo $val->import_data_count; ?>
	                </td>
                    <td class="btn_td" style="">
	                    <?php if($val->result == RECEIVE_RESULT_FATAL) $disabled = 'disabled="true"'; ?>
	                    <input type="button" value="取込詳細" style="width: 70px;" <?php echo $disabled; ?> onclick="open_confirm(<?PHP echo "'".$val->outside_receive_mng_id."'"; ?>);"  />
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        </table>
    </form>
</div>
