<?php   session_start();
        if(isset($_SESSION['username']))
        {
        //echo gettype($privilegios);
           include_once('../ModuloAdministrador/controles/ControlNuevaCategoria.php');
           $OBJNewEntradas = new ControlNuevaCategoria;
           $OBJNewEntradas -> VerControlNuevaCategoria();

        }

        else echo "Acceso inadecuado";

?>