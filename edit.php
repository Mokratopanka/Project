<?php
    include_once 'includes/db_handler.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/edit.css">
    <title>Form</title>
</head>
<body>

    <?php
        $sql = "SELECT * FROM awb_list;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['awb_id'] . " = ";
                echo $row['awbnr'] . " , ";
                echo $row['total_pcs'] . " , ";
                echo $row['total_weight'] . " , ";
                echo $row['awb_selection'] . " , ";
                echo $row['prefix'] . "<br>";
            }
        }
    
    ?>

  <!-- Disform asign a driver to the truck. -->

        <!-- ADD to the form METHOD!-->

        <form class="former">

                <label class="header">Trucker</label>
                
                  <div class="selector">
                    <select class="selector01" name="Trucker" placeholder="Trucker">
                          <option value="1">TruckerName</option>
                          <option value="2">B</option>
                          <option value="3">C</option>
                    </select>
                  </div>  
            
                      <div class="inputs_head">
                      
                          <input class="inputs" type="text" id="example" placeholder="Name">
                          <input class="inputs" type="text" id="example" placeholder="Surname">
                          <input class="inputs" type="text" id="example" placeholder="ACN_nr">
                          <input class="inputs" type="text" id="example" placeholder="TruckReg">
                          <input class="inputs" type="text" id="example" placeholder="TrailerReg">
                      </div>

                            <button type="submit" value="Submit" class="btn_ok">Submit</button>
                            <button type="cancel" class="btn_cancel">X</button>

        </form>

</body>
</html>