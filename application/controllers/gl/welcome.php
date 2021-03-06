<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Default controller for COMP4711 Lab Solutions
 */
class Welcome extends Application {

    function __construct() {
        parent::__construct();
    }

    /**
     * Default entry point.
     * Yes, we are using view templating.
     */
    function index() {
    	//update page body and title
        $this->data['pagetitle'] = 'COMP4711 - General Ledger';
        $this->data['pagebody'] = 'gl/gl';
        //fill in the pages data array to be displayed by view
        $this->data['accounts'] = $this->accounts->getAll_array();
        $this->render();
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */