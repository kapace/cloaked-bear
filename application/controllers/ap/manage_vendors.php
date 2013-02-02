<?php

/**
 * 
 *
 * @author ronb
 */
class Manage_vendors extends Application {
    
    function index() {
        $this->data['pagebody'] = 'ap/manage_vendors';
        $record = array('id'=>'', 'name'=>'', 'status'=>'');
        $this->data = array_merge($this->data, $record);
        $this->data['action'] = 'create';
        $this->render();
    }

    function update_form ($vendorid) {
        $this->data['pagebody'] = 'ap/manage_vendors';
        $record = $this->vendors->get_array($vendorid);
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
        if ($this->vendors->get($new_id) != null)
            $this->data['errors'][] = 'Contact ID already used.';

        if (!validate_name($_POST['name']))
            $this->data['errors'][] = 'Name cannot be blank!';

        if (!validate_name($_POST['status']))
            $this->data['errors'][] = 'Status ccannot be blank!';

        if (count($this->data['errors']) > 0) {
            $this->index();
        } else {
            $this->vendors->add($_POST);
            redirect('/ap/welcome');
        }
    }
    
    function update() {
        $up_id = $_POST['id'];

        if ($this->vendors->get($up_id) == null)
            $this->data['errors'][] = 'Cant update, does not exist.';
        
        $oldrecord = $this->vendors->get_array($up_id);

        // Get new data from POST
        $oldrecord = array_merge ($oldrecord, $_POST);
        
        $this->vendors->update($oldrecord);
        redirect('/ap/welcome');
    }
    
    function delete($vendorid) {
        $oldrecord = $this->vendors->get($vendorid);
        
        $oldrecord->status = 'D';
        $this->vendors->update($oldrecord);
        redirect('/ap/welcome');
    }
}

?>
