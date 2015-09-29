<?php
	require_once './config.php';
    session_start();

    $foodid=$_POST['foodid'];
    
    if($foodid > 0){

    	$sql = "select * from chonbon ";
	    $query=mysql_query($sql);
	    $row = mysql_fetch_array($query);
	    $sql2 = "delete from chonbon where foodid = $row[1]";
	    mysql_query($sql2);
		$query2 = "insert into chonbon(foodid) value ('$foodid')";
		mysql_query($query2);
		
		echo 1;	
    }

?>