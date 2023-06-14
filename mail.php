<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone=$_POST["phone"];
    $message = $_POST["message"];

    // Instantiate PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'homestayproject14@gmail.com';
        $mail->Password = 'tfclezmohwxvnvre ';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = '465';

        // Recipients
        $mail->setFrom('homestayproject14@gmail.com');
        $mail->addAddress('homestayproject14@gmail.com');

        // Email content
        $mail->isHTML(false);
        $mail->Subject = 'Form Submission';
        $mail->Body = "Name: $name\nEmail: $email\nPhone number: $phone\nMessage: $message";

        // Send the email
        $mail->send();
        echo "<h3><center>Your Message is updated!!! <br>
        We will process your enquiry as quickly as possible.</center></h3>";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
