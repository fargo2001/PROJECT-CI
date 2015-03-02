<?php
class Footer extends FO_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        return $this->load->view('common/footer','', TRUE);
    }

}