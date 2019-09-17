<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Send_batch Model
 * 請求回収データ送信バッチのモデルクラス
 *
 * 請求回収データ送信バッチ処理に関するDB処理などの司る
 * @property My_ftp $ftp
 */
class Send_batch_mdl extends MY_Model
{
    /**
     * @var string エラー情報の格納
     */
    private $_error;

    /**
     * @const 取込結果の定数
     */
    const IMPORT_RESULT = '1';

    /**
     * コンストラクタ
     *
     * @package application
     * @author Kanake Ryuma
     * @link http://www.datalyze.co.jp
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('batch/outside_send_bean');
        $this->load->library('ftp');
        $this->load->helper('file');
    }

    /**
     * 請求回収データを送信する処理
     *
     * @access public
     * @return void
     * @throws Exception
     * @author Kanake Ryuma
     */
    public function send()
    {
        try {
            $this->db->trans_start();

            // 請求回収データの対象データを取得
            $send_records = $this->_select_outside_send_data();
            if (count($send_records) === 0) {
                log_message('info', NO_OUTSIDE_SEND_DATA);
                return;
            }

            $bean = $this->_generate_send_bean($send_records);
            if (count($bean->outside_send_bodies) === 0) {
                log_message('info', NO_OUTSIDE_SEND_DATA);
                return;
            }
            $send_text = $this->_generate_send_text($bean);

            // 受注システムに請求回収データを送信する
            $result = $this->_send_data_to_accept_system($send_text);
            if ($result === false) {
                log_message('error', '[Process Failed] send_batch');
                log_message('error', print_r($this->_error));
                $this->db->trans_rollback();
                return;
            }

            // 送信テーブルに登録
            $outside_send_mng_id = $this->_insert_outside_send_mng($bean);
            $this->_insert_outside_send_data($bean->outside_send_bodies, $outside_send_mng_id);

            // 送信した売上データを送信済みステータスに変更
            $this->_update_send_status($bean->outside_send_bodies);

            $this->db->trans_complete();
        } catch (Exception $exception) {
            log_message('error', '[ERROR] DB Error' . $exception->getMessage() . implode($exception->getTrace()));
            throw $exception;
        }
    }

    /**
     * 送信データBeanを作成する
     *
     * @access private
     * @param  array $send_records
     * @return Outside_send_bean
     * @author Kanake Ryuma
     * @throws Exception
     */
    private function _generate_send_bean($send_records)
    {
        $bean = new Outside_send_bean();
        //------------------------------------------------------
        // ヘッダーレコードの情報
        //------------------------------------------------------
        $bean->outside_send_header->process_datetime = date('YmdHi');
        //------------------------------------------------------
        // データレコードの情報
        //------------------------------------------------------
        foreach ($send_records as $record) {

            $credit = array();
            if(!empty($record->credit_mng_id)) {
                // 入金情報を取得する
                $credit = $this->_select_credit_data($record->credit_mng_id);
            }

            $body = new Outside_send_body();
            $body->outside_relation_id = $record->outside_relation_id;
            $body->relation_status = $record->relation_status;
            $body->reconcile_status = $record->reconcile_status;
            $body->manage_no = $record->manage_no;
            $body->report_no = $record->report_no;
            $body->bill_no = $record->bill_no;
            $body->bill_date = $record->bill_date;
            $body->book_date = $record->book_date;
            if(count($credit) === 1) {
                $body->credit_date = $credit[0]->credit_date;
            }
            // 送信対象かどうかチェック
            if ($this->_is_check_send_target($body)) {
                $bean->outside_send_bodies[] = $body;
            }
        }
        //------------------------------------------------------
        // フッターレコードの情報
        //------------------------------------------------------
        $bean->outside_send_footer->record_count = count($bean->outside_send_bodies);
        return $bean;
    }

