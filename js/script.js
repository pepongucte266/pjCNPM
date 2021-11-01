    $(document).ready(function () {
    $(".div-search form").click(function(){
        $(".div-search form").css('width','320px');
        $(".div-popular-search").css({'z-index':'3','opacity':'1'});
    })
    $(".btn-rollback ").click(function(){
        $(".div-popular-search").css({'z-index':'-1','opacity':'0'});
        $(".div-search form").css('width','210px');
    })
    $(".btn-open-div-signin").click(function(){
        $(".div-sign-in").css({'z-index':'4','opacity':'1'});
        $(".div-blurred").css({'z-index':'3','opacity':'0.5'});
    })
    $(".btn-cancel-sign-in").click(function(){
        $(".div-sign-in").css({'z-index':'-1','opacity':'0'});
        $(".div-blurred").css({'z-index':'-1','opacity':'0'});
        $(".div-create-acc").css({'z-index':'-1','opacity':'0'});
    })
    $(".div-blurred").click(function(){
        $(".div-create-acc").css({'z-index':'-1','opacity':'0'});
        $(".div-sign-in").css({'z-index':'-1','opacity':'0'});
        $(".div-blurred").css({'z-index':'-1','opacity':'0'});
    })
    $(".btn-1").click(function(){
        $(".div-create-acc").css({'z-index':'5','opacity':'1'})
        $(".div-sign-in").css({'z-index':'-1','opacity':'0'});
    })
    $(".btn-2").click(function(){
        $(".div-sign-in").css({'z-index':'5','opacity':'1'})
        $(".div-create-acc").css({'z-index':'-1','opacity':'0'});
    })
    $(".btn-create-acc").click(function(){
        var account =  $("#account").val();
        var password = $("#password").val();
        var username = $("#username").val();
        var sdt = $("#sdt").val();
        var address = $("#address").val();
        $.get("controllers/account_create.php",{username:username,password:password,account:account,sdt:sdt,address:address},function(data){
            $("#notification").html(data);
            $("#notification").css('color','red');
        })
    })
});