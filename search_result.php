<?php 
    require("./config/config.php");
    require("./config/header.php");
    require("./config/footer.php");
?>


<div class="div-blurred"></div>
<div class="div-content container-fluid">
    <div class="div-wrap-shoes" style="margin-top:0px;">
        <div class="wrap-div">
        <?php  
            $text = $_POST["tb_search"];
            $sql = "select tb_item.item_name,tb_item.item_linkimg1,tb_item.item_type, tb_item.item_id, tb_item.item_price from tb_item  where tb_item.item_name like '%%$text%%'";
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