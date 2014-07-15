<meta charset="utf-8">
<?php

/**
* 
*/

include_once('../br_includes/Pagina2.php');

class FormMensaje extends Pagina2
{

	function previo($privilegios){
		
		$this->MostarEncabezado();
		?>
			
		<br/>
		<br/>
		<?php

		$this->MostrarMenu($privilegios);
		?>
			
			<!--
			-->	
			<div class="row">
			<div class="col-md-6 col-md-offset-3">
		<?php
	}

	function previo2($privilegios){
		
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
		<br/>
		<br/>
		<?php

		$this->MostrarMenu($privilegios);
		?>
			
			<!--
			-->	
			<div class="row">
			<div class="col-md-6 col-md-offset-3">
		<?php
	}



	function MostrarMensaje_error($mensaje,$privilegios)
	{
		$this->previo($privilegios);
	?>

		<div class="alert alert-danger">
		<?php 
		echo utf8_encode($mensaje);
		?>
		</div>
		<br>
		<a class="btn btn-danger" href="javascript:history.back(1)">Volver</a>
	<?php
	$this->MostrarPie2();
		//echo "<br><a href='javascript:history.back(1)'>volver</a>";
	}

	function MostrarMensaje_warning($mensaje,$privilegios){
		$this->previo($privilegios);
		?>
		
		<div class="alert alert-warning">
		<?php 
		echo utf8_encode($mensaje);
		?>		
		</div>
		<br>
		<!--<a class="btn btn-warning" href='../ModuloAdministrador/<?php echo $pagina?>'>volver</a>-->
		<a class="btn btn-warning" href="javascript:history.back(1)">Volver</a>
		<?php
		$this->MostrarPie2();
		//echo "<br><a href='/'>Inicio</a>";
	}

	function MostrarMensaje_exito($mensaje,$privilegios,$pagina){
	$this->previo2($privilegios);
		?>
		
		<div class="alert alert-success">
		<?php 
		echo utf8_encode($mensaje);
		?>	
		</div>
		<br><a class="btn btn-success" href="../ModuloAdministrador/<?php echo $pagina?>">Volver</a>
		<?php
		$this->MostrarPie2();
		//echo "<br><a href='/'>Inicio</a>";
	}

	function MostrarPie2(){
		?>
		</div>
			</div>


		<!--
		</div>
		</body>
		</html>
-->
		
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>

		<?php
		$this->MostrarPie();
	}

}

?>

<!-- 		</div>
			</div>
		</div>-->