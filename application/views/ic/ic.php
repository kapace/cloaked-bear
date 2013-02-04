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