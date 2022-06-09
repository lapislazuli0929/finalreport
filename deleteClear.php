<?php
    require("DBconnect.php");
    $shNo=$_GET["uNo"];
    $SQL="DELETE FROM shopcaradmin WHERE shNo='$shNo'";
    

    if(mysqli_query($link,$SQL)){
        echo "<script type='text/javascript'>";
        echo "alert('訂單已完成');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=adminControl.php'>";
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('訂單未完成');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=adminControl.php'>";
    }
?>