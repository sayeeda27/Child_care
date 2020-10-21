<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_crud extends CI_Controller {

	// read_data
	public function index()
	{
		
        $this->load->view('templates/header');
        $this->load->model('admin_crud_model');
       $data['reg_data']=$this->admin_crud_model->getAllData();
		$this->load->view('admin_crud_view',$data);
    }

    public function deleteData($si){
         	$this->load->model('admin_crud_model');
         	$result=$this->admin_crud_model->deleteItem($si);
         	if($result==true){
         		$this->session->set_flashdata('deleted','Data has been deleted!!');
         	}
         	redirect('Admin_crud');
         }
}