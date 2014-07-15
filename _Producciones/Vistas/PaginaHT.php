<?php
/**
* 
*/
class Pagina
{
	
		function MostrarEncabezado2($titulo)
	{
		?>
		
		<!DOCTYPE html>
		<html>
		<head>
		<meta charset="utf-8">
		<title>.: Bethel Radio: <?php echo utf8_encode($titulo)?> :.</title>
		<link rel="stylesheet" type="text/css" href="../includes/dist/css/bootstrap-theme.css">
		<link rel="stylesheet" type="text/css" href="../includes/dist/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../includes/css/estilos-bethelradio.css">

		<link rel="stylesheet" type="text/css" href="includes/css/LaHoraDeLaTransformacion.css">
		<link rel="stylesheet" type="text/css" href="includes/css/estilos-producciones.css"	>

	 	<script src="../includes/js/vendor/modernizr-2.6.2.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	 	<link rel="shortcut icon" href="../includes/img/logo.png">
		<?php
	}


	function MostrarMenu2($fondo)
	{
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
		        	<img class="img-responsive link logo-bethel" src="../includes/img/logo-bethelradio.png">
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
		      	<a target="_blank" href="vivo/">
		      		<img class="img-responsive radioenvivo" src="../includes/img/reproductor3.png"/>
		      	</a>
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
										<li class="align-horizontal"><a class="menu borde-r" href="../index.php">&nbsp;INICIO &nbsp;  	</a></li>				
										<li class="align-horizontal"><a class="menu borde-r" href="../conocenos.php">&nbsp;CONÓCENOS &nbsp;     	    </a></li> 	
										<li class="align-horizontal"><a class="menu borde-r" href="../programacion.php">&nbsp;PROGRAMACIÓN&nbsp;        </a></li>		
										<li class="align-horizontal"><a class="menu borde-r" href="../frecuencias.php">&nbsp;FRECUENCIAS  &nbsp;       </a></li>		
										<li class="align-horizontal"><a class="menu borde-r" href="../colabora.php">&nbsp;PRODUCCIONES  &nbsp;      </a></li>		
										<li class="align-horizontal"><a class="menu" 		 href="../colabora.php">&nbsp;COLABORA	&nbsp;&nbsp;&nbsp;	</a></li>
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

	function MostrarPresentacion($entradas){

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
					  	<img class="img-responsive" width="100%" src="includes/img/presentacion.png">
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
				<div class="col-md-3">
				<!-- <p class="lead">Sinopsis</p> -->
				<p>Exposición clara y sencilla del evangelio de nuestro señor jesucristo, a cargo del predicador internacional, rev. rodolfo gonzález. espacio dirigido a la familia, el núcleo de la sociedad.</p>
				</div>
				<div class="col-md-6">
					
					<div class="row">
						<div class="col-md-6">
							<blockquote class="produccion">
							  <p class="titulo-produccion">DOCTRINAL:</p>
							  <P class="titulo-produccion">LUNES A DOMINGO</P>
							  <p class="hora">7:00 AM</p>
							</blockquote>
						</div>
						<div class="col-md-6">
							<blockquote class="produccion">
							  <p class="titulo-produccion">FAMILIA:</p>
							  <P class="titulo-produccion">LUNES A DOMINGO</P>
							  <p class="hora">10:00 AM</p>
							</blockquote>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-6">
							<blockquote class="produccion">
							  <p class="titulo-produccion">SOCIEDAD:</p>
							  <P class="titulo-produccion">LUNES A DOMINGO</P>
							  <p class="hora">7:00 AM y 4:00pm</p>
							</blockquote>
						</div>
						<div class="col-md-6">
							<blockquote class="produccion">
							  <p class="titulo-produccion">FAMILIA:</p>
							  <P class="titulo-produccion">LUNES A DOMINGO</P>
							  <p class="hora">10:00 AM</p>
							</blockquote>
						</div>
					</div>

				</div>
			</div>
		</div><!-- fin de fila-->


		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="col-md-9">
					<div class="titulo-lista-reproduccion neue">Lista de reporuducción</div>
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
									<img class="img-responsive" src="includes/img/btn-paly2.png"/> 
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
									<a class="link-social" target="_blank" href="https://www.facebook.com/bethelradio"><img class="img-responsive align-horizontal" src="../includes/img/facebook.png"> /bethelradio</a><br/>
									<a class="link-social" target="_blank" href="https://twitter.com/bethelradio"><img class="img-responsive align-horizontal" src="../includes/img/twitter.png"> @bethelradio</a>
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

		<script>window.jQuery || document.write('<script src="../includes/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="../includes/js/vendor/bootstrap.js"></script>

		</body>
		</html>

		<?php
	}//fin de function MostrarFoot()


}

?>