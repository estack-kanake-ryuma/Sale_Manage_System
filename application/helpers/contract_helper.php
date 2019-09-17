<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Contract helper
 *
 * 契約情報処理のhelperファイル
 *
 * @package	application
 * @subpackage helpers
 * @author		Kita Yasuhiro
 * @link		http://www.datalyze.co.jp
 */

if ( ! function_exists('get_contract_status_html'))
{
	/**
	 * Get Contract Status Html
	 *
	 * 契約情報の登録状態の表示HTMLを取得する
	 *
	 * @access	public
	 * @param	string $value
	 * @param	string $status_str
	 * @return	string
	 */
	function get_contract_status_html($value='', $status_str='')
	{
		$html = '<span class="#class#">#msg#</span>';
		switch ($value)
		{
			case '';
				$html = str_replace('#class#', 'no_regist', $html);
				$html = str_replace('#msg#', '未登録', $html);
				break;
			case STS_TRIAL;
				$html = str_replace('#class#', 'trial_regist', $html);
				$html = str_replace('#msg#', '仮登録中', $html);
				break;
			default:
				$html = str_replace('#class#', 'registed', $html);
				if(empty($status_str))
				{
					$html = str_replace('#msg#', '登録済み', $html);
				}
				else
				{
					$html = str_replace('#msg#', '登録済み('.$status_str.')', $html);
				}
				break;
		}

		return $html;
	}
}

/* End of file contract_helper.php */
/* Location: ./application/helpers/contract_helper.php */