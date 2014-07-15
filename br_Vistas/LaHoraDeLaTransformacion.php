<?php

include_once('br_Vistas/Pagina.php');
class LaHoraDeLaTransformacion extends Pagina
{
	function VerLaHoraDeLaTransformacion2($datos, $producciones, $programa_actual){
		echo $datos['titulo'];
	}

	function MostrarProduccion($datos, $producciones){

		?>

	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


	<div class="fondo-presentacion">
		<!-- <div class="row">
			<div class="col-md-8">qwe</div>
			<div class="col-md-4">123</div>
		</div> -->

		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				
				<div class="col-md-8">
					<div class="panel-HT panel-HT-default">
					  <div class="panel-HT-body">
					  	<img class="img-responsive" width="100%" src="br_includes/HT/img/presentacion.png">
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

	<!-- 	<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="col-md-9">
					<div class="titulo-lista-reproduccion neue">Lista de reporuducción</div>
				</div>
				<div class="col-md-4"></div>
			</div>
		</div> -->

		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="col-md-6 col-md-offset-1">
					<p class="neue-pro letra-azul size-titulo-conocenos"><?php echo utf8_encode($datos['titulo'])?></p>
					<h4><small><?php  echo "".ucfirst(strtolower($this->FechaCompleta($datos['fecha_unix'])))?></small></h4>
					
					
	  				<br/>
					<p class="text-justify myriad-pro size-parrafo-conocenos">
						<?php echo utf8_encode(htmlspecialchars_decode($datos['redaccion']))?>
					</p>

					<br/>
					
					<?php 
	  						if($datos['id_audio']!="")
	  						{
	  							?>
						<audio id="player" class="reproductor" controls>
	  						<!--<source src="horse.ogg" type="audio/ogg">-->
	  						<source src="<?php echo $datos['id_audio']?>" type="audio/mpeg">
	  							Your browser does not support the audio tag.
						</audio>

					
<!-- <br>
						<div>
    <button class="btn btn-default" onclick="document.getElementById('player').play();">Reproducir</button>
    <button class="btn btn-default" onclick="document.getElementById('player').pause();">Pausa</button>
    <button class="btn btn-default" onclick="document.getElementById('player').volume += 0.1;">Subir Volumen</button>
    <button class="btn btn-default" onclick="document.getElementById('player').volume -= 0.1;">Bajar Volumen</button>
</div>	 -->
	  							<?php
	  						}

	  						?>
	  					<hr/>

	  				<p>
		  				<div class="row">
							<div class="col-md-4">
								<div 
								class="fb-like" 
								data-href="http://www.bethelradio.fm/ver-noticia.php?titulo_id=<?php echo $datos['titulo_id']?>" 
								data-layout="button_count" 
								data-action="like" 
								data-show-faces="true" 
								data-share="true">
								</div>
							</div>
							<div class="col-md-2 col-md-offset-1">
								<a href="https://twitter.com/share" 
								class="twitter-share-button" 
								data-via="bethelradio" 
								data-lang="es">Tweet</a>

								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
							</div>
						</div><!-- fin de fila-->
	  				</p>	

					<div class="fb-comments" 
						data-href="http://www.bethelradio.fm/VerLaHoraDeLaTransformacion.php?produccion=<?php echo $datos['id_entrada']?>" 
						data-width="400"
						data-numposts="5" 
						data-colorscheme="light">
					</div>		

				</div>

				<div class="col-md-4 col-md-offset-1">
					<br>
					<br>
					<p class="">Más de La Hora de la Transformación</p>
					<hr>
						<div class="noticias-entrada">
						
							<?php
							while ($entrada=mysql_fetch_array($producciones)){
								$tit=$entrada['titulo_id'];
								?>
								
								<div class="row">
									<div class="col-md-4 col-md-offset-1">
										<a href="VerLaHoraDeLaTransformacion.php?produccion=<?php echo $tit?>">
						        			<img class="img-responsive" width="150" src="includes/HT/img/btn-paly2.png"/>
						        		</a>
									</div>
									
									<div class="col-md-6">
										<a class="titulo-noticia-destacada-min-nota" href="VerLaHoraDeLaTransformacion.php?produccion=<?php echo $tit?>">
							        		<?php echo utf8_encode($entrada['titulo'])?>
							        	</a>
										<hr>
									</div>
									
								</div>

							<!--<hr>-->
								<?php
							}
							?>

						</div>

				</div>
			</div><!--fin de margen-->
			
		</div>

	<div class="espacio"> </div>


	</div>	<!--fin de fondo blanco-->


		<?php 

	}

