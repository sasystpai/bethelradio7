<?php

/**
* 
*/
class ControlObtenerImagenes
{

	function ObtenerImagenes(){

		include_once('../Entidades/Imagenes.php');
		$OBJEntradas = new Imagenes;
		$imagenes=$OBJEntradas -> ObtenerListarImagenes();


		if ($imagenes>=0) {
			
			$privilegios = $_SESSION['privilegios'];
			
			include_once('../ModuloAdministrador/vistas/FormularioImagenes.php');
			$OBJFormImagenes = new FormularioImagenes;
			$OBJFormImagenes -> MostrarFormularioImagenes($imagenes,$privilegios);

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