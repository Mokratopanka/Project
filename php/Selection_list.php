<?php
        include 'selected.php';
    ?>
    

    <!-- Table -->
    
    <table class="Selection-List">
        <thead>
            <tr class="Selection-List-Header">
                <th> 
                <select>
                <option name="AWB_All" id="Filter_AWB_All">All</option>
                    <option name="AWB_Green" id="Filter_AWB_Green">Green</option>
                    <option name="AWB_ARR" id="Filter_AWB_ARR">Arrived</option>
                    <option name="AWB_Blocked" id="Filter_AWB_Block">Blocked</option>
                    <option name="AWB_WarehouseStop" id="Filter_WHS_Stop">Warehouse STOP</option>
                </select>
                </th>    
                <th> 
                <select>
                    <option name="Filter_All" id="Filter_All">All shipments</option>
                    <option name="Filter_Loose" id="Filter_Loose">Loose shipments</option>
                    <option name="Filter_ULD" id="Filter_ULD">ULD</option>
                    <option name="Filter_Combined" id="Filter_Combined">Combined freight</option>
                </select>
                </th>   
                <th> 
                    <div class="Fitler_Box_Area">
                        <div class="Filter_Box">
                        <input type="checkbox" id="GHA_Default" name="GHA_Default"
                            checked>
                        <label for="GHA_Default">-Defualt-</label>

                        <input type="checkbox" id="GHA_Menzies" name="GHA_Menzies"
                            checked>
                        <label for="GHA_Menzies">Menzies</label>

                        <input type="checkbox" id="GHA_Swissport" name="GHA_Swissport"
                            checked>
                        <label for="GHA_Swissport">Swissport</label>

                        <input type="checkbox" id="GHA_T9" name="GHA_T9"
                            checked>
                        <label for="GHA_T9">T9</label>

                        <input type="checkbox" id="GHA_T11" name="GHA_T11"
                            checked>
                        <label for="GHA_T11">T11</label>
                    </div>
                </th>   
            </tr>
            <tr class="Selection-List">
                <th><a href="#">Edit</a></th>
                <th><a href="#">Loading List</a></th>
                <th><a href="#">Manifest</a></th>
            </tr>
        </thead>

        <tbody>

        <?php foreach ($data as $info) : ?>    

            <tr class="TruckHeader">
                <td class="Truckload FWD">DHL</td>
            </tr>
            <tr class="TruckContent">
                <td class="AWB"><?php echo $info["Icon"] ;?></td>
                <td class="AWB"><?php echo $info["AWB"] ;?></td>
                <td class="AWB"><?php echo number_format($info["Amount"]). (" pcs") ;?></td>
                <td class="AWB"><?php echo number_format($info["Weight"]). (" kg") ;?></td>
                <td class="AWB"><?php echo $info["Time"]?></td>
            </tr>

        <?php endforeach; ?>
        </tbody>
        <tfoot>

            <?php foreach ($data as $info) : ?>
              
                <?php $sum += $info["Weight"];?>
                <?php endforeach ?>
            <tr>
                <td><?php echo number_format($sum). (" kg")?></td>
                <td></td>
            </tr>
        </tfoot>
    </table>