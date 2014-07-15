<?php


/**
* 
*/
class ControlNuevaEntrada
{
	
	function __construct()
	{
		# code...
	}

	function VerControlNuevaEntrada(){

		include_once('../Entidades/Categorias.php');
		$OBJCat = new Categorias;
		$categorias=$OBJCat -> ObtenerCategorias();
						
		$privilegios=$_SESSION['privilegios'];

		include_once('../ModuloAdministrador/vistas/FormularioNuevaEntrada.php');
           $OBJNewEntradas = new FormularioNuevaEntrada;
           $OBJNewEntradas -> MostrarFormularioNuevaEntrada($categorias, $privilegios);

	}
}


?>