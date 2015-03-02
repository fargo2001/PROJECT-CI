<?php
class Menu extends FO_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        //$session_data = $this->session->userdata('logged_in');
        //$data['username'] = $session_data['username'];

        return $this->load->view('common/menu', '', TRUE);
    }
}