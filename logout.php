<html>
	<head>
		<style content="text/css">
			@import url(HanyiSentyJournal.woff);
			@import url(setofont.ttf);
			body{
				color:#4a595b;
				background-color:#cbe2e4;
				font-family:"Hanyi Senty Journal","setofont","微軟正黑體" !important;
			}
			center{
				color:#4a595b;
				font-size:40px;
				font-weight:bold;
				position:relative;
				top:20%;
				font-family:"Hanyi Senty Journal","setofont","微軟正黑體" !important;
			}
		</style>
	<head>
	<!--
		1仁2義3禮4智5忠6孝7博8愛9和10平
		11誠12信13敬14業15樂16群17簡18捷19敏20慧
		21公22廉
	-->
	<body>
		<marquee behavior="ALTERNATE" width="80%" loop="1" scrolldelay="105" style="color:#4a595b;font-size:20px;position:relative;top:15px;">衛生糾察暨校園整潔維護系統</marquee>
		<?php
			session_start();
			session_destroy();
			echo "<center>登出中...</center> ";
			header('refresh:3;url=index.html');
			exit;
		?>
	<body>
</html>