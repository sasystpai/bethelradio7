<?php
/**
* 
*/
include_once('../includes/Pagina2.php');
class FormularioEntradas extends Pagina2{
	
	function MostrarFormularioEntradas($entradas,$privilegios)
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
      		<h2>Entradas</h2>
       	</div>
       	<div class="form-group">
      		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-sm btn-warning" href="IndexNuevaEntrada.php">Añadir Nueva</a>	
       	</div>
      </div>
     <br/>
     <br/>
      <div class="opciones-entradas right">  

      </div>

      <table class="table table-hover table-striped text-left entradas">
      <thead>
        <tr>
      	
	      	<th>Ítem</th>
	      	<th width="350">Entrada</th>
	      	<th width="250">Categoría</th>
          <th width="150">Estado</th>
          <th width="150">Acciones</th>

        
      	</tr>
      </thead>
      <tbody>
      <tr>
      </tr>
  <?php
  if($entradas!=0){

    $i=0;
      while($row=mysql_fetch_array($entradas)){
        //echo "->".$rows;
        $i++;
        $cod=$row['id_entrada'];
        $cod1=serialize($cod);
        $cod2=base64_encode($cod1);
        ?>
            <tr>
            <td><?php echo $i?></td>
            <td><?php echo utf8_encode($row['titulo'])?></td>
            <td><?php echo utf8_encode($row['descripcion'])?></td>
            <td><?php echo $row['estado']?></td>
            <td>

            

            <form method="POST" action="../ModuloAdministrador/GetEstadoEntrada.php"> 
              
              <!-- <a class="btn btn-success btn-xs" name="publicar" href="../ModuloAdministrador/GetEstadoEntrada.php?var=<?php echo $cod2?>">
                <span class="glyphicon glyphicon-ok" ></span></a>
              <a class="btn btn-info btn-xs"    href="../ModuloAdministrador/GetEditarEntrada.php?var=<?php echo $cod2?>">
                <span class="glyphicon glyphicon-edit"></span></a>
              <a class="btn btn-warning btn-xs" href="../ModuloAdministrador/GetEstadoEntrada.php?var=<?php echo $cod2?>">
                <span class="glyphicon glyphicon-question-sign"></span></a>
              <a class="btn btn-danger btn-xs" href=""><span class="glyphicon glyphicon-trash"></span></a> -->

              <input type="hidden" name="cod" value="<?php echo $cod2?>" />

              <button type="submit" name="publicar"     class="btn btn-success btn-xs"
                      data-toggle="tooltip" data-placement="top" title="Publicar"> <span class="glyphicon glyphicon-ok" >          </span></button>
             
              <button type="submit" name="editar"       class="btn btn-info btn-xs"
                      data-toggle="tooltip" data-placement="top" title="Editar">    <span class="glyphicon glyphicon-edit">         </span></button>
              
              <button type="submit" name="despublicar"  class="btn btn-warning btn-xs"
                      data-toggle="tooltip" data-placement="top" title="Despublicar"> <span class="glyphicon glyphicon-question-sign"></span></button>
              
              <button type="submit" name="eliminar"     class="btn btn-danger btn-xs" 
                      onclick="return confirm('Está seguro que desea eliminar la entrada:\n -><?php echo utf8_encode($row['titulo'])?>');"
                      data-toggle="tooltip" data-placement="top" title="Eliminar">  <span class="glyphicon glyphicon-trash"></span></button>
            </form>
            
            </td>

            </tr>
      <?php     
        }//fin de while
    }//fin de if

     elseif ($entradas==0) {
        # code...
   ?>
    
    <tr>
            <th colspan="4"><?php echo "no hay entradas"?></th>
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
	}//fin de método
}//fin de clase
?>