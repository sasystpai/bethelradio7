<?php
session_start();
$privilegios = $_SESSION['privilegios'];
$id_usuario  = $_SESSION['id_usuario'];
if (isset($_REQUEST['actualizar']) && isset($privilegios) && !empty($_POST)) 
{
	$id_peticion= $_POST['id_peticion'];
	$nombre 	= $_POST['nombre'];
	$motivo		= $_POST['motivo'];
	$peticion 	= htmlentities(($_POST['peticion']));	
	$procedencia= $_POST['procedencia'];
	$telefono	= $_POST['telefono'];
	$email		= $_POST['email'];

	
	
		include_once('../ModuloAdministrador/controles/ControlActualizarPeticionDeOracion.php');
		$OBJUpdatePeticion = new ControlActualizarPeticionDeOracion;
		$OBJUpdatePeticion -> ActualizarPeticionDeOracion($id_peticion,$nombre,$motivo,$peticion,$procedencia,$telefono,$email,$id_usuario,$privilegios);

		
}//fin de if: si se presiono el botón 

else {

	//FormMensaje
	echo "acceso inadecuado<br>";
	echo "<a href='../'>volver</a>";
}
?>