<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Outside receive Bean
 *
 * 受信データBean
 *
 * @link        http://www.datalyze.co.jp
 */
class Outside_receive_bean
{
    /**
     * ヘッダー情報
     * @var Outside_receive_header
     */
    public $outside_receive_header;

    /**
     * フッター情報
     * @var Outside_receive_footer
     */
    public $outside_receive_footer;
}
class Outside_receive_header
{
    /**
     * @var string 処理日時 YYYYMMDDHHMM
     */
    public $process_datetime;
}
class Outside_receive_footer
{
    /**
     * @var int データレコード数
     */
    public $record_count;
}
class Outside_receive_body
{
    /**
     * @var string 管理No
     */
    public $manage_no;

    /**
     * @var string 得意先名
     */
    public $customer_name;

    /**
     * @var string 入金種別
     */
    public $credit_type;

    /**
     * @var string 得意先区分
     */
    public $customer_type;

    /**
     * @var string 請求日
     */
    public $bill_date;

    /**
     * @var string 売上計上日
     */
    public $book_date;

    /**
     * @var string 報告書No
     */
    public $report_no;

    /**
     * @var string 試験担当者
     */
    public $handler_name;

    /**
     * @var string 研究所
     */
    public $institute_name;

    /**
     * @var string 部門
     */
    public $depart_name;

    /**
     * @var string 摘要
     */
    public $abstract_name;

    /**
     * @var string 品名
     */
    public $goods_name;

    /**
     * @var string 税区分
     */
    public $tax_type;

    /**
     * @var int 売上金額
     */
    public $no_tax_money;

    /**
     * @var int 消費税
     */
    public $tax;

    /**
     * @var string 試験パターン区分
     * 1:自主　2:苦情　3:一般外部
     */
    public $test_pattern;
}

/* End of file outside_receive_bean.php */
/* Location: ./application/model/batch/outside_receive_bean.php */
