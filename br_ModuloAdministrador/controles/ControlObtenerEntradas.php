<?php

/**
* 
*/
class ControlObtenerEntradas
{
	
	function ObtenerEntradas()
	{
		//echo "hola";

		include_once('../Entidades/Entradas.php');
		$OBJEntradas = new Entradas;
		$entradas=$OBJEntradas -> ObtenerEntradas();


		if ($entradas>=0) {
			
			$privilegios = $_SESSION['privilegios'];
			
			
				
			include_once('../ModuloAdministrador/vistas/FormularioEntradas.php');
			$OBJFormEntradas = new FormularioEntradas;
			$OBJFormEntradas -> MostrarFormularioEntradas($entradas,$privilegios);
			//echo "bien";

		}

		else{

				  $mensaje="llame al administrador o contacte a direcciones@mmmperu.org";
				  include('../includes/FormularioMensaje.php');
				  $objmen =  new FormularioMensaje;
            	  $objmen->MostrarMensajeLogin($mensaje);

		}


		

	}
}


?>