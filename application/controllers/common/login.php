<?php if ( !defined('BASEPATH')) exit ('No direct script access allowed');

class Login extends FO_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user/user', '', TRUE);
        $this->user_logged();
    }

    public function index() {
        $this->load->helper( array('form') );
        $this->lang->load('common/login');

    	$dataHeader['title'] = 'Please Login to Continue';

        if ($this->input->post() !== FALSE) {
            // Set validation rule form login
            $this->form_validation->set_rules('username', 'Username', 'trim|required|xssclean');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|xssclean|callback_check_database');

            if ($this->form_validation->run() === FALSE) {
                // Validation Failed, redirect user to the login page
                $data['warning'] = $this->lang->line('warning');
            } else {
                // All clear, redirect to home
                redirect('common/dashboard', 'refresh');
            }
        }

        $data['header'] = $this->load->controller('common/header', $dataHeader);
        $data['footer'] = $this->load->controller('common/footer');

        $this->load->view('common/login', $data);
    }

    public function check_database($password) {
        // Field validation succeded. Validate againts adatabase
        $username = $this->input->post('username');

        // Query the database
        $result = $this->user->login($username, $password);

        if ($result) {

            $sess_array = array();
            foreach ($result as $row) {
                $sess_array = array(
                    'id' => $row->user_id,
                    'username' => $row->username
                );

                // Set session for user login
                $this->session->set_userdata('logged_in', $sess_array);
            }

            return TRUE;

        } else {

            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;
        }

    }

    private function user_logged() {
        if ($this->session->userdata('logged_in')) {
            redirect('common/dashboard', 'refresh');
        }
    }
}