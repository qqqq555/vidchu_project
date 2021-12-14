<?php
    require('connect_mysql.php');
    $update="UPDATE v SET v_work='0'";
    $result=mysqli_query($db_link,$update) or die("清空值勤紀錄失敗，請洽詢相關人員");
    $update="UPDATE sv SET sv_work='0'";
    $result=mysqli_query($db_link,$update) or die("清空值勤紀錄失敗，請洽詢相關人員");
    header('Location: admin_other.php');
?>