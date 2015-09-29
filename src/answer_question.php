<?php
    require_once './config.php';
    session_start();
    
    if($_SESSION['level']==1){
        $time = $_GET['time'];
        $ans = $_GET['ans'];
        $query = "update question set answering= '$ans' where time='$time'";
        mysql_query($query);
//        echo $query;
    }else{
        echo 2;
    }


