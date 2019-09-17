<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH.'libraries/Pdf_common.php';

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
class Abstract_sum_pdf extends Pdf_common {
        
        private $m_list_st_y = 65;
        private $m_break_page_cnt = 28;
        private $m_list_st_x = 15;
        
        private $al_depart_money = array();                     // 部門合計額
        private $al_depart_tax = array();                       // 部門合計消費税
        private $al_depart_no_tax_money = array();              // 部門税抜き額
        
        private $al_abstract_money = array();                   // 摘要合計額
        private $al_abstract_tax = array();                     // 摘要合計消費税
        private $al_abstract_no_tax_money = array();            // 摘要合計税抜き額

        private $al_outside_money = array();                   // 摘要合計額
        private $al_outside_tax = array();                     // 摘要合計消費税
        private $al_outside_no_tax_money = array();            // 摘要合計税抜き額

        private $al_group_money = array();                   // 摘要合計額
        private $al_group_tax = array();                     // 摘要合計消費税
        private $al_group_no_tax_money = array();            // 摘要合計税抜き額

        
        private $m_list_cnt = 0;
    
	/**
	 * コンストラクタ
	 *
	 * @package	application
	 * @subpackage controllers
	 * @author	Kita Yasuhiro
	 * @link	http://www.datalyze.co.jp
	 */
	public function __construct(){}

	/*
	* ---------------------------------------------------------------------------
	* 個別メソッド
	* ---------------------------------------------------------------------------
	*/

	/**
	 * PDF表示処理
	 *
	 * @access public
	 * @param  array $output
	 * @param  string $save_file
	 * @return void
	 * @author Kita Yasuhiro
	 */
	public function display($data)
	{
            
            // PDF出力準備処理
            $this->pre_display();
            
            // HEADER作成
            $this->Header($data[0]);
            
            // 明細作成
            $this->_set_abstract_spec($data);
            
            // PDF出力終了処理
            $from = $this->get_search_condition('book_date_from');
            $to = $this->get_search_condition('book_date_to');
            
            $fname = 'uriagesyukei_tekiyou_'.str_replace("/", "", $from).'_'.str_replace("/", "", $to);
            
            $this->end_display($fname);
            
	}

	/**
	 * 各種ヘッダーを生成
	 *
	 * @access public
	 * @param  array $output
	 * @param  string $save_file
	 * @return void
	 * @author Kita Yasuhiro
	 */
        function Header($info) {
  
            // テンプレート設定
            $this->_pdf->setSourceFile(APPPATH.'pdf/list_header.pdf');
            
            $iIndex = $this->_pdf->importPage(1);
            $this->_pdf->useTemplate($iIndex);
            
            $this->set_header_common();

            // タイトルを設定
            $this->set_title($info->title);
            
            // 範囲を設定
            $this->set_span();
            
            // 表示条件を設定
            $this->set_condition("sales_sum_abstract_order");
            
            // セグメントを設定
            $this->_pdf->SetFont(GOTHIC,'',13);
            $this->_pdf->text(16, 53, $this->change_code($info->abstract_name));
            
        }

	/**
	 * 売上明細表を設定
	 *
	 * @access public
	 * @param  array $data
	 * @return void
	 * @author Kita Yasuhiro
	 */
        private function _set_abstract_spec($data) {
            
            // 表のタイトル行を設定
            $title_conf = $this->set_list_title($this->m_list_st_x, $this->m_list_st_y, "sales_sum_abstract");
            
            $y = $this->m_list_st_y + $this->_list_height;
            
            $row = 1;
            foreach ($data as $key=>$val) {
                
                $data[$key]->disp_depart = $val->institute_name." ".$val->depart_name;
                $data[$key]->disp_depart_id = $val->institute_id.",".$val->depart_id;
                
                $this->_pdf->SetXY($this->m_list_st_x, $y+=$this->_list_height);
                
                // 改ページ
                $this->_set_page_break($data, $key, $y);
                
                // 部門名称を設定
                $this->_set_depart_ctrl($data, $key, $y);

                // 摘要計設定
                $this->_set_abstract_ctrl($data, $key, $y);
                
                for($i=0; $i<count($title_conf); $i++) {
                    
                    $disp_str = "";
                    if(isset($val->$title_conf[$i]['col_name'])) {
                        $disp_str = $this->get_disp_str($title_conf[$i]['type'], $val->$title_conf[$i]['col_name']);
                    } else {
                        $disp_str = "";
                    }
                    
                    if($title_conf[$i]['col_name'] != "") {
                        $this->_pdf->Cell($title_conf[$i]['width'], $this->_list_height, $disp_str, 1, "", $title_conf[$i]['align']);
                    }
                    
                }
                
                // 各種サマリー
                $this->_sum_money($val);
                
                $row++;
            }
            
            // 摘要名称を設定
            $this->_set_depart_ctrl($data, count($data), $y, true);

            // 部門計設定
            $this->_set_abstract_ctrl($data, count($data), $y, true);
            
        }
        
