<?php
 
if(isset($_POST['submit']))
 
{
 
$name  = $_POST['name'];
$color = $_POST['favcolor'];
$fecha1= $_POST['fecha1'];
$fecha2= $_POST['fecha2'];
$fecha3= $_POST['bdaytime'];
$security=$_POST['security'];
 
echo "nombre      			: <b> $name </b>";
echo "<br>color   			: <b> $color</b>";
echo "<br>date    			: <b> $fecha1</b>";
echo "<br>datetime  		: <b> $fecha2</b>";
echo "<br>datetime-local   	: <b> $fecha3</b>";
echo "<br>seguridad   		: <b> $security</b>";
 
}
 
?>
 
<?php date_default_timezone_set('America/Lima');
		$hora = gettimeofday(true);

		echo $h=date("Y-m-d", $hora);
		?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 
<input type="text" title="Se necesita un nombre luis" name="name" required><br>

<input type="color" name="favcolor"><br>

<input type="date" name="fecha1" required ><br>

<input type="datetime" name="fecha2"><br>

<input type="datetime-local" name="bdaytime"><br>
    encriptacion: <keygen name="security"><br>
 
<input type="submit" name="submit" value="Submit Form"><br>
 
</form>

<meter min="0" max="120" value="80">
            <span>1/3 luis</span>
    </meter>

    <progress value="60" max="100">
             <span id="descargando">60</span>%
    </progress>
