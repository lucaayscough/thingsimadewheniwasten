<?php
   session_start();
   function connect(){
      mysql_connect("localhost","root","");
	  mysql_select_db("users");
   }
?>