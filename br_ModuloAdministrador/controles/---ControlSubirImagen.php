<head>
			<meta charset="utf-8">
  			<link rel="stylesheet" type="text/css" href="../includes/dist/css/bootstrap.css">
  			<link rel="stylesheet" type="text/css" href="../includes/dist/css/bootstrap-theme.css">
			</head>

  		<body>
    	<div class="container">      

<?php

class ControlSubirImagen
{
	
	function ControlSubirImagen()
	{
		
		  $nombre = $_FILES['archivo']['name'];
		  $nombre_tmp = $_FILES['archivo']['tmp_name'];
		  $tipo = $_FILES['archivo']['type'];
		  $tamano = $_FILES['archivo']['size'];
		 
		  $ext_permitidas = array('jpg','jpeg','gif','png');
		  $partes_nombre = explode('.', $nombre);
		  $extension = end( $partes_nombre );
		  $ext_correcta = in_array($extension, $ext_permitidas);
		 
		  $tipo_correcto = preg_match('/^image\/(pjpeg|jpeg|gif|png)$/', $tipo);
		 
		  $limite = 4000*1024; //4 mb
			      
			      ?>
			      
			      <div class="alert alert-warning">
			      <?php
		  if( $ext_correcta && $tipo_correcto && $tamano <= $limite )
		  {
			    if( $_FILES['archivo']['error'] > 0 ){
			      echo 'Error: ' . $_FILES['archivo']['error'] . '<br/>';
			    }
			    else{
			      		echo 'Nombre: ' . $nombre . '<br/>';
			      		echo 'Tipo: ' . $tipo . '<br/>';
			      		echo 'Tamaño: ' . ($tamano / 1024) . ' Kb<br/>';
			     		echo 'Guardado en: ' . $nombre_tmp;

					      if( file_exists( 'imagenes/'.$nombre) ){
					        echo '<br/>El archivo ya existe: ' . $nombre;
					      }
					      else{
					        move_uploaded_file($nombre_tmp,"../imagenes/" . $nombre);
					        echo "<br/>Guardado en: " . "imagenes/" . $nombre;
					      }

			    }//fin de else
		  }//fin de primer if
		  else{
		    echo 'Archivo inválido';
		  }
				    ?> 
				    </div><!--fin de alert-->
				    <?php

	}//fin de metodo
}//fin de clase


?>

</div><!--fin de container-->
			 </body><!--fin de body-->