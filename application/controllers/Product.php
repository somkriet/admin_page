<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->CI = get_instance();
        $this->load->model('customer_model');
        $this->load->library("pagination");

    }
    
	public function index()
	{
		header("Access-Control-Allow-Origin: *");
		// $data = array();

		$sql = "SELECT * FROM tb_customer WHERE delete_flag = 1;";
		$data['customer_data'] = $this->customer_model->show_all_customer($sql);

		$this->template->set('title', 'product');
		$this->template->load('default_layout', 'contents' , 'product/show_product_all', $data);
	}

	public function add_product()
	{
		header("Access-Control-Allow-Origin: *");
		// $data = array();

		$sql = "SELECT * FROM tb_customer WHERE delete_flag = 1;";
		$data['customer_data'] = $this->customer_model->show_all_customer($sql);

		$this->template->set('title', 'product');
		$this->template->load('default_layout', 'contents' , 'product/add_product', $data);
	}



	
}
