<?php
	session_start();
	header('Content-Type: text/html;charset=utf-8');
	$vidchu_5_307_litter=$_POST['vidchu_5_307_litter'];
	$vidchu_5_307_leaves=$_POST['vidchu_5_307_leaves'];
	$vidchu_5_307_remark=$_POST['vidchu_5_307_remark'];
	$vidchu_5_310_litter=$_POST['vidchu_5_310_litter'];
	$vidchu_5_310_leaves=$_POST['vidchu_5_310_leaves'];
	$vidchu_5_310_remark=$_POST['vidchu_5_310_remark'];
	$vidchu_5_304_litter=$_POST['vidchu_5_304_litter'];
	$vidchu_5_304_leaves=$_POST['vidchu_5_304_leaves'];
	$vidchu_5_304_remark=$_POST['vidchu_5_304_remark'];
	$vidchu_5_212_litter=$_POST['vidchu_5_212_litter'];
	$vidchu_5_212_leaves=$_POST['vidchu_5_212_leaves'];
	$vidchu_5_212_remark=$_POST['vidchu_5_212_remark'];
	$vidchu_5_211_litter=$_POST['vidchu_5_211_litter'];
	$vidchu_5_211_leaves=$_POST['vidchu_5_211_leaves'];
	$vidchu_5_211_remark=$_POST['vidchu_5_211_remark'];
	$vidchu_5_222_litter=$_POST['vidchu_5_222_litter'];
	$vidchu_5_222_leaves=$_POST['vidchu_5_222_leaves'];
	$vidchu_5_222_others=$_POST['vidchu_5_222_others'];
	$vidchu_5_222_remark=$_POST['vidchu_5_222_remark'];
	$userid=$_SESSION['v_studynum'];
	require("conn_mysql.php");
	$sql_query="INSERT INTO vidchu_5_pm_score(user,vidchu_5_307_litter,vidchu_5_307_leaves,vidchu_5_307_remark,vidchu_5_310_litter,vidchu_5_310_leaves,vidchu_5_310_remark,vidchu_5_304_litter,vidchu_5_304_leaves,vidchu_5_304_remark,vidchu_5_212_litter,vidchu_5_212_leaves,vidchu_5_212_remark,vidchu_5_211_litter,vidchu_5_211_leaves,vidchu_5_211_remark,vidchu_5_222_litter,vidchu_5_222_leaves,vidchu_5_222_others,vidchu_5_222_remark)VALUES('$userid','$vidchu_5_307_litter','$vidchu_5_307_leaves','$vidchu_5_307_remark','$vidchu_5_310_litter','$vidchu_5_310_leaves','$vidchu_5_310_remark','$vidchu_5_304_litter','$vidchu_5_304_leaves','$vidchu_5_304_remark','$vidchu_5_212_litter','$vidchu_5_212_leaves','$vidchu_5_212_remark','$vidchu_5_211_litter','$vidchu_5_211_leaves','$vidchu_5_211_remark','$vidchu_5_222_litter','$vidchu_5_222_leaves','$vidchu_5_222_others','$vidchu_5_222_remark')";
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
	header('Location:vidchu-5_pm.php');
?>