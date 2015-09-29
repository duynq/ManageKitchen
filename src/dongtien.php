<?php
    
    require_once './config.php';
    session_start();
    if(isset($_SESSION['user'])){
        
        $thang = $_POST['thang'];
        $nam = $_POST['nam'];

        $sql = "select * from thangdongtien ";
        $query=mysql_query($sql);
        $row = mysql_fetch_array($query);
        $sql2 = "delete from thangdongtien where id = $row[0]";
        mysql_query($sql2);
        $query2 = "insert into thangdongtien(thang,nam) value ('$thang','$nam')";
        mysql_query($query2);
        
        echo 1; 
        
    }
?>