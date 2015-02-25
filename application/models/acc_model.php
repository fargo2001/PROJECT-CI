<?php
class Acc_Model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    public function getQuotes() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        //$query = $this->db->get_where('user', array('username' => $username, 'password' => $password));
        //$this->db->select('user.quote as uquote, quotes.quote as qquote');
        //$this->db->from('user');
        //$this->db->join('quotes', 'quotes.user_id = user.user_id', 'left');
        //$this->db->where('username', $username);
        //$this->db->where('password', $password);
        $query = $this->db->query("SELECT user.quote as uquote, quotes.quote as qquote FROM user LEFT JOIN quotes ON quotes.user_id = user.user_id WHERE username = '" . $username . "' AND password = '" . $password . "'");

        //$query = $this->db->get();

        return ($query->num_rows ? $query->row_array() : '');
    }
}