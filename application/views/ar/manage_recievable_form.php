<?php
    //Code for putting together the form for fields ID, first name, last name
    // email
    $this->load->helper('form');
    echo form_open('/ar/manage_recievable/update');
?>

<?php
    echo form_label('ID','ID');
    echo form_input('id','{id}');
?>
<br />

<?php
    echo form_label('Name','Name');
    echo form_input('name','{name}');
?>
<br />

<?php
    echo form_label('Status','Status');
    echo form_input('status','{status}');
?>
<br />

<?php
    //submit button to submit the form
    echo form_submit('', 'Submit');
    echo form_close();
?>