    /**
     * 送信するテキストを作成する
     *
     * @access private
     * @param  $bean Outside_send_bean
     * @return string
     * @author Kanake Ryuma
     */
    private function _generate_send_text($bean)
    {
        $text_ary = array();
        $text_ary[] = $bean->outside_send_header->process_datetime;
        foreach ($bean->outside_send_bodies as $body) {
            $body_ary = array();
            $body_ary['manage_no'] = $body->manage_no;
            $body_ary['report_no'] = str_replace('-', '', $body->report_no);
            $body_ary['book_date'] = str_replace('-', '', $body->book_date);
            $body_ary['bill_date'] = str_replace('-', '', $body->bill_date);
            $body_ary['bill_no'] = $body->bill_no;
            $body_ary['credit_date'] = str_replace('-', '', $body->credit_date);
            $body_ary['result'] = Send_batch_mdl::IMPORT_RESULT;
            $text_ary[] = implode(RELATION_FILE_DELIMITER, $body_ary);
        }
        $text_ary[] = $bean->outside_send_footer->record_count;
        return implode(RELATION_FILE_LINE_FEED, $text_ary);
    }

    /**
     * 送信するための請求回収データを作成する
     *
     * @access private
     * @param  string $send_text
     * @return boolean
     * @author Kanake Ryuma
     */
    private function _send_data_to_accept_system($send_text)
    {
        // FTP接続先のコンフィグ
        $config['hostname'] = FTP_HOST;
        $config['username'] = FTP_USER;
        $config['password'] = FTP_PWD;
        $config['debug'] = FTP_DEBUG;
        $config['passive'] = FTP_PASSIVE;

        //-------------------------------------------------------------------
        // FTPのコネクション
        //-------------------------------------------------------------------
        $this->ftp->connect($config);

        // 請求回収データファイルを作成する
        $result = write_file(FTP_TEMP_PATH . SEND_FILE_NAME, $send_text);
        if ($result === false) {
            $this->_error = '請求回収データのファイル作成に失敗しました';
            return false;
        }

        // FTPで所定の場所にアップロードする
        $result = $this->ftp->upload(FTP_TEMP_PATH . SEND_FILE_NAME, FTP_FILE_DIR . SEND_FILE_NAME, 'binary');
        if ($result === false) {
            $this->_error = '請求回収データのアップロードに失敗しました';
            return false;
        }

        // アップロードファイルの削除
        unlink(FTP_TEMP_PATH . SEND_FILE_NAME);

        //-------------------------------------------------------------------
        // FTPの切断
        //-------------------------------------------------------------------
        $this->ftp->close();

        return true;
    }

    /**
     * 送信対象データの取得
     *
     * @return array
     * @throws Exception
     */
    private function _select_outside_send_data()
    {
        $this->m_tbl_name = T_OUTSIDE_RELATION;
        $this->m_prefix = "relation";

        // カラム定義
        $this->db->select("relation.outside_relation_id");
        $this->db->select("relation.relation_status");
        $this->db->select("relation.manage_no");
        $this->db->select("relation.report_no");
        $this->db->select("bm.bill_mng_id");
        $this->db->select("bm.bill_no");
        $this->db->select("bm.bill_date");
        $this->db->select("bm.publish_date");
        $this->db->select("sm.sales_mng_id");
        $this->db->select("sm.book_date");
        $this->db->select("cm.credit_mng_id");
        $this->db->select("cm.reconcile_status");

        // JOIN定義
        $this->db->join(T_BILL_DATA . " bd", "relation.sales_mng_id = bd.sales_mng_id");
        $this->db->join(T_BILL_MNG . " bm", "bd.bill_mng_id = bm.bill_mng_id");
        $this->db->join(T_SALES_MNG . " sm", "bd.sales_mng_id = sm.sales_mng_id");
        $this->db->join(T_CREDIT_MNG . " cm", "bm.bill_mng_id = cm.bill_mng_id and cm.delete_flg = " . FLG_OFF, "LEFT");
        $this->db->join(T_OUTSIDE_SEND_DATA. " osd", "relation.outside_send_data_id = osd.outside_send_data_id AND osd.delete_flg = " . FLG_OFF , "LEFT");

        // WHERE
        $where  = '( ';
        $where .= '   relation.relation_status != "' . RELATION_STATUS_CREDITED . '"';
        $where .= '   OR ';
        $where .= '   ( ';
        $where .= '     relation.relation_status = "' . RELATION_STATUS_CREDITED . '" AND cm.credit_mng_id IS NULL';
        $where .= '   ) ';
        $where .= '   OR ';
        $where .= '   ( ';
        $where .= '     relation.relation_status = "' . RELATION_STATUS_CREDITED . '" AND relation.last_datetime != osd.last_datetime';
        $where .= '   ) ';
        $where .= ') ';
        $this->db->where($where);
        $this->db->where('bd.delete_flg', FLG_OFF);
        $this->db->where('bm.delete_flg', FLG_OFF);
        $this->db->where('sm.delete_flg', FLG_OFF);

        return $this->select();
    }

