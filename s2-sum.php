<?php
	session_start();
	$x=$_SESSION['sv_studynum'];
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset:utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<title>小衛糾-值勤統計</title>
		<link rel="stylesheet" href="s2setting.css">
		</head>
	<body>
		<div class="wrapper">
			<header>
				<span style="font-size:40px;position:fixed;top:10px;left:20px;padding:10px;color:#465146;">小衛糾</span>
				<span style="position:absolute;right:5px;top:20px;padding:10px;">
					<span class="line_left"></span>
					<li class="button_css" onclick="location.href='index.html'">首頁</li>
					<span class="line_left"></span>
						<li class="button_css" onclick="location.href='s2.php'">小衛糾回饋</li>
						<span class="line_left"></span>
						<li class="button_css" onclick="location.href='s2-sum.php'">值勤統計</li>
						<span class="line_left"></span>
						<li class='button_css'>
						<?php
							echo $_SESSION['sv_studynum'] ;
						?>
						</li>
						<span class="line_left"></span>
						<li class="button_css" onclick="location.href='logout.php'">登出</li>
						<span class="line_left"></span>
				</span>
			</header>
			<center>
				<img src="yixianlow.png" alt="逸仙樓" style="width:100%"></img>
				<marquee behavior="behavior" width="80%" loop="50" style="color:#4a595b;font-size:20px;position:relative;top:15px;">衛生糾察暨校園整潔維護系統</marquee>
				<div style="background-color:white;width:100%;position:relative;right:0;top:15px;">
					<div style="font-weight:bold;font-size:25px;color:#4a595b;">統計</div>
						<div style="width:50%;position:center;text-align:left;padding:20px;border:4px solid #ffd9e6;border-radius:20px;">
							<legend style="color:#4a595b;font-weight:bold;font-size:20px;">出缺勤狀況......</legend>
								<br>&ensp;&ensp;出席次數:
																			<?php
																				require("conn_mysql.php");
																				$sql_query="SELECT sv_work FROM sv WHERE sv_studynum='$x'";
																				$result1=mysqli_query($db_link,$sql_query) or die ("新增失敗");
																				$row= mysqli_fetch_assoc($result1);
																				echo $row['sv_work'] ;
																			?>
								<br><br>&ensp;&ensp;出席次數與服務時數有關，有誤請洽大衛糾
                            </legend>
                        </div>
                        <br>
                    </div>
				</div>
			</center>						
		</div>
		<footer>
		<br>
			<center>
					<span style="color:#4a595b;">
						衛糾相關事務&ensp;
						<span class="line_left">&ensp;</span>
						&ensp;&ensp;衛生組組長 林媼彩 &ensp;電話： 0935866031 &ensp;Line ID：audrylin<br>
						網站相關錯誤請聯絡&ensp;
						<span class="line_left">&ensp;</span>
						&ensp;&ensp;電神eating LineID： eva1235
						<span class="line_left">&ensp;</span>
						Dora s990004@baps.tp.edu.tw
					</span>
					<br>
			</center>
		</footer>
	</body>
</html>