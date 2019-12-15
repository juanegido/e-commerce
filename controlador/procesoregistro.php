<?php
session_start();
include '../global/config.php';
include '../global/conexion.php';
?>

<?php
$nombre = test_input($_POST["nombre"]);
$ciudad = test_input($_POST["ciudad"]);
$telefono = test_input($_POST["telefono"]);
$correo = test_input($_POST["correo"]);
$administrador = false;
$contrasena = password_hash($_POST["contrasena"], PASSWORD_DEFAULT);

$sql_select = "SELECT * FROM cliente WHERE correo='" . $_POST["correo"] . "'"; /* Seleccionar el cliente que se corresponde al usuario introducido */
$resultado_select = $pdo->query($sql_select); /* Realizamos la consulta y almacenamos en resultado_select */
if ($resultado_select) { /* Si hay resultado */
    $usuario_select = $resultado_select->fetch(PDO::FETCH_ASSOC); /* Recorremos las consultas */
    if($usuario_select['correo']==$correo){
        header('Location:../vista/registro.php?fallo2=true');
    }else{

        $sql = "INSERT INTO cliente ( nombre, ciudad, telefono, correo, contrasena, id_cliente, administrador) VALUES (:nombre, :ciudad, :telefono, :correo,:contrasena, NULL, :administrador)";
        $stmt = $pdo->prepare($sql);

        try {
            $stmt->execute(array(':nombre' => $nombre, ':ciudad' => $ciudad, ':telefono' => $telefono, ':correo' => $correo, ':contrasena' => $contrasena, ':administrador'=> $administrador));
            $_SESSION['correo'] = $_POST["correo"];
            echo "Inserción completada";
            header('Location:../indexLogin.php');
        } catch (Exception $e) {
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
            header('Location:../vista/registro.php?fallo1=true');
        }

    }
}
?>