<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	   public function __construct()
	    {
	  	  parent::__construct();
	  	
		
	        $this->load->model('regi_model');

	    }
	
	public function index()
	{
		
		 $this->load->view('templates/header');

		 $this->load->view('reg-log');
		
	}

	 function validation(){
		$this->form_validation->set_rules('user_name','Name','required|trim');
		$this->form_validation->set_rules('user_email','Email Address','required|trim|valid_email|is_unique[register.email]');
		$this->form_validation->set_rules('user_password','Password','required');
		if($this->form_validation->run()){
			  $verification_key=md5(rand());
			  $password=md5('user_password');
			  $data=array(
				  'name'=> $this->input->post('user_name'),
				  'email'=> $this->input->post('user_email'),
				  'password'=> $password,
				  'verification_key'=>$verification_key
			  );
			  $id=$this->regi_model->insert($data);
			  if($id>0){
				  $subject="please verify email for login";
				  $message="<p>Hi ".$this->input->post('user_name')."</p>
				  <p>This is email verification mail from codeigniter login register system.For complete registration and login into system,
				  first you want to verify your email by click this <a href='".base_url()."welcome/verify_email/".$verification_key."'>link</a></p>
				  <p>once you click this link your email will be varified and you can login into system.</p>
				  <p>Thanks</p>
				  ";
				//   $config=array(
				// 	  'protocol'=>'smtp',
				// 	  'smtp_host'=>'smtpout.secureserver.net',
				// 	  'smtp_port' => 80,
				// 	  'smtp_user'=>'sayeda',
				// 	  'smtp_pass'=>'123123',
				// 	  'mailtype'=>'html',
				// 	  'charset'=>'iso-8859-1',
				// 	  'wordwrep'=>TRUE

				//   );

				  $config = Array(
					'protocol'  => 'smtp',
					'smtp_host' => 'ssl://smtp.googlemail.com',
					'smtp_port' => '465',
					'smtp_user' => 'chowdhurysayeda05@gmail.com',
					'smtp_pass' => 'sayeda_05',
					'mailtype'  => 'html',
					'starttls'  => true,
					'newline'   => "\r\n"
				);
				  $this->load->library('email',$config);
				  $this->email->set_newline("\r\n");
				  $this->email->from('chowdhurysayeda05@gmail.com');
				  $this->email->to($this->input->post('user_email'));
				  $this->email->subject($subject);
				  $this->email->message($message);
				  if($this->email->send()){
					  $this->session->set_flashdata('message','Check in your email for mail varification mail');
					  redirect('welcome');
				  }


				 
			  }
		}
		else{
			$this->index();
		}
	}
	function verify_email(){
		if($this->uri->segment(3))
		{
			$verification_key=$this->uri->segment(3);
			if($this->regi_model->verify_email($verification_key))
			{
                $data['message']='<h1 style="align:center;">your email has been successfully verified,now you can login from <a href="'.base_url().'login">here</a></h1>';
			}
			else{
				$data['message']='<h1 style="align:center;">Invalid Link</h1>';
			}
			$this->load->view('verification_email',$data);
		}
	}
	
}
