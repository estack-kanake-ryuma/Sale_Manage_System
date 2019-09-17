<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Depart_mdl extends Mainte_common_mdl {

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
            $this->db->trans_start();
           
            // テーブル名の設定
            $this->m_tbl_name = M_DEPART;

            $data = $this->input->post();
            
            // 研究所データを抜く
            $data_mng = $data;
            unset($data_mng['institute_id']);
            
            $this->insert($data_mng);
            
            $id = $this->db->insert_id();
            
            $data_data = $this->input->post('institute_id');
            
            // テーブル名の設定
            $this->m_tbl_name = M_DEPART_DATA;
            
            foreach ($data_data as $value) {
                $this->insert(array('depart_id'=>$id, 'institute_id' => $value));
            }
            
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
           $this->m_tbl_name = M_DEPART;
            
           //WHERE句の設定
           $this->m_where = array('depart_id' => $this->input->get('id'));

           $data = $this->input->post();
           
            // 研究所データを抜く
            $data_mng = $data;
            unset($data_mng['institute_id']);
            
            $this->update($data_mng);
            
            // 研究所データを物理削除
            $this->m_tbl_name = M_DEPART_DATA;
            $this->db->where("depart_id", $this->input->get('id'));
            $this->delete();
            
            $data_data = $this->input->post('institute_id');
            
            // 再登録
            foreach ($data_data as $value) {
                $this->insert(array('depart_id'=>$this->input->get('id'), 'institute_id' => $value));
            }
            

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
           $this->m_tbl_name = M_DEPART;
           $this->m_where = array('depart_id'=>$id);
           $this->delete_logic();
           
           // 紐づいてるマスタの削除
           // 担当者マスタ
           $this->m_tbl_name = M_HANDLER;
           $this->m_where = array('depart_id'=>$id);
           $this->update(array('depart_id' => null));
           
           // トランザクション終了
           $this->db->trans_complete();
           
           return true;
            
	}
        
        /**
	 * 部門一覧データ取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_list_data($where = array(), $start = 0) {
        
            // テーブル設定
            $this->m_tbl_name = M_DEPART;
            
            $this->db->select("depart_id");
            $this->db->select("depart_name");	
            $this->db->select("depart_furi");
            $this->db->select("memo");
            
            // WHERE句作成
            if(!empty($where)) {
                $this->db->where($where);
            }
            
            // ORDER句の設定
            $this->db->order_by("depart_furi", "asc");
            
            // リミット設定
            $this->db->limit(PER_PAGE_CNT, $start);
            
            return $this->select();
        }
        
         /**
	 * 部門一覧データ取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_institute_data($where = array()) {
            
            // テーブル設定
            $this->m_tbl_name = M_DEPART_DATA;
            
            $this->db->select("institute_id");	
            $this->db->select("depart_id");	
            $this->db->select("(SELECT institute_name FROM ".M_INSTITUTE." WHERE ".M_DEPART_DATA.".institute_id=".M_INSTITUTE.".institute_id) as institute_name");
            
            // WHERE句作成
            if(!empty($where)) {
                $this->db->where($where);
            }
            
            return $this->select();

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

                // 研究所
                $this->m_tbl_name = M_INSTITUTE;
                $data['institute_list'] = $this->get_name_list(array("institute_id", "institute_name"));

		return $data;
	}
        

}

/* End of file general_name_mdl.php */
/* Location: ./application/model/db/general_name_mdl.php */