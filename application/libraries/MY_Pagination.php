<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * MY Pagination
 *
 * 独自のPaginationクラス
 *
 * @package    application
 * @subpackage libraries
 * @author        Kita Yasuhiro
 * @link        http://www.datalyze.co.jp
 */
class MY_Pagination extends CI_Pagination
{

    /**
     * コンストラクタ
     *
     * @access public
     * @author    Kita Yasuhiro
     */
    public function __construct($rules = array())
    {
        parent::__construct($rules);
    }

    /**
     * ページリンク生成処理
     *
     * @access public
     * @param  string $total
     * @param  int $per_page
     * @return string $per_page
     * @author Kita Yasuhiro
     */
    public function create_page_link($total, $per_page = PER_PAGE_CNT)
    {
        $ci =& get_instance();

        $url = "/" . $ci->uri->segment(1) . "/" . $ci->uri->segment(2) . "/" . "index";

        $config['uri_segment'] = 4;
        $config['base_url'] = $url;
        $config['total_rows'] = $total;
        $config['per_page'] = $per_page;
        $config['first_tag_open'] = '<li>';
        $config['first_link'] = '<<最初';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_link'] = '最後>>';
        $config['last_tag_close'] = '</li>';
        $config['full_tag_open'] = '<ul class="page_link">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li><strong>';
        $config['cur_tag_close'] = '</strong></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';

        parent::initialize($config);

        return parent::create_links($config);
    }
}

/* End of file MY_Pagination.php */
/* Location: ./application/libraries/MY_Pagination.php */