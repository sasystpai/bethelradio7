<?php   session_start();
        if(isset($_SESSION['username']))
        {
        	include_once('../ModuloAdministrador/controles/ControlObtenerPeticionesDeOracion.php');
        	$OBJGetEntradas = new ControlObtenerPeticionesDeOracion;
        	$OBJGetEntradas -> ObtenerPeticionesDeOracion();
        }

        else echo "Acceso inadecuado";

?>