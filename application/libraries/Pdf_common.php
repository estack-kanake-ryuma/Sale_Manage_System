<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH.'libraries/fpdf/tfpdf.php';

class FPDF extends tFPDF {
}
 
// fpdiをロード
require APPPATH.'libraries/fpdf/fpdi.php';

// 画像文字の保存場所
define('IMAGE_FONT_PATH', APPPATH.'libraries/image_font/');

/**
 * Pdf
 *
 * Pdfクラス
 *
 * @package	application
 * @subpackage	libraries
 * @author		Kita Yasuhiro
 * @link		http://www.datalyze.co.jp
 */
class Pdf_common extends FPDI {

	/**
	 * 用紙サイズ
	 *
	 * @var string
	 */
        protected $_paper_size = 'A4';
        protected $_pdf = null;
        protected $_ci = null;
        protected $_list_height = 7;
        protected $unit_page_no = 0;
        protected $layout = "P";
        protected $_disp_date = "";

	/**
	 * 画面表示フラグ
	 * @var bool
	 */
	public $screen_flag = false;
        
	/**
	 * コンストラクタ
	 *
	 * @package	application
	 * @subpackage controllers
	 * @author	Kita Yasuhiro
	 * @link	http://www.datalyze.co.jp
	 */
	public function __construct()
	{
	}
        

	/*
	* ---------------------------------------------------------------------------
	* 各種セッター
	* ---------------------------------------------------------------------------
	*/

	/**
	 * 用紙サイズセッター
	 *
	 * @access public
	 * @param  string $size
	 * @return void
	 * @author Kita Yasuhiro
	 */
	public function set_paper_size($size) { $this->_paper_size = $size; }

	/*
	* ---------------------------------------------------------------------------
	* 個別メソッド
	* ---------------------------------------------------------------------------
	*/
        
	/**
	 * 文字コードを変換
	 *
	 * @access public
	 * @param  string $str
	 * @return void
	 * @author Kita Yasuhiro
	 */
        protected function change_code($str) {
            
            return $str;
//            return mb_convert_encoding($str, "SJIS-win", "UTF-8");
            //return mb_convert_encoding($str, "SJIS", "UTF-8");
        }
        
	/**
	 * 印字文字を返却
	 *
	 * @access public
	 * @param  string $type
	 * @param  string $val
	 * @return string
	 * @author Kita Yasuhiro
	 */
        protected function get_disp_str($type, $val) {
            
            $alType = explode("|", $type);
            $str = "";
            for($i=0; $i<count($alType); $i++) {
                
                $res_type = explode("_", $alType[$i]);
                switch ($res_type[0]) {
                    case "money":
                        $str = money_sep($val);
                        if(empty($str)) {
                            $str = 0;
                        }
                        break;
                    case "date":
                        $str = slash_date($val);
                        break;
                    case "nbs":
                        $str = "    ".$val;
                        break;
                    case "length":
                        $str = mb_strimwidth($val, 0, $res_type[1], "．．．");
                        break;
                    default :
                        $str = $val;
                        break;
                }
                
            }
            
            return $this->change_code($str);
            
        }
        
