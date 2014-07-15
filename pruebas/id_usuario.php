<?php

mysql_connect('localhost','root','') or die('no hay server');
mysql_select_db('bethelradio2') or die('no hay bd');

// $estado=FALSE;
// 		while ($estado==FALSE){

// 		$id= rand(100,999);
// 		$id_us="us_".$id;

// 		$consulta0= "SELECT * from usuario WHERE id_usuario='$id_us'";
// 		$resultado0= mysql_query($consulta0);

// 		if($resultado0==TRUE){ $estado=TRUE;}

// 		}


$id="czo5OiI5ODc2NTQzMjEiOw==";

$id_us=base64_decode($id);
$id_us=unserialize($id_us);

echo $id_us;
		



		//$result = mysql_fetch_($resultado0);
		//echo $result[];

?>