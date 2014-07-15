<?php

include_once('../includes/FormMensaje.php');
class ControlActualizarUsuario extends FormMensaje
{
	function ActualizarUsuario($nombre, $apellido, $telefono, $email, $nickname, $privilegios, $id_usuario) {

		$mensaje = "Mensaje: <br>";
			
			include_once('../Entidades/Usuario.php');
			$OBJUsuario = new Usuario;
			
			//$rs=
			$pagina="IndexUsuarios.php";
			$rs=$OBJUsuario -> ActivarActualizarUsuario($nombre, $apellido, $telefono, $email, $nickname, $id_usuario);

				 if ($rs==false) {
				 	$mensaje.="-> Hubo una dificultad en el registro de entrada, comuníquelo al: <br/>Administrador: 991026416, o escriba a: direcciones@mmmperu.org";
				 	$this ->MostrarMensaje_error($mensaje,$privilegios,$pagina);
				 	//echo "Hay una difucltad, llamar a Luis: 991026416, o escriba a: direcciones@mmmperu.org";
				 }

				 else{
				 	//header("location: ../")
				 	//header('Location: ../ModuloAdministrador/IndexUsuarios.php');
				 	$mensaje.="-> Actualización satisfactoria.";
				 	$this ->MostrarMensaje_exito($mensaje,$privilegios,$pagina);
				 }
	   
	}

	function CambiarPassword($newpassword, $privilegios, $id_usuario){

			$estado=$this-> ValidarTexto($newpassword);

			if ($estado==false) {
				$mensaje = "Elija una contraseña diferente";
				$this->MostrarMensaje_error($mensaje, $privilegios);
			}

			else{

				$password = serialize($newpassword);
				$password = base64_encode($password);	

				include_once('../Entidades/Usuario.php');
				$OBJUsuario = new Usuario;
				$estado2 = $OBJUsuario -> ChangePassword($password, $id_usuario);
				
				if ($estado2==true) {
					
					$pagina="../ModuloAdministrador/IndexUsuarios.php";;
					$mensaje="Contraseña actualizada correctamente";
					$this->MostrarMensaje_exito($mensaje,$privilegios,$pagina);
				}

				else{

					$mensaje = "Ingrese una contraseña distinta";
					$this-> MostrarMensaje_error($mensaje,$privilegios);
				}

			}// fin de else

	}

	function ValidarTexto($texto){

		   //compruebo que el tamaño del string sea válido. 
		   if (strlen($texto)<2 || strlen($texto)>50){ 
		      //echo $usuario . " no es válido<br>"; 
		      return false; 
		   }


		   //compruebo que los caracteres sean los permitidos 
		   $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789áéíóúñÑÁÉÍÓÚ"; 
		   for ($i=0; $i<strlen($texto); $i++){ 
		      if (strpos($permitidos, substr($texto,$i,1))===false){ 
		         //echo $usuario . " no es válido<br>"; 
		         return false; 
		      }//fin de if 
		   } //echo $usuario . " es válido<br>"; 
		   return true; 

		  }
}

?>