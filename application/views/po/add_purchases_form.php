<?php
    // Aaron, Steve
    // call CI functions to input HTML input forms
    $this->load->helper('form');
    echo form_open('/po/crud_purchase/post');
    
    echo form_label('Product ID', 'productid');
    echo form_input('productid', '{id}');

    echo form_label('Product Name', 'productname');
    echo form_input('productname', '{productname}');

    echo form_label('Product Status', 'productstatus');
    echo form_input('productstatus', '{productstatus}');

    echo form_label('Product Date', 'productdate');
    echo form_input('productdate', '{productdate}');

    echo form_label('Quantity', 'quantity');
    echo form_input('quantity', '{quantity}');
    
    echo form_label('Reorder Point', 'reorderpoint');
    echo form_input('reorderpoint', '{reorderpoint}');
    
    echo form_label('Reorder Quantity', 'reorderqty');
    echo form_input('reorderqty', '{reorderqty}');
    
    echo form_label('Supplier Number', 'supplierno');
    echo form_input('supplierno', '{supplierno}');

    echo form_submit('', 'Submit' );

    echo form_close();
?>
