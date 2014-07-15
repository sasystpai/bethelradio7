<?php
class ControlObtenerEntradas
{
	
	function __construct()
	{
	
	}

	function ObtenerEntradas(){
		include_once('br_Entidades/Entradas2.php');
		$OBJEntradas = new Entradas2;
		$entradas_HT=$OBJEntradas -> ObtenerEntradas_HoraDeLaTransformacion();

		include_once('br_Vistas/Producciones.php');
		$OBJPrincipal = new Producciones;
		$OBJPrincipal -> Mostrar_HoraDelaTransformacion($entradas_HT);



	}
}

?>