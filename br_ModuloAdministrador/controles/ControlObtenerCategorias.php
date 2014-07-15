<?php

/**
* 
*/
class ControlObtenerCategorias
{
	/////////////////////////////////////////////   para otro caso
	function _ObtenerSecciones()
	{
		include_once('../Entidades/Secciones.php');
		$OBJUsuarios = new Secciones;
		$secciones=$OBJUsuarios -> ObtenerSeccionesparaCategorias();


		if ($secciones>=0) {
			
			$privilegios = $_SESSION['privilegios'];
			
			include_once('../ModuloAdministrador/vistas/FormularioCategorias.php');
			$OBJUsuarios = new FormularioCategorias;
			$OBJUsuarios -> MostrarFormularioCategorias($secciones,$privilegios);

		}

		else{

				  $mensaje="llame al administrador o contacte a direcciones@mmmperu.org";
				  include('../includes/FormularioMensaje.php');
				  $objmen =  new FormularioMensaje;
            	  $objmen->MostrarMensajeLogin($mensaje);

		}
	}


	function _ObtenerCategorias($id){

		include_once("../Entidades/Categorias.php");
		$OBJCategorias = new Categorias;
		$categorias	= $OBJCategorias -> ObtenerCategoriasporSeccion($id);
	}

	/////////////////////////////////////////////////  fin de para otro caso

	function ObtenerCategorias(){

		include_once("../Entidades/Categorias.php");
		$OBJCategorias = new Categorias;
		$categorias	= $OBJCategorias -> ObtenerCategoriasconSeccion();

		$privilegios = $_SESSION['privilegios'];

		include_once("../ModuloAdministrador/vistas/FormularioCategorias.php");
		$OBJFormCategorias = new FormularioCategorias;
		$OBJFormCategorias -> MostrarFormularioCategorias($categorias,$privilegios);


	}
}

?>