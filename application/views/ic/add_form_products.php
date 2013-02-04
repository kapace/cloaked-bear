<?php
    //uses codeigniter form helper to produce a form
    $this->load->helper('form');
    echo form_open('/add_contact/post');
    echo form_label('prodductID','productID');
    echo form_input('ProductID','{productID}');
    echo form_label('product','product');
    echo form_input('product','{product}');
    echo form_close();
?>
