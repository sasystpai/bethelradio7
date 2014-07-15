<?php

/**
* 
*/
class ControlEstadoDeEntradas
{
	
	function __construct(){
	//echo 123;
	}
	
	function PublicarEntrada($id)
	{
	
		include_once('../Entidades/Entradas.php');
		$OBJEstadoEntradas = new Entradas;	
		$resultado = $OBJEstadoEntradas -> PublicarEntrada($id);

		header('Location: ../ModuloAdministrador/IndexEntradas.php');

	}

	function EditarEntrada($id, $privilegios){
		#code...
		include_once('../Entidades/Entradas.php');
					$OBJGetEntrada = new Entradas;
		$datos = 	$OBJGetEntrada -> ObtenerEntrada($id);
		$categorias = $OBJGetEntrada -> ObtenerCategorias();

		//include('../Entidades/Categorias.php');
				//$OBJGetCategorias = new Categorias;

		include_once('../ModuloAdministrador/vistas/FormularioEditarEntrada.php');
		$OBJEditarEntrada = new FormularioEditarEntrada;
		$OBJEditarEntrada -> MostrarFormularioEditarEntrada($datos, $categorias, $privilegios);

	}

	function DesPublicarEntrada($id){
		include_once('../Entidades/Entradas.php');
		$OBJEstadoEntradas = new Entradas;	
		$resultado = $OBJEstadoEntradas -> DesPublicarEntrada($id);

		header('Location: ../ModuloAdministrador/IndexEntradas.php');

	}

	function EliminarEntrada($id){
		include_once('../Entidades/Entradas.php');
		$OBJEstadoEntradas = new Entradas;	
		$resultado = $OBJEstadoEntradas -> EliminarEntrada($id);

		header('Location: ../ModuloAdministrador/IndexEntradas.php');

	}
}

?>