<?php
class Pagina
{
	function FechaCompleta($dato)
	{
		$dia_l=date('N',$dato);
		switch ($dia_l) {
			case 1:
				$dia_semana="lunes";
				break;
			case 2:
				$dia_semana="martes";
				break;
			case 3:
				$dia_semana="miércoles";
				break;
			case 4 :
				$dia_semana="jueves";
				break;
			case 5:
				$dia_semana="viernes";
				break;
			case 6:
				$dia_semana="sábado";
				break;
			case 7:
				$dia_semana="domingo";
				break;					
			default:
				echo "ninguno";
				break;
		}
		//$dia=date('d',$dato);
		$dia_num=date('d',$dato);
		//$mes = date('F',$dato);


		$mes = date('n',$dato);

		switch ($mes) {
			case 1:
				$mes_texto="enero";
				break;
			case 2:
				$mes_texto="febrero";
				break;
			case 3:
				$mes_texto="marzo";
				break;
			case 4:
				$mes_texto="abril";
				break;
			case 5:
				$mes_texto="mayo";
				break;
			case 6:
				$mes_texto="junio";
				break;
			case 7:
				$mes_texto="julio";
				break;
			case 8:
				$mes_texto="agosto";
				break;
			case 9:
				$mes_texto="setiembre";
				break;
			case 10:
				$mes_texto="octubre";
				break;
			case 11:
				$mes_texto="noviembre";
				break;	
			case 12:
				$mes_texto="diciembre";
				break;									
			default:
				echo "no determinado";
				break;
		}


		$anio = date('Y',$dato);
		$hora = $hora= date('h:i a',$dato);

		$fecha = $dia_semana." ".$dia_num." de ".$mes_texto." del ".$anio." | ".$hora;
		return strtoupper($fecha);
	}
	function MostrarEncabezado($titulo)
	{
		?>
		
		<!DOCTYPE html>
		<html>
		<head>
		<meta charset="utf-8">
		<title>.: Bethel Radio: <?php echo utf8_encode($titulo)?> :.</title>
		<link rel="stylesheet" type="text/css" href="br_includes/dist/css/bootstrap-theme.css">
		<link rel="stylesheet" type="text/css" href="br_includes/dist/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="br_includes/css/estilos-bethelradio.css">

		<meta name="viewport" content="width=device-width, initial-scale=1">
		
	 	<script src="br_includes/js/vendor/modernizr-2.6.2.min.js"></script>
	 	<link rel="shortcut icon" href="br_includes/img/logo.png">

	 	<meta property="fb:app_id" content="276457515870586"/>

		<?php
	}


	function MostrarMenu($fondo,$programa_actual){
		?>
	</head>

	<body>
			
	<div class="<?php echo $fondo?>">
		
		<div class="container">
		<!-- ============================= -->

		 <div class="row">
     		<div class="principal">
     			
		      <div class="col-md-2">
		      	<a href="http://www.bethelradio.fm">
		        	<img class="img-responsive link logo-bethel" src="br_includes/img/logo-bethelradio.png">
		      	</a>
		      </div>

		      <div class="col-md-4">
		        <p class="text-left titulo">Lo que necesitas <span class="extra" >escuchar</span></p>
		      </div>
		      <!--
		      <div class="col-md-4">
		      <a target="_blank" href="vivo/">
		        <img class="img-responsive link radioenvivo derecha dd" src="includes/img/radio-vivo.png">
		      </a>
		      </div>
			
		      <div class="col-md-3">
		      <a target="_blank" href="video/">
		        <img class="img-responsive link radioenvivo" src="includes/img/tv.png">
		      </a>
		      </div>-->

		      <div class="col-md-5 col-md-offset-1">
		      	<!-- <div class="radioenvivo">
			      	<a target="_blank" href="vivo/">
			      		<img class="img-responsive" src="includes/img/reproductor3.png"/>
			      	</a>
		      	</div> -->
		      	<!--<div class="letra-blanca contenedor col-md-6 col-md-offset-6">-->
			      	<div class="letra-blanca contenedor">
			      		<div class="contenido1">
			      			<a target="_blank" href="vivo/">
				      			<img class="img-responsive" src="br_includes/img/reproductor3.png">
							</a>
			      		</div>
			      		<div class="contenido2 col-md-6 col-md-offset-6">
				      		<a target="_blank" href="vivo/">
						      	<p class="text-center estamos">Estamos Transmitiendo</p>
								<p class="text-center programa-actual"><?php echo utf8_encode($programa_actual)//"La radio en vivo"?></p>
				      		</a>
			      		</div>
			      	</div>
		      </div>
		      
    
     		</div>
    	</div>

		<!-- ============================= -->	

			<div class="row">
				
				<div class="capa-menu">
					<div class="col-md-12">
						<nav id="navbar-example" class="navbar navbar-header navbar-static" role="navigation">
							<div class="container-fluid">

									<ul class="nav navbar-nav">
										<li class="align-horizontal"><a class="menu borde-r" href="index.php">&nbsp;INICIO &nbsp;  	</a></li>				
										<li class="align-horizontal"><a class="menu borde-r" href="conocenos.php">&nbsp;CONÓCENOS &nbsp;     	    </a></li> 	
										<li class="align-horizontal"><a class="menu borde-r" href="programacion.php">&nbsp;PROGRAMACIÓN&nbsp;        </a></li>		
										<li class="align-horizontal"><a class="menu borde-r" href="frecuencias.php">&nbsp;FRECUENCIAS  &nbsp;       </a></li>		
										<li class="align-horizontal"><a class="menu borde-r" href="produccion.php">&nbsp;PRODUCCIONES  &nbsp;      </a></li>		
										<li class="align-horizontal"><a class="menu" 		 href="colabora.php">&nbsp;COLABORA	&nbsp;&nbsp;&nbsp;	</a></li>
										<li class="align-horizontal col-sm-2"> 
											<!--<div class="col-md-3">-->
												 <div class="input-group btn-buscar">
													<input type="search" class="form-control buscar" placeholder="Buscar..."/>
													<span class="input-group-btn">
														<button class="btn btn-default glyphicon glyphicon-search buscar" type="button"></button>
													</span>
												 </div>
										 	<!--</div>-->
										</li>
									</ul>

									<ul class="nav navbar-right">
										<li class="align-horizontal ">
										 
										</li>		
									</ul>
						         
							</div>
						</nav>	
					</div>
				</div>	

			</div><!-- fin de fila-->

		<!-- ================================= -->	

		<?php
}//fin funcion MostrarMenu