	/**
	 * 表示準備
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
        protected function pre_display() {
            
            //ob_start();
            
            $this->_pdf = new FPDI($this->layout, 'mm', 'A4', true);
            
            // コントローラーのインスタンス生成
            $this->_ci =& get_instance();
            $this->_ci->config->load('list_header');
            
            // オート改ページをやめる
            $this->_pdf->SetAutoPageBreak(false);
            // 1枚目を追加
            $this->_pdf->AddPage();
            // デフォルトのFont設定
//            $this->_pdf->AddMBFont(GOTHIC ,'SJIS');
            $this->_pdf->AddFont("GOTHIC", "", "MSGothic.ttf", true);
            
            // 隠しテキストの埋め込み処理（数字が正しく表示されない件の対処方法）
            $this->_pdf->SetFont(GOTHIC,'',1);
            $this->_pdf->SetXY(0, 0);
            $this->_pdf->SetTextColor(255,255, 255);
            $this->_pdf->Cell(0, 0, ' 123456789');
            $this->_pdf->SetTextColor(0,0, 0);
        }
        
	/**
	 * 表示終了処理
	 *
	 * @access public
	 * @param $name string
	 * @return void
	 * @author Kita Yasuhiro
	 */
        protected function end_display($name = "") {
            
            $this->_pdf->AliasNbPages(); 
            ob_end_clean();
            
            if(get_class($this) == "Bill_pdf" && $this->screen_flag === false) {
                
                $this->_pdf->Output(APPPATH."download/".$name.".pdf", "F");
                
            } else {

                if(empty($name)) {
                    $this->_pdf->Output($this->_ci->router->class.".pdf", "D");
                } else {
                    $this->_pdf->Output($name.".pdf", "D");
                }
                
                //$this->_pdf->Output($this->_ci->router->class.".pdf", "I");
            }
            
            
        }
	/**
	 * ヘッダー共通項目を設定
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
        protected function set_header_common() {
            
            // 頁番号を設定
            $this->set_page_no();
            
            // 発行日を設定
            $this->set_publish_date();
            
        }
        
	/**
	 * ページ番号を設定
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
        protected function set_page_no() {
            
            $this->_unit_page_no++;
            
            //$page_no = $this->_pdf->PageNo(); 
            $this->_pdf->SetFont(GOTHIC,'',7);
            if($this->layout == "L") {
                $this->_pdf->SetXY(255, 12);
            } else {
                $this->_pdf->SetXY(162, 19);
            }
            
            //$this->_pdf->Cell(20, 4, $this->change_code($page_no." / ".'{nb}'), "B", 0, "R");
            $this->_pdf->Cell(21, 3, $this->change_code($this->_unit_page_no." / ".'{nb}'), "B", 0, "R");
            for($i = 0; $i < $this->_unit_page_no; $i++){
                $no = $this->_pdf->PageNo() - $i;
                $this->_pdf->SetUnitPageNo($no, $this->_unit_page_no);
            }
            
            
        }
        
	/**
	 * 発行日を設定
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
        protected function set_publish_date() {
            
            $this->_pdf->SetFont(GOTHIC,'',10);
            if($this->layout == "L") {
                $this->_pdf->SetXY(255, 18);
            } else {
                $this->_pdf->SetXY(160, 28);
            }
            
            $date = "";
            if(empty($this->_disp_date)) {
                $date = $this->change_code(date('Y年m月d日'));
            } else {
                $date = $this->change_code(slash_date($this->_disp_date));
            }
            
            $this->_pdf->Cell(25, 4, $date, "", 0, "R");
        }
        
	/**
	 * 各明細のタイトルを設定
	 *
	 * @access public
	 * @param  string $str
	 * @return void
	 * @author Kita Yasuhiro
	 */
        protected function set_title($str) {
            
            $this->_pdf->SetFont(GOTHIC,'',13);
            if($this->layout == "L") {
                $this->_pdf->SetXY(100, 10);
            } else {
                $this->_pdf->SetXY(60, 20);
            }
            $this->_pdf->Cell(85, 8, $this->change_code($str), "B", 0, "C");
        }
        
	/**
	 * 各明細の出力範囲を設定
	 *
	 * @access public
	 * @param  string $from
	 * @param  string $to
	 * @return void
	 * @author Kita Yasuhiro
	 */
        protected function set_span($from="book_date_from", $to="book_date_to") {
            
            // 集計範囲を設定
            $this->_pdf->SetFont(GOTHIC,'',11);
            $this->_pdf->SetXY(72, 28);
            $this->_pdf->Cell(60, 10, $this->change_code("【 ".$this->_ci->input->post($from)." ～ ".$this->_ci->input->post($to)." 】"), "", 0, "C");
        }
        
