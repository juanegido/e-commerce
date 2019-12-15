<?php
session_start();
include '../global/config.php';
include '../global/conexion.php';
include '../templates/cabecera_admin.php';
?>


<?php

        ###################################################################
        //----------Comprobamos sesion y si es administrador-----//
        ###################################################################
    if (!isset($_SESSION['correo']) ||  $_SESSION['administrador']==false) { //comprobamos que se haya logueado como administrador
        echo '<div align="center" class="card" ">';
        echo 'ERROR!! debe registrarse con una cuenta válida: <a href="login.php"> Iniciar sesión </a> </div>';
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
                window.location.assign("login.php"); </script>';
            }
        }
        

    


        echo '<blockquote class="large"><b>Bienvenid@ a la página de administración de Tachbot:</b> <i>'.$_SESSION['correo'].'</i></blockquote> ';
        echo ' <div class="col-12">';
            echo '<div class="card">';
                echo '<input class="btn btn-primary" type="submit" name="" value="Mostrar XML:servicio" onclick="mostrar();">';
            echo '</div>';
            echo '<div class="card">';
                echo '<input class="btn btn-primary" type="submit" name="" value="Insertar XML:servicio" onclick="insertar();">';
            echo '</div>';
             echo '<div class="card">';
                echo '<input class="btn btn-primary" type="submit" name="" value="Añadir servicio a XML" onclick="añadir();">';
            echo '</div>';
            echo '<div class="card">';
                echo '<input class="btn btn-primary" type="submit" name="" value="Eliminar servicio XML (XML)" onclick="eliminar();">';
            echo '</div>';

            echo '<div class="card">';
            echo '<input class="btn btn-primary" type="submit" name="" value="Analytics Dashboard" onclick="goanalytics()">';
            echo '</div>';
            
            echo '<form action="administrador.php" method="POST">
                    <br><input type="submit" name="limpiar" value="Limpiar" class="btn btn-primary" id="limpiar" />
                    </form>';
            

        echo '</div>';

        echo '<div class= "container" id="mostrarXML">';   
        echo '</div>';

        echo '<div align="center" class= "container" id="formularioInsertarServicio">';   
        echo '</div>';

        if (isset($_GET["añadir"]) && $_GET["añadir"] == 'true') {
            echo "</br><div align='center' style='color:blue'>Servicio añadido a la BBDD Tachbot.<br> Recuerda incluir la imagen en la carpeta /img</div>";
        }

        if (isset($_GET["eliminar"]) && $_GET["eliminar"] == 'true') {
            echo "</br><div align='center' style='color:blue'>Servicio eliminado en la BBDD Tachbot.<br></div>";
        }
        if (isset($_GET["eliminar"]) && $_GET["eliminar"] == 'false') {
            echo "</br><div align='center' style='color:red'>El servicio introducido no existe en la BBDD Tachbot.<br></div>";
        }


        if (isset($_POST["limpiar"])) {
            header('Location: ../vista/administrador.php'); 
        }




 } ?>

        

<!--
        ##########################################################################################
        //---------AJAX que llama a funciones php para realizar consultas en la BBDD------------//
        #########################################################################################
-->


<script src="../js/jquery-3.4.1.js"></script>

<script>
function mostrar() {
    $.ajax({
        type: 'POST', //aqui puede ser igual get
        url: '../xml/funcionesAdmin.php', //aqui va tu direccion donde esta tu funcion php
        dataType: 'html',
        data: {'func' : 'mostrar'},
        success: function(data) {
            //lo que devuelve tu archivo mifuncion.php
            jQuery('#mostrarXML').html(data);
            
        },
        error: function(data) {
            //lo que devuelve si falla tu archivo mifuncion.php
            alert(data);
        }
    });
}
</script>

<script>
function insertar() {
    $.ajax({
        type: 'POST', //aqui puede ser igual get
        url: '../xml/funcionesAdmin.php', //aqui va tu direccion donde esta tu funcion php
        dataType: 'html',
        data: {'func' : 'insertar'},
        success: function(data) {
            //lo que devuelve tu archivo mifuncion.php
            alert(data);
        },
        error: function(data) {
            //lo que devuelve si falla tu archivo mifuncion.php
            alert(data);
        }
    });
}
</script>

<script>
function añadir() {
    $.ajax({
        type: 'POST', //aqui puede ser igual get
        url: '../xml/funcionesAdmin.php', //aqui va tu direccion donde esta tu funcion php
        dataType: 'html',
        data: {'func' : 'añadir'},
        success: function(data) {
            //lo que devuelve tu archivo mifuncion.php
            jQuery('#formularioInsertarServicio').html(data);
        },
        error: function(data) {
            //lo que devuelve si falla tu archivo mifuncion.php
            alert(data);
        }
    });
}
</script>

<script>
function eliminar() {
    $.ajax({
        type: 'POST', //aqui puede ser igual get
        url: '../xml/funcionesAdmin.php', //aqui va tu direccion donde esta tu funcion php
        data: {'func' : 'eliminar'},
        success: function(data) {
            //lo que devuelve tu archivo mifuncion.php
            jQuery('#formularioInsertarServicio').html(data);
        },
        error: function(data) {
            //lo que devuelve si falla tu archivo mifuncion.php
            alert(data);
        }
    });
}
</script>
<script>
function goanalytics()
{
     location.href = "../vista/dashboard.php";
} 
</script>


