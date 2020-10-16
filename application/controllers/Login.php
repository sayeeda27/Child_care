<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	   public function __construct()
	    {
	  	  parent::__construct();
	  	
		
	        $this->load->model('login_model');

	    }
	
	public function index()
	{
		
		 $this->load->view('templates/header');

		 $this->load->view('login');
		
    }

    function validation(){
        $this->form_validation->set_rules('user_email','Email Address','required|trim|valid_email');
        $this->form_validation->set_rules('user_password','Password','required');
        if($this->form_validation->run()){
             $result=$this->login_model->can_login($this->input->post('user_email'),$this->input->post('user_password'));
             if($result==''){
                redirect('pages/home');
             }
             else{
                   $this->session->set_flashdata();
             }
        }
        else{
            $this->index();
        }
    }
}