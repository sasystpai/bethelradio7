<?php

/**
* 
*/
class ControlObtenerPrivilegios
{
	
	function ObtenerPrivilegios($id)
	{

		include_once('../Entidades/Usuario.php');
		$OBJEntradas = new Usuario;
		$resultado=$OBJEntradas -> ObtenerPrivilegios($id);

		if($resultado==false){
				
				  $mensaje="no hay privilegios";
				  include('../includes/FormularioMensaje.php');
				  $objmen =  new FormularioMensaje;
            	  $objmen->MostrarMensajeLogin($mensaje);
		}

		else {
			$filas=count($resultado);
			for($i=0;$i<$filas;$i++)
					{
						$fila=mysql_fetch_array($resultado);
						$privilegios[$i][0]=$fila['descripcion'];
            			$privilegios[$i][1]=$fila['url'];
                                               						
					}

			return $privilegios;
		}

	}
}


?>