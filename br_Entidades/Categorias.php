<?php
/**
* 
*/
include_once ('../br_includes/Conexion.php');
class Categorias extends Conexion
{
	

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

		$this->CerrarConexion($cn,$resultado);
		//mysql_free_result($resultado);
	}

	function _ObtenerCategoriasporSeccion($id){

	$cn = $this->ConectarDB();

	$consulta= "SELECT * from categoria where id_seccion='$id'";
	$resultado = mysql_query($consulta);

	return $resultado;

	$this->CerrarConexion($cn,$resultado);
	mysql_free_result();

	}

	function ObtenerCategoriasconSeccion(){

		$cn = $this->ConectarDB();

		$consulta= "SELECT C.id_seccion, S.descripcion as descripcion_seccion, S.estado as estado_sec, C.descripcion as descripcion_categoria, C.estado as estado_cat, C.id_categoria FROM seccion S INNER JOIN categoria C ON S.id_seccion=C.id_seccion";
		$categorias = mysql_query($consulta);

		if ($categorias==true) {

		 $encontro = mysql_num_rows($categorias);
		
			if($encontro>0) return($categorias);
			elseif ($encontro==0) {
				return $encontro;
			}
			else echo "algo inesperado sucedio, volver al <a href='../index.php'>inicio</a>";	
		}
		
		else {		
			 return(false);
			}


			$this->CerrarConexion($cn);
			mysql_free_result($resultado);
	}

	function ActivarHabilitarCategoria($id){

		$cn = $this->ConectarDB();

		$consulta = "UPDATE categoria SET estado=1 WHERE id_categoria=$id";
		$resultado = mysql_query($consulta);

		return $resultado;

		$this->CerrarConexion($cn);
		mysql_free_result($resultado);
	}

	function ObtenerCategoria($id){

		$cn = $this->ConectarDB();

		$consulta = "SELECT * from categoria where id_categoria='$id'";

		$resultado = mysql_query($consulta);

		if($resultado==true){

			$secciones = $this->ObtenerSecciones();

			$datos=mysql_fetch_array($resultado);
			
			$vector[0]=$datos;
			$vector[1]=$secciones;

			return $vector;
		}

		else return false;

		$this->CerrarConexion($cn);
		mysql_free_result($resultado);

	}

	function ActivarActualizarCategoria($categoria, $id_categoria){

		$cn = $this->ConectarDB();

		$consulta = "UPDATE categoria SET descripcion='$categoria' WHERE id_categoria='$id_categoria'";
		$resultado= mysql_query($consulta);

	 	return TRUE;

	 	$this->CerrarConexion($cn);
	 	mysql_free_result($resultado);

	}

	function ActivarDesHabilitarCategoria($id){

		$cn = $this->ConectarDB();

		$consulta = "UPDATE categoria SET estado=0 WHERE id_categoria=$id";
		$resultado = mysql_query($consulta);

		return $resultado;

		$this->CerrarConexion($cn);
		mysql_free_result($resultado);

	}

	function RegistrarNuevaCategoria($datosCategoria){

		$descripcion 	=	$datosCategoria['descripcion'];
		$descripcion_id = 	$datosCategoria['descripcion_id'];
		$id_seccion		= 	$datosCategoria['seccion'];
		$sinopsis		= 	$datosCategoria['sinopsis'];
		$horario		= 	$datosCategoria['horario'];
		$color			=	$datosCategoria['color'];
		$banner			= 	$datosCategoria['banner'];

		$cn = $this->ConectarDB();

		$consulta = "INSERT INTO categoria (descripcion, descripcion_id, id_seccion, sinopsis,horario,color,banner) 
			values 			('$descripcion','$descripcion_id','$id_seccion','$sinopsis','$horario','$color','$banner')";	
		$resultado = mysql_query($consulta);

		return $resultado;

		$this->CerrarConexion($cn);
		mysql_free_result($resultado);

	}

	public function EliminarCategoria($id){
		
		$cn = $this->ConectarDB();
		
		$consulta="DELETE FROM categoria WHERE id_categoria=$id";
		$resultado=mysql_query($consulta);

		return $resultado;

		$this->CerrarConexion($cn);
		mysql_free_result($resultado);

	}

		function ObtenerSecciones(){

		$consulta = "SELECT * FROM seccion";
		$secciones = mysql_query($consulta);

		return $secciones;

		$this->CerrarConexion($cn);
		mysql_free_result($secciones);
	}

		function ActivarMoverCategoria($id_seccion, $id_categoria){

			$consulta = "UPDATE categoria set id_seccion='$id_seccion' WHERE id_categoria='$id_categoria'";
			$resultado = mysql_query($consulta);

			return $resultado;

			$this->CerrarConexion($cn);
			mysql_free_result($resultado);
		}

}


?>