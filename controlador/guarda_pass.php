<?php
include '../global/config.php';
include '../global/conexion.php';
include '../templates/cabecera_anteslogin.php';
session_start();

if(!empty($_POST))
	{
        $codigo = test_input($_POST['codigo']);
        $contrasena1 = test_input($_POST['contrasena']);
        $contrasena2 = test_input($_POST['con_contrasena']);
		
		$sql_select = "SELECT token FROM cliente WHERE correo='" . $_SESSION['correoRecu'] . "'"; /* Seleccionar el cliente que se corresponde al usuario introducido */
        $resultado_select = $pdo->query($sql_select); /* Realizamos la consulta y almacenamos en resultado_select */
        $usuario_select = $resultado_select->fetch(PDO::FETCH_ASSOC); 
        if($usuario_select['token']==$codigo){

            if($contrasena1==$contrasena2){
            
            $contrasena2=password_hash($contrasena2,PASSWORD_DEFAULT);
            $sql_select = "UPDATE cliente SET contrasena = '$contrasena2' WHERE correo = '" . $_SESSION['correoRecu'] . "'";
            $resultado_select = $pdo->query($sql_select);
            $_SESSION["correo"] =$_SESSION['correoRecu'] ;
            header('Location: ../indexLogin.php');

            }else{
                header('Location: ../vista/cambiopass.php?fallo2=true');
            }
        }else{
            //envio de fallo, el codigo introducido no es correcto
            header('Location: ../vista/cambiopass.php?fallo1=true');
        }

    
}

?>

<?php include '../templates/pie.php';?>