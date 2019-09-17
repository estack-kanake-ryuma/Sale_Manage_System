<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Outside send Bean
 *
 * 送信データBean
 *
 * @link        http://www.datalyze.co.jp
 */
class Outside_send_bean
{
    /**
     * ヘッダー情報
     * @var Outside_send_header
     */
    public $outside_send_header;

    /**
     * フッター情報
     * @var Outside_send_footer
     */
    public $outside_send_footer;

    /**
     * Outside_send_bodyの配列
     * @var Outside_send_body[]
     */
    public $outside_send_bodies = array();
}
class Outside_send_header
{
    /**
     * @var string 処理日時 YYYYMMDDHHMM
     */
    public $process_datetime;
}
class Outside_send_footer
{
    /**
     * @var int データレコード数
     */
    public $record_count;
}
class Outside_send_body
{
    /**
     * @var int 送信データID
     */
    public $outside_send_data_id;

    /**
     * @var int リレーションID
     */
    public $outside_relation_id;

    /**
     * @var string リレーション状態
     */
    public $relation_status;

    /**
     * @var string 入金状態
     */
    public $reconcile_status;

    /**
     * @var string 管理No
     */
    public $manage_no;

    /**
     * @var string 報告書No
     */
    public $report_no;

    /**
     * @var string 請求書No
     */
    public $bill_no;

    /**
     * @var string 請求日 YYYYMMDD
     */
    public $bill_date;

    /**
     * @var string 売上計上日 YYYYMMDD
     */
    public $book_date;

    /**
     * @var string 入金日 YYYYMMDD
     */
    public $credit_date;
}
/* End of file outside_send_bean.php */
/* Location: ./application/model/batch/outside_send_bean.php */