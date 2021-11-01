<?php
    require("config.php");
    $id = $_GET['id'];
    $sql = "delete from tb_item where item_id = $id";
    mysqli_query($conn,$sql);
    header("location: /pjCongNghePhanMem/layout/admin/production/ql_mh.php");
?>