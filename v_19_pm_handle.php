<?php
	session_start();
	header('Content-Type: text/html;charset=utf-8');
	$vidchu_19_201_litter=$_POST['vidchu_19_201_litter'];
	$vidchu_19_201_dust=$_POST['vidchu_19_201_dust'];
	$vidchu_19_201_others=$_POST['vidchu_19_201_others'];
	$vidchu_19_201_remark=$_POST['vidchu_19_201_remark'];
	$vidchu_19_204_A=$_POST['vidchu_19_204_A'];
	$vidchu_19_204_B=$_POST['vidchu_19_204_B'];
	$vidchu_19_204_C=$_POST['vidchu_19_204_C'];
	$vidchu_19_204_D=$_POST['vidchu_19_204_D'];
	$vidchu_19_204_E=$_POST['vidchu_19_204_E'];
	$vidchu_19_204_F=$_POST['vidchu_19_204_F'];
	$vidchu_19_204_G=$_POST['vidchu_19_204_G'];
	$vidchu_19_204_H=$_POST['vidchu_19_204_H'];
	$vidchu_19_204_I=$_POST['vidchu_19_204_I'];
	$vidchu_19_205_A=$_POST['vidchu_19_205_A'];
	$vidchu_19_205_B=$_POST['vidchu_19_205_B'];
	$vidchu_19_205_C=$_POST['vidchu_19_205_C'];
	$vidchu_19_205_D=$_POST['vidchu_19_205_D'];
	$vidchu_19_205_E=$_POST['vidchu_19_205_E'];
	$vidchu_19_205_F=$_POST['vidchu_19_205_F'];
	$vidchu_19_205_G=$_POST['vidchu_19_205_G'];
	$vidchu_19_205_H=$_POST['vidchu_19_205_H'];
	$vidchu_19_205_I=$_POST['vidchu_19_205_I'];
	$vidchu_19_213_A=$_POST['vidchu_19_213_A'];
	$vidchu_19_213_B=$_POST['vidchu_19_213_B'];
	$vidchu_19_213_C=$_POST['vidchu_19_213_C'];
	$vidchu_19_213_D=$_POST['vidchu_19_213_D'];
	$vidchu_19_213_E=$_POST['vidchu_19_213_E'];
	$vidchu_19_213_F=$_POST['vidchu_19_213_F'];
	$vidchu_19_213_G=$_POST['vidchu_19_213_G'];
	$vidchu_19_213_H=$_POST['vidchu_19_213_H'];
	$vidchu_19_213_I=$_POST['vidchu_19_213_I'];
	$vidchu_19_214_A=$_POST['vidchu_19_214_A'];
	$vidchu_19_214_B=$_POST['vidchu_19_214_B'];
	$vidchu_19_214_C=$_POST['vidchu_19_214_C'];
	$vidchu_19_214_D=$_POST['vidchu_19_214_D'];
	$vidchu_19_214_E=$_POST['vidchu_19_214_E'];
	$vidchu_19_214_F=$_POST['vidchu_19_214_F'];
	$vidchu_19_214_G=$_POST['vidchu_19_214_G'];
	$vidchu_19_214_H=$_POST['vidchu_19_214_H'];
	$vidchu_19_214_I=$_POST['vidchu_19_214_I'];
	$vidchu_19_215_A=$_POST['vidchu_19_215_A'];
	$vidchu_19_215_B=$_POST['vidchu_19_215_B'];
	$vidchu_19_215_C=$_POST['vidchu_19_215_C'];
	$vidchu_19_215_D=$_POST['vidchu_19_215_D'];
	$vidchu_19_215_E=$_POST['vidchu_19_215_E'];
	$vidchu_19_215_F=$_POST['vidchu_19_215_F'];
	$vidchu_19_215_G=$_POST['vidchu_19_215_G'];
	$vidchu_19_215_H=$_POST['vidchu_19_215_H'];
	$vidchu_19_215_I=$_POST['vidchu_19_215_I'];
	$vidchu_19_216_A=$_POST['vidchu_19_216_A'];
	$vidchu_19_216_B=$_POST['vidchu_19_216_B'];
	$vidchu_19_216_C=$_POST['vidchu_19_216_C'];
	$vidchu_19_216_D=$_POST['vidchu_19_216_D'];
	$vidchu_19_216_E=$_POST['vidchu_19_216_E'];
	$vidchu_19_216_F=$_POST['vidchu_19_216_F'];
	$vidchu_19_216_G=$_POST['vidchu_19_216_G'];
	$vidchu_19_216_H=$_POST['vidchu_19_216_H'];
	$vidchu_19_216_I=$_POST['vidchu_19_216_I'];
	$userid=$_SESSION['v_studynum'];
	require("conn_mysql.php");
	$sql_query="INSERT INTO vidchu_19_pm_score(user,vidchu_19_201_litter,vidchu_19_201_dust,vidchu_19_201_others,vidchu_19_201_remark,vidchu_19_204_A,vidchu_19_204_B,vidchu_19_204_C,vidchu_19_204_D,vidchu_19_204_E,vidchu_19_204_F,vidchu_19_204_G,vidchu_19_204_H,vidchu_19_204_I,vidchu_19_205_A,vidchu_19_205_B,vidchu_19_205_C,vidchu_19_205_D,vidchu_19_205_E,vidchu_19_205_F,vidchu_19_205_G,vidchu_19_205_H,vidchu_19_205_I,vidchu_19_213_A,vidchu_19_213_B,vidchu_19_213_C,vidchu_19_213_D,vidchu_19_213_E,vidchu_19_213_F,vidchu_19_213_G,vidchu_19_213_H,vidchu_19_213_I,vidchu_19_214_A,vidchu_19_214_B,vidchu_19_214_C,vidchu_19_214_D,vidchu_19_214_E,vidchu_19_214_F,vidchu_19_214_G,vidchu_19_214_H,vidchu_19_214_I,vidchu_19_215_A,vidchu_19_215_B,vidchu_19_215_C,vidchu_19_215_D,vidchu_19_215_E,vidchu_19_215_F,vidchu_19_215_G,vidchu_19_215_H,vidchu_19_215_I,vidchu_19_216_A,vidchu_19_216_B,vidchu_19_216_C,vidchu_19_216_D,vidchu_19_216_E,vidchu_19_216_F,vidchu_19_216_G,vidchu_19_216_H,vidchu_19_216_I)VALUES('$userid','$vidchu_19_201_litter','$vidchu_19_201_dust','$vidchu_19_201_others','$vidchu_19_201_remark','$vidchu_19_204_A','$vidchu_19_204_B','$vidchu_19_204_C','$vidchu_19_204_D','$vidchu_19_204_E','$vidchu_19_204_F','$vidchu_19_204_G','$vidchu_19_204_H','$vidchu_19_204_I','$vidchu_19_205_A','$vidchu_19_205_B','$vidchu_19_205_C','$vidchu_19_205_D','$vidchu_19_205_E','$vidchu_19_205_F','$vidchu_19_205_G','$vidchu_19_205_H','$vidchu_19_205_I','$vidchu_19_213_A','$vidchu_19_213_B','$vidchu_19_213_C','$vidchu_19_213_D','$vidchu_19_213_E','$vidchu_19_213_F','$vidchu_19_213_G','$vidchu_19_213_H','$vidchu_19_213_I','$vidchu_19_214_A','$vidchu_19_214_B','$vidchu_19_214_C','$vidchu_19_214_D','$vidchu_19_214_E','$vidchu_19_214_F','$vidchu_19_214_G','$vidchu_19_214_H','$vidchu_19_214_I','$vidchu_19_215_A','$vidchu_19_215_B','$vidchu_19_215_C','$vidchu_19_215_D','$vidchu_19_215_E','$vidchu_19_215_F','$vidchu_19_215_G','$vidchu_19_215_H','$vidchu_19_215_I','$vidchu_19_216_A','$vidchu_19_216_B','$vidchu_19_216_C','$vidchu_19_216_D','$vidchu_19_216_E','$vidchu_19_216_F','$vidchu_19_216_G','$vidchu_19_216_H','$vidchu_19_216_I')";
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
	header('Location:vidchu-19_pm.php');
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