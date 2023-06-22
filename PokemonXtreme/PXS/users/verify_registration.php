<?php

$username = $_POST['username'];
$password = $_POST['password'];
$re_password = $_POST['re_password'];
$mail = $_POST['mail'];

$variables = $username == "" || $password == "" || $re_password == "" || $mail == "";

if($password == $re_password){
   if($variables){
         echo "Non hai inserito correttamente i campi.";
      } else{
         echo "Grazie per esserti registrato, per completare la tua registrazione controlla la tua e-mail e clicca il link che ti viene dato.";
		 $connect = mysql_connect("mysql.pokemonxtreme.com","lucaayscough","4xZD$Mp@");
            if (!$connect){
               die('Errore1: ' . mysql_error());
            }
            mysql_select_db("pokemonxtreme_wptest", $connect);
            $sql="INSERT INTO Users (Username, Password, E-Mail)
            VALUES
            ('$_POST[username]','$_POST[password]','$_POST[mail]')";
            
            if (!mysql_query($sql,$connect)){
              die('Errore2: ' . mysql_error());
            }
            echo "1 record added";
            mysql_close($connect);
	  }
} else{
   echo "Non hai inserito correttamente le due passwords.";
}

?>