<?php

session_start();

$privilegios = $_SESSION['privilegios'];
$id_usuario  = $_SESSION['id_usuario'];

if (isset($_REQUEST['enviar_mail']) && isset($privilegios)) {

		$id_usuario	= $_REQUEST['id_usuario'];
		$email 		= $_REQUEST['email'];
		$mensaje	= $_REQUEST['mensaje'];
	
		include_once('../ModuloAdministrador/controles/ControlEstadoPeticionesDeOracion.php');
		$OBJEnviarmail = new ControlEstadoPeticionesDeOracion;
		$OBJEnviarmail -> EnviarMail($email,$mensaje,$privilegios);
}

else
{
	echo "acceso inadecuado";
}

?>