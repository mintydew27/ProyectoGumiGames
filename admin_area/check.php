<?php
session_start();


require "Authenticator.php";
if ($_SERVER['REQUEST_METHOD'] != "POST") {
    header("location: SecondFactor.php");
    die();
}
$Authenticator = new Authenticator();




$checkResult = $Authenticator->verifyCode($_SESSION['auth_secret'], $_POST['code'], 2);    // 2 = 2*30sec clock tolerance

if (!$checkResult) {
    $_SESSION['failed'] = true;
    header("location: SecondFactor.php");
    die();
} 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Authentication Successful</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <meta name="description" content="Implement Google like Time-Based Authentication into your existing PHP application. And learn How to Build it? How it Works? and Why is it Necessary these days."/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <link rel='shortcut icon' href='/favicon.ico'  />
    <style>
        body,html {
            height: 100%;
        }       


        .bg { 
            /* The image used */
            background-image: url("admin_images/Fondo.jpg");
            /* Full height */
            height: 100%; 
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
           
            background-size: cover;
        }
    </style>
</head>

<body  class="bg">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3"  style="background: white; padding: 20px; box-shadow: 10px 10px 5px #888888; margin-top: 100px;">
                <hr>
                    <div style="text-align: center;">
                           <h1>Autenticación Satisfactoria</h1>
                           <p>La autenticación a sido completada!</p>
                    </div>
                <a target="_blank" href="Index.php?dashboard"> <p style="text-align: center;;">GumiGames</p></a>

            </div>
        </div>
    </div>
</body>
</html>