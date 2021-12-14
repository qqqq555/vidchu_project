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
	$sql_query="INSERT INTO vidchu_2_am_score(user,vidchu_2_318_litter,vidchu_2_318_leaves,vidchu_2_318_remark,vidchu_2_313_litter,vidchu_2_313_leaves,vidchu_2_313_remark,vidchu_2_316_litter,vidchu_2_316_leaves,vidchu_2_316_remark,vidchu_2_315_litter,vidchu_2_315_leaves,vidchu_2_315_remark,vidchu_2_317_litter,vidchu_2_317_leaves,vidchu_2_317_remark)VALUES('$userid','$vidchu_2_318_litter','$vidchu_2_318_leaves','$vidchu_2_318_remark','$vidchu_2_313_litter','$vidchu_2_313_leaves','$vidchu_2_313_remark','$vidchu_2_316_litter','$vidchu_2_316_leaves','$vidchu_2_316_remark','$vidchu_2_315_litter','$vidchu_2_315_leaves','$vidchu_2_315_remark','$vidchu_2_317_litter','$vidchu_2_317_leaves','$vidchu_2_317_remark')";
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
	header('Location:vidchu-2_am.php');
?>