	function MostrarSlider(){


		?>

			<div class="row">
		      <div class="col-md-10 col-md-offset-1">
		      <center>
		        <!--<img class="img-responsive link" src="includes/img/programas.png"/>-->
		        <div class="slider ">
		        	
		        <section id="miSlide" class="carousel slide">
	               <!--  <ol class="carousel-indicators">
	                    <li data-target="#miSlide" data-slide-to="0" class="active"></li>
	                    <li data-target="#miSlide" data-slide-to="1"></li>
	                    <li data-target="#miSlide" data-slide-to="2"></li>
	                </ol> -->

	                <div class="carousel-inner">
	                    <div class="item active">
	                    	<a href="LaHoraDeLaTransformacion.php">
		                        <img src="br_includes/img/sliders/s01.png" class="img-responsive link">
	                    	</a>
	                    </div>
	                    <div class="item">
		                    <a href="LaHoraDeLaTransformacion.php">
		                        <img src="br_includes/img/sliders/s02.png" class="img-responsive link">
		                    </a>    
	                    </div>
	                    <div class="item">
	                    	<a href="LaHoraDeLaTransformacion.php">
	                        <img src="br_includes/img/sliders/s03.png" class="img-responsive link">
	                        </a>
	                    </div>
	                </div>

	                <a href="#miSlide" class="left carousel-control" data-slide="prev">
	                	 <span class="glyphicon glyphicon-chevron-left"></span>
	                	<!-- <img class="img-responsive botones-slider-left" src="includes/img/left.png">-->
	                </a>
	                <a href="#miSlide" class="right carousel-control" data-slide="next">
	                	 <span class="glyphicon glyphicon-chevron-right"></span>
	                	 <!-- <img class="img-responsive botones-slider-right" src="includes/img/right.png"> -->
	                </a>
            	</section>
		        </div>

		      </center>
		      </div><!-- fin de class col >
          	<! fin de row de slider-->
          	</div><!-- fin de fila-->

		<!-- ================================= -->

		<?php
	}//Mostrar Slider

		function MostrarBotonesAcceso(){

		?>
			<div class="row">
				<center>
				<div class="btn-accesos">
					<a href="produccion.php">
						<div class="col-md-3 col-md-offset-2">
							<img class="link img" src="br_includes/img/sistema-audio.png">		
						</div>
					</a>
					
					<div class="col-md-2">
						<a href="peticiondeoracion.php">	
							<img class="link img" src="br_includes/img/peticion-oracion.png">
						</a>
					</div>
					
					<!-- <div class="col-md-2 transmitiendo">
						<a  target="_blank" href="/vivo">
						 
							<img class="link img img-responsive" src="includes/img/convencion.png">	
						
							<p class="text-center estamos">Estamos Transmitiendo</p>
							<p class="text-center programa-actual"><?php echo $programa_actual?></p>
						</a> 
					</div> -->
					
					<div class="col-md-3">
						<a target="_blank" href="https://play.google.com/store/apps/details?id=com.bethel.radio">	
							<img class="link img" src="br_includes/img/aplicacion-movil2.1.png">					
						</a>
					</div>
				</div>
				</center>
			</div>

		<!-- ================================= -->
		
		</div><!-- fin de class container -->

	 </div><!--fin class fondo-cabecera-->

		<!-- ================================= -->	


		<!-- </div> -->

		
		<?php
	}//MostrarBotonesAcceso


	function MostrarNuestrosProgramas(){

		?>
<div class="fondo-NuestrosProgramas">
	<div class="container">
		<div class="row">
          <div class="col-md-10 col-md-offset-1 franja-blanca white">
        	<!-- barra blanca-->
          </div>
        </div>

        <div class="row">
          <div class="col-md-10 col-md-offset-1 celeste">
              	<p class="neue letra-blanca size-principal">Nuestros Programas</p>
            	<!-- <img class="img-responsive flecha link" src="includes/img/arrows.png "> -->
          </div>
        </div><!-- fin de row-->

        <div class="row">
	          <div class="col-md-10 col-md-offset-1 azul">
	              
		          <ul class="bloque-programa">
			            <li class="align-horizontal">
			            <a href="produccion.php?t=volvamos-a-dios">
			              <img class="programa img-responsive" src="br_includes/img/volvamos-a-Dios.png">
			              </a> 
			            </li>
			            <li class="align-horizontal">
			            	<a href="produccion.php?t=la-hora-de-la-transformacion">
			              		<img class="programa img-responsive" src="br_includes/img/ht.png">
			            	</a>
			            </li>
			            <li class="align-horizontal">
			            <a href="produccion.php?t=impacto-evangelistico">
			              <img class="programa img-responsive" src="br_includes/img/impacto-evangelistico.png">
			            </a> 
			            </li>
			            <li class="align-horizontal">
			             <a href="produccion.php?t=respuesta-pastoral">
			              <img class="programa img-responsive" src="br_includes/img/respuesta-pastoral.png">
			            </a>
			            </li>
		          </ul>
	            
	          </div>

          </div>

          <!-- ================================================================== -->
<?php
}//fin function NuestrosProgramas()

