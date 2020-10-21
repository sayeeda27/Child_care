<?php

class Admin_crud_model extends CI_Model {

	
	public function getAllData()
	{
        $query=$this->db->get('tbl_admin_view');
        
        if($query){
            return $query->result();
        }
    }

    public function deleteItem($si){
        $this->db->where('br_id',$si);
        $query=$this->db->delete('tbl_admin_view');
        if($query){
            return true;
        }else{
            return false;
        }
    }
}
?>