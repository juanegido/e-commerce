<?php
session_start();
include '../global/config.php';
include '../global/conexion.php';
require_once "../controlador/recaptchalib.php";
?>

	<!--Captcha-->
	<?php
	// your secret key
	$secret = "6Ld208UUAAAAAMg5PjkUyRjzntFmat3RpB5a60QB";
	// empty response
	$response = null;
	// check secret key
	$reCaptcha = new ReCaptcha($secret);
	// if submitted check response

	?>
<?php


    



if (isset($_SESSION['correo'])) { /* Comrpobamos si la sesión estaba iniciada */
	echo '<p> Sesión iniciada previamente </p>';
	header('Location:../indexLogin.php');
}

if ($_POST["g-recaptcha-response"]) {
	$response = $reCaptcha->verifyResponse($_SERVER["REMOTE_ADDR"],$_POST["g-recaptcha-response"]);
	if ($response != null && $response->success) {
		if (isset($_POST['correo']) && isset($_POST['contrasena'])) { /* Si hay algo en usuario y contraseña */
			if ($_POST['correo'] != "" && $_POST['contrasena'] != "") { /* Y no está vacío */
				$sql_select = "SELECT * FROM cliente WHERE correo='" . $_POST["correo"] . "'"; /* Seleccionar el cliente que se corresponde al usuario introducido */
				$resultado_select = $pdo->query($sql_select); /* Realizamos la consulta y almacenamos en resultado_select */
				if ($resultado_select) { /* Si hay resultado */
					$usuario_select = $resultado_select->fetch(PDO::FETCH_ASSOC); /* Recorremos las consultas */
					if (password_verify($_POST["contrasena"], $usuario_select['contrasena'])) { /* Si las contraseñas coinciden */
						$_SESSION["correo"] = test_input($_POST["correo"]); /* Guardamos la sesion del usuario */
						$_SESSION["id_cliente"] = $usuario_select["id_cliente"];
						$_SESSION["nombre"] = $usuario_select["nombre"];
						$_SESSION["ciudad"] = $usuario_select["ciudad"];
						$_SESSION["ultimoAcceso"] = time();
						$_SESSION['administrador'] = $usuario_select['administrador'];
						if(isset($_POST['recordar'])) { /* Si decide recordar cookies la guardamos*/ 
							setcookie("correo", $_POST['correo'] , time() + 60*60*24*365);
						}
						if($usuario_select['administrador']==true){
							header('Location: ../vista/administrador.php');/* Somos admin, nos redirigimos a página de administración */
						}else{
							header('Location: ../indexLogin.php'); /* No somos admin, nos redirigimos a home */
						}
					} else {
						header('Location: ../vista/login.php?fallo1=true'); /* Si la contraseña no esta asociada a ese usuario volvemos a intentarlo */
					}
				}
			}
		}
	}
} else {
	header('Location: ../vista/login.php?fallo2=true');
}
?>

