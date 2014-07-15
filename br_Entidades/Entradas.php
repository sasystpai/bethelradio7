<?php
include_once ('../br_includes/Conexion.php');
class Entradas extends Conexion
{

	
	function ObtenerEntradas()
	{   
		$cn = $this->ConectarDB();

		$consulta = "SELECT E.id_entrada, E.titulo, E.estado, C.descripcion FROM entradas E inner join categoria C on E.id_categoria=C.id_categoria order by E.fecha desc";
		$resultado = mysql_query($consulta);
		
		if ($resultado==true) {

		 $encontro = mysql_num_rows($resultado);
		
			if($encontro>0) return($resultado);
			elseif ($encontro==0) {
				return $encontro;
			}
			else echo "algo inesperado sucedio, volver al <a href='../index.php'>inicio</a>";	
		}
		
		else {		
			 return(false);
			}

			mysql_free_result($resultado);
				
	}
	
	function ObtenerPrivilegios($id_usuario)
	{   
		$cn = $this->ConectarDB();

		$consulta="SELECT * FROM operacion inner join usuario_operacion on operacion.id_operacion=usuario_operacion.id_operacion WHERE usuario_operacion.id_usuario='$id_usuario'";
		$resultado=mysql_query($consulta);
		if($resultado==false) echo"<br>123";
		else return($resultado);	

		mysql_free_result($resultado);

	}

	function ObtenerEntrada($cod){

		$cn = $this->ConectarDB();
		
		$consulta = "SELECT * from entradas where id_entrada='$cod'";
		$resultado = mysql_query($consulta);

		if($resultado==true){
			$datos=mysql_fetch_array($resultado);
			return $datos;
		}

		else return false;

		mysql_free_result($resultado);

	}

	//public function RegistrarNuevaEntrada($titulo, $redaccion, $tags, $id_audio, $id_img, $id_usuario)
	function RegistrarNuevaEntrada_con_imagen($titulo, $titulo_id, $redaccion, $tags, $url_img, $id_categoria,$fecha_publicacion, $id_usuario)
	{
		
		 //$consulta = "INSERT INTO entradas (titulo,redaccion,tags, fecha, id_categoria, id_audio,id_imagen, id_usuario) 
		 //		VALUES ('$titulo','$redaccion','$tags',now(),'3002','$id_audio','$id_img','$id_usuario')";
		date_default_timezone_set('America/Lima');
		$hora = gettimeofday(true);

		$cn = $this->ConectarDB();
		
		$consulta = "INSERT INTO entradas (titulo,titulo_id, redaccion, tags, fecha, fecha_unix, id_categoria,  id_imagen, id_usuario, fecha_publicacion, estado) 
								VALUES ('$titulo','$titulo_id','$redaccion','$tags',now(),'$hora',   '$id_categoria','$url_img','$id_usuario', '$fecha_publicacion', 'Publicado')";

		 $resultado = mysql_query($consulta);

		 if ($resultado==false) {
		 	# code...
			return false;
		 }
		 else return true;

		 mysql_free_result($resultado);

	}
	
	function RegistrarNuevaEntrada_con_audio($titulo, $titulo_id, $redaccion, $tags, $url_audio, $categoria, $fecha_publicacion, $id_usuario){

		date_default_timezone_set('America/Lima');
		$hora = gettimeofday(true);
		
		$cn = $this->ConectarDB();

		$consulta = "INSERT INTO entradas (titulo,titulo_id, redaccion,     tags, fecha, fecha_unix, id_categoria,  id_audio, id_usuario, fecha_publicacion, estado) 
								VALUES ('$titulo','$titulo_id','$redaccion','$tags',now(),'$hora',   '$categoria','$url_audio','$id_usuario', '$fecha_publicacion','Publicado')";

		 $resultado = mysql_query($consulta);

		 if ($resultado==false) {
		 	# code...
			return false;
		 }
		 else return true;

		 mysql_free_result($resultado);

	}

	function RegistrarNuevaEntrada_con_imagen_y_audio($titulo, $titulo_id, $redaccion, $tags, $url_img, $url_audio, $categoria,$fecha_publicacion, $id_usuario)
					//RegistrarNuevaEntrada_con_imagen_y_audio($titulo, $titulo_id, $redaccion, $tags, $url_img, $url_audio, $categoria, $id_usuario)
	{
		
		 //$consulta = "INSERT INTO entradas (titulo,redaccion,tags, fecha, id_categoria, id_audio,id_imagen, id_usuario) 
		 //		VALUES ('$titulo','$redaccion','$tags',now(),'3002','$id_audio','$id_img','$id_usuario')";
		date_default_timezone_set('America/Lima');
		$hora = gettimeofday(true);
		
		$cn = $this->ConectarDB();

		$consulta = "INSERT INTO entradas (titulo, titulo_id, redaccion,tags, fecha, fecha_unix, id_categoria, id_imagen, id_audio, id_usuario, fecha_publicacion, estado) 
		VALUES ('$titulo','$titulo_id','$redaccion','$tags',now(),'$hora','$categoria','$url_img', '$url_audio', '$id_usuario', '$fecha_publicacion', 'Publicado')";

		 $resultado = mysql_query($consulta);

		 if ($resultado==false) {
		 	# code...
			return false;
		 }
		 else return true;

		 mysql_free_result($resultado);

	}


