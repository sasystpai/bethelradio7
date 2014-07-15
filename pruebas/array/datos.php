<?php

$persona[0]['nombre']="luis";
$persona[0]['distrito']="villa el salvador";

$persona[1]['nombre']="luis";
$persona[1]['distrito']="lurin";

$persona[2]['nombre']="luis";
$persona[2]['distrito']="chorrilos";

$persona[3]['nombre']="luis";
$persona[3]['distrito']="san juan de miraflores";

$persona[4]['nombre']="luis";
$persona[4]['distrito']="san juan de lurigancho";

$persona[5]['nombre']="luis";
$persona[5]['distrito']="villa maria del triunfo";

//echo gettype($persona);

//echo "<br>".$persona[4]['distrito'];



$encode=json_encode($persona,true);

if (isset($encode)) {
	# code...
	echo "codificado";
}
else {echo "no codificado";}

$deco = json_decode($encode,true);

if (isset($deco)) {
	# code...
	echo "<br>decodificado<br>";
}
else {echo "<br>no decodificado<br>";}

echo "<br><br>";

 for($i=0; $i<count($persona); $i++){ 
 	echo ".";
 	if(isset($persona[$i])){
 	echo $persona[$i]['distrito']."<br>";
 	}
 	else{
 		//echo "bien<br>";
 	}
 }

//echo gettype($deco);

//echo "<br>".$deco[4]['nombre'];

//echo $c=count($deco);
 	echo "<br>->".count($persona);
	unset($persona[2]);
	echo "<br/>->".count($persona)."<br>";
    //echo "-->".max($persona);	

echo "<br>";

 for($i=0; $i<count($persona); $i++){ 
 	echo ".";
 	if(isset($persona[$i])){
 	echo $persona[$i]['distrito']."<br>";
 	}
 	else{
 		//echo "bien<br>";
 	}
 }
 echo "<br><br>";
 echo 1;

 echo "<br><br>";
 
 // foreach ($persona as $nombre => $n) {
 // 	echo $n;
 // }

 foreach ($persona as $key ) {
 	echo ".";
 	echo $key['distrito']."<br>";
 }


?>