<?php
    
    require_once './config.php';
    session_start();
    if(isset($_SESSION['user'])){
                
        $ID_user = $_POST['ID_user'];
        $mon = $_POST['mon'];
        $tue = $_POST['tue'];
        $wed = $_POST['wed'];
        $thu = $_POST['thu'];
        $fri = $_POST['fri'];

        $query1 = "update _user set mon = $mon,tue = $tue,wed = $wed,thu = $thu,fri = $fri where ID_user = $ID_user";
        mysql_query($query1);
        echo 1;
    }
?>