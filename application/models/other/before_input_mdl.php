<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Before_input_mdl
 * 分割金額変更画面のモデルクラス
 *
 * @property Sales_mdl $sales_mdl
 */
class Before_input_mdl extends MY_Model {
    
	/**
	 * コンストラクタ
	 *
	 * @package	application
	 * @subpackage	model/db
	 * @author		Kita Yasuhiro
	 * @link		http://www.datalyze.co.jp
	 */
	public function __construct()
	{
		parent::__construct();
	}
        
	/**
	 * 前受変更処理
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function update_data()
        {
            
            // トランザクション開始
            $this->db->trans_begin();
            
            // 売上管理ファイルのUPDATE
            $this->m_tbl_name = T_SALES_MNG;
            $this->db->where("sales_mng_id", $this->input->get("id"));
            $this->db->set('customer_type', $_POST['customer_type']);
            
            $data = array();
            explode_val_str($_POST['abstract_id'], $data['abstract_id'], $data['abstract_name']);
            $this->db->set('abstract_id', $data['abstract_id']);
            $this->db->set('abstract_name', $data['abstract_name']);
            
            if(!empty($_POST['credit_type'])) {
                $this->db->set('credit_type', $_POST['credit_type']);
            }
            $this->update();
            
            // 請求管理ファイルのUPDATE
            if(!empty($_POST['credit_type'])) {
                // 請求管理IDの取得
                $this->m_tbl_name = T_BILL_DATA;
                $this->db->select("bill_mng_id");
                $this->db->where("sales_mng_id", $this->input->get("id"));
                $res = $this->select();
                
                $bill_mng_id = "";
                if(count($res) > 0) {
                    $bill_mng_id = $res[0]->bill_mng_id;
                    $this->m_tbl_name = T_BILL_MNG;
                    $this->db->set('credit_type', $_POST['credit_type']);
                    $this->db->where("bill_mng_id", $bill_mng_id);
                    $this->update();
                }
            }
            
            if($_POST['credit_type_hf'] == CREDIT_TYPE_BEFORE) {
                
                $this->m_tbl_name = T_SALES_BEFORE;
                // 売上前受テーブル削除
                $this->db->where("sales_mng_id", $this->input->get("id"));
                $this->delete();

                $before = $this->sales_mdl->get_sales_defore_data();

                if(count($before) > 0) {
                    foreach ($before as $ins_data) {
                        $ins_data['sales_mng_id'] = $this->input->get('id');
                        $this->insert($ins_data);
                    }
                }
            }
            
            // トランザクション終了
            $this->db->trans_complete();
            
        }
        
    /**
	 * マスタデータ取得処理
	 *
	 * @access private
	 * @return array
	 * @author Kita Yasuhiro
	 */
	public function get_mst_data()
	{
            $data = array();

            // 税区分(前受け用)
            $data['tax_type_before'] = $this->general_name_mdl->get_tax_type_before();
            
            // 得意先区分
            $data['customer_type'] = $this->general_name_mdl->get_customer_type();

            // 入金種別
            $data['credit_type'] = $this->general_name_mdl->get_credit_type_edit();
            
            // 摘要
            $this->load->model("bill/sales_mdl");
            $data['abstract_list'] = $this->sales_mdl->get_name_list_custom(M_ABSTRACT, "abstract_id", "abstract_name");
            
            return $data;
            
	}
        
        /**
	 * 消込されているかチェックする
	 *
	 * @access private
	 * @return array
	 * @author Kita Yasuhiro
	 */
        public function get_credit_cnt($id, $mng)
        {
            
            $this->m_prefix = "bill";
            $this->m_tbl_name = T_BILL_DATA;
            
            $this->db->select('count(*) as cnt');
            $this->db->join(T_CREDIT_MNG." credit ", "bill.bill_mng_id=credit.bill_mng_id", "LEFT");
            $this->db->where("sales_mng_id", $id);
            $this->db->where("credit_mng_id is not null");
            
            $result = $this->select();
            $cnt = intval($result[0]->cnt);
            
            if($cnt == 0) {
                
                if(!empty($mng['cutoff_date']) and $mng['data_status_type'] == DATA_TYPE_CLOSE) {
                    $cnt = 1;
                }
                
            }
            
            return $cnt;
        }
        
}

/* End of file general_name_mdl.php */
/* Location: ./application/model/db/general_name_mdl.php */