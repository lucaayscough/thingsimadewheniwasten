<h1>Registrati</h1>
<?php
   if(basename($_SERVER['SCRIPT_FILENAME']) == "register.php"){
      header("location: ../index.php");
	  exit();
   }
   $username = @mysql_real_escape_string($_POST["username"]);
   $password = @mysql_real_escape_string($_POST["password"]);
   $re_password = @mysql_real_escape_string($_POST["re_password"]);
   $password_non_crypt = @mysql_real_escape_string($_POST["password"]);
   $mail = @mysql_real_escape_string($_POST["mail"]);
   $re_mail = @mysql_real_escape_string($_POST["re_mail"]);
   $message_allert1 = "<div id='register_error_message'><center><h1>Messaggio</h1>";
   $message_allert2 = "</center></div>";
   if(isset($_POST["register"])){
      if(!$username || !$password || !$re_password || !$mail || !$re_mail){
	     echo $message_allert1 . "Non hai riempito tutti i campi." . $message_allert2;
	  } else{
	     if($password != $re_password || $mail != $re_mail){
		    echo $message_allert1;
		    if($password != $re_password){
			   echo "Le due password non corrispondono.<br />";
			}
			if($mail != $re_mail){
			   echo "Le due e-mail non corrispondono.";
			}
			echo $message_allert2;
		 } else if($password == $re_password && $mail == $re_mail){
		    if(strlen($username)>25 || strlen($mail)>50 || strlen($password)>50 || strlen($password)<6){
		       echo $message_allert1;
			   if(strlen($username)>25){
			      echo "Username troppo lungo.<br />";
			   }
			   if(strlen($mail)>50){
			      echo "E-Mail troppo lunga.<br />";
			   }
			   if(strlen($password)>50){
			      echo "Password troppo lunga.";
			   }
			   if(strlen($password)<6){
			      echo "Password troppo corta.";
			   }
			   echo $message_allert2;
			} else{
			   connect_db();
               $check_username_avalable = mysql_query("SELECT username FROM users WHERE username='$username'");
			   $check_mail_avalable = mysql_query("SELECT mail FROM users WHERE mail='$mail'");
               if(mysql_num_rows($check_username_avalable)>=1 || mysql_num_rows($check_mail_avalable)>=1){
			      echo $message_allert1;
			      if(mysql_num_rows($check_username_avalable)>=1){
				     echo "Username occupato.<br />";
				  }
			      if(mysql_num_rows($check_mail_avalable)>=1){
				     echo "E-Mail occupata.";
				  }
				  echo $message_allert2;
			   } else{
			      $password = md5($password);
				  $code = rand(11111111,99999999);
				  $date = date("d-m-20y");
				  mysql_query("INSERT INTO users VALUES('','$username','$password','$mail','$date','none','$code','0','0')");
				  $to = $mail;
				  $subject = "Attivazione account SkateboardXtreme.";
				  $message = "Per completare la registrazione al sito: http://www.skateboardxtreme.altervista.org clicca il link di seguito:\n\nhttp://www.skateboardxtreme.altervista.org/index.php?confirm=$code\n\nQuesti sono i tuoi dati:\n\nUsername: $username;\nPassword: $password_non_crypt.\n\nGrazie.";
			      $from = "From: SkateboardXtreme";
				  mail($to,$subject,$message,$from);
				  echo $message_allert1 . "Grazie per esserti registrato, per attivare il tuo account clicca il link nella e-mail che hai usato per il tuo account ($mail)." . $message_allert2;
			   }
			}
		 }
	  }
   }
?>
<form id="register_form" action="" method="post">
   <table>
      <tr>
	     <td><b>Username:</b> </td><td><input type="text" name="username" class="register_text_field" value="<?php echo $username; ?>" /></td>
	  </tr>
	  <tr>
	     <td><b>Password:</b> </td><td><input type="password" name="password" class="register_text_field" /></td>
	  </tr>
	  <tr>
	     <td><b>Conferma Password:</b> </td><td><input type="password" name="re_password" class="register_text_field" /></td>
	  </tr>
	  <tr>
	     <td><b>E-Mail:</b> </td><td><input type="text" name="mail" class="register_text_field" value="<?php echo $mail; ?>" /></td>
	  </tr>
	  <tr>
	     <td><b>Conferma E-Mail:</b> </td><td><input type="text" name="re_mail" class="register_text_field" /></td>
	  </tr>
   </table>
   <input type="submit" name="register" value="Registrati" />
</form>
<h1>Regole</h1>
<ul>
   <li>Inserire un username che non abbia piu' di 25 caratteri.</li>
   <li>Inserire una password che sia trai 6 e i 50 caratteri.</li>
   <li>Inserire una e-mail che non abbia piu' di 50 caratteri.</li>
   <li>inserire una e-mail valida, in caso contrario non potrai completare la registrazione.</li>
</ul>