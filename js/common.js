/***********************************************************
 * 画像On、OFF切り替え
 ***********************************************************/
function rollover() {
    if (document.getElementsByTagName) {
        var images = document.getElementsByTagName("img");

        for (var i = 0; i < images.length; i++) {
            if (images[i].getAttribute("src").match("_off.")) {
                addEvent(images[i]);
            }
        }

        var inputs = document.getElementsByTagName("input");
        for (var i = 0; i < inputs.length; i++) {
            if (inputs[i].getAttribute("type") == "image") {
                if (inputs[i].getAttribute("src").match("_off.")) {
                    addEvent(inputs[i]);
                }
            }
        }
    }
}

/***********************************************************
 * 画像On、OFF切り替えのイベント追加
 ***********************************************************/
function addEvent(obj) {
    obj.onmouseover = function () {
        this.setAttribute("src", this.getAttribute("src").replace("_off.", "_on."));
    }
    obj.onmouseout = function () {
        this.setAttribute("src", this.getAttribute("src").replace("_on.", "_off."));
    }
}

if (window.addEventListener) {
    window.addEventListener("load", rollover, false);
}
else if (window.attachEvent) {
    window.attachEvent("onload", rollover);
}

/***********************************************************
 * 登録します。よろしいですか？
 ***********************************************************/
btn_name = "";

function confirmPrint(str) {

    if (btn_name != "print") return true;

    if (confirm(str + 'を出力します。よろしいですか？')) {

        return true;
    }

    return false;
}

/***********************************************************
 * 全角半角変換
 ***********************************************************/
function chgCode(str_val) {
    work = '';
    for (lp = 0; lp < str_val.length; lp++) {
        unicode = str_val.charCodeAt(lp);
        val = str_val.substr(lp, 1);
        if ((0xff0f < unicode) && (unicode < 0xff1b)) {
            work += String.fromCharCode(unicode - 0xfee0);
        } else if ((0xff20 < unicode) && (unicode < 0xff3b)) {
            work += String.fromCharCode(unicode - 0xfee0);
        } else if ((0xff40 < unicode) && (unicode < 0xff5b)) {
            work += String.fromCharCode(unicode - 0xfee0);
        } else if (val === 'ー' || val === '―' || val === '－') {
            work += '-';
        } else if (val === '．') {
            work += '.';
        } else if (val === '、' || val === '，') {
            work += ',';
        } else {
            work += String.fromCharCode(unicode);
        }
    }
    work = work.replace(/^[ 　]+|[ 　]+$|/gi, "");
    return work;
}

/***********************************************************
 * 金額の3桁区切り処理
 ***********************************************************/
function sep_money(value) {
    var num = new String(value).replace(/,/g, "");
    while (num != (num = num.replace(/^(-?\d+)(\d{3})/, "$1,$2"))) ;

    return num;
}

/***********************************************************
 * 報告書Noの区切り処理
 ***********************************************************/
function sep_report_no(value) {
    var num = new String(value).replace(/,/g, "");
    while (num != (num = num.replace(/^([a-zA-Z0-9]{4})(\d{2}$)/, "$1-$2"))) ;

    return num;
}


/***********************************************************
 * 新規登録ボタン押下時の処理
 ***********************************************************/
function move_input() {
    var url = location.href;
    url = replaceAll(url, "_list", "_input");

    document.location = url;

}

/***********************************************************
 * 変更ボタン押下時の処理
 ***********************************************************/
function upd_data(id) {

    var url = location.href.replace(/\?.*$/, "");
    url = replaceAll(url, "http://", "");
    url = replaceAll(url, "_list", "_input");

    data = url.split("/");

    url = "/" + data[1] + "/" + data[2] + "/edit/?id=" + id;

    document.location = url;

}

/***********************************************************
 * 削除ボタン押下時の処理
 ***********************************************************/
function del_data(id) {

    var url = "";
    if (location.href.indexOf("index") > 0) {
        url = replaceAll(location.href, "index", "delete");
        url = url + "?id=" + id;
    } else {
        url = location.href + "/delete/?id=" + id;
    }

    if (confirm('削除します。よろしいですか？')) {
        document.location = url;
    }


}

/***********************************************************
 * 検索フィールドクリア処理
 ***********************************************************/
function clear_search_item(type) {

    if (type === undefined) type = "";

    $("table.search_tbl").find("input:checkbox, input:text").each(function () {
        $(this).val("")
    });
    $("table.search_tbl").find("select").each(function () {
        $(this).val("")
    });
    $("table.search_tbl").find("input:radio").each(function () {
        if ($(this).val() == type) {
            $(this).attr("checked", true)
        } else {
            $(this).attr("checked", false)
        }
    });

}

