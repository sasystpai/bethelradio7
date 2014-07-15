<?php

if (isset($_REQUEST['enviar'])) {
	

	$nombre 	= trim($_POST['nombre']);
	$motivo 	= trim($_POST['motivo']);
	$peticion	= trim($_POST['peticion']);


	$procedencia = trim($_POST['procedencia']);
	$email 		 = trim($_POST['email']);
	$telefono	 = trim($_POST['telefono']);
	

	// if ($nombre!="" && $motivo!="") {
	// 	# code...
	// }

	if (empty($nombre) || empty($motivo) || empty($peticion)) {
		echo "debe llenar los campor: nombre, motivo, peticion: <a href='javascript:history.back(1)'>volver</a>";
	}
	else //echo "bien";
{	
	include('br_Controles/ControlEnviarFormularioPeticionDeOracion.php');
	$OBJControl = new ControlEnviarFormularioPeticionDeOracion;
	$OBJControl -> EnviarFormulario($nombre, $motivo, $peticion, $procedencia, $email, $telefono);
}
}

else{
	header("location:Index.php");
}
?>