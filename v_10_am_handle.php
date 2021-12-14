<?php
	session_start();
	header('Content-Type: text/html;charset=utf-8');
	$vidchu_10_119_litter=$_POST['vidchu_10_119_litter'];
	$vidchu_10_119_leaves=$_POST['vidchu_10_119_leaves'];
	$vidchu_10_119_remark=$_POST['vidchu_10_119_remark'];
	$vidchu_10_109_litter=$_POST['vidchu_10_109_litter'];
	$vidchu_10_109_leaves=$_POST['vidchu_10_109_leaves'];
	$vidchu_10_109_remark=$_POST['vidchu_10_109_remark'];
	$vidchu_10_110_litter=$_POST['vidchu_10_110_litter'];
	$vidchu_10_110_leaves=$_POST['vidchu_10_110_leaves'];
	$vidchu_10_110_dust=$_POST['vidchu_10_110_dust'];
	$vidchu_10_110_others=$_POST['vidchu_10_110_others'];
	$vidchu_10_110_remark=$_POST['vidchu_10_110_remark'];
	$vidchu_10_217_litter=$_POST['vidchu_10_217_litter'];
	$vidchu_10_217_leaves=$_POST['vidchu_10_217_leaves'];
	$vidchu_10_217_dust=$_POST['vidchu_10_217_dust'];
	$vidchu_10_217_others=$_POST['vidchu_10_217_others'];
	$vidchu_10_217_remark=$_POST['vidchu_10_217_remark'];
	$vidchu_10_216_litter=$_POST['vidchu_10_216_litter'];
	$vidchu_10_216_dust=$_POST['vidchu_10_216_dust'];
	$vidchu_10_216_others=$_POST['vidchu_10_216_others'];
	$vidchu_10_216_remark=$_POST['vidchu_10_216_remark'];
	$userid=$_SESSION['v_studynum'];
	require("conn_mysql.php");
	$sql_query="INSERT INTO vidchu_10_am_score(user,vidchu_10_119_litter,vidchu_10_119_leaves,vidchu_10_119_remark,vidchu_10_109_litter,vidchu_10_109_leaves,vidchu_10_109_remark,vidchu_10_110_litter,vidchu_10_110_leaves,vidchu_10_110_dust,vidchu_10_110_others,vidchu_10_110_remark,vidchu_10_217_litter,vidchu_10_217_leaves,vidchu_10_217_dust,vidchu_10_217_others,vidchu_10_217_remark,vidchu_10_216_litter,vidchu_10_216_dust,vidchu_10_216_others,vidchu_10_216_remark)VALUES('$userid','$vidchu_10_119_litter','$vidchu_10_119_leaves','$vidchu_10_119_remark','$vidchu_10_109_litter','$vidchu_10_109_leaves','$vidchu_10_109_remark','$vidchu_10_110_litter','$vidchu_10_110_leaves','$vidchu_10_110_dust','$vidchu_10_110_others','$vidchu_10_110_remark','$vidchu_10_217_litter','$vidchu_10_217_leaves','$vidchu_10_217_dust','$vidchu_10_217_others','$vidchu_10_217_remark','$vidchu_10_216_litter','$vidchu_10_216_dust','$vidchu_10_216_others','$vidchu_10_216_remark')";
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
	header('Location:vidchu-10_am.php');
?>