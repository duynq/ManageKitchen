
function u_user(t, id, level){
	sid = (id + 100);
	pw=document.getElementById(id).value;
	level=document.getElementById(sid).value;
	if(pw.length < 6 && pw.length !=0){
		alert("Mật khẩu cần tối thiểu 6 kí tự");
	}else{
    $.ajax({
       url:'src/u_user.php',
       type:'POST',
       data:{id:id, pw:pw, level:level},
        success: function(data) {
            if(data==1){
                alert("Đã sửa");
                location.reload(true);
            }//else{
                //document.write(data);
           //}
        }
    });
    //location.reload(true); 
}
}
function d_user(id){
	
    $.ajax({
       url:'src/del_user.php',
       type:'POST',
       data:{id:id},
        success: function(data) {
            if(data==1){
                alert("Đã xóa");
                location.reload(true);
            }//else{
                //document.write(data);
                
                //ajax viet lai
            //}
        }
        //location.reload(true);
    });
    
}
function add_user(){
	user=document.getElementById('user').value;
	n_pword=document.getElementById('n_pword').value;
	r_pword=document.getElementById('re_pword').value;
  name = document.getElementById('name_user').value;
  mnv = document.getElementById('mnv').value;
	level=document.getElementById('level').value;
	if (user == "") {
		alert("Nhập user");
	}
	else {
		if(user.length < 4){
			alert ("Tài khoản cần tối thiểu 5 kí tự");
		}else if (n_pword == "" || r_pword == "") {
			alert("Nhập các trường còn lại!");
		}else if( n_pword != r_pword ){
			alert("Password và Re-Password không trùng nhau");
		}else if(n_pword.length < 6){
			alert ("Mật khẩu cần tối thiểu 6 kí tự");
		}else {
			$.ajax({
       url:'src/add_user.php',
       type:'POST',
       data:{user: user, n_pword:n_pword, level:level,name:name,mnv:mnv},
        success: function(data) {
            if(data==1){
                alert("Đã thêm");
                location.reload(true);
                //ajax viet lai
        }else if(data==2){
        alert("User đã tồn tại");
        }
     }
     });
    
	}
 }   
    
}