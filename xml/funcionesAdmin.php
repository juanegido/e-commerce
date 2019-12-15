<?php
include '../global/config.php';
include '../global/conexion.php';



if(isset($_POST['Enviar2'])){
    $nombre = $_POST['nombre'];
    $sql_select = "SELECT * FROM servicio WHERE nombre='$nombre';";
    $resultado_select = $pdo->query($sql_select); 
    $servicio_select = $resultado_select->fetch(PDO::FETCH_ASSOC); 
    if ($servicio_select['nombre']==$nombre) { 

        $nombre = $_POST['nombre'];
        $sentencia = $pdo->prepare("DELETE FROM `servicio` WHERE nombre='$nombre';");
        $sentencia->execute();
        header('Location: ../vista/administrador.php?eliminar=true'); 
    }else{
        header('Location: ../vista/administrador.php?eliminar=false'); 
    }
}

if(isset($_POST['Enviar'])){

    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $imagen = $_POST['imagen'];

    $sentencia = $pdo->prepare("INSERT INTO `servicio` (`nombre`, `id_servicio`, `precio`, `descripcion`, `imagen`) VALUES (:nombre, :id_servicio, :precio, :descripcion, :imagen);");
    $sentencia->bindParam(":nombre", $nombre);
    $sentencia->bindParam(":id_servicio", $id_servicio);
    $sentencia->bindParam(":precio", $precio);
    $sentencia->bindParam(":descripcion", $descripcion);
    $sentencia->bindParam(":imagen", $imagen);
    $sentencia->execute();
    header('Location: ../vista/administrador.php?añadir=true'); 
}




##----------------------MOSTRAR XML (servicio/s)----------------------------------#
elseif($_POST['func']=='mostrar'){
    try {
        
       ###################################################################
        //-----------------XML muestra el contenido de: xml servicios---------------//
        ###################################################################
        $archivo = simplexml_load_file("../xml/servicio.xml");
        echo "<br><h5>DATOS DEL XML 'SERVICIOS'</h5>";
        foreach ($archivo as $indice=>$servicio){
            echo "Nombre: ".$servicio->nombre."<br>";
            echo "Id: ".$servicio->id_servicio."<br>";
            echo "Precio: ".$servicio->precio."<br>";
            echo "Descripcion: ".$servicio->descripcion."<br>";
            echo "Imagen: ".$servicio->imagen."<br>";
        echo "----------------------------------------------- <br>";
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}


##----------------------INSETAR XML (nuevo servicio/s)----------------------------------#
elseif($_POST['func']=='insertar'){
    try {

        $archivo = simplexml_load_file("servicio.xml");
        foreach ($archivo->children() as $servicio) {
            $nombre = $servicio->nombre;
            $id_servicio = $servicio->id_servicio;
            $precio = $servicio->precio;
            $descripcion = $servicio->descripcion;
            $imagen = $servicio->imagen;
        
            $sentencia = $pdo->prepare("INSERT INTO `servicio` (`nombre`, `id_servicio`, `precio`, `descripcion`, `imagen`) VALUES (:nombre, :id_servicio, :precio, :descripcion, :imagen);");
            $sentencia->bindParam(":nombre", $nombre);
            $sentencia->bindParam(":id_servicio", $id_servicio);
            $sentencia->bindParam(":precio", $precio);
            $sentencia->bindParam(":descripcion", $descripcion);
            $sentencia->bindParam(":imagen", $imagen);
            $sentencia->execute();
        
            echo 'INSERTANDO...';
        }

    } catch (Exception $e) {
        echo $e->getMessage();
    }
    }

##----------------------AÑADIR SERVICIO A XML----------------------------------#
elseif($_POST['func']=='añadir'){
    try {
        echo '
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-4">
        <form action="../xml/funcionesAdmin.php" method="POST" id="formulario">
            Introduzca nombre:<br>
            <input class="form-control" type="text" name="nombre" required id="nombre" required/><br><br>
            Introduzca precio:<br>
            <input class="form-control" type="integer"  name="precio" id="precio" required /><br><br>
            Introduzca descripción:<br>
            <input class="form-control" type="text" name="descripcion" id="descripcion" required /><br><br>
            Introduzca imagen:<br>
            <input class="form-control" type="text" name="imagen" id="imagen" required /><br><br>
        
            <br>
            <input type="submit" name="Enviar" value="Enviar" class="btn btn-primary" id="Enviar" />
            <input type="reset" name="borrar" value="Borrar" class="btn btn-primary" />
        </form>
        </div>';
        
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    }
##----------------------ELIMINAR servicio de XML----------------------------------#
elseif($_POST['func']=='eliminar'){
    try {
        
            echo '<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6">
            introduce el nombre del servicio a eliminar: 
            <form action="../xml/funcionesAdmin.php" method="POST">
                 <input class="form-control" type="text" size="40" maxlength="64" name="nombre" required id="nombre" /><br>
                 <br>
                 <input type="submit" name="Enviar2" value="Enviar" class="btn btn-primary" id="Enviar2" />
            </form>
            </div>';
        
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
else{
    echo 'error';
}


?>