        /**
         * 売上明細表を設定
         *
         * @access public
         * @param  array $data
         * @return void
         * @author Kita Yasuhiro
         */
        private function _set_depart_ctrl($data, $key, &$y, $last_flg = false)
        {
            
            if($last_flg) {
                $this->_pdf->SetXY($this->m_list_st_x, $y+=$this->_list_height);
                $this->_pdf->Cell(80, $this->_list_height, $this->change_code("     小 計 "), 1, "", "L");
                $this->_pdf->Cell(23, $this->_list_height, $this->change_code(money_sep(array_sum($this->al_depart_no_tax_money))), 1, "", "R");
                $this->_pdf->Cell(23, $this->_list_height, $this->change_code(money_sep(array_sum($this->al_depart_tax))), 1, "", "R");
                $this->_pdf->Cell(23, $this->_list_height, $this->change_code(money_sep(array_sum($this->al_depart_money))), 1, "", "R");
                return;
            }
            
            if($key == 0) {
                $this->_pdf->Cell(149, $this->_list_height, $this->change_code("● ".$data[$key]->disp_depart), 1, "", "L");
                $this->_pdf->SetXY($this->m_list_st_x, $y+=7);
                
                $this->m_list_cnt++;
            } else {
                
                if($data[$key]->disp_depart_id == $data[$key-1]->disp_depart_id && $data[$key]->abstract_id == $data[$key-1]->abstract_id) {
                    
                } else {
                    $this->_pdf->Cell(80, $this->_list_height, $this->change_code("     小 計 "), 1, "", "L");
                    $this->_pdf->Cell(23, $this->_list_height, $this->change_code(money_sep(array_sum($this->al_depart_no_tax_money))), 1, "", "R");
                    $this->_pdf->Cell(23, $this->_list_height, $this->change_code(money_sep(array_sum($this->al_depart_tax))), 1, "", "R");
                    $this->_pdf->Cell(23, $this->_list_height, $this->change_code(money_sep(array_sum($this->al_depart_money))), 1, "", "R");
                    
                    $this->_pdf->SetXY($this->m_list_st_x, $y+=7);
                    
                    $this->al_depart_money = array();
                    $this->al_depart_no_tax_money = array();
                    $this->al_depart_tax = array();
                    
                    $this->m_list_cnt++;
                    
                    if($data[$key]->abstract_id == $data[$key-1]->abstract_id) {
                        $this->_pdf->Cell(149, $this->_list_height, $this->change_code("● ".$data[$key]->disp_depart), 1, "", "L");
                        $this->_pdf->SetXY($this->m_list_st_x, $y+=7);
                    }
                    
                }
                
            }

        }
        
