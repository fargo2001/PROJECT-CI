<?php if ( !defined('BASEPATH')) exit('No direct script access allowed');

class FO_Loader extends CI_Loader {

    public function __construct() {
        parent::__construct();
    }

    public function controller($controller, $args = array()) {
        if ($controller == '') {
            return;
        }

        $path = '';

        if ( ($last_slash = strrpos($controller, '/')) !== FALSE) {
            $path = substr($controller, 0, $last_slash + 1);

            $controller = substr($controller, $last_slash + 1);
        }

        $controller = strtolower($controller);

        if ( file_exists(APPPATH . 'controllers/' . $path . $controller . '.php') ) {

            require_once(APPPATH . 'controllers/' . $path . $controller . '.php');

            $controller = ucfirst($controller);

            $conn = new $controller();

            return $conn->index($args);
        }

        show_error('Unable to locate the controller you have specified: ' . $controller);
    }

    // --------------------------------------------------------------------

	/**
	 * Load View
	 *
	 * This function is used to load a "view" file.  It has three parameters:
	 *
	 * 1. The name of the "view" file to be included.
	 * 2. An associative array of data to be extracted for use in the view.
	 * 3. TRUE/FALSE - whether to return the data or load it.  In
	 * some cases it's advantageous to be able to return data so that
	 * a developer can process it in some way.
	 *
	 * @param	string
	 * @param	array
	 * @param	bool
	 * @return	void
	 */
	public function view($view, $vars = array(), $return = FALSE)
	{
	    $CI =& get_instance();

	    //$CI->load->library('setting');
	    $view = 'themes/' . $CI->setting->get('config_theme') . '/template/' . $view;

		return $this->_ci_load(array('_ci_view' => $view, '_ci_vars' => $this->_ci_object_to_array($vars), '_ci_return' => $return));
	}
}