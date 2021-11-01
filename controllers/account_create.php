<?php
    require("../config/config.php");
    if(!empty($_POST['account'])  && !empty($_POST['password'])&& !empty($_POST['username'])&& !empty($_POST['sdt']) && !empty($_POST['address']))
    {
        $account = $_POST['account'];
        $password = md5($_POST['password']);
        $sql = "select user_account from tb_user where user_account = '$account'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            echo "<script> alert('Tên tài khoản đã tồn tại!');
        window.location = '../index.php';
        </script>";
        }   
        else{
            $username = $_POST['username'];
            $sdt = $_POST['sdt'];
            $address = $_POST['address'];
            $sql = "insert into tb_user(user_name,user_account,user_password,user_phone,user_address) values('$username','$account','$password','$sdt','$address')";
            if($conn->query($sql))
                $msg = "Tài khoản tạo thành công";            
            else
            echo "<script> alert('Tạo tại khoản không thành công!');
            window.location = '../index.php';
            </script>";           
        }
    }
    else
        echo "<script> alert('Bạn không được bỏ trống các mục thông tin!!');
        window.location = '../index.php';
        </script>";

    
?>