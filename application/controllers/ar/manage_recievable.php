<?php

/**
 * 
 */
class Manage_Recievable extends Application {
    /**
     * 
     */
    function index() {
        $this->data['pagetitle'] = 'COMP4711 - Accounts Receivable - Add New Recievable';
        $this->data['pagebody'] = '/ar/add_recievable_form';
        
        $record = array('id'=>'', 'OrderId'=>'', 'CustomerId'=>'', 'CustomerName'=>'','AmountOwed'=>'','DueDate'=>'');
        $this->data = array_merge($this->data,$record);

        $this->render();
    }

    function create()
    {
        $new_id = $_POST['id'];
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

    function update($id)
    {
        
    }

    function delete($id)
    {
        
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */