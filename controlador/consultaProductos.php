<?php
include '../global/config.php';
include '../global/conexion.php';
include '../templates/cabecera.php';
session_start();

?>
<?php
//obtener valores de formulario
$correo = $_SESSION['correo'];
$id_cli = $_SESSION['id_cliente'];
//SQL con marcadores
$sql = "SELECT id_cli, fecha_pedido, fecha_expiracion, precio_total, id_pedido FROM pedido where id_cli=:id_cli";
//preparar
$stmtPDO = $pdo->prepare($sql);
//vincular y ejecutar (con array)
$stmtPDO->execute(array('id_cli' => $id_cli));

if (!$stmtPDO) {
    die("No se puede realizar la consulta $conexion->errno: $conexion->error");
}

// Mostramos una tabla con el resultado de la consulta     border=2
echo "<center><h1>Mis pedidos</h1><br><br>";
echo "<center><table class=\"table table-hover\"><tr> <th>CLIENTE</th> <th>FECHA PEDIDO</th>  <th>FECHA EXPIRACIÓN</th> <th>PRECIO TOTAL</th> <th>ID PEDIDO</th> <th>RECLAMACIÓN</th></tr>";
//$registro = $stmtPDO->fetch(PDO::FETCH_ASSOC);

while($registro = $stmtPDO->fetch()){
    echo "</tr>";
    echo "<td>" . $registro['id_cli'] . "</td>";
    echo "<td>" . $registro['fecha_pedido'] . "</td>";
    echo "<td>" . $registro['fecha_expiracion'] . "</td>";
    echo "<td>" . $registro['precio_total'] . "</td>";
    echo "<td>" . $registro['id_pedido'] . "</td>";
    echo "<td> <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#exampleModalLong\" name=\"Reclamar\">Reclamar</button> </td>";
   //echo "<td>" . $registro['reclamacion'] . "</td>";
    echo "</tr>";
 }
echo"</table>";
echo"<br> 
<br> 
<br> 
<br>
<br>";
?>
<html>
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Realice su reclamación</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
            Ha seleccionado la opción de reclamar su pedido. Para seguir con el procedimiento de reclamación 
            deberá de ponerse en contacto con nosotros a través de nuestro correo: tachbot@gmail.com

        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Aceptar</button>
      </div>
    </div>
  </div>
</div>
</html>


<?php include '../templates/pie.php';?>



