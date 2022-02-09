<?php
        include 'data.php';
    ?>
    
    <?php
    $sum = 0;
    ?>
     
    <!-- Table -->
    
    <table class="Truck">
        <thead>
            <tr class="TruckHeader">
                <th><img src="#" alt="Icon"></th>
                <th>Truck Name</th>
            </tr>
            <tr class="TruckHeader">
                <th><a href="edit.php">Edit</a></th>
                <th><a href="#">Loading List</a></th>
                <th><a href="#">Manifest</a></th>
            </tr>
        </thead>

        <tbody>

            

            <tr class="TruckHeader">
                <td class="Truckload FWD">DHL</td>
            </tr>

            <?php foreach ($data as $info) : ?>

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