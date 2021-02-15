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
        $this->load->library('session');
		$this->load->library('langlib');
        $this->load->helper(array('form', 'url'));
        // $this->load->library('upload');

        $config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '100';
		$config['max_width'] = '1024';
		$config['max_height'] = '768';

        $this->load->library('upload', $config);

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
                // $this->load->view('home');
            // echo "login";

                $sql = "SELECT * FROM product WHERE delete_flag = 1;";
				$data['product_data'] = $this->product_model->show_all_product($sql);

				$this->template->set('title', 'product');
				$this->template->load('default_layout', 'contents' , 'product/show_product_all', $data);

            
        } else {

             // echo "No login";
                $this->load->view('login');
        }

		
	}


	public function storage()
	{	

		$sql = "SELECT * FROM product_category WHERE delete_flag = 1;";
		$data['product_category_data'] = $this->product_model->show_all_product($sql);

		$sql = "SELECT * FROM storage WHERE delete_flag = 1;";
		$data['storage_data'] = $this->product_model->show_all_product($sql);


		// $data = array();
		$this->template->set('title', 'product');
		$this->template->load('default_layout', 'contents' , 'product/add_product', $data);

	}


	public function product_category()
	{	

		$sql = "SELECT * FROM product_category WHERE delete_flag = 1;";
		$data['product_category_data'] = $this->product_model->show_all_product($sql);

		$sql = "SELECT * FROM storage WHERE delete_flag = 1;";
		$data['storage_data'] = $this->product_model->show_all_product($sql);


		// $data = array();
		$this->template->set('title', 'product');
		$this->template->load('default_layout', 'contents' , 'product/add_product', $data);

	}

	

	public function new_product()
	{	

		$sql = "SELECT * FROM product_category WHERE delete_flag = 1;";
		$data['product_category_data'] = $this->product_model->show_all_product($sql);

		$sql = "SELECT * FROM storage WHERE delete_flag = 1;";
		$data['storage_data'] = $this->product_model->show_all_product($sql);


		// $data = array();
		$this->template->set('title', 'product');
		$this->template->load('default_layout', 'contents' , 'product/add_product', $data);

	}


	public function add_new_product()
	{
		$uploadDir = 'uploads/'; 
		$response = array( 
		    'status' => 0, 
		    'message' => 'Form submission failed, please try again.' 
		); 
		// print_r($_POST); 
		// exit();

		$product_name = $this->input->post('product_name');
		$product_category = $this->input->post('product_category');
		$product_detail = $this->input->post('product_detail');
		$unit_count = $this->input->post('unit_count');
		$product_location = $this->input->post('product_location');
		$product_minimum = $this->input->post('product_minimum');
		$stock_total = $this->input->post('stock_total');
		
		
		    // Check whether submitted data is not empty 
		    if(!empty($product_name)){ 
		     
		        $uploadStatus = 1; 
		            // Upload file 
		        $uploadedFile = ''; 
		        if(!empty($_FILES["file"]["name"])){ 
		                 
		            // File path config 
		            $fileName = basename($_FILES["file"]["name"]); 
		            $targetFilePath = $uploadDir . $fileName; 
		            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
		                 
		            // Allow certain file formats 
		            $allowTypes = array('jpg', 'png', 'jpeg'); 
		            if(in_array($fileType, $allowTypes)){ 
		                // Upload file to the server 
		                if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
		                        $uploadedFile = $fileName; 
		                }else{ 
		                        $uploadStatus = 0; 
		                        $response['message'] = 'Sorry, there was an error uploading your file.'; 
		                } 
		           	}else{ 
		                    $uploadStatus = 0; 
		                    $response['message'] = 'Sorry, only JPG, JPEG, & PNG files are allowed to upload.'; 
		                } 
		        } 
		             
		        if($uploadStatus == 1){ 
		              
		           	$check_product_data = "SELECT product_id FROM product WHERE delete_flag = 1;";
					$get_check_product_data = $this->product_model->show_all_product($check_product_data);

					$product_date = date('Ymd');

					if ($get_check_product_data == "") {

						$product_id = "PD".$product_date."0001";

					}else{

						$gen_product_id = "SELECT SUBSTR(product_id,11,13) AS mypro_id 
										FROM product 
										WHERE SUBSTR(product_id,3,8) = '".$product_date."'
										AND delete_flag = 1";
						$data['get_gen_product'] = $this->customer_model->show_all_customer($gen_product_id);

						$product_id = "PD".$product_date.$this->add_index($data['get_gen_product']);

						$insert = "INSERT INTO product 
							(product_id,
							product_name,
							product_img,
							category,
							productDiscription,
							total_stock,
							store,
							unit_count,
							product_minimum
							) VALUES ('".$product_id."',
							'".$product_name."',
							'".$uploadedFile."',
							'".$product_category."',
							'".$product_detail."',
							'".$stock_total."',
							'".$product_location."',
							'".$unit_count."',
							'".$product_minimum."')"; 

			                $this->product_model->add_new_product($insert);

			            foreach($_POST['option'] as $key_data=>$value_data){// วนลูป จัดการกับค่า id หลัก
                    		// if($value_data==""){ // ถ้าไม่มีค่า แสดงว่า จะเป็นการเพิ่มข้อมูลใหม่
                   			// print_r($value_data); exit();
                            $insert_detail = "INSERT INTO product_option (
                            					 product_id,
                                                 option_product,
                                                 sku,
                                                 barcode,
                                                 stock,
                                                 cost,
                                                 sale_price
                                                )
                            				VALUES ('".$product_id."',
                                                '".$_POST['option'][$key_data]."',
                                                '".$_POST['sku'][$key_data]."',
                                                '".$_POST['barcode'][$key_data]."',
                                                '".$_POST['stock'][$key_data]."',
                                                '".$_POST['cost'][$key_data]."',
                                                '".$_POST['sale_price'][$key_data]."')";

            				$this->product_model->add_new_product($insert_detail);
                
            			}
			                 
			                if($insert){ 
			                    $response['status'] = 1; 
			                    $response['message'] = 'Form data submitted successfully!'; 
			                } 

						}
		              
		            } 
		        // } 
		    }else{ 
		    	 $response['status'] = 2; 
		         $response['message'] = 'Please fill all the mandatory fields (name).'; 
		    } 
 
	// Return response 
	echo json_encode($response);


	}

	public function add_product1()
	{
	
		$product_name = $this->input->post('name');
		$product_detail = $this->input->post('detail');
		$product_purchase_price = $this->input->post('purchase_price');
		$product_sale_price = $this->input->post('sale_price');
		$product_qty = $this->input->post('qty');
		$product_unit = $this->input->post('unit');
		$product_category = $this->input->post('category'); 
		$product_location = $this->input->post('location');
		$product_img = $this->input->post('img');

		$check_product_data = "SELECT pro_id FROM tb_product WHERE delete_flag = 1;";
		$get_check_product_data = $this->product_model->show_all_product($check_product_data);

		$product_date = date('Ymd');

		if ($get_check_product_data == "") {

			$product_id = "PD".$product_date."0001";

		}else{

			$check_product = "SELECT SUBSTR(product_id,11,13) AS mypro_id 
							  FROM product 
							  WHERE SUBSTR(pro_id,3,8) = $product_date  
							  AND delete_flag = 1";
			$data['get_check_product'] = $this->product_model->show_all_product($check_product);

			$product_id = "PD".$product_date.$this->add_index($data['get_check_product']);

		}
			
		if($product_name != ""){

			$sql = "INSERT INTO product (
						tb_product.pro_id,
						tb_product.pro_name,
						tb_product.pro_detail,
						tb_product.pro_purchase_price,
						tb_product.pro_sale_price,
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
						'$product_purchase_price',
						'$product_sale_price',
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

		return $a;

	}


	public function call_product_detail($product_id){

		// $product_id = $this->input->post('id');

		$sql1 = "SELECT * FROM product WHERE product_id = '".$product_id."' AND delete_flag = 1;";

		$data['product_detail_data'] = $this->product_model->show_all_product($sql1);

		$sql1 = "SELECT * FROM product_option WHERE product_id = '".$product_id."' AND delete_flag = 1;";

		$data['product_option_data'] = $this->product_model->show_all_product($sql1);

		// print_r($data['product_detail_data']); exit();

		$sql2 = "SELECT * FROM product_category WHERE delete_flag = 1;";
		$data['product_category_data'] = $this->product_model->show_all_product($sql2);

		$sql3 = "SELECT * FROM storage WHERE delete_flag = 1;";
		$data['storage_data'] = $this->product_model->show_all_product($sql3);


		// if ($product != "") {
		// 	$data['status'] = 'success';
		// 	$data['show_product'] = $product;
		// }else{
		// 	$data['status'] = 'notsuccess';
		// 	$data['show_product'] = 'nodata';
		// }

		// echo json_encode($data);
		$this->template->set('title', 'product');
		$this->template->load('default_layout', 'contents' , 'product/show_product_detail', $data);
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
