<?php
/**
* 
*/
class Pagina2
{
	
	function MostarEncabezado()
	{
		?>
	<!DOCTYPE html>
		<html lang="es">
		<head>
			<title>Administracion de BethelRadio</title>
<meta charset="utf-8">
<script src="../br_includes/dist/js/jquery-1.9.1.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">			

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../br_includes/dist/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="../br_includes/dist/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="../includes/css/estilos-bethelradio.css">

<link rel="shortcut icon" href="br_includes/img/logo.png">

<!-- Latest compiled and minified JavaScript 
<script src="../includes/dist/js/bootstrap.min.js"></script>
<script>window.jQuery || document.write('<script src="../includes/dist/js/bootstrap.js"><\/script>') </script>
-->



		<?php
	}

	function MostrarMenu($privilegios){

		?>
		</head>
		<body>
		<div class="container">
			
      <div class="row">
				
		<div class="col-md-12">
			


		<div class="bs-example">
    <nav id="navbar-example" class="navbar navbar-default navbar-static" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">BethelRadio - Administración Web</a>
          <a class="navbar-brand" target="_blank"  href="../">Ver Web</a>
          <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-example-js-navbar-collapse">
            <span class="sr-only">Menú</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse bs-example-js-navbar-collapse collapse" style="height: 1px;">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a id="drop1" href="#" role="button" class="dropdown-toggle  redaccion" data-toggle="dropdown">Menú<b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                <!-- <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Todas las Entradas</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Nueva Entrada</a></li> -->
                	
                <?php
                  $rows=count($privilegios);
                  for($i=0;$i<$rows;$i++){
	             ?>
	                <li role='presentation'><a role='menuitem' tabindex='-1' href=<?php echo $privilegios[$i][1] ?>><?php echo utf8_encode($privilegios[$i][0])?></a></li>
	             <?php
	                }
                ?>
               <!--  
                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Something else here</a></li>
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Separated link</a></li> -->
              </ul>
            </li>
            <!-- <li class="dropdown">
              <a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown">Dropdown 2 <b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Action</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Another action</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Something else here</a></li>
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Separated link</a></li>
              </ul>
            </li> -->
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li id="fat-menu" class="dropdown">
              <a href="#" id="drop3" role="button" class="dropdown-toggle redaccion" data-toggle="dropdown"><?php echo utf8_encode($_SESSION['username'])?><b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Datos Personales</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="../includes/RequestSalir.php">Salir</a></li>
                <!-- <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Something else here</a></li>
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Separated link</a></li> -->
              </ul>
            </li>
          </ul>
        </div><!-- /.nav-collapse -->	
      </div><!-- /.container-fluid -->
    </nav> <!-- /navbar-example -->
  </div><!-- fin de div example-->
</div><!-- fin de col-->
</div><!-- fin de row-->
		<?php
	}

	function MostrarPie(){

		?>
<div class="row">
<br/>
	<div class="col-md-10 col-md-offset-2">
		<footer>
			<p class="small redaccion">&reg;BethelRadio.fm,  <?php echo date('M-Y')?> | Panel de administración</p>
		</footer>
		
	</div>
</div>

</div><!-- fin de class container-->
		<script src="../br_includes/dist/js/bootstrap.min.js"></script>
<script>window.jQuery || document.write('<script src="../br_includes/dist/js/bootstrap.js"><\/script>') </script>

		</body>
		</html>	


		<?php
	}

  function ValidarTexto($texto){

   //compruebo que el tamaño del string sea válido. 
   if (strlen($texto)<3 || strlen($texto)>20){ 
      //echo $usuario . " no es válido<br>"; 
      return false; 
   } 

   //compruebo que los caracteres sean los permitidos 
   $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789_-"; 
   for ($i=0; $i<strlen($texto); $i++){ 
      if (strpos($permitidos, substr($texto,$i,1))===false){ 
         //echo $usuario . " no es válido<br>"; 
         return false; 
      }//fin de if 
   } //echo $usuario . " es válido<br>"; 
   return true; 

  }

   function ValidarEmail($email){ 
    $mail_correcto = 0; 
    //compruebo unas cosas primeras 
    if ((strlen($email)>=6) && (substr_count($email,"@") == 1) && (substr_count($email,".") <= 3) &&(substr($email,0,1) != "@") && (substr($email,strlen($email)-1,1) != "@")){ 
         if ((!strstr($email,"'")) && (!strstr($email,"\"")) && (!strstr($email,"|")) && (!strstr($email,"\\")) && (!strstr($email,"\$")) && (!strstr($email," "))) { 
           //miro si tiene caracter . 
           if (substr_count($email,".")>= 1){ 
               //obtengo la terminacion del dominio 
               $term_dom = substr(strrchr ($email, '.'),1); 
               //compruebo que la terminación del dominio sea correcta 
               if (strlen($term_dom)>1 && strlen($term_dom)<5 && (!strstr($term_dom,"@")) ){ 
                 //compruebo que lo de antes del dominio sea correcto 
                 $antes_dom = substr($email,0,strlen($email) - strlen($term_dom) - 1); 
                 $caracter_ult = substr($antes_dom,strlen($antes_dom)-1,1); 
                 if ($caracter_ult != "@" && $caracter_ult != "."){ 
                     $mail_correcto = 1; 
                  } 
               } 
           } 
         } 
    } 
    if ($mail_correcto) 
         return true; 
    else 
         return false; 
}

  function Comprobar_numero_movil($movil,$operador)
  {

    //echo $operador."<br/>".$movil;
    
    if($operador>=1 && $operador<=3)
    {
      //este codigo lo saque de: http://www.codigonexo.com/blog/cajon-de-sastre/expresion-regular-para-numeros-de-telefono/
      $expresion = ('/^[9|8][0-9]{8}$/'); 
    }

    elseif ($operador==4) {
      //este codigo lo saque de: http://techtastico.com/post/8-expresiones-regulares-para-php-muy-utiles/
      $expresion=('/^[#|*]?[0-9]{6}$/');
    }

    elseif ($operador==5) {
      ///^(\(?[0-9]{3,3}\)?|[0-9]{3,3}[-. ]?)[ ][0-9]{3,3}[-. ]?[0-9]{4,4}$/
      $expresion=('/^[0-9]{3}?[*]?[0-9]{4}$/');
    }
    
    else $expresion='/^[^0][0-9]{4,8}$/';

    if(preg_match($expresion, $movil))
    { return 1; }
    else{ return 0; } 

  }

}//fin de class
?>