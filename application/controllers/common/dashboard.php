<?php if ( !defined('BASEPATH') ) exit ('No direct script access allowed');
session_start();
class Dashboard extends FO_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->lang->load('common/dashboard');

        $data['title'] = $this->lang->line('heading_title');

        $data['breadcrumbs'][] = array(
            'text'      => 'Home',
            'link'      => 'Home'
        );

        $data['breadcrumbs'][] = array(
            'text'      => 'Dashboard',
            'link'      => base_url('common/dashboard')
        );

        $data['header'] = $this->load->controller('common/header', $data);
        $data['footer'] = $this->load->controller('common/footer');

        $this->load->view('common/dashboard', $data);
    }

    public function testAjax($id) {
     //   if ($this->input->get('id')) {
     //       echo 'Ajax Success';
     //   }

        //return $this->load->viewData($id);
    }
}