<?php
	session_start();
	header('Content-Type: text/html;charset=utf-8');
	$vidchu_1_320_litter=$_POST['vidchu_1_320_litter'];
	$vidchu_1_320_leaves=$_POST['vidchu_1_320_leaves'];
	$vidchu_1_320_remark=$_POST['vidchu_1_320_remark'];
	$vidchu_1_305_litter=$_POST['vidchu_1_305_litter'];
	$vidchu_1_305_leaves=$_POST['vidchu_1_305_leaves'];
	$vidchu_1_305_sweep=$_POST['vidchu_1_305_sweep'];
	$vidchu_1_305_remark=$_POST['vidchu_1_305_remark'];
	$vidchu_1_319_litter=$_POST['vidchu_1_319_litter'];
	$vidchu_1_319_leaves=$_POST['vidchu_1_319_leaves'];
	$vidchu_1_319_remark=$_POST['vidchu_1_319_remark'];
	$vidchu_1_321_litter=$_POST['vidchu_1_321_litter'];
	$vidchu_1_321_leaves=$_POST['vidchu_1_321_leaves'];
	$vidchu_1_321_remark=$_POST['vidchu_1_321_remark'];
	$vidchu_1_322_litter=$_POST['vidchu_1_322_litter'];
	$vidchu_1_322_leaves=$_POST['vidchu_1_322_leaves'];
	$vidchu_1_322_remark=$_POST['vidchu_1_322_remark'];
	$userid=$_SESSION['v_studynum'];
	require("conn_mysql.php");
	$sql_query="INSERT INTO vidchu_1_pm_score(user,vidchu_1_320_litter,vidchu_1_320_leaves,vidchu_1_320_remark,vidchu_1_305_litter,vidchu_1_305_leaves,vidchu_1_305_sweep,vidchu_1_305_remark,vidchu_1_319_litter,vidchu_1_319_leaves,vidchu_1_319_remark,vidchu_1_321_litter,vidchu_1_321_leaves,vidchu_1_321_remark,vidchu_1_322_litter,vidchu_1_322_leaves,vidchu_1_322_remark)VALUES('$userid','$vidchu_1_320_litter','$vidchu_1_320_leaves','$vidchu_1_320_remark','$vidchu_1_305_litter','$vidchu_1_305_leaves','$vidchu_1_305_sweep','$vidchu_1_305_remark','$vidchu_1_319_litter','$vidchu_1_319_leaves','$vidchu_1_319_remark','$vidchu_1_321_litter','$vidchu_1_321_leaves','$vidchu_1_321_remark','$vidchu_1_322_litter','$vidchu_1_322_leaves','$vidchu_1_322_remark')";
	$result1=mysqli_query($db_link,$sql_query) or die ("新增失敗");
	//v_work
	$x="SELECT v_work FROM v WHERE v_studynum='$userid' ";
	$result=mysqli_query($db_link,$x) or die ("查詢失敗1");
	$y=mysqli_fetch_assoc($result);
	$z=$y['v_work']+1;
	$result2="UPDATE v SET v_work='$z' WHERE  v_studynum='$userid' ";
	$result3=mysqli_query($db_link,$result2) or die ("新增失敗2");
	//v_pm
	$d="SELECT v_pm FROM v WHERE v_studynum='$userid' ";
	$result7=mysqli_query($db_link,$d) or die ("查詢失敗3");
	$e=mysqli_fetch_assoc($result7);
	$f=$e['v_pm']+1;
	$result8="UPDATE v SET v_pm='$f' WHERE  v_studynum='$userid' ";
	$result9=mysqli_query($db_link,$result8) or die ("新增失敗4");
	header('Location:vidchu-1_pm.php');
?>