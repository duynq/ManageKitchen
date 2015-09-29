function d_food(id){
    $.ajax({
       url:'src/del_food.php',
       type:'POST',
       data:{id:id},
        success: function(data) {
            if(data==1){
                alert("Đã xóa");
                location.reload(true);
            }
        }

    });
}
function add_food(){
    
    foodName = document.getElementById('foodname').value;
    imagename = document.getElementById('image').value;
    description = document.getElementById('description').value;
    ss = imagename.split("\\");
    name = ss[2];
    if(foodName==""){
      alert("nhập tên món ăn");
      document.getElementById('foodname').focus();
    }else if(description==""){
      alert("bạn chưa nhập phần mô tả món ăn");
      document.getElementById('description').focus();
    }else{
      $.ajax({
        url:'src/add_food.php',
        type:'POST',
        data:{description:description, foodName:foodName, imagename:name},
        success: function(data) {
            if(data==1){
                alert("Đã thêm");
                location.reload(true);
                
            }else if(data==2){
            alert("Mó ăn đã tồn tại");
            }
        }
      });
    }
}
