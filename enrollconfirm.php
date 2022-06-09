<?php
    require("DBconnect.php");

    $userphone=$_POST["userphone"];
    $uPwd=$_POST["password"];
    $uemail=$_POST["email"];

    $SQL="INSERT INTO logininfo (Uphone, Upwd, Umail, Urole) VALUES ('$userphone','$uPwd','$uemail', 'user')";
    if(mysqli_query($link, $SQL)){
        echo "<script type='text/javascript'>";
        echo "alert('註冊成功！');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=login.php'>";
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('註冊失敗！');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=register.php'>";
    }


?>