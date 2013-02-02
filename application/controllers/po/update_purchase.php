<?php

if (!defined('APPPATH'))
    exit('No direct script access allowed');

/**
 * controllers/po/update_purchase.php
 *
 * Entry page to the webapp.
 *
 * @author		JLP
 * ------------------------------------------------------------------------
 */
class Update_purchase extends Application {
    function index() {
        $this->data['pagebody'] = "add_form";
        $record = array('id'=>'', 'surname'=>'', 'firstname'=>'', 'phone'=>'', 'email'=>'');
        $this->data = array_merge($this->data,$record);
        $this->render();
    }
}