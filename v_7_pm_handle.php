<?php
	session_start();
	header('Content-Type: text/html;charset=utf-8');
	$vidchu_7_220_litter=$_POST['vidchu_7_220_litter'];
	$vidchu_7_220_leaves=$_POST['vidchu_7_220_leaves'];
	$vidchu_7_220_remark=$_POST['vidchu_7_220_remark'];
	$vidchu_7_104_litter=$_POST['vidchu_7_104_litter'];
	$vidchu_7_104_leaves=$_POST['vidchu_7_104_leaves'];
	$vidchu_7_104_remark=$_POST['vidchu_7_104_remark'];
	$vidchu_7_115_litter=$_POST['vidchu_7_115_litter'];
	$vidchu_7_115_leaves=$_POST['vidchu_7_115_leaves'];
	$vidchu_7_115_dust=$_POST['vidchu_7_115_dust'];
	$vidchu_7_115_others=$_POST['vidchu_7_115_others'];
	$vidchu_7_115_remark=$_POST['vidchu_7_115_remark'];
	$userid=$_SESSION['v_studynum'];
	require("conn_mysql.php");
	$sql_query="INSERT INTO vidchu_7_pm_score(user,vidchu_7_220_litter,vidchu_7_220_leaves,vidchu_7_220_remark,vidchu_7_104_litter,vidchu_7_104_leaves,vidchu_7_104_remark,vidchu_7_115_litter,vidchu_7_115_leaves,vidchu_7_115_dust,vidchu_7_115_others,vidchu_7_115_remark)VALUES('$userid','$vidchu_7_220_litter','$vidchu_7_220_leaves','$vidchu_7_220_remark','$vidchu_7_104_litter','$vidchu_7_104_leaves','$vidchu_7_104_remark','$vidchu_7_115_litter','$vidchu_7_115_leaves','$vidchu_7_115_dust','$vidchu_7_115_others','$vidchu_7_115_remark')";
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
	header('Location:vidchu-7_pm.php');
?>