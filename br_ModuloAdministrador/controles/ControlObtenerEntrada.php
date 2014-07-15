<?php


class ControlObtenerEntrada
{
	
	function ObtenerEntrada($cod)
	{	
	//echo "hola::2-->".$cod;
		//$datos=1;
		//echo $cod;
		include_once('../Entidades/Entradas.php');
		$OBJVerEntrada = new Entradas;
		$datos=$OBJVerEntrada -> ObtenerEntrada($cod);

		//echo $datos['redaccion'];
		include_once('../ModuloAdministrador/vistas/FormularioVerEntrada.php');
        $OBJFormVerEntrada = new FormularioVerEntrada;
        $OBJFormVerEntrada -> MostrarFormularioVerEntrada($datos);
	}
}



?>