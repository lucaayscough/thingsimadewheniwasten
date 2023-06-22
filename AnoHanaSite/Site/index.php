<?php include 'include/top.php'; ?>
<?php include 'include/menu.php'; ?>

<link type="text/css" rel="stylesheet" href="css/cutenews.css" />

<div id="main-contents">
	<div id="top-ad"><center><script type="text/javascript">document.write('<s'+'cript type="text/javascript" src="http://ad.altervista.org/js.ad/size=468X60/r='+new Date().getTime()+'"><\/s'+'cript>');</script></center></div>
	
	<?php
		if(!isset($_GET['p'])){
			echo '<center><h1 id="page-title">News</h1></center><title>Home Page - AnoHana Site</title>';
			$number = 8;
			$template = 'AnoHanaSite';
			include('cutenews/show_news.php');
		} elseif(isset($_GET['p'])){
			if($_GET['p']=='disclaimer'){include 'pages/main/disclaimer.php';}
			elseif($_GET['p']=='contact'){include 'pages/main/contact.php';}
			elseif($_GET['p']=='regolamento'){include 'pages/main/regolamento.php';}
			elseif($_GET['p']=='staff'){include 'pages/main/staff.php';}
			elseif($_GET['p']=='chat'){include 'pages/main/chat.php';}
			
			elseif($_GET['p']=='personaggi'){include 'pages/info/personaggi.php';}
			elseif($_GET['p']=='trama'){include 'pages/info/trama.php';}
			elseif($_GET['p']=='autore'){include 'pages/info/autore.php';}
			
			elseif($_GET['p']=='episodi'){include 'pages/multimedia/episodi.php';}
			elseif($_GET['p']=='sigle'){include 'pages/multimedia/sigle.php';}
			elseif($_GET['p']=='immagini'){include 'pages/multimedia/immagini.php';}
			elseif($_GET['p']=='fanart'){include 'pages/multimedia/fanart.php';}
			elseif($_GET['p']=='rai4'){include 'pages/multimedia/rai4.php';}
			
			elseif($_GET['p']=='anime'){include 'pages/altro/anime/anime.php';}
			elseif($_GET['p']=='manga'){include 'pages/altro/manga/manga.php';}
			elseif($_GET['p']=='film'){include 'pages/altro/film.php';}
			elseif($_GET['p']=='telefilm'){include 'pages/altro/telefilm.php';}
			elseif($_GET['p']=='programmi'){include 'pages/altro/programmi.php';}
			
			elseif($_GET['p']=='manga_card'){include 'pages/altro/manga/manga_info.php';}
			elseif($_GET['p']=='info_card'){include 'pages/altro/anime/anime_info.php';}
			else{
				echo '<center><h1 id="page-title">News</h1></center><title>AnoHana Site</title>';
				$number = 8;
				$template = 'AnoHanaSite';
				include('cutenews/show_news.php');
			}
		}
	?>
</div>

<center><script type="text/javascript">document.write('<s'+'cript type="text/javascript" src="http://ad.altervista.org/js.ad/size=728X90/r='+new Date().getTime()+'"><\/s'+'cript>');</script></center>

<?php include 'include/footer.php'; ?>