<?php

include_once('../includes/Pagina2.php');
class FormularioEditarUsuario extends Pagina2{
	
	function MostrarFormularioEditarUsuario($datos, $privilegios)
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
  <li class="active redaccion"><a href="#info-personal" data-toggle="tab">Datos de Usuario</a></li>
  <li><a href="#privilegios" class="redaccion" data-toggle="tab">Privilegios de usuario</a></li>
  <li><a href="#password" class="redaccion" data-toggle="tab">Cambiar contraseña</a></li>
  <!-- <li><a href="#settings" data-toggle="tab">Settings</a></li> -->
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane fade in active" id="info-personal">
  	
  	<div class="alert alert-info">
<form class="form-horizontal" method="POST" name="form-entrada" action="../ModuloAdministrador/GetEditarUsuario.php" role="form">
			  
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label redaccion">Nombre</label>
			    <div class="col-sm-5">
			      <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo utf8_encode($datos['nombre'])?>">
			    </div>
			  </div>
			  
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label redaccion">Apellido</label>
			    <div class="col-sm-5">
			      <input type="text" class="form-control" name="apellido" id="apellido" value="<?php echo utf8_encode($datos['apellido'])?>">
			    </div>
			  </div>

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

			  <br/>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label redaccion">NickName</label>
			    <div class="col-sm-5">
			      <input type="text" class="form-control" name="nickname" id="nickname" value="<?php echo utf8_encode($datos['nickname'])?>">
			    </div>
			  </div>

			  <hr>

			  <input type="hidden" name="id_usuario" value="<?php echo $datos['id_usuario']?>">

			  <div class="form-group">
			    <div class="col-sm-offset-3 col-sm-2">
			      <button type="submit" class="btn btn-info" name="actualizar">Actualizar</button>
			    </div>
			    <div class="col-sm-2">
			      <a type="button" class="btn btn-default" href="../ModuloAdministrador/IndexUsuarios.php">Cerrar</a>
			    </div>
			  </div>
			</form>
			</div><!-- alert -->

  </div><!-- fin de datos de usuario-->
  <div class="tab-pane fade" id="privilegios">
	  <div class="alert alert-info">
		  	<br/>
		  	<br/>
		  	<br/>
		  	<p class="redaccion">proximamente</p>
		  	<br/>
		  	<br/>
	  	</div>
	</div>
  <div class="tab-pane fade" id="password">
  		<div class="alert alert-info">
		  	<br/>		  		

		  	<form class="form-horizontal" method="POST" action="../ModuloAdministrador/GetEditarUsuario.php" role="form">

			  	<div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label redaccion">Nueva contraseña</label>
				    <div class="col-sm-5">
				      <input type="password" class="form-control" name="password" id="nickname" placeholder="Indique nueva contraseña">
				    </div>
				  </div>

				   <input type="hidden" name="id_usuario" value="<?php echo $datos['id_usuario']?>">

				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-5">
				      <input type="submit" class="btn btn-info btn-sm" name="change_password" value="Cambair contraseña" />
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

