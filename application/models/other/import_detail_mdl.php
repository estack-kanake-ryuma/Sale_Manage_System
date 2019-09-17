<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Import_detail Model
 * 自動取込データ詳細のモデルクラス
 *
 * 自動取込データ詳細画面に関するDB処理などの司る
 *
 * @property General_name_mdl $general_name_mdl
 * @property Sales_mdl        $sales_mdl
 */
class Import_detail_mdl extends MY_Model
{

	/**
	 * コンストラクタ
	 *
	 * @package     application
	 * @subpackage model/db
	 * @author      Kanake Ryuma
	 * @link         http://www.datalyze.co.jp
	 */
	public function __construct()
	{
		parent::__construct();

		$this->load->model("bill/sales_mdl");
	}

	/**
	 * 自動取込データ詳細の情報をDBより取得する
	 *
	 * @access    public
	 * @param     $outside_receive_mng_id int
	 * @return    array
	 * @author    Kanake Ryuma
	 */
	public function get_outside_receive_data($outside_receive_mng_id)
	{
		// テーブル設定
		$this->m_tbl_name = T_OUTSIDE_RECEIVE_DATA;

		// Prefix 設定
		$this->m_prefix = "i_detail";

		$this->db->select("process_method");
		$this->db->select("sales_mng_id");
		$this->db->select("result");
		$this->db->select("error_messages");

		// WHERE句作成
		$this->db->where('outside_receive_mng_id', $outside_receive_mng_id);

		return $this->select();

	}

	/**
	 * マスタデータ取得処理
	 *
	 * @access public
	 * @return array
	 * @author Kanake Ryuma
	 */
	public function get_mst_data()
	{
		$return_data = array();

		//-------------------------------------------------------------------
		// 得意先区分の処理
		//-------------------------------------------------------------------
		// 得意先区分をDBより取得
		$mst_ary = $this->general_name_mdl->get_customer_type();

		// 処理内で取得しやすいようにitem_cdをキーにした配列に変更
		$convert_ary = array();
		foreach ($mst_ary as $data) {
			$convert_ary[$data->item_cd] = $data;
		}
		$return_data['customer_type'] = $convert_ary;


		//-------------------------------------------------------------------
		// 入金種別の処理
		//-------------------------------------------------------------------
		// 入金種別をDBより取得
		$mst_ary = $this->general_name_mdl->get_credit_type();

		// 処理内で取得しやすいようにitem_cdをキーにした配列に変更
		$convert_ary = array();
		foreach ($mst_ary as $data) {
			$convert_ary[$data->item_cd] = $data;
		}
		$return_data['credit_type'] = $convert_ary;


		return $return_data;

	}
}

/* End of file import_detail_mdl.php */
/* Location: ./application/model/other/import_detail_mdl.php */