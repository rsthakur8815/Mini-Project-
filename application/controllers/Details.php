<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Details extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $row=$this->session->userdata('user');
        if(empty($row))
        {
            redirect(base_url('main'));
        }
		$this->load->model('DetailsM');               
    }
    public function index()
    {
        $data['appoint']=$this->DetailsM->appointment();
        $this->load->view('details',$data);

    }
    public function appointment()
    {
        $data['appoint']=$this->DetailsM->appointment();
        // print_r($data['appoint']); die();
        $this->load->view('appodetails',$data);

    }
    public function contact()
    {
        $data['contact']=$this->DetailsM->contact();
        $this->load->view("contactdetails",$data);
    }
    public function doctor()
    {
        $data['doctor']=$this->DetailsM->doctor();
        $this->load->view("doctor",$data);
    }
}