<?php


		//echo gettype($datosCategoria['dia']);	
			$i=0;
			foreach ($datosCategoria['dia'][0] as $dia) {
				echo $horario[$i]['dia']=$dia;
				$i++;
				echo "<br>";
			}
			$j=0;
			foreach ($datosCategoria['dia'][1] as $dia) {
				echo $horario[$j]['hora']=$dia;
				$j++;
				echo "<br>";
			}

			// echo "<br>";
			// echo $horario[0]['dia']." a las ".$horario[0]['hora'];
			// echo "<br>".gettype($horario); 
			// echo "<br>tamaño: ".count($horario);

			// echo "<br>";
			// echo "<br>";
		
			foreach ($horario as $dia) {
				echo "<br>".$dia['dia']." a las ".$dia['hora'];
			}

			echo "<br><br>";
			$codificado=json_encode($horario);

			if (isset($codificado)) {
				echo "<br>codificado";
			}
			else{echo "<br>Error al codificar";}

			echo "<br>";
			echo $codificado;

			echo "<br><br>";

			$decodificado=json_decode($codificado,true);

			if (isset($decodificado)) {
				echo "decodificado";
			}
			else{echo "<br>Error al decodificar";}

			foreach ($decodificado as $dia) {
				echo "<br>".$dia['dia']." a las ".$dia['hora'];
			}


?>