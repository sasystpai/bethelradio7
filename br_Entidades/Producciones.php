<?php

/**
* 
*/
include_once('br_includes/conexion.php');
class Producciones extends Conexion
{

	function ProgramaActual(){

		date_default_timezone_set('America/Lima');
		$hora = gettimeofday(true);
		
		$h=date("Y-m-d\ H:i:s", $hora);
		// echo $hora;
		// $hora = ($hora-'7200');
		// echo "<br/>".$hora;
		
		$cn = $this-> ConectarDB();

		$consulta = "SELECT programa FROM programacion WHERE fin>='$h'  Limit 1";
		$programa = mysql_query($consulta);

		//$programa= mysql_fetch_array(0);
		while($r=mysql_fetch_array($programa)){
			return $r['programa'];
		}
		//echo "estamos transmitiedo: ".$r['programa'];

		$this-> CerrarConexion($cn,$programa);
		//mysql_free_result($programa);
	}

	function FechaActual(){

		date_default_timezone_set('America/Lima');
		$hora = gettimeofday(true);
		$h=date("Y-m-d", $hora);
		return $h;
	}


	function ObtenerProducciones_HoraDeLaTransformacion(){

		$h = $this->FechaActual();

		$cn = $this-> ConectarDB();
		
		$consulta = "SELECT titulo, titulo_id, redaccion, id_categoria, id_imagen FROM entradas where estado='Publicado' and id_categoria='10' and fecha_publicacion<='$h' order by fecha desc";
		$resultado = mysql_query($consulta);

		if ($resultado==NULL) {
			//echo 1;
			return NULL;
		}

		else{
			$programa_actual=$this->ProgramaActual();
			
			$vector[0]=$resultado;
			$vector[1]=$programa_actual;
			return $vector;
		}

		$this-> CerrarConexion($cn,$resultado);
		//mysql_free_result($resultado);
	}


	function ObtenerEntrada($id_entrada){

		$cn = $this-> ConectarDB();

		$consulta = "SELECT * FROM entradas where titulo_id='$id_entrada'";
		$resultado = mysql_query($consulta);

		if($resultado==null){
			return null;
		}
		else{
			$datos = mysql_fetch_array($resultado);
			$programa_actual= $this -> ProgramaActual();
			
			$array[0]=$datos;
			$array[1]=$programa_actual;

			return $array;
		}

		$this-> CerrarConexion($cn,$resultado);
		//mysql_free_result($resultado);
	}

	function ObtenerUltimasEntradas_por_produccion($titulo_id){


		$h = $this->FechaActual();

		$cn = $this-> ConectarDB();

		$consulta = "SELECT titulo, titulo_id, id_categoria FROM entradas where estado='Publicado' AND titulo_id<>'$titulo_id' and id_categoria='10' and fecha_publicacion<='$h' order by fecha desc ";
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

		$this-> CerrarConexion($cn,$resultado);
		//mysql_free_result($resultado);
		
	}//fin de function

}

?>