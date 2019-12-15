<?php
include '../global/config.php';
include '../global/conexion.php';
include '../templates/cabecera_anteslogin.php';
?>

<!--CSS-->
<link rel="stylesheet" type="text/css" href="css/styles.css">

<!--tarjetas (contenido)-->
<!--contenido LOGIN-->
<div class="container">
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Iniciar Sesi&oacute;n</div>
                <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="recupera.php">¿Has
                        olvidado tu contraseña?</a></div>
            </div>

            <div style="padding-top:30px" class="panel-body">

                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                <form action="../controlador/consultalogin.php" id="loginform" class="form-horizontal" role="form"
                    action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="correo" type="email" class="form-control" name="correo" value="" placeholder="email"
                            required value="<?php if(isset($_COOKIE['correo'])) { echo $_COOKIE['correo'];}?>">
                    </div>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="contrasena" type="password" class="form-control" name="contrasena"
                            placeholder="contraseña" required>
                    </div>

                    <div style="margin-top:10px" class="form-group">
                        <div class="col-sm-12 controls">
                            <input type="checkbox" name="recordar" id="recordar" value="recordar"> Recordar durante 1
                            año<br><br>
                            <div class="g-recaptcha" data-sitekey="6Ld208UUAAAAAGRBeIyhmnmarX2MqF8iFEKeJdss"></div>
                            <br>
                            <input type="submit" name="btnlog" value="Iniciar Sesión" class="btn btn-primary"
                                id="Enviar" />
                            <input type="reset" name="borrar" value="Borrar" class="btn btn-primary" />
                            <div id="error"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12 control">
                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
                                No tiene una cuenta! <a href="registro.php">Registrate aquí</a>
                            </div>
                        </div>
                    </div>
                </form>
                <br>
                <br>
                <br>
                <?php
			//FEEDBACK para incorrecto
			if (isset($_GET["fallo1"]) && $_GET["fallo1"] == 'true') {
                echo "</br><div align='center' style='color:red'>Usuario o contraseña invalido.<br>Vuelva a intentarlo</div>";
                echo '<br>';
            }
            if (isset($_GET["fallo2"]) && $_GET["fallo2"] == 'true') {
                echo "</br><div align='center' style='color:red'>Captcha incorrecto.<br>Vuelva a intentarlo</div>";
                echo '<br>';
			}
			?>
            </div>
        </div>
    </div>
</div>


<!--JAVA SCRIPT-->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>


<script src="https://account.snatchbot.me/script.js"></script><script>window.sntchChat.Init(74039)</script> 


</body>

</html>


<?php include '../templates/pie.php';?>