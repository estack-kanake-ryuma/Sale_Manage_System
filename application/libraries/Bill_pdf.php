<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH.'libraries/Pdf_common.php';

/**
 * Bill Pdf
 *
 * 請求書のPDFクラス
 *
 * @package	application
 * @subpackage	libraries
 * @author		Kita Yasuhiro
 * @link		http://www.datalyze.co.jp
 * @property MBFPDF $_pdf
 */
class Bill_pdf extends Pdf_common {

        private $m_list_st_y = 135;
        private $m_break_page_cnt = 18;
        private $m_max_page_length = 280;
        private $m_st_x = 15;
        private $_al_memo = array();
        private $_al_tax_money = array();
        private $_al_sum_money = array();
        private $_al_sum_tax = array();
        private $_bill_type = "";
        private $_image_font_id = array(582, 618, 634);
        
	/**
	 * コンストラクタ
	 *
	 * @package	application
	 * @subpackage controllers
	 * @author	Kita Yasuhiro
	 * @link	http://www.datalyze.co.jp
	 */
	public function __construct() {}
        
	/*
	* ---------------------------------------------------------------------------
	* 個別メソッド
	* ---------------------------------------------------------------------------
	*/

	/**
	 * PDF表示処理
	 *
	 * @access public
	 * @param  $data array
	 * @param  $type string
	 * @return void
	 * @author Kita Yasuhiro
	 */
	public function display($data, $type)
	{
            
            // 初期化
            $this->init_member_config($type);
            
            // PDF出力準備処理
            $this->pre_display();
            
            // 合計金額と合計消費税を計算
            $this->_compute_total_money($data);
            
            // HEADER作成
            $this->_disp_date = $data[0]->bill_date;
            $this->Header($data[0]);
            
            // 内容の編集
            $this->_set_bill_spec($data);
            
            if($data[0]->card_print_type == FLG_ON) {
                
                $this->_unit_page_no = 0;
                $this->m_list_st_y = 135;
                $this->m_break_page_cnt = 18;
                
                $this->_al_memo = array();
                $this->_al_tax_money = array();
                
                // 強制改ページ
                $this->_pdf->AddPage();
                
                // HEADER作成
                $this->Header($data[0], "card");
                
                // 内容の編集
                $this->_set_bill_spec($data);
                
            }
            
            // 表示終了処理
            $this->end_display($data[0]->bill_no);
	}

