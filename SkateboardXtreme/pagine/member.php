<?php
   if(@$_GET["profile"]){
      echo "
	     <h1>Profilo</h1>
		 <h2>Info</h2>
		  - Username: <b>$username</b> - <a href='index.php?change_username=$user_id'>Cambia Username</a><br />
		  - E-Mail: <b>$mail</b> - <a href='index.php?change_mail=$user_id'>Cambia E-Mail</a><br />
		  - Iscritto il: <b>$date</b>;<p />
		  <a href=''>Aggiungi altre informazioni al tuo profilo.</a>
		 <h2>Avatar</h2>
	  ";
	  if($avatar == "none"){
	     echo "Al momento non hai selezionato nessun avatar: clicca <a href='index.php?avatar=$code'>qui</a>, per selezionarne uno.";
	  } else{
	     echo "<img src='$avatar' height='260px' width='180px' alt='SkateboardXtreme - The Skateboarding Comunity' />";
	  }
   }
   if(@$_GET["avatar"]){
      echo "
	     <h2>Seleziona Avatar</h2>
	     <form action='' method='post'>
		    <b>Avatar URL:</b> <input class='register_text_field' type='text' name='avatar_url' /> <input type='submit' name='get_avatar_url' value='Inserisci Avatar' /><p />
		 </form>
	  ";
	  if(isset($_POST["get_avatar_url"])){
	     $avatar_url = @$_POST["avatar_url"];
	     if($avatar_url == ""){
		    echo "Devi inserire tutti i campi.";
		 } else{
		    mysql_query("UPDATE users SET avatar='$avatar_url' WHERE username='$username'");
			header("location: include/log_user.php");
		 }
	  }
	  if($avatar != "none"){
	     echo "<h2>Avatar Attuale</h2>";
	     echo "<img src='$avatar' width='180px' height='260px' alt='SkateboardXtreme - The Skateboarding Comunity' />";
	  }
	  echo "
	     <h2>Regole</h2>
		 <ul>
		    <li>Inserisci un URL valido;</li>
			<li>E' consigliato inserire un avatar con una risoluzione simile a 260x180;</li>
		 </ul>
	  ";
   }
   if(@$_GET["change_mail"]){
      echo "<h2>Cambia E-Mail</h2>";
	  echo "
	     E-Mail attuale: <b>$mail</b><p />
		 <form action='' method='post'>
		    <table><tr>
		    <td><b>Nuova E-Mail:</b> </td> <td><input class='register_text_field' type='text' name='new_mail' /></td>
			</tr><tr>
			<td><b>Conferma Nuova E-Mail:</b> </td> <td><input class='register_text_field' type='text' name='re_new_mail' /></td>
			</tr><tr>
			<td><b>Password:</b> </td> <td><input class='register_text_field' type='password' name='pass_for_change_mail' /></td>
			</tr></table>
	        <input type='submit' name='change_mail' value='Cambia E-Mail' />
		 </form>
	  ";
	  if(isset($_POST["change_mail"])){
	     $new_mail = @mysql_real_escape_string($_POST["new_mail"]);
		 $re_new_mail = @mysql_real_escape_string($_POST["re_new_mail"]);
		 $pass_for_change_mail = @mysql_real_escape_string(md5($_POST["pass_for_change_mail"]));
		 $mail_db_pass = mysql_query("SELECT password FROM users WHERE password='$pass_for_change_mail' AND username='$username'");
		 if(mysql_num_rows($mail_db_pass)==0){
	        echo "<b>Password errata.</b>";
		 } else{
		    if($new_mail == ""){
		       echo "<b>Devi inserire una nuova e-mail.</b>";
		    } else{
		       if($new_mail != $re_new_mail){
		          echo "<b>Le due e-mail non corrispondono.</b>";
		       } else if(strlen($new_mail)>50){
		          echo "<b>La nuova e-mail e' troppo lunga.</b>";
		       } else{
			      mysql_query("UPDATE users SET mail='$new_mail' WHERE username='$username'");
			      echo "<b>La tua e-mail e' stata cambiata con successo in: $new_mail. Grazie.</b>";
			   }
		    }
		 }
	  }
   }
?>