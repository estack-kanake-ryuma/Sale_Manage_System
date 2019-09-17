/***********************************************************
 *
 * 振込入金登録のみのjQuery関数
 *
 ***********************************************************/
jQuery( function() {
    $("[name='customer_name[]']").autocomplete({
                    source: function(req, resp) {
                        $.ajax(get_param_ap("/util/ajax/customer_tran_list", req, resp));
                    },
                    minLength:1

    });
    
    $(function(){ 
        cumpute_credit_money();
        set_input_ctrl();
    })

    
});

/***********************************************************
 *
 * 入力項目を非活性に設定
 *
 ***********************************************************/
function set_input_ctrl()
{
    
    $("#credit_tbl").find("tr").each(function(index) {
        
                    if($(this).find("[name='reconcile_money[]']").length > 0) {
                    
                        credit_money = $(this).find("[name='reconcile_money[]']").val();
                        adjust_money = $(this).find("[name='adjust_money[]']").val();
                        first_money = $(this).find("[name='first_money[]']").val();

                        if(credit_money == "" && adjust_money == "" && first_money == "") {
                        } else {
                            $(this).find("[name='customer_name[]']").attr("disabled", true).addClass('disabled');
                            $(this).find("[name='credit_money[]']").attr("disabled", true).addClass('disabled');
                            $(this).find(".del_btn").attr("disabled", true).addClass('disabled');
                        }
                    }
                    
                }
    );

    
    
    
}
/***********************************************************
 *
 * 得意先IDを設定する
 *
 ***********************************************************/
function set_customer_id(obj) {
    
    if(obj.value == '') {
        $(obj.parentNode).find("[name='customer_id[]']").val("");
        return;
    }
    
    $.ajax({
            url: "/util/ajax/customer_info"
            , scriptCharset: 'utf-8'
            , type: "POST"
            , cache: false
            , dataType: "json"
            , data: {name: obj.value}
            , success: function(res){
                if(res.length == 0) {
                    $(obj.parentNode).find("[name='customer_id[]']").val("");
                } else {
                    $(obj.parentNode).find("[name='customer_id[]']").val(res[0].id);
                }
                
            } 
        });
    
}
/***********************************************************
 *
 * 行追加ボタンクリック時
 *
 ***********************************************************/
function add_credit_data() {

    $tbl = $("#credit_tbl");
    for(var i=0;i<5;i++) {

        $tr = $tbl.find("tr:last").clone(false);
        $tr.find("input").each(function() { $(this).val("");$(this).removeAttr("disabled"); $(this).removeClass("disabled"); });

        // 得意先オートコンプリート再設定
        $tr.find("[name='customer_name[]']").remove();
        $($tr.children()[1]).append('<input name="customer_name[]" type="text" value="" style="width: 240px;" onblur="set_customer_id(this);" />');
        $tr.find("[name='customer_name[]']").autocomplete({source: function(req, resp) {$.ajax(get_param_ap("/util/ajax/customer_tran_list", req, resp));},minLength:1});
    
        $tbl.find("tbody").append($tr);

        $tbl.find("tr:last")[0].cells[0].innerHTML = parseInt($tbl.find("tr:last").prev()[0].cells[0].innerHTML) + 1;
        
        $tbl.find("input.del_btn").each(function() { $(this)[0].value="削除"; });
    }

}
/***********************************************************
 *
 * 行削除処理
 *
 ***********************************************************/
function del_credit_row(obj) {
    
    tbl = document.getElementById('credit_tbl');
    tr = obj.parentNode.parentNode;

    if (tbl.rows.length == 3) {
        // 対象の行の値をクリアする
        $(tr).find("input:text, select").each(function() { $(this).val(""); });
    } else {
        // 対象の行を削除
        tbl.deleteRow(tr.rowIndex);

        // Noを再設定
        $td_no = $(tbl).find("td.basic_no");
        $td_no.each(function(index) { $(this).html((index +1)); });

        if($td_no.length == 1) {
            $(tbl).find("input:button")[1].value = "クリア";
        }
        
    }
    
    cumpute_credit_money();
}

/***********************************************************
 *
 * 入金データ表示処理
 *
 ***********************************************************/
function disp_data() {
    
    $date = $("#credit_date");
    $account = $("#bank_id");
    
    if($date.val() == "" || $account.val() == "") {
        return;
    }
    
    document.forms[0].submit();
}
/***********************************************************
 *
 * 入金総額の計算
 * 
 ***********************************************************/
function cumpute_credit_money() {

    var money = 0;
    $tbl = $("#credit_tbl");
    
    $tbl.find("[name='credit_money[]']").each(function() { money = calc_sum_money($(this).val(), money);  });
    $("#sum_credit_money").text((money == 0) ? "" : sep_money(money));
}

/***********************************************************
 *
 * 入金総額の計算
 * 
 ***********************************************************/
function submit_regsit() {
    
    if(confirm('登録してよろしいですか？')  == true) {
        
        $("input, select").attr("disabled", false);
        return true;
    } else {
        return false;
    }
    
}


