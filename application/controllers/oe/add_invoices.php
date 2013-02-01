<?php

/**
 * 
 *
 * @author ronb
 */
class add_invoices extends Application {
    
    function index() {
        $this->data['pagebody'] = 'add_invoices';
        $record = array('id'=>'', 'name'=>'', 'status'=>'', 'date'=>'');
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
    
     function post() {
        //start validating here
        //if something is not valid
        //  $this->index();

        $this->load->helper('validate');

        $new_id = $_POST['id'];
        if ($this->invoices->get($new_id) != null)
            $this->data['errors'][] = 'Contact ID already used.';

        if (!validate_name($_POST['name']))
            $this->data['errors'][] = 'Name cannot be blank!';

        if (!validate_name($_POST['status']))
            $this->data['errors'][] = 'Status ccannot be blank!';
                
        if(!validate_date($_POST['date']))
            $this->data['errors'][] = 'Date must follow format YYYY.MM.DD';

        if (count($this->data['errors']) > 0) {
            $this->index();
        } else {
            $this->invoices->add($_POST);
            redirect('/oe/welcome');
        }
    }
}

?>
