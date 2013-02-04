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
            'id'=>$_POST['productid'],
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
            $this->purchases->add($_POST);
            redirect('/');
        }
    }
    
    // like the add purchases form but for updating
    function update_form ($id) {
        $this->data['pagebody'] = 'po/add_purchases_form';
        
        $record = $this->purchases->get_array($id);
        
        $this->data = array_merge($this->data, $record);
        $this->data['action'] = 'update';
        
        $this->render();
    }
    
    // validate and update entries
    function update() {
        $up_id = $_POST['id'];
        
        if (count($this->data['errors']) > 0) {
            $this->update_form($up_id);
        } else {
            $oldrecord = $this->purchases->get_array($up_id);
            
            $newrecord = array_merge ($oldrecord, $_POST);
            $this->vendors->update($newrecord);
            redirect('/po/welcome');
        }
    }
    
    // doesn't delete but marks status as 'D'
    // for invactive
    function delete($id) {
        $oldrecord = $this->purchases->get($id);
        
        $oldrecord->productstatus = 'D';
        $this->purchases->update($oldrecord);
        redirect('/po/welcome');
    }
}

/* End of file crud_purchase.php */
/* Location: application/controllers/po/crud_purchase.php */
