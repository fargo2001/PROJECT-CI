<?php if ( !defined('BASEPATH') ) exit ('No direct script access allowed');
session_start();

class Logout extends FO_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {

        if ($this->session->userdata('logged_in')) {

            $this->session->unset_userdata('logged_in');
            session_destroy();
            redirect('common/login', 'refresh');

        } else {

            redirect('common/login', 'refresh');

        }

    }
}