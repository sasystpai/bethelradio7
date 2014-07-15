<?php


/**
* 
*/
class Pruebas
{
	
	function Descripcion_id($texto){

			$texto = strtolower($texto);

			$find = array("á", 'é', 'í', 'ó', 'ú', 'ñ');
			$repl = array("a", 'e', 'i', 'o', 'u', 'n');
			$texto = str_replace ($find, $repl, utf8_encode($texto));


			$find = array(' ', '&', '\r\n', '\n', '+'); 
			$texto = str_replace ($find, '-', $texto);

			$find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
			$repl = array('', '-', '');
			$texto = preg_replace ($find, $repl, $texto);

			return $texto;

	}

}

echo "ok";

$cn=mysql_connect("localhost","root","") or die('error en cn');
			$db = mysql_select_db("bethelradio") or die('error en Db');

$consulta = "SELECT descripcion FROM categoria";
$datos=mysql_query($consulta);

echo "<br/>";
while ($dato = mysql_fetch_array($datos)) {
	$descrip =  $dato['descripcion'];
	echo $descrip."<br/>";
	echo $cambio=Pruebas::Descripcion_id($dato['descripcion']);
	echo "<br>";

	$consulta2= "UPDATE categoria set descripcion_id ='$cambio' WHERE descripcion='$descrip'";
	mysql_query($consulta2);
}
?>