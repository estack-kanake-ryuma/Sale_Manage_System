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

        $td.parent().parent().parent().parent().parent().find("[name='customer_disp_name']").val(customer_name);
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
function cancel_submit(obj, id, money, date, customer_id) {
    
    if(confirm('取消を行います。よろしいですか？')) {
    
        var $td = $(obj).parent();
        var form_num = $td.parent().parent().parent().parent().parent().parent().index() - 1;

        var customer_name = $("#customer_disp_name").val();

        $td.parent().parent().parent().parent().parent().find("[name='regist_type']").val("cancel");
        
        $td.parent().parent().parent().parent().parent().find("[name='customer_disp_name']").val(customer_name);
        $td.parent().parent().parent().parent().parent().find("[name='first_data_id']").val(id);
        $td.parent().parent().parent().parent().parent().find("[name='can_reconcile_money']").val(money);
        $td.parent().parent().parent().parent().parent().find("[name='can_reconcile_date']").val(date);
        $td.parent().parent().parent().parent().parent().find("[name='can_customer_id']").val(customer_id);

        if($("[name='regist_form']").length == 1) {
            document.regist_form.submit();
        } else {
            document.regist_form[form_num].submit();
        }
    }
    
    
}
