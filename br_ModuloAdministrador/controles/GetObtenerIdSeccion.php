<?php

	 $id = intval($_GET['q']);

	include('../Controles/ControlObtenerCategorias.php');
	$OBJControl = new ControlObtenerCategorias;
	$OBJControl -> ObtenerCategorias($id);


?>