<?php   session_start();
        if(isset($_SESSION['username']))
        {
        //echo gettype($privilegios);
           include_once('../ModuloAdministrador/controles/ControlNuevaEntrada.php');
           $OBJNewEntradas = new ControlNuevaEntrada;
           $OBJNewEntradas -> VerControlNuevaEntrada();

        }

        else echo "Acceso inadecuado";

?>