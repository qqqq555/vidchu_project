<?php
	session_start();
	header('Content-Type: text/html;charset=utf-8');
	$vidchu_10_119_litter=$_POST['vidchu_10_119_litter'];
	$vidchu_10_119_leaves=$_POST['vidchu_10_119_leaves'];
	$vidchu_10_119_remark=$_POST['vidchu_10_119_remark'];
	$vidchu_10_109_litter=$_POST['vidchu_10_109_litter'];
	$vidchu_10_109_leaves=$_POST['vidchu_10_109_leaves'];
	$vidchu_10_109_remark=$_POST['vidchu_10_109_remark'];
	$vidchu_10_110_litter=$_POST['vidchu_10_110_litter'];
	$vidchu_10_110_leaves=$_POST['vidchu_10_110_leaves'];
	$vidchu_10_110_dust=$_POST['vidchu_10_110_dust'];
	$vidchu_10_110_others=$_POST['vidchu_10_110_others'];
	$vidchu_10_110_remark=$_POST['vidchu_10_110_remark'];
	$vidchu_10_217_litter=$_POST['vidchu_10_217_litter'];
	$vidchu_10_217_leaves=$_POST['vidchu_10_217_leaves'];
	$vidchu_10_217_dust=$_POST['vidchu_10_217_dust'];
	$vidchu_10_217_others=$_POST['vidchu_10_217_others'];
	$vidchu_10_217_remark=$_POST['vidchu_10_217_remark'];
	$vidchu_10_216_litter=$_POST['vidchu_10_216_litter'];
	$vidchu_10_216_dust=$_POST['vidchu_10_216_dust'];
	$vidchu_10_216_others=$_POST['vidchu_10_216_others'];
	$vidchu_10_216_remark=$_POST['vidchu_10_216_remark'];
	$userid=$_SESSION['v_studynum'];
	require("conn_mysql.php");
	$sql_query="INSERT INTO vidchu_10_pm_score(user,vidchu_10_119_litter,vidchu_10_119_leaves,vidchu_10_119_remark,vidchu_10_109_litter,vidchu_10_109_leaves,vidchu_10_109_remark,vidchu_10_110_litter,vidchu_10_110_leaves,vidchu_10_110_dust,vidchu_10_110_others,vidchu_10_110_remark,vidchu_10_217_litter,vidchu_10_217_leaves,vidchu_10_217_dust,vidchu_10_217_others,vidchu_10_217_remark,vidchu_10_216_litter,vidchu_10_216_dust,vidchu_10_216_others,vidchu_10_216_remark)VALUES('$userid','$vidchu_10_119_litter','$vidchu_10_119_leaves','$vidchu_10_119_remark','$vidchu_10_109_litter','$vidchu_10_109_leaves','$vidchu_10_109_remark','$vidchu_10_110_litter','$vidchu_10_110_leaves','$vidchu_10_110_dust','$vidchu_10_110_others','$vidchu_10_110_remark','$vidchu_10_217_litter','$vidchu_10_217_leaves','$vidchu_10_217_dust','$vidchu_10_217_others','$vidchu_10_217_remark','$vidchu_10_216_litter','$vidchu_10_216_dust','$vidchu_10_216_others','$vidchu_10_216_remark')";
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
	header('Location:vidchu-10_pm.php');
?>