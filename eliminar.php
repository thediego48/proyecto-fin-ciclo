<!DOCTYPE html>
<html>

<head>
    <title>Eliminar cuenta | Real Yatch Rental</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link href="css/css-principal.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="css/css-paginas-info.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="css/css-cuenta.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="css/css-mediaQueries.css" rel="stylesheet" type="text/css" media="screen" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="fotos/fotos-global/logo.png" sizes="64x64">
    <script src="https://kit.fontawesome.com/9fcbad3646.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include "config.php";
    session_start();
    $mail= $_SESSION['validado'];
    $sql= "SELECT * FROM usuarios WHERE email='$mail'";
    $result= mysqli_query($conn,$sql);
    $nombreIndex= mysqli_fetch_array( $result );

    if (isset($_SESSION['validado']) && $_SESSION['validado'] == true) {
    ?>

        <div class="banner-logeo-datos"><p class="bienvenida">Bienvenido, <?php echo $nombreIndex['nombre'] ?> </p><a href="datos-cuenta.php">Mi cuenta</a> <a href="login.php?logout=1">Logout </a> </div>
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
        <div class="datos-cuerpo">
            <nav>
                <ul class="menu-datos">
                    <li><a href="datos-cuenta.php">Datos de cuenta</a></li>
                    <li><a href="cambiar-contra.php">Cambiar contraseña</a></li>
                    <li class="activa-d"><a href="eliminar.php">Eliminar cuenta</a></li>
                </ul>
            </nav>
            <div class="contenido-cuenta">
                <h1>Eliminar cuenta</h1>

                <h4>¿Estás seguro de que deseas eliminar tu cuenta?</h4>
                <p>Esta acción no puede deshacerse y para volver en un futuro tendrías que volver a pasar el proceso de selección para volver a trabajar con nosotros. No queremos que te vayas y por eso te ofrecemos un descuento de un 10% en tu próximo alquiler si nos llamas ahora mismo a nuestro teléfono. (+34 986 65 52 32).</p>
                <p>Si de verdad quieres eliminar tu cuenta nos gustaría darte las gracias por formar parte del equipo RealYatchRental, gracias a ti lo hemos pasado muy bien.</p>
                <p>Bueno... Dicho todo esto... ¿Estás seguro que quieres irte? Porque te echaríamos tanto de menos...</p>
                <p>
                    <a href="baja.php" onclick="alert('Te has dado de baja satisfactoriamente')">Sí, dame de baja</a>
                    <a class="button" href="index.php">¡No, me quedo!</a>
                </p>
            </div>
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

                <p>Esta web inserta cookies propias para facilitar tu navegación y de terceros derivadas de su uso en nuestra web, de
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
        </script>
    <?php
    } else {
        header("location: login.php");
    }
    ?>
</body>

</html>