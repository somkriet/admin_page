<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
		$this->load->library('langlib');
		$this->load->helper(array('form', 'url'));

        $this->CI = get_instance();
        $this->load->model('order_model');
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

        $sql = "SELECT * FROM tb_order WHERE delete_flag = 1;";
        $data['order_data'] = $this->order_model->show_all_order($sql);

		$this->template->set('title', 'order');
		$this->template->load('default_layout', 'contents' , 'order/show_all_order', $data);
	}

	public function new_order() 
	{
		$data = array();
		$this->template->set('title', 'about'); 
		$this->template->load('default_layout', 'contents' , 'order/add_new_order', $data);
	}


    public function call_order_detail(){

        $orderid = $this->input->post('id');

       

        if($orderid != ""){
            $sql = "SELECT * FROM tb_order WHERE order_id = $orderid AND delete_flag = 1;";
            $data['order_detail'] = $this->order_model->show_all_order($sql);
            $data['status'] = 'success';

            // $this->template->set('title', 'order');
            // $this->template->load('default_layout', 'contents' , 'order/show_all_order', $data);

        }else{
            $data['status'] = 'error';
        }
        // $data['status'] = 'success';

        // json_encode($data);

        // $this->template->set('title', 'order');
        // $this->template->load('default_layout', 'contents' , 'order/show_order_detail', $data);

        // $this->PAGE['order_code'] = $omise_order_code;
        // $this->template->load('default_layout', 'contents' , 'order/show_order_detail', $data);
        // $this->load->view('order/show_order_detail', $data);
        echo json_encode($data);

    }


    public function order_detail(){

        $orderid = $this->input->post('id');

        // if($orderid != ""){
            $sql = "SELECT * FROM tb_order WHERE order_id = $orderid AND delete_flag = 1;";
            $data['detail'] = $this->order_model->show_all_order($sql);
            // $data['status'] = 'success';

            // $this->template->set('title', 'order');
            // $this->template->load('default_layout', 'contents' , 'order/show_all_order', $data);

        // }else{
        //     $data['status'] = 'error';
        // }
        // $data['status'] = 'success';

        // json_encode($data);

        $this->template->set('title', 'order');
        $this->template->load('default_layout', 'contents' , 'order/show_order_detail', $data);
        
        // $this->PAGE['order_code'] = $omise_order_code;
        // $this->template->load('default_layout', 'contents' , 'order/show_order_detail', $data);
        // $this->load->view('order/show_order_detail', $data);
        // echo json_encode($data);

    }


    public function new_quotation(){
        $data = array();
        $this->template->set('title', 'about'); 
        $this->template->load('default_layout', 'contents' , 'order/add_new_quotation', $data);
    }

    public function check_ip(){

        // $ip = $_SERVER['REMOTE_ADDR']; // อ่าน ip จาก เพจที่เรียก
        // $ip = '222.123.92.135';
        $ip = '184.82.225.104'; //thai
        // $ip = '110.33.122.75';
        // if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //     $ip=$_SERVER['HTTP_CLIENT_IP'];
        // }else{
        //     $ip=$_SERVER['REMOTE_ADDR'];
        // }
        // print_r($ip);
        $ip_number = sprintf("%u", ip2long($ip)); // แปลง ip เป็นตัวเลข
         print_r($ip_number);
        $sql = "SELECT country_3 
                FROM iptocountry 
                WHERE $ip_number >= ip_from 
                AND $ip_number <= ip_to;";

        $show_ip= $this->customer_model->show_all_customer($sql);

        return $show_ip;
    }

    public function get_id_country(){//ดึงข้อมูลประเทศของลูกค้า

          // $country_name = $this->input->post('country_name');
        $country = $this->check_ip();//ประเทศของลูกค้า

        foreach($country as $value){
            $name_country = $value->country_3;
        }

        $sql = 'SELECT country_id FROM application_country WHERE  UCASE(country_name) = "'.$name_country.'"';
        $show_country = $this->customer_model->show_all_customer($sql);

          // print_r($show_country);
          echo json_encode($show_country);
    }




	 public function change($type)
    {
        $this->langlib->chooseLang($type);// ใช้สำหรับเปลี่ยนภาษาในทุก ๆ controller

    }
}
