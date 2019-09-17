<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Receive batch Model
 *
 * 受注システムからの売上データを取り込む処理のモデル処理
 *
 * @link     http://www.datalyze.co.jp
 * @property Sales_mdl $sales_mdl
 * @property Receivable_mng_mdl $receivable_mng_mdl
 */
class Receive_batch_mdl extends MY_Model
{
    /**
     * 取り込みを行う項目数
     */
    const RECEIVE_ITEM_COUNT = 16;

    /**
     * 開始位置
     */
    const START_INDEX = 1;

    /**
     * コンストラクタ
     *
     * @package    application
     * @subpackage    model/db
     * @link        http://www.datalyze.co.jp
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("sales_helper");
        $this->load->model("/db/receivable_mng_mdl");
        $this->load->model("/bill/sales_mdl");
    }

    /**
     * t_outside_receive_mngへのinsert
     *
     * @param $data
     * @return int
     * @throws Exception
     */
    public function insert_outside_receive_mng($data)
    {
        $this->m_tbl_name = T_OUTSIDE_RECEIVE_MNG;
        $this->insert($data);
        return $this->db->insert_id();
    }

    /**
     * t_outside_receive_dataへのinsert
     *
     * @param $insert_data array
     * @throws Exception
     */
    public function insert_outside_receive_data($insert_data)
    {
        // テーブル名の設定
        $this->m_tbl_name = T_OUTSIDE_RECEIVE_DATA;
        $this->insert($insert_data);
    }

    /**
     * t_outside_relationへのinsert
     *
     * @param $sales_key stdClass
     * @param $body Outside_receive_body
     * @throws Exception
     */
    public function insert_outside_relation($sales_key, $body)
    {
        $this->m_tbl_name = T_OUTSIDE_RELATION;
        $insert_data = array(
            'manage_no' => $body->manage_no,
            'report_no' => convert_delimiter_report_no($body->report_no),            // 売上システム側のフォーマットに合わせてハイフン区切りに変換する
            'relation_status' => RELATION_STATUS_UNSENT
        );
        if ($sales_key !== null) {
            $insert_data['sales_mng_id'] = $sales_key->sales_mng_id;
            $insert_data['sales_detail_id'] = $sales_key->sales_detail_id;
        }
        $this->insert($insert_data);
    }

    /**
     * t_outside_receive_mngに登録するためのデータを作成する
     *
     * @access public
     * @param $bean Outside_receive_bean
     * @param $result string
     * @param $message string
     * @return array
     */
    public function generate_outside_receive_mng_insert_data($bean, $result = RECEIVE_RESULT_OK, $message = '')
    {
        $insert_data = array();
        $insert_data['process_datetime'] = $bean->outside_receive_header->process_datetime;
        $insert_data['record_count'] = $bean->outside_receive_footer->record_count;
        $insert_data['result'] = $result;
        if ($result === RECEIVE_RESULT_ERROR) {
            $insert_data['error_messages'] = $message;
        }

        return $insert_data;
    }

    /**
     * t_outside_receive_dataのinsertデータ作成
     *
     * @access public
     * @param int $outside_receive_mng_id
     * @param Outside_receive_body $body
     * @param string $result
     * @param string $error_message
     * @return array
     */
    public function generate_outside_receive_data($outside_receive_mng_id,
                                                  $body,
                                                  $result,
                                                  $error_message
    )
    {
        $insert_array = array();
        $insert_array['outside_receive_mng_id'] = $outside_receive_mng_id;
        $insert_array['manage_no'] = $body->manage_no;
        $insert_array['customer_name'] = $body->customer_name;
        $insert_array['report_no'] = $body->report_no;
        $insert_array['handler_name'] = $body->handler_name;
        $insert_array['goods_name'] = $body->goods_name;
        $insert_array['no_tax_money'] = $body->no_tax_money;
        $insert_array['test_pattern'] = $body->test_pattern;
        $insert_array['result'] = $result;
        $insert_array['error_message'] = $error_message;
        return $insert_array;
    }

