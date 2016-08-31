<?php

class Admin_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function auth($email, $password){
        $this->db
            ->select('user_id')
            ->where('email', $email)
            ->where('password', md5($password))
            ->from('admin');

        $result = $this->db->get()->result_array();
        return empty($result) ? FALSE : $result[0]['user_id'];
    }
}