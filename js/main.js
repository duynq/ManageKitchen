$(document).ready(function(){
    
    $("#homepage").click(function(){
        window.location.assign('index.php?page=home');
        
    });
    $("#manager").click(function(){
        window.location.assign('index.php?page=manager');
        
    });
    $("#dangkian").click(function(){
        window.location.assign('index.php?page=dangkian');
        
    });
    
    $("#foodmanage").click(function(){
       window.location.assign('index.php?page=foodmanage');
    });
    
    $("#menumanage").click(function(){
       window.location.assign('index.php?page=menumanage');
    });
    
    $("#thongkechiphi").click(function(){
       window.location.assign('index.php?page=thongkechiphi');
    });
    $("#list").click(function(){
       window.location.assign('index.php?page=list');
    });
    $("#sitemap").click(function(){
       window.location.assign('index.php?page=sitemap');
    });
    $("#b_login").click(function(){
        $("#warring").html("");
        
        username=$("#username").val();
        password=$("#pass").val();

        $.ajax({
            type: "GET",
            url: "src/checklogin.php?user="+username+"&&pass="+password,
            
            success: function(data){
                if (data=='1') {
                    window.location = 'index.php';
                }else {
                    alert("sai tài khoản hoặc mật khẩu");
                }
            }, 
        });
        return false;   
        
    });
    
    
    $("#b_logout").click(function(){
        $.ajax({
            type: "GET",
            url: "src/logout.php",
            success: function(data){
                if (data=='1') {
                    window.location = 'index.php';
                }else {
                    $("#warring").html("Đã xảy ra lỗi");
                }
            }, 
            beforeSend: function() {  
                $("#warring").html("Đang Thoát");
            } 
        });
    });
});


function calcHeight(){
    var h = document.getElementById('center').contentWindow.document.body.scrollHeight;
    document.getElementById('center').style.height=h+"px";
}

function restart_c(){
    $("#homepage").attr('class','');
    $("#news").attr('class','');
    $("#foodmanage").attr('class','');
    $("#document").attr('class','');
    $("#menumanage").attr('class','');
    $("#manager").attr('class','');
    $("#create_service").attr('class','');
};