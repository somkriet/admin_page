<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->CI = get_instance();
        $this->load->model('supplier_model');
        $this->load->model('customer_model');
        $this->load->model('product_model');
        $this->load->library("pagination");
        $this->load->helper(array('form', 'url'));
        
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

		$sql = "SELECT * FROM product WHERE delete_flag = 1;";
		$data['product_data'] = $this->product_model->show_all_product($sql);

		$sql = "SELECT * FROM supplier WHERE delete_flag = 1;";
		$data['supplier_data'] = $this->supplier_model->show_all_supplier($sql);

		$this->template->set('title', 'product');
		$this->template->load('default_layout', 'contents' , 'supplier/show_supplier', $data);
	}

	public function new_supplier()
	{	

		$sql = "SELECT * FROM product_category WHERE delete_flag = 1;";
		$data['product_category_data'] = $this->product_model->show_all_product($sql);

		$sql = "SELECT * FROM storage WHERE delete_flag = 1;";
		$data['storage_data'] = $this->product_model->show_all_product($sql);


		// $data = array();
		$this->template->set('title', 'product');
		$this->template->load('default_layout', 'contents' , 'supplier/add_supplier', $data);

	}


	public function add_new_supplier()
	{
		// print_r($_POST); 
		// exit();

		$supplier_name = $this->input->post('supplier_name');
		$supplier_address = $this->input->post('supplier_address');
		$supplier_phone = $this->input->post('supplier_phone');
		$supplier_line = $this->input->post('supplier_line');
		$supplier_facebook = $this->input->post('supplier_facebook');
	
		              
		$check_supplier_data = "SELECT supplier_id FROM supplier WHERE delete_flag = 1;";
		$get_check_supplier_data = $this->supplier_model->show_all_supplier($check_supplier_data);

		$supplier_date = date('Ymd');

		if ($get_check_supplier_data == "") {

			$supplier_id = "SP".$supplier_date."0001";

		}else{

			$gen_supplier_id = "SELECT SUBSTR(supplier_id,11,13) AS mypro_id 
								FROM supplier 
								WHERE SUBSTR(supplier_id,3,8) = '".$supplier_date."'
										AND delete_flag = 1";
						$data['get_gen_supplier'] = $this->supplier_model->show_all_supplier($gen_supplier_id);

						$supplier_id = "SP".$supplier_date.$this->add_index($data['get_gen_supplier']);

						// `supplier_id`, `supplier_name`, `supplier_address`, `supplier_phone`, `supplier_line`, `supplier_facebook`, `supplier_date`, `delete_flag'

						$insert = "INSERT INTO supplier 
							(supplier_id,
							supplier_name,
							supplier_address,
							supplier_phone,
							supplier_line,
							supplier_facebook
							) VALUES ('".$supplier_id."',
							'".$supplier_name."',
							'".$supplier_address."',
							'".$supplier_phone."',
							'".$supplier_line."',
							'".$supplier_facebook."'
							)"; 

			                $this->supplier_model->add_new_supplier($insert);
            			}
			                 
			                if($insert){ 
			                    $response['status'] = 1; 
			                    $response['message'] = 'Form data submitted successfully!'; 
			                } 

	// Return response 
	echo json_encode($response);

	}

	function add_index($data){

		$data_num = $data;
	
		$run_max = max($data_num);
		$num = $run_max->mypro_id+1;
		$max = strlen($num);

		if ($max == 1) {
			$a = '000'.$num;
		}elseif ($max == 2) {
			$a = '00'.$num;
		}elseif ($max == 3) {
			$a = '0'.$num;
		}else{
			$a = $num;
		}

		// print_r($a);
		// exit();
		return $a;

	}

	
	public function callDetails(){

		$product_id = $this->input->post('id');

		$sql = "SELECT * FROM product WHERE product_id = '$product_id' AND delete_flag = 1;";

		$product = $this->product_model->show_all_product($sql);

		if ($product != "") {
			$data['status'] = 'success';
			$data['show_product'] = $product;
		}else{
			$data['status'] = 'notsuccess';
			$data['show_product'] = 'nodata';
		}

		echo json_encode($data);
	}

	public function save_edit_product(){

		$product_id = $this->input->post('id');
		$product_name = $this->input->post('name');
		$product_detail = $this->input->post('detail');
		$product_price = $this->input->post('price');
		$product_qty = $this->input->post('qty');
		$product_unit = $this->input->post('unit');
		$product_category = $this->input->post('category');
		$product_location = $this->input->post('location');
		// $product_img = $this->input->post('img');
		 // tb_product.pro_img = '$product_img'


		$sql = "UPDATE
					tb_product
				SET
					tb_product.pro_name = '$product_name',
					tb_product.pro_detail = '$product_detail',
					tb_product.pro_sale_price = '$product_price',
					tb_product.pro_qty = '$product_qty',
					tb_product.pro_unit = '$product_unit',
					tb_product.pro_category = '$product_category',
					tb_product.pro_location = '$product_location'
					
				WHERE
					tb_product.pro_id = '$product_id'
				AND tb_product.delete_flag = 1;";
		$this->product_model->edit_product($sql);

		$data['status'] = 'success';
		echo json_encode($data);

	}

	public function show_product_update()
	{

		$sql = "SELECT * FROM tb_product WHERE delete_flag = 1;";

		$data['show_product'] = $this->product_model->add_new_product($sql);

		echo json_encode($data);
	}


	public function update_product()
	{

		$product_name = $this->input->post('name');
		$product_detail = $this->input->post('detail');
		$product_price = $this->input->post('price');
		$product_qty = $this->input->post('qty');
		$product_unit = $this->input->post('unit');
		$product_category = $this->input->post('category');
		$product_location = $this->input->post('location');
		$product_img = $this->input->post('img');

		// $data['update_product'] = $this->product_model->update_product($sql);
		// $id = $this->input->post('id');
		// // $customerID = $this->input->post('customerID');
		// $customername = $this->input->post('name');
		// $customername_socail = $this->input->post('name_socail');
		// $customerphone = $this->input->post('phone');
		// $customeremail = $this->input->post('email');
		// $customerid_card = $this->input->post('id_card');
		// $customeraddress = $this->input->post('address');
		// $customerpostal = $this->input->post('postal');
		// // $customerchanel = $this->input->post('chanel');
		// $customerchanel = 1;
		
		$sql = "UPDATE
					tb_customer
				SET
					tb_customer.cus_name = '$customername',
					tb_customer.cus_name_social = '$customername_socail',
					tb_customer.cus_phone = '$customerphone',
					tb_customer.cus_email = '$customeremail',
					tb_customer.cus_id_card_number = '$customerid_card',
					tb_customer.cus_address = '$customeraddress',
					tb_customer.cus_postal = '$customerpostal',
					tb_customer.cus_sales_channel = '$customerchanel'
				WHERE
					tb_customer.cus_id = '$id'";
		$this->customer_model->edit_customer($sql);

		$data['status'] = 'success';
		echo json_encode($data);

	}


	public function delete_product()
	{

		$product_id = $this->input->post('id');

		$sql = "UPDATE
					tb_product
				SET
					tb_product.delete_flag = 0
				WHERE
					tb_product.pro_id = '$product_id'";
		$this->customer_model->delete_customer($sql);

		echo json_encode('success');

	}

	 public function change($type)
    {
        $this->langlib->chooseLang($type);// ใช้สำหรับเปลี่ยนภาษาในทุก ๆ controller

    }


	
}
