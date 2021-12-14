<?php
	session_start();
	header('Content-Type: text/html;charset=utf-8');
	$v_team=$_POST['v_team'];
	$v_week=$_POST['v_week'];
	$v_time=$_POST['v_time'];
	$on_duty_or_not=$_POST['on_duty_or_not'];
	$date=$_POST['date'];
	$finish_or_not=$_POST['finish_or_not'];
	$pros_and_cons=$_POST['pros_and_cons'];
	$improvement=$_POST['improvement'];
	$userid=$_SESSION['sv_studynum'];
	$sql_query="INSERT INTO sv_score(user,v_team,v_week,v_time,on_duty_or_not,date,finish_or_not,pros_and_cons,improvement)VALUES('$userid','$v_team','$v_week','$v_time','$on_duty_or_not','$date','$finish_or_not','$pros_and_cons','$improvement')";
	require("conn_mysql.php");
	$result1=mysqli_query($db_link,$sql_query) or die ("<center>新增失敗，請返回前一頁並確認是否填答完整(如:日期等)，否則不計出席</center>");
	$x="SELECT sv_work FROM sv WHERE sv_studynum='$userid' ";
	$result1=mysqli_query($db_link,$x) or die ("查詢失敗");
	$y=mysqli_fetch_assoc($result1);
	$z=$y['sv_work']+1;
	$result2="UPDATE sv SET sv_work='$z' WHERE  sv_studynum='$userid' ";
	$result3=mysqli_query($db_link,$result2) or die ("新增又失敗了");
	header('Location:s2.php');
?>