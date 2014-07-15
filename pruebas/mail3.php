<?php

$mensaje='
<div style="background-color:#226;">
<h1 style="color:#fff;"><img src="http://www.regomsa.com.pe/mail/logo.png"> Lo que necesitas escuchar</h1>
</div>
<p>no recibir este mail: click <a href="malito:soporte_villasur@hotmail.com">aquí</a></p>
<p>
En Tecnología para Todos conocimos de cerca el Planetario del Instituto Geofísico del Perú (IGP) ubicado en el distrito de Ate Vitarte.
</p><p>
Mario Zegarra, representante del IGP, dio a conocer que muchas delegaciones de colegios visitan el planetario porque quieren conocer cómo funciona el universo.
</p><p>
Recordó que existen observatorios en distintas ciudades del país. “Este 26 de junio cumplimos seis años difundiendo la astronomía”, añadió.
</p><p>
Por último, dio a conocer que existen salas especiales para presentaciones y para exposiciones en tercera dimensión.
</p>
';

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$headers .="from: Bethelradio desde otro servidor <soporte_villasur@hotmail.com>\r\n";


//mail(to, subject, message)

if(mail("soporte_villasur@hotmail.com", "mensaje de prueba", $mensaje, $headers)) {
	echo 1;
}

else
{
	echo 0;
}	

?>