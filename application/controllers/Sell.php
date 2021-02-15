<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sell extends CI_Controller {

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

        if ($this->session->userdata('login') == TRUE) {
                // $this->load->view('home', $data);
            // echo "login";
             $this->template->set('title', 'order');
        $this->template->load('default_layout', 'contents' , 'order/show_all_order', $data);
            
        } else {

             // echo "No login";
                $this->load->view('login');
        }



       
    }

    public function sell_add() 
    {
        $data = array();
        $this->template->set('title', 'sell'); 
        $this->template->load('default_layout', 'contents' , 'sell/sell_add', $data);
    }


    public function sell_list(){
        $data = array();
        $this->template->set('title', 'sell'); 
        $this->template->load('default_layout', 'contents' , 'sell/sell_list', $data);
    }

     public function change($type)
    {
        $this->langlib->chooseLang($type);// ใช้สำหรับเปลี่ยนภาษาในทุก ๆ controller

    }
}
