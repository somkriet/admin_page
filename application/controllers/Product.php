<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->CI = get_instance();
        $this->load->model('customer_model');
        $this->load->model('product_model');
        $this->load->library("pagination");

        $config['upload_path'] = 'uploads';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);

    }
    
	public function index()
	{ 
		header("Access-Control-Allow-Origin: *");
		// $data = array(); 

		$sql = "SELECT * FROM tb_product WHERE delete_flag = 1;";
		$data['product_data'] = $this->product_model->show_all_product($sql);

		$this->template->set('title', 'product');
		$this->template->load('default_layout', 'contents' , 'product/show_product_all', $data);
	}

	public function new_product()
	{

		$data = array();
		$this->template->set('title', 'product');
		$this->template->load('default_layout', 'contents' , 'product/add_product', $data);

	}

	

	public function add_product()
	{
	
		$product_name = $this->input->post('name');
		$product_detail = $this->input->post('detail');
		$product_price = $this->input->post('price');
		$product_qty = $this->input->post('qty');
		$product_unit = $this->input->post('unit');
		$product_category = $this->input->post('category');
		$product_location = $this->input->post('location');
		$product_img = $this->input->post('img');


		if($_FILES["file"]["name"] != '')
		{
		 $test = explode('.', $_FILES["file"]["name"]);
		 $ext = end($test);
		 $name = rand(100, 999) . '.' . $ext;
		 $location = './uploads/' . $name;  
		 move_uploaded_file($_FILES["file"]["tmp_name"], $location);
		 // echo '<img src="'.$location.'" height="150" width="225" class="img-thumbnail" />';
		}

		// $product_id = '2';
		$check_product_data = "SELECT pro_id FROM tb_product WHERE delete_flag = 1;";
		$get_check_product_data = $this->product_model->show_all_product($check_product_data);

		$product_date = date('Ymd');

		if ($get_check_product_data == "") {

			$product_id = "PD".$product_date."0001";

		}else{

			$check_product = "SELECT SUBSTR(pro_id,11,13) AS mypro_id 
							  FROM tb_product 
							  WHERE SUBSTR(pro_id,3,8) = $product_date  
							  AND delete_flag = 1";
			$data['get_check_product'] = $this->product_model->show_all_product($check_product);

			$product_id = "PD".$product_date.$this->add_index($data['get_check_product']);
			// print_r($get_check_product);

		}
			
			// exit();
		// if ($this->upload->do_upload('img')) {
  //           $upload_data = $this->upload->data();
  //           $params['attach'] = $upload_data['full_path'];
  //           // for insert into db
                    
  //           if ($upload_data['file_name'] != "") {
  //               	$product_img = $upload_data['file_name'];

  //               // $img_url = 'uploads/'.$data['attach_file'];
  //           }else{
  //                   $product_img = 'nodata';    
  //           }
                       
  //       }else{
  //           $product_img = 'nodata'; 
  //       }

        print_r($product_img);
        exit();


//         if ($_FILES["music"]["error"] == UPLOAD_ERR_OK)
// {
//     $file = $_FILES["music"]["tmp_name"];
//     // now you have access to the file being uploaded
//     //perform the upload operation.
//     move_uploaded_file( $file, "uploads/" . $file);
// }


		if($product_name != ""){

			$sql = "INSERT INTO tb_product (
						tb_product.pro_id,
						tb_product.pro_name,
						tb_product.pro_detail,
						tb_product.pro_price,
						tb_product.pro_qty,
						tb_product.pro_unit,
						tb_product.pro_category,
						tb_product.pro_location,
						tb_product.pro_date,
						tb_product.pro_img
					) VALUES (
						'$product_id',
						'$product_name',
						'$product_detail',
						'$product_price',
						'$product_qty',
						'$product_unit',
						'$product_category',
						'$product_location',
						'$product_date',
						'$product_img'
					)";

			$this->product_model->add_new_product($sql);

				$data['status'] = 'success';

			}else{ 

			 	$data['status'] = 'notsave';

			}

			echo json_encode($data);
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

		$sql="";
		$delete="";

	}


	
}
