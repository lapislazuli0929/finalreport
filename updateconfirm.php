<?php
    require("DBconnect.php");
    $uNo=$_POST["userphone"];
    $uPwd=$_POST["upsw"];
    

    $SQL="UPDATE logininfo SET  Upwd='$uPwd'  WHERE Uphone='$uNo'";

    if(mysqli_query($link,$SQL)){
        echo "<script type='text/javascript'>";
        echo "alert('更新成功！');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=index.php'>";
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('更新失敗！');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=index.php'>";
    }
?>