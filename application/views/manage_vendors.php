<?php
$this->load->helper('form');
echo form_open('/ap/manage_vendors/post');

echo form_label('ID', 'id');
echo form_input('id', '{id}');
echo form_label('Name', 'name');
echo form_input('name', '{name}');
echo form_label('Status', 'status');
echo form_input('status', '{status}');
echo form_submit('', 'OKKKKK' );

echo form_close();

?>

