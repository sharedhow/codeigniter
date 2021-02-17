<?php
require_once(MODULES_PATH.'/sharedhow/core/MY_Controller.php');
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of signin
 *
 * @author https://www.sharedhow.com
 */
class Signin extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (version_compare(CI_VERSION, '2.1.0', '<')) {
            $this->load->library('security');
        }
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    function index() {
        $data['title'] = 'Signin';

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('signin', $data);
        } else {
            redirect();
        }
    }

}

/* End of file signin.php */
/* Location: ./application/modules/signin/controllers/signin.php */