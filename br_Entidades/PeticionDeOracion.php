<?php
include_once ('../br_includes/Conexion.php');
class PeticionDeOracion extends Conexion
{
	
	function ObtenerPeticionesDeOracion()
	{   
		$cn = $this->ConectarDB();

		$consulta = "SELECT P.id_peticion, P.nombre, P.motivo, P.peticion, P.estado FROM peticionoracion P";
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

			$this->CerrarConexion($cn,$resultado);
			//mysql_free_result($resultado);
		
				
	}
	
	function ObtenerPrivilegios($id_usuario)
	{   //echo $id_usuario;

		$cn = $this->ConectarDB();

//SELECT * FROM tab_privilegio inner join tab_detalle_priv on tab_privilegio.id_privilegio=tab_detalle_priv.id_privilegio WHERE tab_detalle_priv.id_usuario=$id_usuario
		$consulta="SELECT * FROM operacion inner join usuario_operacion on operacion.id_operacion=usuario_operacion.id_operacion WHERE usuario_operacion.id_usuario='$id_usuario'";
		$resultado=mysql_query($consulta);
		if($resultado==false) echo"<br>123";
		else return($resultado);	

		$this->CerrarConexion($cn,$resultado);
		//mysql_free_result($resultado);

	}

	function ObtenerPeticion($cod){

		$cn = $this->ConectarDB();

		//echo "-->".$cod."<--";
		$consulta = "SELECT * from peticionoracion where id_peticion='$cod'";

		$resultado = mysql_query($consulta);

		if($resultado==true){
			$datos=mysql_fetch_array($resultado);
			return $datos;
		}

		else return false;

		$this->CerrarConexion($cn,$resultado);
		//mysql_free_result($resultado);
	}

	function EliminarPeticion($id){

		$cn = $this->ConectarDB();

		//echo 123456789;
		
		$consulta="DELETE FROM peticionoracion WHERE id_peticion=$id";
		$resultado=mysql_query($consulta);

		return $resultado;

		$this->CerrarConexion($cn,$resultado);
		//mysql_free_result($resultado);

	}

	function ActualizarPeticionDeOracion_por_id($id_peticion,$nombre,$motivo,$peticion,$procedencia,$telefono,$email,$id_usuario){

		$cn = $this->ConectarDB();

		$consulta = "UPDATE peticionoracion SET nombre='$nombre', motivo='$motivo', peticion='$peticion', procedencia='$procedencia', telefono='$telefono',email = '$email' WHERE id_peticion='$id_peticion'";
		$resultado= mysql_query($consulta);

	 	return $resultado;
	 	// if($resultado==true)echo 1;
	 	// else echo 0;

	 	//echo "<br/>".$resultado."<br>".gettype($resultado);

	 	$this->CerrarConexion($cn,$resultado);
	 	//mysql_free_result($resultado);

	}

	function ActualizarEntrada_IMG($titulo, $redaccion, $tags, $categoria, $url_img, $id_entrada){

		$cn = $this->ConectarDB();

		$consulta = "UPDATE entradas SET titulo='$titulo', redaccion='$redaccion', tags='$tags', id_categoria='$categoria', id_imagen='$url_img' WHERE id_entrada=$id_entrada";
		$resultado= mysql_query($consulta);

		return $resultado;
	
		$this->CerrarConexion($cn,$resultado);
		//mysql_free_result($resultado);

	}

	function ActualizarEntrada_Audio($titulo, $redaccion, $tags, $categoria, $url_audio, $id_entrada){

		$cn = $this->ConectarDB();

		$consulta = "UPDATE entradas SET titulo='$titulo', redaccion='$redaccion', tags='$tags', id_categoria='$categoria', id_audio='$url_audio' WHERE id_entrada=$id_entrada";
		$resultado = mysql_query($consulta);
		
		return $resultado;

		$this->CerrarConexion($cn,$resultado);
		//mysql_free_result($resultado);
	}

	function ObtenerCategorias(){

		$cn = $this->ConectarDB();

//$consulta= "SELECT * FROM categoria order by id_categoria";

//$sql_model ="SELECT Cl.descripcion as descripcion_ciclo, C.descripcion as descripcion_curso, C.id_seccion FROM  ciclos Cl INNER JOIN cursos C ON Cl.id=C.id_seccion";
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

}//fin de class

?>