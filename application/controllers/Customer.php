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

		// $config = array();
  //       $config["base_url"] = base_url() . "customer/index";
  //       $config["total_rows"] = $this->customer_model->record_count();
  //       $config["per_page"] = 10;
  //       $config["uri_segment"] = 3;
 
  //       $this->pagination->initialize($config);
 
        // $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        // $data["results"] = $this->customer_model->
        //     fetch_customer($config["per_page"], $page);
        // $data["links"] = $this->pagination->create_links();
 
		$sql = "SELECT * FROM customer WHERE delete_flag = 1;";
		$data['customer_data'] = $this->customer_model->show_all_customer($sql);

		$this->template->set('title', 'Show customer');
		$this->template->load('default_layout', 'contents' , 'customer/show_all_customer', $data);

	}
	public function new_customer()
	{
		$data = array();
		$this->template->set('title', 'New customer');
		$this->template->load('default_layout', 'contents' , 'customer/add_new_customer', $data);
  
	}

	public function show_all_customer(){

		$sql = "SELECT * FROM customer WHERE delete_flag = 1;";

		$data['customer_data'] = $this->customer_model->show_all_customer($sql);


		    if(isset($_REQUEST['tb1'])) {
		        $condition      =   "";
		        if(isset($_GET['tb1']) and $_GET['tb1']!="")
		        {
		            $condition      .=  " AND continentName='".$_GET['tb1']."'";
		        }
		         
		        //Main query
		        $pages = new Paginator;
		        $pages->default_ipp = 15;
		        $sql_forms = $db->query("SELECT * FROM customer WHERE 1 ".$condition."");
		        $pages->items_total = $sql_forms->num_rows;
		        $pages->mid_range = 9;
		        $pages->paginate();  
		         
		        $data['result'] =   $db->query("SELECT * FROM customer WHERE 1 ".$condition." ORDER BY cus_name ASC ".$pages->limit."");
		    }

		// $data['status'] = 'success';
		echo json_encode($data);
	}


	public function add_new_customer()
	{
		$customerID = $this->input->post('customerID');
		$customername = $this->input->post('name');
		$customername_socail = $this->input->post('name_socail');
		$customerphone = $this->input->post('phone');
		$customeremail = $this->input->post('email');
		$customerid_card = $this->input->post('id_card');
		$customeraddress = $this->input->post('address');
		$customerpostal = $this->input->post('postal');
		// $customerchanel = $this->input->post('chanel');
		$customerchanel = 1;

		// print_r($customername);
		// exit();

			 // if ($customername == "") {
			 // 	$data['status'] = 'success';
			 // }


			 if($customername != ""){
			 	$sql = "INSERT INTO customer (
						customer.name,
						customer.name_social,
						customer.phone_number,
						customer.email,
						customer.sales_channel
					) VALUES (
						'$customername',
						'$customername_socail',
						'$customerphone',
						'$customeremail',
						'$customerchanel'
					)";

					$this->customer_model->add_new_customer($sql);

				$data['status'] = 'success';

			 }else{

			 	$data['status'] = 'notsave';

			 }



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


	 public function change_language($type)
    {
        $this->langlib->chooseLang($type);// ใช้สำหรับเปลี่ยนภาษาในทุก ๆ controller

    }


}?>


