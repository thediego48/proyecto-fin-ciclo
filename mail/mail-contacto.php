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
    $mail->setFrom('realyatchrental@gmail.com', 'Real Yacht Rental');
    $mail->addAddress('realyatchrental@gmail.com');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Reserva enviada mediante formulario de contacto';
    $mail->Body    = "<b>Nombre:</b> " . $_POST["nombre"] .
        "<br><b>Correo electrónico: </b>" . $_POST["email"] .
        "<br><b>Teléfono: </b>" . $_POST["telefono"] .
        "<br><b>Barco deseado: </b>".$_POST["barco"] .
        "<br><b>Puerto de embarque: </b>".$_POST["puerto-embarque"] .
        "<br><b>Día de embarque: </b>".$_POST["dia-embarque"] .
        "<br><b>Hora de embarque: </b>".$_POST["hora-embarque"] .
        "<br><b>Puerto de desembarque: </b>".$_POST["puerto-desembarque"] .
        "<br><b>Día de desembarque: </b>".$_POST["dia-desembarque"] .
        "<br><b>Hora de desembarque: </b>".$_POST["hora-desembarque"] .
        "<br><b>Mensaje: </b>" . $_POST["mensaje"];

    $mail->CharSet = 'UTF-8';    
    $mail->send();
    //echo 'El mensaje ha sido enviado correctamente';
    header("location: ../contacto.php");
} catch (Exception $e) {
    echo "El mensaje no ha podido ser enviado. Error: {$mail->ErrorInfo}";
}
