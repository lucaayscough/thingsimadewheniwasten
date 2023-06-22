<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
   include("users/cf.php");
?>
<html lang="en-US" xml:lang="en-US" xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
      <meta name="author" content="ItachiDark" /> 
	  <meta name="Language" content="Italian it" /> 
	  <meta http-equiv="Autosize" content="On" /> 
	  <meta name="Description" content="PokemonXtreme e' un Pokemon fan site dove troverete tutto cio di cui avete bisogno!"/> 
	  <meta name="Keywords" content="Pokemon, X, treme, PokemonXtreme, xtreme, poke, ash, pikachu, anime, pokeball, card, game, roms, games, traiding, site, php, html, js, javascript, pokedex, css, fan, storia, sito, the, best, site, on, bug, pokerus, berry, melle, movies. episodi, v5" />
      <link type='text/css' rel='stylesheet' href='css/main.css' />
	  <link type='text/css' rel='stylesheet' href='css/config.css' />
      <link type='text/css' rel='stylesheet' href='css/users.css' />
      <link rel='icon' href='images/icons/pokeball.png' />
	  <script type="text/javascript">
	     alert("ATTENZIONE: Il sito e' ancora in manutenzione quindi non vi allarmate se alcune funzioni non funzionano. Grazie.");
	  </script>
   </head>
   <body>
      <div id="main_conteiner">
         <div id="header"></div>
		 <div id="body_container">
		    <div id="bg_trainer"></div>
			<div id="start_body"></div>
			<div id="body">
			   <table cellspacing="0px" cellpadding="0px">
			      <tr>
				     <td valign="top">
			            <?php include("include/layout/menu.php"); ?>
					 </td>
					 <td valign="top">
			            <div id="contents">
						   <div id="boxes">
                           <?php
						      include("include/layout/release.php");
							  include("users/login.php");
						   ?>
						   </div>
						   <div id="content_area">
							  <?php include("include/layout/page.php"); ?>
						   </div>
			            </div>
				     </td>
				  </tr>
			   </table>
			</div>
			<div id="end_body"></div>
			<div id="copyright_box">
			   <a href="#"><div id="up"></div></a>
			   <div id="copyrights">
			      PokemonXtreme e' un Pokemon fan site creato a solo scopo informativo e non di lucro.<br />
				  Layout e code sono stati creati da ItachiDark, e' pertanto vietata la copia anche parziale del sito.<br />
				  Questo sito e' pubblicato sotto una licenza Creative Commons.<br />
				  Tutti i diritti riservati alle case editrici dei vari contenuti presenti nel sito, in particolare a <a href="http://www.pokemon.com" target="_blank">Pokemon</a><br />
				  Per ulteriori informazioni ai diritti e ia copyright, visitare <a href="#">questa</a> pagina.
			   </div>
			</div>
		 </div>
	  </div>
   </body>
</html>