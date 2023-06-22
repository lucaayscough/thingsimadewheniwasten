<?php
   if(basename($_SERVER['SCRIPT_FILENAME']) == "cf.php"){
         header("location: /index.php");
   	  exit();
   }
   function connect(){
      mysql_connect("localhost","root","");
	  mysql_select_db("users");
   }
?>