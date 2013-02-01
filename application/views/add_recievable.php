<?php
    //Code for putting together the form for fields ID, first name, last name
    // email
    $this->load->helper('form');
    echo form_open('/ar/add_recievable/post');
    
    echo form_label('Order ID','OrderId');
    echo form_input('Order ID','{OrderId}');
    
    echo form_label('Customer ID','CustomerId');
    echo form_input('Customer ID','{CustomerId}');
    
    echo form_label('Customer Name','CustomerName');
    echo form_input('Customer Name','{CustomerName}');
    
    echo form_label('Amount Owed','AmountOwed');
    echo form_input('Amount Owed','{AmountOwed}');
    
    echo form_label('Due Date','DueDate');
    echo form_input('Due Date','{DueDate}');
    
    //ok button to submit the form
    echo form_submit('', 'Ok');
    echo form_close();
?>
