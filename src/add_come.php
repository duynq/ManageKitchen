<?php
    require_once './config.php';
    session_start();
    if(isset($_SESSION['user'])){    
    	
    	$manv = $_POST['manv'];
    	$nam = $_POST['nam'];
    	$thang = $_POST['thang'];
    	$ngay = $_POST['ngay'];
    	$come = $_POST['come'];

    	$sql1 = "select * from _user where manv = '$manv'";
    	$query1 = mysql_query($sql1);
    	$row1 = mysql_fetch_array($query1);

    	$id_user = $row1[0];

    	$query2 = "update dangkyhai set come = '$come' where ID_user = '$id_user' and year(date) = '$nam' and month(date) = '$thang' and day(date) = '$ngay'";
        mysql_query($query2); 
        echo 1;
    }
?>