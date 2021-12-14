<?php
	session_start();
	if(!isset($_SESSION["v_studynum"]) || ($_SESSION["v_studynum"]=="")){
					header('refresh:0 ; url=not_login.php');
				}
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset:utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<title>衛糾-第四組下午</title>
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
						<li class="button_css" onclick="location.href='vidchu-4_pm.php'">衛糾評分</li>
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
				<marquee behavior="behavior" SCROLLAMOUNT="10" width="80%" loop="50" style="color:#4a595b;font-size:20px;position:relative;top:15px;">衛生糾察暨校園整潔維護系統</marquee>
				<div style="z-index:20;position:relative;top:15px;background-color:white;border:0px solid white;padding:20px;width:80%;border-radius:20px;">
					<h2 style="color:#4a595b;">評分地圖</h2>
					<img src="map.jpg" alt="評分地圖" style="z-index:-1;border-radius:20px;width:80%;"></img>
				</div>
				<br>
				<form method="POST" action="v_4_pm_handle.php" style="background-color:white;width:100%;right:0;position:relative;top:40px;">
					<div style="font-weight:bold;font-size:25px;color:#4a595b;width:100%;">評分區</div>
					<fieldset style="width:60%;position:center;text-align:left;padding:20px;border:4px solid #ffd9e6;border-radius:20px;">
						<legend style="color:#4a595b;font-weight:bold;font-size:20px;">三孝</legend>
							<label style="color:#4a595b;font-weight:bold;">&ensp;逸仙樓教官室到英文辦公室走廊(含面向迎曦道窗戶擦拭)+佈告欄前空地+逸仙樓正門樓梯</label>
							<br>
							<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>人為垃圾
								<select name="vidchu_4_306_litter" required>
									<option>不加不扣</option>
									<option>扣分</option>
								</select>
								<br>
								<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>灰塵
								<select name="vidchu_4_306_dust" required>
									<option>不加不扣</option>
									<option>扣分</option>
								</select>
								<br>
								<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>窗台
								<select name="vidchu_4_306_sill" required>
									<option>不加不扣</option>
									<option>扣分</option>
								</select>
								<br>
								<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>其他(飲水機、佈告欄)
								<select name="vidchu_4_306_others" required>
									<option>不加不扣</option>
									<option>扣分</option>
								</select>
								<br>
								&ensp;&ensp;&ensp;&ensp;&ensp;扣分備註&ensp;<span style="color:orange;">*扣分必填</span><br>
								&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<textarea name="vidchu_4_306_remark" rows="4" cols="50" placeholder=" ex : 原木平台有衛生紙"></textarea>
								<br>
						
					</fieldset>	
					<fieldset style="width:60%;position:center;text-align:left;padding:20px;border:4px solid #ffd9e6;border-radius:20px;">
						<legend style="color:#4a595b;font-weight:bold;font-size:20px;">三愛</legend>
							<label style="color:#4a595b;font-weight:bold;">&ensp;逸仙樓國文辦公室到社會辦公室走廊(含面向迎曦道窗戶擦拭) +東穿堂1F往操場斜坡</label>
							<br>
							<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>人為垃圾
								<select name="vidchu_4_308_litter" required>
									<option>不加不扣</option>
									<option>扣分</option>
								</select>
								<br>
								<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>落葉
								<select name="vidchu_4_308_leaves" required>
									<option>不加不扣</option>
									<option>扣分</option>
								</select>
								<br>
								<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>灰塵
								<select name="vidchu_4_308_dust" required>
									<option>不加不扣</option>
									<option>扣分</option>
								</select>
								<br>
								<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>窗台
								<select name="vidchu_4_308_sill" required>
									<option>不加不扣</option>
									<option>扣分</option>
								</select>
								<br>
								<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>其他(扶手擦拭)
								<select name="vidchu_4_308_others" required>
									<option>不加不扣</option>
									<option>扣分</option>
								</select>
								<br>
								&ensp;&ensp;&ensp;&ensp;&ensp;扣分備註&ensp;<span style="color:orange;">*扣分必填</span><br>
								&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<textarea name="vidchu_4_308_remark" rows="4" cols="50" placeholder=" ex : 原木平台有衛生紙"></textarea>
								<br>
						
					</fieldset>	
					<fieldset style="width:60%;position:center;text-align:left;padding:20px;border:4px solid #ffd9e6;border-radius:20px;">
						<legend style="color:#4a595b;font-weight:bold;font-size:20px;">三和</legend>
							<label style="color:#4a595b;font-weight:bold;">&ensp;逸仙樓靠禮堂側1~3F樓梯(含窗戶擦拭)+佈告欄前空地</label>
							<br>
							<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>人為垃圾
								<select name="vidchu_4_309_litter" required>
									<option>不加不扣</option>
									<option>扣分</option>
								</select>
								<br>
								<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>灰塵
								<select name="vidchu_4_309_dust" required>
									<option>不加不扣</option>
									<option>扣分</option>
								</select>
								<br>
								<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>窗台
								<select name="vidchu_4_309_sill" required>
									<option>不加不扣</option>
									<option>扣分</option>
								</select>
								<br>
								<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>其他(飲水機、佈告欄)
								<select name="vidchu_4_309_others" required>
									<option>不加不扣</option>
									<option>扣分</option>
								</select>
								<br>
								&ensp;&ensp;&ensp;&ensp;&ensp;扣分備註&ensp;<span style="color:orange;">*扣分必填</span><br>
								&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<textarea name="vidchu_4_309_remark" rows="4" cols="50" placeholder=" ex : 原木平台有衛生紙"></textarea>
								<br>
						
					</fieldset>	
					<fieldset style="width:60%;position:center;text-align:left;padding:20px;border:4px solid #ffd9e6;border-radius:20px;">
						<legend style="color:#4a595b;font-weight:bold;font-size:20px;">三業</legend>
							<label style="color:#4a595b;font-weight:bold;">&ensp;[迎曦道面禮堂右側]逸仙樓東側穿堂小門(含)到紅色平台間的柏油路+落葉回收區</label>
							<br>
							<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>人為垃圾
								<select name="vidchu_4_314_litter" required>
									<option>不加不扣</option>
									<option>扣分</option>
								</select>
								<br>
								<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>落葉
								<select name="vidchu_4_314_leaves" required>
									<option>不加不扣</option>
									<option>扣分</option>
								</select>
								<br>
								<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>灰塵
								<select name="vidchu_4_314_dust" required>
									<option>不加不扣</option>
									<option>扣分</option>
								</select>
								<br>
								<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>掃具排列
								<select name="vidchu_4_314_sweep" required>
									<option>不加不扣</option>
									<option>扣分</option>
								</select>
								<br>
								&ensp;&ensp;&ensp;&ensp;&ensp;扣分備註&ensp;<span style="color:orange;">*扣分必填</span><br>
								&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<textarea name="vidchu_4_314_remark" rows="4" cols="50" placeholder=" ex : 原木平台有衛生紙"></textarea>
								<br>
						
					</fieldset>	
					<fieldset style="width:60%;position:center;text-align:left;padding:20px;border:4px solid #ffd9e6;border-radius:20px;">
						<legend style="color:#4a595b;font-weight:bold;font-size:20px;">二平</legend>
							<label style="color:#4a595b;font-weight:bold;">&ensp;禮堂西門外紅色平台(含平台樓梯、飲水機)+禮堂西門外側1、2F樓梯+面逸仙樓左側1F女廁前黃色階梯磚地</label>
							<br>
							<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>人為垃圾
								<select name="vidchu_4_210_litter" required>
									<option>不加不扣</option>
									<option>扣分</option>
								</select>
								<br>
								<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>落葉
								<select name="vidchu_4_210_leaves" required>
									<option>不加不扣</option>
									<option>扣分</option>
								</select>
								<br>
								<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>灰塵
								<select name="vidchu_4_210_dust" required>
									<option>不加不扣</option>
									<option>扣分</option>
								</select>
								<br>
								<span>&ensp;&ensp;&ensp;&ensp;&ensp;</span>其他(飲水機)
                                <select name="vidchu_4_210_others" required>
									<option>不加不扣</option>
									<option>扣分</option>
								</select>
								<br>
								&ensp;&ensp;&ensp;&ensp;&ensp;扣分備註&ensp;<span style="color:orange;">*扣分必填</span><br>
								&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<textarea name="vidchu_4_210_remark" rows="4" cols="50" placeholder=" ex : 原木平台有衛生紙"></textarea>
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