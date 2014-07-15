<?php

include_once('../includes/FormMensaje.php');
class ControlActualizarPeticionDeOracion extends FormMensaje
{
	function ActualizarPeticionDeOracion($id_peticion,$nombre,$motivo,$peticion,$procedencia,$telefono,$email,$id_usuario,$privilegios){

		$pagina_volver="IndexNuevaEntrada.php";

		$mensaje = "Mensaje: <br>";
			
			include_once('../Entidades/PeticionDeOracion.php');
			$OBJEntidad = new PeticionDeOracion;
			
			//$rs=
			$pagina="IndexPeticionDeOracion.php";
			$rs=$OBJEntidad -> ActualizarPeticionDeOracion_por_id($id_peticion,$nombre,$motivo,$peticion,$procedencia,$telefono,$email,$id_usuario);

				 if ($rs==false) {
				 	$mensaje.="-> Hubo una dificultad en el registro de entrada, comuníquelo al: <br/>Administrador: 991026416, o escriba a: direcciones@mmmperu.org";
				 	$this ->MostrarMensaje_error($mensaje,$privilegios,$pagina);
				 	//echo "Hay una difucltad, llamar a Luis: 991026416, o escriba a: direcciones@mmmperu.org";
				 }

				 else{
				 	$mensaje.="-> Actualización satisfactoria.";
				 	$this ->MostrarMensaje_exito($mensaje,$privilegios,$pagina);
				 }
		//echo $procedencia;
		
	}

	function ActualizarEntrada_con_imagen($titulo,$redaccion,$tags, $categoria, $error_img,$privilegios,$id_entrada,$fecha_publicacion,$id_usuario){
		//echo "imagen";
			$pagina_volver="IndexNuevaEntrada.php";

			$mensaje = "Mensaje: <br>";

				if ($error_img>0) {
					# code...
					$this->ValidarErrorImagen($error_img);
				}
  
			
			else {
			//echo "Todo está bien<br>";

				$permitidos_img = array("image/jpg", "image/jpeg", "image/gif", "image/png");
				$limite_mb_img  = 2;

				$extension_imagen=	$_FILES['archivo']['type'][0];
				$tamano_imagen   =	$_FILES['archivo']['size'][0];

				if (in_array($extension_imagen, $permitidos_img) && $tamano_imagen <= $limite_mb_img*1024*1024)
				{
					if 	   ($extension_imagen=="image/jpg") 	$ext_img=".jpg";
					elseif ($extension_imagen=="image/jpeg") 	$ext_img=".jpg";
					elseif ($extension_imagen=="image/gif")		$ext_img=".gif";
					elseif ($extension_imagen=="image/png")		$ext_img=".png";
					else   ($ext_img = "error");
					
					$estado=0;

					while ( $estado==0) {
						# code...
						$id_img=rand(10000000,99999999);
					
						switch ($ext_img) {
						case '.jpg': $nombre_archivo_imagen = $id_img.$ext_img; break;
						case '.gif': $nombre_archivo_imagen = $id_img.$ext_img; break;
						case '.png': $nombre_archivo_imagen = $id_img.$ext_img; break;
						
						default:
							echo "error";
						}

					$nombre_imagen	= $_FILES['archivo']['name'][0];
					$ruta_img 		= "../imagenes/" . $nombre_archivo_imagen;

						if (!file_exists($ruta_img))
						{
							$lugar_temporal_img  =$_FILES["archivo"]["tmp_name"][0];

							$resultado_img 	= @move_uploaded_file($lugar_temporal_img, $ruta_img);

							if ($resultado_img)
							{	//formMensaje
								$mensaje.="-> Los archivos han sido subidos a servidor exitosamente.<br>";
								
								$url_img = "imagenes/".$nombre_archivo_imagen;

								include_once('../Entidades/Entradas.php');
								$OBJEntidad = new Entradas;
								
								$rs=$OBJEntidad -> ActualizarEntrada_IMG($titulo, $redaccion, $tags, $categoria, $url_img, $fecha_publicacion, $id_entrada);

									if ($rs==false) {
										$mensaje.="-> Hubo una dificultad en el registro de entrada, comuníquelo al: <br/>Administrador: 991026416, o escriba a: direcciones@mmmperu.org";
										$this ->MostrarMensaje_error($mensaje,$privilegios);
									}

									else{
										$pagina="IndexEntradas.php";
										$mensaje.="-> Registro satisfactorio.";
										$this ->MostrarMensaje_exito($mensaje,$privilegios,$pagina);
									}
							} 

							else {
								//formMensaje
								$mensaje.="-> Ocurrio un error al mover la imagen. Vuelva a intentar, si persiste al <br/>Administrador: 991026416, o escriba a: direcciones@mmmperu.org";
								$this ->MostrarMensaje_error($mensaje,$privilegios);
							}

							$estado++;
						}//fin de verificacion si existe un archivo con el mismo nombre

						else {//si es que ya existe un archivo con el mismo nombre
							if (!file_exists($ruta_img)) {
							$mensaje.=''.$nombre_imagen . "<br/>-> ya hay una imagen con el mismo nombre";	
							}
							//formMensaje
							$this -> MostrarMensaje_warning($mensaje,$privilegios);
						}//aqui debajo va el fin del while	

					}//fin de while

				}//fin de if q verifica extension de archivo y tamaño de archivo 

				else {
					//formMensaje
				$mensaje.="<br>Archivo no permitido, es tipo de archivo prohibido o excede el tamano límite";//en megabytes
				$this -> MostrarMensaje_error($mensaje,$privilegios);
				}
	}//fin de else
}//fin de función

