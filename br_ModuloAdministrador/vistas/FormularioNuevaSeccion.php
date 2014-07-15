<?php

include_once('../includes/Pagina2.php');
class FormularioNuevaSeccion extends Pagina2{
	
	function MostrarFormularioNuevaSeccion($privilegios)
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

<form class="form-horizontal" method="POST" name="form-entrada" action="../ModuloAdministrador/GetRegistrarNuevaSeccion.php" role="form">
			  
	  <div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label redaccion">Título</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="seccion" id="inputEmail3" autofocus required placeholder="Nombre de la sección">
	    </div>
	  </div>

	  <div class="form-group">
	    <div class="col-sm-offset-3 col-sm-2">
	      <button type="submit" class="btn btn-default" name="registrar">Registrar</button>
	    </div>

	    <div class="col-sm-2">
			      <a type="button" class="btn btn-default" href="../ModuloAdministrador/IndexSecciones.php">Cerrar</a>
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
	