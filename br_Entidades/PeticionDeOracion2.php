<?php

/**
* 
*/
include_once ('br_includes/Conexion.php');
class PeticionDeOracion2 extends Conexion
{
	
	function RegistrarPeticionDeOracion($nombre, $motivo, $peticion, $procedencia, $email, $telefono){

		date_default_timezone_set('America/Lima');
		$hora = gettimeofday(true);
		
		$h=date("Y-m-d\ H:i:s", $hora);

		$cn = $this->ConectarDB();

		$consulta="INSERT INTO peticionoracion (nombre, motivo, peticion, procedencia, email, telefono, fecha) VALUES 
											('$nombre','$motivo','$peticion', '$procedencia', '$email', '$telefono','$h')";

		$resultado = mysql_query($consulta);

		if ($resultado==true) {
			$programa = $this-> ProgramaActual();

			$vector[0]=$resultado;
			$vector[1]=$programa;

		return $vector;
			
		}
	
		else {return $resultado;}

		$this->CerrarConexion($cn,$resultado);

		//mysql_free_result($resultado);
	}


	function ProgramaActual(){
		date_default_timezone_set('America/Lima');
		$hora = gettimeofday(true);
		
		$h=date("Y-m-d\ H:i:s", $hora);
		// echo $hora;
		// $hora = ($hora-'7200');
		// echo "<br/>".$hora;

		$cn = $this->ConectarDB();

		$consulta = "SELECT programa FROM programacion WHERE fin>='$h'  Limit 1";
		$programa = mysql_query($consulta);

		//$programa= mysql_fetch_array(0);
		while($r=mysql_fetch_array($programa)){
			return $r['programa'];
		}
		//echo "estamos transmitiedo: ".$r['programa'];

		$this->CerrarConexion($cn,$programa);
		//mysql_free_result($programa);
	}

}


?>