	/**
	 * 各種ヘッダーを生成
	 *
	 * @access public
	 * @param  array $info
	 * @param  string $type
	 * @return void
	 * @author Kita Yasuhiro
	 */
        function Header($info, $type="bill") {

            // テンプレート設定
            if($type == "bill") {
                $this->_pdf->setSourceFile(APPPATH.'pdf/bill_header.pdf');
            } else {
                $this->_pdf->setSourceFile(APPPATH.'pdf/card_header.pdf');
            }
            
            
            $iIndex = $this->_pdf->importPage(1);
            $this->_pdf->useTemplate($iIndex);
            
            // テンプレート共通項目を設定
            $this->set_header_common();
            
            // 請求書番号を設定
            $this->_set_bill_no($info->bill_no);
            
            // 得意先名
            $this->_pdf->SetFont(GOTHIC,'',13);
            $this->_pdf->SetXY($this->m_st_x, 68);
            //$this->_pdf->Cell(100, 5, $this->change_code($info->customer_name), "B", 0, "");
            
            $name = $info->customer_name;
            $name = mb_convert_kana($name, "ASKV");
            
            
            $on_height = 5;
            if(mb_strlen($name) >= 20) {
                $on_height = $on_height * 2;
            }
            
            // 得意先独自処理
            $id = $info->customer_id;
            if($id == "478") {
                $this->_pdf->SetFont(GOTHIC,'',11);
                $str =  "株式会社ｽﾀｲﾘﾝｸﾞﾗｲﾌ･ﾎｰﾙﾃﾞｨﾝｸﾞｽ ﾌﾟﾗｻﾞｽﾀｲﾙｶﾝﾊﾟﾆｰ";
                $this->_pdf->MultiCell(90, 5, $this->change_code($str), "B", "L");
                $this->_pdf->SetXY(105, 68);
                $this->_pdf->Cell(18, 5, $this->change_code("   御中"), "B", 0, "");
            } else {
                if(in_array($id, $this->_image_font_id)) {
                    // 画像文字の挿入(jpg)
                    $this->_pdf->Image(IMAGE_FONT_PATH.$id.'.jpg', 16, 68);
                    // 罫線のための文字数分の全角文字の文字列を作成して埋め込む
                    $name = '';
                }
                $this->_pdf->MultiCell(90, 5, $this->change_code($name), "B", "L");
                $this->_pdf->SetXY(105, 68);
                $this->_pdf->Cell(18, $on_height, $this->change_code("   御中"), "B", 0, "");
            }
            
            
            // 請求額文言
            if($type == "bill") {
                $this->_pdf->SetFont(GOTHIC,'',16);
                $this->_pdf->SetXY($this->m_st_x, 102);
                $this->_pdf->Cell(15, 4, $this->change_code("請求額"), "", 0, "L");
            }
            
            $x = 40;
            if($type == "card") {
                $x = 16;
            }
            
            // 合計金額
            $this->_pdf->SetFont(GOTHIC,'',14);
            $this->_pdf->SetXY($x, 102);
            $this->_pdf->Cell(40, 4, $this->change_code("￥".  money_sep(array_sum($this->_al_sum_money))."－"), "", 0, "R");
            
            $x = 50;
            if($type == "card") {
                $x = 27;
            }
            
            // 消費税額
            $this->_pdf->SetFont(GOTHIC,'',11);
            $this->_pdf->SetXY($x, 103);
            
            if($info->sum_tax == "") {
                $this->_pdf->Cell(67, 4, $this->change_code("（内消費税 \\0）"), "", 0, "R");
            } else {
                $this->_pdf->Cell(67, 4, $this->change_code("（内消費税 \\".money_sep(array_sum($this->_al_sum_tax))."）"), "", 0, "R");
            }
            
        }
        
	/**
	 * 合計金額計算処理
	 *
	 * @access public
	 * @param  array $data
	 * @return void
	 * @author Kita Yasuhiro
	 */
        private function _compute_total_money($data) {
            
            foreach ($data as $value) {
                
                $this->_al_sum_money[] = $value->in_tax_money;
                $this->_al_sum_tax[] = $value->tax;
                
            }
            
        }
        
