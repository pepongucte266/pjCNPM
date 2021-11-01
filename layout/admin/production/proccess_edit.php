<?php
echo $_POST['link1'];
    if($_POST['name'] == ""){
       
        echo '<script>
            if(confirm("Bạn không thể bỏ trống tên mặt hàng!")) 
                window.location = "update_mh.php" ;
            else 
                window.location = "ql_mh.php";</script>';
    }
    elseif($_POST['price'] == ""){ 
        echo '<script>
            if(confirm("Bạn không thể bỏ trống đơn giá mặt hàng!"))
                window.location = "update_mh.php";
            else 
                window.location="ql_mh.php";</script>';

    }
    elseif($_POST['type'] == ""){  
        echo '<script>
        if(confirm("Bạn không thể bỏ trống loại mặt hàng!")) 
            window.location = "update_mh.php";
        else 
            window.location = "ql_mh.php";</script>';

    }
    elseif($_POST['link1']==''&& $_POST['link2']!=''&& $_POST['link3']!=''){
        require('config.php');
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $type = $_POST['type'];
        $link2 = ".\\\\images\\\\shoes\\\\". $_POST['link2'];
        $link3= ".\\\\images\\\\shoes\\\\". $_POST['link3'];
        $sql = "update tb_item set item_name = '$name', item_price = '$price',item_type = '$type', item_linkimg2 = '$link2', item_linkimg3 = '$link3' where id_item = '$id'";
        if(mysqli_query($conn,$sql))
            echo '<script>
            alert("Bạn đã cập nhật mặt hàng thành công!");
            window.location = "ql_mh.php";
            </script>';
        else
            echo '<script>
            alert("Cập nhật mặt hàng không thành công!");
                window.location = "ql_mh.php";
            </script>';    
    }
    elseif($_POST['link1']!=''&& $_POST['link2']==''&& $_POST['link3']!=''){
        require('config.php');
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $type = $_POST['type'];
        $link1 = ".\\\\images\\\\shoes\\\\". $_POST['link1'];
        $link3= ".\\\\images\\\\shoes\\\\". $_POST['link3'];
        $sql = "update tb_item set item_name = '$name', item_price = '$price',item_type = '$type', item_linkimg1 = '$link1', item_linkimg3 = '$link3' where id_item = '$id'";
        if(mysqli_query($conn,$sql))
            echo '<script>
            alert("Bạn đã cập nhật mặt hàng thành công!")
            window.location = "ql_mh.php";
            </script>';
        else
            echo '<script>
            alert("Cập nhật mặt hàng không thành công!")
            window.location = "ql_mh.php";
            </script>';    
    }
    elseif($_POST['link1']!=''&& $_POST['link2']!=''&& $_POST['link3']==''){
        require('config.php');
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $type = $_POST['type'];
        $link1 = ".\\\\images\\\\shoes\\\\". $_POST['link1'];
        $link2= ".\\\\images\\\\shoes\\\\". $_POST['link2'];
        $sql = "update tb_item set item_name = '$name', item_price = '$price',item_type = '$type', item_linkimg1 = '$link1', item_linkimg2 = '$link2' where id_item = '$id'";
        if(mysqli_query($conn,$sql))
            echo '<script>
            alert("Bạn đã cập nhật mặt hàng thành công!")
            window.location = "ql_mh.php";
            </script>';
        else
            echo '<script>
            alert("Cập nhật mặt hàng không thành công!")
            window.location = "ql_mh.php";
            </script>';    
    }
    elseif($_POST['link1']==''&& $_POST['link2']==''&& $_POST['link3']==''){
        require('config.php');
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $type = $_POST['type'];
        $sql = "update tb_item set item_name = '$name', item_price = '$price',item_type = '$type' where id_item = '$id'";
        if(mysqli_query($conn,$sql))
            echo '<script>
            alert("Bạn đã cập nhật mặt hàng thành công!")
            window.location = "ql_mh.php";
            </script>';
        else
            echo '<script>
            alert("Cập nhật mặt hàng không thành công!");
            window.location = "ql_mh.php";
            </script>';    
    }
   
    else {
        require('config.php');
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $type = $_POST['type'];
        $link1 =".\\\\images\\\\shoes\\\\". $_POST['link1'];
        $link2 = ".\\\\images\\\\shoes\\\\". $_POST['link2'];
        $link3= ".\\\\images\\\\shoes\\\\". $_POST['link3'];
        $sql = "update tb_item set item_name = '$name', item_price = '$price',item_type = '$type', item_linkimg1 = '$link1', item_linkimg2 = '$link2', item_linkimg3 = '$link3' where id_item = '$id'";
        if(mysqli_query($conn,$sql))
            echo '<script>
            if(alert("Bạn đã cập nhật mặt hàng thành công!"))
                window.location = "ql_mh.php";
            <script>';
        else
        echo '<script>
        if(confirm("Cập nhật mặt hàng không thành công!")) 
            window.location = "update_mh.php";
        else 
            window.location = "ql_mh.php";
        </script>';   
    }
?>