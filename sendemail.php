<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
require_once "vendor/autoload.php";
require_once "constants.php";
 
$mail = new PHPMailer(true);
 
try {
    $mail->isSMTP();
    $mail->Host = 'smtp.googlemail.com';  //gmail SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = "amyral.contact@gmail.com";   //username
    $mail->Password = "Aa4130261-*Aa-*";   //password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;                    //smtp port
  
    $mail->setFrom('amyral.contact@gmail.com', 'amir');
    $mail->addAddress('amir.bennasr@esprit.tn', 'amir');
 
    // $mail->addAttachment(__DIR__ . '/attachment1.png');
    // $mail->addAttachment(__DIR__ . '/attachment2.png');
 
    $mail->isHTML(true);
    $mail->Subject = 'Email Subject';
    $mail->Body    = '<b>here it is</b>';
 
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: '. $mail->ErrorInfo;
}
?>