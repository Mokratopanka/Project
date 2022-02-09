<?php
                  include_once 'db_handler.php';

                  $first = $_POST['first'];
                  $sur = $_POST['sur'];
                  $trucker_nr_post = $_POST['truckers'];
                  $trailer_nr_post = $_POST['trailers'];
                  $name_01 = $_POST['name_01'];                                  
                  $acn_nr = $_POST['acn'];           
                  $trai_reg  = $_POST['tra_reg'];              
                  $truc_reg = $_POST['tru_reg'];                
                                   
                  
                  $sql = "INSERT INTO trucks_01 (first_name_01, sur_name_01, trucker_nr_01, trailer_nr_01, name_01, ACN_nr, TruckReg, TrailerReg) "; 
                  $sql .= "VALUES ('$first' , '$sur' , '$trucker_nr_post' , '$trailer_nr_post' , '$name_01' , '$acn_nr' , '$trai_reg' , '$truc_reg')";
                  mysqli_query($conn, $sql);
                   

                  
                  
                  header("Location: ../Truckedit.php?postdb=success");
?>