	/**
	 * 請求書明細を設定
	 *
	 * @access public
	 * @param  array $data
	 * @return void
	 * @author Kita Yasuhiro
	 */
        private function _set_bill_spec($data) {
            
            // 表のタイトル行を設定
            $title_conf = $this->set_list_title($this->m_st_x, $this->m_list_st_y);
            
            // 明細行の線だけ引く
//            $this->_set_spec_line($title_conf);
            
            $y = $this->m_list_st_y + 7;
            $cnt = 0;
            $row = 1;
            
            foreach ($data as $val) {

                // 報告書Noの編集を行う
                if(!empty($val->report_eda_from)) {
                    if($val->report_eda_from == $val->report_eda_to) {
                        $val->report_no = $val->report_no."-".$val->report_eda_from;
                    } else {
                        $val->report_no = $val->report_no."(".$val->report_eda_from."-".$val->report_eda_to.")";
                    }
                }
                
                // 品名の編集を行う。
                if($val->tax_type == TAX_TYPE_IN_TAX) {
                    $val->goods_name .=  " (※消費税含む)";
                }
                $val->goods_name = $this->mb_wordwrap($val->goods_name, 21, "\n", true);
                
                $goods_row_length = (substr_count($val->goods_name, "\n") * $this->_list_height) + $this->_list_height;

				// 締日の請求書の場合
	            $memo_row_length = 0;
				if($this->_bill_type == "cutoff") {
					if(empty($val->unit_memo)) {
						$val->unit_memo_disp = slash_date($val->book_date)." ご報告";
					} else {
						$val->unit_memo_disp = slash_date($val->book_date)." ご報告\n".$val->unit_memo;
					}
				} else {
					$val->unit_memo_disp = $val->unit_memo;
				}

				// メモがあった場合次の行に表示
				if(!empty($val->unit_memo_disp)) {
					$cnt++;
					$memo_row_length = (substr_count($val->unit_memo_disp, "\n") * $this->_list_height) + $this->_list_height;
				}

                //$y += $this->_list_height;
                $this->_pdf->SetXY($this->m_st_x, $y);
                
                // 1ページに収まらない場合は改ページ
                $cnt++;
                if($y + $goods_row_length + $memo_row_length >= $this->m_max_page_length) {
					$y += $goods_row_length + $memo_row_length;
                    $cnt =0;
                    $this->_set_page_break($data, $y);
                }
                
                for($i = 0; $i < count($title_conf); $i++) {
                    
                    $disp_str = "";
                    if(isset($val->$title_conf[$i]['col_name'])) {
                        $disp_str = $this->get_disp_str($title_conf[$i]['type'], $val->$title_conf[$i]['col_name']);
                    } else {
                        $disp_str = "";
                    }
                    
                    // 請求書特有の表示制御
                    if($title_conf[$i]['col_name'] == 'no') $disp_str = $this->change_code($row);
                    
                    if($title_conf[$i]['col_name'] == 'no_tax_money' && $val->tax_type == TAX_TYPE_IN_TAX) {
                        $disp_str = "";
                    }
                    
                    if($title_conf[$i]['col_name'] == 'goods_name') {
                        $this->_pdf->MultiCell($title_conf[$i]['width'], $this->_list_height, $this->change_code($val->goods_name), 1, $title_conf[$i]['align']);
                        $this->_pdf->SetXY(111, $y);
                    } else {
                        $this->_pdf->Cell($title_conf[$i]['width'], $goods_row_length, $disp_str, 1, "", $title_conf[$i]['align']);
                    }
                    
                }

				$y += $goods_row_length;
				if(!is_null($val->unit_memo_disp) && $val->unit_memo_disp !== "") {
					$this->_pdf->SetXY($this->m_st_x, $y);
					$this->_pdf->MultiCell(189, $this->_list_height, $this->change_code($val->unit_memo_disp), 1, "L");
				}


                // 税込額を退避
                if(isset($this->_al_tax_money[$val->tax_group])) {
                    $this->_al_tax_money[$val->tax_group]['tax'] +=$val->tax;
                    $this->_al_tax_money[$val->tax_group]['money'] += $val->in_tax_money;
                } else {
                    $this->_al_tax_money[$val->tax_group]['tax'] = $val->tax;
                    $this->_al_tax_money[$val->tax_group]['money'] = $val->in_tax_money;
                    $this->_al_tax_money[$val->tax_group]['name'] = $val->group_name;
                }
                
                // 売上情報のメモを配列に退避
                $this->_al_memo[] = $val->sales_memo;
                
                // y座標の決定
                $y += $memo_row_length;
                
                
                $row++;
                
            }

            $this->_set_total_blk($data, $y, $cnt);
            
        }
	/**
	 * 備考と合計欄作成
	 * @access public
	 * @param  array $data
	 * @return void
	 * @author Kita Yasuhiro
	 */
        private function _set_total_blk($data, $y, $cnt) {
            
            // 合計を出力するスペースが足りなかったら改ページする
            if($y + ((count($this->_al_tax_money)) * 7)  >= $this->m_max_page_length) {
                $y = $this->m_list_st_y;
                $this->_set_page_break($data, $y, "total");
                $y = 30;
            } else {
                $y = $y+10;
            }
            
            // 入金種別の数分Loop
            $this->_pdf->SetFillColor(217, 217, 217);
            $this->_pdf->SetXY(144, $y);
            
            $total_tax = 0;
            $total_money = 0;
            foreach ($this->_al_tax_money as $val) {
                if(count($this->_al_tax_money) == 1) {
                    $this->_pdf->Cell(26, 7, $this->change_code("合計"), 1, "", "R", 1);
                } else {
                    $this->_pdf->Cell(26, 7, $this->change_code($val['name']), 1, "", "L", 1);
                }
                
                $this->_pdf->Cell(17, 7, $this->change_code(money_sep($val['tax'])), 1, "", "R");
                $this->_pdf->Cell(17, 7, $this->change_code(money_sep($val['money'])), 1, "", "R");
                
                $total_tax = $total_tax + $val['tax'];
                $total_money = $total_money + $val['money'];
                
                $this->_pdf->SetXY(144, $y+=7);
            }
            
            if(count($this->_al_tax_money) > 1) {
                $this->_pdf->Cell(26, 7, $this->change_code("合計"), 1, "", "R", 1);
                $this->_pdf->Cell(17, 7, $this->change_code(money_sep($total_tax)), 1, "", "R");
                $this->_pdf->Cell(17, 7, $this->change_code(money_sep($total_money)), 1, "", "R");
            }
            
            $this->_pdf->SetXY(144, $y+=7);

        }
        
