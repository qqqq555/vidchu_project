<!--http://localhost/110-1project/adminlogin.php-->
<?php
    session_start();
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
            }
            .whiteline{
                border-right: 2px solid white;
            }
            #admin_account, #admin_password{
                width: 200px;
                height: 20px;
                margin: 10px;
                color: #4a595b;
                font-size: 20px;
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
                text-align:center;  
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
            <p><strong>管理頁面</strong></p>
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
          <form method="POST" action="adminpw.php">
            <input type="text" id="admin_account" name="admin_account" placeholder="帳號" required>
            <div class="tab"></div>
            <input type="password" id="admin_password" name="admin_password" placeholder="密碼" required>
            <div class="tab"></div>
            <br>
            <input type="submit" name="submit" value="登入" class="submit">
          </form>
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

  
            if (login.style.display === "none") {
                login.style.display = "block";  //login出現
                document.getElementById("admin_account").value="登入";
                document.getElementById("admin_password").value="登入";
            }
        }
    </script>
   
</html>