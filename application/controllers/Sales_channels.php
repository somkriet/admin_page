<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales_channels extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
		$this->load->library('langlib');
		$this->load->helper(array('form', 'url'));

        $this->CI = get_instance();
        $this->load->model('order_model');
        $this->load->model('customer_model');
        $this->load->model('product_model');
        
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
		// $data = array();


        if ($this->session->userdata('login') == TRUE) {
                // $this->load->view('home', $data);
            // echo "login";
             $sql = "SELECT * FROM sales_channels WHERE delete_flag = 1;";
            $data['sales_channels_data'] = $this->order_model->show_all_order($sql);

            // $this->template->set('title', 'order');
            $this->template->load('default_layout', 'contents' , 'sales_channels/show', $data);
            
        } else {

             echo "No login";
                $this->load->view('login');
        }

       
	}

	 public function change($type)
    {
        $this->langlib->chooseLang($type);// ใช้สำหรับเปลี่ยนภาษาในทุก ๆ controller

    }
}
