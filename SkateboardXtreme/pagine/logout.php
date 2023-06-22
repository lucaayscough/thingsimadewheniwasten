<?php
   if(basename($_SERVER['SCRIPT_FILENAME']) == "logout.php"){
      header("location: ../index.php");
      exit;
   }
   session_start();
   session_destroy();
   setcookie("username","",time()-100000);
   header("location: include/log_user.php");
?>