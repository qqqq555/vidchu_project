<?php
    require('connect_mysql.php');
    $sv_studynum=$_GET['sv_studynum'];
    $sql_query="DELETE FROM sv where sv_studynum='$sv_studynum'";
    $result=mysqli_query($db_link,$sql_query) or die("刪除失敗，請洽詢相關人員");
    header('Location: admin_allsv.php');
?>