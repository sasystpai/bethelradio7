<?php
include_once('../includes/FormMensaje.php');
class ControlRegistrarNuevaCategoria extends FormMensaje
{

	function RegistrarNewCategoria($datosCategoria, $privilegios){
		//echo "imagen";
			
			$mensaje = "Mensaje: <br>";

			$i=0;
			foreach ($datosCategoria['horario'][0] as $dia) {
				//echo 
				$horario[$i]['dia']=$dia;
				$i++;
				//echo "<br>";
			}
			$j=0;
			foreach ($datosCategoria['horario'][1] as $dia) {
				//echo 
				$horario[$j]['hora']=$dia;
				$j++;
				//echo "<br>";
			}

			//echo "<br><br>";

			$codificado=json_encode($horario);

			if (isset($codificado)) {
				//echo "<br>codificado";
				$datosCategoria['horario']=$codificado;//sobreescribe el array en la posicion $datosCategoria[dia]

				$descripcion_id = $this -> urls_amigables($datosCategoria['descripcion']);
				
				$datosCategoria['descripcion_id']=$descripcion_id;

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
		
						
}

		function urls_amigables($url) {
			
			//$url = utf8_encode($url);

			$url = strtolower($url);

			$find = array("á", 'é', 'í', 'ó', 'ú', 'ñ');
			$repl = array("a", 'e', 'i', 'o', 'u', 'n');
			$url = str_replace ($find, $repl, utf8_encode($url));


			$find = array(' ', '&', '\r\n', '\n', '+'); 
			$url = str_replace ($find, '-', $url);

			$find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
			$repl = array('', '-', '');
			$url = preg_replace ($find, $repl, $url);

			return $url;
		}

}//fin de class
?>