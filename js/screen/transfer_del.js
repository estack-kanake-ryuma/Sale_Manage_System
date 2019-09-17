/***********************************************************
 *
 * 表内の差額を計算
 *
 ***********************************************************/
function calc_diff() {

    var $bill_tbl = $("#bill_info_tbl");
    $bill_money = $bill_tbl.find("[name='bill_money[]']");
    
    var $credit_tbl = $("#credit_info_tbl");
    $balance_money = $credit_tbl.find("[name='balance_money[]']");
    
    $diff_money = $credit_tbl.find("span.diff_money");
    $diff_money.each(function() { $(this).removeClass("red"); });
    
    $charge = $credit_tbl.find("[name='charge_money[]']");
    
    for(var i=0; i<$bill_money.length; i++) {
        var res = 0;
        
        sum_credit = calc_sum_money($balance_money[i].value, $charge[i].value);
        res = calc_diff_money($bill_money[i].value, sum_credit);
        if(res < 0) {
            $($diff_money[i]).addClass("red");
            $diff_money[i].innerHTML = sep_money(res);
        } else {
            $diff_money[i].innerHTML = sep_money(res);
        }
        
    }
    
    
}
/***********************************************************
 *
 * 行を上へ
 *
 ***********************************************************/
function up_list(obj) {
    
    var tr = obj.parentNode.parentNode;
    var tbl = document.getElementById('credit_info_tbl');
    var tbody = tbl.children[0];
    
    if(tr.rowIndex == 2) return;
    
    // tr内の値を初期化
    $(tr).find(".diff_chk").removeAttr("checked");
    $(tr).find(".charge_money").text("");
    $(tr).find("[name='charge_money[]']").val("");
    
    tbody.insertBefore(tr , $(tr).prev()[0]);
    
    // 並び順を再設定
    $(tbl).find(".hd_seq").each(function(index) {
                               $(this).val(index);
                            });
    
    // 上へリンクの制御
    up_list_ctrl();
    
    calc_diff();
    
    set_del_ctrl();
}
/***********************************************************
 *
 * 上へリンクの一番上を非表示にする
 *
 ***********************************************************/
function up_list_ctrl() {

    var tbl = document.getElementById('credit_info_tbl');

    $link = $(tbl).find("a.up_list");
    $link.each(function() {
        
        css = $(this).parent().parent().prev().children().attr("class")
        
        if(css.indexOf("sep_row") > -1 || css.indexOf("title") > -1) {
            $(this).css("display", "none");
        } else {
            $(this).css("display", "");
        }
        
    });

}
/***********************************************************
 *
 * 消し込み入力情報の表示、非表示
 *
 ***********************************************************/
function set_del_ctrl() {

    // 初期化
    var credit_tbl = document.getElementById('credit_info_tbl');
    var condition = ".diff_msg_lbl, .diff_chk, .charge_money, [name='del_date[]'], .ui-datepicker-trigger, .diff_money, .set_target_chk";
    
    $(credit_tbl).find(condition).each(function() {
                                $(this).css("display", "");
                           });

    // 請求情報がないrowIndexを格納
    var bill_tbl = document.getElementById('bill_info_tbl');
    
    $bill_money = $(bill_tbl).find("[name='bill_money[]']");
   
    $(credit_tbl).find("[name='credit_received_id[]']")
                            .each(function(index) {
                                    $tr = $(this).parent().parent();
                                    if($(this).val() == '') {
                                            $tr.find(condition).each(function(){ $(this).css("display", "none");  });
                                    } else if($bill_money[index].value == '') {
                                            $tr.find(condition).each(function(){ $(this).css("display", "none");  });
                                    } else {
                                       diff = $tr.find(".diff_money").text();
                                       diff = jQuery.trim(diff);
                                       //if(parseInt(diff) == 0 || parseInt(diff) < 0) {
                                       if(parseInt(diff) < 0) {
                                           $tr.find(".diff_msg_lbl, .diff_chk").each(function(){ $(this).css("display", "none");  });
                                       }
                                        
                                    }
                            });

}
/***********************************************************
 *
 * 消込日を設定する
 *
 ***********************************************************/
