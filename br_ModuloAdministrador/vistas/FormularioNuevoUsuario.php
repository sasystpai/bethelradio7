<?php

include_once('../includes/Pagina2.php');
class FormularioNuevoUsuario extends Pagina2{
	
	function MostrarFormularioNuevoUsuario($privilegios)
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="../includes/textarea/ckeditor.js"></script>
	<script src="../includes/textarea/adapters/jquery.js"></script>
	<link href="../includes/textarea/sample.css" rel="stylesheet">


<?php

$this->MostrarMenu($privilegios);
?>

<br/>
<br/>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">

		<div class="alert alert-info">

<form class="form-horizontal" method="POST" name="form-entrada" action="../ModuloAdministrador/GetRegistrarNuevoUsuario.php" role="form">
			  
	<label class="redaccion text-center">Datos personales</label>
			  <br>
	  <div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label redaccion">Nombre</label>
	    <div class="col-sm-9">
	      <input type="text" class="form-control" name="nombre" autocomplete="on" autofocus required placeholder="Ingrese nombre de usuario">
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label redaccion">Apellido</label>
	    <div class="col-sm-9">
	      <input type="text" class="form-control" name="apellido" autocomplete="on" autofocus required placeholder="Ingrese apellido de usaurio">
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label redaccion">Email</label>
	    <div class="col-sm-9">
	      <input type="email" class="form-control" name="email" autocomplete="on" autofocus required placeholder="Ingrese email de usuario">
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label redaccion">Telefono</label>
	    <div class="col-sm-9">
	      <input type="tel" class="form-control" name="telefono" autocomplete="on" autofocus required placeholder="Ingrese telefono de usuario">
	    </div>
	  </div>

	  <hr>

	<label class="redaccion text-center">Datos de acceso</label>

		<br>

	  <div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label redaccion">NickName</label>
	    <div class="col-sm-9">
	      <input type="text" class="form-control" name="nickname" autocomplete="on" autofocus required placeholder="Ingrese nickname de usuario">
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label redaccion">Password</label>
	    <div class="col-sm-9">
	      <input type="password" class="form-control" name="password" autocomplete="on" autofocus required placeholder="Ingrese password de usuario">
	    </div>
	  </div>

	  <br>

	  <div class="form-group">
	    <div class="col-sm-offset-4 col-sm-2">
	      <button type="submit" class="btn btn-default" name="registrar">Registrar</button>
	    </div>

	    <div class="col-sm-2">
			      <a type="button" class="btn btn-default" href="../ModuloAdministrador/IndexUsuarios.php">Cerrar</a>
		</div>
	  </div>
</form>

			</div>

		</div>
	</div>

<?php

$this->MostrarPie();
	}//fin de function
}//fin de class

?>
	