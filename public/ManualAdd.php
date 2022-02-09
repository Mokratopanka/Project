    <!-- MUST have REAL PATH -->
<?php require_once("../private/initial.php"); ?>
<?php $page_title = 'Add a shipment manually'; ?>
<?php include(SHARED_PATH . "/header_menu.php"); ?>
<link rel="stylesheet" media="all"  href="<?php echo url_for('../css/add_edit.css'); ?>"/>


<body class=Add_Edit_body>
<form class="Add_Edit_Form" action="<?php echo url_for('../private/AWB-create.php'); ?>" method="post">
    <label class="Add_Edit_Header">Add shipment</label> 
        <dl>
            <dt class="Add_Edit_Header">AWB</dt>
                <dd>    <input class="Add_Edit_Inputs" type="text" name="AddEdit_AWB" placeholder="AWB"></dd>
        </dl>
        <dl>
            <dt class="Add_Edit_Header">Amount</dt>
                <dd>    <input class="Add_Edit_Inputs" type="text" name="AddEdit_pcs" placeholder="pieces"></dd>
        </dl>
        <dl>
            <dt class="Add_Edit_Header">Weight in kg</dt>
                <dd>    <input class="Add_Edit_Inputs" type="text" name="AddEdit_kg" placeholder="kg"></dd>
        
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
        <input type="datetime-local" my-date-format="dd/mm/yyyy, hh:mm" class="Add_Edit_body" />
        <br>
        <meter min="0" max="100" value="35"></meter>
        <br>
        <br>
        <br>

        <progress></progress>
        <br>

        <input type="text" class="Add_Edit_body" list="suggestions" size="50px" placeholder="Choose">
        <datalist id="suggestions">
            <option value="Swissport">Detail: Swissport</option>
            <option>T9</option>
            <option>T11</option>
            <option>Menzies</option>
        </datalist>

        <br>
        <br>
        <br>
        <br>

        <button type="submit" value="Submit" class="Add_Edit_btn_ok">Submit</button>
        <button type="cancel" class="Add_Edit_btn_cancel">X</button>             

</form>

<?php include(SHARED_PATH . '/footer.php');
?>
    