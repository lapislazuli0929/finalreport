<?php
    session_start();

    $link=@mysqli_connect(
        'localhost',
        'root',
        '',
        'accountinfo'
    );
?>
<html>
    <head>
    <title>會員登入</title>
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
    <font size="7" face="DFKai-sb">登入</font>
    </div>
	<form action = '' method = 'post'>
        <center>
            <h1>會員登入</h1>
<?php
    if(isset($_COOKIE["UID"])){
        $cookieID=$_COOKIE["UID"];
        header('Location: index.php');
    }else{
        echo '歡迎您的到來！請輸入您的電話密碼！';
    }
?>
    <table style = 'left'>
    <tr><td>
        <form action="" method="post" enctype="mutiport/form-data   ">
            
            電話：<input type="text" name="userphone" placeholder="你的電話" required></br>
            密碼：<input type="password" name="upsw" placeholder="你的密碼" required></br>
            身分：<input type="radio" name="role" value="user" >User
                 <input type="radio" name="role" value="admin">Admin</br>
                <tr><td align = 'center'><input type = 'submit' name = 'login' value = '登入'></td><td></td></tr>
    </table>
        <h5><a href = 'register.php'><font color = 'gray'>還沒註冊？</font></a></h5>
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

<?php
//$aID="admin";
//$aPWD="5201314";


    if(isset($_POST["userphone"])){
        if($_POST["userphone"]!=null){
            $uId=$_POST["userphone"];
            $uPwd=$_POST["upsw"];
            $uRole=$_POST["role"];
            

            $SQL="SELECT * FROM logininfo WHERE Uphone='$uId' AND Upwd='$uPwd' AND Urole='$uRole'" ;

            $result=mysqli_query($link,$SQL);

            if(mysqli_num_rows($result)==1&&$uRole=='user'){
                $_SESSION["login"]="Yes";
                setcookie("UID",$uId,time()+17280);
                header('Location: index.php');
            }elseif($uRole=='admin'&&$_POST["userphone"]=='0970768325'){
                $_SESSION["login"]="Yes";
                setcookie("UID",$uId,time()+17280);
                header('Location: index.php');
            }else{

                echo "<script type='text/javascript'>";
                echo "alert('登入失敗！');";
                echo "</script>";
                echo "<meta http-equiv='Refresh' content='0; url=login.php'>";
            }
            //if($aID==$uId && $aPWD==$uPwd){
                //echo "登入成功";
               // $_SESSION["login"]="Yes";
              //  setcookie("UID",$uId,time()+17280);
             //   header('Location= register.php');
            //}else{
            //    echo "輸入錯誤";
            //}           
        }
    }  
?>
