<?php

include_once("../includes/Pagina.php");
class FormMenuUsuario extends Pagina{
  
  public function MostrarMenu($privilegios)
  {
    
?>

<head>
  <link rel="stylesheet" type="text/css" href="../includes/dist/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../includes/dist/css/bootstrap-theme.css">
</head> 
  <body>
    <div class="container">

      <div class="row encabezado">
        <div class="col-md-4">
          <p class="text-center"><?php echo(date("d/m/Y H:i"))?></p>
        </div>
        <div class="col-md-4">
          <p class="text-center">Usuario: <?php echo($_SESSION['username'])?></p>
        </div>
        <div class="col-md-4">
          <p class="text-center"><a href="../includes/RequestSalir.php">Salir</a>
          </p> 
        </div>
      </div>


<div class="row">
  <div class="col-md-6 col-md-offset-3">
    
    <div class="clearfix">
      <table class="table table-hover text-center">
      <thead>
        <tr>
       
      <th>Lista de Privilegios</th>
        
      </tr>
      </thead>
      <tbody>
  <?php
  $rows=count($privilegios);
    //echo "->".$rows;
    for($i=0; $i<$rows;$i++)
    {   
    ?>

        <tr>
          <td>
    <a href="<?php echo $privilegios[$i][1]?>">
            <?php echo utf8_encode($privilegios[$i][0])?>
    </a>
          </td>
        </tr>
  <?php     
    }
  ?>
      </tbody>
    </table>
    ========================================
    </div><!--fin de clear-->
  </div>
</div><!--fin de fila-->
  </div><!--fin de class container-->
  </body>



    <?php
    }


function MostrarMenu2 ($privilegios){

  $this->MostrarEncabezado(0);
  
?>
 
<?php
  $rows=count($privilegios);
    //echo "->".$rows;
    for($i=0; $i<$rows;$i++)
    {   
    ?>       
     <li>
      <a class="ajax-link" href="<?php echo $privilegios[$i][1]?>">
        <i class="icon-chevron-right"></i>
          <span class="hidden-tablet"> <?php echo utf8_encode($privilegios[$i][0])?>
          </span>
      </a>
      </li>    
        
  <?php     
    }
    $this->MostrarPie();
  ?>          

<?php

  }//fin de function FormMenu2

}//fin de class
?>
      

     