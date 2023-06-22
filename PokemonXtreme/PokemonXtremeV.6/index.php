<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
   include("include/functions/cf.php");
?>
<html lang="en-US" xml:lang="en-US" xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta />
      <title>PokemonXtreme - The Best Site on Pokemon Contents</title>
	  <link type="text/css" rel="stylesheet" href="css/version1/main.css" />
	  <link type="text/css" rel="stylesheet" href="css/version1/config.css" />
	  <link type="text/css" rel="stylesheet" href="css/version1/user_panel.css" />
	  <link type="text/css" rel="stylesheet" href="css/version1/fonts.css" />
	  <link type="text/css" rel="stylesheet" href="css/version1/menu_rapido.css" />
	  <script type="text/javascript" src="js/jquery.js"></script>
	  <script type="text/javascript" src="js/version1/user_panel.js"></script>
   </head>
   <body>
      <div id="user_panel">
	     <div id="panel">
		    <a href="javascript:slide_toggle();"><center>Pannello Di Controllo</center></a>
		 </div>
		 <?php
		    if(isset($_SESSION["username"]) || isset($_COOKIE["username"])){
			   include("include/user/member.php");
			} else{
			   include("include/user/login.php");
			}
		    include("include/layout/menu_rapido.php");	
		 ?>
	  </div>
	  <div id="header"></div>
	  <div id="start_body">
	      <div id="title_page">
		     <center style="margin-left: 225px;"><h2>News</h2></center>
		  </div>
	  </div>
	  <div id="body">
	     <table cellspacing="0px">
		    <tr>
			   <td valign="top">
			      <?php include("include/layout/menu.php"); ?>
			   </td>
			   <td valign="top">
			      <div id="content_area">
                     News
                  </div>
		       </td>
			</tr>
		 </table>
	  </div>
	  <div id="end_body"></div>
	  <?php include("include/layout/copyright.php"); ?>
   </body>
</html>