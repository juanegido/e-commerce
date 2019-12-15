<?php
include '../global/config.php';
include '../global/conexion.php';
include '../templates/cabecera_anteslogin.php';
session_start();

if(!empty($_POST))
	{
		$destinatario = test_input($_POST['correo']);
		
		$sql_select = "SELECT * FROM cliente WHERE correo='" . $_POST["correo"] . "'"; /* Seleccionar el cliente que se corresponde al usuario introducido */
        $resultado_select = $pdo->query($sql_select); /* Realizamos la consulta y almacenamos en resultado_select */
        $usuario_select = $resultado_select->fetch(PDO::FETCH_ASSOC);
        if (!$usuario_select) { 
            echo 'El correo introducido no existe. Introduce un correo válido.';
        }else{
            
        $_SESSION["correoRecu"] = test_input($_POST['correo']);
        //$pass=$usuario_select['contrasena'];
        $token = bin2hex(random_bytes(16));

        $sql_select = "UPDATE cliente SET token = '$token' WHERE correo = '" . $_POST["correo"] . "'";
        $resultado_select = $pdo->query($sql_select);
  


        $asunto = "Mensaje para recuperación de contraseña"; 
        $cuerpo = ' 
        <html> 
        <head> 
        <title>correo</title> 
        </head> 
        <body> 
        <h1>Hola '.$usuario_select['nombre'].'</h1> 
        <p> 
        <b>A continuación se muestra el código de recuperación:'.$token.'</b>. Copia el código y redirigete a la página para modificar tu contraseña. 
        </p> 
        </body> 
        </html> 
        '; 

        //para el envío en formato HTML 
        $headers = "MIME-Version: 1.0\r\n"; 
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

        //dirección del remitente 
        $headers .= "From: Tachbot <tachbot7@gmail.com>\r\n"; 

        //dirección de respuesta, si queremos que sea distinta que la del remitente 
        //$headers .= "Reply-To: mariano@desarrolloweb.com\r\n"; 

        //ruta del mensaje desde origen a destino 
        //$headers .= "Return-path: holahola@desarrolloweb.com\r\n"; 

        //direcciones que recibián copia 
        //$headers .= "Cc: tachbot7@gmail.com\r\n"; 

        //direcciones que recibirán copia oculta 
        //$headers .= "Bcc: pepe@pepe.com,juan@juan.com\r\n"; 
        
        echo "<div class='container'>
        Recuperar Password - Sistema de Usuarios<br>
        Hola ".$usuario_select['nombre'].": Se ha solicitado un reinicio de contraseña. <br/><br/>Para restaurar la contraseña visita la siguiente dirección: <a href=../vista/cambiopass.php>restaurar</a>
        </div>";
        if(mail($destinatario,$asunto,$cuerpo,$headers)){
            echo "<div class='container' style='color:blue'><br>Hemos enviado un correo electronico a la direcion $destinatario, siga las instrucciones.<br /></div>";
        }else{
            echo 'error al enviar en mensaje';
        }

}
}

?>

<?php include '../templates/pie.php';?>