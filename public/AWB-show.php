<?php require_once('../private/initial.php'); ?>

<?php
$id = $_GET['awb_id'] ?? '1';

$res_helper = find_awb_by_id($id);


?>

<div>

Subject ID: <?php echo h($id); ?>


</div>