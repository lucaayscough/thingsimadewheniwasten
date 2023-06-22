<?php
   if(basename($_SERVER['SCRIPT_FILENAME']) == "log_user.php"){
      header("location: ../index.php");
      exit;
   }
   header("location: ../index.php");
?>