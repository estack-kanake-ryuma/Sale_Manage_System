<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Credit_input_mdl extends Credit_common_mdl {

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
     * @param $err_msg string
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
	public function regist_data(&$err_msg)
        {
            
            $post = $_POST['credit_received_id'];
            $not_id = array();
            $i = 1;
            foreach ($post as $key => $value) {
                
                if(empty($value)) continue;
                
                if(!empty($value) && !empty($_POST['reconcile_money'][$key])) {
                    $not_id[] = $value;
                    continue;
                }
                
                if(!empty($value) && !empty($_POST['adjust_money'][$key])) {
                    $not_id[] = $value;
                    continue;
                }
                
                if(!empty($value) && !empty($_POST['first_money'][$key])) {
                    $not_id[] = $value;
                    continue;
                }
                
                // 入金情報が既に使われてないかチェック
                $res = array();
                $chk_flg = $this->chk_credit_ins_data($value, $_POST['credit_money'][$key], $res);
                if(count($res) > 0) {
                    $not_id[] = $value;
                }
                if($chk_flg == false) {
                    if($i == 1) {
                        $err_msg = '下記の入金情報が既に使われていた為、確認後再度登録してください。\n\n';
                    }
                    $err_msg .= $i.". ".$res[0]->customer_disp_name."   入金日：".slash_date($res[0]->credit_date).'\n';
                    $i++;
                    continue;
                }
                
            }
            
            $id = implode(',', $not_id);
            
            log_message('info', '【入金登録処理   START)】');
            
            // トランザクション開始
            $this->db->trans_start();
            
            // 既存データ削除
            $this->m_tbl_name = T_CREDIT_RECIEVED;
            $this->m_where = array('credit_date' =>$this->input->post("credit_date"), 'bank_id'=>$this->input->post("bank_id"));
           if(!empty($id)) {
               $this->db->where("credit_received_id not in (".$id.")");
           }
            $this->delete();
            
            // 登録データ取得
            $ins_data = $this->get_credit_data($not_id);
            
            foreach ($ins_data as $val) {
                $this->m_tbl_name = T_CREDIT_RECIEVED;
                $this->insert($val);
            }
            
            // トランザクション終了
            $this->db->trans_complete();
            
            log_message('info', '【入金登録処理   END)】');
            
	}
        
    /**
	 * マスタ情報取得
	 *
	 * @access	public
     * @param $id int
     * @param $money string
     * @param $res array
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        private function chk_credit_ins_data($id, $money, &$res) {
            
            // 入金情報をチェック
            $res = $this->get_use_credit_received($id);
            
            if(count($res) == 0) {
                return true;
            } else {
                
                if($res[0]->credit_money == erase_money_sep($money)) {
                    return true;
                } else {
                    return false;
                }
            }
            
        }
        
    /**
	 * 条件を作成する
	 *
	 * @access private
	 * @return string
	 * @author Kita Yasuhiro
	 */
	public function create_search_condition()
	{
		$condition = array();
		$data = $this->get_input_condition();
                
                $date = $this->input->get("date");
                if (count($data) == 0) {
                    if(empty($date)) {
                        return;
                    }
                    $condition[] = "date_format(credit_date, '%Y/%m/%d') = ".$this->db->escape($date);
                    $condition[] = "bank_id = '1'";
                }

                // 入金日
                if(!empty($data['credit_date'])) {
                    $condition[] = "date_format(credit_date, '%Y/%m/%d') = ".$this->db->escape($data['credit_date']);
                }
                
                // 口座情報
                if(!empty($data['bank_id'])) {
                    $condition[] = "bank_id = ".$this->db->escape($data['bank_id']);
                }
                
                // 検索条件返却
                if(count($condition) > 0) {
                    return implode(' and ', $condition);
                } else {
                    return "";
                }
                
	}
        

        /**
	 * マスタ情報取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_mst_data() {
            
            $data = array();
            
            // テーブル設定
            $this->m_tbl_name = M_BANK;
            $bank = $this->get_bank_list();
            $data['bank_list'] = $this->_get_bank_info($bank);
            
            return $data;
        }
        
        /**
	 * 銀行情報取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_bank_list() {
        
            // テーブル設定
            $ary_item = array('bank_id'
                , 'bank_name'
                , 'branch_name'
                , 'account_type'
                , 'account_no'
                , '(SELECT item_name FROM '.M_SYS_GENERAL_NAME.' WHERE group_cd=\''.GRP_ACCOUNT_TYPE.'\' AND item_cd=account_type) as account_type_name ');

            $sql = " SELECT ".implode(', ', $ary_item);
            $sql .= " FROM ".M_BANK;
            $sql .= " WHERE delete_flg=".FLG_OFF;
            $sql .= " UNION ";
            $sql .= " SELECT ".implode(', ', $ary_item);
            $sql .= " FROM ".T_CREDIT_RECIEVED;

            $ret = $this->db->query($sql);
            $res = $ret->result();
           
           return $res;
            
        }
        
        /**
	 * 既に使われている消込情報を取得する
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_use_credit_received($id) {

            if(empty($id)) return 0;
            
            $sql  = " SELECT ";
            $sql .= " received.customer_disp_name ";
            $sql .= " ,received.credit_date ";
            $sql .= " ,received.credit_money ";
            $sql .= " ,tbl.credit_received_id ";
            $sql .= " FROM ( ";
            $sql .= "  SELECT ";
            $sql .= "     credit_received_id  ";
            $sql .= "  FROM ".V_RECONCILE_DATA;
            $sql .= "  WHERE credit_received_id = ".$id;
            $sql .= "  UNION ";
            $sql .= "  SELECT ";
            $sql .= "     credit_received_id  ";
            $sql .= "  FROM ".T_CREDIT_RECIEVED_ADJUST;
            $sql .= "  WHERE credit_received_id = ".$id;
            $sql .= " ) tbl";
            $sql .= " LEFT JOIN  ".T_CREDIT_RECIEVED." received ON tbl.credit_received_id = received.credit_received_id ";
            
            $ret = $this->db->query($sql);
            $res = $ret->result();
            
            return $res;
            
        }

        
        
        /**
	 * 入金登録情報取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_target_data($where) {
        
            // テーブル設定
            $this->m_tbl_name = T_CREDIT_RECIEVED;
            
            $this->m_prefix = "credit";
            
            $this->db->select("credit.credit_received_id");
            $this->db->select("credit.customer_id");
            $this->db->select("credit.customer_disp_name");
            $this->db->select("credit.credit_money");
            $this->db->select("data.reconcile_money");
            $this->db->select("adjust.adjust_money");
            $this->db->select("first.first_money");
            
            $tbl = "( SELECT ";
            $tbl .= " sum(reconcile_money) as reconcile_money ";
            $tbl .= " , credit_received_id ";
            $tbl .= " FROM ".T_CREDIT_DATA." data ";
            $tbl .= " GROUP BY ";
            $tbl .= " credit_received_id ) data ";
            
            $tbl_2 = "( SELECT ";
            $tbl_2 .= " sum(adjust_money) as adjust_money ";
            $tbl_2 .= " , credit_received_id ";
            $tbl_2 .= " FROM ".T_CREDIT_RECIEVED_ADJUST." credit_c ";
            $tbl_2 .= " GROUP BY ";
            $tbl_2 .= " credit_received_id ) adjust ";
            
            $tbl_3 = "( SELECT ";
            $tbl_3 .= " sum(reconcile_money) as first_money ";
            $tbl_3 .= " , credit_received_id ";
            $tbl_3 .= " FROM ".T_FIRST_MONEY_DATA." first_c ";
            $tbl_3 .= " GROUP BY ";
            $tbl_3 .= " credit_received_id ) first ";
            
            
            $this->db->join($tbl, "credit.credit_received_id=data.credit_received_id", "LEFT");
            $this->db->join($tbl_2, "credit.credit_received_id=adjust.credit_received_id", "LEFT");
            $this->db->join($tbl_3, "credit.credit_received_id=first.credit_received_id", "LEFT");
            
            // WHERE句作成
            if(!empty($where)) {
                $this->db->where($where);
            }
            
            return $this->select();
        }
        
        /**
	 * リスト用に情報を編集する
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        private function _get_bank_info($data) {
            
            $bank_info = array();
            
            $i =0;
            foreach ($data as $val) {
                
                $bank_info[$i] = new stdClass();
                $bank_info[$i]->bank_id = $val->bank_id;
                $bank_info[$i]->disp_bank = $val->bank_name."銀行 ".$val->branch_name." 支店".$val->account_type_name. " ".$val->account_no;
                
                $i++;
            }
            
            return $bank_info;
            
        }
        
    /**
	 * 登録用データ作成
	 *
	 * @access private
	 * @return array
	 * @author Kita Yasuhiro
	 */
        public function get_credit_data($not_id)
        {
            $data = array();
            
            $input = $this->input->post();
            
            // IDから銀行情報を取得
            $bank = $this->get_bank_info($input['bank_id']);
            
            for($i=0;$i<count($input['customer_name']);$i++) {
                
                if(empty($input['customer_name'][$i])) continue;
                if(array_search($input['credit_received_id'][$i], $not_id) !== false) continue;
                
                $data[$i]['credit_date'] = $input['credit_date'];
                $data[$i]['bank_id'] = $input['bank_id'];
                $data[$i]['bank_name'] = $bank[0]->bank_name;
                $data[$i]['branch_name'] = $bank[0]->branch_name;
                $data[$i]['account_type'] = $bank[0]->account_type;
                $data[$i]['account_no'] = $bank[0]->account_no;
                
                $data[$i]['customer_id'] = $this->get_customer_id($input['customer_name'][$i]);
                $data[$i]['customer_disp_name'] = $input['customer_name'][$i];
                $data[$i]['credit_money'] = str_replace(",", "",$input['credit_money'][$i]);
                $data[$i]['balance_money'] = $data[$i]['credit_money'];
                $data[$i]['credit_received_id'] = $data[$i]['credit_received_id'];
                
            }
            
            return $data;
        }
        
    /**
	 * 得意先IDを再度DBから取得
	 *
	 * @access private
	 * @return array
	 * @author Kita Yasuhiro
	 */
        public function get_customer_id($name)
        {
            
            // テーブル設定
            $this->m_tbl_name = M_CUSTOMER;
            
            $this->db->select("customer_id");
            
            // WHERE句作成
            $this->db->where("customer_disp_name", $name);
            
            $res = $this->select();
            
            if(count($res) == 0) {
                return null;
            } else {
                return $res[0]->customer_id;
            }
            
            
        }

        
        
    /**
	 * 銀行の情報を取得
	 *
	 * @access private
	 * @return array
	 * @author Kita Yasuhiro
	 */
        public function get_bank_info($id)
        {
            
            // テーブル設定
            $this->m_tbl_name = M_BANK;
            
            $this->db->select("bank_name");
            $this->db->select("branch_name");
            $this->db->select("account_type");
            $this->db->select("account_no");
            
            // WHERE句作成
            $this->db->where("bank_id", $id);
            
            return $this->select("");
            
        }
        
    /**
	 * 配列を初期化し返却する
	 *
	 * @access private
	 * @return array
	 * @author Kita Yasuhiro
	 */
        public function init_data_aray($cnt=10, $type="")
        {
            
            $data = array();
            for($i=0; $i<$cnt; $i++) {
                
                if(empty($type)) {
                    $data[$i]['disabled'] = "";
                } else {
                    $data[$i]['disabled'] = "disabled=disabled";
                }
                
            }
            return $data;
            
        }

}

/* End of file general_name_mdl.php */
/* Location: ./application/model/db/general_name_mdl.php */