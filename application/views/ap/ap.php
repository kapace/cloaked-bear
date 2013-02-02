    <?php
/* 
 * Home page view - information about the development environment.
 */
?>
<div>
    <h1>COMP4711 Assignment 1</h1>
    <h2>Accounts Payable</h2>
    <a href="/ap/manage_vendors">Add Vendors</a>
</div>



<table cols="" border="0">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Status</th>
    </tr>
    {vendors}
    <tr>
        <td>{id}</td>
        <td>{name}</td>
        <td>{status}</td>
        <td><a href="/ap/manage_vendors/update_form/{id}">Update</a></td>
        <td><a href="/ap/manage_vendors/delete/{id}">Delete</a></td>
    </tr>
    {/vendors}
</table>
