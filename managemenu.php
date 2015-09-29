<?php
    require_once './src/config.php';
    session_start();
?>

<html>
    <head>
        <meta charset="utf-8">
        <link type="text/css" rel="stylesheet" href="css/managemenu.css">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap-select.min.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap-select.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/managemenu.js"></script>
    </head>
    
    <body>
        <div id="header">
            <h3>Quản lý thực đơn</h3><br>
        </div>
        <div id="body">
            <table class="table">
                <tr>
                    <td>
                        <p class="form-inline">
                            <select class="form-control" id="select1">
                                <?php
                                    $query = "select * from food";
                                    $res = mysql_query($query);
                                    while($row = mysql_fetch_array($res)){
                                        echo "<option value='$row[0]'>$row[2]</option>";
                                    }
                                ?>
                            </select>
                            <?php
                                echo "<button type='button' class='btn btn-success' onclick='javascript:chon1()'>Chọn</button>";
                            ?>
                        </p>
                        <?php
                            $query = "select * from chonmot";
                            $res = mysql_query($query);
                            $row = mysql_fetch_array($res);                            
                            $t = $row[1];

                            $query2 = "select * from food where ID_food = $t";
                            $res2 = mysql_query($query2);
                            $row2 = mysql_fetch_array($res2);
                            $link = "images/".$row2[3];
                            echo "<img src='$link' width='210' height='200'>";
                        ?>
                    </td>
                    <td>
                        <br>
                        <br>
                        <?php

                            echo "<p>Tên món ăn: $row2[2] </p>";
                            echo "<p>$row2[1]</p>";
                        ?>
                    </td>
                    <td>
                        <p class="form-inline">
                            <select class="form-control" id="select2">
                                <?php
                                    $query = "select * from food";
                                    $res = mysql_query($query);
                                    while($row = mysql_fetch_array($res)){
                                        echo "<option value='$row[0]' >$row[2]</option>";
                                    }
                                ?>
                            </select>
                            <?php
                                echo "<button type='button' class='btn btn-success' onclick='javascript:chon2()'>Chọn</button>";
                            ?>
                        </p>
                        <?php
                            $query = "select * from chonhai";
                            $res = mysql_query($query);
                            $row = mysql_fetch_array($res);                            
                            $t = $row[1];

                            $query2 = "select * from food where ID_food = $t";
                            $res2 = mysql_query($query2);
                            $row2 = mysql_fetch_array($res2);
                            $link = "images/".$row2[3];
                            echo "<img src='$link' width='210' height='200'>";
                        ?>
                        <br>
                    </td>
                    <td>
                        <br>
                        <br>
                        <?php
                            echo "<p>Tên món ăn: $row2[2] </p>";
                            echo "<p>$row2[1]</p>";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="form-inline">
                            <select class="form-control" id="select3">
                                <?php
                                    $query = "select * from food";
                                    $res = mysql_query($query);
                                    while($row = mysql_fetch_array($res)){
                                        echo "<option value='$row[0]' >$row[2]</option>";
                                    }
                                ?>
                            </select>
                            <?php
                                echo "<button type='button' class='btn btn-success' onclick='javascript:chon3()'>Chọn</button>";
                            ?>
                        </p>
                        <?php
                            $query = "select * from chonba";
                            $res = mysql_query($query);
                            $row = mysql_fetch_array($res);                            
                            $t = $row[1];

                            $query2 = "select * from food where ID_food = $t";
                            $res2 = mysql_query($query2);
                            $row2 = mysql_fetch_array($res2);
                            $link = "images/".$row2[3];
                            echo "<img src='$link' width='210' height='200'>";
                        ?>
                        <br>
                    </td>
                    <td>
                        <br>
                        <br>
                        <?php
                            echo "<p>Tên món ăn: $row2[2] </p>";
                            echo "<p>$row2[1]</p>";
                        ?>
                    </td>
                    <td>
                        <p class="form-inline">
                            <select class="form-control" id="select4">
                                <?php
                                    $query = "select * from food";
                                    $res = mysql_query($query);
                                    while($row = mysql_fetch_array($res)){
                                        echo "<option value='$row[0]'>$row[2]</option>";
                                    }
                                ?>
                            </select>
                            <?php
                                echo "<button type='button' class='btn btn-success' onclick='javascript:chon4()'>Chọn</button>";
                            ?>
                        </p>
                        <?php
                            $query = "select * from chonbon";
                            $res = mysql_query($query);
                            $row = mysql_fetch_array($res);                            
                            $t = $row[1];

                            $query2 = "select * from food where ID_food = $t";
                            $res2 = mysql_query($query2);
                            $row2 = mysql_fetch_array($res2);
                            $link = "images/".$row2[3];
                            echo "<img src='$link' width='210' height='200'>";
                        ?>
                        <br>
                    </td>
                    <td>
                        <br>
                        <br>
                        <?php
                            echo "<p>Tên món ăn: $row2[2] </p>";
                            echo "<p>$row2[1]</p>";
                        ?>
                    </td>
                </tr>
            </table>
            <p class="form-inline" >
                Tên thực đơn:&nbsp;&nbsp;&nbsp;<input type='text' class="form-control" name = 'menuname' id = 'namemenu' size='25' required/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                Giá: <input type='text' class="form-control" name = 'price' id = 'menuprice' size='25' required/>
            </p>
            <?php
                echo "
                            <button type='button' class='btn btn-success' id='them' onclick='javascript:send()'>Thêm thực đơn</button>
                      </div>";
            ?>
            <br>
            <div>
                <table class="table" >
                    <tr>
                        <p class="form-inline">
                            <!-- <p class="form-inline"> -->
                                <label class="btn btn-success">Thứ 2</label>
                                <input type="date" class="form-control" id="mon1"/>
                                <select class="form-control" id="mon2">
                                    <?php
                                        $query = "select * from menu";
                                        $res = mysql_query($query);
                                        while($row = mysql_fetch_array($res)){
                                            echo "<option value='$row[0]'>$row[1]</option>";
                                        }
                                    ?>
                                </select>
                                <!-- <button class="btn btn-success"  id="mon" >chọn</button> -->
                            <!-- </p> -->
                        <!-- </td> -->

                        
                            <!-- <p class="form-inline"> -->
                            <br></br>
                                <label class="btn btn-success">thứ 3</label>
                                <input type="date" class="form-control" id="tue1"/>
                                <select class="form-control" id="tue2" >
                                    <?php
                                        $query = "select * from menu";
                                        $res = mysql_query($query);
                                        while($row = mysql_fetch_array($res)){
                                            echo "<option value='$row[0]'>$row[1]</option>";
                                        }
                                    ?>
                                </select>
                                <!-- <button class="btn btn-success"  id="tue" >chọn</button> -->
                            <!-- </p> -->
                        </p>
                    </tr>
                    <tr>
                        <!-- <td> -->
                        <p class="form-inline">
                            <!-- <p class="form-inline"> -->
                                <label class="btn btn-success">Thứ 4</label>
                                <input type="date" class="form-control" id="wed1"/>
                                <select class="form-control" id="wed2" width='140'>
                                    <?php
                                        $query = "select * from menu";
                                        $res = mysql_query($query);
                                        while($row = mysql_fetch_array($res)){
                                            echo "<option value='$row[0]'>$row[1]</option>";
                                        }
                                    ?>
                                </select>
                                <!-- <button class="btn btn-success"  id="wed" >chọn</button> -->
                            <!-- </p> -->
                        <!-- </td> -->

                        <!-- <td> -->
                            <!-- <p class="form-inline"> -->
                            <br></br>
                                <label class="btn btn-success">Thứ 5</label>
                                <input type="date" class="form-control" id="thu1"/>
                                <select class="form-control" id="thu2" >
                                    <?php
                                        $query = "select * from menu";
                                        $res = mysql_query($query);
                                        while($row = mysql_fetch_array($res)){
                                            echo "<option value='$row[0]'>$row[1]</option>";
                                        }
                                    ?>
                                </select>
                                <!-- <button class="btn btn-success"  id="thu" >chọn</button> -->
                            <!-- </p> -->
                        </p>

                            <p class="form-inline">
                                <label class="btn btn-success">Thứ 6</label>
                                <input type="date" class="form-control" id="fri1"/>
                                <select class="form-control" id="fri2" >
                                    <?php
                                        $query = "select * from menu";
                                        $res = mysql_query($query);
                                        while($row = mysql_fetch_array($res)){
                                            echo "<option value='$row[0]'>$row[1]</option>";
                                        }
                                    ?>
                                </select>
                                <!-- <button class="btn btn-success"  id="fri" >chọn</button> -->
                            </p>
                            <button type="button" class="btn btn-success" id="themthudon" onclick="javascript:tuansau()">Thêm thực đơn tuần sau</button>
                        <!-- </td> -->
                    </tr>
                </table>
            </div>
            
        </div>
    </body>
</html>