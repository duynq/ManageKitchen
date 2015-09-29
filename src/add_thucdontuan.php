<?php
    
    require_once './config.php';
    session_start();

    if(isset($_SESSION['user'])){    
        
        $z1 = $_POST['z1'];
        $thu1 = $_POST['thu1'];
        $ngay1 = $_POST['ngay1'];

        $z2 = $_POST['z2'];
        $thu2 = $_POST['thu2'];
        $ngay2 = $_POST['ngay2'];

        $z3 = $_POST['z3'];
        $thu3 = $_POST['thu3'];
        $ngay3 = $_POST['ngay3'];

        $z4 = $_POST['z4'];
        $thu4 = $_POST['thu4'];
        $ngay4 = $_POST['ngay4'];

        $z5 = $_POST['z5'];
        $thu5 = $_POST['thu5'];
        $ngay5 = $_POST['ngay5'];

        if($z1 > 0){

            $query1 = "update thucdontuan set date = '$ngay1', menu = $z1 where id = 8";
            mysql_query($query1);
            $query6 = "insert into thoigiandangky(thu,date,menu) values ('$thu1', '$ngay1', '$z1')";
            mysql_query($query6);

            $query2 = "update thucdontuan set date = '$ngay2', menu = $z2 where id = 9";
            mysql_query($query2);
            $query7 = "insert into thoigiandangky(thu,date,menu) values ('$thu2', '$ngay2', '$z2')";
            mysql_query($query7);

            $query3 = "update thucdontuan set date = '$ngay3', menu = $z3 where id = 10";
            mysql_query($query3);
            $query8 = "insert into thoigiandangky(thu,date,menu) values ('$thu3', '$ngay3', '$z3')";
            mysql_query($query8);

            $query4 = "update thucdontuan set date = '$ngay4', menu = $z4 where id = 11";
            mysql_query($query4);
            $query9 = "insert into thoigiandangky(thu,date,menu) values ('$thu4', '$ngay4', '$z4')";
            mysql_query($query9);

            $query5 = "update thucdontuan set date = '$ngay5', menu = $z5 where id = 12";
            mysql_query($query5);
            $query10 = "insert into thoigiandangky(thu,date,menu) values ('$thu5', '$ngay5', '$z5')";
            mysql_query($query10);
            echo 1;
        }
    }
?>