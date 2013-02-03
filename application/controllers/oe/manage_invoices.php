<?php

/**
 * 
 *
 * @author ronb
 */
class Manage_invoices extends Application {
    
    function index() {
        $this->data['pagebody'] = 'oe/manage_invoices';
        $record = array('id'=>'', 'name'=>'', 'status'=>'', 'date'=>'');
        $this->data = array_merge($this->data, $record);
        $this->data['action'] = 'create';
        $this->render();
    }

    function update_form ($invoiceid) {
        $this->data['pagebody'] = 'oe/manage_invoices';
        $record = $this->invoices->get_array($invoiceid);
        $this->data = array_merge($this->data, $record);
        $this->data['action'] = 'update';
        $this->render();
    }
    
    function create () {
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
            $this->data['errors'][] = 'Status cannot be blank!';

        if(!validate_date($_POST['date']))
            $this->data['errors'][] = 'Date must by yyyy.mm.dd';
        
        if (count($this->data['errors']) > 0) {
            $this->index();
        } else {
            $this->invoices->add($_POST);
            redirect('/oe/welcome');
        }
    }
    
    function update() {
        $up_id = $_POST['id'];

        if ($this->invoices->get($up_id) == null)
            $this->data['errors'][] = 'Cant update, does not exist.';
        
        $oldrecord = $this->invoices->get_array($up_id);

        // Get new data from POST
        $oldrecord = array_merge ($oldrecord, $_POST);
        
        $this->invoices->update($oldrecord);
        redirect('/oe/welcome');
    }
    
    function delete($invoiceid) {
        $oldrecord = $this->invoices->get($invoiceid);
        
        $oldrecord->status = 'D';
        $this->invoices->update($oldrecord);
        redirect('/oe/welcome');
    }
}

?>
