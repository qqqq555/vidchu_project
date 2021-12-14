<?php
    require('connect_mysql.php');
    $sql_query="DELETE FROM v";
    $result=mysqli_query($db_link,$sql_query) or die("刪除失敗，請洽詢相關人員");
    $sql_query="DELETE FROM sv";
    $result=mysqli_query($db_link,$sql_query) or die("刪除失敗，請洽詢相關人員");
    header('Location: admin_other.php');
?>