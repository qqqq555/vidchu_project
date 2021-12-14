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
		<title>衛糾-第十五組上午</title>
		<link rel="stylesheet" href="setting.css">
		<script type="text/javascript" src="comfirm_and_alert.js"></script>
		<style type="text/css">
			table,td{
				color:#4a595b;
				border:2px solid #9ec8da;
				border-collapse:collapse;
				padding:10px;
			}
		</style>
	</head>
	<body>
		<div class="wrapper">
			<header>
				<span style="font-size:40px;position:fixed;top:10px;left:20px;padding:10px;color:#4a595b;">衛糾</span>
				<span style="position:absolute;right:5px;top:20px;padding:10px;">
					<span class="line_left"></span>
					<li class="button_css" onclick="location.href='index.html'">首頁</li>
					<span class="line_left"></span>
						<li class="button_css" onclick="location.href='vidchu-15_am.php'">衛糾評分</li>
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
				<form method="post" action="v_15_am_handle.php" style="background-color:white;width:100%;right:0;position:relative;top:40px;">
					<div style="font-weight:bold;font-size:25px;color:#4a595b;width:100%;">評分區</div>
					<div style="font-size:10px;width:100%;">
						注意!&ensp;<span style="background-color:#f9e459;">下午不加分</span><br>
						評分範圍:一忠 一孝 一博 一愛 一和 一平 一樂 一群 一簡 一捷 一敏 一慧
					</div>
					<br>
					<table style="width:60%;">
						<tr>
							<td style="font-weight:bold;"><center>黑板</center></td>
							<td>加分：板面、板溝、板擦、板擦機乾淨<br>
								不加不扣：上述一項未達成<br>
								扣分：上述兩項(含)以上未達成<br>
							</td>
							
						</tr>
						<tr>
							<td style="font-weight:bold;"><center>講桌</center></td>
							<td>講桌可放：點名板、籤筒、筆筒、座位表、滑鼠(墊)、遙控器、擺放整齊的考卷或資料<br>
								加分：臺面沒有灰塵且沒有不該放的東西<br>
								扣分：臺面有灰塵或有不該放的東西<br>
							</td>
							
						</tr>
						<tr>
							<td style="font-weight:bold;"><center>窗戶</center></td>
							<td>不加不扣：窗面沒有污漬、紗窗及窗框不卡灰塵、窗臺淨空<br>
								扣分：上述一項未達成<br>
							</td>
							
						</tr>
						<tr>
							<td style="font-weight:bold;"><center>蒸飯箱</center></td>
							<td>不加不扣：頂部無放置任何物品<br>
								扣分：頂部有放置物品(包含抹布及手套)<br>
							</td>
							
						</tr>
						<tr>
							<td style="font-weight:bold;"><center>資收籃</center></td>
							<td>加分：未超過五分滿且排列及分類整齊<br>
								不加不扣：未超過八分滿且排列及分類整齊<br>
								扣分：超過八分滿或資收物凌亂未分類<br>
							</td>
							
						</tr>
						<tr>
							<td style="font-weight:bold;"><center>垃圾桶</center></td>
							<td>不加不扣：垃圾未滿出<br>
								扣分：垃圾掉出垃圾桶或超過一袋未丟<br>
							</td>
							
						</tr>
						<tr>
							<td style="font-weight:bold;"><center>置物櫃</center></td>
							<td>加分：臺面沒有灰塵且其他物品<br>
								不加不扣：臺面有物品但擺放整齊<br>
								扣分：臺面有灰塵或物品雜亂<br>
							</td>
							
						</tr>
						<tr>
							<td style="font-weight:bold;"><center>地板+走廊</center></td>
							<td>加分：沒有垃圾、其他物品或毛髮團，且走道完全淨空，座位區只有書包及高三裝書的箱子<br>
								不加不扣：上午走道有書包(高三可放裝書的箱子)<br>
								扣分：有垃圾、其他物品或書、毛髮團..，下午時地板未淨空<br>
							</td>
							
						</tr>
						<tr>
							<td style="font-weight:bold;"><center>餐具</center></td>
							<td>不加不扣：餐具、便當箱已歸還<br>
								扣分：餐具、便當箱未歸還<br>
							</td>
							
						</tr>
					</table>
					<fieldset style="width:60%;position:center;text-align:left;padding:20px;border:4px solid #ffd9e6;border-radius:20px;">
						<legend style="color:#4a595b;font-weight:bold;font-size:20px;">一忠</legend>
							<span>
								黑板
									<select name="vidchu_15_105_A" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								講桌
									<select name="vidchu_15_105_B" required>
										<option>加分&ensp;&ensp;&ensp;&ensp;</option>
										<option>扣分</option>
									</select>
								<br>
								窗戶
									<select name="vidchu_15_105_C" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
								蒸飯箱
									<select name="vidchu_15_105_D" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
								資收籃
									<select name="vidchu_15_105_E" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								垃圾桶
									<select name="vidchu_15_105_F" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
								置物櫃
									<select name="vidchu_15_105_G" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								地板+走廊
									<select name="vidchu_15_105_H" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								餐具
									<select name="vidchu_15_105_I" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
							</span>
					</fieldset>	
					<fieldset style="width:60%;position:center;text-align:left;padding:20px;border:4px solid #ffd9e6;border-radius:20px;">
						<legend style="color:#4a595b;font-weight:bold;font-size:20px;">一孝</legend>
							<span>
								黑板
									<select name="vidchu_15_106_A" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								講桌
									<select name="vidchu_15_106_B" required>
										<option>加分&ensp;&ensp;&ensp;&ensp;</option>
										<option>扣分</option>
									</select>
								<br>
								窗戶
									<select name="vidchu_15_106_C" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
								蒸飯箱
									<select name="vidchu_15_106_D" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
								資收籃
									<select name="vidchu_15_106_E" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								垃圾桶
									<select name="vidchu_15_106_F" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
								置物櫃
									<select name="vidchu_15_106_G" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								地板+走廊
									<select name="vidchu_15_106_H" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								餐具
									<select name="vidchu_15_106_I" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
							</span>
					</fieldset>	
					<fieldset style="width:60%;position:center;text-align:left;padding:20px;border:4px solid #ffd9e6;border-radius:20px;">
						<legend style="color:#4a595b;font-weight:bold;font-size:20px;">一博</legend>
							<span>
								黑板
									<select name="vidchu_15_107_A" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								講桌
									<select name="vidchu_15_107_B" required>
										<option>加分&ensp;&ensp;&ensp;&ensp;</option>
										<option>扣分</option>
									</select>
								<br>
								窗戶
									<select name="vidchu_15_107_C" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
								蒸飯箱
									<select name="vidchu_15_107_D" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
								資收籃
									<select name="vidchu_15_107_E" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								垃圾桶
									<select name="vidchu_15_107_F" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
								置物櫃
									<select name="vidchu_15_107_G" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								地板+走廊
									<select name="vidchu_15_107_H" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								餐具
									<select name="vidchu_15_107_I" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
							</span>
					</fieldset>	
					<fieldset style="width:60%;position:center;text-align:left;padding:20px;border:4px solid #ffd9e6;border-radius:20px;">
						<legend style="color:#4a595b;font-weight:bold;font-size:20px;">一愛</legend>
							<span>
								黑板
									<select name="vidchu_15_108_A" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								講桌
									<select name="vidchu_15_108_B" required>
										<option>加分&ensp;&ensp;&ensp;&ensp;</option>
										<option>扣分</option>
									</select>
								<br>
								窗戶
									<select name="vidchu_15_108_C" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
								蒸飯箱
									<select name="vidchu_15_108_D" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
								資收籃
									<select name="vidchu_15_108_E" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								垃圾桶
									<select name="vidchu_15_108_F" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
								置物櫃
									<select name="vidchu_15_108_G" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								地板+走廊
									<select name="vidchu_15_108_H" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								餐具
									<select name="vidchu_15_108_I" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
							</span>
					</fieldset>	
					<fieldset style="width:60%;position:center;text-align:left;padding:20px;border:4px solid #ffd9e6;border-radius:20px;">
						<legend style="color:#4a595b;font-weight:bold;font-size:20px;">一和</legend>
							<span>
								黑板
									<select name="vidchu_15_109_A" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								講桌
									<select name="vidchu_15_109_B" required>
										<option>加分&ensp;&ensp;&ensp;&ensp;</option>
										<option>扣分</option>
									</select>
								<br>
								窗戶
									<select name="vidchu_15_109_C" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
								蒸飯箱
									<select name="vidchu_15_109_D" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
								資收籃
									<select name="vidchu_15_109_E" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								垃圾桶
									<select name="vidchu_15_109_F" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
								置物櫃
									<select name="vidchu_15_109_G" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								地板+走廊
									<select name="vidchu_15_109_H" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								餐具
									<select name="vidchu_15_109_I" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
							</span>
					</fieldset>	
					<fieldset style="width:60%;position:center;text-align:left;padding:20px;border:4px solid #ffd9e6;border-radius:20px;">
						<legend style="color:#4a595b;font-weight:bold;font-size:20px;">一平</legend>
							<span>
								黑板
									<select name="vidchu_15_110_A" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								講桌
									<select name="vidchu_15_110_B" required>
										<option>加分&ensp;&ensp;&ensp;&ensp;</option>
										<option>扣分</option>
									</select>
								<br>
								窗戶
									<select name="vidchu_15_110_C" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
								蒸飯箱
									<select name="vidchu_15_110_D" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
								資收籃
									<select name="vidchu_15_110_E" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								垃圾桶
									<select name="vidchu_15_110_F" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
								置物櫃
									<select name="vidchu_15_110_G" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								地板+走廊
									<select name="vidchu_15_110_H" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								餐具
									<select name="vidchu_15_110_I" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
							</span>
					</fieldset>	
					<fieldset style="width:60%;position:center;text-align:left;padding:20px;border:4px solid #ffd9e6;border-radius:20px;">
						<legend style="color:#4a595b;font-weight:bold;font-size:20px;">一樂</legend>
							<span>
								黑板
									<select name="vidchu_15_115_A" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								講桌
									<select name="vidchu_15_115_B" required>
										<option>加分&ensp;&ensp;&ensp;&ensp;</option>
										<option>扣分</option>
									</select>
								<br>
								窗戶
									<select name="vidchu_15_115_C" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
								蒸飯箱
									<select name="vidchu_15_115_D" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
								資收籃
									<select name="vidchu_15_115_E" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								垃圾桶
									<select name="vidchu_15_115_F" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
								置物櫃
									<select name="vidchu_15_115_G" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								地板+走廊
									<select name="vidchu_15_115_H" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								餐具
									<select name="vidchu_15_115_I" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
							</span>
					</fieldset>	
					<fieldset style="width:60%;position:center;text-align:left;padding:20px;border:4px solid #ffd9e6;border-radius:20px;">
						<legend style="color:#4a595b;font-weight:bold;font-size:20px;">一群</legend>
							<span>
								黑板
									<select name="vidchu_15_116_A" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								講桌
									<select name="vidchu_15_116_B" required>
										<option>加分&ensp;&ensp;&ensp;&ensp;</option>
										<option>扣分</option>
									</select>
								<br>
								窗戶
									<select name="vidchu_15_116_C" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
								蒸飯箱
									<select name="vidchu_15_116_D" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
								資收籃
									<select name="vidchu_15_116_E" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								垃圾桶
									<select name="vidchu_15_116_F" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
								置物櫃
									<select name="vidchu_15_116_G" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								地板+走廊
									<select name="vidchu_15_116_H" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								餐具
									<select name="vidchu_15_116_I" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
							</span>
					</fieldset>	
					<fieldset style="width:60%;position:center;text-align:left;padding:20px;border:4px solid #ffd9e6;border-radius:20px;">
						<legend style="color:#4a595b;font-weight:bold;font-size:20px;">一簡</legend>
							<span>
								黑板
									<select name="vidchu_15_117_A" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								講桌
									<select name="vidchu_15_117_B" required>
										<option>加分&ensp;&ensp;&ensp;&ensp;</option>
										<option>扣分</option>
									</select>
								<br>
								窗戶
									<select name="vidchu_15_117_C" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
								蒸飯箱
									<select name="vidchu_15_117_D" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
								資收籃
									<select name="vidchu_15_117_E" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								垃圾桶
									<select name="vidchu_15_117_F" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
								置物櫃
									<select name="vidchu_15_117_G" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								地板+走廊
									<select name="vidchu_15_117_H" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								餐具
									<select name="vidchu_15_117_I" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
							</span>
					</fieldset>	
					<fieldset style="width:60%;position:center;text-align:left;padding:20px;border:4px solid #ffd9e6;border-radius:20px;">
						<legend style="color:#4a595b;font-weight:bold;font-size:20px;">一捷</legend>
							<span>
								黑板
									<select name="vidchu_15_118_A" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								講桌
									<select name="vidchu_15_118_B" required>
										<option>加分&ensp;&ensp;&ensp;&ensp;</option>
										<option>扣分</option>
									</select>
								<br>
								窗戶
									<select name="vidchu_15_118_C" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
								蒸飯箱
									<select name="vidchu_15_118_D" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
								資收籃
									<select name="vidchu_15_118_E" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								垃圾桶
									<select name="vidchu_15_118_F" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
								置物櫃
									<select name="vidchu_15_118_G" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								地板+走廊
									<select name="vidchu_15_118_H" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								餐具
									<select name="vidchu_15_118_I" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
							</span>
					</fieldset>	
					<fieldset style="width:60%;position:center;text-align:left;padding:20px;border:4px solid #ffd9e6;border-radius:20px;">
						<legend style="color:#4a595b;font-weight:bold;font-size:20px;">一敏</legend>
							<span>
								黑板
									<select name="vidchu_15_119_A" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								講桌
									<select name="vidchu_15_119_B" required>
										<option>加分&ensp;&ensp;&ensp;&ensp;</option>
										<option>扣分</option>
									</select>
								<br>
								窗戶
									<select name="vidchu_15_119_C" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
								蒸飯箱
									<select name="vidchu_15_119_D" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
								資收籃
									<select name="vidchu_15_119_E" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								垃圾桶
									<select name="vidchu_15_119_F" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
								置物櫃
									<select name="vidchu_15_119_G" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								地板+走廊
									<select name="vidchu_15_119_H" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								餐具
									<select name="vidchu_15_119_I" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
							</span>
					</fieldset>	
					<fieldset style="width:60%;position:center;text-align:left;padding:20px;border:4px solid #ffd9e6;border-radius:20px;">
						<legend style="color:#4a595b;font-weight:bold;font-size:20px;">一慧</legend>
							<span>
								黑板
									<select name="vidchu_15_120_A" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								講桌
									<select name="vidchu_15_120_B" required>
										<option>加分&ensp;&ensp;&ensp;&ensp;</option>
										<option>扣分</option>
									</select>
								<br>
								窗戶
									<select name="vidchu_15_120_C" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
								蒸飯箱
									<select name="vidchu_15_120_D" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
								資收籃
									<select name="vidchu_15_120_E" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								垃圾桶
									<select name="vidchu_15_120_F" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
								置物櫃
									<select name="vidchu_15_120_G" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								地板+走廊
									<select name="vidchu_15_120_H" required>
										<option>加分</option>
										<option>扣分</option>
										<option>不加不扣</option>
									</select>
								<br>
								餐具
									<select name="vidchu_15_120_I" required>
										<option>不加不扣</option>
										<option>扣分</option>
									</select>
								<br>
							</span>
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