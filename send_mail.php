<?php

use PHPMailer\PHPMailer\PHPMailer;


require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';

    
$mail = new PHPMailer(true);

if(isset($_POST['send'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $project=$_POST['project'];
    $message=$_POST['msg'];

    
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'abhijeetgaikwad670@gmail.com';
    $mail->Password = 'uiqmtscgqzedkako'; // set the admin email password here
    $mail->SMTPSecure = 'tls';
    $mail->Port = '587';

    $mail->setFrom($email, $name); // set the user email address and name here
    $mail->addAddress('abhijeetgaikwad670@gmail.com','Project'); // set the admin email address here
    $mail->addReplyTo($email, $name); // set the user email address and name as the reply-to address

    $mail->isHTML(true);
    $mail->Subject = $project.' - '.$name;
    $mail->Body = "Name: $name <br>Email: $email <br>Project : $project <br>Message : $message";

    if ($mail->send()) {
        echo "<script>alert('Mail Sent Successfully'); window.location.href='index.html';</script>";
    }
    else {
    echo "<script>alert('Error sending email: '); window.location.href='index.html';</script>" . $mail->ErrorInfo;
    }
}
?>