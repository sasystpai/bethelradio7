<?php


/**
* 
*/
		//include_once('includes/pagina2.php');
class ControlVerNoticia //extends Pagina2
{
	
	function VerNoticia($dato){
		//$est = $this->ValidarTexto($dato);
	
		////////////////////////////////////////////////////////
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
		////////////////////////////////////////////////////////

		//echo $dato;

		if($est=TRUE)
			{

		$titulo_id=$dato;
		
		include_once('br_Entidades/Entradas2.php');
		$OBJObtenerEntrada = new Entradas2;
		$array 	  = $OBJObtenerEntrada -> ObtenerEntrada($titulo_id);
		$entradas = $OBJObtenerEntrada -> ObtenerUltimasEntradas_por_categoria($titulo_id);

		$datos=$array[0];
		$programa_actual=$array[1];

		include_once('br_Vistas/VerNoticia.php');
		$OBJVerNoticia = new VerNoticia;
		$OBJVerNoticia -> MostrarVerNoticia($datos,$entradas,$programa_actual);
		}

		else {
		header('Location:Index.php');
		}

	}
}


?>