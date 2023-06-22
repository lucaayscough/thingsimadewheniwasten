<?php

include 'cf.php';
loggedIn();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="en-US" xml:lang="en-US" xmlns="http://www.w3.org/1999/xhtml">

<head>

<title>Home - Photo Upload</title>
<link type="text/css" rel="stylesheet" href="layout/config.css" />

</head>

<body>

<div id="body">

<div id="menu">
<ul>
	<li><span class="ml">HOME</span> |</li>
	<li><a href="upload.php">UPLOAD PICS</a> |</li>
	<li><a href="view.php">VIEW PICS</a> |</li>
	<li><a href="logout.php">LOG OUT</a></li>
</ul>
</div>

<div id="container">
Hi everyone. You can upload your pics here and view all the other galleries people have created.<br /><br />
To create a gallery and upload your pics click <a href="upload.php" target="_blank">here</a>.<br /><br />
To create a gallery please give it a name ( remember not to leave any spaces or gaps in the name).<br /><br />
When you have created your gallery wait for a moment and it will appear on the page.<br /><br />
After this, click on you galley name and the link will take you to a page where you can browse your pics and upload them.<br /><br />
And that’s it!<br /><br />
If you want to see anyone else's pics just click on the link ‘view pics’ at the top of the page.<br /><br />
Thanks.
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