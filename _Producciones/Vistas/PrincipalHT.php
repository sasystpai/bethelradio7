<?php

/**
* 
*/
include_once('../Vistas/Pagina.php');
class Principal extends Pagina
{
	
	function MostrarPrincipal($entradas)
	{
		
		// echo $r=mysql_num_rows($entradas);
		// while($r=mysql_fetch_array($entradas)){
		// 	echo $r[0]."<br/>";
		// }

		  $titulo="La Hora de la Transformación";
          $this->MostrarEncabezado($titulo);         //no cierra el head                    

          $fondo="fondo-nosotros";                   //Aqu{i se puede agregar css y script
          $this-> MostrarMenu($fondo,"Música");               //Cierra el head y abre el body
         
         // $this-> MostrarPresentacion($entradas);

       //    $this->MostrarSlider();
       //    $this->MostrarBotonesAcceso($programa_actual);
       //    $this->MostrarNuestrosProgramas();

       //    $this->MostrarNoticias($entradas);
          
       //    $this->MostrarRedesSociales();

	         $this->MostrarFoot();

	}
}

?>