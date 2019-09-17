<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fix_memo_mdl extends Mainte_common_mdl {

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
            $this->m_tbl_name = M_FIX_MEMO;

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
            $this->m_tbl_name = M_FIX_MEMO;
            
            //WHERE句の設定
            $this->m_where = array('fix_memo_id' => $this->input->get('id'));

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
            $this->m_tbl_name = M_FIX_MEMO;
            $this->m_where = array('fix_memo_id'=>$id);
            $this->delete_logic();

            // トランザクション終了
            $this->db->trans_complete();

            return true;
            
	}
        
        /**
	 * 商品一覧データ取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_list_data($where, $start = 0) {
        
            // テーブル設定
            $this->m_tbl_name = M_FIX_MEMO;
            
            $this->db->select("fix_memo_id");
            $this->db->select("fix_memo");	
            
            // WHERE句作成
            if(!empty($where)) {
                $this->db->where($where);
            }
            
            // ORDER句の設定
            $this->db->order_by("fix_memo", "asc");
            
            // リミット設定
            $this->db->limit(PER_PAGE_CNT, $start);
            
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
                
                if (count($data) == 0) return "";

                // 固定メモ
                if(!empty($data['fix_memo'])) {
                    $condition[] = "(fix_memo like '%".$this->db->escape_like_str($data['fix_memo'])."%')";
                }
                
                // 検索条件返却
                if(count($condition) > 0) {
                    return implode(' and ', $condition);
                } else {
                    return "";
                }

	}
}

/* End of file general_name_mdl.php */
/* Location: ./application/model/db/general_name_mdl.php */