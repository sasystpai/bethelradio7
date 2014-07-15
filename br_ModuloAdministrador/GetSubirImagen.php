<?php

session_start();
$privilegios = $_SESSION['privilegios'];
$id_usuario  = $_SESSION['id_usuario'];

if (isset($_REQUEST['registrar']) && isset($privilegios)) {

		include_once('../ModuloAdministrador/controles/ControlSubirImagen.php');
		$ObjControl = new ControlSubirImagen;
		$ObjControl -> RegistrarImagen($privilegios,$id_usuario);
	}
	//echo "bien";
	 // if (isset($_SESSION['username'])) {
	 // 	# code...
	 // 	echo "GLORIA A DIOS";
	 // }
	 // else echo "SANTO";

	// $titulo= $_REQUEST['titulo'];
	// $titulo= utf8_decode($titulo);

	// $redaccion = $_REQUEST['redaccion'];
	// $redaccion=utf8_decode($redaccion);	

	// $tags  = $_REQUEST['tags'];
	// $tags=utf8_decode($tags);


?>