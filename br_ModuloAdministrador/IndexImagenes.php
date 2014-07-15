<?php

session_start();

        if(isset($_SESSION['username']))
        {
        	include_once('../ModuloAdministrador/controles/ControlObtenerImagenes.php');
        	$OBJGetEntradas = new ControlObtenerImagenes;
        	$OBJGetEntradas -> ObtenerImagenes();

        }

        else echo "Acceso inadecuado";


?>