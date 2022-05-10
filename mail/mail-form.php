<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'realyatchrental@gmail.com';                     //SMTP username
    $mail->Password   = 'realyacthRental123';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('realyatchrental@gmail.com', 'Real Yatch Rental');
    $mail->addAddress($_POST["email"]);     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = '¡Has sido aceptado en RealYatchRental!';
    $mail->Body    = "Enhorabuena! Despues de estudiar tu caso, nos complace informarte de que has sido aceptado en RealYatchRental... ¡Qué ganas de que reserves tu primer barco!<br>
    Para iniciar sesión necesitaras tus datos de acceso facilitados en el formulario de registro, por si no los recuerdas son:<br>"
    ."<br><b>Correo electrónico: </b>".$_POST["email"]."<br><b>Contraseña: </b>".$_POST["pass1"].
    "<br><br>Un saludo, <br>
    El equipo de RealYatchRental.";
    
    $mail->CharSet = 'UTF-8'; 
    $mail->send();
    echo 'El mensaje ha sido enviado correctamente';
} catch (Exception $e) {
    echo "El mensaje no ha podido ser enviado. Error: {$mail->ErrorInfo}";
}

?>