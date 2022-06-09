
<?php
    require("DBconnect.php");
    if(isset($_COOKIE["UID"])){
        $cookieID=$_COOKIE["UID"];
    }
    $SQL3="SELECT * FROM logininfo WHERE Uphone='$cookieID'";
    if($result=mysqli_query($link, $SQL3)){
        while($row2=mysqli_fetch_assoc($result)){
            $Umail=$row2['Umail'];
        }
    }

    
       

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer/src/Exception.php';
require 'PHPMailer/PHPMailer/src/PHPMailer.php';
require 'PHPMailer/PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'a1093369@mail.nuk.edu.tw';                     //SMTP username
    $mail->Password   = '';                               //SMTP password
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;
    $mail->SMTPSecure = "ssl";                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('a1093369@mail.nuk.edu.tw', 'Mailer');
    $mail->addAddress($Umail, 'Admin');     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'NUK Beverage';
    $mail->Body    = '感謝您的訂購!';
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


?>

<?php
session_start();
require("DBconnect.php");

$alldrink=@$_SESSION['drink']; 
$sumprice=@$_SESSION['price'];
$choose=@$_POST["choose"];
$address=@$_POST["address"];

$SQL="INSERT INTO shopcaradmin (alldrink, sumprice, choose, address) VALUES ('$alldrink','$sumprice', '$choose', '$address')";
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

$SQL2="DELETE FROM shopcar";
mysqli_query($link, $SQL2); 
    
?>

