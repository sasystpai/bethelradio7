<?php

mysql_connect("localhost","root","") or die('no hay conexion');
mysql_select_db("bethelradio") or die('no hya database');

$consulta="SELECT * FROM categoria order by id_categoria";
$resultado=mysql_query($consulta);



?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<div class="container">
	<div class="row">
		<div class="col-md-5">
		<form method="post" action="seleccionado.php"> 
			
<select name="categoria" class="form-control">
<?php 
	while($categoria=mysql_fetch_array($resultado)){
?>
	<option value="<?php echo $categoria['id_categoria']?>"><?php echo utf8_encode($categoria['descripcion']) ?></option>
	<?php }?>

	<input type="submit" class="btn btn-warning" value="enciar"/>

</select>

		</form>
		</div>
	</div>
</div>