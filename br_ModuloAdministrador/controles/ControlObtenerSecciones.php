<?php

/**
* 
*/
class ControlObtenerSecciones
{
	
	function ObtenerSecciones()
	{
		include_once('../Entidades/Secciones.php');
		$OBJUsuarios = new Secciones;
		$secciones=$OBJUsuarios -> ObtenerSecciones();


		if ($secciones>=0) {
			
			$privilegios = $_SESSION['privilegios'];
			
			
				
			include_once('../ModuloAdministrador/vistas/FormularioSecciones.php');
			$OBJUsuarios = new FormularioSecciones;
			$OBJUsuarios -> MostrarFormularioSecciones($secciones,$privilegios);
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