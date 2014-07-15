<meta charset="utf-8">
<?php

class ControlAutenticarUsuario
{

	function ControlAutenticarUsuario(){
		@session_start();
		}

	function VerificarUsuario($usuario,$password){

	$respuesta = $this->ComprobarDatos($usuario,$password);
	if ($respuesta==true) {
		//echo $usuario;

	$clave1=serialize($password);
	$clave2=base64_encode($clave1);
	
	  include('../br_Entidades/Usuario.php');
	  $usu = new Usuario;
	  $respuesta=$usu->ObtenerUsuario($usuario,$clave2);

		     if($respuesta==0)
			 {	 

			 
			 		//$mensaje="error el login y password no se encuentran en la BD<br/> o se ha ingresado alguno de los valores equivocadamente";
				  $mensaje="usuario no registrado o error en la contraseña";
				  include('../br_includes/FormularioMensaje.php');
				  $objmen =  new FormularioMensaje;
            	  $objmen->MostrarMensajeLogin($mensaje);
				  //$mensaje =  new GetFormularioMensaje;
				  //$mensaje->GetMostrarMensajeLogin('error el login y password no se encuentran en la BD<br/> o se ha ingresado alguno de los valores equivocadamente');
			  	
			  	//include_once('../ModuloSeguridad/vistas/FormPrincipal.php');
			  	//$OBJFormPrincipal = new FormPrincipal;
			  	//$OBJFormPrincipal -> MostrarFormPrincipal(0);
			  }
	  else
	  {   
	  	$datos_usuario = mysql_fetch_assoc($respuesta);

	      $id_usuario			  = $datos_usuario['id_usuario'];
		  $_SESSION['username']   = $datos_usuario['nombre']." ".$datos_usuario['apellido'];
          $_SESSION['id_usuario'] = $id_usuario;
          
          $registros=$usu->ObtenerPrivilegios($id_usuario);
         
          $filas=mysql_num_rows($registros);
               //echo ($filas);
			//$filas=0;
			if($filas==0){

				$mensaje="ud no tiene privilegios disponibles";
				include('../br_includes/FormularioMensaje.php');
				$objmen =  new FormularioMensaje;
            	$objmen->MostrarMensajeLogin($mensaje);

				}
			else{
					for($i=0;$i<$filas;$i++)
					{
						$fila=mysql_fetch_array($registros);
						$privilegios[$i][0]=$fila['descripcion'];
            			$privilegios[$i][1]=$fila['url'];
                                               						
					}

		  		//echo '5';
				$_SESSION['privilegios']=$privilegios;
		  		//echo gettype($_SESSION['privilegios']);
		  		include_once('../br_ModuloAdministrador/vistas/FormMenuUsuario4.php');
          		$form_menu = new FormMenuUsuario;
		  		$form_menu->MostrarMenu1($privilegios);
          
           }//fin del esle
		//echo "bien";
	  }//fin de else
	}//fin de if -> respuesta true
	else {

		$mensaje="<p style='color:red;'>datos incorrectos</p>";
				  include('../br_includes/FormularioMensaje.php');
				  $objmen =  new FormularioMensaje;
            	  $objmen->MostrarMensajeLogin($mensaje);

	}
	}//fin de metodo

function ComprobarDatos($usuario,$password){
   //compruebo que el tamaño del string sea válido. 
   if (strlen($usuario)<3 || strlen($usuario)>20){ 
      //echo $usuario . " no es válido<br>"; 
      return false; 
   } 

   if (strlen($password)<3 || strlen($password)>20){ 
      //echo $password . " no es válido<br>"; 
      return false; 
   } 

   //compruebo que los caracteres sean los permitidos 
   $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789_"; 
   for ($i=0; $i<strlen($usuario); $i++){ 
      if (strpos($permitidos, substr($usuario,$i,1))===false){ 
         //echo $usuario . " no es válido<br>"; 
         return false; 
      }//fin de if 
   } 
   	//echo $usuario . " es válido<br>"; 

   for ($i=0; $i<strlen($password); $i++){ 
      if (strpos($permitidos, substr($password,$i,1))===false){ 
         //echo $password . " no es válido<br>"; 
         return false; 
      }//fin de if 
   }
   //echo $password . " es válido<br>"; 
   return true; 
}



}//fin de clase

?>
