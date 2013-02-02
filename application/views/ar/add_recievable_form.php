<?php
    //Code for putting together the form for fields ID, first name, last name
    // email
    $this->load->helper('form');
    echo form_open('/ar/manage_recievable/create');

    echo form_label('ID','ID');
    echo form_input('id','{id}');

    echo form_label('Order ID','OrderId');
    echo form_input('OrderID','{OrderId}');
    
    echo form_label('Customer ID','CustomerId');
    echo form_input('CustomerID','{CustomerId}');
    
    echo form_label('Customer Name','CustomerName');
    echo form_input('CustomerName','{CustomerName}');
    
    echo form_label('Amount Owed','AmountOwed');
    echo form_input('AmountOwed','{AmountOwed}');
    
    echo form_label('Due Date','DueDate');
    echo form_input('DueDate','{DueDate}');
    
    //submit button to submit the form
    echo form_submit('', 'Submit');
    echo form_close();
?>
