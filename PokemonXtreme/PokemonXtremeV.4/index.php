<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"> 

<head>

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" /> 
<meta name="Language" content="Italian it" /> 
<meta name="author" content="ItachiDark"> 
<meta name="Keywords" content="http, https, ftp, sftp, www, org, com, it, co, uk, net, x, -, treme, pokémon, pokemonxtreme, Pokemon, Xtreme, Pokemon X-Treme, bacca. pokerus, strumenti, ash, vera, capopalestra, palestra, baccarancia, pokéball, scuroball, ketchum, brock, lucinda, max, pikachu, pokédex, html, web, sito, pokéfanatici, itachi, dark, kakashi, 98, ale, gengar, hitman, anime, manga, reborn, heart, contattaci" /> 
<meta name="Description" content="Pokémon X-Treme e un pokemon fansite dove troverete tutto quello che cercate. Mancate solo voi!!!!"/>  

<title>Home Page - Pokémon X-Treme</title>

<link rel="icon" href="/images/icons/icon.ico" /> 

<link href="css/main.css" rel="stylesheet" type="text/css" />
<link href="css/config.css" rel="stylesheet" type="text/css" />
<link href="css/cutenews.css" rel="stylesheet" type="text/css" />
<link href="css/menu_rapido.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/chat.js"></script>

</head>

<body>

<div id="header">
<?php
include ('include/menu_rapido.php');
?>
</div>

<div id="layoutheme">

<?php
include ('include/release.php');
?>

<?php
include ('include/chat.php');
?>

<div id="menu_body_p1"></div>

<div id="menu_body_p2">

<table>
<tr>
<td valign="top">

<div id="menu">
<?php
include('include/menu.php');
?>
</div>

</td>
<td valign="top">

<div id="body">

<center><img src="/PokemonXtreme/PokemonXtremeV.4/images/targhette_principali/news.png" height="91px" width="306px" alt="News" /></center>

<br />
<?PHP
$number = 8;
$template = 'PokemonXtreme';
include('cutenews/show_news.php');
?>

</div>

</td>
</tr>
</table>

</div>

<div id="menu_body_p3"></div>

<?php
include ('include/affiliati.php');
?>

</div>

</body>

</html>