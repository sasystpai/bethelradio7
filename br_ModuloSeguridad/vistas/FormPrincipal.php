<?php

class FormPrincipal{

	function MostrarFormPrincipal(){
	
		?>
	
	<!DOCTYPE html>
		<html lang="es">
		<head>
		<meta charset="utf-8">
			<title>.: BethelRadio.fm :.</title>

<!-- desahbilitar la cache-->
<meta http-equiv="Expires" content="0" />
<meta http-equiv="Pragma" content="no-cache" />

<!-- bloquear ir atrás -->
<script type="text/javascript">
{
if(history.forward(1))
location.replace(history.forward(1))
}
</script>	


	<!-- The styles -->
	<link id="bs-css" href="br_includes/charisma-master/css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>

	<!-- <link rel="stylesheet" type="text/css" href="includes/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="includes/dist/css/bootstrap-theme.css"> -->
	<link href="br_includes/charisma-master/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="br_includes/charisma-master/css/charisma-app.css" rel="stylesheet">
<!-- <link href="includes/charisma-master/css/jquery-ui-1.8.21.custom.css" rel="stylesheet"> -->
<!-- <link href='includes/charisma-master/css/fullcalendar.css' rel='stylesheet'>
	 <link href='includes/charisma-master/css/fullcalendar.print.css' rel='stylesheet'  media='print'> -->
<!-- <link href='includes/charisma-master/css/chosen.css' rel='stylesheet'> -->
<!-- <link href='includes/charisma-master/css/uniform.default.css' rel='stylesheet'>
	<link href='includes/charisma-master/css/colorbox.css' rel='stylesheet'> -->
	<!-- <link href='includes/charisma-master/css/jquery.cleditor.css' rel='stylesheet'>
	<link href='includes/charisma-master/css/jquery.noty.css' rel='stylesheet'>
	<link href='includes/charisma-master/css/noty_theme_default.css' rel='stylesheet'>
	<link href='includes/charisma-master/css/elfinder.min.css' rel='stylesheet'>
	<link href='includes/charisma-master/css/elfinder.theme.css' rel='stylesheet'>
	<link href='includes/charisma-master/css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='includes/charisma-master/css/opa-icons.css' rel='stylesheet'> -->
	<!-- <link href='includes/charisma-master/css/uploadify.css' rel='stylesheet'> -->

	<link rel="shortcut icon" href="br_includes/img/logo.png">
		</head>

		<body>

	<div class="container-fluid">
		<div class="row-fluid">
		
			<div class="row-fluid">
				<div class="span12 center login-header">		
					<h2>Bienvenido a BethelRadio</h2>	
				</div><!--/span-->
			</div><!--/row-->

			<div class="row-fluid">
				<div class="span12 center login-header-logo">		
					<img class="img-responsive" src="br_includes/img/logo_BethelRadio_admin.png" />					
				</div><!--/span-->
			</div><!--/row-->
						

			<div class="row-fluid">
				<div class="well span5 center login-box">
					<div class="alert alert-info">
						Ingrese su nickname y su password por favor.
					</div>

					<form class="form-horizontal" name="formprincipal" action="ModuloSeguridad/GetAutenticar.php" method="post">
						<fieldset>
							<div class="input-prepend" title="Nombre de Usuario" data-rel="tooltip">
								<span class="add-on">
								<i class="icon-user"></i>
								</span>
								<input autofocus class="input-large span10" 
								name="username" id="username" type="text" />
							</div>

							<div class="clearfix"></div>

							<div class="input-prepend" title="Contraseña" data-rel="tooltip">
								<span class="add-on">
								<i class="icon-lock"></i>
								</span>
								<input class="input-large span10" 
								name="password" id="password" type="password" />
							</div>

							<div class="clearfix"></div>

							<!-- <div class="input-prepend">
							<label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>
							</div>
							<div class="clearfix"></div> -->


							<p class="center span5">
							<button type="submit" name="login" class="btn btn-primary">Ingresar</button>
							<input type="hidden" name="mensaje" value="error el login y password no se encuentran en la BD<br/> o se ha ingresado alguno de los valores equivocadamente">
							</p>
						</fieldset>
					</form>
				</div><!--/span-->
			</div><!--/row-->
				
		
	</div><!--/.fluid-container-->
	</div>

		</body>
		</html>
		<?php

		//$this->MostrarPie();
	}
}


?>