<?php
class loginM extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    public function register($name,$email,$password)
    {
        $pass= md5($password);
        $query = "INSERT INTO `register`(`name`, `email`, `password`) VALUES('$name','$email','$pass')";
        $this->db->query($query);
  
    }

    public function signin($email,$password)
    {
        $pass= md5($password);
        $query = "SELECT * FROM register where email = '$email' and password ='$pass'";
        return $this->db->query($query)->result_array();
    }
}
?>