<?php
class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('acc_model');
    }

    public function index() {
        $data['title'] = 'Please Login to Continue';

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        $this->load->view('templates/header', $data);
        $this->load->view('account/login', $data);
        $this->load->view('templates/footer', $data);
    }

    public function account() {

        $data['title'] = 'Welcome to login verification';

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() === FALSE) {

            $this->load->view('templates/header', $data);
            $this->load->view('account/login', $data);
            $this->load->view('templates/footer', $data);

        } else {

            $data['quotes'] = $this->acc_model->getQuotes();
            $this->load->view('account/success', $data);

        }

    }

}