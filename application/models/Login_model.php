<!-- <?php

class Login_model extends CI_Model {
    function can_login($email,$password){
        $this->db->where('email',$email);
        $query=$this->db->get('register');
        if($query->num_rows()>0)
        {
            foreach($query->result() as $row)
            {
                if($row->is_email_verified=='yes'){
                   $store_password= md5($this->input->post('user_password'));
                   if($password==$store_password)
                   {
                       $this->session->set_userdata('id',$row->id);
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
            // else
            // {
            //     return 'wrong email address';
            // }
        }

    }

}
?> -->