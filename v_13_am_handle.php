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
	$sql_query="INSERT INTO vidchu_13_am_score(user,vidchu_13_105_litter,vidchu_13_105_dust,vidchu_13_105_sweep,vidchu_13_105_sill,vidchu_13_105_others,vidchu_13_105_remark,vidchu_13_111_litter,vidchu_13_111_dust,vidchu_13_111_sweep,vidchu_13_111_sill,vidchu_13_111_others,vidchu_13_111_remark,vidchu_13_117_litter,vidchu_13_117_dust,vidchu_13_117_sweep,vidchu_13_117_sill,vidchu_13_117_others,vidchu_13_117_remark)VALUES('$userid','$vidchu_13_105_litter','$vidchu_13_105_dust','$vidchu_13_105_sweep','$vidchu_13_105_sill','$vidchu_13_105_others','$vidchu_13_105_remark','$vidchu_13_111_litter','$vidchu_13_111_dust','$vidchu_13_111_sweep','$vidchu_13_111_sill','$vidchu_13_111_others','$vidchu_13_111_remark','$vidchu_13_117_litter','$vidchu_13_117_dust','$vidchu_13_117_sweep','$vidchu_13_117_sill','$vidchu_13_117_others','$vidchu_13_117_remark')";
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
	header('Location:vidchu-13_am.php');
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