<?php
session_start();
if(@$_SESSION["login"]=="NO" || @$_SESSION["login"]==""){
    echo "<script type='text/javascript'>";
    echo "alert('您未登入！請登入後繼續...');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=login.php'>";
}
else{
require("DBconnect.php");



$price=@$_SESSION["price"]; 
$mixd=@$_SESSION["mixd"];
$mixm=@$_SESSION["mixm"]; 
$drink=@$_SESSION["drink"];
$choose=@$_POST["choose"];
$address=@$_POST["address"];



$SQL="INSERT INTO test (mixd,mixm,drink,price,choose,address) VALUES ('$mixd','$mixm','$drink','$price','$choose','$address')";
    if(mysqli_query($link, $SQL)){
        echo "<script type='text/javascript'>";
        echo "alert('感謝您的購買！您的飲料已開始製作！');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=index.php'>";
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('下單失敗！');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=index.php'>";
    }

}
    
?>
