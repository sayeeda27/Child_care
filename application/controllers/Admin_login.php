<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends CI_Controller {

	   public function __construct()
	    {
            parent::__construct();
          
            //   session_start();
			//    if(!isset($_SESSION['admin']))
			//    	{
			//    	redirect('admin_login');
            //        }
             $this->load->library('session');
			$this->load->model('Admin_model','data');

	    }
	
	public function index()
	{
		
		 $this->load->view('templates/header');
		 $this->load->view('admin_login');
		 //$this->load->view('templates/footer');
		
    }
    public function check_login(){
        $admin_email=$this->input->post('admin_email');
        $admin_password=$this->input->post('admin_password');
        $result=$this->data->check_login( $admin_email,$admin_password);
        if(count($result)==1){
           session_start();
           $SESSION['admin']=$result[0];
           redirect('Admin_dash');
        }
        
        else{
            redirect('Admin_login?');
        }
    }
    public function logout(){
        session_start();
        unset($SESSION['admin']);
        redirect('Admin_login');
    }
}