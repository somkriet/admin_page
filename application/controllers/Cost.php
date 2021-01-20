<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cost extends CI_Controller {

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

        $sql = "SELECT cost_category.cost_category_name,cost.cost_id,cost.cost_name,cost.cost_detail,cost.cost_category_id,cost.cost_total,cost.cost_file,cost.cost_date 
                FROM cost
                INNER JOIN cost_category 
                ON cost.cost_category_id = cost_category.cost_category_id
                WHERE cost.delete_flag = 1;";
        $data['cost_data'] = $this->order_model->show_all_order($sql);

        $sql = "SELECT * FROM customer WHERE delete_flag = 1;";
        $data['customer_data'] = $this->customer_model->show_all_customer($sql);

		$this->template->set('title', 'cost');
		$this->template->load('default_layout', 'contents' , 'cost/show_cost', $data);
	}

	public function new_cost() 
	{
		// $data = array();

        $sql = "SELECT * FROM customer WHERE delete_flag = 1;";
        $data['customer_data'] = $this->customer_model->show_all_customer($sql);

        $sql = "SELECT * FROM cost_category WHERE delete_flag = 1;";

        $data['cost_category_data'] = $this->product_model->show_all_product($sql);

		$this->template->set('title', 'about'); 
		$this->template->load('default_layout', 'contents' , 'cost/add_cost', $data);
	}


    public function add_new_cost(){

        // print_r($_POST); exit();
        $uploadDir = 'uploads/'; 
        $response = array( 
            'status' => 0, 
            'message' => 'Form submission failed, please try again.' 
        ); 

        $cost_date = $this->input->post('cost_date');
        $cost_name = $this->input->post('cost_name');
        $cost_category = $this->input->post('cost_category');
        $cost_detail = $this->input->post('cost_detail');
        $cost_total = $this->input->post('cost_total');
      
        $file = $this->input->post('file');

        if (!empty($cost_name)) {

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

                    $insert = "INSERT INTO cost 
                            (cost_name,
                            cost_detail,
                            cost_category_id,
                            cost_total,
                            cost_file,
                            cost_date
                            ) VALUES ('".$cost_name."',
                            '".$cost_detail."',
                            '".$cost_category."',
                            '".$cost_total."',
                            '".$uploadedFile."',
                            '".$cost_date."')"; 

                    $this->product_model->add_new_product($insert);
                }
                             
                if($insert){ 
                    $response['status'] = 1; 
                    $response['message'] = 'Form data submitted successfully!'; 
                } 

        }else{

            $response['status'] = 2; 
            $response['message'] = 'Please fill all the mandatory fields (name).'; 

        }

            echo json_encode($response);
        
    }


  
    public function call_order_detail($order_id){

            $sql = "SELECT * FROM order_table WHERE order_id = '".$order_id."' AND delete_flag = 1;";
            $data['order_detail'] = $this->order_model->show_all_order($sql);

            $sql = "SELECT * FROM order_details WHERE order_id = '".$order_id."';";
            $data['order_detail_iteam'] = $this->order_model->show_all_order($sql);


       $this->template->set('title', 'order');
       $this->template->load('default_layout', 'contents' , 'order/show_order_detail', $data);

    }


	 public function change($type)
    {
        $this->langlib->chooseLang($type);// ใช้สำหรับเปลี่ยนภาษาในทุก ๆ controller

    }
}
