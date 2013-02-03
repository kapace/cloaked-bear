<?php
    //Code for putting together the form for fields ID, first name, last name
    // email
    $this->load->helper('form');
    echo form_open('/ar/manage_receivable/update_customer');
?>

<?php
if(count($errors) > 0)
{
    foreach($errors as $error)
    {
        echo '<p>'.$error.'</p>';
    }
}
?>

<?php
    echo form_label('ID: ','ID');
    echo form_input('id','{id}');
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
    //submit button to submit the form
    echo form_submit('', 'Update');
    echo form_close();
?>
