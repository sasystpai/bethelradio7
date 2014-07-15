<?php   session_start();
        if(isset($_SESSION['username']))
        {
        //echo gettype($privilegios);
           include_once('../ModuloAdministrador/controles/ControlNuevoUsuario.php');
           $OBJNewEntradas = new ControlNuevoUsuario;
           $OBJNewEntradas -> VerControlNuevoUsuario();

        }

        else echo "Acceso inadecuado";

?>