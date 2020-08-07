<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Customer extends CI_Controller {

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
 
		$sql = "SELECT * FROM customer WHERE delete_flag = 1;";
		$data['customer_data'] = $this->customer_model->show_all_customer($sql);

		$sql = "SELECT * FROM provinces order by name_th asc;";
		$data['provinces_data'] = $this->customer_model->show_all_customer($sql);

		$this->template->set('title', 'Show customer');
		$this->template->load('default_layout', 'contents' , 'customer/show_all_customer', $data);

	}
	public function new_customer()
	{
		
		$sql = "SELECT * FROM provinces order by name_th asc;";
		$data['provinces_data'] = $this->customer_model->show_all_customer($sql);

		$this->template->set('title', 'New customer');
		$this->template->load('default_layout', 'contents' , 'customer/add_new_customer', $data);
  
	}


	public function get_amphures()
	{
		
		$province_id = $this->input->post('provinceId');

		$sql = "SELECT * FROM amphures WHERE province_id='".$province_id."'";
		// $query = mysqli_query($conn, $sql);

		$data['amphures_data'] = $this->customer_model->show_all_customer($sql);
		 
		// $json = array();
		// while($result = mysqli_fetch_assoc($query)) {    
		//     array_push($json, $result);
		// }
		echo json_encode($data);
 		// print_r($data);
  
	}


	public function get_districts(){

		$amphure_id = $this->input->post('amphureId');

		$sql = "SELECT * FROM districts WHERE amphure_id='".$amphure_id."'";

		$data['districts_data'] = $this->customer_model->show_all_customer($sql);

		// $query = mysqli_query($conn, $sql);
		 
		// $json = array();
		// while($result = mysqli_fetch_assoc($query)) {    
		//     array_push($json, $result);
		// }
		echo json_encode($data);

	}


	

	public function show_data_customer($cus_id){

		// $customer_id = $_POST['$cus_id'];

		
		$sql = "SELECT * FROM customer WHERE cus_id = '".$cus_id."' AND delete_flag = 1;";
		$data['customer_data'] = $this->customer_model->show_all_customer($sql);
		// print_r($data);
		// exit();
		// $data['status'] = 'success';
		$this->template->set('title', 'Show customer');
		$this->template->load('default_layout', 'contents' , 'customer/show_data_customer', $data);

	}

	public function add_new_customer2()
	{

		$uploadDir = 'uploads/'; 
		$response = array( 
		    'status' => 0, 
		    'message' => 'Form submission failed, please try again.' 
		); 
		 
		// If form is submitted 
		// if(isset($_POST['name']) || isset($_POST['email']) || isset($_POST['file'])){ 
		    // Get the submitted form data 
		    // $name = $_POST['name']; 
		    // $email = $_POST['email']; 

		$customername = $_POST['customer_name'];
		$customername_socail = $_POST['customer_name_socail'];
		$customerphone = $_POST['customer_phone'];
		$customeremail = $_POST['customer_email'];
		$customeraddress = $_POST['customer_address'];
		$customerprovince = $_POST['province'];
		$customeramphure = $_POST['amphure'];
		$customerdistrict = $_POST['district'];
		$customerchanel = $_POST['customer_chanel'];

		// print_r($_POST); 
		// exit();
		     
		    // Check whether submitted data is not empty 
		    // if(!empty($name) && !empty($email)){ 
		    if(!empty($customername)){ 
		        // Validate email 
		        // if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){ 
		        //     $response['message'] = 'Please enter a valid email.'; 
		        // }else{ 
		            $uploadStatus = 1; 
		             
		            // Upload file 
		            $uploadedFile = ''; 
		            if(!empty($_FILES["file"]["name"])){ 
		                 
		                // File path config 
		                $fileName = basename($_FILES["file"]["name"]); 
		                $targetFilePath = $uploadDir . $fileName; 
		                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
		                 
		                // Allow certain file formats 
		                $allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg'); 
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
		                    $response['message'] = 'Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.'; 
		                } 
		            } 
		             
		            if($uploadStatus == 1){ 
		                // Include the database config file 
		                // include_once 'dbConfig.php'; 
		                 
		                // Insert form data in the database 
		                // $insert = $db->query("INSERT INTO form_data (name,email,file_name) VALUES ('".$name."','".$email."','".$uploadedFile."')"); 


		            	$check_customer_data = "SELECT cus_id FROM customer WHERE delete_flag = 1;";
						$get_check_customer_data = $this->customer_model->show_all_customer($check_customer_data);

						$customer_date = date('Ymd');

						if ($check_customer_data == "") {

							$customer_id = "CU".$customer_date."0001";

						}else{

							$check_product = "SELECT SUBSTR(cus_id,11,13) AS mycus_id 
											  FROM customer 
											  WHERE SUBSTR(cus_id,3,8) = $customer_date  
											  AND delete_flag = 1";
							$data['get_check_customer'] = $this->customer_model->show_all_customer($check_product);

							$customer_id = "CU".$customer_date.$this->add_index($data['get_check_customer']);

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
			                 
			                if($insert){ 
			                    $response['status'] = 1; 
			                    $response['message'] = 'Form data submitted successfully!'; 
			                } 

						}
		              
		            } 
		        // } 
		    }else{ 
		         $response['message'] = 'Please fill all the mandatory fields (name and email).'; 
		    } 
		// } 
 
	// Return response 
	echo json_encode($response);


	}


	public function add_new_customer()
	{
		$customername = $this->input->post('name');
		$customername_socail = $this->input->post('name_socail');
		$customerphone = $this->input->post('phone');
		$customeremail = $this->input->post('email');
		$customeraddress = $this->input->post('address');
		$customerprovince = $this->input->post('province');
		$customeramphure = $this->input->post('amphure');
		$customerdistrict = $this->input->post('district');
		$customerchanel = $this->input->post('chanel');
	
		$check_customer_data = "SELECT cus_id FROM customer WHERE delete_flag = 1;";
		$get_check_customer_data = $this->customer_model->show_all_customer($check_customer_data);

		$customer_date = date('Ymd');

		if ($check_customer_data == "") {

			$customer_id = "CU".$customer_date."0001";

		}else{

			$check_product = "SELECT SUBSTR(cus_id,11,13) AS mycus_id 
							  FROM customer 
							  WHERE SUBSTR(cus_id,3,8) = $customer_date  
							  AND delete_flag = 1";
			$data['get_check_customer'] = $this->customer_model->show_all_customer($check_product);

			$customer_id = "CU".$customer_date.$this->add_index($data['get_check_customer']);

			$sql = "INSERT INTO customer (
			 			customer.cus_id,
						customer.cus_name,
						customer.cus_name_social,
						customer.phone_number,
						customer.email,
						customer.sales_channels,
						customer.cus_address,
						customer.cus_provinces,
						customer.cus_amphures,
						customer.cus_districts
					) VALUES ('$customer_id',
						'$customername',
						'$customername_socail',
						'$customerphone',
						'$customeremail',
						'$customerchanel',
						'$customeraddress',
						'$customerprovince',
						'$customeramphure',
						'$customerdistrict'
					)";

					$this->customer_model->add_new_customer($sql);

				$data['status'] = 'success';
			// print_r($get_check_product);

		}

			 // if($customername != ""){
			 // 	$sql = "INSERT INTO customer (
			 // 			customer.cus_id,
				// 		customer.cusname,
				// 		customer.cus_name_social,
				// 		customer.phone_number,
				// 		customer.email,
				// 		customer.sales_channels,
				// 		customer.cus_address,
				// 		customer.cus_provinces,
				// 		customer.cus_amphures,
				// 		customer.cus_districts,
				// 	) VALUES (
				// 		'$customername',
				// 		'$customername_socail',
				// 		'$customerphone',
				// 		'$customeremail',
				// 		'$customerchanel'
				// 	)";

				// 	$this->customer_model->add_new_customer($sql);

				// $data['status'] = 'success';

			 // }else{

			 // 	$data['status'] = 'notsave';

			 // }



		// 	 if(!empty($customername)){
		// 	$sql = "UPDATE
		// 				tb_customer
		// 			SET
		// 				tb_customer.cus_name = '$customername',
		// 				tb_customer.cus_name_social = '$customername_socail',
		// 				tb_customer.cus_phone = '$customerphone',
		// 				tb_customer.cus_email = '$customeremail',
		// 				tb_customer.cus_id_card_number = '$customerid_card',
		// 				tb_customer.cus_address = '$customeraddress',
		// 				tb_customer.cus_postal = '$customerpostal',
		// 				tb_customer.cus_sales_channel = '$customerchanel'
		// 				-- tb_customer.updateDate = GETDATE(),
		// 				-- tb_customer.updatePerson = '$user',
		// 				-- tb_customer.updateProg = 'MASTER COMPANY'
		// 				-- tb_customer.updateProg = 'MASTER COMPANY'
		// 			WHERE   
		// 				tb_customer.cus_id = '$customerID'";
		// }else{
		// 	$sql = "INSERT INTO tb_customer (
		// 				tb_customer.cus_name,
		// 				tb_customer.cus_name_social,
		// 				tb_customer.cus_phone,
		// 				tb_customer.cus_email,
		// 				tb_customer.cus_id_card_number,
		// 				tb_customer.cus_address,
		// 				tb_customer.cus_postal,
		// 				tb_customer.cus_sales_channel
		// 				-- tb_customer.createDate,
		// 				-- tb_customer.createPerson,
		// 				-- tb_customer.createProg
		// 			) VALUES (
		// 				'$customername',
		// 				'$customername_socail',
		// 				'$customerphone',
		// 				'$customeremail',
		// 				'$customerid_card',
		// 				'$customeraddress',
		// 				'$customerpostal',
		// 				'$customerchanel'
		// 			)";
		// }
	
			
		echo json_encode($data);
	}


	public function callDetails(){
		$id = $this->input->post('id');

		$sql = "SELECT * 
				FROM customer 
				WHERE cus_id = '$id' 
				AND delete_flag = 1;";
		$data['customer_data'] = $this->customer_model->show_all_customer($sql);
		$data['status'] = 'success';
		echo json_encode($data);
	}

	public function save_edit_customer(){


		$id = $this->input->post('id');
		// $customerID = $this->input->post('customerID');
		$customername = $this->input->post('name');
		$customername_socail = $this->input->post('name_socail');
		$customerphone = $this->input->post('phone');
		$customeremail = $this->input->post('email');
		$customerchanel = $this->input->post('chanel');
		$customerchanel = 1;

		$sql = "UPDATE
					tb_customer
				SET
					customer.cus_name = '$customername',
					customer.cus_name_social = '$customername_socail',
					customer.cus_phone = '$customerphone',
					customer.cus_email = '$customeremail',
					customer.cus_sales_channel = '$customerchanel'
				WHERE
					customer.cus_id = '$id'";
		$this->customer_model->edit_customer($sql);

		// $sql = "SELECT * 
		// 		FROM tb_customer 
		// 		WHERE cus_id = '$id' 
		// 		AND delete_flag = 1;";
		// $data['customer_data'] = $this->customer_model->show_all_customer($sql);
		$data['status'] = 'success';
		echo json_encode($data);
	}


	public function checked_cust()
	{
		$supplier = $this->input->post('supplier');
		$custID = $this->input->post('custID');
		$id = $this->input->post('id');

		if(!empty($supplier) and !empty($custID)){
			$sql = "SELECT
						*
					FROM
						customer
					WHERE
						delete_flag = 0
						AND supplierID = '$supplier'
						AND cus_id = '$custID'";
			if(!empty($id)){
				$sql .= " AND id != '$id'";
			}
			$result = $this->all_model->call_all($sql);

			if(!empty($result)){
				$res['status'] = 'data';
			}else{
				$res['status'] = 'nodata';
			}
		}else{
			$res['status'] = 'error';
		}

		echo json_encode($res);
	}


	public function delcustomer(){

		$id = $this->input->post('id');

		// $userdata = $this->session->userdata('login');
		// $user = $userdata['name_en'];

		$sql = "UPDATE
					customer
				SET
					customer.delete_flag = 0
				WHERE
					customer.cus_id = '$id'";
		$this->customer_model->delete_customer($sql);

		echo json_encode('success');
	}

	function add_index($data){

		$data_num = $data;
	
		$run_max = max($data_num);
		$num = $run_max->mycus_id+1;
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


	 public function change_language($type)
    {
        $this->langlib->chooseLang($type);// ใช้สำหรับเปลี่ยนภาษาในทุก ๆ controller

    }


}?>


