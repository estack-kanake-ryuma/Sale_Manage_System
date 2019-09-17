<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * calc helper
 *
 * CSV作成用ライブラリ
 *
 * @package	application
 * @subpackage helpers
 * @author		Kita Yasuhiro
 * @link		http://www.datalyze.co.jp
 */

if ( ! function_exists('make_csv_data'))
{
	/**
	 * make_csv_data
	 *
	 * 合計金額から内消費税を算出する。
	 * 小数点以下は必ず切り捨てます。
	 *
	 * @access	public
	 * @param	string $value
	 * @param	float $tax
	 * @return	string
	 */
	function make_csv_data($ary, $delim = ",", $newline = "\n", $enclosure = '"') {
            
            $out = '';

            $out = rtrim($out);
            
            // 行の末尾のカンマを削除
            $out = rtrim($out, $delim);
            $out .= $newline;

            // Next blast through the result array and build out the rows
            foreach ($ary as $row) {

                foreach ($row as $item) {
                    $out .= $enclosure.str_replace($enclosure, $enclosure.$enclosure, $item).$enclosure.$delim;
                }
                $out = rtrim($out);
                // 行の末尾のカンマを削除
                $out = rtrim($out, $delim);
                $out .= $newline;
            }

            // 最終行に改行を削除
            $out = rtrim($out, $newline);
            
            return $out;
            
            
            
            
	}
}

/* End of file calc_helper.php */
/* Location: ./application/helpers/calc_helper.php */
