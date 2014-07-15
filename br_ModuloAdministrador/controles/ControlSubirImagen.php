<?php

/**
* 
*/
include_once('../includes/FormMensaje.php');
class ControlSubirImagen extends FormMensaje
{
	
	function __construct()
	{
		# code...

	}

	function VerControlSubirImagen(){

		$privilegios=$_SESSION['privilegios'];

		include_once('../ModuloAdministrador/vistas/FormularioSubirImagen.php');
           $OBJNewEntradas = new FormularioSubirImagen;
           $OBJNewEntradas -> MostrarFormularioSubirImagen($privilegios);


	}

	function RegistrarImagen($privilegios,$id_usuario){

		$pagina_volver="IndexSubirImagen.php";

		$error_img=$_FILES["archivo"]["error"];

		$mensaje = "Mensaje: <br>";
		
			if ($error_img>0) {

				   switch ($error_img){
		                   case 1: // UPLOAD_ERR_INI_SIZE
		                   //$mensaje="La imagen sobrepasa el limite autorizado por el servidor(archivo php.ini) !";
		                   $mensaje .="-> La imagen sobrepasa el limite autorizado por el servidor.<br/>";
		                   break;
		                   case 2: // UPLOAD_ERR_FORM_SIZE
		                   $mensaje.= "-> La imagen sobrepasa el limite autorizado en el formulario HTML.<br/>";
		                   break;
		                   case 3: // UPLOAD_ERR_PARTIAL
		                   $mensaje.= "-> El envío de la imagen ha sido suspendido durante la transferencia.<br/>";
		                   break;
		                   case 4: // UPLOAD_ERR_NO_FILE
		                   $mensaje.= "-> La imagen que ha enviado tiene un tamaño nulo.<br/>";
		                   break;

		                   default: 
						   $mensaje.= "-> Ha ocurrido un error al cargar la imagen, vuelva a intentarlo<br/>";
		          }//fin de switch
				//form mensaje
				$this -> MostrarMensaje_error($mensaje,$privilegios,$pagina_volver);
			}//fin de if	      
	
	else {
	//echo "Todo está bien<br>";

		$permitidos_img = array("image/jpg", "image/jpeg", "image/gif", "image/png");
		

		$limite_mb_img = 2;//en mb

		$extension_imagen=	$_FILES['archivo']['type'];
		//echo "<br/>".gettype($extension_imagen);
		$tamano_archivo   =	$_FILES['archivo']['size'];

		if (in_array($extension_imagen, $permitidos_img)  && $tamano_archivo <= $limite_mb_img * 1024 * 1024)
		{///////////////////// IF DE EXTENSION y tamaño

			if 	   ($extension_imagen=="image/jpg") 	$ext=".jpg";
			elseif ($extension_imagen=="image/jpeg") 	$ext=".jpg";
			elseif ($extension_imagen=="image/gif")		$ext=".gif";
			elseif ($extension_imagen=="image/png")		$ext=".png";
			else 	$ext = "error";
			


			$estado=0;
			while($estado==0){

				$id=rand(10000000,99999999);
			
				switch ($ext) {
				case '.jpg': $nombre_archivo = $id.$ext; break;
				case '.gif': $nombre_archivo = $id.$ext; break;
				case '.png': $nombre_archivo = $id.$ext; break;
				
				default:
					echo "error";
				}

			$nombre_imagen	= $_FILES['archivo']['name'];
			$ruta_archivo 		= "../imagenes/" . $nombre_archivo;

				if(!file_exists($ruta_archivo))
				{

					$lugar_temporal_img  =$_FILES["archivo"]["tmp_name"];

					$resultado_img 	= @move_uploaded_file($lugar_temporal_img, $ruta_archivo);
					
					if ($resultado_img){  ///////////////////////////////////////////////////
						//formMensaje
						$mensaje.="-> Archivo subido a Galería exitosamente.<br>";
						
						$url_img = "imagenes/".$nombre_imagen;

						include_once('../Entidades/Imagenes.php');
						$OBJEntidad = new Imagenes;
						$rs=$OBJEntidad -> RegistrarImagen($nombre_imagen, $nombre_archivo,($tamano_archivo/(1024*1024)),$ruta_archivo,$id_usuario);

							if ($rs==false) {
								$mensaje.="-> Hubo una dificultad en el registro de entrada, comuníquelo al: <br/>Administrador: 991026416, o escriba a: direcciones@mmmperu.org";
								$this ->MostrarMensaje_warning($mensaje,$privilegios,$pagina_volver);
								//echo "Hay una difucltad, llamar a Luis: 991026416, o escriba a: direcciones@mmmperu.org";
							}

							else{
								$mensaje.="-> Registro satisfactorio.";
								$pagina = "IndexEntradas.php";
								$this ->MostrarMensaje_exito($mensaje,$privilegios,$pagina);
							}

											} ////////////////////////////////////////////
					else {
						//formMensaje
						
							$mensaje.="-> Ocurrio un error al mover el archivo. Vuelva a intentar, si persiste al <br/>Administrador: 991026416, o escriba a: direcciones@mmmperu.org";
							$this ->MostrarMensaje_error($mensaje,$privilegios,$pagina_volver);
						}

					$estado++;

				}			

				//else {		///////////////////////////	 ---------------------------------->>>>>>>>>>>>>>>>>>

					
				//	}//fin de verificacion si existe un archivo con el mismo nombre ---------------------------------->>>>>>>>>>>>>>>>>>

				}//fin de while

			}//fin de if q verifica extension de archivo y tamaño de archivo 

			else {
				//formMensaje
			$mensaje.="<br>Archivo no permitido, es tipo de archivo prohibido o excede el tamano límite";//en megabytes
			$this -> MostrarMensaje_error($mensaje,$privilegios,$pagina_volver);
			}
		}//fin de else: si error no es mayor que 0
		//$mensaje="<a href='javascript:history.back(1)'>volver</a>";


	}//fin de funcion

}//fin de class

?>