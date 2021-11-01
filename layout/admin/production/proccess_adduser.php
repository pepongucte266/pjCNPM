<?php
    if($_POST['name'] == ""){
       
        echo '<script>
            if(confirm("Bạn không thể bỏ trống tên khách hàng!")) 
                window.location = "add_user.php" ;
            else 
                window.location = "ql_user.php";</script>';
    }
    elseif($_POST['phonenumber'] == ""){ 
        echo '<script>
            if(confirm("Bạn không thể bỏ trống số điện thoại khách hàng!"))
                window.location = "add_user.php";
            else 
                window.location="ql_user.php";</script>';
    }
    elseif($_POST['address'] == ""){  
        echo '<script>
        if(confirm("Bạn không thể bỏ trống địa chỉ khách hàng!")) 
            window.location = "add_user.php";
        else 
            window.location = "ql_user.php";</script>';
    }
    elseif($_POST['account'] == ""){  
        echo '<script>
        if(confirm("Bạn không thể bỏ trống tài khoản khách hàng!")) 
            window.location = "add_user.php";
        else 
            window.location = "ql_user.php";</script>';
    }
    elseif($_POST['address'] == ""){  
        echo '<script>
        if(confirm("Bạn không thể bỏ trống mật khẩu khách hàng!")) 
            window.location = "add_user.php";
        else 
            window.location = "ql_user.php";</script>';
    }
    else {
        require('config.php');
        $name = $_POST['name'];
        $phone = $_POST['phonenumber'];
        $address = $_POST['address'];
        $username = $_POST['account'];
        $password = $_POST['password'];

        $sql = "insert into tb_user(user_name, user_phone, user_address, user_account, user_password) values('$name','$phone','$address','$username','$password')";
        if(mysqli_query($conn,$sql))
            echo '<script>
            alert("Bạn đã thêm khách hàng thành công!");
            window.location = "ql_user.php";
            </script>';
        else
        echo '<script>
        if(confirm("khách hàng đã tồn tại!")) 
            window.location = "add_user.php";
        else 
            window.location = "ql_user.php";</script>';   
    }
?>