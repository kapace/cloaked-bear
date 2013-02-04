<?php

/**
 * 
 *
 * @author ronb
 */
class Manage_vendors extends Application {
    
    function index() {
        /* Blank form page to add a new vendor*/
        $this->data['pagetitle'] = 'Manage Vendors';
        $this->data['pagebody'] = 'ap/manage_vendors';
        
        $record = array('id'=>'', 'name'=>'', 'status'=>'');
        $this->data = array_merge($this->data, $record);
        $this->data['action'] = 'create';
        $this->render();
    }

    function update_form ($vendorid = null) {
        $this->data['pagebody'] = 'ap/manage_vendors';
        
        if ($vendorid == null || $this->vendors->get($vendorid) == null) {
            redirect('/ap/welcome');
            return;
        }

        $record = $this->vendors->get_array($vendorid);
        
        $this->data['pagetitle'] = 'Update Vendor: '. $record['name'];
        
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
        /*ID must be unique and must contain 3 digits*/
        if ($this->vendors->get($new_id) != null)
            $this->data['errors'][] = 'Contact ID already used.';
        if (!validate_id($_POST['id']))
            $this->data['errors'][] = 'ID is invalid. Must be 3 digits!';

        /*Name can't be blank*/
        if (!validate_name($_POST['name']))
            $this->data['errors'][] = 'Name cannot be blank!';

        /*Status cannot be blank and must be A or D*/
        if (!validate_name($_POST['status']))
            $this->data['errors'][] = 'Status cannot be blank!';
        if (!validate_status($_POST['status']))
            $this->data['errors'][] = 'Invalid status! Must be "A" or "D"!';
        
        /*Redirect to appropriate page*/
        if (count($this->data['errors']) > 0) {
            $this->index();
        } else {
            $this->vendors->add($_POST);
            redirect('/ap/welcome');
        }
    }
    
    function update() {
        $this->load->helper('validate');
        
        $up_id = $_POST['id'];

        //Validation of new update data incoming
        /*New, updated ID cannot be blank, must be unique, and it must exist*/
        if ($this->vendors->get($up_id) == null)
            $this->data['errors'][] = 'Cant update, does not exist.';
        if (!validate_id($_POST['id']))
            $this->data['errors'][] = 'ID is invalid. Must be 3 digits!';

        /*Name can't be blank*/
        if (!validate_name($_POST['name']))
            $this->data['errors'][] = 'Name cannot be blank!';

        /*Status cannot be blank and must be A or D*/
        if (!validate_name($_POST['status']))
            $this->data['errors'][] = 'Status cannot be blank!';
        if (!validate_status($_POST['status']))
            $this->data['errors'][] = 'Invalid status! Must be "A" or "D"!';
        
        /*Redirect to appropriate page*/
        if (count($this->data['errors']) > 0) {
            $this->update_form($up_id);
        } else {
            $oldrecord = $this->vendors->get_array($up_id);
            $newrecord = array_merge ($oldrecord, $_POST);
            $this->vendors->update($newrecord);
            redirect('/ap/welcome');
        }
    }
    
    function delete($vendorid) {
        $oldrecord = $this->vendors->get($vendorid);
        
        $oldrecord->status = 'D';
        $this->vendors->update($oldrecord);
        redirect('/ap/welcome');
    }
}

?>