	/**
	 * 各明細の出力範囲を設定
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
        protected function set_target_month() {
            
            // 集計範囲を設定
            $this->_pdf->SetFont(GOTHIC,'',11);
            if($this->layout == "L") {
                $this->_pdf->SetXY(100, 16);
            } else {
                $this->_pdf->SetXY(72, 28);
            }
            
            $session = $this->_ci->session->userdata($this->_ci->router->class);
            $date = $session[SS_KEY_SEARCH]['target_month'];
            $date = str_replace("/", "年", $date)."月";
                    
            $this->_pdf->Cell(85, 10, $this->change_code("【 ".$date." 】"), "", 0, "C");
        }
        
	/**
	 * 各明細表の出力条件を設定
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
        protected function set_receivable_condition() {

            $x = 190;
            $y = 20;
            
            // 出力順序
            $this->_pdf->SetFont(GOTHIC,'',6);
            $this->_pdf->SetXY($x, $y+=5);
            $this->_pdf->SetFillColor(217, 217, 217);
            
            $this->_pdf->Cell(18, 5, $this->change_code("得意先"), "1", 0, "C", 1);
            $this->_pdf->Cell(84, 5, $this->_get_disp_customer_name("customer_disp_name"), "1", 0, "L");
            
            $this->_pdf->SetXY($x, $y+=5);
            $this->_pdf->Cell(18, 5, $this->change_code("研究所"), "1", 0, "C", 1);
            $this->_pdf->Cell(33, 5, $this->_get_disp_institute(), "1", 0, "L");
            
            $this->_pdf->Cell(18, 5, $this->change_code("部門"), "1", 0, "C", 1);
            $this->_pdf->Cell(33, 5, $this->_get_disp_depart(), "1", 0, "L");
            
            $this->_pdf->SetXY($x, $y+=5);
            $this->_pdf->Cell(18, 5, $this->change_code("滞留条件"), "1", 0, "C", 1);
            $this->_pdf->Cell(33, 5, $this->_get_disp_retention(), "1", 0, "L");

            $this->_pdf->SetFillColor(255, 255, 255);

            
        }


        
	/**
	 * 各明細表の出力条件を設定
	 *
	 * @access public
	 * @param  string $conf_name
	 * @return void
	 * @author Kita Yasuhiro
	 */
        protected function set_condition($conf_name) {
            
            $x = "";
            $y = "";
            
            if($this->layout == "L") {
                $x = 190;
                $y = 20;
            } else {
                $x = 105;
                $y = 35;
            }
            
            // 出力順序
            $this->_pdf->SetFont(GOTHIC,'',7);
            $this->_pdf->SetXY($x, $y+=5);
            $this->_pdf->SetFillColor(217, 217, 217);
            
            $this->_pdf->Cell(18, 5, $this->change_code("表示順序"), "1", 0, "C", 1);
            $this->_pdf->Cell(37, 5, $this->_get_disp_order($conf_name), "1", 0, "L");
            
            $this->_pdf->SetXY($x, $y+=7);
            $this->_pdf->Cell(18, 5, $this->change_code("研究所"), "1", 0, "C", 1);
            $this->_pdf->Cell(33, 5, $this->_get_disp_institute(), "1", 0, "L");
            
            $this->_pdf->Cell(18, 5, $this->change_code("部門"), "1", 0, "C", 1);
            $this->_pdf->Cell(33, 5, $this->_get_disp_depart(), "1", 0, "L");
            
            $this->_pdf->SetXY($x, $y+=5);
            $this->_pdf->Cell(18, 5, $this->change_code("摘要"), "1", 0, "C", 1);
            $this->_pdf->Cell(33, 5, $this->_get_disp_abstract(), "1", 0, "L");
            $this->_pdf->Cell(18, 5, $this->change_code("得意先区分"), "1", 0, "C", 1);
            $this->_pdf->Cell(33, 5, $this->_get_disp_customer_type(), "1", 0, "L");
            
            $this->_pdf->SetXY($x, $y+=5);
            $this->_pdf->Cell(18, 5, $this->change_code("担当者"), "1", 0, "C", 1);
            $this->_pdf->Cell(33, 5, $this->_get_disp_handler(), "1", 0, "L");
            $this->_pdf->Cell(18, 5, $this->change_code("得意先名"), "1", 0, "C", 1);
            $this->_pdf->Cell(33, 5, $this->_get_disp_customer_name("customer_name"), "1", 0, "L");

            $this->_pdf->SetFillColor(255, 255, 255);
            
        }
        
        
	/**
	 * 表の明細行のタイトルを設定する
	 *
	 * @access public
	 * @param  int $list_x
	 * @param  int $list_y
	 * @param  string $str
	 * @return array
	 * @author Kita Yasuhiro
	 */
        protected function set_list_title($list_x, $list_y, $str="") {
            
            $this->_pdf->SetXY($list_x, $list_y);
            
            // 表のFont固定
            $this->_pdf->SetFont(GOTHIC,'',7);
            
            // 表のヘッダー背景固定
            $this->_pdf->SetFillColor(217, 217, 217);

            if($str == "") {
                $alTitle = $this->_ci->config->item($this->_ci->router->class);
            } else {
                $alTitle = $this->_ci->config->item($str);
            }
            
            $last_cnt = count($alTitle);
            $i = 1;
            $ln = "";
            foreach ($alTitle as $val) {
                if($last_cnt == $i) $ln = 2;
                
                if(isset($val['row_span_flg'])) {
                    $this->_pdf->Cell($val['width'], $val['height'], $this->change_code($val['name']), 1, $ln, "C", 1);
                    $this->_pdf->SetXY($val['row_span_flg'], ($list_y + $val['height']));
                } else {
                    $this->_pdf->Cell($val['width'], $val['height'], $this->change_code($val['name']), 1, $ln, "C", 1);
                }
                
                $i++;
            }
            
            $this->_pdf->SetFillColor(255, 255, 255);
            
            return $alTitle;
        }
        
	/**
	 * 表の表示順を取得する
	 *
	 * @access public
	 * @param  string $conf_name
	 * @return string
	 * @author Kita Yasuhiro
	 */
        private function _get_disp_order($conf_name)
        {
            
            $ary_order = $this->_ci->config->item($conf_name);
            
            $name = "";
            foreach ($ary_order as $val) {
                if($val['item'] == $this->_ci->input->post("seq_item")) {
                    $name = $val['name'];
                }
            }
            
            return $this->change_code($name);
            
        }

