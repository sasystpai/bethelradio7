<?php

class ControlNuevoUsuario
{

	function VerControlNuevoUsuario(){

		$privilegios=$_SESSION['privilegios'];

		include_once('../ModuloAdministrador/vistas/FormularioNuevoUsuario.php');
           $OBJNuevoUsuario = new FormularioNuevoUsuario;
           $OBJNuevoUsuario -> MostrarFormularioNuevoUsuario($privilegios);

	}
}


?>