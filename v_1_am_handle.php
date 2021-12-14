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
	$sql_query="INSERT INTO vidchu_1_am_score(user,vidchu_1_320_litter,vidchu_1_320_leaves,vidchu_1_320_remark,vidchu_1_305_litter,vidchu_1_305_leaves,vidchu_1_305_sweep,vidchu_1_305_remark,vidchu_1_319_litter,vidchu_1_319_leaves,vidchu_1_319_remark,vidchu_1_321_litter,vidchu_1_321_leaves,vidchu_1_321_remark,vidchu_1_322_litter,vidchu_1_322_leaves,vidchu_1_322_remark)VALUES('$userid','$vidchu_1_320_litter','$vidchu_1_320_leaves','$vidchu_1_320_remark','$vidchu_1_305_litter','$vidchu_1_305_leaves','$vidchu_1_305_sweep','$vidchu_1_305_remark','$vidchu_1_319_litter','$vidchu_1_319_leaves','$vidchu_1_319_remark','$vidchu_1_321_litter','$vidchu_1_321_leaves','$vidchu_1_321_remark','$vidchu_1_322_litter','$vidchu_1_322_leaves','$vidchu_1_322_remark')";
	$result1=mysqli_query($db_link,$sql_query) or die ("新增失敗1");
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
	header('Location:vidchu-1_am.php');
?>