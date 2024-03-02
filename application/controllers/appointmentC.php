<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class appointmentC extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->library('session');
    
		$this->load->model('appointmentM');               
    }
	public function index()
	{
		$this->load->view('header');
		$data['doctors']=$this->appointmentM->doctors();
		// print_r($data['doctors']); die();
		$this->load->view('appointment',$data);
	}
	public function booking(){
		$name = $_POST['Name'];
		$email = $_POST['email'];
		$doctor = $_POST['doctor'];
		$appointment_date = $_POST['appointment_date'];
		
		$city = $_POST['city'];
		$speciality = $_POST['speciality'];
		$file = $_POST['file'];
		
		$submit = $this->appointmentM->patient_details($name,$email,$doctor,$appointment_date,$city,$speciality,$file);
        if ($submit) {
            $this->session->set_flashdata('success', "Your Appointment are Book");
        } else {
            $this->session->set_flashdata('error', "You Enter Invalid Details");
        }
		redirect(base_url('appointmentC'));
	}

}