<?php

function find_awb_selected () { 
    global $db;
    
    $sql = "SELECT * FROM awb_list where awb_select_state is 'Selected' ";
    $result = mysqli_query($db, $sql);
    return $result;
}

function find_awb_by_id($id) {
    global $db;

    $sql = "SELECT * FROM awb_list WHERE awb_id='" . $id . "'";
    $result = mysqli_query($db, $sql);
    $res_helper = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $res_helper;
}

?>