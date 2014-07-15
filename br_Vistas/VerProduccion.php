<?php

/**
* 
*/
include_once('Pagina.php');
class VerProduccion extends Pagina
{
	
	function MostrarVerProduccion($infoCategoria, $entradas, $programa_actual)
	{

		$this->MostrarEncabezado($infoCategoria['descripcion']);
		?>
		<link rel="stylesheet" type="text/css" href="br_includes/HT/css/LaHoraDeLaTransformacion.css">
		<link rel="stylesheet" type="text/css" href="br_includes/HT/css/estilos-producciones.css"	>
		<?php
		
        $fondo="fondo-nosotros";
        $this->MostrarMenu($fondo,$programa_actual);

        $this->MostrarPresentacion3($infoCategoria,$entradas);

         $this->MostrarFoot();
	

	}


	function MostrarPresentacion3($infoCategoria, $entradas){

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

		<div class="espacio"> </div>

		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="col-md-4">
				<!-- <p class="lead">Sinopsis</p> -->
				<p> <?php echo utf8_encode($infoCategoria['sinopsis'])?> </p>
				</div>
				<div class="col-md-5">
					
					<div class="row">
					<?php $i=0;
			$datos = json_decode($infoCategoria['horario'],true);
			if (isset($datos)) {
				# code...
					foreach($datos as $key){
					$i++;
					if($i%3==0){echo "<br/><br><br><br><hr/>";}
						?>
						<div class="col-md-6">
							<blockquote class="produccion">
							  <p class="titulo-produccion"><?php if(isset($key['dia'])){ echo $key['dia'];}?></p>
							  <p class="hora"><?php if(isset($key['hora'])){echo $key['hora'];}?></p>
							</blockquote>
						</div>
						<?php
					}					
			}//fin de if
					?>	
					</div>
				</div>
			</div>
		</div><!-- fin de fila-->


		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="col-md-9">
					<div 
						class="titulo-lista-reproduccion neue" 
						style=" background-color: #AB9828<?php //echo $infoCategoria['color']?>">Lista de reproducción
					</div>
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="col-md-9">
				<?php while ($r=mysql_fetch_array($entradas)) {
					?>
							<div class="row"> 
								<div class="col-md-2 col-md-offset-1">
									<a href="Ver-Produccion.php?produccion=<?php echo $r['titulo_id']?>">
										<img class="img-responsive" src="br_includes/HT/img/btn-paly2.png"/> 
									</a>	
								</div>

								<div class="col-md-7">
									<a href="Ver-Produccion.php?produccion=<?php echo $r['titulo_id']?>">
										<p class="neue-pro letra-azul titulo-lista">
										<?php echo utf8_encode($r['titulo']);?>	
										</p> 
									</a>
				<hr/>
								</div>
							</div>
					<?php
				}?>	
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>
	</div> 


		<?php

	}


}


?>