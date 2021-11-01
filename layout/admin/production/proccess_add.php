<?php
    if($_POST['name'] == ""){
       
        echo '<script>
            if(confirm("Bạn không thể bỏ trống tên mặt hàng!")) 
                window.location = "add_mh.php" ;
            else 
                window.location = "ql_mh.php";</script>';
    }
    elseif($_POST['price'] == ""){ 
        echo '<script>
            if(confirm("Bạn không thể bỏ trống đơn giá mặt hàng!"))
                window.location = "add_mh.php";
            else 
                window.location="ql_mh.php";</script>';

    }
    elseif($_POST['type'] == ""){  
        echo '<script>
        if(confirm("Bạn không thể bỏ trống loại mặt hàng!")) 
            window.location = "add_mh.php";
        else 
            window.location = "ql_mh.php";</script>';

    }
    else {
        require('config.php');
        $name = $_POST['name'];
        $price = $_POST['price'];
        $type = $_POST['type'];
        $link1 =".\\\\images\\\\shoes\\\\". $_POST['link1'];
        $link2 = ".\\\\images\\\\shoes\\\\". $_POST['link2'];
        $link3= ".\\\\images\\\\shoes\\\\". $_POST['link3'];
        $sql = "insert into tb_item(item_name,item_price,item_type,item_linkimg1,item_linkimg2,item_linkimg3) values('$name','$price','$type','$link1','$link2','$link3')";
        if(mysqli_query($conn,$sql))
            echo '<script>
            alert("Bạn đã thêm mặt hàng thành công!");
            window.location = "ql_mh.php";
            </script>';
        else
        echo '<script>
        if(confirm("Mặt hàng đã tồn tại!")) 
            window.location = "add_mh.php";
        else 
            window.location = "ql_mh.php";</script>';   
    }
?>