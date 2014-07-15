<?php

/**
* 
*/
include_once('br_Vistas/FormMensaje.php');
class ControlEnviarFormularioPeticionDeOracion extends FormMensaje
{
	


	function ValidarTexto($texto){

   //compruebo que el tamaño del string sea válido. 
   if (strlen($texto)<2 || strlen($texto)>80){ 
      //echo $usuario . " no es válido<br>"; 
      return false; 
   } 

   //compruebo que los caracteres sean los permitidos 
   $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789áéíóúñÑÁÉÍÓÚ "; 
   for ($i=0; $i<strlen($texto); $i++){ 
      if (strpos($permitidos, substr($texto,$i,1))===false){ 
         //echo $usuario . " no es válido<br>"; 
         return false; 
      }//fin de if 
   } //echo $usuario . " es válido<br>"; 
   return true; 

  }

  function ValidarPeticion($texto){

   //compruebo que el tamaño del string sea válido. 
   if (strlen($texto)<=2 || strlen($texto)>=500){ 
      //echo $usuario . " no es válido<br>"; 
      return false; 
   } 

   //compruebo que los caracteres sean los permitidos 
   $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789\n\t\r-.:,;“”áéíóú?¿ÑñÁÉÍÓÚ!¡()@#\" "; 
   for ($i=0; $i<strlen($texto); $i++){ 
      if (strpos($permitidos, substr($texto,$i,1))===false){ 
         //echo $usuario . " no es válido<br>"; 
         return false; 
      }//fin de if 
   } //echo $usuario . " es válido<br>"; 
   return true; 

  }

  	function ValidarTelefono($numero){

   //compruebo que el tamaño del string sea válido. 
   if (strlen($numero)<3 || strlen($numero)>15){ 
      //echo $usuario . " no es válido<br>"; 
      return false; 
   } 

   //compruebo que los caracteres sean los permitidos 
   $permitidos = "0123456789- ()"; 
   for ($i=0; $i<strlen($numero); $i++){ 
      if (strpos($permitidos, substr($numero,$i,1))===false){ 
         //echo $usuario . " no es válido<br>"; 
         return false; 
      }//fin de if 
   } //echo $usuario . " es válido<br>"; 
   return true; 

  }

  // function ObtenerProgramaActual(){
  	
  // 	include_once('Entidades/Entradas2.php');
		// $OBJProgAct = new Entradas2;
		// $programa_actual=$OBJProgAct -> ProgramaActual();
  		
  // 		return $programa_actual;
  // }

