<?php
require_once ('dbh.php');

$emails = $_POST['email'];
$firstname = $_POST['firstName'];
$lastName = $_POST['lastName'];
$contact = $_POST['contact'];
$nid = $_POST['nid'];
$status = $_POST['status'];
$position = $_POST['position'];
$birthday =$_POST['birthday'];
//echo "$birthday";
    $sql = "INSERT INTO `employee` (`firstName`, `lastName`, `email`, `birthday`, `contact`, `nid`, `position`, `status`, `created_date`) VALUES ( '$firstname', '$lastName', '$emails', '$birthday', '$contact','$nid', '$position', '$status', current_timestamp());";

$result = mysqli_query($conn, $sql);


if(($result) == 1)?>
<?php
    $emails = $_POST['email'];
    use PHPMailer\PHPMailer\PHPMailer;
    require 'vendor/autoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
   // $mail->SMTPDebug = 0;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 25;
   // echo !extension_loaded('openssl')?"Not Available":"Available";
    $mail->SMTPAuth = true;
    $mail->Username = 'ishimwebernardin90@gmail.com';
    $mail->Password = 'Irakiza@123';
    $mail->setFrom('ishimwebernardin90@gmail.com', 'Your Name');
    $mail->addAddress("".$emails, 'Receiver Name');
    $mail->Subject = 'Testing PHPMailer';
    $mail->Body = 'your password is admin login with your email and use this password';
    //$mail->addAttachment('test.txt');
    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'The password sent to your email login to your email account and confirm password.';
    }
?>