    /**
     * 受注システムの送信対象データの管理テーブルの登録処理
     *
     * @access private
     * @param  $bean Outside_send_bean
     * @return int
     * @author Kanake Ryuma
     * @throws Exception
     */
    private function _insert_outside_send_mng($bean)
    {
        $insert_data = $this->_generate_outside_send_mng_data($bean);

        //-------------------------------------------------------
        // 送信データ管理テーブル登録
        //-------------------------------------------------------
        $this->m_tbl_name = T_OUTSIDE_SEND_MNG;
        $this->insert($insert_data);
        return $this->db->insert_id();
    }

    /**
     * 受注システムの送信対象データの管理テーブルの登録用データを作成する
     *
     * @access    private
     * @param     $bean Outside_send_bean
     * @return    array
     * @author    Kanake Ryuma
     */
    private function _generate_outside_send_mng_data($bean)
    {
        $array = array();
        $array['process_datetime'] = $bean->outside_send_header->process_datetime;
        $array['record_count'] = $bean->outside_send_footer->record_count;
        return $array;
    }

    /**
     * 受注システムの送信対象データのデータテーブルの登録データを作成する
     *
     * @access private
     * @param  $body Outside_send_body
     * @param  $outside_send_mng_id int
     * @return array
     * @author Kanake Ryuma
     */
    private function _generate_outside_send_data($body, $outside_send_mng_id)
    {
        $array = array();
        $array['outside_send_mng_id'] = $outside_send_mng_id;
        $array['outside_relation_id'] = $body->outside_relation_id;
        $array['manage_no'] = $body->manage_no;
        $array['report_no'] = $body->report_no;
        $array['bill_no'] = $body->bill_no;
        $array['bill_date'] = $body->bill_date;
        $array['book_date'] = $body->book_date;
        $array['credit_date'] = $body->credit_date;
        return $array;
    }

    /**
     * 連携処理を行った売上データを連携済に変更する
     *
     * @access private
     * @param $bodies Outside_send_body[]
     * @return void
     * @author Kanake Ryuma
     * @throws Exception
     */
    private function _update_send_status($bodies)
    {
        $this->m_tbl_name = T_OUTSIDE_RELATION;
        foreach ($bodies as $body) {
            $relation_status = $this->_generate_next_relation_status(
                  $body->relation_status
                , $body->bill_date
                , $body->credit_date
                , $body->reconcile_status
            );
            $this->db->set('relation_status', $relation_status);
            $this->db->set('outside_send_data_id', $body->outside_send_data_id);
            $this->db->set('last_datetime', 'now()');
            $this->db->where('outside_relation_id', $body->outside_relation_id);
            $this->update();
        }
    }

    /**
     * @param $bodies Outside_send_body[]
     * @param $outside_send_mng_id int
     * @throws Exception
     */
    private function _insert_outside_send_data($bodies, $outside_send_mng_id)
    {
        $this->m_tbl_name = T_OUTSIDE_SEND_DATA;
        foreach ($bodies as $body) {
            $insert_data = $this->_generate_outside_send_data($body, $outside_send_mng_id);
            $this->insert($insert_data);
            $body->outside_send_data_id = $this->db->insert_id();
        }
    }

    /**
     * 次回のステータス取得処理
     *
     * @param string $now_relation_status 現在のステータス
     * @param string $bill_date 請求日
     * @param string $credit_date 入金日
     * @param string $reconcile_status 消込ステータス
     * @return string 次回ステータス
     */
    private function _generate_next_relation_status(
         $now_relation_status
        , $bill_date
        , $credit_date
        , $reconcile_status
    )
    {
        if ($bill_date !== null && $credit_date === null && $reconcile_status === null) {
            // 請求済の送信
            return RELATION_STATUS_BILLED;
        } else if ($bill_date !== null && $credit_date !== null && $reconcile_status === CREDIT_STATUS_OFF) {
            // 入金中の送信
            return RELATION_STATUS_CREDITING;
        } else if ($bill_date !== null && $credit_date !== null && $reconcile_status === CREDIT_STATUS_ON) {
            // 入金済の送信
            return RELATION_STATUS_CREDITED;
        }
        return $now_relation_status;
    }

