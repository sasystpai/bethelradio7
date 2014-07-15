<?php

include_once('../includes/Pagina2.php');
class FormularioMostrarPeticionDeOracion extends Pagina2{
	
	function MostrarPeticionDeOracion($datos, $privilegios)
	{
    ?>
<br/>
<br/>
    <?php
$this->MostarEncabezado();

?>
<script type="text/javascript" src="../includes/js/verificar.js"></script>

<!--
<script src="node_modules/less/dist/less-1.4.2.min.js"></script>
-->
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
	<script src="../includes/dist/js/jquery-1.9.1.js"></script>
	<script src="../includes/textarea/ckeditor.js"></script>
	<script src="../includes/textarea/adapters/jquery.js"></script>
	<link href="../includes/textarea/sample.css" rel="stylesheet">
	<style>

		#editable
		{
			padding: 10px;
			float: left;
		}

	</style>


<?php

$this->MostrarMenu($privilegios);
?>

<br/>
<br/>

	<div class="row">

		<div class="col-md-10 col-md-offset-1">


		<!-- Nav tabs -->
<ul class="nav nav-tabs">
  <li class="active redaccion"><a href="#datos_peticion" data-toggle="tab">Datos de Petición</a></li>
  <li><a href="#editar" class="redaccion" data-toggle="tab">Editar</a></li>

  <?php 
  if ($datos['email']) {
  	?>
  <li><a href="#responder" class="redaccion" data-toggle="tab">Responder</a></li>
  	
  	<?php
  }
  ?>


  <!-- <li><a href="#password" class="redaccion" data-toggle="tab">Cambiar contraseña</a></li> -->
  <!-- <li><a href="#settings" data-toggle="tab">Settings</a></li> -->
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane fade in active" id="datos_peticion">
  	
  	<div class="alert alert-info">
<form class="form-horizontal" name="form-entrada" role="form">
			  
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label redaccion">Nombre</label>
			    <div class="col-sm-5">
			      <input type="text" class="form-control" name="nombre" id="nombre" disabled value="<?php echo utf8_encode($datos['nombre'])?>">
			    </div>
			  </div>
			  
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label redaccion">Motivo</label>
			    <div class="col-sm-5">
			      <input type="text" class="form-control" name="motivo" id="motivo" disabled="disabled" value="<?php echo utf8_encode($datos['motivo'])?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label redaccion">Petición</label>
			    <div class="col-sm-5">
			    <textarea class="form-control" rows="8" disabled="disabled"><?php echo utf8_encode($datos['peticion'])?></textarea>
			      <!-- <input type="tel" class="form-control" name="telefono" id="telefono" value="<?php echo utf8_encode($datos['telefono'])?>"> -->
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label redaccion">Procedencia</label>
			    <div class="col-sm-5">
			      <input type="email" class="form-control" name="procendencia" id="procedencia" disabled="disabled" value="<?php echo utf8_encode($datos['procedencia'])?>">
			    </div>
			  </div>

			  <br/>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label redaccion">Teléfono</label>
			    <div class="col-sm-5">
			      <input type="tel" class="form-control" name="telefono" id="telefono" disabled="disabled" value="<?php echo utf8_encode($datos['telefono'])?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label redaccion">Email</label>
			    <div class="col-sm-5">
			      <input type="email" class="form-control" name="email" id="email" disabled="disabled" value="<?php echo utf8_encode($datos['email'])?>">
			    </div>
			  </div>

			  <hr>

			</form>
			</div><!-- alert -->

  </div><!-- fin de datos de usuario-->
  <div class="tab-pane fade" id="editar">
	  
  	  	<div class="alert alert-info">
<form class="form-horizontal" method="POST" name="form-entrada" action="../ModuloAdministrador/GetEditarPeticionDeOracion.php" role="form">
			  
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label redaccion">Nombre</label>
			    <div class="col-sm-5">
			      <input type="text" class="form-control" name="nombre" id="nombre" autofocus value="<?php echo utf8_encode($datos['nombre'])?>">
			    </div>
			  </div>
			  
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label redaccion">Motivo</label>
			    <div class="col-sm-5">
			      <input type="text" class="form-control" name="motivo" id="motivo" value="<?php echo utf8_encode($datos['motivo'])?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label redaccion">Petición</label>
			    <div class="col-sm-5">
			    <textarea class="form-control" rows="8" name="peticion"><?php echo utf8_encode($datos['peticion'])?></textarea>
			      <!-- <input type="tel" class="form-control" name="telefono" id="telefono" value="<?php echo utf8_encode($datos['telefono'])?>"> -->
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label redaccion">Procedencia</label>
			    <div class="col-sm-5">
			      <input type="text" class="form-control" name="procedencia" id="procedencia" value="<?php echo utf8_encode($datos['procedencia'])?>">
			    </div>
			  </div>

			  <br/>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label redaccion">Teléfono</label>
			    <div class="col-sm-5">
			      <input type="tel" class="form-control" name="telefono" id="telefono" value="<?php echo utf8_encode($datos['telefono'])?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label redaccion">Email</label>
			    <div class="col-sm-5">
			      <input type="email" class="form-control" name="email" id="email" value="<?php echo utf8_encode($datos['email'])?>">
			    </div>
			  </div>

			  <hr>

			  <input type="hidden" name="id_peticion" value="<?php echo $datos['id_peticion']?>">

			  <div class="form-group">
			    <div class="col-sm-offset-3 col-sm-2">
			      <button type="submit" class="btn btn-info" name="actualizar">Actualizar</button>
			    </div>
			    <div class="col-sm-2">
			      <a type="button" class="btn btn-default" href="../ModuloAdministrador/IndexPeticionDeOracion.php">Cerrar</a>
			    </div>
			  </div>
			</form>
			</div><!-- alert -->

	</div>
  <div class="tab-pane fade" id="responder">
  		<div class="alert alert-info">
		  	<br/>		  		

		  	<form class="form-horizontal" method="POST" action="../ModuloAdministrador/GetEnviarMail.php" role="form">

			  	<div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label redaccion">Enviar a</label>
				    <div class="col-sm-5">
				      <input type="text" class="form-control" name="nombre" readonly="readonly" id="nickname" value="<?php echo $datos['nombre'].'('.$datos['email'].')'?>">
				    </div>
				 </div>

				 <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label redaccion">Mensaje</label>
				    <div class="col-sm-5">
				      <textarea class="form-control" name="mensaje" rows="8" autofocus></textarea>
				    </div>
				 </div>

				   <input type="hidden" name="id_usuario" value="<?php echo $datos['id_usuario']?>">
				   <input type="hidden" name="email" value="<?php echo $datos['email']?>">

				  <div class="form-group">
				    <div class="col-sm-offset-5 col-sm-5">
				      <input type="submit" class="btn btn-primary btn-sm" name="enviar_mail" value="enviar mensaje" />
				    </div>
				  </div>
			</form>  
		  		
		  	
		  	<br/>
		  	<br/>
	  	</div>
  </div>
  <!-- <div class="tab-pane" id="settings">...</div> -->
</div>

		
	</div><!-- fin de col-->
</div><!-- fin de row-->

<?php

$this->MostrarPie();
	}//fin de function
}//fin de class

?>