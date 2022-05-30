<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
$mail1 = new PHPMailer(true);

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

    $mail1->SMTPDebug = 0;                      //Enable verbose debug output
    $mail1->isSMTP();                                            //Send using SMTP
    $mail1->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
    $mail1->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail1->Username   = 'realyatchrental@gmail.com';                     //SMTP username
    $mail1->Password   = 'realyacthRental123';                               //SMTP password
    $mail1->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail1->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('realyatchrental@gmail.com', 'Real Yacht Rental');
    $mail->addAddress($_POST["email"]);     //Add a recipient

    $mail1->setFrom('realyatchrental@gmail.com', 'Real Yacht Rental');
    $mail1->addAddress('realyatchrental@gmail.com');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = '¡Has sido aceptado en RealYachtRental!';
    $mail->Body    = "Enhorabuena! Despues de estudiar tu caso, nos complace informarte de que has sido aceptado en RealYachtRental... ¡Qué ganas de que reserves tu primer barco!<br>
    Para iniciar sesión necesitaras tus datos de acceso facilitados en el formulario de registro, por si no los recuerdas son:<br>"
    ."<br><b>Correo electrónico: </b>".$_POST["email"]."<br><b>Contraseña: </b>".$_POST["contrasena"].
    "<br><br>Un saludo, <br>
    El equipo de RealYachtRental.";

    $mail1->isHTML(true);                                  //Set email format to HTML
    $mail1->Subject = 'Nueva solicitud de registro';
    $mail1->Body    = "Un nuevo usuario ha solicitado registrarse en RealYachtRental, los datos de este usuario son:".
    "<br><b>Nombre:</b> ".$_POST["nombre"].
    "<br><b>Apellidos:</b> ".$_POST["apellidos"].
    "<br><b>Email:</b> ".$_POST["email"].
    "<br><b>Teléfono:</b> ".$_POST["telefono"].
    "<br><b>DNI:</b> ".$_POST["dni"].
    "<br><b>Dirección:</b> ".$_POST["direccion"].
    "<br><b>Puesto de trabajo:</b> ".$_POST["trabajo"].
    "<br><b>Ingresos anuales:</b> ".$_POST["ingresos"].
    "<br><b>¿Por qué quieres pertecener al grupo RealYachtRental?:</b> ".$_POST["quieres"].
    "<br><b>¿Por qué crees que puedes pertecener al grupo RealYachtRental?</b> ".$_POST["puedes"];
    
    $mail->CharSet = 'UTF-8'; 
    $mail->send();

    $mail1->CharSet = 'UTF-8'; 
    $mail1->send();
    //echo 'El mensaje ha sido enviado correctamente';
} catch (Exception $e) {
    echo "El mensaje no ha podido ser enviado. Error: {$mail->ErrorInfo}";
}

?>