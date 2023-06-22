<?php

include 'cf.php';
loggedIn();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="en-US" xml:lang="en-US" xmlns="http://www.w3.org/1999/xhtml">

<head>

<title>View - Photo Upload</title>
<link type="text/css" rel="stylesheet" href="layout/config.css" />
<link type="text/css" rel="stylesheet" href="layout/view.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />

<script type="text/javascript">
$(function() {
    $('#gallery a').lightBox();
});
</script>

</head>

<body>

<div id="body">

<div id="menu">
<ul>
	<li><a href="home.php">HOME</a> |</li>
	<li><a href="upload.php">UPLOAD PICS</a> |</li>
	<li><span class="ml">VIEW PICS</span> |</li>
	<li><a href="logout.php">LOG OUT</a></li>
</ul>
</div>

<div id="container">

<?php

echo "Select a gallery to look at:<br />";

viewGalleryList();

if(isset($_GET['gallery'])){
	$get_ga_na = @$_GET['gallery'];
	$image_list = scandir("images/" . $get_ga_na . "/");
	unset($image_list[0]);
	unset($image_list[1]);
	if(in_array("Thumbs",$image_list)){
		$key = array_search('Thumbs',$image_list);
		unset ($image_list[$key]);
	}
	echo "<div id='gallery'>";
	echo '<span id="title">View Pics</span>';
	echo "<center>";
	foreach($image_list as $image){
		$sep_img = explode('.',$image);
		$thumb = $sep_img[0];
		echo "<a href='images/" . $get_ga_na . "/" . $image . "'><img class='pic' onmouseover='this.style.opacity=1;this.filters.alpha.opacity=100' onmouseout='this.style.opacity=0.7;this.filters.alpha.opacity=70' border='none' src='images/" . $get_ga_na . "/Thumbs/" . $thumb . "_thumb." . @$sep_img[1] . "' /></a>";
	}
	echo "</center>";
	echo "</div>";
}

?>

<div style="height: 300px;"></div>

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