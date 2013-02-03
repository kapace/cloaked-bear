<?php
if (!defined('APPPATH'))
    exit('No direct script access allowed');
/*
 * This is the main view for displaying all of the accounts receivable information.
 */
?>
<div class="receivablepane">
    <table cols="" border="0">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Status</th>
            <th></th>
            <th></th>
        </tr>
        {customers}
        <tr>
            <td>{id}</td>
            <td>{name}</td>
            <td>{status}</td>
            <td><a href="/ar/manage_receivable/update_page/{id}">Update</a></td>
            <td><a href="/ar/manage_receivable/delete_customer/{id}">Delete</a></td>
        </tr>
        {/customers}
    </table>
    
    <a href="/ar/manage_receivable/add_page">Add Receivable</a>
</div>
