<?php
class User_Model extends CI_Model {
    function login($username, $password) {
        $md5password = md5($password);

        $this->db->select('user_id, username, password');
        $this->db->from('user');
        $this->db->where('username', $username);
        $this->db->where('password', $md5password);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
}