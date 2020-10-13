<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	// read_data
	public function index()
	{
		
        $this->load->view('templates/header');
        $this->load->model('crud_model');
       $data['reg_data']=$this->crud_model->getAllData();
		$this->load->view('crud_view',$data);
    }
    
    // insert data
    public function insertData(){

		$this->form_validation->set_rules('fname','full name','trim|required');
		$this->form_validation->set_rules('dob','date of birth','trim|required');
		$this->form_validation->set_rules('faname','father name','trim|required');
		$this->form_validation->set_rules('moname','mother name','trim|required');
		$this->form_validation->set_rules('pob','place of birth','trim|required');
        $this->form_validation->set_rules('preadd','present address','trim|required');
        $this->form_validation->set_rules('peradd','permanent address','trim|required');
        $this->form_validation->set_rules('monum','mobile number','trim|required');

		if($this->form_validation->run()==false){

			$data_error=[
				'error'=>validation_errors()
			];

			$this->session->set_flashdata($data_error);
		}
		else{
			$this->load->model('crud_model');
			$result=$this->crud_model->insertDatta([
				'f_name'=>$this->input->post('fname'),
				'dob'=>$this->input->post('dob'),
				'fa_name'=>$this->input->post('faname'),
				'mo_name'=>$this->input->post('moname'),
				'pob'=>$this->input->post('pob'),
                'pre_add'=>$this->input->post('preadd'),
                'per_add'=>$this->input->post('peradd'),
                'mob_num'=>$this->input->post('monum')

			]);
			if($result){
				$this->session->set_flashdata('inserted','Data has been added!!');
			}
		}
		redirect('crud');
	}
	
	public function deleteData($si){
		$this->load->model('crud_model');
		$result=$this->crud_model->deleteItem($si);
		if($result==true){
			$this->session->set_flashdata('deleted','Data has been deleted!!');
		}
		redirect('crud');
	}


	public function editData($si){
		$this->load->view('templates/header');
		$this->load->model('crud_model');
		$data['singleData']=$this->crud_model->getsingleData($si);
		$this->load->view('edit_view',$data);
	}

	public function update($si){
		$this->form_validation->set_rules('fname','full name','trim|required');
		$this->form_validation->set_rules('dob','date of birth','trim|required');
		$this->form_validation->set_rules('faname','father name','trim|required');
		$this->form_validation->set_rules('moname','mother name','trim|required');
		$this->form_validation->set_rules('pob','place of birth','trim|required');
        $this->form_validation->set_rules('preadd','present address','trim|required');
        $this->form_validation->set_rules('peradd','permanent address','trim|required');
        $this->form_validation->set_rules('monum','mobile number','trim|required');

		if($this->form_validation->run()==false){

			$data_error=[
				'error'=>validation_errors()
			];

			$this->session->set_flashdata($data_error);
		}
		else{
			$this->load->model('crud_model');
			$result=$this->crud_model->updateDatta([
				'f_name'=>$this->input->post('fname'),
				'dob'=>$this->input->post('dob'),
				'fa_name'=>$this->input->post('faname'),
				'mo_name'=>$this->input->post('moname'),
				'pob'=>$this->input->post('pob'),
                'pre_add'=>$this->input->post('preadd'),
                'per_add'=>$this->input->post('peradd'),
                'mob_num'=>$this->input->post('monum')

			], $si);
			if($result){
				$this->session->set_flashdata('updated','Data has been updated!!');
			}
		}
		redirect('crud');
	}
}
