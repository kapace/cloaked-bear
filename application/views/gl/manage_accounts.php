<?php

//Load the form helper
$this->load->helper('form');
echo form_open('/gl/add_gl/{action}');

//Display the Textbox labels and Input boxes
echo form_label('ID', 'id');
echo form_input('id', '{id}');

echo form_label('Account Name', 'account_name');
echo form_input('account_name', '{account_name}');

echo form_label('Account Date', 'account_date');
echo form_input('account_date', '{account_date}');

echo form_label('Account Status', 'account_status');
echo form_input('account_status', '{account_status}');

echo form_submit('', 'Submit' );

echo form_close();

?>