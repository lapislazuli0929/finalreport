<?php
    require("DBconnect.php");
    $Uno=$_GET["Uno"];

    $SQL="SELECT * FROM logininfo WHERE Uno='$Uno'";
   
    if($result=mysqli_query($link,$SQL)){
        while($row=mysqli_fetch_assoc($result)){
          
            $uName=$row['Uphone'];
            $uPwd=$row['Upwd'];
            $uRole=$row['Urole'];
        }
    }
?>

<h1>更換密碼</h1>

<form action="updateconfirm.php" method="post">
    使用者編號: <?php echo $Uno;?></br>
    <input type="hidden" name="Uno" value='<?php echo $Uno;?>'>

    設定新的密碼:<input type="text" name="uPwd" value='<?php echo $uPwd;?>'></br>

    <input type="submit" Value="更新"></br>
</form>