	function MostrarNoticias($entradas){

date_default_timezone_set('America/Lima');
$hora = gettimeofday(true);
?>

        <div class="row">
        	<div class="col-md-10 col-md-offset-1 ultimas-noticias white">
        	<p class="titulo2-fecha">Últimas Noticias: <?php echo ucfirst(strtolower($this->FechaCompleta($hora)))?></p>
        	</div>
        </div> 

        <div class="row margen">
        	<div class="col-md-10 col-md-offset-1 celeste">
        		<ul class="filtros-menu text-justify">
        			<li class="align-horizontal filtro"><a class="elemento link" href="">Todos</a></li>
        			<li class="align-horizontal filtro"><a class="elemento link" href="">Cristianos</a></li>
        			<li class="align-horizontal filtro"><a class="elemento link" href="">Mensajes</a></li>
        			<li class="align-horizontal filtro"><a class="elemento link" href="">Tecnología</a></li>
        			<li class="align-horizontal filtro"><a class="elemento link" href="">Reflexiones</a></li>
        			<li class="align-horizontal filtro"><a class="elemento link" href="">Salud</a></li>
        		</ul>
        	</div>
        </div> 

        <div class="row">
        			  
        <div class="col-md-10 col-md-offset-1">
        		
        	<div class="row white">
        		
	<?php

		$i=0;
			while ($entrada=mysql_fetch_array($entradas)) 
		//for($i=0;$i<$count;$i++)
		{
			$tit=$entrada['titulo_id'];

			$categoria=$entrada['descripcion'];
   		    
   		    //$cod1=serialize($cod);
        	//$cod2=base64_encode($cod1);

			
			if ($i<1) {
				# code...
			$redaccion2 = $entrada['redaccion'];
			$redaccion1 =utf8_encode((htmlspecialchars_decode($redaccion2)));
			$redaccion= (substr($redaccion1, 0, 131));
				?>	
        
	        	<div class="col-md-5 borde-r2">
	        	
		        	<p class="titulo-noticia-destacada ">
		        		<a href="ver-noticia.php?titulo_id=<?php echo $tit?>" class="titulo-noticia-destacada">
		        			<?php echo utf8_encode($entrada['titulo'])?>
		        		</a>
		        	</p>

		        	<p class="imagen-destacada">
		        		<a href="ver-noticia.php?titulo_id=<?php echo $tit?>">
		        			<img class="img-responsive link" width="300" src="<?php echo $entrada['id_imagen']?>"/>
		        		</a>
		        	</p>

		        	<p class="resumen-redaccion text-justify">
		        		<!-- <a class="categoria" href=""><?php echo $entrada['id_categoria']?></a> | --> <?php echo utf8_encode($categoria)." ".$redaccion." ..." ?>
		        	</p>

		        	<hr>

		        	<div class="publicidad">
		        		<img class="img-responsive link" src="br_includes/img/publicidad.png">
		        	</div>

	        	</div>
	        	<div class="col-md-7 white altura-noticias">

				<?php
				}// fin de if
					else{

				$redaccion2 = $entrada['redaccion'];
				$redaccion1 =(htmlspecialchars_decode($redaccion2));
				//$redaccion= (substr($redaccion1, 0, 131));
				$redaccion= utf8_encode(substr($redaccion1, 0, 62));

				?>     	

<!-- aplicar-->
		

				
				<div class="row titulo-noticia-destacada-min">
		        		<div class="col-md-4">
		        			<a href="ver-noticia.php?titulo_id=<?php echo $tit?>">
		        				<img class="img-responsive" src="<?php echo $entrada['id_imagen']?>"/>
		        			</a>
		        		</div>

		        		<div class="col-md-7">
			        		<p class="categoria"> <?php echo utf8_encode($categoria)?> </p>
			        		<p class="">
			        			<a class="titulo-noticia-destacada-min" href="ver-noticia.php?titulo_id=<?php echo $tit?>">
			        				<?php echo utf8_encode($entrada['titulo'])?>
			        			</a>
			        		</p>
			        		<p class="text-justify resumen-min">
			        			<!-- <small><a class="categoria" href=""><?php echo $entrada['id_categoria']?></a> </small> |--> 
			        			<?php echo $redaccion." ..." ?> 
			        		</p>
		        		</div>

		        	</div>
		        	<hr class="resumen-min">


				<?php

				}//fin de else dentro del while
				$i++;
			}//fin de while

	?>

		        
		        
	        	</div><!-- fin del col-md-7-white -->
        	</div>
        	<div class="row">
        		<div class="col-md-10 col-md-offset-1">
        			<!-- <hr class="resumen"> -->
        		</div>
        	</div>
        </div>	<!-- fin de columna -->	
        <!-- ================================================================== -->
        </div><!--fin de fila-->
	</div><!-- fin de class container -->
</div><!-- fin de class fondo-azul -->		
      <?php
	}//fin funcion mostrar Noticias
  

	function MostrarRedesSociales(){
		?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

		<div class="fondo-Redes-Sociales">
			<div class="container">	
				<div class="row">
					<div class="col-md-10 col-md-offset-1 celeste">
						<p class="neue letra-blanca size-principal">REDES SOCIALES</p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-10 col-md-offset-1 white">
						<div class="row">
							<div class="col-md-4">
								<img class="img-responsive redes-sociales" src="br_includes/img/moviles.png"/>
								<!-- <img class="img-responsive redes-sociales" src="includes/img/publicidad2.png"/> -->
								<iframe width="295" height="251" src="//www.youtube.com/embed/N9vzj2UH2Cg" frameborder="0" allowfullscreen></iframe>
							</div>
							<div class="col-md-4">
								<div 	class="fb-like-box redes-sociales" 
										data-href="https://www.facebook.com/bethelradio" 
										data-colorscheme="light" data-show-faces="false" 
										data-header="true" data-stream="true" 
										data-show-border="true">
								</div>
							</div>
							<div class="col-md-4">
								<div class="redes-sociales">
									
								<a 	class="twitter-timeline" data-dnt="true" 
									href="https://twitter.com/bethelradio" 
									data-widget-id="440931337826873344">Tweets por @bethelradio</a>

									<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
								</div>


							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

		<?php
	}// fin de fucntion MostrarRedesSociales

