<?php
   if(basename($_SERVER['SCRIPT_FILENAME']) == "register.php"){
         header("location: /index.php");
   	  exit();
   }
?>
<title>Registrati - PokemonXtreme</title>
<h1>Registrati</h1>
In questa pagina, potrete registrarvi a PokemonXtreme. Per potervi registrare dovrete riempire questo form che vi verra' proposto qui di seguito e le informazioni inserite non verranno rese pubbliche.<p />
<form action="" method="post">
   <div class="spacer">Username:</div><input class="reg_text_field" type="text" name="username" /><br />
   <div class="spacer">Password:</div><input class="reg_text_field" type="password" name="password" /><br />
   <div class="spacer">Conferma Password:</div><input class="reg_text_field" type="password" name="repassword" /><br />
   <div class="spacer">E-Mail:</div><input class="reg_text_field" type="text" name="mail" /><br />
   <div class="spacer">Conferma E-mail:</div><input class="reg_text_field" type="text" name="remail" /><br />
   <div class="spacer">Sesso:</div><input type="radio" name="gender" value="Maschio" id="men" /><label for="men">Maschio</label> <input type="radio" name="gender" value="Femmina" id="women" /><label for="women">Femmina</label>
   <p />
   <div class="spacer">Nato/a il:</div><select name="sel_day"><option>Giorno:</option><?php $day = 1; while($day<=31){echo "<option>".$day."</option>";$day++;} ?></select> <select name="sel_month"><option>Mese:</option><option>Gennaio</option><option>Febbraio</option><option>Marzo</option><option>Aprile</option><option>Maggio</option><option>Giugno</option><option>Luglio</option><option>Agosto</option><option>Settembre</option><option>Ottobre</option><option>Novembre</option><option>Dicembre</option></select> <select name="sel_year"><option>Anno:</option><?php $year = 1900; while($year<=2011){echo "<option>".$year."</option>"; $year++;} ?></select>
   <p />
   <label for="terms">Ho letto e approvo il <a href="" target="_blank">regolamento</a>.</label><input type="checkbox" name="terms" id="terms" /><br />
   <p />
   <input type="submit" name="register" value=" Registrati " />
