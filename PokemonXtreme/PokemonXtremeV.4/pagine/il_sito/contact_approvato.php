<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"> 

<head>

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" /> 
<meta name="Language" content="Italian it" /> 
<meta name="author" content="ItachiDark"> 
<meta name="Keywords" content="http, https, ftp, sftp, www, org, com, it, co, uk, net, x, -, treme, pokémon, pokemonxtreme, Pokemon, Xtreme, Pokemon X-Treme, bacca. pokerus, strumenti, ash, vera, capopalestra, palestra, baccarancia, pokéball, scuroball, ketchum, brock, lucinda, max, pikachu, pokédex, html, web, sito, pokéfanatici, itachi, dark, kakashi, 98, ale, gengar, hitman, anime, manga, reborn, heart, contattaci" /> 
<meta name="Description" content="Pokémon X-Treme e un pokemon fansite dove troverete tutto quello che cercate. Mancate solo voi!!!!"/>  

<title>Contattateci - Pokémon X-Treme</title>

<link rel="icon" href="/images/icons/icon.ico" /> 

<link href="/css/main.css" rel="stylesheet" type="text/css" />
<link href="/css/config.css" rel="stylesheet" type="text/css" />
<link href="/css/menu_rapido.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/chat.js"></script>

<style type="text/css">

#contact_form {
   margin: auto;
   width: 600px;
   border: #fff solid 3px;
}

#internal {
   margin: 10px;
}

#internal input{
   background-color: #777;
   border: 2px solid #fff;
   height: 18px;
   width: 250px;
   margin-top: 5px;
}

</style>

</head>

<body>

<div id="header">
<?php
include ('/home/lucaayscough/pokemonxtreme.com/include/menu_rapido.php');
?>
</div>

<div id="layoutheme">

<?php
include ('/home/lucaayscough/pokemonxtreme.com/include/release.php');
?>

<?php
include ('/home/lucaayscough/pokemonxtreme.com/include/chat.php');
?>

<div id="menu_body_p1"></div>

<div id="menu_body_p2">

<table>
<tr>
<td valign="top">

<div id="menu">
<?php
include('/home/lucaayscough/pokemonxtreme.com/include/menu.php');
?>
</div>

</td>
<td valign="top">

<div id="body">

<center><img src="/images/targhette_principali/contattateci.png" height="91px" width="306px" alt="Contattateci" /></center>

<br />

In questa pagina potrete, chiunque di voi volesse farlo, contattarci mandandoci una e-mail al seguente indirizzo:<br />
<span style="color: #fff; text-shadow: none;">lucaayscough@pokemonxtreme.com</span>.<br />
I motivi potrebbero essere ad esempio: un link non funzionante ecc.<br /><br />
<center>Inoltre qui di seguito vi lasciamo un form dove potrete mandare delle E-Mail allo staff di PXS.<br /></center>
<center>Vi preghiamo di non farne abbuso.</center>

<br /><br />

<?php

$to = "lucaayscough@pokemonxtreme.com";
$email = $_POST['email'];
$oggetto = $_POST['oggetto'];
$messaggio = $_POST['messaggio'];

$ok = "<center>E-Mail inviata: <a href='contattateci.php'>Clicca qui per tornare indetro</a></center>";
$errore = "<center>Errore, non hai inserito tutti i campi correttamente <a href='contattateci.php'>Clicca qui per tornare indetro</a></center>";
$nothing ;

$variables = $email == $nothing || $oggetto == $nothing || $messaggio == $nothing;

if($variables){
   echo $errore;
} else{
   mail($to,$oggetto,$messaggio, "From:" . $email);
   echo $ok;
}

?>

</div>

</td>
</tr>
</table>

</div>

<div id="menu_body_p3"></div>

<?php
include ('/home/lucaayscough/pokemonxtreme.com/include/affiliati.php');
?>

</div>

</body>

</html>