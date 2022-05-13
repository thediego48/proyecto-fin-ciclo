<?php
include "config.php";
error_reporting(0);

if (isset($_POST["submit"])) {
  $nombre = $_POST["nombre"];
  $apellidos = $_POST["apellidos"];
  $email = $_POST["email"];
  $telefono = $_POST["telefono"];
  $contrasena = $_POST["contrasena"];
  $contrasenac = $_POST["contrasenac"];
  $dni = $_POST["dni"];
  $direccion = $_POST["direccion"];
  $trabajo = $_POST["trabajo"];
  $ingresos = $_POST["ingresos"];

  if ($contrasena == $contrasenac) {
    $sql = "SELECT * FROM  usuarios WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if (!$result->num_rows > 0) {
      $sql = "INSERT INTO usuarios(nombre,apellidos,email,telefono,contrasena,dni,direccion,trabajo,ingresos) VALUES ('$nombre','$apellidos','$email','$telefono','$contrasena','$dni','$direccion','$trabajo','$ingresos')";
      $result = mysqli_query($conn, $sql);

      if ($result) {
        echo "<script>alert('Formulario enviado.')</script>";
        $nombre = "";
        $apellidos = "";
        $email = "";
        $telefono = "";
        $_POST["contrasena"] = "";
        $_POST["contrasenac"] = "";
        $dni = "";
        $direccion = "";
        $trabajo = "";
        $ingresos = "";
      } else {
        echo "<script>alert('Hay un error.')</script>";
      }
    } else {
      echo "<script>alert('El correo ya existe.')</script>";
    }
  } else {
    echo "<script>alert('Las contraseñas no coinciden.')</script>";
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Petición de registro | Real Yatch Rental</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width" />
  <link href="css/css-principal.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="css/css-paginas-info.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="css/css-registro.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="css/css-mediaQueries.css" rel="stylesheet" type="text/css" media="screen" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="fotos/fotos-global/logo.png" sizes="64x64">
  <script src="https://kit.fontawesome.com/9fcbad3646.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="carrousel-info"></div>
  <header>
    <a href="index.php"><img src="fotos/fotos-global/logo.png" width="150px" height="100px" class="logo" /></a>
    <div class="barras-movil">
      <input type="checkbox" id="menu-movil">
      <label for="menu-movil" class="menu-movil"><span class="fas fa-bars fa-2x"></span></label>
      <ul class="menu">
        <li><a href="index.php">Inicio</a></li>
        <li><a href="nosotros.php">Sobre nosotros</a></li>
        <li><a href="servicios.php">Servicios</a></li>
        <li><a href="barcos.php">Barcos</a></li>
        <li><a href="contacto.php">Contacto</a></li>
        <li class="redes"><a href="https://instagram.com"><i class="fab fa-instagram fa-lg"></i></a>
          <a href="https://api.whatsapp.com/send?phone=34986655232&text="><i class="fab fa-whatsapp fa-lg"></i></a>
          <a href="https://github.com/thediego48/proyecto-fin-ciclo"><i class="fab fa-github fa-lg"></i></a>
        </li>
        <label for="menu-movil" class="menu-movil"><span>CERRAR</span></label>
      </ul>
    </div>
    <ul class="menu-info">
      <li><a href="index.php">Inicio</a></li>
      <li><a href="nosotros.php">Sobre nosotros</a></li>
      <li><a href="servicios.php">Servicios</a></li>
      <li><a href="barcos.php">Barcos</a></li>
      <li><a href="contacto.php">Contacto</a></li>
    </ul>
    <!--<div class="rrss">
            <a href="https://instagram.com"><i class="fab fa-instagram fa-lg"></i></a>
            <a href="https://api.whatsapp.com/send?phone=34986655232&text="><i class="fab fa-whatsapp fa-lg"></i></a>
            <a href="https://github.com/thediego48/proyecto-fin-ciclo"><i class="fab fa-github fa-lg"></i></a>
          </div>-->
  </header>
  </div>
  <div class="texto-registro">
    <h1>Petición de registro en RealYatchRental</h1>

    <form action="#" method="post" class="form-registro" id="formm">
      <div class="form-doble">
        <input type="text" class="nombre" name="nombre" placeholder="Nombre*" value="<?php echo $nombre; ?>" required />
        <input type="text" class="apellidos" name="apellidos" placeholder="Apellidos*" value="<?php echo $apellidos; ?>" required />
      </div>
      <div class="form-doble">
        <input type="email" class="email" name="email" placeholder="Correo electrónico*" value="<?php echo $email; ?>" required />
        <input type="tel" class="telefonoo" name="telefono" placeholder="Teléfono de contacto*" value="<?php echo $telefono; ?>" required />
      </div>
      <div class="form-doble">
        <input type="password" class="pass" id="contrasena" name="contrasena" placeholder="Escribe la contraseña de acceso deseada*" value="<?php echo $_POST['contrasena']; ?>" required />
        <input type="password" class="pass" id="contrasenac" name="contrasenac" placeholder="Repite la contraseña*" value="<?php echo $_POST['contrasenac']; ?>" required />
      </div>

      <div class="form-doble">
        <input type="text" class="dni" id="dni" name="dni" placeholder="DNI*" value="<?php echo $dni; ?>" required />
        <input type="text" class="direccion" name="direccion" placeholder="Dirección" value="<?php echo $direccion; ?>" />
      </div>
      <div class="form-doble">
        <input type="text" class="trabajo" name="trabajo" placeholder="Puesto de trabajo actual" value="<?php echo $trabajo; ?>" />
        <input type="number" class="ingresos" name="ingresos" placeholder="Ingresos estimados anuales." value="<?php echo $ingresos; ?>" />
      </div>
      <p><textarea class="mensaje" name="quieres" placeholder="¿Por qué quieres pertecener al grupo RealYatchRental?" value="<?php echo $_POST['quieres']; ?>"></textarea></p>
      <p><textarea class="mensaje" name="puedes" placeholder="¿Por qué crees que puedes pertecener al grupo RealYatchRental?" value="<?php echo $_POST['puedes']; ?>"></textarea></p>
      <p>
        <input type="checkbox" name="condiciones" required /><label for="condiciones">He leído y acepto la <a href="privacidad.html">política de privacidad</a>*</label>
      </p>
      <p><input type="submit" name="submit" class="button" value="Enviar" /></p>
    </form>
  </div>
  <footer>
    <section class="footer-1000px">
      <div class="logo-mapa">
        <a href="index.php"><img src="fotos/fotos-global/logo1.png" width="140px" height="60px" /></a>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d507.2872218619284!2d-8.724363413904305!3d42.24143105229491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2f6240f4f4b677%3A0xe2524bd393f7cd95!2sCiesjet%20%7C%20Alquiler%20de%20motos%20de%20agua%20en%20Vigo!5e0!3m2!1ses!2ses!4v1613904822972!5m2!1ses!2ses" width="287" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
      <div>
        <h2 class="">Nuestras páginas</h2>
        <ul class="lista-enlaces">
          <li><a href="index.php">Inicio</a></li>
          <li><a href="nosotros.php">Sobre nosotros</a></li>
          <li><a href="servicios.php">Servicios</a></li>
          <li><a href="barcos.php">Nuestros barcos</a></li>
        </ul>
      </div>
      <div>
        <h2>Atención al cliente</h2>
        <ul class="lista-enlaces">
          <li><a href="contacto.php">Contacto</a></li>
          <li><a href="aviso-legal.html">Aviso legal</a></li>
          <li><a href="cookies.html">Política de cookies</a></li>
          <li><a href="privacidad.html">Política de privacidad</a></li>
        </ul>
      </div>
      <div>
        <h2>Contáctanos</h2>
        <ul class="lista-enlaces">
          <li class="ubicacion">As Avenidas s/n,<br>Edif. Escuela de Vela, <br>36202 Vigo, Pontevedra</li>
          <li>+34 986 65 52 32</li>
          <li>contacto@realyatchrental.com</li>
          <a href="https://instagram.com"><i class="fab fa-instagram fa-2x"></i></a>
          <a href="https://api.whatsapp.com/send?phone=34986655232&text="><i class="fab fa-whatsapp fa-2x"></i></a>
          <a href="https://github.com/thediego48/proyecto-fin-ciclo"><i class="fab fa-github fa-2x"></i></a>
        </ul>
      </div>
    </section>
  </footer>
  <div class="div-cookies" style="display: none;">
    <div class="contenido-cookies">
      <h2>¡Bienvenido a Real Yatch Rental!</h2>

      <p>Esta web inserta cookies propias para facilitar tu navegación y de terceros derivadas de su uso en nuestra web,
        de
        medios sociales, así como para mejorar la usabilidad y temática de la misma con Google Analytics. Los datos
        personales no son consultados. Si continúas navegando consideramos que aceptas su uso. Puedes obtener más
        información <a hreflang="es" href="aviso-legal.html">aquí</a></p>
      <br><button type="button" class="button" id="boton-cookies" onclick="acceptCookies()">
        Acepto el uso de cookies
      </button>
      <a href="javascript:window.close();">
        <p>No acepto, sácame de aquí</p>
      </a>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script>
    //script css cookies
    function checkAcceptCookies() {
      if (localStorage.acceptCookies == 'true') {} else {
        $('.div-cookies').show();
      }
    }

    function acceptCookies() {
      localStorage.acceptCookies = 'true';
      $('.div-cookies').hide();
    }
    $(document).ready(function() {
      checkAcceptCookies();
    });
  </script>
  <?php

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'mail\Exception.php';
  require 'mail\PHPMailer.php';
  require 'mail\SMTP.php';

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
    $mail->setFrom('realyatchrental@gmail.com', 'Real Yatch Rental');
    $mail->addAddress($_POST["email"]);     //Add a recipient

    $mail1->setFrom('realyatchrental@gmail.com', 'Real Yatch Rental');
    $mail1->addAddress('realyatchrental@gmail.com');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = '¡Has sido aceptado en RealYatchRental!';
    $mail->Body    = "Enhorabuena! Despues de estudiar tu caso, nos complace informarte de que has sido aceptado en RealYatchRental... ¡Qué ganas de que reserves tu primer barco!<br>
    Para iniciar sesión necesitaras tus datos de acceso facilitados en el formulario de registro, por si no los recuerdas son:<br>"
      . "<br><b>Correo electrónico: </b>" . $_POST["email"] . "<br><b>Contraseña: </b>" . $_POST["contrasena"] .
      "<br><br>Un saludo, <br>
    El equipo de RealYatchRental.";

    $mail1->isHTML(true);                                  //Set email format to HTML
    $mail1->Subject = 'Nueva solicitud de registro';
    $mail1->Body    = "Un nuevo usuario ha solicitado registrarse en RealYatchRental, los datos de este usuario son:" .
      "<br><b>Nombre:</b> " . $_POST["nombre"] .
      "<br><b>Apellidos:</b> " . $_POST["apellidos"] .
      "<br><b>Email:</b> " . $_POST["email"] .
      "<br><b>Teléfono:</b> " . $_POST["telefono"] .
      "<br><b>DNI:</b> " . $_POST["dni"] .
      "<br><b>Dirección:</b> " . $_POST["direccion"] .
      "<br><b>Puesto de trabajo:</b> " . $_POST["trabajo"] .
      "<br><b>Ingresos anuales:</b> " . $_POST["ingresos"] .
      "<br><b>¿Por qué quieres pertecener al grupo RealYatchRental?:</b> " . $_POST["quieres"] .
      "<br><b>¿Por qué crees que puedes pertecener al grupo RealYatchRental?</b> " . $_POST["puedes"];

    $mail->CharSet = 'UTF-8';
    $mail->send();

    $mail1->CharSet = 'UTF-8';
    $mail1->send();
    echo 'El mensaje ha sido enviado correctamente';
  } catch (Exception $e) {
    echo "El mensaje no ha podido ser enviado. Error: {$mail->ErrorInfo}";
  }

  ?>
</body>

</html>