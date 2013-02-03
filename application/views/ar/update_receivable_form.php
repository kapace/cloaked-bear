<?php
    /*
     * This view is used as the form to update a row in the customer table.
     *
     * @author - aliao17 Albert Liao A00536695
     */
    $this->load->helper('form');
    echo form_open('/ar/manage_receivable/update_customer/{id}');
?>

<?php
    echo form_label('ID: ','ID');
    echo form_label('{id}','{id}');
?>
<br />

<?php
    echo form_label('Name: ','Name');
    echo form_input('name','{name}');
?>
<br />

<?php
    echo form_label('Status: ','Status');
    echo form_input('status','{status}');
?>
<br />

<?php
    // Update button to submit the form.
    echo form_submit('', 'Update');
    echo form_close();
?>