	/**
	 * 研究所を取得する
	 *
	 * @access public
	 * @return string
	 * @author Kita Yasuhiro
	 */
        private function _get_disp_institute()
        {
            
            $institute_id = $this->get_search_condition("institute_id");
            
            $str = "";
            
            if(empty($institute_id)) {
                $str = "全研究所";
            } else {
                
                $ret = $this->_ci->db->get_where(M_INSTITUTE, array('institute_id'=>$institute_id));
                $res = $ret->result();
                
                $str = $res[0]->institute_name;
            }
            
            return $this->change_code($str);
            
        }
        
	/**
	 * 部門を取得する
	 *
	 * @access public
	 * @return string
	 * @author Kita Yasuhiro
	 */
        private function _get_disp_depart()
        {
            
            $depart_id = $this->get_search_condition("depart_id");
            $str = "";
            
            if(empty($depart_id)) {
                $str = "全部門";
            } else {
                
                $ret = $this->_ci->db->get_where(M_DEPART, array('depart_id'=>$depart_id));
                $res = $ret->result();
                
                $str = $res[0]->depart_name;
            }
            
            return $this->change_code($str);
            
        }
        
	/**
	 * 摘要を取得する
	 *
	 * @access public
	 * @return string
	 * @author Kita Yasuhiro
	 */
        private function _get_disp_abstract()
        {
            
            $abstract_id = $this->get_search_condition("abstract_id");
            $str = "";
            
            if(empty($abstract_id)) {
                $str = "全摘要";
            } else {
                
                $ret = $this->_ci->db->get_where(M_ABSTRACT, array('abstract_id'=>$abstract_id));
                $res = $ret->result();
                
                $str = $res[0]->abstract_name;
            }
            
            return $this->change_code($str);
            
        }
        
	/**
	 * 得意先区分を取得する
	 *
	 * @access public
	 * @return string
	 * @author Kita Yasuhiro
	 */
        private function _get_disp_customer_type()
        {
            
            $customer_type = $this->get_search_condition("customer_type");
            $str = "";
            
            if(empty($customer_type)) {
                $str = "全得意先";
            } else {
                
                $ret = $this->_ci->db->get_where(M_SYS_GENERAL_NAME, array('group_cd'=>GRP_CUSTOMER_TYPE, 'item_cd'=>$customer_type));
                $res = $ret->result();
                
                $str = $res[0]->item_name;
            }
            
            return $this->change_code($str);
            
        }
        
	/**
	 * 得意先区分を取得する
	 *
	 * @access public
	 * @param  string $input_name
	 * @return string
	 * @author Kita Yasuhiro
	 */
        private function _get_disp_customer_name($input_name)
        {
            
            $customer = $this->get_search_condition($input_name);
            $str = "";
            
            if(empty($customer)) {
                $str = "";
            } else {
                $str = "『".mb_strimwidth($customer, 0, 15, "．．．")."』を含む";
            }
            
            return $this->change_code($str);
            
        }
        
	/**
	 * 担当者を取得する
	 *
	 * @access private
	 * @return string
	 * @author Kita Yasuhiro
	 */
        private function _get_disp_handler()
        {
            
            $handler_id = $this->get_search_condition("handler_id");
            
            $str = "";
            
            if(empty($handler_id)) {
                $str = "全担当者";
            } else {
                
                $ret = $this->_ci->db->get_where(M_HANDLER, array('handler_id'=>$handler_id));
                $res = $ret->result();
                
                $str = $res[0]->handler_name;
            }
            
            return $this->change_code($str);
            
        }
        
	/**
	 * 滞留条件を取得する
	 *
	 * @access private
	 * @return void
	 * @author Kita Yasuhiro
	 */
        private function _get_disp_retention()
        {
            
            $retention = $this->get_search_condition("retention");
            
            $str = "";
            switch ($retention) {
                case "1":
                    $str = "一ヶ月以上滞留";
                    break;
                case "2":
                    $str = "二ヶ月以上滞留";
                    break;
                case "3":
                    $str = "三ヶ月以上滞留";
                    break;
                default:
                    break;
            }
            
            return $this->change_code($str);
            
        }
        
        protected function get_search_condition($name)
        {
            
            $input = $this->_ci->input->post($name);
            if(empty($input)) {
                
                if($this->_ci->session->userdata($this->_ci->router->class) == true) {
                    $res = "";
                    $session = $this->_ci->session->userdata($this->_ci->router->class);
                    isset($session[SS_KEY_SEARCH][$name]) ? $res = $session[SS_KEY_SEARCH][$name] : $res = "";
                    return $res;
                } else {
                    return "";
                }
                
            } else {
                return $input;
            }
            
        }


}

/* End of file Pdf_common.php */
/* Location: ./application/libraries/Pdf_common.php */