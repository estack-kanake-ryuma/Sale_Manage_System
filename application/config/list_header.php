<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| PDFのリストの表のタイトルを定義する
|--------------------------------------------------------------------------
*/
$config['sales_spec_print'] = array(
                array('width' => 10, 'height' => 7, 'name' => 'No.', 'col_name' => 'no', 'type'=> '', 'align' => 'C'),
                array('width' => 16, 'height' => 7, 'name' => '売上計上日', 'col_name' => 'book_date', 'type'=> 'date', 'align' => 'L'),
                array('width' => 55, 'height' => 7, 'name' => '得意先', 'col_name' => 'customer_name', 'type'=> 'length_40', 'align' => 'L'),
                array('width' => 22, 'height' => 7, 'name' => '報告書No', 'col_name' => 'report_no', 'type'=> '', 'align' => 'L'),        
                array('width' => 50, 'height' => 7, 'name' => '品名', 'col_name' => 'goods_name', 'type'=> 'length_35', 'align' => 'L'),
                array('width' => 20, 'height' => 7, 'name' => '売上(税抜)', 'col_name' => 'no_tax_money', 'type'=> 'money', 'align' => 'R'),
                array('width' => 18, 'height' => 7, 'name' => '担当者', 'col_name' => 'handler_name', 'type'=> '', 'align' => 'L'),
            );

$config['bill_sales_print'] = array(
                array('width' => 6, 'height' => 7, 'name' => 'No.', 'col_name' => 'no', 'type'=> '', 'align' => 'C'),
                array('width' => 20, 'height' => 7, 'name' => '報告書No', 'col_name' => 'report_no', 'type'=> '', 'align' => 'L'),
                array('width' => 16, 'height' => 7, 'name' => '担当者', 'col_name' => 'handler_name', 'type'=> '', 'align' => 'L'),
                array('width' => 54, 'height' => 7, 'name' => '品名', 'col_name' => 'goods_name', 'type'=> '', 'align' => 'L'),
                array('width' => 8, 'height' => 7, 'name' => '数量', 'col_name' => 'cnt', 'type'=> '', 'align' => 'L'),
                array('width' => 9, 'height' => 7, 'name' => '単位', 'col_name' => 'unit', 'type'=> '', 'align' => 'L'),        
                array('width' => 17, 'height' => 7, 'name' => '単価', 'col_name' => 'unit_price', 'type'=> 'money', 'align' => 'R'),
                array('width' => 17, 'height' => 7, 'name' => '金額(税抜)', 'col_name' => 'no_tax_money', 'type'=> 'money', 'align' => 'R'),
                array('width' => 8, 'height' => 7, 'name' => '税率', 'col_name' => 'tax_type_name', 'type'=> '', 'align' => 'R'),
                array('width' => 17, 'height' => 7, 'name' => '消費税', 'col_name' => 'tax', 'type'=> 'money', 'align' => 'R'),
                array('width' => 17, 'height' => 7, 'name' => '金額(税込)', 'col_name' => 'in_tax_money', 'type'=> 'money', 'align' => 'R'),
            );

$config['bill_cutoff_print'] = array(
                array('width' => 6, 'height' => 7, 'name' => 'No.', 'col_name' => 'no', 'type'=> '', 'align' => 'C'),
                array('width' => 20, 'height' => 7, 'name' => '報告書No', 'col_name' => 'report_no', 'type'=> '', 'align' => 'L'),
                array('width' => 16, 'height' => 7, 'name' => '担当者', 'col_name' => 'handler_name', 'type'=> '', 'align' => 'L'),
                array('width' => 54, 'height' => 7, 'name' => '品名', 'col_name' => 'goods_name', 'type'=> 'length_27', 'align' => 'L'),
                array('width' => 8, 'height' => 7, 'name' => '数量', 'col_name' => 'cnt', 'type'=> '', 'align' => 'L'),
                array('width' => 9, 'height' => 7, 'name' => '単位', 'col_name' => 'unit', 'type'=> '', 'align' => 'L'),        
                array('width' => 17, 'height' => 7, 'name' => '単価', 'col_name' => 'unit_price', 'type'=> 'money', 'align' => 'R'),
                array('width' => 17, 'height' => 7, 'name' => '金額(税抜)', 'col_name' => 'no_tax_money', 'type'=> 'money', 'align' => 'R'),
                array('width' => 8, 'height' => 7, 'name' => '税率', 'col_name' => 'tax_type_name', 'type'=> '', 'align' => 'R'),
                array('width' => 17, 'height' => 7, 'name' => '消費税', 'col_name' => 'tax', 'type'=> 'money', 'align' => 'R'),
                array('width' => 17, 'height' => 7, 'name' => '金額(税込)', 'col_name' => 'in_tax_money', 'type'=> 'money', 'align' => 'R'),
            );


