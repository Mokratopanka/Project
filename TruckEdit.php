<?php
    require_once "includes/db_handler.php"
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/edit.css">
    <title>Edit Truck Form</title>
</head>
<body>
  
<?php
        $sql = "SELECT * FROM drivers ";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
?>

<?php
         if ($resultCheck > 0){}    
?>


  <!-- This form edit the truck and assign a driver. -->
  <!-- ADD to the form METHOD!-->

        <form class="former" action="includes/post_db.php" method="POST">

                <label class="header">TRUCK NAME DOPLN</label>

              <!-- takes a driver from db in format Surname Name in select -->
  
            
                   <select class="selector01" name="name_01">;
                        <option value="" disabled selected hidden>Driver</option>      
                        <?php  while ($row = mysqli_fetch_assoc($result)){echo '<option>' . $row['driver_name'] . ' ' . $row['driver_surname'] . '</option>';};
                        

                        ?>
                   </select>
                        
                
           <?php  $sql = "SELECT * FROM trucks WHERE trucker_nr IS NOT NULL ";
                  $result = mysqli_query($conn, $sql);
                  $resultCheck = mysqli_num_rows($result);
            ?>             

              <!--  takes a trucker trucker_reg_nr from db -->
                    <select class="selector01" name="truckers">
                          <option value="" disabled selected hidden>Truckers</option>
                          <?php while ($row = mysqli_fetch_assoc($result)){echo '<option>' . $row['trucker_nr'] . '</option>';}
              echo '</select>';
                         
                        ?>

            <?php  $sql = "SELECT * FROM trucks WHERE trailer_nr IS NOT NULL ";
                  $result = mysqli_query($conn, $sql);
                  $resultCheck = mysqli_num_rows($result);
            ?>
                    

            <!-- takes a trailer trailer_reg_nr from db-->
                        <select class="selector01" name="trailers">
                         <option value="" disabled selected hidden>Trailers</option>
                         <?php while ($row = mysqli_fetch_assoc($result)){echo '<option>' . $row['trailer_nr'] . '</option>';}
                       echo '</select>';
                       
            ?>                   
                  </div>  
            
                      <div class="inputs_head">
                      
                          <input class="inputs" type="text" name="first" placeholder="Name">
                          <input class="inputs" type="text" name="sur" placeholder="Surname">
                          <input class="inputs" type="text" name="acn" placeholder="ACN_nr">
                          <input class="inputs" type="text" name="tru_reg" placeholder="TruckReg">
                          <input class="inputs" type="text" name="tra_reg" placeholder="TrailerReg">
                      </div>

                      <button type="Add_driver" value="Add" class="btn_add">Add a driver</button>

                            <button type="submit" value="submit" class="btn_ok">Submit</button>
                            <button type="cancel" class="btn_cancel">X</button>
             

        </form>

</body>
</html>