<?php
class Sidebar extends FO_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['menu'] = $this->load->controller('common/menu');

        return $this->load->view('common/sidebar', $data, TRUE);
    }

}