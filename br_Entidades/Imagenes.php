<?php

/**
* 
*/
class Imagenes
{
	
	function Imagenes()
	{
		# code...
		include_once('../br_includes/Conexion.php');
		$OBJCn = new Conexion;
		$cn=$OBJCn -> ConectarBaseDatos();
	}

	function ObtenerListarImagenes(){

		//SELECT nombre, apellido FROM usuario WHERE nickname='mani' and clave='123' and estado='1'
		$consulta = "SELECT id_archivo, nombre, tamaño, fecha FROM imagenes order by E.fecha desc";
				
		$resultado = mysql_query($consulta);
		
		if ($resultado==true) {

		 $encontro = mysql_num_rows($resultado);
		
			if($encontro>0) return($resultado);
			elseif ($encontro==0) {
				return $encontro;
			}
			else "algo inesperado sucedio, volver al <a href='../index.php'>inicio</a>";	
		}
		
		else {		
			 return(false);
			}

	}

	function RegistrarImagen($nombre_imagen, $nombre_archivo, $tamano, $url, $id_usuario){

		$consulta = "INSERT INTO imagenes (nombre_imagen,nombre_archivo,tamano,url,fecha, id_usuario) 
								VALUES 	('$nombre_imagen','$nombre_archivo','$tamano','$url', now(),'$id_usuario')";

		$resultado= mysql_query($consulta);
		mysql_close();

			return $resultado;
							

	}
}

?>