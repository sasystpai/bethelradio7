<?php
session_start();
$privilegios = $_SESSION['privilegios'];
$id_usuario  = $_SESSION['id_usuario'];
if (isset($_REQUEST['actualizar']) && isset($privilegios) && !empty($_POST)) 
{
	$id_usuario=$_POST['id_usuario'];
	
	$nombre = $_POST['nombre'];
	$nombre = strtolower($nombre);
	$nombre = utf8_decode($nombre);

	$apellido = $_POST['apellido'];
	$apellido = strtolower($apellido);
	$apellido = utf8_decode($apellido);

	$telefono = $_POST['telefono'];	
	
	$email = $_POST['email'];
	$email = strtolower($email);
	$email = utf8_decode($email);

	$nickname = $_POST['nickname'];
	$nickname = utf8_decode($nickname);
	

		include_once('../ModuloAdministrador/controles/ControlActualizarUsuario.php');
		$ObjControl = new ControlActualizarUsuario;
		$ObjControl -> ActualizarUsuario($nombre, $apellido, $telefono, $email, $nickname, $privilegios, $id_usuario);	
		
}//fin de if: si se presiono el botón 

elseif (isset($_REQUEST['change_password']) && isset($privilegios) && !empty($_POST)) 
{
	$id_usuario=$_POST['id_usuario'];
	$newpassword= $_POST['password'];

	include_once('../ModuloAdministrador/controles/ControlActualizarUsuario.php');
		$ObjControl = new ControlActualizarUsuario;
		$ObjControl -> CambiarPassword($newpassword, $privilegios, $id_usuario);	
}	

else {

	//FormMensaje
	echo "acceso inadecuado<br>";
	echo "<a href='../'>volver</a>";
}
?>