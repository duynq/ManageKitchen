<?php
    
    require_once './config.php';
    session_start();

    if(isset($_SESSION['user'])){

        $namemenu = $_POST['namemenu'];
        $price = $_POST['price'];
        $t = 2;
        $query1 = "select * from chonmot";
        $res1 = mysql_query($query1);
        $row1 = mysql_fetch_array($res1);                            
        $t1 = $row1[1];

        $query2 = "select * from chonhai";
        $res2 = mysql_query($query2);
        $row2 = mysql_fetch_array($res2);                            
        $t2 = $row2[1];

        $query3 = "select * from chonba";
        $res3 = mysql_query($query3);
        $row3 = mysql_fetch_array($res3);                            
        $t3 = $row3[1];

        $query4 = "select * from chonbon";
        $res4 = mysql_query($query4);
        $row4 = mysql_fetch_array($res4);                            
        $t4 = $row4[1];

        $sql="select * from menu where id_food1 = $t1 and id_food2 = $t2 and id_food3 = $t3 and id_food4 = $t4";
      	$query=mysql_query($sql);
      	if(mysql_num_rows($query) != "" ){
      		echo 2;
      	}else {
        		$query = "insert into menu(namemenu,priceEach,ID_food,id_food1,id_food2,id_food3,id_food4) values ('$namemenu','$price','$t1','$t1','$t2','$t3','$t4')";
        		mysql_query($query);
    			echo 1;
    	     }
        }else{
        echo 3;
        }
?>