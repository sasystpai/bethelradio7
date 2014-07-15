<?php   session_start();
        if(isset($_SESSION['username']))
        {
        //echo gettype($privilegios);
           include_once('../ModuloAdministrador/controles/ControlNuevaSeccion.php');
           $OBJNewEntradas = new ControlNuevaSeccion;
           $OBJNewEntradas -> VerControlNuevaSeccion();

        }

        else echo "Acceso inadecuado";

?>