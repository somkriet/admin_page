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

        $today_sales = "SELECT total_price 
                        FROM order_table 
                        WHERE date_pay  BETWEEN '".$date_pay1."' AND '".$date_pay2."'
                        AND delete_flag = 1;";
        $data['today_sales_data'] = $this->customer_model->show_all_customer($today_sales);

        // print_r($data); exit();

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
