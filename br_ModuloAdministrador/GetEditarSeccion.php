<?php
session_start();
$privilegios = $_SESSION['privilegios'];
$id_usuario  = $_SESSION['id_usuario'];
if (isset($_REQUEST['actualizar']) && isset($privilegios) && !empty($_POST)) 
{
	$id_seccion=$_POST['id_seccion'];
	
	$seccion= $_POST['seccion'];
	$seccion= utf8_decode($seccion);

	

		include_once('../ModuloAdministrador/controles/ControlActualizarSeccion.php');
		$ObjControl = new ControlActualizarSeccion;
		$ObjControl -> ActualizarSeccion($seccion, $privilegios, $id_seccion);	
		
}//fin de if: si se presiono el botón 

else {

	//FormMensaje
	echo "acceso inadecuado<br>";
	echo "<a href='../'>volver</a>";
}
?>