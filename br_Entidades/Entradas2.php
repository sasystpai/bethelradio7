<?php

/**
* 
*/
include_once ('br_includes/Conexion.php');
class Entradas2 extends Conexion
{
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
		//mysql_free_result($programa);
	}

	function FechaActual(){

		date_default_timezone_set('America/Lima');
		$hora = gettimeofday(true);
		$h=date("Y-m-d", $hora);
		return $h;
	}

	function ObtenerUltimasEntradas(){

		$h = $this->FechaActual();

		$cn=$this->ConectarDB();

		$consulta = "SELECT E.titulo, E.titulo_id, E.redaccion, C.descripcion, E.id_imagen FROM entradas E, categoria C where E.estado='Publicado' and E.id_categoria=C.id_categoria and E.id_categoria<>'10' and E.fecha_publicacion<='$h' order by E.fecha desc";
		$resultado = mysql_query($consulta);

		if ($resultado==NULL) {
			//echo 1;
			return NULL;
		}

		else{
			//echo 12;
			//$entradas = mysql_fetch_array($resultado);
			$programa_actual=$this->ProgramaActual();
			
			$vector[0]=$resultado;
			$vector[1]=$programa_actual;
			return $vector;
		}

		mysql_close($cn,$vector);
		

	}//fin de function

	function ObtenerUltimasEntradas_por_categoria($titulo_id){

		$h = $this->FechaActual();


		$cn=$this->ConectarDB();
		$consulta = "SELECT E.titulo, E.titulo_id, E.id_categoria, E.id_imagen FROM entradas E where E.estado='Publicado' AND E.titulo_id<>'$titulo_id' and E.id_categoria<>'10' and E.fecha_publicacion<='$h' order by E.fecha desc ";
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

		mysql_close($cn,$resultado);
		//mysql_free_result($resultado);

	}//fin de function

	function ObtenerUltimasEntradas_por_produccion($titulo_id){

		$h = $this->FechaActual();

		$cn=$this->ConectarDB();

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

		mysql_close($cn,$resultado);
		//mysql_free_result($resultado);

	}//fin de function

	function ObtenerEntrada($titulo_id){


		$cn=$this->ConectarDB();

		$consulta = "SELECT C.descripcion, C.id_categoria,E.fecha_unix, E.titulo, E.titulo_id, E.redaccion, E.id_imagen, E.id_audio, E.id_entrada  FROM entradas E, categoria C where E.titulo_id='$titulo_id' and E.id_categoria=C.id_categoria";
		$resultado = mysql_query($consulta);

		if($resultado==null){
			return null;
		}
		else{
			$datos = mysql_fetch_array($resultado);

			//echo "--->".$datos['id_categoria'];

			$datosCategoria=$this->ObtenerDatosDeCategoria($datos['id_categoria']);
			//$entradasDeCategoriadif = $this-> 

				//$datosCategoria=mysql_fetch_array($datosCategoria);
			//$datosCategoria['id_categoria'];

			$programa_actual= $this -> ProgramaActual();
			
			$array[0]=$datos;
			$array[1]=$datosCategoria;
			$array[2]=$programa_actual;

			return $array;
		}

		mysql_close($cn,$array);
		//mysql_free_result($resultado);
	}


		function ObtenerProducciones_HoraDeLaTransformacion(){
		
		$h = $this->FechaActual();

		
		$cn=$this->ConectarDB();

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

		mysql_close($cn,$vector);
		//mysql_free_result($resultado);
	}

	function ObtenerProducciones_HoraDeLaTransformacion2($id_categoria){
		
		$h = $this->FechaActual();

		$cn=$this->ConectarDB();
		$consulta 		= "SELECT titulo, titulo_id, redaccion, id_categoria, id_imagen FROM entradas where estado='Publicado' and id_categoria='$id_categoria' and fecha_publicacion<='$h' order by fecha desc";
		$DatosDeEntrada = mysql_query($consulta);

		$consulta2 		 = "SELECT * FROM categoria WHERE id_categoria='$id_categoria'";
		$DatosDeCategoria= mysql_query($resultado2);


		// if ($resultado==NULL) {
		// 	//echo 1;
		// 	return NULL;
		// }

		//else{

			 $programa_actual=$this->ProgramaActual();
			
			 echo gettype($programa_actual);

			$vector[0]=$DatosDeEntrada;
			$vector[1]=$DatosDeCategoria;
			$vector[2]=$programa_actual;
			return $vector;
		//}

		mysql_close($cn,$vector);
		//mysql_free_result($resultado);
	}

	//////////////////////////////////

function ObtenerDatosDeProduccion_porCategoria($descripcion_id){

		$cn=$this->ConectarDB();

		$consulta = "SELECT * FROM categoria where descripcion_id='$descripcion_id'";
		$resultado=mysql_query($consulta);

		$datosCategoria = mysql_fetch_array($resultado);

		//echo $datosCategoria['id_categoria'];


		/////////////////
		$h = $this->FechaActual();

		$id_categoria=$datosCategoria['id_categoria'];

		$consulta2 	= "SELECT titulo, titulo_id, redaccion, id_categoria, id_imagen FROM entradas where estado='Publicado' and id_categoria='$id_categoria' and fecha_publicacion<='$h' order by fecha desc";
		$entradas_cat = mysql_query($consulta2);
		///////////////////

		$programa_actual = $this->ProgramaActual();
	
		 $datos[0]=$datosCategoria;
		 $datos[1]=$entradas_cat;
		 $datos[2]=$programa_actual;	

		 return $datos;

		 mysql_close($cn,$datos);

}

	function ObtenerEntradas_porCategoria($id_categoria){

		$consulta3="SELECT titulo, titulo_id, redaccion, id_categoria, id_imagen FROM entradas where estado='Publicado' and id_categoria='$id_categoria' and fecha_publicacion<='$h' order by fecha desc";
		$resultado = mysql_query($consulta3);
		return $resultado;	
	}

	function ObtenerDatosDeCategoria($id_categoria){

		$cn=$this->ConectarDB();	

		$consulta="SELECT * FROM categoria where id_categoria='$id_categoria'";
		$resultado=mysql_query($consulta);

		$result = mysql_fetch_array($resultado);
		return $result;

		$CerrarConexion($cn,$resultado);
	}

	function ObtenerEntradasDeCategoriaDifaEntrada($titulo_id){

		$consulta="SELECT * FROM entradas where titulo_id='$titulo_id'";
		$resultado=mysql_query($consulta);
		return $resultado;
	}




}//fin de class


?>
