<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
require_once "vendor/autoload.php";
// require_once "constants.php";
 

 

    function sendMessage($subject)
    {
        $mail = new PHPMailer(true);

        
try {
    // $mail->SMTPOptions = array(
    //     'ssl' => array(
    //     'verify_peer' => false,
    //     'verify_peer_name' => false,
    //     'allow_self_signed' => true
    //     )
    //     );
    $e = getenv('em');
    $d = getenv('ppp');
    alert($e);
    alert($d);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';  
    $mail->SMTPAuth = true;
    $mail->Username = $e;   
    $mail->Password = $d;   //password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;                    //smtp port
  
    $mail->setFrom('amyral.contact@gmail.com', 'amir');
    $mail->addAddress('amir.bennasr@esprit.tn', 'amir');
 
    // $mail->addAttachment(__DIR__ . '/attachment1.png');
    // $mail->addAttachment(__DIR__ . '/attachment2.png');
 
    $mail->isHTML(true);
    $mail->Subject = 'Email Subject';
    $mail->Body    = $subject;
 
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: '. $mail->ErrorInfo;
}
    }


?>