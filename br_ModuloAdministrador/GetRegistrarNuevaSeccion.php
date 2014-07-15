<?php
session_start();
$privilegios = $_SESSION['privilegios'];
$id_usuario  = $_SESSION['id_usuario'];
if (isset($_REQUEST['registrar']) && isset($privilegios) && !empty($_POST)) 
{

	$seccion= $_POST['seccion'];
	//$secciono= utf8_decode($seccion);

		include_once('../ModuloAdministrador/controles/ControlRegistrarNuevaSeccion.php');
		$ObjControl = new ControlRegistrarNuevaSeccion;
		$ObjControl -> VerControlRegistrarNuevaSeccion($seccion,$privilegios);
		

	
}//fin de if: si se presiono el botón 

else {

	//FormMensaje
	echo "acceso inadecuado<br>";
	echo "<a href='../'>volver</a>";
}
?>