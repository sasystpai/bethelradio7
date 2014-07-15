<?php

	session_start();
        if(isset($_SESSION['username']))
        {
        	include_once('../ModuloAdministrador/controles/ControlObtenerUsuarios.php');
        	$OBJGetEntradas = new ControlObtenerUsuarios;
        	$OBJGetEntradas -> ObtenerUsuarios();
        }

        else echo "Acceso inadecuado";

?>