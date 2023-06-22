<?php
	if(basename($_SERVER['SCRIPT_FILENAME'])=='manga_info.php')
		header('location: http://www.anohanasite.altervista.org');
		
	if(!isset($_GET['s'])){
		header('location: http://www.anohanasite.altervista.org');
	} elseif($_GET['s']==''){
		header('location: http://www.anohanasite.altervista.org');
	}
	
	$s = $_GET['s'];
	
	switch($s){
		case 'naruto':
		$serie = 'Naruto';
		break;
		
		default: header('location: http://www.anohanasite.altervista.org');
	}
?>

<title><?php echo $serie; ?> - AnoHana Site</title>

<link type="text/css" rel="stylesheet" href="css/anime_manga.css" />

<center><h1 id="page-title">Manga</h1></center>

<h1><?php echo $serie; ?></h1>

<center><img src="images/site/<?php echo $s; ?>_cover.png" height="251px" width="600px" title="<?php echo $serie; ?> - AnoHana Site" alt="<?php echo $serie; ?> - AnoHana Site" /></center>

<?php include 'pages/altro/manga/info/'.$s.'.php';?>