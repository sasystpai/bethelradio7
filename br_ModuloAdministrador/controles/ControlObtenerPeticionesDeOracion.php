<?php

/**
* 
*/
class ControlObtenerPeticionesDeOracion
{
	
	function ObtenerPeticionesDeOracion()
	{
		//echo "hola";

		include_once('../Entidades/PeticionDeOracion.php');
		$OBJPeticionDeOracion = new PeticionDeOracion;
		$PeticionesDeOracion=$OBJPeticionDeOracion -> ObtenerPeticionesDeOracion();


		if ($PeticionesDeOracion>=0) {
			
			$privilegios = $_SESSION['privilegios'];
			
			include_once('../ModuloAdministrador/vistas/FormularioPeticionesDeOracion.php');
			$OBJFormPeticionDeOracion = new FormularioPeticionDeOracion;
			$OBJFormPeticionDeOracion -> MostrarFormularioPeticionesDeOracion($PeticionesDeOracion,$privilegios);
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