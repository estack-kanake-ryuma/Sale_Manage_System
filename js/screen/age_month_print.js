/***********************************************************
 *
 * 売上情報入力のみのjQuery関数
 *
 ***********************************************************/
jQuery( function() {
    disp_depart_ctrl($("#disp_depart")[0]);
    
    $('.page_link').find('a').click(function(e) {
        
        // hidden値セット
        var chk = $('#disp_depart').attr('checked');
        
        if(chk == 'checked') {
            $('#hf_disp_depart').val("1");
        } else {
            $('#hf_disp_depart').val("0");
        }
        
        e.preventDefault();
        
         $('#search_form').attr('action', e.target.href);
        
        // Submit
        document.search_form.submit();
    });    
    
    
});

function disp_depart_ctrl(obj) {
    
    var chk = $(obj).attr('checked');
    
    var str = "";
    if(chk == 'checked') {
        $(".depart_info, .separater").each(function(){ $(this).css("display", "");  });
    } else {
        $(".depart_info, .separater").each(function(){ $(this).css("display", "none");  });
    }
    
}

function clear_mine_search_item() {
    
    $("table.search_tbl").find("input:checkbox, input:text").each(function() { $(this).val("") });
    $("table.search_tbl").find("select").each(function() { $(this).val("") });
    $("table.search_tbl").find("input:radio").each(function() { 
                                                if($(this).val() == '1') {
                                                   $(this).attr("checked", true)  
                                                } else {
                                                    $(this).attr("checked", false)  
                                                }
                                            });
}