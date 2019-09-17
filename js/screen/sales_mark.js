/***********************************************************
 *
 * 第1四半期計を計算
 *
 ***********************************************************/
function compute_first_q() {
    
    $tbl = $("table.mark_tbl_c");
    
    var money_3 = [];
    $tbl.find("[name*='money_3']").each(function() { 
        money_3[money_3.length] = $(this).val();
    });

    var money_4 = [];
    $tbl.find("[name*='money_4']").each(function() { 
        money_4[money_4.length] = $(this).val();
    });

    var money_5 = [];
    $tbl.find("[name*='money_5']").each(function() { 
        money_5[money_5.length] = $(this).val();
    });

    var money = 0;
    var sum_money = 0;
    for(var i=0;i<money_3.length;i++) {
        
        money = calc_sum_money(money_3[i], money_4[i]);
        money = calc_sum_money(money_5[i], money);
        
        sum_money += money;
        
        $tbl.find("span.first_q_" + i).text((money == 0) ? "" : sep_money(money));
        
        money = 0;
    }
       $tbl.find("span.first_q_1_total").text(sep_money(sum_money));
    
}
/***********************************************************
 *
 * 第2四半期計を計算
 *
 ***********************************************************/
function compute_second_q() {
    
    $tbl = $("table.mark_tbl_c");
    
    var money_6 = [];
    $tbl.find("[name*='money_6']").each(function() { 
        money_6[money_6.length] = $(this).val();
    });

    var money_7 = [];
    $tbl.find("[name*='money_7']").each(function() { 
        money_7[money_7.length] = $(this).val();
    });

    var money_8 = [];
    $tbl.find("[name*='money_8']").each(function() { 
        money_8[money_8.length] = $(this).val();
    });

    var money = 0;
    var sum_money = 0;
    for(var i=0;i<money_6.length;i++) {
        
        money = calc_sum_money(money_6[i], money_7[i]);
        money = calc_sum_money(money_8[i], money);
        
        sum_money += money;
        $tbl.find("span.second_q_" + i).text((money == 0) ? "" : sep_money(money));
        
        money = 0;
    }
       
    $tbl.find("span.first_q_2_total").text(sep_money(sum_money));
}
/***********************************************************
 *
 * 第3四半期計を計算
 *
 ***********************************************************/
function compute_third_q() {
    
    $tbl = $("table.mark_tbl_c");
    
    var money_9 = [];
    $tbl.find("[name*='money_9']").each(function() { 
        money_9[money_9.length] = $(this).val();
    });

    var money_10 = [];
    $tbl.find("[name*='money_10']").each(function() { 
        money_10[money_10.length] = $(this).val();
    });

    var money_11 = [];
    $tbl.find("[name*='money_11']").each(function() { 
        money_11[money_11.length] = $(this).val();
    });

    var money = 0;
    var sum_money=0;
    for(var i=0;i<money_9.length;i++) {
        
        money = calc_sum_money(money_9[i], money_10[i]);
        money = calc_sum_money(money_11[i], money);
        
        sum_money += money;
        $tbl.find("span.third_q_" + i).text((money == 0) ? "" : sep_money(money));
        
        money = 0;
    }
    
    $tbl.find("span.first_q_3_total").text(sep_money(sum_money));
       
    
}
/***********************************************************
 *
 * 第4四半期計を計算
 *
 ***********************************************************/
function compute_fourth_q() {
    
    $tbl = $("table.mark_tbl_c");
    
    var money_12 = [];
    $tbl.find("[name*='money_12']").each(function() { 
        money_12[money_12.length] = $(this).val();
    });

    var money_1 = [];
    $tbl.find("[name*='money_1']").each(function() { 
        money_1[money_1.length] = $(this).val();
    });

    var money_2 = [];
    $tbl.find("[name*='money_2']").each(function() { 
        money_2[money_2.length] = $(this).val();
    });

    var money = 0;
    var sum_money = 0;
    for(var i=0;i<money_12.length;i++) {
        
        money = calc_sum_money(money_12[i], money_1[i]);
        money = calc_sum_money(money_2[i], money);
        
        sum_money += money;
        $tbl.find("span.fourth_q_" + i).text((money == 0) ? "" : sep_money(money));
        
        money = 0;
    }
       
    $tbl.find("span.first_q_3_total").text(sep_money(sum_money));
    
}


/***********************************************************
 *
 * 行の合計を計算
 *
 ***********************************************************/
function compute_total_all() {
    
    $tbl = $("table.mark_tbl_c");
    
    var money = 0;
    var sum_total=0;
    $tbl.find("tr").each(function() { 
        
        money = compute_total_all_child($(this));
        sum_total += money;
        $(this).find(".row_total").text((money == 0) ? "" : sep_money(money));
        $(this).find(".sum_total").text((sum_total == 0) ? "" : sep_money(sum_total));
        
    });
    
}

function compute_total_all_child($tr_obj)
{
    var money = 0;
    $tr_obj.find("input.money").each(function() { 
         money = calc_sum_money($(this).val(), money);
    });

    return money;
}

/***********************************************************
 *
 * 累計を計算
 *
 ***********************************************************/
function compute_sum_total() {
    
 
}

/***********************************************************
 *
 * 表示ボタンsubmit処理
 *
 ***********************************************************/
function disp_exec() {
    
    var $hid = $("#regist_year");
    var $disp_type = $("#disp_type");
    var value = $("#year").val();
    
    $disp_type.val("");

    $hid.val(value);

    document.regist_form.submit();
    
}

/***********************************************************
 *
 * 登録ボタンsubmit処理
 *
 ***********************************************************/
function regist_exec($str) {
    
    if(confirm('登録します。よろしいですか？')) {
    
        var $hid = $("#regist_year");
        var $disp_type = $("#disp_type");
        var value = $("#year").val();

        if($str == "regist") {
            $disp_type.val("regist");
        }

        $hid.val(value);

        document.regist_form.submit();
    }
    
}
/***********************************************************
 *
 * JQUERY
 *
 ***********************************************************/
jQuery( function() {
    
    $(function(){ 
        compute_total_all();
        compute_first_q();
        compute_second_q();
        compute_third_q();
        compute_fourth_q();
    })
    
});

