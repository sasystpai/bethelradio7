<?php
session_start();
$privilegios = $_SESSION['privilegios'];
$id_usuario  = $_SESSION['id_usuario'];
if (isset($_REQUEST['actualizar']) && isset($privilegios) && !empty($_POST)) 
{
	$id_entrada=$_POST['id_entrada'];
	
	$titulo= $_POST['titulo'];
	$titulo= utf8_decode($titulo);

	$redaccion = $_POST['editor1'];
	$redaccion=htmlentities(($redaccion));	

	$tags  = $_POST['tags'];
	$tags=utf8_decode($tags);

	$cat = $_POST['categoria'];

	$error_img=$_FILES["archivo"]["error"][0];
	$error_audio=$_FILES["archivo"]["error"][1];

	$fecha_publicacion = $_POST['fecha_publicacion'];

	$existe_imagen	=1;
	$existe_audio	=1;
	if ($error_img>0 || $error_audio>0) {

			if ($error_img>0) {
				   switch ($error_img){
		                   
		                   case 4: // UPLOAD_ERR_NO_FILE
		                   $existe_imagen=0;
		          }
		      }

		    if($error_audio>0){
		    	switch ($error_audio) {
				    	
		                   case 4: // UPLOAD_ERR_NO_FILE
		                   $existe_audio=0;
		    	}	
			}
		}

		include_once('../ModuloAdministrador/controles/ControlActualizarEntrada.php');
		$ObjControl = new ControlActualizarEntrada;


		if ($existe_imagen==0 && $existe_audio==0) {
			$ObjControl -> ActualizarEntrada($titulo,$redaccion,$tags, $cat, $privilegios,$id_entrada,$fecha_publicacion,$id_usuario);	
		}

		elseif ($existe_imagen==1 && $existe_audio==0) {
			$ObjControl -> ActualizarEntrada_con_imagen($titulo,$redaccion,$tags, $cat, $error_img,$privilegios,$id_entrada,$fecha_publicacion,$id_usuario);
		}

		elseif ($existe_imagen==0 && $existe_audio==1) {
			$ObjControl -> ActualizarEntrada_con_audio($titulo,$redaccion,$tags, $cat, $error_audio,$privilegios,$id_entrada,$fecha_publicacion,$id_usuario);
		}

		elseif ($existe_imagen==1 && $existe_audio==1){
			$ObjControl -> ActualizarEntrada_con_imagen_y_audio($titulo,$redaccion,$tags, $cat, $error_img,$error_audio,$privilegios,$id_entrada,$fecha_publicacion,$id_usuario);
		}

		else echo "algo no se esperaba";

		
}//fin de if: si se presiono el botón 

else {

	//FormMensaje
	echo "acceso inadecuado<br>";
	echo "<a href='../'>volver</a>";
}
?>