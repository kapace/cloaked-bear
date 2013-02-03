<?php

/**
 * 
 */
class Manage_Recievable extends Application {
    /**
     * 
     */
    function add_page() {
        // Set the pagetitle and the view to manage_recievable_form
        $this->data['pagetitle'] = 'COMP4711 - Accounts Receivable';
        $this->data['pagebody'] = '/ar/manage_recievable_form';

        // Set all the fields to ''
        $record = array('id'=>'', 'name'=>'', 'status'=>'');
        $this->data = array_merge($this->data,$record);

        $this->render();
    }

    function add()
    {
/*
        //validating that the ID isn't already present in the database (primary key)
        if ($this->contacts->get($new_id) != null)
        {
            //enter a new error to say that the contact is already there
            $this->data['errors'][] = 'Contact ID already used.';
        }*/

        //validate using the validate_phone function in the helper class
        //if (!validate_phone($_POST['phone'])
            //$this->data['errors'][] = 'Invalid phone number format!';

        // if there arent any errors, submit the database entry and return to the main page
        if (count($this->data['errors'] <= 0))
        {
            $this->customers->add($_POST);
            redirect('/ar/');
        }
        //if there are errors, redisplay the page with the errors showing
        else
        {
            $this->index();
        }
    }

    function update()
    {
        $id = $_POST['id'];


    }

    function delete()
    {
        
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */