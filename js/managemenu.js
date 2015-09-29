function chon1(){
	x = document.getElementById("select1").selectedIndex;
	y = document.getElementById("select1").options;
	
	z = y[x].value;
	$.ajax({
		url:'src/chonmot.php',
		type:'POST',
		data:{foodid:z},
			success: function(data){
				if(data==1){
					location.reload(true);
				}else if(data==2){
					alert("bạn đã chọn món này rồi");
				}
			}
	});
}
function chon2(){
	x = document.getElementById("select2").selectedIndex;
	y = document.getElementById("select2").options;
	z = y[x].value;
	$.ajax({
		url:'src/chonhai.php',
		type:'POST',
		data:{foodid:z},
			success: function(data){
				if(data==1){
					location.reload(true);
				}else if(data==2){
					alert("bạn đã chọn món này rồi");
				}
			}
	});
}
function chon3(){
	x = document.getElementById("select3").selectedIndex;
	y = document.getElementById("select3").options;
	z = y[x].value;
	$.ajax({
		url:'src/chonba.php',
		type:'POST',
		data:{foodid:z},
			success: function(data){
				if(data==1){
					location.reload(true);
				}else if(data==2){
					alert("bạn đã chọn món này rồi");
				}
			}
	});
}
function chon4(){
	x = document.getElementById("select4").selectedIndex;
	y = document.getElementById("select4").options;
	z = y[x].value;
	$.ajax({
		url:'src/chonbon.php',
		type:'POST',
		data:{foodid:z},
			success: function(data){
				if(data==1){
					location.reload(true);
				}else if(data==2){
					alert("bạn đã chọn món này rồi");
				}
			}
	});
}
function send(){

	namemenu = document.getElementById("namemenu").value;
	price = document.getElementById("menuprice").value;

	$.ajax({
		url:'src/add_menu.php',
		type:'POST',
		data:{namemenu:namemenu, price:price},
		success: function(data){
			if(data==1){
				alert("them menu thanh cong");
				location.reload(true);
			}else if(data==2){
				alert("thực đơn này đã tồn tại");
			}
		}
	});

}

function tuansau(){

	x1 = document.getElementById("mon2").selectedIndex;
	y1 = document.getElementById("mon2").options;
	z1 = y1[x1].value;
	thu1 = 2;
	ngay1 = document.getElementById("mon1").value;

	x2 = document.getElementById("tue2").selectedIndex;
	y2 = document.getElementById("tue2").options;
	z2 = y2[x2].value;
	thu2 = 3;
	ngay2 = document.getElementById("tue1").value;

	x3 = document.getElementById("wed2").selectedIndex;
	y3 = document.getElementById("wed2").options;
	z3 = y3[x3].value;
	thu3 = 4;
	ngay3 = document.getElementById("wed1").value;

	x4 = document.getElementById("thu2").selectedIndex;
	y4 = document.getElementById("thu2").options;
	z4 = y4[x4].value;
	thu4 = 5;
	ngay4 = document.getElementById("thu1").value;

	x5 = document.getElementById("fri2").selectedIndex;
	y5 = document.getElementById("fri2").options;
	z5 = y5[x5].value;
	thu5 = 6
	ngay5 = document.getElementById("fri1").value;

	if(z1 == z2 || z2 == z3 || z3 == z4 || z4 == z5){
		alert("loi dat thuc don ");
	}else{
		$.ajax({
		url:'src/add_thucdontuan.php',
		type:'POST',
		data:{z1:z1, thu1:thu1, ngay1:ngay1, z2:z2, thu2:thu2, ngay2:ngay2, z3:z3, thu3:thu3, ngay3:ngay3,
				z4:z4, thu4:thu4, ngay4:ngay4, z5:z5, thu5:thu5, ngay5:ngay5},
		success: function(data){
			if(data==1){
				alert("chon mon cho tuan sau thanh cong!");
				location.reload(true);
			}else if(data==2){
				alert("ban da chon loi!");
			}
		}
	});		
	}
	alert(thu);
}
