<?php

/**
* 
*/
class ControlEstadoDeCategoria
{
	
	function HabilitarCategoria($id)
	{
	
		include_once('../Entidades/Categorias.php');
		$OBJEstadoCategorias = new Categorias;	
		$resultado = $OBJEstadoCategorias -> ActivarHabilitarCategoria($id);

		header('Location: ../ModuloAdministrador/IndexCategorias.php');

	}

	function EditarCategoria($id, $privilegios){
		#code...
		include_once('../Entidades/Categorias.php');
					 $OBJGetCategoria = new Categorias;
		$vector = $OBJGetCategoria -> ObtenerCategoria($id);
		
		$categoria = $vector[0];
		$secciones = $vector[1];

		include_once('../ModuloAdministrador/vistas/FormularioEditarCategoria.php');
		$OBJEstadoCategorias = new FormularioEditarCategoria;
		$OBJEstadoCategorias -> MostrarFormularioEditarCategoria($categoria, $secciones, $privilegios);

	}

	function DesHabilitarCategoria($id){
		include_once('../Entidades/Categorias.php');
		$OBJEstadoCategorias = new Categorias;	
		$resultado = $OBJEstadoCategorias -> ActivarDesHabilitarCategoria($id);

		header('Location: ../ModuloAdministrador/IndexCategorias.php');

	}

	function EliminarCategoria($id){
		include_once('../Entidades/Categorias.php');
		$OBJEstadoCategorias = new Categorias;	
		$resultado = $OBJEstadoCategorias -> EliminarCategoria($id);

		header('Location: ../ModuloAdministrador/IndexCategorias.php');

	}
}

?>