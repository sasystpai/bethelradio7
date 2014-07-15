		$i=0;
			foreach ($datosCategoria['horario'][0] as $dia) {
				echo $horario[$i]['dia']=$dia;
				$i++;
				echo "<br>";
			}
			$j=0;
			foreach ($datosCategoria['horario'][1] as $dia) {
				echo $horario[$j]['hora']=$dia;
				$j++;
				echo "<br>";
			}

			echo "<br><br>";

			foreach ($horario as $dia) {
				echo "<br>".$dia['dia']." a las ".$dia['hora'];
			}

			$codificado=json_encode($horario);

			if (isset($codificado)) {
				//echo "<br>codificado";
				$datosCategoria['horario']=$codificado;//sobreescribe el array en la posicion $datosCategoria[dia]

				//echo $datosCategoria['sinopsis'];

				include_once('../Entidades/Categorias.php');
				$OBJEntidad = new Categorias;
				$rs=$OBJEntidad -> RegistrarNuevaCategoria($datosCategoria);

					if ($rs==false) {
						$mensaje.="-> Hubo una dificultad en el registro de entrada, comuníquelo al: <br/>Administrador: 991026416, o escriba a: direcciones@mmmperu.org";
						$this ->MostrarMensaje_error($mensaje,$privilegios);
					}

					else{
						//header('Location: ../ModuloAdministrador/IndexSecciones.php');
						$pagina="IndexCategorias.php";
						$mensaje.="-> Registro satisfactorio.";
						$this ->MostrarMensaje_exito($mensaje,$privilegios,$pagina);
					}


			}
			else{//echo "error al codificar";
				$mensaje = "Hubo un error al codificar el registro";
				$this-> MostrarMensaje_error($mensaje,$privilegios);
			}