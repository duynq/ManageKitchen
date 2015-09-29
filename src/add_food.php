<?php
    
  require_once './config.php';
  session_start();
  if(isset($_SESSION['user'])){
      $description = $_POST['description'];
      $foodName = $_POST['foodName'];      
      $image = $_POST['imagename'];    
      $sql="select * from food where image='".$image."'";
    	$query=mysql_query($sql);
    	if(mysql_num_rows($query) != "" ){
    		echo 2;
    	}else {
      		$query = "insert into food(description,foodName,image) values ('$description', '$foodName', '$image')";
      		mysql_query($query);
  			echo 1;
  	  }
      }else{
      echo 3;
      }
?>