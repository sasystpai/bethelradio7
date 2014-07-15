<?php

session_start();

$privilegios = $_SESSION['privilegios'];
$id_usuario  = $_SESSION['id_usuario'];

	 $cod2=$_REQUEST['cod'];
     $cod1=base64_decode($cod2);
     $cod=unserialize($cod1);

if (isset($_REQUEST['publicar']) && isset($privilegios)) {
//echo 123;

        include_once('../ModuloAdministrador/controles/ControlEstadoDeCategoria.php');
        $ControlEstadoDeSeccion = new ControlEstadoDeCategoria;
        $ControlEstadoDeSeccion -> HabilitarCategoria($cod);

}

elseif(isset($_REQUEST['editar']) && isset($privilegios)){
		include_once('../ModuloAdministrador/controles/ControlEstadoDeCategoria.php');
		$ControlEstadoDeSeccion = new ControlEstadoDeCategoria;
		$ControlEstadoDeSeccion -> EditarCategoria($cod, $privilegios);

}


elseif (isset($_REQUEST['despublicar']) && isset($privilegios)) {

		
		include_once('../ModuloAdministrador/controles/ControlEstadoDeCategoria.php');
		$ControlEstadoDeCategoria = new ControlEstadoDeCategoria;
		$ControlEstadoDeCategoria -> DesHabilitarCategoria($cod); 
}

elseif (isset($_REQUEST['eliminar']) && isset($privilegios)) {

		include_once('../ModuloAdministrador/controles/ControlEstadoDeCategoria.php');
		$ControlEstadoDeSeccion = new ControlEstadoDeCategoria;
		$ControlEstadoDeSeccion -> EliminarCategoria($cod); 

}



else
{
	echo "acceso inadecuado";
}

?>