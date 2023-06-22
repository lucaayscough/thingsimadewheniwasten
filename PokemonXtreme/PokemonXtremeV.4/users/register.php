<html>

<head>

<title>Register - Pokemon X-Treme</title>

</head>

<body>

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
		    if(strlen($username)>25||strlen($mail)>50){
			   echo "Username/E-Mail troppo lunga.";
			} else {
			   if(strlen($password)>100){
			      echo "Password troppo lunga.";
			   } else {
			      $password = md5($password);
		          $repassword = md5($repassword);
				  
				  $connect = mysql_connect("mysql.pokemonxtreme.com","lucaayscough","4xZD$Mp@");
				  mysql_select_db("pokemonxtreme_wptest");
				  $registerquery = mysql_query("INSERT INTO Users VALUES ('$username','$password','$mail')");
			   }
			}
	  } else {
	     echo "Inserisci correttamente le 2 passwords.";
	  }
   }
}

?>

 <form action="register.php" method="post">

      Username: <input type="text" name="username" value="<?php echo $username; ?>" /> (massimo 25 caratteri)<br />
      Password: <input type="password" name="password" /> (massimo 100 caratteri)<br />
      Re-Password: <input type="password" name="repassword" /><br />
      E-Mail: <input type="text" name="mail" value="<?php echo $mail; ?>" /> (massimo 50 caratteri<br />
      <input type="submit" name="submit" value="Invio" />
   
</form>

<a href="register.php">Torna indietro</a>

</body>

</html>