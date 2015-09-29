<?php
    
    require_once './config.php';
    session_start();
    if(isset($_SESSION['user'])){
      
        $user = $_POST['user'];
        $pword = $_POST['n_pword'];      
        $level = $_POST['level'];
        $name =  $_POST['name'];
        $mnv = $_POST['mnv'];

        $sql="select * from _user where manv='".$mnv."'";
      	$query=mysql_query($sql);
      	if(mysql_num_rows($query) != "" ){
      		echo 2;
      	}else {
      		
        		$query = "insert into _user(name,userName,passworduser,level_user,manv) values ('$name','".mysql_real_escape_string($user)."', sha1('".mysql_real_escape_string($pword)."'), '$level','$mnv')";
        		mysql_query($query);
 				echo 1;
 		}
     }else{
        echo 3;
        }
      ?>