<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login | Real Yatch Rental</title>
    <link href="css/css-principal.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="css/css-login.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="css/css-mediaQueries.css" rel="stylesheet" type="text/css" media="screen" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="fotos/fotos-global/logo.png" sizes="64x64">
    <script src="https://kit.fontawesome.com/9fcbad3646.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include "config.php";
    session_start();
    error_reporting(0);

    if(isset($_POST["submit"])){
        $email=$_POST["email"];
        $contrasena=$_POST["contrasena"];

        $sql="SELECT * FROM usuarios WHERE email='$email' AND contrasena='$contrasena'";
        $result= mysqli_query($conn,$sql);

        if($result->num_rows > 0){
            $row= mysqli_fetch_assoc($result);
            $_SESSION['validado']= $row['email'];
            header("location:carga.html");
        }else{
            echo "<script>alert('La contraseña o el email con incorrectos')</script>";
        }
    }

    if (isset($_GET['logout']) && $_GET['logout'] == 1) {
        unset($_SESSION['validado']);
    }


    if (isset($_SESSION['validado']) && $_SESSION['validado'] == true) {

        header("location:carga.html");
    } else {
    ?>
        <div class="forma-login">
            <div class="info">
            <a href="index.php"><img src="fotos/fotos-global/logo1.png" width="140px" height="60px"/></a>
            <h2>Real. Yatch. Rental.</h2>
            <p>La nueva plataforma completamente privada que te permite alquilar el barco perfecto para tus vacaciones, negocio, fiesta...</p>
            </div>
            <div>
                <form action="login.php" method="post">
                    <input type="text" name="email" class="nombre" placeholder="Correo electrónico" /><br>
                    <input type="password" name="contrasena" class="clave"placeholder="Contraseña" /><br>
                    <input type="submit" name="submit"class="button" value="Entrar" />  
                </form>
                <a class="peticion" href="peticion.php">Formulario de petición</a>
            </div>
        </div>
        <div class="formulario-reg">
            <h4>Si no tienes cuenta y quieres optar a una puedes rellenar nuestro <b>formulario de petición</b> que será revisado por nuestros trabajadores y en caso de ser aceptado recibirás un correo electrónico con tus datos de acceso.</h4>
        </div>




        <div class="footer-login">
            <p><a href="./aviso-legal.html">Aviso legal</a> |
            <a href="./privacidad.html">Política de privacidad</a> |
            <a href="./cookies.html">Política de cookies</a></p>
            <p>RealYatchRental© 2022</p>
        </div>
    <?php
    }
    ?>
    <div class="div-cookies" style="display: none;">
        <div class="contenido-cookies">
            <h2>¡Bienvenido a Real Yatch Rental!</h2>

            <p>Esta web inserta cookies propias para facilitar tu navegación y de terceros derivadas de su uso en nuestra web, de
                medios sociales, así como para mejorar la usabilidad y temática de la misma con Google Analytics. Los datos
                personales no son consultados. Si continúas navegando consideramos que aceptas su uso. Puedes obtener más
                información <a hreflang="es" href="aviso-legal.html">aquí</a></p>
            <br><button type="button" class="button" onclick="acceptCookies()">
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
</body>

</html>