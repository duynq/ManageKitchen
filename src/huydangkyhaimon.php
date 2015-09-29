<?php
    
    require_once './config.php';
    session_start();

    if(isset($_SESSION['user'])){    
        
        $ID_user = $_POST['ID_user'];
        $mont1 = $_POST['month'];
        $date1 = $_POST['day'];


        $sql="select * from thucdontuan where thu = 2";
        $query=mysql_query($sql);
        $row = mysql_fetch_array($query);

        $id_menu = $row[3];
        $date = $row[2];

        $day2 = explode('-',$date);
        $mont2 = $day2[1];
        $date2 = $day2[2];
        $test = 0;
        if($mont1 == $mont2){
            if($date1 >= $date2){
                echo 2;
                $test = 1;
            }
        }else if($mont1 > $mont2){
            echo 2;
            $test = 1;
        }
        if($test == 0){
            $query = "delete from dangkyhai where ID_menu='".$id_menu."' and ID_user ='".$ID_user."' and date ='".$date."'";
            mysql_query($query);
            echo 1 ;
        }
    }
?>