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
			<button class="grade" onclick="location.href='details.php'">高一</button>
			<button class="grade" onclick="location.href='details2.php'">高二</button>
			<button class="grade" onclick="location.href='details3.php'" style="background-color:#6f9388;">高三</button>
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
					&ensp;<a href="details_301.php" class="classname">三仁</a>&ensp;<span class="line"></span>
					&ensp;<a href="details_302.php" class="classname">三義</a>&ensp;<span class="line"></span>
					&ensp;<a href="details_303.php" class="classname">三禮</a>&ensp;<span class="line"></span>
					&ensp;<a href="details_304.php" class="classname">三智</a>&ensp;<span class="line"></span>
					&ensp;<a href="details_305.php" class="classname">三忠</a>&ensp;<span class="line"></span>
					<br>
					<span class="line"></span>
					&ensp;<a href="details_306.php" class="classname">三孝</a>&ensp;<span class="line"></span>
					&ensp;<a href="details_307.php" class="classname">三博</a>&ensp;<span class="line"></span>
					&ensp;<a href="details_308.php" class="classname">三愛</a>&ensp;<span class="line"></span>
					&ensp;<a href="details_309.php" class="classname">三和</a>&ensp;<span class="line"></span>
					&ensp;<a href="details_310.php" class="classname">三平</a>&ensp;<span class="line"></span>
					<br>
					<span class="line"></span>
					&ensp;<a href="details_311.php" class="classname">三誠</a>&ensp;<span class="line"></span>
					&ensp;<a href="details_312.php" class="classname">三信</a>&ensp;<span class="line"></span>
					&ensp;<a href="details_313.php" class="classname">三敬</a>&ensp;<span class="line"></span>
					&ensp;<a href="details_314.php" class="classname">三業</a>&ensp;<span class="line"></span>
					&ensp;<a href="details_315.php" class="classname">三樂</a>&ensp;<span class="line"></span>
					<br>
					<span class="line"></span>
					&ensp;<a href="details_316.php" class="classname">三群</a>&ensp;<span class="line"></span>
					&ensp;<a href="details_317.php" class="classname">三簡</a>&ensp;<span class="line"></span>
					&ensp;<a href="details_318.php" class="classname">三捷</a>&ensp;<span class="line"></span>
					&ensp;<a href="details_319.php" class="classname">三敏</a>&ensp;<span class="line"></span>
					&ensp;<a href="details_320.php" class="classname">三慧</a>&ensp;<span class="line"></span>
					<br>
					<span class="line"></span>
					&ensp;<a href="details_321.php" class="classname">三公</a>&ensp;<span class="line"></span>
					&ensp;<a href="details_322.php" class="classname">三廉</a>&ensp;<span class="line"></span>
					</div>
				</center>
                <br>
				<center>
					<div  class='p_title'>三群</div>
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
					$get101_1="SELECT * FROM vidchu_22_am_score";
					$result1=mysqli_query($db_link,$get101_1);
					while($row=mysqli_fetch_assoc($result1)){
						if($row["vidchu_22_316_A"]=="加分"){
							echo"黑板&ensp;";
						}
						if($row["vidchu_22_316_B"]=="加分"){
							echo"講桌&ensp;";
						}
						if($row["vidchu_22_316_C"]=="加分"){
							echo"窗戶&ensp;";
						}
						if($row["vidchu_22_316_D"]=="加分"){
							echo"蒸飯箱&ensp;";
						}
						if($row["vidchu_22_316_E"]=="加分"){
							echo"資收籃&ensp;";
						}
						if($row["vidchu_22_316_F"]=="加分"){
							echo"垃圾桶&ensp;";
						}
						if($row["vidchu_22_316_G"]=="加分"){
							echo"置物櫃&ensp;";
						}
						if($row["vidchu_22_316_H"]=="加分"){
							echo"地板+走廊";
						}
						if($row["vidchu_22_316_I"]=="加分"){
							echo"餐具";
						}
                    }
					echo "</td>
						<td>";
						$get101_6="SELECT * FROM vidchu_22_am_score";
						$result6=mysqli_query($db_link,$get101_6) or die('新增失敗6');
						while($row=mysqli_fetch_assoc($result6)){
							if($row["vidchu_22_316_A"]=="扣分"){
								echo"黑板&ensp;";
							}
							if($row["vidchu_22_316_B"]=="扣分"){
								echo"講桌&ensp;";
							}
							if($row["vidchu_22_316_C"]=="扣分"){
								echo"窗戶&ensp;";
							}
							if($row["vidchu_22_316_D"]=="扣分"){
								echo"蒸飯箱&ensp;";
							}
							if($row["vidchu_22_316_E"]=="扣分"){
								echo"資收籃&ensp;";
							}
							if($row["vidchu_22_316_F"]=="扣分"){
								echo"垃圾桶&ensp;";
							}
							if($row["vidchu_22_316_G"]=="扣分"){
								echo"置物櫃&ensp;";
							}
							if($row["vidchu_22_316_H"]=="扣分"){
								echo"地板+走廊";
							}
							if($row["vidchu_22_316_I"]=="扣分"){
								echo"餐具";
							}
						}
						echo "</td>";
					echo "</center>";
				//上午外掃
					echo"<tr>
						<td>上午外掃</td>
						<td>";
					$get101_3="SELECT * FROM vidchu_2_am_score";
					$result3=mysqli_query($db_link,$get101_3) or die('新增失敗1');
					while($row=mysqli_fetch_assoc($result3)){
						if($row["vidchu_2_316_litter"]=="加分"){
							echo"人為垃圾&ensp;";
						}
                        if($row["vidchu_2_316_leaves"]=="加分"){
                            echo"落葉&ensp;";
                        }
					}
					echo "</td>
						<td>";
						$get101_5="SELECT * FROM vidchu_2_am_score";
						$result5=mysqli_query($db_link,$get101_5) or die('新增失敗3');
						while($row=mysqli_fetch_assoc($result5)){
							if($row["vidchu_2_316_litter"]=="扣分"){
                                echo"人為垃圾&ensp;";
                            }
                            if($row["vidchu_2_316_leaves"]=="扣分"){
                                echo"落葉&ensp;";
                            }
						}
					echo  "</td>
						<td>";
					$get101_4="SELECT vidchu_2_316_remark FROM vidchu_2_am_score";
					$result4=mysqli_query($db_link,$get101_4) or die('新增失敗2');
					while ($row = mysqli_fetch_array($result4, MYSQLI_ASSOC)) {
						echo $row["vidchu_2_316_remark"];
					}
					echo "</td>
						</tr>";
					echo "</center>";
				//下午內掃
				echo"<tr>
						<td>下午內掃</td>
						<td>";
					$get101_7="SELECT * FROM vidchu_22_pm_score";
					$result7=mysqli_query($db_link,$get101_7);
					while($row=mysqli_fetch_assoc($result7)){
						if($row["vidchu_22_316_A"]=="加分"){
							echo"黑板&ensp;";
						}
						if($row["vidchu_22_316_B"]=="加分"){
							echo"講桌&ensp;";
						}
						if($row["vidchu_22_316_C"]=="加分"){
							echo"窗戶&ensp;";
						}
						if($row["vidchu_22_316_D"]=="加分"){
							echo"蒸飯箱&ensp;";
						}
						if($row["vidchu_22_316_E"]=="加分"){
							echo"資收籃&ensp;";
						}
						if($row["vidchu_22_316_F"]=="加分"){
							echo"垃圾桶&ensp;";
						}
						if($row["vidchu_22_316_G"]=="加分"){
							echo"置物櫃&ensp;";
						}
						if($row["vidchu_22_316_H"]=="加分"){
							echo"地板+走廊";
						}
						if($row["vidchu_22_316_I"]=="加分"){
							echo"餐具";
						}
					}
					echo "</td>
						<td>";
						$get101_8="SELECT * FROM vidchu_22_pm_score";
						$result8=mysqli_query($db_link,$get101_8) or die('新增失敗6');
						while($row=mysqli_fetch_assoc($result8)){
							if($row["vidchu_22_316_A"]=="扣分"){
								echo"黑板&ensp;";
							}
							if($row["vidchu_22_316_B"]=="扣分"){
								echo"講桌&ensp;";
							}
							if($row["vidchu_22_316_C"]=="扣分"){
								echo"窗戶&ensp;";
							}
							if($row["vidchu_22_316_D"]=="扣分"){
								echo"蒸飯箱&ensp;";
							}
							if($row["vidchu_22_316_E"]=="扣分"){
								echo"資收籃&ensp;";
							}
							if($row["vidchu_22_316_F"]=="扣分"){
								echo"垃圾桶&ensp;";
							}
							if($row["vidchu_22_316_G"]=="扣分"){
								echo"置物櫃&ensp;";
							}
							if($row["vidchu_22_316_H"]=="扣分"){
								echo"地板+走廊";
							}
							if($row["vidchu_22_316_I"]=="扣分"){
								echo"餐具";
							}
						}
						echo "</td>";
					echo "</center>";
				//下午外掃
					echo"<tr>
						<td>下午外掃</td>
						<td>";
					$get101_9="SELECT * FROM vidchu_2_pm_score";
					$result9=mysqli_query($db_link,$get101_9) or die('新增失敗1');
					while($row=mysqli_fetch_assoc($result9)){
						if($row["vidchu_2_316_litter"]=="加分"){
							echo"人為垃圾&ensp;";
						}
                        if($row["vidchu_2_316_leaves"]=="加分"){
                            echo"落葉&ensp;";
                        }
                    }
					echo "</td>
						<td>";
						$get101_10="SELECT * FROM vidchu_2_pm_score";
						$result10=mysqli_query($db_link,$get101_10) or die('新增失敗3');
						while($row=mysqli_fetch_assoc($result10)){
							if($row["vidchu_2_316_litter"]=="扣分"){
                                echo"人為垃圾&ensp;";
                            }
                            if($row["vidchu_2_316_leaves"]=="扣分"){
                                echo"落葉&ensp;";
                            }
                        }
					echo  "</td>
						<td>";
					$get101_11="SELECT vidchu_2_316_remark FROM vidchu_2_pm_score";
					$result11=mysqli_query($db_link,$get101_11) or die('新增失敗2');
					while ($row = mysqli_fetch_array($result11, MYSQLI_ASSOC)) {
						echo $row["vidchu_2_316_remark"];
					}
					echo "</td>
						</tr>";
					echo "</center></table>";
				?>
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