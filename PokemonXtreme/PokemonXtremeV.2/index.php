<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"> 

  <head>

       <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" /> 
       <meta name="Language" content="Italian it" /> 
       <meta name="author" content="ItachiDark"> 
       <meta name="Keywords" content="http, https, ftp, sftp, www, org, com, it, co, uk, net, x, -, treme, pok�mon, pokemonxtreme, Pokemon, Xtreme, Pokemon X-Treme, bacca. pokerus, strumenti, ash, vera, capopalestra, palestra, baccarancia, pok�ball, scuroball, ketchum, brock, lucinda, max, pikachu, pok�dex, html, web, sito, pok�fanatici, itachi, dark, kakashi, 98, ale, gengar, hitman, anime, manga, reborn, heart, contattaci" /> 
       <meta name="Description" content="Pok�mon X-Treme e un pok�mon fansite, dove potrete trovare di tutto. Aspettiamo solo voi!!!"/>  

       <title>Home Page - Pok�mon X-Treme</title>

       <link href="css/main.css" rel="stylesheet" type="text/css" />
       <link href="css/config.css" rel="stylesheet" type="text/css" />
       <link href="css/cutenews.css" rel="stylesheet" type="text/css" />

       <link rel="icon" href="images/icons/icon.ico"/> 

</head>

<body>
 
<div id="header"></div>

<?php
include ('include/release.php');
?>

<div id="mainbox1">

</div>

<div id="mainbox2">

<table>

<tr>

<td valign="top">
<?php 
include ('include/menu.php');
?>
</td>

<td valign="top">

<center>
<img src="/PokemonXtreme/PokemonXtremeV.2/images/contenuti/general/home/news.png" height="90px" width="243px" alt="News" />
</center>

<?PHP
$number = 8;
include('cutenews/show_news.php');
?>

</td>

</tr>

</table>

</div>

<div id="mainbox3"></div>

<?php
include ('/include/affiliati.php')
?>

</body>

</html>