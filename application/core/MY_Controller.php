<?php

/**
 * core/MY_Controller.php
 *
 * Default application controller
 *
 * @author		JLP
 * @copyright           2010-2013, James L. Parry
 * ------------------------------------------------------------------------
 */
class Application extends CI_Controller {

    protected $data = array();      // parameters for view components
    protected $id;                  // identifier for our content

    const TICK = '<img src="/assets/images/tick.png"/>';

    protected $choices = array(// our menu navbar
        array("href" => "/xml/welcome", "title" => "Assignment root", "label" => "Home", "tick" => ""),
        array("href" => "/xml/gl/welcome", "title" => "General Ledger", "label" => "General Ledger", "tick" => ""),
        array("href" => "/xml/ap/welcome", "title" => "Accounts Payable", "label" => "Accounts Payable", "tick" => ""),
        array("href" => "/xml/ar/welcome", "title" => "Accounts Receivable", "label" => "Accounts Receivable", "tick" => ""),
        array("href" => "/xml/ic/welcome", "title" => "Inventory Control", "label" => "Inventory Control", "tick" => ""),
        array("href" => "/xml/oe/welcome", "title" => "Order Entry", "label" => "Order Entry", "tick" => ""),
        array("href" => "/xml/po/welcome", "title" => "Purchasing", "label" => "Purchasing", "tick" => "")
    );

    /**
     * Constructor.
     * Establish view parameters & load common helpers
     */
    function __construct() {
        parent::__construct();
        $this->data = array();
        $this->data['title'] = 'COMP4711 Winter 2013 Idea';
        $this->data['errors'] = array();
    }

    /**
     * Render this page
     */
    function render() {
        $this->data['choices'] = $this->choices;
        $this->data['menubar'] = $this->parser->parse('_menubar', $this->data, true);

        $this->data['content'] = $this->parser->parse($this->data['pagebody'], $this->data, true);
        $this->data['email'] = $this->properties->get('email');
        $this->data['instructor'] = $this->properties->get('instructor');
        $this->data['data'] = &$this->data;
        $this->parser->parse('_template', $this->data);
    }


}

/* End of file MY_Controller.php */
/* Location: application/core/MY_Controller.php */
