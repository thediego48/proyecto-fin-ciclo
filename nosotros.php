<!DOCTYPE html>
<html>
  <head>
    <title>Sobre nosotros | Real Yatch Rental</title>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width"/>
      <link href="css/css-principal.css" rel="stylesheet" type="text/css" media="screen"/>
      <link href="css/css-nosotros.css" rel="stylesheet" type="text/css" media="screen"/>
      <link href="css/css-mediaQueries.css" rel="stylesheet" type="text/css" media="screen"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" type="image/png" href="fotos/fotos-global/logo.png" sizes="64x64">
      <script src="https://kit.fontawesome.com/9fcbad3646.js" crossorigin="anonymous"></script>
  </head>
  <body>
  <?php
        session_start();
        if (isset($_SESSION['validado']) && $_SESSION['validado'] == true) {
            ?>
      <div class="banner-logeo"><a href="">Mi cuenta</a> <a href="login.php?logout=1">Logout </a> </div>      
      <header>
        <img src="fotos/fotos-nosotros/crew-compr-banner.jpg" alt="banner" class="banner"/>
        <a href="index.php"><img src="fotos/fotos-global/logo.png" width="150px" height="100px" class="logo"/></a>
        <div class="barras-movil">
          <input type="checkbox" id="menu-movil">
          <label for="menu-movil" class="menu-movil"><span class="fas fa-bars fa-2x"></span></label>
          <ul class="menu">
            <li><a href="index.php">Inicio</a></li>
            <li class="activa-m"><a href="nosotros.php">Sobre nosotros</a></li>
            <li><a href="servicios.php">Servicios</a></li>
            <li><a href="barcos.php">Barcos</a></li>
            <li><a href="contacto.php">Contacto</a></li>
            <li class="redes"><a href="https://instagram.com"><i class="fab fa-instagram fa-lg"></i></a>
              <a href="https://api.whatsapp.com/send?phone=34986655232&text="><i class="fab fa-whatsapp fa-lg"></i></a>
              <a href="https://github.com/thediego48/thediego48.github.io"><i class="fab fa-github fa-lg"></i></a>
            </li>
            <label for="menu-movil" class="menu-movil"><span>CERRAR</span></label>
          </ul>
        </div>  
        <ul class="menu">
            <li><a href="index.php">Inicio</a></li>
            <li class="activa"><a href="nosotros.php">Sobre nosotros</a></li>
            <li><a href="servicios.php">Servicios</a></li>
            <li><a href="barcos.php">Barcos</a></li>
            <li><a href="contacto.php">Contacto</a></li>
          </ul>
          <!--<div class="rrss">
            <a href="https://instagram.com"><i class="fab fa-instagram fa-lg"></i></a>
            <a href="https://api.whatsapp.com/send?phone=34986655232&text="><i class="fab fa-whatsapp fa-lg"></i></a>
            <a href="https://github.com/thediego48/thediego48.github.io"><i class="fab fa-github fa-lg"></i></a>
          </div>-->
      </header>
    </div>
    <div class="banner-contacto">
      <div class="contenido-banner-contacto">
        <h2>¿Interesado en alquilar?</h2>
        <a class="button" href="contacto.php">¡Haz tu reserva!</a>
      </div>
    </div>
    <section class="quienes-somos">
      <h2>¿Quienes somos?</h2>
      <div class="imagen-texto">
          <img src="fotos/fotos-nosotros/crew-barco.jpg" width="500" height="320"/>
            <p>Somos una empresa de gallegos muy fanáticos del mar. Nuestra empresa fue fundada por Bartolomé Real en 1955, que es abuelo del actual "capitán" de Real Yatch Rental.
            Todo comenzó alquilando su pequeño velero para poder comer, ya que eran tiempos muy duros para nuestra familia. Poco a poco fuimos creciendo hasta convertirnos en la mayor empresa de alquiler de embarcaciones de Galicia.</p>
      </div>  
    </section>
    <section class="nuestro-equipo">
      <h2 style="color:white;text-align:center;">Nuestro equipo</h2>
      <div class="nuestro-equipo2">
        <div class="capitan" class="capitan1">
          <img src="fotos/fotos-nosotros/capitan1.jpg" width="200" height="280"/>
          <h3>Alberto Real</h3>
          <p>Capitan senior</p>
        </div>
        <div class="capitan" class="capitan2">
          <img src="fotos/fotos-nosotros/capitan2.jpg" width="200" height="280"/>
          <h3>José María (El Chemita)</h3>
          <p>Patrón senior</p>
        </div>
        <div class="capitan" class="capitan3">
          <img src="fotos/fotos-nosotros/capitan3.jpg" width="200" height="280"/>
          <h3>Carlos Linares</h3>
          <p>Patrón Junior</p>
        </div>
      </div>  
    </section>
    <section class="contacto-index">
      <h2>Contáctanos</h2>
      <p>Puedes contarnos en este formulario cualquier duda que tengas, nosotros te ayudaremos.</p>
      <form action="" method="post">
        <p>
           <input type="text" class="nombre" name="Nombre" placeholder="Nombre"/>
        </p>
        <p>
           <input type="email" class="email" name="email" placeholder="Correo electrónico"/>
        </p>
        <p>
           <textarea class="mensaje" name="mensaje" placeholder="Tu mensaje"></textarea>
        </p>
        <p>
          <input type="checkbox" name="condiciones" required/><label for="condiciones">He leído y acepto la <a href="privacidad.html">política de privacidad</a></label>
        </p>
        <p><input type="button" class="button"value="Enviar" onClick="alert('Mensaje enviado, te contactaremos lo antes posible')"/></p>
        </form>
    </section>
    <footer>
      <section class="footer-1000px">
      <div class="logo-mapa">  
        <a href="index.php"><img src="fotos/fotos-global/logo1.png" width="140px" height="60px"/></a>
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
            <a href="https://github.com/thediego48/thediego48.github.io"><i class="fab fa-github fa-2x"></i></a>
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
        <br><button type="button" class="button" onclick="acceptCookies()">
          Acepto el uso de cookies
        </button>
        <a href="javascript:window.close();"><p>No acepto, sácame de aquí</p></a>
      </div>
    </div>
    <!--Enlace de boton subir https://luismasdev.com/boton-subir/-->
    <a href="#" id="js_up" class="boton-subir">Subir</a>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
      //invocamos al objeto (window) y a su método (scroll), solo se ejecutara si el usuario hace scroll en la página
      $(window).scroll(function(){
        if($(this).scrollTop() > 300){ //condición a cumplirse cuando el usuario aya bajado 301px a más.
          $("#js_up").slideDown(300); //se muestra el botón en 300 mili segundos
        }else{ // si no
          $("#js_up").slideUp(300); //se oculta el botón en 300 mili segundos
        }
      });
      
      //creamos una función accediendo a la etiqueta i en su evento click
      $("#js_up i").on('click', function (e) { 
        e.preventDefault(); //evita que se ejecute el tag ancla (<a href="#">valor</a>).
        $('body,html').animate({ // aplicamos la función animate a los tags body y html
          scrollTop: 0 //al colocar el valor 0 a scrollTop me volverá a la parte inicial de la página
        },700); //el valor 700 indica que lo ara en 700 mili segundos
        return false; //rompe el bucle
      });

      //script css cookies
      function checkAcceptCookies() {
        if (localStorage.acceptCookies == 'true') {
        } else {
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
        }else{
            header("location: login.php");
        }
        ?>
  </body>
</html>