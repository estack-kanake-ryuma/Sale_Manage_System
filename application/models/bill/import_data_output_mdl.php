<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Import_data_output Model
 * 自動取込データ出力のモデルクラス
 *
 * 自動取込データ出力処理に関するDB処理などの司る
 */
class Import_data_output_mdl extends MY_Model {
    
	/**
	 * コンストラクタ
	 *
	 * @package	 application
	 * @subpackage	 model/db
	 * @author		 Kanake Ryuma
	 * @link		 http://www.datalyze.co.jp
	 */
		public function __construct()
		{
			parent::__construct();
		}

	/**
	 * 一覧の絞込条件を作成する
	 *
	 * @access public
	 * @return string
	 * @author Kanake Ryuma
	 */
		public function create_search_condition()
		{
			$condition = array();
			$data = $this->get_input_condition();

			if (count($data) == 0) return;

			// 取込実施日
			if(!empty($data['import_conduct_date_from'])) {
				$condition[] = "date_format(i_mng.ins_datetime, '%Y/%m/%d') >= ".$this->db->escape($data['import_conduct_date_from']);
			}
			if(!empty($data['import_conduct_date_to'])) {
				$condition[] = "date_format(i_mng.ins_datetime, '%Y/%m/%d') <= ".$this->db->escape($data['import_conduct_date_to']);
			}

			// 検索条件返却
			if(count($condition) > 0) {
				return implode(' and ', $condition);
			} else {
				return "";
			}

		}

	/**
	 * 得意先一覧データ取得
	 *
	 * @access	public
	 * @param string $where
	 * @param int $start
	 * @return	array
	 * @author	Kanake Ryuma
	 */
		public function get_list_data($where, $start = 0) {

			// テーブル設定
			$this->m_tbl_name = T_IMPORT_MNG;

			// Prefix 設定
			$this->m_prefix = "i_mng";

			$this->db->select("i_mng.import_mng_id");
			$this->db->select("DATE_FORMAT(i_mng.ins_datetime, '%Y/%m/%d') as import_conduct_date", false);
			$this->db->select("i_mng.header_info");
			$this->db->select("i_mng.result");
			$this->db->select("i_mng.error_messages");
			$this->db->select("(select count(*) from " . T_IMPORT_DETAIL . " i_data where i_data.import_mng_id=i_mng.import_mng_id) as count");
			$this->db->select("(select count(*) from " . T_IMPORT_DETAIL ." i_data where i_data.import_mng_id=i_mng.import_mng_id and result=" . IMPORT_ERROR . ") as skip_count");
			$this->db->select("(select count(*) from " . T_IMPORT_DETAIL . " i_data where i_data.import_mng_id=i_mng.import_mng_id and result=" . IMPORT_WARNING . ") as warning_count");
			$this->db->select("(SELECT count(*) FROM t_import_detail i_detail INNER JOIN t_sales_mng sales ON i_detail.sales_mng_id=sales.sales_mng_id WHERE sales.delete_flg=".FLG_OFF." AND sales.data_status_type=".DATA_TYPE_IMPORT. " AND i_detail.import_mng_id=i_mng.import_mng_id) as import_data_count", FALSE);

			// WHERE句作成
			if(!empty($where)) {
				$this->db->where($where);
			}

			// リミット設定
			$this->db->limit(PER_PAGE_CNT, $start);

			// ORDER句の設定
			$this->db->order_by("i_mng.ins_datetime", "desc");

			return $this->select();
		}


	/**
	 * 一覧の合計件数を取得する
	 *
	 * @access private
	 * @return array
	 * @author Kanake Ryuma
	 */
		public function get_list_total_cnt($where)
		{

			// テーブル名を設定
			$this->set_tbl(T_IMPORT_MNG);

			// Prefix設定
			$this->set_Prefix("i_mng");

			$this->db->select("i_mng.import_mng_id");

			// WHERE句作成
			if(!empty($where)) {
				$this->db->where($where);
			}

			$res = $this->select();

			return count($res);

		}
}

/* End of file import_data_output_mdl.php */
/* Location: ./application/model/db/bill/import_data_output_mdl.php */
