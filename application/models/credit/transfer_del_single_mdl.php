<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//require APPPATH.'models/credit/credit_common_mdl.php';

/**
 * 振込消込(個別)画面のモデル処理
 */
class Transfer_del_single_mdl extends Credit_common_mdl {

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
            
            log_message('info', '【振込個別消込処理   START】');
            
            // トランザクション開始
            $this->db->trans_start();
            
            // 登録データ作成
            $data = $this->_get_regist_data();
            
            // データ登録処理
            // 消込管理データが存在するかチェックする
            $this->m_tbl_name = T_CREDIT_MNG;
            $this->db->where('bill_mng_id', $data['mng']['bill_mng_id']);
            $cnt = $this->get_total_cnt();

            $mng_ins = $data;
            unset($mng_ins['data']);

            $this->m_tbl_name = T_CREDIT_MNG;
            $mng_id = "";
            if($cnt == 0) {
                // 消込管理データを新規登録する
                $this->insert($mng_ins['mng']);
                $mng_id = $this->db->insert_id();
            } else {
                
                // 振込分のデータを消す。
                //$this->del_exist_data($data['mng']['bill_mng_id']);
                
                $this->m_where = array('bill_mng_id' => $data['mng']['bill_mng_id']);
                $this->db->set('sum_credit_money', 'sum_credit_money + '.$data['mng']['sum_credit_money'], false);
                $this->db->set('sum_balance_money', 'sum_balance_money - '.$data['mng']['sum_credit_money'], false);
                $this->update();

                // 消込管理IDを取得する
                $mng_id = $this->get_mng_id($data['mng']['bill_mng_id']);
            }

            $data_ins = $data;
            $data_id = null;
            unset($data_ins['mng']);

            foreach ($data_ins['data'] as $regist) {
                $regist['credit_mng_id'] = $mng_id;
                $this->m_tbl_name = T_CREDIT_DATA;
                if($regist['reconcile_type'] == RECONCILE_TYPE_FURI_TESU) {
                    $regist['relate_credit_data_id'] = $data_id;
                }
                $this->insert($regist);
                $data_id = $this->db->insert_id();

                // 振込手数料は自社負担の為、入金からひかない
                if($regist['reconcile_type'] <> RECONCILE_TYPE_FURI_TESU) {
                    // 入金残高更新
                    $this->m_tbl_name = T_CREDIT_RECIEVED;
                    $this->m_where = array('credit_received_id' => $regist['credit_received_id']);
                    $this->db->set('balance_money', 'balance_money - '.$regist['reconcile_money'], false);
                    $this->update();
                }

            }
            
            // ステータスUpdate
            $this->update_reconcile_status($mng_id);
            
            // 売上管理ファイルの更新
            $this->update_sales_mng($mng_id);
            
            // 更新金額を設定
            $this->m_now_money = $data['mng']['sum_credit_money'];
            // 売掛金残高ファイルの更新
            $this->set_receivable_data($mng_id);
            
            // トランザクション終了
            $this->db->trans_complete();
            