	function MostrarFoot(){

		?>
		
		<div class="fondo-pie">

			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<br/>
						<br/>
						
							<div class="col-md-3">
								<p class="info-foot">Directorio</p>
								<p class="info-foot-min">
									Produccion General<br/>
									Coordinación: <br/>(511) 613-1713 / 613-1701<br/>
									
									<a class="email-foot" href="mailto:bethelradio@bethelradio.fm">bethelradio@bethelradio.fm</a>
								</p>

							</div>
							<div class="col-md-3">
								<p class="info-foot">Social Media</p>
								<p class="info-foot-min">
									<a class="link-social" target="_blank" href="https://www.facebook.com/bethelradio"><img class="img-responsive align-horizontal" src="br_includes/img/facebook.png"> /bethelradio</a><br/>
									<a class="link-social" target="_blank" href="https://twitter.com/bethelradio"><img class="img-responsive align-horizontal" src="br_includes/img/twitter.png"> @bethelradio</a>
								</p>

							</div>
							<div class="col-md-3">
								<p class="info-foot">Enlaces</p>
								<p class="info-foot-min">
								<a class="link-social" target="_blank" href="http://www.betheltv.pe/tv/">Bethel Televisión</a><br>
								<a class="link-social" target="_blank" href="http://impactoevangelistico.net/">Impacto Evangelistico</a><br>
								<a class="link-social" target="_blank" href="http://www.mmmperu.org/">Movimiento Misionero Mundial en Perú</a>
								</p>

							</div>
							<div class="col-md-3">
								<p class="info-foot">Suscríbete</p>
								<p>
								<form>
									<label><input type="text" class="form-control" placeholder="E-mail" /></label>
									<label><input type="submit" value="suscribirme" class="form-control btn-warning" /></label>
								</form>
								</p>

								
							</div>
						
					</div><!--fin de col-md-10 col-md-offset-1-->
				</div><!-- fin de fila-->
			</div><!-- fin de container-->
			
		</div><!--fin de class fondo oscuro-->
		<!-- </div> fin class fondo-cabecera-->
<!-- includes javascript
-->

		<script>window.jQuery || document.write('<script src="br_includes/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="br_includes/js/vendor/bootstrap.js"></script>

		</body>
		</html>

		<?php
	}//fin de function MostrarFoot()

////////////////////////////////////////////////////////////////////////////////////////////////////
					/////   ----->>>>>   pagina conocenos 
///////////////////////////////////////////////////////////////////////////////////////////////////	

	public function PhotoPortada(){

		?>
		
		<div class="fondo-blanco">
			<div class="container">
				
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<img class="img-responsive" src="br_includes/img/forfamily.jpg"/>
					</div>
				</div>

				<div class="row">
					<div class="col-md-10 col-md-offset-1 fondo-naranja">
						<p class="text-center">La familia de Bethel Radio</p>
					</div>
				</div>
				<br/>
				<br/>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<dl>							
							<dt class="neue-pro letra-azul size-titulo-conocenos">QUIÉNES SOMOS</dt>
							<hr class="conocenos">
							<dd class="text-justify myriad-pro size-parrafo-conocenos">
								Bethel Radio es una emisora radial cristiana, pertenece a la ASOCIACIÓN CULTURAL BETHEL (ACB), corporación sin fines de lucro, y a la iglesia del MOVIMIENTO MISIONERO MUNDIAL, que tiene como característica el propósito expreso de transmitir el Evangelio a todo el mundo.
							</dd>
						</dl>									
					</div>
				</div>

				<div class="row">
					<div class="col-md-5 col-md-offset-1">
						<dl>
							<dt class="neue-pro letra-azul size-titulo-conocenos">Nuestra Historia</dt>
							<hr class="conocenos">
						</dl>
					</div>
				</div>

				<div class="row">
					<div class="col-md-5 col-md-offset-1">					
						<dl>
							<dd class="text-justify myriad-pro size-parrafo-conocenos">
Corría el 28 de julio del año 2002 y la entonces Estación BTN emitía por primera vez su señal al mundo a través de Internet. Un esforzado grupo de hermanos laboraba para llevar la Palabra de Dios las 24 horas del día y desarrollar una variada programación para toda la familia. Paulatinamente, distintas repetidoras fueron bajando nuestra señal. Ciudades como Huánuco, Huancayo, Chiclayo, Arequipa, entre otras, formaron la primera red de Bethel.

Con el paso de los años, nuestra cadena creció, convirtiéndose en una de las más importantes del país, alcanzando a todo el Perú; desde pequeños caseríos hasta grandes urbes. Señal en Lima. El 20 de marzo del año 2010 se hacía realidad un sueño. Bethel Radio se escuchaba en la capital peruana en los 1360 de la amplitud modulada, para después trasladarse a los 1570 AM, dial en el permanecemos hasta la fecha. Nuestra historia se sigue escribiendo gracias a nuestro Señor Jesucristo y al respaldo del Pueblo de Dios.
							</dd>		
						</dl>
					</div>
					<div class="col-md-5">
						<img class="img-responsive imagen" width="100%" src="br_includes/img/consola2.png">
					</div>
				</div>

				<div class="row">
					<div class="col-md-5 col-md-offset-1">
						<img class="img-responsive imagen" width="100%" src="br_includes/img/misionvision.jpg">
					</div>

					<div class="col-md-5">
						<dl>
							<dt class="neue-pro letra-azul size-titulo-conocenos">Misión</dt>
							<hr class="conocenos">
							<dd class="text-justify myriad-pro size-parrafo-conocenos">
Proporcionar una programación cultural, que promueva la educación y la práctica de valores dentro de la sociedad. Innovar dentro del medio de radiodifusión, a través de la emisión de contenidos edificantes, que lleve a los oyentes un mensaje de paz y esperanza. Resaltamos que nuestra principal misión es la evangelización; cumpliendo así, la orden que nos dio nuestro Señor Jesucristo: "Id por todo el mundo y predicar el evangelio a toda criatura". 
							</dd>
						<br/>

							<dt class="neue-pro letra-azul size-titulo-conocenos">Visión</dt>
							<hr class="conocenos">
							<dd class="text-justify myriad-pro size-parrafo-conocenos">
Convertirnos en la cadena radial de mayor cobertura -nacional y mundial- para así transmitir los valores, la cultura y el mensaje de esperanza, que proporciona la difusión de la Palabra de Dios, enmarcado en una producción de calidad. 
							</dd>
						</dl>


					</div>
				</div><!--fin de row-->

				<div class="row">
					<div class="col-md-10 col-md-offset-1 fondo-naranja">
						<div class="row">
							<div class="col-md-10 col-md-offset-1 celeste2">
								<p class="text-center">Somos Bethel, lo que necesitas <span>escuchar</span></p>
							</div>
						</div>
					</div>
				</div>

				<div class="row spacio">
					<div class="col-md-10 col-md-offset-1">
						<dl>
							<dt class="neue-pro letra-azul size-titulo-conocenos">Nuestra Tecnología</dt>
							<hr class="conocenos">
<!--
							///////////////////////////     slider    ///////////////////////////////////
-->

							<center>
								

					 <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 800px;
        height: 456px; background: #191919; overflow: hidden;">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(br_includes/img/tecnologia/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
      
         <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 800px; height: 356px; overflow: hidden;">   
        	<div>
                <img class="img-responsive" u="image" src="br_includes/img/tecnologia/CONTROLES_RADIO_BETHEL_021.png" />
                <img class="img-responsive" u="thumb" src="br_includes/img/tecnologia/CONTROLES_RADIO_BETHEL_021_thum.png "/>
            </div>
            <div>
                <img class="img-responsive" u="image" src="br_includes/img/tecnologia/CONTROLES_RADIO_BETHEL_032.png" />
                <img class="img-responsive" u="thumb" src="br_includes/img/tecnologia/CONTROLES_RADIO_BETHEL_032_thum.png "/>
            </div>
            <div>
                <img class="img-responsive" u="image" src="br_includes/img/tecnologia/CONTROLES_RADIO_BETHEL_037.png" />
                <img class="img-responsive" u="thumb" src="br_includes/img/tecnologia/CONTROLES_RADIO_BETHEL_037_thum.png "/>
            </div>
            <div>
                <img class="img-responsive" u="image" src="br_includes/img/tecnologia/CONTROLES_RADIO_BETHEL_039.png" />
                <img class="img-responsive" u="thumb" src="br_includes/img/tecnologia/CONTROLES_RADIO_BETHEL_039_thum.png "/>
            </div>
            <div>
                <img class="img-responsive" u="image" src="br_includes/img/tecnologia/CONTROLES_RADIO_BETHEL_040.png" />
                <img class="img-responsive" u="thumb" src="br_includes/img/tecnologia/CONTROLES_RADIO_BETHEL_039_thum.png "/>
            </div>
            <div>
                <img class="img-responsive" u="image" src="br_includes/img/tecnologia/CONTROLES_RADIO_BETHEL_044.png" />
                <img class="img-responsive" u="thumb" src="br_includes/img/tecnologia/CONTROLES_RADIO_BETHEL_044_thum.png "/>
            </div>
            <div>
                <img class="img-responsive" u="image" src="br_includes/img/tecnologia/CONTROLES_RADIO_BETHEL_045.png" />
                <img class="img-responsive" u="thumb" src="br_includes/img/tecnologia/CONTROLES_RADIO_BETHEL_045_thum.png  "/>
            </div>
            <div>
                <img class="img-responsive" u="image" src="br_includes/img/tecnologia/CONTROLES_RADIO_BETHEL_047.png" />
                <img class="img-responsive" u="thumb" src="br_includes/img/tecnologia/CONTROLES_RADIO_BETHEL_047_thum.png "/>
            </div>

        </div>
        
<!-- llama a los estilos-->	

          <!-- Arrow Left -->
        <span u="arrowleft" class="jssora05l" style="width: 40px; height: 40px; top: 158px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora05r" style="width: 40px; height: 40px; top: 158px; right: 8px">
        </span>
        <!-- Arrow Navigator Skin End -->
        
        <!-- Thumbnail Navigator Skin Begin -->
        <div u="thumbnavigator" class="jssort01" style="position: absolute; width: 800px; height: 100px; left:0px; bottom: 0px;">
            <!-- Thumbnail Item Skin Begin -->

<!-- llama a los estilos-->

              <div u="slides" style="cursor: move;">
                <div u="prototype" class="p" style="position: absolute; width: 72px; height: 72px; top: 0; left: 0;">
                    <div class=w><thumbnailtemplate style=" width: 100%; height: 100%; border: none;position:absolute; top: 0; left: 0;"></thumbnailtemplate></div>
                    <div class=c>
                    </div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- Thumbnail Navigator Skin End -->
        <a style="display: none" href="http://www.jssor.com">jQuery Carousel</a>
    </div>
    <!-- Jssor Slider End -->
<img width=0 height=0 />   	
						
							</center>
<!--
							/////////////////////////////////////////////////////////////////////////////
-->
<br/>
	<hr class="conocenos">							
							
						</dl>
					</div>
				</div>

			</div><!-- fin de class container-->
		</div>

		<?php

	}//fin funcion photoportada

	public function MostrarProgramacionHorario(){

		?>

		<div class="fondo-blanco">
			
<div class="row">
<div class="col-md-10 col-md-offset-1">
<br>
<br>
<article>
			<h3 class="letra-azul neue-pro">Programación</h3>
			<aside>
				<a target="_blank" href="https://www.facebook.com/bethelradio"><img src="br_includes/img/facebook-social.png"></a>
				<a target="_blank" href="https://twitter.com/bethelradio"><img src="br_includes/img/twitter-social.png"></a>
			</aside>
</article>

<br/>

	<ul class="nav nav-tabs" id="myTab">
	  <li class="active"><a href="#mañana" data-toggle="tab">Mañana</a></li>
	  <li><a href="#tarde" data-toggle="tab">Tarde</a></li>
	  <li><a href="#noche" data-toggle="tab">Noche</a></li>
	  <li><a href="#madrugada" data-toggle="tab">Madrugada</a></li>
	</ul>

	<div class="tab-content">
	  
		  <div class="tab-pane active" id="mañana">
		  	
		  	<h2 class="letra-celeste myriad-pro">Mañana</h2>

		  	<div class="table-responsive">
		  			<table class="table table-bordered text-left table-hover">
		    			<thead>

		    				<tr>
		    					<td class="active">Hora</td>
		    					<td class="active">Lunes</td>
		    					<td class="active">Martes</td>
		    					<td class="active">Miércoles</td>
		    					<td class="active">Jueves</td>
		    					<td class="active">Viernes</td>
		    					<td class="active">Sábado</td>
		    					<td class="active">Domingo</td>

		    				</tr>
		    			</thead>
		    			<tbody height="100" >
							<tr>
								<td width="150">05:00-05:30</td>
								<td colspan="7">Allinwillakuy</td>
							</tr>
							<tr>
								<td>05:30-06:00</td>
								<td colspan="7">Música</td>
							</tr>
							<tr>
								<td>06:00-06:30</td>
								<td colspan="5" rowspan="2"><a href="">A solas con Dios</a></td>
		    					<td colspan="2">Impacto Evangelístico</td>
							</tr>

							<tr>
								<td>06:30-07:00</td>
								<td colspan="2">Música</td>
							</tr>

							<tr>	
								<td>07:00-07:30</td>
								<td colspan="7"><a href="">La Hora de la Transformación	</a></td>
							</tr>
							<tr>
								<td>07:30-08:00</td>
								<td colspan="5" rowspan="2">Música</td>
								<td colspan="2">Música</td>
							</tr>
							<tr>
								<td>08:00-08:30</td>
								<td colspan="2">Rios de Agua Viva</td>
							</tr>
							
							<tr>
								<td>08:30-09:00</td>
								<td colspan="5">Bethel Actualizando</td>
								<td colspan="2">Historia de la Iglesia</td>
							</tr>
							<tr>
								<td>09:00-09:30</td>
								<td colspan="5"><a href="">Impacto Evangelístico</a></td>
								<td>Volvamos a Dios</td>
								<td rowspan="3">Evangelio con Poder I</td>
								</tr>
							<tr>
								<td>09:30-10:00</td>
								<td>Terapia Espiritual</td>
								<td>Historia de la Iglesia</td>
								<td>Terapia Espiritual</td>
								<td>Historia de la Iglesia</td>
								<td>Terapia Espiritual</td>
								<td>Música</td>
							</tr>
							<tr>
								<td>10:00-10:30</td>
								<td colspan="6">La Hora de la Transformación</td>
							</tr>
							<tr>
								<td>10:30-11:00</td>
								<td colspan="6">Música</td>
								<td rowspan="2">Música</td>
							</tr>
							<tr>
								<td>11:00-11:30</td>
								<td colspan="5">Momento Decisivo</td>
								<td rowspan="2">Musikids</td>
							</tr>
							<tr>
								<td>11:30-12:00</td>
								<td>Consultando al Especialista</td>
								<td>Dialoguemos</td>
								<td>Consultando al Especialista</td>
								<td>Dialoguemos</td>
								<td>Consultando al Especialista</td>
								<td rowspan="3">Evangelio con Poder II</td>
							</tr>
							<tr>
								<td>12:00-12:30</td>
								<td colspan="4">Bethel en la Actualidad</td>
								<td>Especiales de Bethel</td>
								<td>Momento Decisivo</td>
							</tr>
							<tr>
								<td>12:30-13:00</td>
								<td colspan="5">La hora de la Transformación</td>
								<td>Música</td>
							</tr>

								</tbody>
		  			</table>
			</div><!-- fin de table responsive-->

		  </div><!--fin de tab-pane -->
				
		  <div class="tab-pane" id="tarde">
		  	 
		  	 <h2 class="letra-celeste myriad-pro">Tarde</h2>

		  	<div class="table-responsive">
		  			<table class="table table-bordered text-left table-hover">
		    			<thead>
		    				<tr>
		    					<td class="active">Hora</td>
		    					<td class="active">Lunes</td>
		    					<td class="active">Martes</td>
		    					<td class="active">Miércoles</td>
		    					<td class="active">Jueves</td>
		    					<td class="active">Viernes</td>
		    					<td class="active">Sábado</td>
		    					<td class="active">Domingo</td>

		    				</tr>
		    			</thead>
		    			<tbody height="100" >
		    			
							<tr>
								<td width="150">13:00 - 13:30</td>
								<td colspan="6">La Hora de la transformación</td>
								<td rowspan="2">Evangelio con Poder</td>
							</tr>
							<tr>
								<td>13:30 - 14:00</td>
								<td colspan="5" rowspan="2">Música con Locución</td>
								<td rowspan="2">Especiales de Bethel</td>
							</tr>
							<tr>
								<td>14:00 - 14:30</td>
								<td>Música</td>
							</tr>
							<tr>
								<td>14:30 - 15:00</td>
								<td>Volvamos a Dios</td>
								<td>Campañas y Convenciones</td>
								<td>Volvamos a Dios</td>
								<td>Campañas y Convenciones</td>
								<td>Volvamos a Dios</td>
								<td colspan="2">Campañas y convenciones</td>
							</tr>
							<tr>
								<td>15:00 - 15:30</td>
								<td rowspan="2">Musikids</td>
								<td rowspan="2">Semillitas de Amor</td>
								<td rowspan="2">Musikids</td>
								<td rowspan="2">Semillitas de Amor</td>
								<td rowspan="2">Musikids</td>
								<td colspan="2">Música</td>
							</tr>
							<tr>
								<td>15:30 - 16:00</td>
								<td colspan="2">Camino a la Salvación</td>
							</tr>
							<tr>
								<td>16:00 - 16:30</td>
								<td colspan="5">Respuesta Pastoral</td>
								<td rowspan="2">Música con Locución</td>
								<td rowspan="2">Música</td>
							</tr>
							<tr>
								<td>16:30 - 17:00</td>
								<td>Música</td>
								<td rowspan="2">Vida Saludable</td>
								<td>Música</td>
								<td rowspan="2">Hablemos de Salud</td>
								<td>Música</td>
							</tr>
							<tr>
									<td>17:00 - 17:30</td>
									<td>Buena Alimentación</td>
									<td rowspan="4">Respuesta Pastoral</td>
									<td>Buena Alimentación</td>
									<td colspan="2" rowspan="4">Respuesta Pastoral</td>
							</tr>
							<tr>
								<td>17:30 - 18:00</td>
								<td>Sentimientos</td>
								<td>Vivencias</td>
								<td>Vivencias</td>
								<td>La Revista Hablada</td>
							</tr>
							<tr>
								<td>18:00 - 18:30</td>
								<td colspan="2">La Hora de la Transformación</td>
								<td colspan="2">La Hora de la Transformación</td>
							</tr>
							<tr>
								<td>18:30 - 19:00</td>
								<td>Orientación Vocacional</td>
								<td>Tecnología para Todos</td>
								<td>Tecnología para Todos</td>
								<td>Orientación Vocacional</td>
							</tr>
								</tbody>
		  			</table>
			</div><!--fin del table responsive-->

		  </div><!--fin del tab-pane tarde-->

		  <div class="tab-pane" id="noche">
		 	
		 	<h2 class="letra-celeste myriad-pro">Noche</h2>

		  	<div class="table-responsive">
		  			<table class="table table-bordered text-left table-hover">
		    			<thead>
		    				<tr>
		    					<td class="active">Hora</td>
		    					<td class="active">Lunes</td>
		    					<td class="active">Martes</td>
		    					<td class="active">Miércoles</td>
		    					<td class="active">Jueves</td>
		    					<td class="active">Viernes</td>
		    					<td class="active">Sábado</td>
		    					<td class="active">Domingo</td>

		    				</tr>
		    			</thead>
		    			<tbody height="100" >
							
							<tr>
								<td width="150">19:00-19:30</td>
								<td colspan="2">Camino a la Salvación</td>
								<td rowspan="2">Música</td>
								<td colspan="2">Camino a la Salvación</td>
								<td colspan="2" rowspan="2">Música</td>
							</tr>
							<tr>
								<td>19:30-20:00</td>
								<td colspan="2">Música</td>
								<td colspan="2">Música</td>
							</tr>
							<tr>
								<td>20:00-20:30</td>
								<td colspan="7" rowspan="4">Evangelio con Poder</td>
							</tr>
							<tr><td>20:30-21:00</td></tr>
							<tr><td>21:00-21:30</td></tr>
							<tr><td>21:30-22:00</td></tr>

							<tr>
								<td>22:00-22:30</td>
								<td colspan="7" rowspan="2">Música</td>
							</tr>
							<tr><td>22:30-23:00</td></tr>
							<tr>
								<td>23:00-23:30</td>
								<td>Terapia Espiritual</td>
								<td>Vivencias</td>
								<td>Terapia Espiritual</td>
								<td>Vivencias</td>
								<td>Terapia Espiritual</td>
								<td>Vivencias</td>
								<td>Terapia Espiritual</td>
							</tr>
							<tr>
								<td>23:30-00:00</td>
								<td colspan="5">Respuesta Pastoral</td>
								<td colspan="2">Volvamos a Dios</td>
							</tr>
								</tbody>
		  			</table>
			</div><!--fin de table responsive-->

		  </div><!--fin de tab pane noche-->

		  <div class="tab-pane" id="madrugada">
		 	
		 	<h2 class="letra-celeste myriad-pro">Madrugada</h2>

		  	<div class="table-responsive">
		  			<table class="table table-bordered text-left table-hover">
		    			<thead>
		    				<tr>
		    					<td class="active">Hora</td>
		    					<td class="active">Lunes</td>
		    					<td class="active">Martes</td>
		    					<td class="active">Miércoles</td>
		    					<td class="active">Jueves</td>
		    					<td class="active">Viernes</td>
		    					<td class="active">Sábado</td>
		    					<td class="active">Domingo</td>

		    				</tr>
		    			</thead>
		    			<tbody height="100" >
							
							<tr>
								<td width="120">00:00-00:30</td>
								<td colspan="5" rowspan="2">Música con Locución (Repeticion de 1:30pm)</td>
								<td colspan="2" rowspan="2">Música</td>
							</tr>
							<tr><td>00:30-01:00</td></tr>
							<tr>
								<td>01:00-01:30</td>
								<td>Volvamos a Dios</td>
								<td>Campañas y Convenciones</td>
								<td>Volvamos a Dios</td>
								<td>Campañas y Convenciones</td>
								<td>Volvamos a Dios</td>
								<td colspan="2">Campañas y Convenciones</td>
							</tr>
							<tr>
								<td>01:30-02:00</td>
								<td>Consultando al Especialista</td>
								<td>Música</td>
								<td>Consultando al Especialista</td>
								<td>Música</td>
								<td>Consultando al Especialista</td>
								<td colspan="2">Consultando al Especialista</td>
							</tr>
							<tr>
								<td>02:00-02:30</td>
								<td colspan="7">La Hora de la Transformación</td>
							</tr>
							<tr>
								<td>02:30-03:00</td>
								<td colspan="5">Música</td>
								<td colspan="2" rowspan="2">Música</td>
							</tr>
							<tr>
								<td>03:00-03:30</td>
								<td>Música</td>
								<td rowspan="2">Vida Saludable</td>
								<td>Música</td>
								<td rowspan="2">Hablemos de Salud</td>
								<td rowspan="2">Especiales de Bethel</td>

							</tr>
							<tr>
								<td>03:30-04:00</td>
								<td>Orientación Vocacional</td>
								<td>Tecnología para Todos (del martes)</td>
								<td>Orientación Vocacional</td>
								<td>Tecnología para Todos</td>
							</tr>
							<tr>
								<td>04:00-04:30</td>
								<td colspan="7">La Hora de la Transformación</td>
							</tr>
							<tr>
								<td>04:30-05:00</td>
								<td colspan="7">Música</td>
							</tr>

						</tbody>
		  			</table>
			</div><!--fin de table table-responsive-->
		  </div><!--fin de tab madrugada-->

	 </div><!--fin de tab content-->

	 <div class="franja-celeste">
	 	<img class="img-responsive" src="br_includes/img/franja-celeste.png">
	 </div>

	 <script>
  $(function () {
    $('#myTab a:last').tab('show')
  })
</script>

</div><!--fin de col 8-->


</div><!--fin de fila -->

		</div>

		<?php
	}//fin de function MostrarProgramacionHorario


	function MostrarFrecuencias_Select(){

		//echo "esto es frecuencias";

	?>

<div class="fondo-blanco">
			
	<div class="row">
		<div class="col-md-5 col-md-offset-1">
		<br/>
		<br/>
			<h3 class="letra-azul neue-pro">Encuéntrenos en todo el Perú</h3>
			<br/>

			<form>
				<select name="users" class="form-control" onchange="Departamento(this.value)">


					<option value="">Seleccione un departamento:</option>
										<option value="1">Amazonas</option>
										<option value="2">Ancash</option>
										<option value="3">Apurimac</option>
										<option value="4">Arequipa</option>
										<option value="5">Ayacucho</option>
										<option value="6">Cajamarca</option>
										<option value="7">Cusco</option>
										<option value="8">Huancavelica</option>
										<option value="9">Huanuco</option>
										<option value="10">Ica</option>
										<option value="11">Junín</option>
										<option value="12">La Libertad</option>
										<option value="13">Lambayeque</option>
										<option value="14">Lima</option>
										<option value="15">Loreto</option>
										<option value="16">Madre de Dios</option>
										<option value="17">Moquegua</option>
										<option value="18">Moyobamba</option>
										<option value="19">Pasco</option>
										<option value="20">Piura</option>
										<option value="21">Puno</option>
										<option value="22">San Martín</option>
										<option value="23">Tumbes</option>
										<option value="24">Ucayali</option>
				</select>
			</form>

			<br/>

			<div class='frecuencias' id="txtHint">
				<b>Ver resultados aquí</b>
			</div>


		</div>

		<div class="col-md-5">
			<br>
			<br/>
			<h3 class="letra-azul neue-pro" >Encuéntranos en tu localidad</h3>	
			<img class="img-responsive" src="br_includes/img/mapa.png" alt=".......Pronto">
		</div>

	</div>
</div>

	<?php

	}//fin de MostrarFrecuencias_Select


	public function EnEdicion(){

		?>

		<div class="fondo-blanco">
		
		<div class="row">
<div class="col-md-10 col-md-offset-1">
<br>
<br>
<article>
			<h3 class="letra-azul neue-pro">En edición ... en breve estará listo ...!!!</h3>
			<aside>
				<a target="_blank" href="https://www.facebook.com/bethelradio"><img src="br_includes/img/facebook-social.png"></a>
				<a target="_blank" href="https://twitter.com/bethelradio"><img src="br_includes/img/twitter-social.png"></a>
			</aside>
</article>

<br/>
</div>
</div>
</div>
		<?php

	}

		public function MostrarProducciones($categorias){

		?>

		<div class="fondo-blanco">
		
		<div class="row">
<div class="col-md-10 col-md-offset-1">
			<!--  ///////////// -->
  <div class="container">
    <div class="page-header">
      <h1>Programas de Bethelradio<small> | por categoría</small></h1>
    </div>

    <div class="row">
      <div  class="col-sm-10">
        <h3>Elija una sección</h3>
        <hr/>

        		<?php
							foreach ($categorias as $seccion => $categoria)
							{
								?>
							<h3><?php echo utf8_encode($seccion) ?></h3>
								<?php
							foreach ($categoria as $value) 
								{
									?>
									<div class="col-md-4">
										<h4>
											<a href="Produccion.php?t=<?php echo $value['descripcion_id']?>">
												<?php echo utf8_encode($value['descripcion_categoria'])?> 
											</a>
										</h4>
									</div>
									<?php
								}
							?>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<hr>
							<?php
							}
							?>
					</select>

        <div class="clearfix"></div>

      </div>

     
    </div><!-- fin de row-->

    <div class="clearfix"></div>

  </div><!-- fin de container-->

			<!-- /////////////  -->
</div><!--fin de col -->
</div>
</div>
		<?php

	}

	public function Colabora(){

		?>
		
<div class="fondo-blanco">
		
		<div class="row">
<div class="col-md-10 col-md-offset-1">
<br>
<br>
<article>
			<h3 class="letra-azul neue-pro">En edición ... en breve estará listo ...!!!</h3>
			<br>
			<h2 class="letra-azul neue-pro">Te invitamos a <a target="_blank" href="http://www.betheltv.tv/colabora/">colabora</a></h2>

			<br>
			<br>
			<aside>
				<a target="_blank" href="https://www.facebook.com/bethelradio"><img src="br_includes/img/facebook-social.png"></a>
				<a target="_blank" href="https://twitter.com/bethelradio"><img src="br_includes/img/twitter-social.png"></a>
			</aside>
</article>

<br/>
</div>
</div>
</div>

		<?php

	}


	public function MostrarMensaje_error($mensaje){

		?>
	
	<div class="fondo-blanco">	
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
		<br>
		<br>
		<article>
			<h2 class="letra-azul neue-pro">Envíenos sus petición de oración</h2>
			
			<h3 class="letra-azul neue-pro col-md-offset-1">Observación al envíar formulario</h3>
			<br/>
			<div class="alert alert-warning col-md-4 col-md-offset-3">
				<p class="bree"><?php echo $mensaje?></p>
				<br/>
				<p class="text-center">
					<a class="btn btn-warning" href="javascript:history.back(1)">Volver</a>
				</p>
			</div>
		</article>
		</div>
		<div class="row">
		<div class="col-md-10 col-md-offset-1">
			
			<br>
			<br>
			<aside>
				<a target="_blank" href="https://www.facebook.com/bethelradio"><img src="br_includes/img/facebook-social.png"></a>
				<a target="_blank" href="https://twitter.com/bethelradio"><img src="br_includes/img/twitter-social.png"></a>
			</aside>

		<br/>
		</div>	
		</div>
	</div>
</div>	



		<?php

	}


public function MostrarMensaje_exito($mensaje){

		?>
	
	<div class="fondo-blanco">	
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
		<br>
		<br>
		<article>
			<h2 class="letra-azul neue-pro">Envíenos sus petición de oración</h2>
			
			<h3 class="letra-azul neue-pro col-md-offset-1">Formulario enviado</h3>
			<br/>
			<div class="alert alert-success col-md-4 col-md-offset-3">
				<p class="bree"><?php echo $mensaje?></p>
				<br/>
				
				
			</div>
				
				<br/>

			<div class="alert alert-info col-md-4 col-md-offset-3">
				
				<p class="text-center">
					Le recomendamos visitar nuestro sistema de audios.
				</p>
				<p class="text-center">
					<a class="btn btn-info" href="LaHoraDeLaTransformacion.php">Ingresar</a>
				</p>

			</div>

		</article>
		</div>
		<div class="row">
		<div class="col-md-10 col-md-offset-1">
			
			<br>
			<br>
			<aside>
				<a target="_blank" href="https://www.facebook.com/bethelradio"><img src="br_includes/img/facebook-social.png"></a>
				<a target="_blank" href="https://twitter.com/bethelradio"><img src="br_includes/img/twitter-social.png"></a>
			</aside>

		<br/>
		</div>	
		</div>
	</div>
</div>	



		<?php

	}

}//fin de class

?>