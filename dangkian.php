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
        <script type="text/javascript" src="js/jquery.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style1.css" />
        <script type="text/javascript" src="js/jquery-1.3.2.min.js" ></script>
        <script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js" ></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#featured").tabs({fx:[{opacity: "toggle", duration: 'slow'}, {opacity: "toggle", duration: 'normal'}],
                    show: function(event, ui){
                        $('#featured .ui-tabs-panel .info').hide();
                        var infoheight=$('.info', ui.panel).height();
                        $('.info', ui.panel).css('height', '0px').animate({ 'height': infoheight }, 500);
                    }
                }).tabs("rotate", 5000, true);
                $('#featured').hover(
                    function(){ $('#featured').tabs('rotate', 0, true); },
                    function(){ $('#featured').tabs('rotate', 5000, true); }
                );
                $('#featured .ui-tabs-panel a.hideshow').click(function(){
                    if($(this).text()=='Hide'){
                        $(this).parent('.info').animate({ 'height': '0px' }, 500);
                        $(this).text('Show');
                    }
                    else{
                        $(this).parent('.info').animate({ 'height': '70px' }, 500);
                        $(this).text('Hide');
                    }
                    return false;
                });
                $("#featured1").tabs({fx:[{opacity: "toggle", duration: 'slow'}, {opacity: "toggle", duration: 'normal'}],
                    show: function(event, ui){
                        $('#featured1 .ui-tabs-panel .info').hide();
                        var infoheight=$('.info', ui.panel).height();
                        $('.info', ui.panel).css('height', '0px').animate({ 'height': infoheight }, 500);
                    }
                }).tabs("rotate", 5000, true);
                $('#featured1').hover(
                    function(){ $('#featured1').tabs('rotate', 0, true); },
                    function(){ $('#featured1').tabs('rotate', 5000, true); }
                );
                $('#featured1 .ui-tabs-panel a.hideshow').click(function(){
                    if($(this).text()=='Hide'){
                        $(this).parent('.info').animate({ 'height': '0px' }, 500);
                        $(this).text('Show');
                    }
                    else{
                        $(this).parent('.info').animate({ 'height': '70px' }, 500);
                        $(this).text('Hide');
                    }
                    return false;
                });
                $("#featured2").tabs({fx:[{opacity: "toggle", duration: 'slow'}, {opacity: "toggle", duration: 'normal'}],
                    show: function(event, ui){
                        $('#featured2 .ui-tabs-panel .info').hide();
                        var infoheight=$('.info', ui.panel).height();
                        $('.info', ui.panel).css('height', '0px').animate({ 'height': infoheight }, 500);
                    }
                }).tabs("rotate", 5000, true);
                $('#featured2').hover(
                    function(){ $('#featured2').tabs('rotate', 0, true); },
                    function(){ $('#featured2').tabs('rotate', 5000, true); }
                );
                $('#featured2 .ui-tabs-panel a.hideshow').click(function(){
                    if($(this).text()=='Hide'){
                        $(this).parent('.info').animate({ 'height': '0px' }, 500);
                        $(this).text('Show');
                    }
                    else{
                        $(this).parent('.info').animate({ 'height': '70px' }, 500);
                        $(this).text('Hide');
                    }
                    return false;
                });

                $("#featured3").tabs({fx:[{opacity: "toggle", duration: 'slow'}, {opacity: "toggle", duration: 'normal'}],
                    show: function(event, ui){
                        $('#featured3 .ui-tabs-panel .info').hide();
                        var infoheight=$('.info', ui.panel).height();
                        $('.info', ui.panel).css('height', '0px').animate({ 'height': infoheight }, 500);
                    }
                }).tabs("rotate", 5000, true);
                $('#featured3').hover(
                    function(){ $('#featured3').tabs('rotate', 0, true); },
                    function(){ $('#featured3').tabs('rotate', 5000, true); }
                );
                $('#featured3 .ui-tabs-panel a.hideshow').click(function(){
                    if($(this).text()=='Hide'){
                        $(this).parent('.info').animate({ 'height': '0px' }, 500);
                        $(this).text('Show');
                    }
                    else{
                        $(this).parent('.info').animate({ 'height': '70px' }, 500);
                        $(this).text('Hide');
                    }
                    return false;
                });

                $("#featured4").tabs({fx:[{opacity: "toggle", duration: 'slow'}, {opacity: "toggle", duration: 'normal'}],
                    show: function(event, ui){
                        $('#featured4 .ui-tabs-panel .info').hide();
                        var infoheight=$('.info', ui.panel).height();
                        $('.info', ui.panel).css('height', '0px').animate({ 'height': infoheight }, 500);
                    }
                }).tabs("rotate", 5000, true);
                $('#featured4').hover(
                    function(){ $('#featured4').tabs('rotate', 0, true); },
                    function(){ $('#featured4').tabs('rotate', 5000, true); }
                );
                $('#featured4 .ui-tabs-panel a.hideshow').click(function(){
                    if($(this).text()=='Hide'){
                        $(this).parent('.info').animate({ 'height': '0px' }, 500);
                        $(this).text('Show');
                    }
                    else{
                        $(this).parent('.info').animate({ 'height': '70px' }, 500);
                        $(this).text('Hide');
                    }
                    return false;
                });

            });
            function monchoose(){
                t = <?php echo $_SESSION['id'];?>;
                dateObj = new Date();
                month = dateObj.getUTCMonth() + 1;
                day = dateObj.getUTCDate();
                $.ajax({
                   url:'src/dangkyanhaimon.php',
                   type:'POST',
                   data:{id:t,month:month,day:day},
                    success: function(data) {
                        if(data==1){
                            location.reload(true);
                        }else if(data ==2){
                            // alert("Xin lỗi bạn đã hết hạn đăng ký");
                        }
                    }

                });
            }
            
            function mondestry(){
                ID_user = <?php echo $_SESSION['id'];?>;
                dateObj = new Date();
                month = dateObj.getUTCMonth() + 1;
                day = dateObj.getUTCDate();
                $.ajax({
                   url:'src/huydangkyhaimon.php',
                   type:'POST',
                   data:{ID_user:ID_user,month:month,day:day},
                    success: function(data) {
                        if(data==1){
                            location.reload(true);
                        }else if(data ==2){
                            // alert("Xin lỗi bạn đã hết hạn hủy đăng ký");
                        }
                    }

                });
            }

            function tuechoose(){
                t = <?php echo $_SESSION['id'];?>;
                dateObj = new Date();
                month = dateObj.getUTCMonth() + 1;
                day = dateObj.getUTCDate();
                $.ajax({
                   url:'src/dangkyanhaitue.php',
                   type:'POST',
                   data:{id:t,month:month,day:day},
                    success: function(data) {
                        if(data==1){
                            location.reload(true);
                        }else if(data ==2){
                            // alert("Xin lỗi bạn đã hết hạn đăng ký");
                        }
                    }

                });
            }
            
            function tuedestry(){
                ID_user = <?php echo $_SESSION['id'];?>;
                dateObj = new Date();
                month = dateObj.getUTCMonth() + 1;
                day = dateObj.getUTCDate();
                $.ajax({
                   url:'src/huydangkyhaitue.php',
                   type:'POST',
                   data:{ID_user:ID_user,month:month,day:day},
                    success: function(data) {
                        if(data==1){
                            location.reload(true);
                        }else if(data ==2){
                            // alert("Xin lỗi bạn đã hết hạn hủy đăng ký");
                        }
                    }

                });
            }
            function wedchoose(){
                t = <?php echo $_SESSION['id'];?>;
                dateObj = new Date();
                month = dateObj.getUTCMonth() + 1;
                day = dateObj.getUTCDate();
                $.ajax({
                   url:'src/dangkyanhaiwed.php',
                   type:'POST',
                   data:{id:t,month:month,day:day},
                    success: function(data) {
                        if(data==1){
                            location.reload(true);
                        }else if(data ==2){
                            // alert("Xin lỗi bạn đã hết hạn đăng ký");
                        }
                    }

                });
            }
            function weddestry(){
                ID_user = <?php echo $_SESSION['id'];?>;
                dateObj = new Date();
                month = dateObj.getUTCMonth() + 1;
                day = dateObj.getUTCDate();
                $.ajax({
                   url:'src/huydangkyhaiwed.php',
                   type:'POST',
                   data:{ID_user:ID_user,month:month,day:day},
                    success: function(data) {
                        if(data==1){
                            location.reload(true);
                        }else if(data ==2){
                            // alert("Xin lỗi bạn đã hết hạn hủy đăng ký");
                        }
                    }

                });
            }

            function thuchoose(){
                t = <?php echo $_SESSION['id'];?>;
                dateObj = new Date();
                month = dateObj.getUTCMonth() + 1;
                day = dateObj.getUTCDate();
                $.ajax({
                   url:'src/dangkyanhaithu.php',
                   type:'POST',
                   data:{id:t,month:month,day:day},
                    success: function(data) {
                        if(data==1){
                            location.reload(true);
                        }else if(data ==2){
                            // alert("Xin lỗi bạn đã hết hạn đăng ký");
                        }
                    }

                });
            }
            function thudestry(){
                ID_user = <?php echo $_SESSION['id'];?>;
                dateObj = new Date();
                month = dateObj.getUTCMonth() + 1;
                day = dateObj.getUTCDate();
                $.ajax({
                   url:'src/huydangkyhaithu.php',
                   type:'POST',
                   data:{ID_user:ID_user,month:month,day:day},
                    success: function(data) {
                        if(data==1){
                            location.reload(true);
                        }else if(data ==2){
                            // alert("Xin lỗi bạn đã hết hạn hủy đăng ký");
                        }
                    }

                });
            }
            function frichoose(){
                t = <?php echo $_SESSION['id'];?>;
                dateObj = new Date();
                month = dateObj.getUTCMonth() + 1;
                day = dateObj.getUTCDate();
                $.ajax({
                   url:'src/dangkyanhaifri.php',
                   type:'POST',
                   data:{id:t,month:month,day:day},
                    success: function(data) {
                        if(data==1){
                            location.reload(true);
                        }else if(data ==2){
                            // alert("Xin lỗi bạn đã hết hạn đăng ký");
                        }
                    }

                });
            }
            function fridestry(){
                ID_user = <?php echo $_SESSION['id'];?>;
                dateObj = new Date();
                month = dateObj.getUTCMonth() + 1;
                day = dateObj.getUTCDate();
                $.ajax({
                   url:'src/huydangkyhaifri.php',
                   type:'POST',
                   data:{ID_user:ID_user,month:month,day:day},
                    success: function(data) {
                        if(data==1){
                            location.reload(true);
                        }else if(data ==2){
                            // alert("Xin lỗi bạn đã hết hạn hủy đăng ký");
                        }
                    }

                });
            }

            function dangkycuthe(){
                ID_user = <?php echo $_SESSION['id'];?>;
                thu2 = document.getElementById("thhh2").checked;
                thu3 = document.getElementById("thhh3").checked;
                thu4 = document.getElementById("thhh4").checked;
                thu5 = document.getElementById("thhh5").checked;
                thu6 = document.getElementById("thhh6").checked;
                if(thu2){
                    mon = 1;
                }else{
                    mon = 0;
                }
                if(thu3){
                    tue = 1;
                }else{
                    tue = 0;
                }
                if(thu4){
                    wed = 1;
                }else{
                    wed = 0;
                }
                if(thu5){
                    thu = 1;
                }else{
                    thu = 0;
                }
                if(thu6){
                    fri = 1;
                }else{
                    fri = 0;
                }
                $.ajax({
                   url:'src/dangkyngaycuthe.php',
                   type:'POST',
                   data:{ID_user:ID_user,mon:mon,tue:tue,wed:wed,thu:thu,fri:fri},
                    success: function(data) {
                        if(data==1){
                            location.reload(true);
                        }else if(data ==2){
                        }
                    }
                });
            }
            function huydangkycuthe(){
                ID_user = <?php echo $_SESSION['id'];?>;
                mon = 0;
                tue = 0;
                wed = 0;
                thu = 0;
                fri = 0;
                $.ajax({
                   url:'src/huydangkyngaycuthe.php',
                   type:'POST',
                   data:{ID_user:ID_user,mon:mon,tue:tue,wed:wed,thu:thu,fri:fri},
                    success: function(data) {
                        if(data==1){
                            location.reload(true);
                        }else if(data ==2){
                        }
                    }
                });   
            }
        </script>
    </head>
    <body>
        <?php 
            $d = $_SESSION['id'];
            $sql4 = "select * from _user where ID_user = $d";
            $query4 = mysql_query($sql4);
            $row4 = mysql_fetch_array($query4);
            if($row4[8] != 0){
                echo "<script type='text/javascript'>
                        monchoose();
                    </script>";
            }
            if($row4[9] != 0){
                echo "<script type='text/javascript'>
                        tuechoose();
                    </script>";
            }
            if($row4[10] != 0){
                echo "<script type='text/javascript'>
                        wedchoose();
                    </script>";
            }
            if($row4[11] != 0){
                echo "<script type='text/javascript'>
                        thuchoose();
                    </script>";
            }
            if($row4[12] != 0){
                echo "<script type='text/javascript'>
                        frichoose();
                    </script>";
            }
        ?>
        <br>
            <table>
                <tr>
                    <td>
                        <br>
                       <h3> <label>Thứ 2</label></h3>
                        <div id="featured" >
                            <ul class="ui-tabs-nav">
                            <?php
                                $sql="select * from thucdontuan where thu = 2";
                                $query=mysql_query($sql);
                                $row = mysql_fetch_array($query);

                                $sql2 = "select * from menu where ID_menu = $row[3]";
                                $query2 = mysql_query($sql2);
                                $row2 = mysql_fetch_array($query2);
                                
                                $sql3 = "select * from food where ID_food = $row2[4]";
                                $query3 = mysql_query($sql3);
                                $row3 = mysql_fetch_array($query3);

                            echo "<li class='ui-tabs-nav-item ui-tabs-selected' ><a href='#fragment-1'><span>$row3[2]</span></a></li>";
                            ?>

                            <?php

                                $sql="select * from thucdontuan where thu = 2";
                                $query=mysql_query($sql);
                                $row = mysql_fetch_array($query);

                                $sql2 = "select * from menu where ID_menu = $row[3]";
                                $query2 = mysql_query($sql2);
                                $row2 = mysql_fetch_array($query2);
                                
                                $sql3 = "select * from food where ID_food = $row2[5]";
                                $query3 = mysql_query($sql3);
                                $row3 = mysql_fetch_array($query3);

                            echo "<li class='ui-tabs-nav-item' ><a href='#fragment-2'><span>$row3[2]</span></a></li>";
                            ?>
                            <?php

                                $sql="select * from thucdontuan where thu = 2";
                                $query=mysql_query($sql);
                                $row = mysql_fetch_array($query);

                                $sql2 = "select * from menu where ID_menu = $row[3]";
                                $query2 = mysql_query($sql2);
                                $row2 = mysql_fetch_array($query2);
                                
                                $sql3 = "select * from food where ID_food = $row2[6]";
                                $query3 = mysql_query($sql3);
                                $row3 = mysql_fetch_array($query3);

                            echo "<li class='ui-tabs-nav-item' ><a href='#fragment-3'><span></span>$row3[2]</a></li>";
                            ?>
                            <?php

                                $sql="select * from thucdontuan where thu = 2";
                                $query=mysql_query($sql);
                                $row = mysql_fetch_array($query);

                                $sql2 = "select * from menu where ID_menu = $row[3]";
                                $query2 = mysql_query($sql2);
                                $row2 = mysql_fetch_array($query2);
                                
                                $sql3 = "select * from food where ID_food = $row2[7]";
                                $query3 = mysql_query($sql3);
                                $row3 = mysql_fetch_array($query3);

                            echo "<li class='ui-tabs-nav-item' ><a href='#fragment-4'><span>$row3[2]</span></a></li>";
                            ?>
                            </ul>
                            <!-- First Content -->
                            <div id="fragment-1" class="ui-tabs-panel" style="">
                                <?php

                                    $sql="select * from thucdontuan where thu = 2";
                                    $query=mysql_query($sql);
                                    $row = mysql_fetch_array($query);

                                    $sql2 = "select * from menu where ID_menu = $row[3]";
                                    $query2 = mysql_query($sql2);
                                    $row2 = mysql_fetch_array($query2);
                                    
                                    $sql3 = "select * from food where ID_food = $row2[4]";
                                    $query3 = mysql_query($sql3);
                                    $row3 = mysql_fetch_array($query3);
                                    $link = "images/".$row3['image'];
                                    echo "<img src='$link' alt=''/>";
                                ?>
                                    
                                     <div class="info" >
                                        <a class="hideshow" href="#" >Hide</a>
                                        <div class="mota" >
                                        <h2><?php echo $row3[2];?></h2>
                                        <p><?php echo $row3[1];?></p>
                                        </div>
                                     </div>
                            </div>

                            <!-- Second Content -->
                            <div id="fragment-2" class="ui-tabs-panel ui-tabs-hide" style="">

                                <?php

                                    $sql="select * from thucdontuan where thu = 2";
                                    $query=mysql_query($sql);
                                    $row = mysql_fetch_array($query);

                                    $sql2 = "select * from menu where ID_menu = $row[3]";
                                    $query2 = mysql_query($sql2);
                                    $row2 = mysql_fetch_array($query2);
                                    
                                    $sql3 = "select * from food where ID_food = $row2[5]";
                                    $query3 = mysql_query($sql3);
                                    $row3 = mysql_fetch_array($query3);
                                    $link = "images/".$row3['image'];
                                    echo "<img src='$link' alt=''/>";
                                ?>
                                 <div class="info" >
                                    <a class="hideshow" href="#" >Hide</a>
                                    <div class="mota">
                                    <h2><?php echo $row3[2];?></h2>
                                    <p><?php echo $row3[1];?></p>
                                    </div>
                                 </div>
                            </div>

                            <!-- Third Content -->
                            <div id="fragment-3" class="ui-tabs-panel ui-tabs-hide" style="">
                                <?php

                                    $sql="select * from thucdontuan where thu = 2";
                                    $query=mysql_query($sql);
                                    $row = mysql_fetch_array($query);

                                    $sql2 = "select * from menu where ID_menu = $row[3]";
                                    $query2 = mysql_query($sql2);
                                    $row2 = mysql_fetch_array($query2);
                                    
                                    $sql3 = "select * from food where ID_food = $row2[6]";
                                    $query3 = mysql_query($sql3);
                                    $row3 = mysql_fetch_array($query3);
                                    $link = "images/".$row3['image'];
                                    echo "<img src='$link' alt=''/>";
                                ?>
                                 <div class="info" >
                                    <a class="hideshow" href="#" >Hide</a>
                                    <div class="mota">
                                    <h2 ><?php echo $row3[2];?></h2>
                                    <p><?php echo $row3[1];?></p>
                                    </div>
                                 </div>
                            </div>

                            <!-- Fourth Content -->
                            <div id="fragment-4" class="ui-tabs-panel ui-tabs-hide" style="">
                                <?php

                                    $sql="select * from thucdontuan where thu = 2";
                                    $query=mysql_query($sql);
                                    $row = mysql_fetch_array($query);

                                    $sql2 = "select * from menu where ID_menu = $row[3]";
                                    $query2 = mysql_query($sql2);
                                    $row2 = mysql_fetch_array($query2);
                                    
                                    $sql3 = "select * from food where ID_food = $row2[7]";
                                    $query3 = mysql_query($sql3);
                                    $row3 = mysql_fetch_array($query3);
                                    $link = "images/".$row3['image'];
                                    echo "<img src='$link' alt=''/>";
                                ?>
                                 <div class="info" >
                                    <a class="hideshow" href="#" >Hide</a>
                                    <div class="mota">
                                    <h2><?php echo $row3[2];?></h2>
                                    <p><?php echo $row3[1];?></p>
                                    </div>
                                 </div>
                            </div>
                        </div>
                        <?php

                            $id_user = $_SESSION['id'];

                            $sql5 = "select * from _user where ID_user = $id_user";
                            $query5 = mysql_query($sql4);
                            $row5 = mysql_fetch_array($query5);
                            if($row5[8] != 0||$row5[9]!=0||$row5[10] !=0 ||$row5[11] != 0||$row5[12] != 0){
                                if($row5[8] !=0){
                                    echo "Bạn đã đăng ký ăn hôm nay";
                                }else {
                                    echo "Bạn không đăng ký ăn hôm nay";
                                }
                            }else {
                                $sql = "select * from thucdontuan where thu = 2";
                                $query = mysql_query($sql);
                                $row = mysql_fetch_array($query);

                                $thu = $row[1];
                                $id_menu = $row[3];
                                $date = $row[2];

                                $sql="select * from dangkyhai where ID_menu='".$id_menu."' and ID_user ='".$id_user."' and date ='".$date."'";
                                $query=mysql_query($sql);
                            
                                if(mysql_num_rows($query) != "" ){
                                    echo "<button type='buton' class='btn btn-warning' onclick='javascript:mondestry()' >Hủy</button>";
                                }else{
                                    echo "<button type='buton' class='btn btn-success' onclick='javascript:monchoose()' >Chọn</button>"; 
                                }
                            }
                        ?>
                        <br>
                    </td>
                    <td>
                        <br>
                        <h3><label>Thứ 3</label></h3>
                        <div id="featured1" >
                            <ul class="ui-tabs-nav">

                            <?php

                                $sql="select * from thucdontuan where thu = 3";
                                $query=mysql_query($sql);
                                $row = mysql_fetch_array($query);

                                $sql2 = "select * from menu where ID_menu = $row[3]";
                                $query2 = mysql_query($sql2);
                                $row2 = mysql_fetch_array($query2);
                                
                                $sql3 = "select * from food where ID_food = $row2[4]";
                                $query3 = mysql_query($sql3);
                                $row3 = mysql_fetch_array($query3);

                            echo "<li class='ui-tabs-nav-item ui-tabs-selected' ><a href='#fragment-5'><span>$row3[2]</span></a></li>";
                            ?>

                            <?php

                                $sql="select * from thucdontuan where thu = 3";
                                $query=mysql_query($sql);
                                $row = mysql_fetch_array($query);

                                $sql2 = "select * from menu where ID_menu = $row[3]";
                                $query2 = mysql_query($sql2);
                                $row2 = mysql_fetch_array($query2);
                                
                                $sql3 = "select * from food where ID_food = $row2[5]";
                                $query3 = mysql_query($sql3);
                                $row3 = mysql_fetch_array($query3);

                            echo "<li class='ui-tabs-nav-item' ><a href='#fragment-6'><span>$row3[2]</span></a></li>";
                            ?>
                            <?php

                                $sql="select * from thucdontuan where thu = 3";
                                $query=mysql_query($sql);
                                $row = mysql_fetch_array($query);

                                $sql2 = "select * from menu where ID_menu = $row[3]";
                                $query2 = mysql_query($sql2);
                                $row2 = mysql_fetch_array($query2);
                                
                                $sql3 = "select * from food where ID_food = $row2[6]";
                                $query3 = mysql_query($sql3);
                                $row3 = mysql_fetch_array($query3);

                            echo "<li class='ui-tabs-nav-item' ><a href='#fragment-7'><span></span>$row3[2]</a></li>";
                            ?>
                            <?php

                                $sql="select * from thucdontuan where thu = 3";
                                $query=mysql_query($sql);
                                $row = mysql_fetch_array($query);

                                $sql2 = "select * from menu where ID_menu = $row[3]";
                                $query2 = mysql_query($sql2);
                                $row2 = mysql_fetch_array($query2);
                                
                                $sql3 = "select * from food where ID_food = $row2[7]";
                                $query3 = mysql_query($sql3);
                                $row3 = mysql_fetch_array($query3);

                            echo "<li class='ui-tabs-nav-item' ><a href='#fragment-8'><span>$row3[2]</span></a></li>";
                            ?>
                            </ul>
                            <!-- First Content -->
                            <div id="fragment-5" class="ui-tabs-panel" style="">
                                <?php

                                    $sql="select * from thucdontuan where thu = 3";
                                    $query=mysql_query($sql);
                                    $row = mysql_fetch_array($query);

                                    $sql2 = "select * from menu where ID_menu = $row[3]";
                                    $query2 = mysql_query($sql2);
                                    $row2 = mysql_fetch_array($query2);
                                    
                                    $sql3 = "select * from food where ID_food = $row2[4]";
                                    $query3 = mysql_query($sql3);
                                    $row3 = mysql_fetch_array($query3);
                                    $link = "images/".$row3['image'];
                                    echo "<img src='$link' alt=''/>";
                                ?>
                                    
                                     <div class="info" >
                                        <a class="hideshow" href="#" >Hide</a>
                                        <div class="mota">
                                        <h2><?php echo $row3[2];?></h2>
                                        <p><?php echo $row3[1];?></p>
                                        </div>
                                     </div>
                            </div>

                            <!-- Second Content -->
                            <div id="fragment-6" class="ui-tabs-panel ui-tabs-hide" style="">

                                <?php

                                    $sql="select * from thucdontuan where thu = 3";
                                    $query=mysql_query($sql);
                                    $row = mysql_fetch_array($query);

                                    $sql2 = "select * from menu where ID_menu = $row[3]";
                                    $query2 = mysql_query($sql2);
                                    $row2 = mysql_fetch_array($query2);
                                    
                                    $sql3 = "select * from food where ID_food = $row2[5]";
                                    $query3 = mysql_query($sql3);
                                    $row3 = mysql_fetch_array($query3);
                                    $link = "images/".$row3['image'];
                                    echo "<img src='$link' alt=''/>";
                                ?>
                                 <div class="info" >
                                    <a class="hideshow" href="#" >Hide</a>
                                    <div class="mota">
                                    <h2><?php echo $row3[2];?></h2>
                                    <p><?php echo $row3[1];?></p>
                                    </div>
                                 </div>
                            </div>

                            <!-- Third Content -->
                            <div id="fragment-7" class="ui-tabs-panel ui-tabs-hide" style="">
                                <?php

                                    $sql="select * from thucdontuan where thu = 3";
                                    $query=mysql_query($sql);
                                    $row = mysql_fetch_array($query);

                                    $sql2 = "select * from menu where ID_menu = $row[3]";
                                    $query2 = mysql_query($sql2);
                                    $row2 = mysql_fetch_array($query2);
                                    
                                    $sql3 = "select * from food where ID_food = $row2[6]";
                                    $query3 = mysql_query($sql3);
                                    $row3 = mysql_fetch_array($query3);
                                    $link = "images/".$row3['image'];
                                    echo "<img src='$link' alt=''/>";
                                ?>
                                 <div class="info" >
                                    <a class="hideshow" href="#" >Hide</a>
                                    <div class="mota">
                                    <h2 ><?php echo $row3[2];?></h2>
                                    <p><?php echo $row3[1];?></p>
                                    </div>
                                 </div>
                            </div>

                            <!-- Fourth Content -->
                            <div id="fragment-8" class="ui-tabs-panel ui-tabs-hide" style="">
                                <?php

                                    $sql="select * from thucdontuan where thu = 3";
                                    $query=mysql_query($sql);
                                    $row = mysql_fetch_array($query);

                                    $sql2 = "select * from menu where ID_menu = $row[3]";
                                    $query2 = mysql_query($sql2);
                                    $row2 = mysql_fetch_array($query2);
                                    
                                    $sql3 = "select * from food where ID_food = $row2[7]";
                                    $query3 = mysql_query($sql3);
                                    $row3 = mysql_fetch_array($query3);
                                    $link = "images/".$row3['image'];
                                    echo "<img src='$link' alt=''/>";
                                ?>
                                 <div class="info" >
                                    <a class="hideshow" href="#" >Hide</a>
                                    <div class="mota">
                                    <h2><?php echo $row3[2];?></h2>
                                    <p><?php echo $row3[1];?></p>
                                    </div>
                                 </div>
                            </div>
                        </div>
                            <?php
                                $id_user = $_SESSION['id'];

                                $sql5 = "select * from _user where ID_user = $id_user";
                                $query5 = mysql_query($sql4);
                                $row5 = mysql_fetch_array($query5);
                                if($row5[8] != 0||$row5[9]!=0||$row5[10] !=0 ||$row5[11] != 0||$row5[12] != 0){
                                    if($row5[9] !=0){
                                        echo "Bạn đã đăng ký ăn hôm nay";
                                    }else {
                                        echo "Bạn không đăng ký ăn hôm nay";
                                    }
                                }else {
                                    $sql = "select * from thucdontuan where thu = 3";
                                    $query = mysql_query($sql);
                                    $row = mysql_fetch_array($query);

                                    $thu = $row[1];
                                    $id_menu = $row[3];
                                    $date = $row[2];

                                    $sql="select * from dangkyhai where ID_menu='".$id_menu."' and ID_user ='".$id_user."' and date ='".$date."'";
                                    $query=mysql_query($sql);

                                    if(mysql_num_rows($query) != "" ){
                                        echo "<button type='buton' class='btn btn-warning' onclick='javascript:tuedestry()' >Hủy</button>";
                                    }else{
                                        echo "<button type='buton' class='btn btn-success' onclick='javascript:tuechoose()' >Chọn</button>"; 
                                    }
                                }
                            ?>
                            <br>
                    </td>
                </tr>

                <tr>
                    <td>
                        <br>
                        <h3><label>Thứ 4</label></h3>
                        <div id="featured2" >
                            <ul class="ui-tabs-nav">

                            <?php

                                $sql="select * from thucdontuan where thu = 4";
                                $query=mysql_query($sql);
                                $row = mysql_fetch_array($query);

                                $sql2 = "select * from menu where ID_menu = $row[3]";
                                $query2 = mysql_query($sql2);
                                $row2 = mysql_fetch_array($query2);
                                
                                $sql3 = "select * from food where ID_food = $row2[4]";
                                $query3 = mysql_query($sql3);
                                $row3 = mysql_fetch_array($query3);

                            echo "<li class='ui-tabs-nav-item ui-tabs-selected' ><a href='#fragment-9'><span>$row3[2]</span></a></li>";
                            ?>

                            <?php

                                $sql="select * from thucdontuan where thu = 4";
                                $query=mysql_query($sql);
                                $row = mysql_fetch_array($query);

                                $sql2 = "select * from menu where ID_menu = $row[3]";
                                $query2 = mysql_query($sql2);
                                $row2 = mysql_fetch_array($query2);
                                
                                $sql3 = "select * from food where ID_food = $row2[5]";
                                $query3 = mysql_query($sql3);
                                $row3 = mysql_fetch_array($query3);

                            echo "<li class='ui-tabs-nav-item' ><a href='#fragment-10'><span>$row3[2]</span></a></li>";
                            ?>
                            <?php

                                $sql="select * from thucdontuan where thu = 4";
                                $query=mysql_query($sql);
                                $row = mysql_fetch_array($query);

                                $sql2 = "select * from menu where ID_menu = $row[3]";
                                $query2 = mysql_query($sql2);
                                $row2 = mysql_fetch_array($query2);
                                
                                $sql3 = "select * from food where ID_food = $row2[6]";
                                $query3 = mysql_query($sql3);
                                $row3 = mysql_fetch_array($query3);

                            echo "<li class='ui-tabs-nav-item' ><a href='#fragment-11'><span></span>$row3[2]</a></li>";
                            ?>
                            <?php

                                $sql="select * from thucdontuan where thu = 4";
                                $query=mysql_query($sql);
                                $row = mysql_fetch_array($query);

                                $sql2 = "select * from menu where ID_menu = $row[3]";
                                $query2 = mysql_query($sql2);
                                $row2 = mysql_fetch_array($query2);
                                
                                $sql3 = "select * from food where ID_food = $row2[7]";
                                $query3 = mysql_query($sql3);
                                $row3 = mysql_fetch_array($query3);

                            echo "<li class='ui-tabs-nav-item' ><a href='#fragment-12'><span>$row3[2]</span></a></li>";
                            ?>
                            </ul>
                            <!-- First Content -->
                            <div id="fragment-9" class="ui-tabs-panel" style="">
                                <?php

                                    $sql="select * from thucdontuan where thu = 4";
                                    $query=mysql_query($sql);
                                    $row = mysql_fetch_array($query);

                                    $sql2 = "select * from menu where ID_menu = $row[3]";
                                    $query2 = mysql_query($sql2);
                                    $row2 = mysql_fetch_array($query2);
                                    
                                    $sql3 = "select * from food where ID_food = $row2[4]";
                                    $query3 = mysql_query($sql3);
                                    $row3 = mysql_fetch_array($query3);
                                    $link = "images/".$row3['image'];
                                    echo "<img src='$link' alt=''/>";
                                ?>
                                    
                                     <div class="info" >
                                        <a class="hideshow" href="#" >Hide</a>
                                        <div class="mota">
                                        <h2><?php echo $row3[2];?></h2>
                                        <p><?php echo $row3[1];?></p>
                                        </div>
                                     </div>
                            </div>

                            <!-- Second Content -->
                            <div id="fragment-10" class="ui-tabs-panel ui-tabs-hide" style="">

                                <?php

                                    $sql="select * from thucdontuan where thu = 4";
                                    $query=mysql_query($sql);
                                    $row = mysql_fetch_array($query);

                                    $sql2 = "select * from menu where ID_menu = $row[3]";
                                    $query2 = mysql_query($sql2);
                                    $row2 = mysql_fetch_array($query2);
                                    
                                    $sql3 = "select * from food where ID_food = $row2[5]";
                                    $query3 = mysql_query($sql3);
                                    $row3 = mysql_fetch_array($query3);
                                    $link = "images/".$row3['image'];
                                    echo "<img src='$link' alt=''/>";
                                ?>
                                 <div class="info" >
                                    <a class="hideshow" href="#" >Hide</a>
                                    <div class="mota">
                                    <h2><?php echo $row3[2];?></h2>
                                    <p><?php echo $row3[1];?></p>
                                    </div>
                                 </div>
                            </div>

                            <!-- Third Content -->
                            <div id="fragment-11" class="ui-tabs-panel ui-tabs-hide" style="">
                                <?php

                                    $sql="select * from thucdontuan where thu = 4";
                                    $query=mysql_query($sql);
                                    $row = mysql_fetch_array($query);

                                    $sql2 = "select * from menu where ID_menu = $row[3]";
                                    $query2 = mysql_query($sql2);
                                    $row2 = mysql_fetch_array($query2);
                                    
                                    $sql3 = "select * from food where ID_food = $row2[6]";
                                    $query3 = mysql_query($sql3);
                                    $row3 = mysql_fetch_array($query3);
                                    $link = "images/".$row3['image'];
                                    echo "<img src='$link' alt=''/>";
                                ?>
                                 <div class="info" >
                                    <a class="hideshow" href="#" >Hide</a>
                                    <div class="mota">
                                    <h2 ><?php echo $row3[2];?></h2>
                                    <p><?php echo $row3[1];?></p>
                                    </div>
                                 </div>
                            </div>

                            <!-- Fourth Content -->
                            <div id="fragment-12" class="ui-tabs-panel ui-tabs-hide" style="">
                                <?php

                                    $sql="select * from thucdontuan where thu = 4";
                                    $query=mysql_query($sql);
                                    $row = mysql_fetch_array($query);

                                    $sql2 = "select * from menu where ID_menu = $row[3]";
                                    $query2 = mysql_query($sql2);
                                    $row2 = mysql_fetch_array($query2);
                                    
                                    $sql3 = "select * from food where ID_food = $row2[7]";
                                    $query3 = mysql_query($sql3);
                                    $row3 = mysql_fetch_array($query3);
                                    $link = "images/".$row3['image'];
                                    echo "<img src='$link' alt=''/>";
                                ?>
                                 <div class="info" >
                                    <a class="hideshow" href="#" >Hide</a>
                                    <div class="mota">
                                    <h2><?php echo $row3[2];?></h2>
                                    <p><?php echo $row3[1];?></p>
                                    </div>
                                 </div>
                            </div>
                        </div>
                            <?php
                                $id_user = $_SESSION['id'];

                                $sql5 = "select * from _user where ID_user = $id_user";
                                $query5 = mysql_query($sql4);
                                $row5 = mysql_fetch_array($query5);
                                if($row5[8] != 0||$row5[9]!=0||$row5[10] !=0 ||$row5[11] != 0||$row5[12] != 0){
                                    if($row5[10] !=0){
                                        echo "Bạn đã đăng ký ăn hôm nay";
                                    }else {
                                        echo "Bạn không đăng ký ăn hôm nay";
                                    }
                                }else {
                                    $sql = "select * from thucdontuan where thu = 4";
                                    $query = mysql_query($sql);
                                    $row = mysql_fetch_array($query);

                                    $thu = $row[1];
                                    $id_menu = $row[3];
                                    $date = $row[2];

                                    $sql="select * from dangkyhai where ID_menu='".$id_menu."' and ID_user ='".$id_user."' and date ='".$date."'";
                                    $query=mysql_query($sql);
                                    if(mysql_num_rows($query) != "" ){
                                        echo "<button type='buton' class='btn btn-warning' onclick='javascript:weddestry()' >Hủy</button>";
                                    }else{
                                        echo "<button type='buton' class='btn btn-success' onclick='javascript:wedchoose()' >Chọn</button>"; 
                                    }
                                }
                            ?>
                            <br>
                    </td>

                    <td>
                        <br>
                        <h3><label>Thứ 5</label></h3>
                        <div id="featured3" >
                            <ul class="ui-tabs-nav">

                            <?php

                                $sql="select * from thucdontuan where thu = 5";
                                $query=mysql_query($sql);
                                $row = mysql_fetch_array($query);

                                $sql2 = "select * from menu where ID_menu = $row[3]";
                                $query2 = mysql_query($sql2);
                                $row2 = mysql_fetch_array($query2);
                                
                                $sql3 = "select * from food where ID_food = $row2[4]";
                                $query3 = mysql_query($sql3);
                                $row3 = mysql_fetch_array($query3);

                            echo "<li class='ui-tabs-nav-item ui-tabs-selected' ><a href='#fragment-13'><span>$row3[2]</span></a></li>";
                            ?>

                            <?php

                                $sql="select * from thucdontuan where thu = 5";
                                $query=mysql_query($sql);
                                $row = mysql_fetch_array($query);

                                $sql2 = "select * from menu where ID_menu = $row[3]";
                                $query2 = mysql_query($sql2);
                                $row2 = mysql_fetch_array($query2);
                                
                                $sql3 = "select * from food where ID_food = $row2[5]";
                                $query3 = mysql_query($sql3);
                                $row3 = mysql_fetch_array($query3);

                            echo "<li class='ui-tabs-nav-item' ><a href='#fragment-14'><span>$row3[2]</span></a></li>";
                            ?>
                            <?php

                                $sql="select * from thucdontuan where thu = 5";
                                $query=mysql_query($sql);
                                $row = mysql_fetch_array($query);

                                $sql2 = "select * from menu where ID_menu = $row[3]";
                                $query2 = mysql_query($sql2);
                                $row2 = mysql_fetch_array($query2);
                                
                                $sql3 = "select * from food where ID_food = $row2[6]";
                                $query3 = mysql_query($sql3);
                                $row3 = mysql_fetch_array($query3);

                            echo "<li class='ui-tabs-nav-item' ><a href='#fragment-15'><span></span>$row3[2]</a></li>";
                            ?>
                            <?php

                                $sql="select * from thucdontuan where thu = 5";
                                $query=mysql_query($sql);
                                $row = mysql_fetch_array($query);

                                $sql2 = "select * from menu where ID_menu = $row[3]";
                                $query2 = mysql_query($sql2);
                                $row2 = mysql_fetch_array($query2);
                                
                                $sql3 = "select * from food where ID_food = $row2[7]";
                                $query3 = mysql_query($sql3);
                                $row3 = mysql_fetch_array($query3);

                            echo "<li class='ui-tabs-nav-item' ><a href='#fragment-16'><span>$row3[2]</span></a></li>";
                            ?>
                            </ul>
                            <!-- First Content -->
                            <div id="fragment-13" class="ui-tabs-panel" style="">
                                <?php

                                    $sql="select * from thucdontuan where thu = 5";
                                    $query=mysql_query($sql);
                                    $row = mysql_fetch_array($query);

                                    $sql2 = "select * from menu where ID_menu = $row[3]";
                                    $query2 = mysql_query($sql2);
                                    $row2 = mysql_fetch_array($query2);
                                    
                                    $sql3 = "select * from food where ID_food = $row2[4]";
                                    $query3 = mysql_query($sql3);
                                    $row3 = mysql_fetch_array($query3);
                                    $link = "images/".$row3['image'];
                                    echo "<img src='$link' alt=''/>";
                                ?>
                                    
                                     <div class="info" >
                                        <a class="hideshow" href="#" >Hide</a>
                                        <div class="mota">
                                        <h2><?php echo $row3[2];?></h2>
                                        <p><?php echo $row3[1];?></p>
                                        </div>
                                     </div>
                            </div> 

                            <!-- Second Content -->
                            <div id="fragment-14" class="ui-tabs-panel ui-tabs-hide" style="">

                                <?php

                                    $sql="select * from thucdontuan where thu = 5";
                                    $query=mysql_query($sql);
                                    $row = mysql_fetch_array($query);

                                    $sql2 = "select * from menu where ID_menu = $row[3]";
                                    $query2 = mysql_query($sql2);
                                    $row2 = mysql_fetch_array($query2);
                                    
                                    $sql3 = "select * from food where ID_food = $row2[5]";
                                    $query3 = mysql_query($sql3);
                                    $row3 = mysql_fetch_array($query3);
                                    $link = "images/".$row3['image'];
                                    echo "<img src='$link' alt=''/>";
                                ?>
                                 <div class="info" >
                                    <a class="hideshow" href="#" >Hide</a>
                                    <div class="mota">
                                    <h2><?php echo $row3[2];?></h2>
                                    <p><?php echo $row3[1];?></p>
                                    </div>
                                 </div>
                            </div>

                            <!-- Third Content -->
                            <div id="fragment-15" class="ui-tabs-panel ui-tabs-hide" style="">
                                <?php

                                    $sql="select * from thucdontuan where thu = 5";
                                    $query=mysql_query($sql);
                                    $row = mysql_fetch_array($query);

                                    $sql2 = "select * from menu where ID_menu = $row[3]";
                                    $query2 = mysql_query($sql2);
                                    $row2 = mysql_fetch_array($query2);
                                    
                                    $sql3 = "select * from food where ID_food = $row2[6]";
                                    $query3 = mysql_query($sql3);
                                    $row3 = mysql_fetch_array($query3);
                                    $link = "images/".$row3['image'];
                                    echo "<img src='$link' alt=''/>";
                                ?>
                                 <div class="info" >
                                    <a class="hideshow" href="#" >Hide</a>
                                    <div class="mota">
                                    <h2 ><?php echo $row3[2];?></h2>
                                    <p><?php echo $row3[1];?></p>
                                    </div>
                                 </div>
                            </div>

                            <!-- Fourth Content -->
                            <div id="fragment-16" class="ui-tabs-panel ui-tabs-hide" style="">
                                <?php

                                    $sql="select * from thucdontuan where thu = 5";
                                    $query=mysql_query($sql);
                                    $row = mysql_fetch_array($query);

                                    $sql2 = "select * from menu where ID_menu = $row[3]";
                                    $query2 = mysql_query($sql2);
                                    $row2 = mysql_fetch_array($query2);
                                    
                                    $sql3 = "select * from food where ID_food = $row2[7]";
                                    $query3 = mysql_query($sql3);
                                    $row3 = mysql_fetch_array($query3);
                                    $link = "images/".$row3['image'];
                                    echo "<img src='$link' alt=''/>";
                                ?>
                                 <div class="info" >
                                    <a class="hideshow" href="#" >Hide</a>
                                    <div class="mota">
                                    <h2><?php echo $row3[2];?></h2>
                                    <p><?php echo $row3[1];?></p>
                                    </div> 
                                 </div>
                            </div>
                        </div>
                            <?php
                                $id_user = $_SESSION['id'];

                                $sql5 = "select * from _user where ID_user = $id_user";
                                $query5 = mysql_query($sql4);
                                $row5 = mysql_fetch_array($query5);
                                if($row5[8] != 0||$row5[9]!=0||$row5[10] !=0 ||$row5[11] != 0||$row5[12] != 0){
                                    if($row5[11] !=0){
                                        echo "Bạn đã đăng ký ăn hôm nay";
                                    }else {
                                        echo "Bạn không đăng ký ăn hôm nay";
                                    }
                                }else {
                                    $sql = "select * from thucdontuan where thu = 5";
                                    $query = mysql_query($sql);
                                    $row = mysql_fetch_array($query);

                                    $thu = $row[1];
                                    $id_menu = $row[3];
                                    $date = $row[2];

                                    $sql="select * from dangkyhai where ID_menu='".$id_menu."' and ID_user ='".$id_user."' and date ='".$date."'";
                                    $query=mysql_query($sql);
                                    if(mysql_num_rows($query) != "" ){
                                        echo "<button type='buton' class='btn btn-warning' onclick='javascript:thudestry()' >Hủy</button>";
                                    }else{
                                        echo "<button type='buton' class='btn btn-success' onclick='javascript:thuchoose()' >Chọn</button>"; 
                                    }
                                }
                            ?>
                            <br>
                    </td>

                </tr>
                <tr>

                    <td>
                        <br>
                        <h3><label>Thứ 6</label></h3>
                        <div id="featured4" >
                            <ul class="ui-tabs-nav">

                            <?php

                                $sql="select * from thucdontuan where thu = 6";
                                $query=mysql_query($sql);
                                $row = mysql_fetch_array($query);

                                $sql2 = "select * from menu where ID_menu = $row[3]";
                                $query2 = mysql_query($sql2);
                                $row2 = mysql_fetch_array($query2);
                                
                                $sql3 = "select * from food where ID_food = $row2[4]";
                                $query3 = mysql_query($sql3);
                                $row3 = mysql_fetch_array($query3);

                            echo "<li class='ui-tabs-nav-item ui-tabs-selected' ><a href='#fragment-17'><span>$row3[2]</span></a></li>";
                            ?>

                            <?php

                                $sql="select * from thucdontuan where thu = 6";
                                $query=mysql_query($sql);
                                $row = mysql_fetch_array($query);

                                $sql2 = "select * from menu where ID_menu = $row[3]";
                                $query2 = mysql_query($sql2);
                                $row2 = mysql_fetch_array($query2);
                                
                                $sql3 = "select * from food where ID_food = $row2[5]";
                                $query3 = mysql_query($sql3);
                                $row3 = mysql_fetch_array($query3);

                            echo "<li class='ui-tabs-nav-item' ><a href='#fragment-18'><span>$row3[2]</span></a></li>";
                            ?>
                            <?php

                                $sql="select * from thucdontuan where thu = 6";
                                $query=mysql_query($sql);
                                $row = mysql_fetch_array($query);

                                $sql2 = "select * from menu where ID_menu = $row[3]";
                                $query2 = mysql_query($sql2);
                                $row2 = mysql_fetch_array($query2);
                                
                                $sql3 = "select * from food where ID_food = $row2[6]";
                                $query3 = mysql_query($sql3);
                                $row3 = mysql_fetch_array($query3);

                            echo "<li class='ui-tabs-nav-item' ><a href='#fragment-19'><span></span>$row3[2]</a></li>";
                            ?>
                            <?php

                                $sql="select * from thucdontuan where thu = 6";
                                $query=mysql_query($sql);
                                $row = mysql_fetch_array($query);

                                $sql2 = "select * from menu where ID_menu = $row[3]";
                                $query2 = mysql_query($sql2);
                                $row2 = mysql_fetch_array($query2);
                                
                                $sql3 = "select * from food where ID_food = $row2[7]";
                                $query3 = mysql_query($sql3);
                                $row3 = mysql_fetch_array($query3);

                            echo "<li class='ui-tabs-nav-item' ><a href='#fragment-20'><span>$row3[2]</span></a></li>";
                            ?>
                            </ul>
                            <!-- First Content -->
                            <div id="fragment-17" class="ui-tabs-panel" style="">
                                <?php

                                    $sql="select * from thucdontuan where thu = 6";
                                    $query=mysql_query($sql);
                                    $row = mysql_fetch_array($query);

                                    $sql2 = "select * from menu where ID_menu = $row[3]";
                                    $query2 = mysql_query($sql2);
                                    $row2 = mysql_fetch_array($query2);
                                    
                                    $sql3 = "select * from food where ID_food = $row2[4]";
                                    $query3 = mysql_query($sql3);
                                    $row3 = mysql_fetch_array($query3);
                                    $link = "images/".$row3['image'];
                                    echo "<img src='$link' alt=''/>";
                                ?>
                                    
                                     <div class="info" >
                                        <a class="hideshow" href="#" >Hide</a>
                                        <div class="mota">
                                        <h2><?php echo $row3[2];?></h2>
                                        <p><?php echo $row3[1];?></p>
                                        </div>
                                     </div>
                            </div>

                            <!-- Second Content -->
                            <div id="fragment-18" class="ui-tabs-panel ui-tabs-hide" style="">

                                <?php

                                    $sql="select * from thucdontuan where thu = 6";
                                    $query=mysql_query($sql);
                                    $row = mysql_fetch_array($query);

                                    $sql2 = "select * from menu where ID_menu = $row[3]";
                                    $query2 = mysql_query($sql2);
                                    $row2 = mysql_fetch_array($query2);
                                    
                                    $sql3 = "select * from food where ID_food = $row2[5]";
                                    $query3 = mysql_query($sql3);
                                    $row3 = mysql_fetch_array($query3);
                                    $link = "images/".$row3['image'];
                                    echo "<img src='$link' alt=''/>";
                                ?>
                                 <div class="info" >
                                    <a class="hideshow" href="#" >Hide</a>
                                    <div class="mota">
                                    <h2><?php echo $row3[2];?></h2>
                                    <p><?php echo $row3[1];?></p>
                                    </div>
                                 </div>
                            </div>

                            <!-- Third Content -->
                            <div id="fragment-19" class="ui-tabs-panel ui-tabs-hide" style="">
                                <?php

                                    $sql="select * from thucdontuan where thu = 6";
                                    $query=mysql_query($sql);
                                    $row = mysql_fetch_array($query);

                                    $sql2 = "select * from menu where ID_menu = $row[3]";
                                    $query2 = mysql_query($sql2);
                                    $row2 = mysql_fetch_array($query2);
                                    
                                    $sql3 = "select * from food where ID_food = $row2[6]";
                                    $query3 = mysql_query($sql3);
                                    $row3 = mysql_fetch_array($query3);
                                    $link = "images/".$row3['image'];
                                    echo "<img src='$link' alt=''/>";
                                ?>
                                 <div class="info" >
                                    <a class="hideshow" href="#" >Hide</a>
                                    <div class="mota">
                                    <h2 ><?php echo $row3[2];?></h2>
                                    <p><?php echo $row3[1];?></p>
                                    </div>
                                 </div>
                            </div>

                            <!-- Fourth Content -->
                            <div id="fragment-20" class="ui-tabs-panel ui-tabs-hide" style="">
                                <?php

                                    $sql="select * from thucdontuan where thu = 6";
                                    $query=mysql_query($sql);
                                    $row = mysql_fetch_array($query);

                                    $sql2 = "select * from menu where ID_menu = $row[3]";
                                    $query2 = mysql_query($sql2);
                                    $row2 = mysql_fetch_array($query2);
                                    
                                    $sql3 = "select * from food where ID_food = $row2[7]";
                                    $query3 = mysql_query($sql3);
                                    $row3 = mysql_fetch_array($query3);
                                    $link = "images/".$row3['image'];
                                    echo "<img src='$link' alt=''/>";
                                ?>
                                 <div class="info" >
                                    <a class="hideshow" href="#" >Hide</a>
                                    <div class="mota">
                                    <h2><?php echo $row3[2];?></h2>
                                    <p><?php echo $row3[1];?></p>
                                    </div>
                                 </div>
                            </div>
                        </div>
                            <?php
                                $id_user = $_SESSION['id'];
                                $sql5 = "select * from _user where ID_user = $id_user";
                                $query5 = mysql_query($sql4);
                                $row5 = mysql_fetch_array($query5);
                                if($row5[8] != 0||$row5[9]!=0||$row5[10] !=0 ||$row5[11] != 0||$row5[12] != 0){
                                    if($row5[12] !=0){
                                        echo "Bạn đã đăng ký ăn hôm nay";
                                    }else {
                                        echo "Bạn không đăng ký ăn hôm nay";
                                    }
                                }else {
                                    $sql = "select * from thucdontuan where thu = 6";
                                    $query = mysql_query($sql);
                                    $row = mysql_fetch_array($query);

                                    $thu = $row[1];
                                    $id_menu = $row[3];
                                    $date = $row[2];

                                    $sql="select * from dangkyhai where ID_menu='".$id_menu."' and ID_user ='".$id_user."' and date ='".$date."'";
                                    $query=mysql_query($sql);
                                    if(mysql_num_rows($query) != "" ){
                                        echo "<button type='buton' class='btn btn-warning' onclick='javascript:fridestry()' >Hủy</button>";
                                    }else{
                                        echo "<button type='buton' class='btn btn-success' onclick='javascript:frichoose()' >Chọn</button>"; 
                                    }
                                }
                            ?>
                            <br>
                    </td>
                </tr>
            </table>
            <h4><label ><i>Chọn ngày đăng ký:</i></label></h4>
            <table class="table" >
                <tr>
                    <td>
                        <h4><label class="label label-primary" >Thứ 2</label> <input type="checkbox" id="thhh2"/></h4>
                    </td>
                    <td>
                        <h4><label class="label label-primary" >Thứ 3</label> <input type="checkbox" id="thhh3"/></h4>
                    </td>
                    <td>
                        <h4><label class="label label-primary" >Thứ 4</label> <input type="checkbox" id="thhh4"/></h4>
                    </td>
                    <td>
                        <h4><label class="label label-primary" >Thứ 5</label> <input type="checkbox" id="thhh5"/></h4>
                    </td>
                    <td>
                        <h4><label class="label label-primary" >Thứ 6</label> <input type="checkbox" id="thhh6"/></h4>
                    </td>
                    <td>
                    <button type="button" class="btn btn-success" onclick="javascript:dangkycuthe()" >Đăng kí</button>
                    </td>
                    <td>
                    <button type="button" class="btn btn-warning" onclick="javascript:huydangkycuthe()" >Hủy</button>
                    </td>
                </tr>
            </table>
    </body>
</html>

<?php 
    } else{
     header('index.php');
    };
?>