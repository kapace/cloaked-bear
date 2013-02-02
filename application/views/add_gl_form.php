<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


$this->load->helper('form');
echo form_open('/add_gl/post');

echo form_label('Account ID', 'account_id');
echo form_input('account_id', '{account_id}');

echo form_label('Account Date', 'account_date');
echo form_input('account_date', '{account_date}');

echo form_label('Account Name', 'account_name');
echo form_input('account_name', '{account_name}');

echo form_label('Account Status', 'account_status');
echo form_input('account_status', '{account_status}');

echo form_submit('', 'Submit');
echo form_close();
?>