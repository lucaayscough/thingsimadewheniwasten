<?php

include 'cf.php';
loggedIn();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="en-US" xml:lang="en-US" xmlns="http://www.w3.org/1999/xhtml">

<head>

<title>Upload - Photo Upload</title>
<link type="text/css" rel="stylesheet" href="layout/config.css" />

</head>

<body>

<div id="body">

<div id="menu">
<ul>
	<li><a href="home.php">HOME</a> |</li>
	<li><span class="ml">UPLOAD PICS</span> |</li>
	<li><a href="view.php">VIEW PICS</a> |</li>
	<li><a href="logout.php">LOG OUT</a></li>
</ul>
</div>

<div id="container">
<?php

if(!isset($_GET['gallery'])){
	echo '
		<form action="" method="post">
		
		Create a gallery: <input class="inputf" type="text" name="new_gallery" /><br /><input class="submitb" type="submit" name="create" value="" /><br /><br />
		Or select your gallery:<br />
		
		</form>
		';
	checkGallery();
}

if(!isset($_GET['gallery'])){
	createGa();
}

if(isset($_GET['gallery'])){
	echo "Here you can upload all your pics from the wedding:<br /><br />";
	uploadScript();
}

?>
</div>

</div>

<div id="hearts"></div>
<div id="bottom">
<div id="center">
<div id="copy"></div>
</div>
</div>

</body>

</html>

<?php

ob_end_flush();

?>