function set_del_date(obj) {

    var chk = $(obj).attr('checked');
    $tr = $(obj).parent().parent();
    
    var date = "";
    if(chk == 'checked') {
        date = $tr.find(".credit_date_lbl").text();
        date = jQuery.trim(date);
    } else {
        $tr.find("[name='del_date[]']").val("");
    }
    
    if($tr.find("[name='del_date[]']").val() == "") {
        $tr.find("[name='del_date[]']").val(date);
    }

}

/***********************************************************
 *
 * 差額を振込み手数料に設定
 *
 ***********************************************************/
function set_charge_money(obj){
    
    var chk = $(obj).attr('checked');
    var $hd_charge = $(obj).parent().find("[name='charge_money[]']");
    var $lbl_charge = $(obj).parent().parent().parent().find(".charge_money");
    
    if(chk == 'checked') {
        var $tr = $(obj).parent().parent().parent().parent().parent().parent();
        
        var diff = jQuery.trim($tr.find(".diff_money").text());
        diff = replaceAll(diff, ",", "");
        
        $hd_charge.val(diff);
        $lbl_charge.text(sep_money(diff));
        
    } else {
        $hd_charge.val("");
        $lbl_charge.text("");
    }
    
    calc_diff();
}

/***********************************************************
 *
 * 登録ボタンとキャンセルボタンの切り替えをする
 *
 ***********************************************************/
function change_regist_btn() {

    var res = $('input[name="credit_status"]:checked').val();

    var regist = document.getElementById('regist_btn');
    var cancel = document.getElementById('cancel_btn');
    
    if(res == "1") {
        $(regist).css("display", "");
        $(cancel).css("display", "none");
    
    } else {
        $(regist).css("display", "none");
        $(cancel).css("display", "");
        
    }

}
/***********************************************************
 *
 * 振込手数料にHiddenのvalueが入っていた場合に表示する
 *
 ***********************************************************/
function set_disp_charge(obj) {
    $tbody = $(obj).parent().parent().parent().parent();
    $tbody.find(".charge_money").text(sep_money(obj.value));
}
/***********************************************************
 *
 * 消込済み選択時は全てのデータを表示しか押せない
 *
 ***********************************************************/
function set_other_rb() {
       
    $("[name='other_rb']").each(function() { $(this).removeAttr("disabled")});
    
    if($('input[name="credit_status"]:checked').val() == '2') {
        
        $("[name='other_rb']").each(function() { 
            if($(this).val() == '4') {
                $(this).attr('checked', 'checked');
            } else {
                $(this).attr("disabled", "disabled");
                $(this).removeAttr("checked");
            }
        });
    }
}

/***********************************************************
 *
 * 振込消込入力のみのjQuery関数
 *
 ***********************************************************/
jQuery( function() {
   
   set_other_rb();
   change_regist_btn();
   
   if($('input[name="credit_status"]:checked').val() == '2') return;
   
   $("[name='charge_money[]']").each(function() { set_disp_charge(this) });
   
   $(function(){
            calc_diff();
            up_list_ctrl();
            set_del_ctrl();
        })

    
});

/***********************************************************
 *
 * 振込消込入力のみのjQuery関数
 *
 ***********************************************************/
function clear_mine_search_item() {
    
    $("table.search_tbl").find("input:checkbox, input:text").each(function() { $(this).val("") });
    $("table.search_tbl").find("select").each(function() { $(this).val("") });
    $("table.search_tbl").find("input:radio").each(function() { 
                                                $(this).removeAttr("disabled");
                                                if($(this).val() == '1') {
                                                   $(this).attr("checked", true)  
                                                } else {
                                                    $(this).attr("checked", false)  
                                                }
                                            });
}
