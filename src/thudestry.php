<?php
    
    require_once './config.php';
    session_start();

    if(isset($_SESSION['user'])){    
        
        $ID_user = $_POST['ID_user'];
        $sql="select * from thucdontuan where thu = 5";
        $query=mysql_query($sql);
        $row = mysql_fetch_array($query);
        $id_menu = $row[3];
        $date = $row[2];
        $query = "delete from dangkyhai where ID_menu='".$id_menu."' and ID_user ='".$ID_user."' and date ='".$date."'";
        mysql_query($query);
        echo 1 ;
    }
?>