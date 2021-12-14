<?php
	session_start();
	header('Content-Type: text/html;charset=utf-8');
	$vidchu_8_208_litter=$_POST['vidchu_8_208_litter'];
	$vidchu_8_208_leaves=$_POST['vidchu_8_208_leaves'];
	$vidchu_8_208_dust=$_POST['vidchu_8_208_dust'];
	$vidchu_8_208_others=$_POST['vidchu_8_208_others'];
	$vidchu_8_208_remark=$_POST['vidchu_8_208_remark'];
	$vidchu_8_206_litter=$_POST['vidchu_8_206_litter'];
	$vidchu_8_206_leaves=$_POST['vidchu_8_206_leaves'];
	$vidchu_8_206_dust=$_POST['vidchu_8_206_dust'];
	$vidchu_8_206_sweep=$_POST['vidchu_8_206_sweep'];
	$vidchu_8_206_others=$_POST['vidchu_8_206_others'];
	$vidchu_8_206_remark=$_POST['vidchu_8_206_remark'];
	$vidchu_8_207_litter=$_POST['vidchu_8_207_litter'];
	$vidchu_8_207_leaves=$_POST['vidchu_8_207_leaves'];
	$vidchu_8_207_dust=$_POST['vidchu_8_207_dust'];
	$vidchu_8_207_remark=$_POST['vidchu_8_207_remark'];
	$vidchu_8_205_litter=$_POST['vidchu_8_205_litter'];
	$vidchu_8_205_leaves=$_POST['vidchu_8_205_leaves'];
	$vidchu_8_205_dust=$_POST['vidchu_8_205_dust'];
	$vidchu_8_205_others=$_POST['vidchu_8_205_others'];
	$vidchu_8_205_remark=$_POST['vidchu_8_205_remark'];
	$vidchu_8_215_litter=$_POST['vidchu_8_215_litter'];
	$vidchu_8_215_leaves=$_POST['vidchu_8_215_leaves'];
	$vidchu_8_215_dust=$_POST['vidchu_8_215_dust'];
	$vidchu_8_215_remark=$_POST['vidchu_8_215_remark'];
	$userid=$_SESSION['v_studynum'];
	require("conn_mysql.php");
	$sql_query="INSERT INTO vidchu_8_am_score(user,vidchu_8_208_litter,vidchu_8_208_leaves,vidchu_8_208_dust,vidchu_8_208_others,vidchu_8_208_remark,vidchu_8_206_litter,vidchu_8_206_leaves,vidchu_8_206_dust,vidchu_8_206_sweep,vidchu_8_206_others,vidchu_8_206_remark,vidchu_8_207_litter,vidchu_8_207_leaves,vidchu_8_207_dust,vidchu_8_207_remark,vidchu_8_205_litter,vidchu_8_205_leaves,vidchu_8_205_dust,vidchu_8_205_others,vidchu_8_205_remark,vidchu_8_215_litter,vidchu_8_215_leaves,vidchu_8_215_dust,vidchu_8_215_remark)VALUES('$userid','$vidchu_8_208_litter','$vidchu_8_208_leaves','$vidchu_8_208_dust','$vidchu_8_208_others','$vidchu_8_208_remark','$vidchu_8_206_litter','$vidchu_8_206_leaves','$vidchu_8_206_dust','$vidchu_8_206_sweep','$vidchu_8_206_others','$vidchu_8_206_remark','$vidchu_8_207_litter','$vidchu_8_207_leaves','$vidchu_8_207_dust','$vidchu_8_207_remark','$vidchu_8_205_litter','$vidchu_8_205_leaves','$vidchu_8_205_dust','$vidchu_8_205_others','$vidchu_8_205_remark','$vidchu_8_215_litter','$vidchu_8_215_leaves','$vidchu_8_215_dust','$vidchu_8_215_remark')";
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
	header('Location:vidchu-8_am.php');
?>