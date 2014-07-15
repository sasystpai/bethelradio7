<?php

class ControlVerProduccion
{

	function VerProduccion($dato){
		$est = $this->ValidarTexto($dato);
	
		//echo gettype($est);

		////////////////////////////////////////////////////////
		// if($est==TRUE)ECHO 123;
		// else echo "abc"; 
		////////////////////////////////////////////////////////

		//echo $dato;

		if($est=TRUE)
			{

		$titulo_id=$dato;
		
		include_once('br_Entidades/Entradas2.php');
		$OBJObtenerEntrada = new Entradas2;
		$array 	  	  = $OBJObtenerEntrada -> ObtenerEntrada($titulo_id);
		//$producciones = $OBJObtenerEntrada -> ObtenerUltimasEntradas_por_produccion($titulo_id);

		$datosEntrada=$array[0];
		$infoCategoria=$array[1];
		$programa_actual=$array[2];

		//echo $datos['descripcion'];
		//echo $infoCategoria['descripcion_id'];

		
		include_once('br_Vistas/VerProduccionId.php');
		$ObjVerProduccion = new VerProduccionId;
		$ObjVerProduccion -> MostrarVerProduccionId($datosEntrada ,$infoCategoria,$programa_actual);

		}

		else {
		header('Location:Index.php');
		}

	}

	function ValidarTexto($dato){
				 if (strlen($dato)<3 || strlen($dato)>20){ 
      //echo $usuario . " no es válido<br>"; 
      $est = false; 
   } 

   //compruebo que los caracteres sean los permitidos 
   $est = TRUE; 
   $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789_-"; 
   for ($i=0; $i<strlen($dato); $i++){ 
      if (strpos($permitidos, substr($dato,$i,1))===false){ 
         //echo $usuario . " no es válido<br>"; 
         $est = false; 
      }//fin de if 
   } //echo $usuario . " es válido<br>"; 
   return $est;
	}
}

?>