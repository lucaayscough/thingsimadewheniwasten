<?php
	ob_start();
	
	function redirect(){
		header('location: http://www.anohanasite.altervista.org');
	}
	
	function get_data(){
		if(isset($_GET['type']) && isset($_GET['s']) && isset($_GET['n'])){
			$type = $_GET['type'];
			$s = $_GET['s'];
			$n = $_GET['n'];
			
			if($type == 'ep'){
				if($s == 'anohana'){
					if($n == 1){$import_vid = "<iframe style='overflow: hidden; border: 0; width: 600px; height: 480px' src='http://embed.novamov.com/embed.php?width=600&height=480&v=rsmuiasu7wnir&px=1' scrolling='no'></iframe>";$download_link = "http://www.mediafire.com/download.php?jmeep07jq93xpxt";$torrent_link = '';$vid_title = 'Ano Hana Episodio 01 - Super Busters della Pace';}
					elseif($n == 2){$import_vid = "<iframe style='overflow: hidden; border: 0; width: 600px; height: 480px' src='http://embed.novamov.com/embed.php?width=600&height=480&v=uxq6d1u9vk0e7&px=1' scrolling='no'></iframe>";$download_link = "http://www.mediafire.com/download.php?iya4807qtvr2aa7";$torrent_link = '';$vid_title = 'Ano Hana Episodio 02 - La Valorosa Menma';}
					elseif($n == 3){$import_vid = "<iframe style='overflow: hidden; border: 0; width: 600px; height: 480px' src='http://embed.novamov.com/embed.php?width=600&height=480&v=th51ts0l4timm&px=1' scrolling='no'></iframe>";$download_link = "http://www.mediafire.com/download.php?s7lrr151nubz2np";$torrent_link = '';$vid_title = 'Ano Hana Episodio 03 - Circolo Cerchiamo Menma';}
					elseif($n == 4){$import_vid = "<iframe style='overflow: hidden; border: 0; width: 600px; height: 480px' src='http://embed.novamov.com/embed.php?width=600&height=480&v=658p9zrflrmzp&px=1' scrolling='no'></iframe>";$download_link = "http://www.mediafire.com/download.php?nkllo7vixes3okn";$torrent_link = '';$vid_title = 'Ano Hana Episodio 04 - Il Vestito Bianco con un Fiocco';}
					elseif($n == 5){$import_vid = "<iframe style='overflow: hidden; border: 0; width: 600px; height: 480px' src='http://embed.novamov.com/embed.php?width=600&height=480&v=4ob8v1a3flc3j&px=1' scrolling='no'></iframe>";$download_link = "http://www.mediafire.com/download.php?6unn85xy2mgcr8v";$torrent_link = '';$vid_title = 'Ano Hana Episodio 05 - Tunnel';}
					elseif($n == 6){$import_vid = "<iframe style='overflow: hidden; border: 0; width: 600px; height: 480px' src='http://embed.novamov.com/embed.php?width=600&height=480&v=du02zqc4flfz7&px=1' scrolling='no'></iframe>";$download_link = "http://www.mediafire.com/download.php?xb6ewcfuu6ccccb";$torrent_link = '';$vid_title = 'Ano Hana Episodio 06 - Dimenticami ma non Dimenticarmi';}
					elseif($n == 7){$import_vid = "<iframe style='overflow: hidden; border: 0; width: 600px; height: 480px' src='http://embed.novamov.com/embed.php?width=600&height=480&v=fj9f2she54zv5&px=1' scrolling='no'></iframe>";$download_link = "http://www.mediafire.com/download.php?m8k85vpinr8ilgx";$torrent_link = '';$vid_title = 'Ano Hana Episodio 07 - Il Vero Desiderio';}
					elseif($n == 8){$import_vid = "<iframe style='overflow: hidden; border: 0; width: 600px; height: 480px' src='http://embed.novamov.com/embed.php?width=600&height=480&v=o75h8o07a08es&px=1' scrolling='no'></iframe>";$download_link = "http://www.mediafire.com/download.php?z1drd1reh7l3dqg";$torrent_link = '';$vid_title = 'Ano Hana Episodio 08 - I Wounder';}
					elseif($n == 9){$import_vid = "<iframe style='overflow: hidden; border: 0; width: 600px; height: 480px' src='http://embed.novamov.com/embed.php?width=600&height=480&v=3u36x4s0kkywt&px=1' scrolling='no'></iframe>";$download_link = "http://www.mediafire.com/download.php?yvwvnrbb88xjvpg";$torrent_link = '';$vid_title = 'Ano Hana Episodio 09 - Tutti e Menma';}
					elseif($n == 10){$import_vid = "<iframe style='overflow: hidden; border: 0; width: 600px; height: 480px' src='http://embed.novamov.com/embed.php?width=600&height=480&v=3yah32rjye514&px=1' scrolling='no'></iframe>";$download_link = "http://www.mediafire.com/download.php?ovrx046lho0nwb0";$torrent_link = '';$vid_title = 'Ano Hana Episodio 10 - Fuochi d\' Artificio';}
					elseif($n == 11){$import_vid = "<iframe style='overflow: hidden; border: 0; width: 600px; height: 480px' src='http://embed.novamov.com/embed.php?width=600&height=480&v=vl8hvkr6n8yih&px=1' scrolling='no'></iframe>";$download_link = "http://www.mediafire.com/download.php?rrqcfbhyp42pwa5";$torrent_link = '';$vid_title = 'Ano Hana Episodio 11 - Il Fiore Sbocciato quell\' Estate';}
					else{redirect();}
					$maxep = 11;
				}if($s == 'naruto_shippuden'){
					if($n == 280){$import_vid = "";$download_link = "http://mir.cr/17ZQPL7H";$torrent_link = 'http://www.nyaa.eu/?page=download&tid=354256';$vid_title = 'Naruto Shippuden Episodio 280 - L\' Estetica di un Artista';}
					else{redirect();}
					$maxep = 280;
				}else{redirect();}
			}elseif($type == 'mov'){
				
			}else{redirect();}
		}else{redirect();}
		
		$newn = $n;
		
		$num_up = ++$n;
		$num_down = $n-2;
		
		if($newn == 1){
			echo '<center><a href="stream.php?type=',$type,'&s=',$s,'&n=',$num_up,'">Next</a></center>';
		} elseif ($newn == $maxep){
			echo '<center><a href="stream.php?type=',$type,'&s=',$s,'&n=',$num_down,'">Before</a></center>';
		} else{
			echo '<center><a href="stream.php?type=',$type,'&s=',$s,'&n=',$num_down,'">Before</a> | <a href="stream.php?type=',$type,'&s=',$s,'&n=',$num_up,'">Next</a></center>';
		}
		
		//echo '<center><a href="stream.php?type=',$type,'&s=',$s,'&n=',$num_down,'">Before</a> | <a href="stream.php?type=',$type,'&s=',$s,'&n=',$num_up,'">Next</a></center>';
		echo '<div id="titlebar">'.$vid_title.'</div><br />';
		echo '<center><div id="vidframe">'.$import_vid.'</div></center>';
		echo '<center><a target="_blank" href="'.$download_link.'"><img src="images/stream/download.png" height="31px" width="149px" alt="Download - AnoHana Site" title="Download - AnoHana Site" /></a> &nbsp;&nbsp; <a target="_blank" href="'.$torrent_link.'"><img src="images/stream/torrent.png" height="31px" width="149px" alt="Torrent - AnoHana Site" title="Torrent - AnoHana Site" /></a></center>';
		echo '<br /><br />';
	}
