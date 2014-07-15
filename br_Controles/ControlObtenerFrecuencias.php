<?php

/**
* 
*/
class ControlObtenerFrecuencias
{
	
	function __construct()
	{
		# code...
	}

	function ObtenerFrecuencias(){

		include_once('br_Entidades/Frecuencias.php');
		$OBJFrecuencias = new Frecuencias;
		$departamentos = $OBJFrecuencias -> ListarDepartamentos();

		include_once('br_Vistas/FormPrincipal.php');
		$OBJMostrarFrecuencias = new FormPrincipal;
		$OBJMostrarFrecuencias ->MostrarFrecuencias($departamentos);

		//$frecuencias = $OBJFrecuencias -> ObtenerFrecuencias();
	} 

	function ObtenerFrecuencias234($id){

		include_once('../br_Entidades/Frecuencias.php');
		$OBJFrecuencias = new Frecuencias;
		$frecuencias = $OBJFrecuencias -> ObtenerFrecuencias($id);

		if ($frecuencias==NULL) {
			
			echo "Elija un departamento";
		}

		else{

			  echo "
  <div class='frecuencias'>
  <table border='1' class='table table-hover'>
<thead>
<tr>
<!--<th>Departamento</th>-->
<td class='active'>Ítem</td>
<td class='active'>Provincia</td>
<td class='active'>Lugar</td>
<td class='active'>Banda</td>
<td class='active'>Frec.</td>
</tr>
</thead>
<tbody>
";

$i=0;
while($row = mysql_fetch_array($frecuencias))
  {
  $i++;
  echo "<tr>";
  //echo "<td>" . $row['departamento'] . "</td>";
  echo "<td>" . $i . "</td>";
  echo "<td>" . utf8_encode($row['provincia']) . "</td>";
  echo "<td>" . utf8_encode($row['lugar']) . "</td>";
  echo "<td>" . $row['banda'] . "</td>";
  echo "<td>" . $row['frecuencias'] . "</td>";
  echo "</tr>";
  }
echo "
</tbody>
</table>
</div>
";


		}
	} 
}


?>