            log_message('info', '【振込個別消込処理   END】');
            
		}
        
	/**
	 * 削除処理
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
		public function cancel_data()
        {
            
            log_message('info', '【振込個別消込取消処理   START】');
            
            // トランザクション開始
            $this->db->trans_start();

            $row = $_POST['target_row'];
            $child_id = $_POST['credit_data_id'][$row];
            if(!empty($_POST['charge_id'][$row])) {
                $child_id = $child_id.",".$_POST['charge_id'][$row];
            }
            
            $this->del_exist_data($_POST['bill_mng_id'][0], $child_id);
            
            $mng_id = $this->get_mng_id($_POST['bill_mng_id'][0]);
            $this->set_receivable_data($mng_id, "cancel");
            
            // 売上管理テーブルのステータスを変更
            $this->update_sales_mng($mng_id, DATA_TYPE_BILL, "credit");
            
            // 消込管理テーブルの消込金額合計が0だったら、データ消す。
            $this->m_tbl_name = T_CREDIT_MNG;
            $this->db->where(array('credit_mng_id' => $mng_id, 'sum_credit_money' => '0'));
            $this->delete();
            
            // トランザクション終了
            $this->db->trans_complete();
            
            log_message('info', '【振込個別消込取消処理   END】');
            
        }
        
    /**
	 * 絞込条件を取得する
	 *
	 * @access private
     * @param  string $customer
	 * @return string
	 * @author Kita Yasuhiro
	 */
		public function create_bill_search_condition($customer)
		{
			$condition = array();
			$data = $this->get_input_condition();
                
            // 消し込み済みフラグ
            if(empty($data['post_sel_del'])) {
                $condition[] = "( mng.reconcile_status = '".CREDIT_STATUS_OFF."' OR mng.reconcile_status is null ) ";
            }

            if(empty($customer)) {
                // 得意先名
                if(!empty($data['post_name'])) {
                    $condition[] = "bill.customer_disp_name = ".$this->db->escape($data['post_name']);
                }

            } else {

                $condition[] = "bill.customer_disp_name = ".$this->db->escape($customer);
            }

            // 検索条件返却
            if(count($condition) > 0) {
                return implode(' and ', $condition);
            } else {
                return "";
            }
                
		}
        
    /**
	 * 絞込条件を取得する
	 *
	 * @access private
     * @param  string $customer
	 * @return string
	 * @author Kita Yasuhiro
	 */
		public function create_credit_search_condition($customer)
		{
			$condition = array();
			$data = $this->get_input_condition();
                
            if(empty($customer)) {
                // 得意先名
                if(!empty($data['post_name'])) {
                    $condition[] = "credit.customer_disp_name = ".$this->db->escape($data['post_name']);
                }
            } else {
                $condition[] = "credit.customer_disp_name = ".$this->db->escape($customer);

            }

            // 検索条件返却
            if(count($condition) > 0) {
                return implode(' and ', $condition);
            } else {
                return "";
            }
                
		}
        
    /**
	 * 請求書データの取得
	 *
	 * @access	public
     * @param string $where 絞込条件
     * @param int $start 取得行の開始番号
     * @param boolean $count_flg 件数取得を行うかのフラグ
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_bill_list_data($where, $start = 0, $count_flg = false) {
        
            // テーブル設定
            $this->m_tbl_name = T_BILL_MNG;
            
            $this->m_prefix = "bill";
            
            if($count_flg === false) {
                $this->db->select("bill.bill_mng_id");
                $this->db->select("bill.bill_no");	
                $this->db->select("bill.bill_date");
                $this->db->select("bill.bill_type");
                $this->db->select("bill.bill_money");
                $this->db->select("bill.customer_disp_name");
                $this->db->select("bill.credit_type");
                $this->db->select("mng.credit_mng_id");
                $this->db->select("mng.reconcile_status");
                $this->db->select("mng.sum_credit_money");
                $this->db->select("mng.sum_balance_money");
                /* 消込データは後で取得するためコメントアウト
                $this->db->select("transfer.credit_received_id");
                $this->db->select("transfer.reconcile_date");
                $this->db->select("transfer.credit_data_id");
                $this->db->select("transfer.reconcile_money as reconcile_money");
                $this->db->select("charge.reconcile_date as charge_reconcile_date");
                $this->db->select("charge.credit_data_id as charge_id");
                $this->db->select("charge.reconcile_money as charge_money");
                */
            } else {
                $this->db->select('count(*) as cnt');
            }
            
            // JOIN句作成
            $this->db->join(T_CREDIT_MNG." mng ", "bill.bill_no=mng.bill_no and mng.delete_flg='".FLG_OFF."'", "LEFT");
