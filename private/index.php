<?php
   // MUST have REAL PATH
   require_once("initial.php");
 
 
   // need to complete user is admin check
   if($user = false) {
    redirect_to('../public/index.php');
   }
?>