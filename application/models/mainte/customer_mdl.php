<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer_mdl extends Mainte_common_mdl {

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
            $this->m_tbl_name = M_CUSTOMER;

            $data = $this->input->post();
            
            // 締日管理編集
            if($data['cutoff_date'] == "99") {
                unset($data['cutoff_date']);
            }
            
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
            $this->m_tbl_name = M_CUSTOMER;
            
            //WHERE句の設定
            $this->m_where = array('customer_id' => $this->input->get('id'));

            $data = $this->input->post();
            
            // 締日管理編集
            if($data['cutoff_date'] == "99") {
                $data['cutoff_date'] = null;
            }
            
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
           $this->m_tbl_name = M_CUSTOMER;
           $this->m_where = array('customer_id'=>$id);
           $this->delete_logic();
           
           // トランザクション終了
           $this->db->trans_complete();
           
           return true;
            
	}

        /**
	 * 締日リスト返却
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_cutoff_list($type="") {
            
            $list = array();
            
            if(empty($type)) {
                $list[0]['key'] = "99";
                $list[0]['val'] = "未設定";
            }
            for($i=0; $i<=28; $i++){    
                if ($i==28) {
                    $list[$i+1]['key'] = 31;
                    $list[$i+1]['val'] = "月末";
                } else {
                    $list[$i+1]['key'] = $i+1;
                    $list[$i+1]['val'] = ($i+1)."日";
                }
            }
            
            return $list;
            
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
            $this->m_tbl_name = M_CUSTOMER;
            
            $this->db->select("customer_id");
            $this->db->select("customer_name");	
            $this->db->select("customer_furi");
            $this->db->select("customer_disp_name");
            $this->db->select("handler_name");
            $this->db->select("prefix_cd");
            $this->db->select("depart_name");
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
            $this->db->select("cutoff_date");
            $this->db->select("card_print_type");
            $this->db->select("customer_type");
            $this->db->select("credit_type");
            $this->db->select("(SELECT item_name FROM ".M_SYS_GENERAL_NAME." WHERE group_cd='".GRP_CUSTOMER_TYPE."' AND item_cd=customer_type) as customer_type_name ");
            $this->db->select("memo");
            
            // WHERE句作成
            if(!empty($where)) {
                $this->db->where($where);
            }
            
            // リミット設定
            $this->db->limit(PER_PAGE_CNT, $start);
            
            // ORDER句の設定
            $this->db->order_by("customer_furi", "asc");
            
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

                // 得意先名称
                if(!empty($data['customer_name'])) {
                    $condition[] = "(customer_name like '%".$this->db->escape_like_str($data['customer_name'])
                                                        ."%' or customer_furi like '%".$this->db->escape_like_str($data['customer_name'])."%')";
                }
                
                // TODO@締日 画面の見せ方を検討後再実装
                if(!empty($data['cutoff_date'])) {
                    
                    if($data['cutoff_date'] == "99") {
                        $condition[] = "(cutoff_date is null)";
                    } else {
                        $condition[] = "(cutoff_date = ".$this->db->escape_like_str($data['cutoff_date']).")";
                    }
                    
                }
                
                // 得意先区分
                if(!empty($data['customer_type'])) {
                    $condition[] = "(customer_type=".$data['customer_type'].")";
                }
                
                
                // 検索条件返却
                if(count($condition) > 0) {
                    return implode(' and ', $condition);
                } else {
                    return "";
                }
                
	}
        
    /**
	 * 締日変更の可否を判定する
	 *
	 * @access private
	 * @return string
	 * @author Kita Yasuhiro
	 */
        public function chk_cutoff_date($id, $info)
        {
            $res['ctrl'] = "";
            $res['msg'] = "";
            
            // 対象の日付を編集
            if(empty($info['cutoff_date'])) {
                $date = "";
            }  else {
                $date = $this->session->userdata(SS_KEY_PROC_MONTH);
                $date = $date.$info['cutoff_date'];
            }
            $cnt = $this->get_sales_data_cnt($id, $date);
            
            if($cnt == 0) {
                return $res;
            } else {
                $res['ctrl'] = "disabled=disabled";
                $msg = '<div style="margin-left: 1em; text-indent: -1em;font-size: 0.8em;" class="up_msg">※売上情報が存在いたします。<br />締め処理後売上情報がないことを確認し変更してください。</div>';
                $res['msg'] = get_span_red($msg);
                return $res;
            }
            
        }
        
        /**
	 * 締日に紐尽くデータを調べる
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_sales_data_cnt($id, $date="") {
        
            // テーブル設定
            $this->db->select("count(*) as cnt");
            $this->db->from(M_CUSTOMER." cus");
            
            $tbl = "( SELECT ";
            $tbl .= " customer_id ";
            $tbl .= " , count(*) as cnt ";
            $tbl .= " FROM ".T_SALES_MNG." ";
            if(empty($date)) {
                $date = $this->session->userdata(SS_KEY_PROC_MONTH);
                $tbl .= " WHERE customer_id='".$id."' AND date_format(bill_date, '%Y%m') >= '".$date."' AND delete_flg='".FLG_OFF."'";
            } else {
                $tbl .= " WHERE customer_id='".$id."' AND date_format(bill_date, '%Y%m%d') >= '".$date."' AND delete_flg='".FLG_OFF."'";
            }
            $tbl .= ") sales ";
            
            $this->db->join($tbl, "sales.customer_id=cus.customer_id", "INNER");
            
            // WHERE句作成
            $this->db->where("cus.customer_id", $id);
            
            $query = $this->db->get();
            $result = $query->result();
            
            return intval($result[0]->cnt);
        }
        
        
        
}

/* End of file general_name_mdl.php */
/* Location: ./application/model/db/general_name_mdl.php */