<?php
session_start();
$privilegios = $_SESSION['privilegios'];
$id_usuario  = $_SESSION['id_usuario'];
if (isset($_REQUEST['registrar']) && isset($privilegios) && !empty($_POST)) 
{

	$nombre		= $_POST['nombre'];
	$nombre		= utf8_decode($nombre);	
	$nombre		= strtolower($nombre);

	$apellido	= $_POST['apellido'];
	$apellido	= utf8_decode($apellido);
	$apellido	= strtolower($apellido);

	$email		= $_POST['email'];
	$email		= utf8_decode($email);
	$email		= strtolower($email);

	$telefono	= $_POST['telefono'];



	$nickname	= $_POST['nickname'];
	$nickname	= utf8_decode($nickname);
	$nickname	= strtolower($nickname);

	$password	= $_POST['password'];
	$password	= utf8_decode($password);

	//echo $email;

	include_once('../ModuloAdministrador/controles/ControlRegistrarNuevoUsuario.php');
	$ObjControl = new ControlRegistrarNuevoUsuario;
	$ObjControl -> RegistrarNuevoUsuario($nombre, $apellido, $email, $telefono, $nickname, $password, $privilegios);
	
}//fin de if: si se presiono el botón 

else {

	//FormMensaje
	echo "acceso inadecuado<br>";
	echo "<a href='../'>volver</a>";
}
?>