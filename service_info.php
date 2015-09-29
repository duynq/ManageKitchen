<?php
    require_once './src/config.php';
    
    $id = $_GET['id'];

?>

<html>
    <head>
        <meta charset="utf-8">
        <link type="text/css" rel="stylesheet" href="css/service_info.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/service_info.js"></script>
    </head>
    
    <body>
        
        <table  class="MsoNormalTable" border="1" cellspacing="0" cellpadding="0" width="100%">
            <tbody>
                <?php 
                    $query = "select document.id, title, trinhtu, doituong, cachthuc, linkofdocu,thoigian, co_so_phap_li,"
                            . " name  from document"
                            . " inner join category on document.category_id = category.id"
                            . " where document.id = '$id'";
                    //echo $query;
                    $res = mysql_query($query);
                    $row = mysql_fetch_array($res);
                    
                    echo "<h3>Lĩnh vực: $row[8]</h3>";
                ?>
            
            
            <tr>
                <td class="left">
                    <span  class="text_left">Tên thủ tục:</span>
                </td>
                <td  class="right">
                    <span  class="text_left" id="main"><?php echo $row[1] ?></span>
                </td>
            </tr>
            
             <tr>
                <td class="left">
                    <span  class="text_left">Trình tự thực hiện:</span>
                </td>
                <td  class="right">
                    <span  class="text_left"><?php echo $row[2] ?></span>
                </td>
            </tr>
            
             <tr>
                <td class="left">
                    <span  class="text_left">Đối tượng thực hiện:</span>
                </td>
                <td  class="right">
                    <span  class="text_left"><?php echo $row[3] ?></span>
                </td>
            </tr>
            
             <tr>
                <td class="left">
                    <span  class="text_left">Cách thức thực hiện:</span>
                </td>
                <td  class="right">
                    <span  class="text_left"><?php echo $row[4] ?></span>
                </td>
            </tr>
            
            <tr>
                <td class="left">
                    <span  class="text_left">Thời hạn giải quyết:</span>
                </td>
                <td  class="right">
                    <span  class="text_left"><?php echo $row[6] ?></span>
                </td>
            </tr>
            
            <tr>
                <td class="left">
                    <span  class="text_left">Cơ sở pháp lý:</span>
                </td>
                <td  class="right">
                    <span  class="text_left"><?php echo $row[7] ?></span>
                </td>
            </tr>
            
             <tr>
                <td class="left">
                    <span  class="text_left">Tài liệu đính kèm:</span>
                </td>
                <td  class="right">
                    <span  class="text_left">
                        <?php if($row[5]==''){
                            echo "Không có";
                        }else{
                            echo "<a href = 'uploads/$row[5]'>$row[5]</a>";
                        }?>
                    </span>
                    
                </td>
            </tr>
            
<!--             <tr>
                <td class="left">
                    <span  class="text_left">Đối tượng thực hiện thủ tục:</span>
                </td>
                <td  class="right">
                    <span  class="text_left"><?php $row[6] ?></span>
                </td>
            </tr>
            
             <tr>
                <td class="left">
                    <span  class="text_left">Cơ quan thực hiện thủ tục</span>
                </td>
                <td  class="right">
                    <span  class="text_left"><?php  $row[7] ?></span>
                </td>
            </tr>
            
             <tr>
                <td class="left">
                    <span  class="text_left">Kết quả thực hiện thủ tục:</span>
                </td>
                <td  class="right">
                    <span  class="text_left"><?php  $row[8] ?></span>
                </td>
            </tr>
            
             <tr>
                <td class="left">
                    <span  class="text_left">Phí, lệ phí(nếu có):</span>
                </td>
                <td  class="right">
                    <span  class="text_left"><?php  $row[9] ?></span>
                </td>
            </tr>
            
             <tr>
                <td class="left">
                    <span  class="text_left">Tên mẫu đơn, mẫu lời khai:</span>
                </td>
                <td  class="right">
                    <span  class="text_left"><?php  $row[10] ?></span>
                </td>
            </tr>
            
             <tr>
                <td class="left">
                    <span  class="text_left">Yêu cầu thực hiện thủ tục:</span>
                </td>
                <td  class="right">
                    <span  class="text_left"><?php  $row[11] ?></span>
                </td>
            </tr>
            
             <tr>
                <td class="left">
                    <span  class="text_left">Căn cứ pháp lý của thủ tục:</span>
                </td>
                <td  class="right">
                    <span  class="text_left"><?php  $row[12] ?></span>
                </td>
            </tr>-->
            
        </tbody>
    </table>
            
        
        
        
        
    </body>
</html>




