<?php

class Crud_model extends CI_Model {

	
	public function getAllData()
	{
        $query=$this->db->get('birth_regg');
        
        if($query){
            return $query->result();
        }
    }
    public function insertDatta($data){
        $query=$this->db->insert('birth_regg',$data);
        if($query){
            return true;
        }
        else{
            return false;
        }
    }

    public function deleteItem($si){
        $this->db->where('si',$si);
        $query=$this->db->delete('birth_regg');
        if($query){
            return true;
        }else{
            return false;
        }
    }

    public function getsingleData($si){
        $this->db->where('si',$si);
        $query=$this->db->get('birth_regg');
        if($query){
            return $query->row();
        }
    }

    public function updateDatta($data,$si){
        $this->db->where('si',$si);
        $query=$this->db->update('birth_regg',$data);
        if($query){
            return true;
        }
        else{
            return false;
        }
    }
}
?>