<?php
    require("config/header.php");
    require("config/config.php");
    require("config/footer.php");
    $id = $_GET['id'];
    $sql = "select tb_item.item_name,tb_item.item_type,tb_item.item_price,tb_item.item_linkimg1,tb_item.item_linkimg2,tb_item.item_linkimg3 from tb_item where tb_item.item_id = $id ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    echo
    "   <div class = 'img-detail'>
            <img src='".$row['item_linkimg1']."' alt=''>
            <img src='".$row['item_linkimg2']."' alt=''>
            <img src='".$row['item_linkimg3']."' alt=''>
        </div>
        <div class = 'img-detail'>
            <h2>".$row['item_name']."</h2>
            <h3>".$row['item_type']."</h3><br>
            <h5 style='color: tomato;'>".$row['item_price']." vnđ</h5><br><br>
            <h4 style='color:aquamarine;border:1px solid black;width:20%;'>Chưa có mô tả cho sản phẩm này</h4><br>
            <h4 style = 'color:red'>Liên hệ : 03399225 để đặt mua</h4>
        </div>
    "
?>