	function EnviarFormulario($nombre, $motivo, $peticion, $procedencia, $email, $telefono){


		$mensaje="Verifique su: <br/>";

		//$programa = $this-> ObtenerProgramaActual();
	
		//$resultado[1]=$this->ValidarTexto($nombre);	

		if ($nombre!="") {
		$resultado[1]=$this->ValidarTexto($nombre);
			# code...
		}
		else{
			$mensaje.="-> Ingrese un nombre<br/>";
		}

		//$resultado[2]=$this->ValidarTexto($motivo);
		if ($motivo!="") {
		$resultado[2]=$this->ValidarTexto($motivo);
			# code...
		}
		else{
			$mensaje.="-> Ingrese un motivo<br/>";	
		}

		//$resultado[3]=$this->ValidarTexto($peticion);
		if ($peticion!="") {
		$resultado[3]=$this->ValidarPeticion($peticion);
			# code...
		}
		else{
			$mensaje.="-> Ingrese una petición.<br/>";	
		}

		//$resultado[4]=$this->ValidarTexto($procedencia);
		if ($procedencia!="") {
		$resultado[4]=$this->ValidarTexto($procedencia);
			# code...
		}
		else{
		$resultado[4]=true;	
		}

		if ($email!="") {
		$resultado[5]=$this->EvaluarEmail($email);
			# code...
		}
		else{
		$resultado[5]=true;	
		}

		if ($telefono!="") {
		$resultado[6]=$this->ValidarTelefono($telefono);
			# code...
		}
		else{
		$resultado[6]=true;	
		}  
		//$resultado[6]=$this->ValidarTexto($telefono);

		$estado=0;
		$j=0;
		for ($i=1; $i <=6; $i++) { 
			if ($resultado[$i]!=true) {
				$estado+=1;
				//echo $i."<br>";
				$error[$j]=$i;
				$j++;
			}
		}

		if ($estado==0) {
			//echo $estado.'<br/>';

			$peticion2 = htmlentities($peticion);
			//$peticion2=$peticion;
			include_once('br_Entidades/PeticionDeOracion2.php');
			$OBJPeticionOracion = new PeticionDeOracion2;
			$vector = $OBJPeticionOracion ->  RegistrarPeticionDeOracion($nombre, $motivo, $peticion2, $procedencia, $email, $telefono);
			
			$resultado2 = $vector[0];
			$programa   = $vector[1];

			if ($resultado2==true) {
				//echo 111111;
				$mensaje_exito="Gracias <b>$nombre</b> por habernos escrito, estaremos orando por ti.";

				$this -> MostrarMensaje_1($mensaje_exito,$programa);

			}
			else {echo "hubo una dificultad, llame al administrador (991026416) o escriba a direcciones@mmm.peru.org, <br/><a href='/'>inicio</a>";}
		}

		else {
//echo $estado;
			for($i=0;$i<count($error);$i++) {


				switch ($error[$i]) {
					case 1: $mensaje.="-> Nombre<br/>";
							break;
					
					case 2: $mensaje.="-> Motivo<br/>";
							break;

					case 3: $mensaje.="-> Petición<br/>";
							break;	

					case 4:	$mensaje.="-> Desde donde nos escribe<br/>";
							break;

					case 5:	$mensaje.="-> Email<br/>";
							break;

					case 6:	$mensaje.="-> Teléfono<br/>";
							break;		

					default:
							$mensaje= "-> Algo inesperado ocurrió<br/>";
						break;
				}
			}// fin de for

			include_once('br_Entidades/Entradas2.php');
			$OBJProgAct = new Entradas2;
			$programa_actual=$OBJProgAct -> ProgramaActual();

			$this -> MostrarMensaje_0($mensaje,$programa_actual);

			//echo "mensaje:<br>".utf8_decode($mensaje)."<br><a href='javascript:history.back(1)'>volver</a>";
			
		}

	}



	   function EvaluarEmail($email){ 
    $mail_correcto = 0; 
    //compruebo unas cosas primeras 
    if ((strlen($email)>=6) && (substr_count($email,"@") == 1) && (substr_count($email,".") <= 3) &&(substr($email,0,1) != "@") && (substr($email,strlen($email)-1,1) != "@")){ 
         if ((!strstr($email,"'")) && (!strstr($email,"\"")) && (!strstr($email,"|")) && (!strstr($email,"\\")) && (!strstr($email,"\$")) && (!strstr($email," "))) 
         { 
           //miro si tiene caracter . 
           if (substr_count($email,".")>= 1){ 
               //obtengo la terminacion del dominio 
               $term_dom = substr(strrchr ($email, '.'),1); 
               //compruebo que la terminación del dominio sea correcta 
               if (strlen($term_dom)>1 && strlen($term_dom)<5 && (!strstr($term_dom,"@")) ){ 
                 //compruebo que lo de antes del dominio sea correcto 
                 $antes_dom = substr($email,0,strlen($email) - strlen($term_dom) - 1); 
                 $caracter_ult = substr($antes_dom,strlen($antes_dom)-1,1); 
                 if ($caracter_ult != "@" && $caracter_ult != "."){ 
                     $mail_correcto = 1; 
                  } 
               } 
           } 
         } 
    } 
    if ($mail_correcto) 
         return true; 
    else 
         return false; 
}



}

?>