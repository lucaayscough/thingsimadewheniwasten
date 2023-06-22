<?php
   if(isset($_POST["login"])){
      $username = $_POST["username"];
	  $password = $_POST["password"];
   }
?>

<div id="show_panel">
   <div id="login_form">
      <h3>Login</h3>
      <form action="" method="post">
         <table><tr><td>
            Username: </td><td><input class="text_field" type="text" name="username" value="" /></td>
   	     </tr><tr><td>
   	        Password: </td><td><input class="text_field" type="password" name="password" /></td>
   	     </tr></table>
   	     <div align="right"><input id="login_submit" type="submit" name="login" value="" /></div>
      </form>
      <hr />
      <center><a href="/pagine/users/register.php">Registrati</a> | <a href="/pagine/users/reset_pass.php">Reset Password</a></center>
   </div>
</div>