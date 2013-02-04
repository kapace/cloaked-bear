<?php
function validate_name($name) {
    return preg_match('/^[A-Za-z]/', $name) === 1;
}

function validate_id($id) {
    return preg_match('/^[0-9]{3}/', $id) === 1;
}

function validate_date($date) {
    return preg_match('/^[0-9]{4}.[0-9]{2}.[0-9]{2}/', $date) === 1;
}

function validate_status($status) {
    return preg_match('/^(A|D)$/', $status ) === 1;
}
?>
