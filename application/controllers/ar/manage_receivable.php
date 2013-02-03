<?php

/**
 * 
 */
class Manage_Receivable extends Application {
    /**
     * 
     */
    function add_page() {
        // Set the pagetitle and the view to manage_receivable_form
        $this->data['pagetitle'] = 'COMP4711 - Accounts Receivable - Add';
        $this->data['pagebody'] = '/ar/add_receivable_form';

        // Set all the fields to ''
        $record = array('id'=>'', 'name'=>'', 'status'=>'');
        $this->data = array_merge($this->data,$record);

        // Render the page
        $this->render();
    }

    function add_customer()
    {
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

    function update_page($id) {
        // Set the pagetitle and the view to manage_receivable_form
        $this->data['pagetitle'] = 'COMP4711 - Accounts Receivable - Update';
        $this->data['pagebody'] = '/ar/update_receivable_form';

        // Set all the fields to ''
        $record = $this->customers->get_array($id);
        $this->data = array_merge($this->data, $record);

        // Render the page
        $this->render();
    }

    function update_customer()
    {
        $id = $_POST['id'];

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

    function delete()
    {
        
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */