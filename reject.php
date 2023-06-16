<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';


$url='127.0.0.1:3306';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"bookingform");
if(!$conn){
 die('Could not Connect My Sql:' .mysqli_error($con));
}
$sql = "DELETE FROM bookingdetails WHERE name='" . $_GET["val2"] . "'";
if (mysqli_query($conn, $sql)) {

} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);


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
        $mail->Body = "Dear $name,Your Homestay booking was rejected :|";

        // Send the email
        $mail->send();
        
        include 'panel.php';
        echo "<script>";
        echo "alert('Email is sent to $email')";
        echo "</script>";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

?>
