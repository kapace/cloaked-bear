<?php
if (!defined('APPPATH'))
    exit('No direct script access allowed');
/*
 * This is the main view for displaying all of the accounts recievable information.
 */
?>

<table cols="" border="0">
    <tr>
        <th>ID</th>
        <th>Order ID</th>
        <th>Customer ID</th>
        <th>Customer Name</th>
        <th>Amount Owed</th>
        <th>Due Date</th>
        <th></th>
        <th></th>
    </tr>
    {customers}
    <tr>
        <th>{id}</th>
        <th>{OrderId}</th>
        <th>{CustomerId}</th>
        <th>{CustomerName}</th>
        <th>{AmountOwed}</th>
        <th>{DueDate}</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    {/customers}
</table>

<a href="/ar/manage_recievable">Add Receivable</a>