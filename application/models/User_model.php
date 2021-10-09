<?php
class User_model extends CI_Model{
    private $_table = 'user';

    function user(){
        $query = $this->db->get('user');
        return $query->result_array();
    }

    function tambah_user($user_name,$user_email,$user_password,$user_level,$user_status){
        $hasil=$this->db->query("INSERT INTO user (user_name,user_email,user_password,user_level,user_status) VALUES ('$user_name','$user_email','$user_password','$user_level','$user_status')");
        return $hasil;
    }

    function edit_user($user_id,$user_name,$user_email,$user_password,$user_level,$user_status){
        $hasil=$this->db->query("UPDATE user SET user_name='$user_name',user_email='$user_email',user_password='$user_password',user_level='$user_level',user_status='$user_status' WHERE user_id = '$user_id'");
        return $hasil;
    }

    public function delete($user_id)
	{
		if (!$user_id) {
			return;
		}

		return $this->db->delete($this->_table, ['user_id' => $user_id]);
	}
}                                        