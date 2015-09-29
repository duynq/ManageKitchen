//xu ly su kien go Enter
function DoKeyup(e, myself, nextcontrolid) {
	if (window.event) e = window.event;
	if (e.keyCode == 13) {
		document.getElementById(nextcontrolid).focus();
	}
}


function Chapnhan() {
	okie = true; //chua co loi
	//xoa cac thong bao loi
	document.getElementById("loi_hoten").innerHTML  = "";
	document.getElementById("loi_username").innerHTML = "";
	document.getElementById("loi_pass").innerHTML = "";
	document.getElementById("loi_repass").innerHTML = "";

    //kiem tra cac truong bat buoc nhap
	if (document.getElementById("codinh").value == ""){
		document.getElementById("loi_CMND").innerHTML = "bạn chưa nhập số chứng minh nhân dân"; 
		document.getElementById("codinh").focus();
		okie = false;
	}
	if (document.getElementById("pass").value == "") {
		document.getElementById("loi_pass").innerHTML = "bạn chưa nhập mật khẩu"; 
		document.getElementById("pass").focus();
		okie = false;
	} else if (document.getElementById("repass").value == "") {
		document.getElementById("loi_repass").innerHTML = "bạn chưa gõ lại mật khẩu"; 
		document.getElementById("repass").focus();
		okie = false;
	} else if (document.getElementById("pass").value  != document.getElementById("repass").value ) {
		document.getElementById("loi_pass").innerHTML = " mật khẩu không trùng nhau"; 
		document.getElementById("pass").focus();
		okie = false;
	}

	if (document.getElementById("username").value == "") {
		document.getElementById("loi_username").innerHTML = "bạn chưa nhập tên tài khoản"; 
		document.getElementById("username").focus();
		okie = false;
	} else if (!laTenSD(document.getElementById("username").value)) {
		document.getElementById("loi_username").innerHTML = "tên sử dụng không đúng định dạng"; 
		document.getElementById("username").focus();
		okie = false;
	}

	

	


	if (document.getElementById("hoten").value == "") {
		document.getElementById("loi_hoten").innerHTML = "bạn chưa nhập họ tên"; 
		document.getElementById("hoten").focus();
		okie = false;
	}
	
		
	if (okie) {
            name=$("#hoten").val();
            username=$("#username").val();
            id=$("#codinh").val();
            pass=$("#pass").val();
            
            //alert(name);
            $.ajax({
               url:'src/register.php',
               type:'post',
               data:{name:name, username: username, id:id, pass:pass},
               success: function(data) {
                   alert(data);
                }
            });
	}
}


function laTenSD(s) {
	return true;
}


function ChuanhoaTen(ten) {
	dname = ten;
	ss = dname.split(' ');
	dname = "";
	for (i = 0; i < ss.length; i++)
		if (ss[i].length > 0) {
			if (dname.length > 0) dname = dname + " ";
			dname = dname + ss[i].substring(0, 1).toUpperCase();
			dname = dname + ss[i].substring(1).toLowerCase();
		}
	return dname;
}
function DoBlur(currentcontrolid) {
        if (currentcontrolid == "hoten") {
                if (document.getElementById("hoten").value != "") {
                        document.getElementById("hoten").value = ChuanhoaTen(document.getElementById("hoten").value);
                        document.getElementById("loi_hoten").innerHTML  = "";
                }	
        }
}


function Boqua() {
        document.location.href = "../lab2.htm";
}
