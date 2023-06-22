<?php
   include("cf.php");
   if(isset($_GET['code'])){
      connect();
      $code = @$_GET["code"];
      $check_code = mysql_query("SELECT active FROM main WHERE code='$code'");
	  if(mysql_num_rows($check_code)==1){
	     $check_active = mysql_query("SELECT code FROM main WHERE code='$code' AND active='1'");
		 if(mysql_num_rows($check_active)==0){
		    $list_chars = "abcdefghilmnopqrstuvzwkjyx1234567890";
			$str_shuffle = str_shuffle($list_chars);
			$new_code = substr($str_shuffle,0,13); 
		    mysql_query("UPDATE main SET active='1' WHERE code='$code'");
			mysql_query("UPDATE main SET code='$new_code' WHERE code='$code'");
			?>
			   <script type="text/javascript">
			      alert("Grazie per avere attivato il tuo account.");
			   </script>
			   <meta http-equiv="Refresh" content="1;url=http://www.pokemonxtreme.com" />
			<?php
		 } else{
		    ?>
			   <script type="text/javascript">
			      alert("Questo account e' gia stato attivato.");
			   </script>
			   <meta http-equiv="Refresh" content="1;url=http://www.pokemonxtreme.com" />
			<?php
		 }
	  } else{
	     header("location: /index.php");
	  }
   } else{
      header("location: /index.php");
   }
?>