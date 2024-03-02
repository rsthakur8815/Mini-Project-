<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contactC extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->library('session');
    
		$this->load->model('appointmentM');               
    }
	public function index()
	{
		$this->load->view('header');
		$this->load->view('contact');
	}
	public function contact_data(){
		// echo"<pre>";
		// print_r($_POST);
		// die();
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$subject=$_POST['subject'];
		$message=$_POST['message'];
		$submit = $this->appointmentM->contact_info($fname, $lname, $email, $subject, $message);
		$ra = $this->session->flashdata('success');
		// print_r($ra);
		// die();
		if($submit){
			$this->session->set_flashdata('success',"OK, We will contact you soon...");
		}
		else{
			$this->session->set_flashdata('error',"You have enter invalid data");
		}
		redirect(base_url('contactC'));
	}
}