//            $this->db->join(V_CREDIT_TRANSFER_DATA." transfer ", "mng.credit_mng_id=transfer.credit_mng_id", "LEFT");
//            $this->db->join(V_CREDIT_CHARGE_DATA." charge ", "mng.credit_mng_id=charge.credit_mng_id and charge.relate_credit_data_id=transfer.credit_data_id", "LEFT");
            if($count_flg === false) {
                $this->db->join(M_CUSTOMER." cus ", "cus.customer_id=bill.customer_id", "LEFT");
            }
            
            // WHERE句作成
            $this->db->where("bill.credit_type in ('".CREDIT_TYPE_OTHER."', '".CREDIT_TYPE_BEFORE."')");
            if(!empty($where)) {
                $this->db->where($where);
            }
            
            if($count_flg === false) {
                // リミット設定
                $this->db->limit(PER_CREDIT_PAGE_CNT, $start);
                // ORDER句の設定
                $this->db->order_by("bill.bill_date", "asc");
                $this->db->order_by("cus.customer_furi is null", "asc");
                $this->db->order_by("cus.customer_furi", "asc");
                $this->db->order_by("bill.bill_mng_id", "asc");
//            $this->db->order_by("charge.reconcile_date", "asc");
//            $this->db->order_by("charge.credit_data_id", "asc");
            }
            
            // 結果を取得する
            $result = $this->select();
            if($count_flg === false) {
                return $result;
            } else {
                return intval($result[0]->cnt);
            }
        }
        
    /**
	 * 消し込みデータの取得
	 *
	 * @access	public
     * @param  string $bill_mng_ids
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_transfer_del_data($bill_mng_ids) {
            
            $sql = "
SELECT
 *
FROM (
	SELECT
	  bill.bill_mng_id
	, transfer.credit_received_id
	, transfer.reconcile_date
	, transfer.credit_data_id
	, transfer.reconcile_money as reconcile_money
	, charge.reconcile_date as charge_reconcile_date
	, charge.credit_data_id as charge_id
	, charge.reconcile_money as charge_money
	, case
	WHEN transfer.reconcile_type IS NULL THEN charge.reconcile_type
	ELSE transfer.reconcile_type
	END AS reconcile_type
	FROM (t_bill_mng bill)
	LEFT JOIN t_credit_mng mng
	ON bill.bill_no=mng.bill_no
	and mng.delete_flg=".FLG_OFF."
	LEFT JOIN v_credit_transfer_data transfer
	ON mng.credit_mng_id=transfer.credit_mng_id
	LEFT JOIN v_credit_charge_data charge
	ON mng.credit_mng_id=charge.credit_mng_id
	and charge.relate_credit_data_id=transfer.credit_data_id
	WHERE bill.bill_mng_id in (".$bill_mng_ids.")
	AND bill.delete_flg = ".FLG_OFF."
	UNION ALL
	select
	 bill.bill_mng_id
	, c_data.credit_received_id
	, c_data.reconcile_date
	, c_data.credit_data_id
	, c_data.reconcile_money as reconcile_money
	, '' as charge_reconcile_date
	, '' as charge_id
	, '' as charge_money
	, c_data.reconcile_type
	from t_bill_mng bill
	left outer join t_credit_mng c_mng
	ON bill.bill_no=c_mng.bill_no
	and c_mng.delete_flg=".FLG_OFF."
	left outer join t_credit_data c_data
	on c_mng.credit_mng_id=c_data.credit_mng_id
	where bill.bill_mng_id in (".$bill_mng_ids.") and bill.delete_flg = ".FLG_OFF
       ." and ((c_data.reconcile_type not in ('".RECONCILE_TYPE_FURI."', '".RECONCILE_TYPE_FURI_TESU."'))
          or (c_data.reconcile_type = '".RECONCILE_TYPE_FURI_TESU."' and c_data.relate_credit_data_id is null))
    ) data
ORDER BY bill_mng_id asc
, reconcile_date is null asc
, reconcile_date asc
, credit_data_id asc
, charge_reconcile_date asc
, charge_id asc
";
            $query = $this->db->query($sql);
            
            
            return $query->result();
        }
        
    /**
	 * 入金データの取得
	 *
	 * @access	public
     * @param  string $where
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_credit_data($where) {
        
            // テーブル設定
            $this->m_tbl_name = T_CREDIT_RECIEVED;
            
            $this->m_prefix = "credit";
            
            $this->db->select("credit.credit_received_id");
            $this->db->select("credit.customer_disp_name");
            $this->db->select("credit.credit_date");
            $this->db->select("credit.credit_money");
            $this->db->select("transfer.reconcile_money as transfer_money");
            $this->db->select("data.reconcile_money as other_money");
            $this->db->select("credit.balance_money");
            
            $tbl = "(";
            $tbl .= " SELECT ";
            $tbl .= "  credit_received_id ";
            $tbl .= "  , sum(reconcile_money) as reconcile_money ";
            $tbl .= " FROM ".V_CREDIT_TRANSFER_DATA;
            $tbl .= "  GROUP BY credit_received_id ";
            $tbl .= ") as transfer";
            
            // JOIN句の設定
            $this->db->join($tbl, "transfer.credit_received_id=credit.credit_received_id", "LEFT");
            
            $this->db->join(T_CREDIT_DATA." data ", "data.credit_received_id=credit.credit_received_id and data.reconcile_type not in ".
                                                                          "('".RECONCILE_TYPE_FURI."','".RECONCILE_TYPE_FURI_TESU."' )", "LEFT");

	        $this->db->join(M_CUSTOMER." customer ", "customer.customer_id=credit.customer_id", "LEFT");

            // ORDER句の設定
            $this->db->order_by("credit.credit_date", "asc");
            $this->db->order_by("customer.customer_furi", "asc");
	        $this->db->order_by("credit.customer_disp_name", "asc");
	        $this->db->order_by("credit.ins_datetime", "asc");

            // WHEREの設定
            $this->db->where("credit.balance_money != ", "0");
            if(!empty($where)) {
                $this->db->where($where);
            }
            
            return $this->select();
        }
        
    /**
	 * 得意先名称の取得
	 *
	 * @access	public
     * @param  int $id
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_customer_name($id) {
        
            if(empty($id)) return "";
            
            // テーブル設定
            $this->m_tbl_name = T_BILL_MNG;
            
            $this->db->select("customer_disp_name");
            
            // WHEREの設定
            $this->db->where("bill_mng_id", $id);
            
            $res = $this->select();
            
            return $res[0]->customer_disp_name;
        }
        
	/**
	 * 表示用の一覧データを取得
	 *
	 * @access private
	 * @return array
	 * @author kita Yasuhiro
	 */
        public function get_credit_list_data($customer) 
        {
            $where = $this->create_credit_search_condition($customer);
            
            $res = $this->get_credit_data($where);

            foreach ($res as $val){
                // 入金日
                $val->disp_credit_date = slash_date($val->credit_date);
                // 入金額
                $val->disp_credit_money =  empty($val->credit_money)? "0" : money_sep($val->credit_money);
                // 振込額
                $val->disp_transfer_money = empty($val->transfer_money) ? "0" : money_sep($val->transfer_money);
                // その他消込額
                $val->disp_other_money = empty($val->other_money) ? "0" : money_sep($val->other_money);
                // 入金残額
                $val->disp_balance_money = empty($val->balance_money) ? "0" : money_sep($val->balance_money);
            }
            
            return $res;
        }
        
    /**
	 * 請求書情報の取得
	 *
	 * @access private
     * @param string $where 絞込条件
	 * @return array
	 * @author kita Yasuhiro
	 */
        public function get_bill_info_data($where)
        {
            
            $res = array();
            
            $start = $this->uri->segment(4);
            
            // 請求書情報の取得
            $list_bill = $this->get_bill_list_data($where, $start);

            // 消込情報の取得
            $bill_mng_id_list = array();
            foreach($list_bill as $bill_data) {
                $bill_mng_id_list[] = $bill_data->bill_mng_id;
            }
            
            if(count($bill_mng_id_list) > 0) {
                // 消し込みデータの取得
                $list_transfer_del = $this->get_transfer_del_data(implode(',', $bill_mng_id_list));
                
                // 消し込みデータをbill_mng_id毎にまとめる
                $bill_transfer_del = array();
                foreach($list_transfer_del as $transfer_del) {
                    $bill_transfer_del[$transfer_del->bill_mng_id][] = $transfer_del;
                }
            }
            $i = 0;
            $j = 0;
            $trans_start = 0;
            foreach ($list_bill as $key => $val) {
                
                $j = 0;
                
                $res[$i]['bill_no'] = $val->bill_no;
                $res[$i]['bill_mng_id'] = $val->bill_mng_id;
                $res[$i]['customer_disp_name'] = $val->customer_disp_name;
                $res[$i]['disp_bill_no'] = get_anchor("/bill/bill_cutoff_print/bill_disp/".$val->bill_no."?win_type=win", $val->bill_no, array("target" => "_blank"));
                $res[$i]['disp_bill_date'] = slash_date($val->bill_date);
                $res[$i]['disp_bill_money'] = money_sep($val->bill_money);
                $res[$i]['bill_money'] = $val->bill_money;
                $res[$i]['credit_mng_id'] = $val->credit_mng_id;
                $res[$i]['reconcile_status'] = $val->reconcile_status;
                $res[$i]['sum_credit_money'] = $val->sum_credit_money;
                $res[$i]['sum_balance_money'] = (is_null($val->sum_balance_money)) ? $val->bill_money : $val->sum_balance_money;
                $res[$i]['disp_sum_balance_money'] = money_sep($res[$i]['sum_balance_money']);
                
                foreach($bill_transfer_del[$val->bill_mng_id] as $transfer_del) {
                    $res[$i]['reconcile_data'][$j]['credit_received_id'] = $transfer_del->credit_received_id;
                    $res[$i]['reconcile_data'][$j]['disp_reconcile_date'] = slash_date($transfer_del->reconcile_date);
                    $res[$i]['reconcile_data'][$j]['credit_data_id'] = $transfer_del->credit_data_id;
                    $res[$i]['reconcile_data'][$j]['charge_reconcile_date'] = slash_date($transfer_del->charge_reconcile_date);
                    $res[$i]['reconcile_data'][$j]['charge_id'] = $transfer_del->charge_id;
                    $res[$i]['reconcile_data'][$j]['reconcile_type'] = $transfer_del->reconcile_type;
                    $res[$i]['reconcile_data'][$j]['disp_reconcile_type'] = $this->_get_display_reconcile_type($transfer_del->reconcile_type);
                    
                    // 振込手数料のみのデータの場合は振込手数料欄に金額を表示するようにする
                    if($transfer_del->reconcile_type == RECONCILE_TYPE_FURI_TESU) {
                        $res[$i]['reconcile_data'][$j]['reconcile_money'] = '';
                        $res[$i]['reconcile_data'][$j]['disp_reconcile_money'] = '';
                        $res[$i]['reconcile_data'][$j]['disp_charge_money'] = money_sep($transfer_del->reconcile_money);;
                    } else {
                        $res[$i]['reconcile_data'][$j]['reconcile_money'] = $transfer_del->reconcile_money;
                        $res[$i]['reconcile_data'][$j]['disp_reconcile_money'] = money_sep($transfer_del->reconcile_money);
                        $res[$i]['reconcile_data'][$j]['disp_charge_money'] = money_sep($transfer_del->charge_money);
                    }
                    
                    $j++;
                }
                
                $i++;
            }
            
            $this->_set_space_row($res);
            
            
            return $res;
        
        }
    /**
     * 消し込み情報の入力欄の生成処理
     * 
     * @param array $ary
     */
        private function _set_space_row(&$ary)
        {
            
            $i=0;
            foreach ($ary as $value) {
                
                if($value['reconcile_status'] == CREDIT_STATUS_ON) {
                    $i++; 
                    continue;
                }
                
                $i_l = count($ary[$i]['reconcile_data']);
                
                if(!empty($value['reconcile_data'][($i_l - 1)]['disp_reconcile_date'])) {
                    $ary[$i]['reconcile_data'][$i_l]['credit_received_id'] = "";
                    $ary[$i]['reconcile_data'][$i_l]['disp_reconcile_date'] = "";
                    $ary[$i]['reconcile_data'][$i_l]['credit_data_id'] = "";
                    $ary[$i]['reconcile_data'][$i_l]['reconcile_money'] = "";
                    $ary[$i]['reconcile_data'][$i_l]['disp_reconcile_money'] = "";
                    $ary[$i]['reconcile_data'][$i_l]['charge_reconcile_date'] = "";
                    $ary[$i]['reconcile_data'][$i_l]['charge_id'] = "";
                    $ary[$i]['reconcile_data'][$i_l]['disp_charge_money'] = "";
                    
                }
                
                $i++;
            }
            
        }
    /**
     * 画面表示する消し込みタイプを取得する
     * 
     * @param string $reconcile_type 
     * @return string
     */
        private function _get_display_reconcile_type($reconcile_type) {
            
            $return_str = '';
            
            switch ($reconcile_type) {
                case RECONCILE_TYPE_GENKIN:
                    $return_str = '現';
                    break;
                case RECONCILE_TYPE_KOGITE:
                    $return_str = '小';
                    break;
                case RECONCILE_TYPE_TEGATA:
                    $return_str = '手';
                    break;
                case RECONCILE_TYPE_ZSITU:
                    $return_str = '雑損';
                    break;
                case RECONCILE_TYPE_OTHER:
                    $return_str = '他';
                    break;
				case RECONCILE_TYPE_KESHIKOMI:
					$return_str = '訂';
					break;
                default:
                    break;
            }
            
            return $return_str;
        }
        
    /**
	 * ポストのデータを返却する
	 *
	 * @access private
	 * @return array
	 * @author kita Yasuhiro
	 */
        public function get_post_data() 
        {
            
            $ary = array();
            $data = $this->session->userdata($this->router->class);
            
            if(empty($_POST['post_sel_del'])) {
                $ary['post_sel_del'] = $data[SS_KEY_SEARCH]['post_sel_del'];
            } else {
                $ary['post_sel_del'] = $_POST['post_sel_del'];
            }
            
            if(empty($_POST['post_name'])) {
                $ary['post_name'] = $data[SS_KEY_SEARCH]['post_name'];
            } else {
                $ary['post_name'] = $_POST['post_name'];
            }
            
            return $ary;
        }
        
       /**
	 * 振込消込用のセッションを設定する
	 *
	 * @access private
	 * @return array
	 * @author kita Yasuhiro
	 */
        public function set_list_session()
        {
            
            $session = array();
            
            if(empty($_POST['search'])) {
                $session[SS_KEY_SEARCH] = $this->get_input_condition();
                
            } else {
                $session[SS_KEY_SEARCH]['post_sel_del'] = $this->input->post("post_sel_del");
                $session[SS_KEY_SEARCH]['post_name'] = $this->input->post("post_name");
                
            }
            
            $this->session->set_userdata($this->router->class, $session);
            
        }
        
       /**
	 * POST情報を取得する
	 *
	 * @access private
	 * @return array
	 * @author kita Yasuhiro
	 */
        public function get_input_condition()
        {
            
            $data = array();
            
            if(empty($_POST['search'])) {
                $data = $this->session->userdata($this->router->class);
                
                if(empty($data)) {
                    $data = $this->get_post_data();
                } else {
                    $data = $data[SS_KEY_SEARCH];
                }
                
            } else {
                $data = $this->get_post_data();
            }

            return $data;
            
        }
        
       /**
	 * 登録情報を取得する
	 *
	 * @access private
	 * @return array
	 * @author kita Yasuhiro
	 */
        private function _get_regist_data()
        {
            $res = array();
            $target = $_POST['bill_mng_id'][0];
            
            $res['mng']['bill_mng_id'] = $target;
            $res['mng']['bill_no'] = $_POST['bill_no'];    
            $res['mng']['bill_money'] = $_POST['bill_money'];    
            
            $i = 0;
            $index = 0;
            $sum_money = 0;
            foreach ($_POST['credit_received_id'] as $value) {
                
                if($i != 0) {
                    $index = count($res['data']);
                }
                
                $res['data'][$index]['credit_received_id'] = $value;
                $res['data'][$index]['reconcile_date'] = $_POST['reconcile_date'][$target][$i];
                $res['data'][$index]['reconcile_money'] = erase_money_sep($_POST['reconcile_money'][$target][$i]);
                $res['data'][$index]['reconcile_type'] = RECONCILE_TYPE_FURI;
                
                $sum_money += erase_money_sep($_POST['reconcile_money'][$target][$i]);
                if(!empty($_POST['charge_money'][$target][$i])) {
                    
                    $res['data'][$index+1]['credit_received_id'] = $value;
                    $res['data'][$index+1]['reconcile_date'] = $_POST['reconcile_date'][$target][$i];
                    $res['data'][$index+1]['reconcile_money'] = erase_money_sep($_POST['charge_money'][$target][$i]);
                    $res['data'][$index+1]['reconcile_type'] = RECONCILE_TYPE_FURI_TESU;
                    
                    $sum_money += erase_money_sep($_POST['charge_money'][$target][$i]);
                    
                }
                
                $i++;
            }
            
            $res['mng']['sum_credit_money'] = $sum_money;
            $res['mng']['sum_balance_money'] = $_POST['sum_balance_money'] - $sum_money;
            
            
            return $res;
        }

}

/* End of file general_name_mdl.php */
/* Location: ./application/model/db/general_name_mdl.php */
