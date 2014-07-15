<?php

/**
* 
*/

include_once('../br_includes/Conexion.php');
class Frecuencias extends Conexion
{
	

	function ObtenerFrecuencias($id){

		$cn= $this->ConectarDB();

		$consulta="SELECT departamento, provincia, lugar, banda, frecuencias FROM frecuencias WHERE idDepartamento = '".$id."'";
		$resultado = mysql_query($consulta);
		
		return $resultado;

		$this->CerrarConexion($cn,$resultado);

		//mysql_free_result($resultado);

	}

	function ListarDepartamentos(){

			$cn= $this->ConectarDB();

		$consulta="SELECT idDepartamento, departamento from frecuencias group by departamento";
  		$departamentos=mysql_query($consulta);

  		//$departamentos=mysql_fetch_array($resultado);

  		return $departamentos;

  		$this->CerrarConexion($cn,$departamentos);

  		//mysql_free_result($departamentos);

  		//while($row=mysql_fetch_array($resultado)){
  		//	echo utf8_encode($row['departamento'])."<br/>";
  		//}

	}
}

?>