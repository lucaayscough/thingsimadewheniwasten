<?php
   if(basename($_SERVER['SCRIPT_FILENAME']) == "member.php"){
      header("location: ../index.php");
      exit;
   }
?>
<link type="text/css" rel="stylesheet" href="css/member.css" />
<div id="member_pannel">
   <div id="member_pannel_content">
     <?php
        if(isset($_COOKIE["username"])){
	       $username = $_COOKIE["username"];
	    } else if(isset($_SESSION["username"])){
	       $username = $_SESSION["username"];
	    }
		connect_db();
      	$get_user_id = mysql_query("SELECT * FROM users WHERE username='$username'");
		while($get_user_id2 = mysql_fetch_assoc($get_user_id)){
		   $user_id = $get_user_id2["code"];
		}
		$get_mail = mysql_query("SELECT * FROM users WHERE username='$username'");
		while($get_mail2 = mysql_fetch_assoc($get_mail)){
		   $mail = $get_mail2["mail"];
		}
		$get_date = mysql_query("SELECT * FROM users WHERE username='$username'");
		while($get_date2 = mysql_fetch_assoc($get_date)){
		   $date = $get_date2["date"];
		}
		$get_avatar = mysql_query("SELECT * FROM users WHERE username='$username'");
		while($get_avatar2 = mysql_fetch_assoc($get_avatar)){
		   $avatar = $get_avatar2["avatar"];
		}
        echo "
		   <div id='menu_pannel'>
		      <center>Benvenuto <b>" . $username . "</b>. Hai effettuato l' accesso al tuo personale pannello di controllo.</center>
		      <div id='member_links'><a href='index.php?profile=$user_id'>Visualizza Profilo</a> | <a href='index.php?avatar=$user_id'>Seleziona avatar</a> | <a href=''>Cambia Password</a> | <a href='index.php?logout=user'>Logout</a></div>
		   </div>
		";
     ?>
   </div>
</div>