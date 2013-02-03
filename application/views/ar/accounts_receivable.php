<?php
if (!defined('APPPATH'))
    exit('No direct script access allowed');
/*
 * This is the main view for displaying all of the accounts receivable information.
 *
 * @author - aliao17 Albert Liao A00536695
 */
?>
<div class="receivablepane">
    <table cols="" border="0">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Status</td>
            <td></td>
            <td></td>
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
