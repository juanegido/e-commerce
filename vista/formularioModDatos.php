<?php
include '../global/config.php';
include '../global/conexion.php';
include '../templates/cabecera.php';
?>



<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <h1> Modificacion de datos del usuario</h1>

    <form action="../controlador/modificacionDatosUsuario.php" method="POST">

        Introduzca nuevo nombre: <br> 
        <div style="margin-bottom: 25px" class="input-group">
        <input class="form-control" type="text" size="40" maxlength="64" name="name" /> <br><br>
        </div>

        Introduzca antigua contraseña <br> 
        <div style="margin-bottom: 25px" class="input-group">
        <input class="form-control" type="password" size="40" maxlength="64" name="passwordA" required/> <br><br>
        </div>

        Introduzca nueva contraseña <br> 
        <div style="margin-bottom: 25px" class="input-group">
        <input class="form-control" type="password" size="40" maxlength="64" name="passwordN" required/> <br><br>
        </div>

        Introduzca correo antiguo: <br>
        <div style="margin-bottom: 25px" class="input-group"> 
        <input class="form-control" type="text" size="40" maxlength="64" name="correoA" required/> <br><br>
        </div>
        
        Introduzca correo nuevo: <br> 
        <div style="margin-bottom: 25px" class="input-group"> 
        <input class="form-control" type="text" size="40" maxlength="64" name="correoN" required/> <br><br>
        </div>

        Introduzca nueva ciudad: <br> 
        <div style="margin-bottom: 25px" class="input-group"> 
        <input class="form-control" type="text" size="40" maxlength="64" name="ciu" required/> <br><br>
        </div>

        Introduzca nuevo telefono: <br>
        <div style="margin-bottom: 25px" class="input-group"> 
        <input class="form-control" type="text" size="40" maxlength="64" name="tele" required/> <br><br>
        </div>

        <input type="submit" value="Actualizar"class="btn btn-primary">
        <input type="reset" value="Borrar" class="btn btn-primary">
        
        <?php
			//FEEDBACK para incorrecto
			if (isset($_GET["fallo1"]) && ($_GET["fallo1"]) == 'true') {
				echo "</br><div align='center' style='color:red'>Error al introduccir el correo o la contraseña.<br>Vuelva a intentarlo</div>";
			}
        ?>
        <br> 
        <br> 
        <br> 
        <br>
        <br>

    </form>
</div>


</body>

</html>

<?php include '../templates/pie.php';?>