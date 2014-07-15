<?php
include_once('../includes/FormMensaje.php');
class ControlRegistrarNuevaSeccion extends FormMensaje
{

	function VerControlRegistrarNuevaSeccion($seccion, $privilegios){
		//echo "imagen";
			
			$mensaje = "Mensaje: <br>";

				include_once('../Entidades/Secciones.php');
				$OBJEntidad = new Secciones;
				$rs=$OBJEntidad -> RegistrarNuevaSeccion($seccion);

					if ($rs==false) {
						$mensaje.="-> Hubo una dificultad en el registro de entrada, comuníquelo al: <br/>Administrador: 991026416, o escriba a: direcciones@mmmperu.org";
						$this ->MostrarMensaje_error($mensaje,$privilegios);
					}

					else{

						//header('Location: ../ModuloAdministrador/IndexSecciones.php');

						$pagina="IndexSecciones.php";
						$mensaje.="-> Registro satisfactorio.";
						$this ->MostrarMensaje_exito($mensaje,$privilegios,$pagina);
					}
						
}
}//fin de class
?>