<?php
if (!defined('APPPATH'))
    exit('No direct script access allowed');
/**
 * views/homepage.php
 *
 * Present the welcome page body.
 * shows IC homepage and the SQL table... I think
 */
?>

<div>
    <h1>COMP4711 Assignment 1</h1>
    <h2>Inventory Control</h2>
    <a href="/ic/add_product">Add Product</a>
</div>

<table cols="" border="0">
    <tr>
        <th>IC Homepage</th>
    </tr>
    {products}
    <tr>
        <td>{productID}</td>
        <td>{product}</td>
    </tr>
    {/products}
</table>