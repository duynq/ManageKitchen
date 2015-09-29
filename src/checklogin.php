<?php
    require_once './config.php';
    session_start();
    $user = $_GET['user'];
    $pass = $_GET['pass'];
    
    
    $query = "select * from _user where userName = '$user'";
    $res = mysql_query($query);
    if(mysql_num_rows($res) ==0){
        echo 2;
    }else{
        //kiem tra pass
        $pass = sha1($pass);
        $row = mysql_fetch_array($res);
        
        if($row['passworduser'] == $pass){
            $_SESSION['user'] = $row['userName'];
            $_SESSION['level'] = $row['level_user'];
            $_SESSION['id'] = $row['ID_user'];
            echo 1;
        }else{
            echo 2;
        }
    }
