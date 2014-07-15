<?php

/**
* 
*/
include_once('../includes/Pagina2.php');
class FormularioCategorias extends Pagina2
{
	
	function MostrarFormularioCategorias($categorias,$privilegios)
	{
		    ?>
<br/>
<br/>
    <?php
$this->MostarEncabezado();

  ?>
  
<!-- desahbilitar la cache-->

<meta http-equiv="Expires" content="0" />
<meta http-equiv="Pragma" content="no-cache" />


<script type="text/javascript">
{
if(history.forward(1))
location.replace(history.forward(1))
}
</script>

  <?php

$this->MostrarMenu($privilegios);
?>

<br/>
<br/>
<div class="row">
  

  <div class="col-md-10 col-md-offset-1">
<div class="alert alert-warning">
    
    <div class="clearfix">
      <div class="form-inline">
      	<div class="form-group">
      		<h2>Categorías</h2>
       	</div>

       	<div class="form-group">
      		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-sm btn-warning" href="IndexNuevaCategoria.php">Añadir Nueva Categoría</a>	
       	</div>
      </div>
  <br/>
  <br/>

      <table class="table table-hover table-striped text-left entradas">
      <thead>
        <tr>
      	
	      	<th>Ítem</th>
          <th width="100">Sección</th>
          <th width="50">Estado sección</th>
	      	<th width="250">Categoría</th>
          <th width="50">Estado categoría</th>
          <th width="150">Acciones</th>

        
      	</tr>
      </thead>
      <tbody>
      <tr>
      </tr>
  <?php
  if($categorias!=0){

    $i=0;
      while($row=mysql_fetch_array($categorias)){
        //echo "->".$rows;
        $i++;
        $cod=$row['id_categoria'];
        $cod1=serialize($cod);
        $cod2=base64_encode($cod1);

        if ($row['estado_sec']==0) {
        	$estado_sec="Deshabilitado";
        }

        else $estado_sec = "Habilitado";

        if ($row['estado_cat']==0) {
            $estado_cat = "Deshabilitado";
        }
        else $estado_cat = "Habilitado";
        ?>
            <tr>
            <td><?php echo $i?></td>
            <td><?php echo utf8_encode($row['descripcion_seccion'])?></td>
            <td><?php echo $estado_sec?></td>
            <td><?php echo utf8_encode($row['descripcion_categoria'])?></td>
            <td><?php echo $estado_cat?></td>
            <td>

            <form method="POST" action="../ModuloAdministrador/GetEstadoCategoria.php"> 
              
              <input type="hidden" name="cod" value="<?php echo $cod2?>" />

              <button type="submit" name="publicar"     class="btn btn-success btn-xs"
                      data-toggle="tooltip" data-placement="top" title="Habilitar"> <span class="glyphicon glyphicon-ok" >          </span></button>
             
              <button type="submit" name="editar"       class="btn btn-info btn-xs"
                      data-toggle="tooltip" data-placement="top" title="Editar">    <span class="glyphicon glyphicon-edit">         </span></button>
              
              <button type="submit" name="despublicar"  class="btn btn-warning btn-xs"
                      data-toggle="tooltip" data-placement="top" title="Deshabilitar"> <span class="glyphicon glyphicon-question-sign"></span></button>
              
              <button type="submit" name="eliminar"     class="btn btn-danger btn-xs" 
                      onclick="return confirm('Está seguro que desea eliminar la categoría:\n -><?php echo utf8_encode($row['descripcion_categoria'])?>');"
                      data-toggle="tooltip" data-placement="top" title="Eliminar">  <span class="glyphicon glyphicon-trash"></span></button>
            </form>
            
            </td>

            </tr>
      <?php     
        }//fin de while
    }//fin de if

     elseif ($categorias==0) {
        # code...
   ?>
    
    <tr>
            <th colspan="4"><?php echo "no hay categorías"?></th>
    </tr>
   <?php
  
      } 



  ?>
      </tbody>
    </table>
    </div><!--fin de clear-->
  </div>
  </div><!-- fin de alert-->
</div><!--fin de fila-->
  <!--
  </div>fin de class container
  </body> 
  -->
    <?php
  $this->MostrarPie();


	}//fin de funcion
}//fin de clase

?>