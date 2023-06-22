<?php
   if(basename($_SERVER['SCRIPT_FILENAME']) == "page.php"){
         header("location: /index.php");
   	  exit();
   }
   if(!isset($_GET["p"]) || isset($_GET["version"])){
      echo "
	     <title>PokemonXtreme - The best site on Pokemon contents</title>
	     <h1>News</h1>
	  ";
   }
   if(@$_GET["p"]=="disclaimer"){
   }
   if(@$_GET["p"]=="contact"){
   }
   if(@$_GET["p"]=="affiliate"){
   }
   if(@$_GET["p"]=="story"){
   }
   if(@$_GET["p"]=="register"){
      include("users/register.php");
   }
   if(@$_GET["p"]=="reset_pass"){
   }
?>