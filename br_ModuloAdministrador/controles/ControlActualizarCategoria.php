<?php

include_once('../includes/FormMensaje.php');
class ControlActualizarCategoria extends FormMensaje
{
	function ActualizarCategoria($categoria, $privilegios,$id_categoria){

		$mensaje = "Mensaje: <br>";
			
			include_once('../Entidades/Categorias.php');
			$OBJEntidad = new Categorias;
			
			$pagina="IndexCategorias.php";
			$rs=$OBJEntidad -> ActivarActualizarCategoria($categoria, $id_categoria);

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

	function MoverCategoriaAOtraSeccion($id_seccion, $privilegios, $id_categoria){

			$mensaje = "Mensaje: <br>";
			
			include_once('../Entidades/Categorias.php');
			$OBJEntidad = new Categorias;
			
			$pagina="IndexCategorias.php";
			$rs=$OBJEntidad -> ActivarMoverCategoria($id_seccion, $id_categoria);

				 if ($rs==false) {
				 	$mensaje.="-> Hubo una dificultad en mover la categoría, comuníquelo al: <br/>Administrador: 991026416, o escriba a: direcciones@mmmperu.org";
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