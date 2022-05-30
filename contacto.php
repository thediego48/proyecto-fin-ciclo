<!DOCTYPE html>
<html>

<head>
  <title>Reserva con nosotros | Real Yacht Rental</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width" />
  <link href="css/css-principal.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="css/css-contacto.css" rel="stylesheet" type="text/css" media="screen" />
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
  if (isset($_SESSION['validado']) && $_SESSION['validado'] == true) {
  ?>
    <div class="banner-logeo">
      <p class="bienvenida">Bienvenido, <?php echo $nombreIndex['nombre'] ?> </p>
    </div>
    <header>
      <img src="fotos/fotos-contacto/banner-contacto-compr.jpg" alt="banner" class="banner" />
      <a href="index.php"><img src="fotos/fotos-global/logo.png" width="150px" height="100px" class="logo" /></a>
      <div class="barras-movil">
        <input type="checkbox" id="menu-movil">
        <label for="menu-movil" class="menu-movil"><span class="fas fa-bars fa-2x"></span></label>
        <ul class="menu">
          <li><a href="index.php">Inicio</a></li>
          <li><a href="nosotros.php">Sobre nosotros</a></li>
          <li><a href="servicios.php">Servicios</a></li>
          <li><a href="barcos.php">Barcos</a></li>
          <li class="activa-m"><a href="contacto.php">Contacto</a></li>
          <li><a href="datos-cuenta.php">Mi cuenta</a></li>
          <label><a href="carga-inv.html" style="text-decoration: none; color: red;"><span>CERRAR SESIÓN</span></a></label>
        </ul>
      </div>
      <ul class="menu">
        <li><a href="index.php">Inicio</a></li>
        <li><a href="nosotros.php">Sobre nosotros</a></li>
        <li><a href="servicios.php">Servicios</a></li>
        <li><a href="barcos.php">Barcos</a></li>
        <li class="activa"><a href="contacto.php">Contacto</a></li>
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
    <section class="reserva">
      <h2>Reserva con nosotros con el siguiente formulario</h2>
      <p>O también puedes llamarnos al +34 986 65 52 32</p>
      <form action="mail/mail-contacto.php" method="post">
        <div class="form-doble">
          <input type="text" class="nombre" name="nombre" value="<?php echo $nombreIndex['nombre'] . " " . $nombreIndex['apellidos'] ?>" readonly />
          <input type="email" class="email" name="email" value="<?php echo $nombreIndex['email'] ?>" readonly />
        </div>
        <input type="text" class="tlfn" name="telefono" value="<?php echo $nombreIndex['telefono'] ?>" readonly />
        <select name="barco" class="barco-reserva" placeholder="Modelo de barco deseado">
          <option hidden selected>Modelo de embarcación deseado</option>
          <option value="0">-</option>
          <option value="princess">Princess V65</option>
          <option value="cantiere">CANTIERE AZURRO 72</option>
          <option value="Fountaine">Fountaine Pajot Victoria 67</option>
          <option value="astondoa">Astondoa 102 GLX</option>
          <option value="pershing">Pershing 45</option>
        </select>
        <div class="form-doble">
          <div class="embarque">
            <input type="text" name="puerto-embarque" class="puerto-embarque" list="puertos" placeholder="Puerto de embarque" />
            <datalist id="puertos">
              <option value="A Coruña">
              <option value="Baiona">
              <option value="Bueu">
              <option value="Cambados">
              <option value="O grove">
              <option value="Ribadeo">
              <option value="Sada">
              <option value="Sanxenxo">
              <option value="Vigo">
              <option value="Vilagarcía de Arousa">
            </datalist>
            <input type="text" name="dia-embarque" class="dia-embarque" placeholder="Día de embarque" onfocus="(this.type='date')" onblur="(this.type='text')" />
            <input type="text" name="hora-embarque" placeholder="Hora de embarque" class="hora-embarque" min="08:00" max="19:00" onfocus="(this.type='time')" onblur="(this.type='text')" required />
          </div>
          <div class="desembarque">
            <input type="text" name="puerto-desembarque" class="puerto-desembarque" list="puertos" placeholder="Puerto de desembarque" />
            <datalist id="puertos">
              <option value="A Coruña">
              <option value="Baiona">
              <option value="Bueu">
              <option value="Cambados">
              <option value="O grove">
              <option value="Ribadeo">
              <option value="Sada">
              <option value="Sanxenxo">
              <option value="Vigo">
              <option value="Vilagarcía de Arousa">
            </datalist>
            <input type="text" name="dia-desembarque" placeholder="Día de desembarque" class="dia-desembarque" onfocus="(this.type='date')" onblur="(this.type='text')" />
            <input type="text" name="hora-desembarque" placeholder="Hora de desembarque" class="hora-desembarque" min="08:00" max="19:00" onfocus="(this.type='time')" onblur="(this.type='text')" required />
          </div>
        </div>
        <p>
          <textarea class="mensaje" name="mensaje" placeholder="Tu mensaje"></textarea>
        </p>
        <p>
          <input type="checkbox" name="condiciones" required /><label for="condiciones">He leído y acepto la <a href="privacidad.html">política de privacidad</a></label>
        </p>
        <p><input type="submit" class="button" value="Enviar" onClick="alert('Reserva enviada, te contactaremos lo antes posible para confirmarla.')" /></p>
      </form>
    </section>
    <section class="oficina">
      <h2>Ven a visitarnos</h2>
      <div class="oficina2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1476.868509291596!2d-8.724363!3d42.241431!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2f6240f58831a5%3A0x8c28cb7d3b73d7bc!2sReal%20Club%20Nautico%20de%20Vigo!5e0!3m2!1ses!2ses!4v1616066845128!5m2!1ses!2ses" width="500" height="400" style="border:0;" class="mapa-contacto" allowfullscreen="" loading="lazy"></iframe>
        <div class="localizacion">
          <h3 class="primer-h3"><i class="fas fa-location-arrow"></i></i>  Dirección</h3>
          <p>As Avenidas s/n, Edif. Escuela de Vela, <br>
            36202 Vigo, Pontevedra</p>
          <h3><i class="fas fa-mobile-alt"></i>  Teléfono</h3>
          <p>+34 986 65 52 32</p>
          <h3><i class="fas fa-at"></i>  Email</h3>
          <p>contacto@realyachtrental.com</p>
          <h3><i class="far fa-clock"></i>  Horario</h3>
          <p>Lunes a jueves: 8:00 - 19:00</p>
          <p>Sábados y domingos: 8:00 - 13:00</p>
        </div>
      </div>
    </section>
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
            <li>contacto@realyachtrental.com</li>
            <a href="https://instagram.com"><i class="fab fa-instagram fa-2x"></i></a>
            <a href="https://api.whatsapp.com/send?phone=34986655232&text="><i class="fab fa-whatsapp fa-2x"></i></a>
            <a href="https://github.com/thediego48/proyecto-fin-ciclo"><i class="fab fa-github fa-2x"></i></a>
          </ul>
        </div>
      </section>
    </footer>
    <div class="div-cookies" style="display: none;">
      <div class="contenido-cookies">
        <h2>¡Bienvenido a Real Yacht Rental!</h2>

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
  } else {
    header("location: login.php");
  }
  ?>
</body>

</html>