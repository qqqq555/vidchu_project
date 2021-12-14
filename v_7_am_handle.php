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
	$sql_query="INSERT INTO vidchu_7_am_score(user,vidchu_7_220_litter,vidchu_7_220_leaves,vidchu_7_220_remark,vidchu_7_104_litter,vidchu_7_104_leaves,vidchu_7_104_remark,vidchu_7_115_litter,vidchu_7_115_leaves,vidchu_7_115_dust,vidchu_7_115_others,vidchu_7_115_remark)VALUES('$userid','$vidchu_7_220_litter','$vidchu_7_220_leaves','$vidchu_7_220_remark','$vidchu_7_104_litter','$vidchu_7_104_leaves','$vidchu_7_104_remark','$vidchu_7_115_litter','$vidchu_7_115_leaves','$vidchu_7_115_dust','$vidchu_7_115_others','$vidchu_7_115_remark')";
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
	header('Location:vidchu-7_am.php');
?>