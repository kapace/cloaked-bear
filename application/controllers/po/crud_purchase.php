<?php

if (!defined('APPPATH'))
    exit('No direct script access allowed');

/**
 * controllers/po/crud_purchase
 *
 * Logic for adding, deleting and updating purchase entries.
 *
 * @author		Aaron Lee, Steve Lo
 * ------------------------------------------------------------------------
 */
class Crud_purchase extends Application {
    function index() {
        $this->data['pagebody'] = "po/add_purchases_form";
        $record = array(
            'id'=>'', 
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
        // basic validation (dupes/blanks)
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
        
        // validate dupes
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
    
    // U, D functions courtesy of AP module
    function update($vendorid) {
        $oldrecord = $this->purchases->get($id);
        
        //toggle between D and A for the status
        $oldrecord->productstatus = ($oldrecord->productstatus === 'A') ? 'D': 'A';
        
        $this->purchases->update($oldrecord);
        redirect('/po/welcome');
    }
    
    function delete($vendorid) {
        $oldrecord = $this->purchases->get($vendorid);
        
        $oldrecord->productstatus = 'D';
        $this->purchases->update($oldrecord);
        redirect('/po/welcome');
    }
}

/* End of file crud_purchase.php */
/* Location: application/controllers/po/crud_purchase.php */
