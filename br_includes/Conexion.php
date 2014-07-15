<?php
	
include_once('DatosCn.php');
class Conexion extends DatosCn
{
	
	function ConectarDB()
	{
		
		$cn=mysql_connect(DatosCn::server,DatosCn::user,DatosCn::pass) or die('error en cn');
			$db = mysql_select_db(DatosCn::Db) or die('error en Db');

		return $cn;	

	}

	

	function CerrarConexion($cn,$datos){

		mysql_close($cn);

		mysql_free_result($datos);

	}
}

?>