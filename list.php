<?php
    require_once './src/config.php';
    session_start();
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-enquiv="X-UA-Compatible" content "IE=edge">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript">
        </script>
        <link rel="stylesheet" href="css/list.css" media="screen">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script type="text/javascript">
            function loadXmlDoc()
            {
                return $.ajax({
                    type: "GET",
                    url: "books.xml",
                    dataType: "xml",
                    async:false
                }).responseXML;
            }
             
            $(function()
            {
                var xmlDoc=loadXmlDoc();
                var table=$("#myTable");
                $(xmlDoc).find("book").each(function()
                {
                    var tr="<tr>";
                    $(this).children().each(function()
                    {
                        var td="<td>"+$(this).text()+"</td>";
                        tr+=td;
                    });
                    tr+="</tr>";
                    table.append(tr);
                });
                 
                $("#searchBox").keyup(function()
                {
                    var keyword=this.value;
                    $("tr:gt(0)",table).each(function()
                    {
                        if($(this).text().search(keyword)>-1)
                            $(this).show();
                        else
                            $(this).hide();
                    });
                });
            });

            function loadXmlDoc1()
            {
                return $.ajax({
                    type: "GET",
                    url: "books1.xml",
                    dataType: "xml",
                    async:false
                }).responseXML;
            }
             
            $(function()
            {
                var xmlDoc=loadXmlDoc1();
                var table=$("#myTable1");
                $(xmlDoc).find("book1").each(function()
                {
                    var tr="<tr>";
                    $(this).children().each(function()
                    {
                        var td="<td>"+$(this).text()+"</td>";
                        tr+=td;
                    });
                    tr+="</tr>";
                    table.append(tr);
                });
                 
                $("#searchBox1").keyup(function()
                {
                    var keyword=this.value;
                    $("tr:gt(0)",table).each(function()
                    {
                        if($(this).text().search(keyword)>-1)
                            $(this).show();
                        else
                            $(this).hide();
                    });
                });
            });
            function loadXmlDoc2()
            {
                return $.ajax({
                    type: "GET",
                    url: "books2.xml",
                    dataType: "xml",
                    async:false
                }).responseXML;
            }
             
            $(function()
            {
                var xmlDoc=loadXmlDoc1();
                var table=$("#myTable2");
                $(xmlDoc).find("book2").each(function()
                {
                    var tr="<tr>";
                    $(this).children().each(function()
                    {
                        var td="<td>"+$(this).text()+"</td>";
                        tr+=td;
                    });
                    tr+="</tr>";
                    table.append(tr);
                });
                 
                $("#searchBox2").keyup(function()
                {
                    var keyword=this.value;
                    $("tr:gt(0)",table).each(function()
                    {
                        if($(this).text().search(keyword)>-1)
                            $(this).show();
                        else
                            $(this).hide();
                    });
                });
            });

            function loadXmlDoc3()
            {
                return $.ajax({
                    type: "GET",
                    url: "books3.xml",
                    dataType: "xml",
                    async:false
                }).responseXML;
            }
            $(function()
            {
                var xmlDoc=loadXmlDoc1();
                var table=$("#myTable3");
                $(xmlDoc).find("book3").each(function()
                {
                    var tr="<tr>";
                    $(this).children().each(function()
                    {
                        var td="<td>"+$(this).text()+"</td>";
                        tr+=td;
                    });
                    tr+="</tr>";
                    table.append(tr);
                });
                 
                $("#searchBox3").keyup(function()
                {
                    var keyword=this.value;
                    $("tr:gt(0)",table).each(function()
                    {
                        if($(this).text().search(keyword)>-1)
                            $(this).show();
                        else
                            $(this).hide();
                    });
                });
            });

            function come(){
                manv = document.getElementById("manv").value;
                date = document.getElementById("date").value;
                row = date.split("-");
                nam = row[0];
                thang = row[1];
                ngay = row[2];
                come = 1;
                $.ajax({
                   url:'src/add_come.php',
                   type:'POST',
                   data:{manv:manv,nam:nam,thang:thang,ngay:ngay,come:come},
                    success: function(data) {
                        if(data==1){
                            alert("da update");
                            location.reload(true);
                        }
                    }

                });
            }
            function thongke(){

                thang = document.getElementById("thang").value;
                nam = document.getElementById("nam").value;
                $.ajax({
                   url:'src/dongtien.php',
                   type:'POST',
                   data:{thang:thang,nam:nam},
                    success: function(data) {
                        if(data==1){
                            location.reload(true);
                        }else if(data ==2){
                            // alert("Xin lỗi bạn đã hết hạn hủy đăng ký");
                        }
                    }

                });
            }
            function send(){
                ma = document.getElementById("ma").value;
                thang = document.getElementById("month").value;
                nam = document.getElementById("year").value;
                $.ajax({
                   url:'src/dadongtien.php',
                   type:'POST',
                   data:{ma:ma,thang:thang,nam:nam},
                    success: function(data) {
                        if(data==1){
                            location.reload(true);
                        }else if(data ==2){
                            // alert("Xin lỗi bạn đã hết hạn hủy đăng ký");
                        }
                    }

                });

            }
            function sendhh(){

                ten = document.getElementById("tenhh").value;
                soluong = document.getElementById("soluong").value;
                donvi = document.getElementById("donvi").value;
                gia = document.getElementById("gia").value;
                ngayhh = document.getElementById("ngayhh").value;
                $.ajax({
                   url:'src/add_hh.php',
                   type:'POST',
                   data:{ten:ten,soluong:soluong,donvi:donvi,gia:gia,ngayhh:ngayhh},
                    success: function(data) {
                        if(data==1){
                            location.reload(true);
                        }else if(data ==2){
                            // alert("Xin lỗi bạn đã hết hạn hủy đăng ký");
                        }
                    }

                });
            }
            function hanghoa(){

                thang = document.getElementById("thang2").value;
                nam = document.getElementById("nam2").value;

                $.ajax({
                   url:'src/tkhanghoa.php',
                   type:'POST',
                   data:{thang:thang,nam:nam},
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
        <table class="table">
            <tr>
                <td>
                    <br>
                    <br>
                    <h3><label text-align="center" >Thống kê người đăng kí</label></h3>
                    <br/>
                    Search:
                    <input id="searchBox" type="text" style="width:200px"></input>
                    <table id="myTable" class="table">
                        <thead id="th1"> 
                            <th>STT</th>
                            <th>MSSV</th>
                            <th></th>
                            
                            <th>Họ và Tên</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Thứ</th>
                            <th></th>
                            <th></th>
                            <th>Ngày</th>
                        </thead>
                        <tbody id ="tb1">
                            <?php 
                                $sql = "select u.manv,u.name,dk.thu,dk.date from dangkyhai dk join _user u on(dk.ID_user = u.ID_user) where month(date) = 6";
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
                            ?>
                        </tbody>
                    </table>
                </td>
                <td>
                    <br>
                    <br>
                    <h3><label id="label2" >Thống kê người đến ăn</label></h3>
                    <br/>
                    Search:
                    <input id="searchBox1" type="text" style="width:200px"></input>
                    <table id="myTable1" class="table">
                        <thead id="th2"> 
                            <th>STT</th>
                            <th>MSSV</th>
                            <th></th>
                            
                            <th>Họ và Tên</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Thứ</th>
                            <th></th>
                            <th></th>
                            <th>Ngày</th>
                        </thead>
                        <tbody id ="tb2">
                            <?php 
                                $sql = "select u.manv,u.name,dk.thu,dk.date from dangkyhai dk join _user u on(dk.ID_user = u.ID_user) where month(date) = 6 and come = 1";
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
                            ?>
                        </tbody>
                    </table>
                    <p class="form-inline" >
                        <label>mã nv:</label>
                        <input type="text" class="form-control" id="manv"/>
                        <input type="date" class="form-control" id= "date"/>
                        <button type="button" class="btn btn-success" onclick="javascript:come();">Gửi</button>
                    </p>
                </td>
            </tr>
        </table>
            <h3><label id="label2" >Thống kê người dùng và tổng số tiền ăn</label></h3>
            <br/>
            
            <p class="form-inline" >
                Tháng: <input type="text" id="thang" class="form-control"/>
                Năm: <input type="text" id="nam" class="form-control"/>
                <button type="button" class="btn btn-success" onclick="javascript:thongke();" >Thống kê</button>
            </p>
            <br>
            Search:
            <input id="searchBox2" type="text" style="width:200px"></input>
        <div id="content">
            
            <table id="myTable2" class="table">
                <thead id="th3"> 
                    <th>STT</th>
                    <th>MSSV</th>
                    <th></th>
                    <th>Họ và Tên</th>
                    <th></th>
                    <th>Tổng số tiền</th>
                    <th></th>
                    <th>trạng thái</th>
                </thead>
                <tbody id ="tb3">
                    <?php 
                        $sql = "select * from _user where level_user = 2";
                        $stt=0;
                        $query = mysql_query($sql);
                        $sql4 = "select * from thangdongtien";
                        $query4 = mysql_query($sql4);
                        $row4 = mysql_fetch_array($query4);

                        $thang = $row4[1];
                        $nam = $row4[2];
                        // $thang2 = $row4[1];
                        // $nam2 = $row4[2];
                        while($row = mysql_fetch_array($query)){
                            $stt++;
                            $sql1 = "select count(*) from dangkyhai where ID_user='$row[0]' and year(date) = '$nam' and month(date) = '$thang'";
                            $query1 = mysql_query($sql1);
                            $row1 = mysql_fetch_array($query1);
                            $tien = 30000 * $row1[0];

                            $sql2 = "select * from dongtien where manv = '".$row[7]."' and thang = '$thang' and nam = '$nam'";
                            $query2 = mysql_query($sql2);

                            echo "<tr>";
                            echo "<td>$stt</td>";
                            echo "<td>$row[7]</td>";
                            echo "<td>       </td>";
                            echo "<td>$row[1]</td>";
                            echo "<td>        </td>";
                            echo "<td>$tien</td>";
                            echo "<td>        </td>";
                            if(mysql_num_rows($query2) != ""){
                                echo "<td>bạn đã đóng tiền</td>";
                            }else{
                                echo "<td></td>";
                            }
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <p class="form-inline" >
            mã nhân viên: <input type="text" id="ma" class="form-control"/>
            Tháng: <input type="text" id="month" class="form-control"/>
            Năm: <input type="text" id="year" class="form-control"/>
            <button type="button" class="btn btn-success" onclick="javascript:send();" >gửi</button>
        </p>
        <br>
        <br>
        <h3><label id="label2" >Thống kê hàng hóa</label></h3>
        <br>
        <p class="form-inline" >
            Tháng: <input type="text" id="thang2" class="form-control"/>
            Năm: <input type="text" id="nam2" class="form-control"/>
            <button type="button" class="btn btn-success" onclick="javascript:hanghoa();" >Thống kê</button>
        </p>
        <br>
        Search:
        <input id="searchBox3" type="text" style="width:200px"></input>
        <div id ="content2">
            <table id="myTable3" class="table">
                <thead id="th4"> 
                    <th>STT</th>
                    <th>Tên hàng hóa</th>
                    <th></th>
                    <th>Số lượng</th>
                    <th></th>
                    <th>Giá</th>
                    <th></th>
                    <th>Đơn vị</th>
                    <th></th>
                    <th>Ngày</th>
                </thead>
                <tbody id ="tb4">
                    <?php
                        $query = mysql_query($sql);
                        $sql4 = "select * from thongkehanghoa";
                        $query4 = mysql_query($sql4);
                        $row4 = mysql_fetch_array($query4);

                        $thang = $row4[1];
                        $nam = $row4[2];
                        $sql = "select * from hanghoa where year(date) = '$nam' and month(date) = '$thang'";
                        $stt=0;
                        $query = mysql_query($sql);
                        while($row = mysql_fetch_array($query)){
                            $stt++;
                            echo "<tr>";
                            echo "<td>$stt</td>";
                            echo "<td>$row[1]</td>";
                            echo "<td>       </td>";
                            echo "<td>$row[2]</td>";
                            echo "<td>        </td>";
                            echo "<td>$row[4]</td>";
                            echo "<td>        </td>";
                            echo "<td>$row[3]</td>";
                            echo "<td>        </td>";
                            echo "<td>$row[5]</td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <p class="form-inline" >
            Tên: <input type="text" id="tenhh" class="form-control"/>
            số lượng: <input type="text" id="soluong" class="form-control"/>
            đơn vị: <input type="text" id="donvi" class="form-control"/>
            giá: <input type="text" id="gia" class="form-control"/>
        </p>
        <p class="form-inline">
            ngày: <input type="date" id="ngayhh" class="form-control"/>
            <button type="button" class="btn btn-success" onclick="javascript:sendhh();" >gửi</button>
        </p>
    </body>
</html>