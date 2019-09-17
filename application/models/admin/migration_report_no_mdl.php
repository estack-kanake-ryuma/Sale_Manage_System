<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Migration_report_no_mdl
 * @author ryuma.kanake
 */
class Migration_report_no_mdl extends MY_Model
{
    /**
     * コンストラクタ
     *
     * @package    application
     * @subpackage    model/db
     * @author        Kita Yasuhiro
     * @link        http://www.datalyze.co.jp
     */
    public function __construct()
    {
        parent::__construct();
    }

    /*
     * ---------------------------------------------------------------------------
     * Execute
     * ---------------------------------------------------------------------------
     */
    /**
     * 報告書Noのマイグレーション実行処理
     * @return string
     */
    public function execute()
    {
        try {
            $this->db->trans_start();

            if ($this->_exist_set_report_no()) {
                return '既に報告書Noが設定されているため移行はできません。';
            }

            //=====================================================
            // Migration Start
            //=====================================================
            $this->_execute();

            $this->db->trans_complete();
        } catch (Exception $exception) {
            log_message('error', $exception->getMessage());
            log_message('error', $exception->getCode());
            log_message('error', $exception->getTrace());
            return 'データ移行処理に失敗しました';
        }
        return 'データ移行が完了しました。';
    }

    /**
     * t_sales_detailに報告書Noがセットされているか確認する
     * @return bool
     * @throws Exception
     */
    private function _exist_set_report_no()
    {
        if ($this->_select_set_report_no() > 0) {
            return true;
        }
        return false;
    }

    /**
     * データ移行の実行
     *
     * @return void
     * @throws Exception
     */
    private function _execute()
    {
        $targets = $this->_select_sales_mng();
        foreach ($targets as $target) {
            $this->_migration($target);
        }
    }

    /*
     * ---------------------------------------------------------------------------
     * DB Access
     * ---------------------------------------------------------------------------
     */

    /**
     * データ移行処理
     * @param $sales_mng stdClass
     * @throws Exception
     */
    private function _migration($sales_mng)
    {
        $details = $this->_select_sales_detail($sales_mng->sales_mng_id);
        if (count($details) === 0) {
            return;
        }

        // 報告書Noを更新するフォーマットに変更する
        $report_no_list = $this->_generate_report_no_list(
            $sales_mng->report_no,
            $sales_mng->report_eda_from,
            $sales_mng->report_eda_to
        );

        log_message('info', 'report_no_list=' . print_r($report_no_list, true));
        log_message('info', 'details=' . print_r($details, true));
        $this->_apply_sales_details($report_no_list, $details);
    }

    /**
     * 売上詳細データの保存処理
     * @param $report_no_list array
     * @param $sales_details array
     * @throws Exception
     */
    private function _apply_sales_details($report_no_list, $sales_details)
    {
        $idx = 0;
        foreach ($report_no_list as $report_no) {
            if ($idx + 1 > count($sales_details)) {
                break;
            }
            $this->_update_t_sales_detail($sales_details[$idx]->sales_detail_id, $report_no);
            $idx++;
        }
    }

    /**
     * t_sales_detailテーブルを更新する
     * @param $sales_detail_id int
     * @param $report_no string
     * @throws Exception
     */
    private function _update_t_sales_detail($sales_detail_id, $report_no)
    {
        $this->m_tbl_name = T_SALES_DETAIL;
        $this->db->where('sales_detail_id', $sales_detail_id);
        $this->update(array('report_no' => $report_no));
    }

    /**
     * 報告書Noが設定されているデータをt_sales_detailから取得する
     * @return int
     * @throws Exception
     */
    private function _select_set_report_no()
    {
        $this->m_tbl_name = T_SALES_DETAIL;
        $this->db->select("count(*) as count");
        $this->db->where('report_no IS NOT NULL');
        $result = $this->select();
        return $result[0]->count;
    }

    /**
     * t_sales_mngより移行の対象データを取得
     * @return array
     * @throws Exception
     */
    private function _select_sales_mng()
    {
        $this->m_tbl_name = T_SALES_MNG;
        $this->db->select("sales_mng_id");
        $this->db->select("report_no");
        $this->db->select("report_eda_from");
        $this->db->select("report_eda_to");
        $this->db->where('report_no IS NOT NULL');
        return $this->select();
    }

    /**
     * t_sales_detailのデータを取得
     * @param $sales_mng_id int
     * @return array
     * @throws Exception
     */
    private function _select_sales_detail($sales_mng_id)
    {
        $this->m_tbl_name = T_SALES_DETAIL;
        $this->db->select("sales_detail_id");
        $this->db->where('sales_mng_id', $sales_mng_id);
        $this->db->order_by('sales_detail_id', 'asc');
        return $this->select();
    }

    /**
     * 設定する報告書Noを生成する
     * @param $report_no string
     * @param $report_eda_from string
     * @param $report_eda_to string
     * @return null | array
     */
    private function _generate_report_no_list($report_no, $report_eda_from, $report_eda_to)
    {
        if (empty($report_no)) {
            return null;
        } else if (empty($report_eda_from) || strlen($report_no) <= 6) {
            // 枝番号が設定されていない、または6桁以内(ハイフンなし)の場合はそのまま返却する
            return array($report_no);
        }

        $rn = str_replace('-', '', $report_no);
        if (empty($report_eda_to)) {
            return array($rn . $report_eda_from);
        }

        $array = array();
        // report_eda_from自身の番号を含めるために +1 で調整
        $loop_count = intval($report_eda_to) - intval($report_eda_from) + 1;
        for ($i = intval($report_eda_from); $i <= $loop_count; $i++) {
            $array[] = $rn . sprintf("%02d", $i);
        }
        return $array;
    }
}

/* End of file migration_report_no_mdl.php */
/* Location: ./application/model/admin/migration_report_no_mdl.php */