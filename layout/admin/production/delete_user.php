<?php
    require("config.php");
    $id = $_GET['id'];
    $sql = "delete from tb_user where user_id = $id";
    if(mysqli_query($conn,$sql))
    echo "<script> alert('Bạn đã xóa thành công!!');
    window.location = '/pjCongNghePhanMem/layout/admin/production/ql_user.php';
    </script>";
    else
    echo "<script> alert('Bạn không thể xóa tài khoản này!!');
    window.location = '/pjCongNghePhanMem/layout/admin/production/ql_user.php';
    </script>";
?>