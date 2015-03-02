<?php
class Menu extends FO_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        //$session_data = $this->session->userdata('logged_in');
        //$data['username'] = $session_data['username'];

        $data['dashboard'] = base_url('common/dashboard');
        
        $data['list_menu_master_purchasing'][] = array(
            'text' => 'Barang',
            'link' => base_url('master/barang')
        );

        $data['list_menu_setting'][] = array(
            'text' => 'User',
            'link' => 'User'
        );

        $data['list_menu_setting'][] = array(
            'text' => 'User Group',
            'link' => 'User Group'
        );

        $data['list_menu_setting'][] = array(
            'text' => 'Setting Umum',
            'link' => base_url('user/setting')
        );

        return $this->load->view('common/menu', $data, TRUE);
    }
}