    /**
     * 今回の送信対象かどうかを判断する
     * @param $body Outside_send_body
     * @return boolean true:対象 false:対象外
     * @throws Exception
     */
    private function _is_check_send_target($body)
    {
        $next_relation_status = $this->_generate_next_relation_status(
              $body->relation_status
            , $body->bill_date
            , $body->credit_date
            , $body->reconcile_status
        );
        if ($body->relation_status === RELATION_STATUS_CREDITING && $next_relation_status === RELATION_STATUS_CREDITING) {
            // 入金中→入金中の場合は入金日に変更があったか確認する
            $outsideSendData = $this->_select_last_sent_outside_send($body->outside_relation_id);
            if ($outsideSendData->credit_date === $body->credit_date) {
                return false;
            }
        } else if ($body->relation_status === $next_relation_status) {
            // 同一ステータスの場合はスキップ
            return false;
        }
        return true;
    }

    /**
     * outside_relation_idを元に最後の送信履歴を取得する
     *  最後の送信履歴を取得するために更新日時の降順で取得し配列の先頭返却する
     *
     * @param $outside_relation_id int
     * @return null | stdClass outside_send_dataのレコード
     * @throws Exception
     */
    private function _select_last_sent_outside_send($outside_relation_id)
    {
        $this->m_tbl_name = T_OUTSIDE_SEND_DATA;
        $this->db->select('credit_date');
        $this->db->where('outside_relation_id', $outside_relation_id);
        $this->db->order_by('last_datetime', 'desc');
        $results = $this->select();
        if (count($results) === 0) {
            return null;
        }
        return $results[0];
    }

    /**
     * 入金日の情報を取得する
     *
     * [説明]
     * 入金情報(t_credit_received)がある場合はt_credit_received.credit_dateを利用する。
     * 入金情報がない場合(相殺消込)はt_credit_data.reconcile_dateを利用する。
     *
     * @param $credit_mng_id
     * @return mixed
     */
    private function _select_credit_data($credit_mng_id)
    {
        $sql  = ' SELECT ';
        $sql .= '    cd.credit_data_id ';
        $sql .= '   ,CASE WHEN cr.credit_date IS NOT NULL THEN cr.credit_date ELSE cd.reconcile_date END as credit_date ';
        $sql .= ' FROM ';
        $sql .= ' ( ';
        $sql .= '   SELECT ';
        $sql .= '      cdm.credit_data_id ';
        $sql .= '     ,cdm.credit_received_id ';
        $sql .= '     ,cdm.reconcile_date ';
        $sql .= '   FROM ' . T_CREDIT_DATA . ' cdm ';
        $sql .= '   WHERE ';
        $sql .= '     cdm.credit_data_id = ( ';
        $sql .= '       SELECT cdi.credit_data_id ';
        $sql .= '       FROM ' . T_CREDIT_DATA . ' cdi ';
        $sql .= '       WHERE ';
        $sql .= '         cdi.credit_mng_id = ' . $this->db->escape_str($credit_mng_id);
        $sql .= '       ORDER BY ';
        $sql .= '         cdi.last_datetime desc ';
        $sql .= '       LIMIT 1 ';
        $sql .= '     ) ';
        $sql .= ' ) cd ';
        $sql .= ' LEFT OUTER JOIN ' . T_CREDIT_RECIEVED . ' cr ';
        $sql .= ' ON ';
        $sql .= '   cd.credit_received_id = cr.credit_received_id ';
        $sql .= '   AND ';
        $sql .= '   cr.delete_flg = ' . FLG_OFF;

        $ret = $this->db->query($sql);
        return $ret->result();
    }
}

/* End of file send_batch_mdl.php */
/* Location: ./application/model/batch/send_batch_mdl.php */
