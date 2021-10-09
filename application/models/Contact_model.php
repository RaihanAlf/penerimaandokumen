<?php
class Contact_model extends CI_Model{

    public function data()
    {
        $query = $this->db->get('contact');
        return $query->result_array();
    }
}