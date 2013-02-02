<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of add_gl
 *
 * @author Darry
 */
class Add_gl extends Application {
    //put your code here
    
    function index() {       
        $this->data['pagebody'] = "gl/manage_accounts";
        $record=array('id'=>'', 'account_name'=>'', 'account_type'=>'', 'account_status'=>'');
        $this->data = array_merge($this->data, $record);
         $this->data['action'] = 'create';
        $this->render();
    }
    
    function update_form ($accountid) {
        $this->data['pagebody'] = 'gl/manage_accounts';
        $record = $this->accounts->get_array($accountid);
        $this->data = array_merge($this->data, $record);
        $this->data['action'] = 'update';
        $this->render();
    }
    
    function create () {
        $this->load->helper('validate');
        
        $new_id = $_POST['id'];
        
        $new_date = $_POST['account_date'];
        $new_name = $_POST['account_name'];
        $new_status = $_POST['account_status'];
        
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
        
        if (count($this->data['errors']) > 0) {
            $this->index();
        } else {
            $this->accounts->add($_POST);
            redirect('/gl/welcome');
        }
    }
    
    function update() {
        $up_id = $_POST['id'];

        if ($this->accounts->get($up_id) == null)
            $this->data['errors'][] = 'Cant update, does not exist.';
        
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
    
    function delete($accountid) {
        $oldrecord = $this->accounts->get($accountid);
        
        $oldrecord->account_status = 'D';
        $this->accounts->update($oldrecord);
        redirect('/gl/welcome');
    }
}

?>
