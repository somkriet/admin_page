<?php
// define('urlwebsite',config_item('base_url'));
require(APPPATH.'libraries/Mailin/Mailin.php');
class Cron extends CI_Controller
{
    public $mailin_key = 'h6WpyzbHZKFCGqI4';

  //   function __construct(){
  //       parent::__construct();
		// $this->load->model('database');
		// $this->load->model('common');
		// $this->load->model('time_fnc');
		// $this->load->model('form_temp');
  //       $this->load->library('session');

  //       // if($this->input->is_cli_request() === false && $this->input->valid_ip('172.18.0.1')) {
  //       //     die();
  //       // }
  //   }


    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('langlib');
        $this->load->helper(array('form', 'url'));

        $this->CI = get_instance();
        $this->load->model('order_model');
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

    // function send($test=0, $limit=null) {

    //     $mailin = new Sendinblue\Mailin('https://api.sendinblue.com/v2.0', $this->mailin_key);

    //     $condition = array(
    //         'date_quotation <' => date('Y-m-d', strtotime('-3 Days')),
    //         'date_quotation >=' => "2018-06-01",
    //         'quotation' => 0,
    //         'email_follow' => 1,
    //     );
        
    //     $invoice = $this->db->get_where('tbl_invoice', $condition, $limit);
    //     if($invoice->num_rows() > 0) {
    //         foreach($invoice->result() as $invoice) {

    //             $staff = $this->db->get_where('tbl_users', array('user_id' => $invoice->user_respon))->row();
    //             $customer = $this->db->get_where('tbl_customers', array('customer_id' => $invoice->customer_id))->row();
    //             $diff = date_diff(date_create(date('Y-m-d')), date_create($invoice->date_quotation));
                
    //             $attrArray = array(
    //                 "CUS_NAME" => $customer->contact!=null?$customer->contact:$customer->company,
    //                 "SALES_NICKNAME" => $staff->nickname!=null?$staff->nickname:$staff->name . " " . $staff->surname,
    //                 'QSENTDATE' => date('j/n/Y', strtotime($invoice->date_quotation)),
    //                 'SALES_MPHONE' => $staff->phone!=null?$staff->phone:"-",
    //             );

    //             $template_id = 0;
    //             $case = 0;
    //             $mail_test = 'jaychoutv@gmail.com';

    //             //datediff 14 days
    //             if($diff->days >= 40) {
    //                 if($invoice->email_sent != 40) {
    //                     $template_id = 21;
    //                     $case = 40;
    //                 }
    //             } else if($diff->days >= 7) {
    //                 if($diff->days == 7 && $invoice->email_sent != 7) {
    //                     $template_id = 22;
    //                     $case = 7;
    //                 }
    //             } else if($diff->days >= 3) {
    //                 if($diff->days == 3 && $invoice->email_sent != 3) {
    //                     $template_id = 20;
    //                     $case = 3;
    //                 }
    //             }

    //             if($template_id != 0 && $case != 0) {
    //                 $data = array( 
    //                     "id" => $template_id,
    //                     // "to" => "somkriet5769@gmail.com",shinobu22@outlook.com
    //                     // "to" => $test == 1 ? "somkriet5769@gmail.com" : $customer->email,
    //                     "to" => $test == 1 ? "somkriet5769@gmail.com" : $mail_test,

    //                     // "replyto" => "info@12tees.com",
    //                     "attr" => $attrArray,
    //                     "headers" => array("Content-Type"=> "text/html;charset=iso-8859-1", "X-Mailin-tag"=>"12tee")
    //                 );
    //                 $sent = $mailin->send_transactional_template($data);
    //                 if(isset($sent['code']) && $sent['code'] == 'success') {
    //                     if($test == 0) {
    //                         $this->db->where('inv_id', $invoice->inv_id);
    //                         $this->db->update('tbl_invoice', array('email_sent' => $case));
    //                     } else {
    //                         echo $invoice->invoice_id . " Sent ! <br/>";
    //                         $this->db->where('inv_id', $invoice->inv_id);
    //                         $this->db->update('tbl_invoice', array('email_sent' => $case));
    //                     }
    //                 }
    //             }
    //         }
    //     }
    // }



    //------------------------------test-----------------------------------------------
    function send($test=0, $limit=null) {

        $mailin = new Sendinblue\Mailin('https://api.sendinblue.com/v2.0', $this->mailin_key);

        $condition = array(
            'date_quotation <' => date('Y-m-d', strtotime('-3 Days')),
            'date_quotation >=' => "2020-08-01",
            'quotation' => 0,
            'email_follow' => 1,
        );
        
        // $invoice = $this->db->get_where('tbl_invoice', $condition, $limit);
        // if($invoice->num_rows() > 0) {
            // foreach($invoice->result() as $invoice) {

                $staff = 'พนักงานขาย1';
                $customer = 'สมชาย';
                $diff = date_diff(date_create(date('Y-m-d')), date_create('2020-08-01'));
                
                $attrArray = array(
                    "CUS_NAME" => 'สมหญิง',
                    "SALES_NICKNAME" => 'ขนม',
                    'QSENTDATE' => date('j/n/Y', strtotime('2020-08-01')),
                    'SALES_MPHONE' => '0999999999',
                );

                $template_id = 34;
                $case = 14;
                $mail_test = 'jaychoutv@gmail.com';

                //datediff 14 days
                // if($diff->days >= 40) {
                //     if($invoice->email_sent != 40) {
                //         $template_id = 21;
                //         $case = 40;
                //     }
                // } else if($diff->days >= 7) {
                //     if($diff->days == 7 && $invoice->email_sent != 7) {
                //         $template_id = 22;
                //         $case = 7;
                //     }
                // } else if($diff->days >= 3) {
                //     if($diff->days == 3 && $invoice->email_sent != 3) {
                //         $template_id = 20;
                //         $case = 3;
                //     }
                // }

                if($template_id != 0 && $case != 0) {
                    $data = array( 
                        "id" => $template_id,
                        // "to" => "somkriet5769@gmail.com",shinobu22@outlook.com
                        // "to" => $test == 1 ? "somkriet5769@gmail.com" : $customer->email,
                        "to" => $test == 1 ? "somkriet5769@gmail.com" : $mail_test,

                        // "replyto" => "info@12tees.com",
                        "attr" => $attrArray,
                        "headers" => array("Content-Type"=> "text/html;charset=iso-8859-1", "X-Mailin-tag"=>"12tee")
                    );
                    $sent = $mailin->send_transactional_template($data);

                    echo "send"; 
                    // if(isset($sent['code']) && $sent['code'] == 'success') {
                    //     if($test == 0) {
                    //         $this->db->where('inv_id', $invoice->inv_id);
                    //         $this->db->update('tbl_invoice', array('email_sent' => $case));
                    //     } else {
                    //         echo $invoice->invoice_id . " Sent ! <br/>";
                    //         $this->db->where('inv_id', $invoice->inv_id);
                    //         $this->db->update('tbl_invoice', array('email_sent' => $case));
                    //     }
                    // }
                }
            // }
        // }
    }








}