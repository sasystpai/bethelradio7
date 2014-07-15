<?php   session_start();
        if(isset($_SESSION['username']))
        {
        	include_once('../ModuloAdministrador/controles/ControlObtenerEntradas.php');
        	$OBJGetEntradas = new ControlObtenerEntradas;
        	$OBJGetEntradas -> ObtenerEntradas();
        }

        else echo "Acceso inadecuado";

?>