<?php
require_once('../private/db_credentials.php');

function db_connect() {
    $connection = mysqli_connect(db_server, db_user, db_pass, db_name);
    confirm_db_coonect();
    return $connection;
};

function db_disconnect($connection) {
    if(isset($connection)) {
        mysqli_close($connection);
    }
}


function confirm_db_coonect() {
if(mysqli_connect_errno()) {
    $msg = "Database connect failed: ";
    $msg .= mysqli_connect_error();
    $msg .= " (" . mysqli_connect_errno() . ")";
    exit($msg);
    }
}


?>