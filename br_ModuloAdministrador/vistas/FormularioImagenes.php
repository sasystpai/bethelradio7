<meta charset="utf-8">
<?php
/**
* 
*/
include_once('../includes/Pagina2.php');
class FormularioImagenes extends Pagina2
{
	
	function MostrarFormularioImagenes($imagenes,$privilegios)
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
		/////////////////////////////////////////////////////////////////
	?>
	

		<br/>
		<br/>
		<div class="row">
		  

		  <div class="col-md-10 col-md-offset-1">
		<div class="alert alert-warning">
		    
		    <div class="clearfix">
		      <div class="form-inline">
		      	<div class="form-group">
		      		<h2>Galería de imágenes</h2>
		       	</div>
		       	<div class="form-group">
		      		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-sm btn-warning" href="IndexSubirImagen.php">Añadir Nueva Imagen</a>	
		       	</div>
		      </div>
		     <br/>
		     <br/>
		      <div class="opciones-entradas right">  
		            <!-- <input type="buttom" class="btn-xs btn-success" value="Publicar"/>
		            <input type="buttom" class="btn-xs btn-info" value="Editar"/> -->
		            <button class="btn btn-success  btn-sm">Publicar</button>
		            <button class="btn btn-info     btn-sm">Editar</button>
		            <button class="btn btn-warning btn-sm">Borrador</button>
		            <button class="btn btn-danger   btn-sm">Eliminar</button>
		            <!-- <input type="buttom" class="btn-xs btn-warning" value="Borrador"/>
		            <input type="buttom" class="btn-xs btn-danger" value="Eliminar"/> -->
		      </div>

		      <table class="table table-hover table-striped text-left entradas">
		      <thead>
		        <tr>
		      	
			      	<th>Ítem</th>
			      	<th>Id_archivo</th>
			      	<th>Nombre</th>
			      	<th>Tamaño</th>
		          <th>Dimensiones</th>
		        
		      	</tr>
		      </thead>
		      <tbody>
		      <tr>
		      </tr>
		  <?php
		  if($imagenes!=0){

		    $i=0;
		      while($row=mysql_fetch_array($imagenes)){
		        //echo "->".$rows;
		        $i++;
		        $cod=$row['id_entrada'];
		        $cod1=serialize($cod);
		        $cod2=base64_encode($cod1);
		        ?>
		            <tr>
		            <td><?php echo $i?></td>
		            <td>asd</td>


		              <td>
		        <a href="../ModuloAdministrador/GetVerEntrada.php?var=<?php echo $cod2?>">
		                <button class="btn btn-link" name="ver_entrada"> 
		                <?php echo utf8_encode($row['titulo'])?>
		                </button>
		        </a>
		              </td>


		              <td><?php echo utf8_encode($row['descripcion'])?></td>
		              <td><input type="checkbox"></td>

		            </tr>
		      <?php     
		        }//fin de while
		    }//fin de if

		     elseif ($imagenes==0) {
		        # code...
		   ?>
		    
		    <tr>
		            <th colspan="5"><?php echo "no hay imagenes en la galería"?></th>
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


	<?php
		////////////////////////////////////////////////////////////////
		$this->MostrarPie();
	}
}

?>
		<!-- <head>
		<meta charset="utf-8">
  		<link rel="stylesheet" type="text/css" href="../includes/dist/css/bootstrap.css">
  		<link rel="stylesheet" type="text/css" href="../includes/dist/css/bootstrap-theme.css">
		</head>
  <body>
    <div class="container">
    <br/>
    <br/>
    <div class="row">
    	<div class="col-md-6 col-md-offset-3">
    		<h1> Subir Imagen</h1>
    		<br/>
    		<br/>
    		<!-- <form class="form-inline" role="form">
  				<div class="form-group has-success has-feedback">
			    	<label class="control-label" for="inputSuccess4">Input with success</label>
			    	<input type="text" class="form-control" id="inputSuccess4">
			    	<span class="glyphicon glyphicon-ok form-control-feedback"></span>
			  	</div>
			</form>
			<div class="123">
				<form role="form-inline" enctype="multipart/form-data" method="post" action="../ModuloAdministrador/GetSubirImagen.php">
					  <div class="form-group">
					    <label for="exampleInputFile">Elija archivo</label>
					    <input type="file" id="exampleInputFile" name="archivo">
					    <p class="help-block">Formatos: .jpg, .png, .gif</p>
					  </div>
					  <!-- <div class="checkbox">
					    <label>
					      <input type="checkbox"> Check me out
					    </label>
					  </div> 
					  <div class="form-group">
					    <label for="exampleInputEmail1">Tags</label>
					    <p class="help-block">Ejemplo: union civil, mercado, congreso, combi</p>
					    <input type="text" class="form-control">
					  </div>
					 <!--  <div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					  </div> 
					  <button type="submit" class="btn btn-primary">Enviar</button>
				</form>
			</div>
    	</div>
    </div>
    </div>
</body> -->