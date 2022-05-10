<!DOCTYPE html>
<html>
  <head>
    <title>Alquiler de barcos con patrón | Real Yatch Rental</title>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width"/>
      <link href="css/css-principal.css" rel="stylesheet" type="text/css" media="screen"/>
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
        <img src="fotos/fotos-index/yate1.jpg" alt="banner" class="banner"/>
        <a href="index.php"><img src="fotos/fotos-global/logo.png" width="150px" height="100px" class="logo"/></a>
        <div class="barras-movil">
          <input type="checkbox" id="menu-movil">
          <label for="menu-movil" class="menu-movil"><span class="fas fa-bars fa-2x"></span></label>
          <ul class="menu">
            <li class="activa-m"><a href="index.php">Inicio</a></li>
            <li><a href="nosotros.php">Sobre nosotros</a></li>
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
            <li class="activa"><a href="index.php">Inicio</a></li>
            <li><a href="nosotros.php">Sobre nosotros</a></li>
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
    <h2 style="color:black;text-align:center;">Trabajamos con los principales puertos de Galicia</h2>
    <div class="localizaciones">
      <div class="Vigo">
        <h1 class="texto-vigo">VIGO</h1>
      </div>
      <div class="Coruna">
        <h1 class="texto-coruna">A CORUÑA</h1>
      </div>
      <div class="Baiona">
        <h1 class="texto-baiona">BAIONA</h1>
      </div>
      <div class="Sanxenxo">
        <h1 class="texto-sanxenxo">SANXENXO</h1>
      </div>
      <div class="Ribadeo">
        <h1 class="texto-ribadeo">RIBADEO</h1>
      </div>
      <div class="Cambados">
        <h1 class="texto-cambados">CAMBADOS</h1>
      </div>
    </div>
    <section class="stats">
      <div class="centrar-stats">
        <div class="col1">
          <h1 class="h1-col1">7</h1>
          <p>Número de barcos</p>
        </div>
        <div class="col2">
          <h1 class="h1-col2">+370</h1>
          <p>Clientes satisfechos</p>
        </div>
        <div class="col3">
          <h1 class="h1-col3">6</h1>
          <p>Puertos disponibles</p>
        </div>
        <div class="col4">
          <h1 class="h1-col4">10</h1>
          <p>años de experiencia</p>
        </div>  
      </div>   
    </section>
    <h2 style="color:black;text-align:center;">Opiniones de nuestros clientes</h2>
    <section class="opiniones">
      <div class="opinion">
        <img src="fotos/fotos-index/5.png" width="157px" height="30px"/>
        <p>Ha sido una gran experiencia que he vivido con mi familia durante unos días por la costa de Galicia, el trato excelente. 
          Si te lo puedes permitir es una gran idea de vacaciones.</p>
        <h4>Lucía Dominguez</h4>
      </div>
      <div class="opinion">
        <img src="fotos/fotos-index/4.png" width="157px" height="30px"/>
        <p>He pasado una tarde de fiesta con amigos en un pedazo de barco, menuda despedida de soltero, muy divertido.
          La única pega es que no nos dejaron bañarnos borrachos.</p>
        <h4>Josito López</h4>
      </div>
      <div class="opinion">
        <img src="fotos/fotos-index/5.png" width="157px" height="30px"/>
        <p>Grandes profesionales que alquilan barcos de un nivel altísimo. Un verdadero lujo para pasar unos grandes días en el mar.
          Pena que únicamente alquilen con patrón.</p>
        <h4>Fernando Linares</h4>
      </div>
    </section>
    <section class="llamamos">
      <h2>¿Te llamamos?</h2>
      <p>Déjanos tu teléfono y te llamaremos lo antes posible...</p>
      <form action="mail/mailtelf.php" method="post">
        
          <input class="telefono"type="tel" name="telefono" placeholder="Teléfono" required/>
          <input type="submit" class="button"value="Enviar" onClick="alert('Mensaje enviado, te llamaremos lo antes posible')"/>
        
      </form>
    </section>
    <section class="contacto-index">
      <h2>O también puedes dejarnos un mensaje</h2>
      <p>Puedes contarnos en este formulario cualquier duda que tengas, nosotros te ayudaremos.</p>
      <form action="mail/mail.php" method="post">
        <p>
           <input type="text" class="nombre" name="nombre" placeholder="Nombre"/>
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
        <p><input type="submit" class="button"value="Enviar" onClick="alert('Mensaje enviado, te contactaremos lo antes posible')"/></p>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
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
