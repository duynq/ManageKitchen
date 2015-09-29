<?php
    require_once './config.php';
    session_start();    
    $pw = $_POST['pw'];
    $id=$_POST['id'];
    $level=$_POST['level'];

    // $query = "insert into test(pass,id_user,level) values (sha1('".mysql_real_escape_string($pw)."'), '$id','$level')";
    

    $query1 = "update _user set passworduser = sha1('".mysql_real_escape_string($pw)."'), level_user = '$level' where ID_user = '$id'";
    mysql_query($query1);
    echo 1;
?>

