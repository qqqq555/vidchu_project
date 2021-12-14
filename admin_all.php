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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
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
        <div class="container mt-3 "> <!--名單統整-->
            <p><strong>名單統整</strong></p> 
            <div class="btn-group binpai">
                <button type="button" onclick="location.href='admin_all.php'" class="btn btn-secondary active" style="font-size: 25px;">衛糾</button>
                <button type="button" onclick="location.href='admin_allsv.php'" class="btn btn-secondary" style="font-size: 25px;">小衛糾</button>
                <button type="button" onclick="location.href='admin_allmiss.php'" class="btn btn-secondary" style="font-size: 25px;">今日缺勤</button>
            </div>
        </div>
        <br>
        <div class="container mt-3"><!--名單統整之衛糾-->
        <form action="v_delete.php" method="post">
        <?php
            require('connect_mysql.php');
            $sql_query="SELECT * FROM v order by v_studynum";
            $result=mysqli_query($db_link,$sql_query);
            echo "<table width='800px' class='table table-hover' style='margin:auto;'>";
			echo "<thead>
                <tr>
				<td><b><font size='5'>學號</font></b></td>
				<td><b><font size='5'>班級</font></b></td>
				<td><b><font size='5'>座號</font></b></td>
				<td><b><font size='5'>姓名</font></b></td>
                <td><b><font size='5'>組別</font></b></td>
                <td><b><font size='5'>值勤日</font></b></td>
                <td><b><font size='5'>值勤次數</font></b></td>
                <td><b><font size='5'>刪除</font></b></td>
			    </tr>
            </thead>";
			while($row=mysqli_fetch_assoc($result)){
				echo "<tbody>
                <tr>
				<td><font size='5'>".$row["v_studynum"]."</font></td>
				<td><font size='5'>".$row["v_class"]."</font></td>
				<td><font size='5'>".$row["v_classnum"]."</font></td>
				<td><font size='5'>".$row["v_name"]."</font></td>
                <td><font size='5'>".$row["v_team"]."</font></td>
                <td><font size='5'>".$row["v_week"]."</font></td>
                <td><font size='5'>".$row["v_work"]."</font></td>
                <td><i class='fas fa-trash-alt'><a href='v_delete.php?v_studynum=".$row['v_studynum']."'><input method='POST' type='button' id='v_delete' name='v_delete' class='btn'></a></i></td>
				</tr>
                </tbody>";
			}
			echo"</table>";
            ?>
        </form>
        </div>
        <br><br>
        <div class="contact container-fluid "> <!--聯絡資訊-->
            <span class="whiteline col-sm-auto">衛糾相關事務&nbsp;</span>
            <span class="col-sm-auto">&nbsp;衛生組組長&nbsp;林媼彩&nbsp;&nbsp;電話:&nbsp;0935866031&nbsp;&nbsp;LineID:&nbsp;audrylin</span><br>
            <span class="whiteline col-sm-auto">網站相關錯誤請聯絡&nbsp;</span>
            <span class="whiteline col-sm-auto">&nbsp;電神Dora&nbsp;&nbsp;信箱:&nbsp;s990004@baps.tp.edu.tw</span>
            <span class="col-sm-auto">&nbsp;eating&nbsp;&nbsp;LineID:&nbsp;eva1235</span>
        </div>
    </body>
</html>