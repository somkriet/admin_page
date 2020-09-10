<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$data = array();



        // $test = date('Y-m-d', strtotime('-3 Days'));//2020-09-05

        // $diff = date_diff(date_create(date('Y-m-d')), date_create($test));

        // print_r($diff);


		$this->template->set('title', 'Home');
		$this->template->load('default_layout', 'contents' , 'home', $data);

	}  
	public function about()
	{
		$data = array();
		$this->template->set('title', 'about');
		$this->template->load('default_layout', 'contents' , 'about', $data);
	}

	
	 public function change($type)
    {
        $this->langlib->chooseLang($type);// ใช้สำหรับเปลี่ยนภาษาในทุก ๆ controller

    }
}
