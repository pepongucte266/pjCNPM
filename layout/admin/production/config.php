<?php
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASS", "");
    define("DB_NAME", "db_website_cnpm");
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if($conn === false) {
        die("Error connect database." .mysqli_error($conn));
    }
?>
    
