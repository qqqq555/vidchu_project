<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset:utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<title>扣分細項</title>
		<link rel="stylesheet" href="setting.css">
		<style type="text/css">
			.grade{
				padding:10px;
				width:100px;
				border:0px;
				background-color:#c9d8cd;
				position: relative;
				top:30px;
				font-family:"Hanyi Senty Journal","setofont","微軟正黑體" !important;
				font-size:20px;
			}
			.p_title{
				font-size:30px;
				color:#4a595b;
			}
			table,td,tr{
				color:#4a595b;
				border:2px solid #9ec8da;
				border-collapse:collapse;
				padding:10px;
			}
			.line{
				border-left:2px solid #c9d8cd;
				height:100%;
				margin:0;
			}
			.classname{
				text-decoration:none;
				color:#ab8282;
			}
		</style>
	</head>
	<body>
		<div class="wrapper">
			<header>
				<span style="font-size:40px;position:fixed;top:10px;left:20px;padding:10px;color:#4a595b;">扣分細項</span>
				<span style="position:absolute;right:5px;top:20px;padding:10px;">
					<span class="line_left"></span>
					<li class="button_css" onclick="location.href='index.html'">首頁</li>
					<span class="line_left"></span>
				</span>
			</header>
			<center>
				<img src="slider005-1.png" alt="操場" style="width:100%;"></img>
				<marquee behavior="behavior" SCROLLAMOUNT="10" width="80%" loop="50" style="color:#4a595b;font-size:20px;position:relative;top:15px;">衛生糾察暨校園整潔維護系統</marquee>
				<br>
			</center>
		<center>
			<button class="grade" onclick="location.href='details.php'" style="background-color:#6f9388;">高一</button>
			<button class="grade" onclick="location.href='details2.php'">高二</button>
			<button class="grade" onclick="location.href='details3.php'">高三</button>
		</center>
		<center>
			<div style="background-color:white;color:#4a595b;text-align:left;padding:20px;position:relative;top:30px;width:80%;">
				<center>
					<div>內掃基本分為85分，最多加、扣5分(80~90分)<br>
						外掃基本分為80分，最多加、扣2分(78~82分)<br>
						加扣分超過以上範圍，不額外加扣分<br>
					</div>
					<div>
					<span class="line"></span>
					&ensp;<a href="details_101.php" class="classname">一仁</a>&ensp;<span class="line"></span>
					&ensp;<a href="details_102.php" class="classname">一義</a>&ensp;<span class="line"></span>
					&ensp;<a href="details_103.php" class="classname">一禮</a>&ensp;<span class="line"></span>
					&ensp;<a href="details_104.php" class="classname">一智</a>&ensp;<span class="line"></span>
					&ensp;<a href="details_105.php" class="classname">一忠</a>&ensp;<span class="line"></span>
					<br>
					<span class="line"></span>
					&ensp;<a href="details_106.php" class="classname">一孝</a>&ensp;<span class="line"></span>
					&ensp;<a href="details_107.php" class="classname">一博</a>&ensp;<span class="line"></span>
					&ensp;<a href="details_108.php" class="classname">一愛</a>&ensp;<span class="line"></span>
					&ensp;<a href="details_109.php" class="classname">一和</a>&ensp;<span class="line"></span>
					&ensp;<a href="details_110.php" class="classname">一平</a>&ensp;<span class="line"></span>
					<br>
					<span class="line"></span>
					&ensp;<a href="details_111.php" class="classname">一誠</a>&ensp;<span class="line"></span>
					&ensp;<a href="details_112.php" class="classname">一信</a>&ensp;<span class="line"></span>
					&ensp;<a href="details_113.php" class="classname">一敬</a>&ensp;<span class="line"></span>
					&ensp;<a href="details_114.php" class="classname">一業</a>&ensp;<span class="line"></span>
					&ensp;<a href="details_115.php" class="classname">一樂</a>&ensp;<span class="line"></span>
					<br>
					<span class="line"></span>
					&ensp;<a href="details_116.php" class="classname">一群</a>&ensp;<span class="line"></span>
					&ensp;<a href="details_117.php" class="classname">一簡</a>&ensp;<span class="line"></span>
					&ensp;<a href="details_118.php" class="classname">一捷</a>&ensp;<span class="line"></span>
					&ensp;<a href="details_119.php" class="classname">一敏</a>&ensp;<span class="line"></span>
					&ensp;<a href="details_120.php" class="classname">一慧</a>&ensp;<span class="line"></span>
					&ensp;<a href="details_122.php" class="classname">一廉</a>&ensp;<span class="line"></span>
					<br>
					</div>
				</center>
				<br>
				<center>
					<div  class='p_title'>一愛</div>
				</center>
				<?php
					echo "<br>";
					require('conn_mysql.php');
					echo "<center><table>";
					echo"<tr>
							<td>時段</td>
							<td>加分項目</td>
							<td>扣分項目</td>
							<td>扣分備註</td>
						</tr>";
				//上午內掃
					echo"<tr>
						<td>上午內掃</td>
						<td>";
					$get101_1="SELECT * FROM vidchu_15_am_score";
					$result1=mysqli_query($db_link,$get101_1);
					while($row=mysqli_fetch_assoc($result1)){
						if($row["vidchu_16_101_A"]=="加分"){
							echo"黑板&ensp;";
						}
						if($row["vidchu_16_101_B"]=="加分"){
							echo"講桌&ensp;";
						}
						if($row["vidchu_16_101_C"]=="加分"){
							echo"窗戶&ensp;";
						}
						if($row["vidchu_16_101_D"]=="加分"){
							echo"蒸飯箱&ensp;";
						}
						if($row["vidchu_16_101_E"]=="加分"){
							echo"資收籃&ensp;";
						}
						if($row["vidchu_16_101_F"]=="加分"){
							echo"垃圾桶&ensp;";
						}
						if($row["vidchu_16_101_G"]=="加分"){
							echo"置物櫃&ensp;";
						}
						if($row["vidchu_16_101_H"]=="加分"){
							echo"地板+走廊";
						}
						if($row["vidchu_16_101_I"]=="加分"){
							echo"餐具";
						}
					}
					echo "</td>
						<td>";
						$get101_6="SELECT * FROM vidchu_15_am_score";
						$result6=mysqli_query($db_link,$get101_6) or die('新增失敗6');
						while($row=mysqli_fetch_assoc($result6)){
							if($row["vidchu_16_101_A"]=="扣分"){
								echo"黑板&ensp;";
							}
							if($row["vidchu_16_101_B"]=="扣分"){
								echo"講桌&ensp;";
							}
							if($row["vidchu_16_101_C"]=="扣分"){
								echo"窗戶&ensp;";
							}
							if($row["vidchu_16_101_D"]=="扣分"){
								echo"蒸飯箱&ensp;";
							}
							if($row["vidchu_16_101_E"]=="扣分"){
								echo"資收籃&ensp;";
							}
							if($row["vidchu_16_101_F"]=="扣分"){
								echo"垃圾桶&ensp;";
							}
							if($row["vidchu_16_101_G"]=="扣分"){
								echo"置物櫃&ensp;";
							}
							if($row["vidchu_16_101_H"]=="扣分"){
								echo"地板+走廊";
							}
							if($row["vidchu_16_101_I"]=="扣分"){
								echo"餐具";
							}
						}
						echo "</td>";
					echo "</center>";
				//上午外掃
					echo"<tr>
						<td>上午外掃</td>
						<td>";
					$get101_3="SELECT * FROM vidchu_14_am_score";
					$result3=mysqli_query($db_link,$get101_3) or die('新增失敗1');
					while($row=mysqli_fetch_assoc($result3)){
						if($row["vidchu_14_108_litter"]=="加分"){
							echo"人為垃圾&ensp;";
						}
						if($row["vidchu_14_108_dust"]=="加分"){
							echo"灰塵&ensp;";
						}
						if($row["vidchu_14_108_sweep"]=="加分"){
							echo"掃具排列&ensp;";
						}
						if($row["vidchu_14_108_sill"]=="加分"){
							echo"窗台&ensp;";
						}
						if($row["vidchu_14_108_others"]=="加分"){
							echo"其他&ensp;";
						}
					}
					echo "</td>
						<td>";
						$get101_5="SELECT * FROM vidchu_14_am_score";
						$result5=mysqli_query($db_link,$get101_5) or die('新增失敗3');
						while($row=mysqli_fetch_assoc($result5)){
							if($row["vidchu_14_108_litter"]=="扣分"){
							echo"人為垃圾&ensp;";
						}
						if($row["vidchu_14_108_dust"]=="扣分"){
							echo"灰塵&ensp;";
						}
						if($row["vidchu_14_108_sweep"]=="扣分"){
							echo"掃具排列&ensp;";
						}
						if($row["vidchu_14_108_sill"]=="扣分"){
							echo"窗台&ensp;";
						}
						if($row["vidchu_14_108_others"]=="扣分"){
							echo"其他&ensp;";
						}
						}
					echo  "</td>
						<td>";
					$get101_4="SELECT vidchu_14_108_remark FROM vidchu_14_am_score";
					$result4=mysqli_query($db_link,$get101_4) or die('新增失敗2');
					while ($row = mysqli_fetch_array($result4, MYSQLI_ASSOC)) {
						echo $row["vidchu_14_108_remark"];
					}
					echo "</td>
						</tr>";
					echo "</center>";
				//下午內掃
				echo"<tr>
						<td>下午內掃</td>
						<td>";
					$get101_7="SELECT * FROM vidchu_15_pm_score";
					$result7=mysqli_query($db_link,$get101_7);
					while($row=mysqli_fetch_assoc($result7)){
						if($row["vidchu_16_101_A"]=="加分"){
							echo"黑板&ensp;";
						}
						if($row["vidchu_16_101_B"]=="加分"){
							echo"講桌&ensp;";
						}
						if($row["vidchu_16_101_C"]=="加分"){
							echo"窗戶&ensp;";
						}
						if($row["vidchu_16_101_D"]=="加分"){
							echo"蒸飯箱&ensp;";
						}
						if($row["vidchu_16_101_E"]=="加分"){
							echo"資收籃&ensp;";
						}
						if($row["vidchu_16_101_F"]=="加分"){
							echo"垃圾桶&ensp;";
						}
						if($row["vidchu_16_101_G"]=="加分"){
							echo"置物櫃&ensp;";
						}
						if($row["vidchu_16_101_H"]=="加分"){
							echo"地板+走廊";
						}
						if($row["vidchu_16_101_I"]=="加分"){
							echo"餐具";
						}
					}
					echo "</td>
						<td>";
						$get101_8="SELECT * FROM vidchu_15_pm_score";
						$result8=mysqli_query($db_link,$get101_8) or die('新增失敗6');
						while($row=mysqli_fetch_assoc($result8)){
							if($row["vidchu_16_101_A"]=="扣分"){
								echo"黑板&ensp;";
							}
							if($row["vidchu_16_101_B"]=="扣分"){
								echo"講桌&ensp;";
							}
							if($row["vidchu_16_101_C"]=="扣分"){
								echo"窗戶&ensp;";
							}
							if($row["vidchu_16_101_D"]=="扣分"){
								echo"蒸飯箱&ensp;";
							}
							if($row["vidchu_16_101_E"]=="扣分"){
								echo"資收籃&ensp;";
							}
							if($row["vidchu_16_101_F"]=="扣分"){
								echo"垃圾桶&ensp;";
							}
							if($row["vidchu_16_101_G"]=="扣分"){
								echo"置物櫃&ensp;";
							}
							if($row["vidchu_16_101_H"]=="扣分"){
								echo"地板+走廊";
							}
							if($row["vidchu_16_101_I"]=="扣分"){
								echo"餐具";
							}
						}
						echo "</td>";
					echo "</center>";
				//下午外掃
					echo"<tr>
						<td>下午外掃</td>
						<td>";
					$get101_9="SELECT * FROM vidchu_14_pm_score";
					$result9=mysqli_query($db_link,$get101_9) or die('新增失敗1');
					while($row=mysqli_fetch_assoc($result9)){
						if($row["vidchu_14_108_litter"]=="加分"){
							echo"人為垃圾&ensp;";
						}
						if($row["vidchu_14_108_dust"]=="加分"){
							echo"灰塵&ensp;";
						}
						if($row["vidchu_14_108_sweep"]=="加分"){
							echo"掃具排列&ensp;";
						}
						if($row["vidchu_14_108_sill"]=="加分"){
							echo"窗台&ensp;";
						}
						if($row["vidchu_14_108_others"]=="加分"){
							echo"其他&ensp;";
						}
					}
					echo "</td>
						<td>";
						$get101_10="SELECT * FROM vidchu_14_pm_score";
						$result10=mysqli_query($db_link,$get101_10) or die('新增失敗3');
						while($row=mysqli_fetch_assoc($result10)){
							if($row["vidchu_14_108_litter"]=="扣分"){
							echo"人為垃圾&ensp;";
						}
						if($row["vidchu_14_108_dust"]=="扣分"){
							echo"灰塵&ensp;";
						}
						if($row["vidchu_14_108_sweep"]=="扣分"){
							echo"掃具排列&ensp;";
						}
						if($row["vidchu_14_108_sill"]=="扣分"){
							echo"窗台&ensp;";
						}
						if($row["vidchu_14_108_others"]=="扣分"){
							echo"其他&ensp;";
						}
						}
					echo  "</td>
						<td>";
					$get101_11="SELECT vidchu_14_108_remark FROM vidchu_14_pm_score";
					$result11=mysqli_query($db_link,$get101_11) or die('新增失敗2');
					while ($row = mysqli_fetch_array($result11, MYSQLI_ASSOC)) {
						echo $row["vidchu_14_108_remark"];
					}
					echo "</td>
						</tr>";
					echo "</center></table>";
				?>
				</div>
			</div>
			<?php
                echo"<br><br><br><footer>
                    <center>
                            <span style='color:#4a595b;'>
                                衛糾相關事務&ensp;
                                <span class='line_left'>&ensp;</span>
                                &ensp;&ensp;衛生組組長 林媼彩 &ensp;電話： 0935866031 &ensp;Line ID：audrylin<br>
                                網站相關錯誤請聯絡&ensp;
                                <span class='line_left'>&ensp;</span>
                                &ensp;&ensp;電神eating LineID： eva1235
                                <span class='line_left'>&ensp;</span>
                                Dora s990004@baps.tp.edu.tw
                            </span>
                            <br>
                    </center>
                </footer>";
            ?>
		</center>
	</body>
</html>