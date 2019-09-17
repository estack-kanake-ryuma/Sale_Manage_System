<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Check_rule
 *
 * validationのルール作成クラス
 * 各画面にあったルールのみ設定を行う。
 *
 * @package	application
 * @subpackage	libraries
 * @author		Kita Yasuhiro
 * @link		http://www.datalyze.co.jp
 */
class Check_rule {

    private $m_customer = 'customer';
    private $m_goods = 'goods';
    private $m_depart = 'depart';
    private $m_institute = 'institute';
    private $m_handler = 'handler';
    private $m_abstract = 'abstract';
    private $m_bank = 'bank';
    private $m_fix_memo = 'fix_memo';
    private $m_user = 'user';
    
    private $m_class = "";
    /**
        * コンストラクタ
        *
        * @access public
        * @author	Kita Yasuhiro
    */
    public function __construct() {}
    
    /**
        * ルールを設定する
        *
        * @access public
        * @author	Kita Yasuhiro
    */
    public function set_rule($class) 
    {
        var_dump($class);
        exit;
        
        $config = array();
        
        // ルールを設定するキーを設定
        $rule = $this->_get_key_str();
        $config[0][$rule] = array();
        
        // 個別ルール設定
        
        array(
                array('field' => 'login_id', 'label' => 'ログインID', 'rules' => 'alpha_dash|callback_check_login_id')
        );
        
        
        var_dump($this->m_url);
        exit;
        
        

        
        return $config;
        
        
    }
    
    /**
        * ルールのキーを設定
        *
        * @access public
        * @author Kita Yasuhiro
    */
    private function _get_key_str() 
    {
        
        $sRule = str_replace("_input", "", $this->m_class);
        $sRule = str_replace("_list", "", $sRule);
        
        return $sRule;
    }
    
    /**
        * 個別ルール設定
        *
        * @access public
        * @author Kita Yasuhiro
    */
    private function _set_check_rule() {
        
    }
    
    private function _set_login_rule() {
        
        $login = array('field' => 'login_id', 'label' => 'ログインID', 'rules' => 'alpha_dash|callback_check_login_id');
        
        
    }
    
    

}

/* End of file Pdf.php */
/* Location: ./application/libraries/Pdf.php */
