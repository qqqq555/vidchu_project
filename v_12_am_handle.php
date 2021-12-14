<?php
	session_start();
	header('Content-Type: text/html;charset=utf-8');
	$vidchu_12_101_litter=$_POST['vidchu_12_101_litter'];
	$vidchu_12_101_leaves=$_POST['vidchu_12_101_leaves'];
	$vidchu_12_101_others=$_POST['vidchu_12_101_others'];
	$vidchu_12_101_remark=$_POST['vidchu_12_101_remark'];
	$vidchu_12_114_litter=$_POST['vidchu_12_114_litter'];
	$vidchu_12_114_leaves=$_POST['vidchu_12_114_leaves'];
	$vidchu_12_114_sweep=$_POST['vidchu_12_114_sweep'];
	$vidchu_12_114_others=$_POST['vidchu_12_114_others'];
	$vidchu_12_114_remark=$_POST['vidchu_12_114_remark'];
	$vidchu_12_103_litter=$_POST['vidchu_12_103_litter'];
	$vidchu_12_103_dust=$_POST['vidchu_12_103_dust'];
	$vidchu_12_103_others=$_POST['vidchu_12_103_others'];
	$vidchu_12_103_remark=$_POST['vidchu_12_103_remark'];
	$userid=$_SESSION['v_studynum'];
	require("conn_mysql.php");
	$sql_query="INSERT INTO vidchu_12_am_score(user,vidchu_12_101_litter,vidchu_12_101_leaves,vidchu_12_101_others,vidchu_12_101_remark,vidchu_12_114_litter,vidchu_12_114_leaves,vidchu_12_114_sweep,vidchu_12_114_others,vidchu_12_114_remark,vidchu_12_103_litter,vidchu_12_103_dust,vidchu_12_103_others,vidchu_12_103_remark)VALUES('$userid','$vidchu_12_101_litter','$vidchu_12_101_leaves','$vidchu_12_101_others','$vidchu_12_101_remark','$vidchu_12_114_litter','$vidchu_12_114_leaves','$vidchu_12_114_sweep','$vidchu_12_114_others','$vidchu_12_114_remark','$vidchu_12_103_litter','$vidchu_12_103_dust','$vidchu_12_103_others','$vidchu_12_103_remark')";
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
	header('Location:vidchu-12_am.php');
?>
<!--
	$vidchu_11_213_litter=$_POST['vidchu_11_213_litter'];
	$vidchu_11_213_leaves=$_POST['vidchu_11_213_leaves'];
	$vidchu_11_213_dust=$_POST['vidchu_11_213_dust'];
	$vidchu_11_213_sweep=$_POST['vidchu_11_213_sweep'];
	$vidchu_11_213_sill=$_POST['vidchu_11_213_sill'];
	$vidchu_11_213_others=$_POST['vidchu_11_213_others'];
	$vidchu_11_213_remark=$_POST['vidchu_11_213_remark'];
-->