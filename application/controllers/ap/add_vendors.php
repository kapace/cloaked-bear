<?php

/**
 * 
 *
 * @author ronb
 */
class Add_vendors extends Application {
    
    function index() {
        $this->data['pagebody'] = 'add_vendor';
        $record = array('id'=>'', 'name'=>'', 'status'=>'');
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
    
     function post() {
        //start validating here
        //if something is not valid
        //  $this->index();

        $this->load->helper('validate_helper');

        $new_id = $_POST['id'];
        if ($this->vendors->get($new_id) != null)
            $this->data['errors'][] = 'Contact ID already used.';

        if (!validate_name($_POST['name']))
            $this->data['errors'][] = 'Name cannot be blank!';

        if (!validate_name($_POST['status']))
            $this->data['errors'][] = 'Status ccannot be blank!';

        if (count($this->data['errors']) > 0)
            $this->index();
        else {
            $this->vendors->add($_POST);
            redirect('/');
        }
    }
}

?>
