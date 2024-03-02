<?php
class DetailsM extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    public function appointment()
    {
        $query="SELECT * FROM appointment ";
        return $this->db->query($query)->result_array();
    }
    public function Contact()
    {
        $query="SELECT * FROM contact ";
        return $this->db->query($query)->result_array();
    }
    public function doctor()
    {
        $query="SELECT * FROM doctor ";
        return $this->db->query($query)->result_array();
    }
    
}