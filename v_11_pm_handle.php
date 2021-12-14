<?php
	session_start();
	header('Content-Type: text/html;charset=utf-8');
	$vidchu_11_213_litter=$_POST['vidchu_11_213_litter'];
	$vidchu_11_213_leaves=$_POST['vidchu_11_213_leaves'];
	$vidchu_11_213_dust=$_POST['vidchu_11_213_dust'];
	$vidchu_11_213_others=$_POST['vidchu_11_213_others'];
	$vidchu_11_213_remark=$_POST['vidchu_11_213_remark'];
	$vidchu_11_203_litter=$_POST['vidchu_11_203_litter'];
	$vidchu_11_203_dust=$_POST['vidchu_11_203_dust'];
	$vidchu_11_203_others=$_POST['vidchu_11_203_others'];
	$vidchu_11_203_remark=$_POST['vidchu_11_203_remark'];
	$vidchu_11_214_litter=$_POST['vidchu_11_214_litter'];
	$vidchu_11_214_dust=$_POST['vidchu_11_214_dust'];
	$vidchu_11_214_others=$_POST['vidchu_11_214_others'];
	$vidchu_11_214_remark=$_POST['vidchu_11_214_remark'];
	$vidchu_11_204_litter=$_POST['vidchu_11_204_litter'];
	$vidchu_11_204_dust=$_POST['vidchu_11_204_dust'];
	$vidchu_11_204_others=$_POST['vidchu_11_204_others'];
	$vidchu_11_204_remark=$_POST['vidchu_11_204_remark'];
	$userid=$_SESSION['v_studynum'];
	require("conn_mysql.php");
	$sql_query="INSERT INTO vidchu_11_pm_score(user,vidchu_11_213_litter,vidchu_11_213_leaves,vidchu_11_213_dust,vidchu_11_213_others,vidchu_11_213_remark,vidchu_11_203_litter,vidchu_11_203_dust,vidchu_11_203_others,vidchu_11_203_remark,vidchu_11_214_litter,vidchu_11_214_dust,vidchu_11_214_others,vidchu_11_214_remark,vidchu_11_204_litter,vidchu_11_204_dust,vidchu_11_204_others,vidchu_11_204_remark)VALUES('$userid','$vidchu_11_213_litter','$vidchu_11_213_leaves','$vidchu_11_213_dust','$vidchu_11_213_others','$vidchu_11_213_remark','$vidchu_11_215_litter','$vidchu_11_215_leaves','$vidchu_11_215_dust','$vidchu_11_215_remark','$vidchu_11_203_litter','$vidchu_11_203_dust','$vidchu_11_203_others','$vidchu_11_203_remark','$vidchu_11_214_litter','$vidchu_11_214_dust','$vidchu_11_214_others','$vidchu_11_214_remark','$vidchu_11_204_litter','$vidchu_11_204_dust','$vidchu_11_204_others','$vidchu_11_204_remark')";
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
	header('Location:vidchu-11_pm.php');
?>