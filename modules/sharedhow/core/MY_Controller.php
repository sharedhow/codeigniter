<?php

/**
 * The base controller which is used by the Front and the Admin controllers
 */
class MY_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();        
        $this->load->helper(array('language'));        
        $this->data=array();        
    }

//end __construct()
}

//end Base_Controller
