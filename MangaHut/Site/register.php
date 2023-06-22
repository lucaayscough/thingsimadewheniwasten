<?php include 'include/top.php'; ?>

<link type="text/css" rel="stylesheet" href="css/register.css" />

<h1>REGISTRATI</h1>

<?php
	if(isset($_POST['submit'])){
		$errors = array();
		
		if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['mail'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$repassword = $_POST['repassword'];
			$mail = $_POST['mail'];
			$remail = $_POST['remail'];
			
			if($_POST['username']==''||$_POST['password']==''||$_POST['mail']==''){
				echo 'Sono stati riscontrati i seguenti errori:<br />';
				echo '<ul><li>1. Non sono stati riempiti tutti i campi;</li></ul>';
			} else{
				connect_db();
				
				if(strlen($username) > 12){
					$errors[] = 'Lo username che hai inserito è troppo lungo.';
				} 
				
				if(!ctype_alnum($username)){
					$errors[] = 'Lo username che hai inserito non è valido.';	
				}
							
				$queryGetInfo = mysql_query("SELECT * FROM users");
				
				while($getInfo = mysql_fetch_array($queryGetInfo)) {
					if($username == $getInfo['username']){
						$errors[] = 'Lo username che hai inserito non è disponibile.';	
					}
					
					if($mail == $getInfo['mail']){
						$errors[] = 'L\' e-mail che hai inserito non è disponibile.';	
					}
				}
				
				if(strlen($password) > 16){
					$errors[] = 'La password che hai inserito è troppo lunga.';
				}
				
				if(!ctype_alnum($password)){
					$errors[] = 'La password che hai inserito non è valida.';	
				}
				
				if($password != $repassword){
					$errors[] = 'Le due password che hai inserito non sono uguali.';
				}

				if(strlen($password) < 5){
					$errors[] = 'La password che hai inserito è troppo corta.';
				}

				if(strlen($mail) > 50){
					$errors[] = 'L\' e-mail che hai inserito è troppo lunga.';
				}

				if(strlen($mail) < 5){
					$errors[] = 'L\' e-mail che hai inserito è troppo corta.';
				}

				if(!strpbrk($mail,'@') || !strpbrk($mail,'.') || strpbrk($mail,'"') || strpbrk($mail,'\'')){
					$errors[] = 'L\' e-mail che hai inserito non è valida.';
				}

				if($mail != $remail){
					$errors[] = 'Le due e-mail che hai inserito non sono uguali.';
				}
				
				if(empty($errors)){
					$id = rand(100000000,999999999);
					$md5pass = md5($password);
					
					mysql_query("INSERT INTO users VALUES ('$username','$md5pass','$mail','0','$id','0')");
					
					echo '<div id="endReg">Grazie per esserti registrato. Per completare la registrazione dovrai cliccare un link che ti verrà mandato all\' inidirizzo e-mail da te specificato.</div>';
					
					$subject = 'Registrazione Manga Hut';
					$message = 'Grazie per esserti registrato al sito Manga Hut. Per completare la registrazione cliccal questo link: http://www.mangahut.com/confirm.php?id='.$id;
				
					mail($mail,$subject,$message);
				} else{
					$num = 1;
					echo 'Sono stati riscontrati i seguenti errori:<br /><ul>';
					foreach($errors as $error){
						echo '<li>'.$num.'. '.$error.';</li>';
						$num = ++$num;
					}
					echo '</ul>';
				}
			}
		}
	}
?>

<form id="register_user" action="" method="post">
	<div id="register_labels">
		<div class="labelRegister">Username:</div>
		<div class="labelRegister">Password:</div>
		<div class="labelRegister">Ripeti Password:</div>
		<div class="labelRegister">E-Mail:</div>
		<div class="labelRegister">Ripeti E-Mail:</div>
		
		<input id="submit_register" type="submit" name="submit" value="Registrati" />
	</div> 
	
	<div id="register_fields">
		<input class="registerTextFieds" type="text" name="username" value="<?php echo @$username; ?>" /><br />
		<input class="registerTextFieds" type="password" name="password" value="<?php echo @$password; ?>" /><br />
		<input class="registerTextFieds" type="password" name="repassword" /><br />
		<input class="registerTextFieds" type="text" name="mail" value="<?php echo @$mail; ?>" /><br />
		<input class="registerTextFieds" type="text" name="remail" /><br />
	</div>
</form>

<?php include 'include/bottom.php'; ?>