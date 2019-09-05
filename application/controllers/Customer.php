<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Customer extends CI_Controller {

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

		$config = array();
        $config["base_url"] = base_url() . "customer/index";
        $config["total_rows"] = $this->customer_model->record_count();
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;
 
        $this->pagination->initialize($config);
 
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->customer_model->
            fetch_customer($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
 
		$sql = "SELECT * FROM tb_customer";
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

		$sql = "SELECT * FROM tb_customer";

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
		        $sql_forms = $db->query("SELECT * FROM tb_customer WHERE 1 ".$condition."");
		        $pages->items_total = $sql_forms->num_rows;
		        $pages->mid_range = 9;
		        $pages->paginate();  
		         
		        $data['result'] =   $db->query("SELECT * FROM tb_customer WHERE 1 ".$condition." ORDER BY cus_name ASC ".$pages->limit."");
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
			 	$sql = "INSERT INTO tb_customer (
						tb_customer.cus_name,
						tb_customer.cus_name_social,
						tb_customer.cus_phone,
						tb_customer.cus_email,
						tb_customer.cus_id_card_number,
						tb_customer.cus_address,
						tb_customer.cus_postal,
						tb_customer.cus_sales_channel
					) VALUES (
						'$customername',
						'$customername_socail',
						'$customerphone',
						'$customeremail',
						'$customerid_card',
						'$customeraddress',
						'$customerpostal',
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


   }