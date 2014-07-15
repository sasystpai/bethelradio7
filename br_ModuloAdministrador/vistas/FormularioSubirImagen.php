<?php

/**
* 
*/

include_once('../includes/Pagina2.php');
class FormularioSubirImagen extends Pagina2
{
	

	function MostrarFormularioSubirImagen($privilegios){


	?>
	
	<br/>
<br/>
    <?php
$this->MostarEncabezado();

  ?>
  
<!-- desahbilitar la cache-->

<meta http-equiv="Expires" content="0" />
<meta http-equiv="Pragma" content="no-cache" />


<script type="text/javascript">
{
if(history.forward(1))
location.replace(history.forward(1))
}
</script>


  <?php

$this->MostrarMenu($privilegios);
?>

<br/>
<br/>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">

		<div class="alert alert-info frecuencias">

<form class="form-horizontal" method="POST" name="form-entrada" action="../ModuloAdministrador/GetSubirImagen.php" role="form" enctype="multipart/form-data" onsubmit="return validateForm();">
			  
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Imagen</label>
			    <div class="col-sm-10">
		    		<input type="file" name="archivo" id="exampleInputFile">
		    		
			    </div>
			  </div>	 
			  
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-default" name="registrar">Subir</button>
			    </div>
			  </div>
			</form>

			</div>

		</div>
	</div>
<?php
		$this->MostrarPie();

	}
}


?>