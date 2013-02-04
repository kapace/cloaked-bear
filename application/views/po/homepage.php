<?php

if (!defined('APPPATH'))
    exit('No direct script access allowed');

/**
 * 
 * views/po/homepage.php
 * 
 * Homepage for purchasing (PO) using tables
 * 
 * @author Aaron Lee, Steve Lo
 * --------------------------------------------
 */
?>
<div>
    <h1>COMP4711 Assignment 1</h1>
    <h2>Purchase Orders</h2>
    <a href="/po/crud_purchase">Add Order</a>
</div>

<table cols="" border="0">
    <tr>
        <th>Product ID</th>
        <th>Product Name</th>
        <th>Product Status</th>
        <th>Product Date</th>
        <th>Quantity</th>
        <th>Reorder Point</th>
        <th>Reorder Qty</th>
        <th>Supplier No.</th>
        <th>:</th>
        <th>)</th>
    </tr>
    {purchases}
    <tr>
        <td>{id}</td>
        <td>{productname}</td>
        <td>{productstatus}</td>
        <td>{productdate}</td>
        <td>{quantity}</td>
        <td>{reorderpoint}</td>
        <td>{reorderqty}</td>
        <td>{supplierno}</td>
        <td><a href="/po/crud_purchase/delete/{id}">X</a></td>
        <td><a href="/po/crud_purchase/update_form/{id}">U</a></td>
    </tr>
    {/purchases}
</table>