/***********************************************************
 *
 * チェックボックス全チェック
 *
 ***********************************************************/
function chk_all(obj) {
  
    var chk = $(obj).attr('checked');
    if(chk == 'checked') {
        $("input.chk_print").each(function(){ 
            
            if($(this).is(':disabled') == false ) {
                $(this).attr('checked', 'checked');
                set_chk_value($(this));
            }
        });
    } else {
        $("input.chk_print").each(function(){ 
            $(this).removeAttr("checked");
            set_chk_value($(this));
        });
    }
    
}

function set_chk_value(obj) {
    
    var $jObj = (obj instanceof jQuery ) ? obj : $(obj);
    var chk = $(obj).attr('checked');
    
    if(chk == 'checked') {
        var bill_money = $jObj.closest("td").closest("tr").find("span.bill_money_lbl").text();
        var $money = $jObj.closest("td").closest("tr").find("[name='reconcile_money[]']");
        if($money.val() == "") {
            $jObj.closest("td").closest("tr").find("[name='reconcile_money[]']").val(bill_money);
        }
    } else {
        $jObj.closest("td").closest("tr").find("[name='reconcile_money[]']").val("");
    }
    
    
}

/***********************************************************
 * 削除ボタン押下時の処理
 ***********************************************************/
function setoff_del_data(id) {
    
    var url = "";
    if(location.href.indexOf("index") > 0) {
        url = replaceAll(location.href, "index", "delete");
        url = url + "?id=" + id;
    } else {
        url = location.href + "/delete/?id=" + id;
    }
    
    if(confirm('取消します。よろしいですか？')) {
        document.location = url;
    }
    
    
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
    
    if($("[name='credit_status']:checked").val() == "1") {
        $("[name='reconcile_date_from']").val("");
        $("[name='reconcile_date_to']").val("");
        $("[name='reconcile_date_from']").attr("disabled", "disabled");
        $("[name='reconcile_date_to']").attr("disabled", "disabled");
        $("[name='reconcile_date_from']").addClass('disabled');
        $("[name='reconcile_date_to']").addClass('disabled');
        
    } else {
        $("[name='reconcile_date_from']").removeAttr("disabled");
        $("[name='reconcile_date_from']").removeClass('disabled');
        $("[name='reconcile_date_to']").removeAttr("disabled");
        $("[name='reconcile_date_to']").removeClass('disabled');

        
        
    }
    
    
}


