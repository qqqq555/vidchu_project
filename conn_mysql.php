<?php
	$db_link=mysqli_connect("localhost","root","root","110-1project");
	if(!$db_link){
		die("<center style='margin-top:20px;'>資料庫連線失敗<br></center>");
	}
	mysqli_query($db_link,"SET NAMES 'utf8'");

?>