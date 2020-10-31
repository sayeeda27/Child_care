<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Crud_model');

    }
	// read_data
    public function send_sms()
    
	{
         // $data=$this->Crud_model->getdata($si);
         $this->load->view('templates/header');
                $this->load->view('alert');
                $this->load->view('templates/footer');
		  $token = "74c480fb569d22c1d158ba5e3a44cd06";
            $message = "";

            $url = "http://api.greenweb.com.bd/api2.php";
             $dob=$this->input->post('dob');
             $mob=$this->input->post('monumber');
            
        $current_date = date('Y/m/d'); // or your date as well
             $dob_str = ($dob);

             $diff = strtotime($current_date) - strtotime($dob_str);
             
            $day = abs(round($diff / 86400));

            

             //search column based on dob
             if($dob && $day){
               
                $single_user=$this->Crud_model->getdata($dob);
                if($single_user){
                $mobile_num=$single_user->mo_number;

                if($day ==42 || $day== 70 || $day==98){
                    $message="Hello Sir/Maa'm,  this is a reminder for you that your child vaccination date is tomorrow. 
                    Thank you for taking IMMUNIZE BANGLADESH'S service... ".$day;

                }
                else if($day==270 ){
                    $message="Hello Sir/Maa'm,  this is a reminder for you that your child vaccination date is tomorrow. 
                    Thank you for taking IMMUNIZE BANGLADESH'S service... ".$day;
                }
                else if($day==450 ){
                    $message="Hello Sir/Maa'm,  this is a reminder for you that your child vaccination date is tomorrow. 
                    Thank you for taking IMMUNIZE BANGLADESH'S service... ".$day;
                }
                else{
                    $message="Hello Sir/Maa'm,  this is a reminder for you that your child vaccination date is tomorrow. 
                    Thank you for taking IMMUNIZE BANGLADESH'S service...";
                }

                
                if( $mobile_num==$mob){
                    $data= array(
                        'to'=>"$mob",
                        'message'=>"$message",
                        'token'=>"$token"
                        ); // Add parameters in key value
                        $ch = curl_init(); // Initialize cURL
                        curl_setopt($ch, CURLOPT_URL,$url);
                        curl_setopt($ch, CURLOPT_ENCODING, '');
                        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        $smsresult = curl_exec($ch);
        
                    if($smsresult) {
                        $this->session->set_flashdata('message_sent', 'Message sent');
					    $this->session->flashdata('message_sent');
                        redirect(base_url('Message/send_sms'));
                    }
                }

             }
            }


           


    }
}