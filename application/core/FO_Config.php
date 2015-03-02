<?php if ( !defined('BASEPATH')) exit('No direct script access allowed');

class FO_Config extends CI_Config {

    public function __construct() {
        parent::__construct();
    }

    public function asset_url($uri = '') {
        return $this->slash_item('base_url'). 'assets/' . ltrim($this->_uri_string($uri), '/');
    }

    public function get($key) {
        $CI =& get_instance();

        $CI->db->select('value, serialized');
        $CI->db->where('group', 'config');
        $CI->db->where('key', $key);
        $query = $CI->db->get('setting');

        return $query->row()->value;
    }

    public function set($key, $value, $serialized = 0) {
        if ( ($key == '') || ($value == '') ) return;

        $CI =& get_instance();

        $CI->db->select('*')->where('group', 'config')->where('key', $key);

        $query = $this->db->get('setting');
        

        $data = array(
            'group' => 'config',
            'key' => $key,
            'value' => $value,
            'serialize' => $serialized
        );

        $CI->db->insert('setting', $data);
    }
}