	function VerLaHoraDeLaTransformacion($datos,$producciones,$programa_actual){

		$this->MostrarEncabezado($datos['titulo']); //no cierra el head
                                              		//Aqu{i se puede agregar css y script
		?>
		<link rel="stylesheet" type="text/css" href="includes/HT/css/LaHoraDeLaTransformacion.css">
		<link rel="stylesheet" type="text/css" href="includes/HT/css/estilos-producciones.css"	>
		<?php

        $fondo="fondo-nosotros";
        $this -> MostrarMenu($fondo,$programa_actual); 

        $this -> MostrarProduccion($datos,$producciones); 

        $this->MostrarFoot();

	}

	function VerLaHoraDeLaTransformacion3($datos,$producciones,$programa_actual){

		$this->MostrarEncabezado($datos['titulo']); //no cierra el head
                                              		//Aqu{i se puede agregar css y script
		?>
		<link rel="stylesheet" type="text/css" href="includes/HT/css/LaHoraDeLaTransformacion.css">
		<link rel="stylesheet" type="text/css" href="includes/HT/css/estilos-producciones.css"	>
		<?php

        $fondo="fondo-nosotros";
        $this -> MostrarMenu($fondo,$programa_actual); 

        $this -> MostrarProduccion($datos); 
?>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


	<div class="fondo-blanco">
		<div class="container">
		<br/>
		<br/>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<h4><small><?php  echo ucfirst(strtolower($this->FechaCompleta($datos['fecha_unix'])))?></small></h4>
					<p class="neue-pro letra-azul size-titulo-conocenos"><?php echo utf8_encode($datos['titulo'])?></p>
				
				<div class="row">
					<div class="col-md-4">
						<div 
						class="fb-like" 
						data-href="http://www.bethelradio.fm/ver-noticia.php?titulo_id=<?php echo $datos['titulo_id']?>" 
						data-layout="button_count" 
						data-action="like" 
						data-show-faces="true" 
						data-share="true">
						</div>
					</div>
					<div class="col-md-2">
						<a href="https://twitter.com/share" 
						class="twitter-share-button" 
						data-via="bethelradio" 
						data-lang="es">Tweet</a>

						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					</div>
				</div><!-- fin de fila-->
					
					<div class="row">
						<div class="col-md-6">
							<br/>
							<img class="img-responsive" width="600" src="includes/HT/img/presentacion.png">
							<!--<audio ></audio>-->
							<br/>
						</div>

						<div class="col-md-5">
							<p class="well text-center">Disfruta de tu programa:</p>
							<p class="text-center">
								<a href="LaHoraDeLaTransformacion.php">
									<img class="img-responsive img-thumbnail text-center" src="includes/img/ht.png">
								</a>
							</p>
						</div>
						
					</div>
					<div class="row">
						<div class="col-md-11">
	  						<?php 
	  						if($datos['id_audio']!="")
	  						{

	  							?>
						<audio controls>
	  						<!--<source src="horse.ogg" type="audio/ogg">-->
	  						<source src="<?php echo $datos['id_audio']?>" type="audio/mpeg">
	  							Your browser does not support the audio tag.
						</audio>
	  							
	  							<?php
	  						}

	  						?>
							<br/>

						</div>
					</div><!-- fin de fila interna: imagen y audio-->	
					
				</div><!-- fin de col 10 offset 1-->
			</div><!-- fin de row-->

			<div class="row">
				<div class="col-md-5 col-md-offset-1">
					
					<p class="text-justify myriad-pro size-parrafo-conocenos">
						<?php echo utf8_encode(htmlspecialchars_decode($datos['redaccion']))?>
					</p>

					<hr/>

					<div class="fb-comments" 
						data-href="http://www.bethelradio.fm/ver-noticia.php?not=<?php echo $datos['id_entrada']?>" 
						data-width="400"
						data-numposts="5" 
						data-colorscheme="light">
					</div>
					
				</div>
				<div class="col-md-4">
					<p class="">Más Noticias</p>
					<hr>
						<div class="noticias-entrada">
						
							<?php
							while ($produccion=mysql_fetch_array($producciones)){
								$tit=$produccion['titulo_id'];
								?>
								
								<div class="row">
									<div class="col-md-4 col-md-offset-1">
										<a href="ver-noticia.php?titulo_id=<?php echo $tit?>">
						        			<img class="img-responsive" width="150" src="<?php echo $produccion['id_imagen']?>"/>
						        		</a>
									</div>
									
									<div class="col-md-6">
										<a class="titulo-noticia-destacada-min-nota" href="ver-noticia.php?titulo_id=<?php echo $tit?>">
							        		<?php echo utf8_encode($produccion['titulo'])?>
							        	</a>
										<hr>
									</div>
									
								</div>

							<!--<hr>-->
								<?php
							}
							?>

						</div>
					
				</div>

			</div><!-- fin de row-->
		</div>
	</div>




<?php
	
		$this->MostrarFoot();
	
	}
}


?>