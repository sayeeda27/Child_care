 <?php

class Login_model extends CI_Model {
    function can_login($email,$password){
        $this->db->where('us_email',$email);
        $query=$this->db->get('tbl_user');
        if($query->num_rows()>0)
        {
            foreach($query->result() as $row)
            {
                if($row->is_email_verified=='yes'){
                   $store_password= md5($this->input->post('us_password'));
                   if($password==$store_password)
                   {

                       $this->session->set_userdata('id_user',$row->id);
                   }
                   else
                   {
                       return 'wrong password';
                   }
                }
                else
                {
                    return 'First verified your email address';
                }
            }
        }

    }

}
?>