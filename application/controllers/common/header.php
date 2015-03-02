<?php
class Header extends FO_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index($dataHeader) {
        $data['title'] = $dataHeader['title'];


        if ($this->session->userdata('logged_in')) {
            // If User Login Success
            $data['sidebar'] = $this->load->controller('common/sidebar');
            $data['active_nav'] = $this->router->fetch_class();
            $data['logout'] = base_url('common/logout');


            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];

        }

        return $this->load->view('common/header', $data, TRUE);
    }
}