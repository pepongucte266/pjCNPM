<?php
    require("./config/config.php");
    $id=$_GET['id'];
    echo'<!DOCTYPE html>
    <html lang="en">
    <head>
    <title> Streatwear </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="shortcut icon" type="png/image" href="./images/icons/icon_title.png"> 
        <link rel="stylesheet" href="./css/bootstrap.css">
            <link rel="stylesheet" href="./css/all.css">
            <link rel="stylesheet" href="./css/v4-shims.css">
        <link rel="stylesheet" href="./css/styles.css">
        <script src="./js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="./js/bootstrap.js"></script>
        <script type="text/javascript" src="./js/script.js"></script>
                    
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
    </head>
    <body>
    <header>
        <div class="div-on-top container-fluid">
            <a href="http://localhost/pjCongNghePhanMem/index.php" class="logo-jordan col-sm-10" title="Các sản phẩm Jordan">
                <svg height="24px" width="24px" fill="#111" viewBox="0 0 26 32" class="brand-jordan">
                    <path
                        d="M14.4 5.52v-.08q0-.56.36-1t.92-.44 1 .36.48.96-.36 1-.96.4l-.24.08.08.12-.08.44-.16 1.28q.08.08.08.16l-.16.8q-.08.16-.16.24l-.08.32q-.16.64-.28 1.04t-.2.64V12q-.08.4-.12.64t-.28.8q-.16.32 0 1.04l.08.08q0 .24.2.56t.2.56q.08 1.6-.24 2.72l.16.48q.96.48.56 1.04l.4.16q.96.48 1.36.84t.8.76q.32.08.48.24l.24.08q1.68 1.12 3.36 2.72l.32.24v.08l-.08.16.24.16h.08q.24.16.32.16h.08q.08 0 .16-.08l.16-.08q.16-.16.32-.24h.32q.08 0 0 .08l-.32.16-.4.48h.56l.56.08q.24-.08.4-.16l.4-.24q.24-.08.48.16h.08q.08.08-.08.24l-.96.88q-.4.32-.72.4l-1.04.72q-.08.08-.16 0l-.24-.32-.16-.32-.2-.28-.24-.32-.2-.24-.16-.2-.32-.24q-.16 0-.32-.08l-1.04-.8q-.24 0-.56-.24-1.2-1.04-1.6-1.28l-.48-.32-.96-.16q-.48-.08-1.28-.48l-.64-.32q-.64-.32-.88-.32l-.32-.16q-.32-.08-.48-.16l-.16-.16q-.16 0-.32.08l-1.6.8-2 .88q-.8.64-1.52 1.04l-.88.4-1.36.96q-.16.16-.32 0l-.16.16q-.24.08-.32.08l-.32.16v.16h-.16l-.16.24q-.16.32-.32.36t-.2.12-.08.12l-.16.16-.24.16-.36-.04-.48.08-.32.08q-.4.08-.64-.12t-.4-.6q-.16-.24.16-.4l.08-.08q.08-.08.24-.08h.48L1.6 26l.32-.08q0-.16.08-.24.08-.08.24-.08v-.08q-.08-.16-.08-.32-.08-.16-.04-.24t.08-.08h.04l.08.24q.08.4.24.24l.08-.16q.08-.16.24-.16l.16.16.16-.16-.08-.08q0-.08.08-.08l.32-.32q.4-.48.96-.88 1.12-.88 2.4-1.36.4-.4.88-.4.32-.56.96-1.2.56-.4.8-.56.16-.32.4-.32H10l.16-.16q.16-.08.24-.16v-.4q0-.4.08-.64t.4-.24l.32-.32q-.16-.32-.16-.72h-.08q-.16-.24-.16-.48-.24-.4-.32-.64h-.24q-.08.24-.4.32l-.08.16q-.32.56-.56.84t-.88.68q-.4.4-.56.88-.08.24 0 .48l-.08.16h.08q0 .16.08.16h.08q.16.08.16.2t-.24.08-.36-.16-.2-.12l-.24.24q-.16.24-.32.2t-.08-.12l.08-.08q.08-.16 0-.16l-.64.16q-.08.08-.2 0t.04-.16l.4-.16q0-.08-.08-.08-.32.16-.64.08l-.4-.08-.08-.08q0-.08.08-.08.32.08.8-.08l.56-.24.64-.72.08-.16q.32-.64.68-1.16t.76-.84l.08-.32q.16-.32.32-.56t.4-.64l.24-.32q.32-.48.72-.48l.24-.24q.08-.08.08-.24l.16-.16-.08-.08q-.48-.4-.48-.72-.08-.56.36-.96t.88-.36.68.28l.16.16q.08 0 .08.08l.32.16v.24q.16.16.16.24.16-.24.48-.56l.4-1.28q0-.32.16-.64l.16-.24v-.16l.24-.96h.16l.24-.96q.08-.24 0-.56l-.32-.8z">
                    </path>
                </svg>
            </a>
            <ul class="login-menu ">
                <li><a href="index.php">Đăng xuất</a></li>
                <li style="text-decoration: none;
                color: black;
                height: 30px;
                font-size: 12px;
                font-weight: 550;
                padding: 4px 10px;">'. $id.'</li>
            </ul>
        </div>
        <nav class="div-menu navbar-light bg-light container-fluid">
            <a href="http://localhost/pjCongNghePhanMem /index.php" class="web-brand col-md-4"><img src="./images/icons/bear.jpg" alt=""></a>
            <ul class="menu-top-page col-md-4">
                <li><a href="">Nike</a></li>
                <li><a href="">Adidas</a></li>
                <li><a href="">Bitis</a></li>
                <li><a href="">Converse</a></li>
            </ul>
            <div class="div-search col-md-4">
                <form action="search_result1.php?id='. $id.'" title="Tìm kiếm sản phẩm" method="POST">
                    <button class="searching" type="submit"><i class="far fa-search "></i></button>
                    <input type="text" placeholder="Tìm kiếm" class="search" name = "tb_search">
                </form>
                <a href="" class="bag-item search" title="Giỏ hàng: 0"><i class="fal fa-shopping-bag"></i></a>
                <a href="" class="btn-favorites-list search" title="Yêu thích: 0"><i class="far fa-heart"></i></a>
            </div>
        </nav>
        <div class="div-popular-search">
            <h4>Tìm Kiếm Phổ Biến</h4>
            <button class="btn-rollback" title="Thoát"><i class="fal fa-times"></i></button>
            <ul>
                <li><a href="">Giày Air Force One</a></li>
                <li><a href="">Giày Jordan XXXI</a></li>
                <li><a href="">Converse 1970s</a></li>
                <li><a href="">Bitis Hunter</a></li>
                <li><a href="">Yeezy 350 v2</a></li>
            </ul>
        </div>
    </header>';
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
    <div class="div-wrap-shoes">
    <h3 style="margin-top :900px;">Danh sách sản phẩm</h3>
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