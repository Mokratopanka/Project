<?php
require_once('../private/initial.php');
if(is_post_request()) {
//shows submited data from ManualAdd.php
$AWB = $_POST['AddEdit_AWB'] ?? '';
$PCS = $_POST['AddEdit_pcs'] ?? '';
$KG = $_POST['AddEdit_kg'] ?? '';
$GHA = $_POST['AddEdit_GHA'] ?? '';
$FWD = $_POST['AddEdit_FWD'] ?? '';

$sql = "INSERT INTO awb_list (awb_nr, awb_pcs, awb_weight, awb_gha, awb_fwd) VALUES (";
$sql .= "'" . $AWB . "',";
$sql .= "'" . $PCS . "',";
$sql .= "'" . $KG . "',";
$sql .= "'" . $GHA . "',";
$sql .= "'" . $FWD . "'";
$sql .= ")";
$result = mysqli_query($db, $sql);

if($result) {
    $new_id = mysqli_insert_id($db);
    redirect_to(url_for('../public/AWB-show.php?awb_id=' . $new_id));
} else {
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
}


}
else {
    redirect_to(url_for('/ManualAdd.php'));
}
?>


