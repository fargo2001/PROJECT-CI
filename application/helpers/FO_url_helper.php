<?php if ( !defined('BASEPATH') ) exit('No direct script access Allowed');

if ( !function_exists('asset_url')) {
    function asset_url($url = '') {
        $CI =& get_instance();
        return $CI->config->asset_url($url);
    }
}