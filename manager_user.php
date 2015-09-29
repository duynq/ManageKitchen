<?php
    session_start();    
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Quản lý tài khoản</title>
        <link rel="stylesheet" href="css/style.css" media="screen">
        <link rel="stylesheet" href="css/manager_user.css" type="text/css">
        <script src="js/jquery.js"></script>
        <script src="js/manager_user.js"></script>
    </head>
    
    <body>
    		<div id="header">
    					<br><br>
                    <h3 style="color:#F07A4E">DANH SÁCH THÀNH VIÊN</h3><br>
         	</div>
        <div id="container">
            
            <div id="display">
                <table border='1' borderColor='#3D2B1F' style="border-collapse: collapse;" align='center' id='main_table'>
                    <tr bgcolor='#eeeeee'> 
                    		<td><a>STT</a></td>                                         
                        <td><a>Tên đăng nhập</a></td>
                        <td><a>Mã nhân viên</a></td>
                        <td><a>Đổi mật khẩu</a></td>
                        <td><a>Loại người dùng</a></td>
                        <td><a>Sửa</a></td>
                        <td><a>Xóa</a></td>
                    </tr>
                    <?
						$conn=mysql_connect("localhost","root","") or die("can't connect this database");
						mysql_select_db("btl",$conn);
						$sql="select * from _user order by ID_user DESC";
						$query=mysql_query($sql);
						$stt=0;
						while($row=mysql_fetch_array($query)){
							$un = $row['userName'];
							$mnv = $row['manv'];
							$stt++;
							echo "<tr>";
							echo "<td>$stt</td>";
							echo "<td>$un</td>";
							echo "<td>$mnv</td>";
							echo "<td><input type='password' style='width:250px' id='$row[ID_user]'></td>";
							$le = (3 - $row['level_user']);
							if($le == 1) {
								$op1 = "user";
								$op2 = "Admin";
							}else{
								$op2 = "user";
								$op1 = "Admin";
							}
							$sid = ($row['ID_user'] + 100);
							echo "<td><select id='$sid'>
									<option value='$row[level_user]'>$op1</option>
									<option value='$le'>$op2</option>
									
								</select></td>";

			
							echo "<td><input type='button' class='art-button' value='Lưu' onclick='u_user(this, $row[ID_user],  $row[level_user])'></td>";
							echo "<td><input type='button' class='art-button' value='Xóa' onclick='d_user($row[ID_user])'></td>";
							echo "</tr>";
}
?>
                </table>
            </div>
 
            
        </div>
                   <br>
        <div id='add'>
            <p>Tên: <input type='text' size='25' id="name_user" required></p> 
            <p>mã nhân viên: <input type='text' size='25' id="mnv" required></p> 
			<p>Username: <input type='text' name='username' size='25' id="user" required></p>
			<br><br><br><br>
			<p>Password: <input type='password' name='password' size='25' id="n_pword" required> </p>
			<p>Re-Password: <input type='password' name='re_password' size='25' id="re_pword" required></p>
			<br><br><br><br>
			Loại người dùng: <select id="level">
			<option value='2'>user</option>
			<option value='1'>Admin </option>
			</select>
			<br><br>
			<input type="button" value="Thêm Thành Viên" class="art-button" onclick="add_user()" > 
					      
              
         </div>
    </body>
    
</html>