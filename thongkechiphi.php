<?php 
    session_start();
    
    if(isset($_SESSION['level']) && ($_SESSION['level'] == 2)){
    require_once './src/config.php';
?>

<html>
    <head>
        <meta charset="utf-8">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/thongkechiphi.css">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/dangkian.js"></script>
        <script type="text/javascript">
            function thongke(){
                ID_user = <?php echo $_SESSION['id'];?>;
                thang = document.getElementById("thang").value;
                nam = document.getElementById("nam").value;
                $.ajax({
                   url:'src/thongke.php',
                   type:'POST',
                   data:{ID_user:ID_user,thang:thang,nam:nam},
                    success: function(data) {
                        if(data==1){
                            location.reload(true);
                        }else if(data ==2){
                            // alert("Xin lỗi bạn đã hết hạn hủy đăng ký");
                        }
                    }

                });
            }
        </script>
    </head>
    <body>
        <br>
        <br>
        <label><i>Thống kê số buổi ăn trong tháng và tổng số tiền phải trả: </i></label>
        <p class="form-inline" >
            Tháng: <input type="text" id="thang" class="form-control"/>
            Năm: <input type="text" id="nam" class="form-control"/>
            <button type="button" class="btn btn-success" onclick="javascript:thongke();" >Thống kê</button>
        </p>
        <div id="content">
            <table class="table">
                <thead> 
                    <th>STT</th>
                    <th>MSSV</th>
                    <th></th>
                    <th>Họ và Tên</th>
                    <th></th>
                    <th>Thứ</th>
                    <th></th>
                    <th>Ngày</th>
                </thead>
                <tbody>
                    <?php

                        $sql1 = "select * from thongke";
                        $query1 = mysql_query($sql1);
                        $row1 = mysql_fetch_array($query1);

                        $thang = $row1[1];
                        $nam = $row1[2];

                        $id = $_SESSION['id'];
                        $sql = "select u.manv,u.name,dk.thu,dk.date from dangkyhai dk join _user u on(dk.ID_user = u.ID_user) where month(date) = '$thang' and year(date) = '$nam' and dk.ID_user = '$id'";
                        $stt=0;
                        $query = mysql_query($sql);
                        while($row = mysql_fetch_array($query)){
                            $stt++;
                            echo "<tr>";
                            echo "<td>$stt</td>";
                            echo "<td>$row[0]</td>";
                            echo "<td>       </td>";
                            echo "<td>$row[1]</td>";
                            echo "<td>        </td>";
                            echo "<td>$row[2]</td>";
                            echo "<td>        </td>";
                            echo "<td>$row[3]</td>";
                            echo "</tr>";
                        }
                        $tien = $stt * 300000;
                    ?>
                </tbody>
            </table>
        </div>
        <label>Tổng số tiền ăn trong tháng <?php echo "$thang"; ?> là: <?php echo "$tien";?> đồng</label>
    </body>
</html>

<?php 
    } else{
     header('index.php');
    };
?>