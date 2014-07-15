<?php

/**
* 
*/
include_once('../br_includes/Conexion.php');
class Secciones extends Conexion
{
	
	function ObtenerSecciones(){

		$cn = $this->ConectarDB();

		$consulta = "SELECT * FROM seccion";
		$secciones = mysql_query($consulta);

		return $secciones;

		$this-> CerrarConexion($cn,$secciones);
		//mysql_free_result($secciones);
	}

	function ObtenerSeccionesparaCategorias(){

		$cn = $this->ConectarDB();

		$consulta = "SELECT * FROM seccion where estado=1";
		$secciones = mysql_query($consulta);

		return $secciones;

		$this-> CerrarConexion($cn,$secciones);

		//mysql_free_result($secciones);
	}

	function ObtenerSeccion($cod){
		//echo "-->".$cod."<--";

		$cn = $this->ConectarDB();

		$consulta = "SELECT * from seccion where id_seccion='$cod'";

		$resultado = mysql_query($consulta);

		if($resultado==true){
			$datos=mysql_fetch_array($resultado);
			return $datos;
		}

		else return false;

		$this-> CerrarConexion($cn,$resultado);
		//mysql_free_result($resultado);
	}

	function ActivarActualizarSeccion($seccion, $id_seccion){

		$cn = $this->ConectarDB();

		$consulta = "UPDATE seccion SET descripcion='$seccion' WHERE id_seccion='$id_seccion'";
		$resultado= mysql_query($consulta);

	 	return TRUE;

	 	$this-> CerrarConexion($cn,$resultado);
	 	//mysql_free_result($resultado);

	}

	function ActivarHabilitarSeccion($id){

		$cn = $this->ConectarDB();

		$consulta = "UPDATE seccion SET estado=1 WHERE id_seccion=$id";
		$resultado = mysql_query($consulta);

		return $resultado;


		$this-> CerrarConexion($cn,$resultado);
		//mysql_free_result($resultado);
	}


	function RegistrarNuevaSeccion($seccion){

		$cn = $this->ConectarDB();
		
		$consulta = "INSERT INTO seccion (descripcion) values ('$seccion')";	
		$resultado = mysql_query($consulta);

		return $resultado;

		$this-> CerrarConexion($cn,$resultado);

		//mysql_free_result($resultado);

	}


	function ActivarDesHabilitarSeccion($id){

		$cn = $this->ConectarDB();

		$consulta = "UPDATE seccion SET estado=0 WHERE id_seccion=$id";
		$resultado = mysql_query($consulta);

		return $resultado;

		$this-> CerrarConexion($cn,$resultado);

		//mysql_free_result($resultado);

	}

	public function EliminarSeccion($id){

		$cn = $this->ConectarDB();
		
		$consulta="DELETE FROM seccion WHERE id_seccion=$id";
		$resultado=mysql_query($consulta);

		return $resultado;

		$this-> CerrarConexion($cn,$resultado);

		//mysql_free_result($resultado);

	}
}

?>