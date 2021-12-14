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
	$sql_query="INSERT INTO vidchu_8_pm_score(user,vidchu_8_208_litter,vidchu_8_208_leaves,vidchu_8_208_dust,vidchu_8_208_others,vidchu_8_208_remark,vidchu_8_206_litter,vidchu_8_206_leaves,vidchu_8_206_dust,vidchu_8_206_sweep,vidchu_8_206_others,vidchu_8_206_remark,vidchu_8_207_litter,vidchu_8_207_leaves,vidchu_8_207_dust,vidchu_8_207_remark,vidchu_8_205_litter,vidchu_8_205_leaves,vidchu_8_205_dust,vidchu_8_205_others,vidchu_8_205_remark,vidchu_8_215_litter,vidchu_8_215_leaves,vidchu_8_215_dust,vidchu_8_215_remark)VALUES('$userid','$vidchu_8_208_litter','$vidchu_8_208_leaves','$vidchu_8_208_dust','$vidchu_8_208_others','$vidchu_8_208_remark','$vidchu_8_206_litter','$vidchu_8_206_leaves','$vidchu_8_206_dust','$vidchu_8_206_sweep','$vidchu_8_206_others','$vidchu_8_206_remark','$vidchu_8_207_litter','$vidchu_8_207_leaves','$vidchu_8_207_dust','$vidchu_8_207_remark','$vidchu_8_205_litter','$vidchu_8_205_leaves','$vidchu_8_205_dust','$vidchu_8_205_others','$vidchu_8_205_remark','$vidchu_8_215_litter','$vidchu_8_215_leaves','$vidchu_8_215_dust','$vidchu_8_215_remark')";
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
	header('Location:vidchu-8_pm.php');
?>