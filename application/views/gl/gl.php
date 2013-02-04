<?php

?>
<!-- 
HTML code to organize the data 
and also provide buttons for user interaction
-->
<div>
    <h1>COMP4711 Assignment 1</h1>
    <h2>General Ledger</h2>
    <a href="/gl/add_gl">Add Accounts</a>
</div>

<table cols="" border="0">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Date</th>
        <th>Status</th>
    </tr>
    {accounts}
    <tr>
        <td>{id}</td>
        <td>{account_name}</td>
        <td>{account_date}</td>
        <td>{account_status}</td>
        <td><a href="/gl/add_gl/update_form/{id}">Update</a></td>
        <td><a href="/gl/add_gl/delete/{id}">Delete</a></td>
    </tr>
    {/accounts}
</table>