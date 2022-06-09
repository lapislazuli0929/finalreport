<?php
    session_start();
    ob_start();
?>

<html>
    <head>
        <title>註冊</title>
        <style type="text/css">
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
	    <form action = '' method = 'post'>
            <center>
                <h1>註冊</h1>
                請輸入以下資訊完成註冊
                <table style = 'left'>
                    <tr><td>
                        帳號 ：<input type = 'text' name = 'username' pattern = '[a-zA-Z0-9]{4,16}' placeholder = '4~16字的英數組合' required><br>
                        密碼 ：<input type = 'password' name = 'password' pattern = '[a-zA-Z0-9]{4,16}' placeholder = '4~16字的英數組合' required><br>
                        信箱 ：<input type = 'email' name = 'email' placeholder = 'email' required><br>
                        電話 ：<input type = 'tel' name = 'tel' pattern = '09[0-9]{8}' placeholder = '請加上國際碼' required><br>
                    </td></tr>
	                <tr><td align = 'center'><input type = 'submit' name = 'signup' value = '註冊'></td></tr>
                </table>
                <h5><a href = 'login.php'><font color = 'gray'>回到登入頁</font></a></h5>
            </center>
	    </form>
        <div class="wrapper">
    <div class="footer" style = bottom: 0>
	    XX飲料<br />
	    <a href='index.php'><b>回到首頁
        </b></a>
    </div>
</div>
    </body>
</html>

<?php
    if (isset($_POST['signup'])){
        $_SESSION['signup'] = 'true';
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['tel'] = $_POST['tel'];
        header('location:signupinfo.php');
    }
    ob_end_flush();
?>