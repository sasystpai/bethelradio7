<meta charset="utf-8"> 
<?php

if( !isset($_FILES['archivo']) ){
  echo 'Ha habido un error, tienes que elegir un archivo<br/>';
  echo '<a href="index.html">Subir archivo</a>';
}else{
 
  include_once('../ModuloAdministrador/controles/ControlSubirImagen.php');
  $OBJSubirImagen = new ControlSubirImagen;
  $OBJSubirImagen -> ControlSubirImagen();
}
//- See more at: http://www.enricflorit.com/como-subir-archivos-al-servidor-con-php/#sthash.W2lhJVcP.blRRgYJL.dpuf


?>