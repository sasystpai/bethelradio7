<?php
include_once('../includes/FormMensaje.php');
class ControlEstadoPeticionesDeOracion extends FormMensaje
{

	function VerPeticion($id, $privilegios){
		#code...
		include_once('../Entidades/PeticionDeOracion.php');
					$OBJGetPeticion = new PeticionDeOracion;
		$datos = 	$OBJGetPeticion -> ObtenerPeticion($id);
		//$categorias = $OBJGetEntrada -> ObtenerCategorias();

		//include('../Entidades/Categorias.php');
				//$OBJGetCategorias = new Categorias;

		include_once('../ModuloAdministrador/vistas/FormularioMostrarPeticionDeOracion.php');
		$OBJEMOstrarPeticionDeOracion = new FormularioMostrarPeticionDeOracion;
		$OBJEMOstrarPeticionDeOracion -> MostrarPeticionDeOracion($datos, $privilegios);

	}


	function EliminarPeticion($id){
		include_once('../Entidades/PeticionDeOracion.php');
		$OBJDeletePeticionDeOracion = new PeticionDeOracion;	
		$resultado = $OBJDeletePeticionDeOracion -> EliminarPeticion($id);

		header('Location: ../ModuloAdministrador/IndexPeticionDeOracion.php');

	}

	public function EnviarMail($email,$mensaje,$privilegios){
	

		$pagina="IndexPeticionDeOracion.php";

		$cabecera="from: bethelradio.fm <asolascondios@bethelradio.fm>\r\n";
		
		if(mail($email, "Mensaje de bethelradio.fm", $mensaje, $cabecera )){

			$mensaje2="El envío del mail ha sido satisfactorio";

			$this->MostrarMensaje_exito($mensaje2,$privilegios,$pagina);

		}

		else{
			$mensaje2="hubo un error en el envío del mail, <br/>vuelva a intentar, si persiste, comuniquelo a: 991026416";
			$this->MostrarMensaje_error($mensaje2,$privilegios,$pagina);
			}
		}
}

?>