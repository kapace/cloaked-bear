<?php

if (!defined('APPPATH'))
    exit('No direct script access allowed');

/**
 * controllers/po/delete_purchase.php
 *
 * Entry page to the webapp.
 *
 * @author		JLP
 * ------------------------------------------------------------------------
 */
class Delete_contact extends Application {
    function index() {
        $this->data['pagebody'] = "add_form";
        $record = array('id'=>'', 'surname'=>'', 'firstname'=>'', 'phone'=>'', 'email'=>'');
        $this->data = array_merge($this->data,$record);
        $this->render();
    }
}
