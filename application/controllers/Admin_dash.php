<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_dash extends CI_Controller {
    public function index()
	{
        $this->load->view('admin_dashboard');
    }
	

}