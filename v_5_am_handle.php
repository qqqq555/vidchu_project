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
	$sql_query="INSERT INTO vidchu_5_am_score(user,vidchu_5_307_litter,vidchu_5_307_leaves,vidchu_5_307_remark,vidchu_5_310_litter,vidchu_5_310_leaves,vidchu_5_310_remark,vidchu_5_304_litter,vidchu_5_304_leaves,vidchu_5_304_remark,vidchu_5_212_litter,vidchu_5_212_leaves,vidchu_5_212_remark,vidchu_5_211_litter,vidchu_5_211_leaves,vidchu_5_211_remark,vidchu_5_222_litter,vidchu_5_222_leaves,vidchu_5_222_others,vidchu_5_222_remark)VALUES('$userid','$vidchu_5_307_litter','$vidchu_5_307_leaves','$vidchu_5_307_remark','$vidchu_5_310_litter','$vidchu_5_310_leaves','$vidchu_5_310_remark','$vidchu_5_304_litter','$vidchu_5_304_leaves','$vidchu_5_304_remark','$vidchu_5_212_litter','$vidchu_5_212_leaves','$vidchu_5_212_remark','$vidchu_5_211_litter','$vidchu_5_211_leaves','$vidchu_5_211_remark','$vidchu_5_222_litter','$vidchu_5_222_leaves','$vidchu_5_222_others','$vidchu_5_222_remark')";
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
	header('Location:vidchu-5_am.php');
?>