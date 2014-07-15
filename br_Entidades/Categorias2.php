<?php

/**
* 
*/
include_once('br_includes/Conexion.php');
class Categorias2 extends Conexion {
	
	function ObtenerDatosDeCategoria($programa)
	{
		
		$cn = $this->ConectarDB();

		$consulta = "SELECT * FROM categoria where descripcion_id='$programa'";
		$resultado=mysql_query($consulta);

		$datosCategoria = mysql_fetch_array($resultado);
		
		$programa_actual = $this->ProgramaActual();
	
		$datos[0]=$datosCategoria;
		$datos[1]=$programa_actual;	
		
		return $datos;

		$this->CerrarConexion($cn,$datos);

	}

	function ProgramaActual(){
		date_default_timezone_set('America/Lima');
		$hora = gettimeofday(true);
		
		$h=date("Y-m-d\ H:i:s", $hora);
		// echo $hora;
		// $hora = ($hora-'7200');
		// echo "<br/>".$hora;
		
		$cn=$this->ConectarDB();

		$consulta = "SELECT programa FROM programacion WHERE fin>='$h'  Limit 1";
		$programa = mysql_query($consulta);

		//$programa= mysql_fetch_array(0);
		while($r=mysql_fetch_array($programa)){
			return $r['programa'];
		}
		$this->CerrarConexion($cn,$programa);
		//echo "estamos transmitiedo: ".$r['programa'];
		

	}

		function ObtenerCategorias(){

		$cn = $this->ConectarDB();

		$consulta  ="SELECT S.descripcion as descripcion_seccion, C.descripcion as descripcion_categoria, C.descripcion_id, C.id_categoria, C.logo FROM seccion S INNER JOIN categoria C ON S.id_seccion=C.id_seccion where C.estado=1";
		$resultado = mysql_query($consulta);

		$categorias = array();
			while ($row_model = mysql_fetch_assoc($resultado))
			{
			$categorias[$row_model['descripcion_seccion']][] = $row_model;
			}

		$programa_actual = $this->ProgramaActual();
	
		$datos[0]=$categorias;
		$datos[1]=$programa_actual;	
		return $datos;

		$this->CerrarConexion($cn,$resultado);
		//mysql_free_result($resultado);
	}
}

?>