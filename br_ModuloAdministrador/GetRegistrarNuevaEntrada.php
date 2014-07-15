<?php
session_start();
$privilegios = $_SESSION['privilegios'];
$id_usuario  = $_SESSION['id_usuario'];
if (isset($_REQUEST['registrar']) && isset($privilegios) && !empty($_POST)) 
{

	$titulo= $_POST['titulo'];
	$titulo= utf8_decode($titulo);

	$redaccion = $_POST['editor1'];
	$redaccion=htmlentities(($redaccion));	

	$tags  = $_POST['tags'];
	$tags=utf8_decode($tags);

	$cat = $_POST['categoria'];

	$error_img=$_FILES["archivo"]["error"][0];
	$error_audio=$_FILES["archivo"]["error"][1];

	$fecha_publicacion=$_POST['fecha_publicacion'];

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

		//include_once('../ModuloAdministrador/controles/ControlActualizarEntrada.php');
		//$ObjControl = new ControlActualizarEntrada;

		include_once('../ModuloAdministrador/controles/ControlRegistrarNuevaEntrada.php');
		$ObjControl = new ControlRegistrarNuevaEntrada;

		if($existe_imagen==0 && $existe_audio==0) echo "sin imagen y sin audio <a href='javascript:history.back(1)'>atras</a>";

		elseif ($existe_imagen==0 && $existe_audio==1){
			$ObjControl -> ControlRegistrarNuevaEntrada_con_audio($titulo,$redaccion,$tags, $cat,$error_audio,$privilegios, $fecha_publicacion ,$id_usuario);
		
		}

		elseif($existe_imagen==1 && $existe_audio==0){	
		$ObjControl -> ControlRegistrarNuevaEntrada_con_imagen($titulo,$redaccion,$tags,$cat, $error_img, $privilegios, $fecha_publicacion ,$id_usuario);
		}

		elseif ($existe_imagen==1 && $existe_audio==1){
			$ObjControl -> ControlRegistrarNuevaEntrada_con_imagen_y_audio($titulo,$redaccion,$tags, $cat,$error_img,$error_audio,$privilegios, $fecha_publicacion ,$id_usuario);

		}


		else echo "algo no se esperaba";
	
}//fin de if: si se presiono el botón 

else {

	//FormMensaje
	echo "acceso inadecuado<br>";
	echo "<a href='../'>volver</a>";
}
?>