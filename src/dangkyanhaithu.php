<?php
    
    require_once './config.php';
    session_start();
    if(isset($_SESSION['user'])){
             
        $id_user = $_POST['id'];
        $mont1 = $_POST['month'];
        $date1 = $_POST['day'];


        $sql = "select * from thucdontuan where thu = 5";
        $query = mysql_query($sql);
        $row = mysql_fetch_array($query);

        $thu = $row[1];
        $id_menu = $row[3];
        $date = $row[2];

        $day2 = explode('-',$date);
        $mont2 = $day2[1];
        $date2 = $day2[2];
        $test = 0;
        $sql="select * from dangkyhai where ID_menu='".$id_menu."' and ID_user ='".$id_user."' and date ='".$date."'";
        $query=mysql_query($sql);

        if(mysql_num_rows($query) != "" ){
            $test = 1;
            echo 2;
        }else if($mont1 == $mont2){
            if($date1 >= $date2){
                echo 2;
                $test = 1;
            }
        }else if($mont1 > $mont2){
            echo 2;
            $test = 1;
        }
        if($test == 0){
            $query2 = "insert into dangkyhai(ID_user,ID_menu,thu,date) values ('$id_user', '$id_menu', '$thu','$date')";
            mysql_query($query2);
            echo 1;
        }
     }else{
        echo 3;
        }
      ?>