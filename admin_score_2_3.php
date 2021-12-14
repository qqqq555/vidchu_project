<!--http://localhost/110-1project/admin_all.php-->
<?php
    session_start();
    $week="3";
    if(isset($_POST['score_go_search'])){
        search();
    }
    if(!isset($_SESSION["admin_account"]) || ($_SESSION["admin_account"]=="")){
        header('refresh:0 ; url=not_login.php');
    }
    function search(){
        $score_search=$_POST['score_search'];
        if($score_search=='第1週'){
            header("location: admin_score_2_1.php");
        }
        else if($score_search=='第2週'){
            header("location: admin_score_2_2.php");
        }
        else if($score_search=='第3週'){
            header("location: admin_score_2_3.php");
        }
        else if($score_search=='第4週'){
            header("location: admin_score_2_4.php");
        }
        else if($score_search=='第5週'){
            header("location: admin_score_2_5.php");
        }
        else if($score_search=='第6週'){
            header("location: admin_score_2_6.php");
        }
        else if($score_search=='第7週'){
            header("location: admin_score_2_7.php");
        }
        else if($score_search=='第8週'){
            header("location: admin_score_2_8.php");
        }
        else if($score_search=='第9週'){
            header("location: admin_score_2_9.php");
        }
        else if($score_search=='第10週'){
            header("location: admin_score_2_10.php");
        }
        else if($score_search=='第11週'){
            header("location: admin_score_2_11.php");
        }
        else if($score_search=='第12週'){
            header("location: admin_score_2_12.php");
        }
        else if($score_search=='第13週'){
            header("location: admin_score_2_13.php");
        }
        else if($score_search=='第14週'){
            header("location: admin_score_2_14.php");
        }
        else if($score_search=='第15週'){
            header("location: admin_score_2_15.php");
        }
        else if($score_search=='第16週'){
            header("location: admin_score_2_16.php");
        }
        else if($score_search=='第17週'){
            header("location: admin_score_2_17.php");
        }
        else if($score_search=='第18週'){
            header("location: admin_score_2_18.php");
        }
        else if($score_search=='第19週'){
            header("location: admin_score_2_19.php");
        }
        else if($score_search=='第20週'){
            header("location: admin_score_2_20.php");
        }
        else if($score_search=='第21週'){
            header("location: admin_score_2_21.php");
        }
        else if($score_search=='第22週'){
            header("location: admin_score_2_22.php");
        }
        else if($score_search=='第23週'){
            header("location: admin_score_2_23.php");
        }
        else if($score_search=='第24週'){
            header("location: admin_score_2_24.php");
        }
        else if($score_search=='第25週'){
            header("location: admin_score_2_25.php");
        }
        else if($score_search=='第26週'){
            header("location: admin_score_2_26.php");
        }
        else if($score_search=='第27週'){
            header("location: admin_score_2_27.php");
        }
        else if($score_search=='第28週'){
            header("location: admin_score_2_28.php");
        }
        else if($score_search=='第29週'){
            header("location: admin_score_2_29.php");
        }
        else if($score_search=='第30週'){
            header("location: admin_score_2_30.php");
        }
    }
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>衛生糾察暨校園整潔維護系統</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            @font-face{
                font-family: journal;
                src: url('font/HanyiSentyJournal.ttf');
            }
            body{
                margin: 0;
            }
            *{
                font-family: journal;
            }
            p{
                font-family: journal;
                color: #4a595b;
                font-size: 50px;
                border: 0px;
                margin: 0;
                text-align:center;
            }
            .contact{
                box-sizing: border-box;
                width: 100%;
                margin: 0 auto;
                border: 0px;
                height: 75px;
                background-color: #CDE2E4;
                font-size: 20px;
                font-family: journal;
                color: #4a595b;
                text-align: center;
            }
            .whiteline{
                border-right: 2px solid white;
            }
        </style>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <!--標題-->
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #CDE2E4; color:#4a595b;" >
        <div class="container-fluid">
            <p><strong>管理頁面</strong></p>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item" style="font-size: 30px;">
                <a class="nav-link"href="admin_all.php">名單統整</a>
                </li>
                &nbsp;&nbsp;
                <li class="nav-item" style="font-size: 30px;">
                <a class="nav-link" href="admin_score_1_1.php">評分整理</a>
                </li>
                &nbsp;&nbsp;
                <li class="nav-item" style="font-size: 30px;">
                <a class="nav-link" href="admin_feedback.php">小衛糾回饋</a>
                </li>
                &nbsp;&nbsp;
                <li class="nav-item" style="font-size: 30px;">
                <a class="nav-link" href="admin_other.php">其他功能</a>
                </li>
                &nbsp;&nbsp;
                <li class="nav-item" style="font-size: 30px;">
                <a class="nav-link" href="admin_logout.php" style="color: #a1a9aa;">登出</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>
        <br>
        <div class="container mt-3"> <!--選擇查詢年級週數-->
            <p><strong>評分整理</strong></p>
            <div class="btn-group">
                <button type="button" onclick="location.href='admin_score_1_1.php'" class="btn btn-secondary" style="font-size: 25px;">高一</button>
                <button type="button" onclick="location.href='admin_score_2_1.php'" class="btn btn-secondary active" style="font-size: 25px;">高二</button>
                <button type="button" onclick="location.href='admin_score_3_1.php'" class="btn btn-secondary" style="font-size: 25px;">高三</button>
            </div>
            &nbsp;&nbsp;
            <div class="form-row" style="display: inline-block;">
                <form method="POST" class="form-inline" style="font-size: 25px;">
                    <label for="score_search">週次：</label>
                    <select class="custom-select" name="score_search" id="score_search">
                        <option>第1週</option>
                        <option>第2週</option>
                        <option selected>第3週</option>
                        <option>第4週</option>
                        <option>第5週</option>
                        <option>第6週</option>
                        <option>第7週</option>
                        <option>第8週</option>
                        <option>第9週</option>
                        <option>第10週</option>
                        <option>第11週</option>
                        <option>第12週</option>
                        <option>第13週</option>
                        <option>第14週</option>
                        <option>第15週</option>
                        <option>第16週</option>
                        <option>第17週</option>
                        <option>第18週</option>
                        <option>第19週</option>
                        <option>第20週</option>
                        <option>第21週</option>
                        <option>第22週</option>
                        <option>第23週</option>
                        <option>第24週</option>
                        <option>第25週</option>
                        <option>第26週</option>
                        <option>第27週</option>
                        <option>第28週</option>
                        <option>第29週</option>
                        <option>第30週</option>
                    </select>
                    <button name="score_go_search" type="submit" class="btn btn-secondary float-right" style="font-size: 25px;">查詢</button>
                </form>
            </div> 
            <div style="display: inline-block;"> <!--匯入本週成績-->
                &nbsp;&nbsp;
                <a href="insert_score.php?week=<?=$week?>" style="font-size: 25px; color: red; display: inline;">匯入本週成績</a>
                <p style="font-size: 22px; color: red; display: inline;">(若上週成績還沒打至<b>Excel</b>，請小心<b>不要誤按週數</b>!!!)</p>
            </div>
            <br><br>
            <div> <!--成績表格-->
                <?php
                require('connect_mysql.php');
                $sql_query="SELECT * FROM score_2_3";
                $result=mysqli_query($db_link,$sql_query);
                echo "<table width='800px' class='table table-hover table-bordered' style='margin:auto;'>";
                echo "<thead>
                    <tr>
                    <th><b><font size='4'>內掃</font></b></th>
                    <th><b><font size='3'>一上</font></b></th>
                    <th><b><font size='3'>一下</font></b></th>
                    <th><b><font size='3'>二上</font></b></th>
                    <th><b><font size='3'>二下</font></b></th>
                    <th><b><font size='3'>三上</font></b></th>
                    <th><b><font size='3'>三下</font></b></th>
                    <th><b><font size='3'>四上</font></b></th>
                    <th><b><font size='3'>四下</font></b></th>
                    <th><b><font size='3'>五上</font></b></th>
                    <th><b><font size='3'>五下</font></b></th>
                    <th><b><font size='4'>外掃</font></b></th>
                    <th><b><font size='3'>一上</font></b></th>
                    <th><b><font size='3'>一下</font></b></th>
                    <th><b><font size='3'>二上</font></b></th>
                    <th><b><font size='3'>二下</font></b></th>
                    <th><b><font size='3'>三上</font></b></th>
                    <th><b><font size='3'>三下</font></b></th>
                    <th><b><font size='3'>四上</font></b></th>
                    <th><b><font size='3'>四下</font></b></th>
                    <th><b><font size='3'>五上</font></b></th>
                    <th><b><font size='3'>五下</font></b></th>
                    </tr>
                </thead>";
                while($row=mysqli_fetch_assoc($result)){
                    echo "<tbody>
                    <tr>
                    <th><font size='4'>".$row["class1"]."</font></th>
                    <td><font size='5'>".$row["1am"]."</font></td>
                    <td><font size='5'>".$row["1pm"]."</font></td>
                    <td><font size='5'>".$row["2am"]."</font></td>
                    <td><font size='5'>".$row["2pm"]."</font></td>
                    <td><font size='5'>".$row["3am"]."</font></td>
                    <td><font size='5'>".$row["3pm"]."</font></td>
                    <td><font size='5'>".$row["4am"]."</font></td>
                    <td><font size='5'>".$row["4pm"]."</font></td>
                    <td><font size='5'>".$row["5am"]."</font></td>
                    <td><font size='5'>".$row["5pm"]."</font></td>
                    <th><font size='4'>".$row["class2"]."</font></th>
                    <td><font size='5'>".$row["1amo"]."</font></td>
                    <td><font size='5'>".$row["1pmo"]."</font></td>
                    <td><font size='5'>".$row["2amo"]."</font></td>
                    <td><font size='5'>".$row["2pmo"]."</font></td>
                    <td><font size='5'>".$row["3amo"]."</font></td>
                    <td><font size='5'>".$row["3pmo"]."</font></td>
                    <td><font size='5'>".$row["4amo"]."</font></td>
                    <td><font size='5'>".$row["4pmo"]."</font></td>
                    <td><font size='5'>".$row["5amo"]."</font></td>
                    <td><font size='5'>".$row["5pmo"]."</font></td>
                    </tr>
                    </tbody>";
                }
                echo"</table>";
                ?>
            </div>
        </div>
        <br>
        <div class="contact"> <!--聯絡資訊-->
            <span class="whiteline">衛糾相關事務&ensp;</span>
            <span>&ensp;衛生組組長&ensp;林媼彩&ensp;&ensp;電話:&ensp;0935866031&ensp;Line&ensp;ID:&ensp;audrylin</span><br>
            <span class="whiteline">網站相關錯誤請聯絡&ensp;</span>
            <span class="whiteline">&ensp;電神Dora&ensp;&ensp;信箱:&ensp;s990004@baps.tp.edu.tw</span>
            <span>&ensp;eating&ensp;&ensp;Line&ensp;ID:&ensp;eva1235</span>
        </div>
    </body>
</html>