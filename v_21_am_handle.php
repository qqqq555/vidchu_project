<?php
	session_start();
	header('Content-Type: text/html;charset=utf-8');
	$vidchu_21_304_A=$_POST['vidchu_21_304_A'];
	$vidchu_21_304_B=$_POST['vidchu_21_304_B'];
	$vidchu_21_304_C=$_POST['vidchu_21_304_C'];
	$vidchu_21_304_D=$_POST['vidchu_21_304_D'];
	$vidchu_21_304_E=$_POST['vidchu_21_304_E'];
	$vidchu_21_304_F=$_POST['vidchu_21_304_F'];
	$vidchu_21_304_G=$_POST['vidchu_21_304_G'];
	$vidchu_21_304_H=$_POST['vidchu_21_304_H'];
	$vidchu_21_304_I=$_POST['vidchu_21_304_I'];
	$vidchu_21_305_A=$_POST['vidchu_21_305_A'];
	$vidchu_21_305_B=$_POST['vidchu_21_305_B'];
	$vidchu_21_305_C=$_POST['vidchu_21_305_C'];
	$vidchu_21_305_D=$_POST['vidchu_21_305_D'];
	$vidchu_21_305_E=$_POST['vidchu_21_305_E'];
	$vidchu_21_305_F=$_POST['vidchu_21_305_F'];
	$vidchu_21_305_G=$_POST['vidchu_21_305_G'];
	$vidchu_21_305_H=$_POST['vidchu_21_305_H'];
	$vidchu_21_305_I=$_POST['vidchu_21_305_I'];
	$vidchu_21_306_A=$_POST['vidchu_21_306_A'];
	$vidchu_21_306_B=$_POST['vidchu_21_306_B'];
	$vidchu_21_306_C=$_POST['vidchu_21_306_C'];
	$vidchu_21_306_D=$_POST['vidchu_21_306_D'];
	$vidchu_21_306_E=$_POST['vidchu_21_306_E'];
	$vidchu_21_306_F=$_POST['vidchu_21_306_F'];
	$vidchu_21_306_G=$_POST['vidchu_21_306_G'];
	$vidchu_21_306_H=$_POST['vidchu_21_306_H'];
	$vidchu_21_306_I=$_POST['vidchu_21_306_I'];
	$vidchu_21_307_A=$_POST['vidchu_21_307_A'];
	$vidchu_21_307_B=$_POST['vidchu_21_307_B'];
	$vidchu_21_307_C=$_POST['vidchu_21_307_C'];
	$vidchu_21_307_D=$_POST['vidchu_21_307_D'];
	$vidchu_21_307_E=$_POST['vidchu_21_307_E'];
	$vidchu_21_307_F=$_POST['vidchu_21_307_F'];
	$vidchu_21_307_G=$_POST['vidchu_21_307_G'];
	$vidchu_21_307_H=$_POST['vidchu_21_307_H'];
	$vidchu_21_307_I=$_POST['vidchu_21_307_I'];
	$vidchu_21_308_A=$_POST['vidchu_21_308_A'];
	$vidchu_21_308_B=$_POST['vidchu_21_308_B'];
	$vidchu_21_308_C=$_POST['vidchu_21_308_C'];
	$vidchu_21_308_D=$_POST['vidchu_21_308_D'];
	$vidchu_21_308_E=$_POST['vidchu_21_308_E'];
	$vidchu_21_308_F=$_POST['vidchu_21_308_F'];
	$vidchu_21_308_G=$_POST['vidchu_21_308_G'];
	$vidchu_21_308_H=$_POST['vidchu_21_308_H'];
	$vidchu_21_308_I=$_POST['vidchu_21_308_I'];
	$vidchu_21_309_A=$_POST['vidchu_21_309_A'];
	$vidchu_21_309_B=$_POST['vidchu_21_309_B'];
	$vidchu_21_309_C=$_POST['vidchu_21_309_C'];
	$vidchu_21_309_D=$_POST['vidchu_21_309_D'];
	$vidchu_21_309_E=$_POST['vidchu_21_309_E'];
	$vidchu_21_309_F=$_POST['vidchu_21_309_F'];
	$vidchu_21_309_G=$_POST['vidchu_21_309_G'];
	$vidchu_21_309_H=$_POST['vidchu_21_309_H'];
	$vidchu_21_309_I=$_POST['vidchu_21_309_I'];
	$vidchu_21_310_A=$_POST['vidchu_21_310_A'];
	$vidchu_21_310_B=$_POST['vidchu_21_310_B'];
	$vidchu_21_310_C=$_POST['vidchu_21_310_C'];
	$vidchu_21_310_D=$_POST['vidchu_21_310_D'];
	$vidchu_21_310_E=$_POST['vidchu_21_310_E'];
	$vidchu_21_310_F=$_POST['vidchu_21_310_F'];
	$vidchu_21_310_G=$_POST['vidchu_21_310_G'];
	$vidchu_21_310_H=$_POST['vidchu_21_310_H'];
	$vidchu_21_310_I=$_POST['vidchu_21_310_I'];
	$vidchu_21_311_A=$_POST['vidchu_21_311_A'];
	$vidchu_21_311_B=$_POST['vidchu_21_311_B'];
	$vidchu_21_311_C=$_POST['vidchu_21_311_C'];
	$vidchu_21_311_D=$_POST['vidchu_21_311_D'];
	$vidchu_21_311_E=$_POST['vidchu_21_311_E'];
	$vidchu_21_311_E=$_POST['vidchu_21_311_E'];
	$vidchu_21_311_G=$_POST['vidchu_21_311_G'];
	$vidchu_21_311_H=$_POST['vidchu_21_311_H'];
	$vidchu_21_311_I=$_POST['vidchu_21_311_I'];
	$userid=$_SESSION['v_studynum'];
	require("conn_mysql.php");
	$sql_query="INSERT INTO vidchu_21_am_score(user,vidchu_21_304_A,vidchu_21_304_B,vidchu_21_304_C,vidchu_21_304_D,vidchu_21_304_E,vidchu_21_304_F,vidchu_21_304_G,vidchu_21_304_H,vidchu_21_304_I,vidchu_21_305_A,vidchu_21_305_B,vidchu_21_305_C,vidchu_21_305_D,vidchu_21_305_E,vidchu_21_305_F,vidchu_21_305_G,vidchu_21_305_H,vidchu_21_305_I,vidchu_21_306_A,vidchu_21_306_B,vidchu_21_306_C,vidchu_21_306_D,vidchu_21_306_E,vidchu_21_306_F,vidchu_21_306_G,vidchu_21_306_H,vidchu_21_306_I,vidchu_21_307_A,vidchu_21_307_B,vidchu_21_307_C,vidchu_21_307_D,vidchu_21_307_E,vidchu_21_307_F,vidchu_21_307_G,vidchu_21_307_H,vidchu_21_307_I,vidchu_21_308_A,vidchu_21_308_B,vidchu_21_308_C,vidchu_21_308_D,vidchu_21_308_E,vidchu_21_308_F,vidchu_21_308_G,vidchu_21_308_H,vidchu_21_308_I,vidchu_21_309_A,vidchu_21_309_B,vidchu_21_309_C,vidchu_21_309_D,vidchu_21_309_E,vidchu_21_309_F,vidchu_21_309_G,vidchu_21_309_H,vidchu_21_309_I,vidchu_21_310_A,vidchu_21_310_B,vidchu_21_310_C,vidchu_21_310_D,vidchu_21_310_E,vidchu_21_310_F,vidchu_21_310_G,vidchu_21_310_H,vidchu_21_310_I,vidchu_21_311_A,vidchu_21_311_B,vidchu_21_311_C,vidchu_21_311_D,vidchu_21_311_E,vidchu_21_311_F,vidchu_21_311_G,vidchu_21_311_H,vidchu_21_311_I)VALUES('$userid','$vidchu_21_304_A','$vidchu_21_304_B','$vidchu_21_304_C','$vidchu_21_304_D','$vidchu_21_304_E','$vidchu_21_304_F','$vidchu_21_304_G','$vidchu_21_304_H','$vidchu_21_304_I','$vidchu_21_305_A','$vidchu_21_305_B','$vidchu_21_305_C','$vidchu_21_305_D','$vidchu_21_305_E','$vidchu_21_305_F','$vidchu_21_305_G','$vidchu_21_305_H','$vidchu_21_305_I','$vidchu_21_306_A','$vidchu_21_306_B','$vidchu_21_306_C','$vidchu_21_306_D','$vidchu_21_306_E','$vidchu_21_306_F','$vidchu_21_306_G','$vidchu_21_306_H','$vidchu_21_306_I','$vidchu_21_307_A','$vidchu_21_307_B','$vidchu_21_307_C','$vidchu_17_220_D','$vidchu_21_307_E','$vidchu_21_307_F','$vidchu_21_307_G','$vidchu_21_307_H','$vidchu_21_307_I','$vidchu_21_308_A','$vidchu_21_308_B','$vidchu_21_308_C','$vidchu_21_308_D','$vidchu_21_308_E','$vidchu_21_308_F','$vidchu_21_308_G','$vidchu_21_308_H','$vidchu_21_308_I','$vidchu_21_309_A','$vidchu_21_309_B','$vidchu_21_309_C','$vidchu_21_309_D','$vidchu_21_309_E','$vidchu_21_309_F','$vidchu_21_309_G','$vidchu_21_309_H','$vidchu_21_309_I','$vidchu_21_310_A','$vidchu_21_310_B','$vidchu_21_310_C','$vidchu_21_310_D','$vidchu_21_310_E','$vidchu_21_310_F','$vidchu_21_310_G','$vidchu_21_310_H','$vidchu_21_310_I','$vidchu_21_311_A','$vidchu_21_311_B','$vidchu_21_311_C','$vidchu_21_311_D','$vidchu_21_311_E','$vidchu_21_311_F','$vidchu_21_311_G','$vidchu_21_311_H','$vidchu_21_311_I')";
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
	header('Location:vidchu-21_am.php');
?>
<!--
	$vidchu_11_213_litter=$_POST['vidchu_11_213_litter'];
	$vidchu_11_213_leaves=$_POST['vidchu_11_213_leaves'];
	$vidchu_11_213_dust=$_POST['vidchu_11_213_dust'];
	$vidchu_11_213_sweep=$_POST['vidchu_11_213_sweep'];
	$vidchu_11_213_sill=$_POST['vidchu_11_213_sill'];
	$vidchu_11_213_others=$_POST['vidchu_11_213_others'];
	$vidchu_11_213_remark=$_POST['vidchu_11_213_remark'];
-->