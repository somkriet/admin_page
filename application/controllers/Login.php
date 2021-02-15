<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('user_model');
		$this->load->library('langlib');
		// $this->load->model('annual_model');
	}

	public function index()
	{
		header("Access-Control-Allow-Origin: *");
		// $data = array(0);
		$data = 1;

		// print_r($this->session->userdata('login')); exit();

		// if ($this->session->userdata('login') == TRUE) {
  //               $this->load->view('home', $data);
  //           // echo "login";
            
  //       } else {

  //            // echo "No login";
  //               $this->load->view('login', $data);
  //       }

		$this->load->view('login',$data);
	}
	public function validation()
	{


		$email = $this->input->post('email');
		$password = $this->input->post('password');
	  	
	  	$data['email']=$email;
		$data['password']=md5($password);

		$data['result']=$this->user_model->get_user_login($data);

		// print_r($data['result']); exit();
		if(empty($data['result']))
		{
			redirect('login','refresh');
			$res=array('return'=>'error');
		}
		else
		{
			$session_array=array();
			foreach($data['result'] as $rows)
			{
				$session_array=array(
					'userid'=>$rows->id,
					'username'=>$rows->user_name,
					'lastname'=>$rows->user_lastname,
					'email'=>$rows->user_email,
					'phone'=>$rows->user_phone,
					'position'=>$rows->position,
					'userlevel'=>$rows->user_level,
					'delete_flag'=>$rows->delete_flag
					);
				$this->session->set_userdata('login',$session_array);

				redirect('home','refresh');
				$res=array('return'=>'success');
			
			}
		}

		echo json_encode($res);

	}


	public function logout()
	{
		$this->session->unset_userdata('login');

		redirect('login','refresh');

	}

	 public function change($type)
    {
        $this->langlib->chooseLang($type);// ใช้สำหรับเปลี่ยนภาษาในทุก ๆ controller

    }



}
