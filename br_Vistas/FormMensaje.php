<?php
	
	/**
	* 
	*/
	require_once('Pagina.php');
	class FormMensaje extends Pagina
	{
		
		function __construct()
		{
			# code...
		}

	    function MostrarMensaje_0($mensaje,$programa_actual){

	            $titulo="Bethel Radio: Mensaje";
	            $this->MostrarEncabezado($titulo);         //no cierra el head                    

	            $fondo="fondo-nosotros";                   //Aqu{i se puede agregar css y script
	            $this->MostrarMenu($fondo,$programa_actual);               //Cierra el head y abre el body
	            
	           // $this->MostrarSlider();
	           //$this->MostrarBotonesAcceso();
	           // $this->MostrarNuestrosProgramas();

	           // $this->MostrarNoticias($entradas);

	            $this->MostrarMensaje_error($mensaje);
	            
	            $this->MostrarRedesSociales();

	            $this->MostrarFoot();

	    }

	    	    function MostrarMensaje_1($mensaje,$programa_actual){

	            $titulo="Bethel Radio: Mensaje";
	            $this->MostrarEncabezado($titulo);         //no cierra el head                    

	            $fondo="fondo-nosotros";                   //Aqu{i se puede agregar css y script
	            $this->MostrarMenu($fondo,$programa_actual);               //Cierra el head y abre el body
	            
	           // $this->MostrarSlider();
	           //$this->MostrarBotonesAcceso();
	           // $this->MostrarNuestrosProgramas();

	           // $this->MostrarNoticias($entradas);

	            $this->MostrarMensaje_exito($mensaje);
	            
	            $this->MostrarRedesSociales();

	            $this->MostrarFoot();

	    }
	}

?>