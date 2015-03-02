<?php

class Setting extends FO_Controller {

    public function __construct() {
        parent::__construct();

        $this->lang->load('user/setting');
    }

    public function index() {
        $data['title'] = $this->lang->line('header_title');

        $data['breadcrumbs'][] = array(
            'text' => 'Home',
            'link' => 'Home'
        );

        $data['breadcrumbs'][] = array(
            'text' => 'Setting',
            'link' => 'Setting'
        );

        $data['header'] = $this->load->controller('common/header', $data);
        $data['footer'] = $this->load->controller('common/footer');

        $this->load->view('user/setting', $data);
    }
}