/***********************************************************
 *
 * 文字列全置換
 *
 ***********************************************************/
function replaceAll(expression, org, dest) {
    
    if(typeof expression != 'string') {
        return expression;
    } else {
        return expression.split(org).join(dest);
    }
    
}
/***********************************************************
 *
 * 
 *
 ***********************************************************/
function getAllElementArray(obj, alType, name) {

    if(name === undefined) name = "";

    var elements;
    var array = [];

    var iCnt = 0;
    var rObj;
    for (var i = 0; i < alType.length; i++) {
        elements = obj.getElementsByTagName(alType[i]);
        for (var j = 0; j < elements.length; j++) {

            if (name.length === 0) {
                array[iCnt] = elements[j];
                iCnt++;
            } else {
                for (var k = 0; k < name.length; k++) {
                    rObj = new RegExp(name[k]);
                    if (rObj.test(elements[j].id)) {
                        array[iCnt] = elements[j];
                        iCnt++;

                    }

                }

            }
        
        }
        
    }
    return array;

}
/***********************************************************
 *
 * 日付形式のチェック
 *
 ***********************************************************/
function checkDate(value) {

    // YYYY/MM/DD形式チェック(年は数字4桁,月は01～12,日は01～31)
    if (!value.match(/^([0-9]{4})\/(0[1-9]|1[012])\/(0[1-9]|[12][0-9]|3[01])$/)) {
        return false;
    }
    
    //年月日
    var sYear = value.split("/")[0] - 0;
    var sMonth = value.split("/")[1] - 1; // Javascriptは、0-11で表現
    var sDay = value.split("/")[2] - 0;

    //日付の妥当性チェック
    var oDate = new Date(Date.parse(value));
    if (oDate.getFullYear() == sYear && oDate.getMonth() == sMonth && oDate.getDate() == sDay) {
        return true;
    }
    else {
        return false;
    }
}
/***********************************************************
 *
 * 年月形式のチェック
 *
 ***********************************************************/
function checkYearMonth(value) {

    // YYYY/MM/DD形式チェック(年は数字4桁,月は01～12,日は01～31)
    if (!value.match(/^([0-9]{4})\/(0[1-9]|1[012])$/)) {
        return false;
    } else {
        return true;
    }
}
/***********************************************************
 *
 * 年月の差を求める
 *
 ***********************************************************/
function compareMonth(year1, month1, year2, month2) {
    
    var dt1 = new Date(year1, month1 - 1, 15);
    var dt2 = new Date(year2, month2 - 1, 15);
    var diff = dt1 - dt2;
    //1日は86400000ミリ秒
    var diffDay = diff / 86400000;
    diffDay = diffDay / 31; // 約月の日数で割る
    
    return Math.round(diffDay);
}
/***********************************************************
 *
 * nヶ月後の月を求める
 *
 ***********************************************************/
function computeMonth(year, month, addMonths) {
    
    month += addMonths;
    day = 31;
    var endDay = getMonthEndDay(year, month);//ここで、前述した月末日を求める関数を使用します
    if(day > endDay) day = endDay;
    var dt = new Date(year, month - 1, day);
    return dt;
}
/***********************************************************
 *
 * 月末日を求める
 *
 ***********************************************************/
function getMonthEndDay(year, month) {
    //日付を0にすると前月の末日を指定したことになります
    //指定月の翌月の0日を取得して末日を求めます
    //そのため、ここでは month - 1 は行いません
    var dt = new Date(year, month, 0);
    return dt.getDate();
}


