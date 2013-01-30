<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Default controller for COMP4711 Lab Solutions
 */
class Lab3 extends Application {

    function __construct() {
        parent::__construct();
    }

    /**
     * Default entry point.
     * Yes, we are using view templating.
     */
    function index() {
        $this->load->helper('display');
        $this->data['myxml'] = display_file('./data/mywonderfuldatastuff.xml');

        $this->data['pagetitle'] = 'COMP4711 - Winter 2013 - Lab 3';
        $this->data['pagebody'] = 'lab3';
        $this->render();
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