$config['customer_input'] = array(
	array('width' => 6, 'height' => 7, 'name' => 'No.', 'col_name' => 'no', 'type'=> '', 'align' => 'C'),
	array('width' => 20, 'height' => 7, 'name' => '報告書No', 'col_name' => 'report_no', 'type'=> '', 'align' => 'L'),
	array('width' => 16, 'height' => 7, 'name' => '担当者', 'col_name' => 'handler_name', 'type'=> '', 'align' => 'L'),
	array('width' => 54, 'height' => 7, 'name' => '品名', 'col_name' => 'goods_name', 'type'=> 'length_27', 'align' => 'L'),
	array('width' => 8, 'height' => 7, 'name' => '数量', 'col_name' => 'cnt', 'type'=> '', 'align' => 'L'),
	array('width' => 9, 'height' => 7, 'name' => '単位', 'col_name' => 'unit', 'type'=> '', 'align' => 'L'),
	array('width' => 17, 'height' => 7, 'name' => '単価', 'col_name' => 'unit_price', 'type'=> 'money', 'align' => 'R'),
	array('width' => 17, 'height' => 7, 'name' => '金額(税抜)', 'col_name' => 'no_tax_money', 'type'=> 'money', 'align' => 'R'),
	array('width' => 8, 'height' => 7, 'name' => '税率', 'col_name' => 'tax_type_name', 'type'=> '', 'align' => 'R'),
	array('width' => 17, 'height' => 7, 'name' => '消費税', 'col_name' => 'tax', 'type'=> 'money', 'align' => 'R'),
	array('width' => 17, 'height' => 7, 'name' => '金額(税込)', 'col_name' => 'in_tax_money', 'type'=> 'money', 'align' => 'R'),
);


$config['sales_sum_handler'] = array(
                array('width' => 10, 'height' => 7, 'name' => 'No.', 'col_name' => 'no', 'type'=> '', 'align' => 'C'),
                array('width' => 110, 'height' => 7, 'name' => '摘要／得意先', 'col_name' => 'customer_name', 'type'=> '', 'align' => 'L'),
                array('width' => 23, 'height' => 7, 'name' => '売上(税抜)', 'col_name' => 'sum_no_tax', 'type'=> 'money', 'align' => 'R'),
            );

$config['sales_sum_customer'] = array(
                array('width' => 10, 'height' => 14, 'name' => 'No.', 'col_name' => 'no', 'type'=> '', 'align' => 'C'),
                array('width' => 80, 'height' => 14, 'name' => '得意先', 'col_name' => 'customer_disp_name', 'type'=> 'nbs|length_45', 'align' => 'L'),
                array('width' => 92, 'height' => 7, 'name' => '　売　上（ 税　抜 ）　', 'col_name' => '', 'align' => 'L', 'row_span_flg' => 105),
                array('width' => 23, 'height' => 7, 'name' => '前年同期', 'col_name' => 'bef_no_tax', 'type'=> 'money', 'align' => 'R'),
                array('width' => 23, 'height' => 7, 'name' => '当期', 'col_name' => 'now_no_tax', 'type'=> 'money', 'align' => 'R'),
                array('width' => 23, 'height' => 7, 'name' => '増減', 'col_name' => 'diff_no_tax', 'type'=> '', 'align' => 'R'),
                array('width' => 23, 'height' => 7, 'name' => '増減率', 'col_name' => 'diff_rate', 'type'=> '', 'align' => 'R'),
            );

$config['sales_sum_abstract'] = array(
                array('width' => 80, 'height' => 14, 'name' => '部門／得意先区分', 'col_name' => 'customer_type_name', 'type'=> 'nbs|length_45', 'align' => 'L'),
                array('width' => 69, 'height' => 7, 'name' => '　売　上　', 'col_name' => '', 'align' => 'L', 'row_span_flg' => 95),
                array('width' => 23, 'height' => 7, 'name' => '税抜額', 'col_name' => 'sum_no_tax', 'type'=> 'money', 'align' => 'R'),
                array('width' => 23, 'height' => 7, 'name' => '消費税', 'col_name' => 'sum_tax', 'type'=> 'money', 'align' => 'R'),
                array('width' => 23, 'height' => 7, 'name' => '税込額', 'col_name' => 'sum_money', 'type'=> 'money', 'align' => 'R'),
            );

$config['sales_sum_depart_on'] = array(
                array('width' => 80, 'height' => 14, 'name' => '得意先／摘要', 'col_name' => 'abstract_name', 'type'=> 'nbs|length_45', 'align' => 'L'),
                array('width' => 92, 'height' => 7, 'name' => '　売　上（ 税　抜 ）　', 'col_name' => '', 'align' => 'L', 'row_span_flg' => 95),
                array('width' => 23, 'height' => 7, 'name' => '前年同期', 'col_name' => 'bef_no_tax', 'type'=> 'money', 'align' => 'R'),
                array('width' => 23, 'height' => 7, 'name' => '当期', 'col_name' => 'now_no_tax', 'type'=> 'money', 'align' => 'R'),
                array('width' => 23, 'height' => 7, 'name' => '増減', 'col_name' => 'diff_no_tax', 'type'=> '', 'align' => 'R'),
                array('width' => 23, 'height' => 7, 'name' => '増減率', 'col_name' => 'diff_rate', 'type'=> '', 'align' => 'R'),
            );