	function ActualizarEntrada_con_audio($titulo,$redaccion,$tags, $categoria, $error_audio, $privilegios,$id_entrada,$fecha_publicacion,$id_usuario){
		//echo "audio";

			$pagina_volver="IndexNuevaEntrada.php";

			$mensaje = "Mensaje: <br>";

				if ($error_audio>0) {
					# code...
					$this->ValidarErrorAudio($error_audio);
				}
  
			
			else {
			//echo "Todo está bien<br>";

				$permitidos_audio = array("audio/mp3","audio/wma","audio/wap");

				$limite_mb_audio=100;

				$extension_audio =	$_FILES['archivo']['type'][1];
				$tamano_audio	 = 	$_FILES['archivo']['type'][1];


				if (in_array($extension_audio, $permitidos_audio) &&  $tamano_audio<=$limite_mb_audio*1024*1024 )
				{

					if 	   ($extension_audio=="audio/mp3") 		$ext_audio=".mp3";
					elseif ($extension_audio=="audio/wma") 		$ext_audio=".wma";
					elseif ($extension_audio=="audio/wap")		$ext_audio=".wap";
					else 	$ext_audio = "error";
					
					$estado=0;

					while ( $estado==0) {
						# code...
						$id_audio=rand(10000000,99999999);
					
						switch ($ext_audio) {
						case '.mp3': $nombre_archivo_audio = $id_audio.$ext_audio; break;
						case '.wma': $nombre_archivo_audio = $id_audio.$ext_audio; break;
						case '.wap': $nombre_archivo_audio = $id_audio.$ext_audio; break;
						
						default:
							echo "error";
						}

						$nombre_audio	= $_FILES['archivo']['name'][1];
						$ruta_audio		= "../audios/" . $nombre_archivo_audio;

						if (!file_exists($ruta_audio))
						{
							$lugar_temporal_audio=$_FILES['archivo']['tmp_name'][1];

							$resultado_audio= @move_uploaded_file($lugar_temporal_audio, $ruta_audio);

							if ($resultado_audio)
							{	//formMensaje
								$mensaje.="-> Los archivos han sido subidos a servidor exitosamente.<br>";
								
								$url_audio = "audios/".$nombre_archivo_audio;

								include_once('../Entidades/Entradas.php');
								$OBJEntidad = new Entradas;
								
								$rs=$OBJEntidad -> ActualizarEntrada_Audio($titulo, $redaccion, $tags, $categoria, $url_audio, $fecha_publicacion, $id_entrada);

									if ($rs==false) {
										$mensaje.="-> Hubo una dificultad en el registro de entrada, comuníquelo al: <br/>Administrador: 991026416, o escriba a: direcciones@mmmperu.org";
										$this ->MostrarMensaje_error($mensaje,$privilegios);
									}

									else{
										$pagina="IndexEntradas.php";
										$mensaje.="-> Registro satisfactorio.";
										$this ->MostrarMensaje_exito($mensaje,$privilegios,$pagina);
									}
							} 

							else {
								//formMensaje
								$mensaje.="-> Ocurrio un error al mover la imagen. Vuelva a intentar, si persiste al <br/>Administrador: 991026416, o escriba a: direcciones@mmmperu.org";
								$this ->MostrarMensaje_error($mensaje,$privilegios);
							}

							$estado++;
						}//fin de verificacion si existe un archivo con el mismo nombre

						else {//si es que ya existe un archivo con el mismo nombre
							if (!file_exists($ruta_img)) {
							$mensaje.=''.$nombre_imagen . "<br/>-> ya hay una imagen con el mismo nombre";	
							}
							//formMensaje
							$this -> MostrarMensaje_warning($mensaje,$privilegios);
						}//aqui debajo va el fin del while	

					}//fin de while

				}//fin de if q verifica extension de archivo y tamaño de archivo 

				else {
					//formMensaje
				$mensaje.="<br>Archivo no permitido, es tipo de archivo prohibido o excede el tamano límite";//en megabytes
				$this -> MostrarMensaje_error($mensaje,$privilegios);
				}
	}//fin de else
}//fin de funcion

	function ActualizarEntrada_con_imagen_y_audio($titulo,$redaccion,$tags, $categoria, $error_img, $error_audio,$privilegios,$id_entrada,$fecha_publicacion,$id_usuario){
		echo "imagen y audio, intente uno por uno, hasta que se implemente este tipo de actualizacion <a href='javascript:history.back(1)'>volver</a>";
	}

	function ValidarErrorImagen($error_img){


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

		                   default: 
						   $mensaje.= "-> Ha ocurrido un error al cargar la imagen, vuelva a intentarlo<br/>";
		          }
		      }

		      $this -> MostrarMensaje_error($mensaje,$privilegios,$pagina_volver);   
	}

	function ValidarErrorAudio($error_audio){

			if ($error_audio>0) {

				   switch ($error_audio){
		                   case 1: // UPLOAD_ERR_INI_SIZE
		                   //$mensaje="La imagen sobrepasa el limite autorizado por el servidor(archivo php.ini) !";
		                   $mensaje .="-> El audio sobrepasa el limite autorizado por el servidor.<br/>";
		                   break;
		                   case 2: // UPLOAD_ERR_FORM_SIZE
		                   $mensaje.= "-> El audio sobrepasa el limite autorizado en el formulario HTML.<br/>";
		                   break;
		                   case 3: // UPLOAD_ERR_PARTIAL
		                   $mensaje.= "-> El envío del audio ha sido suspendido durante la transferencia.<br/>";
		                   break;

		                   default: 
						   $mensaje.= "-> Ha ocurrido un error al cargar el audio, vuelva a intentarlo<br/>";
		          }
		      }

		      $this -> MostrarMensaje_error($mensaje,$privilegios,$pagina_volver);   
	}
}

?>