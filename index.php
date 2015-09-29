<?php
    session_start();
    
    if(!isset($_GET['page']) == 'home') $_GET['page']='home';
    
    if($_GET['page'] == 'home'){
        $cur = 'container.php';
    }else if($_GET['page']=='manager'){
        $cur = 'manager_user.php';
    } else if($_GET['page']=='dangkian'){
        $cur = 'dangkian.php';
    }else if($_GET['page']=='foodmanage'){
        $cur = 'foodmanage.php';
    }else if($_GET['page']=='menumanage'){
        $cur = 'managemenu.php';
    }else if($_GET['page']=='thongkechiphi'){
        $cur = 'thongkechiphi.php';
    }else if($_GET['page']=='list'){
        $cur = 'list.php';
    }else if($_GET['page']=='sitemap'){
        $cur = 'sitemap.php';
    }
    
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>DKL-Kitchen</title>
        <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

        <link rel="stylesheet" href="css/style.css" media="screen">
        <link rel="stylesheet" href="css/style.responsive.css" media="all">


        <script src="js/jquery.js"></script>
        <script src="js/main.js"></script>


        <style>.art-content .art-postcontent-0 .layout-item-0 { margin-bottom: 5px;  }
        .art-content .art-postcontent-0 .layout-item-1 { color: #364749; border-spacing: 10px 0px; border-collapse: separate;  }
        .art-content .art-postcontent-0 .layout-item-2 { border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-top-width:2px;border-right-width:2px;border-bottom-width:2px;border-left-width:2px;border-top-color:#C7C7C7;border-right-color:#C7C7C7;border-bottom-color:#C7C7C7;border-left-color:#C7C7C7; color: #1E2829; background: #C2ECF5; padding-right: 10px;padding-left: 10px; border-radius: 10px;  }
        .ie7 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
        .ie6 .art-post .art-layout-cell {border:none !important; padding:0 !important; }

        </style>
    </head>
    
    <body>
        <div id="art-main">
            <header class="art-header">

                <div class="art-shapes">
						<img width="1000" height="200" alt="" src="images/2.jpg" style="float: left; margin-right: 20px" class="">
               </div>	                     
            </header>
            
            
            <nav class="art-nav" >
                <ul class="art-hmenu">
                    <li><a <?php if($_GET['page'] == 'home') echo "class='active'"?> id="homepage">Trang chủ</a></li>
                    <?php 
                        if(isset($_SESSION['level'])){
                        if($_SESSION['level'] == 1) {?>
                        <li><a <?php if($_GET['page'] == 'foodmanage') echo "class='active'"?> id="foodmanage">Quản lý món ăn</a></li>
                        <li><a <?php if($_GET['page'] == 'menumanage') echo "class='active'"?> id="menumanage">Quản lý thực đơn</a></li>
                        <li><a <?php if($_GET['page'] == 'manager') echo "class='active'"?> id="manager">Quản lý tài khoản</a></li>
                        <li><a <?php if($_GET['page'] == 'list') echo "class='active'"?> id="list">Thống kê</a></li>
                    <?php
                        }else if($_SESSION['level'] == 2){
                    ?>
                        <li><a <?php if($_GET['page'] == 'dangkian') echo "class='active'"?> id="dangkian">Xem thực đơn và đăng ký</a></li>
          		        <li><a <?php if($_GET['page'] == 'thongkechiphi') echo "class='active'"?> id="thongkechiphi">Xem thống kê các buổi ăn và chi phí</a></li>
                    <?php
                        }}
                    ?>
                        
                        
                </ul> 
                <div class="art-blockcontent">
                    <?php
                        if (!isset($_SESSION['user'])) {
                    ?>
                    <form action="" autocomplete="on" method="GET">
                        <p style="text-align: right;">
                            <span id="warring" style="color:red"></span>
                            <input type="text" style="font-size: 10px;" id="username">
                            <input type="password" style="font-size: 10px;" id="pass">
                            <span style="font-size: 12px;">&nbsp;</span>
                            <input type="submit" value="Đăng nhập" class="art-button" style="font-size: 15px;color:#FFFFFF" id="b_login">&nbsp;  &nbsp;    
                        </p>
                    </form>
                        
                    <?php
                        } else {
                    ?>
                        <p style="text-align: right;">
                            <span style="font-size: 12px; color:#FFFFFF">Xin Chào, <?php echo $_SESSION['user']; ?></span>
                            <input style="color: #FFFFFF" type="button" value="Thoát" class="art-button" style="font-size: 12px;" id="b_logout">
                        </p>
                        
                        
                    <?php
                        }
                    ?>
                </div>
            </nav>
            
            <div id="main_frame">
                <iframe id='center' src='<?php echo $cur ?>'  scrolling='no' onload='calcHeight();'>  </iframe>
            </div>
            
            
            <footer class="art-footer">
                <h1 style="text-align: left;">
                    <span style="font-family: Verdana, Geneva, sans-serif; font-size: 16px; font-weight: bold; line-height: normal;  color: #000000;">
                        <span style="color: rgb(255, 255, 255); font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 18px;">
                            <span style="color: #000000;">ABCKietchen-</span>&nbsp;
                            <span style="color: #000000;">Thiên Đường Ẩm Thực</span>&nbsp;                                                     
                        </span>
                            
                    </span>
                    
                    <br>
                </h1>

                <p style="font-size: 16px; line-height: 18px; color: #FFFFFF; font-family: Arial, Helvetica, sans-serif; text-align: justify; ">
                    <span style="color: rgb(0, 0, 0); font-weight: bold;">
                        Đại chỉ: Trường Đại Học Công Nghệ - Đại Học Quốc Gia Hà Nội
                    </span>
                </p>
                <p style="font-size: 16px; line-height: 18px; color: #FFFFFF; font-family: Arial, Helvetica, sans-serif; text-align: justify;">
                    <span style="color: rgb(0, 0, 0); font-weight: bold;">
                        Điện Thoại: 0969-69-69-69; <br>Email: quangduy@gmail.com
                    </span>
                </p>
            </footer>
        </div>
    </body>
</html>
