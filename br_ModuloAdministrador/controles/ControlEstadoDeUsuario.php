<?php

/**
* 
*/
class ControlEstadoDeUsuario
{
	
	// function __construct(){
	// //echo 123;
	// }
	
	function HabilitarUsuario($id)
	{
	
		include_once('../Entidades/Usuario.php');
		$OBJEstadoUsuario = new Usuario;	
		$resultado = $OBJEstadoUsuario -> ActivarHabilitarUsuario($id);

		header('Location: ../ModuloAdministrador/IndexUsuarios.php');

	}

	function EditarUsuario($id, $privilegios){
		#code...
		include_once('../Entidades/Usuario.php');
							$OBJGetEntrada = new Usuario;
		$datos_usuario = 	$OBJGetEntrada -> ObtenerDatosDeUsuario($id);
		
		include_once('../ModuloAdministrador/vistas/FormularioEditarUsuario.php');
		$OBJEditarUsuario = new FormularioEditarUsuario;
		$OBJEditarUsuario -> MostrarFormularioEditarUsuario($datos_usuario, $privilegios);

	}

	function DesHabilitarUsuario($id){
		include_once('../Entidades/Usuario.php');
		$OBJEstadoUsuario = new Usuario;	
		$resultado = $OBJEstadoUsuario -> ActivarDesHabilitarUsuario($id);

		//echo $id."<---->";
		header('Location: ../ModuloAdministrador/IndexUsuarios.php');

	}

	function EliminarUsuario($id){
		include_once('../Entidades/Usuario.php');
		$OBJEstadoUsuario = new Usuario;	
		$resultado = $OBJEstadoUsuario -> ActivarEliminarUsuario($id);

		header('Location: ../ModuloAdministrador/IndexUsuarios.php');

	}
}

?>