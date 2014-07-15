<?php


/**
* 
*/
include_once('br_Vistas/Pagina.php');
class VerNoticia extends Pagina
{
	

	function MostrarVerNoticia($datos,$entradas,$programa_actual){

		$this->MostrarEncabezado($datos['titulo']); //no cierra el head
                                              		//Aqu{i se puede agregar css y script
		?>
		<meta property="fb:app_id" content="276457515870586"/>
		<!-- 

		App ID	276457515870586
		App Secret	db7ce6dcfe437efaff58aae28e9bb1f1 -->
		<?php
        $fondo="fondo-nosotros";
        $this->MostrarMenu($fondo,$programa_actual);  
?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&appId=276457515870586&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!--
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>-->


	<div class="fondo-blanco">
		<div class="container">
		<br/>
		<br/>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<h4><small><?php  echo ucfirst(strtolower($this->FechaCompleta($datos['fecha_unix'])))?></small></h4>
					<p class="categoria"><?php echo utf8_encode($datos['descripcion'])?></p>
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
							<img class="img-responsive" width="600" src="<?php echo $datos['id_imagen']?>">
							<!--<audio ></audio>-->
							<br/>
						</div>

						<div class="col-md-5">
							<p class="well text-center">Disfruta ya de tu programa favorito: </p>
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
							data-numposts="20" 
							data-colorscheme="light">
					</div>

					<!-- <div class="fb-comments" 
							data-href="http://www.bethelradio.fm/ver-noticia.php?not=<?php echo $datos['id_entrada']?>" 
							data-width="400"
							data-numposts="5" 
							data-colorscheme="light">
					</div> -->
					
				</div>
				<div class="col-md-4">
					<p class="">Más Noticias</p>
					<hr>
						<div class="noticias-entrada">
						
							<?php
							while ($entrada=mysql_fetch_array($entradas)){
								$tit=$entrada['titulo_id'];
								?>
								
								<div class="row">
									<div class="col-md-4 col-md-offset-1">
										<a href="ver-noticia.php?titulo_id=<?php echo $tit?>">
						        			<img class="img-responsive" width="150" src="<?php echo $entrada['id_imagen']?>"/>
						        		</a>
									</div>
									
									<div class="col-md-6">
										<a class="titulo-noticia-destacada-min-nota" href="ver-noticia.php?titulo_id=<?php echo $tit?>">
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

			</div><!-- fin de row-->
		</div>
	</div>




<?php
	
		$this->MostrarFoot();
	
	}
}


?>