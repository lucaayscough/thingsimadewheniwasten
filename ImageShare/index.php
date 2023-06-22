<?php

include 'cf.php';
passLogin();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="en-US" xml:lang="en-US" xmlns="http://www.w3.org/1999/xhtml">

<head>

<title>Photo Upload</title>
<link type="text/css" rel="stylesheet" href="layout/main.css" />

</head>

<body>

<div id="body">

<form action="" method="post" id="login_form">

<input id="username" type="text" name="username" /><br />
<input id="password" type="password" name="password" /><br />
<input id="login" type="submit" name="login" value="" />

</form>

<?php

if(isset($_POST['login'])){
		$username = @$_POST['username'];
		$password = @md5($_POST['password']);
		
		$real_pass = "aa52ad1fb477db486116db41673c793e";
		$real_us = "love";
		
		$errors = array();
		
		if($username != $real_us)
			$errors[] = "The username you entered is incorrect.";
		
		if($password != $real_pass)
			$errors[] = "The password you entered is incorrect.";
			
		foreach($errors as $error){
			echo "<script type='text/javascript'>alert('";
			echo  $error;
			echo "');</script>";
		}

		if(empty($errors)){
			setcookie('username','love',time()+1000000);
			header('location: home.php');
		}
}

?>

<div id="copy"></div>

</div>

<div id="hearts"></div>

<div id="bottom"></div>

</body>

</html>

<?php

ob_end_flush();

?>