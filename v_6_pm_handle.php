<?php
	session_start();
	header('Content-Type: text/html;charset=utf-8');
	$vidchu_6_209_litter=$_POST['vidchu_6_209_litter'];
	$vidchu_6_209_leaves=$_POST['vidchu_6_209_leaves'];
	$vidchu_6_209_dust=$_POST['vidchu_6_209_dust'];
	$vidchu_6_209_remark=$_POST['vidchu_6_209_remark'];
	$vidchu_6_218_litter=$_POST['vidchu_6_218_litter'];
	$vidchu_6_218_leaves=$_POST['vidchu_6_218_leaves'];
	$vidchu_6_218_dust=$_POST['vidchu_6_218_dust'];
	$vidchu_6_218_remark=$_POST['vidchu_6_218_remark'];
	$vidchu_6_219_litter=$_POST['vidchu_6_219_litter'];
	$vidchu_6_219_dust=$_POST['vidchu_6_219_dust'];
	$vidchu_6_219_remark=$_POST['vidchu_6_219_remark'];
	$vidchu_6_221_litter=$_POST['vidchu_6_221_litter'];
	$vidchu_6_221_dust=$_POST['vidchu_6_221_dust'];
	$vidchu_6_221_others=$_POST['vidchu_6_221_others'];
	$vidchu_6_221_remark=$_POST['vidchu_6_221_remark'];
	$vidchu_6_311_litter=$_POST['vidchu_6_311_litter'];
	$vidchu_6_311_dust=$_POST['vidchu_6_311_dust'];
	$vidchu_6_311_remark=$_POST['vidchu_6_311_remark'];
	$vidchu_6_312_litter=$_POST['vidchu_6_312_litter'];
	$vidchu_6_312_leaves=$_POST['vidchu_6_312_leaves'];
	$vidchu_6_312_dust=$_POST['vidchu_6_312_dust'];
	$vidchu_6_312_remark=$_POST['vidchu_6_312_remark'];
	$userid=$_SESSION['v_studynum'];
	require("conn_mysql.php");
	$sql_query="INSERT INTO vidchu_6_pm_score(user,vidchu_6_209_litter,vidchu_6_209_leaves,vidchu_6_209_dust,vidchu_6_209_remark,vidchu_6_218_litter,vidchu_6_218_leaves,vidchu_6_218_dust,vidchu_6_218_remark,vidchu_6_219_litter,vidchu_6_219_dust,vidchu_6_219_remark,vidchu_6_221_litter,vidchu_6_221_dust,vidchu_6_221_others,vidchu_6_221_remark,vidchu_6_311_litter,vidchu_6_311_dust,vidchu_6_311_remark,vidchu_6_312_litter,vidchu_6_312_leaves,vidchu_6_312_dust,vidchu_6_312_remark)VALUES('$userid','$vidchu_6_209_litter','$vidchu_6_209_leaves','$vidchu_6_209_dust','$vidchu_6_209_remark','$vidchu_6_218_litter','$vidchu_6_218_leaves','$vidchu_6_218_dust','$vidchu_6_218_remark','$vidchu_6_219_litter','$vidchu_6_219_dust','$vidchu_6_219_remark','$vidchu_6_221_litter','$vidchu_6_221_dust','$vidchu_6_221_others','$vidchu_6_221_remark','$vidchu_6_311_litter','$vidchu_6_311_dust','$vidchu_6_311_remark','$vidchu_6_312_litter','$vidchu_6_312_leaves','$vidchu_6_312_dust','$vidchu_6_312_remark')";
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
	header('Location:vidchu-6_pm.php');
?>