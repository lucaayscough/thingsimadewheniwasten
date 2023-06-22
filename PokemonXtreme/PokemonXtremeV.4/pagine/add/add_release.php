<title>Add Release - Pokémon X-Treme</title>

<style type="text/css">

body {
     background-color: #000;	 
}		 

</style>

<div id="login">

<?php

//declare PowerAuth variables and set their values

$PowerAuth_password = "sneasel98"; //the password used to gain access (required)

$PowerAuth_maxPasswordAttempts = 3; //the number of password attempts allowed before locking the user out (optional)

$PowerAuth_lockoutTime = 60; //the number of seconds to force the user to wait before logging in again after being locked out (optional)

$PowerAuth_lockoutTimeIncrement = 120; //the number of seconds to add to each subsequent lockout waiting time (optional)

//include the PowerAuth file

@include ("PowerAuth.php") 

?>

</div>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"> 

<head>

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" /> 
<meta name="Language" content="Italian it" /> 
<meta name="author" content="ItachiDark"> 
<meta name="Keywords" content="http, https, ftp, sftp, www, org, com, it, co, uk, net, x, -, treme, pokémon, pokemonxtreme, Pokemon, Xtreme, Pokemon X-Treme, bacca. pokerus, strumenti, ash, vera, capopalestra, palestra, baccarancia, pokéball, scuroball, ketchum, brock, lucinda, max, pikachu, pokédex, html, web, sito, pokéfanatici, itachi, dark, kakashi, 98, ale, gengar, hitman, anime, manga, reborn, heart, contattaci" /> 
<meta name="Description" content="Pokémon X-Treme e un pokemon fansite dove troverete tutto quello che cercate. Mancate solo voi!!!!"/>  

<title>Add Release - Pokémon X-Treme</title>

<link rel="icon" href="/images/icons/icon.ico" />

<style type="text/css">

body {
   margin: 0;
   padding: 0;
   background-color: #000;
}

textarea {
   background-color: #777;
   border: 2px solid #fff;
   -moz-border-radius: 5px;
   border-radius: 5px;
}

</style>

</head>

<body>

<center><img src="/images/targhette_principali/add_release.png" height="91px" width="306px" alt="Add News" /></center>

<br />

<form method="post">

<center><textarea cols="120" rows="20" name="add_release"><?php include('add_release.txt'); ?></textarea></center>
<center><button>Modifica!</button></center>

</form>

<?php

$release = $_POST['add_release'];
$release_open = fopen("add_release.txt","w");
fwrite ($release_open,$release);
fclose ($release_open);

?>

</body>

</html>