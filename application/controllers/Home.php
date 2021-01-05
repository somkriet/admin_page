<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
		$this->load->library('langlib');
		$this->load->helper(array('form', 'url'));

        $this->CI = get_instance();
        $this->load->model('customer_model');
        // $this->load->library("pagination");

        if ($this->session->userdata('lang') == 'english') {
            $lang = 'english';
            $this->session->set_userdata('lang', $lang);
        }else{
        	$lang = 'thailand';
            $this->session->set_userdata('lang', $lang);
        }

        $data_user = $this->session->userdata('lang');

        $this->lang->load($data_user,$data_user);
 
    }
    
	public function index()
	{
        
		header("Access-Control-Allow-Origin: *");
		$data = array();
        $date_pay = date('Y-m-d');
        $date_pay1 = $date_pay.' 00:00:00';
        $date_pay2 = $date_pay.' 23:59:00';

        $month = date('m');

        $year = date('Y');

        $today_sales = "SELECT sum(total_price) as 'today_sales'
                        FROM order_table 
                        WHERE date_pay  BETWEEN '".$date_pay1."' AND '".$date_pay2."'
                        AND delete_flag = 1;";
        $data['today_sales_data'] = $this->customer_model->show_all_customer($today_sales);



        $monthly_sales = "SELECT sum(total_price) as 'monthly_sales'
                        FROM order_table 
                        WHERE month(date_pay) = '".$month."' 
                        AND delete_flag = 1;";
        $data['monthly_sales_data'] = $this->customer_model->show_all_customer($monthly_sales);


        $year_sales = "SELECT sum(total_price) as 'year_sales'
                        FROM order_table 
                        WHERE year(date_pay) = '".$year."' 
                        AND delete_flag = 1;";
        $data['year_sales_data'] = $this->customer_model->show_all_customer($year_sales);


        //  $chart = "SELECT total_price as 'totol', date_pay as 'datesave'
        //                 FROM order_table 
        //                 WHERE delete_flag = 1;";
        // $data['resultchart'] = $this->customer_model->show_all_customer($chart);



         $chart = "SELECT 
                    SUM(IF(MONTH(`date_pay`)=1,`total_price`,NULL)) AS `a1`,
                    SUM(IF(MONTH(`date_pay`)=2,`total_price`,NULL)) AS `a2`,
                    SUM(IF(MONTH(`date_pay`)=3,`total_price`,NULL)) AS `a3`,
                    SUM(IF(MONTH(`date_pay`)=4,`total_price`,NULL)) AS `a4`,
                    SUM(IF(MONTH(`date_pay`)=5,`total_price`,NULL)) AS `a5`,
                    SUM(IF(MONTH(`date_pay`)=6,`total_price`,NULL)) AS `a6`,
                    SUM(IF(MONTH(`date_pay`)=7,`total_price`,NULL)) AS `a7`,
                    SUM(IF(MONTH(`date_pay`)=8,`total_price`,NULL)) AS `a8`,
                    SUM(IF(MONTH(`date_pay`)=9,`total_price`,NULL)) AS `a9`,
                    SUM(IF(MONTH(`date_pay`)=10,`total_price`,NULL)) AS `a10`,
                    SUM(IF(MONTH(`date_pay`)=11,`total_price`,NULL)) AS `a11`,
                    SUM(IF(MONTH(`date_pay`)=12,`total_price`,NULL)) AS `a12`
                    FROM `order_table`
                    WHERE year(date_pay) = '".$year."' 
                    AND delete_flag = 1;";
        $data['resultchart'] = $this->customer_model->show_all_customer($chart);
 // WHERE year(date_pay) = '".$year."' 


//SELECT
// MONTH(`date_pay`) AS `month`,
// SUM(IF(MONTH(`date_pay`)=1,`total_price`,NULL)) AS `1`,
// SUM(IF(MONTH(`date_pay`)=2,`total_price`,NULL)) AS `2`,
// SUM(IF(MONTH(`date_pay`)=3,`total_price`,NULL)) AS `3`,
// SUM(IF(MONTH(`date_pay`)=4,`total_price`,NULL)) AS `4`,
// SUM(IF(MONTH(`date_pay`)=5,`total_price`,NULL)) AS `5`,
// SUM(IF(MONTH(`date_pay`)=6,`total_price`,NULL)) AS `6`,
// SUM(IF(MONTH(`date_pay`)=7,`total_price`,NULL)) AS `7`,
// SUM(IF(MONTH(`date_pay`)=8,`total_price`,NULL)) AS `8`,
// SUM(IF(MONTH(`date_pay`)=9,`total_price`,NULL)) AS `9`,
// SUM(IF(MONTH(`date_pay`)=10,`total_price`,NULL)) AS `10`,
// SUM(IF(MONTH(`date_pay`)=11,`total_price`,NULL)) AS `11`,
// SUM(IF(MONTH(`date_pay`)=12,`total_price`,NULL)) AS `12`
// FROM `order_table`
// WHERE year(date_pay) = '".$year."' 
// AND delete_flag = 1;

        // print_r($data); exit();


        //          SELECT YEAR(date) as SalesYear,
//          MONTH(date) as SalesMonth,
//          SUM(Price) AS TotalSales
//     FROM Sales
// GROUP BY YEAR(date), MONTH(date)
// ORDER BY YEAR(date), MONTH(date)
// where month(soledate) = '12' and year(soledate) = '2009' อันนี้เดือน

        // 2020-08-26 13:49:49

        // $test = date('Y-m-d', strtotime('-3 Days'));//2020-09-05

        // $diff = date_diff(date_create(date('Y-m-d')), date_create($test));

        // print_r($diff);


		$this->template->set('title', 'Home');
		$this->template->load('default_layout', 'contents' , 'home', $data);

	}  
	public function about()
	{
		$data = array();
		$this->template->set('title', 'about');
		$this->template->load('default_layout', 'contents' , 'about', $data);
	}

	
	 public function change($type)
    {
        $this->langlib->chooseLang($type);// ใช้สำหรับเปลี่ยนภาษาในทุก ๆ controller

    }
}
