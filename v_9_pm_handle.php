<?php
	session_start();
	header('Content-Type: text/html;charset=utf-8');
	$vidchu_9_106_litter=$_POST['vidchu_9_106_litter'];
	$vidchu_9_106_dust=$_POST['vidchu_9_106_dust'];
	$vidchu_9_106_sweep=$_POST['vidchu_9_106_sweep'];
	$vidchu_9_106_sill=$_POST['vidchu_9_106_sill'];
	$vidchu_9_106_others=$_POST['vidchu_9_106_others'];
	$vidchu_9_106_remark=$_POST['vidchu_9_106_remark'];
	$vidchu_9_116_litter=$_POST['vidchu_9_116_litter'];
	$vidchu_9_116_dust=$_POST['vidchu_9_116_dust'];
	$vidchu_9_116_sweep=$_POST['vidchu_9_116_sweep'];
	$vidchu_9_116_sill=$_POST['vidchu_9_116_sill'];
	$vidchu_9_116_others=$_POST['vidchu_9_116_others'];
	$vidchu_9_116_remark=$_POST['vidchu_9_116_remark'];
	$vidchu_9_118_litter=$_POST['vidchu_9_118_litter'];
	$vidchu_9_118_dust=$_POST['vidchu_9_118_dust'];
	$vidchu_9_118_sweep=$_POST['vidchu_9_118_sweep'];
	$vidchu_9_118_sill=$_POST['vidchu_9_118_sill'];
	$vidchu_9_118_other=$_POST['vidchu_9_118_other'];
	$vidchu_9_118_remark=$_POST['vidchu_9_118_remark'];
	$userid=$_SESSION['v_studynum'];
	require("conn_mysql.php");
	$sql_query="INSERT INTO vidchu_9_pm_score(user,vidchu_9_106_litter,vidchu_9_106_dust,vidchu_9_106_sweep,vidchu_9_106_sill,vidchu_9_106_others,vidchu_9_106_remark,vidchu_9_116_litter,vidchu_9_116_dust,vidchu_9_116_sweep,vidchu_9_116_sill,vidchu_9_116_others,vidchu_9_116_remark,vidchu_9_118_litter,vidchu_9_118_dust,vidchu_9_118_sweep,vidchu_9_118_sill,vidchu_9_118_other,vidchu_9_118_remark)VALUES('$userid','$vidchu_9_106_litter','$vidchu_9_106_dust','$vidchu_9_106_sweep','$vidchu_9_106_sill','$vidchu_9_106_others','$vidchu_9_106_remark','$vidchu_9_116_litter','$vidchu_9_116_dust','$vidchu_9_116_sweep','$vidchu_9_116_sill','$vidchu_9_116_others','$vidchu_9_116_remark','$vidchu_9_118_litter','$vidchu_9_118_dust','$vidchu_9_118_sweep','$vidchu_9_118_sill','$vidchu_9_118_other','$vidchu_9_118_remark')";
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
	header('Location:vidchu-9_pm.php');
?>