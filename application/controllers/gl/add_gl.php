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
        $record=array('account_id'=>'', 'account_name'=>'', 'account_type'=>'', 'account_status'=>'');
        $this->data = array_merge($this->data, $record);
        
        $this->data['pagebody'] = "add_gl_form";
        
        $this->render();
        
    }
    
    function post() {
        
        $this->load->helper('validate');
        
        $new_id = $_POST['account_id'];
        
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
            redirect('/');
        }
    }
}

?>
