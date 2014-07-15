<?php
session_start();
$privilegios = $_SESSION['privilegios'];
$id_usuario  = $_SESSION['id_usuario'];
if (isset($_REQUEST['registrar']) && isset($privilegios) && !empty($_POST)) 
{

	$newcategoria['descripcion']= $_POST['categoria'];
	$newcategoria['seccion'] 	= $_POST['seccion'];
	$newcategoria['sinopsis']	= $_POST['sinopsis'];
	$newcategoria['horario']	= $_POST['dia'];
	//$newcategoria['hora']		= $_POST['hora'];
	$newcategoria['color']		= $_POST['color'];
	$newcategoria['banner']		= $_POST['banner'];

	//echo $newcategoria['dia'];
	//echo $newcategoria['dia'][0];

		include_once('../ModuloAdministrador/controles/ControlRegistrarNuevaCategoria.php');
		$ObjControl = new ControlRegistrarNuevaCategoria;
		$ObjControl -> RegistrarNewCategoria($newcategoria, $privilegios);
		

	
}//fin de if: si se presiono el botón 

else {

	//FormMensaje
	echo "acceso inadecuado<br>";
	echo "<a href='../'>volver</a>";
}
?>