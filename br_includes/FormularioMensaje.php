<?php


class FormularioMensaje
{
	
	function MostrarMensajeLogin($mensaje)
	{
		
		?>
<head>
<meta charset="utf-8">
    <link id="bs-css" href="../br_includes/charisma-master/css/bootstrap-cerulean.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>

    <link rel="stylesheet" href="../br_includes/charisma-master/css/bootstrap-responsive.css" >
	<link rel="stylesheet" href="../br_includes/charisma-master/css/charisma-app.css" >
	

	<link rel="shortcut icon" href="../br_includes/img/logo.png">
		</head>

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
					<img src="../br_includes/img/logo_BethelRadio_admin.png" />					
				</div><!--/span-->
			</div><!--/row-->				

			<div class="row-fluid">
				<div class="well span5 center login-box">
					<div class="alert alert-info">
						Ingrese su nickname y su password por favor.
					</div>
					<br/>
					<br/>
						<?php echo $mensaje?>
						<br/>
						<br/>
						<a href="../br_includes/RequestSalir.php">Inicio</a>
						
				</div><!--/span-->
			</div><!--/row-->
		</div>
	</div><!--/.fluid-container-->
	</body>
	<?php
	}

	
}

?>