<?php
    require("../config/config.php");
    if(!empty($_POST['account'])  && !empty($_POST['password'])){
        $account = $_POST['account'];
        $sql = "select user_account,user_password from tb_user where user_account = '$account'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            $row = mysqli_fetch_row($result);
            if($_POST['password'] == $row[1]){
                if($account == 'admin'){
                    header("Location: ../layout/admin/production/ql_mh.php");
                    http_response_code(301);
                    exit();                
                }
                else
                    header("Location:../index1.php?id=$account");
            }
            else
            echo "<script> alert('Mật khẩu không đúng!!');
            window.location = '../index.php';
            </script>";   
        }
        else
        echo "<script> alert('Tài khoản không tồn tại!');
        window.location = '../index.php';
        </script>";  
        mysqli_free_result($result);     
    }
    else
        echo "<script> alert('Bạn không được bỏ trống 2 mục trên');
        window.location = '../index.php';
        </script>";  
    

