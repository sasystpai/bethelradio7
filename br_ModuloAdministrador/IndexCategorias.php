<?php

	session_start();
        if(isset($_SESSION['username']))
        {
        	include_once('../ModuloAdministrador/controles/ControlObtenerCategorias.php');
        	$OBJGetEntradas = new ControlObtenerCategorias;
        	$OBJGetEntradas -> ObtenerCategorias();
        }

        else echo "Acceso inadecuado";

?>