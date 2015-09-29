<?php
    require_once './config.php';
    session_start();
    $id = $_POST['id'];
    $query = "delete from _user where ID_user ='$id'";
    mysql_query($query);
    echo 1 ;
?>

    
    

