<?php
    session_start();
    $admin_account=$_POST['admin_account'];
    $admin_password=$_POST['admin_password'];
    
    if($admin_account=='davidchu' && $admin_password=='1103092025'){
        $_SESSION['admin_account']='1';
        header('refresh:1;url=admin_all.php');
        echo "<script>alert('登入成功，即將跳轉至管理頁面')</script>";
    }
    else{
        header('refresh:1;url=adminlogin.php');
        echo "<script>alert('帳號或密碼錯誤，請重新登入')</script>";
    }
?>