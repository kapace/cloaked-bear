<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * models/users.php
 *
 * Encapsulation of login credentials for authentication.
 *
 * Processing is done using SimpleXML.
 *
 * @author      JLP
 * ------------------------------------------------------------------------
 *
 */
class Vendors extends _Mymodel{
    
    // constructor
    function __construct() {
        parent::__construct();
        $this->setTable('vendors','id');
    }
}

