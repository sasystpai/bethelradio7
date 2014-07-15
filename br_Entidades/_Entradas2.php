<?php

/**
* 
*/
class Entradas2
{
	
	function __construct()
	{
		include 'includes/Conexion.php';
		$conn=new Conexion;
		$conn->ConectarBaseDatos();
	}

	public function ObtenerUltimasEntradas(){
		$consulta = "SELECT titulo, titulo_id, redaccion, id_categoria, id_imagen FROM entradas where estado='Publicado' order by fecha desc";

		$resultado = mysql_query($consulta);

		if ($resultado==NULL) {
			//echo 1;
			return NULL;
		}

		else{
			//echo 12;
			//$entradas = mysql_fetch_array($resultado);
			return $resultado;
		}

	}//fin de function


	public function ObtenerEntrada($id_entrada){
		$consulta = "SELECT * FROM entradas where titulo_id='$id_entrada'";

		$resultado = mysql_query($consulta);

		if($resultado==null){
			return null;
		}
		else{
			$datos = mysql_fetch_array($resultado);

			return $datos;
		}
	}
}//fin de class


?>
