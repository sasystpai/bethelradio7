<?php

	 $id = intval($_GET['q']);

	include('../br_Controles/ControlObtenerFrecuencias.php');
	$OBJControl = new ControlObtenerFrecuencias;
	$OBJControl -> ObtenerFrecuencias234($id);


?>