<?php

include_once('../includes/Pagina2.php');
class FormularioEditarEntrada extends Pagina2{
	
	function MostrarFormularioEditarEntrada($datos, $categorias, $privilegios)
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
	<script>

		CKEDITOR.disableAutoInline = true;

		$( document ).ready( function() {
			$( '#editor1' ).ckeditor(); // Use CKEDITOR.replace() if element is <textarea>.
			$( '#editable' ).ckeditor(); // Use CKEDITOR.inline().
		} );

		function setValue() {
			$( '#editor1' ).val( $( 'input#val' ).val() );
		}

	</script>


<?php

$this->MostrarMenu($privilegios);
?>

<br/>
<br/>

	<div class="row">

		<div class="col-md-10 col-md-offset-1">

		<div class="alert alert-info">

<form class="form-horizontal" method="POST" name="form-entrada" action="../ModuloAdministrador/GetEditarEntrada.php" role="form" enctype="multipart/form-data" onsubmit='validar(); return false'>
			  
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label redaccion">Título</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="titulo" id="titulo" value="<?php echo utf8_encode($datos['titulo'])?>">
			    </div>
			  </div>
			  
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label redaccion">Redacción</label>
			    <div class="col-sm-10">
			      <textarea class="form-control" id="editor1" name="editor1" 
			      placeholder="Redacción" 
			      rows="12" required>
			      <?php echo utf8_encode($datos['redaccion'])?>
			      </textarea>
			      <!-- <input type="text" class="form-control" name="titulo" id="inputEmail3" required placeholder="nombre del archivo"> -->
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label redaccion">Tags</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="tags" id="tags" value="<?php echo utf8_encode($datos['tags'])?>">
			      <p class="help-block redaccion-min">Ejemplo: familia, felicidad, unidad familiar </p>
			    </div>
			  </div>

			   <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label redaccion">Imagen</label>
			    <div class="col-sm-3 img-responsive">
			  		<input type="image" class="img-responsive" src="../<?php echo $datos['id_imagen']?>" />	
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label redaccion">Cambiar Imagen</label>
			    <div class="col-sm-5 img-responsive">
			  		<input type="file" name="archivo[]" />	
			    </div>
			  </div>

			  <br/>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label redaccion">Audio</label>
			    <div class="col-sm-10">
		    		<audio controls>
		    			<source src="../<?php echo $datos['id_audio']?>" type="audio/mpeg">
		    		</audio>
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label redaccion">Cambiar Audio</label>
			    <div class="col-sm-5 img-responsive">
			  		<input type="file" name="archivo[]" />	
			    </div>
			  </div>

			  <br/>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label redaccion">Categoría</label>
			    <div class="col-sm-5">
		    		<select name="categoria" id="categoria" class="form-control redaccion">
		    			
							<optgroup label="Elija una categoría">
								<option value="0">Elija una categoría</option>
							</optgroup>
							<?php
							foreach ($categorias as $seccion => $categoria)
							{
								?>
							<optgroup label="<?php echo utf8_encode($seccion) ?>">
								<?php
							foreach ($categoria as $value) 
							{
								if ($datos['id_categoria']==$value['id_categoria']) {
									# code...
								?>
							<option selected="selected" value="<?php echo $value['id_categoria']?>"> 
								<?php echo utf8_encode($value['descripcion_categoria'])?> 
							</option>
								<?php
								}//fin de if

								else{

									?>
									
							<option value="<?php echo $value['id_categoria']?>"> 
							<?php echo utf8_encode($value['descripcion_categoria'])?> 
							</option>

									<?php
								}

							}
							?>
							</optgroup>
							<?php
							}
							?>
								}
					</select>
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label redaccion">Fecha de Publicación</label>
			    <div class="col-sm-5">
		    		<input type="date" name="fecha_publicacion" class="form-control redaccion" value="<?php echo $datos['fecha_publicacion']?>" required >
			    </div>
			  </div>

			  <hr>

			  <input type="hidden" name="id_entrada" value="<?php echo $datos['id_entrada']?>">

			  <div class="form-group">
			    <div class="col-sm-offset-3 col-sm-2">
			      <button type="submit" class="btn btn-info" name="actualizar">Actualizar</button>
			    </div>
			    <div class="col-sm-2">
			      <a type="button" class="btn btn-default" href="../ModuloAdministrador/IndexEntradas.php">Cerrar</a>
			    </div>
			  </div>
			</form>
			</div><!-- alert -->
	</div><!-- fin de col-->
</div><!-- fin de row-->

<?php

$this->MostrarPie();
	}//fin de function
}//fin de class

?>

