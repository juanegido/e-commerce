<?php

include '../global/config.php';
include '../global/conexion.php';
include '../templates/cabecera_anteslogin.php';
?>

<!--tarjetas (contenido)-->
<!--contenido REGISTRO-->
<div class="container">
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <legend>Registro</legend>
            <form action="../controlador/procesoregistro.php" method="POST">
                Introduzca su correo:<br>
               <div style="margin-bottom: 25px" class="input-group">
                <input class="form-control" type="email" size="40" maxlength="64" name="correo" required /><br><br>
               </div>
                Introduzca su contraseña:<br>
                <div style="margin-bottom: 25px" class="input-group">
                <input class="form-control" type="password" size="40" name="contrasena" required /><br><br>
                </div>
                Introduzca su Nombre:<br>
                <div style="margin-bottom: 25px" class="input-group">
                <input class="form-control" type="text" size="40" maxlength="64" NAME="nombre" /><br><br>
                </div>
                Introduzca su Ciudad:<br>
                <div style="margin-bottom: 25px" class="input-group">
                <input class="form-control" type="text" size="40" maxlength="64" NAME="ciudad" /><br><br>
                </div>
                Introduzca su Telefono:<br>
                <div style="margin-bottom: 25px" class="input-group">
                <input class="form-control" type="text" size="40" maxlength="64" NAME="telefono" /><br><br>
                </div>
                <input type="submit" name="btnlog" value="Registrarme" class="btn btn-primary" />
                <input type="reset" name="borrar" value="Borrar" class="btn btn-primary" />
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <?php
			//FEEDBACK para incorrecto
			if (isset($_GET["fallo1"]) && ($_GET["fallo1"]) == 'true') {
				echo "</br><div align='center' style='color:red'>Error al registrar.<br>Vuelva a intentarlo</div>";
            }
            if (isset($_GET["fallo2"]) && ($_GET["fallo2"]) == 'true') {
                echo "</br><div align='center' style='color:red'>El correo ya existe.<br>Pruebe a <a href='login.php'>Iniciar Sesión</a></div>";
                echo '<br>';
                
			}
			?>
            </form>
        </div>
    </div>
</div>
<!--JAVA SCRIPT-->
<!-- <script src="https://account.snatchbot.me/script.js"></script><script>window.sntchChat.Init(74039)</script> 
	-->
</body>

</html>

<?php include '../templates/pie.php';?>