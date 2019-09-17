<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class General_name_mdl
 * @property CI_DB_active_record $db
 */
class General_name_mdl extends CI_Model {

	/**
	 * コンストラクタ
	 *
	 * @package	application
	 * @subpackage	model/db
	 * @author		Kanake Ryuma
	 * @link		http://www.datalyze.co.jp
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * 得意先区分
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
	public function get_customer_type()
	{
		$this->db->order_by('disp_no', 'asc');
		$query = $this->db->get_where(M_SYS_GENERAL_NAME, array('group_cd'=>GRP_CUSTOMER_TYPE));
		return $query->result();
	}
        
	/**
	 * 売上明細表の出力順序
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
	public function get_sales_spec_seq()
	{
		$this->db->order_by('disp_no', 'asc');
		$query = $this->db->get_where(M_SYS_GENERAL_NAME, array('group_cd'=>GRP_SALES_SPEC_SEQ));
		return $query->result();
	}
        
	/**
	 * 各種帳票の出力順序の比較
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
	public function get_print_than()
	{
		$this->db->order_by('disp_no', 'asc');
		$query = $this->db->get_where(M_SYS_GENERAL_NAME, array('group_cd'=>GRP_PRINT_THAN));
		return $query->result();
	}
	/**
	 * 各種帳票のセグメント
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
	public function get_segment()
	{
		$this->db->order_by('disp_no', 'asc');
		$query = $this->db->get_where(M_SYS_GENERAL_NAME, array('group_cd'=>GRP_SEGMENT));
		return $query->result();
	}
        
	/**
	 * 税区分の取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
	public function get_tax_type()
	{
		$this->db->order_by('disp_no', 'asc');
		$query = $this->db->get_where(M_SYS_GENERAL_NAME, array('group_cd'=>GRP_TAX_TYPE));
		return $query->result();
	}
        
	/**
	 * 前受け分割用税区分の取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
	public function get_tax_type_before()
	{
		$this->db->order_by('disp_no', 'asc');
		$query = $this->db->get_where(M_SYS_GENERAL_NAME, array('group_cd'=>GRP_TAX_TYPE_BEFORE));
		return $query->result();
	}

        
	/**
	 * 請求書発行区分リストを取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
	public function get_bill_status_type()
	{
		$this->db->order_by('disp_no', 'asc');
		$query = $this->db->get_where(M_SYS_GENERAL_NAME, array('group_cd'=>GRP_BILL_STATUS_TYPE));
		return $query->result();
	}
        
	/**
	 * 口座種別の取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
	public function get_account_type()
	{
		$this->db->order_by('disp_no', 'asc');
		$query = $this->db->get_where(M_SYS_GENERAL_NAME, array('group_cd'=>GRP_ACCOUNT_TYPE));
		return $query->result();
	}
        
	/**
	 * 権限リストの取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
	public function get_auth_cd()
	{
		$this->db->order_by('disp_no', 'asc');
		$query = $this->db->get_where(M_SYS_GENERAL_NAME, array('group_cd'=>GRP_AUTH_CD));
		return $query->result();
	}
        
	/**
	 * 敬称
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
	public function get_prefix()
	{
		$this->db->order_by('disp_no', 'asc');
		$query = $this->db->get_where(M_SYS_GENERAL_NAME, array('group_cd'=>GRP_PREFIX));
		return $query->result();
	}
        
	/**
	 * 入金種別
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
	public function get_credit_type()
	{
		$this->db->order_by('disp_no', 'asc');
		$query = $this->db->get_where(M_SYS_GENERAL_NAME, array('group_cd'=>GRP_CREDIT_TYPE));
		return $query->result();
	}
        
	/**
	 * 入金種別
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
	public function get_credit_type_edit()
	{
		$this->db->order_by('disp_no', 'asc');
		$query = $this->db->get_where(M_SYS_GENERAL_NAME, array('group_cd'=>GRP_CREDIT_TYPE_2));
		return $query->result();
	}
        
        
	/**
	 * 入金状態
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
	public function get_credit_stauts()
	{
		$this->db->order_by('disp_no', 'asc');
		$query = $this->db->get_where(M_SYS_GENERAL_NAME, array('group_cd'=>GRP_CREDIT_STATUS));
		return $query->result();
	}
        
	/**
	 * 入金種別(請求消込時)
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
	public function get_reconcile_type_bill()
	{
		$this->db->order_by('disp_no', 'asc');
		$query = $this->db->get_where(M_SYS_GENERAL_NAME, array('group_cd'=>GRP_RECONCILE_TYPE_BILL));
		return $query->result();
	}
        
	/**
	 * 入金種別(請求消込全種別)
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
	public function get_all_reconcile_type_bill()
	{
		$this->db->order_by('disp_no', 'asc');
		$query = $this->db->get_where(M_SYS_GENERAL_NAME, 'group_cd in (\''.GRP_RECONCILE_TYPE_BILL.'\',\''.GRP_RECONCILE_TYPE_BILL_C.'\')');
		return $query->result();
	}
        
	/**
	 * 入金種別(請求消込全種別)
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
	public function get_all_reconcile_type_bil_other()
	{
		$this->db->order_by('disp_no', 'asc');
		$query = $this->db->get_where(M_SYS_GENERAL_NAME, 'group_cd in (\''.GRP_RECONCILE_TYPE_BILL.'\',\''.GRP_RECONCILE_TYPE_BILL_C.'\') AND item_cd != \'F\' AND item_cd != \'T\' ');
		return $query->result();
	}

	/**
	 * 入金種別(入金時)
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
	public function get_reconcile_type_credit()
	{
		$this->db->order_by('disp_no', 'asc');
		$query = $this->db->get_where(M_SYS_GENERAL_NAME, array('group_cd'=>GRP_RECONCILE_TYPE_CREDIT));
		return $query->result();
	}
        
	/**
	 * 滞留条件
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
	public function get_retention()
	{
		$this->db->order_by('disp_no', 'asc');
		$query = $this->db->get_where(M_SYS_GENERAL_NAME, array('group_cd'=>GRP_RETENTION));
		return $query->result();
	}

	/**
	 * データ状態
	 *
	 * @access	public
	 * @return	array
	 * @author	Kanake Ryuma
	 */
	public function get_data_status_type()
	{
		$this->db->order_by('disp_no', 'asc');
		$query = $this->db->get_where(M_SYS_GENERAL_NAME, array('group_cd'=>GRP_SALES_DATA_TYPE));
		return $query->result();
	}

}

/* End of file general_name_mdl.php */
/* Location: ./application/model/db/general_name_mdl.php */