<?php
	session_start();
	header('Content-Type: text/html;charset=utf-8');
	$vidchu_2_318_litter=$_POST['vidchu_2_318_litter'];
	$vidchu_2_318_leaves=$_POST['vidchu_2_318_leaves'];
	$vidchu_2_318_remark=$_POST['vidchu_2_318_remark'];
	$vidchu_2_313_litter=$_POST['vidchu_2_313_litter'];
	$vidchu_2_313_leaves=$_POST['vidchu_2_313_leaves'];
	$vidchu_2_313_remark=$_POST['vidchu_2_313_remark'];
	$vidchu_2_316_litter=$_POST['vidchu_2_316_litter'];
	$vidchu_2_316_leaves=$_POST['vidchu_2_316_leaves'];
	$vidchu_2_316_remark=$_POST['vidchu_2_316_remark'];
	$vidchu_2_315_litter=$_POST['vidchu_2_315_litter'];
	$vidchu_2_315_leaves=$_POST['vidchu_2_315_leaves'];
	$vidchu_2_315_remark=$_POST['vidchu_2_315_remark'];
	$vidchu_2_317_litter=$_POST['vidchu_2_317_litter'];
	$vidchu_2_317_leaves=$_POST['vidchu_2_317_leaves'];
	$vidchu_2_317_remark=$_POST['vidchu_2_317_remark'];
	$userid=$_SESSION['v_studynum'];
	require("conn_mysql.php");
	$sql_query="INSERT INTO vidchu_2_pm_score(user,vidchu_2_318_litter,vidchu_2_318_leaves,vidchu_2_318_remark,vidchu_2_313_litter,vidchu_2_313_leaves,vidchu_2_313_remark,vidchu_2_316_litter,vidchu_2_316_leaves,vidchu_2_316_remark,vidchu_2_315_litter,vidchu_2_315_leaves,vidchu_2_315_remark,vidchu_2_317_litter,vidchu_2_317_leaves,vidchu_2_317_remark)VALUES('$userid','$vidchu_2_318_litter','$vidchu_2_318_leaves','$vidchu_2_318_remark','$vidchu_2_313_litter','$vidchu_2_313_leaves','$vidchu_2_313_remark','$vidchu_2_316_litter','$vidchu_2_316_leaves','$vidchu_2_316_remark','$vidchu_2_315_litter','$vidchu_2_315_leaves','$vidchu_2_315_remark','$vidchu_2_317_litter','$vidchu_2_317_leaves','$vidchu_2_317_remark')";
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
	header('Location:vidchu-2_pm.php');
?>