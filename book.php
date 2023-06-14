

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phnumber = $_POST["phnumber"];
    $email = $_POST["email"];
    $aadharno=$_POST["aadharno"];
    $checkin = $_POST["checkin"];
    $checkout = $_POST["checkout"];

    // Instantiate PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'shalu2004pdy@gmail.com';
        $mail->Password = 'lidallylimhdheen';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = '465';

        // Recipients
        $mail->setFrom('shalu2004pdy@gmail.com');
        $mail->addAddress('shalu2004pdy@gmail.com');

        // Email content
        $mail->isHTML(false);
        $mail->Subject = 'Form Submission';
        $mail->Body = "Name: $name\nPhone number: $phnumber\nEmail: $email\nAadhar no: $aadharno\nCheckin date: $checkin\nCheckout date: $checkout";

        // Send the email
        $mail->send();
        include 'insert.php';
        include 'popup.php';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
