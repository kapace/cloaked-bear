    <?php
/* 
 * Home page view - information about the development environment.
 */
?>
<div>
    <h1>COMP4711 Assignment 1</h1>
    <h2>Accounts Payable</h2>
    <a href="/ap/add_vendors">Add a vendor</a>
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
        <td><a href="/ap/update/{id}">Update</a></td>
        <td><a href="/ap/delete/{id}">Delete</a></td>
    </tr>
    {/vendors}
</table>
