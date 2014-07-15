<?php

session_start();

$privilegios = $_SESSION['privilegios'];
$id_usuario  = $_SESSION['id_usuario'];

	 $cod2=$_REQUEST['cod'];
     $cod1=base64_decode($cod2);
     $cod=unserialize($cod1);

// if (isset($_REQUEST['ver_peticion']) && isset($privilegios)) {
// //echo 123;

//         include_once('../ModuloAdministrador/controles/ControlEstadoDePeticionesDeOracion.php');
//         $ControlEstadoDeEntradas = new ControlEstadoDeEntradas;
//         $ControlEstadoDeEntradas -> PublicarEntrada($cod);

// }

if(isset($_REQUEST['ver_peticion']) && isset($privilegios)){
		include_once('../ModuloAdministrador/controles/ControlEstadoPeticionesDeOracion.php');
		$ControlEstadoPeticionesDeOracion = new ControlEstadoPeticionesDeOracion;
		$ControlEstadoPeticionesDeOracion -> VerPeticion($cod, $privilegios);

}


// elseif (isset($_REQUEST['despublicar']) && isset($privilegios)) {

		
// 		include_once('../ModuloAdministrador/controles/ControlEstadoDeEntradas.php');
// 		$ControlEstadoDeEntradas = new ControlEstadoDeEntradas;
// 		$ControlEstadoDeEntradas -> DesPublicarEntrada($cod); 
// }

elseif (isset($_REQUEST['eliminar']) && isset($privilegios)) {

		include_once('../ModuloAdministrador/controles/ControlEstadoPeticionesDeOracion.php');
		$ControlEstadoPeticionesDeOracion = new ControlEstadoPeticionesDeOracion;
		$ControlEstadoPeticionesDeOracion -> EliminarPeticion($cod); 

}




else
{
	echo "acceso inadecuado";
}

?>