/***********************************************************
 * テーブル行追加処理
 ***********************************************************/
function addTableRow(tbl) {

//    var list = tbl.rows[tbl.rows.length - 1].cloneNode(true);
//    tbl.children[0].appendChild(list);

}

/***********************************************************
 * 数値かチェックする
 * ※空文字はＮＧ
 ***********************************************************/
function check_num(val) {
    if (val == "") return false;
    return isNaN(val) ? false : true;
}

/***********************************************************
 * 単価 × 数量
 * ※ 端数は四捨五入
 ***********************************************************/
function calc_multiple($cnt, $unit_price) {

    var calc1 = ($cnt instanceof jQuery) ? $cnt.val() : $cnt.value;
    var calc2 = ($unit_price instanceof jQuery) ? $unit_price.val() : $unit_price.value;

    calc1 = replaceAll(calc1, ",", "");
    calc2 = replaceAll(calc2, ",", "");

    if (!check_num(calc1)) return "";
    if (!check_num(calc2)) return "";

    var result = "";

    result = calc1 * calc2;
    result = result.toFixed(0);

    return result;
}

/***********************************************************
 * 消費税計算
 ***********************************************************/
function calc_tax(money, $tax) {

    var calc1 = money;
    var calc2 = get_tax_rate($tax);

    calc1 = replaceAll(calc1, ",", "");

    if (!check_num(calc1)) return "";
    if (!check_num(calc2)) return "";

    var result = "";

    if ($tax.children(':selected').text().indexOf("税込") > -1) {
        result = (calc1 / ((calc2 * 100) + 100)) * (calc2 * 100);
    } else {
        result = calc1 * calc2;
    }

    result = result.toFixed(0);

    return result;

}

/***********************************************************
 * 税区分から税率を取得する
 ***********************************************************/
function get_tax_rate(type) {

    var $obj;
    var res = "";
    (type instanceof jQuery) ? $obj = type : $obj = $(type);

    res = $obj.find("option:selected").text();

    return (res.match("[0-9]") == null) ? "" : parseFloat(res.match("[0-9]+")[0] * 0.01);
}

/***********************************************************
 * 金額を計算する
 ***********************************************************/
function calc_sum_money(val1, val2) {

    var res1 = 0;
    var res2 = 0;

    res1 = replaceAll(val1, ",", "");
    res2 = replaceAll(val2, ",", "");

    check_num(res1) ? res1 = parseInt(res1) : res1 = parseInt(0);
    check_num(res2) ? res2 = parseInt(res2) : res2 = parseInt(0);

    return res1 + res2;

}

/***********************************************************
 * 金額を計算する
 ***********************************************************/
function calc_diff_money(val1, val2) {

    var res1 = 0;
    var res2 = 0;

    res1 = replaceAll(val1, ",", "");
    res2 = replaceAll(val2, ",", "");

    check_num(res1) ? res1 = parseInt(res1) : res1 = parseInt(0);
    check_num(val2) ? res2 = parseInt(res2) : res2 = parseInt(0);

    return res1 - res2;

}

/***********************************************************
 *
 * Ajax用関数のパラメータを返却する。
 *
 ***********************************************************/
function get_param_ap(sUrl, req, resp) {
    return {
        url: sUrl,
        scriptCharset: 'utf-8',
        type: "POST",
        cache: false,
        dataType: "json",
        data: {name: req.term},
        success: function (result) {
            resp(result);
        }
    };
}

/***********************************************************
 *
 * 六桁データを年月型に変換
 *
 ***********************************************************/
function chg_yearmonth(val) {

    ym = chgCode(val);
    if (ym !== '' && ym.length === 6 && (ym.match(/[0-9]+/g) == ym)) {
        return ym.substring(0, 4) + "/" + ym.substring(4, 6);
    }

    return val;

}

/***********************************************************
 *
 * 当日日付を取得
 * yyyy/mm/dd形式
 *
 ***********************************************************/
function get_now_date() {

    kyou = new Date();
    yy = kyou.getFullYear();
    mm = kyou.getMonth() + 1;
    dd = kyou.getDate();

    if (mm.toString().length == 1) {
        mm = "0" + mm;
    }

    if (dd.toString().length == 1) {
        dd = "0" + dd;
    }

    return yy + "/" + mm + "/" + dd;

}

/***********************************************************
 *
 * 削除ボタンsubmit処理
 *
 ***********************************************************/
function submitStop(e) {

    if (!e) {
        e = window.event;
    }

    if (e.keyCode == 13) {
        return false;
    }

    return true;

}