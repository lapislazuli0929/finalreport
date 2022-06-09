<?php
    require("DBconnect.php");
    $uNo=$_GET["uNo"];
    $SQL="DELETE FROM logininfo WHERE Uno='$uNo'";
    

    if(mysqli_query($link,$SQL)){
        echo "<script type='text/javascript'>";
        echo "alert('刪除ok');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=userControl.php'>";
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('刪除失敗');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=userControl.php'>";
    }
?>