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
	$sql_query="INSERT INTO vidchu_9_am_score(user,vidchu_9_106_litter,vidchu_9_106_dust,vidchu_9_106_sweep,vidchu_9_106_sill,vidchu_9_106_others,vidchu_9_106_remark,vidchu_9_116_litter,vidchu_9_116_dust,vidchu_9_116_sweep,vidchu_9_116_sill,vidchu_9_116_others,vidchu_9_116_remark,vidchu_9_118_litter,vidchu_9_118_dust,vidchu_9_118_sweep,vidchu_9_118_sill,vidchu_9_118_other,vidchu_9_118_remark)VALUES('$userid','$vidchu_9_106_litter','$vidchu_9_106_dust','$vidchu_9_106_sweep','$vidchu_9_106_sill','$vidchu_9_106_others','$vidchu_9_106_remark','$vidchu_9_116_litter','$vidchu_9_116_dust','$vidchu_9_116_sweep','$vidchu_9_116_sill','$vidchu_9_116_others','$vidchu_9_116_remark','$vidchu_9_118_litter','$vidchu_9_118_dust','$vidchu_9_118_sweep','$vidchu_9_118_sill','$vidchu_9_118_other','$vidchu_9_118_remark')";
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
	header('Location:vidchu-9_am.php');
?>