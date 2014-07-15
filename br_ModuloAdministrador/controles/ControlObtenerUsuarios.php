<?php

/**
* 
*/
class ControlObtenerUsuarios
{

	function ObtenerUsuarios(){

		include_once('../Entidades/Usuario.php');
		$OBJUsuarios = new Usuario;
		$usuarios=$OBJUsuarios -> ObtenerUsuarios();


		if ($usuarios>=0) {
			
			$privilegios = $_SESSION['privilegios'];
			
			
				
			include_once('../ModuloAdministrador/vistas/FormularioUsuarios.php');
			$OBJUsuarios = new FormularioUsuarios;
			$OBJUsuarios -> MostrarFormularioUsuarios($usuarios,$privilegios);
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