<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class AppointmentM extends CI_Model{
    public function patient_details($name,$email,$doctor,$appointment_date,$city,$speciality,$file){
        $query = "INSERT INTO appointment (`patient_name`, `email`, `appoint_doctor`, `appoin_date`, `city`, `speciality`,`file`) VALUES ('$name','$email','$doctor','$appointment_date','$city','$speciality','$file')";
        
        $result = $this->db->query($query);
        return 1;
    }
    public function contact_info($fname, $lname, $email, $subject, $message){
        $query = "INSERT INTO contact (`fname`, `lname`, `email`, `subject`, `message`) VALUES('$fname', '$lname', '$email', '$subject', '$message')";
        $result = $this->db->query($query);
        return 1;
    }
    
    public function doctors(){
        $query = "SELECT doctor_name,doctor_specialist FROM doctor where 1 ";
        $result = $this->db->query($query);
        return $result->result_array();
    }

}
?>