</form>
<?php
   $chars = "`¬!\"£$%^&*()_-+={}[]:;@'~#<>,.?/|\\*";
   $username = @htmlspecialchars(trim($_POST["username"]));
   $password = @htmlspecialchars(trim($_POST["password"]));
   $repassword = @htmlspecialchars(trim($_POST["repassword"]));
   $mail = @htmlspecialchars(trim($_POST["mail"]));
   $remail = @htmlspecialchars(trim($_POST["remail"]));
   $gender = @$_POST["gender"];
   $terms = @$_POST["terms"];
   $sel_day = @$_POST["sel_day"];
   $sel_month = @$_POST["sel_month"];
   $sel_year = @$_POST["sel_year"];
   if(isset($_POST["register"])){
      if($username == "" || $password == "" || $mail == "" || $gender == "" || $terms == "" || $sel_day == "Giorno:" || $sel_month == "Mese:" || $sel_year == "Anno:"){
	     echo "<b>Sono stati riscontrati degli errori:</b><p />";
	     if(!$username)
		    echo "Inserisci un username.<br />";
         if(!$password)
		    echo "Inserisci una password.<br />";
	     if(!$mail)
		    echo "Inserisci una e-mail.<br />";
	     if($sel_day == "Giorno:" || $sel_month == "Mese:" || $sel_year == "Anno:")
		    echo "Devi inserire la data completa.<br />";
	     if($gender == "")
		    echo "Devi inserire un sesso.<br />";
	     if($terms == "")
		    echo "Devi approvare il regolamento.";
	  } else{
	     if(strpbrk($username,$chars)==false||strpbrk($password,$chars)==false||strpbrk($mail,$chars)==false){
		    if($password != $repassword || $mail != $remail){
			   echo "<b>Sono stati riscontrati degli errori:</b></br />";
			   if($password != $repassword)
			      echo "Le due password non corrispondono.";
			   if($mail != $remail)
			      echo "Le due e-mail non corrispondono.";
			} else{
			   if(strpbrk($mail,"@")==true){
			      if(strlen($username)>25 || strlen($password)>50 || strlen($password)<6 || strlen($mail)>50){
				  echo "<b>Sono stati riscontrati alcuni errori:</b><br />";
				     if(strlen($username)>25)
					    echo "Username troppo lungo.<br />";
					 if(strlen($password)>50)
					    echo "Password troppo lunga.<br />";
					 if(strlen($password)<50)
					    echo "Password troppo corta.<br />";
					 if($mail)
					    echo "E-mail troppo lunga.";
				  } else{
				     connect();
					 $check_us = mysql_query("SELECT username FROM main WHERE username='$username'");
					 $check_mail = mysql_query("SELECT mail FROM main WHERE mail='$mail'");
					 if(mysql_num_rows($check_us)==1 || mysql_num_rows($check_mail)==1){
					 echo "<b>Sono stati riscontrati alcuni errori:</b><br />";
					    if(mysql_num_rows($check_us)==1)
						   echo "Username non disponibile.<br />";
						if(mysql_num_rows($check_mail)==1)
						   echo "E-mail non disponibile.";
					 } else{
					    $list_chars = "abcdefghilmnopqrstuvzwkjyx1234567890";
						$str_shuffle = str_shuffle($list_chars);
						$code = substr($str_shuffle,0,13);
						$non_crypt_pass = $password;
						$password = md5($password);
						$birth = "$sel_day/$sel_month/$sel_year";
						$date = date("d-m-Y");
						mysql_query("INSERT INTO main VALUES ('','$username','$password','$mail','$gender','$birth','$date','$code','0')");
						echo "Grazie per esserti registrato al sito, per potere usufruire di tutti i vantaggi e dei pannelli utente dovrai prima attivare il tuo account. Per fare cio devi andare nella e-mail che ti abbiamo inviato e poi cliccare il link a questo indirizzo: $mail.<br />Grazie.";
					    $to = $mail;
						$subject = "Conferma registrazione PokemonXtreme.";
						$message = "Salve $username,\nquesto messaggio e' l'e-mail di conferma per l'attivazione del tuo account di PokemonXtreme. Per attivare il tuo account clicca il link che segue, se non funziona copia il link e incollalo nella barra degli indirizzi: http://www.pokemonxtreme.com/users/confirm.php?code=$code\n\nSe non sei stato tu a richiedere questo messaggio ignoralo e basta.\n\nQueste sono le info per effettuare il login:\nUsername: $username;\nPassword: $non_crypt_pass;\n\nGrazie.";
						$from = "PokemonXtreme";
						mail($to,$subject,$message, "From:" . $from);
						$to_admin = "lucaayscough@pokemonxtreme.com";
						$subject_admin = "Nuovo utente.";
						$message_admin = "Nuovo utente registrato:\nUsername: $username;\nPassword: $non_crypt_pass;";
						$from_admin = "PokemonXtreme";
						mail($to_admin,$subject_admin,$message_admin, "From:" . $from_admin);
					 }
				  }
			   } else{
			      echo "<b>Sono stati riscontrati alcuni errori:</b><br />";
			      echo "Controlla il formato della tua e-mail.";
			   }
			}
		 } else{
		    echo "<b>Sono stati riscontrati alcuni errori:</b><br />";
		    if(strpbrk($username,$chars)==true)
			   echo "Il username contiene un carattere non valido.<br />";
			if(strpbrk($password,$chars)==true)
			   echo "La password contiene un carattere non valido.<br />";
			if(strpbrk($mail,$chars)==true)
			   echo "La e-mail contiene un carattere non valido.";
		 }
	  }
   }
?>