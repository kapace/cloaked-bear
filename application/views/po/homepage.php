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
    </tr>
    {purchases}
    <tr>
        <td>{productid}</td>
        <td>{productname}</td>
        <td>{productstatus}</td>
        <td>{productdate}</td>
        <td>{quantity}</td>
        <td>{reorderpoint}</td>
        <td>{reorderqty}</td>
        <td>{supplierno}</td>
    </tr>
    {/purchases}
</table>