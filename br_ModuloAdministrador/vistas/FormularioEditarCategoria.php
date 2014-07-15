<?php

include_once('../includes/Pagina2.php');
class FormularioEditarCategoria extends Pagina2{
	
	function MostrarFormularioEditarCategoria($categoria, $secciones, $privilegios)
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


<?php

$this->MostrarMenu($privilegios);
?>

<br/>
<br/>

	<div class="row">

		<div class="col-md-10 col-md-offset-1">


		<!-- Nav tabs -->
<ul class="nav nav-tabs">
  <li class="active"><a href="#editar" class="redaccion" data-toggle="tab">Editar</a></li>
  <li><a href="#mover" class="redaccion" data-toggle="tab">Mover a otra sección</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane fade in active" id="editar">

  		<div class="alert alert-info">

			<form class="form-horizontal" method="POST" name="form-entrada" action="../ModuloAdministrador/GetEditarCategoria.php" role="form">
			  
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label redaccion">Editar Categoría</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="categoria" id="categoria" autofocus value="<?php echo utf8_encode($categoria['descripcion'])?>">
			    </div>
			  </div>

			 <div class="form-group">
			    <label  class="col-sm-2 control-label redaccion">Sinopsis de Categoría</label>
			    <div class="col-sm-10">
			      <textarea class="form-control" name="sinopsis" rows="3"><?php echo $categoria['sinopsis']?></textarea>
			    </div>
			  </div>

			  <?php
			  //$categoria['horario'];

			  $fecha= json_decode($categoria['horario'],true);
			  foreach ($fecha as $f) {
			  	echo $f['dia']."<br>";

			  	?>	
		<!-- 	   <div class="form-group">
			    <label  class="col-sm-2 control-label redaccion">Horario</label>
				<div class="col-sm-10">      
				    <div class="col-sm-5">
				      <input type="text" class="form-control" name="dia[0][]" value="<?php echo $fecha['dia']?>" required placeholder="Ej. LUNES A DOMINGO">
				    </div>
				    <div class="col-sm-4">
				      <input type="text" class="form-control" name="dia[1][]" value="<?php echo $fecha['hora']?>" required placeholder="Ej. 7:00 AM">
				    </div>
			    </div>
			  </div> -->
			  	<?php
			  }

			  ?>

			  
			  <hr>

			  <input type="hidden" name="id_categoria" value="<?php echo $categoria['id_categoria']?>">

			  <div class="form-group">
			    <div class="col-sm-offset-3 col-sm-2">
			      <button type="submit" class="btn btn-info" name="actualizar">Actualizar</button>
			    </div>
			    <div class="col-sm-2">
			      <a type="button" class="btn btn-default" href="../ModuloAdministrador/IndexCategorias.php">Cerrar</a>
			    </div>
			  </div>
			</form>
		</div>
	</div>	
  
  <div class="tab-pane fade" id="mover">

  	<div class="alert alert-info">

		  <form class="form-horizontal" method="POST" name="form-entrada" action="../ModuloAdministrador/GetEditarCategoria.php" role="form">
		  	<div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label redaccion">Sección</label>
			    <div class="col-sm-5">
			      
			      <select name="seccion" class="form-control">
			      	<option value="0">Seleccion una sección</option>
			      		<?php while ($seccion=mysql_fetch_array($secciones)) {
			      		?>
			      		<option value="<?php echo $seccion['id_seccion']?>"><?php echo utf8_encode($seccion['descripcion'])?></option>
			      		<?php
			      		}?>
			      </select>

			    </div>
			  </div>

				  <hr>

		  <input type="hidden" name="id_categoria" value="<?php echo $categoria['id_categoria']?>">

		  <div class="form-group">
		    <div class="col-sm-offset-3 col-sm-2">
		      <button type="submit" class="btn btn-info" name="actualizar_seccion">Actualizar</button>
		    </div>
		    <div class="col-sm-2">
		      <a type="button" class="btn btn-default" href="../ModuloAdministrador/IndexCategorias.php">Cerrar</a>
		    </div>
		  </div>
		</form>

		</div><!-- alert -->
  </div>

  </div>



	</div><!-- fin de col-->
</div><!-- fin de row-->

<?php

$this->MostrarPie();
	}//fin de function
}//fin de class

?>

