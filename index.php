<?php
    require("./config/config.php");
    require("./config/header.php");
    require("./config/footer.php");
?>


<div class="div-blurred"></div>
<div class="div-content container-fluid">
    <div class="div-top">
        <?php  
            $sql = "select tb_item.item_name,tb_item.item_linkimg1,tb_item.item_linkimg2,tb_item.item_linkimg3,tb_item.item_type from tb_item where tb_item.item_id = 1";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);             
        ?>
        
        <a href="chitietsp.php?id=1" class="top-item">  
            <img src=<?php echo $row["item_linkimg1"]?> alt="">
            <img src=<?php echo $row["item_linkimg2"]?> alt="">
            <div class="div-pink">
                <h2><?php echo $row["item_name"]?> </h2>
                <h3>"<?php echo $row["item_type"]?>"</h3>
            </div>
            <span>Mua ngay&nbsp;&nbsp;<i class="fal fa-arrow-right"></i></span>
        </a>
        <div class="introduction">
            <video controls loop preload="auto" autoplay class="video-brand" height="360px">
                <source src="./images/icons/No Shirts, No Service - We Bare Bears.mp4" type="video/mp4">
            </video>
            <img src="./images/icons/sales.png" alt="" class="img-sales">
        </div>
    </div>
    <h3 style="margin-top :900px;">Danh sách sản phẩm</h3>
    <div class="div-wrap-shoes">
        <?php  
            $sql = "select tb_item.item_name,tb_item.item_linkimg1,tb_item.item_type, tb_item.item_id, tb_item.item_price from tb_item";
            $result = mysqli_query($conn,$sql);
            while( $row = mysqli_fetch_assoc($result)){
                echo'
                <a href="chitietsp.php?id='.$row["item_id"].'" class="div-sp small-div">
                    <img src="'.$row['item_linkimg1'].'" alt="">
                    <h4 class="shoe-name">&nbsp;&nbsp;&nbsp;'.$row['item_name'].'</h4><br><br>
                    <p style="color:red;float:left;">&nbsp;&nbsp;&nbsp;'.$row['item_price'].'   vnđ</p>
                </a>
                ';
            }
        ?>
        </div>
    </div>
</div>