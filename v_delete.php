<?php
    require('connect_mysql.php');
    $v_studynum=$_GET['v_studynum'];
    $sql_query="DELETE FROM v where v_studynum='$v_studynum'";
    $result=mysqli_query($db_link,$sql_query) or die("刪除失敗，請洽詢相關人員");
    header('Location: admin_all.php');
?>