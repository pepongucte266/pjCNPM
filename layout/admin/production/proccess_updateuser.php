<?php
    $id = $_POST['id'];
    if($_POST['name'] == ""){
       
        echo '<script>
            if(confirm("Bạn không thể bỏ trống tên khách hàng!")) 
                window.location = "update_user.php?id='.$id.'" ;
            else 
                window.location = "ql_user.php";</script>';
    }
    elseif($_POST['phonenumber'] == ""){ 
        echo '<script>
            if(confirm("Bạn không thể bỏ trống số điện thoại khách hàng!"))
                window.location = "update_user.php?id='.$id.'";
            else 
                window.location="ql_user.php";</script>';
    }
    elseif($_POST['address'] == ""){  
        echo '<script>
        if(confirm("Bạn không thể bỏ trống địa chỉ khách hàng!")) 
            window.location = "update_user.php?id='.$id.'";
        else 
            window.location = "ql_user.php";</script>';
    }
    elseif($_POST['account'] == ""){  
        echo '<script>
        if(confirm("Bạn không thể bỏ trống tài khoản khách hàng!")) 
            window.location = "update_user.php?id='.$id.'";
        else 
            window.location = "ql_user.php";</script>';
    }
    elseif($_POST['password'] == ""){  
        echo '<script>
        if(confirm("Bạn không thể bỏ trống mật khẩu khách hàng!")) 
            window.location = "update_user.php?id='.$id.'";
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
        $sql = "update tb_user set user_name = '$name', user_phone = '$phone',user_address = '$address', user_account = '$username', user_password = '$password' where user_id = '".$id."'";
        if(mysqli_query($conn,$sql))
            echo '<script>
            alert("Bạn đã cập nhật thông tin khách hàng thành công!");
            window.location = "ql_user.php";
            </script>';
        else
        echo '<script>
        if(confirm("cập nhật thông tin không thành công!")) 
            window.location = "update_user.php?id='.$id.'";
        else 
            window.location = "ql_user.php";</script>';   
    }       

?>