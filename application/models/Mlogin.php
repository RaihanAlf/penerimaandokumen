<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Model{

    function query_validasi_email($email){
    	$result = $this->db->query("SELECT * FROM user WHERE user_email='$email' ");
        return $result;
    }

    function query_validasi_password($email,$password){
    	$result = $this->db->query("SELECT * FROM user WHERE user_email='$email' AND user_password='$password' ");
        return $result;
    }

} 