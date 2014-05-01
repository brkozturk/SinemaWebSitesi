<?php
	$conn = mysql_connect("localhost","root","");
	if(!$conn){
		die("Bağlatı hatası: ".mysql_error());	
	}
	
	$db_select = mysql_select_db("sinema",$conn);
	if(!$db_select){
		die("Veritabanı hatası: ".mysql_error());	
	}
	mysql_query("SET NAMES utf8");
?>