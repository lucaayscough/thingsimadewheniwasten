<?php

$submit = strip_tags($_POST['submit']);
$username = strip_tags($_POST['username']);
$password = md5(strip_tags($_POST['password']));
$repassword = md5(strip_tags($_POST['repassword']));
$mail = $_POST['mail'];

if($submit){
   if($username == "" || $password == "" || $repassword == "" || $mail == ""){
      echo "Inserisci tutti i campi";
   } else{
      if($password == $repassword){
	     $password = md5($password);
		 $repassword = md5($repassword);
		    if(strlen($username)>25||strlen($mail)>50){
			   echo "Username/E-Mail troppo lunga.";
			} else {
			   if(strlen($password)>100){
			      echo "Password troppo lunga.";
			   } else {
			      
			   }
			}
	  } else {
	     echo "Inserisci correttamente le 2 passwords.";
	  }
   }
}

?>

<a href="register.php">Torna indietro</a>