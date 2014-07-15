<?php

	session_start();
if(isset($_SESSION['username'])){

	$privilegios = $_SESSION['privilegios'];
	include_once('../ModuloAdministrador/vistas/FormMenuUsuario4.php');
	$OBJMenuPrincipal = new FormMenuUsuario;
	$OBJMenuPrincipal -> MostrarMenu1($privilegios);
}	

else{
	include_once('../includes/RequestSalir.php');
}

?>