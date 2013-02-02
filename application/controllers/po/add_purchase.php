<?php

if (!defined('APPPATH'))
    exit('No direct script access allowed');

/**
 * controllers/po/add_purchase
 *
 * Logic for adding purchases (PO)
 *
 * @author		Aaron Lee, Steve Lo
 * ------------------------------------------------------------------------
 */
class Add_purchase extends Application {
    function index() {
        $this->data['pagebody'] = "add_form";
        $record = array(
            'productid'=>'', 
            'productname'=>'',
            'productstatus'=>'',
            'productdate'=>'',
            'quantity'=>'',
            'reorderpoint'=>'',
            'reorderqty'=>'',
            'supplierno'=>''
            );
        $this->data = array_merge($this->data,$record);
        $this->render();
    }
    
    function post() {
        $this->load->helper('validate');
        
        $record = array(
            'productid'=>$_POST['productid'],
            'productname'=>$_POST['productname'],
            'productstatus'=>$_POST['productstatus'],
            'productdate'=>$_POST['productdate'],
            'quantity'=>$_POST['quantity'],
            'reorderpoint'=>$_POST['reorderpoint'],
            'reorderqty'=>$_POST['reorderqty'],
            'supplierno'=>$_POST['supplierno']
            );
                
        // check for blanks
        foreach($record as $key=>$value)
        {
            if ($value == '')
                $this->data['errors'][] = $key." is blank.";
        }
        
        // validate duples
        foreach($record as $key=>$value)
        {
            $temp = $_POST[$key];
            if ($this->purchases->get($temp) != null)
                $this->data['errors'][] = $key." is already used.";
        }
        
        //if errors occured, display the error messages and clear the form
        if (count($this->data['errors']) > 0) 
            $this->index();
        else {  //if no error, upload that to the database
            $this->contacts->add($_POST);
            redirect('/');
        }
    }
}

/* End of file welcome.php */
/* Location: application/controllers/po/add_purchase.php */
