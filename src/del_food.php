<?php
    require_once './config.php';
    session_start();

    $id=$_POST['id'];
    $query = "delete from food where ID_food ='$id'";
    mysql_query($query);
    echo 1 ;
?>