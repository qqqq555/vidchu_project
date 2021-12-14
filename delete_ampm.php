<?php
    require('connect_mysql.php');
    $update="UPDATE v SET v_am='0'";
    $result=mysqli_query($db_link,$update) or die("清空值勤紀錄失敗，請洽詢相關人員");
    $update="UPDATE v SET v_pm='0'";
    $result=mysqli_query($db_link,$update) or die("清空值勤紀錄失敗，請洽詢相關人員");
    header('Location: admin_other.php');
?>