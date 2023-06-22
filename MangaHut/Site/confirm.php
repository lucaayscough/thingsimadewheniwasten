<?php include 'include/top.php'; ?>

<h1>CONFERMA REGISTRAZIONE</h1>

<?php
	connect_db();
	
	$id = $_GET['id'];

	$queryGetInfo = mysql_query("SELECT * FROM users WHERE id=$id");
	
	if($queryGetInfo === FALSE) {
	    echo 'Questo account non esiste!';
	} else{	
		while($getInfo = mysql_fetch_array($queryGetInfo)) {
			if($getInfo['confirmed']==0){
				mysql_query("UPDATE users SET confirmed=1 WHERE id=$id");
				echo 'Grazie per aver confermato il tuo account!';
			} elseif($getInfo['confirmed']==1){
				echo 'Questo account è già stato attivato!';
			}
		}
	}

	include 'include/bottom.php';
?>