<!DOCTYPE html>
<html>

<head>
    <title>Datos de cuenta | Real Yatch Rental</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link href="css/css-paginas-info.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="css/css-cuenta.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="css/css-principal.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="css/css-mediaQueries.css" rel="stylesheet" type="text/css" media="screen" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="fotos/fotos-global/logo.png" sizes="64x64">
    <script src="https://kit.fontawesome.com/9fcbad3646.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include "config.php";
    session_start();
    $mail = $_SESSION['validado'];
    $sql = "SELECT * FROM usuarios WHERE email='$mail'";
    $result = mysqli_query($conn, $sql);
    $nombreIndex = mysqli_fetch_array($result);

    if (isset($_POST["submit"])) {
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];
        $dni = $_POST["dni"];
        $direccion = $_POST["direccion"];
        $trabajo = $_POST["trabajo"];
        $ingresos = $_POST["ingresos"];

        $sql = "SELECT * FROM usuarios WHERE email='$mail'";
        $result = mysqli_query($conn, $sql);
        $checkemail = "SELECT email FROM usuarios WHERE email='$email'";
        $result2 = mysqli_query($conn, $checkemail);

        if ($email != $result2) {
            $sql = "UPDATE usuarios SET nombre='$nombre', apellidos='$apellidos', email='$email', telefono='$telefono', dni='$dni', direccion='$direccion', trabajo='$trabajo', ingresos='$ingresos' WHERE email='$mail'";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "<script>alert('Datos actualizados, inicia sesión de nuevo.')</script>";
                session_destroy();
                header("Refresh:0");
                //header("location: login.php");
                //exit();
                $nombre = "";
                $apellidos = "";
                $email = "";
                $telefono = "";
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
    }

    if (isset($_SESSION['validado']) && $_SESSION['validado'] == true) {
    ?>

        <div class="banner-logeo-datos">
            <p class="bienvenida">Bienvenido, <?php echo $nombreIndex['nombre'] ?> </p>
        </div>
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
                <div class="menu-hover" style="display: inline;">
                    <li><a href="#" class="menu-hover"><i class="fas fa-regular fa-user"></i></a>
                        <ul class="submenu-escr">
                            <li><a href="datos-cuenta.php">Mi cuenta</a></li>
                            <li><a href="carga-inv.html"><i class="fas fa-solid fa-power-off"></i></a></li>
                        </ul>
                    </li>
                </div>
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
                    <li class="activa-d"><a href="datos-cuenta.php">Datos de cuenta</a></li>
                    <li><a href="cambiar-contra.php">Cambiar contraseña</a></li>
                    <li><a href="eliminar.php">Eliminar cuenta</a></li>
                </ul>
            </nav>
            <div class="contenido-cuenta">
                <h1>Datos de cuenta</h1>
                <form action="#" method="post">
                    <p>
                        <label for="nombre">Nombre</label><br>
                        <input type="text" id="edit-nombre" class="nombre" name="nombre" value="<?php echo $nombreIndex['nombre'] ?>" readonly><br><br>

                        <label for="apellidos">Apellidos</label><br>
                        <input type="text" id="edit-apellidos" class="apellidos" name="apellidos" value="<?php echo $nombreIndex['apellidos'] ?>" readonly><br><br>

                        <label for="email">Email</label><br>
                        <input type="email" id="edit-email" class="email" name="email" value="<?php echo $nombreIndex['email'] ?>" readonly><br><br>

                        <label for="telefono">Teléfono</label><br>
                        <input type="tel" id="edit-telefono" class="telefonoo" name="telefono" value="<?php echo $nombreIndex['telefono'] ?>" readonly><br><br>

                        <label for="dni">DNI</label><br>
                        <input type="text" id="edit-dni" class="dni" name="dni" value="<?php echo $nombreIndex['dni'] ?>" readonly><br><br>

                        <label for="direccion">Dirección</label><br>
                        <input type="text" id="edit-direccion" class="direccion" name="direccion" value="<?php echo $nombreIndex['direccion'] ?>" readonly><br><br>

                        <label for="trabajo">Trabajo</label><br>
                        <input type="text" id="edit-trabajo" class="trabajo" name="trabajo" value="<?php echo $nombreIndex['trabajo'] ?>" readonly><br><br>

                        <label for="ingresos">Ingresos</label><br>
                        <input type="number" id="edit-ingresos" class="ingresos" name="ingresos" value="<?php echo $nombreIndex['ingresos'] ?>" readonly><br><br>

                        <input type="button" onclick="enable()" class="button" value="Activar edición">
                        <input type="submit" name="submit" class="button" value="Actualizar datos">
                    </p>
                </form>
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
                
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>
            function enable() {
                document.getElementById("edit-nombre").readOnly = false;
                document.getElementById("edit-apellidos").readOnly = false;
                document.getElementById("edit-email").readOnly = false;
                document.getElementById("edit-telefono").readOnly = false;
                document.getElementById("edit-dni").readOnly = false;
                document.getElementById("edit-direccion").readOnly = false;
                document.getElementById("edit-trabajo").readOnly = false;
                document.getElementById("edit-ingresos").readOnly = false;
            }

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