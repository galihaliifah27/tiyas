<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function insert_user($data) {
        return $this->db->insert('users', $data);
    }

    public function check_user($username, $password) {
        $this->db->where('username', $username);
        $query = $this->db->get('users');
        $user = $query->row();
    
        if ($user) {
            // Debug sementara
            ($password);
            ($user->password);
            (password_verify($password, $user->password));
            exit;
        }
    
        return false;
    }
    
}
