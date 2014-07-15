<?php

include_once('../includes/Pagina2.php');
class FormMenuUsuario extends Pagina2{
	

	//function FormMenuUsuario(){	}

	function MostrarMenu1($privilegios)
	{
		//ECHO gettype($privilegios);
		//echo gettype($privilegios);
		$this->MostarEncabezado();
		//aqui podremos agregar css dentro del head
	
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
//session_start();
		?>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h1 class="titulo-admin text-center">Bienvenido a BethelRadio </h1>
				<h3></h3>
			</div>
		</div>
		<br/>
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
			<p class="text-center">
				<input  class="img-responsive" type="image" src="../includes/img/logo_BethelRadio.png">			
			</p>
			</div>
		</div>
				
		<?php
		$this->MostrarPie();
	}
}

?>