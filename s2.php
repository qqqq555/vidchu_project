<?php
	session_start();
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset:utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<title>小衛糾-回饋</title>
		<link rel="stylesheet" href="s2setting.css">
		<script type="text/javascript">
			function finish(){
				alert ("感謝回饋，辛苦了~");
			}
		</script>
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
					<form method="post" action="s2_handle.php" style="font-weight:bold;font-size:15px;color:#4a595b;"><span style="font-size:25px;color:#4a595b;">回饋區</span>
						<fieldset style="width:60%;position:center;text-align:left;padding:20px;border:4px solid #ffd9e6;border-radius:20px;">
							<legend style="color:#4a595b;font-weight:bold;font-size:20px;">對於學妹今天的表現......</legend>
								<label style="color:#4a595b;font-weight:bold;">&ensp;請認真填寫，謝謝~</label>&ensp;&ensp;<span style="color:orange;">*注意!&ensp;&ensp;以下資料皆必填</span>
								<br>
								<br>
									<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>本時段值勤學妹組別
									<select name="v_team" required>
										<option>第一組</option>
										<option>第二組</option>
										<option>第三組</option>
										<option>第四組</option>
										<option>第五組</option>
										<option>第六組</option>
										<option>第七組</option>
										<option>第八組</option>
										<option>第九組</option>
										<option>第十組</option>
										<option>第十一組</option>
										<option>第十二組</option>
										<option>第十三組</option>
										<option>第十四組</option>
										<option>第十五組</option>
										<option>第十六組</option>
										<option>第十七組</option>
										<option>第十八組</option>
										<option>第十九組</option>
										<option>第二十組</option>
										<option>第二十一組</option>
										<option>第二十二組</option>
									</select>
									<br>
									<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>本時段值勤學妹值勤星期
									<select name="v_week" required>
										<option>星期五</option>
										<option>星期一</option>
										<option>星期二</option>
										<option>星期三</option>
										<option>星期四</option>

									</select>
									<br>
									<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>時段
									<select name="v_time" required>
										<option>上午</option>
										<option>下午</option>
									</select>
									<br>
									<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>是否準時值勤
									<select name="on_duty_or_not" required>
										<option>否</option>
										<option>是</option>
									</select>
									<br>
									<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>學妹簽到時間
									<input name="date" type="datetime-local"></input>&ensp;&ensp;<span style="color:orange;">*注意!&ensp;&ensp;必填 !!!!</span>
									<br>
									<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>是否評完所有項目
									<select name="finish_or_not" required>
										<option>否</option>
										<option>是</option>
									</select>
									<br>
									<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>學妹評分 優/缺點 (兩者擇一，但至少需填一項)<br>
									&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<textarea name="pros_and_cons" rows="4" cols="50" placeholder=" 態度認真 、 未完整評分該次所有範圍 等" required></textarea>
									<br>
									<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>學妹這次評分可以改進的地方<br>
									&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<textarea name="improvement" rows="4" cols="50" placeholder=" 準時值勤 等" required></textarea>
									<br>
						</fieldset>
						<br>
						<input type="submit" name="submit" value="送出" onclick="finish()" style="background-color:#66a8a8;color:white;border:solid #66a8a8;border-radius:20px;font-size:15px;"></input>
						<br>
						<br>
					</form>
				</div>
		</div>
			</center>	
		<br>
		</div>
		<br>
		<footer>
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