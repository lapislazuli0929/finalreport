<?php
    session_start();
    ob_start();
?>

<html>
    <head>
        <title>註冊</title>
        <style type="text/css">
html{
    height:100%;
}
* html body{
    height:100%;
}
body{
    margin:0;
    padding:0;
    font-family:Arial,sans-serif;
    min-height:100%;
    position:relative;
}
div a{
    text-decoration:none;
    color:#000000;
}
div.wrapper{
    padding-bottom:80px;
    margin-bottom: 0 5px; 
}
div.footer{
    clear:both;
    width:100%;
    position:absolute;
    bottom:0;
    height:80px;
    color:#fff;
    padding:20px 0px 0px 0px;
    text-align:center;
    background-color:#4d5363;
}
</style> 
</head><body bgcolor='#ffffff'>
    <div class="loginblock"style="background-color:orange;">
    <font size="7" face="DFKai-sb">註冊</font>
    </div>
    <form action="enrollconfirm.php" method="post" enctype="multipart/form-data">
            <center>
                <h1>註冊</h1>
                請輸入以下資訊完成註冊
                <table style = 'left'>
                    <tr><td>
                        電話 ：<input type = 'text' name = 'userphone' pattern = '[0-9]{10}' placeholder = '09xxxxxxxx' required><br>
                        密碼 ：<input type = 'password' name = 'password' pattern = '[a-zA-Z0-9]{4,16}' placeholder = '4~16字的英數組合' required><br>
                        信箱 ：<input type = 'email' name = 'email' placeholder = 'email' required><br>
                        <center><input type="submit" value="提交註冊資料"></center>
                    </td></tr>
	                
                </table>
                <h5><a href = 'login.php'><font color = 'gray'>回到登入頁</font></a></h5>
            </center>
	    </form>
        <div class="wrapper">
    <div class="footer" style = bottom: 0>
    甜資資飲料<br />
	    <a href='index.php'><b>回到首頁
        </b></a><br />
        <a href="#top">回頂端</a>
    </div>
</div>
    </body>
</html>
