<?php
class Admin_model extends CI_Model
{ 
    function check_login($email,$password){
        $this->db->where('ad_email',$email);
        $this->db->where('ad_password',$password);
        $result=$this->db->get('tbl_admin');
        $data=$result->result_array();
        return $data;
    }
}

?>