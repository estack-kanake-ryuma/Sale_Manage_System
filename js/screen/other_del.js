/***********************************************************
 *
 * 行追加
 *
 ***********************************************************/
function add_row(obj) {
    
    $tr = $(obj).parent().parent().clone(false);
    
    // 追加する行からボタンを消す
    $tr.find(".add_row").remove();
    $tr.find("p").remove();
    
    // 追加する行の値を初期化
    $tr.find("input:text, select").each(function() { $(this).val(""); });
    $tr.find("span").each(function() { $(this).text(""); });
    $tr.find("td").each(function() { $(this).attr("id", ""); $(this).removeClass("err_back"); });
    
    var id = "";
    
    if($('input[name="disp_type"]:checked').val() == "1") {
        id = $(obj).parent().parent().parent().parent().parent().find("[name='bill_mng_id[]']").val();
    } else {
        id = $(obj).parent().parent().parent().parent().parent().find("[name='credit_received_id[]']").val();
    }
    
    // datepicker再作成
    $tr.find(".ui-datepicker-trigger, .date").remove();
    $($tr.children()[1]).append('<input name="reconcile_date[' + id + '][]" type="text" value="" class="date size_date" />');
    $($tr.children()[1]).find(".date")
                    .datepicker({
                        showOn: 'button',
                        buttonImage: '/js/jquery_ui/smoothness/images/calendar.gif',
                        buttonImageOnly: true
                    });

    // 要素を追加
    $($tr.children()[0]).append('<input type="button" name="del_row[]" value="削除" style="margin: 0;width:50px;" onclick="del_row(this);" />');
    
    $(obj).parent().parent().parent().append($tr);
    
}
/***********************************************************
 *
 * 行削除ボタン押下時
 *
 ***********************************************************/
function del_row(obj) {
    $tr = $(obj).parent().parent().remove();
}
/***********************************************************
 *
 * 消込ボタンsubmit処理
 *
 ***********************************************************/
function del_submit(obj) {
    
    if(confirm('消込を行います。よろしいですか？')) {
        
        var $td = $(obj).parent();
        var form_num = $td.parent().parent().parent().parent().parent().parent().index() - 1;

        var customer_name = $("#customer_disp_name").val();
        var disp_type = "";
        if($("#disp_type_1").is(':checked')) {
            disp_type = "1";
        } else {
            disp_type = "2";
        }

        $td.parent().parent().parent().parent().parent().find("[name='customer_disp_name']").val(customer_name);
        $td.parent().parent().parent().parent().parent().find("[name='disp_type']").val(disp_type);
        $td.parent().parent().parent().parent().parent().find("[name='regist_type']").val("regist");

        if($("[name='regist_form']").length == 1) {
            document.regist_form.submit();
        } else {
            document.regist_form[form_num].submit();
        }
        
    }
    
}

/***********************************************************
 *
 * 削除ボタンsubmit処理
 *
 ***********************************************************/
function cancel_submit(obj, id, money) {
    
    if(confirm('取消を行います。よろしいですか？')) {
    
        var $td = $(obj).parent();
        var form_num = $td.parent().parent().parent().parent().parent().parent().index() - 1;

        var customer_name = $("#customer_disp_name").val();
        var disp_type = "";
        if($("#disp_type_1").is(':checked')) {
            disp_type = "1";
        } else {
            disp_type = "2";
        }

        $td.parent().parent().parent().parent().parent().find("[name='customer_disp_name']").val(customer_name);
        $td.parent().parent().parent().parent().parent().find("[name='disp_type']").val(disp_type);
        $td.parent().parent().parent().parent().parent().find("[name='regist_type']").val("cancel");
        if(disp_type == "1") {
            $td.parent().parent().parent().parent().parent().find("[name='credit_data_id']").val(id);
        } else {
            $td.parent().parent().parent().parent().parent().find("[name='adjust_id']").val(id);
            $td.parent().parent().parent().parent().parent().find("[name='can_adjust_money']").val(money);
        }

        if($("[name='regist_form']").length == 1) {
            document.regist_form.submit();
        } else {
            document.regist_form[form_num].submit();
        }
    }
    
    
}
/***********************************************************
 * 検索フィールドクリア処理
 ***********************************************************/
function clear_search_item() {
    
    $("table.search_tbl").find("input:checkbox, input:text").each(function() { $(this).val("") });
    $("table.search_tbl").find("select").each(function() { $(this).val("") });
    $("table.search_tbl").find("[name='disp_type']").each(function() { 
                                                if($(this).val() == "1") {
                                                   $(this).attr("checked", true)  
                                                } else {
                                                    $(this).attr("checked", false)  
                                                }
                                            });
                                            
    $("table.search_tbl").find("[name='credit_status']").each(function() { 
                                                if($(this).val() == "") {
                                                   $(this).attr("checked", true)  
                                                } else {
                                                    $(this).attr("checked", false)  
                                                }
                                            });

    
}

/***********************************************************
 *
 * 振込消込入力のみのjQuery関数
 *
 ***********************************************************/
jQuery( function() {
      
      ctrl_search_date();
      
});

/***********************************************************
 * 状態によって消込日の検索の制御を行う
 ***********************************************************/
function ctrl_search_date() {
    
    if($("[name='disp_type']:checked").val() == "1") {
        
        if($("[name='credit_status']:checked").val() == "1") {
            $("[name='reconcile_date_from']").val("");
            $("[name='reconcile_date_to']").val("");
            $("[name='reconcile_date_from']").attr("disabled", "disabled");
            $("[name='reconcile_date_to']").attr("disabled", "disabled");
            $("[name='reconcile_date_from']").addClass('disabled');
            $("[name='reconcile_date_to']").addClass('disabled');
            $("[name='bill_date_from']").removeAttr("disabled");
            $("[name='bill_date_from']").removeClass('disabled');
            $("[name='bill_date_to']").removeAttr("disabled");
            $("[name='bill_date_to']").removeClass('disabled');
        } else {
            $("[name='reconcile_date_from']").removeAttr("disabled");
            $("[name='reconcile_date_from']").removeClass('disabled');
            $("[name='reconcile_date_to']").removeAttr("disabled");
            $("[name='reconcile_date_to']").removeClass('disabled');
            $("[name='bill_date_from']").removeAttr("disabled");
            $("[name='bill_date_from']").removeClass('disabled');
            $("[name='bill_date_to']").removeAttr("disabled");
            $("[name='bill_date_to']").removeClass('disabled');
        }
        
    } else {
        $("[name='reconcile_date_from']").val("");
        $("[name='reconcile_date_to']").val("");
        $("[name='reconcile_date_from']").attr("disabled", "disabled");
        $("[name='reconcile_date_to']").attr("disabled", "disabled");
        $("[name='reconcile_date_from']").addClass('disabled');
        $("[name='reconcile_date_to']").addClass('disabled');
        $("[name='bill_date_from']").val("");
        $("[name='bill_date_to']").val("");
        $("[name='bill_date_from']").attr("disabled", "disabled");
        $("[name='bill_date_to']").attr("disabled", "disabled");
        $("[name='bill_date_from']").addClass('disabled');
        $("[name='bill_date_to']").addClass('disabled');
        
    }
    
}
