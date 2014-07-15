<?php

include_once ('../br_includes/Conexion.php');
class Usuario extends Conexion
{
	function ObtenerUsuario($usuario,$password)
	{   
    

		$cn = $this-> ConectarDB();
		//SELECT nombre, apellido FROM usuario WHERE nickname='mani' and clave='123' and estado='1'
		$consulta = "SELECT id_usuario, nombre, apellido FROM usuario WHERE nickname='$usuario' and clave='$password' and estado='1'";
				

		$resultado = mysql_query($consulta);
		
		if ($resultado==true) {
		$encontro = mysql_num_rows($resultado);
		
			if($encontro>0) return($resultado);
			else "algo inesperado sucedio";	
		}
		
		else {		
			 return(false);
			}
			$this-> CerrarConexion($cn,$resultado);

			//mysql_free_result($resultado);
				
	}
	
	function ObtenerPrivilegios($id_usuario)
	{   //echo $id_usuario;

//SELECT * FROM tab_privilegio inner join tab_detalle_priv on tab_privilegio.id_privilegio=tab_detalle_priv.id_privilegio WHERE tab_detalle_priv.id_usuario=$id_usuario
		$cn = $this-> ConectarDB();

		$consulta="SELECT * FROM operacion inner join usuario_operacion on operacion.id_operacion=usuario_operacion.id_operacion WHERE  usuario_operacion.estado=1 && usuario_operacion.id_usuario='$id_usuario'";
		$resultado=mysql_query($consulta);
		if($resultado==false) echo"<br>123";
		else return($resultado);	

		$this-> CerrarConexion($cn,$resultado);

		//mysql_free_result($resultado);

	}

	function ObtenerUsuarios(){
//$consulta = "SELECT E.id_entrada, E.titulo, E.estado, C.descripcion FROM entradas E inner join categoria C on E.id_categoria=C.id_categoria order by E.fecha desc";
		
		$cn = $this-> ConectarDB();

		$consulta = "SELECT U.id_usuario, U.nickname, U.estado, TU.descripcion from usuario U INNER JOIN tipo_usuario TU ON U.id_tipousuario=TU.id_tipousuario WHERE U.visible=1 order by U.fecha_creacion ";
				
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

			$this-> CerrarConexion($cn,$resultado);

			//mysql_free_result($resultado);

	}

	function ObtenerDatosDeUsuario($cod){
		//echo "-->".$cod."<--";

		$cn = $this->ConectarDB();

		$consulta = "SELECT * from usuario where id_usuario='$cod'";

		$resultado = mysql_query($consulta);

		if($resultado==true){
			$datos=mysql_fetch_array($resultado);
			return $datos;
		}

		else return false;

		$this->CerrarConexion($cn,$resultado);

		//mysql_free_result($resultado);


	}


	////////////////////////////////////////////////// acciones de usuario ///////////////////////////////////

		function ActivarHabilitarUsuario($id){

		$cn = $this->ConectarDB();	

		$consulta = "UPDATE usuario SET estado=1 WHERE id_usuario='$id'";
		$resultado = mysql_query($consulta);

		return $resultado;

		$this->CerrarConexion($cn,$resultado);

		//mysql_free_result($resultado);
	}

		function ActivarActualizarUsuario($nombre, $apellido, $telefono, $email, $nickname, $id_usuario){

		$cn = $this->ConectarDB();	

		$consulta = "UPDATE usuario SET nombre='$nombre', apellido='$apellido', telefono='$telefono', email='$email', nickname='$nickname' WHERE id_usuario='$id_usuario'";
		$resultado= mysql_query($consulta);

	 	return TRUE;

	 	$this->CerrarConexion($cn,$resultado);

	 	//mysql_free_result($resultado);

	}

		function ActivarDesHabilitarUsuario($id){

		$cn = $this->ConectarDB();	

		$consulta = "UPDATE usuario SET estado=0 WHERE id_usuario='$id'";
		$resultado = mysql_query($consulta);

		return $resultado;

		$this->CerrarConexion($cn,$resultado);

		//mysql_free_result($resultado);
	}

	 function ActivarEliminarUsuario($id){
		
		$cn = $this->ConectarDB();		

		$consulta="DELETE FROM usuario_operacion WHERE id_usuario='$id'";
		$resultado=mysql_query($consulta);

		$consulta2="DELETE FROM usuario WHERE id_usuario='$id'";
		$resultado2=mysql_query($consulta2);

		return $resultado;

		$dato[0]=$resultado;
		$dato[1]=$resultado2;

		$this->CerrarConexion($cn,$dato);

		//mysql_free_result($resultado);
		//mysql_free_result($resultado2);

	}

	function RegistrarUsuario($nombre, $apellido, $email, $telefono, $nickname, $password){


		$estado=FALSE;
		while ($estado==FALSE){

		$id= rand(100,999);
		$id_us="us_".$id;

		$consulta0= "SELECT * from usuario WHERE id_usuario='$id_us'";
		$resultado0= mysql_query($consulta0);

		if($resultado0==TRUE){ $estado=TRUE;}

		}



		//echo $id_us;
		$cn = $this->ConectarDB();	

		$consulta = "INSERT INTO usuario (id_usuario, nombre, apellido, email, telefono, nickname, clave, fecha_creacion) 
						VALUES ('$id_us', '$nombre','$apellido','$email','$telefono','$nickname','$password', now())";

		$resultado = mysql_query($consulta);

		$id_us_id_op=$id_us.'_op_001'; 

		$consulta2 = "INSERT INTO usuario_operacion VALUES ('$id_us_id_op','op_001','$id_us','1')";
		$resultado2= mysql_query($consulta2);

		if($resultado && $resultado2){
			return true;
		}

		else {return false;}
		
		//return $resultado;	

		$dato[0]=$resultado;
		$dato[1]=$resultado2;

		$this -> CerrarConexion($cn,$dato);

		//mysql_free_result($resultado0);
		//mysql_free_result($resultado);			
	}

	function ChangePassword($password, $id_usuario){

		$cn = $this->ConectarDB();	

		$consulta="UPDATE usuario set clave='$password' WHERE id_usuario='$id_usuario'";
		$resultado=mysql_query($consulta);

		return $resultado;

		$this->CerrarConexion($cn,$resultado);

		//mysql_free_result($resultado);

	}

	
}

?>