	function ObtenerUltimasEntradas(){

		$cn = $this->ConectarDB();

		$consulta = "SELECT id_entrada, titulo, redaccion, id_categoria, id_imagen FROM entradas order by fecha desc LIMIT 8";
		$resultado = mysql_query($consulta);

		if ($resultado==NULL) {
			return null;echo 1;
		}

		else{
			return $resultado;echo 12;
		}

		mysql_free_result($resultado);

	}

	function RegistrarImagen($nombre_imagen, $nombre_archivo, $tamano, $url, $id_usuario){

		$cn = $this->ConectarDB();

		$consulta = "INSERT INTO imagenes (nombre_imagen,nombre_archivo,tamano,url,fecha, id_usuario) 
								VALUES 	('$nombre_imagen','$nombre_archivo','$tamano','$url', now(),'$id_usuario')";

		$resultado= mysql_query($consulta);
		mysql_close();

			return $resultado;
	
		mysql_free_result($resultado);						

	}

	function RegistrarAudio($nombre_audio, $nombre_archivo, $tamano, $url, $id_usuario){

		$cn = $this->ConectarDB();

		$consulta = "INSERT INTO audios (nombre_audio,nombre_archivo,tamano,url,fecha, id_usuario) 
								VALUES 	('$nombre_audio','$nombre_archivo','$tamano','$url', now(),'$id_usuario')";

		$resultado= mysql_query($consulta);

			return $resultado;
							

		mysql_free_result($resultado);	
	}

	function PublicarEntrada($id){

		$cn = $this->ConectarDB();

		$consulta = "UPDATE entradas SET estado='Publicado' WHERE id_entrada=$id";
		$resultado = mysql_query($consulta);

		return $resultado;

		mysql_free_result($resultado);
	}

	function DesPublicarEntrada($id){

		$cn = $this->ConectarDB();

		$consulta = "UPDATE entradas SET estado='No publicado' WHERE id_entrada=$id";
		$resultado = mysql_query($consulta);

		return $resultado;

		mysql_free_result($resultado);
	}

	function EliminarEntrada($id){

		//echo 123456789;
		$cn = $this->ConectarDB();
		
		$consulta="DELETE FROM entradas WHERE id_entrada=$id";
		$resultado=mysql_query($consulta);

		return $resultado;

		mysql_free_result($resultado);

	}

	function ActualizarEntrada_por_id($titulo, $redaccion, $tags, $categoria, $fecha_publicacion, $id_entrada){

		$cn = $this->ConectarDB();

		$consulta = "UPDATE entradas SET titulo='$titulo', redaccion='$redaccion', tags='$tags', id_categoria='$categoria', fecha_publicacion='$fecha_publicacion' WHERE id_entrada=$id_entrada";
		$resultado= mysql_query($consulta);

	 	return TRUE;
	 	//if($resultado==true)echo 1;
	 	//else echo 0;

	 	//echo "<br/>".$resultado."<br>".gettype($resultado);

	 	mysql_free_result($resultado);

	}

	 function ActualizarEntrada_IMG($titulo, $redaccion, $tags, $categoria, $url_img, $id_entrada){

	 	$cn = $this->ConectarDB();

		$consulta = "UPDATE entradas SET titulo='$titulo', redaccion='$redaccion', tags='$tags', id_categoria='$categoria', id_imagen='$url_img', fecha_publicacion='$fecha_publicacion' WHERE id_entrada=$id_entrada";
		$resultado= mysql_query($consulta);

		return $resultado;

		mysql_free_result($resultado);
	}

	function ActualizarEntrada_Audio($titulo, $redaccion, $tags, $categoria, $url_audio, $id_entrada){

		$cn = $this->ConectarDB();

		$consulta = "UPDATE entradas SET titulo='$titulo', redaccion='$redaccion', tags='$tags', id_categoria='$categoria', id_audio='$url_audio', fecha_publicacion='$fecha_publicacion' WHERE id_entrada=$id_entrada";
		$resultado = mysql_query($consulta);
		
		return $resultado;
		
		mysql_free_result($resultado);

	}

	function ObtenerCategorias(){

		$cn = $this->ConectarDB();

		$consulta  ="SELECT S.descripcion as descripcion_seccion, C.descripcion as descripcion_categoria, C.id_categoria FROM seccion S INNER JOIN categoria C ON S.id_seccion=C.id_seccion where C.estado=1";
		$resultado = mysql_query($consulta);

		$categorias = array();
			while ($row_model = mysql_fetch_assoc($resultado))
			{
			$categorias[$row_model['descripcion_seccion']][] = $row_model;
			}

		//if($resultado==true) echo 1;
		//else echo 0;

		return $categorias;

		mysql_free_result($resultado);
	}

}//fin de class

?>