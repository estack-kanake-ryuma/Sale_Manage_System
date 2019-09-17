/***********************************************************
 * 検索フィールドクリア処理
 ***********************************************************/
function clear_mine_search_item() {
    
    $("table.search_tbl").find("input:checkbox, input:text").each(function() { $(this).val("") });
    $("table.search_tbl").find("select").each(function() { $(this).val("") });
    $("table.search_tbl").find("[name='other_rb']").each(function() { 
                                                if($(this).val() == '1') {
                                                   $(this).attr("checked", true)  
                                                } else {
                                                    $(this).attr("checked", false)  
                                                }
                                            });
    $("table.search_tbl").find("[name='customer_type']").each(function() { 
                                                if($(this).val() == "") {
                                                   $(this).attr("checked", true)  
                                                } else {
                                                    $(this).attr("checked", false)  
                                                }
                                            });
}
/***********************************************************
 * jQueryしばらくお待ちください
 ***********************************************************/
