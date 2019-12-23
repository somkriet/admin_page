<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		// $this->load->model('annual_model');
	}

	public function index()
	{
		header("Access-Control-Allow-Origin: *");
		// $data = array(0);
		$data = 1;
		// $this->template->set('title', 'L');
		// $this->template->load('default_layout', 'contents' , 'home', $data);
		// $this->template->load('default_layout', 'contents' , 'home', $data);
		$this->load->view('login',$data);
	}
	public function validation()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
	  	
	  	$data['username']=$username;
		$data['password']=md5($password);

		$data['result']=$this->user_model->get_user_login($data);

		// print_r($data['result']); exit();
		if(empty($data['result']))
		{
			// redirect('login','refresh');
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
					'delete_flag'=>$rows->delete_flag
					);
				$this->session->set_userdata('login',$session_array);

				// redirect('home','refresh');
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
