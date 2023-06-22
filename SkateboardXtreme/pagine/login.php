<?php
   if(basename($_SERVER['SCRIPT_FILENAME']) == "login.php"){
      header("location: ../index.php");
      exit;
   }
?>
<div id="login_error_area">
   <div id="login_error">
      <?php
	  	 connect_db();
         $username = @mysql_real_escape_string($_POST["username"]);
         $password = @mysql_real_escape_string($_POST["password"]);
         $remember_me = @$_POST["remember_me"];
	     if(!$username || !$password){
	        echo "Inserisci tutti i campi.";
	     } else{
		    $check_if_username_is_correct = mysql_query("SELECT username FROM users WHERE username='$username'");
			if(mysql_num_rows($check_if_username_is_correct)==0){
			   echo "Non esiste nessun utente con questo username.";
			} else{
			   $password = md5($password);
			   $check_if_password_is_correct = mysql_query("SELECT password FROM users WHERE password='$password' AND username='$username'");
			   if(mysql_num_rows($check_if_password_is_correct)==0){
			      echo "Password errata.";
			   } else{
			      $check_if_account_is_active = mysql_query("SELECT active FROM users WHERE username='$username' AND active='1'");
				  if(mysql_num_rows($check_if_account_is_active)==0){
				     echo "Il tuo account non e' ancora attivo.";
				  } else{
				     if($remember_me == "on"){
					    setcookie("username",$username,time()+100000);
						header("location: include/log_user.php");
						exit();
					 } else if($remember_me == ""){
					    $_SESSION["username"]=$username;
						header("location: include/log_user.php");
						exit();
					 }
				  }
			   }
			}
		 }
      ?>
   </div>
</div>