<?php

ob_start();

setcookie('username','',time()-1000000);

header('location: index.php');

ob_end_flush();

?>