    /**
     * t_outside_receive_dataへのエラー時のinsertデータの作成
     *
     * @param $outside_receive_mng_id int
     * @param $line string
     * @param $error_detail array
     * @return array
     */
    public function create_outside_receive_data_error_pattern($outside_receive_mng_id, $line, $error_detail)
    {
        $values = array();
        $values['outside_receive_mng_id'] = $outside_receive_mng_id;
        $values['result'] = RECEIVE_RESULT_ERROR;
        $values['error_message']
            = implode("\n", $error_detail)
            . "\n\n"
            . print_r(explode(RELATION_FILE_DELIMITER, $line), true);
        return $values;
    }

    /**
     * t_outside_receive_dataの更新
     *
     * @param $outside_receive_data_id
     * @param $upd_array
     * @throws Exception
     */
    public function update_outside_receive_data($outside_receive_data_id, $upd_array)
    {
        $this->m_tbl_name = T_OUTSIDE_RECEIVE_DATA;
        $this->m_where = array('outside_receive_data_id' => $outside_receive_data_id);

        foreach ($upd_array as $key => $value) {
            // 結果の更新
            $this->db->set($key, $value);
        }

        $this->update();
    }

    /**
     * 処理結果mngテーブル更新
     *
     * @access public
     * @param int $mng_id outside_receive_mng_id
     * @param array $upd_ary
     * @return void
     * @throws Exception
     *
     */
    public function update_outside_receive_mng($mng_id, $upd_ary)
    {
        $this->m_tbl_name = T_OUTSIDE_RECEIVE_MNG;
        $this->m_where = array('outside_receive_mng_id' => $mng_id);
        $this->db->set($upd_ary);
        $this->update();
    }

    /**
     * 取り込みバッチ用　連想配列作成
     *
     * @param string $record
     * @return Outside_receive_body
     */
    public function convert_body($record)
    {
        $arr = explode(RELATION_FILE_DELIMITER, $record);
        if (count($arr) !== Receive_batch_mdl::RECEIVE_ITEM_COUNT) {
            return null;
        }
        $body = new Outside_receive_body();
        $body->manage_no = $arr[0];
        $body->customer_name = $arr[1];
        $body->credit_type = $arr[2];
        $body->customer_type = $arr[3];
        $body->bill_date = $arr[4];
        $body->book_date = $arr[5];
        $body->report_no = $arr[6];
        $body->handler_name = $arr[7];
        $body->institute_name = $arr[8];
        $body->depart_name = $arr[9];
        $body->abstract_name = $arr[10];
        $body->goods_name = $arr[11];
        $body->tax_type = $arr[12];
        $body->no_tax_money = $arr[13];
        $body->tax = $arr[14];
        $body->test_pattern = $arr[15];
        return $body;
    }

    /**
     * report_noから売上情報のキーを取得する
     * @param $report_no string
     * @return null | stdClass
     * @throws Exception
     */
    public function select_sales_key_from_report_no($report_no)
    {
        $this->m_tbl_name = T_SALES_DETAIL;
        $this->db->select("sales_mng_id, sales_detail_id");
        $this->db->where(
            'substring(report_no, ' .  Receive_batch_mdl::START_INDEX . ', ' . REPORT_NO_LENGTH_8 . ') = ' . $report_no
        );
        if(strlen($report_no) === REPORT_NO_LENGTH_10)
        {
            $this->db->or_where('report_no', $report_no);
        }
        $this->db->order_by('sales_detail_id', 'asc');
        $result = $this->select();
        if (count($result) > 0) {
            return $result[0];
        }
        return null;
    }

    /**
     * 報告書Noを元にリレションデータが存在するかどうか
     *
     * @param $report_no string
     * @return bool
     * @throws Exception
     */
    public function exist_relation_by_report_no($report_no)
    {
        $this->m_tbl_name = T_OUTSIDE_RELATION;

        $this->db->select("count(*) as count");
        $this->db->where("report_no", $report_no);
        $result = $this->select();
        if ($result[0]->count === "0") {
            return false;
        }
        return true;
    }
}

/* End of file receive_batch_mdl.php */
/* Location: ./application/model/db/batch/receive_batch_mdl.php */