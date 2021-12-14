<?php
	session_start();
	header('Content-Type: text/html;charset=utf-8');
	$vidchu_23_102_litter=$_POST['vidchu_23_102_litter'];
	$vidchu_23_102_leaves=$_POST['vidchu_23_102_leaves'];
	$vidchu_23_102_remark=$_POST['vidchu_23_102_remark'];
	$vidchu_23_112_litter=$_POST['vidchu_23_112_litter'];
	$vidchu_23_112_leaves=$_POST['vidchu_23_112_leaves'];
	$vidchu_23_112_remark=$_POST['vidchu_23_112_remark'];
	$userid=$_SESSION['v_studynum'];
	require("conn_mysql.php");
	$sql_query="INSERT INTO vidchu_23_score(user,vidchu_23_102_litter,vidchu_23_102_leaves,vidchu_23_102_remark,vidchu_23_112_litter,vidchu_23_112_leaves,vidchu_23_112_remark)VALUES('$userid','$vidchu_23_102_litter','$vidchu_23_102_leaves','$vidchu_23_102_remark','$vidchu_23_112_litter','$vidchu_23_112_leaves','$vidchu_23_112_remark')";
	$result1=mysqli_query($db_link,$sql_query) or die ("新增失敗");
	//v_work
	$x="SELECT v_work FROM v WHERE v_studynum='$userid' ";
	$result=mysqli_query($db_link,$x) or die ("查詢失敗1");
	$y=mysqli_fetch_assoc($result);
	$z=$y['v_work']+1;
	$result2="UPDATE v SET v_work='$z' WHERE  v_studynum='$userid' ";
	$result3=mysqli_query($db_link,$result2) or die ("新增失敗2");
	//v_am
	$a="SELECT v_am FROM v WHERE v_studynum='$userid' ";
	$result4=mysqli_query($db_link,$a) or die ("查詢失敗2");
	$b=mysqli_fetch_assoc($result4);
	$c=$b['v_am']+1;
	$result5="UPDATE v SET v_am='$c' WHERE  v_studynum='$userid' ";
	$result6=mysqli_query($db_link,$result5) or die ("新增失敗3");
	header('Location:vidchu-23.php');
?>