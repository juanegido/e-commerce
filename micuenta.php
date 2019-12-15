<?php
session_start();
include 'global/config.php';
include 'global/conexion.php';
include 'templates/cabecera.php';
?>
    <?php
    if (!isset($_SESSION['correo'])) {
        echo '<div align="center" class="card">';
        echo 'ERROR!! debe registrarse: <a href="vista/login.php"> Iniciar sesión </a> </div>';
        echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>';
    } else { //si la sesión existe 
        if (isset($_SESSION['ultimoAcceso'])) { //comprueba que no haya pasado x tiempo desde la sesion
            $ahora = time();
            $antes = $_SESSION['ultimoAcceso'];
            $_SESSION['ultimoAcceso'] = $ahora;
            if ($ahora - $antes > 900) {
                $_SESSION = array(); //eliminamos las variables de sesión
                session_destroy();
                //eliminamos las cookies de sesión:
                $paramCookies = session_get_cookie_params();
                setcookie(session_name(), 0, time() - 3600, $paramCookies["path"]);
                echo '<script type="text/javascript">
                alert("Sesión expiró. Vuelve a loguearte");
                window.location.assign("vista/login.php"); </script>';
            }
        }
        echo '<div align="center" class="card" style="background-color:lightblue">';
        echo '
        <div class="row" >
            <div class="col-sm-3" >
                <div class="card" >
                    <img src=img/usuario.jpg style="width:30%">
                    <a href="vista/formularioModDatos.php">Modificacion datos</a>
                    <a href="controlador/consultaProductos.php">Mis pedidos</a>
                    <a href="vista/ayuda.php">Ayuda</a>
                </div>
            </div>        
            <div class="col-sm-9" >
                    <div class="card-body" style="background-color:lightblue">
                        <h5 class="card-title">MI CUENTA</h5>
                    </div>
            </div>
        </div>
        ';
    }
    ?>
    </div>
    <br> 
        <br> 
        <br> 
        <br>
        <br>
</body>

</html>

<?php include 'templates/pie.php';?>