?>

<!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
 		<meta name="Language" content="Italian it"/> 
 		<meta name="Author" content="ItachiDark e Kakashi98"/> 
 		<meta name="Keywords" content="Ano, Hana, Site, AnohanaSite, Anohana, Anime, Episodi, Personaggi, Trama, Ita, Italian, Italiano, Streaming, Download, Ep, Episodes, Live, Naruto, Pokemon, Giochi, Film, Movies, Movie, Detective, Conan, Lista, Episodes, ENG" />
		<meta name="Description" content="AnoHana Site e' un fan site dedicato ad Anohana, qui troverete tutto quel che cercate... Cosa aspettate ad entrare?!"/>
		<title>Stream - AnoHana Site</title>
		<link type="text/css" rel="stylesheet" href="css/stream.css" />
		<link type="text/css" rel="stylesheet" href="css/fonts.css" />
		<link rel="icon" href="images/favicon.ico" />
	</head>
	
	<body>	
		<div id="menubar">
			<div id="mainbar">
				<div id="logo"></div>
				<div id="menulinks">
					<a href="index.php"><div id="home-link"></div></a>
					<a href="index.php?p=contact"><div id="contact-link"></div></a>
					<a href="index.php?p=disclaimer"><div id="disclaimer-link"></div></a>
				</div>
			</div>
		</div>
		
		<center><script type="text/javascript">document.write('<s'+'cript type="text/javascript" src="http://ad.altervista.org/js.ad/size=728X90/r='+new Date().getTime()+'"><\/s'+'cript>');</script></center>
		
		<?php get_data(); ?>
		
	</body>
</html>

<?php ob_end_flush(); ?>