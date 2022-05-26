<!DOCTYPE html>
<html>

<head>
  <title>Nuestros barcos | Real Yatch Rental</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width" />
  <link href="css/css-principal.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="css/css-barcos.css" rel="stylesheet" type="text/css" media="screen" />
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
    <div class="banner-logeo"><p class="bienvenida">Bienvenido, <?php echo $nombreIndex['nombre'] ?> </p></div>
    <header>
      <img src="fotos/fotos-barcos/portada-banner-compr.jpg" alt="banner" class="banner" />
      <a href="index.php"><img src="fotos/fotos-global/logo.png" width="150px" height="100px" class="logo" /></a>
      <div class="barras-movil">
        <input type="checkbox" id="menu-movil">
        <label for="menu-movil" class="menu-movil"><span class="fas fa-bars fa-2x"></span></label>
        <ul class="menu">
          <li><a href="index.php">Inicio</a></li>
          <li><a href="nosotros.php">Sobre nosotros</a></li>
          <li><a href="servicios.php">Servicios</a></li>
          <li class="activa-m"><a href="barcos.php">Barcos</a></li>
          <li><a href="contacto.php">Contacto</a></li>
          <li class="redes"><a href="https://instagram.com"><i class="fab fa-instagram fa-lg"></i></a>
            <a href="https://api.whatsapp.com/send?phone=34986655232&text="><i class="fab fa-whatsapp fa-lg"></i></a>
            <a href="https://github.com/thediego48/proyecto-fin-ciclo"><i class="fab fa-github fa-lg"></i></a>
          </li>
          <label for="menu-movil" class="menu-movil"><span>CERRAR</span></label>
        </ul>
      </div>
      <ul class="menu">
        <li><a href="index.php">Inicio</a></li>
        <li><a href="nosotros.php">Sobre nosotros</a></li>
        <li><a href="servicios.php">Servicios</a></li>
        <li class="activa"><a href="barcos.php">Barcos</a></li>
        <li><a href="contacto.php">Contacto</a></li>
        <div class="menu-hover" style="display: inline;">
        <li><a href="#" class="menu-hover"><i class="fas fa-regular fa-user"></i></a>
        <ul class="submenu-escr">
          <li><a href="datos-cuenta.php">Mi cuenta</a></li><br>
          <li><a href="login.php?logout=1"><i class="fas fa-solid fa-power-off"></i></a></li>
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
    <div class="banner-contacto">
      <div class="contenido-banner-contacto">
        <h2>¿Interesado en alquilar?</h2>
        <a class="button" href="contacto.php">¡Haz tu reserva!</a>
      </div>
    </div>
    <h1>Tenemos las mejores embarcaciones de Galicia a tu disposición.</h1>
    <p>Estos son algunos de nuestros barcos que vamos rotando periódicamente para dar siempre una experiencia única a nuestros clientes.</p>
    <div class="anuncios">
      <h2 id="ancla-1">Princess V65 <img src="fotos/fotos-index/5.png" width="100px" height="20px" /></h2>
      <a href="#pr1"><img src="fotos/fotos-barcos/princess.jpg" class="img-principal" /></a>
      <div class="galeria">
        <a href="#pr2"><img src="fotos/fotos-barcos/princess/princess1.png" class="foto-galeria" /></a>
        <a href="#pr3"><img src="fotos/fotos-barcos/princess/princess2.jpeg" class="foto-galeria" /></a>
        <a href="#pr4"><img src="fotos/fotos-barcos/princess/princess3.jpeg" class="foto-galeria" /></a>
        <a href="#pr5"><img src="fotos/fotos-barcos/princess/princess4.jpeg" class="foto-galeria" /></a>
        <a href="#pr6"><img src="fotos/fotos-barcos/princess/princess5.jpg" class="foto-galeria" /></a>
      </div>
      <div class="modal" id="pr1">
        <h3>Princess V65 (1/6)</h3>
        <div class="imagen">
          <a href="#pr6">&#60;</a>
          <a href="#pr2"><img src="fotos/fotos-barcos/princess.jpg"></a>
          <a href="#pr2">></a>
        </div>
        <a class="cerrar" href="#ancla-1">X</a>
      </div>
      <div class="modal" id="pr2">
        <h3>Princess V65 (2/6)</h3>
        <div class="imagen">
          <a href="#pr1">&#60;</a>
          <a href="#pr3"><img src="fotos/fotos-barcos/princess/princess1.png"></a>
          <a href="#pr3">></a>
        </div>
        <a class="cerrar" href="#ancla-1">X</a>
      </div>
      <div class="modal" id="pr3">
        <h3>Princess V65 (3/6)</h3>
        <div class="imagen">
          <a href="#pr2">&#60;</a>
          <a href="#pr4"><img src="fotos/fotos-barcos/princess/princess2.jpeg"></a>
          <a href="#pr4">></a>
        </div>
        <a class="cerrar" href="#ancla-1">X</a>
      </div>
      <div class="modal" id="pr4">
        <h3>Princess V65 (4/6)</h3>
        <div class="imagen">
          <a href="#pr3">&#60;</a>
          <a href="#pr5"><img src="fotos/fotos-barcos/princess/princess3.jpeg"></a>
          <a href="#pr5">></a>
        </div>
        <a class="cerrar" href="#ancla-1">X</a>
      </div>
      <div class="modal" id="pr5">
        <h3>Princess V65 (5/6)</h3>
        <div class="imagen">
          <a href="#pr4">&#60;</a>
          <a href="#pr6"><img src="fotos/fotos-barcos/princess/princess4.jpeg"></a>
          <a href="#pr6">></a>
        </div>
        <a class="cerrar" href="#ancla-1">X</a>
      </div>
      <div class="modal" id="pr6">
        <h3>Princess V65 (6/6)</h3>
        <div class="imagen">
          <a href="#pr5">&#60;</a>
          <a href="#pr1"><img src="fotos/fotos-barcos/princess/princess5.jpg"></a>
          <a href="#pr1">></a>
        </div>
        <a class="cerrar" href="#ancla-1">X</a>
      </div>

      <div class="specs">
        <h3><i class="fas fa-users fa-2x"></i><br>Día:10<br>Noche:6</h3>
        <h3><i class="fas fa-tachometer-alt fa-2x"></i><br>2600cv</h3>
        <h3><i class="fas fa-anchor fa-2x"></i><br>Puerto base:<br>Baiona</h3>
        <h3><i class="fas fa-ruler-horizontal fa-2x"></i><br>20 metros</h3>
        <h3><i class="fas fa-male fa-2x"></i><br>Con patrón</h3>
      </div>
      <h2>Tarifas</h2>
      <div class="precios">
        <table class="precios-barcos">
          <tr>
            <td class="celda-info">
              <h3>Medio día (8h)</h3>
            </td>
            <td class="celda-info">
              <h3>Día entero (16h)</h3>
            </td>
            <td class="celda-info">
              <h3> Alquiler semanal</h3>
            </td>
          </tr>
          <tr>
            <td class="precio">
              <h3>1 200€*</h3>
            </td>
            <td class="precio">
              <h3>2 000€*</h3>
            </td>
            <td class="precio">
              <h3>12 000€*</h3>
            </td>
          </tr>
          <tr>
            <td colspan="3">
              <p class="iva">*IVA no incluido</p>
            </td>
          </tr>
        </table>
      </div>
    </div>
    <div class="pares">
      <div class="anuncios">
        <h2 id="ancla-2">CANTIERE AZURRO 72 <img src="fotos/fotos-index/4.png" width="100px" height="20px" /></h2>
        <a href="#can1"><img src="fotos/fotos-barcos/cantiere.jpg" class="img-principal" /></a>
        <div class="galeria">
          <a href="#can2"><img src="fotos/fotos-barcos/cantiere/cantiere1.jpg" class="foto-galeria" /></a>
          <a href="#can3"><img src="fotos/fotos-barcos/cantiere/cantiere2.jpg" class="foto-galeria" /></a>
          <a href="#can4"><img src="fotos/fotos-barcos/cantiere/cantiere3.jpg" class="foto-galeria" /></a>
          <a href="#can5"><img src="fotos/fotos-barcos/cantiere/cantiere4.jpg" class="foto-galeria" /></a>
          <a href="#can6"><img src="fotos/fotos-barcos/cantiere/cantiere5.jpg" class="foto-galeria" /></a>
        </div>
        <div class="modal" id="can1">
          <h3>CANTIERE AZURRO 72 (1/6)</h3>
          <div class="imagen">
            <a href="#can6">&#60;</a>
            <a href="#can2"><img src="fotos/fotos-barcos/cantiere.jpg"></a>
            <a href="#can2">></a>
          </div>
          <a class="cerrar" href="#ancla-2">X</a>
        </div>
        <div class="modal" id="can2">
          <h3>CANTIERE AZURRO 72 (2/6)</h3>
          <div class="imagen">
            <a href="#can1">&#60;</a>
            <a href="#can3"><img src="fotos/fotos-barcos/cantiere/cantiere1.jpg"></a>
            <a href="#can3">></a>
          </div>
          <a class="cerrar" href="#ancla-2">X</a>
        </div>
        <div class="modal" id="can3">
          <h3>CANTIERE AZURRO 72 (3/6)</h3>
          <div class="imagen">
            <a href="#can2">&#60;</a>
            <a href="#can4"><img src="fotos/fotos-barcos/cantiere/cantiere2.jpg"></a>
            <a href="#can4">></a>
          </div>
          <a class="cerrar" href="#ancla-2">X</a>
        </div>
        <div class="modal" id="can4">
          <h3>CANTIERE AZURRO 72 (4/6)</h3>
          <div class="imagen">
            <a href="#can3">&#60;</a>
            <a href="#can5"><img src="fotos/fotos-barcos/cantiere/cantiere3.jpg"></a>
            <a href="#can5">></a>
          </div>
          <a class="cerrar" href="#ancla-2">X</a>
        </div>
        <div class="modal" id="can5">
          <h3>CANTIERE AZURRO 72 (5/6)</h3>
          <div class="imagen">
            <a href="#can4">&#60;</a>
            <a href="#can6"><img src="fotos/fotos-barcos/cantiere/cantiere4.jpg"></a>
            <a href="#can6">></a>
          </div>
          <a class="cerrar" href="#ancla-2">X</a>
        </div>
        <div class="modal" id="can6">
          <h3>CANTIERE AZURRO 72 (6/6)</h3>
          <div class="imagen">
            <a href="#can5">&#60;</a>
            <a href="#can1"><img src="fotos/fotos-barcos/cantiere/cantiere5.jpg"></a>
            <a href="#can1">></a>
          </div>
          <a class="cerrar" href="#ancla-2">X</a>
        </div>
        <div class="specs">
          <h3><i class="fas fa-users fa-2x"></i><br>Día:12<br>Noche:10</h3>
          <h3><i class="fas fa-tachometer-alt fa-2x"></i><br>1500cv</h3>
          <h3><i class="fas fa-anchor fa-2x"></i><br>Puerto base:<br>Ribadeo</h3>
          <h3><i class="fas fa-ruler-horizontal fa-2x"></i><br>23 metros</h3>
          <h3><i class="fas fa-male fa-2x"></i><br>Con patrón</h3>
        </div>
        <h2>Tarifas</h2>
        <div class="precios">
          <table class="precios-barcos">
            <tr>
              <td class="celda-info">
                <h3>Medio día (8h)</h3>
              </td>
              <td class="celda-info">
                <h3>Día entero (16h)</h3>
              </td>
              <td class="celda-info">
                <h3> Alquiler semanal</h3>
              </td>
            </tr>
            <tr>
              <td class="precio">
                <h3>1 000€*</h3>
              </td>
              <td class="precio">
                <h3>1 800€*</h3>
              </td>
              <td class="precio">
                <h3>11 000€*</h3>
              </td>
            </tr>
            <tr>
              <td colspan="3">
                <p class="iva">*IVA no incluido</p>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="anuncios">
      <h2 id="ancla-3">Fountaine Pajot Victoria 67 <img src="fotos/fotos-index/5.png" width="100px" height="20px" /></h2>
      <a href="#fou1"><img src="fotos/fotos-barcos/catamaran.jpg" class="img-principal" /></a>
      <div class="galeria">
        <a href="#fou2"><img src="fotos/fotos-barcos/catamaran/catamaran2.jfif" class="foto-galeria" /></a>
        <a href="#fou3"><img src="fotos/fotos-barcos/catamaran/catamaran3.jfif" class="foto-galeria" /></a>
        <a href="#fou4"><img src="fotos/fotos-barcos/catamaran/catamaran4.jfif" class="foto-galeria" /></a>
        <a href="#fou5"><img src="fotos/fotos-barcos/catamaran/catamaran5.jfif" class="foto-galeria" /></a>
        <a href="#fou6"><img src="fotos/fotos-barcos/catamaran/catamaran6.jfif" class="foto-galeria" /></a>
        <a href="#fou7"><img src="fotos/fotos-barcos/catamaran/catamaran7.jfif" class="foto-galeria" /></a>
      </div>
      <div class="modal" id="fou1">
        <h3>Fountaine Pajot Victoria 67 (1/7)</h3>
        <div class="imagen">
          <a href="#fou7">&#60;</a>
          <a href="#fou2"><img src="fotos/fotos-barcos/catamaran.jpg"></a>
          <a href="#fou2">></a>
        </div>
        <a class="cerrar" href="#ancla-3">X</a>
      </div>
      <div class="modal" id="fou2">
        <h3>Fountaine Pajot Victoria 67 (2/7)</h3>
        <div class="imagen">
          <a href="#fou1">&#60;</a>
          <a href="#fou3"><img src="fotos/fotos-barcos/catamaran/catamaran2.jfif"></a>
          <a href="#fou3">></a>
        </div>
        <a class="cerrar" href="#ancla-3">X</a>
      </div>
      <div class="modal" id="fou3">
        <h3>Fountaine Pajot Victoria 67 (3/7)</h3>
        <div class="imagen">
          <a href="#fou2">&#60;</a>
          <a href="#fou4"><img src="fotos/fotos-barcos/catamaran/catamaran3.jfif"></a>
          <a href="#fou4">></a>
        </div>
        <a class="cerrar" href="#ancla-3">X</a>
      </div>
      <div class="modal" id="fou4">
        <h3>Fountaine Pajot Victoria 67 (4/7)</h3>
        <div class="imagen">
          <a href="#fou3">&#60;</a>
          <a href="#fou5"><img src="fotos/fotos-barcos/catamaran/catamaran4.jfif"></a>
          <a href="#fou5">></a>
        </div>
        <a class="cerrar" href="#ancla-3">X</a>
      </div>
      <div class="modal" id="fou5">
        <h3>Fountaine Pajot Victoria 67 (5/7)</h3>
        <div class="imagen">
          <a href="#fou4">&#60;</a>
          <a href="#fou6"><img src="fotos/fotos-barcos/catamaran/catamaran5.jfif"></a>
          <a href="#fou6">></a>
        </div>
        <a class="cerrar" href="#ancla-3">X</a>
      </div>
      <div class="modal" id="fou6">
        <h3>Fountaine Pajot Victoria 67 (6/7)</h3>
        <div class="imagen">
          <a href="#fou5">&#60;</a>
          <a href="#fou7"><img src="fotos/fotos-barcos/catamaran/catamaran6.jfif"></a>
          <a href="#fou7">></a>
        </div>
        <a class="cerrar" href="#ancla-3">X</a>
      </div>
      <div class="modal" id="fou7">
        <h3>Fountaine Pajot Victoria 67 (7/7)</h3>
        <div class="imagen">
          <a href="#fou6">&#60;</a>
          <a href="#fou1"><img src="fotos/fotos-barcos/catamaran/catamaran7.jfif"></a>
          <a href="#fou1">></a>
        </div>
        <a class="cerrar" href="#ancla-3">X</a>
      </div>
      <div class="specs">
        <h3><i class="fas fa-users fa-2x"></i><br>Día:8<br>Noche:8</h3>
        <h3><i class="fas fa-tachometer-alt fa-2x"></i><br>200cv</h3>
        <h3><i class="fas fa-anchor fa-2x"></i><br>Puerto base:<br>A Coruña</h3>
        <h3><i class="fas fa-ruler-horizontal fa-2x"></i><br>20 metros</h3>
        <h3><i class="fas fa-male fa-2x"></i><br>Con patrón</h3>
      </div>
      <h2>Tarifas</h2>
      <div class="precios">
        <table class="precios-barcos">
          <tr>
            <td class="celda-info">
              <h3>Medio día (8h)</h3>
            </td>
            <td class="celda-info">
              <h3>Día entero (16h)</h3>
            </td>
            <td class="celda-info">
              <h3> Alquiler semanal</h3>
            </td>
          </tr>
          <tr>
            <td class="precio">
              <h3> 700€*</h3>
            </td>
            <td class="precio">
              <h3>1 200€*</h3>
            </td>
            <td class="precio">
              <h3>7 000€*</h3>
            </td>
          </tr>
          <tr>
            <td colspan="3">
              <p class="iva">*IVA no incluido</p>
            </td>
          </tr>
        </table>
      </div>
    </div>
    <div class="pares">
      <div class="anuncios">
        <h2 id="ancla-4">Astondoa 102 GLX <img src="fotos/fotos-index/5.png" width="100px" height="20px" /></h2>
        <a href="#as1"><img src="fotos/fotos-barcos/astondoa.jpg" class="img-principal" /></a>
        <div class="galeria">
          <a href="#as2"><img src="fotos/fotos-barcos/astondoa/astondoa1.jfif" class="foto-galeria" /></a>
          <a href="#as3"><img src="fotos/fotos-barcos/astondoa/astondoa2.jfif" class="foto-galeria" /></a>
          <a href="#as4"><img src="fotos/fotos-barcos/astondoa/astondoa4.jfif" class="foto-galeria" /></a>
          <a href="#as5"><img src="fotos/fotos-barcos/astondoa/astondoa5.jfif" class="foto-galeria" /></a>
          <a href="#as6"><img src="fotos/fotos-barcos/astondoa/astondoa3.jfif" class="foto-galeria" /></a>
        </div>
        <div class="modal" id="as1">
          <h3>Astondoa 102 GLX (1/6)</h3>
          <div class="imagen">
            <a href="#as6">&#60;</a>
            <a href="#as2"><img src="fotos/fotos-barcos/astondoa.jpg"></a>
            <a href="#as2">></a>
          </div>
          <a class="cerrar" href="#ancla-4">X</a>
        </div>
        <div class="modal" id="as2">
          <h3>Astondoa 102 GLX (2/6)</h3>
          <div class="imagen">
            <a href="#as1">&#60;</a>
            <a href="#as3"><img src="fotos/fotos-barcos/astondoa/astondoa1.jfif"></a>
            <a href="#as3">></a>
          </div>
          <a class="cerrar" href="#ancla-4">X</a>
        </div>
        <div class="modal" id="as3">
          <h3>Astondoa 102 GLX (3/6)</h3>
          <div class="imagen">
            <a href="#as2">&#60;</a>
            <a href="#as4"><img src="fotos/fotos-barcos/astondoa/astondoa2.jfif"></a>
            <a href="#as4">></a>
          </div>
          <a class="cerrar" href="#ancla-4">X</a>
        </div>
        <div class="modal" id="as4">
          <h3>Astondoa 102 GLX (4/6)</h3>
          <div class="imagen">
            <a href="#as3">&#60;</a>
            <a href="#as5"><img src="fotos/fotos-barcos/astondoa/astondoa4.jfif"></a>
            <a href="#as5">></a>
          </div>
          <a class="cerrar" href="#ancla-4">X</a>
        </div>
        <div class="modal" id="as5">
          <h3>Astondoa 102 GLX (5/6)</h3>
          <div class="imagen">
            <a href="#as4">&#60;</a>
            <a href="#as6"><img src="fotos/fotos-barcos/astondoa/astondoa5.jfif"></a>
            <a href="#as6">></a>
          </div>
          <a class="cerrar" href="#ancla-4">X</a>
        </div>
        <div class="modal" id="as6">
          <h3>Astondoa 102 GLX (6/6)</h3>
          <div class="imagen">
            <a href="#as5">&#60;</a>
            <a href="#as1"><img src="fotos/fotos-barcos/astondoa/astondoa3.jfif"></a>
            <a href="#as1">></a>
          </div>
          <a class="cerrar" href="#ancla-4">X</a>
        </div>
        <div class="specs">
          <h3><i class="fas fa-users fa-2x"></i><br>Día:12<br>Noche:10</h3>
          <h3><i class="fas fa-tachometer-alt fa-2x"></i><br>4000cv</h3>
          <h3><i class="fas fa-anchor fa-2x"></i><br>Puerto base:<br>Sanxenxo</h3>
          <h3><i class="fas fa-ruler-horizontal fa-2x"></i><br>31 metros</h3>
          <h3><i class="fas fa-male fa-2x"></i><br>Con patrón</h3>
        </div>
        <h2>Tarifas</h2>
        <div class="precios">
          <table class="precios-barcos">
            <tr>
              <td class="celda-info">
                <h3>Medio día (8h)</h3>
              </td>
              <td class="celda-info">
                <h3>Día entero (16h)</h3>
              </td>
              <td class="celda-info">
                <h3> Alquiler semanal</h3>
              </td>
            </tr>
            <tr>
              <td class="precio">
                <h3>4 200€*</h3>
              </td>
              <td class="precio">
                <h3>7 800€*</h3>
              </td>
              <td class="precio">
                <h3>50 000€*</h3>
              </td>
            </tr>
            <tr>
              <td colspan="3">
                <p class="iva">*IVA no incluido</p>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="anuncios">
      <h2 id="ancla-5">Sunseeker Predator 68 <img src="fotos/fotos-index/4.png" width="100px" height="20px" /></h2>
      <a href="#su1"><img src="fotos/fotos-barcos/sunseeker.jpg" class="img-principal" /></a>
      <div class="galeria">
        <a href="#su2"><img src="fotos/fotos-barcos/sunseeker/sunseeker2.jpg" class="foto-galeria" /></a>
        <a href="#su3"><img src="fotos/fotos-barcos/sunseeker/sunseeker3.jpg" class="foto-galeria" /></a>
        <a href="#su4"><img src="fotos/fotos-barcos/sunseeker/sunseeker4.jpg" class="foto-galeria" /></a>
        <a href="#su5"><img src="fotos/fotos-barcos/sunseeker/sunseeker5.jpg" class="foto-galeria" /></a>
        <a href="#su6"><img src="fotos/fotos-barcos/sunseeker/sunseeker6.jpg" class="foto-galeria" /></a>
      </div>
      <div class="modal" id="su1">
        <h3>Sunseeker Predator 68 (1/6)</h3>
        <div class="imagen">
          <a href="#su6">&#60;</a>
          <a href="#su2"><img src="fotos/fotos-barcos/sunseeker.jpg"></a>
          <a href="#su2">></a>
        </div>
        <a class="cerrar" href="#ancla-5">X</a>
      </div>
      <div class="modal" id="su2">
        <h3>Sunseeker Predator 68 (2/6)</h3>
        <div class="imagen">
          <a href="#su1">&#60;</a>
          <a href="#su3"><img src="fotos/fotos-barcos/sunseeker/sunseeker2.jpg"></a>
          <a href="#su3">></a>
        </div>
        <a class="cerrar" href="#ancla-5">X</a>
      </div>
      <div class="modal" id="su3">
        <h3>Sunseeker Predator 68 (3/6)</h3>
        <div class="imagen">
          <a href="#su2">&#60;</a>
          <a href="#su4"><img src="fotos/fotos-barcos/sunseeker/sunseeker3.jpg"></a>
          <a href="#su4">></a>
        </div>
        <a class="cerrar" href="#ancla-5">X</a>
      </div>
      <div class="modal" id="su4">
        <h3>Sunseeker Predator 68 (4/6)</h3>
        <div class="imagen">
          <a href="#su3">&#60;</a>
          <a href="#su5"><img src="fotos/fotos-barcos/sunseeker/sunseeker4.jpg"></a>
          <a href="#su5">></a>
        </div>
        <a class="cerrar" href="#ancla-5">X</a>
      </div>
      <div class="modal" id="su5">
        <h3>Sunseeker Predator 68 (5/6)</h3>
        <div class="imagen">
          <a href="#su4">&#60;</a>
          <a href="#su6"><img src="fotos/fotos-barcos/sunseeker/sunseeker5.jpg"></a>
          <a href="#su6">></a>
        </div>
        <a class="cerrar" href="#ancla-5">X</a>
      </div>
      <div class="modal" id="su6">
        <h3>Sunseeker Predator 68 (6/6)</h3>
        <div class="imagen">
          <a href="#su5">&#60;</a>
          <a href="#su1"><img src="fotos/fotos-barcos/sunseeker/sunseeker6.jpg"></a>
          <a href="#su1">></a>
        </div>
        <a class="cerrar" href="#ancla-5">X</a>
      </div>
      <div class="specs">
        <h3><i class="fas fa-users fa-2x"></i><br>Día:10<br>Noche:6</h3>
        <h3><i class="fas fa-tachometer-alt fa-2x"></i><br>2240cv</h3>
        <h3><i class="fas fa-anchor fa-2x"></i><br>Puerto base:<br>Vigo</h3>
        <h3><i class="fas fa-ruler-horizontal fa-2x"></i><br>21 metros</h3>
        <h3><i class="fas fa-male fa-2x"></i><br>Con patrón</h3>
      </div>
      <h2>Tarifas</h2>
      <div class="precios">
        <table class="precios-barcos">
          <tr>
            <td class="celda-info">
              <h3>Medio día (8h)</h3>
            </td>
            <td class="celda-info">
              <h3>Día entero (16h)</h3>
            </td>
            <td class="celda-info">
              <h3> Alquiler semanal</h3>
            </td>
          </tr>
          <tr>
            <td class="precio">
              <h3>4 200€*</h3>
            </td>
            <td class="precio">
              <h3>7 800€*</h3>
            </td>
            <td class="precio">
              <h3>50 000€*</h3>
            </td>
          </tr>
          <tr>
            <td colspan="3">
              <p class="iva">*IVA no incluido</p>
            </td>
          </tr>
        </table>
      </div>
    </div>

    <h1>Preguntas frecuentes</h1>
    <div class="extras">
      <button class="desplegable">¿Qué extras ofrecemos?</button>
      <div class="panel">
        <p>
          Disponemos de diversos extras que puedes solicitar junto con la reserva o pedirlos durante tu estancia:
        <ul>
          <li>Tripulante extra -- <b>100€/día</b></li>
          <li>Comida a todo lujo -- <b>100€ por comida y persona</b></li>
          <li>Pack despedida(Incluye disfraces obscenos, 1h de stripper, barra libre una noche, cena de temática de despedida) -- <b>1000€/persona</b> </li>
          <li>Cocinero profesional a bordo -- <b>200€/día</b></li>
          <li>Barra libre -- <b>300€ por día y persona</b></li>
          <li>Moto de agua extra -- <b>150€/hora</b></li>
        </ul>
        </p>
      </div>
    </div>
    <div class="incluye-precio">
      <button class="desplegable">¿Qué incluyen estos precios?</button>
      <div class="panel">
        <p>
        <ul>
          <li>Amarre en el puerto de partida con suministros(Luz y agua)</li>
          <li>Patrón especializado en grandes embarcaciones</li>
          <li>Un tripulante a elección(Marinero o azafata)</li>
          <li>Limpieza a la entrega del barco</li>
          <li>Sábanas y toallas de aseo</li>
          <li>Seguro</li>
          <li>Welcome pack (champagne, refrescos, frutas y snacks)</li>
          <li>Uso de todo el material que tenga el barco(Tabla paddlesurf, kayak, Seabobs, moto de agua, pack buceo...)</li>
        </ul>
        </p>
      </div>
    </div>
    <div class="no-incluye-precio">
      <button class="desplegable">¿Qué NO incluyen estos precios?</button>
      <div class="panel">
        <p>
        <ul>
          <li>IVA 21%</li>
          <li>Combustible</li>
          <li>Comidas y bebidas</li>
          <li>Amarre fuera del puerto base</li>
          <li>Dietas de tripulación</li>
          <li>Limpieza durante la estancia</li>
          <li>Cualquier extra solicitado</li>
        </ul>
        </p>
      </div>
    </div>
    <section class="llamamos">
      <h2>¿Te llamamos?</h2>
      <p style="color:white;">Déjanos tu teléfono y te llamaremos lo antes posible...</p>
      <form action="mail/mailtelf-barcos.php" method="post">
        <p>
          <input class="telefono" type="tel" name="telefono" placeholder="Teléfono" required />
          <input type="submit" class="button" value="Enviar" onClick="alert('Mensaje enviado, te llamaremos lo antes posible')" />
        </p>
      </form>
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
      var acc = document.getElementsByClassName("desplegable");
      var i;

      for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var panel = this.nextElementSibling;
          if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
          } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
          }
        });
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
  <?php
  } else {
    header("location: login.php");
  }
  ?>
</body>

</html>