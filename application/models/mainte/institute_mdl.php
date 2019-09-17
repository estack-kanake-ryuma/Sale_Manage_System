<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Institute_mdl extends Mainte_common_mdl {

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
           $this->m_tbl_name = M_INSTITUTE;

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
            $this->m_tbl_name = M_INSTITUTE;
            
            //WHERE句の設定
            $this->m_where = array('institute_id' => $this->input->get('id'));

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
           
           // 論理削除
           $this->m_tbl_name = M_INSTITUTE;
           $this->m_where = array('institute_id'=>$id);
           $this->delete_logic();
           
           // 紐づいているマスタもNULLで更新
           // 部門マスタ
           $this->m_tbl_name = M_DEPART_DATA;
           $this->m_where = array('institute_id'=>$id);
           $this->delete();
           
           // 担当者マスタ
           $this->m_tbl_name = M_HANDLER;
           $this->m_where = array('institute_id'=>$id);
           $this->update(array('institute_id' => null));
           
           // システムユーザーマスタ
           $this->m_tbl_name = M_USER;
           $this->m_where = array('institute_id'=>$id);
           $this->update(array('institute_id' => null));
           
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
        public function get_list_data($where = "", $start = 0) {
        
            // テーブル設定
            $this->m_tbl_name = M_INSTITUTE;
            
            $this->db->select("institute_id");
            $this->db->select("institute_name");	
            $this->db->select("institute_furi");
            $this->db->select("post_no_1");
            $this->db->select("post_no_2");
            $this->db->select("address");
            $this->db->select("buil_name");
            $this->db->select("tel_no_1");
            $this->db->select("tel_no_2");
            $this->db->select("tel_no_3");
            $this->db->select("fax_no_1");
            $this->db->select("fax_no_2");
            $this->db->select("fax_no_3");
            $this->db->select("memo");
            
            // WHERE句作成
            if(!empty($where)) {
                $this->db->where($where);
            }
            
            // ORDER句の設定
            $this->db->order_by("institute_name", "asc");
            
            // リミット設定
            $this->db->limit(PER_PAGE_CNT, $start);
            
            return $this->select();
        }
        
}

/* End of file general_name_mdl.php */
/* Location: ./application/model/db/general_name_mdl.php */