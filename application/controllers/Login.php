<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('session');
		$this->load->model('loginM');               
    }

	public function index()
	{
        $email = $_POST['email'];
        $password = $_POST['password'];
        $login = $this->loginM->signin($email,$password);
        // print_r($login);die();
        if ($login) {
            //echo "match";
          
            $session_array=array(
                'id'=>$login[0]['id'],
                'email'=>$login[0]['email'],
                'password'=>$login[0]['password'],
            );
            $this->session->set_userdata('user', $session_array);
            return  redirect(base_url('Details'));
            // print_r($session_array);
            // die();
        } else {
            $this->session->set_flashdata('pass', 'Invalied username or password');
            redirect(base_url("main"));
            // echo "failed login";
        }

	}
    public function registeration()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password =$_POST['password'];
        $this->loginM->register($name,$email,$password);
        redirect(base_url("main"));

    }
    public function logout()
	{
		$session = $this->session->userdata('id');
		// print_r($session);
		// die();
		$this->db->close();
		$this->session->sess_destroy();
		redirect(base_url("main"));
	}
}