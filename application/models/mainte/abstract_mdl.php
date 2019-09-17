<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Abstract_mdl extends Mainte_common_mdl {

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
            $this->m_tbl_name = M_ABSTRACT;

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
            $this->m_tbl_name = M_ABSTRACT;
            
            //WHERE句の設定
            $this->m_where = array('abstract_id' => $this->input->get('id'));

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
           $this->m_tbl_name = M_ABSTRACT;
           $this->m_where = array('abstract_id'=>$id);
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
        public function get_list_data($where, $start = 0) {
        
            // テーブル設定
            $this->m_tbl_name = M_ABSTRACT;
            
            $this->db->select("abstract_id");
            $this->db->select("abstract_name");	
            $this->db->select("abstract_furi");
            $this->db->select("memo");
            
            // WHERE句作成
            if(!empty($where)) {
                $this->db->where($where);
            }
            
            // リミット設定
            $this->db->limit(PER_PAGE_CNT, $start);
            
            // ORDER句の設定
            $this->db->order_by("abstract_furi", "asc");
            
            return $this->select();
        }
        
    /**
	 * 一覧の絞込条件を作成する
	 *
	 * @access private
	 * @return string
	 * @author Kita Yasuhiro
	 */
	public function create_search_condition()
	{
		$condition = array();
		$data = $this->get_input_condition();
                
                if (count($data) == 0) return;

                // 摘要名称
                if(!empty($data['abstract_name'])) {
                    $condition[] = "(abstract_name like '%".$this->db->escape_like_str($data['abstract_name'])
                                                        ."%' or abstract_furi like '%".$this->db->escape_like_str($data['abstract_name'])."%')";
                }
                
                // 検索条件返却
                if(count($condition) > 0) {
                    return implode(' and ', $condition);
                } else {
                    
                }
                

//		if(count($condition) > 0) {
//			$this->session->set_userdata(SS_KEY_HOME_SEARCH, $data);
//			return implode(' and ', $condition);
//		} else {
//			$this->session->unset_userdata(SS_KEY_HOME_SEARCH);
//			return '';
//		}
	}
        
}

/* End of file general_name_mdl.php */
/* Location: ./application/model/db/general_name_mdl.php */