	/**
	 * 改ページ処理
	 *
	 * @access public
	 * @param  array $data
	 * @return void
	 * @author Kita Yasuhiro
	 */
        private function _set_page_break($data, &$y, $type="")
        {
            // 改ページ
            $this->_pdf->AddPage();
            
            // 請求書No設定
            $this->_set_bill_no($data[0]->bill_no);
            
            // ページ番号設定
            $this->set_page_no();
            
            // リスト開始位置再設定
            $this->m_list_st_y = 30;
            $this->m_break_page_cnt = 35;
            
            
            // 改ページする条件再設定
            $this->_pdf->SetXY($this->m_st_x, $this->m_list_st_y);
            
            if($type == "") {
                $this->set_list_title($this->m_st_x, $this->m_list_st_y);

                $y = $this->m_list_st_y + $this->_list_height;
                $this->_pdf->SetXY($this->m_st_x, $y);
            }
            
        }
        
	/**
	 * 請求書番号設定
	 *
	 * @access public
	 * @param  $bill_no string
	 * @return void
	 * @author Kita Yasuhiro
	 */
        private function _set_bill_no($bill_no) {
            
            // 請求書番号を設定
            $this->_pdf->SetFont(GOTHIC,'',9);
            $this->_pdf->SetXY(153, 10);
            $this->_pdf->Cell(30, 4, $this->change_code("No．".$bill_no), "B", 0, "R");
            
        }


	/**
	 * 表示幅による表示文字の調整処理
	 *
	 * @access private
	 * @param $string string
	 * @param $width int
	 * @param $break string
	 * @param $cnt boolean
	 * @return string
	 */
        private function mb_wordwrap($string, $width=75, $break="\n", $cut = false) {
            
            if (!$cut) {
                $regexp = '#^(?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){'.$width.',}\b#U';
            } else {
                $regexp = '#^(?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){'.$width.'}#';
            }
            
            $string_length = mb_strlen($string, 'UTF-8');
            
            $cut_length = ceil($string_length / $width);
            $i = 1;
            $return = '';
            
            while ($i < $cut_length) {
                preg_match($regexp, $string, $matches);
                $new_string = $matches[0];
                $return .= $new_string.$break;
                $string = substr($string, strlen($new_string));
                $i++;
            }
            return $return.$string;
        }
        
	/**
	 * メンバ変数の初期化処理
	 *
	 * @access public
	 * @param  $type string
	 * @return void
	 * @author Kita Yasuhiro
	 */
        private function init_member_config($type) {
            
            $this->m_list_st_y = 135;
            $this->m_break_page_cnt = 18;
            $this->m_max_page_length = 280;
            $this->m_st_x = 15;
            $this->_al_memo = array();
            $this->_al_tax_money = array();
            $this->_al_sum_money = array();
            $this->_al_sum_tax = array();
            $this->_bill_type = $type;
            $this->_unit_page_no = 0;
            
        }


        
}

/* End of file Bill_pdf.php */
/* Location: ./application/libraries/Bill_pdf.php */