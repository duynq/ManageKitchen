<?php 
	$host="localhost";
	$username="root";
	$password="";
	$db_name="btl";

	$conn = mysql_connect("$host", "$username", "$password")or die("Cannot connect to databases"); 
	mysql_select_db("$db_name")or die("Cannot select databases"); 
    mysql_query("SET NAMES utf8"); 
?>
