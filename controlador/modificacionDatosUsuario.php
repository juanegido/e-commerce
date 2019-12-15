<?php
include '../global/config.php';
include '../global/conexion.php';
include '../templates/cabecera.php';
session_start();


$nombre = $_POST['name'];
$correoA = $_POST['correoA'];
$correoN = $_POST['correoN'];
$contraseniaA = $_POST['passwordA'];
$contraseniaN = password_hash($_POST['passwordN'], PASSWORD_DEFAULT);
$ciudad = $_POST['ciu'];
$telefono = $_POST['tele'];


if($correoA == $_SESSION["correo"]){
    $actualiza_sql = "UPDATE cliente SET nombre='$nombre', ciudad ='$ciudad', telefono='$telefono', correo='$correoN', contrasena= '$contraseniaN'
    WHERE correo='$correoA'";
    $actualiza_select = $pdo->query($actualiza_sql);
    $actualiza = $actualiza_select->fetch(PDO::FETCH_ASSOC);
    
    //guardamos la sesión
    $_SESSION["correo"] = $_POST["correoN"];
    $_SESSION["contrasena"] = $_POST["passwordN"];
    echo "Inserción completada";
    header('Location:../micuenta.php');

}else{
    header('Location:../vista/formularioModDatos.php?fallo1=true'); 
} 
    
?>


