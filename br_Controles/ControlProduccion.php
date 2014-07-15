<?php

class ControlProduccion
{
	
	function ObtenerDatosDeProduccion($descripcion_id)
	{
		
		$est = $this->ValidarCampo($descripcion_id);

		if ($est==false) {
			header('Location: Index.php');
			//echo "esto es un error: ".$programa;
		}

		else{

			include_once('br_Entidades/Entradas2.php');
			$OBJInfo = new Entradas2;
			$datos = $OBJInfo -> ObtenerDatosDeProduccion_porCategoria($descripcion_id);

			$infoCategoria  = $datos[0];
			$entradas 		= $datos[1];
			$programa_actual= $datos[2];

			// echo $infoCategoria['descripcion'];
			// echo "<br>".$programa_actual;
			//echo gettype($entradas);

			include_once('br_Vistas/VerProduccion.php');
			$OBJVerProduccion = new VerProduccion;
			$OBJVerProduccion -> MostrarVerProduccion($infoCategoria, $entradas, $programa_actual); 



		}


	}

	function ValidarCampo($programa){

	//compruebo que los caracteres sean los permitidos 
   $permitidos = "abcdefghijklmnopqrstuvwxyz-"; 
   for ($i=0; $i<strlen($programa); $i++){ 
      if (strpos($permitidos, substr($programa,$i,1))===false){ 
         //echo $usuario . " no es válido<br>"; 
         return false; 
      }//fin de if 
   } //echo $usuario . " es válido<br>"; 
   return true; 


	}
}



?>