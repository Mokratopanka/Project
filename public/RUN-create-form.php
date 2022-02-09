<!-- MUST have REAL PATH -->
<?php require_once("../private/initial.php"); ?>
<?php $page_title = 'Add a Milkrun'; ?>
<?php include(SHARED_PATH . "/header_menu.php"); ?>
<link rel="stylesheet" media="all"  href="<?php echo url_for('../css/add_edit.css'); ?>"/>

<body class=Add_Edit_body>
<form class="Add_Edit_Form" action="<?php echo url_for('../private/RUN-create.php'); ?>" method="post">
    <label class="Add_Edit_Header">Add Milkrun</label> 
        <dl>
            <dt class="Add_Edit_Header">Milkrun name:</dt>
                <dd>    <input class="Add_Edit_Inputs" type="text" name="AddEdit_AWB" placeholder="Milkrun Name"></dd>
        </dl>
        <dl>
        <input type="datetime-local" my-date-format="dd/mm/yyyy, hh:mm" class="Add_Edit_body" />
        </dl>
        <dl>
        <dt class="Add_Edit_Header">Ground Handler</dt>
                <dd>
                    <?php
                        $sql = "SELECT * FROM gha WHERE gha_is_active is true order by gha_fname asc ";
                        $result = mysqli_query($db, $sql);
                                echo '<div class="Add_Edit_Selector">';
                                echo '<select class="Add_Edit_Selector01" name="AddEdit_GHA" placeholder="Ground Handler">';
                                    while ($row = mysqli_fetch_array($result)) {
                                    echo '<option>' . $row['gha_fname'] . '</option>';
                                }
                                echo '</select>';
                                echo '</div>';
                                mysqli_free_result($result)
                    ?>
                </dd>
        </dl>
        <dl>
            <dt class="Add_Edit_Header">Forwarder</dt>
                 <dd>
                    <?php
                            $sql = "SELECT * FROM forwarders WHERE fwd_fname is not null ";
                            $result = mysqli_query($db, $sql);
                                    
                                    echo '<div class="Add_Edit_Selector">';
                                    echo '<select class="Add_Edit_Selector01" name="AddEdit_FWD" placeholder="Forwarder">';
                                        while ($row = mysqli_fetch_array($result)) {
                                        echo '<option>' . $row['fwd_fname'] . '</option>';
                                    }
                                    echo '</select>';
                                    echo '</div>';
                                    mysqli_free_result($result)
                    ?>   
                  
                </dd>
        </dl> 
        <br>
  
        <button type="submit" value="Submit" class="Add_Edit_btn_ok">Submit</button>
        <button type="cancel" class="Add_Edit_btn_cancel">&times</button>             

</form>

<?php include(SHARED_PATH . '/footer.php');
?>
    