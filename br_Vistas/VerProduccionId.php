<?php

include_once('Pagina.php');
class VerProduccionId extends Pagina
{
	
	function MostrarVerProduccionId($datosEntrada,$infoCategoria, $programa_actual)
	{

		$this->MostrarEncabezado($datosEntrada['titulo']);
		?>
		<link rel="stylesheet" type="text/css" href="br_includes/HT/css/LaHoraDeLaTransformacion.css">
		<link rel="stylesheet" type="text/css" href="br_includes/HT/css/estilos-producciones.css"	>
		<?php
		
        $fondo="fondo-nosotros";
        $this->MostrarMenu($fondo,$programa_actual);

        $this->MostrarContenido($infoCategoria,$datosEntrada);

         $this->MostrarFoot();
	

	}


	function MostrarContenido($infoCategoria, $dato){

		?>
		
		
	<!--<div class="fondo-presentacion">-->
	<div style="background-color: #fff<?php //echo $infoCategoria['color']; ?>">


		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				
				<div class="col-md-9">
					<div class="panel-HT panel-HT-default">
					  <div class="panel-HT-body">
					  	<img class="img-responsive" width="100%" src="<?php echo $infoCategoria['banner']?>">
					  </div>
					  <div class="panel-HT-footer neue titulo-presentacion"><?php echo utf8_encode($infoCategoria['descripcion'])?></div>
					</div>
				</div>
				<div class="col-md-4"><!-- 123 --></div>
			</div>
		</div>
	</div>

	 <div class="blanco">


<?php echo $dato['titulo']?>
		



	
	</div> 


		<?php

	}


}


?>