<?php
	session_start();
	header('Content-Type: text/html;charset=utf-8');
	require("conn_mysql.php");
	$userid=$_SESSION['v_studynum']
	$sql="SELECT v_work FROM v WHERE v_studynum=''.$userid.'' ";
	$result1=mysqli_query($db_link,$sql) or die ("查詢失敗");
	
?>