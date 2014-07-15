<?php

	session_start();
        if(isset($_SESSION['username']))
        {
        	include_once('../ModuloAdministrador/controles/ControlObtenerSecciones.php');
        	$OBJGetEntradas = new ControlObtenerSecciones;
        	$OBJGetEntradas -> ObtenerSecciones();
        }

        else echo "Acceso inadecuado";

?>