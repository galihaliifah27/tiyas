<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function insert_user($data) {
        return $this->db->insert('user', $data);
    }

    public function check_user($username, $password) {
        $this->db->where('username', $username);
        $query = $this->db->get('user');

        $user = $query->row();
        if ($user && password_verify($password, $user->password)) {
            return $user;
        }
        return false;
}
}