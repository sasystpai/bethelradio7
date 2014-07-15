<?php

echo $clave="albertobethelradio";

$clave1=serialize($clave);

echo "<br/>".$clave1;
$clave2=base64_encode($clave1);

echo "<br/>".$clave2;

//czoxODoiYWxiZXJ0b2JldGhlbHJhZGlvIjs=
//czoyOToiYWxiZXJ0b2JldGhlbHJhZGlvYWRzZmFzZGZhZGEiOw==

//$cod2=$_REQUEST['cod'];
  //   $cod1=base64_decode($cod2);
    // $cod=unserialize($cod1);


?>