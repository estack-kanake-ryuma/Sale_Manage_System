<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bank_mdl extends Mainte_common_mdl {

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
	 * 登録処理
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
	public function regist_data()
        {
            // トランザクション開始
            $this->db->trans_begin();

            // テーブル名の設定
            $this->m_tbl_name = M_BANK;

            $data = $this->input->post();
            
            $this->insert($data);

            // トランザクション終了
            $this->db->trans_complete();
            
	}
        
	/**
	 * 変更処理
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function update_data()
        {
            
            // トランザクション開始
            $this->db->trans_begin();
           
            // テーブル名の設定
            $this->m_tbl_name = M_BANK;
            
            //WHERE句の設定
            $this->m_where = array('bank_id' => $this->input->get('id'));

            $data = $this->input->post();
            
            $this->update($data);

            // トランザクション終了
            $this->db->trans_complete();
            
        }
        
	/**
	 * 削除処理
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
	public function delete_data($id)
        {
           
            if (empty($id)) return false;

            // トランザクション開始
            $this->db->trans_begin();
           
           // INSERT
           $this->m_tbl_name = M_BANK;
           $this->m_where = array('bank_id'=>$id);
           $this->delete_logic();
           
           // トランザクション終了
           $this->db->trans_complete();
           
           return true;
            
	}
        
        /**
	 * 得意先一覧データ取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_list_data($where = array(),$start = 0) {
        
            // テーブル設定
            $this->m_tbl_name = M_BANK;
            
            $this->db->select("bank_id");
            $this->db->select("bank_name");	
            $this->db->select("branch_name");
            $this->db->select("account_type");
            $this->db->select("account_no");
            $this->db->select("(SELECT item_name FROM ".M_SYS_GENERAL_NAME." WHERE group_cd='".GRP_ACCOUNT_TYPE."' AND item_cd=account_type) as account_type_name ");
            $this->db->select("memo");
            
            // WHERE句作成
            if(!empty($where)) {
                $this->db->where($where);
            }
            
            // ORDER句の設定
            $this->db->order_by("bank_name", "asc");
            
            // リミット設定
            $this->db->limit(PER_PAGE_CNT, $start);
            
            return $this->select();
        }

}

/* End of file general_name_mdl.php */
/* Location: ./application/model/db/general_name_mdl.php */