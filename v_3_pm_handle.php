<?php
	session_start();
	header('Content-Type: text/html;charset=utf-8');
	$vidchu_3_302_litter=$_POST['vidchu_3_302_litter'];
	$vidchu_3_302_leaves=$_POST['vidchu_3_302_leaves'];
	$vidchu_3_302_dust=$_POST['vidchu_3_302_dust'];
	$vidchu_3_302_sill=$_POST['vidchu_3_302_sill'];
	$vidchu_3_302_others=$_POST['vidchu_3_302_others'];
	$vidchu_3_302_remark=$_POST['vidchu_3_302_remark'];
	$vidchu_3_303_litter=$_POST['vidchu_3_303_litter'];
	$vidchu_3_303_leaves=$_POST['vidchu_3_303_leaves'];
	$vidchu_3_303_dust=$_POST['vidchu_3_303_dust'];
	$vidchu_3_303_sill=$_POST['vidchu_3_303_sill'];
	$vidchu_3_303_others=$_POST['vidchu_3_303_others'];
	$vidchu_3_303_remark=$_POST['vidchu_3_303_remark'];
	$vidchu_3_301_litter=$_POST['vidchu_3_301_litter'];
	$vidchu_3_301_leaves=$_POST['vidchu_3_301_leaves'];
	$vidchu_3_301_dust=$_POST['vidchu_3_301_dust'];
	$vidchu_3_301_sill=$_POST['vidchu_3_301_sill'];
	$vidchu_3_301_others=$_POST['vidchu_3_301_others'];
	$vidchu_3_301_remark=$_POST['vidchu_3_301_remark'];
	$userid=$_SESSION['v_studynum'];
	require("conn_mysql.php");
	$sql_query="INSERT INTO vidchu_3_pm_score(user,vidchu_3_302_litter,vidchu_3_302_leaves,vidchu_3_302_dust,vidchu_3_302_sill,vidchu_3_302_others,vidchu_3_302_remark,vidchu_3_303_litter,vidchu_3_303_leaves,vidchu_3_303_dust,vidchu_3_303_sill,vidchu_3_303_others,vidchu_3_303_remark,vidchu_3_301_litter,vidchu_3_301_leaves,vidchu_3_301_dust,vidchu_3_301_sill,vidchu_3_301_others,vidchu_3_301_remark)VALUES('$userid','$vidchu_3_302_litter','$vidchu_3_302_leaves','$vidchu_3_302_dust','$vidchu_3_302_sill','$vidchu_3_302_others','$vidchu_3_302_remark','$vidchu_3_303_litter','$vidchu_3_303_leaves','$vidchu_3_303_dust','$vidchu_3_303_sill','$vidchu_3_303_others','$vidchu_3_303_remark','$vidchu_3_301_litter','$vidchu_3_301_leaves','$vidchu_3_301_dust','$vidchu_3_301_sill','$vidchu_3_301_others','$vidchu_3_301_remark')";
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
	header('Location:vidchu-3_pm.php');
?>