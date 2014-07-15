<?php

session_start();

if(isset($_SESSION['username']))
        {
        //echo gettype($privilegios);
           include_once('../ModuloAdministrador/controles/ControlSubirImagen.php');
           $OBJNewEntradas = new ControlSubirImagen;
           $OBJNewEntradas -> VerControlSubirImagen();

        }

        else echo "Acceso inadecuado";

?>