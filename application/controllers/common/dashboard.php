<?php if ( !defined('BASEPATH') ) exit ('No direct script access allowed');
session_start();
class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->lang->load('common/dashboard');

        $dataHeader['title'] = $this->lang->line('heading_title');

        $data['breadcrumbs'][] = array(
            'text'      => 'Home',
            'link'      => 'Home'
        );

        $data['breadcrumbs'][] = array(
            'text'      => 'Dashboard',
            'link'      => 'Dashboard'
        );

        $data['header'] = $this->load->controller('common/header', $dataHeader);
        $data['footer'] = $this->load->controller('common/footer');

        $this->load->view('common/dashboard', $data);
    }
}