        /**
         * 部門計を設定
         *
         * @access public
         * @param  array $data
         * @return void
         * @author Kita Yasuhiro
         */
        private function _set_abstract_ctrl($data, $key, &$y, $last_flg = false)
        {
            
            if($last_flg) {
                $this->_pdf->SetXY($this->m_list_st_x, $y+=$this->_list_height);
                $this->_pdf->Cell(80, $this->_list_height, $this->change_code("【一般外部　計】"), 1, "", "R");
                $this->_pdf->Cell(23, $this->_list_height, $this->change_code(money_sep(array_sum($this->al_outside_no_tax_money))), 1, "", "R");
                $this->_pdf->Cell(23, $this->_list_height, $this->change_code(money_sep(array_sum($this->al_outside_tax))), 1, "", "R");
                $this->_pdf->Cell(23, $this->_list_height, $this->change_code(money_sep(array_sum($this->al_outside_money))), 1, "", "R");
                $this->_pdf->SetXY($this->m_list_st_x, $y+=7);

                $this->_pdf->Cell(80, $this->_list_height, $this->change_code("【大丸グループ　計】"), 1, "", "R");
                $this->_pdf->Cell(23, $this->_list_height, $this->change_code(money_sep(array_sum($this->al_group_no_tax_money))), 1, "", "R");
                $this->_pdf->Cell(23, $this->_list_height, $this->change_code(money_sep(array_sum($this->al_group_tax))), 1, "", "R");
                $this->_pdf->Cell(23, $this->_list_height, $this->change_code(money_sep(array_sum($this->al_group_money))), 1, "", "R");
                $this->_pdf->SetXY($this->m_list_st_x, $y+=7);
                
                $this->_pdf->Cell(80, $this->_list_height, $this->change_code("【".$data[$key-1]->abstract_name."　計】"), 1, "", "R");
                $this->_pdf->Cell(23, $this->_list_height, $this->change_code(money_sep(array_sum($this->al_abstract_no_tax_money))), 1, "", "R");
                $this->_pdf->Cell(23, $this->_list_height, $this->change_code(money_sep(array_sum($this->al_abstract_tax))), 1, "", "R");
                $this->_pdf->Cell(23, $this->_list_height, $this->change_code(money_sep(array_sum($this->al_abstract_money))), 1, "", "R");
                $this->_pdf->SetXY($this->m_list_st_x, $y+=7);

                return;
            }
            
            if($key == 0) {
                
                
            } else {
                
                if($data[$key]->abstract_id == $data[$key-1]->abstract_id) {
                    
                } else {
                    
                    $this->_pdf->Cell(80, $this->_list_height, $this->change_code("【一般外部　計】"), 1, "", "R");
                    $this->_pdf->Cell(23, $this->_list_height, $this->change_code(money_sep(array_sum($this->al_outside_no_tax_money))), 1, "", "R");
                    $this->_pdf->Cell(23, $this->_list_height, $this->change_code(money_sep(array_sum($this->al_outside_tax))), 1, "", "R");
                    $this->_pdf->Cell(23, $this->_list_height, $this->change_code(money_sep(array_sum($this->al_outside_money))), 1, "", "R");
                    $this->_pdf->SetXY($this->m_list_st_x, $y+=7);
                    
                    $this->_pdf->Cell(80, $this->_list_height, $this->change_code("【大丸グループ　計】"), 1, "", "R");
                    $this->_pdf->Cell(23, $this->_list_height, $this->change_code(money_sep(array_sum($this->al_group_no_tax_money))), 1, "", "R");
                    $this->_pdf->Cell(23, $this->_list_height, $this->change_code(money_sep(array_sum($this->al_group_tax))), 1, "", "R");
                    $this->_pdf->Cell(23, $this->_list_height, $this->change_code(money_sep(array_sum($this->al_group_money))), 1, "", "R");
                    $this->_pdf->SetXY($this->m_list_st_x, $y+=7);
                    
                    $this->_pdf->Cell(80, $this->_list_height, $this->change_code("【".$data[$key-1]->abstract_name."　計】"), 1, "", "R");
                    $this->_pdf->Cell(23, $this->_list_height, $this->change_code(money_sep(array_sum($this->al_abstract_no_tax_money))), 1, "", "R");
                    $this->_pdf->Cell(23, $this->_list_height, $this->change_code(money_sep(array_sum($this->al_abstract_tax))), 1, "", "R");
                    $this->_pdf->Cell(23, $this->_list_height, $this->change_code(money_sep(array_sum($this->al_abstract_money))), 1, "", "R");
                    $this->_pdf->SetXY($this->m_list_st_x, $y+=7);
                    
                    
                    $this->_set_page_break($data, $key, $y, TRUE);
                    $this->_pdf->Cell(149, $this->_list_height, $this->change_code("● ".$data[$key]->disp_depart), 1, "", "L");
                    $this->_pdf->SetXY($this->m_list_st_x, $y+=7);
                    
                    $this->al_outside_no_tax_money = array();
                    $this->al_outside_tax = array();
                    $this->al_outside_money = array();
                    
                    $this->al_group_no_tax_money = array();
                    $this->al_group_tax = array();
                    $this->al_group_money = array();

                    $this->al_abstract_no_tax_money = array();
                    $this->al_abstract_tax = array();
                    $this->al_abstract_money = array();
                    
                    $this->al_depart_no_tax_money = array();
                    $this->al_depart_tax = array();
                    $this->al_depart_money = array();

                }
                
            }

        }
        
	/**
	 * 改ページ処理
	 *
	 * @access public
	 * @param  array $data
	 * @return void
	 * @author Kita Yasuhiro
	 */
        private function _set_page_break($data, $key, &$y, $auto_break_flg=false)
        {
            
            if($this->m_list_cnt == $this->m_break_page_cnt || $auto_break_flg == true) {
                
                $this->m_list_cnt=0;
                
                // 改ページ
                $this->_pdf->AddPage();

                // HEADER入れる
                $this->Header($data[$key]);

                $this->_pdf->SetFont(GOTHIC,'',7);

                $this->set_list_title($this->m_list_st_x, $this->m_list_st_y, "sales_sum_abstract");
                
                $y = $this->m_list_st_y + $this->_list_height;
                $this->_pdf->SetXY($this->m_list_st_x, $y+=$this->_list_height);
                
            } else {
                $this->m_list_cnt++;
            }
            
        }
        
	/**
	 * 改ページ処理
	 *
	 * @access public
	 * @param  array $data
	 * @return void
	 * @author Kita Yasuhiro
	 */
        private function _sum_money($info) {
            
            $this->al_abstract_money[] = $info->sum_money;
            $this->al_abstract_no_tax_money[] = $info->sum_no_tax;
            $this->al_abstract_tax[] = $info->sum_tax;

            $this->al_depart_money[] = $info->sum_money;
            $this->al_depart_no_tax_money[] = $info->sum_no_tax;
            $this->al_depart_tax[] = $info->sum_tax;
            
            if($info->customer_type == CUSTOMER_TYPE_IPPAN){
                $this->al_outside_money[] = $info->sum_money;
                $this->al_outside_no_tax_money[] = $info->sum_no_tax;
                $this->al_outside_tax[] = $info->sum_tax;
            } else {
                $this->al_group_money[] = $info->sum_money;
                $this->al_group_no_tax_money[] = $info->sum_no_tax;
                $this->al_group_tax[] = $info->sum_tax;
            }
            
        }
        
}

/* End of file Pdf.php */
/* Location: ./application/libraries/Pdf.php */