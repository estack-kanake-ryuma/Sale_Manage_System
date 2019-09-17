<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| PDFのリストの表のタイトルを定義する
|--------------------------------------------------------------------------
*/
$config['sales_spec_order'] = array(
                array('item' => 1, 'name' => "売上計上日順", 'sql' => 'book_date asc, sales_mng_id asc, sales_detail_id asc'),
                array('item' => 2, 'name' => "得意先名順", 'sql' => 'customer_furi is null asc, customer_furi asc, book_date asc, sales_mng_id asc, sales_detail_id asc'),
                array('item' => 3, 'name' => "売上の大きい順", 'sql' => 'no_tax_money desc, book_date asc, sales_mng_id asc, sales_detail_id asc'),
                array('item' => 4, 'name' => "売上の小さい順", 'sql' => 'no_tax_money asc, book_date asc, sales_mng_id asc, sales_detail_id asc'),
            );

$config['sales_sum_depart_order'] = array(
                array('item' => 1, 'name' => "得意先名順", 'sql' => 'customer_furi is null asc, customer_furi asc'),    
                array('item' => 2, 'name' => "前年同期売上が大きい順", 'sql' => 'bef_no_tax desc, customer_furi is null asc, customer_furi asc'),
                array('item' => 3, 'name' => "当期売上が大きい順(摘要非表示)", 'sql' => 'now_no_tax desc, customer_furi is null asc, customer_furi asc'),
                array('item' => 4, 'name' => "売上増減額が大きい順", 'sql' => 'diff_no_tax desc, customer_furi is null asc, customer_furi asc'),
                array('item' => 5, 'name' => "売上増減額が小さい順", 'sql' => 'diff_no_tax asc, customer_furi is null asc, customer_furi asc'),    
            );

$config['sales_sum_abstract_order'] = array(
                array('item' => 1, 'name' => "税込額の大きい順", 'sql' => 'sum_money desc'),
                array('item' => 2, 'name' => "税込額の小さい順", 'sql' => 'sum_money asc'),
            );

$config['sales_sum_handler_order'] = array(
                array('item' => 1, 'name' => "売上の大きい順", 'sql' => 'sum_no_tax desc'),
                array('item' => 2, 'name' => "売上の小さい順", 'sql' => 'sum_no_tax asc'),
            );

$config['sales_sum_customer_order'] = array(
                array('item' => 1, 'name' => "得意先名順", 'sql' => 'customer_furi is null asc, customer_furi asc'),    
                array('item' => 2, 'name' => "前年同期売上が大きい順", 'sql' => 'bef_no_tax desc, customer_furi is null asc, customer_furi asc'),
                array('item' => 3, 'name' => "当期売上が大きい順", 'sql' => 'now_no_tax desc, customer_furi is null asc, customer_furi asc'),
                array('item' => 4, 'name' => "売上増減額が大きい順", 'sql' => 'diff_no_tax desc, customer_furi is null asc, customer_furi asc'),
                array('item' => 5, 'name' => "売上増減額が小さい順", 'sql' => 'diff_no_tax asc, customer_furi is null asc, customer_furi asc'),    
            );

$config['receivable_list'] = array(
                array('item' => "1", 'name' => "得意先名順", 'sql' => ''),
            );

$config['master_file_print'] = array(
                array('item' => "", 'name' => "年月日順", 'sql' => ''),
            );

