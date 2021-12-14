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
	$sql_query="INSERT INTO vidchu_3_am_score(user,vidchu_3_302_litter,vidchu_3_302_leaves,vidchu_3_302_dust,vidchu_3_302_sill,vidchu_3_302_others,vidchu_3_302_remark,vidchu_3_303_litter,vidchu_3_303_leaves,vidchu_3_303_dust,vidchu_3_303_sill,vidchu_3_303_others,vidchu_3_303_remark,vidchu_3_301_litter,vidchu_3_301_leaves,vidchu_3_301_dust,vidchu_3_301_sill,vidchu_3_301_others,vidchu_3_301_remark)VALUES('$userid','$vidchu_3_302_litter','$vidchu_3_302_leaves','$vidchu_3_302_dust','$vidchu_3_302_sill','$vidchu_3_302_others','$vidchu_3_302_remark','$vidchu_3_303_litter','$vidchu_3_303_leaves','$vidchu_3_303_dust','$vidchu_3_303_sill','$vidchu_3_303_others','$vidchu_3_303_remark','$vidchu_3_301_litter','$vidchu_3_301_leaves','$vidchu_3_301_dust','$vidchu_3_301_sill','$vidchu_3_301_others','$vidchu_3_301_remark')";
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
	header('Location:vidchu-3_am.php');
?>