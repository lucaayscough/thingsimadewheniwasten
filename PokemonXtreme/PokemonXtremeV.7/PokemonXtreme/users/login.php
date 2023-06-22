<?php
   if(basename($_SERVER['SCRIPT_FILENAME']) == "login.php"){
         header("location: /index.php");
   	  exit();
   }
?>
<div id="login_box">
   <a href="?p=register">Registrati</a><br />
   <a href="?p=reset_pass">Resetta Password</a>
</div>