<?php
    use PHPMailer\PHPMailer\PHPMailer;
    require 'vendor/autoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 25;
   // echo !extension_loaded('openssl')?"Not Available":"Available";
    $mail->SMTPAuth = true;
    $mail->Username = 'ishimwebernardin90@gmail.com';
    $mail->Password = 'Irakiza@123';
    $mail->setFrom('ishimwebernardin90@gmail.com', 'Your Name');
    $mail->addAddress("".$mails, 'Receiver Name');
    $mail->Subject = 'Testing PHPMailer';
    $mail->Body = 'your password is admin';
    //$mail->addAttachment('test.txt');
    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'The email message was sent.';
    }
?>