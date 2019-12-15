<?php
include '../global/config.php';
include '../global/conexion.php';
session_start();

if(!empty($_POST))
	{
		$correo = test_input($_POST['correo']);
        $nombre = test_input($_POST['nombre']);
        $mensaje = test_input($_POST['mensaje']). ".El correo del cliente es: ".$correo;


        $destinatario = 'tachbot7@gmail.com';
        $asunto = 'Mensaje posible cliente: '.test_input($_POST['asunto']);
     
        if(mail($destinatario,$asunto,$mensaje)){
            echo "<div class='container' style='color:blue'><br>El mensaje ha sido enviado con exito. En breves recibirá una respuesta.<br>
            Gracias por su interes.<br Tachbot./></div>";
        }else{
            echo 'error al enviar el mensaje';
        }

}


?>

