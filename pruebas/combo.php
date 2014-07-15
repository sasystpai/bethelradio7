<?php

mysql_connect("localhost","root","") or die('no conexion');
mysql_select_db("untecs") or die("no hay db");

echo "hola";
$consulta1= "SELECT * from ciclos";
$ciclos = mysql_query($consulta1);

$consulta2= "SELECT * from cursos";
$cursos = mysql_query($consulta2);
?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<select class="form-control" name="cursos">
				<?php while($ciclo=mysql_fetch_array($ciclos))
				{?>
				<optgroup label="<?php echo $ciclo['descripcion']?>">
					<option value="0">Elija una categoria</option>
					<?php while($curso = mysql_fetch_array($cursos)){?>
					<option value="<?php echo $curso['id']?>"><?php echo $curso['descripcion']?></option>
					<?php }?>
				</optgroup>
				<?php }?>
			</select>
		</div>
	</div>
<!-- ///////////////////////////////////////////////////////////-->
	<div class="row">
		<div class="col-md-6">
<select class="form-control" name="cursos">
<?php
//$sql_model = "SELECT asset_types.AssetType, models.AssetTypeID, models.Model FROM asset_types INNER JOIN models ON asset_types.AssetType = models.AssetTypeID ORDER BY AssetType, Model";
$sql_model ="SELECT Cl.descripcion as descripcion_ciclo, C.descripcion as descripcion_curso, C.id_seccion FROM  ciclos Cl INNER JOIN cursos C ON Cl.id=C.id_seccion";
//$sql_model = "SELECT S.descripcion as descripcion_seccion, C.descripcion as descripcion_categoria, C.id_seccion FROM secciones S INNER JOIN categorias C ON "
$result_model = mysql_query($sql_model);
$group_model = array();
while ($row_model = mysql_fetch_assoc($result_model))
{
$group_model[$row_model['descripcion_ciclo']][] = $row_model;
}
?>
<optgroup label="Sin catgoria">
	<option value="0">Elija una categoria</option>
</optgroup>
<?php
foreach ($group_model as $key => $values)
{
	?>
<optgroup label="<?php echo $key ?>">
	<?php
foreach ($values as $value) 
{
	?>
<option value="<?php echo $value['id_seccion']?>"> 
	<?php echo $value['descripcion_curso']?> 
</option>
	<?php
}

?>
</optgroup>
<?php
}
?>
</select>
		</div>
	</div>
</div>