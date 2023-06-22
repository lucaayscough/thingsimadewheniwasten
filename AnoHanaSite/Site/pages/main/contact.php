<?php
	if(basename($_SERVER['SCRIPT_FILENAME'])=='contact.php')
		header('location: http://www.anohanasite.altervista.org');
?>

<center><h1 id="page-title">Contattaci</h1></center>

<link type="text/css" rel="stylesheet" href="css/contact.css" />

<title>Contattaci - AnoHana Site</title>

In questa pagina e' stato creato un form che tutti voi utenti potrete usare per contattare lo staff per avvertirci di un link non funzionante, segnalare una malfunzione nel sito o qualsiasi cosa che volete farci sapere...<br /><br />
Vi preghiamo pero' di non abbusare il servizio e non spammare. Per ulteriori informazioni riguardo le regole andate in questa pagina: <a href="index.php?p=regolamento">regolamento</a>.
<br /><br />

<?php
	$nick = @$_POST['nick'];
	$mail = @$_POST['mail'];
	$object =  @$_POST['object'];
	$message = @$_POST['message'];
	
	if(isset($_POST['send'])){
		$to = 'anohanasite@gmail.com';
		
		$errors;
		
		if($nick=='')
			$errors[] = 'Devi inserire un Nickname.';
		if($mail=='')
			$errors[] = 'Devi inserire la tua e-mail.';
		if($object=='')
			$errors[] = 'Devi inserire un oggetto.';
		if($message=='')
			$errors[] = 'Devi inserire un messaggio.';
			
		if(empty($errors)){
			mail($to, $object, 'Messaggio da: '.$nick."\n\n".$message, 'From:'.$mail);
			echo 'L\' e-mail e\' stata inviata correttamente, ti risponderemo al piu\' presto possibile...';
		} else{
			foreach($errors as $error){
				echo $error.'<br />';
			}
		}	
	}
?>

<div id="contact-form">
	<form action="#" method="post"> 
		Nickname: <input id="nick" type="text" name="nick" value="<?php echo $nick; ?>" /> E-Mail: <input type="text" name="mail" value="<?php echo $mail; ?>" /><br /><br />
		Oggetto: <input id="object" type="text" name="object" value="<?php echo $object; ?>" /><br />
		<br />
		Messaggio:<br />
		<textarea id="mex" name="message"><?php echo $message; ?></textarea>
		<input id="input" type="submit" value="Invia!" name="send" />
	</form>
</div>