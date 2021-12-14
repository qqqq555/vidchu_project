<?php
	session_start();
	header('Content-Type: text/html;charset=utf-8');
	$vidchu_13_105_litter=$_POST['vidchu_13_105_litter'];
	$vidchu_13_105_dust=$_POST['vidchu_13_105_dust'];
	$vidchu_13_105_sweep=$_POST['vidchu_13_105_sweep'];
	$vidchu_13_105_sill=$_POST['vidchu_13_105_sill'];
	$vidchu_13_105_others=$_POST['vidchu_13_105_others'];
	$vidchu_13_105_remark=$_POST['vidchu_13_105_remark'];
	$vidchu_13_111_litter=$_POST['vidchu_12_101_litter'];
	$vidchu_13_111_dust=$_POST['vidchu_13_111_dust'];
	$vidchu_13_111_sweep=$_POST['vidchu_13_111_sweep'];
	$vidchu_13_111_sill=$_POST['vidchu_13_111_sill'];
	$vidchu_13_111_others=$_POST['vidchu_13_111_others'];
	$vidchu_13_111_remark=$_POST['vidchu_13_111_remark'];
	$vidchu_13_117_litter=$_POST['vidchu_13_117_litter'];
	$vidchu_13_117_dust=$_POST['vidchu_13_117_dust'];
	$vidchu_13_117_sweep=$_POST['vidchu_13_117_sweep'];
	$vidchu_13_117_sill=$_POST['vidchu_13_117_sill'];
	$vidchu_13_117_others=$_POST['vidchu_13_117_others'];
	$vidchu_13_117_remark=$_POST['vidchu_13_117_remark'];
	$userid=$_SESSION['v_studynum'];
	require("conn_mysql.php");
	$sql_query="INSERT INTO vidchu_13_pm_score(user,vidchu_13_105_litter,vidchu_13_105_dust,vidchu_13_105_sweep,vidchu_13_105_sill,vidchu_13_105_others,vidchu_13_105_remark,vidchu_13_111_litter,vidchu_13_111_dust,vidchu_13_111_sweep,vidchu_13_111_sill,vidchu_13_111_others,vidchu_13_111_remark,vidchu_13_117_litter,vidchu_13_117_dust,vidchu_13_117_sweep,vidchu_13_117_sill,vidchu_13_117_others,vidchu_13_117_remark)VALUES('$userid','$vidchu_13_105_litter','$vidchu_13_105_dust','$vidchu_13_105_sweep','$vidchu_13_105_sill','$vidchu_13_105_others','$vidchu_13_105_remark','$vidchu_13_111_litter','$vidchu_13_111_dust','$vidchu_13_111_sweep','$vidchu_13_111_sill','$vidchu_13_111_others','$vidchu_13_111_remark','$vidchu_13_117_litter','$vidchu_13_117_dust','$vidchu_13_117_sweep','$vidchu_13_117_sill','$vidchu_13_117_others','$vidchu_13_117_remark')";
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
	header('Location:vidchu-13_pm.php');
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