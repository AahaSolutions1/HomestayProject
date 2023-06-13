<?php



 require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\Exception;


require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;

// $mail->Host = "smtp.example.com";
// $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
// $mail->Port = 587;

$mail->Username = 'shalu2004pdy@gmail.com';
$mail->Password ='mcokfgbzslbncjic';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('shalu2004pdy@gmail.com');
$mail->addAddress($_POST["Email"]);
$mail->isHTML(true);

$mail->Subject =$_POST["Phone"];
$mail->Body =$_POST["Message"];

$mail->send();

echo
"
<script>
alert('Sent successfully');
document.location.href='contact.php'
</script>
";
}
?>