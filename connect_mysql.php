<?php
    $db_link=mysqli_connect("localhost", "root", "root", "110-1project");
    if(!$db_link){
        die("資料庫連線失敗");
    }
    mysqli_query($db_link, "SET NAMES 'utf8'");
?>