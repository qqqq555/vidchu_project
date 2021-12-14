<!--http://localhost/110-1project/v_login.php-->
<?php
    session_start();
    $_SESSION['v_studynum2']='0';
    $_SESSION['v_class']='0';
    $_SESSION['v_classnum']='0';
    $_SESSION['v_name']='0';
    $_SESSION['v_password2']='0';
    $_SESSION['v_comfirm_password']='0';
    $_SESSION['v_studynum']='0';
    $_SESSION['v_password']='0';
    $_SESSION['v_team']='0';
    $_SESSION['v_week']='0';
    if(isset($_POST['signup_submit'])){
        insert();
    }
    function insert(){
        $v_studynum2=$_POST['v_studynum2'];
        $v_class=$_POST['v_class'];
        $v_classnum=$_POST['v_classnum'];
        $v_name=$_POST['v_name'];
        $v_team=$_POST['v_team'];
        $v_week=$_POST['v_week'];
        $v_password2=$_POST['v_password2'];
        $v_comfirm_password=$_POST['v_comfirm_password'];
        require("connect_mysql.php");
        $sql_query="INSERT INTO v(v_studynum,v_class,v_classnum,v_name,v_team,v_week,v_password,v_work)
                    VALUES('$v_studynum2','$v_class','$v_classnum','$v_name','$v_team','$v_week','$v_password2','0')";
        $result=mysqli_query($db_link,$sql_query) or die("新增資料失敗，請洽詢相關人員");
        header('refresh:1;url=index.html');
        echo "<script>alert('註冊成功，請重新登入，正在回到首頁')</script>";
    }
    if(isset($_POST['login_submit'])){
      check();
    }
    function check(){
        $v_studynum=$_POST['v_studynum'];
        $_SESSION['v_studynum']=$v_studynum;
        $v_password=$_POST['v_password'];
        require('connect_mysql.php');
        $sql_query_login="SELECT * FROM v where v_studynum='$v_studynum' AND v_password='$v_password'";
        $result=mysqli_query($db_link,$sql_query_login) or die("查詢失敗，請洽詢相關人員");
        if(mysqli_num_rows($result)){
            $sql="SELECT * FROM v where v_studynum='$v_studynum'";
            $v_team_select=mysqli_query($db_link,$sql);
            $row = mysqli_fetch_array($v_team_select);
            if($row['v_team']=='第23組'){
                header('refresh:1;url=vidchu-23.php');
                echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
            }
            else if($row['v_team']=='第1組'){
                $team=1+$row['v_change'];
            }
            else if($row['v_team']=='第2組'){
                $team=2+$row['v_change'];
            }
            else if($row['v_team']=='第3組'){
                $team=3+$row['v_change'];
            }
            else if($row['v_team']=='第4組'){
                $team=4+$row['v_change'];
            }
            else if($row['v_team']=='第5組'){
                $team=5+$row['v_change'];
            }
            else if($row['v_team']=='第6組'){
                $team=6+$row['v_change'];
            }
            else if($row['v_team']=='第7組'){
                $team=7+$row['v_change'];
            }
            else if($row['v_team']=='第8組'){
                $team=8+$row['v_change'];
            }
            else if($row['v_team']=='第9組'){
                $team=9+$row['v_change'];
            }
            else if($row['v_team']=='第10組'){
                $team=10+$row['v_change'];
            }
            else if($row['v_team']=='第11組'){
                $team=11+$row['v_change'];
            }
            else if($row['v_team']=='第12組'){
                $team=12+$row['v_change'];
            }
            else if($row['v_team']=='第13組'){
                $team=13+$row['v_change'];
            }
            else if($row['v_team']=='第14組'){
                $team=14+$row['v_change'];
            }
            else if($row['v_team']=='第15組'){
                $team=15+$row['v_change'];
            }
            else if($row['v_team']=='第16組'){
                $team=16+$row['v_change'];
            }
            else if($row['v_team']=='第17組'){
                $team=17+$row['v_change'];
            }
            else if($row['v_team']=='第18組'){
                $team=18+$row['v_change'];
            }
            else if($row['v_team']=='第19組'){
                $team=19+$row['v_change'];
            }
            else if($row['v_team']=='第20組'){
                $team=20+$row['v_change'];
            }
            else if($row['v_team']=='第21組'){
                $team=21+$row['v_change'];
            }
            else if($row['v_team']=='第22組'){
                $team=22+$row['v_change'];
            }
            if($team>22){
                $team=$team-22;
            }
            $date="SELECT CURTIME()"; //time
            $result_date=mysqli_query($db_link,$date);
            if (mysqli_num_rows($result_date)>0) {
                while($rowData=mysqli_fetch_array($result_date)){
                    if($rowData[0]>12){
                        if($team==1){
                            header('refresh:1;url=vidchu-1_pm.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else if($team==2){
                            header('refresh:1;url=vidchu-2_pm.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else if($team==3){
                            header('refresh:1;url=vidchu-3_pm.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else if($team==4){
                            header('refresh:1;url=vidchu-4_pm.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else if($team==5){
                            header('refresh:1;url=vidchu-5_pm.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else if($team==6){
                            header('refresh:1;url=vidchu-6_pm.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else if($team==7){
                            header('refresh:1;url=vidchu-7_pm.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else if($team==8){
                            header('refresh:1;url=vidchu-8_pm.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else if($team==9){
                            header('refresh:1;url=vidchu-9_pm.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else if($team==10){
                            header('refresh:1;url=vidchu-10_pm.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else if($team==11){
                            header('refresh:1;url=vidchu-11_pm.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else if($team==12){
                            header('refresh:1;url=vidchu-12_pm.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else if($team==13){
                            header('refresh:1;url=vidchu-13_pm.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else if($team==14){
                            header('refresh:1;url=vidchu-14_pm.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else if($team==15){
                            header('refresh:1;url=vidchu-15_pm.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else if($team==16){
                            header('refresh:1;url=vidchu-16_pm.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else if($team==17){
                            header('refresh:1;url=vidchu-17_pm.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else if($team==18){
                            header('refresh:1;url=vidchu-18_pm.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else if($team==19){
                            header('refresh:1;url=vidchu-19_pm.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else if($team==20){
                            header('refresh:1;url=vidchu-20_pm.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else if($team==21){
                            header('refresh:1;url=vidchu-21_pm.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else{
                            header('refresh:1;url=vidchu-22_pm.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                    }
                    else{
                        if($team==1){
                            header('refresh:1;url=vidchu-1_am.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else if($team==2){
                            header('refresh:1;url=vidchu-2_am.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else if($team==3){
                            header('refresh:1;url=vidchu-3_am.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else if($team==4){
                            header('refresh:1;url=vidchu-4_am.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else if($team==5){
                            header('refresh:1;url=vidchu-5_am.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else if($team==6){
                            header('refresh:1;url=vidchu-6_am.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else if($team==7){
                            header('refresh:1;url=vidchu-7_am.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else if($team==8){
                            header('refresh:1;url=vidchu-8_am.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else if($team==9){
                            header('refresh:1;url=vidchu-9_am.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else if($team==10){
                            header('refresh:1;url=vidchu-10_am.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else if($team==11){
                            header('refresh:1;url=vidchu-11_am.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else if($team==12){
                            header('refresh:1;url=vidchu-12_am.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else if($team==13){
                            header('refresh:1;url=vidchu-13_am.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else if($team==14){
                            header('refresh:1;url=vidchu-14_am.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else if($team==15){
                            header('refresh:1;url=vidchu-15_am.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else if($team==16){
                            header('refresh:1;url=vidchu-16_am.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else if($team==17){
                            header('refresh:1;url=vidchu-17_am.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else if($team==18){
                            header('refresh:1;url=vidchu-18_am.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else if($team==19){
                            header('refresh:1;url=vidchu-19_am.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else if($team==20){
                            header('refresh:1;url=vidchu-20_am.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else if($team==21){
                            header('refresh:1;url=vidchu-21_am.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                        else{
                            header('refresh:1;url=vidchu-22_am.php');
                            echo "<script>alert('登入成功，即將跳轉至評分頁面')</script>";
                        }
                    }
                }
            }
            
        }
        else{
            echo"<script>alert('學號或密碼錯誤，請重新登入')</script>";
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
                color: #4a595b;
                font-size: 50px;
                border: 0px;
                margin: 0;
                text-align:center;
            }
            .top{ 
                
                box-sizing: border-box;
                width: 100%;
                background-color: #CDE2E4;
                margin: 0 auto;
                border: 0px;
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
                position: relative;
            }
            .whiteline{
                border-right: 2px solid white;
            }
            #v_studynum, #v_studynum2, #v_password, h3, #v_name, #v_comfirm_password, #v_password2, #v_classnum, #v_class, #v_team, #v_week{
                width: 200px;
                height: 20px;
                margin: 10px;
                color: #4a595b;
                font-size: 20px;
            }
            h5{
                margin: 20px;
                color: #a3a2a3;
                font-size: 17px;
            }
            h5:hover{
                color: black;
            }
            #container1{
                margin: 50px;
                padding: 10px;
                width: 230px;
                height: 300px;
                background-color: white;
                border-radius: 5px;
                border-top: 10px solid #B5C3C8;
                box-shadow: 0 0px 70px rgba(0, 0, 0, 0.1);
                position:relative;   
                margin: auto;
                
            }
            #container2{
                margin: 50px;
                padding: 10px;
                width: 230px;
                height: 675px;
                background-color: white;
                border-radius: 5px;
                border-top: 10px solid #B5C3C8;
                box-shadow: 0 0px 70px rgba(0, 0, 0, 0.1);
                position:relative;   
                margin: auto;
                display: none;
            }

            .submit{
                color: white;  
                background: #B5C3C8;
                width: 200px;
                height: 30px;
                margin: 10px;
                padding: 5px;
                border-radius: 5px;
                border: 0px;
                font-size: 20px;
            }

            .submit:hover{
                background: #919ea3;
            }
            input{
                padding: 5px;
                border: none; 
                border:solid 1px #ccc;
                border-radius: 5px;
            }
        </style>
    </head>
    <body>
        <div class="top"> <!--標題-->
        <header>
            <p><strong>衛糾</strong></p>
        </header>
        </div>
    <div> <!--登入-->
      <br>
      <br>
      <div id="container1">
        <div class="login">
          <br>
          <p style="font-size: 30px;">登入 Login</p>
          <br>
          <form method="POST">
            <input type="text" id="v_studynum" name="v_studynum" placeholder="學號" required>
            <div class="tab"></div>
            <input type="password" id="v_password" name="v_password" placeholder="密碼" required>
            <div class="tab"></div>
            <br>
            <input type="submit" name="login_submit" value="登入" class="submit">
          </form>
          <h5 onclick="show_hide()">註冊帳戶</h5>
        </div>
      </div>
    </div>
    <div> <!--註冊-->
        <div id="container2">
            <div class="signup">
                <p style="font-size: 30px;">註冊 Sign Up</p>
                <form method="POST"  onsubmit="return checkform();">
                    <label for="v_studynum">學號：</label>
                    <input type="text" id="v_studynum2" name="v_studynum2" placeholder="學號" required>
                    <div class="tab"></div>
                    <label for="v_class">班級：</label>
                    <select id="v_class" name="v_class" required>
                        <option selected>選擇...</option>
                        <option>一仁</option>
                        <option>一義</option>
                        <option>一禮</option>
                        <option>一智</option>
                        <option>一忠</option>
                        <option>一孝</option>
                        <option>一博</option>
                        <option>一愛</option>
                        <option>一和</option>
                        <option>一平</option>
                        <option>一誠</option>
                        <option>一信</option>
                        <option>一敬</option>
                        <option>一業</option>
                        <option>一樂</option>
                        <option>一群</option>
                        <option>一簡</option>
                        <option>一捷</option>
                        <option>一敏</option>
                        <option>一慧</option>
                        <option>一廉</option>
                        <option>高二</option>
                    </select>
                    <div class="tab"></div>
                    <label for="v_classnum">座號：</label>
                    <select id="v_classnum" name="v_classnum" required>
                        <option selected>選擇...</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>                            
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>                            
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>                            
                        <option value="31">31</option>
                        <option value="32">32</option>
                        <option value="33">33</option>
                        <option value="34">34</option>
                        <option value="35">35</option>
                        <option value="36">36</option>
                        <option value="37">37</option>                            
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42">42</option>
                        <option value="43">43</option>
                        <option value="44">44</option>
                        <option value="45">45</option>
                    </select>
                    <div class="tab"></div>
                    <label for="v_name">姓名：</label>
                    <input type="text" id="v_name" name="v_name" placeholder="姓名" required>
                    <div class="tab"></div>
                    <label for="v_team">組別：</label>
                    <select id="v_team" name="v_team" required>
                        <option selected>選擇...</option>
                        <option>第1組</option>
                        <option>第2組</option>
                        <option>第3組</option>
                        <option>第4組</option>
                        <option>第5組</option>
                        <option>第6組</option>
                        <option>第7組</option>
                        <option>第8組</option>
                        <option>第9組</option>
                        <option>第10組</option>
                        <option>第11組</option>
                        <option>第12組</option>
                        <option>第13組</option>
                        <option>第14組</option>
                        <option>第15組</option>
                        <option>第16組</option>
                        <option>第17組</option>
                        <option>第18組</option>
                        <option>第19組</option>
                        <option>第20組</option>
                        <option>第21組</option>
                        <option>第22組</option>
                        <option>第23組</option>
                    </select>
                    <div class="tab"></div>
                    <label for="v_week">星期幾值勤：</label>
                    <select id="v_week" name="v_week" required>
                        <option selected>選擇...</option>
                        <option>星期一</option>
                        <option>星期二</option>
                        <option>星期三</option>
                        <option>星期四</option>
                        <option>星期五</option>
                    </select>
                    <div class="tab"></div>                        
                    <label for="v_password2">密碼：</label>
                    <input type="password" id="v_password2" name="v_password2" placeholder="密碼" required>
                    <div class="tab"></div>
                    <label for="v_comfirm_password">確認密碼：</label>
                    <input type="password" id="v_comfirm_password" name="v_comfirm_password" placeholder="確認密碼" required>
                    <div class="tab"></div>            
                    <input type="submit" name="signup_submit" value="註冊" class="submit">
                </form>  

                <h5 onclick="show_hide()">登入帳號</h5>
            </div>
        </div>
    </div>
        <br>
        <br>
        <div class="contact"> <!--聯絡資訊-->
            <br>
            <span class="whiteline">衛糾相關事務&ensp;</span>
            <span>&ensp;衛生組組長&ensp;林媼彩&ensp;&ensp;電話:&ensp;0935866031&ensp;Line&ensp;ID:&ensp;audrylin</span><br>
            <span class="whiteline">網站相關錯誤請聯絡&ensp;</span>
            <span class="whiteline">&ensp;電神Dora&ensp;&ensp;信箱:&ensp;s990004@baps.tp.edu.tw</span>
            <span>&ensp;eating&ensp;&ensp;Line&ensp;ID:&ensp;eva1235</span>
        </div>
    </body>
    <script>
        function show_hide() {
            var login = document.getElementById("container1");
            var signup = document.getElementById("container2");
            if(login.style.display === "none"){
                login.style.display = "block";  //login出現
                document.getElementById("v_studynum");
                document.getElementById("v_password");
                signup.style.display = "none";  //signup消失
            }
            else{
                login.style.display = "none";   //login消失
                signup.style.display = "block"; //signup出現
                signup.style.visibility="visible";
                document.getElementById("v_studynum2");
                document.getElementById("v_class");
                document.getElementById("v_classnum");
                document.getElementById("v_name");
                document.getElementById("v_password2");
                document.getElementById("v_comfirm_password");
            }
        }
        function checkform(){
            var v_password2=document.getElementById("v_password2").value;
            var v_comfirm_password=document.getElementById("v_comfirm_password").value;
            if(v_comfirm_password!=v_password2){
                alert('密碼與確認密碼不相符Σ(ﾟдﾟ)');
                return false;
            }
            if(confirm("確定資料都無誤嗎？(つ´ω`)つ")==true){
                return true;
            }
            else{
                return false;
            }
        }
    </script>
   
</html>