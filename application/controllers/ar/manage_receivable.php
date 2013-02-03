<?php

/**
 * 
 */
class Manage_Receivable extends Application {
    /**
     * 
     */
    function add_page() {
        // Set the pagetitle and the view to the add AR form
        $this->data['pagetitle'] = 'COMP4711 - Accounts Receivable - Add';
        $this->data['pagebody'] = '/ar/add_receivable_form';

        // Set all the fields to '' for a new record.
        $record = array('id'=>'', 'name'=>'', 'status'=>'');
        $this->data = array_merge($this->data,$record);

        // Render the page.
        $this->render();
    }

    function add_customer()
    {
        $this->load->helper('validate');

        // Check that the ID doesn't already exist.
        if( $this->customers->get($_POST['id']) != null)
        {
            $this->data['errors'][] = 'ID already exists.';
        }

        // Check that the name is alphabetical.
        if(!validate_name($_POST['name']))
        {
            $this->data['errors'][] = 'Name must only contain letters.';
        }

        // Check that the status is A or D
        if(!validate_status($_POST['status']))
        {
            $this->data['errors'][] = 'Status must be A or D';
        }

        // If there are errors, redisplay the page.
        if (count($this->data['errors']) > 0)
        {
            $this->add_page();
        }
        // Otherwise commit the add and go back to the main AR page.
        else
        {
            $this->customers->add($_POST);
            redirect('/ar/');
        }
    }

    function update_page($id) {
        // Set the pagetitle and the view to the update AR form
        $this->data['pagetitle'] = 'COMP4711 - Accounts Receivable - Update';
        $this->data['pagebody'] = '/ar/update_receivable_form';

        // Set all the fields to their existing values
        $record = $this->customers->get_array($id);
        $this->data = array_merge($this->data, $record);

        // Render the page
        $this->render();
    }

    function update_customer()
    {
        $this->load->helper('validate');

        // Check that the name is alphabetical.
        if(!validate_name($_POST['name']))
        {
            $this->data['errors'][] = 'Name must only contain letters.';
        }

        // Check that the status is A or D
        if(!validate_status($_POST['status']))
        {
            $this->data['errors'][] = 'Status must be A or D';
        }
        
        //Get the old record
        $updated_record = $this->customers->get_array($_POST['id']);
        //Merge with post
        $updated_record = array_merge($updated_record, $_POST);

        // If there are errors, redisplay the page.
        if (count($this->data['errors']) > 0)
        {
            $this->update_page($_POST['id']);
        }
        // Otherwise commit the update and go back to the main AR page.
        else
        {
            $this->customers->update($updated_record);
            redirect('/ar/');
        }
    }

    function delete_customer($id)
    {
        $deletestatement = "DELETE FROM customers WHERE id = '".$id."'";
        
        $this->db->query($deletestatement);
        
        redirect('/ar/');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */