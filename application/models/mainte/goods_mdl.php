<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Goods_mdl extends Mainte_common_mdl {

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
            $this->m_tbl_name = M_GOODS;

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
            $this->m_tbl_name = M_GOODS;
            
            //WHERE句の設定
            $this->m_where = array('goods_id' => $this->input->get('id'));

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
           $this->m_tbl_name = M_GOODS;
           $this->m_where = array('goods_id'=>$id);
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
            $this->m_tbl_name = M_GOODS;
            
            $this->db->select("goods_id");
            $this->db->select("goods_name");	
            $this->db->select("goods_furi");	
            $this->db->select("tax_type");
            $this->db->select("unit");
            $this->db->select("memo");
            $this->db->select("(SELECT item_name FROM ".M_SYS_GENERAL_NAME." WHERE group_cd='".GRP_TAX_TYPE."' AND item_cd=tax_type) as tax_type_name ");
            $this->db->select("memo");
            
            // WHERE句作成
            if(!empty($where)) {
                $this->db->where($where);
            }
            
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
                
                if (count($data) == 0) return;

                // 品名
                if(!empty($data['goods_name'])) {
                    $condition[] = "(goods_name like '%".$this->db->escape_like_str($data['goods_name'])
                                                        ."%' or goods_furi like '%".$this->db->escape_like_str($data['goods_name'])."%')";
                    
                }
                
                // 税区分
                if(!empty($data['tax_type'])) {
                    $condition[] = "(tax_type =".$this->db->escape_like_str($data['tax_type']).")";
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