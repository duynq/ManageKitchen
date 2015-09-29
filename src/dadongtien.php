<?php
    require_once './config.php';
    session_start();
    if(isset($_SESSION['user'])){    
    	
    	$ma = $_POST['ma'];
    	$nam = $_POST['nam'];
    	$thang = $_POST['thang'];

    	$sql="select * from dongtien where manv='".$ma."' and thang = '$thang' and nam = '$nam'";
        $query=mysql_query($sql);
        if(mysql_num_rows($query) != "" ){
            echo 2;
        }else {   
            $query = "insert into dongtien(manv,thang,nam) values ('$ma','$thang', '$nam')";
            mysql_query($query);
            echo 1;
        }
    }
?>