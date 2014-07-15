<?php

/**
* 
*/
include_once('ContenidosProducciones.php');
class Producciones extends ContenidosProducciones
{
	
	function __construct()
	{
		# code... aqui mostrar el index de producciones
	}

	function MostrarLaHoraDeLaTransformacion(){

		echo "esto es La Hora de la transformacion";
	}

	function MostrarRespuestaPastoral(){

		echo "esto es: Respuesta Pastoral";
	}

	function MostrarVolvamosADios(){

		echo "esto es: Volvamos A Dios";
	}
}

?>