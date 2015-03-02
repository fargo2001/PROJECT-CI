<?php if ( !defined('BASEPATH')) exit('No direct script access allowed');

class FO_Config extends CI_Config {

    public function __construct() {
        parent::__construct();
    }

    public function asset_url($uri = '') {
        return $this->slash_item('base_url'). 'assets/' . ltrim($this->_uri_string($uri), '/');
    }
}