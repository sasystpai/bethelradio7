<?php

class ControlNuevaCategoria
{

	function VerControlNuevaCategoria(){

		include_once('../Entidades/Secciones.php');
		$OBJCat = new Secciones;
		$secciones=$OBJCat -> ObtenerSecciones();
						
		$privilegios=$_SESSION['privilegios'];

		include_once('../ModuloAdministrador/vistas/FormularioNuevaCategoria.php');
           $OBJNewEntradas = new FormularioNuevaCategoria;
           $OBJNewEntradas -> MostrarFormularioNuevaCategoria($secciones, $privilegios);

	}
}


?>