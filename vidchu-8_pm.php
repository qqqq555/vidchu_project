r<?php
	session_start();
	if(!isset($_SESSION["v_studynum"]) || ($_SESSION["v_studynum"]=="")){
					header('refresh:0 ; url=not_login.php');
				}
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset:utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<title>衛糾-第八組下午</title>
		<link rel="stylesheet" href="setting.css">
		<script type="text/javascript" src="comfirm_and_alert.js"></script>
	</head>
	<body>
		<div class="wrapper">
			<header>
				<span style="font-size:40px;position:fixed;top:10px;left:20px;padding:10px;color:#4a595b;">衛糾</span>
				<span style="position:absolute;right:5px;top:20px;padding:10px;">
					<span class="line_left"></span>
					<li class="button_css" onclick="location.href='index.html'">首頁</li>
					<span class="line_left"></span>
						<li class="button_css" onclick="location.href='vidchu-8_pm.php'">衛糾評分</li>
						<span class="line_left"></span>
						<li class='button_css'>帳號&ensp;&ensp;
						<?php
							echo $_SESSION['v_studynum'] ;
						?>
						</li>
						<span class="line_left"></span>
						<li class="button_css" onclick="location.href='logout.php'">登出</li>
						<span class="line_left"></span>
				</span>
			</header>
			<center>
				<img src="leetong.png" alt="禮堂" style="width:100%;"></img>
				<marquee behavior="behavior" width="80%" SCROLLAMOUNT="10" loop="50" style="color:#4a595b;font-size:20px;position:relative;top:15px;">衛生糾察暨校園整潔維護系統</marquee>
				<div style="z-index:20;position:relative;top:15px;background-color:white;border:0px solid white;padding:20px;width:80%;border-radius:20px;">
					<h2 style="color:#4a595b;">評分地圖</h2>
					<img src="map.jpg" alt="評分地圖" style="z-index:-1;border-radius:20px;width:80%;"></img>
				</div>
				<br>
				<form method="post" action="v_8_pm_handle.php" style="background-color:white;width:100%;right:0;position:relative;top:40px;">
					<div style="font-weight:bold;font-size:25px;color:#4a595b;width:100%;">評分區</div>
					<fieldset style="width:60%;position:center;text-align:left;padding:20px;border:4px solid #ffd9e6;border-radius:20px;">
						<legend style="color:#4a595b;font-weight:bold;font-size:20px;">二愛</legend>
							<label style="color:#4a595b;font-weight:bold;">&ensp;(不含勵志長廊)面中山樓左側勵志長廊到右側木頭平台紅磚地x21<br>+紅磚地及排球場間草地+大樹旁木桌椅(檢查人為垃圾)</label>
							<br>
							<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>人為垃圾
								<select name="vidchu_8_208_litter" required>
									<option>不加不扣</option>
									<option>扣分</option>
								</select>
								<br>
								<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>落葉
								<select name="vidchu_8_208_leaves" required>
									<option>不加不扣</option>
									<option>扣分</option>
								</select>
								<br>
								<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>灰塵
								<select name="vidchu_8_208_dust" required>
									<option>不加不扣</option>
									<option>扣分</option>
								</select>
								<br>
								<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>其他
								<select name="vidchu_8_208_others" required>
									<option>不加不扣</option>
									<option>扣分</option>
								</select>
								<br>
								&ensp;&ensp;&ensp;&ensp;&ensp;扣分備註&ensp;<span style="color:orange;">*扣分必填</span><br>
								&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<textarea name="vidchu_8_208_remark" rows="4" cols="50" placeholder=" ex : 原木平台有衛生紙"></textarea>
								<br>
						
					</fieldset>	
					<fieldset style="width:60%;position:center;text-align:left;padding:20px;border:4px solid #ffd9e6;border-radius:20px;">
						<legend style="color:#4a595b;font-weight:bold;font-size:20px;">二孝</legend>
							<label style="color:#4a595b;font-weight:bold;">&ensp;中山樓1F多功能教室外走廊+多功能教室③外1F平台(含平台樓梯)<br>+平台樓梯及紅磚地前灰磚地+靠莊敬樓木頭平台(含飲水機)<br>+自強樓樓梯②前小樓梯前方到木頭平台2x6紅磚地</label>
							<br>
							<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>人為垃圾
								<select name="vidchu_8_206_litter" required>
									<option>不加不扣</option>
									<option>扣分</option>
								</select>
								<br>
								<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>落葉
								<select name="vidchu_8_206_leaves" required>
									<option>不加不扣</option>
									<option>扣分</option>
								</select>
								<br>
								<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>灰塵
								<select name="vidchu_8_206_dust" required>
									<option>不加不扣</option>
									<option>扣分</option>
								</select>
								<br>
								<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>掃具排列
								<select name="vidchu_8_206_sweep" required>
									<option>不加不扣</option>
									<option>扣分</option>
								</select>
								<br>
								<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>其他(飲水機)
								<select name="vidchu_8_206_others" required>
									<option>不加不扣</option>
									<option>扣分</option>
								</select>
								<br>
								&ensp;&ensp;&ensp;&ensp;&ensp;扣分備註&ensp;<span style="color:orange;">*扣分必填</span><br>
								&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<textarea name="vidchu_8_206_remark" rows="4" cols="50" placeholder=" ex : 原木平台有衛生紙"></textarea>
								<br>
						
					</fieldset>	
					<fieldset style="width:60%;position:center;text-align:left;padding:20px;border:4px solid #ffd9e6;border-radius:20px;">
						<legend style="color:#4a595b;font-weight:bold;font-size:20px;">二博</legend>
							<label style="color:#4a595b;font-weight:bold;">&ensp;面中山樓左側1~3F樓梯+3座小樓梯(靠莊敬樓木頭平台右側、中山樓左側男廁外<br>、中山樓往勵志的小樓梯)+靠莊敬樓木頭平台右側灰磚地+樂旗器材室前灰色方形平台</label>
							<br>
							<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>人為垃圾
								<select name="vidchu_8_207_litter" required>
									<option>不加不扣</option>
									<option>扣分</option>
								</select>
								<br>
								<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>落葉
								<select name="vidchu_8_207_leaves" required>
									<option>不加不扣</option>
									<option>扣分</option>
								</select>
								<br>
								<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>灰塵
								<select name="vidchu_8_207_dust" required>
									<option>不加不扣</option>
									<option>扣分</option>
								</select>
								<br>
								&ensp;&ensp;&ensp;&ensp;&ensp;扣分備註&ensp;<span style="color:orange;">*扣分必填</span><br>
								&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<textarea name="vidchu_8_207_remark" rows="4" cols="50" placeholder=" ex : 原木平台有衛生紙"></textarea>
								<br>
						
					</fieldset>	
					<fieldset style="width:60%;position:center;text-align:left;padding:20px;border:4px solid #ffd9e6;border-radius:20px;">
						<legend style="color:#4a595b;font-weight:bold;font-size:20px;">二忠</legend>
							<label style="color:#4a595b;font-weight:bold;">&ensp;面中山樓右側樓梯下長方形黑磚和飲水機平台(含飲水機)+面中山樓右側殘障坡道(含水溝蓋)<br>+圓木平台+圓木平台前紅磚地2x3+中山樓右側直條灰磚地(到機房前灰磚地)<br>+中山樓1F右側女廁旁小樓梯+面中山右側小樓梯</label>
							<br>
							<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>人為垃圾
								<select name="vidchu_8_205_litter" required>
									<option>不加不扣</option>
									<option>扣分</option>
								</select>
								<br>
								<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>落葉
								<select name="vidchu_8_205_leaves" required>
									<option>不加不扣</option>
									<option>扣分</option>
								</select>
								<br>
								<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>灰塵
								<select name="vidchu_8_205_dust" required>
									<option>不加不扣</option>
									<option>扣分</option>
								</select>
								<br>
								<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>其他(飲水機)
								<select name="vidchu_8_205_others" required>
									<option>不加不扣</option>
									<option>扣分</option>
								</select>
								<br>
								&ensp;&ensp;&ensp;&ensp;&ensp;扣分備註&ensp;<span style="color:orange;">*扣分必填</span><br>
								&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<textarea name="vidchu_8_205_remark" rows="4" cols="50" placeholder=" ex : 原木平台有衛生紙"></textarea>
								<br>
						
					</fieldset>	
					<fieldset style="width:60%;position:center;text-align:left;padding:20px;border:4px solid #ffd9e6;border-radius:20px;">
						<legend style="color:#4a595b;font-weight:bold;font-size:20px;">二樂</legend>
							<label style="color:#4a595b;font-weight:bold;">&ensp;科學館前水泥空地(北至中山樓灰磚地及水泥地交界處)+科學館前階梯<br>+禮堂東門外平台(含平台樓梯)+禮堂東門外側1、2F樓梯<br>+科學展示牌與禮堂牆壁間水泥地，中山樓與科館間草地人為垃圾</label>
							<br>
							<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>人為垃圾
								<select name="vidchu_8_215_litter" required>
									<option>不加不扣</option>
									<option>扣分</option>
								</select>
								<br>
								<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>落葉
								<select name="vidchu_8_215_leaves" required>
									<option>不加不扣</option>
									<option>扣分</option>
								</select>
								<br>
								<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>灰塵
								<select name="vidchu_8_215_dust" required>
									<option>不加不扣</option>
									<option>扣分</option>
								</select>
								<br>
								&ensp;&ensp;&ensp;&ensp;&ensp;扣分備註&ensp;<span style="color:orange;">*扣分必填</span><br>
								&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<textarea name="vidchu_8_215_remark" rows="4" cols="50" placeholder=" ex : 原木平台有衛生紙"></textarea>
								<br>
						
					</fieldset>	
					<br>
					<input type="submit" name="submit" value="送出" onclick="finish()" style="background-color:#ffd9e6;color:#4a595b;border:solid #ffd9e6;border-radius:20px;font-size:15px;"></input>
					<br>
					<br>
				</form>
			</center>
		</div>
		<br><br><br>
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