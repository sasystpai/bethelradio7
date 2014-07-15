<?php

mysql_connect('localhost','bethelra_radiou','EJ6D848g') or die('no hay server');
mysql_select_db('bethelra_radio') or die ('no hay bd');

$consulta1="SELECT fecha, id_entrada FROM entradas";
$cn=mysql_query($consulta1);

while($rs=mysql_fetch_array($cn)){
$registro= $rs[0];
$id=$rs[1];
$unix=strtotime($registro);
$consulta = "UPDATE entradas SET fecha_unix='$unix' WHERE id_entrada='$id'";
mysql_query($consulta);
}

?>