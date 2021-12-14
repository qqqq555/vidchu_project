<?php
	session_start();
	header('Content-Type: text/html;charset=utf-8');
	$vidchu_4_306_litter=$_POST['vidchu_4_306_litter'];
	$vidchu_4_306_dust=$_POST['vidchu_4_306_dust'];
	$vidchu_4_306_sill=$_POST['vidchu_4_306_sill'];
	$vidchu_4_306_others=$_POST['vidchu_4_306_others'];
	$vidchu_4_306_remark=$_POST['vidchu_4_306_remark'];
	$vidchu_4_308_litter=$_POST['vidchu_4_308_litter'];
	$vidchu_4_308_leaves=$_POST['vidchu_4_308_leaves'];
	$vidchu_4_308_dust=$_POST['vidchu_4_308_dust'];
	$vidchu_4_308_sill=$_POST['vidchu_4_308_sill'];
	$vidchu_4_308_others=$_POST['vidchu_4_308_others'];
	$vidchu_4_308_remark=$_POST['vidchu_4_308_remark'];
	$vidchu_4_309_litter=$_POST['vidchu_4_309_litter'];
	$vidchu_4_309_dust=$_POST['vidchu_4_309_dust'];
	$vidchu_4_309_sill=$_POST['vidchu_4_309_sill'];
	$vidchu_4_309_others=$_POST['vidchu_4_309_others'];
	$vidchu_4_309_remark=$_POST['vidchu_4_309_remark'];
	$vidchu_4_314_litter=$_POST['vidchu_4_314_litter'];
	$vidchu_4_314_leaves=$_POST['vidchu_4_314_leaves'];
	$vidchu_4_314_dust=$_POST['vidchu_4_314_dust'];
	$vidchu_4_314_sweep=$_POST['vidchu_4_314_sweep'];
	$vidchu_4_314_remark=$_POST['vidchu_4_314_remark'];
	$vidchu_4_210_litter=$_POST['vidchu_4_210_litter'];
	$vidchu_4_210_leaves=$_POST['vidchu_4_210_leaves'];
	$vidchu_4_210_dust=$_POST['vidchu_4_210_dust'];
	$vidchu_4_210_others=$_POST['vidchu_4_210_others'];
	$vidchu_4_210_remark=$_POST['vidchu_4_210_remark'];
	$userid=$_SESSION['v_studynum'];
	require("conn_mysql.php");
	$sql_query="INSERT INTO vidchu_4_am_score(user,vidchu_4_306_litter,vidchu_4_306_dust,vidchu_4_306_sill,vidchu_4_306_others,vidchu_4_306_remark,vidchu_4_308_litter,vidchu_4_308_leaves,vidchu_4_308_dust,vidchu_4_308_sill,vidchu_4_308_others,vidchu_4_308_remark,vidchu_4_309_litter,vidchu_4_309_dust,vidchu_4_309_sill,vidchu_4_309_others,vidchu_4_309_remark,vidchu_4_314_litter,vidchu_4_314_leaves,vidchu_4_314_dust,vidchu_4_314_sweep,vidchu_4_314_remark,vidchu_4_210_litter,vidchu_4_210_leaves,vidchu_4_210_dust,vidchu_4_210_others,vidchu_4_210_remark)
				VALUES('$userid','$vidchu_4_306_litter','$vidchu_4_306_dust','$vidchu_4_306_sill','$vidchu_4_306_others','$vidchu_4_306_remark','$vidchu_4_308_litter','$vidchu_4_308_leaves','$vidchu_4_308_dust','$vidchu_4_308_sill','$vidchu_4_308_others','$vidchu_4_308_remark','$vidchu_4_309_litter','$vidchu_4_309_dust','$vidchu_4_309_sill','$vidchu_4_309_others','$vidchu_4_309_remark','$vidchu_4_314_litter','$vidchu_4_314_leaves','$vidchu_4_314_dust','$vidchu_4_314_sweep','$vidchu_4_314_remark','$vidchu_4_210_litter','$vidchu_4_210_leaves','$vidchu_4_210_dust','$vidchu_4_210_others','$vidchu_4_210_remark')";
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
	header('Location:vidchu-4_am.php');
?>