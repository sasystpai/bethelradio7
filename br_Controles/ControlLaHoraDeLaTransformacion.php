<?php

/**
* 
*/
class ControlLaHoraDeLaTransformacion
{
	
	

	function ObtenerProducciones(){
		include_once('br_Entidades/Entradas2.php');

		$OBJEntradas = new Entradas2;
		$datos=$OBJEntradas -> ObtenerProducciones_HoraDeLaTransformacion();


		$entradas 		=   $datos[0];
		$programa_actual	= 	$datos[1];
		include_once('br_Vistas/PrincipalHT.php');
		$OBJPrincipal = new PrincipalHT;
		$OBJPrincipal -> MostrarPrincipalHT($entradas,$programa_actual);
	}
}

?>