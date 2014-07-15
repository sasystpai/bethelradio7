<?php

mysql_connect("localhost","root","") or die('error conexion');
mysql_select_db("bethelradio") or die('error en db');

$consulta= "SELECT * from categoria where descripcion_id='la-hora-de-la-transformacion'";
$resultado = mysql_query($consulta);

$datos = mysql_fetch_array($resultado);

echo $datos['descripcion'];
echo "<br><br>";

$datos = json_decode($datos['horario'],true);

foreach ($datos as $key ) {
	echo $key['dia'].$key['hora']."<br>";
}


?>