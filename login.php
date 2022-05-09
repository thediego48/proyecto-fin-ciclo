<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();
       
        $usuarios = array(
            array("usuario" => "pedro", "clave" => "abc123"),
            array("usuario" => "maria", "clave" => "abc123"),
            array("usuario" => "juan", "clave" => "abc123")
        );

        if (isset($_GET['logout'])&& $_GET['logout']==1) {
            unset($_SESSION['validado']);
        }
        
        function validar_usuario($usuario, $clave) {
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
            
        header("location:index.html");
        
        } else {
            ?>
        
            <form action="login.php" method="post">
                <input type="text" name="usuario" placeholder="Usuario"/>
                <input type="password" name="clave" placeholder="contraseña"/>
                <input type="submit" value="validar"/>
            </form>



            <?php
        }
        ?>
    </body>
</html>
