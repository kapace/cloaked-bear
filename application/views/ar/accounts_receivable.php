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
            <th>{id}</th>
            <th>{name}</th>
            <th>{status}</th>
            <th><a href="/ar/manage_receivable/update_page/{id}">Update</a></th>
            <th>Delete</th>
        </tr>
        {/customers}
    </table>
    
    <a href="/ar/manage_receivable/add_page">Add Receivable</a>
</div>
