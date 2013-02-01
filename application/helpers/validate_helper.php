<?php
function validate_name($name) {
    return preg_match('/^[A-Za-z]/', $name) === 1;
}
?>
