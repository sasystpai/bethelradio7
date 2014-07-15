<?php

/**
* 
*/
include_once('../includes/FormMensaje.php');
class ControlRegistrarNuevoUsuario extends FormMensaje
{
	function RegistrarNuevoUsuario($nombre, $apellido, $email, $telefono, $nickname, $password, $privilegios){
		
		include_once('../includes/Pagina2.php');
		$OBJValidar = new Pagina2;


		$nombre_val 	= $OBJValidar -> ValidarTexto($nombre);
		$apellido_val 	= $OBJValidar -> ValidarTexto($apellido);
		$email_val		= $OBJValidar -> ValidarEmail($email);
		//$telefono_val	= $OBJValidar -> ValidarTelefono($telefono);
		$nickname_val	= $OBJValidar -> ValidarTexto($nickname);
		$password_val	= $OBJValidar -> ValidarTexto($password);

		$datos[0]=$nombre_val;
		$datos[1]=$apellido_val;
		$datos[2]=$email_val;
		$datos[3]=$nickname_val;
		$datos[4]=$password_val;

		$estado = 1;

		for ($i=0; $i <=4 ; $i++) { 
			
			if ($datos[$i]==false) {
				$estado=0;
			}
		}

		//$verificar=array($nombre_val, $apellido_val, $email_val, $nickname_val, $password_val);
		//echo $estado;

		$mensaje = "Mensaje: <br/>";

		if ($estado==0) {
			# code...


		if ($nombre_val==false) {
			$mensaje .= "-> Indique un nombre válido.<br/>";
		}

		if($apellido_val==false){
			$mensaje .= "-> Indique un apellido válido.<br>";
		}

		if ($email_val==false) {
			$mensaje .= "-> Indique un email válido.<br/>";
		}

		if ($nickname_val==false) {
			$mensaje .= "-> Indique un nickname válido.<br/>";
		}

		if ($password_val==false) {
			$mensaje .= "-> Indique un password válido.<br/>";
		}

		$this ->MostrarMensaje_error($mensaje,$privilegios);

		}

		else{

			$password = serialize($password);
			$password = base64_encode($password);	

			//echo $password;
			include_once('../Entidades/Usuario.php');
			$OBJUsuario = new Usuario;
			$resultado = $OBJUsuario -> RegistrarUsuario($nombre, $apellido, $email, $telefono, $nickname, $password);

			if($resultado==FALSE){
			$mensaje .="Este usuario ya esta registrado, pruebe con otro email o con otro nickname";
			$this ->MostrarMensaje_error($mensaje,$privilegios);
			}
			else{

			header ('Location: IndexUsuarios.php');
			}

		}
		//echo $password;

		
	}//fin de función
}//fin de class
?>