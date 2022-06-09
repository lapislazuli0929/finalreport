<?php
    require("DBconnect.php");
    $sNo=$_GET["uNo"];
    $SQL="DELETE FROM shopcar WHERE sNo='$sNo'";
    

    if(mysqli_query($link,$SQL)){
        echo "<script type='text/javascript'>";
        echo "alert('刪除ok');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=checkout.php'>";
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('刪除失敗');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=checkout.php'>";
    }
?>