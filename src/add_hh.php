<?php
    
    require_once './config.php';
    session_start();

    if(isset($_SESSION['user'])){    

        $ten = $_POST['ten'];
        $soluong = $_POST['soluong'];
        $donvi = $_POST['donvi'];
        $gia = $_POST['gia'];
        $ngayhh = $_POST['ngayhh'];

        $sql = "insert into hanghoa(ten,soluong,donvi,gia,date) values ('$ten', '$soluong', '$donvi','$gia','$ngayhh')";
        mysql_query($sql);
        echo 1;
    }
?>