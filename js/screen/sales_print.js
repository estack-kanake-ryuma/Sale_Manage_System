/***********************************************************
 *
 * 各出力ボタン押下
 *
 ***********************************************************/
function submit_pdf() {
    
    if(confirm('売上明細表を発行します。よろしいですか？')) {
        
        //$.blockUI({ message: '<h1>処理中・・・</h1>', css: { border:'2px solid #ff6699', color:'#ff6699', height : '150px' } })

        $("[name='btn_type']").val("pdf");
        document.print_form.submit();
    }
    
}

function submit_csv() {
    
    if(confirm('売上明細表CSVを出力します。よろしいですか？')) {
        $("[name='btn_type']").val("csv");
        document.print_form.submit();
    }
    
}
/***********************************************************
 * jQueryしばらくお待ちください
 ***********************************************************/
jQuery( function() {
    
    
});