$config['sales_sum_depart_off'] = array(
                array('width' => 80, 'height' => 14, 'name' => '得意先', 'col_name' => 'customer_name', 'type'=> 'length_45', 'align' => 'L'),
                array('width' => 92, 'height' => 7, 'name' => '　売　上（ 税　抜 ）　', 'col_name' => '', 'align' => 'L', 'row_span_flg' => 95),
                array('width' => 23, 'height' => 7, 'name' => '前年同期', 'col_name' => 'bef_no_tax', 'type'=> 'money', 'align' => 'R'),
                array('width' => 23, 'height' => 7, 'name' => '当期', 'col_name' => 'now_no_tax', 'type'=> 'money', 'align' => 'R'),
                array('width' => 23, 'height' => 7, 'name' => '増減', 'col_name' => 'diff_no_tax', 'type'=> '', 'align' => 'R'),
                array('width' => 23, 'height' => 7, 'name' => '増減率', 'col_name' => 'diff_rate', 'type'=> '', 'align' => 'R'),
            );

$config['receivable_list'] = array(
                array('width' => 80, 'height' => 14, 'name' => '得意先/部門', 'col_name' => 'customer_disp_name', 'type'=> 'length_45', 'align' => 'L'),
                array('width' => 23, 'height' => 14, 'name' => '合計', 'col_name' => 'total_money', 'type'=> 'money', 'align' => 'R'),
                array('width' => 23, 'height' => 14, 'name' => '3ヶ月以上計', 'col_name' => 'three_total', 'type'=> 'money', 'align' => 'R'),
                array('width' => 161, 'height' => 7, 'name' => '売掛金月齢表', 'col_name' => '', 'align' => 'L', 'row_span_flg' => 131),
                array('width' => 23, 'height' => 7, 'name' => '当月売上', 'col_name' => 'target_sales', 'type'=> 'money', 'align' => 'R'),
                array('width' => 23, 'height' => 7, 'name' => '１ヶ月', 'col_name' => 'first_rec', 'type'=> 'money', 'align' => 'R'),
                array('width' => 23, 'height' => 7, 'name' => '２ヶ月', 'col_name' => 'second_rec', 'type'=> 'money', 'align' => 'R'),
                array('width' => 23, 'height' => 7, 'name' => '３ヶ月', 'col_name' => 'third_rec', 'type'=> 'money', 'align' => 'R'),
                array('width' => 23, 'height' => 7, 'name' => '４ヶ月', 'col_name' => 'fourth_rec', 'type'=> 'money', 'align' => 'R'),
                array('width' => 23, 'height' => 7, 'name' => '５ヶ月', 'col_name' => 'fifth_rec', 'type'=> 'money', 'align' => 'R'),
                array('width' => 23, 'height' => 7, 'name' => '６ヶ月以上', 'col_name' => 'other_rec', 'type'=> 'money', 'align' => 'R'),
            );

$config['receivable_detail_list'] = array(
        array('width' => 75, 'height' => 7, 'name' => '得意先', 'col_name' => 'customer_disp_name', 'type'=> 'length_35', 'align' => 'L'),
        array('width' => 30, 'height' => 7, 'name' => '売掛金月齢', 'col_name' => '', 'type'=> 'money', 'align' => 'R'),
        array('width' => 16, 'height' => 7, 'name' => '年月日', 'col_name' => '', 'type'=> 'money', 'align' => 'R'),
        array('width' => 16, 'height' => 7, 'name' => '請求書No', 'col_name' => '', 'align' => 'L'),
        array('width' => 16, 'height' => 7, 'name' => '売上(税込)', 'col_name' => '', 'type'=> 'money', 'align' => 'R'),
        array('width' => 16, 'height' => 7, 'name' => '入金', 'col_name' => '', 'type'=> 'money', 'align' => 'R'),
        array('width' => 16, 'height' => 7, 'name' => '残高', 'col_name' => '', 'type'=> 'money', 'align' => 'R'),
    );

$config['master_file_print'] = array(
                array('width' => 20, 'height' => 7, 'name' => '年月日', 'col_name' => 'disp_target_date', 'type'=> 'date', 'align' => 'L'),
                array('width' => 20, 'height' => 7, 'name' => '請求書No', 'col_name' => 'bill_no', 'type'=> '', 'align' => 'L'),
                array('width' => 60, 'height' => 7, 'name' => '摘　要', 'col_name' => 'disp_abstract_name', 'type'=> '', 'align' => 'L'),        
                array('width' => 26, 'height' => 7, 'name' => '売上（税込）', 'col_name' => 'sales_money', 'type'=> 'money', 'align' => 'R'),
                array('width' => 26, 'height' => 7, 'name' => '入金', 'col_name' => 'credit_money', 'type'=> 'money', 'align' => 'R'),
                array('width' => 26, 'height' => 7, 'name' => '残高', 'col_name' => 'disp_receivable_money', 'type'=> '', 'align' => 'R'),
            );

