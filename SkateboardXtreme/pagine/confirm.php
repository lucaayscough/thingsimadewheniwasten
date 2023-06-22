<center>
   <h1>Attiva account</h1>
   <?php
      if(basename($_SERVER['SCRIPT_FILENAME']) == "confirm.php"){
         header("location: ../index.php");
   	  exit();
      }
	  connect_db();
      $code = @$_GET["confirm"];
	  $get_code_db = mysql_query("SELECT active FROM users WHERE code='$code'");
	  if(mysql_num_rows($get_code_db)==1){
	     $check_account_activation = mysql_query("SELECT code FROM users WHERE code='$code' AND active='1'");
		 if(mysql_num_rows($check_account_activation)==0){
		    mysql_query("UPDATE users SET active='1' WHERE code='$code'");
		    echo "Grazie per avere attivato il tuo account, clicca <a href='../index.php?login=user'>qui</a> per loggarti.";
		 } else{
		    echo "Questo account e' gia attivo, clicca <a href='../index.php?login=user'>qui</a> per loggarti.";
		 }
	  } else{
	     header("location: ../index.php");
	  }
   ?>
</center>