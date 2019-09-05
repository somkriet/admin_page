<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
Class customer_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database('default', TRUE);
    }


    public function show_all_customer($query)
    {
        $q = $this->db->query($query);

        return $q->result();
    }

    public function add_new_customer($query)
    {
       $q = $this->db->query($query);
    }

    public function record_count(){
        return $this->db->count_all("tb_customer");
    }
 
    public function fetch_customer($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("tb_customer");
 
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }




    public function call_all($query)
    {
        $q = $this->db->query($query);

        return $q->result();
    }

    public function call_not($query)
    {
        $q = $this->db->query($query);
    }

    function fetch_all()
     {
      $query = $this->db->get("product");
      return $query->result();
     }
 
    // public function leave_call_all($query)
    // {
    //     $this->db->reconnect();
    //     $q = $this->leave->query($query);

    //     return $q->result();
    // }

}
?>