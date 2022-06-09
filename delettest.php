<?php
    require("DBconnect.php");
    $ss=$_GET["uNo"];
    $SQL="DELETE FROM test WHERE ss='$ss'";
    

    if(mysqli_query($link,$SQL)){
        echo "<script type='text/javascript'>";
        echo "alert('訂單已完成');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=testadmin.php'>";
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('訂單未完成');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=testadmin.php'>";
    }
?>