<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * MY Input
 *
 * 独自のInputクラス
 *
 * @package	application
 * @subpackage libraries
 * @author	Kita Yasuhiro
 * @link	http://www.datalyze.co.jp
 */
class MY_Input extends CI_Input {

	/**
	 * コンストラクタ
	 *
	 * @access public
	 * @author	Kita Yasuhiro
	 */
	public function __construct($rules = array())
	{
		parent::__construct($rules);
	}

	/**
	* Fetch an item from the POST array
	*
	* @access	public
	* @param	string $index
	* @param	bool $xss_clean
	* @return	string
	*/
	function post($index = NULL, $xss_clean = FALSE)
	{
		$data = parent::post($index, $xss_clean);
		if($data === false)
		{
			return '';
		}

		return $data;
	}
}

/* End of fileMY_Input.php */
/* Location: ./application/core/MY_Input.php */