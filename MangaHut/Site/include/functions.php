<?php
	function connect_db(){
		mysql_connect('localhost','root','root');
		mysql_select_db('MangaHut');
	}
?>