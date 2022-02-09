<?php
    require_once("../private/initial.php");

    global $db;

    $sql = "SELECT * FROM awb_list where awb_select_state = 'Selected' ";
    $result = mysqli_query($db, $sql);
?>

<table>
    <tr>
        <th>awb_id</th>
        <th>awb_nr</th>
        <th>awb_select_state</th>
        <th>Weight</th>
        <th>Pcs</th>
        <th>Forwarder</th>
    </tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?php echo h($row['awb_id']); ?></td>
    <td><a href="<?php echo url_for('../public/show_awb.php?awb_id=' . h(u($row['awb_id'])));
    ?>">
    <?php echo h($row['awb_nr']); ?></a></td>
    <td><?php echo h($row['awb_select_state']); ?></td>
    <td><?php echo h($row['awb_weight']); ?></td>
    <td><?php echo h($row['awb_pcs']); ?></td>
    <td><?php echo h($row['awb_fwd']); ?></td>
</tr>
<?php } ?>
</table>

<?php mysqli_free_result($result);
?>