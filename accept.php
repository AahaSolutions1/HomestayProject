<?php
include 'panel.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

$email=$_GET['val1'];
$name=$_GET['val2'];
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
        $mail->Subject = 'Homestay Booking';
        $mail->Body = "Dear $name,Your Homestay booking was Successfull :)";

        // Send the email
        $mail->send();  
       
        echo "<script>";
        echo "alert('Email is sent to $email')";
        echo "</script>";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

?>
