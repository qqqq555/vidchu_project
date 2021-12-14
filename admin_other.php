<!--http://localhost/110-1project/admin_all.php-->
<?php
    session_start();
    if(!isset($_SESSION["admin_account"]) || ($_SESSION["admin_account"]=="")){
        header('refresh:0 ; url=not_login.php');
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
        <div class="container mt-3" style="margin-left: auto;margin-right: auto; position:relative;"> <!--其他功能-->
            <p><strong>其他功能</strong></p>
            <br>
            <p style="font-size: 25px; display:inline-block;">每日: </p>
            <button type="button" onclick="correct_day();" class="btn btn-secondary" style="font-size: 25px;">清空本日值勤紀錄</button>
            <br>
            <br>
            <p style="font-size: 25px; display:inline-block;">每週: </p>
            <button type="button" onclick="correct_week();" class="btn btn-secondary" style="font-size: 25px;">清空本週衛糾送出的資料&換板</button>
            <br>
            <br>
            <p style="font-size: 25px; display:inline-block;">每學期: </p>
            <button type="button" onclick="correct_chi();" class="btn btn-secondary" style="font-size: 25px;">刪除本學期成績</button>
            &nbsp;&nbsp;
            <button type="button" onclick="correct_chi2();" class="btn btn-secondary" style="font-size: 25px;">刪除本學期小衛糾回饋</button>
            &nbsp;&nbsp;
            <button type="button" onclick="correct_chi3();" class="btn btn-secondary" style="font-size: 25px;">清空本學期衛糾&小衛糾值勤次數</button>
            <br>
            <br>
            <p style="font-size: 25px; display:inline-block;">每學年: </p>
            <button type="button" onclick="correct_year();" class="btn btn-secondary" style="font-size: 25px;">刪除本學年衛糾&小衛糾名單</button>
        </div>
        <br>
        <div class="contact"> <!--聯絡資訊-->
            <span class="whiteline">衛糾相關事務&ensp;</span>
            <span>&ensp;衛生組組長&ensp;林媼彩&ensp;&ensp;電話:&ensp;0935866031&ensp;Line&ensp;ID:&ensp;audrylin</span><br>
            <span class="whiteline">網站相關錯誤請聯絡&ensp;</span>
            <span class="whiteline">&ensp;電神Dora&ensp;&ensp;信箱:&ensp;s990004@baps.tp.edu.tw</span>
            <span>&ensp;eating&ensp;&ensp;Line&ensp;ID:&ensp;eva1235</span>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
    </body>
    <script>
        function correct_day(){
            if(confirm("已經紀錄本日缺勤了嗎？(つ´ω`)つ")==true){
                location.href='delete_ampm.php';
            }
        }
        function correct_week(){
            if(confirm("已經在評分整理匯入本週成績了嗎？(つ´ω`)つ")==true){
                location.href='delete_score.php';
            }
        }
        function correct_chi(){
            if(confirm("已經備份本學期成績了嗎？(つ´ω`)つ")==true){
                location.href='delete_all_score.php';
            }
        }
        function correct_chi2(){
            if(confirm("已經備份本學期小衛糾回饋了嗎？(つ´ω`)つ")==true){
                location.href='delete_feedback.php';
            }
        }
        function correct_chi3(){
            if(confirm("已經發公服了嗎？確定用不到值勤次數了嗎？(つ´ω`)つ")==true){
                location.href='delete_work.php';
            }
        }
        function correct_year(){
            if(confirm("確定用不到本學年衛糾&小衛糾名單了嗎？(つ´ω`)つ")==true){
                location.href='delete_vandsv.php';
            }
        }
    </script>
</html>