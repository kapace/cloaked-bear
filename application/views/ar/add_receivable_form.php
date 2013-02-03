<?php
    /*
     * This view is used as the form to add a row to the customer table.
     *
     * @author - aliao17 Albert Liao A00536695
     */
    $this->load->helper('form');
    $this->load->helper('html');
    echo form_open('/ar/manage_receivable/add_customer');
    echo br();

    echo form_label('ID: ','ID');
    echo form_input('id','{id}');
    echo br();

    echo form_label('Name: ','Name');
    echo form_input('name','{name}');
    echo br();

    echo form_label('Status: ','Status');
    echo form_input('status','{status}');
    echo br();

    // Add button to submit the form.
    echo form_submit('', 'Add');
    echo form_close();
?>
