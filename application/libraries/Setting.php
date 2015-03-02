<?php if ( !defined('BASEPATH') ) exit('No direct script access allowed');

class setting {

    public function __construct() {

    }

    public function get($key) {
        $CI =& get_instance();

        $CI->db->select('value, serialized');
        $CI->db->where('group', 'config');
        $CI->db->where('key', $key);
        $query = $CI->db->get('setting');

        return $query->row()->value;
    }
}