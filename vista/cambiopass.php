<?php
include '../global/config.php';
include '../global/conexion.php';
include '../templates/cabecera_anteslogin.php';
session_start();


echo'
<div class="container">    
			<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
				<div class="panel panel-info" >
					<div class="panel-heading">
						<div class="panel-title">Cambiar Contraseña</div>
						</div>     
					
					<div style="padding-top:30px" class="panel-body" >
						
						<form id="loginform" class="form-horizontal" role="form" action="../controlador/guarda_pass.php" method="POST" autocomplete="off">
							
							<input type="hidden" id="user_id" name="user_id" value ="<?php echo $user_id; ?>" />
							
                            <input type="hidden" id="token" name="token" value ="<?php echo $token; ?>" />
                            
                            <div class="form-group">
								<label for="código" class="col-md-5 control-label">Código recuperación</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="codigo" placeholder="Código recuperación" required>
								</div>
							</div>
							
							<div class="form-group">
								<label for="password" class="col-md-5 control-label">Contraseña nueva</label>
								<div class="col-md-9">
									<input type="password" class="form-control" name="contrasena" placeholder="Contraseña" required>
								</div>
							</div>
							
							<div class="form-group">
								<label for="con_password" class="col-md-5 control-label">Confirmar contraseña</label>
								<div class="col-md-9">
									<input type="password" class="form-control" name="con_contrasena" placeholder="Confirmar contraseña" required>
								</div>
							</div>
					
							<div style="margin-top:10px" class="form-group">
								<div class="col-sm-12 controls">
									<button id="btn-login" type="submit" class="btn btn-success">Modificar</a>
								</div>
							</div>   
						</form>
					</div>                     
				</div>  
			</div>
		</div>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>';

		
		
		//FEEDBACK para incorrecto
		if (isset($_GET["fallo1"]) && $_GET["fallo1"] == 'true') {
			echo "</br><div align='center' style='color:red'>Codigo incorrecto.<br>Vuelva a intentarlo</div>";
		}
		if (isset($_GET["fallo2"]) && $_GET["fallo2"] == 'true') {
			echo "</br><div align='center' style='color:red'>Las contraseñas no coinciden.<br>Vuelva a intentarlo</div>";
		}
        
        ?>

<?php include '../templates/pie.php';?>