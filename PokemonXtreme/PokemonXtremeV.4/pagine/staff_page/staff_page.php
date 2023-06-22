<title>Staff Page - Pokemon X-Treme</title>
<link rel="icon" href="/images/icons/icon.ico" /> 

<?php

//declare PowerAuth variables and set their values

$PowerAuth_password = "as_rea"; //the password used to gain access (required)

$PowerAuth_maxPasswordAttempts = 3; //the number of password attempts allowed before locking the user out (optional)

$PowerAuth_lockoutTime = 60; //the number of seconds to force the user to wait before logging in again after being locked out (optional)

$PowerAuth_lockoutTimeIncrement = 120; //the number of seconds to add to each subsequent lockout waiting time (optional)

//include the PowerAuth file

@include ("PowerAuth.php") 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"> 

<head>

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" /> 
<meta name="Language" content="Italian it" /> 
<meta name="author" content="ItachiDark"> 
<meta name="Keywords" content="http, https, ftp, sftp, www, org, com, it, co, uk, net, x, -, treme, pokémon, pokemonxtreme, Pokemon, Xtreme, Pokemon X-Treme, bacca. pokerus, strumenti, ash, vera, capopalestra, palestra, baccarancia, pokéball, scuroball, ketchum, brock, lucinda, max, pikachu, pokédex, html, web, sito, pokéfanatici, itachi, dark, kakashi, 98, ale, gengar, hitman, anime, manga, reborn, heart, contattaci" /> 
<meta name="Description" content="Pokémon X-Treme e un pokemon fansite dove troverete tutto quello che cercate. Mancate solo voi!!!!"/>  

<title>Staff Page - Pokémon X-Treme</title>

<link rel="icon" href="/images/icons/icon.ico" /> 

<link href="/css/main.css" rel="stylesheet" type="text/css" />
<link href="/css/config.css" rel="stylesheet" type="text/css" />
<link href="/css/menu_rapido.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/chat.js"></script>

<style type="text/css">

#control_pannel {
   background-image: url(/images/staff_page/control_pannel.png);
   height: 441px;
   width: 558px;
   margin: auto;
   margin-top: 50px;
}

#control_pannel_box {
   background-image: url(/images/staff_page/control_pannel_box.png);
   height: 50px;
   width: 464px;
   margin-top: 120px;
   margin-left: 47px;
   float: left;
}

#control_pannel_box_2 {
   background-image: url(/images/staff_page/control_pannel_box_2.png);
   height: 50px;
   width: 464px;
   margin-top: 20px;
   margin-left: 47px;
   float: left;
}

#control_pannel_box_3 {
   background-image: url(/images/staff_page/control_pannel_box_3.png);
   height: 50px;
   width: 464px;
   margin-top: 20px;
   margin-left: 47px;
   float: left;
}

#logout {
   background-image: url(/images/staff_page/logout.png);
   height: 52px;
   width: 148px;
   margin-top: 40px;
   margin-right: 47px;
   float: right;
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

<center><img src="/images/targhette_principali/staff_page.png" height="91px" width="306px" alt="Staff Page" /></center>

<br />

<center>Benvenuti staffers, avete fatto l' accesso alla vosta pagina!</center>
<center>In questa pagina, troverete molte belle funzioni e diritti che vi spettano per essere del sito.</center>

<div id="control_pannel">
<a href="#" target="_blank"><div id="control_pannel_box"></div></a>
<a href="#" target="_blank"><div id="control_pannel_box_2"></div></a>
<a href="#" target="_blank"><div id="control_pannel_box_3"></div></a>
<a href="#" target="_blank"><div id="logout"></div></a>
</div>

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