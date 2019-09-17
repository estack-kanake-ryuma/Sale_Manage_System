<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Handler_mdl extends Mainte_common_mdl {

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
            $this->m_tbl_name = M_HANDLER;

            $data = $this->input->post();
            change_null($data);

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
            $this->m_tbl_name = M_HANDLER;
            
            //WHERE句の設定
            $this->m_where = array('handler_id' => $this->input->get('id'));

            $data = $this->input->post();
            change_null($data);
            
            // UPDATE実行
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
           $this->m_tbl_name = M_HANDLER;
           $this->m_where = array('handler_id'=>$id);
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
            $this->m_tbl_name = M_HANDLER;
            $this->m_prefix = "hand";
            
            $this->db->select("hand.handler_id");
            $this->db->select("hand.handler_name");	
            $this->db->select("hand.handler_furi");
            $this->db->select("hand.institute_id");
            $this->db->select("hand.depart_id");
            $this->db->select("hand.memo");
            $this->db->select("inst.institute_name");
            $this->db->select("dpt.depart_name");
            
            // WHERE句作成
            if(!empty($where)) {
                $this->db->where($where);
            }
            
            // ORDER句の設定
            $this->db->order_by("hand.handler_furi", "asc");
            
            // JOIN句作成
            $this->db->join(M_INSTITUTE." inst", 'inst.institute_id=hand.institute_id','LEFT');
            $this->db->join(M_DEPART." dpt", 'dpt.depart_id=hand.depart_id','LEFT');
                    
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

                // 担当者名称
                if(!empty($data['handler_name'])) {
                    $condition[] = "(hand.handler_name like '%".$this->db->escape_like_str($data['handler_name'])
                                                        ."%' or hand.handler_furi like '%".$this->db->escape_like_str($data['handler_name'])."%')";
                }
                
                // 所属研究所
                if(!empty($data['institute_id'])) {
                    $condition[] = "(inst.institute_id=".$this->db->escape_like_str($data['institute_id']).")";
                }
                
                // 所属部門
                if(!empty($data['depart_id'])) {
                    $condition[] = "(dpt.depart_id=".$this->db->escape_like_str($data['depart_id']).")";
                }
                
                // 検索条件返却
                if(count($condition) > 0) {
                    return implode(' and ', $condition);
                } else {
                    
                }

	}
        
    /**
	 * 検索条件のマスタデータ取得処理
	 *
	 * @access private
	 * @return array
	 * @author Kita Yasuhiro
	 */
	public function get_mst_data()
	{
		$data = array();
                
                // 部門
                $this->m_tbl_name = M_DEPART;
                $data['depart_list'] = $this->get_name_list(array("depart_id", "depart_name"));

                // 研究所
                $this->m_tbl_name = M_INSTITUTE;
                $data['institute_list'] = $this->get_name_list(array("institute_id", "institute_name"));

		return $data;
	}

}

/* End of file general_name_mdl.php */
/* Location: ./application/model/db/general_name_mdl.php */