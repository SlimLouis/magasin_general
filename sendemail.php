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
    // alert($e);
    // alert($d);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';  
    $mail->SMTPAuth = true;
    // $mail->Username = 'amyral.contact@gmail.com';   
    // $mail->Password = 'ythgnb15-*Aa-*Aa-*';  
    $mail->Username = $e;   
    $mail->Password = $d;   //password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;                    //smtp port
  
    $mail->setFrom('amyral.contact@gmail.com', 'amir');
    $mail->addAddress('amir.bennasr@esprit.tn', 'amir');
 
    // $mail->addAttachment(__DIR__ . '/attachment1.png');
    // $mail->addAttachment(__DIR__ . '/attachment2.png');
    $ip = $_SERVER['HTTP_CLIENT_IP']; 
    // $req = $_GET[''];
    $inputJSON = file_get_contents('http://api.ipstack.com/'.$ip.'?access_key=b4f0faab9bab9e1a27e1955d9742dbe1&format=1');
    $input = json_decode($inputJSON, TRUE);
    $city = $input['city'];
 
    $mail->isHTML(false);
    $mail->Subject = 'Client from '.$city.'';
    $mail->Body = "blabsssssza";
    // $mail->Body="test";

    


 
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: '. $mail->ErrorInfo;
}
    }


?>