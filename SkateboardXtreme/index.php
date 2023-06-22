<!DOCTYPE html>
<?php
   include("include/cf.php");
?>
<html>
   <head>
      <title>SkateboardXtreme - The Skateboarding Comunity</title>
	  <link type="text/css" rel="stylesheet" href="css/main.css" />
	  <link type="text/css" rel="stylesheet" href="css/fonts.css" />
	  <link type="text/css" rel="stylesheet" href="css/config.css" />
	  <link type="text/css" rel="stylesheet" href="css/forms.css" />
   </head>
   <body>
      <div id="main">
         <?php
		    if(loggedin()){
			   include("pagine/member_welcome_menu.php");
			} else{
			   echo "<div id='login_pannel'>";
               echo "
	                 <form id='login' action='' method='post'>
			            Username: <input type='text' name='username' />&nbsp;&nbsp;
			            Password: <input type='password' name='password' />
			            <input type='submit' name='login' value='Login' /><br />
			            <input type='checkbox' name='remember_me' id='remember_me' /> <label for='remember_me'>Rimani Collegato</label> <a id='register' href='index.php?register=user'>Registrati</a> | <a href=''>Recupera Password</a>
			         </form>
			   ";
			   if(isset($_POST["login"])){
			      include("pagine/login.php");
			   }
			   echo "</div>";
			}
			if(@$_GET["logout"]){
			   include("pagine/logout.php");
			}
		 ?>
         <div id="header"></div>
	     <div id="menu_rapido">
            <div class="links">
               <a href="index.php">Home</a> | <a href="index.php?about=about">About</a> | <a href="index.php?video=video">Video</a> | <a href="index.php?images=immagini">Immagini</a>
            </div>
         </div>
         <div id="body">
            <div id="contents">
               <?php
	              if(@$_GET["register"]){
		             include("pagine/register.php");
		          }
		          if(@$_GET["confirm"]){
		             include("pagine/confirm.php");
		          }
				  if(loggedin()){
				     include("pagine/member.php");
				  }
	           ?>
            </div>
            <hr />
            <div id="end">
               <center>
                  <ul>
	                 <li><a href="">Home</a> | </li>
		             <li><a href="">About</a> | </li>
		         	 <li><a href="">Immagini</a> | </li>
		             <li><a href="">Video</a></li>
	              </ul>
	           </center>
            </div>
	     </div>
	  </div>
   </body>
</html>