<!--http://localhost/110-1project/sv_login.php-->
<?php
    session_start();
    $_SESSION['sv_studynum2']='0';
    $_SESSION['sv_class']='0';
    $_SESSION['sv_classnum']='0';
    $_SESSION['sv_name']='0';
    $_SESSION['sv_password2']='0';
    $_SESSION['sv_comfirm_password']='0';
    $_SESSION['sv_studynum']='0';
    $_SESSION['sv_password']='0';
    if(isset($_POST['signup_submit'])){
        insert();
    }
    function insert(){
        $sv_studynum2=$_POST['sv_studynum2'];
        $sv_class=$_POST['sv_class'];
        $sv_classnum=$_POST['sv_classnum'];
        $sv_name=$_POST['sv_name'];
        $sv_password2=$_POST['sv_password2'];
        $sv_comfirm_password=$_POST['sv_comfirm_password'];
        require("connect_mysql.php");
        $sql_query="INSERT INTO sv(sv_studynum,sv_class,sv_classnum,sv_name,sv_password,sv_work)
                    VALUES('$sv_studynum2','$sv_class','$sv_classnum','$sv_name','$sv_password2','0')";
        $result=mysqli_query($db_link,$sql_query) or die("新增資料失敗");
        header('refresh:1;url=index.html');
        echo "<script>alert('註冊成功，請重新登入，正在回到首頁')</script>";
    }
    if(isset($_POST['login_submit'])){
      check();
    }
    function check(){
        $sv_studynum=$_POST['sv_studynum'];
        $_SESSION['sv_studynum']=$sv_studynum;
        $sv_password=$_POST['sv_password'];
        require('connect_mysql.php');
        $sql_query_login="SELECT * FROM sv where sv_studynum='$sv_studynum' AND sv_password='$sv_password'";
        $result=mysqli_query($db_link,$sql_query_login) or die("查詢失敗，請洽詢相關人員");
        if(mysqli_num_rows($result)){
            header('refresh:1;url=s2.php');
            echo "<script>alert('登入成功，即將跳轉至回饋頁面')</script>";
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
            #sv_studynum, #sv_studynum2, #sv_password, h3, #sv_name, #sv_comfirm_password, #sv_password2, #sv_classnum, #sv_class{
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
                height: 550px;
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
            <p><strong>小衛糾</strong></p>
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
            <input type="text" id="sv_studynum" name="sv_studynum" placeholder="學號" required>
            <div class="tab"></div>
            <input type="password" id="sv_password" name="sv_password" placeholder="密碼" required>
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
                <form method="POST" onsubmit="return checkform();">
                    <label for="sv_studynum2">學號：</label>
                    <input type="text" id="sv_studynum2" name="sv_studynum2" placeholder="學號" required>
                    <div class="tab"></div>
                    <label for="sv_class">班級：</label>
                    <select id="sv_class" name="sv_class" required>
                        <option selected>選擇...</option>
                        <option>二仁</option>
                        <option>二義</option>
                        <option>二禮</option>
                        <option>二智</option>
                        <option>二忠</option>
                        <option>二孝</option>
                        <option>二博</option>
                        <option>二愛</option>
                        <option>二和</option>
                        <option>二平</option>
                        <option>二誠</option>
                        <option>二信</option>
                        <option>二敬</option>
                        <option>二業</option>
                        <option>二樂</option>
                        <option>二群</option>
                        <option>二簡</option>
                        <option>二捷</option>
                        <option>二敏</option>
                        <option>二慧</option>
                        <option>二廉</option>
                    </select>
                    <div class="tab"></div>
                    <label for="sv_classnum">座號：</label>
                    <select id="sv_classnum" name="sv_classnum" required>
                        <option selected>選擇...</option>
                        <option>01</option>
                        <option>02</option>
                        <option>03</option>
                        <option>04</option>
                        <option>05</option>
                        <option>06</option>
                        <option>07</option>
                        <option>08</option>
                        <option>09</option>
                        <option>10</option>                            
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>                            
                        <option>24</option>
                        <option>25</option>
                        <option>26</option>
                        <option>27</option>
                        <option>28</option>
                        <option>29</option>
                        <option>30</option>                            
                        <option>31</option>
                        <option>32</option>
                        <option>33</option>
                        <option>34</option>
                        <option>35</option>
                        <option>36</option>
                        <option>37</option>                            
                        <option>38</option>
                        <option>39</option>
                        <option>40</option>
                        <option>41</option>
                        <option>42</option>
                        <option>43</option>
                        <option>44</option>
                        <option>45</option>
                    </select>
                    <div class="tab"></div>
                    <label for="sv_name">姓名：</label>
                    <input type="text" id="sv_name" name="sv_name" placeholder="姓名" required>
                    <div class="tab"></div>
                    <label for="sv_password2">密碼：</label>
                    <input type="password" id="sv_password2" name="sv_password2" placeholder="密碼" required>
                    <div class="tab"></div>
                    <label for="sv_comfirm_password">確認密碼：</label>
                    <input type="password" id="sv_comfirm_password" name="sv_comfirm_password" placeholder="確認密碼" required>
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
                document.getElementById("sv_studynum");
                document.getElementById("sv_password");
                signup.style.display = "none";  //signup消失
            }
            else{
                login.style.display = "none";   //login消失
                signup.style.display = "block"; //signup出現
                signup.style.visibility="visible";
                document.getElementById("sv_studynum2");
                document.getElementById("sv_class");
                document.getElementById("sv_classnum");
                document.getElementById("sv_name");
                document.getElementById("sv_password2");
                document.getElementById("sv_comfirm_password");
            }
        }
        function checkform(){
            var sv_password2=document.getElementById("sv_password2").value;
            var sv_comfirm_password=document.getElementById("sv_comfirm_password").value;
            if(sv_comfirm_password!=sv_password2){
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