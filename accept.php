<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

$email=$_GET['val1'];
    // Instantiate PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'homestayproject14@gmail.com';
        $mail->Password = 'tfclezmohwxvnvre';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = '465';

        // Recipients
        $mail->setFrom('homestayproject14@gmail.com');
        $mail->addAddress($email);

        // Email content
        $mail->isHTML(false);
        $mail->Subject = 'Form Submission';
        $mail->Body = "Your booking form is accepted";

        // Send the email
        $mail->send();
        echo "Email is sent";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

?>
