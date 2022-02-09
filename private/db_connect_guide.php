<?php
$db_host = 'localhost';
$db_user = 'mlk_db_reader';
$db_pass = 'MiLu';
$db_name = 'milkrun';

$db_conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()) {
    $msg = "Database connect failed: ";
    $msg .= mysqli_connect_error();
    $msg .= " (" . mysqli_connect_errno() . ")";
    exit($msg);
}

$db_close_conn = ($db_conn);

?>