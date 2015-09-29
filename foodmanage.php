<?php
    session_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <link rel="Stylesheet" href="css/mystyle.css" type="text/css">
    <link rel="Stylesheet" href="css/managefood.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" media="screen">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/thumbnail-gallery.css" rel="stylesheet" type="text/css">
    <script src="js/jquery.js"></script>
    <script src="js/managefood.js"></script>
</head>
<body>
    <div id="header">
         <h3 style="color:#F07A4E">DANH SÁCH MÓN ĂN</h3><br>
    </div>
	<div id="container">
        <?php
            $colmax = 4;
            echo "<table >";
                $conn=mysql_connect("localhost","root","") or die("can't connect this database");
                mysql_select_db("btl",$conn);
                mysql_query("SET NAMES 'utf8'", $conn);
                $sql="select * from food order by ID_food DESC";
                $query=mysql_query($sql);
                while($row=mysql_fetch_array($query)){
                    for($i = 1;$i <= $colmax;$i++){
                        if($i != 1) {$row=mysql_fetch_array($query);}
                        if($i ==1 ){echo "<tr>";}
                        if($row['foodName']!=""){
                            echo "<td width='300px' align='center' >";
                            echo "<br>";
                            $link = "images/".$row['image'];
                            echo "<a href=''>";
                                echo "<img border ='0' src='$link' width ='220' height='220' href=''>";
                            echo "</a>";
                            echo "<br>";
                            echo "<br>";
                            echo "<input type='button' class='art-button' value='xóa' onclick='d_food($row[ID_food])'>";
                            echo " ".$row['foodName'];
                            echo "<br>";
                            echo "</td>";
                        }
                        if($i==$colmax){echo "</tr>";}
                    }
                }
            echo "</table>";
        ?>

    </div>
    <div>
        <br>
        <p>Tên món ăn: <input type='text' name = 'foodname' id = 'foodname' size='25' required/></p>
        <p>Hình ảnh: <input id='image' type='file'/></p>
        <p>Mô tả:<br><textarea type='text' name = 'description' id='description' required></textarea></p>
        <br>
        <p><input type="button" value="Thêm món ăn" class="btn btn-success" onclick='add_food()'/></p>
        <script type="text/javascript">
            document.getElementById('foodname').focus();
        </script>
    </div>
</body>
</html>
