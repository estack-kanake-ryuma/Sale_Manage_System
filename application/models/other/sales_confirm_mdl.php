<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sales_confirm_mdl extends MY_Model
{

    /**
     * コンストラクタ
     *
     * @package    application
     * @subpackage    model/db
     * @author        Kita Yasuhiro
     * @link        http://www.datalyze.co.jp
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 売上管理テーブル取得
     *
     * @access    public
     * @return    array
     * @author    Kita Yasuhiro
     */
    public function get_sales_mng($id)
    {
        // テーブル設定
        $this->m_tbl_name = T_SALES_MNG;

        // Prefix 設定
        $this->m_prefix = "sales";

        $this->db->select("sum(sales.sum_money) as sum_money");
        $this->db->select("sum(sales.sum_no_tax) as sum_no_tax");
        $this->db->select("sum(sales.sum_tax) as sum_tax");

        // WHERE句作成
        $this->db->where("sales_mng_id in (" . $id . ")");

        return $this->select();

    }

    /**
     * 売上詳細テーブル取得
     *
     * @access    public
     * @return    array
     * @author    Kita Yasuhiro
     */
    public function get_sales_detail($id)
    {
        // テーブル設定
        $this->m_tbl_name = T_SALES_DETAIL;

        $this->m_prefix = "det";

        $this->db->select("det.sales_detail_id");
        $this->db->select("det.sales_mng_id");
        $this->db->select("det.report_no");
        $this->db->select("det.goods_name");
        $this->db->select("det.cnt");
        $this->db->select("det.unit");
        $this->db->select("det.unit_price");
        $this->db->select("det.tax_type");
        $this->db->select("(CASE WHEN det.tax is null THEN 0 ELSE tax END) as tax");
        $this->db->select("det.no_tax_money");
        $this->db->select("det.unit_memo");
        $this->db->select("mng.book_date");
        $this->db->select("(SELECT item_name FROM " . M_SYS_GENERAL_NAME . " WHERE group_cd='" . GRP_TAX_TYPE . "' AND item_cd=det.tax_type) as tax_type_name ");

        $this->db->join(T_SALES_MNG . " mng", "det.sales_mng_id=mng.sales_mng_id", "LEFT");

        // WHERE句作成
        $this->db->where("det.sales_mng_id in (" . $id . ")");

        return $this->select();

    }


}

/* End of file sales_confirm_mdl.php */
/* Location: ./application/models/other/sales_confirm_mdl.php */