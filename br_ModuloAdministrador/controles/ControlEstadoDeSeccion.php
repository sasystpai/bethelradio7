<?php

/**
* 
*/
class ControlEstadoDeSeccion
{
	
	// function __construct(){
	// //echo 123;
	// }
	
	function HabilitarSeccion($id)
	{
	
		include_once('../Entidades/Secciones.php');
		$OBJEstadoSecciones = new Secciones;	
		$resultado = $OBJEstadoSecciones -> ActivarHabilitarSeccion($id);

		header('Location: ../ModuloAdministrador/IndexSecciones.php');

	}

	function EditarSeccion($id, $privilegios){
		#code...
		include_once('../Entidades/Secciones.php');
					$OBJGetEntrada = new Secciones;
		$seccion = 	$OBJGetEntrada -> ObtenerSeccion($id);
		
		include_once('../ModuloAdministrador/vistas/FormularioEditarSeccion.php');
		$OBJEditarSeccion = new FormularioEditarSeccion;
		$OBJEditarSeccion -> MostrarFormularioEditarSeccion($seccion, $privilegios);

	}

	function DesHabilitarSeccion($id){
		include_once('../Entidades/Secciones.php');
		$OBJEstadoSecciones = new Secciones;	
		$resultado = $OBJEstadoSecciones -> ActivarDesHabilitarSeccion($id);

		header('Location: ../ModuloAdministrador/IndexSecciones.php');

	}

	function EliminarSeccion($id){
		include_once('../Entidades/Secciones.php');
		$OBJEstadoSeccion = new Secciones;	
		$resultado = $OBJEstadoSeccion -> EliminarSeccion($id);

		header('Location: ../ModuloAdministrador/IndexSecciones.php');

	}
}

?>