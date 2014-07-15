<?php

class ControlNuevaSeccion
{

	function VerControlNuevaSeccion(){

		$privilegios=$_SESSION['privilegios'];

		include_once('../ModuloAdministrador/vistas/FormularioNuevaSeccion.php');
           $OBJNewEntradas = new FormularioNuevaSeccion;
           $OBJNewEntradas -> MostrarFormularioNuevaSeccion($privilegios);

	}
}


?>