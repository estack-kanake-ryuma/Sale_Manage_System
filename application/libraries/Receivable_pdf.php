<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH.'libraries/Pdf_common.php';

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
class Receivable_pdf extends Pdf_common {
        
        private $m_list_st_y = 45;
        private $m_break_page_cnt = 20;
        private $m_list_st_x = 5;
        private $m_list_cnt = 0;
    
	/**
	 * コンストラクタ
	 *
	 * @package	application
	 * @subpackage controllers
	 * @author	Kita Yasuhiro
	 * @link	http://www.datalyze.co.jp
	 */
	public function __construct(){
            $this->layout = "L";
        }

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
            
            // 内容の編集
            $this->_set_sales_spec($data);
            
            // PDF出力終了処理  
            $date = $this->get_search_condition('target_month');
            $retention = $this->get_search_condition('retention');
            
            $fname = 'urikakekingetsurei_'.str_replace("/", "", $date).'_'.$retention;
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
        function Header() {
  
            // テンプレート設定
            $this->_pdf->setSourceFile(APPPATH.'pdf/side_header.pdf');
            
            $iIndex = $this->_pdf->importPage(1);
            $this->_pdf->useTemplate($iIndex);
            
            $this->set_header_common();
            
            $this->set_receivable_condition();

            // タイトルを設定
            $this->set_title("売掛金月齢表");
            
            // 範囲を設定
            $this->set_target_month();
            
        }

	/**
	 * 売上明細表を設定
	 *
	 * @access public
	 * @param  array $data
	 * @return void
	 * @author Kita Yasuhiro
	 */
        private function _set_sales_spec($data) {
            
            // 表のタイトル行を設定
            $title_conf = $this->set_list_title($this->m_list_st_x, $this->m_list_st_y, "receivable_list");
            
            $y = $this->m_list_st_y + 7;
            
            foreach ($data as $val) {
                
                $this->_set_page_break($y);
                $this->_pdf->SetXY($this->m_list_st_x, $y+=$this->_list_height);
                $this->_pdf->Cell(287, $this->_list_height, $this->change_code($val['customer_disp_name']), 1, "", "L");
                
                foreach ($val['depart_info'] as $key=> $depart) {
                    
                    $this->_set_page_break($y);
                    
                    $this->_pdf->SetXY($this->m_list_st_x, $y+=$this->_list_height);
                    for($i=0; $i<count($title_conf); $i++) {
                        
                        if($i == 0) {
                            $disp_str = $this->get_disp_str($title_conf[$i]['type'], $depart["disp_depart_name"]);
                            $this->_pdf->Cell($title_conf[$i]['width'], $this->_list_height, $disp_str, 1, "", "R");
                            continue;
                        }
                        
                        $disp_str = "";
                        if(isset($depart[$title_conf[$i]['col_name']])) {
                            $disp_str = $this->get_disp_str($title_conf[$i]['type'], $depart[$title_conf[$i]['col_name']]);
                        } else {
                            $disp_str = $this->change_code("0");
                        }

                        if($title_conf[$i]['col_name'] != "") {
                            $this->_pdf->Cell($title_conf[$i]['width'], $this->_list_height, $disp_str, 1, "", $title_conf[$i]['align']);
                        }
                    }
                    
                    // 得意先の最後になったら
                    if(($key + 1) == count($val['depart_info'])) {
                        $this->_set_page_break($y);
                        $this->_pdf->SetXY($this->m_list_st_x, $y+=$this->_list_height);
                        $this->_pdf->Cell(80, $this->_list_height, $this->change_code("【".$val['customer_disp_name']." 　計】"), 1, "", "R");
                        for($i=1; $i<count($title_conf); $i++) {
                            $disp_str = "";
                            if(isset($val[$title_conf[$i]['col_name']])) {
                                $disp_str = $this->get_disp_str($title_conf[$i]['type'], $val[$title_conf[$i]['col_name']]);
                            }   
                            if($title_conf[$i]['col_name'] != "") {
                                $this->_pdf->Cell($title_conf[$i]['width'], $this->_list_height, $disp_str, 1, "", $title_conf[$i]['align']);
                            }
                        }
                        
                    }
                    
                }
                
//                $row++;
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
        private function _set_page_break(&$y, $auto_break_flg=false)
        {
            
            if($this->m_list_cnt == $this->m_break_page_cnt || $auto_break_flg == true) {
                
                $this->m_list_cnt=0;
                
                // 改ページ
                $this->_pdf->AddPage();

                // HEADER入れる
                $this->Header();

                $this->_pdf->SetFont(GOTHIC,'',7);

                $this->set_list_title($this->m_list_st_x, $this->m_list_st_y, "receivable_list");
                
                $y = $this->m_list_st_y;
                $this->_pdf->SetXY($this->m_list_st_x, $y+=$this->_list_height);
                
            } else {
                $this->m_list_cnt++;
            }
            
        }
        
}

/* End of file Pdf.php */
/* Location: ./application/libraries/Pdf.php */