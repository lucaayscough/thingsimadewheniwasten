<?php

$username = $_POST['username'];
$password = $_POST['password'];

$variables = $username == "" || $password == "";

if($variables){
   echo "Password e Username non coincidono, controlla di aver scritto correttamente. <a href='login.php'>Clicca qui per tornare indietro.<a/>";
} else{
   $connect = mysql_connect("localhost","root","");
   if (!$connect)
     {
     die('Errore: ' . mysql_error());
     }
   mysql_select_db("PokemonXtreme", $connect);
   $result = mysql_query("SELECT * FROM Users");
   while($row = mysql_fetch_array($result))
      {
      }   
   mysql_close($connect);
}

?>