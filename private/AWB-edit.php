<?php require_once("../private/initial.php"); 
// MUST have REAL PATH
if(!isset($_GET['AWB_id'])) {
    redirect_to(url_for('../public/index.php'));
}

$AWB_id = $_GET['AWB_id'];
$AWB = '';
$pcs = '';
$kg = '';
$GHA = '';
$FWD = '';

if(is_post_request()) {
//shows submited data from ManualAdd.php
$AWB_id = $_POST['AWB_id'] ?? '';
$AWB = $_POST['AddEdit_AWB'] ?? '';
$PCS = $_POST['AddEdit_pcs'] ?? '';
$KG = $_POST['AddEdit_kg'] ?? '';
$GHA = $_POST['AddEdit_GHA'] ?? '';
$FWD = $_POST['AddEdit_FWD'] ?? '';


echo "Form parametrs <br>";
echo "AWB_id: " . $AWB_id . "<br>";
echo "AWB number: " . $AWB . "<br>";
echo "AWB number: " . $PCS . "<br>";
echo "AWB number: " . $KG . "<br>";
echo "AWB number: " . $GHA . "<br>";
echo "AWB number: " . $FWD . "<br>";
}
else {
    redirect_to(url_for('/ManualAdd.php'));
}
?>
<?php $page_title = 'Edit a shipment'; ?>
<?php include(SHARED_PATH . "/header_menu.php"); ?>
<link rel="stylesheet" media="all"  href="<?php echo url_for('../css/add_edit.css'); ?>"/>


<body class=Add_Edit_body>
<form class="Add_Edit_Form" action="<?php echo url_for('../public/AWB-edit.php?awb_id=' . h(u($AWB_id))); ?>" method="post">
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
                    <select class="Add_Edit_Selector01" name="AddEdit_GHA">
                        <option value="choose from list">choose from list</option>
                    </select>
                </dd>
        </dl>
        <dl>
            <dt class="Add_Edit_Header">Forwarder</dt>
                 <dd>    
                    <select class="Add_Edit_Selector01" name="AddEdit_FWD">
                        <option value="choose from list">choose from list</option>
                    </select>
                </dd>
        </dl> 
        <br>
        <button type="submit" value="Submit" class="btn_ok">Submit</button>
        <button type="cancel" class="btn_cancel">X</button>             

</form>

<?php include(SHARED_PATH . '/footer.php');
?>
    