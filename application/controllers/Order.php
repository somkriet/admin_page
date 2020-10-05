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

        // $sql = "SELECT * FROM Order WHERE delete_flag = 1;";
        // $data['order_data'] = $this->order_model->show_all_order($sql);

        $sql = "SELECT * FROM order_table WHERE delete_flag = 1;";
        $data['order_data'] = $this->order_model->show_all_order($sql);


        $sql = "SELECT * FROM customer WHERE delete_flag = 1;";
        $data['customer_data'] = $this->customer_model->show_all_customer($sql);

		$this->template->set('title', 'order');
		$this->template->load('default_layout', 'contents' , 'order/show_all_order', $data);
	}

	public function new_order() 
	{
		// $data = array();

        $sql = "SELECT * FROM customer WHERE delete_flag = 1;";
        $data['customer_data'] = $this->customer_model->show_all_customer($sql);

        $sql = "SELECT * FROM product WHERE delete_flag = 1;";

        $data['product_data'] = $this->product_model->show_all_product($sql);

		$this->template->set('title', 'about'); 
		$this->template->load('default_layout', 'contents' , 'order/add_new_order', $data);
	}


    public function add_new_order(){

        $order_date = $this->input->post('order_date');
        $name_customer = $this->input->post('name_customer');
        $name_socail = $this->input->post('name_socail');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $customer_address = $this->input->post('customer_address');

        productcode1
        productname1
        productnumber1
        productpricepernumber1
        discountpernumber1
        producttotalprice1

        shippingchannel
        description
        discounttext
        shippingamount

        name_receiver
        phone_receiver
        email_receiver
        address_receiver
        sent_date
        track_no

        payment_channel
        file
        
        $product_category = $this->input->post(''); 
        $product_location = $this->input->post('');
        $product_img = $this->input->post('');



        $insert = "INSERT INTO customer (cus_id,
                            cus_name,
                            cus_name_social,
                            phone_number,
                            email,
                            sales_channels,
                            cus_address,
                            cus_provinces,
                            cus_amphures,
                            cus_districts,
                            link_img) VALUES (
                            '".$customer_id."',
                            '".$customername."',
                            '".$customername_socail."',
                            '".$customerphone."',
                            '".$customeremail."',
                            '".$customerchanel."',
                            '".$customeraddress."',
                            '".$customerprovince."',
                            '".$customeramphure."',
                            '".$customerdistrict."',
                            '".$uploadedFile."')"; 

        $this->customer_model->add_new_customer($insert);



        
    }

    public function auto_name(){

        $sql = "select * from province ";
        $query = mysql_query($sql);

        echo json_encode($data);
    }

    // public function call_data_customer(){
    //     $id = $this->input->post('id');

    //     $sql = "SELECT * 
    //             FROM customer 
    //             WHERE cus_id = '$id' 
    //             AND delete_flag = 1;";
    //     $data['customer_data'] = $this->customer_model->show_all_customer($sql);
    //     $data['status'] = 'success';
    //     echo json_encode($data);
    // }


    public function call_order_detail(){

        $orderid = $this->input->post('id');

       

        if($orderid != ""){
            $sql = "SELECT * FROM order WHERE order_id = $orderid AND delete_flag = 1;";
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
            // $sql = "SELECT * FROM order WHERE order_id = $orderid AND delete_flag = 1;";
            // $data['detail'] = $this->order_model->show_all_order($sql);
            // $data['status'] = 'success';

            // $this->template->set('title', 'order');
            // $this->template->load('default_layout', 'contents' , 'order/show_all_order', $data);

        // }else{
        //     $data['status'] = 'error';
        // }
        // $data['status'] = 'success';

        // json_encode($data);
        $data = 1;

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
