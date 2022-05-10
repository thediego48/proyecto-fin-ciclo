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
    $mail->addAddress('realyatchrental@gmail.com');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Correo de enviado mediante formulario de contacto';
    $mail->Body    = "<b>Nombre:</b> " .$_POST["nombre"] ."<br><b>Correo electrónico: </b>".$_POST["email"]."<br><b>Mensaje: </b>".$_POST["mensaje"];

    $mail->CharSet = 'UTF-8';
    $mail->send();
    echo 'El mensaje ha sido enviado correctamente';
} catch (Exception $e) {
    echo "El mensaje no ha podido ser enviado. Error: {$mail->ErrorInfo}";
}

?>