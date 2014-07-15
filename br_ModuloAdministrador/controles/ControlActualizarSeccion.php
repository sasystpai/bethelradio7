<?php

include_once('../includes/FormMensaje.php');
class ControlActualizarSeccion extends FormMensaje
{
	function ActualizarSeccion($seccion, $privilegios,$id_seccion){

		$mensaje = "Mensaje: <br>";
			
						include_once('../Entidades/Secciones.php');
						$OBJEntidad = new Secciones;
						
						//$rs=
						$pagina="IndexSecciones.php";
						$rs=$OBJEntidad -> ActivarActualizarSeccion($seccion, $id_seccion);

							 if ($rs==false) {
							 	$mensaje.="-> Hubo una dificultad en el registro de entrada, comuníquelo al: <br/>Administrador: 991026416, o escriba a: direcciones@mmmperu.org";
							 	$this ->MostrarMensaje_error($mensaje,$privilegios,$pagina);
							 	//echo "Hay una difucltad, llamar a Luis: 991026416, o escriba a: direcciones@mmmperu.org";
							 }

							 else{
							 	//header("location: ../")
							 	//header('Location: ../ModuloAdministrador/IndexSecciones.php');
							 	$mensaje.="-> Actualización satisfactoria.";
							 	$this ->MostrarMensaje_exito($mensaje,$privilegios,$pagina);
							 }
	   
	}
}

?>