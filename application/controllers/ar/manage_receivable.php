<?php
/**
 * The Manage_Receivable controller deals with the CRUD for the Customer table
 * used by accounts recievable.
 *
 * add_page() - uses the add_receivable_form view to let the user add a new cust
 * add_customer() - adds the customer row to the DB using the
 *                  add_recievable_form after verifying data
 * update_page() - uses the update_recievable_form to let the user update cust
 *                 information
 * update_customer() - updates the customer row in the DB base on the ID
 *                     after verifying that the data is valid
 * delete_customer() - deletes a row from the DB based on the ID passed in
 *
 * @author - aliao17 Albert Liao A00536695
 */
class Manage_Receivable extends Application
{

    /**
     * Uses the add_receivable_form view to let the user add a new customer.
     */
    function add_page()
    {
        // Set the pagetitle and the view to the add AR form.
        $this->data['pagetitle'] = 'COMP4711 - Accounts Receivable - Add';
        $this->data['pagebody'] = '/ar/add_receivable_form';

        // Set all the fields to '' for a new record.
        $record = array('id'=>'', 'name'=>'', 'status'=>'');
        $this->data = array_merge($this->data,$record);

        // Render the page.
        $this->render();
    }

    /**
     * Adds the customer row to the DB using the add_recievable_form after
     * verifying data.
     */
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

        // Check that the status is A or D.
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

    /**
     * Uses the update_recievable_form to let the user update customer
     * information.
     *
     * @param <type> $id - The ID of the row to be updated in customers.
     */
    function update_page($id)
    {
        // Set the pagetitle and the view to the update AR form.
        $this->data['pagetitle'] = 'COMP4711 - Accounts Receivable - Update';
        $this->data['pagebody'] = '/ar/update_receivable_form';

        // Set all the fields to their existing values.
        $record = $this->customers->get_array($id);
        $this->data = array_merge($this->data, $record);

        // Render the page.
        $this->render();
    }

    /**
     * Updates the customer row in the DB base on the ID after verifying that
     * the data is valid.
     *
     * @param <type> $id - The ID of the row to be updated in customers.
     */
    function update_customer($id)
    {
        $this->load->helper('validate');

        // Check that the name is alphabetical.
        if(!validate_name($_POST['name']))
        {
            $this->data['errors'][] = 'Name must only contain letters.';
        }

        // Check that the status is A or D.
        if(!validate_status($_POST['status']))
        {
            $this->data['errors'][] = 'Status must be A or D';
        }
        
        // Get the existing record to update.
        $updated_record = $this->customers->get_array($id);
        
        // Merge with post to update the new values.
        $updated_record = array_merge($updated_record, $_POST);

        // If there are errors, redisplay the page.
        if (count($this->data['errors']) > 0)
        {
            $this->update_page($id);
        }
        // Otherwise commit the update and go back to the main AR page.
        else
        {
            $this->customers->update($updated_record);
            redirect('/ar/');
        }
    }

    /**
     * Deletes a row from the DB based on the ID passed in.
     *
     * @param <type> $id - The ID of the row to be delete in customers.
     */
    function delete_customer($id)
    {
        // The delete statement to delete the row with the associated ID.
        $deletestatement = "DELETE FROM customers WHERE id = '".$id."'";

        // Run the delete statement.
        $this->db->query($deletestatement);

        // Reload the page.
        redirect('/ar/');
    }
}

/* End of file manage_receivable.php */
/* Location: ./application/controllers/ar/manage_receivable.php */