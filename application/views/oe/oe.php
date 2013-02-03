    <?php
/* 
 * Home page view - information about the development environment.
 */
?>
<div>
    <h1>COMP4711 Assignment 1</h1>
    <h2>Order Entry</h2>
    <a href="/oe/manage_vendors">Add Vendors</a>
</div>



<table cols="" border="0">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Status</th>
        <th>Date</th>
    </tr>
    {invoices}
    <tr>
        <td>{id}</td>
        <td>{name}</td>
        <td>{status}</td>
        <td>{date}</td>
        <td><a href="/oe/manage_invoices/update_form/{id}">Update</a></td>
        <td><a href="/oe/manage_invoices/delete/{id}">Delete</a></td>
    </tr>
    {/invoices}
</table>
