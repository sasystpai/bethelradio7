<?php

/**
* 
*/
include_once('Pagina.php');
class PrincipalHT extends Pagina
{
	
	function MostrarPrincipalHT($producciones,$programa_actual)
	{
		//echo 1;
		// echo $r=mysql_num_rows($entradas);
		// while($r=mysql_fetch_array($entradas)){
		// 	echo $r[0]."<br/>";
		// }

		  $titulo="La Hora de la Transformación";
          $this->MostrarEncabezado($titulo);         //no cierra el head                    
?>
			<link rel="stylesheet" type="text/css" href="includes/HT/css/LaHoraDeLaTransformacion.css">
		<link rel="stylesheet" type="text/css" href="includes/HT/css/estilos-producciones.css"	>
<?php
          $fondo="fondo-nosotros";                   //Aqu{i se puede agregar css y script
          $this-> MostrarMenu($fondo,$programa_actual);               //Cierra el head y abre el body
         
          $this-> MostrarPresentacion($producciones);

       //    $this->MostrarSlider();
       //    $this->MostrarBotonesAcceso($programa_actual);
       //    $this->MostrarNuestrosProgramas();

       //    $this->MostrarNoticias($entradas);
          
       //    $this->MostrarRedesSociales();

	         $this->MostrarFoot();

	}

		function MostrarPrincipalHT2($producciones,$programa_actual)
	{
		  $titulo="La Hora de la Transformación";
          $this->MostrarEncabezado($titulo);         //no cierra el head                    
?>
			<link rel="stylesheet" type="text/css" href="includes/HT/css/LaHoraDeLaTransformacion.css">
		<link rel="stylesheet" type="text/css" href="includes/HT/css/estilos-producciones.css"	>
<?php
          $fondo="fondo-nosotros";                   //Aqu{i se puede agregar css y script
          $this-> MostrarMenu($fondo,$programa_actual);               //Cierra el head y abre el body
         
          //color, banner de programa, nomnre de categoría, entradas de la categoria seleccionada, horario 

          $this-> MostrarPresentacion($producciones);

	         $this->MostrarFoot();

	}

	function MostrarPresentacion($producciones){

		?>
		
		
	<div class="fondo-presentacion">
		<!-- <div class="row">
			<div class="col-md-8">qwe</div>
			<div class="col-md-4">123</div>
		</div> -->

		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				
				<div class="col-md-9">
					<div class="panel-HT panel-HT-default">
					  <div class="panel-HT-body">
					  	<img class="img-responsive" width="100%" src="includes/HT/img/presentacion.png">
					  </div>
					  <div class="panel-HT-footer neue titulo-presentacion">La Hora de la Transformación</div>
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
				<p>La Hora de la Transformación, en la voz del Rev. Rodolfo González Cruz, es un programa de Radio y televisión para la difusión del evangelio; con un mensaje que es una alerta espiritual para estos últimos tiempos combatiendo las herejías y la apostasía y edificando a los creyentes motivándolos a buscar a Dios.

Multitudes de personas han testificado sobre el cambio en sus vidas tras sintonizar este programa y miles de hogares restaurados lo confirman.</p>
				</div>
				<div class="col-md-5">
					
					<div class="row">
						<div class="col-md-6">
							<blockquote class="produccion">
							 <!--  <p class="titulo-produccion">DOCTRINAL:</p> -->
							  <P class="titulo-produccion">LUNES A DOMINGO</P>
							  <p class="hora">7:00 AM</p>
							</blockquote>
						</div>
						<div class="col-md-6">
							<blockquote class="produccion">
							  <!-- <p class="titulo-produccion">FAMILIA:</p> -->
							  <P class="titulo-produccion">LUNES A SÁBADO</P>
							  <p class="hora">10:00 AM</p>
							</blockquote>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-6">
							<blockquote class="produccion">
							  <!-- <p class="titulo-produccion">SOCIEDAD:</p> -->
							  <P class="titulo-produccion">LUNES A SÁBADO</P>
							  <p class="hora">1:00 PM</p>
							</blockquote>
						</div>
						<div class="col-md-6">
							<blockquote class="produccion">
							 <!--  <p class="titulo-produccion">FAMILIA:</p> -->
							  <P class="titulo-produccion">LUN, MAR, JUE Y VIE</P>
							  <p class="hora">6:00 PM</p>
							</blockquote>
						</div>
					</div>

				</div>
			</div>
		</div><!-- fin de fila-->


		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="col-md-9">
					<div class="titulo-lista-reproduccion neue">Lista de reproducción</div>
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="col-md-9">
				<?php while ($r=mysql_fetch_array($producciones)) {
					?>
							<div class="row"> 
								<div class="col-md-2 col-md-offset-1">
									<a href="VerLaHoraDeLaTransformacion.php?produccion=<?php echo $r['titulo_id']?>">
										<img class="img-responsive" src="includes/HT/img/btn-paly2.png"/> 
									</a>	
								</div>

								<div class="col-md-7">
									<a href="VerLaHoraDeLaTransformacion.php?produccion=<?php echo $r['titulo_id']?>">
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