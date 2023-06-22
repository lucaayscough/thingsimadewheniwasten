<?php
   if(basename($_SERVER['SCRIPT_FILENAME']) == "cf.php"){
      header("location: ../index.php");
      exit;
   }
   session_start();
   $mysql_error = "Errore di connessione, riprova piu' tardi o prova a contattare l' amministratore a questo indirizzo: lucaayscough@gmail.com";
   function connect_db(){
      mysql_connect("localhost","root","") or die($mysql_error);
	  mysql_select_db("skateboardxtreme") or die($mysql_error);
   }
   function loggedin(){
      if(isset($_SESSION['username']) || isset($_COOKIE['username'])){
	     $loggedin = TRUE;
		 return $loggedin;
	  }
   }
?>