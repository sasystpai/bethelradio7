<?php

include_once('../includes/Pagina2.php');
class FormularioNuevaCategoria extends Pagina2{
	
	function MostrarFormularioNuevaCategoria($secciones, $privilegios)
	{
    ?>
<br/>
<br/>
    <?php
$this->MostarEncabezado();

?>
<script type="text/javascript" src="../includes/js/verificar.js"></script>
<script type="text/javascript" src="../verificar/js/jquery.min(1.7.2).js"></script>

	<link rel="stylesheet" href="../includes/colorpicker/css/colorpicker.css" type="text/css" />
    <link rel="stylesheet" media="screen" type="text/css" href="../includes/colorpicker/css/layout-bethelradio.css" />

	<script type="text/javascript" src="../includes/colorpicker/js/jquery.js"></script>
	<script type="text/javascript" src="../includes/colorpicker/js/colorpicker.js"></script>
    <script type="text/javascript" src="../includes/colorpicker/js/eye.js"></script>
    <script type="text/javascript" src="../includes/colorpicker/js/utils.js"></script>
    <script type="text/javascript" src="../includes/colorpicker/js/layout.js?ver=1.0.2"></script>

<!--
<script src="node_modules/less/dist/less-1.4.2.min.js"></script>
-->
<script type="text/javascript">
	var nextinput = 0;
function AgregarCampos(){
nextinput++;
campo ='<label class="col-sm-2 control-label redaccion">Horario extra</label>'+
	   '<div class="col-sm-5">'+
	     '<input type="text" class="form-control" name="dia[0][]"  required placeholder="Ej. LUNES A '+'DOMINGO"></div>'+
	    '<div class="col-sm-5">'+
		' <input type="text" class="form-control" name="dia[1][]"  required placeholder="Ej. 7:00 AM">'+
	    '</div>';
$("#campos").append(campo);
}

</script>

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

<form class="form-horizontal" method="POST" name="form-entrada" action="../ModuloAdministrador/GetRegistrarNuevaCategoria.php" role="form" onsubmit='validar_seccion(); return false'>
			  
	  <div class="form-group">
	    <label class="col-sm-2 control-label redaccion">Nombre de Categoría</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="categoria" autofocus required placeholder="Nombre de la categoría">
	    </div>
	  </div>

	   <div class="form-group">
	    <label  class="col-sm-2 control-label redaccion">Sinopsis de Categoría</label>
	    <div class="col-sm-10">
	      <textarea class="form-control" name="sinopsis" rows="3"></textarea>
	    </div>
	  </div>

	   <div class="form-group">
	    <label  class="col-sm-2 control-label redaccion">Horario</label>
	    
	    <div class="col-sm-5">
	      <input type="text" class="form-control" name="dia[0][]"  required placeholder="Ej. LUNES A DOMINGO">
	    </div>
	    <div class="col-sm-4">
	      <input type="text" class="form-control" name="dia[1][]"  required placeholder="Ej. 7:00 AM">
	    </div>
	    <div class="col-sm-1">
	      <a class="btn btn-sm btn-info" href="#" onclick="AgregarCampos();"><span class="glyphicon glyphicon-plus"></span></a>
	    </div>

	  </div>

	  <div class="form-group">
	  	<div id="campos">
	  </div>	

	  <div class="form-group">
	    <label class="col-sm-2 control-label redaccion">Color de Categoría</label>
	    <div class="col-sm-10">
	     <input type="color" name="color"> 

	<!--      <div  id="colorSelector">
	     	<div  type="text" name="color" style="background-color: #67D9F4">
	     	</div>
	     </div> -->
	    </div>
	  </div>

	   <div class="form-group">
	    <label class="col-sm-2 control-label redaccion">Banner de Categoría</label>
	    <div class="col-sm-10">
	      <input type="file" name="banner"  required>
	      <p class="help-block redaccion-min">Formato: jpg, png, gif.</p>
	    </div>
	  </div>

	  <div class="form-group">
	    <label class="col-sm-2 control-label redaccion">Sección</label>
	    <div class="col-sm-5">
	      
	      <select name="seccion" class="form-control">
	      	<option value="0">Seleccion una sección</option>
	      		<?php while ($seccion=mysql_fetch_array($secciones)) {
	      		?>
	      		<option value="<?php echo $seccion['id_seccion']?>"><?php echo utf8_encode($seccion['descripcion'])?></option>
	      		<?php
	      		}
	      		?>
	      </select>

	    </div>
	  </div>

	  <div class="form-group">
	    <div class="col-sm-offset-3 col-sm-2">
	      <button type="submit" class="btn btn-default" name="registrar">Registrar</button>
	    </div>

	    <div class="col-sm-2">
			      <a type="button" class="btn btn-default" href="../ModuloAdministrador/IndexCategorias.php">Cerrar</a>
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
	