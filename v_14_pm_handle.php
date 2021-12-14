<?php
	session_start();
	header('Content-Type: text/html;charset=utf-8');
	$vidchu_14_108_litter=$_POST['vidchu_14_108_litter'];
	$vidchu_14_108_dust=$_POST['vidchu_14_108_dust'];
	$vidchu_14_108_sweep=$_POST['vidchu_14_108_sweep'];
	$vidchu_14_108_sill=$_POST['vidchu_14_108_sill'];
	$vidchu_14_108_others=$_POST['vidchu_14_108_others'];
	$vidchu_14_108_remark=$_POST['vidchu_14_108_remark'];
	$vidchu_14_107_litter=$_POST['vidchu_14_107_litter'];
	$vidchu_14_107_dust=$_POST['vidchu_14_107_dust'];
	$vidchu_14_107_sweep=$_POST['vidchu_14_107_sweep'];
	$vidchu_14_107_sill=$_POST['vidchu_14_107_sill'];
	$vidchu_14_107_others=$_POST['vidchu_14_107_others'];
	$vidchu_14_107_remark=$_POST['vidchu_14_107_remark'];
	$vidchu_14_113_litter=$_POST['vidchu_14_113_litter'];
	$vidchu_14_113_dust=$_POST['vidchu_14_113_dust'];
	$vidchu_14_113_sweep=$_POST['vidchu_14_113_sweep'];
	$vidchu_14_113_sill=$_POST['vidchu_14_113_sill'];
	$vidchu_14_113_others=$_POST['vidchu_14_113_others'];
	$vidchu_14_113_remark=$_POST['vidchu_14_113_remark'];
	$userid=$_SESSION['v_studynum'];
	require("conn_mysql.php");
	$sql_query="INSERT INTO vidchu_14_pm_score(user,vidchu_14_108_litter,vidchu_14_108_dust,vidchu_14_108_sweep,vidchu_14_108_sill,vidchu_14_108_others,vidchu_14_108_remark,vidchu_14_107_litter,vidchu_14_107_dust,vidchu_14_107_sweep,vidchu_14_107_sill,vidchu_14_107_others,vidchu_14_107_remark,vidchu_14_113_litter,vidchu_14_113_dust,vidchu_14_113_sill,vidchu_14_113_others,vidchu_14_113_remark)VALUES('$userid','$vidchu_14_108_litter','$vidchu_14_108_dust','$vidchu_14_108_sweep','$vidchu_14_108_sill','$vidchu_14_108_others','$vidchu_14_108_remark','$vidchu_14_107_litter','$vidchu_14_107_dust','$vidchu_14_107_sweep','$vidchu_14_107_sill','$vidchu_14_107_others','$vidchu_14_107_remark','$vidchu_14_113_litter','$vidchu_14_113_dust','$vidchu_14_113_sill','$vidchu_14_113_others','$vidchu_14_113_remark')";
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
	header('Location:vidchu-14_pm.php');
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