<?php

class ControlPrincipal
{
	function PaginaPrincipal(){
		include_once('br_Entidades/Entradas2.php');
		$OBJEntradas = new Entradas2;
		$datos=$OBJEntradas -> ObtenerUltimasEntradas();

		$entradas 		=   $datos[0];
		$programa_actual=	$datos[1];

		include_once('br_Vistas/FormPrincipal.php');
		$OBJPagina = new FormPrincipal;
		$OBJPagina -> MostrarFormPrincipal($entradas,$programa_actual);
	}

	function ObtenerProgramaActual(){
		include_once('br_Entidades/Entradas2.php');
		$OBJProgAct = new Entradas2;
		$programa_actual=$OBJProgAct -> ProgramaActual();

		return $programa_actual;
	}

	function PaginaConocenos(){

		$programa_actual=$this->ObtenerProgramaActual();

		include_once('br_Vistas/FormPrincipal.php');
		$OBJPagina = New FormPrincipal;
		$OBJPagina -> MostrarPaginaConocenos($programa_actual);
	}

	function PaginaProgramacion(){

		$programa_actual=$this->ObtenerProgramaActual();

		include_once('br_Vistas/FormPrincipal.php');
		$OBJPagina = New FormPrincipal;
		$OBJPagina -> MostrarPaginaProgramacion($programa_actual);
	}

	function PaginaFrecuencias(){

		$programa_actual=$this->ObtenerProgramaActual();

		include_once('br_Vistas/FormPrincipal.php');
		$OBJPagina = New FormPrincipal;
		$OBJPagina -> MostrarPaginaFrecuencias($programa_actual);
	}

	function PaginaProducciones(){

		//$programa_actual=$this->ObtenerProgramaActual();
		include_once('br_Entidades/Categorias2.php');
		$OBJPr = new Categorias2;
		$datos = $OBJPr -> ObtenerCategorias();

		$categoria 		= $datos[0]; 
		$programa_actual= $datos[1];

		include_once('br_Vistas/FormPrincipal.php');
		$OBJPagina = New FormPrincipal;
		$OBJPagina -> MostrarPaginaProducciones($categoria, $programa_actual);
	}

	function PaginaColabora(){

		$programa_actual=$this->ObtenerProgramaActual();

		include_once('br_Vistas/FormPrincipal.php');
		$OBJPagina = New FormPrincipal;
		$OBJPagina -> MostrarPaginaColabora($programa_actual);
	}

	function PaginaPeticionDeOracion(){

		$programa_actual=$this->ObtenerProgramaActual();

		include_once('br_Vistas/FormPrincipal.php');
		$OBJPagina = New FormPrincipal;
		$OBJPagina -> MostrarPaginaPeticionDeOracion($programa_actual);
	}

}

?>