<?php

session_start();

if(isset($_REQUEST['login']))
{   
        $usuario =($_POST['username']);
        $password=($_POST['password']);
   
		if($usuario!='' and $password!='')
        {
            include('../br_ModuloSeguridad/controles/ControlAutenticarUsuario.php');
    		$objcon = new ControlAutenticarUsuario;
    		$objcon->VerificarUsuario($usuario,$password);
    		//ECHO "BIEN";
        }
        else
        {
            include('../br_includes/FormularioMensaje.php');
            $objmen =  new FormularioMensaje;
            $objmen->MostrarMensajeLogin("Se detectaron campos vacíos");
            
        }
        
}
else
{
    include('../br_includes/FormularioMensaje.php');
    $objmen =  new FormularioMensaje;
    $objmen->MostrarMensajeLogin("<p style='color:red'>Se ha detectado un acceso incorrecto a esta página</p>");
//echo "no se presiono el boton login";
}

?>