    <!-- MUST have REAL PATH -->
<?php require_once("../private/initial.php"); ?>

<?php $page_title = 'Milkrun 2022'; ?>
<?php include(SHARED_PATH . "/header_menu.php"); ?>

<?php include(PUBLIC_PATH . "/truck-list.php"); ?>

    <!-- Filters -->
<section class="Filter_Section">Filters
    <div class="Filter_Section">
        <select>
            <option name="AWB_Green" id="Filter_AWB_Green">Green</option>
            <option name="AWB_ARR" id="Filter_AWB_ARR">Arrived</option>
            <option name="AWB_Blocked" id="Filter_AWB_Block">Blocked</option>
            <option name="AWB_WarehouseStop" id="Filter_WHS_Stop">Warehouse STOP</option>
        </select>

        <!-- Filters GHA Locations--> 
        <select>
            <option name="GHA_Default" id="GHA_Default">-Defualt-</option>
            <option name="GHA_Menzies" id="GHA_Menzies">Menzies</option>
            <option name="GHA_Swissport" id="GHA_Swissport">Swissport</option>
            <option name="GHA_T9" id="GHA_T9">Swissport T9</option>
            <option name="GHA_T11" id="GHA_T11">Swissport T11</option>
        </select>
        
        <select>
            <option name="Filter_All" id="Filter_All">All shipments</option>
            <option name="Filter_Loose" id="Filter_Loose">Loose shipments</option>
            <option name="Filter_ULD" id="Filter_ULD">ULD</option>
            <option name="Filter_Combined" id="Filter_Combined">Combined freight</option>
        </select>
    </div>
</section>

<section>
    <div class="Fitler_Box_Area">
        <div class="Filter_Box">
        <input type="hidden" name="GHA_Default" value="0" />    
        <input type="checkbox" name="GHA_Default" value="1"
            checked>
        <label for="GHA_Default">-Defualt-</label>

        <input type="hidden" name="GHA_Menzies" value="0" />   
        <input type="checkbox" name="GHA_Menzies" value="1"
            checked>
        <label for="GHA_Menzies">Menzies</label>

        <input type="hidden" name="GHA_Swissport" value="0" />   
        <input type="checkbox" name="GHA_Swissport" value="1"
            checked>
        <label for="GHA_Swissport">Swissport</label>

        <input type="hidden" name="GHA_T9" value="0" />   
        <input type="checkbox" name="GHA_T9" value="1"
            checked>
        <label for="GHA_T9">T9</label>

        <input type="hidden" name="GHA_T11" value="0" />   
        <input type="checkbox" name="GHA_T11" value="1"
            checked>
        <label for="GHA_T11">T11</label>
        </div>
    </div>
</section>

<br>
<br>

    <!-- Selection list -->
<section id="list_selected">
    <?php include(PUBLIC_PATH . "/list_selected.php"); 
    ?>
</section>

<?php include(SHARED_PATH . '/footer.php');
?>
    