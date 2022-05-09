<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="css/css-principal.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="css/css-mediaQueries.css" rel="stylesheet" type="text/css" media="screen" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="fotos/fotos-global/logo.png" sizes="64x64">
    <script src="https://kit.fontawesome.com/9fcbad3646.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    session_start();

    $usuarios = array(
        array("usuario" => "pedro", "clave" => "abc123"),
        array("usuario" => "maria", "clave" => "abc123"),
        array("usuario" => "juan", "clave" => "abc123")
    );

    if (isset($_GET['logout']) && $_GET['logout'] == 1) {
        unset($_SESSION['validado']);
    }

    function validar_usuario($usuario, $clave)
    {
        global $usuarios;
        foreach ($usuarios as $u) {
            if ($u['usuario'] == $usuario && $u['clave'] == $clave) {
                return true;
            }
        }
        return false;
    }

    if (isset($_POST['usuario'])) {
        $_SESSION["validado"] = validar_usuario($_POST['usuario'], $_POST['clave']);
    }

    if (isset($_SESSION['validado']) && $_SESSION['validado'] == true) {

        header("location:index.php");
    } else {
    ?>

        <form action="login.php" method="post">
            <input type="text" name="usuario" placeholder="Usuario" />
            <input type="password" name="clave" placeholder="contraseña" />
            <input type="submit" value="validar" />
        </form>



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
