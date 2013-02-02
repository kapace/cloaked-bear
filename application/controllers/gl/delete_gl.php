<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Delete_gl
 *
 * @author Darry
 */
class Delete_gl extends Application {
    //put your code here
    
  
    
    
    function index() {
        $this->data['pagebody'] = "add_gl_form";
        $record = array('account_id'=>'', 'account_date'=>'', 'account_name'=>'', 'account_status'=>'');
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
    
    
}

?>
