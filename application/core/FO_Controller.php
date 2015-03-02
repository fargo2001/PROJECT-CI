<?php
class FO_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->user_logged();
    }

    private function user_logged() {
        $CI =& get_instance();

        if (!$this->session->userdata('logged_in') && ($CI->router->fetch_class() !== 'login')) {
            redirect('common/login', 'refresh');
        }
    }

}