<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * The controller for managing General Ledger accounts
 * Allows users to Create new accounts, Update an existing account, or Deactivate accounts
 *
 * @author Behnam Bastami/Darry
 */
class Add_gl extends Application {
    
    //
    function index() {       
        $this->data['pagebody'] = "gl/manage_accounts";
        $record=array('id'=>'', 'account_name'=>'', 'account_type'=>'', 'account_status'=>'');
        $this->data = array_merge($this->data, $record);
         $this->data['action'] = 'create';
        $this->render();
    }
    //Used to update the form data
    function update_form ($accountid) {
        $this->data['pagebody'] = 'gl/manage_accounts';
        $record = $this->accounts->get_array($accountid);
        $this->data = array_merge($this->data, $record);
        $this->data['action'] = 'update';
        $this->render();
    }
    //Used to create a new account
    function create () {
        $this->load->helper('validate');
        
        $this->data['pagetitle'] = 'COMP4711 - General Ledger - Add Account';
        
        $new_id = $_POST['id'];
        $new_date = $_POST['account_date'];
        $new_name = $_POST['account_name'];
        $new_status = $_POST['account_status'];
        
        //Validation for new Entry
        if ($this->accounts->get($new_id) != NULL) {
            $this->data['errors'][] = 'id already used';
        }
        if ($new_id == NULL) {
            $this->data['errors'][] = 'id cannot be empty';
        }
        if ($new_date == NULL) {
            $this->data['errors'][] = 'date cannot be null';
        }
        if ($new_name == NULL) {
            $this->data['errors'][] = 'account name cannot be null';
        }
        if ($new_status == NULL  ) {
            $this->data['errors'][] = 'status cannot be null';
        }
        
        if (!validate_status($new_status)) {
            $this->data['errors'][] = 'invalid status';
        }
        
        //if error array is not empty, print errors, otherwise process create
        if (count($this->data['errors']) > 0) {
            $this->index();
        } else {
            $this->accounts->add($_POST);
            redirect('/gl/welcome');
        }
    }
    //Used to update an account
    function update() {
        $this->load->helper('validate');
        
        $this->data['pagetitle'] = 'COMP4711 - General Ledger - Update Account';
        
        $up_id = $_POST['id'];
        $up_date = $_POST['account_date'];
        $up_name = $_POST['account_name'];
        $up_status = $_POST['account_status'];
        
        //Validation for update action
        if ($this->accounts->get($up_id) == null)
            $this->data['errors'][] = 'Cant update, does not exist.';
        
        if ($up_id == NULL) {
            $this->data['errors'][] = 'id cannot be empty';
        }
        if ($up_date == NULL) {
            $this->data['errors'][] = 'date cannot be null';
        }
        if ($up_name == NULL) {
            $this->data['errors'][] = 'account name cannot be null';
        }
        if ($up_status == NULL  ) {
            $this->data['errors'][] = 'status cannot be null';
        }
        if (!validate_status($up_status)) {
            $this->data['errors'][] = 'invalid status';
        }
        
        //if error array is not empty, print errors, otherwise process update
        if (count($this->data['errors']) > 0) {
            $this->index();
        } else {
            $oldrecord = $this->accounts->get_array($up_id);

            // Get new data from POST
            $oldrecord = array_merge ($oldrecord, $_POST);

            $this->accounts->update($oldrecord);
            redirect('/gl/welcome');
        }
        
    }
    
    //Toggle account status from A (Active) to D (Deactivated)
    function delete($accountid) {
        $oldrecord = $this->accounts->get($accountid);
        $oldrecord->account_status = 'D';
        $this->accounts->update($oldrecord);
        redirect('/gl/welcome');
    }
}

?>
