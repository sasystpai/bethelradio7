
<?php
session_start();
$privilegios = $_SESSION['privilegios'];
$id_usuario  = $_SESSION['id_usuario'];
if (isset($_REQUEST['actualizar']) && isset($privilegios) && !empty($_POST)) 
{
	$id_categoria=$_POST['id_categoria'];
	
	$categoria= $_POST['categoria'];
	$categoria= utf8_decode($categoria);

	

		include_once('../ModuloAdministrador/controles/ControlActualizarCategoria.php');
		$ObjControl = new ControlActualizarCategoria;
		$ObjControl -> ActualizarCategoria($categoria, $privilegios, $id_categoria);	
		
}//fin de if: si se presiono el botón 

elseif(isset($_REQUEST['actualizar_seccion']) && isset($privilegios) && !empty($_POST)){

	 $id_categoria=$_POST['id_categoria'];
	 $id_seccion = $_POST['seccion'];

		include_once('../ModuloAdministrador/controles/ControlActualizarCategoria.php');
		$ObjControl = new ControlActualizarCategoria;
		$ObjControl -> MoverCategoriaAOtraSeccion($id_seccion, $privilegios, $id_categoria);	
}

else {

	//FormMensaje
	echo "acceso inadecuado<br>";
	echo "<a href='../'>volver</a>";
}
?>